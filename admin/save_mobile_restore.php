<?php 
session_start();  
include('../database.php');
	
		 
			$save_key = $_POST["datesave"] ;   
			$member = $_SESSION["UserID"] ;         
 
 

			if(!empty($member)){ 
			 
			$cut = explode("/",$save_key);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]); 
			$daystart_load = date("Y-m-d", strtotime($date_income));  
				 
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_bill_mobile  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "JSG".date('Ymd')."-".$total; 
			$strSQL = "INSERT INTO run_bill_mobile (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				
				
				
			$update_img11 = "";
			if(isset($_FILES["picupload"]))
			{
				foreach($_FILES['picupload']['tmp_name'] as $key => $val)
				{
					$update_img11 = "";
					$file_name = $_FILES['picupload']['name'][$key];
					$file_size =$_FILES['picupload']['size'][$key];
					$file_tmp =$_FILES['picupload']['tmp_name'][$key];
					$file_type=$_FILES['picupload']['type'][$key];   
					 
					
					$check_image11 = "JSG".rand(1,9999999)."img".rand(110000,999999).".png"; 
					move_uploaded_file($file_tmp,"../img/".$check_image11);
					$update_img11  =  $check_image11 ; 
					
					if(!empty($file_name)){
						  
					$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES 
					( '".$update_img11."',  '".$bill_no."'  )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
					
					}
				} 
			}
	 
				
				
			$strSQL = "Update table_list_store Set   bill_no = '".$bill_no."' " ;
			$strSQL .=" WHERE   bill_no = ''  and  create_by = '". $member ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
				
			$strSQL = "INSERT INTO mobile_restore ( 
			datesave, customer, telphone, 
			proshow1, proshow2, proshow3, 
			proshow4, proshow5, proshow6, 
			proshow7, typerestore, sendata, 
			telphone1, telphone2, price1, 
			price2, price3, price4,  statusave, 
			statusavevat,  datesave2, codecustomer,
			
			
			create_by, create_date, create_date2, create_time, bill_no, major, statuspayment, bank
			) VALUES  ( 
			'".$_POST["datesave"]."', '".$_POST["customer"]."', '".$_POST["telphone"]."', '".$_POST["proshow1"]."', 
			'".$_POST["proshow2"]."', '".$_POST["proshow3"]."', '".$_POST["proshow4"]."', '".$_POST["proshow5"]."', 
			'".$_POST["proshow6"]."', '".$_POST["proshow7"]."', '".$_POST["typerestore"]."', '".$_POST["sendata"]."', 
			'".$_POST["telphone1"]."', '".$_POST["telphone2"]."', '".$_POST["price1"]."', '".$_POST["price2"]."', 
			'".$_POST["price3"]."', '".$_POST["price4"]."', '".$_POST["statusave"]."', '".$_POST["statusavevat"]."', '".$daystart_load."', '".$_POST["codecustomer"]."', 
			  
			'".$member."',  '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."', '".$bill_no."', '".$_POST["major"]."', '".$_POST["statuspayment"]."', '".$_POST["bank"]."'  
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
				
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." ทำการอัพเดตรายการ ', '".$bill_no."', '".$bill_no."'  )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

				
				
			}

    
		 echo("<script>window.location = 'mobile_restore.php';</script>");
?>