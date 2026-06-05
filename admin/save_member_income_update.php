<meta charset="utf-8">
<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		 
	 
		$major = $_POST["major2"];   
		$CusID = $_POST["CusID"];    
		$bill_no = $_POST["bill_no"];    
		  
		  
		$check_image11 = $_FILES["newAvatar"]["name"]; 
		$file_name = $_FILES["newAvatar"]["name"]; 
		$update_img11 = "";

		if(empty($check_image11)){
			$check_image11 = "";
		}else{
			$check_image11 = "REMSGMM".rand(1,999)."img".rand(110000,999999).".png";
			if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
			{
				$update_img11  =  ", img ='".$check_image11."'" ;
			} 
		}
	 	 
		$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
		( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		
		$cut = explode("/",$_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income));   
		$typedata = "ฝากเงิน";
		 
		
			/*
		$strSQL = "Update payment_other Set           
		 savedate = '".$_POST["savedate"]."',                
		 create_date = '".$daystart."',         
		 create_date2 = '".$dayend."' ".$update_img11 ;
		$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		  */
			
			
		$strSQL = "Update member_bank Set           
		 price = '".$_POST["price"]."',                
		 getpayment = '".$_POST["getpayment"]."',                
		 bank = '".$_POST["bank"]."',                
		 create_date = '".$daystart."',         
		 create_date2 = '".$dayend."' ".$update_img11 ;
		$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
		' ทำรายการอัพเดต ".$typedata. "" . $_POST["price"] ."  ', '".$bill_no."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);


		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'member_bank_income.php?CusID=".$CusID."&major=".$major."';</script>");
			 
		 
	}
?>