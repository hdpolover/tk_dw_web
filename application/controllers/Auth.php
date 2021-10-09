<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('pendaftaran_model', 'pendaftaran');
    $this->load->model('pembayaran_model', 'pembayaran');
    $this->load->model('rencana_pembelajaran_model', 'rencana_pembelajaran');
    $this->load->model('pembelajaran_model', 'pembelajaran');
  }

  public function index()
  {
    // // code...
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      // code...
      $data['title'] = 'TK DHARMA WANITA';
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

    $user = $this->db->get_where('user', ['USERNAME' => $username])->row_array();

    // jika usernya ada
    if ($user) {
      // cek password
      if ($password == $user['PASSWORD']) {
        $data = [
          'USERNAME' => $user['USERNAME'],
          'ID_ROLE' => $user['ID_ROLE'],
          'ID_USER' => $user['ID_USER'],
        ];

        $this->session->set_userdata($data);

        if ($user['ID_ROLE'] == 1) {
          $data['title'] = 'TK DHARMA WANITA';
          $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar/sidebar_tu', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('pendaftaran/index', $data);
          $this->load->view('templates/footer', $data);
        } else if ($user['ID_ROLE'] == 2) {
          $data['title'] = 'TK DHARMA WANITA';
          $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('rencana_pembelajaran/index', $data);
          $this->load->view('templates/footer', $data);
        } else if ($user['ID_ROLE'] == 3) {
          $data['title'] = 'TK DHARMA WANITA';
          $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar/sidebar_guru', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('pembelajaran/index', $data);
          $this->load->view('templates/footer', $data);
        } else if ($user['ID_ROLE'] == 4) {
          $data['title'] = 'TK DHARMA WANITA';
          $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar/sidebar_kepsek', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('rencana_pembelajaran/index_kepsek', $data);
          $this->load->view('templates/footer', $data);
        } else if ($user['ID_ROLE'] == 5) {
          $data['title'] = 'TK DHARMA WANITA';

          $nama = $this->session->userdata('USERNAME');
          $result = explode('_',$nama);
          $nama_ortu = strtoupper(str_replace('_', ' ', $result[0]));

          $data['pendaftaran'] = $this->pendaftaran->get_siswa_dari_ortu($nama_ortu);
          $data['pembayaran'] = $this->pembayaran->get_pembayaran_by_id_daftar($data['pendaftaran'][0]['ID_PENDAFTARAN']);

          $this->load->view('templates/header', $data);
          $this->load->view('templates/sidebar/sidebar_ortu', $data);
          $this->load->view('templates/topbar', $data);
          $this->load->view('pembayaran/index_ortu', $data);
          $this->load->view('templates/footer', $data);
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
      redirect('auth');
    }
  }

  public function logout()
  {
    // code...
    $this->session->unset_userdata('USERNAME');

    $this->session->set_flashdata('message', '<div class = "alert alert-success" role
    = "alert"> You have been Logout!</div>');
    redirect('auth');
  }
}
