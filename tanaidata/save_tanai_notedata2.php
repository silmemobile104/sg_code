<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"]; 
		$tanai_status3 = $_GET["tanai_status3"]; 
		  

		if(!empty($_SESSION["UserID"])){
			
 
			$strSQL = " Update list_order Set tanai_status3 =  '".$tanai_status3."'  " ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
 
		}
 

 
		$data = array(
		   'ans' => "1" 
		); 

echo json_encode($data);
?>







