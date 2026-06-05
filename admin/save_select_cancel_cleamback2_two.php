<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$menuid = $_POST["data1"];    
			$pkselect = $_GET["pkselect"];    
			$major = "";     
			$member_user = $_SESSION["UserID"];
 
			  
				$strSQL = "Delete From list_chk_cleam_back_two  ";
				$strSQL .="WHERE  pk = '".$pkselect."' and bill_no = '' ";
				$objQuery = mysqli_query($objCon,$strSQL); 
				
				$data = array(
				   'ans' => "0" 
				);
 
			 	  
 
echo json_encode($data);
?>