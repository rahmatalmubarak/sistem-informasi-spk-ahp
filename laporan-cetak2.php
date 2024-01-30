<?php
require('includes/fpdf/fpdf.php');

class PDF extends FPDF{
	
	function PDF($orientation='P', $unit='mm', $size='A4'){
	    parent::FPDF($orientation,$unit,$size);
	}
	
	function Header(){
	    $this->SetFont('Arial','B',14);
	    $this->Cell(80);
	    $this->Cell(30,10,'LAPORAN SISTEM PENDUKUNG KEPUTUSAN',0,0,'C');
	    $this->Ln(20);
	}
	
	function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Arial','',8);
	    $this->Cell(0,10,$this->PageNo(),0,0,'R');
	}
	
}

include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='index.php'</script>";
}
$config = new Config();
$db = $config->getConnection();

include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt1y = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
$stmt2y = $pro2->readAll();
include_once 'includes/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
$stmty = $pro->readKhusus();
$count = $pro->countAll();
$stmtx1 = $pro->readBob();
$stmtx2 = $pro->readBob();
$stmtx1y = $pro->readBob();
$stmtx2y = $pro->readBob();

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,10,'Skor Dan Bobot Alternatif Kriteria',0,0,'L');
$pdf->ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(30,7,'Kriteria/Alternatif',1,0,'L');

while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
	if (strlen($row2['nama_kriteria']) >= 21) {
		$pdf->Cell(42, 7, $row2['nama_kriteria'], 1, 0, 'L');
	} else if (strlen($row2['nama_kriteria']) < 23) {
		$pdf->Cell(35, 7, $row2['nama_kriteria'], 1, 0, 'L');
	}
}

$pdf->ln();
$pdf->SetFont('Arial','',9);

while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
	$pdf->Cell(30,7,$row1['nama_alternatif'],1,0,'L');
	$aj= $row1['id_alternatif'];
	$stmt21 = $pro2->readAll();
	while ($row21 = $stmt21->fetch(PDO::FETCH_ASSOC)){
		$bj= $row21['id_kriteria'];
		$stmtr = $pro->readR($aj,$bj);
		while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
			if (strlen($row21['nama_kriteria']) >= 21) {
				$pdf->Cell(42,7,number_format($rowr['skor_alt_kri'], 11, '.', ','),1,0,'L');
			} else if (strlen($row21['nama_kriteria']) < 23) {
				$pdf->Cell(35,7,number_format($rowr['skor_alt_kri'], 11, '.', ','),1,0,'L');
			}
		}
	}
	$pdf->ln();
}
$pdf->Cell(30,7,'Bobot',1,0,'L');
while ($rowx1 = $stmtx1->fetch(PDO::FETCH_ASSOC)){
	if (strlen($rowx1['nama_kriteria']) >= 21) {
		$pdf->Cell(42,7,number_format($rowx1['bobot_kriteria'], 11, '.', ','),1,0,'L');
	} else if (strlen($rowx1['nama_kriteria']) < 23) {
		$pdf->Cell(35,7,number_format($rowx1['bobot_kriteria'], 11, '.', ','),1,0,'L');
	}
}
$pdf->ln();

$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,10,'Hasil Perangkingan',0,0,'L');
$pdf->ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,7,'Kriteria/Alternatif',1,0,'L');
while ($row2y = $stmt2y->fetch(PDO::FETCH_ASSOC)){
	if(strlen($row2y['nama_kriteria']) >= 21){
		$pdf->Cell(39,7,$row2y['nama_kriteria'],1,0,'L');
	} else if (strlen($row2y['nama_kriteria']) < 23) {
		$pdf->Cell(28,7,$row2y['nama_kriteria'],1,0,'L');
	}
}
$pdf->Cell(15,7,'Hasil',1,0,'L');
$pdf->Cell(15,7,'Rangking',1,0,'L');

$pdf->ln();
$pdf->SetFont('Arial','',8);

$no=1;
while ($row1 = $stmt1y->fetch(PDO::FETCH_ASSOC)){
	$pdf->Cell(30,7,$row1['nama_alternatif'],1,0,'L');
	$a1= $row1['id_alternatif'];
	$stmt21 = $pro2->readAll();
	while ($row21 = $stmt21->fetch(PDO::FETCH_ASSOC)){
		$b2= $row21['id_kriteria'];
		$stmtr = $pro->readR($a1,$b2);
		while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
			$xab = $rowr['skor_alt_kri']*$row21['bobot_kriteria'];
			if (strlen($row21['nama_kriteria']) >= 21) {
				$pdf->Cell(39,7,number_format($xab, 5, '.', ','),1,0,'L');
			}else if(strlen($row21['nama_kriteria']) < 23){
				$pdf->Cell(28,7,number_format($xab, 5, '.', ','),1,0,'L');
			}
		}
	}
	$stmthasil = $pro->readHasil2($a1);
	$hasil = $stmthasil->fetch(PDO::FETCH_ASSOC);
	$pdf->Cell(15,7,number_format($hasil['hasil_akhir'], 5, '.', ','),1,0,'L');
	$pdf->Cell(15,7,$no++,1,0,'L');
	$pdf->ln();
}
$pdf->ln();

$pdf->Output();
?>
