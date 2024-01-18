<?php
include "includes/config.php";
$config = new Config();
$db = $config->getConnection();
include_once 'includes/kriteria.inc.php';
$kriteria = new Kriteria($db);

$kriteria_responden = $kriteria->get_kriteria_responden($_GET['responden'])->fetchAll();

echo json_encode($kriteria_responden, JSON_PRETTY_PRINT);
