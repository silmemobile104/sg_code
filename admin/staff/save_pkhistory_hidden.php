<?php 
session_start();
include("../database.php");
   
			$pksave = $_GET["data1"] ;     
			$bill = $_GET["bill"] ; 

 
			if($money == ""){
				$paymentother = "";
			}
			if($discount == ""){
				$discount = "";
			}
 
			$strSQL = "  Update history_payment Set 
			hiddendata = 'NO',    
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$pksave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
  
 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$pksave."', '".$bill."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$bill."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

?>