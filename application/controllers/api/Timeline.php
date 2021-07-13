<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Timeline extends RestController
{

  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('timeline_model', 'timeline');
  }

  public function index_get()
  {
    // code...
    $id = $this->get('id_summit_timeline');
    if ($id === NULL) {
      // code...
      $timeline = $this->timeline->get_all();
    } else {
      // code...
      $timeline = $this->timeline->get_by_id($id);
    }

    if ($timeline) {
      // code...
      $this->response([
        'status'=> true,
        'data' => $timeline
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
