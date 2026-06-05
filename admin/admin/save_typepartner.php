<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		  
		$strSQL = "INSERT INTO drop_typepartner ( name, date_start, date_start2, date_time, create_by, major, typedataproduct  ) 
		VALUES ( 
		'".$_POST["name"]."', '".date('d-m-Y')."', '".date('Y-m-d')."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$_POST["major"]."', '".$_POST["typedataproduct"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'typepartner.php';</script>");
		
	 
	 
	 }
?>