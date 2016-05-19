<?php  
	include 'incl/koneksi.php';	

	$idrmh = htmlentities($_POST['vidrmh']);
	$blok = htmlentities($_POST['vblok']);
	$panjang = htmlentities($_POST['vpanjang']);
	$lebar = htmlentities($_POST['vlebar']);
	$luas = htmlentities($_POST['vluas']);

	$sql = "INSERT INTO tb_rumah VALUES ('$idrmh', '$blok', '$panjang', '$lebar', '$luas')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Inputkan'); 
				window.location.href='rumahView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Inputkan'); 
				window.location.href='rumahIn.php';
			  </script>"; 
	}
?>