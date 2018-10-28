<?php
	
	include_once('koneksi.php');

	$id_siswa = isset($_GET['id_siswa']) ? $_GET['id_siswa'] : false;
	$button = isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

	$nama = isset($_POST['nama']) ? $_POST['nama'] : false;
	$tgl_lahir = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : false;
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : false;
	$asal_sekolah = isset($_POST['asal_sekolah']) ? $_POST['asal_sekolah'] : false;
	$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : false;
	$ekskul = isset($_POST['ekskul']) ? $_POST['ekskul'] : false;

	//$dataForm = http_build_query($_POST);

	if ($button == 'Tambah') {
			mysqli_query($koneksi, "INSERT INTO siswa_baru (nama, tanggal_lahir, alamat, asal_sekolah, jurusan, ekskul) 
													VALUES ('$nama', '$tgl_lahir', '$alamat', '$asal_sekolah', '$jurusan', '$ekskul')");

	} elseif ($button == 'Ubah') {
			mysqli_query($koneksi, "UPDATE siswa_baru SET nama='$nama', 
														  tanggal_lahir='$tgl_lahir', 
														  alamat='$alamat', 
														  asal_sekolah='$asal_sekolah', 
														  jurusan='$jurusan', 
														  ekskul='$ekskul' WHERE id_siswa='$id_siswa' ");

	} elseif ($button == 'Hapus') {
		mysqli_query($koneksi, "DELETE FROM siswa_baru WHERE id_siswa='$id_siswa' ");
	}
		header("location:index.php");
		
		
?>