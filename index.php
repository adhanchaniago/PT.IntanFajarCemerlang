<?php  
	session_start();
	if (!empty($_SESSION['user'])) {
		header("location:home.php");
	}
	else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>PT. Intan Fajar Cemerlang</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Shell -->
<div id="shell">
	
	<!-- Header -->
	<div id="header">
		<h1><a href="#">PT. INTAN FAJAR CEMERLANG</a></h1>
	</div>
	<!-- End Header -->
	
	<!-- Content -->
	<div id="content">
	<br /><br />
	<form action="loginPros.php" method="post">
	<center>
		<table>
			<tr>
				<td align="center" colspan="3"><h1 class="orange">FORM LOGIN</h1></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>&nbsp;</td>
				<td><input type="text" name="vuser" autofocus /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>&nbsp;</td>
				<td><input type="password" name="vpass" /></td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<button type="submit">LOGIN</button>&nbsp;
					<a href="daftar.php"><button type="button">DAFTAR</button></a>
				</td>
			</tr>
		</table>
	</center>
	</form>
	<br /><br /><br />
	</div>
	
	<!-- End Content -->
</div>
<!-- End Shell -->

<!-- Footer -->
<div id="footer">
	<p>&copy; ptintanfajarcemerlang.com</p>
</div>
<!-- End Footer -->
</body>
</html>

<?php } ?>