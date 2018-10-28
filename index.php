<?php
	
	include_once('koneksi.php');

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

<!-- Tabel -->
	<section class="container table-data">
		<div class="row">
			<div class="table-responsive">
				<div class="offset-md-1 col-md-10">
				<h3>Data Siswa Baru Tahun Ajaran 2018</h3>
						<a href="form_input.php" class="btn btn-info btn-sm">Tambah Data <b>+</b></a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Nama</th>
								<th scope="col">Tanggal Lahir</th>
								<th scope="col">Alamat</th>
								<th scope="col">Asal Sekolah</th>
								<th scope="col">Jurusan</th>
								<th scope="col">Ekskul</th>
								<th colspan="2" class="text-center">Action</th>
								
							</tr>
						</thead>	

						<tbody>	
							<?php 
								$query = mysqli_query($koneksi, "SELECT * FROM siswa_baru");
								$no = 1;
								while ($row=mysqli_fetch_assoc($query)) {
									echo "<tr>
											<td>$no</td>
											<td>$row[nama]</td>
											<td>$row[tanggal_lahir]</td>
											<td>$row[alamat]</td>
											<td>$row[asal_sekolah]</td>
											<td>$row[jurusan]</td>
											<td>$row[ekskul]</td>
											<td ><a href='form_input.php?id_siswa=$row[id_siswa]' class='btn btn-primary btn-sm'>
												Edit
												</a></td>
											<td ><a href='proses_input.php?button=Hapus&id_siswa=$row[id_siswa]' class='btn btn-danger btn-sm' >
												Hapus
											</a></td>															
										</tr>";
									
									$no++;
								} 
							?>	
							
						</tbody>
					</table>
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
	</script>

</body>
</html>