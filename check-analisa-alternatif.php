<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
include_once 'includes/kriteria.inc.php';
$config = new Config();
$db = $config->getConnection();
$pro = new Skor($db);
$kriteria = new Bobot($db);
$hasil = false;

$all_kriteria = $kriteria->readAll()->fetchAll();
foreach ($all_kriteria as $key => $kriteria) {
    if ($pro->read_analisa_alternatif_kriteria('R1', $kriteria['id_kriteria'])->rowCount() > 0 && $pro->read_analisa_alternatif_kriteria('R2', $kriteria['id_kriteria'])->rowCount() > 0 && $pro->read_analisa_alternatif_kriteria('R3', $kriteria['id_kriteria'])->rowCount() > 0) {
        $hasil = true;
    }else{
        $hasil = false;
    }
}
echo json_encode(['status' => $hasil]);