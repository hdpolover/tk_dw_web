<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pembelajaran_model extends CI_Model
{

    public function simpan($data)
    {
        return $this->db->insert("pembelajaran", $data);
    }

    public function get_pembelajaran($id = null)
    {
        if ($id == null) {
            $query = "SELECT pembelajaran.*, pelaksanaan_pembelajaran.*, jenjang.*, siswa.*, sarpras.*, pegawai.*, rencana_pembelajaran.*
            FROM pembelajaran
            INNER JOIN pelaksanaan_pembelajaran ON pelaksanaan_pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN = pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN                
            INNER JOIN jenjang ON jenjang.ID_JENJANG = pelaksanaan_pembelajaran.ID_JENJANG
            INNER JOIN siswa ON siswa.ID_SISWA = pembelajaran.ID_SISWA
            INNER JOIN rencana_pembelajaran ON rencana_pembelajaran.ID_RENCANA_PEMBELAJARAN = pelaksanaan_pembelajaran.ID_RENCANA_PEMBELAJARAN
            INNER JOIN sarpras ON sarpras.ID_SARPRAS = pelaksanaan_pembelajaran.ID_SARPRAS
            INNER JOIN pegawai ON pegawai.ID_PEGAWAI = pelaksanaan_pembelajaran.ID_PEGAWAI
            GROUP BY jenjang.KATEGORI_JENJANG";
            return $this->db->query($query)->result_array();
        } else {
            $query = "SELECT pembelajaran.*, pelaksanaan_pembelajaran.*, jenjang.*, siswa.*, sarpras.*, pegawai.*, rencana_pembelajaran.*
            FROM pembelajaran
            INNER JOIN pelaksanaan_pembelajaran ON pelaksanaan_pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN = pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN                
            INNER JOIN jenjang ON jenjang.ID_JENJANG = pelaksanaan_pembelajaran.ID_JENJANG
            INNER JOIN siswa ON siswa.ID_SISWA = pembelajaran.ID_SISWA
            INNER JOIN rencana_pembelajaran ON rencana_pembelajaran.ID_RENCANA_PEMBELAJARAN = pelaksanaan_pembelajaran.ID_RENCANA_PEMBELAJARAN
            INNER JOIN sarpras ON sarpras.ID_SARPRAS = pelaksanaan_pembelajaran.ID_SARPRAS
            INNER JOIN pegawai ON pegawai.ID_PEGAWAI = pelaksanaan_pembelajaran.ID_PEGAWAI
            WHERE pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN =" . $id. "" . "
            GROUP BY jenjang.KATEGORI_JENJANG";
            return $this->db->query($query)->result_array();
        }
    }
}
