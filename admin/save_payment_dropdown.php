<?php 
session_start();
include("../database.php");
 
			$money = $_GET["money"] ;    
			$bill = $_GET["bill"] ;  
			$datesave = $_GET["datesave"] ; 


			$datedatacall = $_GET["datesave"] ;  


			$majordata = $_GET["majordata"] ;       
			$contactdata = $_GET["contactdata"] ;       
			$paymentother = $_GET["paymentother"] ;       
			$typedatapayment = $_GET["typedatapayment"] ; 
			$moneyall = $_GET["moneyall"] ;
			$discount = $_GET["discount"] ; 
			$typesave2 = $_GET["typesave2"] ; 
			$banksave = $_GET["banksave"] ; 
			$dropcontact = $_GET["dropcontact"] ; 



			$bank = $_GET["bankdata"] ;
			if(empty($bank)){
				$bank = "";
			}
 
			if($money == ""){
				$paymentother = "";
			}
			if($discount == ""){
				$discount = "";
			}
 
			$strSQL = "  Update history_payment Set 
			contactdata = '".$dropcontact."',   
			create_by = '".$_SESSION["UserID"]."',
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$datesave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
				 

			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata. " - ". $typedatapayment. "', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
?>