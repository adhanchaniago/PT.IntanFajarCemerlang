<?php  
	include 'incl/koneksi.php';	

	$x = htmlentities($_POST['tgl']);
	$y = htmlentities($_POST['bln']);
	$z = htmlentities($_POST['thn']);

	$a = htmlentities($_POST['tglp']);
	$b = htmlentities($_POST['blnp']);
	$c = htmlentities($_POST['thnp']);

	$d = htmlentities($_POST['tgla']);
	$e = htmlentities($_POST['blna']);
	$f = htmlentities($_POST['thna']);

	$noktp = htmlentities($_POST['vnoktp']);
	$nama = htmlentities($_POST['vnama']);
	$tmptlhr = htmlentities($_POST['vtmptlhr']);
	$tgl = $z."-".$y."-".$x;
	$jekel = htmlentities($_POST['vjekel']);
	$pkrjaan = htmlentities($_POST['vpekerjaan']);
	$agama = htmlentities($_POST['vagama']);
	$statnikah = htmlentities($_POST['vstatpern']);
	$alamat = htmlentities($_POST['valmt']);
	$telp = htmlentities($_POST['vtelp']);
	$noktp2 = htmlentities($_POST['vnoktpp']);
	$nama2 = htmlentities($_POST['vnamap']);
	$tmptlhr2 = htmlentities($_POST['vtmptlhrp']);
	$tgl2 = $c."-".$b."-".$a;
	$pkrjaan2 = htmlentities($_POST['vpekerjaanp']);
	$alamat2 = htmlentities($_POST['valmtp']);
	$telp2 = htmlentities($_POST['vtlpp']);
	$namaper = htmlentities($_POST['namaper']);
	$alamatper = htmlentities($_POST['valmtper']);
	$bidus = htmlentities($_POST['vbidus']);
	$jabatan = htmlentities($_POST['vjabatan']);
	$lmmnjbt = htmlentities($_POST['vlmenjabat']);
	$statper = htmlentities($_POST['vstatperusahaan']);
	$tlpper = htmlentities($_POST['vtelper']);
	$idrmh = htmlentities($_POST['vidrmh']);
	$idhrg = htmlentities($_POST['vidhrg']);
	$statumuka = htmlentities($_POST['vstatumuka']);
	$ssumuka = htmlentities($_POST['vsisaumuka']);
	$statakad = htmlentities($_POST['vstatakad']);
	$tgla = $f."-".$e."-".$d;
	$statjubel = htmlentities($_POST['vstatjubel']);

	$filename = $_FILES['vfoto']['name'];
	$filesize = $_FILES['vfoto']['size'];
	$fileerror = $_FILES['vfoto']['error'];
	$filetype = $_FILES['vfoto']['type'];
	$filepath = "photo/".$filename;

	$filename2 = $_FILES['vfotop']['name'];
	$filesize2 = $_FILES['vfotop']['size'];
	$fileerror2 = $_FILES['vfotop']['error'];
	$filetype2 = $_FILES['vfotop']['type'];
	$filepath2 = "photo/".$filename2;

	if($filename != ""){

		if($filetype == "image/jpeg"){

			if($filesize <= 5000000){

				$move = move_uploaded_file($_FILES['vfoto']['tmp_name'], $filepath);

				if ($filename2 != "") {
					$move2 = move_uploaded_file($_FILES['vfotop']['tmp_name'], $filepath2);
				}

				if($move){

					$sql = "INSERT INTO tb_konsumen VALUES ('$noktp','$nama','$tmptlhr','$tgl','$jekel','$pkrjaan','$agama','$statnikah','$alamat','$telp','$filepath','$noktp2','$nama2','$tmptlhr2','$tgl2','$pkrjaan2','$alamat2','$telp2','$filepath2','$namaper','$alamatper','$bidus','$jabatan','$lmmnjbt','$statper','$tlpper','$idrmh','$idhrg','$statumuka','$ssumuka','$statakad','$tgla','$statjubel')";
					$result = mysqli_query($conn,$sql);
					//or trigger_error("Error".mysqli_error($conn), E_USER_ERROR);
					
					if ($result){
						echo "<script type='text/javascript'>
								alert('Data Berhasil di Inputkan'); 
								window.location.href='konsumenView.php';
							  </script>"; 
					}
					else{
						echo "<script type='text/javascript'>
								alert('Data Gagal di Proses'); 
								window.location.href='konsumenIn.php';
							  </script>"; 
					}
					
					mysql_close();
				}
			}
			else{
				echo "<script type='text/javascript'>
						alert('Maximal File 5MB !'); 
						window.location.href='konsumenIn.php';
					  </script>"; 
			}
		}
		else{
			echo "<script type='text/javascript'>
					alert('Hanya Boleh File JPEG !'); 
					window.location.href='konsumenIn.php';
				  </script>";
		}
	}
	else{
		echo "<script type='text/javascript'>
				alert('Data Gagal di Inputkan'); 
				window.location.href='konsumenIn.php';
			  </script>"; 
	}

?>