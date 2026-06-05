<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update drop_typecolor Set  
				name  = '".$_POST["name"]."',   
				major  = '".$_POST["major"]."'   
				
				
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'typecolor.php?CusID=". $_POST["idupdate"]."&page=1';</script>");
?>