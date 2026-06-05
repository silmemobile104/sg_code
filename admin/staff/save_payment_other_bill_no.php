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
			$sql2 = "SELECT count(pk) as total FROM run_payment_other_bill_no  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "SGPF".date('Ymd')."-".$total; 
			$strSQL = "INSERT INTO run_payment_other_bill_no (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				
				
			$cut = explode("/",$_POST["datestart"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
		 
			$strSQL = "INSERT INTO payment_other_bill_no ( price, date_start, date_start2, date_time, create_by, bill_no, bill_no_ref, datestart, discount, payment, bank  ) 
			VALUES ( 
			'".$_POST["dprice"]."',  '".$daystart."', '".$dayend."', 
			'".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill_no."', '".$_POST["bill_no"]."', '".$_POST["datestart"]."', '".$_POST["ddiscount"]."', '".$_POST["payment"]."', '".$_POST["bank"]."' 
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL);

			//echo $strSQL;
			//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>"); 
		 
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." เพิ่มรายการ  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

				
		echo("<script>window.location = 'view_history.php?page=1&bill_no=".$_POST["bill_no"]."';</script>");
	 
	 }
		
	 
	 
?>