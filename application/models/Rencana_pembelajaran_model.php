<?php defined('BASEPATH') or exit('No direct script access allowed');

class Rencana_pembelajaran_model extends CI_Model
{

    public function get_rencana_pembelajaran($id = null)
    {
        if ($id == null) {
            $query = "SELECT kurikulum.*, rencana_pembelajaran.*
            FROM rencana_pembelajaran
            INNER JOIN kurikulum on kurikulum.ID_KURIKULUM = rencana_pembelajaran.ID_KURIKULUM";

            return $this->db->query($query)->result_array();
        } else {
            $query = "SELECT kurikulum.*, rencana_pembelajaran.*
            FROM rencana_pembelajaran
            INNER JOIN kurikulum on kurikulum.ID_KURIKULUM = rencana_pembelajaran.ID_KURIKULUM
            WHERE rencana_pembelajaran.ID_RENCANA_PEMBELAJARAN=" . $id . "";

            return $this->db->query($query)->result_array();
        }
    }

    public function tambah($data)
    {
        return $this->db->insert('rencana_pembelajaran', $data);
    }

    public function validasi_rp($id, $text)
    {
        $this->db->set('KETERANGAN', $text);
        $this->db->where('ID_RENCANA_PEMBELAJARAN', $id);
        $this->db->update('rencana_pembelajaran');
    }
}
