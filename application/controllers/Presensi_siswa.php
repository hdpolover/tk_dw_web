<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi_siswa extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('siswa_model', 'siswa');
        $this->load->model('presensi_siswa_model', 'presensi_siswa');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['presensi_siswa'] = $this->presensi_siswa->get_presensi_siswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function index_b()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['presensi_siswa'] = $this->presensi_siswa->get_presensi_siswa_b();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_siswa/index_b', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['siswa'] = $this->siswa->get_siswa_for_presensi();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_siswa/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_b()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['siswa'] = $this->siswa->get_siswa_for_presensi_b();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_siswa/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->form_validation->set_message('required', '{field} harus diisi.');
        $this->form_validation->set_rules('TGL_PRESENSI', 'Tanggal Presensi', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['siswa'] = $this->siswa->get_siswa_for_presensi();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_tu', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('presensi_siswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('ID');
            $status = $this->input->post('STATUS');
            $tgl = $this->input->post('TGL_PRESENSI');

            for ($i = 0; $i < sizeof($id); $i++) {
                $data = array('ID_PEGAWAI' => $id[$i]);
                $data = array(
                    'ID_SISWA' => $id[$i],
                    'STATUS' => $status[$i],
                    'TGL_PRESENSI' => $tgl,
                );

                $this->presensi_siswa->simpan($data);
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Presensi siswa berhasil ditambahkan!</div>');
            redirect('presensi_siswa');
        }
    }

    public function lihat($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pegawai'] = $this->pegawai->get_pegawai($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pegawai/detail', $data);
        $this->load->view('templates/footer');
    }
}
