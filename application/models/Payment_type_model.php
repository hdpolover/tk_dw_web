<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Payment_type_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_payment_type($id = null)
    {
        if ($id == null) {
            return $this->db->get('payment_types')->result_array();
        } else {
            return $this->db->get_where('payment_types', ['id_payment_type' => $id])->result_array();
        }
    }
}
