<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sarpras extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('sarpras_model', 'sarpras');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['sarpras'] = $this->sarpras->get_sarpras();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sarpras/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sarpras/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "NAMA_SARPRAS" => $this->input->post('nama'),
            "JENIS_SARPRAS" => $this->input->post('jenis'),
            "JUMLAH_SARPRAS" => $this->input->post('jumlah'),
            "KEADAAN" => $this->input->post("keadaan"),
            "STATUS_SARPRAS" => $this->input->post("status"),
            "HAK_MILIK" => $this->input->post("hak"),
            "ASAL_SARPRAS" => $this->input->post("asal"),
            "KETERANGAN" => $this->input->post("keterangan"),
        );

        $this->sarpras->simpan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sarpras berhasil ditambahkan!</div>');
        redirect('sarpras');
    }

    public function lihat($id) {
        $data['title'] = 'TK DHARMA WANITA';
        $data['sarpras'] = $this->sarpras->get_sarpras($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('sarpras/detail', $data);
        $this->load->view('templates/footer');
    }
}
