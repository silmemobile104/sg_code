<meta charset="utf-8">
 <?php
session_start();
include("../database.php");
	
	 

	$check_image11 = $_FILES["newAvatar"]["name"];
	$check_image11_b = $_FILES["newAvatar"]["name"];
	$file_name = $_FILES["newAvatar"]["name"];
	$imgold = $_FILES["newAvatar"]["name"];
	$CusID = $_POST['idupdate'];

 
  	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		 
	   
			$bill_no = $_POST["bill_no"];   
			$check_type = $_FILES["newAvatar"]["type"];
			$update_img11 = "";
   
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				$check_image11 = "reimg".rand(111111111111,99999999999).$_FILES["newAvatar"]["name"];
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					 $update_img11  =  ", img = '".$check_image11."'" ;
				} 
			}
			
			$strSQL = "INSERT INTO product_img (  img, bill_no, img_old    ) VALUES  ( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
		 
 
			$strSQL = "Update paymentother Set    
			 nameold = '".$file_name."',  
			 bank = '".$_POST["bank"]."',  
			 payment = '".$_POST["payment"]."',  
			 customer = '".$_POST["customer"]."',  
			 data4 = '".$_POST["data4"]."',  
			 data1 = '".$_POST["data1"]."',  
			 data2 = '".$_POST["data2"]."',  
			 data3 = '".$_POST["data3"]."' ".$update_img11 ;
			$strSQL .=" WHERE pk = '". $CusID ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 


			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' อัพเดต ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);	
					 
		 
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
			 echo("<script>window.location = 'paymentother.php?CusID=".$CusID."&page=1';</script>");
			 
		} 
?>