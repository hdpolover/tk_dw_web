<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{

    public function daftar($data)
    {
        return $this->db->insert("daftar_siswa", $data);
    }

    public function get_pendaftaran($id = null)
    {
        if ($id == null) {
            $this->db->order_by("TGL_PENDAFTARAN", "desc");
            return $this->db->get('daftar_siswa')->result_array();
        } else {
            return $this->db->get_where('daftar_siswa', ['ID_PENDAFTARAN' => $id])->result_array();
        }
    }

    public function daftar_ortu($data)
    {
        return $this->db->insert('user', $data);
    }

    public function get_siswa_dari_ortu($username)
    {
        return $this->db->get_where('daftar_siswa', ['NAMA_ORTU' => $username])->result_array();
    }

    public function update_status($id, $text)
    {
        $this->db->set('STATUS_SISWA', $text);
        $this->db->where('ID_PENDAFTARAN', $id);
        $this->db->update('daftar_siswa');
        // $query = "UPDATE daftar_siswa SET STATUS_SISWA='" . $text . "' WHERE ID_PENDAFTARAN=" . $id . "";
        // $this->db->query($query)->result_array();
    }

    public function update_jenjang($id, $jenjang)
    {
        $this->db->set('ID_JENJANG', $jenjang);
        $this->db->where('ID_PENDAFTARAN', $id);
        $this->db->update('daftar_siswa');
        // $query = "UPDATE daftar_siswa SET STATUS_SISWA='" . $text . "' WHERE ID_PENDAFTARAN=" . $id . "";
        // $this->db->query($query)->result_array();
    }

    
}
