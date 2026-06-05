<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
 
 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"]; 
		$note = $_GET["note"]; 
		   
		if(!empty($_SESSION["UserID"])){
			  
			$menu_id = "";
			$menuid = "";
			$check_status = "";
			$sql2 = "SELECT * FROM list_order_cleam where pk = '".$_GET["bill_no"]."'  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				 $menu_id = $objResult2["menu_id"];  
				 $menuid = $objResult2["menu_id"];  
				 $check_status = $objResult2["w_status_save"];  
			} 
			 
			$strSQL = "Update product Set  note = '".$note."' " ;
			$strSQL .=" WHERE pk = '". $menu_id  ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 

			$strSQL = " Update list_order_cleam Set  note = '".$note."'   " ;
			$strSQL .=" WHERE  pk = '".$_GET["bill_no"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' อัพเดตหมายเหตุ ".$note."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
				
			 

		}
 

 
			$data = array(
			   'ans' => "1" 
			); 

echo json_encode($data);
?>







