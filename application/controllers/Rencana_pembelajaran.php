<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rencana_pembelajaran extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('rencana_pembelajaran_model', 'rencana_pembelajaran');
        $this->load->model('kurikulum_model', 'kurikulum');
    }

    public function index()
    {
        if ($this->session->userdata('ID_ROLE') == 2) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rencana_pembelajaran/index', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('ID_ROLE') == 4) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_kepsek', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('rencana_pembelajaran/index_kepsek', $data);
            $this->load->view('templates/footer');
        }
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['kurikulum'] = $this->kurikulum->get_kurikulum();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rencana_pembelajaran/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kepsek', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rencana_pembelajaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "ID_KURIKULUM" => $this->input->post('id_kurikulum'),
            "PERIODE" => $this->input->post('periode'),
            "MINGGU" => $this->input->post('minggu'),
            "TEMA" => $this->input->post('tema'),
            "KETERANGAN" => "BELUM DIVALIDASI",
        );

        $this->rencana_pembelajaran->tambah($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kurikulum berhasil ditambahkan.</div>');

        $data['title'] = 'TK DHARMA WANITA';
        $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rencana_pembelajaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function terima_rp($id) {
        $text = "DITERIMA";
        //validasi pembayaran
        $this->rencana_pembelajaran->validasi_rp($id, $text);
   
        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert">Rencana pembelajaran diterima!</div>');
        redirect('rencana_pembelajaran');
    }

    public function tolak_rp($id) {
        $text = "DITOLAK";
        //validasi pembayaran
        $this->rencana_pembelajaran->validasi_rp($id, $text);
   
        $this->session->set_flashdata('message', '<div class ="alert alert-danger" style="text-align-center" role ="alert">Rencana pembelajaran ditolak!</div>');
        redirect('rencana_pembelajaran');
    }
}
