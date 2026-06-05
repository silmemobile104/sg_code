<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		 
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_bill_price_setting  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "PSET".date('Ymd')."-".$total; 
			$strSQL = "INSERT INTO run_bill_price_setting (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				
		 
		    
			$cut = explode("/",$_POST["datesave"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
				
		 
		$strSQL = "INSERT INTO price_setting ( money,   create_date, create_date2, create_time, create_by, bill_no, payment, bank, titledata, datesave, notedata, pasy  ) 
		VALUES ( 
		'".$_POST["money"]."',  '". $daystart ."', '". $dayend ."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill_no."', '".$_POST["payment"]."', '".$_POST["bank"]."', '".$_POST["titledata"]."', '".$_POST["datesave"]."', '".$_POST["notedata"]."' , '".$_POST["pasy"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>"); 
		
	 
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." เพิ่มรายการ ".$_POST["money"]." ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

				
		echo("<script>window.location = 'add_price.php';</script>");
	 
	 }
		
	 
	 
?>