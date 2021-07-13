<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin_content_model extends CI_Model
{
    public function get_admin_contents() {
        $result = $this->db->get('summit_contents');

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }


    public function add_content() {

    }
}

?>