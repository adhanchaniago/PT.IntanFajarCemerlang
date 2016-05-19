<?php
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>

<h1 class="orange">Data Harga</h1>
<h3>Input Data Harga</h3>

<form action="hargaInPros.php" method="post">
	<table>
		<tr>
			<td>ID Harga</td>
			<td><input type="text" name="vidharga"></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" name="vhrgjual"></td>
		</tr>
		<tr>
			<td>Uang Muka</td>
			<td><input type="text" name="vuangmuka"></td>
		</tr>
		<tr>
			<td>Jangka Waktu&nbsp;</td>
			<td><input type="text" name="vjgkwaktu"></td>
		</tr>
		<tr>
			<td>Angsuran</td>
			<td><input type="text" name="vangsuran"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="vstat">
					<option value="">Status</option>
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
				<button type="submit">SIMPAN</button>&nbsp;
				<a href="hargaView.php"><button type="button">BATAL</button></a>&nbsp;
				<button type="reset">RESET</button>
			</td>
		</tr>
	</table>
</form>

<?php } include 'incl/footer.php'; ?>