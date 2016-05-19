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
<h3>Data Konsumen</h3>
<table cellspacing="5" width="100%">
	<tr>
		<td><b>No.</b></td>
		<td><b>No. KTP</b></td>
		<td><b>Nama Lengkap</b></td>
		<td><b>Tempat Tanggal Lahir</b></td>
		<td><b>Jenis Kelamin</b></td>
		<td><b>Pekerjaan</b></td>
		<td><b>Agama</b></td>
		<td><b>Status Pernikahan</b></td>
		<td><b>Alamat</b></td>
		<td><b>No. HP/Telp.</b></td>
	</tr>
	<tr>
		<?php  
			include 'incl/koneksi.php';
			$sql = "SELECT * FROM tb_konsumen";
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
			<td><?php echo $data['no_ktp']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tempat_lahir'].", ".$data['tgl_lahir']; ?></td>
			<td><?php echo $data['jekel']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['stat_nikah']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['telp']; ?></td>
		</tr>
		<?php  
				$no++;
				}
			}
		?>
	</tr>
</table>

<?php } include 'incl/footer.php'; ?>