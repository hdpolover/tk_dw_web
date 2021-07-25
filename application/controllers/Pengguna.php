<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

  public function __construct()
  {
    // code...
    parent::__construct();
    is_logged_in();

    $this->load->model('user_model', 'user');
    $this->load->model('role_model', 'role');
  }

  public function index()
  {
    $data['title'] = 'TK DHARMA WANITA';
    $data['pengguna'] = $this->user->get_user();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar/sidebar_tu', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pengguna/index', $data);
    $this->load->view('templates/footer');
  }

  public function hapus_pengguna($id) {
    $this->pengguna->hapus($id);

    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengguna berhasil dihapus!</div>');
    redirect('pengguna');
  }

  public function tambah()
  {
      $data['title'] = 'TK DHARMA WANITA';
      $data['role'] = $this->role->get_role();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar/sidebar_tu', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('pengguna/tambah', $data);
      $this->load->view('templates/footer');
  }

  public function simpan()
  {
      $data = array(
          "USERNAME" => $this->input->post('username'),
          "PASSWORD" => $this->input->post('nip'),
          "ID_ROLE" => $this->input->post('role'),
      );

      $this->pengguna->simpan($data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna berhasil ditambahkan!</div>');
      redirect('pengguna');
  }

}
