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

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lapor_bulan/index', $data);
        $this->load->view('templates/footer');
        //$this->generate();
        // $this->load->view('templates/laporan_pdf/p');
        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('templates/laporan_pdf/try', [], true);
        // $mpdf->WriteHTML($html);
        // $mpdf->Output();
    }

    public function buat()
    {
        // $data['title'] = 'TK DHARMA WANITA';

        // $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar/sidebar_tu', $data);
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('lapor_bulan/buat', $data);
        // $this->load->view('templates/footer');
        //$this->load->view('templates/laporan_pdf/p');

        //$this->load->view('templates/laporan_pdf/trycol');
        try {
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
            $html = $this->load->view('templates/laporan_pdf/final', [], true);
            $mpdf->WriteHTML(utf8_encode($html));
            // Other code
            $mpdf->Output();
        } catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
            // Process the exception, log, print etc.
            echo $e->getMessage();
        }
        // $mpdf = new \Mpdf\Mpdf();
        // $html = $this->load->view('templates/laporan_pdf/p', [], true);
        // $mpdf->WriteHTML(utf8_encode($html));
        // $mpdf->Output("1.pdf", "D");
    }

    public function simpan()
    {
        $bulan = $this->input->post('bulan');
        $tp = $this->input->post('tp');

        $file = $this->buatPdf($bulan, $tp);

        $file = "";
        $data = array(
            "BULAN" => $bulan,
            "TP" => $tp,
            "FILE" => $file,
        );

        $this->lapor_bulan->simpan($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Laporan Bulanan berhasil ditambahkan.</div>');

        $data['title'] = 'TK DHARMA WANITA';
        $data['lapor_bulan'] = $this->lapor_bulan->get_lapor_bulan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar/sidebar_tu', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('lapor_bulan/index', $data);
        $this->load->view('templates/footer');
    }

    public function buatPdf($bulan, $tp)
    {
        $this->load->library('pdfgenerator');

        //data
        $data['title_pdf'] = 'LAPORAN_BULANAN';
        $data['bulan'] = $this->get_bulan($bulan);
        $data['tp'] = $tp;

        $file_pdf = '_LAPORAN_BULANAN__' . date('m-d-Y');

        $paper = 'A4';
        $orientation = 'landscape';

        $html = $this->load->view('templates/laporan_pdf/p', $data, true);

        return $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        // instantiate and use the dompdf class
        // $dompdf = new Dompdf\Dompdf();

        // $dompdf->loadHtml($html);

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper($paper, $orientation);

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Get the generated PDF file contents
        // $pdf = $dompdf->output();

        // return $pdf;
        // Output the generated PDF to Browser
        //$dompdf->stream();
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
