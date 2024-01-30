<?php
include_once 'header.php';
include_once 'includes/bobot.inc.php';
include_once 'includes/skor.inc.php';
include_once 'includes/responden.inc.php';
$pro = new Skor($db);
$kriteria = new Bobot($db);
$res = new Responden($db);

$altkriteria = isset($_GET['kriteria']) ? $_GET['kriteria'] : 'C1';
$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();

$all_kriteria = $kriteria->readAll()->fetchAll();
$all_responden = $res->readAll()->fetchAll();

?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			<li><a href="analisa-alternatif.php"><span class="fa fa-balance-scale"></span> Analisa Alternatif</a></li>
			<li class="active"><span class="fa fa-table"></span> Tabel Analisa Alternatif</li>
		</ol>
		<form method="post" action="analisa-alternatif.php">
			<div class="row">
				<div class="col-md-6 text-left">
					<strong style="font-size:18pt;"><span class="fa fa-table"></span> Alternatif Menurut Kriteria</strong>
				</div>
				<div class="col-md-6 text-right">
					<button name="hapus" class="btn btn-danger">Hapus Semua Data</button>
				</div>
			</div>
			<br />
		</form>
		<form action="" method="get">
			<div class="row">
				<div class="col-md-3 text-left">
					<div class="form-group">
						<select class="form-control" name="kriteria" id="kriteria">
							<?php foreach ($all_kriteria as $key => $kriteria) { ?>
								<option value="<?php echo $kriteria['id_kriteria'] ?>" <?php if(isset($_GET['kriteria']) && $_GET['kriteria'] == $kriteria['id_kriteria']) echo 'selected' ?>><?php echo $kriteria['nama_kriteria'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-md-3 text-left">
					<button type="submit" class="btn btn-primary">Kriteria</button>
				</div>
			</div>
		</form>
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
							} else {
								$pro->readAll1($row3['id_alternatif'], $row4['id_alternatif'], $altkriteria);
								echo number_format($pro->kp, 3, '.', ',');
							}
						}
							?>
							</td>
						<?php
					}
						?>
					</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Jumlah</th>
					<?php
					$stmt5 = $pro->readAll2();
					while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
					?>
						<th><?php
							$pro->sum_matriks_perbandingan_alternatif($row5['id_alternatif'], $altkriteria);
							echo number_format($pro->nak, 3, '.', ',');
							?></th>
					<?php
					}
					?>
				</tr>
			</tfoot>

		</table>

		<!-- Pair Wire Comparation -->
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
									echo number_format($hs1, 3, '.', ',');
								} else {
									$pro->readAll1($row3x['id_alternatif'], $row4x['id_alternatif'], $altkriteria);
									$kpx = $pro->kp;
									$jmk = $kpx / $jakx;
									echo number_format($jmk, 3, '.', ',');
								}
								?>
							</td>
						<?php
						}
						?>
						<th style="vertical-align:middle;">
							<?php
							$pro->readAvg($row3x['id_alternatif'], $altkriteria);
							$bbt = $pro->hak;
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
							$pro->readSum2($row5x['id_alternatif'], $altkriteria);
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



	</div>
</div>
<?php
include_once 'footer.php';
?>