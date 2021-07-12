<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Summit extends RestController
{

  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('summit_model', 'summit');
  }

  public function index_get()
  {
    // code...
    $id = $this->input->get('id_summit');
    if ($id === NULL) {
      // code...
      $summit = $this->summit->get_summits();
    } else {
      // code...
      $summit = $this->summit->get_where('summit', array('id_summit'=>$id));
    }

    if ($summit) {
      // code...
      $this->response([
        'status'=> true,
        'data' => $summit
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
