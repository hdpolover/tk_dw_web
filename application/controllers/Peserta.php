<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Peserta_model', 'peserta');
      //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Data Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    //$data['peserta'] = $this->Peserta_model->campurData();
    $data['peserta'] = $this->peserta->getPeserta();
    // if( $this->input->post('keyword') ) {
    //     $data['peserta'] = $this->Peserta_model->cariDataMahasiswa();
    // }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('peserta/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    // code...
    $data['title'] = 'Detail Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['peserta'] = $this->peserta->getPesertaById($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('peserta/detail', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {
    // code...
    $this->peserta->hapusPeserta($id);
    redirect('peserta');
  }

  public function tambah()
  {
    // code...
    $data['title'] = 'Form Tambah Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

    if ($this->input->post('summit') == NULL) {
      // code...
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('peserta/tambah', $data);
      $this->load->view('templates/footer');
    }else {
      // code...
      $this->peserta->tambahPeserta();
    }
  }
}
