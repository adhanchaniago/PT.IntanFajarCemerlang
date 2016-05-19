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
		$sql = "SELECT * FROM tb_konsumen WHERE no_ktp = '$id'";
		$result = mysqli_query($conn,$sql);
		$data2 = mysqli_fetch_array($result);

?>

<h1 class="orange">Edit Data Konsumen</h1>

<form action="konsumenInEdPros.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2"><h3>Data Pribadi Konsumen</h3></td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td><input type="text" name="vnoktp" value="<?php echo $data2['no_ktp']; ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="vnama" value="<?php echo $data2['nama']; ?>" readonly></td>
		</tr>
		<tr>
			<td colspan="2"><h3>Data Kredit</h3></td>
		</tr>
		<tr>
			<td>ID Rumah</td>
			<td>
				<select name="vidrmh" id="">
					<option><?php echo $data2['id_rumah']; ?></option>
					<?php 
						include 'incl/koneksi.php';
						$sql = "SELECT id_rumah, block FROM tb_rumah";
						$result = mysqli_query($conn, $sql);
						$rows = mysqli_num_rows($result);
						if($rows == 0){
							echo "<option>Maaf Data Rumah Tidak Ada</option>";
						}
						else{
							while($data = mysqli_fetch_array($result)){
								echo "<option value='".$data['id_rumah']."'>".$data['id_rumah']." --> BLOK ".$data['block']."</option>";
							}
							mysqli_close($conn);
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>ID Harga</td>
			<td>
				<select name="vidhrg" id="">
					<option><?php echo $data2['id_harga']; ?></option>
					<?php 
						include 'incl/koneksi.php';
						$sql = "SELECT id_harga, harga FROM tb_harga";
						$result = mysqli_query($conn, $sql);
						$rows = mysqli_num_rows($result);
						if($rows == 0){
							echo "<option>Maaf Data Harga Tidak Ada</option>";
						}
						else{
							while($data = mysqli_fetch_array($result)){
								echo "<option value='".$data['id_harga']."'>".$data['id_harga']." --> Rp. ".$data['harga']."</option>";
							}
							mysqli_close($conn);
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Uang Muka</td>
			<td>
				<select name="vstatumuka">
					<option><?php echo $data2['stat_uang_muka']; ?></option>
					<option value="Lunas">Lunas</option>
					<option value="Belum Lunas">Belum Lunas</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Sisa Uang Muka</td>
			<td><input type="text" name="vsisaumuka" value="<?php echo $data2['sisa_uang_muka']; ?>"></td>
		</tr>
		<tr>
			<td>Status Akad</td>
			<td>
				<select name="vstatakad">
					<option><?php echo $data2['stat_akad']; ?></option>
					<option value="Belum Akad">Belum Akad</option>
					<option value="Sudah Akad">Sudah Akad</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tanggal Akad</td>
			<?php  
				$tanggal_akad = $data2['tgl_akad'];
				$pecah = explode("-", $tanggal_akad);
				$tgl3 = $pecah[2];
				$bln3 = $pecah[1];
				$thn3 = $pecah[0];
			?>
			<td>
				<select name="tgla">
					<option><?php echo $tgl3; ?></option>
					<?php
						for($i=1;$i<=31;$i++){
							if ($i < 10)
								echo "<option>0".$i."</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
				<select name="blna">
					<?php  
						$nmBln2 = array('01' => "Januari",'02' => "Februari",'03' => "Maret",'04' => "April",
						'05' => "Mei",'06' => "Juni",'07' => "Juli",'08' => "Agustus",
						'09' => "September",'10' => "Oktober",'11' => "November",'12' => "Desember");
					?>
					<option value="<?php echo $bln3; ?>"><?php echo $nmBln2[$bln3]; ?></option>
					<?php
						$nmBln = array('1' => "Januari",'2' => "Februari",'3' => "Maret",'4' => "April",
									'5' => "Mei",'6' => "Juni",'7' => "Juli",'8' => "Agustus",
									'9' => "September",'10' => "Oktober",'11' => "November",'12' => "Desember");
						for($i=1;$i<=12;$i++){
							echo "<option value=$i>$nmBln[$i]</option>";
						}
					?>
				</select>
				<select name="thna">
					<option><?php echo $thn3; ?></option>
					<?php
						$thnSkrg = date('Y');
						for($i=1950;$i<=$thnSkrg;$i++){
							echo "<option>$i</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Jual Beli</td>
			<td>
				<select name="vstatjubel">
					<option><?php echo $data2['stat_jual_beli']; ?></option>
					<option value="Lunas">Lunas</option>
					<option value="Kredit">Kredit</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit">EDIT</button>&nbsp;
				<button>BATAL</button>
			</td>
		</tr>
	</table>
</form>

<?php } include 'incl/footer.php'; ?>