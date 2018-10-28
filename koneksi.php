<?php

	$koneksi = mysqli_connect('localhost', 'root', '', 'data_siswa');

	if(!$koneksi){
		echo "Error: Unable to connect to MySQL.".PHP_EOL;
		echo "Debugging errno:".mysqli_connect_errno().PHP_EOL;
		echo "Debugging errno:".mysqli_connect_errno().PHP_EOL;
	}


?>