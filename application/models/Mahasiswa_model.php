<?php

/**
 *
 */
class Mahasiswa_model extends CI_Model
{

  public function getMahasiswa($id = NULL)
  {
    // code...
    if ($id === NULL) {
      // code...
      return $this->db->get('mahasiswa')->result_array();
    }
    return $this->db->get_where('mahasiswa', ['id' => $id])->result_array();
  }

  public function deleteMahasiswa($id)
  {
    $this->db->delete('mahasiswa', ['id' => $id]);
    return $this->db->affected_rows();
    // code...
  }

  public function createMahasiswa($data)
  {
    // code...
    $this->db->insert('mahasiswa', $data);
    return $this->db->affected_rows();
  }

  public function updateMahasiswa($data, $id)
  {
    // code...
    $this->db->update('mahasiswa', $data, ['id' => $id]);
    return $this->db->affected_rows();
  }
}
