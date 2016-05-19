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
		$sql = "SELECT * FROM tb_rumah WHERE id_rumah = '$id'";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_array($result);
?>

<h1 class="orange">Data Rumah</h1>
<h3>Edit Data Rumah</h3>

<form action="rumahInEdPros.php" method="post">
	<table>
		<tr>
			<td>ID Rumah&nbsp;</td>
			<td><input type="text" name="vidrmh" value="<?php echo $data['id_rumah']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Block</td>
			<td><input type="text" name="vblok" value="<?php echo $data['block']; ?>"></td>
		</tr>
		<tr>
			<td>Panjang</td>
			<td><input type="text" name="vpanjang" value="<?php echo $data['panjang']; ?>"></td>
		</tr>
		<tr>
			<td>Lebar</td>
			<td><input type="text" name="vlebar" value="<?php echo $data['lebar']; ?>"></td>
		</tr>
		<tr>
			<td>Luas</td>
			<td><input type="text" name="vluas" value="<?php echo $data['luas']; ?>"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit">EDIT</button>&nbsp;
				<a href="rumahView.php"><button>BATAL</button></a>
			</td>
		</tr>
	</table>
</form>

<?php } include 'incl/footer.php'; ?>