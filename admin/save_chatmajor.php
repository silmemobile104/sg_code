<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
  
		$bill_nocount = 1;
		$sql2 = " SELECT * FROM run_chat   order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$bill_nocount ++;
		}

		$bill_no =  "PO"."".$_POST["major"]."".date('Ydm')."-".$bill_nocount;
		
		$strSQL = "INSERT INTO run_chat ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
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
					
					$check_image11 = "GrimgCHAT".rand(1,9999999)."img".rand(110000,999999).".png"; 
					move_uploaded_file($file_tmp,"../img/".$check_image11);
					$update_img11  =  $check_image11 ; 
					
					
					
					$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES  ( '".$update_img11."',  '".$bill_no."'  )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
					} 
					
				} 
			}
	 
		 
 
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
			
		$strSQL = "INSERT INTO datachat ( 
		datesave, customer, create_date, create_date2, 
		create_time, create_by, datenew1, datenew2, 
		detail , major, bill_no, drop_chat  ) 
		VALUES 
		( 
		'".$_POST["datesave"]."', '".$_POST["customer"]."', '".date('d-m-Y')."', '".date('Y-m-d')."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$daystart."', 
		'".$dayend."', '".$_POST["detail"]."', '".$_POST["major"]."', '".$bill_no."', '".$_POST["drop_chat"]."' 
	 	)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		/// echo $strSQL;
			 
		
		 echo("<script>window.location = 'chatmajor.php';</script>");
	 
?>