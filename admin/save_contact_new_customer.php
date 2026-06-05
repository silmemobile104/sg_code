<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$customerback = $_GET["customerback"];
		$customernew = $_GET["customernew"];
		  
		if(!empty($_SESSION["UserID"])){
			 
  			/*
			$strSQL = " Update list_order Set customer =  '".$customernew."', create_date2 = '".date('Y-m-d')."', create_date = '".date('d-m-Y')."' " ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
			*/
			
			$strSQL = " Update list_order Set customer =  '".$customernew."'  " ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);

			$strSQL = " Update history_payment Set status =  '".$customernew."'  " ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
						 
				 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no, customer_new, customer_bk ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'ทำการย้ายหนี้สำเร็จ', '".$bill_no."', '".$bill_no."', '".$customernew."', '".$customerback."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


		}
 

 
		$data = array(
		   'ans' => "1" 
		); 

echo json_encode($data);
?>







