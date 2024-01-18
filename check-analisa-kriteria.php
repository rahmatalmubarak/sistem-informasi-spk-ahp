<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
$config = new Config();
$db = $config->getConnection();
$pro = new Bobot($db);
$hasil = false;
if ($pro->read_analisa_kriteria_all('R1')->rowCount() > 0 && $pro->read_analisa_kriteria_all('R2')->rowCount() > 0 && $pro->read_analisa_kriteria_all('R3')->rowCount() > 0) {
    $hasil = true;
}
echo json_encode(['status' => $hasil]);