<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"];
		  

		if(!empty($_SESSION["UserID"])){
			 
			$strSQL = " Update history_checkin Set 
			onoff =  '".$status."', 
			create_date = '".date('d-m-Y')."',  
			create_date2 = '".date('Y-m-d')."',  
			create_time = '".date('H:i')."',  
			staff_onoff = '".$_SESSION["UserID"]."'  
			" ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
			
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' อนุมัติ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
		}
 

 
		$data = array(
		   'ans' => "1" 
		); 

echo json_encode($data);
?>







