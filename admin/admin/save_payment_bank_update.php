<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
 
 		$bill_no = $_POST["bill_no"];
 		$bill_no_ref = $_POST["bill_no_ref"];
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 


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
							
							$strSQL = "SELECT * FROM product_img WHERE img_old = '".$file_name."' ";
							$objQuery = mysqli_query($objCon, $strSQL);
							$objResult = mysqli_fetch_array($objQuery);
							if($objResult)
							{ 
							}
							else
							{	  


							$check_image11 = "FREGrimg".rand(1,999)."img".rand(110000,999999).".png"; 
							move_uploaded_file($file_tmp,"../img/".$check_image11);
							$update_img11  =  $check_image11 ; 
 
							$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
							( '".$update_img11."',  '".$bill_no_ref."', '".$file_name."'  )"; 
							$objQuery = mysqli_query($objCon, $strSQL);

							}
							
							 
						 
						}

					}  
			}
	 
 
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
		
		$strSQL = "Update money_customer_bank Set   
		 datesave = '".$_POST["datesave"]."',  
		 create_date = '".$daystart."',  
		 create_date2 = '".$dayend."',  
		 money = '".$_POST["money"]."',  
		 bank = '".$_POST["bank"]."',  
		 typegetpayment = '".$_POST["getpayment"]."' " ;
		$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		 

		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$daystart."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 'กรอกยอดเงิน : ".$_POST["money"]."', '".$bill_no."', '".$bill_no_ref."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
			

		
		 echo("<script>window.location = 'payment_bank.php?CusID=".$_POST["idupdate"]."&bill_no=".$_POST["bill_no"]."&customer=".$_POST["customer"]."&major=".$_POST["major"]."&page=3';</script>");
	 
?>