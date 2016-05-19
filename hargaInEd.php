<?php  
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
		include 'incl/koneksi.php';

		$id = htmlentities($_GET['id']);
		$sql = "SELECT * FROM tb_harga WHERE id_harga = '$id'";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);

?>

<h1 class="orange">Data Harga</h1>
<h3>Edit Data Harga</h3>

<form action="hargaInEdPros.php" method="post">
	<table>
		<tr>
			<td>ID Harga</td>
			<td><input type="text" name="vidharga" value="<?php echo $data['id_harga']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" name="vhrgjual" value="<?php echo $data['harga']; ?>"></td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="vuangmuka" value="<?php echo $data['uang_muka']; ?>"></td>
		</tr>
		<tr>
			<td>Jangka Waktu&nbsp;</td>
			<td><input type="text" name="vjgkwaktu" value="<?php echo $data['jangka_waktu']; ?>"></td>
		</tr>
		<tr>
			<td>Angsuran</td>
			<td><input type="text" name="vangsuran" value="<?php echo $data['angsuran']; ?>"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="vstat">
					<option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
					<option value="Subsidi">Subsidi</option>
					<option value="Non Subsidi">Non Subsidi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit">EDIT</button>&nbsp;
				<a href="hargaView.php"><button type="button">BATAL</button></a>
			</td>
		</tr>
	</table>
</form>

<?php } mysqli_close($conn); include 'incl/footer.php'; ?>