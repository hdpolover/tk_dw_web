<?php defined('BASEPATH') or exit('No direct script access allowed');

class Presensi_siswa_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("presensi_siswa", $data);
  }

  public function get_presensi_siswa($id = null)
  {
    if ($id == null) {
      $query = "SELECT siswa.*, presensi_siswa.*
      FROM presensi_siswa
      INNER JOIN siswa ON siswa.ID_SISWA = presensi_siswa.ID_SISWA";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('presensi_pegawai', ['ID_PEGAWAI' => $id])->result_array();
    }
  }
}
