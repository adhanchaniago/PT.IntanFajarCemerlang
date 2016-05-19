<?php  
	include 'incl/koneksi.php';	

	$idharga = htmlentities($_POST['vidharga']);
	$hrgjual = htmlentities($_POST['vhrgjual']);
	$uangmuka = htmlentities($_POST['vuangmuka']);
	$jgkwaktu = htmlentities($_POST['vjgkwaktu']);
	$angsuran = htmlentities($_POST['vangsuran']);
	$stat = htmlentities($_POST['vstat']);

	$sql = "UPDATE tb_harga SET harga='$hrgjual', uang_muka='$uangmuka', jangka_waktu='$jgkwaktu', angsuran='$angsuran', status='$stat' WHERE id_harga='$idharga'";	
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Edit'); 
				window.location.href='hargaView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='hargaView.php';
			  </script>"; 
	}
?>