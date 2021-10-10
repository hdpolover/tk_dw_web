<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('pegawai_model', 'pegawai');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pegawai'] = $this->pegawai->get_pegawai();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "NAMA" => $this->input->post('nama'),
            "NIP_NUPTK" => $this->input->post('nip'),
            "JK" => $this->input->post('JENIS_KELAMIN'),
            "TEMPAT_LAHIR" => $this->input->post("tempat_lahir"),
            "TGL_LAHIR" => $this->input->post("TANGGAL_LAHIR"),
            "IJAZAH_TERAKHIR" => $this->input->post("ijazah_terakhir"),
            "AGAMA" => $this->input->post("agama"),
            "STATUS" => $this->input->post("status"),
            "GOLONGAN" => $this->input->post("golongan"),
            "JABATAN" => $this->input->post("jabatan"),
            "TGL_MULAI_KERJA" => $this->input->post("TGL_MULAI"),
            "STATUS_KEPEGAWAIAN" => $this->input->post("status_kepegawaian"),
            "MENGAJAR_KELOMPOK" => $this->input->post("mengajar_kelompok"),
            "NOMOR_SK" => $this->input->post("nomor_sk"),
            "TGL_SK" => $this->input->post("TGL_SK"),
            "RUANG" => $this->input->post("ruang"),
        );

        $this->pegawai->simpan($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pegawai berhasil ditambahkan!</div>');
        redirect('pegawai');
    }

    public function lihat($id) {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pegawai'] = $this->pegawai->get_pegawai($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->pegawai->hapus($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pegawai berhasil dihapus!</div>');
        redirect('pegawai');
    }
    
}
