<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("pegawai", $data);
  }

  public function get_pegawai($id = null)
  {
    if ($id == null) {
      return $this->db->get('pegawai')->result_array();
    } else {
      return $this->db->get_where('pegawai', ['ID_PEGAWAI' => $id])->result_array();
    }
  }
}
