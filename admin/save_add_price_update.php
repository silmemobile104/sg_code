<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		    
			$cut = explode("/",$_POST["datesave"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
				
			$strSQL = "Update price_setting Set  
				 create_date = '".$daystart."',  
				 create_date2 = '".$dayend."',  
				 datesave = '".$_POST["datesave"]."',  
				 titledata = '".$_POST["titledata"]."',  
				 notedata = '".$_POST["notedata"]."',  
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