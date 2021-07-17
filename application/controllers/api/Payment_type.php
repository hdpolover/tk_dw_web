<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Payment_type extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('payment_type_model', 'payment_type');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_payment_type');
        if ($id === NULL) {
            // code...
            $payment_type = $this->payment_type->get_payment_type();
        } else {
            // code...
            $payment_type = $this->payment_type->get_payment_type($id);
        }

        if ($payment_type) {
            // code...
            $this->response([
                'status' => true,
                'data' => $payment_type
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

                $res = $this->payment_type->add_payment($payment_data);

                if ($res > 0) {
                    // code...
                    $this->response([
                        'status' => true,
                        'message' => 'payment_type added'
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
