<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"];
		$roundata = $_GET["roundata"];
		  

		if(!empty($_SESSION["UserID"])){
			

			$strSQL = "Delete From list_order_tanai  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and roundata = '".$roundata."' and statussave = '1' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			 
			 $strSQL = "INSERT INTO list_order_tanai ( tanaistatus1, tanaistatus1_by, tanaistatus1_time, tanaistatus1_date , bill_no, roundata, statussave   ) 
			 VALUES ( '".$status."',  '".$_SESSION["UserID"]."', '".date('H:i')."', '".date('Y-m-d')."',  '".$bill_no."',  '".$roundata."', '1'  )"; 
			 $objQuery = mysqli_query($objCon, $strSQL); 
  
						 
				  
 
		}
 

 
		$data = array(
		   'ans' => "1" 
		); 

echo json_encode($data);
?>







