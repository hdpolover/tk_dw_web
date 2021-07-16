<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Payment_model extends CI_Model
{
  public function get_payment($id = null)
  {
    if ($id == null) {
      $query = "SELECT pay.*, pd.full_name, a.username AS `admin`, s.description AS `summit`, pt.description AS `payment_type`
      from payments pay
      INNER join participants par on pay.id_participant = par.id_participant
      INNER join participant_details pd on par.id_participant = pd.id_participant
      inner join admins a on a.id_admin = pay.id_admin
      inner join payment_types pt on pt.id_payment_type = pay.id_payment_type
      inner join summits s on s.id_summit = par.id_summit";

      return $this->db->query($query)->result_array();
    } else {
      $query = "SELECT pay.*, pd.full_name, a.username AS `admin`, s.description AS `summit`, pt.description AS `payment_type`
      from payments pay
      INNER join participants par on pay.id_participant = par.id_participant
      INNER join participant_details pd on par.id_participant = pd.id_participant
      inner join admins a on a.id_admin = pay.id_admin
      inner join payment_types pt on pt.id_payment_type = pay.id_payment_type
      inner join summits s on s.id_summit = par.id_summit
      where pay.id_payment = " . $id . "";
      return $this->db->query($query)->result_array();
    }
  }

  public function add_payment($data)
  {
    $this->db->insert('payments', $data);
    return $this->db->affected_rows();
  }

  public function getPembayaran()
  {
    // code...
    $query = "SELECT `participants`.*, `payments`.*, `summit`.`desc`, `payment_types`.`description`
                  FROM `participants`
                  LEFT JOIN `payments` ON `participants`.`id_participant` = `payments`.`id_participant`
                  LEFT JOIN `summit` ON `participants`.`id_summit` = `summit`.`id_summit`
                  LEFT JOIN `payment_types` ON `payments`.`id_payment_type` = `payment_types`.`id_payment_type` ";

    return $this->db->query($query)->result_array();
  }

  public function getPembayaranById($id)
  {
    if ($id === NULL) {
      return $this->db->get('payments',)->result_array();
    }
    $query = "SELECT `participants`.*, `payments`.*, `summit`.`desc`, `payment_types`.`description`, `participant_details`.*
                  FROM `participants`
             LEFT JOIN `participant_details` ON `participants`.`id_participant` = `participant_details`.`id_participant`
             LEFT JOIN `payments` ON `participants`.`id_participant` = `payments`.`id_participant`
             LEFT JOIN `summit` ON `participants`.`id_summit` = `summit`.`id_summit`
             LEFT JOIN `payment_types` ON `payments`.`id_payment_type` = `payment_types`.`id_payment_type`
                 WHERE `participants`.`id_participant` = $id ";

    return $this->db->query($query)->result_array();
  }
}
