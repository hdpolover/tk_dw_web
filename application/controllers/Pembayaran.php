<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Pembayaran_model', 'pembayaran');
      //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Data Pembayaran Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['pembayaran'] = $this->pembayaran->getPembayaran();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pembayaran/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($id)
  {
    // code...
    $data['title'] = 'Detail Pembayaran Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['pembayaran'] = $this->pembayaran->getPembayaranById($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('pembayaran/detail', $data);
    $this->load->view('templates/footer');
  }
}
