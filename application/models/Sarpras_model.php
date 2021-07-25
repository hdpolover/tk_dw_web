<?php defined('BASEPATH') or exit('No direct script access allowed');

class Sarpras_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("sarpras", $data);
  }

  public function get_sarpras($id = null)
  {
    if ($id == null) {
      return $this->db->get('sarpras')->result_array();
    } else {
      return $this->db->get_where('sarpras', ['ID_SARPRAS' => $id])->result_array();
    }
  }
}
