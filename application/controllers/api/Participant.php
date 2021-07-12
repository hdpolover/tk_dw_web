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
      $participant = $this->participant->get_where('participants', array('id_participant'=>$id));
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
}

 ?>
