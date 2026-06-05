<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 
				 $strSQL = "Update otherdata Set  
				 name = '".$_POST["name"]."',      
				 price = '".$_POST["price"]."',         
				 detail = '".$_POST["detail"]."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 echo("<script>window.location = 'add_price_other.php?CusID=".$_POST["idupdate"]."&major=".$_POST["major"]."';</script>");
	}
?>