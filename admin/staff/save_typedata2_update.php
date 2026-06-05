<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update drop_typedata2 Set  
				name  = '".$_POST["name"]."',
				major  = '".$_POST["major"]."'   "  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'typedata2.php?CusID=". $_POST["idupdate"]."&page=1';</script>");
?>