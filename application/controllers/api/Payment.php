<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Payment extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('payment_model', 'payment');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_payment');
        if ($id === NULL) {
            // code...
            $payment = $this->payment->get_payment();
        } else {
            // code...
            $payment = $this->payment->get_payment($id);
        }

        if ($payment) {
            // code...
            $this->response([
                'status' => true,
                'data' => $payment
            ],  RestController::HTTP_OK);
        } else {
            // code...
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],  RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $now = new DateTime();

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $newPath = './assets/img/payments/' . $this->post('id_payment_type') . '/';

            if (!is_dir($newPath)) {
                mkdir($newPath, 0777, TRUE);
            }

            $config['upload_path'] = $newPath; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $payment_data
                    = array(
                        'id_participant' =>  $this->post('id_participant'),
                        'id_payment_type' =>  $this->post('id_payment_type'),
                        'bank_name' =>  $this->post('bank_name'),
                        'account_name' =>  $this->post('account_name'),
                        'amount' =>  $this->post('amount'),
                        'payment_date' => $now->format('Y-m-d H:i:s'),
                        'payment_proof' => $upload_image,
                        'check_status' => 0,
                        'payment_status' => 0,
                    );

                $res = $this->payment->add_payment($payment_data);

                if ($res > 0) {
                    // code...
                    $this->response([
                        'status' => true,
                        'message' => 'payment added'
                    ],  RestController::HTTP_CREATED);
                } else {
                    // code...
                    $this->response([
                        'status' => false,
                        'message' => 'failed to register'
                    ],  RestController::HTTP_BAD_REQUEST);
                }
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to register'
            ],  RestController::HTTP_BAD_REQUEST);
        }
    }
}
