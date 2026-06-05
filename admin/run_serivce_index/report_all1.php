<?php
session_start();
include("../database.php");

 

		 $datadate1  = "01-01-2020";				    
		 $datadate2  = date('d-m-Y');				    

		 $contactstart   = date("Y-m-d", strtotime($datadate1)); 
		 $checkend   = date("Y-m-d", strtotime($datadate2)); 

	 	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
 
		$sumall = 0;
		$cno = 0;
		$cno1 = 0;
		$cno2 = 0;
		$cno3 = 0; 


		$addcode = "and a.datestart = '".$datadate2."' ";

		$bg = "#E8E8E8";
		$total_price = 0; 
		$total_price2 = 0; 
		$total_price3 = 0; 
		$total_price3_2 = 0; 

		$total_price4 = 0; 
		$total_price5 = 0; 
		$total_price6 = 0; 
		$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook, b.facebookurl, c.dayprice 
		FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		left Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != '' 
		and ( a.income = '' or a.income = '0'  )
		and a.closebill = 'เป็นหนี้'   
		and a.status = 'ปกติ'   
		and a.onoff_copy = 'ปกติ'     and c.contactstatus = 'อนุมัติแล้ว' 
		".$addcode."    
		order by a.pk asc   ";   
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{ 
			
			
			$totalprice3 = $objResult["dayprice"]; 
			$total_price2 += $totalprice3;
		}
  


		$sumall = $total_price2;
		if($sumall <= 0){
			$sumall = 0;
		}


		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดที่ต้องเก็บวันนี้', '".$sumall."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  '". date('H:i') ."' )"; 
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