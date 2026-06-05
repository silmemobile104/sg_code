<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
		$strSQL = "INSERT INTO major ( name, address, telphone  ) 
		VALUES ( '".$_POST["name"]."', '".$_POST["address"]."', '".$_POST["telphone"]."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'major.php';</script>");
		
	 
	 
?>