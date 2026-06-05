<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update drop_type_staff Set  
				name  = '".$_POST["name"]."'  
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'type_staff.php?CusID=". $_POST["idupdate"]."&page=1';</script>");
?>