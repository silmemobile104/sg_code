<meta charset="utf-8">
 <?php
session_start();
include("../database.php");
	
	 

	$check_image11 = $_FILES["newAvatar"]["name"];
	$file_name = $_FILES["newAvatar"]["name"];
	$imgold = $_FILES["newAvatar"]["name"];
	$customer = $_POST['customer'];


	 

  	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		
		 	$datesave = $_POST["datesave"];
			$cut = explode("/",$datesave);
			$date_income = $cut[2]."-".$cut[1]."-".($cut[0]); 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
			
			
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_billimagecontact  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "IG".$cut[2]."".$cut[1]."".($cut[0])."-".$total; 
			$strSQL = "INSERT INTO run_billimagecontact (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
			 

		

			$check_type = $_FILES["newAvatar"]["type"];
			$update_img11 = "";
  
				
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				$check_image11 = "imagecontact".rand(111111111111,99999999999).$_FILES["newAvatar"]["name"];
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					 $update_img11  =  $check_image11 ;
				} 
			}
			
			$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
			( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
		 


			$strSQL = "INSERT INTO paymentother ( nameold,  img,  create_date,  create_date2,  create_by,  bill_no, data1, data2, data3, create_time, customer, payment, bank, data4  ) VALUES 
			( '".$imgold."', '".$update_img11."', '".$daystart."', '".$dayend."', '".$create_by."', '".$bill_no."', 
			'".$_POST["data1"]."', '".$_POST["data2"]."', '".$_POST["data3"]."', '".date('H:i')."', '".$_POST["customer"]."', '".$_POST["payment"]."', '".$_POST["bank"]."', '".$_POST["data4"]."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);		  



			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' อัพโหลดรูปสลิป ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);	
					 
		
			 
		
				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
			 echo("<script>window.location = 'paymentother.php?customer=".$customer."';</script>");
			
		}
	
?>