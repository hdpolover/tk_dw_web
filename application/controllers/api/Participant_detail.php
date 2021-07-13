<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Participant_detail extends RestController
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
      $participant = $this->participant->get_participant_detail();
    } else {
      // code...
      $participant = $this->participant->get_participant_detail($id);
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
    $param = $this->post();
    $id = $param['id_participant'];

    $file = $this->upload_image();
    // code...
    $data = [
      'id_participant' => $this->post('id_participant'),
      'photo' => $file,
      'full_name' => $param['full_name'],
      'birthdate' => $param['birthdate'],
      'gender' => $param['gender'],
      'address' => $param['address'],
      'nationality' => $param['nationality'],
      'occupation' => $param['occupation'],
      'field_of_study' => $param['field_of_study'],
      'institution' => $param['institution'],
      'emergency_contact' => $param['emergency_contact'],
      'wa_number' => $param['wa_number'],
      'ig_account' => $param['ig_account'],
      'tshirt_size' => $param['tshirt_size'],
      'disease_history' => $param['disease_history'],
      'contact_relation' => $param['contact_relation'],
      'is_vegetarian' => $param['is_vegetarian'],
      'subtheme' => $param['subtheme'],
      'essay' => $param['essay'],
      'social_projects' => $param['social_projects'],
      'talents' => $param['talents'],
      'achievements' => $param['achievements'],
      'experiences' => $param['experiences'],
      'know_program_from' => $param['know_program_from'],
      'source_account_name' => $param['source_account_name'],
    ];

    $res = $this->participant->add_participant_details($data);
    $participant = $this->participant->get_participant_detail($id);

    if ($res > 0) {
      // code...
      $this->response([
        'status' => true,
        'data' => $participant,
        'message' => 'new participant registered'
      ],  RestController::HTTP_CREATED);
    } else {
      // code...
      $this->response([
        'status' => false,
        'message' => 'failed to register'
      ],  RestController::HTTP_BAD_REQUEST);
    }
  }

  function upload_image()
  {
    $newPath = './assets/profile/';
    if (!is_dir($newPath)) {
      mkdir($newPath, 0777, TRUE);
    }
    $config['upload_path'] = $newPath; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = FALSE; //Enkripsi nama yang terupload

    $this->load->library('upload', $config);

    if (!empty($_FILES['file']['name'])) {

      if ($this->upload->do_upload('file')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = $newPath . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = true;
        // $config['quality']= '100%';
        $config['width'] = 600;
        // $config['height']= 400;
        $config['new_image'] = $newPath . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];

        return base_url('/assets/profile/' . $gambar);
      }
    } else {
      return base_url('/assets/profile/default.png');
    }
  }
}
