<?php  
session_start();
include('../database.php');
   
	 
		$create_by = $_SESSION["UserID"]; 
		$paymenttype = $_POST["paymenttype"]; 
		$paymenttype2 = $_POST["paymenttype2"]; 
		$price = $_POST["price"];  
  
		 
		$cut = explode("/",$_POST["startdate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);   
			
		$daystart = date("Y-m-d", strtotime($date_income));  
		$daystart2 = date("d-m-Y", strtotime($date_income));  
		$daystartold = $_POST["startdate"];  
  
 
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_payment3      ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 

		$bill_no =  "B".date('Ymd')."-".$total;  
		$strSQL = "INSERT INTO run_bill_payment3 (bill_no, paymenttype, paymenttype2 ) 
		VALUES  ('".$bill_no."', '".$paymenttype."', '".$paymenttype2."'  )";  
		$objQuery = mysqli_query($objCon, $strSQL);

				
		$strSQL = "INSERT INTO paymenttyp3 ( 
		create_by, create_date, create_date2, create_time, 
		paymenttype, paymenttype2,  bill_no, price, note, note2, statuspasy, statuspayment, bank  
		) 
		VALUES ( 
		'".$create_by."', '". $daystart2 ."', '". $daystart ."', '".date('H:i')."', 
		'".$paymenttype."', '".$paymenttype2."', '".$bill_no."',   
		'".$_POST["price"]."' , '".$_POST["note"]."', '".$_POST["note2"]."', '".$_POST["statuspasy"]."', '".$_POST["statuspayment"]."', '".$_POST["bank"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
 
 


		  ///  echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
 		 echo("<script>window.location = 'paymenttyp3.php?paymenttype=".$paymenttype."&paymenttype2=".$paymenttype2."';</script>");
	 
?>