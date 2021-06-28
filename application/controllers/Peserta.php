<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller{

  public function index()
  {
    // code...
    $data['title'] = 'Data Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('peserta/index', $data);
    $this->load->view('templates/footer', $data);
  }
}
