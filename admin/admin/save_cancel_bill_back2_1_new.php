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
		$status = $_GET["status"];
		$c_moneydown = $_GET["c_moneydown"];
		$c_discount = $_GET["c_discount"];
		$c_cancel = $_GET["c_cancel"];
		$c_rowback = $_GET["c_rowback"];
		$c_total = $_GET["c_total"];
		$c_moneylost = $_GET["c_moneylost"];
		$c_company = $_GET["c_company"];


		$c_payment = $_GET["c_payment"];
		$c_bank = $_GET["c_bank"];
		  
 

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
						 
						if($status == "ยกเลิกสัญญา"){
 
							/*
							$strSQL = " Update product Set total = '1', status = 'พร้อมจำหน่าย'  " ;
							$strSQL .=" WHERE pk = '". $menu_id ."' "; 
							$objQuery = mysqli_query($objCon, $strSQL);
							*/
							
							$price1 = 0;
							$sql2 = "SELECT * FROM product where pk = '".$menu_id."'  ";
							$query2 = mysqli_query($objCon,$sql2);
							while($objResult2 = mysqli_fetch_array($query2))
							{
								 $price1 = $objResult2["price1"];   
							} 
							
							$calprice = $price1 - $c_company;
							if($calprice <= 0){
								$calprice = 0;
							}
							
							/*
							$strSQL = " Update product Set price1 = '".$calprice."'  " ;
							$strSQL .=" WHERE pk = '". $menu_id ."' "; 
							$objQuery = mysqli_query($objCon, $strSQL);
							 */
							
							
							$strSQL = " Update product Set price1_wait = '".$calprice."'  " ;
							$strSQL .=" WHERE pk = '". $menu_id ."' "; 
							$objQuery = mysqli_query($objCon, $strSQL);
							
							
							
							
							$bill_no2 = ""; 
							$GGyear= date('Y')+543 ; 
							$sql2 = "SELECT count(pk) as total FROM run_bill_cancel  ";
							$query2 = mysqli_query($objCon,$sql2);
							while($objResult2 = mysqli_fetch_array($query2))
							{
								$total = $objResult2["total"] + 1;  
							} 

							$bill_no2 =  "BSGMM".date('Ymd')."-".$total; 
							$strSQL = "INSERT INTO run_bill_cancel (bill_no) VALUES  ('".$bill_no2."')";  
							$objQuery = mysqli_query($objCon, $strSQL);
							
							
						 	 $strSQL = "Update list_order Set  
							 c_payment = '".$c_payment."',           
							 c_bank = '".$c_bank."', 
							 
							 c_run_bill_no = '".$bill_no2."',           
							 c_status = '".$status."',           
							 c_moneydown = '".$c_moneydown."', 
							 c_discount = '".$c_discount."', 
							 c_cancel = '".$c_cancel."', 
							 c_rowback = '".$c_rowback."', 
							 c_total = '".$c_total."', 
							 c_moneylost = '".$c_moneylost."', 
							 c_company = '".$c_company."', 
							  
							 c_create_date = '".date('d-m-Y')."',         
							 c_create_date2 = '".date('Y-m-d')."',         
							 c_create_time = '".date('H:i:s')."',         
							 c_create_by = '".$_SESSION["UserID"]."' " ;
							 $strSQL .=" WHERE bill_no = '". $bill_no ."' ";  
							 $objQuery = mysqli_query($objCon, $strSQL); 
 
							 
							 $strSQL = " Update list_order Set closebill = 'หมดหนี้', w_status_save = 'รอตรวจสอบ', w_typedata = 'ยกเลิกสัญญา' " ;
							 $strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
							 $objQuery = mysqli_query($objCon, $strSQL);

							 $strSQL = " Update history_payment Set closebill = 'หมดหนี้'  " ;
							 $strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
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







