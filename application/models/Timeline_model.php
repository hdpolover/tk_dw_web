<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Timeline_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create($data)
    {
        // code...
        $data = array(
            'id_summit' => $data[0],
            'desc' => $data[1],
            'timeline' => $data[2],
            'status' => $data[3],
        );
        $this->db->insert('timelines', $data);
        //return $this->db->affected_rows();
    }

    public function get_all()
    {
        $this->db->select('t.id_summit_timeline AS `id_summit_timeline`, t.description AS `desc`, s.description AS `summit_desc`, t.timeline AS `timeline`, t.status AS `status`');
        $this->db->from('summit_timelines AS t');
        $this->db->join('summits AS s', 't.id_summit = s.id_summit');
        $result = $this->db->get();

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function get_by_id($id)
    {
        $this->db->select('t.id_summit_timeline AS `id_summit_timeline`, t.description AS `desc`, s.description AS `summit_desc`, t.timeline AS `timeline`, t.status AS `status`');
        $this->db->from('summit_timelines AS t');
        $this->db->join('summits AS s', 't.id_summit = s.id_summit');
        $this->db->where('id_summit_timeline', $id);
        $result = $this->db->get();

        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return false;
        }
    }
}
