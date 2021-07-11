<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Peserta_model extends CI_Model
{
  public function getPeserta()
  {
    // code...
    $query = "SELECT `participant_details`.*, `participants`.*, `summit`.`desc`
                FROM `participant_details` LEFT JOIN `participants` ON `participant_details`.`id_participant` = `participants`.`id_participant`
                LEFT JOIN `summit` ON `participants`.`id_summit` = `summit`.`id_summit` ";

    return $this->db->query($query)->result_array();
  }
  public function getPesertaById($id)
  {
    if ($id === NULL) {
      return $this->db->get('participants',)->result_array();
    }
    $query = "SELECT `participant_details`.*, `participants`.*, `summit`.`desc`, `regist_info_detail`.`info_ybb`
                FROM `participants`
          INNER JOIN `participant_details` ON `participants`.`id_participant` = `participant_details`.`id_participant`
          INNER JOIN `summit` ON `participants`.`id_summit` = `summit`.`id_summit`
          INNER JOIN `regist_info_detail` ON `participants`.`id_participant` = `regist_info_detail`.`id_participant`
               WHERE `participants`.`id_participant` = $id ";

    return $this->db->query($query)->result_array();
  }

  public function hapusPeserta($id)
  {
    //$this->db->delete('participants', 'participants_detail', 'payments', 'regist_info_detail' ['id_participant' => $id]);

    $this->db->delete('participant_details', ['id_participant' => $id]);
    $this->db->delete('payments', ['id_participant' => $id]);
    $this->db->delete('regist_info_detail', ['id_participant' => $id]);
    $this->db->delete('participants', ['id_participant' => $id]);
    return $this->db->affected_rows();
  }

  public function tambahPeserta()
  {
      $data1 = [
        "id_summit" => $this->input->post('summit', true),
        "email" => $this->input->post('email', true),
        "status" => $this->input->post('status', true),
        "portal_password" => $this->input->post('ppassword', true),
        "is_fully_funded" => $this->input->post('fullyfunded', true)
      ];

      $data2 = [
        "full_name" => $this->input->post('fullname', true),
        "birth_date" => $this->input->post('birth', true),
        "essay" => $this->input->post('essay', true),
      ];

      $data3 = [
        "id_payment_type" => $this->input->post('payment', true),
        "bank_name" => $this->input->post('bank', true),
        "account_name" => $this->input->post('account', true),
        "payment_date" => $this->input->post('paymentdate', true),
        "proof" => $this->input->post('proof', true)
      ];

      $data4 = [
        "info_ybb" => $this->input->post('infoybb', true)
      ];
      $this->db->insert('participant_details', $data2);
      $this->db->insert('participants', $data1);
      $this->db->insert('payments', $data3);
      $this->db->insert('regist_info_detail', $data4);
      redirect('peserta');
  }
}
