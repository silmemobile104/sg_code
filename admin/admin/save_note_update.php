<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
		$datesave =  date('Y-m-d');
		$majordata =  $_POST["bill_no"];
		$round =  $_POST["round"];
		$contactdata =  "รายวัน";
		$bill =  $_POST["bill_no"];
		$noteback =  $_POST["noteback"];
		$note =  $_POST["note"];

		$strSQL = " Update history_payment Set    note = '".$note."' " ;
		$strSQL .=" WHERE pk = '". $round  ."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		 
 

		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill."', '".$bill."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." อัพเดต ".$note." ', '".$contactdata."', '".$bill."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
					 
 
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = '".$_POST["backpage"]."';</script>");
		
	 
	 
?>