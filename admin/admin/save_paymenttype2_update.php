<?php 
session_start();  
include('../database.php');
 	  
				$strSQL = " Update paymenttype2 Set  
				create_time  = '".date('H:i')."' , 
				create_date  = '".date('d-m-Y')."' , 
				create_date2  = '".date('Y-m-d')."' , 
				create_by  = '".$_SESSION["UserID"]."' , 
				paymenttype  = '".$_POST["paymenttype"]."' , 
				name  = '".$_POST["name"]."'  
				"  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'paymenttype2.php?paymenttype=".$_POST["paymenttype"]."';</script>");
?>