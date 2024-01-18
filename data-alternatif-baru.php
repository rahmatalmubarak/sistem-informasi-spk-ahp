<?php
include_once 'header.php';
if ($_POST) {

	include_once 'includes/alternatif.inc.php';
	$eks = new Alternatif($db);

	$eks->nama = $_POST['nama'];
	$eks->jenis_kelamin = $_POST['jenis_kelamin'];
	$eks->jabatan = $_POST['jabatan'];

	if ($eks->insert()) {
?>
		<script type="text/javascript">
			window.onload = function() {
				showStickySuccessToast();
			};
		</script>
	<?php
	} else {
	?>
		<script type="text/javascript">
			window.onload = function() {
				showStickyErrorToast();
			};
		</script>
<?php
	}
}
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
			<li><a href="data-alternatif.php"><span class="fa fa-book"></span> Data Alternatif</a></li>
			<li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Alternatif</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						<label for="nama">Nama Alternatif</label>
						<input type="text" class="form-control" id="nama" name="nama" required>
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="laki-laki">Laki-laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" required>
					</div>
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
					<button type="button" onclick="location.href='data-alternatif.php'" class="btn btn-success"><span class="fa fa-history"></span> Kembali</button>
				</form>

			</div>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>