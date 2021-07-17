<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      is_logged_in();
      $this->load->model('Admin_model', 'admin');
      //$this->load->library('form_validation');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Data Admin';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['admins'] = $this->admin->get_admins();
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin_management/index', $data);
    $this->load->view('templates/footer');
  }

  public function add_new_admin()
  {
    // code...
    $data['title'] = 'Add New Admin';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

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
      redirect('peserta');
    }
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

  
}
