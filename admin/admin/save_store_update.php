<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = "Update store Set  
				name  = '".$_POST["name"]."',  
				address  = '".$_POST["address"]."', 
				major  = '".$_POST["major"]."', 
				bank  = '".$_POST["bank"]."', 
				passport  = '".$_POST["passport"]."', 
				telphone  = '".$_POST["telphone"]."'  
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'store.php';</script>");
?>