<?php  
	include 'incl/koneksi.php';

	$id = htmlentities($_GET['id']);

	$sql = "DELETE FROM tb_konsumen WHERE no_ktp = '$id'";
	$result = mysqli_query($conn,$sql);

	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Hapus'); 
				window.location.href='konsumenView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Hapus'); 
				window.location.href='konsumenView.php';
			  </script>"; 
	}
?>