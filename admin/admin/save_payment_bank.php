<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
  
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."".$cut[1]."".($cut[2]); 


		$bill_nocount = 1;
		$sql2 = " SELECT * FROM run_bill4   order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$bill_nocount ++;
		}

		$bill_no =  "SGBP"."".$_POST["major"]."".$date_income."-".$bill_nocount;
		
		$strSQL = "INSERT INTO run_bill4 ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
		$query2 = mysqli_query($objCon,$strSQL);
		 
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
							
							
					$check_image11 = "GCVFrimgCHAT".rand(1,9999999)."img".rand(110000,999999).".png"; 
					move_uploaded_file($file_tmp,"../img/".$check_image11);
					$update_img11  =  $check_image11 ; 
					 
					$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
					( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
							 	
					}
						
						
						
					} 
					
				} 
			}
	 
		 
 
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
			
		$strSQL = "INSERT INTO money_customer_bank ( 
		money, bill_no_ref, customer, create_date, 
		create_date2, create_time, create_by, datesave, bill_no, typegetpayment, bank ) 
		VALUES 
		( 
		'".$_POST["money"]."', '".$bill_no."', '".$_POST["customer"]."', 
		'".$daystart."',   '".$dayend."', '".date('H:i')."',
		'".$_SESSION["UserID"]."', '".$_POST["datesave"]."', '".$_POST["bill_no"]."', '".$_POST["getpayment"]."', '".$_POST["bank"]."' 
	 	)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		// echo $strSQL;
			 
		

		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$daystart."', '".$_POST["bill_no"]."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 'กรอกยอดเงิน : ".$_POST["money"]."', '".$_POST["bill_no"]."', '".$bill_no."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
			



		echo("<script>window.location = 'payment_bank.php?page=2&bill_no=".$_POST["bill_no"]."&customer=".$_POST["customer"]."&major=".$_POST["major"]."';</script>");
	 
?>