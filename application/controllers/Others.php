<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Others extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('summit_model', 'summit');
        $this->load->model('timeline_model', 'timeline');
        $this->load->model('payment_type_model', 'payment_type');
    }

    public function index_summits()
    {
        // // code...
        $data['title'] = 'Summits';
        $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
        $data['summits'] = $this->summit->get_summit();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('others/summits', $data);
        $this->load->view('templates/footer');
    }

    public function index_payment_types()
    {
        // // code...
        $data['title'] = 'Payment Types';
        $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
        $data['payment_types'] = $this->payment_type->get_payment_type();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('others/payment_types', $data);
        $this->load->view('templates/footer');
    }

    public function add_new_summit()
    {
        // code...
        $data['title'] = 'Add New Summit';
        $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('others/add_summit', $data);
        $this->load->view('templates/footer');
    }

    public function create_new_summit()
    {
        $desc = $this->input->post('desc');
        $regist_fee = $this->input->post('regist_fee');
        $program_fee = $this->input->post('program_fee');
        $status = $this->input->post('status');

        $summit_data = array(
            'desc' => $desc, 
            'regist_fee' => $regist_fee,
            'program_fee' => $program_fee,
            'status' => $status
        );

        $this->summit->create_summit($summit_data);

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Congratulations! You successfully created a new summit.</div>');
        redirect('others/index_summits');
    }

    public function view_summit_details($id)
    {
        // code...
        $data['title'] = 'Summit Details';
        $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
        $data['summit'] = $this->summit->get_summit($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('others/summit_details', $data);
        $this->load->view('templates/footer');
    }

    public function update_summit($id)
    {
        $desc = $this->input->post('desc');
        $regist_fee = $this->input->post('regist_fee');
        $program_fee = $this->input->post('program_fee');
        $status = $this->input->post('status');

        $summit_data = array(
            'id_summit' => $id, 
            'desc' => $desc, 
            'regist_fee' => $regist_fee,
            'program_fee' => $program_fee,
            'status' => $status
        );

        $this->summit->update($summit_data);

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Congratulations! You successfully updated <?php echo $desc ?> details.</div>');
        redirect('others/index_summits');
    }

    public function index_timelines()
    {
        // // code...
        $data['title'] = 'Summits';
        $data['current_admin'] = $this->db->get_where('admins', ['username' => $this->session->userdata('username')])->row_array();
        $data['timelines'] = $this->timeline->get_timeline();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('others/timelines', $data);
        $this->load->view('templates/footer');
    }
}
