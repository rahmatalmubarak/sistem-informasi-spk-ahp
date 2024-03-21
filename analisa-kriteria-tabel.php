<?php
//  ob_start();
include_once 'header.php';
include_once 'includes/bobot.inc.php';
include_once 'includes/kriteria.inc.php';
include_once 'includes/responden.inc.php';
$pro = new Bobot($db);
$res = new Responden($db);
$responden = $_GET['responden'];
$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();
$jum_kriteria = $pro->countAll();

$run = false;

$responden_all = $res->readAll()->fetchAll();
foreach ($responden_all as $key => $respon) {
	if($pro->read_analisa_kriteria_all($respon['id_responden'])->rowCount() > 0){
		$run = true;
	}else{
		$run = false;
	}
}

if ($run) {
	foreach ($responden_all as $key => $respon) {
		$all_kriteria[$key] = $pro->read_analisa_kriteria_all($respon['id_responden'])->fetchAll();
	}
	$all_kriteria_total = [];
	$all_kriteria_1 = $all_kriteria[0];
	foreach ($all_kriteria_1 as $key => $analisa_kriteria) {
		$total = 1;
		for ($i=0; $i < count($all_kriteria); $i++) {
			foreach ($all_kriteria[$i] as $key2 => $kriteria_value) {
				if($kriteria_value['kriteria_pertama'] == $analisa_kriteria['kriteria_pertama'] && $kriteria_value['kriteria_kedua'] == $analisa_kriteria['kriteria_kedua']){
					$total *= $kriteria_value['nilai_analisa_kriteria'];
				}
			}
		}
		$all_kriteria_total[$key]['nilai_perbandingan'] =  pow($total, 0.33);
		$all_kriteria_total[$key]['kriteria_pertama'] = $all_kriteria_1[$key]['kriteria_pertama'];
		$all_kriteria_total[$key]['kriteria_kedua'] = $all_kriteria_1[$key]['kriteria_kedua'];
	}
} else {
	$run = false;
}

?>
<div class="row">
	<!--	<div class="col-xs-12 col-sm-12 col-md-2">
		  	<?php
				//			include_once 'sidebar.php';
				?>
	</div>-->
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			<li><a href="analisa-kriteria.php"><span class="fa fa-bomb"></span> Analisa Kriteria</a></li>
			<li class="active"><span class="fa fa-table"></span> Tabel Analisa Kriteria</li>
		</ol>

		<form method="post" action="analisa-kriteria.php">
			<div class="row">
				<div class="col-md-6 text-left">
					<strong style="font-size:18pt;"><span class="fa fa-table"></span> Perbandingan Kriteria</strong>
				</div>
				<div class="col-md-6 text-right">
					<button name="hapus" class="btn btn-danger">Hapus Semua Data</button>
				</div>
			</div>
			<br />
		</form>
			<!-- Matriks perbandingan -->
			<table width="100%" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Matriks Perbandingan</th>
						<?php
						$stmt2 = $pro->readAll2();
						$stmt3 = $pro->readAll2();

						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
						?>
							<th><?php echo $row2['nama_kriteria'] ?></th>
						<?php
						}
						?>
					</tr>
				</thead>

				<tbody>
					<?php
					while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
					?>
						<tr>
							<th style="vertical-align:middle;"><?php echo $row3['nama_kriteria'] ?></th>
							<?php
							$stmt4 = $pro->readAll2();
							while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
							?>
								<td style="vertical-align:middle;">
									<?php

									if ($row3['id_kriteria'] == $row4['id_kriteria']) {
										echo '1';
										if ($pro->read_matriks_perbandingan($row3['id_kriteria'], $row4['id_kriteria'])) {
											$pro->update_matriks_perbandingan($row3['id_kriteria'], $row4['id_kriteria'], '1');
										} else {
											$pro->insert_matriks_perbandingan($row3['id_kriteria'], $row4['id_kriteria'], '1');
										}
									} else {
										foreach ($all_kriteria_total as $key => $matriks_perbandingan_kriteria) {
											if ($matriks_perbandingan_kriteria['kriteria_pertama'] == $row3['id_kriteria'] &&  $matriks_perbandingan_kriteria['kriteria_kedua'] == $row4['id_kriteria']) {
												if ($pro->read_matriks_perbandingan($row3['id_kriteria'], $row4['id_kriteria'])) {
													$pro->update_matriks_perbandingan($row3['id_kriteria'], $row4['id_kriteria'], $matriks_perbandingan_kriteria['nilai_perbandingan'],);
												} else {
													$pro->insert_matriks_perbandingan($row3['id_kriteria'],  $row4['id_kriteria'], $matriks_perbandingan_kriteria['nilai_perbandingan'],);
												}
												echo number_format($matriks_perbandingan_kriteria['nilai_perbandingan'], 3, '.', ',');
											}
										}
									}
									?>
								</td>
							<?php
							}
							?>
						</tr>
					<?php
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>Jumlah</th>
						<?php
						$stmt5 = $pro->readAll2();
						while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
						?>
							<th><?php
								$pro->sum_matriks_perbandingan($row5['id_kriteria'], $responden);
								echo number_format($pro->nak, 3, '.', ',');
								$pro->insert3($pro->nak, $row5['id_kriteria']);
								?></th>
						<?php
						}
						?>
					</tr>
				</tfoot>
			</table>

			<!-- Normalisasi -->
			<table width="100%" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Normalisasi</th>
						<?php
						$stmt2x = $pro->readAll2();
						$stmt3x = $pro->readAll2();
						while ($row2x = $stmt2x->fetch(PDO::FETCH_ASSOC)) {
						?>
							<th><?php echo $row2x['nama_kriteria'] ?></th>
						<?php
						}
						?>
						<th>Prioritas</th>
					</tr>
				</thead>

				<tbody>
					<?php
					while ($row3x = $stmt3x->fetch(PDO::FETCH_ASSOC)) {
					?>
						<tr>
							<th style="vertical-align:middle;"><?php echo $row3x['nama_kriteria'] ?></th>
							<?php
							$stmt4x = $pro->readAll2();
							while ($row4x = $stmt4x->fetch(PDO::FETCH_ASSOC)) {
							?>
								<td style="vertical-align:middle;">
									<?php
									if ($row3x['id_kriteria'] == $row4x['id_kriteria']) {
										$hs1 = 1 / $row4x['jumlah_kriteria'];
										$pro->insert2($hs1, $row3x['id_kriteria'], $row4x['id_kriteria']);
									} else {
										$pro->readAll1($row3x['id_kriteria'], $row4x['id_kriteria'], $responden);
										$jmk = $pro->kp / $row4x['jumlah_kriteria'];
										$pro->insert2($jmk, $row3x['id_kriteria'], $row4x['id_kriteria']);
									}
									if ($row3x['id_kriteria'] == $row4x['id_kriteria']) {
										$hs1 = 1 / $row4x['jumlah_kriteria'];
										if ($pro->read_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'])) {
											$pro->update_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'], $hs1);
										} else {
											$pro->insert_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'], $hs1);
										}
										echo number_format($hs1, 3, '.', ',');
									} else {
										$pro->read_all_nilai_matriks_perbandingan($row3x['id_kriteria'], $row4x['id_kriteria']);
										$jmk = $pro->kp / $row4x['jumlah_kriteria'];
										if ($pro->read_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'])) {
											$pro->update_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'], $jmk);
										} else {
											$pro->insert_normalisasi_kriteria($row3x['id_kriteria'], $row4x['id_kriteria'], $jmk);
										}
										echo number_format($jmk, 3, '.', ',');
									}
									?>
								</td>
							<?php
							}
							?>
							<th style="vertical-align:middle;"><?php
																$pro->readAvg($row3x['id_kriteria']);
																$bbt = $pro->hak;
																echo number_format($bbt, 3, '.', ',');
																$pro->insert4($bbt, $row3x['id_kriteria']);
																?></th>
						</tr>
					<?php
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>Jumlah</th>
						<?php
						$stmt5x = $pro->readAll2();
						while ($row5x = $stmt5x->fetch(PDO::FETCH_ASSOC)) {
						?>
							<th><?php
								$pro->readSum2($row5x['id_kriteria']);
								echo number_format($pro->nak, 3, '.', ',');
								?></th>
						<?php
						}
						?>
						<th>
							<?php
							$pro->readSum3();
							echo number_format($pro->bb, 3, '.', ',');
							?>
						</th>
					</tr>
				</tfoot>

			</table>
			<!-- CI -->
			<?php
			$kriteria = new Kriteria($db);
			$all_kriteria = $kriteria->readAll()->fetchAll();
			$matriks_perbandingan_kriteria_all = $pro->read_all_matriks_perbandingan()->fetchAll();
			foreach ($matriks_perbandingan_kriteria_all as $key => $nilai_perbandingan_kriteria) {
				foreach ($all_kriteria as $index => $data_kriteria) {
					if ($nilai_perbandingan_kriteria['id_kriteria_kedua'] == $data_kriteria['id_kriteria']) {
						$matriks_perbandingan_kriteria_all[$key]['temp'] = $nilai_perbandingan_kriteria['nilai_perbandingan'] * $data_kriteria['bobot_kriteria'];
					}
				}
			}
			$temp_total_x_prioritas = [];
			$temp = 0;
			$jum = 0;
			foreach ($matriks_perbandingan_kriteria_all as $key => $nilai_x_prioritas) {
				foreach ($all_kriteria as $index => $data_kriteria) {
					if ($nilai_x_prioritas['id_kriteria_pertama'] == $data_kriteria['id_kriteria']) {
						$temp += $nilai_x_prioritas['temp'];
						$temp_total_x_prioritas[$data_kriteria['id_kriteria']] = $temp;
						$jum++;
					}
					if ($jum == $jum_kriteria) {
						$temp = 0;
						$jum = 0;
					}
				}
			}
			foreach ($temp_total_x_prioritas as $key => $total_x_prioritas) {
				foreach ($all_kriteria as $index => $data_kriteria) {
					if ($key == $data_kriteria['id_kriteria']) {
						$temp_total_x_prioritas[$data_kriteria['id_kriteria']] = $temp_total_x_prioritas[$data_kriteria['id_kriteria']] / $data_kriteria['bobot_kriteria'];
					}
				}
			}
			$max = array_sum($temp_total_x_prioritas) / $jum_kriteria;

			$ci = ($max - $jum_kriteria) / ($jum_kriteria - 1);

			$cr = $ci / 0.9;


			?>

			<table width="100%" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Max</th>
						<th>CI</th>
						<th>CR</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td style="vertical-align:middle;"><?= $max; ?></td>
						<td style="vertical-align:middle;"><?= $ci; ?></td>
						<td style="vertical-align:middle;"><?= $cr; ?></td>
					</tr>
				</tbody>
			</table>
	</div>
</div>
<?php

include_once 'footer.php';
?>