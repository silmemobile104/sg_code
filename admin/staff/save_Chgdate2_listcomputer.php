<?php 
session_start();
include("../database.php");
 
			$pksave = $_GET["pksave"] ;    
			$date = $_GET["startdatesave"] ;        
			$bill = $_GET["bill"] ;              
 
  
			$cut = explode("/",$date);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
 

			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 

			$strSQL = "  Update list_chk_computer Set 
			create_date = '".$daystart."',  
			create_date2 = '".$dayend."'     
			"  ;
			$strSQL .="  WHERE bill_no = '".$bill."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
 			/// echo $strSQL; 

 

			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$pksave."', '".$bill."', '".$dayend."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'เปลี่ยนวัน', '".$contactdata."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


?>