<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
		$datesave =  date('Y-m-d');
		$majordata =  $_POST["bill_no"];
		$round =  $_POST["round"];
		$contactdata =  "รายวัน";
		$bill =  $_POST["bill_no"];
		$bill_no =  $_POST["bill_no"];



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


						if(!empty($file_name)){
							 
						$check_image11 = "FREGrimg".rand(1,999)."img".rand(110000,999999).".png"; 
						move_uploaded_file($file_tmp,"../img/".$check_image11);
						$update_img11  =  $check_image11 ; 

						$strSQL = "SELECT * FROM product_img WHERE img_old = '".$file_name."' ";
						$objQuery = mysqli_query($objCon, $strSQL);
						$objResult = mysqli_fetch_array($objQuery);
						if($objResult)
						{ 
						}
						else
						{	  
							$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
							( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
							$objQuery = mysqli_query($objCon, $strSQL);
							 	
							

							$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$round."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." อัพเดตสลิป ".$update_img11." ', '".$contactdata."', '".$bill."' )"; 
							$objQuery = mysqli_query($objCon, $strSQL);
							
							
						}
							

					 
							
							
						}

					}  
			}
	 
 
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'view_history.php?bill_no=".$_POST["bill_no"]."';</script>");
		
	 
	 
?>