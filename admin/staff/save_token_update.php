<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update tokenline Set  
				tokendata  = '".$_POST["tokendata"]."' 
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'tokenline.php';</script>");
?>