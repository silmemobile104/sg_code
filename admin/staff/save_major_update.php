<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update major Set  
				name  = '".$_POST["name"]."',  
				address  = '".$_POST["address"]."', 
				pasy  = '".$_POST["pasy"]."', 
				telphone  = '".$_POST["telphone"]."'  
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'major.php';</script>");
?>