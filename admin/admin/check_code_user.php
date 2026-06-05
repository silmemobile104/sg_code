<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$codecustomer = $_POST["data1"];    
			$bill_no = $_POST["data2"];    
			
		    $strSQL = "SELECT * FROM list_order WHERE  bill_no != '".$bill_no."'  and   codecustomer  = '".$codecustomer."' "; 
			$objQuery = mysqli_query($objCon,$strSQL);
			$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);  
			if(!$objResult)
			{     
				$data = array(
				   'ans' => "0" 
				); 
			}
			else
			{ 
				$data = array(
					'ans' => "1" 
				);   
			}
 
echo json_encode($data);
?>