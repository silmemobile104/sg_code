<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$savepk = $_GET["savepk"];
		  
 
		if(!empty($_SESSION["UserID"])){
			 
						
			$strSQL = " Update list_order Set tanai_chk =  ''  " ;
			$strSQL .=" WHERE bill_no = '".$savepk."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
  
			 

		}
 
			$data = array(
			 'ans' => "1" 
			); 

echo json_encode($data);
?>







