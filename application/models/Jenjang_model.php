<?php defined('BASEPATH') or exit('No direct script access allowed');

class Jenjang_model extends CI_Model
{

    public function get_jenjang($id = null)
    {
      if ($id == null) {
        return $this->db->get('jenjang')->result_array();
      } else {
        return $this->db->get_where('jenjang', ['ID_JENJANG' => $id])->result_array();
      }
    }

    public function simpan($data) {
      return $this->db->insert('jenjang', $data);
    }
}
