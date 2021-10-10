<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelaksanaan_pembelajaran extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('pelaksanaan_pembelajaran_model', 'pelaksanaan_pembelajaran');
        $this->load->model('jenjang_model', 'jenjang');
        $this->load->model('pegawai_model', 'pegawai');
        $this->load->model('sarpras_model', 'sarpras');
        $this->load->model('siswa_model', 'siswa');
        $this->load->model('rencana_pembelajaran_model', 'rencana_pembelajaran');
    }

    public function index()
    {

        $data['title'] = 'TK DHARMA WANITA';
        $data['pelaksanaan_pembelajaran'] = $this->pelaksanaan_pembelajaran->get_pelaksanaan_pembelajaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaksanaan_pembelajaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['jenjang'] = $this->jenjang->get_jenjang();
        $data['pegawai'] = $this->pegawai->get_pegawai();
        $data['sarpras'] = $this->sarpras->get_sarpras();
        $data['rencana_pembelajaran'] = $this->rencana_pembelajaran->get_rencana_pembelajaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaksanaan_pembelajaran/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pelaksanaan_pembelajaran'] = $this->pelaksanaan_pembelajaran->get_pelaksanaan_pembelajaran($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaksanaan_pembelajaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            "ID_JENJANG" => $this->input->post('id_jenjang'),
            "ID_PEGAWAI" => $this->input->post('id_pegawai'),
            "ID_SARPRAS" => $this->input->post('id_sarpras'),
            "ID_RENCANA_PEMBELAJARAN" => $this->input->post('id_rencana_pembelajaran'),
        );

        $this->pelaksanaan_pembelajaran->tambah($data);
        $insertId = $this->db->insert_id();

        $jenjang = $this->input->post('id_jenjang');
        $siswa = $this->siswa->get_siswa_from_jenjang($jenjang);

        foreach ($siswa as $s) {
            $data = array(
                'ID_SISWA' => $s['ID_SISWA'],
                'ID_PELAKSANAAN_PEMBELAJARAN' => $insertId,
            );
            $this->db->insert('pembelajaran', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pelaksanaan pembelajaran berhasil ditambahkan.</div>');

        $data['title'] = 'TK DHARMA WANITA';
        $data['pelaksanaan_pembelajaran'] = $this->pelaksanaan_pembelajaran->get_pelaksanaan_pembelajaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaksanaan_pembelajaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function terima_rp($id)
    {
        $text = "DITERIMA";
        //validasi pembayaran
        $this->rencana_pembelajaran->validasi_rp($id, $text);

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert">Rencana pembelajaran diterima!</div>');
        redirect('rencana_pembelajaran');
    }

    public function tolak_rp($id)
    {
        $text = "DITOLAK";
        //validasi pembayaran
        $this->rencana_pembelajaran->validasi_rp($id, $text);

        $this->session->set_flashdata('message', '<div class ="alert alert-danger" style="text-align-center" role ="alert">Rencana pembelajaran ditolak!</div>');
        redirect('rencana_pembelajaran');
    }
}
