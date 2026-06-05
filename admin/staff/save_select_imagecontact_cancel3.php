<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$menuid = $_POST["data1"];    
			$bill = $_POST["data2"];       
			$bill_no = $_POST["data2"];       
			$member_user = $_SESSION["UserID"];
			$create_by = $_SESSION["UserID"];
 
			   
				$data = array(
				   'ans' => "0" 
				);
 
			if(empty($member_user)){
				
			}else{  
					
				$strSQL = "Delete From list_imagecontact  ";
				$strSQL .="WHERE  pkselect = '".$menuid."' and bill_no = '".$bill."'  and typedata = '3'    ";
				$objQuery = mysqli_query($objCon,$strSQL); 
				 
						
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$menuid."', '3', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' ทำการลบ ', '".$bill_no."', '".$bill_no."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);	
 
					 
			}	 
 
echo json_encode($data);
?>