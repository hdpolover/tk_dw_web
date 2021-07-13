<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Admin_content_model extends CI_Model
{
    public function get_admin_content($id = null)
    {
        if ($id == null) {
            return $this->db->get('summit_contents')->result_array();
        } else {
            return $this->db->get_where('summit_contents', ['id_summit_content' => $id])->result_array();
        }
    }

    public function add_content()
    {
        
    }
}
