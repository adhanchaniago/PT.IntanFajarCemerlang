<?php  
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>


<h1 class="orange">Laporan</h1>
<h3>Data Harga</h3>
<table cellspacing="5" width="100%">
	<tr>
		<td><b>No.</b></td>
		<td><b>ID Harga</b></td>
		<td><b>Harga Jual</b></td>
		<td><b>Uang Muka</b></td>
		<td><b>Jangka Waktu</b></td>
		<td><b>Angsuran</b></td>
		<td><b>Status</b></td>
	</tr>
	<tr>
		<?php  
			include 'incl/koneksi.php';
			$sql = "SELECT * FROM tb_harga";
			$result = mysqli_query($conn,$sql);
			$i = 1;
			$rows = mysqli_num_rows($result);
			if($rows == 0){
				echo "<td colspan='7'>Maaf Data Kosong...</td>";
			}
			else{
				$no = 1;
				while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['id_harga']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['uang_muka']; ?></td>
			<td><?php echo $data['jangka_waktu']; ?></td>
			<td><?php echo $data['angsuran']; ?></td>
			<td><?php echo $data['status']; ?></td>
		</tr>
		<?php  
				$no++;
				}
			}
		?>
	</tr>
</table>

<?php } include 'incl/footer.php'; ?>