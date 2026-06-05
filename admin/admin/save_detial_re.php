<?php 
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$save_key = $_GET["save_key"] ;    
			$detailt = $_GET["detail"] ;    
			$bill = $_GET["bill"] ;    
			$member = $_SESSION["UserID"] ;         
 
 

			if(!empty($member)){ 
			 
				$cut = explode("/",$save_key);
				$date_income = $cut[0]."-".$cut[1]."-".($cut[2]); 
				$daystart_load = date("Y-m-d", strtotime($date_income));  
				
				
				$strSQL = "INSERT INTO table_list_store ( save_key, save_key2, detail, create_by, create_date, create_date2, create_time, bill_no ) VALUES  ( 
				'".$save_key."', '".$daystart_load."', '".$detailt."', '".$member."', '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."',
				'".$bill."'
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
 
			}

 
		$data = array(
			'ans' => "1" 
		); 


echo json_encode($data);	  
?>