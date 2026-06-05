<?php
session_start();
include("../database.php");

 

	 $datadate1  = "01-01-2020";				    
	 $datadate2  = date('d-m-Y');				    

	 $contactstart   = date("Y-m-d", strtotime($datadate1)); 
	 $checkend   = date("Y-m-d", strtotime($datadate2)); 
 
 
	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

	$addcode2 = " and  a.closebill = 'เป็นหนี้' ";


	$sumall = 0; 
	$cno = 0;
	$cno1 = 0;
	$cno2 = 0;
	$cno3 = 0;

	/*
	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	left Join product c On   c.pk = a.menu_id
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
	".$addcode.$addcode2."  
	order by a.pk asc    ";  
		 
	echo $sql2;
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			$money = $objResult2["money"]; 
			$daytotal = $objResult2["daytotal"]; 
			$dayprice = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$priceorder = $objResult2["priceorder"];  
			$pasy = $objResult2["pasy"];  

    		$cno++;
			$cno4 += $daytotal * $dayprice; 
	}
 	*/
		
		
	$totaldata1_no = 0;
	$totaldata1 = 0;
	$totaldata2 = 0;
	$totaldata3 = 0; 
	$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	Inner Join product c On   c.pk = a.menu_id
	where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว' 
	".$addcode."  
	order by a.pk asc  "; 

	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{    
			$money = $objResult2["money"]; 
			$daytotal = $objResult2["daytotal"]; 
			$dayprice = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$startdate = $objResult2["startdate"]; 
			$endate = $objResult2["endate"];   

 
			$allmoney = 0;
			$discoount = 0;
			$discoountpaymentother = 0;
			
			$check_round_payment = 0;
			$check_round_dis = $daytotal;
			
			
			$allpasy = 0;
			$allpasy2 = 0;
			
			
			$allpasy_new = 0;
			$allpasy2_new = 0;
			$allpasy3_new = 0;
			
			
			$loadstart1 = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
			$loadstart2 = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
			$code_check2 = "  and create_date2 BETWEEN '".$loadstart1."' AND '".$loadstart2."'  "; 
			
			
		    if($objResult2["closebill"] == "หมดหนี้"){
			  $code_check2 = "";

			}
			
			
			$sql_c = "SELECT * FROM history_payment Where  
			bill_no = '". $objResult2["bill_no"]."' 
			and income != '' 
			and income != '0'   
			".$code_check2."  order by create_date2 asc "; 
			
			///  echo $sql_c."<br>";
			$query_c = mysqli_query($objCon,$sql_c); 
			while($objResult_c = mysqli_fetch_array($query_c))
			{  
				if(!empty($objResult_c["income"])){
					
					
				$discountshow = 0;
				$getdata2 = 0;
				if(!empty($objResult_c["discount"])){
					$discountshow = $objResult_c["discount"];
				}
				if(!empty($objResult_c["income"])){
					$getdata2 =  $objResult_c["income"];	
				} 
				
				$newcalculator = $getdata2 - $discountshow;
			 	$vat = ($newcalculator * 100) / 107;
					
					
					
				$allpasy2 += $vat; 
				$allpasy +=  $newcalculator - ($vat);
				  
				if(!empty($objResult_c["income"])){
					$allpasy2_new +=  $objResult_c["income"];	
				} 
					 
				if(!empty($objResult_c["discount"])){
					$allpasy3_new += $objResult_c["discount"];
				}
					 
					$discoount += $objResult_c["income"]; 
					
					if($check_round_payment == $objResult_c["orderdata"]){
						
					}else{
						$check_round_payment = $objResult_c["orderdata"];
						$check_round_dis++; 
					}
					 
				}
				 
				if(!empty($objResult_c["paymentother"])){
				$discoountpaymentother += $objResult_c["paymentother"]; 
				}  
				 
				
			}	

										 
 
			$txtshow = " เป็นหนี้ ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
			if($objResult2["closebill"] == "เป็นหนี้"){ 
				
			$txtshow = " กำลังผ่อน ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			if($objResult2["onoff"] == "NPL"){ 
				
			$txtshow = " กำลังผ่อน NPL ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			}

			}else if($objResult2["closebill"] == "หมดหนี้"){
			$txtshow = " หมดหนี้ ";
			$hdd = " display: none;  "; 
			$bgbtn = " #FFE0E0  ";

			}
			 
			$allmoney = ($daytotal*$dayprice)-$discoount;
			
			//// echo   $dayprice  . " <Br> ";
			//// echo  ($daytotal*$dayprice) . " <Br> ";
			//// echo  $discoount . " <Br> ";
			//// echo  $allmoney . " <Br> ";
			
			$vat3_new = (($allmoney) * 100 )  / 107;
			$vat4_new = ($allmoney) - $vat3_new;
			
			//// echo  $vat3_new . " <Br> ";
			//// echo  $vat4_new . " <Br> ";
			 
			
			$disround = $daytotal - $check_round_payment;
			
			if($disround <= 0){
				$disround = 0;
			}
			 
			
			$moneydata = $objResult2["moneydata"]; 
			$moneydown = $objResult2["moneydown"];   
			
			$vat = (($moneydata-$moneydown) * 100  )  / 107;
			$vat2 = ($moneydata-$moneydown) - $vat;
			
			
			
			$vat_new = (($money) * 100 )  / 107;
			$vat2_new = ($money) - $vat_new;
			
			 
			//// echo  $money . " <Br> ";
			// echo $vat_new . " <Br> ";
			// echo $vat2_new . " <Br> ";
			
			if($vat2 <= 0){
				$vat2 = 0;
			} 
			
		    if($objResult2["closebill"] == "หมดหนี้"){
			 $vat2 = 0;
			 $allmoney = 0;
			 $disround = 0;

			}

		$total_record++;
		
		
		$totaldata1 += (($money-$vat2_new) + $vat2_new);
		$totaldata2 += ($allpasy2_new-$allpasy3_new);
		$totaldata3 += ($vat4_new+$vat3_new);
	}
 
		$sumall = $totaldata3;
		if($sumall <= 0){
			$sumall = 0;
		}


		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดสิ้นเชื่อที่ค้างชำระ', '".$sumall."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  '". date('H:i') ."' )"; 
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