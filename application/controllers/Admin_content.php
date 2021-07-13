<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class Admin_content extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_content_model', 'admin_content');
    $this->load->model('summit_model', 'summit');
    //$this->load->library('form_validation');
  }

  public function tryQr()
  {
    $writer = new PngWriter();
    $id = "07Z4ZxSpoHTVTG3YAZN4OSMHgy13";
    // Create QR code
    $qrCode = QrCode::create($id)
      ->setEncoding(new Encoding('UTF-8'))
      ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
      ->setSize(300)
      ->setMargin(10)
      ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
      ->setForegroundColor(new Color(0, 0, 0))
      ->setBackgroundColor(new Color(255, 255, 255));

    // Create generic logo
    $logo = Logo::create('./assets/img/logo_1.png')
      ->setResizeToWidth(70);

    // // Create generic label
    // $label = Label::create('Hello')
    //   ->setTextColor(new Color(255, 0, 0));

    $result = $writer->write($qrCode, $logo);

    // Directly output the QR code
    header('Content-Type: ' . $result->getMimeType());
    echo $result->getString();

    // Save it to a file
    $result->saveToFile('/assets/img/qr_codes/' + $id + '.png');

    // Generate a data URI to include image data inline (i.e. inside an <img> tag)
    $dataUri = $result->getDataUri();

    // code...
    $data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['qr'] = $dataUri;

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin_content/try', $data);
    $this->load->view('templates/footer');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    //$data['peserta'] = $this->Peserta_model->campurData();
    $data['admin_contents'] = $this->admin_content->get_admin_content();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin_content/index', $data);
    $this->load->view('templates/footer');
  }

  public function add_new_content()
  {
    // code...
    $data['title'] = 'Add New Content';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
    $data['summit'] = $this->summit->get_active_summits();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin_content/add_content', $data);
    $this->load->view('templates/footer');
  }
}
