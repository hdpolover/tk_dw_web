<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Participant extends RestController
{

  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('participant_model', 'participant');

    $this->methods['index_get']['limit'] = 1000;
  }

  public function generateQrCode($id)
  {
    $data = isset($_GET['data']) ? $_GET['data'] : $id;
    $size = isset($_GET['size']) ? $_GET['size'] : '300x300';
    $logo = isset($_GET['logo']) ? $_GET['logo'] : './assets/img/logo.png';

    //header('Content-type: image/png');
    // Get QR Code image from Google Chart API
    // http://code.google.com/apis/chart/infographics/docs/qr_codes.html
    $QR = imagecreatefrompng('https://chart.googleapis.com/chart?cht=qr&chld=H|0&chs=' . $size . '&chl=' . urlencode($data));
    if ($logo !== FALSE) {
      $logo = imagecreatefromstring(file_get_contents($logo));

      $QR_width = imagesx($QR);
      $QR_height = imagesy($QR);

      $logo_width = imagesx($logo);
      $logo_height = imagesy($logo);

      // Scale logo to fit in the QR Code
      $logo_qr_width = $QR_width / 3;
      $scale = $logo_width / $logo_qr_width;
      $logo_qr_height = $logo_height / $scale;

      imagecopyresampled($QR, $logo, $QR_width / 3, $QR_height / 3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
    }
    imagepng($QR, "./assets/img/qr_codes/" . $id . ".png");
    imagedestroy($QR);
  }

  public function index_get()
  {
    // code...
    $id = $this->get('id_participant');
    if ($id === NULL) {
      // code...
      $participant = $this->participant->get_participant();
    } else {
      // code...
      $participant = $this->participant->get_participant($id);
    }

    if ($participant) {
      // code...
      $this->response([
        'status' => true,
        'data' => $participant
      ],  RestController::HTTP_OK);
    } else {
      // code...
      $this->response([
        'status' => false,
        'message' => 'id not found'
      ],  RestController::HTTP_NOT_FOUND);
    }
  }

  public function index_post()
  {
    $now = new DateTime();
    $id = $this->post('id_participant');

    $this->generateQrCode($id);

    $file_name = $id . '.png';
    // code...
    $data = [
      'id_participant' => $id,
      'email' => $this->post('email'),
      'id_summit' => $this->post('id_summit'),
      'qr_code' => $file_name,
      'status' => 0,
      'is_fully_funded' => 0,
      'created_date' => $now->format('Y-m-d H:i:s'),
    ];

    $res = $this->participant->register($data);
    $participant = $this->participant->get_participant($id);

    if ($res > 0) {
      // code...
      $this->response([
        'status' => true,
        'data' => $participant,
        'message' => 'participant details added'
      ],  RestController::HTTP_CREATED);
    } else {
      // code...
      $this->response([
        'status' => false,
        'message' => 'failed to register'
      ],  RestController::HTTP_BAD_REQUEST);
    }
  }

}
