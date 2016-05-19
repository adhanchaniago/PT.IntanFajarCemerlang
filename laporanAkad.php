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
<h3>Akad</h3>
<table cellspacing="5" width="100%">
	<tr>
		<td><b>No.</b></td>
		<td><b>No. KTP</b></td>
		<td><b>Nama Lengkap</b></td>
		<td><b>ID Harga</b></td>
		<td><b>ID Rumah</b></td>
		<td><b>Block</b></td>
		<td><b>Tanggal Akad</b></td>
		<td><b>Status Akad</b></td>
	</tr>
	<tr>
		<?php  
			include 'incl/koneksi.php';

			$sql = "SELECT tb_konsumen.no_ktp, tb_konsumen.nama, tb_harga.id_harga, tb_rumah.id_rumah, tb_rumah.block, tb_konsumen.tgl_akad, tb_konsumen.stat_akad FROM tb_konsumen, tb_harga, tb_rumah WHERE tb_harga.id_harga = tb_konsumen.id_harga AND tb_rumah.id_rumah = tb_konsumen.id_rumah ";
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
			<td><?php echo $data['id_harga']; ?></td>
			<td><?php echo $data['id_rumah']; ?></td>
			<td><?php echo $data['block']; ?></td>
			<td><?php echo $data['tgl_akad']; ?></td>
			<td><?php echo $data['stat_akad']; ?></td>
		</tr>
		<?php  
				$no++;
				}
			}
		?>
	</tr>
</table>

<?php } include 'incl/footer.php'; ?>