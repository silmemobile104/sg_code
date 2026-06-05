<?php
session_start();
include("../database.php");

 

		 //////$datadate1  = "18-07-2024";				    
		 $datadate2  = "18-07-2024";	


		  $datadate1  = date('d-m-Y'); 
		  $datadate2  = date('d-m-Y');				    

		 $contactstart   = date("Y-m-d", strtotime($datadate1)); 
		 $checkend   = date("Y-m-d", strtotime($datadate2)); 
 
		$sumall = 0;
		$cno = 0;
		$cno1 = 0;
		$cno2 = 0;
		$cno3 = 0; 


		$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

		$bg = "#E8E8E8";
		$total_price = 0; 
		$total_price2 = 0; 
		$total_price3 = 0; 
		$total_price3_2 = 0; 

		$total_price4 = 0; 
		$total_price5 = 0; 
		$total_price6 = 0; 
 

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		$totaldata5 = 0;
		$totaldata6 = 0;
		$sql = "  SELECT a.* FROM money_customer_bank a
		Inner Join customer b On a.customer = b.pk
		Inner Join list_order c On c.bill_no = a.bill_no 
		where a.bill_no != '' ".$addcode."  Group By a.bill_no  order by a.pk desc     ";   
		$query = mysqli_query($con,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			$name_cutomer = " - ";
			$name_cutomer2 = " - ";     

			$note1 = " - ";
			$totalprice1 = 0;
			$totalprice2 = 0;
			$totalprice3 = 0;
			$totalprice4 = " - ";
			$totalprice5 = " - ";
			$startdate = " - ";
			$codecustomer = " - ";
			$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{   
				$totalprice1 = $objResult2["money"]; 
				$totalprice2 = $objResult2["daytotal"]; 
				$totalprice3 = $objResult2["dayprice"]; 
				$totalprice4 = $objResult2["startdate"]; 
				$totalprice5 = $objResult2["endate"]; 
				
				$customer = $objResult2["customer"]; 
				$codecustomer = $objResult2["codecustomer"]; 
			}
 
			$facebook = " - ";
			$sql2 = "SELECT * FROM customer Where  pk = '". $customer  ."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{    
				$facebook = $objResult2["name"];  
			}
		 
			$discountbank = 0;  
			$discount = 0;  
			$income1 = 0;  
			$moneybank = 0;
			$bankdate = "OFF"; 
			
			
			$contactstart   = date("Y-m-d", strtotime($totalprice4)); 
			$checkend   = date("Y-m-d", strtotime($daystart_load2));  
			$addcode_check = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
			and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
			order by pk asc  "; 
			
		////	echo $sql_c."<Br>";
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$moneybank +=  $objResult_c["money"];   
			}	
				 
			
			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load2)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult["customer"]."'    and bill_no = '".$objResult["bill_no"]."'   ".$code_check2." ";   
			$query_p = mysqli_query($objCon,$sql_p); 
			while($objResult_p = mysqli_fetch_array($query_p))
			{   
				if(!empty($objResult_p["income"])){  
					if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
						$discountbank += $objResult_p["bank"];  
					}
					if($objResult_p["typesave"] == "ชำระ2ทาง"){
						$discountbank += $objResult_p["bank"];  
					}
				}   
			}	 	
			 		 
			
			
			$calcultor = $moneybank - $discountbank;
			if($calcultor <= 0){
				$calcultor = 0;
			}
			 
			$i++;  
			$totaldata1 += $moneybank; 
			$totaldata3 += $discountbank;
			$totaldata4 += $calcultor; 
			$totaldata2++;  
		
		} 


		 
		$sumall = $totaldata4;
		if($sumall <= 0){
			$sumall = 0;
		}


 
										
		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดฝากเงินทั้งหมด', '".$no."', '".$contactstart ."',  '". $checkend ."',  '". date('H:i') ."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL_save);
 
?>
 
		
<script>
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
	function numberWithCommas2(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>

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