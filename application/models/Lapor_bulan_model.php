<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_bulan_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("laporan_bulanan", $data);
  }

  public function get_lapor_bulan($id = null)
  {
    if ($id == null) {
      return $this->db->get('laporan_bulanan')->result_array();
    } else {
      return $this->db->get_where('laporan_bulanan', ['ID_LAPORAN_BULANAN' => $id])->result_array();
    }
  }
}
