<?php
session_start();  
include('../database.php');
	
	$pageget = $_GET["pageget"] ;    
	$note = $_GET["note"] ;    
	$member = $_SESSION["UserID"];

  
	$member_sendname = " - ";
	$sql = "SELECT * FROM member_checkin Where  date_start = '". date('Y-m-d') ."' and  getipcustomer = '".$pageget."' and customer = '".$member."' order by pk desc limit 1 ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$member_sendname = $objResult["bill_no"];  
	} 
 
	 
    print_r(trim($member_sendname));
?>
     
     

 