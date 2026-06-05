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
		
		$getpayment = $_POST["getpayment"];    
		$bank = $_POST["bank"];    
		   
		$check_image11 = $_FILES["newAvatar"]["name"]; 
		$file_name = $_FILES["newAvatar"]["name"]; 
		$update_img11 = "";

		if(empty($check_image11)){
			$check_image11 = "";
		}else{
			$check_image11 = "MSGMM".rand(1,999)."img".rand(110000,999999).".png";
			if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
			{
				$update_img11  =  $check_image11 ;
			} 
		}
		
		
	 
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_member_bank  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGMM".date('dmY')."-".$total; 
		$strSQL = "INSERT INTO run_bill_member_bank (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

  
		
		$cut = explode("/",$_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income));   
		$typedata = "ฝากเงิน";
		
		
		 
			
		$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
		( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		 
			 
		$strSQL = "INSERT INTO member_bank ( 
		savedate, price, img, create_date, create_date2, create_time, 
		create_by, major, typedata, bill_no, member, img_old, getpayment, bank 
		) 
		VALUES ( 
		'".$_POST["savedate"]."', '".$_POST["price"]."', '".$update_img11."', '".$daystart."', '".$dayend."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$major."',  '".$typedata."', '".$bill_no."', '".$CusID."', '".$file_name."', '".$getpayment."', '".$bank."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
		' ทำรายการ ".$typedata. "" . $_POST["price"] ."  ', '".$bill_no."', '".$bill_no."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);


		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'member_bank_income.php?CusID=".$CusID."&major=".$major."';</script>");
			 
		 
	}
?>