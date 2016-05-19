<?php 
	session_start();
	session_destroy();
	echo "<script type='text/javascript'>
			alert('Anda telah logout..'); 
			window.location.href='index.php';
		  </script>";
?>