<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presensi_pegawai_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("presensi_pegawai", $data);
  }

  public function get_presensi_pegawai($id = null)
  {
    if ($id == null) {
      $query = "SELECT pegawai.*, presensi_pegawai.*
      FROM presensi_pegawai
      INNER JOIN pegawai ON pegawai.ID_PEGAWAI = presensi_pegawai.ID_PEGAWAI";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('presensi_pegawai', ['ID_PEGAWAI' => $id])->result_array();
    }
  }
}
