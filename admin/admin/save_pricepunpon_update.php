<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 
			$strSQL = "Update pricepunpon Set   percent2 = '".$_POST["percent2"]."', notedata = '".$_POST["notedata"]."'   " ;
			$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		  
		
		 echo("<script>window.location = 'pricepunpon.php';</script>");
	}
?>