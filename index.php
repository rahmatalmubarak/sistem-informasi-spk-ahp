<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
include_once 'includes/bobot.inc.php';
$pro5 = new Bobot($db);
$stmt5 = $pro5->readAll();
?>
<div class="row">
	<!--		  <div class="col-xs-12 col-sm-12 col-md-2">
		  	<?php
				//			include_once 'sidebar.php';
				?>
		  </div>-->
	<br><br><br>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div id="container2" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
		<br />
		<div class="row" style="display: flex; justify-content: center;">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<table class="table table-striped table-bordered">
					<thead>
						<th>Kriteria</th>
						<th>Sub Kriteria</th>
						<th>Range Nilai</th>
					</thead>
					<tbody>
						<tr>
							<td rowspan="3" style="text-align: center; vertical-align: middle">IPK</td>
							<td><3.50</td>
							<td>Nilai 2 - 4</td>
						</tr>
						<tr>
							<td>3.50</td>
							<td>Nilai 4 - 6</td>
						</tr>
						<tr>
							<td>3.50 - 4.00</td>
							<td>Nilai 6 - 9</td>
						</tr>
		
						<tr>
							<td rowspan="4" style="text-align: center; vertical-align: middle">Prestasi Akademik</td>
							<td>Tidak Ada </td>
							<td>Nilai 2 - 3</td>
						</tr>
						<tr>
							<td>Lokal</td>
							<td>Nilai 3 - 5</td>
						</tr>
						<tr>
							<td>Nasional</td>
							<td>Nilai 5 - 7</td>
						</tr>
						<tr>
							<td>Internasional</td>
							<td>Nilai 7 - 9</td>
						</tr>
		
						<tr>
							<td rowspan="4" style="text-align: center; vertical-align: middle;">Prestasi Non Akademik</td>
							<td>Tidak Ada </td>
							<td>Nilai 2 - 3</td>
						</tr>
						<tr>
							<td>Lokal</td>
							<td>Nilai 3 - 5</td>
						</tr>
						<tr>
							<td>Nasional</td>
							<td>Nilai 5 - 7</td>
						</tr>
						<tr>
							<td>Internasional</td>
							<td>Nilai 7 - 9</td>
						</tr>
						<tr>
							<td rowspan="3" style="text-align: center; vertical-align: middle">Berkelakuan Baik</td>
							<td rowspan="3"></td>
							<td rowspan="3"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Kriteria & Bobot</h3>
					</div>
					<div class="panel-body">
						<ol>
							<?php
							while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
							?>
								<li><?php echo $row2['nama_kriteria'] ?></li>
							<?php
							}
							?>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Skor Alternatif & Hasil</h3>
					</div>
					<div class="panel-body">
						<ol>
							<?php
							while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
							?>
								<li><?php echo $row1['nama_alternatif'] ?></li>
							<?php
							}
							?>
						</ol>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<footer class="text-center">&copy; 2024 | Penerimaan beasiswa PPA UIN Imam Bonjol Padang</footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<script>
	var chart1; // globally available
	$(document).ready(function() {
		chart1 = new Highcharts.Chart({
			chart: {
				renderTo: 'container2',
				type: 'column'
			},
			title: {
				text: 'Grafik Perangkingan '
			},
			xAxis: {
				categories: ['Alternatif']
			},
			yAxis: {
				title: {
					text: 'Jumlah Nilai'
				}
			},
			series: [
				<?php
				while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
				?>
					//data yang diambil dari database dimasukan ke variable nama dan data
					//
					{
						name: "<?php echo $row4['nama_alternatif'] ?>",
						data: [<?php echo $row4['hasil_akhir'] ?>]
					},
				<?php } ?>
			]
		});
	});
</script>
</body>

</html>