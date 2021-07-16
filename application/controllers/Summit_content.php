<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Summit_content extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('summit_content_model', 'summit_content');
    $this->load->model('summit_model', 'summit');
  }

  public function index()
  {
    // code...
    $data['title'] = 'Data Peserta';
    $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
  
    $data['summit_contents'] = $this->summit_content->get_contents();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('summit_content/index', $data);
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
    $this->load->view('summit_content/add_content', $data);
    $this->load->view('templates/footer');
  }

  public function save_new_content()
  {
    $now = new DateTime();

    $desc = $this->input->post('desc');
    $id_summit = $this->input->post('summit');
    $status = $this->input->post('status');

    $upload_image = $_FILES['image']['name'];

    if ($upload_image) {
      $newPath = './assets/img/summit_contents/' . $id_summit . '/';

      if (!is_dir($newPath)) {
        mkdir($newPath, 0777, TRUE);
      }

      $config['upload_path'] = $newPath; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
      $config['max_size']      = '2048';
      $config['upload_path'] = './assets/img/summit_contents/';

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('image')) {
        $summit_content_data = array(
          'description' => $desc,
          'id_summit' => $id_summit,
          'created_date' => $now->format('Y-m-d H:i:s'),
          'modified_date' => $now->format('Y-m-d H:i:s'),
          'file_path' => $upload_image,
          'status' => $status,
          'id_admin' =>  $this->session->userdata('id_admin'),
        );

        $this->summit_content->add_content($summit_content_data);

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Congratulations! You successfully created a summit content.</div>');
        redirect('summit_content/index');
      } else {
        echo $this->upload->display_errors();
      }
    } else {
      $summit_content_data = array(
        'description' => $desc,
        'id_summit' => $id_summit,
        'created_date' => $now->format('Y-m-d H:i:s'),
        'modified_date' => $now->format('Y-m-d H:i:s'),
        'file_path' => "no file",
        'status' => $status,
        'id_admin' =>  $this->session->userdata('id_admin'),
      );

      $this->summit_content->add_content($summit_content_data);

      $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Congratulations! You successfully created a summit content.</div>');
      redirect('summit_content/index');
    }
  }
}
