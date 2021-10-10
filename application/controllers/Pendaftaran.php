<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('pendaftaran_model', 'pendaftaran');
        $this->load->model('jenjang_model', 'jenjang');
    }

    public function index()
    {
        $data['title'] = 'TK DHARMA WANITA';
        $data['jenjang'] = $this->jenjang->get_jenjang();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/daftar');
        $this->load->view('templates/auth_footer');
    }

    private function calcutateAge($dob)
    {

        $dob = date("Y-m-d", strtotime($dob));

        $dobObject = new DateTime($dob);
        $nowObject = new DateTime();

        $diff = $dobObject->diff($nowObject);

        return $diff->y;
    }

    public function daftar_siswa()
    {
        $tanggal = new DateTime();
        $tgl_lahir = $this->input->post("TANGGAL_LAHIR");

        $umur = $this->calcutateAge($tgl_lahir);

        if ($umur <= 5 && $umur >= 4) {
            $nama_lengkap = $this->input->post('NAMA_TERDAFTAR');
            $name = strtoupper(str_replace(' ', '_', trim($nama_lengkap)));

            $upload_image = $_FILES['image']['name'];
            $fileExt = pathinfo($upload_image, PATHINFO_EXTENSION);
            $new_file_name = $name . "_KK." . $fileExt;

            if ($upload_image) {
                $newPath = './assets/kk/';

                if (!is_dir($newPath)) {
                    mkdir($newPath, 0777, TRUE);
                }

                $config['upload_path'] = $newPath; //path folder
                $config['allowed_types'] = 'pdf|jpg|jpeg';
                $config['max_size']      = '10000';
                $config['file_name'] = $new_file_name;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $data = array(
                        "NAMA_TERDAFTAR" => $nama_lengkap,
                        "ID_JENJANG" => $this->input->post('jenjang'),
                        "ALAMAT_TERDAFTAR" => $this->input->post('ALAMAT_TERDAFTAR'),
                        "TEMPAT_LAHIR" => $this->input->post("TEMPAT_LAHIR"),
                        "TGL_LAHIR" => $this->input->post("TANGGAL_LAHIR"),
                        "JENIS_KELAMIN" => $this->input->post("JENIS_KELAMIN"),
                        "NAMA_ORTU" => strtoupper($this->input->post("NAMA_ORTU")),
                        "NIK" => $this->input->post("NIK"),
                        "TGL_PENDAFTARAN" => $tanggal->format("Y-m-d"),
                        "STATUS_SISWA" => "BELUM DIVALIDASI",
                        "NOMOR_HP" => $this->input->post('NOMOR_HP'),
                        "AGAMA" => $this->input->post('AGAMA'),
                        'FILE_KK' => $new_file_name,
                    );

                    $this->pendaftaran->daftar($data);

                    $nama_ortu = strtolower($this->input->post("NAMA_ORTU"));
                    $username_ortu = str_replace(' ', '_', $nama_ortu) . '_' . rand(1, 999);

                    $tanggal = $this->input->post("TANGGAL_LAHIR");
                    $password_ortu = str_replace('-', '', $tanggal);

                    $data_ortu = array(
                        'USERNAME' => $username_ortu,
                        'PASSWORD' => $password_ortu,
                        'ID_ROLE' => 5,
                    );

                    $this->pendaftaran->daftar_ortu($data_ortu);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran berhasil! Silakan tunggu pesan pada WhatsApp Anda untuk pemberitahuan validasi!</div>');
                    redirect('auth');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Umur tidak valid. Umur siswa harus antara 4 - 5 tahun!</div>');
            redirect('pendaftaran');
        }
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

    public function terima_pendaftaran($id)
    {
        $data = $this->pendaftaran->get_pendaftaran($id);

        $nama_ortu = strtolower($data[0]['NAMA_ORTU']);
        $username_ortu = str_replace(' ', '_', $nama_ortu);

        $tanggal = $data[0]["TGL_LAHIR"];
        $password_ortu = str_replace('-', '', $tanggal);

        $nomor = $data[0]["NOMOR_HP"];

        $pesan = "*Selamat! Pendaftaran diterima.*\nSilakan lakukan pembayaran pendaftaran pada website TK Dharma Wanita.
        \nBerikut ini informasi login yang dapat digunakan: \n- Username: _" . $username_ortu . "_" . "\n- Password: _" . $password_ortu . "_" .
            "\n\nTerima kasih.";
        $this->kirim_pesan($nomor, $pesan);

        $this->pendaftaran->update_status($id, "DITERIMA");

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran diterima!</div>');

        redirect('pendaftaran/lihat_pendaftaran');
    }

    public function tolak_pendaftaran($id)
    {
        $nomor = "081350204469";
        $pesan = "*Mohon maaf! Pendaftaran ditolak.*\nSilakan lakukan pembayaran pendaftaran pada website TK Dharma Wanita.
        \nTerima kasih.";
        $this->kirim_pesan($nomor, $pesan);
        $this->pendaftaran->update_status($id, "DITOLAK");

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pendaftaran ditolak!</div>');
        redirect('pendaftaran/lihat_pendaftaran');
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
