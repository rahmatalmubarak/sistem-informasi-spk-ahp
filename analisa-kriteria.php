<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro1 = new Kriteria($db);
$count1 = $pro1->countAll();
include_once 'includes/nilai.inc.php';
$pro2 = new Nilai($db);
include_once 'includes/kriteria.inc.php';
$pro3 = new Kriteria($db);
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
			<li class="active"><span class="fa fa-bomb"></span> Analisa Kriteria</li>
			<li><a href="analisa-kriteria-tabel.php"><span class="fa fa-table"></span> Tabel Analisa Kriteria</a></li>
		</ol>

		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-bomb"></span> Analisa Kriteria</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" action="analisa-kriteria-tabel.php">
					<div class="row">
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<p style="padding:10px 0;"><label>Pilih Responden</label></p>
							</div>
						</div>
						<div class="col-xs-12 col-md-9">
							<div class="form-group">
								<select class="form-control" id="responden" name="responden">
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
								<label>Pernilaian</label>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="form-group">
								<label>Kriteria Kedua</label>
							</div>
						</div>
					</div>
					<?php
					$row = $pro1->readAll();
					$row = $row->fetchAll();
					$j = 0;
					for ($i = 0; $i < count($row); $i++) {
						for ($j = count($row) - 1; $j >= $i; $j--) {
							if ($row[$i]['nama_kriteria'] != $row[$j]['nama_kriteria']) {

					?>
								<div class="row">
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row[$i]['nama_kriteria'] ?>" readonly />
											<input type="hidden" name="C<?php echo $row[$i]['id_kriteria'];
																		echo $row[$j]['id_kriteria'] ?>" value="<?php echo $row[$i]['id_kriteria'] ?>" />
										</div>
									</div>
									<div class="col-xs-12 col-md-6">
										<div class="form-group">
											<select class="form-control" name="nl<?php echo $row[$i]['id_kriteria'];
																					echo $row[$j]['id_kriteria'] ?>">
												<?php
												$stmt1 = $pro2->readAll();
												while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
												?>
													<option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['label'] ?></option>
												<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-md-3">
										<div class="form-group">
											<input type="text" class="form-control" value="<?php echo $row[$j]['nama_kriteria'] ?>" readonly />
											<input type="hidden" name="C<?php echo $row[$j]['id_kriteria'];
																		echo $row[$i]['id_kriteria'] ?>" value="<?php echo $row[$j]['id_kriteria'] ?>" />
										</div>
									</div>
								</div>
					<?php
							}
						}
					}
					?>
					<button type="submit" name="subankr" class="btn btn-primary"> Selanjutnya <span class="fa fa-arrow-right"></span></button>
				</form>

			</div>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>