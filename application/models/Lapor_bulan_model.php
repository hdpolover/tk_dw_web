<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_bulan_model extends CI_Model
{

  public function simpan($data)
  {
    return $this->db->insert("laporan_bulanan", $data);
  }

  public function get_lapor_bulan($id = null)
  {
    if ($id == null) {
      return $this->db->get('laporan_bulanan')->result_array();
    } else {
      return $this->db->get_where('laporan_bulanan', ['ID_LAPORAN_BULANAN' => $id])->result_array();
    }
  }

  public function masuk_bulan_ini($bulan, $tahun, $jenjang, $kelamin)
  {
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun and ID_JENJANG = $jenjang and JENIS_KELAMIN = '$kelamin' and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function jumlah_masuk_bulan_ini($bulan, $tahun)
  {
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun  and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function pada_bulan_ini()
  {
    $query = "SELECT count(*) as total from daftar_siswa where STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function pada_bulan_lalu()
  {
    $query = "SELECT count(*) as total from daftar_siswa where STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function tema_minggu($bulan, $minggu)
  {
    $query = "select rencana_pembelajaran.TEMA from rencana_pembelajaran where periode = '$bulan' and minggu = $minggu;";
    return $this->db->query($query)->result_array();
  }

  public function agama_siswa($bulan, $kelamin, $agama)
  {
    $query = "select count(*) as total from daftar_siswa where daftar_siswa.JENIS_KELAMIN = '$kelamin' and daftar_siswa.AGAMA = '$agama' and month(daftar_siswa.TGL_PENDAFTARAN) = $bulan and daftar_siswa.STATUS_SISWA = 'Diterima';";
    return $this->db->query($query)->result_array();
  }

  public function get_ruangan()
  {
    $query = "select count(*) as total from sarpras where sarpras.JENIS_SARPRAS = 'Ruangan';";
    return $this->db->query($query)->result_array();
  }

  public function banyak_hari($bulan)
  {
    $query = "select count(*) as total from presensi_siswa where month(TGL_PRESENSI) = $bulan group by month(TGL_PRESENSI);";
    return $this->db->query($query)->result_array();
  }

  public function get_data_pegawai($bulan, $tp)
  {
    $query = "SELECT p.*,
MAX(CASE WHEN jp.`STATUS` = 1 THEN jp.JUMLAH_PRESENSI END) j_alpha,
MAX(CASE WHEN jp.`STATUS` = 4 THEN jp.JUMLAH_PRESENSI END) j_izin,
MAX(CASE WHEN jp.`STATUS` = 3 THEN jp.JUMLAH_PRESENSI END) j_sakit
FROM pegawai AS p
LEFT JOIN (
SELECT * FROM presensi_pegawai WHERE MONTH(TGL_PRESENSI) = $bulan AND YEAR(TGL_PRESENSI) = $tp
) AS pp ON pp.ID_PEGAWAI = p.ID_PEGAWAI
LEFT JOIN (
SELECT ID_PEGAWAI, `STATUS`, COUNT(*) AS jumlah_presensi FROM presensi_pegawai WHERE MONTH(TGL_PRESENSI) = $bulan AND YEAR(TGL_PRESENSI) = $tp
GROUP BY ID_PEGAWAI, `STATUS`
) AS jp ON jp.ID_PEGAWAI = p.ID_PEGAWAI
GROUP BY p.ID_PEGAWAI;";
    return $this->db->query($query)->result_array();
  }

  public function get_presensi_pegawai($bulan, $tp)
  {
    $query = "SELECT p.*,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 1 THEN pp.`STATUS` END) pres_1,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 2 THEN pp.`STATUS` END) pres_2,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 3 THEN pp.`STATUS` END) pres_3,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 4 THEN pp.`STATUS` END) pres_4,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 5 THEN pp.`STATUS` END) pres_5,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 6 THEN pp.`STATUS` END) pres_6,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 7 THEN pp.`STATUS` END) pres_7,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 8 THEN pp.`STATUS` END) pres_8,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 9 THEN pp.`STATUS` END) pres_9,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 10 THEN pp.`STATUS` END) pres_10,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 11 THEN pp.`STATUS` END) pres_11,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 12 THEN pp.`STATUS` END) pres_12,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 13 THEN pp.`STATUS` END) pres_13,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 14 THEN pp.`STATUS` END) pres_14,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 15 THEN pp.`STATUS` END) pres_15,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 16 THEN pp.`STATUS` END) pres_16,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 17 THEN pp.`STATUS` END) pres_17,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 18 THEN pp.`STATUS` END) pres_18,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 19 THEN pp.`STATUS` END) pres_19,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 20 THEN pp.`STATUS` END) pres_20,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 21 THEN pp.`STATUS` END) pres_21,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 22 THEN pp.`STATUS` END) pres_22,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 23 THEN pp.`STATUS` END) pres_23,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 24 THEN pp.`STATUS` END) pres_24,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 25 THEN pp.`STATUS` END) pres_25,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 26 THEN pp.`STATUS` END) pres_26,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 27 THEN pp.`STATUS` END) pres_27,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 28 THEN pp.`STATUS` END) pres_28,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 29 THEN pp.`STATUS` END) pres_29,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 30 THEN pp.`STATUS` END) pres_30,
    MAX(CASE WHEN DAY(pp.TGL_PRESENSI) = 31 THEN pp.`STATUS` END) pres_31,
    MAX(CASE WHEN jp.`STATUS` = 1 THEN jp.JUMLAH_PRESENSI END) j_alpha,
    MAX(CASE WHEN jp.`STATUS` = 4 THEN jp.JUMLAH_PRESENSI END) j_izin,
    MAX(CASE WHEN jp.`STATUS` = 3 THEN jp.JUMLAH_PRESENSI END) j_sakit
    FROM pegawai AS p
    LEFT JOIN (
    SELECT * FROM presensi_pegawai WHERE MONTH(TGL_PRESENSI) = $bulan AND YEAR(TGL_PRESENSI) = $tp
    ) AS pp ON pp.ID_PEGAWAI = p.ID_PEGAWAI
    LEFT JOIN (
    SELECT ID_PEGAWAI, `STATUS`, COUNT(*) AS jumlah_presensi
    FROM presensi_pegawai WHERE MONTH(TGL_PRESENSI) = $bulan AND YEAR(TGL_PRESENSI) = $tp
    GROUP BY ID_PEGAWAI, `STATUS`
    ) AS jp ON jp.ID_PEGAWAI = p.ID_PEGAWAI
    GROUP BY p.ID_PEGAWAI;";
    return $this->db->query($query)->result_array();
  }

  public function get_agama_siswa_akhir_bulan_ini($bulan, $tp, $kelamin, $agama)
  {
    $query = "select count(*) as total from daftar_siswa where daftar_siswa.JENIS_KELAMIN = '$kelamin' and daftar_siswa.AGAMA = '$agama' and daftar_siswa.STATUS_SISWA = 'DITERIMA' and month(TGL_PENDAFTARAN) = $bulan and year(TGL_PENDAFTARAN) = $tp;";
    return $this->db->query($query)->result_array();
  }

  public function get_akhir_bulan_ini($bulan, $tahun, $jenjang, $kelamin)
  {
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun and ID_JENJANG = $jenjang and JENIS_KELAMIN = '$kelamin' and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function get_jumlah_akhir_bulan_ini($bulan, $tahun)
  {
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun  and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function get_agama_siswa_akhir_bulan_lalu($bulan, $tp, $kelamin, $agama)
  {
    $bulan = $bulan - 1;
    $query = "select count(*) as total from daftar_siswa where daftar_siswa.JENIS_KELAMIN = '$kelamin' and daftar_siswa.AGAMA = '$agama' and daftar_siswa.STATUS_SISWA = 'DITERIMA' and month(TGL_PENDAFTARAN) = $bulan and year(TGL_PENDAFTARAN) = $tp;";
    return $this->db->query($query)->result_array();
  }

  public function get_akhir_bulan_lalu($bulan, $tahun, $jenjang, $kelamin)
  {
    $bulan = $bulan - 1;
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun and ID_JENJANG = $jenjang and JENIS_KELAMIN = '$kelamin' and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }

  public function get_jumlah_akhir_bulan_lalu($bulan, $tahun)
  {
    $bulan = $bulan - 1;
    $query = "SELECT count(*) as total from daftar_siswa where month(TGL_PENDAFTARAN)=$bulan and year(TGl_PENDAFTARAN)=$tahun  and STATUS_SISWA = 'DITERIMA';";
    return $this->db->query($query)->result_array();
  }


  public function get_presensi_siswa($bulan, $tahun)
  {
    $query = "SELECT s.*,
    MAX(CASE WHEN jp.`STATUS` = 1 THEN jp.JUMLAH_PRESENSI END) j_alpha,
    MAX(CASE WHEN jp.`STATUS` = 4 THEN jp.JUMLAH_PRESENSI END) j_izin,
    MAX(CASE WHEN jp.`STATUS` = 3 THEN jp.JUMLAH_PRESENSI END) j_sakit
    FROM siswa AS s
    LEFT JOIN (
    SELECT ID_SISWA, `STATUS`, COUNT(*) AS jumlah_presensi
    FROM presensi_siswa WHERE MONTH(TGL_PRESENSI) = $bulan AND YEAR(TGL_PRESENSI) = $tahun
    GROUP BY ID_SISWA, `STATUS`
    ) AS jp ON jp.ID_SISWA = s.ID_SISWA
    GROUP BY s.ID_SISWA;";
    return $this->db->query($query)->result_array();
  }

  public function get_siswa_belajar()
  {
    $query = "select count(*) as total_siswa from pembelajaran";
    return $this->db->query($query)->result_array();
  }
}
