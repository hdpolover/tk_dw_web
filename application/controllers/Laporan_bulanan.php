<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_bulanan extends CI_Controller
{
    public function __construct()
    {
        // code...
        parent::__construct();
    }

    public function index()
    {
        //$this->generate();
        //$this->load->view('templates/laporan_pdf/try');
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('templates/laporan_pdf/try', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function generate()
    {
        $this->load->library('pdfgenerator');
        $data['title_pdf'] = 'LAPORAN_BULANAN';

        $file_pdf = '_LAPORAN_BULANAN__' . date('m-d-Y');

        $paper = 'A4';
        $orientation = "portrait";

        $html = $this->load->view('templates/laporan_pdf/try', $data, true);

        // $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf\Dompdf();

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Get the generated PDF file contents
        $pdf = $dompdf->output();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    public function laporan_pdf()
    {

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            )
        );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    }
}
