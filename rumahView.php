<?php  
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>


<h1 class="orange">Data Rumah</h1>
<h3>Laporan Data Rumah</h3>
<br>
<a href="rumahIn.php"><button type="button">Tambah Data</button></a>
<br><br>
<table cellspacing="5" width="100%">
	<tr>
		<td><b>No.</b></td>
		<td><b>ID Rumah</b></td>
		<td><b>Blok</b></td>
		<td><b>Panjang</b></td>
		<td><b>Lebar</b></td>
		<td><b>Luas</b></td>
		<td><b>Aksi</b></td>
	</tr>
	<tr>
		<?php  
			include 'incl/koneksi.php';
			$sql = "SELECT * FROM tb_rumah";
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
			<td><?php echo $data['id_rumah']; ?></td>
			<td><?php echo $data['block']; ?></td>
			<td><?php echo $data['panjang']; ?></td>
			<td><?php echo $data['lebar']; ?></td>
			<td><?php echo $data['luas']; ?></td>
			<td>
				<a href="rumahInEd.php?id=<?php echo $data['id_rumah']; ?>"><button type="button">Edit</button></a>
				<a href="rumahDel.php?id=<?php echo $data['id_rumah']; ?>"><button type="button">Hapus</button></a>
			</td>
		</tr>
		<?php  
				$no++;
				}
			}
		?>
	</tr>
</table>

<?php } include 'incl/footer.php'; ?>