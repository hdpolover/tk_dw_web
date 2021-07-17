<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Summit_content extends RestController
{

    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('summit_content_model', 'summit_content');
    }

    public function index_get()
    {
        // code...
        $id = $this->get('id_summit_content');
        if ($id === NULL) {
            // code...
            $summit_content = $this->summit_content->get_summit_content();
        } else {
            // code...
            $summit_content = $this->summit_content->get_summit_content($id);
        }

        if ($summit_content) {
            // code...
            $this->response([
                'status' => true,
                'data' => $summit_content
            ],  RestController::HTTP_OK);
        } else {
            // code...
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ],  RestController::HTTP_NOT_FOUND);
        }
    }

    // public function index_post()
    // {
    //     $now = new DateTime();

    //     $upload_image = $_FILES['image']['name'];

    //     if ($upload_image) {
    //         $newPath = './assets/summit_content/' . $this->post('id_summit') . '/';

    //         if (!is_dir($newPath)) {
    //             mkdir($newPath, 0777, TRUE);
    //         }

    //         $config['upload_path'] = $newPath; //path folder
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg';
    //         $config['max_size']      = '2048';
    //         $config['upload_path'] = './assets/summit_content/';

    //         $this->load->library('upload', $config);

    //         if ($this->upload->do_upload('image')) {
    //             $summit_content_data = array(
    //                 'id_admin' =>  $this->post('id_admin'),
    //                 'id_summit' =>  $this->post('id_summit'),
    //                 'title' =>  $this->post('title'),
    //                 'description' =>  $this->post('description'),
    //                 'file_path' => $upload_image,
    //                 'created_date' => $now->format('Y-m-d H:i:s'),
    //                 'modified_date' => $now->format('Y-m-d H:i:s'),
    //                 'status' => 0,
    //             );

    //             $res = $this->summit_content->add_content($summit_content_data);

    //             if ($res > 0) {
    //                 // code...
    //                 $this->response([
    //                     'status' => true,
    //                     'message' => 'contet added'
    //                 ],  RestController::HTTP_CREATED);
    //             } else {
    //                 // code...
    //                 $this->response([
    //                     'status' => false,
    //                     'message' => 'failed to register'
    //                 ],  RestController::HTTP_BAD_REQUEST);
    //             }
    //         } else {
    //             echo $this->upload->display_errors();
    //         }
    //     } else {
    //         $this->response([
    //             'status' => false,
    //             'message' => 'failed to register'
    //         ],  RestController::HTTP_BAD_REQUEST);
    //     }
    // }
}
