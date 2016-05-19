<?php  
	include 'incl/koneksi.php';

	$id = htmlentities($_GET['id']);

	$sql = "DELETE FROM tb_rumah WHERE id_rumah = '$id'";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='hargaView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='hargaView.php';
			  </script>"; 
	}
?>