<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Admin_model extends CI_Model
{
    public function get_admins() {
        $result = $this->db->get('admins');

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }


    public function add_admin() {

    }
}

?>