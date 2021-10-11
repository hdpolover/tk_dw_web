<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class User_model extends CI_Model
{
  public function get_user($id = null)
  {
    if ($id == null) {
      $query = "SELECT user.*, roles.* FROM user INNER JOIN roles WHERE user.ID_ROLE = roles.ID_ROLE";
      return $this->db->query($query)->result_array();
    } else {
      return $this->db->get_where('user', ['ID_USER' => $id])->result_array();
    }
  }

  public function hapus($id) {
    $query = "DELETE FROM user WHERE ID_USER=" . $id ."";
    return $this->db->query($query)->result_array();
  }

  public function get_nama_ortu($username) {
    $query = "SELECT NAMA_ORTU FROM daftar_siswa WHERE USERNAME_ORTU = '" . $username ."'";
    return $this->db->query($query)->result_array();
  }
}
