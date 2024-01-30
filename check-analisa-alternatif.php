<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
include_once 'includes/kriteria.inc.php';
include_once 'includes/responden.inc.php';

$config = new Config();
$db = $config->getConnection();
$pro = new Skor($db);
$kriteria = new Bobot($db);
$res = new Responden($db);
$hasil = false;

$all_kriteria = $kriteria->readAll()->fetchAll();
$all_responden = $res->readAll()->fetchAll();
foreach ($all_kriteria as $key => $kriteria) {
    foreach ($all_responden as $key => $responden) {
        if ($pro->read_analisa_alternatif_kriteria($responden['id_responden'], $kriteria['id_kriteria'])->rowCount() > 0) {
            $hasil = true;
        }else{
            $hasil = false;
            echo json_encode(['status' => $hasil]);
            exit();
        }
    }
}
echo json_encode(['status' => $hasil]);