<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mahasiswa');

     $this->methods['index_get']['limit'] = 1000;
  }

  public function index_get()
  {
    // code...
    $id = $this->get('id');
    if ($id === NULL) {
      // code...
      $mahasiswa = $this->mahasiswa->getMahasiswa();
    } else {
      // code...
      $mahasiswa = $this->mahasiswa->getMahasiswa($id);
    }

    if ($mahasiswa) {
      // code...
      $this->response([
        'status'=> true,
        'data' => $mahasiswa
      ],  REST_Controller::HTTP_OK);
    } else {
      // code...
      $this->response([
        'status'=> false,
        'message' => 'id not found'
      ],  REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_delete()
  {
    // code...
    $id = $this->delete('id');

    if ($id === NULL) {
      $this->response([
        'status'=> false,
        'message' => 'provide an id'
      ],  REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if ($this->mahasiswa->deleteMahasiswa($id) > 0) {
        // success...
        $this->response([
          'status'=> true,
          'id' => $id,
          'message' => 'deleted'
        ],  REST_Controller::HTTP_NO_CONTENT);
      }else {
        //id not HTTP_NOT_FOUND
        $this->response([
          'status'=> false,
          'message' => 'id not found'
        ],  REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }

  public function index_post()
  {
    // code...
    $data = [
      'nrp' => $this->post('nrp'),
      'nama' => $this->post('nama'),
      'email' => $this->post('email'),
      'jurusan' => $this->post('jurusan')
    ];

    if ($this->mahasiswa->createMahasiswa($data) > 0) {
      // code...
      $this->response([
        'status'=> true,
        'message' => 'new mahasiswa created'
      ],  REST_Controller::HTTP_CREATED);
    }else {
      // code...
      $this->response([
        'status'=> false,
        'message' => 'failed to create'
      ],  REST_Controller::HTTP_BAD_REQUEST);
    }
  }
  public function index_put()
  {
    // code...
    $id = $this->put('id');
    $data = [
      'nrp' => $this->put('nrp'),
      'nama' => $this->put('nama'),
      'email' => $this->put('email'),
      'jurusan' => $this->put('jurusan')
    ];

    if ($this->mahasiswa->updateMahasiswa($data, $id) > 0) {
      // code...
      $this->response([
        'status'=> true,
        'message' => 'data mahasiswa updated'
      ],  REST_Controller::HTTP_NO_CONTENT);
    }else {
      // code...
      $this->response([
        'status'=> false,
        'message' => 'failed to updated data!'
      ],  REST_Controller::HTTP_BAD_REQUEST);
    }

  }
}

 ?>
