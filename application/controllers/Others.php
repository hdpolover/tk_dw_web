<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Others extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('summit_model', 'summit');
  }

  public function index_summits()
  {
    // // code...
    $data['title'] = 'Summits';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['summits'] = $this->summit->get_summits();
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('others/summits', $data);
    $this->load->view('templates/footer');
    
  }

  public function add_new_summit() {
      // code...
    $data['title'] = 'Add New Summit';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

    
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('others/add_summit', $data);
      $this->load->view('templates/footer');
   
  }

  public function create_new_summit() {
      $desc = $this->input->post('desc');
      $regist_fee = $this->input->post('regist_fee');
      $program_fee = $this->input->post('program_fee');
      $status = $this->input->post('status');

    $summit_data = array(
        $desc, $regist_fee, $program_fee, $status
    );

    $this->summit->create($summit_data);

    $this->session->set_flashdata('message', '<div class ="alert alert-success" 
    style="text-align-center" role ="alert">
Congratulations! You successfully created a new summit.</div>');
    redirect('others/index_summits');
  }
}
