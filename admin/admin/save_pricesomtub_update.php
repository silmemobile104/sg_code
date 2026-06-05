<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 
			$strSQL = "Update pricesomtub Set  
				 pasy = '".$_POST["pasy"]."',  
				 titledata = '".$_POST["titledata"]."',  
				 price = '".$_POST["price"]."',  
				 bank = '".$_POST["bank"]."',  
				 notedata = '".$_POST["notedata"]."',  
				 payment = '".$_POST["payment"]."'   
				 " ;
			$strSQL .=" WHERE bill_no = '". $_POST["bill_no"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
	  
		 echo("<script>window.location = 'pricesomtub.php';</script>");
	}
?>