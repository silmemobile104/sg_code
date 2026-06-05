<?php
session_start();
include('../database.php');
	
 
		if(empty($_SESSION["UserID"])){
			 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
			 echo("<script>window.location = '../index.php';</script>");

		}else{
			 
			$bill_no = $_POST["bill_no"];
			$check_image11 = $_FILES["newAvatar"]["name"]; 
			$update_img11 = "";
  
				if(empty($check_image11)){
					$check_image11 = "";
				}else{
					$check_image11 = "QED".rand(1,999)."img".rand(110000,999999).".png";
					if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
					{
						$update_img11  =  ", img ='".$check_image11."'" ;
					} 
				}


				$strSQL = "Update QRdata Set  data1  = '".$_POST["detail"]."'  ".$update_img11  ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			
		
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".date('d-m-Y')."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', ' อัพเดตรายการ ', '".$bill_no."', '".$bill_no."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
			
			
			
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'editcontactprint.php';</script>");
		 
		}
?>