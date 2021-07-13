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

  public function create($data)
  {
    // code...
    $data = array(
      'desc' => $data[0],
      'regist_fee' => $data[1],
      'program_fee' => $data[2],
      'status' => $data[3],
  );
    $this->db->insert('summits', $data);
    //return $this->db->affected_rows();
  }

  public function get_summits() {
    $result = $this->db->get('summits');

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
  }
}
