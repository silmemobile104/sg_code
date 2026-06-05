<?php 
session_start();
include("../database.php");
 
			$pksave = $_GET["pksave"] ;    
			$date = $_GET["date"] ;        
			$bill = $_GET["bill"] ;        
			$dateback = $_GET["dateback"] ;        
			$datesavedata = $_GET["datesavedata"] ;        
 
  
			$cut = explode("/",$date);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
 

			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 

			$strSQL = "  Update history_payment Set 
			datestart = '".$daystart."',  
			create_date2 = '".$dayend."',  
			create_by = '".$_SESSION["UserID"]."'  ,
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$pksave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
 			/// echo $strSQL; 



			/*
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no) VALUES  ( '".$_SESSION["load_day"]."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			*/
	


			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$pksave."', '".$bill."', '".$dayend."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill." เปลี่ยนวัน จาก " .$dateback . " -> ".$date."', '".$contactdata."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);


?>