<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Role_model extends CI_Model
{
  public function get_role($id = null)
  {
    if ($id == null) {
      return $this->db->get('roles')->result_array();
    } else {
      return $this->db->get_where('roles', ['ID_ROLE' => $id])->result_array();
    }
  }

  public function simpan($data)
  {
    return $this->db->insert('roles', $data);
  }
}
