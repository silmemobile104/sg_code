<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		  
		if(!empty($_SESSION["UserID"])){
			 

					if($_GET["status"] == "อนุมัติ/สัญญาโมฆะ"){
						  
					$menu_id = "";
					$sql2 = "SELECT * FROM list_order where bill_no = '".$_GET["bill_no"]."'  ";
					$query2 = mysqli_query($objCon,$sql2);
					while($objResult2 = mysqli_fetch_array($query2))
					{
						 $menu_id = $objResult2["menu_id"];  
					} 
						
					
					/*
					$strSQL = " Update product Set total = '1'  " ;
					$strSQL .=" WHERE pk = '". $menu_id ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
					*/
						
						
				    $strSQL = " Update list_order Set status =  '".$_GET["status"]."', c_status = 'รอการยืนยัน', c_status_date_alert = '".date('Y-m-d')."' " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);

					$strSQL = " Update history_payment Set status =  '".$_GET["status"]."'  " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"] ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
						
					}else{
						  
				    $strSQL = " Update list_order Set status =  '".$_GET["status"]."', c_status = '', c_status_date_alert = ''   " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);

					$strSQL = " Update history_payment Set status =  '".$_GET["status"]."'  " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"] ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);

					}



			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$_GET["status"]."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


		}
 

 
			$data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>







