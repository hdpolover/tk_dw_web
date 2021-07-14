<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    // // code...
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      // code...
      $data['title'] = 'YBB Foundation';
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      // sukses
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    // code...

    $admin = $this->db->get_where('admins', ['username' => $username])->row_array();

    if ($admin) {
      // user aktif...
        // cek password...
        if ($password == $admin['password']) {
          // code...
          $data = [
            'username' => $admin['username'],
            'id_admin'=> $admin['id_admin'],
            'id_summit'=> $admin['id_summit'],
          ];
          $this->session->set_userdata($data);
          redirect('dashboard');
        }else {
          // code...
          $this->session->set_flashdata('message', '<div class = "alert alert-danger" role
          = "alert"> Wrong Password!</div>');
          redirect('auth');
        }
    }else {
      // code...
      $this->session->set_flashdata('message', '<div class = "alert alert-danger" role
      = "alert"> Admin not found!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    // code...
    $this->session->unset_userdata('username');

    $this->session->set_flashdata('message', '<div class = "alert alert-success" role
    = "alert"> You have been Logout!</div>');
    redirect('auth');
  }
}
