<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelajaran extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('pembelajaran_model', 'pembelajaran');
        $this->load->model('pelaksanaan_pembelajaran_model', 'pelaksanaan_pembelajaran');
    }

    public function index()
    {
        if ($this->session->userdata('ID_ROLE') == 1) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_tu', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembelajaran/index', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('ID_ROLE') == 2) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembelajaran/index', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('ID_ROLE') == 3) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_guru', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembelajaran/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function detail($id)
    {
        if ($this->session->userdata('ID_ROLE') == 2) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pelaksanaan_pembelajaran'] = $this->pelaksanaan_pembelajaran->get_pelaksanaan_pembelajaran($id);
            $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_kurikulum', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembelajaran/detail', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('ID_ROLE') == 3) {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pelaksanaan_pembelajaran'] = $this->pelaksanaan_pembelajaran->get_pelaksanaan_pembelajaran($id);
            $data['pembelajaran'] = $this->pembelajaran->get_pembelajaran($id);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_guru', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembelajaran/detail', $data);
            $this->load->view('templates/footer');
        }
    }
}
