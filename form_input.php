<?php
	
	include_once('koneksi.php');

	$id_siswa = isset($_GET['id_siswa']) ? $_GET['id_siswa'] : false;

	$nama = "";
	$tanggal_lahir = "";
	$alamat = "";
	$asal_sekolah = "";
	$jurusan = "";
	$ekskul = "";
	$button = "Tambah";
	$heading = "Input Data";

	if ($id_siswa) {
		$queryEdit = mysqli_query($koneksi, "SELECT * FROM siswa_baru WHERE id_siswa='$id_siswa' ");
		$rowEdit   = mysqli_fetch_assoc($queryEdit);

		$nama = $rowEdit['nama'];
		$tanggal_lahir = $rowEdit['tanggal_lahir'];
		$alamat = $rowEdit['alamat'];
		$asal_sekolah = $rowEdit['asal_sekolah'];
		$jurusan = $rowEdit['jurusan'];
		$ekskul = $rowEdit['ekskul'];

		$button = "Ubah";
		$heading = "Update Data";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHPCRUD</title>
	
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.0.0-beta/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/datepicker/css/bootstrap-datepicker.min.css">
	<script type="text/javascript" src="assets/bootstrap-4.0.0-beta/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/datepicker/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
<!-- navbar -->

	<?php require_once("header.php"); ?>

<!-- content -->
	<section class="container content">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="d-flex justify-content-center">
					<?php
						// $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

						// // $nama = isset($_POST['nama']) ? $_POST['nama'] : false;
						// // $tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : false;
						// // $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : false;
						// // $asal_sekolah = isset($_POST['asal_sekolah']) ? $_POST['asal_sekolah'] : false;
						// // $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : false;
						// // $ekskul = isset($_POST['ekskul']) ? $_POST['ekskul'] : false;

						// if ($notif == "require") {
						// 	echo "<div class='alert alert-warning' role='alert'> Anda harus melengkapi form dibawah !</div>";
						// }
					?>
				</div>
				<div class="card">
					<div class="card-body">
						<h3><u><?php echo $heading; ?></u></h3>
						<form action="<?php echo "proses_input.php?id_siswa=$id_siswa"; ?>" method="POST" class="needs-validation" novalidate>
							<div class="form-grup">
								<label for="formNama">Nama siswa</label>
								<input type="text" name="nama" class="form-control" placeholder="masukan nama anda" value="<?php echo $nama; ?>" id="formNama" required>
								<div class="invalid-feedback">
									Kolom ini tidak boleh kosong!
								</div>
							</div>

							<div class="form-grup">
								<label>Tanggal lahir</label>
								<input type="text" name="tgl_lahir" class="form-control datepicker" placeholder="masukan tanggal lahir" value="<?php echo $tanggal_lahir; ?>" required>
								<div class="invalid-feedback">
									Kolom ini tidak boleh kosong!
								</div>
							</div>

							<div class="form-grup">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" placeholder="masukan alamat anda" value="<?php echo $alamat; ?>" required>
								<div class="invalid-feedback">
									Kolom ini tidak boleh kosong!
								</div>
							</div>

							<div class="form-grup">
								<label>Asal Sekolah</label>
								<input type="text" name="asal_sekolah" class="form-control" placeholder="asalah sekolah" value="<?php echo $asal_sekolah; ?>" required>
								<div class="invalid-feedback">
									Kolom ini tidak boleh kosong!
								</div>
							</div>

							<div class="form-grup">
								<label>Jurusan</label>
								<select name="jurusan" class="form-control">
									<option selected="selected">--Pilih Jurusan--</option>
									<option value="TKJ" <?php echo ($jurusan=="TKJ") ? "selected='true' " : false; ?> >TKJ</option>
									<option value="RPL" <?php echo ($jurusan=="RPL") ? "selected='true' " : false; ?> >RPL</option>
									<option value="Multimedia" <?php echo ($jurusan=="Multimedia") ? "selected='true' " : false; ?> >Multimedia</option>
									<option value="Akutansi" <?php echo ($jurusan=="Akutansi") ? "selected='true' " : false; ?> >Akutansi</option>
								</select>
							</div>

							<div class="form-grup">
								<label>Ekskul</label>
								<select name="ekskul" class="form-control">
									<option selected="selected">--Pilih Ekskul--</option>
									<option value="badminton" <?php echo ($ekskul=="badminton") ? "selected='true' " : false; ?> >badminton</option>
									<option value="futsal" <?php echo ($ekskul=="futsal") ? "selected='true' " : false; ?> >futsal</option>
									<option value="taekwondo" <?php echo ($ekskul=="taekwondo") ? "selected='true' " : false; ?> >taekwondo</option>
									<option value="basket" <?php echo ($ekskul=="basket") ? "selected='true' " : false; ?> >basket</option>
								</select>
							</div>
							<br>
							<input type="submit" class="btn btn-primary" name="button" value="<?php echo $button; ?>"></input>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- footer -->
	<?php require_once("footer.php"); ?>

	<script type="text/javascript">
		$(function(){
			$(".datepicker").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true
			});
		});

		(function(){
			'use strict';
			window.addEventListener('load', function(){
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form){
					form.addEventListener('submit', function(event){
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

</body>
</html>