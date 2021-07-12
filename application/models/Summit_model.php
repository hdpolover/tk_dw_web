<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Summit_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function create_summit($data)
  {
    // code...
    $this->db->insert('summit', $data);
    return $this->db->affected_rows();
  }

  public function get_summits() {
    $result = $this->db->get('summit');

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
  }
}
