<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	


		/*
			$c_moneydown = $objResult2["c_moneydown"];    
			$c_discount = $objResult2["c_discount"];    
			$c_cancel = $objResult2["c_cancel"];    
			$c_rowback = $objResult2["c_rowback"];    
			$c_total = $objResult2["c_total"];    
		*/


		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"]; 
		$c_noreaddon1 = $_GET["c_noreaddon1"];
		$c_noreaddon2 = $_GET["c_noreaddon2"]; 
		  

		if(!empty($_SESSION["UserID"])){
			  
		 $strSQL = "Update list_order Set  
		 c_noreaddon1 = '".$c_noreaddon1."',           
		 c_noreaddon2 = '".$c_noreaddon2."'  " ;
		 $strSQL .=" WHERE bill_no = '". $bill_no ."' ";  
		 $objQuery = mysqli_query($objCon, $strSQL); 
 
							  
			 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ   ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


		}
 

 
			$data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>







