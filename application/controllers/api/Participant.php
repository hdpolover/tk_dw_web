<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

  public function index_get()
  {
    // code...
    $id = $this->get('id_participant');
    if ($id === NULL) {
      // code...
      $participant = $this->participant->get_participants();
    } else {
      // code...
      $participant = $this->participant->get_participant($id);
    }

    if ($participant) {
      // code...
      $this->response([
        'status'=> true,
        'data' => $participant
      ],  RestController::HTTP_OK);
    } else {
      // code...
      $this->response([
        'status'=> false,
        'message' => 'id not found'
      ],  RestController::HTTP_NOT_FOUND);
    }
  }

  public function index_post()
  {
    $now = new DateTime();
    $id = $this->post('id_participant');
    // code...
    $data = [
      'id_participant' => $id,
      'email' => $this->post('email'),
      'id_summit' => $this->post('id_summit'),
      'qr_code' => "none",
      'status' => 0,
      'is_fully_funded' => 0,
      'created_date' => $now->format('Y-m-d H:i:s'),
    ];
    
    $res = $this->participant->register($data);
    $participant = $this->participant->get_participant($id);
    
    if ($res > 0) {
      // code...
      $this->response([
        'status'=> true,
        'data'=> $participant,
        'message' => 'new participant registered'
      ],  RestController::HTTP_CREATED);
    }else {
      // code...
      $this->response([
        'status'=> false,
        'message' => 'failed to register'
      ],  RestController::HTTP_BAD_REQUEST);
    }
  }
}
