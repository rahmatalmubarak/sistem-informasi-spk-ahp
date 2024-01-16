<?php
include_once 'header.php';
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
$pro = new Skor($db);
$kriteria = new Bobot($db);
$altkriteria = isset($_POST['kriteria']) ? $_POST['kriteria'] : $_GET['kriteria'];
$responden = isset($_POST['responden']) ? $_POST['responden'] : $_GET['responden'];

if (isset($_POST['kriteria'])) {
	unset($_POST['kriteria']);
} else {
	unset($_GET['kriteria']);
}

$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();
if (isset($altkriteria)) {
	$pro->readKri($altkriteria);
	$count = $pro->countAll();
	if (isset($_POST['subankr'])) {
		unset($_POST['responden']);
		unset($_POST['subankr']);
		$post = array_chunk($_POST, 3);
		foreach ($post as $key => $alternatif) {
			$pro->read($alternatif[0], $alternatif[2], $altkriteria, $responden) ? $pro->update($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden) : $pro->insert($alternatif[0], $alternatif[1], $alternatif[2], $altkriteria, $responden);
		}

		foreach ($post as $key => $alternatif) {
			$pro->read($alternatif[2], $alternatif[0], $altkriteria, $responden) ? $pro->update($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden) : $pro->insert($alternatif[2], 1 / $alternatif[1], $alternatif[0], $altkriteria, $responden);
		}

		$all_kriteria = $kriteria->readAll()->fetchAll();

		$run = false;
		foreach ($all_kriteria as $key => $kriteria) {
			if ($pro->read_analisa_alternatif_kriteria('R1', $kriteria['id_kriteria'])->rowCount() > 0 || $pro->read_analisa_alternatif_kriteria('R1', $kriteria['id_kriteria'])->rowCount() > 0 || $pro->read_analisa_alternatif_kriteria('R1', $kriteria['id_kriteria'])->rowCount() > 0) {
				$all_alternatif_R1[$key] = $pro->read_analisa_alternatif_kriteria('R1', $kriteria['id_kriteria'])->fetchAll();
				$all_alternatif_R2[$key] = $pro->read_analisa_alternatif_kriteria('R2', $kriteria['id_kriteria'])->fetchAll();
				$all_alternatif_R3[$key] = $pro->read_analisa_alternatif_kriteria('R3', $kriteria['id_kriteria'])->fetchAll();
				$run = true;
			} else {
				$run = false;
			}
		}

		if ($run) {
			$all_alternatif_total = [];
			foreach ($all_alternatif_R1 as $key => $alternatifs) {
				foreach ($alternatifs as $key2 => $alternatif) {
					$all_alternatif_total[$key][$key2]['nilai_perbandingan'] = pow($all_alternatif_R1[$key][$key2]['nilai_analisa_alternatif'] * $all_alternatif_R2[$key][$key2]['nilai_analisa_alternatif'] * $all_alternatif_R3[$key][$key2]['nilai_analisa_alternatif'], 0.33);
					$all_alternatif_total[$key][$key2]['id_kriteria'] = $all_alternatif_R1[$key][$key2]['id_kriteria'];
					$all_alternatif_total[$key][$key2]['alternatif_pertama'] = $all_alternatif_R1[$key][$key2]['alternatif_pertama'];
					$all_alternatif_total[$key][$key2]['alternatif_kedua'] = $all_alternatif_R1[$key][$key2]['alternatif_kedua'];
				}
			}
		}
	}
	if (isset($_POST['hapus'])) {
		$pro->delete();
	}
?>
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12">
			<ol class="breadcrumb">
				<li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
				<li><a href="analisa-alternatif.php"><span class="fa fa-balance-scale"></span> Analisa Alternatif</a></li>
				<li class="active"><span class="fa fa-table"></span> Tabel Analisa Alternatif</li>
			</ol>
			<form method="post">
				<div class="row">
					<div class="col-md-6 text-left">
						<strong style="font-size:18pt;"><span class="fa fa-table"></span> Alternatif Menurut Kriteria</strong>
					</div>
					<div class="col-md-6 text-right">
						<button name="hapus" class="btn btn-danger">Hapus Semua Data</button>
					</div>
				</div>
				<br />

				<table width="100%" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $pro->kri ?></th>
							<?php
							while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
							?>
								<th><?php echo $row2['nama_alternatif'] ?></th>
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
								<th style="vertical-align:middle;"><?php echo $row3['nama_alternatif'] ?></th>
								<?php
								$stmt4 = $pro->readAll2();
								while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
								?>
									<td style="vertical-align:middle;">
										<?php
										if ($row3['id_alternatif'] == $row4['id_alternatif']) {
											echo '1';
											if ($pro->read($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden)) {
												$pro->update($row3['id_alternatif'], '1', $row4['id_alternatif'], $altkriteria, $responden);
											} else {
												$pro->insert($row3['id_alternatif'], '1', $row4['id_alternatif'], $altkriteria, $responden);
											}
										} else {
											$pro->readAll1($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden);
											echo number_format($pro->kp, 3, '.', ',');
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
									$pro->readSum1($row5['id_alternatif'], $altkriteria, $responden);
									echo number_format($pro->nak, 3, '.', ',');
									if ($pro->read5($row5['id_alternatif'], $altkriteria)) {
										$pro->insert5($pro->nak, $row5['id_alternatif'], $altkriteria);
									} else {
										$pro->insert3($row5['id_alternatif'], $altkriteria, $pro->nak);
									}
									?></th>
							<?php
							}
							?>
						</tr>
					</tfoot>

				</table>
			</form>

			<?php
			if ($run) {
			?>
				<!-- Matriks Perbandingan -->
				<table width="100%" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Matriks Perbandingan</th>
							<?php
							$stmt2 = $pro->readAll2();
							$stmt3 = $pro->readAll2();
							while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
							?>
								<th><?php echo $row2['nama_alternatif'] ?></th>
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
								<th style="vertical-align:middle;"><?php echo $row3['nama_alternatif'] ?></th>
								<?php
								$stmt4 = $pro->readAll2();
								while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
								?>
									<td style="vertical-align:middle;">
										<?php
										if ($row3['id_alternatif'] == $row4['id_alternatif']) {
											echo '1';
											if ($pro->read_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria, $responden)) {
												$pro->update_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], '1', $altkriteria);
											} else {
												$pro->insert_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], '1', $altkriteria);
											}
										} else {
											foreach ($all_alternatif_total as $key => $matriks_perbandingan_alternatif) {
												foreach ($matriks_perbandingan_alternatif as $key2 => $alternatif) {
													if ($alternatif['alternatif_pertama'] == $row3['id_alternatif'] &&  $alternatif['alternatif_kedua'] == $row4['id_alternatif'] && $alternatif['id_kriteria'] == $altkriteria) {
														if ($pro->read_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], $alternatif['id_kriteria'])) {
															$pro->update_matriks_perbandingan_alternatif($row3['id_alternatif'], $row4['id_alternatif'], $alternatif['nilai_perbandingan'], $alternatif['id_kriteria']);
														} else {
															$pro->insert_matriks_perbandingan_alternatif($row3['id_alternatif'],  $row4['id_alternatif'], $alternatif['nilai_perbandingan'], $alternatif['id_kriteria']);
														}
														echo number_format($alternatif['nilai_perbandingan'], 3, '.', ',');
													}
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
									$pro->readSum1($row5['id_alternatif'], $altkriteria, $responden);
									echo number_format($pro->nak, 3, '.', ',');
									if ($pro->read5($row5['id_alternatif'], $altkriteria)) {
										$pro->insert5($pro->nak, $row5['id_alternatif'], $altkriteria);
									} else {
										$pro->insert3($row5['id_alternatif'], $altkriteria, $pro->nak);
									}
									?></th>
							<?php
							}
							?>
						</tr>
					</tfoot>

				</table>


				<table width="100%" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Pair Wire Comparation</th>
							<?php
							$stmt2x = $pro->readAll2();
							$stmt3x = $pro->readAll2();
							while ($row2x = $stmt2x->fetch(PDO::FETCH_ASSOC)) {
							?>
								<th><?php echo $row2x['nama_alternatif'] ?></th>
							<?php
							}
							?>
							<th>Skor</th>
						</tr>
					</thead>

					<tbody>
						<?php
						while ($row3x = $stmt3x->fetch(PDO::FETCH_ASSOC)) {
						?>
							<tr>
								<th style="vertical-align:middle;"><?php echo $row3x['nama_alternatif'] ?></th>
								<?php
								$stmt4x = $pro->readAll2();
								while ($row4x = $stmt4x->fetch(PDO::FETCH_ASSOC)) {
								?>
									<td style="vertical-align:middle;">
										<?php
										$pro->readAll3($row4x['id_alternatif'], $altkriteria);
										$jakx = $pro->jak;
										if ($row3x['id_alternatif'] == $row4x['id_alternatif']) {
											$hs1 = 1 / $jakx;
											$pro->insert2($hs1, $row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
											echo number_format($hs1, 3, '.', ',');
										} else {
											$pro->readAll1($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria, $responden);
											$kpx = $pro->kp;
											$jmk = $kpx / $jakx;
											$pro->insert2($jmk, $row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
											echo number_format($jmk, 3, '.', ',');
											echo $row3x['id_alternatif'];
										}
										?>
									</td>
								<?php
								}
								?>
								<th style="vertical-align:middle;">
									<?php
									$pro->readAvg($row3x['id_alternatif'], $altkriteria, $responden);
									$bbt = $pro->hak;
									$pro->insert4($bbt, $row3x['id_alternatif'], $altkriteria);
									echo number_format($bbt, 3, '.', ',');
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
									$pro->readSum2($row5x['id_alternatif'], $altkriteria, $responden);
									echo number_format($pro->nak, 3, '.', ',');
									?></th>
							<?php
							}
							?>
							<th><?php
								$pro->readSum3($altkriteria);
								echo number_format($pro->bb, 3, '.', ',');
								?></th>
						</tr>
					</tfoot>

				</table>

			<?php
					} else {
					?>
						<div class="row">
							<div class="col-xs-12 text-center">
								<strong style="font-size:13pt;">Responden Belum Lengkap, <a href="/sistem-informasi-spk-uin-ahp/analisa-alternatif.php">Klik untuk melengkapi</a></strong>
							</div>
						</div>
					<?php
					}
					?>
			


		</div>
	</div>
<?php
} else {
	header('location: analisa-alternatif.php');
}
include_once 'footer.php';
?>