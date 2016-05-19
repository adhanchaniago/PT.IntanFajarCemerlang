<?php  

	$user = htmlentities($_POST['vuser']);
	$pass = md5(htmlentities($_POST['vpass']));
	$nama = htmlentities($_POST['vnama']);

	include 'incl/koneksi.php';

	$sql = "INSERT INTO tb_user VALUES ('','$user','$pass','$nama')";

	if (mysqli_query($conn, $sql)) {
		echo "<script type='text/javascript'>
				alert('User Berhasil Dibuat'); 
				window.location.href='index.php';
			  </script>";
		//header("location:index.php");
	}
	else{
		echo "<script type='text/javascript'>
				alert('User Gagal Dibuat'); 
				window.location.href='daftar.php';
			  </script>";
	}

	mysqli_close($conn);

?>