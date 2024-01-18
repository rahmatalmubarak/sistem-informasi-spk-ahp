<?php
include_once 'header.php';
include_once 'includes/skor.inc.php';
$pro1 = new Skor($db);
$count1 = $pro1->countAll();
include_once 'includes/kriteria.inc.php';
$pro3 = new Kriteria($db);
include_once 'includes/nilai.inc.php';
$pro2 = new Nilai($db);

if (isset($_POST['hapus'])) {
	$pro1->delete();
}
/*if($_POST){
	
	include_once 'includes/bobot.inc.php';
	$eks = new Bobot($db);

	$eks->nm = $_POST['nm'];
	
	if($eks->insert()){
?>
<script type="text/javascript">
window.onload=function(){
	showStickySuccessToast();
};
</script>
<?php
	}
	
	else{
?>
<script type="text/javascript">
window.onload=function(){
	showStickyErrorToast();
};
</script>
<?php
	}
}*/
?>
<div class="row">
	<!--		  <div class="col-xs-12 col-sm-12 col-md-2">
		  <?php
			//			include_once 'sidebar.php';
			?>
		  </div>-->
	<div class="col-xs-12 col-sm-12 col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
			<li class="active"><span class="fa fa-balance-scale"></span> Analisa Alternatif</li>
			<li><a href="#" data-toggle="modal" data-target="#myModalalt"><span class="fa fa-table"></span> Tabel Analisa Alternatif</a></li>
		</ol>
		<!-- Modal -->
		<div class="modal fade" id="myModalalt" tabindex="-1" role="dialog" aria-labelledby="myModalLabelalt">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabelalt">Pilih Kriteria</h4>
					</div>
					<div class="modal-body">
						<div class="list-group">
							<?php
							$stmt5 = $pro3->readAll();
							while ($row5 = $stmt5->fetch(PDO::FETCH_ASSOC)) {
							?>
								<a href="analisa-alternatif-tabel.php?kriteria=<?php echo $row5['id_kriteria'] ?>" class="list-group-item"><?php echo $row5['nama_kriteria'] ?></a>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-bomb"></span> Analisa Alternatif</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">

				<form method="post" action="analisa-alternatif-input.php" id="form_alternatif">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<p style="padding:10px 0;"><label>Pilih Kriteria</label></p>
							</div>
						</div>
						<div class="col-xs-12 col-md-9">
							<div class="form-group">
								<select class="form-control" id="kriteria" name="kriteria">
									<?php
									$stmt4 = $pro3->readAll();
									while ($row4 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
									?>
										<option value="<?php echo $row4['id_kriteria'] ?>"><?php echo $row4['nama_kriteria'] ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<p style="padding:10px 0;"><label>Pilih Responden</label></p>
							</div>
						</div>
						<div class="col-xs-12 col-md-9">
							<div class="form-group">
								<select class="form-control" id="alternatif_responden" name="responden">
									<option value="R1">Responden 1</option>
									<option value="R2">Responden 2</option>
									<option value="R3">Responden 3</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<label>Kriteria Pertama</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="form-group">
								<label>Penilaian</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<label>Kriteria Kedua</label>
							</div>
						</div>
					</div>

					<?php
					$stmt2 = $pro1->readAll();
					$row = $pro1->readAll()->fetchAll();
					$j = 0;
					for ($i = 0; $i < count($row); $i++) {
						for ($j = count($row) - 1; $j >= $i; $j--) {
							if ($row[$i]['nama_alternatif'] != $row[$j]['nama_alternatif']) {
					?>
								<div class="row">
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row[$i]['nama_alternatif'] ?>" readonly />
											<input type="hidden" name="A<?php echo $row[$i]['id_alternatif'];
																		echo $row[$j]['id_alternatif'] ?>" value="<?php echo $row[$i]['id_alternatif'] ?>" />
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="form-group col-lg-12">
											<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
												<?php
												$stmt1 = $pro2->readAll();
												while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
												?>
													<input type="radio" class="btn-check" name="nl<?php echo $row[$i]['id_alternatif'];echo $row[$j]['id_alternatif']; ?>" id="nl<?php echo $row[$i]['id_alternatif'];echo $row[$j]['id_alternatif'];echo str_replace('.', '', $row2['jum_nilai']) ?>" value="<?php echo $row2 ['jum_nilai'] ?>">
													<label class="btn btn-data btn-outline-primary" for="nl<?php echo $row[$i]['id_alternatif'];echo $row[$j]['id_alternatif'];echo str_replace('.', '', $row2['jum_nilai']) ?>"><?php echo $row2['label'] ?></label>
												<?php
												}
												?>
											</div>
											<!-- <select class="form-control" name="nl<?php echo $row[$i]['id_alternatif'];
																						echo $row[$j]['id_alternatif'] ?>">
												<?php
												$stmt1 = $pro2->readAll();
												while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
												?>
													<option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
												<?php
												}
												?>
											</select> -->
										</div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row[$j]['nama_alternatif'] ?>" readonly />
											<input type="hidden" name="B<?php echo $row[$i]['id_alternatif'];
																		echo $row[$j]['id_alternatif'] ?>" value="<?php echo $row[$j]['id_alternatif'] ?>" />
										</div>
									</div>
								</div>
					<?php
							}
						}
					}
					?>
					<div style="display: flex;justify-content: space-between;">
						<button type="submit" class="btn btn-primary"> Tambah <span class="fa fa-plus"></span></button>
						<a href="analisa-alternatif-tabel.php" id="hasil_alternatif" class="btn btn-primary"> Hasil <span class="fa fa-arrow-right"></span></a>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>