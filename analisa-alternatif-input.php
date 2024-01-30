<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
include_once 'includes/responden.inc.php';
$config = new Config();
$db = $config->getConnection();
$pro = new Skor($db);
$kriteria = new Bobot($db);
$res = new Responden($db);
$altkriteria = isset($_POST['kriteria']) ? $_POST['kriteria'] : '';
$responden = isset($_POST['responden']) ? $_POST['responden'] : '';

if (isset($_POST['kriteria'])) {
	unset($_POST['kriteria']);
} else {
	unset($_GET['kriteria']);
}

$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();

$stmt2x = $pro->readAll2();
$stmt3x = $pro->readAll2();


$all_kriteria = $kriteria->readAll()->fetchAll();
$all_responden = $res->readAll()->fetchAll();
$run = false;
try {
	if (isset($altkriteria)) {
		$pro->readKri($altkriteria);
		$count = $pro->countAll();
		if (isset($_POST['responden'])) {
			unset($_POST['responden']);
			unset($_POST['subankr']);
			$post = array_chunk($_POST, 3);
			foreach ($post as $key => $alternatif) {
				$pro->read($alternatif[0], $alternatif[2], $altkriteria, $responden) ? $pro->update($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden) : $pro->insert($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden);
			}

			foreach ($post as $key => $alternatif) {
				$pro->read($alternatif[2], $alternatif[0], $altkriteria, $responden) ? $pro->update($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden) : $pro->insert($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden);
			}
			foreach ($post as $key => $alternatif) {
				$pro->read($alternatif[2], $alternatif[0], $altkriteria, $responden) ? $pro->update($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden) : $pro->insert($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden);
			}

			while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
				$stmt4 = $pro->readAll2();
				while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
					if ($row3['id_alternatif'] == $row4['id_alternatif']) {
						$pro->read($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden) ? $pro->update($row3['id_alternatif'], 1 , $row4['id_alternatif'], $altkriteria, $responden) : $pro->insert($row3['id_alternatif'], 1 , $row4['id_alternatif'], $altkriteria, $responden);
					}
				}
			}

			$all_alternatif = [];
			foreach ($all_kriteria as $key => $kriteria) {
				foreach ($all_responden as $key2 => $respondens) {
					if ($pro->read_analisa_alternatif_kriteria($respondens['id_responden'], $kriteria['id_kriteria'])->rowCount() > 0) {
						$all_alternatif[$key] = $pro->get_analisa_alternatif_kriteria($kriteria['id_kriteria'])->fetchAll();
						$run =  true;
					} else {
						$run =  false;
					}
				}
			}

			$all_alternatif_total = [];
			if ($run) {
				foreach ($all_alternatif as $key2 => $alternatifs) {
					$all_alternatif_1 = $alternatifs;
					foreach ($all_alternatif_1 as $key => $value) {
						$total = 1;
						foreach ($alternatifs as $key3 => $alternatif) {
							if ($value['alternatif_pertama'] == $alternatif['alternatif_pertama'] && $value['alternatif_kedua'] == $alternatif['alternatif_kedua'] && $value['id_kriteria'] == $alternatif['id_kriteria']) {
								$total *= $alternatif['nilai_analisa_alternatif'];
								if ($key3 >= count($alternatifs) / 2) {
									$all_alternatif_total[$key2][$key3]['nilai_perbandingan'] = pow($total, 0.33);
									$all_alternatif_total[$key2][$key3]['id_kriteria'] = $alternatif['id_kriteria'];
									$all_alternatif_total[$key2][$key3]['alternatif_pertama'] = $alternatif['alternatif_pertama'];
									$all_alternatif_total[$key2][$key3]['alternatif_kedua'] = $alternatif['alternatif_kedua'];
								}
							}
						}
					}
					// exit();
				}
				$stmt2 = $pro->readAll2();
				$stmt3 = $pro->readAll2();
				while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
					$stmt4 = $pro->readAll2();
					while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
						if ($row3['id_alternatif'] == $row4['id_alternatif']) {
							if ($pro->read_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria)) {
								$pro->update_matriks_perbandingan_alternatif($row3['id_alternatif'], '1', $row4['id_alternatif'],  $altkriteria);
							} else {
								$pro->insert_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], '1', $altkriteria);
							}
						} else {
							foreach ($all_alternatif_total as $key => $kriterias) {
								foreach ($kriterias as $key => $alternatif) {
									if ($alternatif['alternatif_pertama'] == $row3['id_alternatif'] &&  $alternatif['alternatif_kedua'] == $row4['id_alternatif'] && $alternatif['id_kriteria'] == $altkriteria) {
										if ($pro->read_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], $alternatif['id_kriteria'])) {
											$pro->update_matriks_perbandingan_alternatif($row3['id_alternatif'], $alternatif['nilai_perbandingan'], $row4['id_alternatif'], $alternatif['id_kriteria']);
										} else {
											$pro->insert_matriks_perbandingan_alternatif($row3['id_alternatif'],  $row4['id_alternatif'], $alternatif['nilai_perbandingan'], $alternatif['id_kriteria']);
										}
									}
								}
							}
							// exit();
						}
					}
				}
				$stmt5 = $pro->readAll2();
				while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
					$pro->sum_matriks_perbandingan_alternatif($row5['id_alternatif'], $altkriteria);
					if ($pro->read5($row5['id_alternatif'], $altkriteria)) {
						$pro->insert5($pro->nak, $row5['id_alternatif'], $altkriteria);
					} else {
						$pro->insert3($row5['id_alternatif'], $altkriteria, $pro->nak);
					}
				}
	
				while ($row3x = $stmt3x->fetch(PDO::FETCH_ASSOC)) {
					$stmt4x = $pro->readAll2();
					while ($row4x = $stmt4x->fetch(PDO::FETCH_ASSOC)) {
						$pro->readAll3($row4x['id_alternatif'], $altkriteria);
						$jakx = $pro->jak;
						if ($row3x['id_alternatif'] == $row4x['id_alternatif']) {
							$hs1 = 1 / $jakx;
							if ($pro->read_normalisasi_alternatif($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria)) {
								$pro->update_normalisasi_alternatif($row3x['id_alternatif'], $hs1, $row4x['id_alternatif'], $altkriteria, );
							} else {
								$pro->insert_normalisasi_alternatif($row3x['id_alternatif'],$row4x['id_alternatif'], $altkriteria, $hs1);
							}
						} else {
							$pro->readAll1($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
							$kpx = $pro->kp;
							$jmk = $kpx / $jakx;
							if ($pro->read_normalisasi_alternatif($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria)) {
								$pro->update_normalisasi_alternatif($row3x['id_alternatif'], $jmk,$row4x['id_alternatif'], $altkriteria);
							} else {
								$pro->insert_normalisasi_alternatif($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria, $jmk);
							}
						}
					}
					$pro->readAvg($row3x['id_alternatif'], $altkriteria);
					$bbt = $pro->hak;
					$pro->insert4($bbt, $row3x['id_alternatif'], $altkriteria);
				}
			}
		}
	}

	echo json_encode(true);
} catch (\Throwable $e) {
	echo $e;
}
