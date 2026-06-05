<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$showstatusnew1 = $_GET["data1"];
		$showstatusnew2 = $_GET["data2"];
		$showstatusnew3 = $_GET["data3"];
		$showstatusnew4 = $_GET["data4"];
		$showstatusnew5 = $_GET["data5"];
		  
 
		if(!empty($_SESSION["UserID"])){
			 
						
			$strSQL = " Update list_order Set 
			statusnew1 =  '".$showstatusnew1."' , 
			statusnew2 =  '".$showstatusnew2."' , 
			statusnew3 =  '".$showstatusnew3."' , 
			statusnew4 =  '".$showstatusnew4."' , 
			statusnew5 =  '".$showstatusnew5."'  
			" ;
			$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
			 
			 

		}
 
			$data = array(
			 'ans' => "1" 
			); 

echo json_encode($data);
?>







