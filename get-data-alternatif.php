<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
include_once 'includes/alternatif.inc.php';
$alternatif = new alternatif($db);

$alternatif_responden = $alternatif->get_alternatif_responden($_GET['responden'], $_GET['kriteria'])->fetchAll();

echo json_encode($alternatif_responden, JSON_PRETTY_PRINT);
