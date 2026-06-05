<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$menuid = $_POST["data1"];    
			$major = $_POST["data2"];     
			$major2 = $_POST["data3"];     
			$bill_save = $_POST["bill_save"];     
			$member_user = $_SESSION["UserID"];

		  
			  
			if(empty($member_user)){ 
				$data = array(
				   'ans' => "2" 
				);
			}else{ 
				  
				  
					$strSQL = "SELECT * FROM list_order_store WHERE bill_no = '".$bill_save."' and pasy_onoff = '' ";
					$objQuery = mysqli_query($objCon, $strSQL);
					$objResult = mysqli_fetch_array($objQuery);
					if($objResult)
					{ 
						$strSQL = " Update list_order_store Set  pasy_onoff = 'ON', pasy_createby = '".$_SESSION["UserID"]."'    " ;
						$strSQL .=" WHERE bill_no = '".$bill_save."' ";  
						$objQuery = mysqli_query($objCon, $strSQL); 
						
						$data = array(
						   'ans' => "0" 
						);
		  
					}else{
						
						$data = array(
						   'ans' => "1" 
						);
					}
			}	 
				 
 
			 	 
			  
echo json_encode($data);
?>