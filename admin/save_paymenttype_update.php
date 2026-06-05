<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = " Update paymenttype Set  name  = '".$_POST["name"]."' "  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'paymenttype.php';</script>");
?>