<?php  

	include 'incl/koneksi.php';

	//error_reporting(1);
	//ini_set('display_errors', 1);

	$d = htmlentities($_POST['tgla']);
	$e = htmlentities($_POST['blna']);
	$f = htmlentities($_POST['thna']);

	$noktp = htmlentities($_POST['vnoktp']);
	$nama = htmlentities($_POST['vnama']);
	$idrmh = htmlentities($_POST['vidrmh']);
	$idhrg = htmlentities($_POST['vidhrg']);
	$statumuka = htmlentities($_POST['vstatumuka']);
	$ssumuka = htmlentities($_POST['vsisaumuka']);
	$statakad = htmlentities($_POST['vstatakad']);
	$tgla = $f."-".$e."-".$d;
	$statjubel = htmlentities($_POST['vstatjubel']);

	$sql = "UPDATE tb_konsumen SET id_rumah='$idrmh', id_harga='$idhrg', stat_uang_muka='$statumuka', sisa_uang_muka='$ssumuka', stat_akad='$statakad', tgl_akad='$tgla', stat_jual_beli='$statjubel' WHERE no_ktp='$noktp'";	
	$result = mysqli_query($conn,$sql);
	//or die(mysqli_error($conn));
	if ($result) {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Berhasil di Edit'); 
				window.location.href='konsumenView.php';
			  </script>"; 
	} else {
		mysqli_close($conn);
		echo "<script type='text/javascript'>
				alert('Data Gagal di Edit'); 
				window.location.href='konsumenView.php';
			  </script>"; 
	}

?>