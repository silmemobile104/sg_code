<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$getmoney1 = $_GET["getmoney1"];
		$getmoney2 = $_GET["getmoney2"];
		$getmoney3 = $_GET["getmoney3"];
		$getmoney4 = $_GET["getmoney4"];
		$getmoney5 = $_GET["getmoney5"];
		  

		if(!empty($_SESSION["UserID"])){
			
			$strSQL = " Update list_order Set tanai_momey1 =  '".$getmoney1."', tanai_momey2 =  '".$getmoney2."', tanai_momey3 =  '".$getmoney3."', tanai_momey4 =  '".$getmoney4."', tanai_momey5 =  '".$getmoney5."'  " ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);

			
			 
 
		}
 

 
		$data = array(
		   'ans' => "1" 
		); 

echo json_encode($data);
?>







