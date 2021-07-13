<?php
defined('BASEPATH') or exit('No direct script access allowed');

require('qcode-endroid/autoload.php');

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

class Participant extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('Participant_model', 'participant');
    //$this->load->library('form_validation');
  }

  // public function generateQrCode()
  // {
  //   $tempdir = "temp/";
  //   if (!file_exists($tempdir)) {
  //     mkdir($tempdir);
  //   }

  //   //Isi dari QRCode Saat discan
  //   $isi_teks = "Dewan Komputer 2";
  //   $namafile = "dewan-komputer2.png";
  //   $qrCode = new QrCode();
  //   // Set Text
  //   $qrCode->setText($isi_teks);
  //   $qrCode->setWriterByName('png');
  //   $qrCode->setMargin(5);
  //   $qrCode->setEncoding('UTF-8');
  //   $qrCode->setErrorCorrectionLevel(new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH));
  //   // Set Color
  //   $qrCode->setRoundBlockSize(true);
  //   $qrCode->setValidateResult(false);
  //   $qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

  //   // Save it to a file
  //   $qrCode->writeFile($tempdir . $namafile);

  //   echo '<h3>Library Endroid</h3>';
  //   echo '<img src="temp/' . $namafile . '" width="250px">';
  // }

  public function index()
  {
    // code...
    //$data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    //$data['peserta'] = $this->Peserta_model->campurData();
    $data['participants'] = $this->participant->getPeserta();
    // if( $this->input->post('keyword') ) {
    //     $data['peserta'] = $this->Peserta_model->cariDataMahasiswa();
    // }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('participant/index', $data);
    $this->load->view('templates/footer');
  }

  public function detail($id)
  {
    // code...
    $data['title'] = 'Detail Peserta';
    $data['admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['peserta'] = $this->peserta->getPesertaById($id);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('peserta/detail', $data);
    $this->load->view('templates/footer');
  }

  public function hapus($id)
  {
    // code...
    $this->peserta->hapusPeserta($id);
    redirect('peserta');
  }

  public function tambah()
  {
    // code...
    $data['title'] = 'Add Participant';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

    if ($this->input->post('summit') == NULL) {
      // code...
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('participant/tambah', $data);
      $this->load->view('templates/footer');
    } else {
      // code...
      $this->peserta->tambahPeserta();
    }
  }
}
