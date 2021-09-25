<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi_pegawai extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('pegawai_model', 'pegawai');
        $this->load->model('presensi_pegawai_model', 'presensi_pegawai');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['presensi_pegawai'] = $this->presensi_pegawai->get_presensi_pegawai();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_pegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pegawai'] = $this->pegawai->get_pegawai();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('presensi_pegawai/tambah_1', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $id = $this->input->post('ID');
        $status = $this->input->post('STATUS');
        $tgl = $this->input->post('TGL_PRESENSI');

        for ($i=0; $i < sizeof($id); $i++) 
        { 
           $data = array('ID_PEGAWAI' => $id[$i]);
               $data = array(
                'ID_PEGAWAI' => $id[$i],
                'STATUS' => $status[$i],
                'TGL_PRESENSI' => $tgl,
            );

            $this->presensi_pegawai->simpan($data);
        }
       
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Presensi pegawai berhasil ditambahkan!</div>');
        redirect('presensi_pegawai');
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
