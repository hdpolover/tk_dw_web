<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kurikulum_model extends CI_Model
{

    public function get_kurikulum($id = null)
    {
        if ($id == null) {
            return $this->db->get('kurikulum')->result_array();
        } else {
            return $this->db->get_where('kurikulum', ['ID_KURIKULUM' => $id])->result_array();
        }
    }

    public function tambah($data)
    {
        return $this->db->insert('kurikulum', $data);
    }
}
