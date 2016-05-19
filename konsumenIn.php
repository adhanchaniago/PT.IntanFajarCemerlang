<?php
	session_start();
	if (!empty($_SESSION['username'])) {
		header("location:home.php");
	}
	else{
		$uid = $_SESSION['user'];
		include 'incl/header.php';
?>

<h1 class="orange">Input Data Konsumen</h1>

<form action="konsumenInPros.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td colspan="2"><h3>Data Pribadi Konsumen</h3></td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td><input type="text" name="vnoktp"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="vnama"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="vtmptlhr"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<select name="tgl">
					<option>Tanggal</option>
					<?php
						for($i=1;$i<=31;$i++){
							if ($i < 10)
								echo "<option>0".$i."</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
				<select name="bln">
					<option>Bulan</option>
					<?php
						$nmBln = array('1' => "Januari",'2' => "Februari",'3' => "Maret",'4' => "April",
									'5' => "Mei",'6' => "Juni",'7' => "Juli",'8' => "Agustus",
									'9' => "September",'10' => "Oktober",'11' => "November",'12' => "Desember");
						for($i=1;$i<=12;$i++){
							echo "<option value=$i>$nmBln[$i]</option>";
						}
					?>
				</select>
				<select name="thn">
					<option>Tahun</option>
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
			<td>Jenis Kelamin</td>
			<td>
				<select name="vjekel">
					<option value="">Jenis Kelamin</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><input type="text" name="vpekerjaan"></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>
				<select name="vagama">
					<option value="">Agama</option>
					<option value="Islam">Islam</option>
					<option value="Katolik">Katolik</option>
					<option value="Protestan">Protestan</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Pernikahan</td>
			<td>
				<select name="vstatpern">
					<option value="">Status Pernikahan</option>
					<option value="Belum Menikah">Belum Menikah</option>
					<option value="Menikah">Menikah</option>
					<option value="Duda">Duda</option>
					<option value="Janda">Janda</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="valmt" cols="25" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>No. HP / Telepon</td>
			<td><input type="text" name="vtelp"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="vfoto"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Data Pribadi Pasangan</h3></td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td><input type="text" name="vnoktpp"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="vnamap"></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="vtmptlhrp"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>
				<select name="tglp">
					<option>Tanggal</option>
					<?php
						for($i=1;$i<=31;$i++){
							if ($i < 10)
								echo "<option>0".$i."</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
				<select name="blnp">
					<option>Bulan</option>
					<?php
						$nmBln = array('1' => "Januari",'2' => "Februari",'3' => "Maret",'4' => "April",
									'5' => "Mei",'6' => "Juni",'7' => "Juli",'8' => "Agustus",
									'9' => "September",'10' => "Oktober",'11' => "November",'12' => "Desember");
						for($i=1;$i<=12;$i++){
							echo "<option value=$i>$nmBln[$i]</option>";
						}
					?>
				</select>
				<select name="thnp">
					<option>Tahun</option>
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
			<td>Pekerjaan</td>
			<td><input type="text" name="vpekerjaanp"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="valmtp" cols="25" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>No. HP / Telepon</td>
			<td><input type="text" name="vtlpp"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td><input type="file" name="vfotop"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Data Pekerjaan Konsumen</h3></td>
		</tr>
		<tr>
			<td>Nama Perusahaan / Instansi</td>
			<td><input type="text" name="namaper"></td>
		</tr>
		<tr>
			<td>Alamat Perusahaan / Instansi&nbsp;</td>
			<td><textarea name="valmtper" cols="25" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>Bidang Usaha</td>
			<td><input type="text" name="vbidus"></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td><input type="text" name="vjabatan"></td>
		</tr>
		<tr>
			<td>Lama Menjabat</td>
			<td><input type="text" name="vlmenjabat"></td>
		</tr>
		<tr>
			<td>Status Perusahaan / Instansi</td>
			<td>
				<select name="vstatperusahaan">
					<option value="">Status Perusahaan</option>
					<option value="PNS/Pemda">PNS/Pemda</option>
					<option value="BUMN">BUMN</option>
					<option value="TNI/Polri">TNI/Polri</option>
					<option value="Swasta">Swasta</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No. Telp. Perusahaan</td>
			<td><input type="text" name="vtelper"></td>
		</tr>
		<tr>
			<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2"><h3>Data Kredit</h3></td>
		</tr>
		<tr>
			<td>ID Rumah</td>
			<td>
				<select name="vidrmh" id="">
					<option value="">Pilih Id Rumah</option>
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
					<option value="">Pilih Id Harga</option>
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
					<option value="">Status</option>
					<option value="Lunas">Lunas</option>
					<option value="Belum Lunas">Belum Lunas</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Sisa Uang Muka</td>
			<td><input type="text" name="vsisaumuka"></td>
		</tr>
		<tr>
			<td>Status Akad</td>
			<td>
				<select name="vstatakad">
					<option value="">Status</option>
					<option value="Belum Akad">Belum Akad</option>
					<option value="Sudah Akad">Sudah Akad</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tanggal Akad</td>
			<td>
				<select name="tgla">
					<option>Tanggal</option>
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
					<option>Bulan</option>
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
					<option>Tahun</option>
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
					<option value="">Status</option>
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
				<button type="submit">SIMPAN</button>&nbsp;
				<button>BATAL</button>&nbsp;
				<button type="reset">RESET</button>
			</td>
		</tr>
	</table>
</form>

<?php } include 'incl/footer.php'; ?>