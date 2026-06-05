<?php 
session_start();  
include('../database.php');
	
		 
			$bill_no = $_POST["bill_no"] ;  
			$save_key = $_POST["datesave"] ;  
			$member = $_SESSION["UserID"] ;         
 
 

			if(!empty($member)){ 
			 
			$cut = explode("/",$save_key);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]); 
			$daystart_load = date("Y-m-d", strtotime($date_income));  
				 
			  
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
					 
					
					$check_image11 = "CRCDCGrimg".rand(1,9999999)."img".rand(110000,999999).".png"; 
					move_uploaded_file($file_tmp,"../img/".$check_image11);
					$update_img11  =  $check_image11 ; 
					
					if(!empty($file_name)){
						  
					$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES 
					( '".$update_img11."',  '".$bill_no."'  )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
					
					}
				} 
			}
	 
		
 
			$strSQL = "Update mobile_restore Set           
				 bank = '".$_POST["bank"]."',                  
				 datesave = '".$_POST["datesave"]."',                  
				 datesave2 = '".$daystart_load."',                  
				 customer = '".$_POST["customer"]."',                  
				 telphone = '".$_POST["telphone"]."',          
				 proshow1 = '".$_POST["proshow1"]."',           
				 proshow2 = '".$_POST["proshow2"]."',           
				 proshow3 = '".$_POST["proshow3"]."',           
				 proshow4 = '".$_POST["proshow4"]."',           
				 proshow5 = '".$_POST["proshow5"]."',           
				 proshow6 = '".$_POST["proshow6"]."',           
				 proshow7 = '".$_POST["proshow7"]."',           
				 telphone1 = '".$_POST["telphone1"]."',         
				 telphone2 = '".$_POST["telphone2"]."',         
				 price1 = '".$_POST["price1"]."',         
				 price2 = '".$_POST["price2"]."',         
				 price3 = '".$_POST["price3"]."',   
				 price4 = '".$_POST["price4"]."',   
				 
				 major = '".$_POST["major"]."',            
				 sendata = '".$_POST["sendata"]."',     
				 codecustomer = '".$_POST["codecustomer"]."',     
				 
				 
				 
				 statuspayment = '".$_POST["statuspayment"]."',         
				 statusave = '".$_POST["statusave"]."',         
				 statusavevat = '".$_POST["statusavevat"]."'  " ;
				$strSQL .=" WHERE bill_no = '". $bill_no ."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
				
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." ทำการอัพเดตรายการ ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

				
				
			}

    
		 echo("<script>window.location = 'mobile_restore_edit.php?bill_no=".$bill_no."&page=1';</script>");
?>