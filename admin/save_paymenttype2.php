<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		 
	 
		  
		$strSQL = "INSERT INTO paymenttype2 (  name, create_date, create_date2, create_time, create_by,  paymenttype ) 
		VALUES ( '".$_POST["name"]."', '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."',   '".$_POST["paymenttype"]."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'paymenttype2.php?paymenttype=".$_POST["paymenttype"]."';</script>");
		
	 
	 
	 }
?>