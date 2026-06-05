<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
			$cut = explode("/",$_POST["datestart"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
		 
			$strSQL = "Update payment_other_bill_no Set   
			payment = '".$_POST["payment"]."', 
			bank = '".$_POST["bank"]."', 
			price = '".$_POST["dprice"]."', 
			date_start = '".$daystart."', 
			date_start2 = '".$dayend."', 
			datestart = '".$_POST["datestart"]."',  
			discount = '".$_POST["ddiscount"]."'  " ;
			$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
	 
		 	$bill_no = $_POST["bill_no_ref"];
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." อัพเดตรายการ ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

		
		echo("<script>window.location = 'view_history.php?page=1&bill_no=".$_POST["bill_no"]."';</script>");
	}
?>