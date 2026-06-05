<?php  
date_default_timezone_set("Asia/Bangkok");
  

	$serverName = "localhost";
	$userName = "007";
	$userPassword = "";
	$dbName = ""; 
  
  
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon,"utf8");
	mysqli_set_charset($con,"utf8");
	mysqli_set_charset($conn,"utf8");

	 
?>
