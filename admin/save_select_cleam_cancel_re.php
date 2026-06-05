<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			
			$menuid = $_POST["data1"];    
			$major = $_POST["data2"];     
			$bill = $_POST["data2"];     
			$datesave = date('Y-m-d');     
			$majordata = "";     
			$member_user = $_SESSION["UserID"];


			  	  
				$strSQL = "Delete From list_chk_cleam  ";
				$strSQL .="WHERE  pkselect = '".$menuid."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 
				


				
				$strSQL = " Update mobile_restore Set  chk = '', statuspayment = 'รอชำระเงิน'  " ;
				$strSQL .=" WHERE pk = '".$menuid."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 

 
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$member_user."', '".$bill." ทำการลบรายการ : ".$menuid."', '".$menuid."', '".$bill."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);

 

				$data = array(
				   'ans' => "0" 
				);
 
			 	  
 
echo json_encode($data);
?>