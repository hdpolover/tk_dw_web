<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      is_logged_in();
      $this->load->model('participant_model', 'participant');
  }


  public function index()
  {
    // code...
    $data['title'] = 'Dashboard';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['participant_total'] = $this->participant->get_participant_total_count();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer', $data);
  }
}
