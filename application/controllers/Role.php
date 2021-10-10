<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('role_model', 'role');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['role'] = $this->role->get_role();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('role/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('role/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "KETERANGAN" => $this->input->post("keterangan"),
        );

        $this->role->simpan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil ditambahkan!</div>');
        redirect('role');
    }
}
