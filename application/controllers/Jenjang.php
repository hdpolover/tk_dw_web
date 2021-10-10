<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenjang extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('jenjang_model', 'jenjang');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['jenjang'] = $this->jenjang->get_jenjang();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jenjang/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('jenjang/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "KATEGORI_JENJANG" => $this->input->post('kategori'),
        );

        $this->jenjang->simpan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jenjang berhasil ditambahkan!</div>');
        redirect('jenjang');
    }
}
