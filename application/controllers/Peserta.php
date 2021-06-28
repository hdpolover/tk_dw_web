<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller{

  public function index()
  {
    // code...
    $data['title'] = 'Data Peserta';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('peserta/index', $data);
    $this->load->view('templates/footer', $data);
  }
}
