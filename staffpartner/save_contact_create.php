<?php
session_start();  
include('../database.php');
	 
		  
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		
		
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_partner  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGBP".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_partner (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);
 

		 
		$dayround = $_POST["daytotal"];   
		$loopdata = $_POST["daytotal"];   
		$cut = explode("/", $_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart = date("Y-m-d", strtotime($date_income));  
			
								
		for($loop = 1; $loop <= $loopdata; $loop++){   
			  
			$daystart1 = date("Y-m-d", strtotime($date_income)); 
			$daystart2 = date("Y-m-d", strtotime($date_income)); 
			if($loop == 1){
			$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart1 ) ) . "+0 month" ) );	
			}else{
			$monthadd =  $loop - 1;
			$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart2 ) ) . "+$monthadd month" ) );	
			} 
		 
			
				 
			$endate = $myDate;
		}
		
		
 		$strSQL = "INSERT INTO list_order_partner (bill_no, major, savedate,
		typedatasave, 
		data1, data2, data3, data4, data5, data6, data7,  
		typedataproduct, typedataproduct2, typestore, typecolor, dataimei, moneystartprice, moneyprice, moneydown, cod,  
		daypriceall3, daytotal, daypriceshow1, moneymonthshow, daypayment, dataicloud, pasycal, 

		create_by, create_date, create_date2, create_time, statusadmin,
		startdate, enddate, data8, codecustomer
		) VALUES 
		(
		'".$bill_no."' , '".$_POST["major"]."', '".$_POST["savedate"]."', 
		'".$_POST["typedatasave"]."',  
		'".$_POST["data1"]."', '".$_POST["data2"]."', '".$_POST["data3"]."', '".$_POST["data4"]."', '".$_POST["data5"]."', '".$_POST["data6"]."', '".$_POST["data7"]."', 
		'".$_POST["typedataproduct"]."', '".$_POST["typedataproduct2"]."', '".$_POST["typestore"]."', '".$_POST["typecolor"]."', '".$_POST["dataimei"]."', '".$_POST["moneystartprice"]."', '".$_POST["moneyprice"]."', 
		'".$_POST["moneydown"]."', '".$_POST["cod"]."', '".$_POST["daypriceall3"]."', '".$_POST["daytotal"]."', '".$_POST["daypriceshow1"]."', '".$_POST["moneymonthshow"]."', '".$_POST["daypayment"]."', 
		'".$_POST["dataicloud"]."', '".$_POST["pasycal"]."',   
		'".$_SESSION["UserID"]."',  '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."', 'รอตรวจสอบ',
		'".$_POST["startdate"]."', '".$endate."', '".$_POST["data8"]."', '".$_POST["codecustomer"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
					
		
		
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'index.php';</script>");
		
	}



?>







