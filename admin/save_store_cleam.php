<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		  
		$strSQL = "INSERT INTO store_cleam ( name, address, telphone, date_start, date_start2, date_time, create_by, major ) 
		VALUES ( 
		'".$_POST["name"]."', '".$_POST["address"]."', '".$_POST["telphone"]."', '".date('d-m-Y')."', '".date('Y-m-d')."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$_POST["major"]."' 
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'store_cleam.php';</script>");
		
	 
	 
	 }
		
	 
	 
?>