<?php
session_start();
include("../database.php");
 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");


	$tokendata = "";
	$sql = "SELECT * FROM tokenline Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$tokendata = $objResult["tokendata"];   

	} 


	$sToken = "".$tokendata;

	$searchname = date('Y-m-d');
	$daystart_load = date('d-m-Y');


	$bg = "#E8E8E8";
	$cal1 = 0; 
	$cal2 = 0; 
	$cal3 = 0; 
	$cal4 = 0; 
	$cal5 = 0; 

	$total_price4 = 0; 
	$total_price5 = 0; 
	$total_price6 = 0; 

	$income1 = 0;
	$income2 = 0;
	$addcode3 = "";
	$addcode2 = "";
	$addcode = "and a.datestart = '".$daystart_load."' ";

	$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook    FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		INNER Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != ''  
		and a.closebill = 'เป็นหนี้'   
		and a.status = 'ปกติ'   
		and a.onoff_copy = 'ปกติ'   
		".$addcode.$addcode2.$addcode3."    
		order by a.pk asc   ";  

	//// echo $sql;
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
	 
		
		if($objResult["typesave2"] == "เงินสด"){
			
			if(!empty($objResult["income"])){
				$cal1 += $objResult["income"];
			}
			
		}else if($objResult["typesave2"] == "โอนเงิน"){
			
			if(!empty($objResult["income"])){
				$cal2 += $objResult["income"];
			}
		}
		
		
		if($objResult["typesave"] == "ชำระ2ทาง"){
			
			if(!empty($objResult["income"])){
				$cal3 += $objResult["income"];
			}
			 
		}
		
		if(!empty($objResult["income"])){
			$cal4 += $objResult["income"];
		}
		
		if(!empty($objResult["discount"])){
			$cal5 += $objResult["discount"];
		}
	}
 


	$sMessage = " ยอดสรุปภาพรวม แบบปกติ ".$daystart_load." \n ยอดเงินสด  ". number_format(0+$cal1)." \n ยอดโอน ".  number_format(0+$cal2) ." บาท \n ชำระ 2 ทาง  ". number_format(0+$cal3) ."  บาท \n ยอดรับรวม  ". number_format(0+$cal4) ."  บาท \n ส่วนลด  ". number_format(0+$cal5) ." บาท \n ยอดเงินคงเหลือ  ". number_format(0+$cal4-$cal5) ."  บาท \n\n\n ";



	$cal1_npl = 0; 
	$cal2_npl = 0; 
	$cal3_npl = 0; 
	$cal4_npl = 0; 
	$cal5_npl = 0; 

	$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook    FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		INNER Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != ''  
		and a.closebill = 'เป็นหนี้'   
		and a.status = 'ปกติ'   
		and a.onoff_copy = 'npl'   
		".$addcode.$addcode2.$addcode3."    
		order by a.pk asc   ";  

	//// echo $sql;
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		 
		
		if($objResult["typesave2"] == "เงินสด"){
			
			if(!empty($objResult["income"])){
				$cal1_npl += $objResult["income"];
			}
			
		}else if($objResult["typesave2"] == "โอนเงิน"){
			
			if(!empty($objResult["income"])){
				$cal2_npl += $objResult["income"];
			}
		}
		
		
		if($objResult["typesave"] == "ชำระ2ทาง"){
			
			if(!empty($objResult["income"])){
				$cal3_npl += $objResult["income"];
			}
			 
		}
		
		if(!empty($objResult["income"])){
			$cal4_npl += $objResult["income"];
		}
		
		if(!empty($objResult["discount"])){
			$cal5_npl += $objResult["discount"];
		}
	}


	
	$sMessage .= " ยอดสรุปภาพรวม NPL ".$daystart_load." \n ยอดเงินสด  ". number_format(0+$cal1_npl)." \n ยอดโอน ".  number_format(0+$cal2_npl) ." บาท \n ชำระ 2 ทาง  ". number_format(0+$cal3_npl) ."  บาท \n ยอดรับรวม  ". number_format(0+$cal4_npl) ."  บาท \n ส่วนลด  ". number_format(0+$cal5_npl) ." บาท \n ยอดเงินคงเหลือ  ". number_format(0+$cal4_npl-$cal5_npl) ."  บาท \n\n\n ";



 
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
?>