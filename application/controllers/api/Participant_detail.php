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

    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']      = '2048';
      $config['upload_path'] = './assets/img/profile/participants/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $data = [
          'id_participant' => $id,
          'photo' => $upload_image,
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
          'video_link' => $param['video_link'],
        ];

        $res = $this->participant->add_participant_details($data);
        $participant = $this->participant->get_participant_detail($id);

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
            'message' => 'failed adding participant details'
          ],  RestController::HTTP_BAD_REQUEST);
        }
      } else {
        echo $this->upload->display_errors();
      }
    } else {
      $this->response([
        'status' => false,
        'message' => 'failed to register'
      ],  RestController::HTTP_BAD_REQUEST);
    }
  }
}
