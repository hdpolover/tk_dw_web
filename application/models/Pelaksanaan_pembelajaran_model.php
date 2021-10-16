<?php defined('BASEPATH') or exit('No direct script access allowed');

class Pelaksanaan_pembelajaran_model extends CI_Model
{

    public function get_pelaksanaan_pembelajaran($id = null)
    {
        if ($id == null) {
            $query = "SELECT pelaksanaan_pembelajaran.*, jenjang.*, rencana_pembelajaran.*, pegawai.*, sarpras.*
            FROM pelaksanaan_pembelajaran
            INNER JOIN rencana_pembelajaran on rencana_pembelajaran.ID_RENCANA_PEMBELAJARAN = pelaksanaan_pembelajaran.ID_RENCANA_PEMBELAJARAN
            INNER JOIN jenjang on jenjang.ID_JENJANG = pelaksanaan_pembelajaran.ID_JENJANG
            INNER JOIN pegawai on pegawai.ID_PEGAWAI = pelaksanaan_pembelajaran.ID_PEGAWAI
            INNER JOIN sarpras on sarpras.ID_SARPRAS = pelaksanaan_pembelajaran.ID_SARPRAS
            WHERE rencana_pembelajaran.KETERANGAN = 'DITERIMA'";
            return $this->db->query($query)->result_array();
        } else {
            $query = "SELECT pelaksanaan_pembelajaran.*, jenjang.*, rencana_pembelajaran.*, pegawai.*, sarpras.*
            FROM pelaksanaan_pembelajaran
            INNER JOIN rencana_pembelajaran on rencana_pembelajaran.ID_RENCANA_PEMBELAJARAN = pelaksanaan_pembelajaran.ID_RENCANA_PEMBELAJARAN
            INNER JOIN jenjang on jenjang.ID_JENJANG = pelaksanaan_pembelajaran.ID_JENJANG
            INNER JOIN pegawai on pegawai.ID_PEGAWAI = pelaksanaan_pembelajaran.ID_PEGAWAI
            INNER JOIN sarpras on sarpras.ID_SARPRAS = pelaksanaan_pembelajaran.ID_SARPRAS
            WHERE pelaksanaan_pembelajaran.ID_PELAKSANAAN_PEMBELAJARAN=" . $id . " 
            AND rencana_pembelajaran.KETERANGAN = 'DITERIMA'";
            return $this->db->query($query)->result_array();
        }
    }

    public function get_pp_by_jenjang($id = null)
    {
        $this->db->where('ID_JENJANG', $id);
        return $this->db->get('pelaksanaan_pembelajaran')->result_array();
    }

    public function tambah($data)
    {
        return $this->db->insert('pelaksanaan_pembelajaran', $data);
    }

    public function validasi_rp($id, $text)
    {
        $this->db->set('KETERANGAN', $text);
        $this->db->where('ID_RENCANA_PEMBELAJARAN', $id);
        $this->db->update('rencana_pembelajaran');
    }
}
