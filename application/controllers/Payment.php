<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Payment_model', 'payment');
      //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Participant Payments';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['payment'] = $this->payment->get_payment();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('payment/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    // code...
    $data['title'] = 'Participant Payment Detail';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['payment'] = $this->payment->get_payment($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('payment/detail', $data);
    $this->load->view('templates/footer');
  }
}
