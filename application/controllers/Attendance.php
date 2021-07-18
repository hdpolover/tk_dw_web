<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Attendance extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Participant_model', 'participant');
    //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    //$data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    //$data['peserta'] = $this->Peserta_model->campurData();
    $data['participants'] = $this->participant->get_participants();
    // if( $this->input->post('keyword') ) {
    //     $data['peserta'] = $this->Peserta_model->cariDataMahasiswa();
    // }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('attendance/index', $data);
    $this->load->view('templates/footer');
  }

  
}
