<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_bulanan extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        $this->load->model('lapor_bulan_model', 'lapor_bulan');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['lapor_bulan'] = $this->lapor_bulan->get_lapor_bulan();

        if ($this->session->set_userdata($data['ID_ROLE']) == 4) {
            $data['title'] = 'TK DHARMA WANITA';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_kepsek', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapor_bulan/index', $data);
            $this->load->view('templates/footer');
        } else if ($this->session->set_userdata($data['ID_ROLE']) == 1) {
            $data['title'] = 'TK DHARMA WANITA';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_tu', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lapor_bulan/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function buat()
    {
        $data['title'] = 'TK DHARMA WANITA';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lapor_bulan/buat', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $jenis = $this->input->post('jenis_laporan');
        $bulan = $this->input->post('bulan');
        $tp = $this->input->post('tp');

        $file = "";
        if ($jenis == 1) {
            $file = $this->buatLaporanBulanan($bulan, $tp);
        } else if ($jenis == 2) {
            $file = $this->buatLaporanPersonalia($bulan, $tp);
        } else {
            $file = $this->buatLaporanDaftarHadirPegawai($bulan, $tp);
        }

        if ($file == "pernah") {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Laporan Bulanan sudah pernah dibuat!</div>');

            redirect('laporan_bulanan/index');
        } else {
            $data = array(
                "BULAN" => $bulan,
                "TP" => $tp,
                "FILE" => $file,
            );

            $this->lapor_bulan->simpan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan Bulanan berhasil ditambahkan.</div>');

            redirect('laporan_bulanan/index');
        }
    }

    public function buatLaporanPersonalia($bulan, $tp)
    {
        //$this->load->view('templates/laporan_pdf/personalia');
        $data['pegawai'] = $this->lapor_bulan->get_data_pegawai($bulan, $tp);
        $data['bulan'] = $this->get_bulan($bulan);
        $nama_file = 'Laporan_personalia_' . $bulan . '-' . $tp . '.pdf';

        try {
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $html = $this->load->view('templates/laporan_pdf/personalia', $data, true);
            $mpdf->WriteHTML(utf8_encode($html));
            // Other code
            if (!realpath(FILE_PATH . $nama_file)) {
                $mpdf->Output(FILE_PATH . $nama_file, 'F');
            } else {
                return "pernah";
            }

            return $nama_file;
            //$mpdf->Output('Laporan_personalia_'.$bulan.'-'.$tp.'.pdf', 'D');
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }
    }

    public function buatLaporanDaftarHadirPegawai($bulan, $tp)
    {
        //$this->load->view('templates/laporan_pdf/presensi_pegawai');

        $data['presensi_pegawai'] = $this->lapor_bulan->get_presensi_pegawai($bulan, $tp);
        $data['bulan'] = $this->get_bulan($bulan);
        $nama_file = 'Laporan_presensi_pegawai_' . $bulan . '-' . $tp . '.pdf';

        try {
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $html = $this->load->view('templates/laporan_pdf/presensi_pegawai', $data, true);
            $mpdf->WriteHTML(utf8_encode($html));
            // Other code
            if (!realpath(FILE_PATH . $nama_file)) {
                $mpdf->Output(FILE_PATH . $nama_file, 'F');
            } else {
                return "pernah";
            }

            return $nama_file;
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }
    }

    public function buatLaporanBulanan($bulan, $tp)
    {
        //data
        $data['title_pdf'] = 'LAPORAN_BULANAN';
        $convert_bulan = $this->get_bulan($bulan);
        $data['bulan'] = $convert_bulan;
        $data['tp'] = $tp;
        $data['masuk_bulan_ini_A_L'] = $this->lapor_bulan->masuk_bulan_ini($bulan, $tp, 1, 'Laki-Laki');
        $data['masuk_bulan_ini_A_P'] = $this->lapor_bulan->masuk_bulan_ini($bulan, $tp, 1, 'Perempuan');
        $data['masuk_bulan_ini_B_L'] = $this->lapor_bulan->masuk_bulan_ini($bulan, $tp, 2, 'Laki-Laki');
        $data['masuk_bulan_ini_B_P'] = $this->lapor_bulan->masuk_bulan_ini($bulan, $tp, 2, 'Perempuan');
        $data['jumlah_masuk_bulan_ini'] = $this->lapor_bulan->jumlah_masuk_bulan_ini($bulan, $tp);

        $data['agama_islam_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Islam');
        $data['agama_islam_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Islam');
        $data['agama_kristen_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Kristen');
        $data['agama_kristen_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Kristen');
        $data['agama_katolik_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Katolik');
        $data['agama_katolik_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Katolik');
        $data['agama_hindu_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Hindu');
        $data['agama_hindu_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Hindu');
        $data['agama_budha_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Budha');
        $data['agama_budha_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Budha');
        $data['agama_lain_L'] = $this->lapor_bulan->agama_siswa($bulan, 'Laki-Laki', 'Lain-lain');
        $data['agama_lain_P'] = $this->lapor_bulan->agama_siswa($bulan, 'Perempuan', 'Lain-lain');

        $data['pada_bulan_ini'] = $this->lapor_bulan->pada_bulan_ini();
        $data['tema_minggu_1'] = $this->lapor_bulan->tema_minggu($convert_bulan, 1);
        $data['tema_minggu_2'] = $this->lapor_bulan->tema_minggu($convert_bulan, 2);
        $data['tema_minggu_3'] = $this->lapor_bulan->tema_minggu($convert_bulan, 3);
        $data['tema_minggu_4'] = $this->lapor_bulan->tema_minggu($convert_bulan, 4);
        $data['tema_minggu_5'] = $this->lapor_bulan->tema_minggu($convert_bulan, 5);
        $data['banyak_hari'] = $this->lapor_bulan->banyak_hari($bulan);


        //akhir bulan ini
        $data['agama_islam_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Islam');
        $data['agama_islam_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Islam');
        $data['agama_kristen_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Kristen');
        $data['agama_kristen_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Kristen');
        $data['agama_katolik_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Katolik');
        $data['agama_katolik_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Katolik');
        $data['agama_hindu_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Hindu');
        $data['agama_hindu_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Hindu');
        $data['agama_budha_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Budha');
        $data['agama_budha_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Budha');
        $data['agama_lain_L_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Laki-Laki', 'Lain-lain');
        $data['agama_lain_P_akhir_bulan_ini'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_ini($bulan, $tp, 'Perempuan', 'Lain-lain');
        $data['akhir_bulan_ini_A_L'] = $this->lapor_bulan->get_akhir_bulan_ini($bulan, $tp, 1, 'Laki-Laki');
        $data['akhir_bulan_ini_A_P'] = $this->lapor_bulan->get_akhir_bulan_ini($bulan, $tp, 1, 'Perempuan');
        $data['akhir_bulan_ini_B_L'] = $this->lapor_bulan->get_akhir_bulan_ini($bulan, $tp, 2, 'Laki-Laki');
        $data['akhir_bulan_ini_B_P'] = $this->lapor_bulan->get_akhir_bulan_ini($bulan, $tp, 2, 'Perempuan');
        $data['jumlah_akhir_bulan_ini'] = $this->lapor_bulan->get_jumlah_akhir_bulan_ini($bulan, $tp);

        //akhir bulan lalu
        $data['agama_islam_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Islam');
        $data['agama_islam_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Islam');
        $data['agama_kristen_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Kristen');
        $data['agama_kristen_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Kristen');
        $data['agama_katolik_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Katolik');
        $data['agama_katolik_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Katolik');
        $data['agama_hindu_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Hindu');
        $data['agama_hindu_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Hindu');
        $data['agama_budha_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Budha');
        $data['agama_budha_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Budha');
        $data['agama_lain_L_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Laki-Laki', 'Lain-lain');
        $data['agama_lain_P_akhir_bulan_lalu'] = $this->lapor_bulan->get_agama_siswa_akhir_bulan_lalu($bulan, $tp, 'Perempuan', 'Lain-lain');
        $data['akhir_bulan_lalu_A_L'] = $this->lapor_bulan->get_akhir_bulan_lalu($bulan, $tp, 1, 'Laki-Laki');
        $data['akhir_bulan_lalu_A_P'] = $this->lapor_bulan->get_akhir_bulan_lalu($bulan, $tp, 1, 'Perempuan');
        $data['akhir_bulan_lalu_B_L'] = $this->lapor_bulan->get_akhir_bulan_lalu($bulan, $tp, 2, 'Laki-Laki');
        $data['akhir_bulan_lalu_B_P'] = $this->lapor_bulan->get_akhir_bulan_lalu($bulan, $tp, 2, 'Perempuan');
        $data['jumlah_akhir_bulan_lalu'] = $this->lapor_bulan->get_jumlah_akhir_bulan_lalu($bulan, $tp);
        $data['ruangan'] = $this->lapor_bulan->get_ruangan();

        //presensi
        $presensi_siswa = $this->lapor_bulan->get_presensi_siswa($bulan, $tp);

        $jumlah_alpha = 0;
        $jumlah_sakit = 0;
        $jumlah_izin = 0;

        for ($i = 0; $i < sizeof($presensi_siswa); $i++) {
            $jumlah_alpha += $presensi_siswa[$i]['j_alpha'];
            $jumlah_sakit += $presensi_siswa[$i]['j_sakit'];
            $jumlah_izin += $presensi_siswa[$i]['j_izin'];
        }

        $jumlah = $jumlah_alpha + $jumlah_izin + $jumlah_sakit;

        $data['jumlah_presensi'] = [$jumlah_sakit, $jumlah_izin, $jumlah_alpha, $jumlah];

        $data['persen_presensi'] = $this->convert_presensi($bulan, $data['jumlah_presensi']);

        $nama_file = 'Laporan_bulanan_' . $bulan . '-' . $tp . '.pdf';

        try {
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $html = $this->load->view('templates/laporan_pdf/final', $data, true);
            $mpdf->WriteHTML(utf8_encode($html));
            $mpdf->AddPage();
            $html1 = $this->load->view('templates/laporan_pdf/p', $data, true);
            $mpdf->WriteHTML(utf8_encode($html1));
            // Other code
            if (!realpath(FILE_PATH . $nama_file)) {
                $mpdf->Output(FILE_PATH . $nama_file, 'F');
            } else {
                return "pernah";
            }

            return $nama_file;
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }
    }

    public function convert_presensi($bulan, $data)
    {
        $total_siswa_belajar = $this->lapor_bulan->get_siswa_belajar();
        $total_hari = $this->lapor_bulan->banyak_hari($bulan);

        //data
        $total_siswa = $total_siswa_belajar[0]['total_siswa'];
        $total_hari_1 = $total_hari[0]['total'];

        $persen_sakit = round(((($data[0] * 100) / ($total_siswa * $total_hari_1)) * 100) / 100);
        $persen_izin = round(((($data[1] * 100) / ($total_siswa * $total_hari_1)) * 100) / 100);
        $persen_alpha = round(((($data[2] * 100) / ($total_siswa * $total_hari_1)) * 100) / 100);
        $persen_semua = $persen_izin + $persen_sakit + $persen_alpha;

        return [$persen_sakit, $persen_izin, $persen_alpha, $persen_semua];
    }

    public function get_bulan($bulan)
    {
        $nama_bulan = "";
        switch ($bulan) {
            case 1:
                $nama_bulan = "Januari";
                break;
            case 2:
                $nama_bulan = "Februari";
                break;
            case 3:
                $nama_bulan = "Maret";
                break;
            case 4:
                $nama_bulan = "April";
                break;
            case 5:
                $nama_bulan = "Mei";
                break;
            case 6:
                $nama_bulan = "Juni";
                break;
            case 7:
                $nama_bulan = "Juli";
                break;
            case 8:
                $nama_bulan = "Agustus";
                break;
            case 9:
                $nama_bulan = "September";
                break;
            case 10:
                $nama_bulan = "Oktober";
                break;
            case 11:
                $nama_bulan = "November";
                break;
            case 12:
                $nama_bulan = "Desember";
                break;
            default:
                $nama_bulan = "";
                break;
        }

        return $nama_bulan;
    }
}
