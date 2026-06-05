<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"]; 

		if(!empty($_SESSION["UserID"])){
			 
					  
			$strSQL = "Update member_bank Set  npl_status = '".$status."' " ;
			$strSQL .=" WHERE bill_no = '". $bill_no ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
 
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' สถานะ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


		}
 

 
			$data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>







