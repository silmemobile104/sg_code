<?php
session_start();
include("../database.php");
 
	 $loaddate2 = date('d-m-Y'); 
		
	 $date_income = date('d')."/".date('m')."/".(date('Y')+543);  
			  
	 $showdataon = date('d');
	 $loaddate = date("d-m-Y", strtotime("-1 day", strtotime($loaddate2)));

	  
		$orderdata = 0; 
		$sqlcheckend = "SELECT * FROM history_payment 
		Where  datestart = '". $loaddate ."' 
		and bill_no != '' 
		and status = 'ปกติ' 
		and onoff != 'NPL' 
		and closebill = 'เป็นหนี้'   order by pk asc ";    
		$querycheckend = mysqli_query($objCon,$sqlcheckend); 
		while($objResult_checkend = mysqli_fetch_array($querycheckend))
		{
			
			$orderdata = $objResult_checkend["orderdata"];
			$totalprice3 = $objResult_checkend["money"];
		    $totalprice4 = $objResult_checkend["startdate"]; 

			 
			$saveroom = $objResult_checkend["room"]; /// ยอดเก็บรายวัน
			$customer = $objResult_checkend["customer"]; /// ยอดเก็บรายวัน 
			$major = $objResult_checkend["major"]; /// ยอดเก็บรายวัน   
			$onoff_copy = $objResult_checkend["onoff_copy"]; /// ยอดเก็บรายวัน   
			$onoff = $objResult_checkend["onoff"]; /// ยอดเก็บรายวัน   
		 
			$datecal = date('d-m-Y'); 
			$datecal2 = date('Y-m-d'); 
			
				
			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($loaddate2)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql2 = " SELECT * FROM history_payment Where  bill_no = '". $objResult_checkend["bill_no"]."'  ".$code_check2." "; 
			/// echo $sql2;
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{  
				$price1 = 0;
				if(!empty($objResult2["income"])){ 
													 
					$discoount_cut += $totalprice3 - $objResult2["income"]; 
					$discoount_cut2 += $objResult2["income"];    
					$price1 = $objResult2["income"];    
													 
					if($objResult2["typesave"] == "ชำระหักเงินฝาก"){
						$discountbank += $objResult2["income"];  
					}
				}
												
				if($objResult2["addon"] == "ไม่นับ"){ 
				}else{
					$discoount_cut1 += $totalprice3 - $price1 ;
				}
												    
			}	 		
			
			 //echo $objResult_checkend["bill_no"] . " /// " . $objResult_checkend["income"] . " <br> ";
			 if(empty($objResult_checkend["income"])){
				 
				 
				/// echo $objResult_checkend["bill_no"] . " /// " . $discoount_cut1 . " <br> ";
				  if($discoount_cut1 > 0){
					  
					$checkNPL = "ON";
					$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult_checkend["bill_no"]."' and datestart = '".$datecal."'  ";   
					$query2 = mysqli_query($objCon,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{
						$checkNPL = "OFF";
					}

					if($checkNPL == "ON"){   
					  

					$strSQL = "INSERT INTO history_payment (bill_no, datestart, money, income, orderdata, create_date2, create_by, date_time, date_start, date_start2, room, status, onoff, typedata, paymentother, customer, closebill, major, addon, onoff_copy ) 
					VALUES ( '".$objResult_checkend["bill_no"]."', '".$datecal."',  '".$totalprice3."', '', '".($orderdata)."', '".$datecal2."', '', '', '', '', '".$saveroom."', 'ปกติ', '".$onoff."', 'รายวัน', '', '".$customer."', 'เป็นหนี้', '".$major."', 'ไม่นับ', '".$onoff_copy."' )"; 
					$objQuery = mysqli_query($objCon, $strSQL); 
						
					}

				  }
				 
				/// echo $strSQL;
			 } 
		}	
	 
	 
   
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