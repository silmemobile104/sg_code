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
						$update_img11  =  ", logo ='".$check_image11."'" ;
					} 
				}

			
			
			$check_image12 = $_FILES["newAvatar2"]["name"]; 
			$update_img12 = "";
  
				if(empty($check_image12)){
					$update_img12 = "";
				}else{
					$check_image12 = "QED2".rand(1,999)."img".rand(110000,999999).".png";
					if(move_uploaded_file($_FILES["newAvatar2"]["tmp_name"],"../img/".$check_image12))
					{
						$update_img12  =  ", logobackground ='".$check_image12."'" ;
					} 
				}
			
				/* 
				$logo = $objResult["logo"]; 
				$detail = $objResult["detail"]; 
				$logobackground = $objResult["logobackground"]; 
				*/

				$strSQL = " Update notedataprint Set  
				detail  = '". $_POST["detail"] ."', 
				telphone  = '". $_POST["telphone"] ."', 
				name  = '". $_POST["name"] ."' 
				
				".$update_img11. $update_img12  ;
				$strSQL .=" WHERE pk = '". $bill_no ."' "; 

				$objQuery = mysqli_query($objCon, $strSQL); 
			
			 ////echo $strSQL;
			
			
				
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'check_no_payment_loan_three.php?searchname=".$bill_no."';</script>");
		 
		}
?>