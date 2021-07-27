<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

  public function tambah_siswa($data)
  {
    $this->db->insert("siswa", $data);
    return $this->db->insert_id();
  }

  public function get_siswa($id = null)
  {
    if ($id == null) {
      $query = "SELECT pembayaran.*, daftar_siswa.* FROM pembayaran INNER JOIN daftar_siswa ON pembayaran.ID_PENDAFTARAN = daftar_siswa.ID_PENDAFTARAN";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('pembayaran', ['ID_PEMBAYARAN' => $id])->result_array();
    }
  }

  public function get_data_siswa($id = null) {
    if ($id == null) {
      return $this->db->get('siswa')->result_array();
    } else {
      return $this->db->get_where('siswa', ['ID_SISWA' => $id])->result_array();
    }
  }

  public function get_siswa_for_presensi($id = null)
  {
    if ($id == null) {
      return $this->db->get('siswa')->result_array();
    } else {
      return $this->db->get_where('siswa', ['ID_SISWA' => $id])->result_array();
    }
  }

  public function get_pembayaran_by_id_daftar($id = null)
  {
    if ($id == null) {
      $query = "SELECT pembayaran.*, daftar_siswa.* FROM pembayaran INNER JOIN daftar_siswa ON pembayaran.ID_PENDAFTARAN = daftar_siswa.ID_PENDAFTARAN";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('pembayaran', ['ID_PENDAFTARAN' => $id])->result_array();
    }
  }

  public function validasi_pembayaran($data)
  {
    $query = "UPDATE pembayaran SET STATUS_PEMBAYARAN='" . $data['STATUS_PEMBAYARAN'] . "' WHERE ID_PEMBAYARAN=" . $data['ID_PEMBAYARAN'] . "";
    return $this->db->query($query)->result_array();
  }
}
