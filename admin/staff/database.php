<?php  
date_default_timezone_set("Asia/Bangkok");
  
	/// $userPassword = "F5HqyW0iTSbx6DjU";
  

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "ablbotco_sg"; 
  
	$serverName = "localhost";
	$userName = "silminmo_sg";
	$userPassword = "F5HqyW0iTSbx6DjU";
	$dbName = "silminmo_sg"; 
  
  
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$con = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon,"utf8");
	mysqli_set_charset($con,"utf8");
	mysqli_set_charset($conn,"utf8");

	 
?>
