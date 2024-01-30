<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/responden.inc.php';
include_once 'includes/kriteria.inc.php';

$config = new Config();
$db = $config->getConnection();
$pro = new Bobot($db);
$res = new Responden($db);
$kriteria = new Kriteria($db);
$hasil = false;
$all_responden = $res->readAll()->fetchAll();
$all_kriteria = $kriteria->readAll()->fetchAll();
foreach ($all_responden as $key => $respondens) {
    foreach ($all_kriteria as $key2 => $kriteria) {
        if ($pro->read_analisa_kriteria_respon($respondens['id_responden'], $kriteria['id_kriteria'])->rowCount() > 0) {
            $hasil = true;
        }else{
            $hasil = false;
            echo json_encode(['status' => $hasil]);
            exit();
        }
    }
}
echo json_encode(['status' => $hasil]);