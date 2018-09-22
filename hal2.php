<?php 
	include("header.html"); 
	session_start();
	print_r($_SESSION);
	$akses = $_SESSION["akses"];
	if ($akses == "admin") {
		echo "Halaman Boleh Diakses";
	}
	else
		header("Location: form.html")
	 include("footer.html"); 
 ?>