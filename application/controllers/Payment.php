<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('Payment_model', 'payment');
    $this->load->model('participant_model', 'participant');
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

  public function validate_payment($id)
  {
    $payment = $this->payment->get_payment($id);
    $id_payment_type = $payment[0]['id_payment_type'];
    $id_participant = $payment[0]['id_participant'];

    echo($id_payment_type);

    if ($id_payment_type == 1) {
      $status = 2;
    } else if ($id_payment_type == 2) {
      $status = 3;
    } else if ($id_payment_type == 3) {
      $status = 4;
    }

    $payment_data = array(
      'payment_status' => 1,
      'id_admin' =>  $this->session->userdata('id_admin'),
    );

    //update partcipant status
    $data = array(
      'status' => $status
    );

    $this->payment->update_payment($payment_data, $id);
    $this->participant->update_participant_status($data, $id_participant);

    $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Payment validation success!</div>');
    redirect('payment/index');
  }

  public function invalidate_payment($id)
  {
    $payment = $this->payment->get_payment($id);
    $id_payment_type = $payment[0]['id_payment_type'];
    $id_participant = $payment[0]['id_participant'];

    $status = 0;
    if ($id_payment_type == 1) {
      $status = 1;
    } else if ($id_payment_type == 2) {
      $status = 2;
    } else if ($id_payment_type == 3) {
      $status = 3;
    }

    $payment_data = array(
      'payment_status' => 1,
      'id_admin' =>  $this->session->userdata('id_admin'),
    );

    $id_participant = $payment['id_participant'];

    $data = array(
      'status' => $status
    );

    $this->payment->update_payment($payment_data, $id);
    $this->participant->update_participant_status($data, $id_participant);

    $payment_data = array(
      'payment_status' => 2,
      'id_admin' =>  $this->session->userdata('id_admin'),
    );

    $this->payment->update_payment($payment_data, $id);

    $this->session->set_flashdata('message', '<div class ="alert alert-danger" style="text-align-center" role ="alert"> Payment invalidation success!</div>');
    redirect('payment/index');
  }
}
