<?php 
session_start();  
include('../database.php');
	
		 
		 
			$member = $_SESSION["UserID"] ;         
			$major = $_POST["major"] ;         
 
 

			if(!empty($member)){ 
			  
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_bill_price_setting  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "APR".date('Ymd')."-".$total; 
			$strSQL = "INSERT INTO run_bill_price_setting (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				  
				
			$strSQL = "INSERT INTO add_price_payment_add ( 
			money1, money2, money3, 
			money4, money5, money6, 
			money7, money8, note,  
			money9, 
			
			
			create_by, create_date, create_date2, create_time, bill_no, major
			) VALUES  ( 
			'".$_POST["money1"]."', '".$_POST["money2"]."', '".$_POST["money3"]."', 
			'".$_POST["money4"]."', '".$_POST["money5"]."', '".$_POST["money6"]."',  
			'".$_POST["money7"]."', '".$_POST["money8"]."', '".$_POST["note"]."',   
			'".$_POST["money9"]."',    
			  
			'".$member."',  '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."', '".$bill_no."', '".$major."'   
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
				
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".date('d-m-Y')."', '".$major."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." เพิ่มรายการ ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

				
				
			}

    
		 echo("<script>window.location = 'add_price_payment_add.php';</script>");
?>