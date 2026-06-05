<?php
session_start();
include("../database.php");

	  
	
	 $loaddate = date('d-m-Y'); 
		
	 $date_income = date('d')."/".date('m')."/".(date('Y')+543);  
			  
	 $showdataon = date('d');


	 $total_check = 0;
	 $total_update = 0;
	 $total_update2 = 0;
	 $sql_checkend = "SELECT * FROM list_order  
	 where bill_no != '' and status = 'ปกติ' and closebill = 'เป็นหนี้'  
	 Group By bill_no order by pk desc ";   
 
	 $query_checkend = mysqli_query($con,$sql_checkend); 
	 while($objResult_checkend = mysqli_fetch_array($query_checkend))
	 { 
		$total_check++;
		 
		$totalprice1 = $objResult_checkend["money"]; /// ยอดกู้
		$totalprice2 = $objResult_checkend["daytotal"]; /// จำนวนวัน
		$totalprice3 = $objResult_checkend["dayprice"]; /// ยอดเก็บรายวัน
		$saveroom = $objResult_checkend["room"]; /// ยอดเก็บรายวัน
		$customer = $objResult_checkend["customer"]; /// ยอดเก็บรายวัน
		$startdate = $objResult_checkend["startdate"]; /// ยอดเก็บรายวัน   
		$endate = $objResult_checkend["endate"]; /// ยอดเก็บรายวัน   
		$major = $objResult_checkend["major"]; /// ยอดเก็บรายวัน   
		$onoff_copy = $objResult_checkend["onoff_copy"]; /// ยอดเก็บรายวัน   
		 
		 
		$discoount_check = 0; 
		$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ  
		$checkend = date("Y-m-d", strtotime($loaddate));  /// วันที่เลือกล่าสุด 
	
		$orderdata = 0; 
		$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult_checkend["bill_no"]."' order by create_date2 asc ";   
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			if(!empty($objResult2["income"])){
				$discoount_check += $objResult2["income"]; 
			}
			 
			$orderdata = $objResult2["orderdata"];
			/// $endate = $objResult2["create_date2"]; /// ยอดเก็บรายวัน 
		}	
	 
		$totalcheck1 = $totalprice2 * $totalprice3; /// ยอดกู้ + ดอกเบี้ย
		$totalcheck2 = $discoount_check; /// ยอดชำระจริง
	 
		$newend = date("d-m-Y", strtotime($endate));  /// วันสุดท้ายในตาราง
		$checkday = DateDiff($newend,date('d-m-Y'));
								
								
		  	////  echo $objResult_checkend["bill_no"]."//". $checkday . "///".$orderdata. " <br> ";
		  
			//echo " OK ";
			/// if($checkday > 0){ /// ถ้าจำนวนวันมากกว่า 0 เท่ากับ จะให้ เพิ่มวัน ขึ้นอีก 1 วัน
			if($checkday >= 45){ /// ถ้าจำนวนวันมากกว่า 0 เท่ากับ จะให้ เพิ่มวัน ขึ้นอีก 1 วัน
				
				$datecal =  date("d-m-Y", strtotime(date('d-m-Y')));
				$datecal2 =  date("Y-m-d", strtotime(date('d-m-Y')));

				$checkNPL = "ON";
				$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult_checkend["bill_no"]."' and datestart = '".$datecal."'  ";   
				$query2 = mysqli_query($objCon,$sql2); 
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$checkNPL = "OFF";
				}
				
				if($checkNPL == "ON"){ 
					$strSQL = "INSERT INTO history_payment (bill_no, datestart, money, income, orderdata, create_date2, create_by, date_time, date_start, date_start2, room, status, onoff, typedata, paymentother, customer, closebill, major, addon, onoff_copy ) 
					VALUES ( '".$objResult_checkend["bill_no"]."', '".$datecal."',  '".$totalprice3."', '', '".($orderdata)."', '".$datecal2."', '', '', '', '', '".$saveroom."', 'ปกติ', 'NPL', 'รายวัน', '', '".$customer."', 'เป็นหนี้', '".$major."', 'ไม่นับ', '".$onoff_copy."' )"; 
					$objQuery = mysqli_query($objCon, $strSQL); 

					$total_update++;
				}
					
					$strSQL = " Update list_order Set onoff = 'NPL', onoff_copy = 'NPL'   " ;
					$strSQL .=" WHERE bill_no = '".$objResult_checkend["bill_no"]."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);

					$strSQL = " Update history_payment Set onoff = 'NPL', onoff_copy = 'NPL'  " ;
					$strSQL .=" WHERE bill_no = '".$objResult_checkend["bill_no"] ."' "; 
					$objQuery = mysqli_query($objCon, $strSQL);
				 
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