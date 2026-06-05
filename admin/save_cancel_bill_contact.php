<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		  
		if(!empty($_SESSION["UserID"])){
			 

					if($_GET["status"] == "ไม่อนุมัติ"){
						  
					$menu_id = "";
					$sql2 = "SELECT * FROM list_order where bill_no = '".$_GET["bill_no"]."'  ";
					$query2 = mysqli_query($objCon,$sql2);
					while($objResult2 = mysqli_fetch_array($query2))
					{
						 $menu_id = $objResult2["menu_id"];  
					} 
						 
						
					$strSQL = " Update product Set total = '1', status = 'พร้อมจำหน่าย'  " ;
					$strSQL .=" WHERE pk = '". $menu_id ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
		 
				     
				    $strSQL = " Update list_order Set contactstatus =  '".$_GET["status"]."', closebill =  'หมดหนี้',  status =  'อนุมัติ/สัญญาโมฆะ', contactstatus_name = '".$_SESSION["UserID"]."'  " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
						
					echo $strSQL;
						
					$strSQL = " Update history_payment Set closebill =  'หมดหนี้'  " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"] ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
						
					}else{
						  
				    $strSQL = " Update list_order Set contactstatus =  '".$_GET["status"]."', contactstatus_name = '".$_SESSION["UserID"]."'   " ;
					$strSQL .=" WHERE bill_no = '".$_GET["bill_no"]."' "; 
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







