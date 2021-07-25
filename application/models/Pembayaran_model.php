<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("pembayaran", $data);
  }

  public function get_pembayaran($id = null)
  {
    if ($id == null) {
      $query = "SELECT pembayaran.*, daftar_siswa.* FROM pembayaran INNER JOIN daftar_siswa ON pembayaran.ID_PENDAFTARAN = daftar_siswa.ID_PENDAFTARAN ORDER BY TGL_PENDAFTARAN DESC";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('pembayaran', ['ID_PEMBAYARAN' => $id])->result_array();
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

  public function validasi_pembayaran($id, $text)
  {
    $this->db->set('STATUS_PEMBAYARAN', $text);
    $this->db->where('ID_PEMBAYARAN', $id);
    $this->db->update('pembayaran');
    // $query = "UPDATE pembayaran SET STATUS_PEMBAYARAN='" . $text . "' WHERE ID_PEMBAYARAN=" . $id . "";
    // return $this->db->query($query)->result_array();
  }
}
