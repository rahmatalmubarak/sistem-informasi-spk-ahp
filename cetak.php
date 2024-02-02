<?php
require('includes/dompdf/autoload.inc.php');
$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/',$uri);
$html1 = file_get_contents("http://localhost/".$uri[1]."/laporan-cetak.php");

// echo $html1;
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html1);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

