<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
$config = new Config();
$db = $config->getConnection();
$pro = new Skor($db);
$kriteria = new Bobot($db);
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
try {
	if (isset($altkriteria)) {
		$pro->readKri($altkriteria);
		$count = $pro->countAll();
		if (isset($_POST['responden'])) {
			unset($_POST['responden']);
			unset($_POST['subankr']);
			// var_dump($_POST);exit();
			$post = array_chunk($_POST, 3);
			foreach ($post as $key => $alternatif) {
				$pro->read($alternatif[0], $alternatif[2], $altkriteria, $responden) ? $pro->update($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden) : $pro->insert($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden);
			}

			foreach ($post as $key => $alternatif) {
				$pro->read($alternatif[2], $alternatif[0], $altkriteria, $responden) ? $pro->update($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden) : $pro->insert($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden);
			}

			while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
				$stmt4 = $pro->readAll2();
				while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
					if ($row3['id_alternatif'] == $row4['id_alternatif']) {
						if ($pro->read($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden)) {
							$pro->update($row3['id_alternatif'], '1', $row4['id_alternatif'], $altkriteria, $responden);
						} else {
							$pro->insert($row3['id_alternatif'], '1', $row4['id_alternatif'], $altkriteria, $responden);
						}
					} else {
						$pro->readAll1($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden);
					}
				}
			}
			$stmt5 = $pro->readAll2();
			while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
				$pro->readSum1($row5['id_alternatif'], $altkriteria, $responden);
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
						$pro->insert2($hs1, $row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
					} else {
						$pro->readAll1($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria, $responden);
						$kpx = $pro->kp;
						$jmk = $kpx / $jakx;
						$pro->insert2($jmk, $row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
					}
				}
			}
		}
	}

	echo json_encode(true);
} catch (\Throwable $e) {
	echo $e;
}