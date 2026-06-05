<?php
session_start();
include("../database.php");
ini_set("memory_limit","100000M");

	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 
	  
	$major = "1"; 
	

	$sql2 = " SELECT a.*, b.name, b.telphone  FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	where a.bill_no != ''         
	Group By a.customer
	order by a.pk asc   ";    
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}

		$totalprice = 0;
		$sql_money = " SELECT a.*, b.name, b.telphone  FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		where  a.bill_no != '' and a.major = '".$major."'   and a.customer = '".$objResult2["customer"]."' 
		Group By a.customer
		order by a.pk asc   ";    
		$query_money = mysqli_query($con,$sql_money); 
		while($objResult_money = mysqli_fetch_array($query_money))
		{

		$moneybank = 0;
		$bankdate = "OFF"; 
		$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult2["customer"]."'  
		and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )
		order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$moneybank +=  $objResult_c["money"];   
		}	

		$totalprice4 = $objResult_money["startdate"]; 
		$discountbank = 0;  

		$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult2["customer"]."'      ".$code_check2." ";   
		$query_p = mysqli_query($objCon,$sql_p); 
		while($objResult_p = mysqli_fetch_array($query_p))
		{   
			if(!empty($objResult_p["income"])){  
				if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
					$discountbank += $objResult_p["bank"];  
				}
				if($objResult_c["typesave"] == "ชำระ2ทาง"){
					$discountbank += $objResult_p["bank"];  
				}
			}   
		}	 			 

		///  echo $moneybank." <br> ";
		// echo $discountbank." <br> ";
		$totalprice += $moneybank - $discountbank ;

		}
 
		$strSQL = "Delete From customer_payment_bank  ";
		$strSQL .="WHERE customer = '".$objResult2["customer"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL); 


		$strSQL_save = "INSERT INTO customer_payment_bank ( customer, money ) 
		VALUES (  '". $objResult2["customer"] ."', '". $totalprice ."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL_save);

		echo $strSQL_save . " <br> ";
	
 
	
}


	 
?>
  
<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>  
	 
<?php
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
?>