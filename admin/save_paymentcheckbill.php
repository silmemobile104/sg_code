<?php 
session_start();
include("../database.php");
 
			$money = $_GET["money"] ;    
			$bill = $_GET["majordata"] ;  
			$datesave = $_GET["datesave"] ;       
			$majordata = $_GET["majordata"] ;       
			$contactdata = $_GET["contacdata"] ;       
			$paymentother = $_GET["paymentother"] ;       
			$discount = $_GET["discount"] ;       
 
			if($money == ""){
				$paymentother = "";
			}
			if($discount == ""){
				$discount = "";
			}
 
			$strSQL = "  Update history_payment Set 
			discount = '".$discount."',  
			income = '".$money."',  
			paymentother = '".$paymentother."',  
			create_by = '".$_SESSION["UserID"]."'  ,
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$datesave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
					 


/*
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no) VALUES  ( '".$_SESSION["load_day"]."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
*/
	
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


?>