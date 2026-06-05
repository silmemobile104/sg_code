<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 
			$strSQL = "Update add_price_payment_add Set  
				 money1 = '".$_POST["money1"]."',
				 money2 = '".$_POST["money2"]."',
				 money3 = '".$_POST["money3"]."',
				 money4 = '".$_POST["money4"]."',
				 money5 = '".$_POST["money5"]."',
				 money6 = '".$_POST["money6"]."',
				 money7 = '".$_POST["money7"]."',
				 money8 = '".$_POST["money8"]."',
				 money9 = '".$_POST["money9"]."',
				 note = '".$_POST["note"]."'
				 
				 
				 " ;
			$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
	 
		 	$bill_no = $_POST["bill_no"];
		 	$major = $_POST["major"];
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".date('Y-m-d')."', '".$major."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." อัพเดตรายการ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

		
		 echo("<script>window.location = 'add_price_payment.php?major=".$_POST["major"]."';</script>");
	}
?>