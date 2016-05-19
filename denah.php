<?php  
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>


<h1 class="orange">Denah Lokasi Komplek</h1>
<img src="denah/g1.png" width="750">

<h1 class="orange">Denah Rumah</h1>
<img src="denah/g2.png" width="594" alt="">

<?php } include 'incl/footer.php'; ?>