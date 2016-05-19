<?php  
	include 'incl/koneksi.php';	

	$idrmh = htmlentities($_POST['vidrmh']);
	$blok = htmlentities($_POST['vblok']);
	$panjang = htmlentities($_POST['vpanjang']);
	$lebar = htmlentities($_POST['vlebar']);
	$luas = htmlentities($_POST['vluas']);

	$sql = "UPDATE tb_rumah SET block='$blok', panjang='$panjang', lebar='$lebar', luas='$luas' WHERE id_rumah='$idrmh'";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Edit'); 
				window.location.href='rumahView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='rumahView.php';
			  </script>"; 
	}
?>