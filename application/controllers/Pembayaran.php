<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('pembayaran_model', 'pembayaran');
        $this->load->model('pendaftaran_model', 'pendaftaran');
        $this->load->model('jenjang_model', 'jenjang');
        $this->load->model('siswa_model', 'siswa');
        $this->load->model('user_model', 'user');
        $this->load->model('pelaksanaan_pembelajaran_model', 'pelaksanaan_pembelajaran');
        $this->load->model('pembelajaran_model', 'pembelajaran');
    }

    public function index()
    {
        if ($this->session->userdata('ID_ROLE') == 5) {

            $data['title'] = 'TK DHARMA WANITA';
            $nama = $this->session->userdata('USERNAME');
           $nama_ortu = $this->user->get_nama_ortu($nama);

            $data['pendaftaran'] = $this->pendaftaran->get_siswa_dari_ortu($nama_ortu[0]['NAMA_ORTU']);
            $data['pembayaran'] = $this->pembayaran->get_pembayaran_by_id_daftar($data['pendaftaran'][0]['ID_PENDAFTARAN']);

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_ortu', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembayaran/index_ortu', $data);
            $this->load->view('templates/footer');
        } else {
            $data['title'] = 'TK DHARMA WANITA';
            $data['pembayaran'] = $this->pembayaran->get_pembayaran();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar/sidebar_tu', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pembayaran/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function daftar_siswa()
    {

        $tanggal = new DateTime();

        $data = array(
            "NAMA_TERDAFTAR" => $this->input->post('NAMA_TERDAFTAR'),
            "ID_JENJANG" => $this->input->post('jenjang'),
            "ALAMAT_TERDAFTAR" => $this->input->post('ALAMAT_TERDAFTAR'),
            "TEMPAT_LAHIR" => $this->input->post("TEMPAT_LAHIR"),
            "TGL_LAHIR" => $this->input->post("TANGGAL_LAHIR"),
            "JENIS_KELAMIN" => $this->input->post("JENIS_KELAMIN"),
            "NAMA_ORTU" => $this->input->post("NAMA_ORTU"),
            "NIK" => $this->input->post("NIK"),
            "TGL_PENDAFTARAN" => $tanggal->format("Y-m-d"),
            "STATUS_SISWA" => "BELUM DIVALIDASI",
            "NOMOR_HP" => $this->input->post('NOMOR_HP'),
            "AGAMA" => $this->input->post('AGAMA'),
        );

        //if ($validation->run()) {
        $this->pendaftaran->daftar($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran berhasil! Silakan check WhatsApp Anda!</div>');
        redirect('auth');
    }

    public function lihat_pendaftaran()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);
        $id_jenjang = $data['pendaftaran'][0]['ID_JENJANG'];
        $data['jenjang'] = $this->jenjang->get_jenjang($id_jenjang);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendaftaran/detail', $data);
        $this->load->view('templates/footer');
    }

    public function bayar($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);
        $id_jenjang = $data['pendaftaran'][0]['ID_JENJANG'];
        $data['jenjang'] = $this->jenjang->get_jenjang($id_jenjang);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_ortu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/bayar', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_detail_ortu($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pembayaran'] = $this->pembayaran->get_pembayaran_by_id_daftar($id);
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_ortu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/detail_ortu', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_detail_admin($id)
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['pembayaran'] = $this->pembayaran->get_pembayaran($id);
        $data['pendaftaran'] = $this->pendaftaran->get_pendaftaran($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pembayaran/detail_admin', $data);
        $this->load->view('templates/footer');
    }

    public function simpan_pembayaran($id)
    {
        $now = new DateTime();

        $tujuan = $this->input->post('tujuan');
        $nama_pengirim = $this->input->post('nama_pengirim');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $nominal = $this->input->post('nominal');
        $nomor_rekening = $this->input->post('nomor_pengirim');

        $str = $_FILES['image']['name'];
        $upload_image = str_replace(' ', '_', $str);

        if ($upload_image) {
            $newPath = './assets/img/bukti_pembayaran/';

            if (!is_dir($newPath)) {
                mkdir($newPath, 0777, TRUE);
            }

            $config['upload_path'] = $newPath; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $summit_content_data = array(
                    'ID_PENDAFTARAN' => $id,
                    'TGL_PEMBAYARAN' =>  $tgl_bayar,
                    'TUJUAN_PEMBAYARAN' => $tujuan,
                    'BUKTI_PEMBAYARAN' => $upload_image,
                    'STATUS_PEMBAYARAN' => "BELUM DIVALIDASI",
                    'NAMA_PENGIRIM' => $nama_pengirim,
                    'NOMOR_PENGIRIM' => $nomor_rekening,
                    'NOMINAL' => $nominal,
                );

                $this->pembayaran->simpan($summit_content_data);

                $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert">Pembayaran berhasil! Silakan tunggu validasi.</div>');
                redirect('pembayaran');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function terima_pembayaran($id)
    {
        $text = "DITERIMA";
        //validasi pembayaran
        $this->pembayaran->validasi_pembayaran($id, $text);
        //update status pendaftaran
        $d = $this->pembayaran->get_pembayaran($id);
        $id_pendaftaran = $d[0]['ID_PENDAFTARAN'];

        //$this->pendaftaran->update_status($id_pendaftaran, $text);
        //add siswa
        $s = $this->pendaftaran->get_pendaftaran($id_pendaftaran);
        $digits = 6;
        $nisn = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
        $data = array(
            "ID_PENDAFTARAN" => $s[0]['ID_PENDAFTARAN'],
            "NAMA_SISWA" => $s[0]['NAMA_TERDAFTAR'],
            "ALAMAT_SISWA" => $s[0]['ALAMAT_TERDAFTAR'],
            "TEMPAT_LAHIR" => $s[0]["TEMPAT_LAHIR"],
            "TGL_LAHIR" => $s[0]["TGL_LAHIR"],
            "JK_SISWA" => $s[0]["JENIS_KELAMIN"],
            "NAMA_ORTU" => $s[0]['NAMA_ORTU'],
            "NISN" => $nisn,
            "AGAMA" => $s[0]['AGAMA'],
            "ID_JENJANG" => $s[0]['ID_JENJANG'],
            "STATUS" => "AKTIF",
        );
        $id_siswa = $this->siswa->tambah_siswa($data);

        //tambah siswa ke pembelajaran
        $id_jenjang = $s[0]['ID_JENJANG'];
        $id_pelaksanaan_pembelajaran = $this->pelaksanaan_pembelajaran->get_pp_by_jenjang($id_jenjang);

        $dat = array(
            "ID_SISWA" => $id_siswa,
            "ID_PELAKSANAAN_PEMBELAJARAN" => $id_pelaksanaan_pembelajaran[0]['ID_PELAKSANAAN_PEMBELAJARAN'],
        );

        $this->pembelajaran->simpan($dat);

        //kirim pesan
        $data = $this->pendaftaran->get_pendaftaran($id_pendaftaran);

        $nomor = $data[0]["NOMOR_HP"];

        $pesan = "*Selamat! Pembayaran diterima.*" .
            "\n\nTerima kasih.";
        $this->kirim_pesan($nomor, $pesan);
        //selesai

        $this->session->set_flashdata('message', '<div class ="alert alert-success" style="text-align-center" role ="alert"> Pembayaran sudah divalidasi!</div>');
        redirect('pembayaran');
    }

    public function tolak_pembayaran($id)
    {
        //$text = "DITOLAK";
        //validasi pembayaran
        $this->pembayaran->hapus_pembayarna($id);

        $d = $this->pembayaran->get_pembayaran($id);
        $id_pendaftaran = $d[0]['ID_PENDAFTARAN'];

        //kirim pesan
        $data = $this->pendaftaran->get_pendaftaran($id_pendaftaran);

        $nomor = $data[0]["NOMOR_HP"];

        $pesan = "*Mohon maaf! Pembayaran anda telah ditolak Silakan ulangi melakukan pembayaran lagi pada website.*" .
            "\n\nTerima kasih.";
        $this->kirim_pesan($nomor, $pesan);

        $this->session->set_flashdata('message', '<div class ="alert alert-danger" style="text-align-center" role ="alert"> Pembayaran ditolak!</div>');
        redirect('pembayaran');
    }

    public function kirim_pesan($nomor_hp, $pesan)
    {
        $curl = curl_init();
        $token = "K8ezHUpicFAOcP2TPCD8NgwWj8dUMXoRGUdaHJLQKelC740cySxCtkJ2MmURY3ke";
        $data = [
            'phone' => $nomor_hp,
            'message' => $pesan,
            'secret' => false, // or true
            'priority' => false, // or true
        ];

        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, "https://tx.wablas.com/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);

        echo "<pre>";
        print_r($result);
    }
}
