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

		  
			  
			if(empty($member_user)){
				
			}else{  
					$strSQL = "SELECT * FROM list_imagecontact WHERE pkselect = '".$menuid."' and bill_no = '".$bill."' and typedata = '3' ";
					$objQuery = mysqli_query($objCon, $strSQL);
					$objResult = mysqli_fetch_array($objQuery);
					if(!$objResult)
					{ 
						$strSQL = "INSERT INTO list_imagecontact ( 
						pkselect, create_by, create_date, create_date2, create_time, bill_no, typedata    ) 
						VALUES ( 
						'".$menuid."', '".$member_user."', '".date('d-m-Y')."', 
						'".date('Y-m-d')."', '".date('H:i')."', '".$bill."', '3' 
						)"; 
						$objQuery = mysqli_query($objCon, $strSQL);
		  
						
						
						$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$menuid."', '3', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', 'บันทึกยอดชำระหนี้', '".$bill_no."', '".$bill_no."' )"; 
						$objQuery = mysqli_query($objCon, $strSQL);	
 
					} 
			}	 
				
				$data = array(
				   'ans' => "0" 
				);
 
			 	 
			  
echo json_encode($data);
?>