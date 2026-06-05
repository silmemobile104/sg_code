<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"];
		  

		if(!empty($_SESSION["UserID"])){
			 
					 
						  
					$menu_id = "";
					$check_status = "";
					$sql2 = "SELECT * FROM list_order where bill_no = '".$_GET["bill_no"]."'  ";
					$query2 = mysqli_query($objCon,$sql2);
					while($objResult2 = mysqli_fetch_array($query2))
					{
						 $menu_id = $objResult2["menu_id"];  
						 $check_status = $objResult2["status"];  
					} 
						 
					if($check_status == "อนุมัติ/สัญญาโมฆะ"){
						 
						if($status == "กู้คืน"){

						$strSQL = " Update list_order Set status =  'ปกติ', c_status = ''  " ;
						$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
						$objQuery = mysqli_query($objCon, $strSQL);

						$strSQL = " Update history_payment Set status =  'ปกติ'  " ;
						$strSQL .=" WHERE bill_no = '".$bill_no."' "; 
						$objQuery = mysqli_query($objCon, $strSQL);

						}

					}


			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


		}
 

 
			$data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>







