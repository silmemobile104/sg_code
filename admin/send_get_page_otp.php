<?php 
session_start();
include("../database.php");
 
			$pageget = $_GET["pageget"] ;    
			$note = $_GET["note"] ;    
			$member = $_SESSION["UserID"];
 
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			date_default_timezone_set("Asia/Bangkok");


			$tokendata = "";
			$sql = "SELECT * FROM tokenline Where  pk = '1' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$tokendata = $objResult["tokendata2"];   

			} 

			$member_name = "";
			$sql = "SELECT * FROM member_all Where  pk = '".$member."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$member_name = $objResult["name"];   
			} 



			$sToken = "".$tokendata;

			$searchname = date('Y-m-d');
			$daystart_load = date('d-m-Y');

			$keypass = (rand(10000,99999));
  
			$sMessage = "ข้อมูลพนักงานทีแจ้ง ".$member_name."  \n  แก้ไขรายการ  (".$pageget.")  \n  เหตุผล ".$note."  \n  เลขอนุมัติยืนยันการแก้ ".$keypass." \n โปรดบอกเลข pin   \n ";
 
			$chOne = curl_init(); 
			curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
			curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
			curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
			curl_setopt( $chOne, CURLOPT_POST, 1); 
			curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
			$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
			curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
			curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
			$result = curl_exec( $chOne ); 

			//Result error 
			if(curl_error($chOne)) 
			{ 
				echo 'error:' . curl_error($chOne); 
			} 
			else { 
				$result_ = json_decode($result, true); 
				echo "status : ".$result_['status']; echo "message : ". $result_['message'];
			} 
			curl_close( $chOne );   

			 


		
			$strSQL = "INSERT INTO member_checkin (date_start, date_start2, date_time, onoff, getipcustomer, bill_no, customer, note  ) 
			VALUES  (  '".date('Y-m-d')."', '".date('Y-m-d')."', '".date('H:i')."',  'ON',  '".$pageget."', '".$keypass."', '".$member. "', '".$note."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
 
			
?>