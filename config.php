<?php 
	$username = "root";
	$password = "twctaman12345";
	$hostname = "localhost"; 		$dbname = "yudanjib";
	global $dbhandle;	$dbhandle=mysqli_connect($hostname,$username,$password,$dbname) or die (mysqli_error());
?>