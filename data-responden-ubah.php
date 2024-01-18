<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pgn = new Nilai($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/responden.inc.php';
$eks = new Responden($db);

$eks->id = $id;

$eks->readOne();

if ($_POST) {

	$eks->nama = $_POST['nama'];
	$eks->jenis_kelamin = $_POST['jenis_kelamin'];
	$eks->jabatan = $_POST['jabatan'];

	if ($eks->update()) {
		echo "<script>location.href='data-responden.php'</script>";
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
			<li><a href="data-responden.php"><span class="fa fa-bank"></span> Data Responden</a></li>
			<li class="active"><span class="fa fa-pencil"></span> Ubah Data</li>
		</ol>
		<p style="margin-bottom:10px;">
			<strong style="font-size:18pt;"><span class="fa fa-pencil"></span> Ubah Responden</strong>
		</p>
		<div class="panel panel-default">
			<div class="panel-body">

				<form method="post">
					<div class="form-group">
						<label for="kt">Nama Responden</label>
						<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $eks->nama; ?>">
					</div>
					<div class="form-group">
						<label for="jenis_kelamin">Jenis Kelamin</label>
						<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
							<option value="laki-laki" <?php if ($eks->jenis_kelamin == 'laki-laki') echo 'selected'; ?>>Laki-laki</option>
							<option value="perempuan" <?php if ($eks->jenis_kelamin == 'perempuan') echo 'selected'; ?>>Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $eks->jabatan; ?>" required>
					</div>
					<button type="submit" class="btn btn-warning"><span class="fa fa-edit"></span> Ubah</button>
					<button type="button" onclick="location.href='data-responden.php'" class="btn btn-success"><span class="fa fa-history"></span> Kembali</button>
				</form>

			</div>
		</div>
	</div>
</div>
<?php
include_once 'footer.php';
?>