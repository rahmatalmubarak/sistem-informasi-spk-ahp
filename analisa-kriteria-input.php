<?php
include_once "includes/config.php";
include_once 'includes/bobot.inc.php';
include_once 'includes/kriteria.inc.php';
$config = new Config();
$db = $config->getConnection();
$pro = new Bobot($db);
$responden = isset($_POST['responden']) ? $_POST['responden'] : '';
$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();
$jum_kriteria = $pro->countAll();
try {
	if (isset($_POST['responden'])) {
		unset($_POST['subankr']);
		unset($_POST['responden']);
		$post = array_chunk($_POST, 3);
		foreach ($post as $key => $alternatif) {
			$pro->read2($alternatif[0], $alternatif[2], $responden) ? $pro->update($alternatif[0], $alternatif[1], $alternatif[2], $responden) : $pro->insert($alternatif[0], $alternatif[1], $alternatif[2], $responden);
		}
	
		foreach ($post as $key => $alternatif) {
			$pro->read2($alternatif[2], $alternatif[0], $responden) ? $pro->update($alternatif[2], 1 / $alternatif[1], $alternatif[0], $responden) : $pro->insert($alternatif[2], 1 / $alternatif[1], $alternatif[0], $responden);
		}
	
		while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
			$stmt4 = $pro->readAll2();
			while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
				if ($row3['id_kriteria'] == $row4['id_kriteria']) {
					if ($pro->read($row3['id_kriteria'], $row4['id_kriteria'], $responden)) {
						$pro->update($row3['id_kriteria'], '1', $row4['id_kriteria'], $responden);
					} else {
						$pro->insert($row3['id_kriteria'], '1', $row4['id_kriteria'], $responden);
					}
				} else {
					$pro->readAll1($row3['id_kriteria'], $row4['id_kriteria'], $responden);
				}
			}
		}
		$stmt5 = $pro->readAll2();
		while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
			$pro->readSum1($row5['id_kriteria'], $responden);
			$pro->insert3($pro->nak, $row5['id_kriteria']);
		}

		echo json_encode(true);	
	}
} catch (\Throwable $e) {
	echo $e;
}