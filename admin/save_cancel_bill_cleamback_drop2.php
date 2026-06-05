<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$bill_no = $_GET["bill_no"];
		  
		if(!empty($_SESSION["UserID"])){
			 

					if($_GET["status"] == "พร้อมจำหน่าย"){
						  
					$menu_id = "";
					$status = "";
					$billdata = "";
					$sql2 = "SELECT * FROM list_chk_cleam_back where pk = '".$_GET["bill_no"]."'  ";
					$query2 = mysqli_query($objCon,$sql2);
					while($objResult2 = mysqli_fetch_array($query2))
					{
						 $menu_id = $objResult2["pkselect"];  
						 $status = $objResult2["status"];  
						 $billdata = $objResult2["bill_no"];  
					} 
						
					if($status == "เครมสินค้า/รอสินค้า"){
						 
					 
				    $strSQL = " Update list_chk_cleam_back Set status =  'พร้อมจำหน่าย' , date_comeback = '".date('Y-m-d')."' " ;
					$strSQL .=" WHERE pk = '".$_GET["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
						 

					$strSQL = " Update product Set status =  'พร้อมจำหน่าย', total = '1' " ;
					$strSQL .=" WHERE pk = '".$menu_id ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
						
						
					/*
					$price1_wait = 0;
					$sql2 = "SELECT * FROM product where pk = '".$menu_id."'  ";
					$query2 = mysqli_query($objCon,$sql2);
					while($objResult2 = mysqli_fetch_array($query2))
					{
						 $price1_wait = $objResult2["price1_wait"];   
					} 

					$strSQL = " Update product Set price1 = '".$price1_wait."'  " ;
					$strSQL .=" WHERE pk = '". $menu_id ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
					*/	
						 
						
						
					$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$billdata."', '".$billdata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
					' อัพเดตสถานะ ".$_GET["status"]."  ', '".$billdata."', '".$billdata."' )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
						
						 
					} 
						
					}
 


		}
 

 
			$data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>







