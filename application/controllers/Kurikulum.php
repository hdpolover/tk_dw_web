<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('kurikulum_model', 'kurikulum');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['kurikulum'] = $this->kurikulum->get_kurikulum();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kurikulum/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kurikulum/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "NAMA_KURIKULUM" => $this->input->post('nama'),
            "PERIODE" => $this->input->post('periode'),
        );

        $this->kurikulum->tambah($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kurikulum berhasil ditambahkan.</div>');
        
        $data['title'] = 'TK DHARMA WANITA';
        $data['kurikulum'] = $this->kurikulum->get_kurikulum();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kurikulum/index', $data);
        $this->load->view('templates/footer');
    }
}
