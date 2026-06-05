<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 
			$strSQL = "Update price_setting Set  
				 money = '".$_POST["money"]."',  
				 bank = '".$_POST["bank"]."',  
				 payment = '".$_POST["payment"]."'  
				 
				 
				 " ;
			$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
	 
		 	$bill_no = $_POST["bill_no"];
				
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			'".$bill_no." เพิ่มรายการ ".$_POST["money"]." ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

		
		 echo("<script>window.location = 'add_price.php?CusID=".$_POST["idupdate"]."';</script>");
	}
?>