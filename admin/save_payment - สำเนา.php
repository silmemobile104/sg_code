<?php 
session_start();
include("../database.php");
 
			$money = $_GET["money"] ;    
			$bill = $_GET["bill"] ;  
			$datesave = $_GET["datesave"] ;       
			$majordata = $_GET["majordata"] ;       
			$contactdata = $_GET["contactdata"] ;       
			$paymentother = $_GET["paymentother"] ;       
			$typedatapayment = $_GET["typedatapayment"] ; 
			$moneyall = $_GET["moneyall"] ; 
			$discount = $_GET["discount"] ; 



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
			discount = '".$discount."',  
			income = '".$money."',  
			bank = '".$bank."',  
			paymentother = '".$paymentother."',  
			typesave = '".$typedatapayment."',  
			create_by = '".$_SESSION["UserID"]."'  ,
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$datesave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
				 
				  
			$bill_no = " - ";
			$major = " - ";
			$customer = " - ";
			$sql_c = "SELECT * FROM history_payment where   pk = '".$datesave."' order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$datestart = $objResult_c["datestart"]; 
				$bill_no = $objResult_c["bill_no"]; 
				$major = $objResult_c["major"]; 
				$customer = $objResult_c["customer"]; 
			}

			$cut = explode("-",$datestart);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
			$datesave = date("d/m/Y", strtotime($date_income)); 

			$strSQL = "Delete From money_customer_bank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and create_date = '".$daystart."' and typegetpayment  = 'ชำระหักเงินฝาก'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			$strSQL = "Delete From money_customer_bank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and create_date = '".$daystart."' and typegetpayment  = 'ชำระ2ทาง'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 


			if($typedatapayment == "ชำระหักเงินฝาก"){
				 
				$typegetpayment = "ชำระหักเงินฝาก";
				$datestart = " - "; 

				$bill_nocount = 1;
				$sql2 = " SELECT * FROM run_bill4   order by pk asc   ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$bill_nocount ++;
				}

				$bill_no_ref =  "SGBP"."".$major."".date('Ydm')."-".$bill_nocount;
				$strSQL = "INSERT INTO run_bill4 ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
				$query2 = mysqli_query($objCon,$strSQL);
				
				 

				$strSQL = "INSERT INTO money_customer_bank ( 
				money, bill_no_ref, customer, create_date, 
				create_date2, create_time, create_by, datesave, bill_no, typegetpayment ) 
				VALUES 
				( 
				'".$money."', '".$bill_no_ref."', '".$customer."', 
				'".$daystart."',   '".$dayend."', '".date('H:i')."',
				'".$_SESSION["UserID"]."', '".$datesave."', '".$bill_no."', '".$typegetpayment."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
				// echo $strSQL;
			}  
			if($typedatapayment == "ชำระ2ทาง"){
				
				$typegetpayment = "ชำระ2ทาง";
				$datestart = " - "; 

				$bill_nocount = 1;
				$sql2 = " SELECT * FROM run_bill4   order by pk asc   ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$bill_nocount ++;
				}

				$bill_no_ref =  "SGBP"."".$major."".date('Ydm')."-".$bill_nocount;
				$strSQL = "INSERT INTO run_bill4 ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
				$query2 = mysqli_query($objCon,$strSQL);
				
				 

				$strSQL = "INSERT INTO money_customer_bank ( 
				money, bill_no_ref, customer, create_date, 
				create_date2, create_time, create_by, datesave, bill_no, typegetpayment ) 
				VALUES 
				( 
				'".$moneyall."', '".$bill_no_ref."', '".$customer."', 
				'".$daystart."',   '".$dayend."', '".date('H:i')."',
				'".$_SESSION["UserID"]."', '".$datesave."', '".$bill_no."', '".$typegetpayment."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
				// echo $strSQL;
			}

		 
		
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata. " - ". $typedatapayment. "', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
?>