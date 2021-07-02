<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Pembayaran_model extends CI_Model
{
    public function getPembayaran()
    {
      // code...
      $query = "SELECT `participants`.*, `payments`.*, `summit`.`desc`, `payment_types`.`description`
                  FROM `participants` LEFT JOIN `payments` ON `participants`.`id_participant` = `payments`.`id_participant`
                  LEFT JOIN `summit` ON `participants`.`id_summit` = `summit`.`id_summit`
                  LEFT JOIN `payment_types` ON `payments`.`id_payment_type` = `payment_types`.`id_payment_type` ";

      return $this->db->query($query)->result_array();
    }

}
