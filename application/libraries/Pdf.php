<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load TCPDF library
require_once APPPATH . 'vendor/autoload.php';
/**
 * pdf 라이브러리
 */
class Pdf {
    public function down(string $title, string $subject, string $contents) {
        // Create new PDF document
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator('이대호');
        $pdf->SetTitle($title);
        $pdf->SetSubject($subject);
        $pdf->SetKeywords('Document, Keywords');

        // Set default font
        $pdf->SetFont('nanumbrushscript', '', 12);

        // Add a page
        $pdf->AddPage();

        // Add content to the page
        $pdf->Write(0, $contents);

        // Output the PDF document as a string
        $pdf_data = $pdf->Output('document.pdf', 'S');

        // Set headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="document.pdf"');

        // Output the PDF document to the browser
        echo $pdf_data;
    }

}

