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
<h3>Input Data Rumah</h3>

<form action="rumahInPros.php" method="post">
	<table>
		<tr>
			<td>ID Rumah&nbsp;</td>
			<td><input type="text" name="vidrmh"></td>
		</tr>
		<tr>
			<td>Block</td>
			<td><input type="text" name="vblok"></td>
		</tr>
		<tr>
			<td>Panjang</td>
			<td><input type="text" name="vpanjang"></td>
		</tr>
		<tr>
			<td>Lebar</td>
			<td><input type="text" name="vlebar"></td>
		</tr>
		<tr>
			<td>Luas</td>
			<td><input type="text" name="vluas"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit">SIMPAN</button>&nbsp;
				<a href="rumahView.php"><button type="button">BATAL</button></a>&nbsp;
				<button type="reset">RESET</button>
			</td>
		</tr>
	</table>
</form>

<?php } include 'incl/footer.php'; ?>