<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('siswa_model', 'siswa');
        $this->load->model('jenjang_model', 'jenjang');
        $this->load->model('pendaftaran_model', 'pendaftaran');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['siswa'] = $this->siswa->get_data_siswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat($id) {
        $data['title'] = 'TK DHARMA WANITA';
        $data['siswa'] = $this->siswa->get_data_siswa($id);
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);
        $id_jenjang = $data['pendaftaran'][0]['ID_JENJANG'];
        $data['jenjang'] = $this->jenjang->get_jenjang($id_jenjang);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {
        $data['title'] = 'TK DHARMA WANITA';
       
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);
        $id_jenjang = $data['pendaftaran'][0]['ID_JENJANG'];
        $data['jenjang'] = $this->jenjang->get_jenjang($id_jenjang);

        $data['siswa'] = $this->siswa->get_data_siswa($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data_siswa/edit', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_edit() {
        $this->siswa->update_jenjang($this->input->post('id'), $this->input->post('JENJANG'));
        $this->pendaftaran->update_jenjang($this->input->post('id_daftar'), $this->input->post('JENJANG'));

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status siswa berhasil dirubah!</div>');
        redirect('data_siswa');
    }
}
