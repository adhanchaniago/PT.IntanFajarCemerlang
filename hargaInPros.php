<?php  
	include 'incl/koneksi.php';	

	$idharga = htmlentities($_POST['vidharga']);
	$hrgjual = htmlentities($_POST['vhrgjual']);
	$uangmuka = htmlentities($_POST['vuangmuka']);
	$jgkwaktu = htmlentities($_POST['vjgkwaktu']);
	$angsuran = htmlentities($_POST['vangsuran']);
	$stat = htmlentities($_POST['vstat']);

	$sql = "INSERT INTO tb_harga VALUES ('$idharga','$hrgjual','$uangmuka','$jgkwaktu','$angsuran','$stat')";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Inputkan'); 
				window.location.href='hargaView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Inputkan'); 
				window.location.href='hargaIn.php';
			  </script>"; 
	}
?>