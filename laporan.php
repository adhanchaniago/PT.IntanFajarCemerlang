<?php  
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>


<h1 class="orange">Laporan PT. Intan Fajar Cemerlang</h1>
<ul>
	<li><a href="laporanKonsumen.php"><h3>Laporan Konsumen</h3></a></li>
	<li><a href="laporanHarga.php"><h3>Laporan Harga</h3></a></li>
	<li><a href="laporanRumah.php"><h3>Laporan Rumah</h3></a></li>
	<li><a href="laporanAkad.php"><h3>Laporan Akad</h3></a></li>
	<li><a href="laporanUangMuka.php"><h3>Laporan Uang Muka</h3></a></li>
	<li><a href="laporanJualBeli.php"><h3>Laporan Jual Beli</h3></a></li>
</ul>


<?php } include 'incl/footer.php'; ?>