<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home');
    }
}
