<?php  
	
	$user = htmlentities($_POST['vuser']);
	$pass = md5(htmlentities($_POST['vpass']));
	include 'incl/koneksi.php';

	$sql = "SELECT * FROM tb_user WHERE username='$user' AND password='$pass'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$rows = mysqli_num_rows($result);

	if ($result) {
		if ($rows == 0) {
			echo "<script type='text/javascript'>
					alert('User tidak ditemukan..'); 
					window.location.href='index.php';
				  </script>";
		}
		session_start();
		$_SESSION['user'] = $row['nama_lengkap'];
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Selamat Datang'); 
				window.location.href='home.php';
			  </script>";
	}

	else{
		echo "<script type='text/javascript'>
					alert('Gagal Login'); 
					window.location.href='index.php';
				  </script>";
	}	


?>