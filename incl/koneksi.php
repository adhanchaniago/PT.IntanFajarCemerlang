<?php 

	$servername = "localhost";
	$username = "root";
	$password = "maniak";
	$dbname = "ptintanfajarcemerlang";

	//membuat koneksi
	$conn = mysqli_connect($servername,$username,$password,$dbname);

	//cek koneksi
	if(!$conn){
		die("Koneksi Gagal : ".mysqli_connect_error());
	}
	
?>