<?php
session_start();
include("../database.php");

 

	 $datadate1  = "01-01-2020";				    
	 $datadate2  = date('d-m-Y');				    

	 $contactstart   = date("Y-m-d", strtotime($datadate1)); 
	 $checkend   = date("Y-m-d", strtotime($datadate2)); 
 
 
	$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

	$sumall = 0;
	$cno = 0;
	$cno1 = 0;
	$cno2 = 0;
	$cno3 = 0;
	 
		$checkyear = date('Y');
		$checkmonth = date('m');
		
		$loadyear = 0; 
		$loadyear = $checkmonth; 
		$searchname = $checkyear; 
		 
		/*
	   for($x = 1; $x <= $loadyear; $x++){
		   
		    $loopdata++;
			$loaddate_show = date ("Y-m-d", strtotime("+ ". ($x-1) ." day", strtotime($contactstart)));
			/// $loaddate_show2 = $d_array[ $x ];

			$sumround = 0; 


			$datadate1  = "01-".$x."-".$searchname;				    
			$datadate2  = "31-".$x."-".$searchname;				    

			$contactstart   = date("Y-m-d", strtotime($datadate1));  
			$checkend = date('Y-m-t',strtotime($contactstart)); 
			$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

		   	echo $addcode . " <br> ";
		   
		    $totaldata1 = 0;
			$totaldata2 = 0;
			$totaldata3 = 0;
			$totaldata4 = 0;
			$totaldata5 = 0;
			$loopdataall5 = 0;
			$allpasy = 0;
			$newpayment = 0;
			$sql2 = "SELECT a.*, b.name, c.codecustomer, c.codecustomer   FROM history_payment a 
			INNER Join customer b On a.customer = b.pk
			INNER Join list_order c On a.bill_no = c.bill_no
			where a.bill_no != ''   
			and a.income != ''
			and a.income != '0'  
			and a.status = 'ปกติ'     and c.contactstatus = 'อนุมัติแล้ว'  
			".$addcode."    
			order by a.pk asc    "; 

			$query2 = mysqli_query($con,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{      
				if(!empty($objResult2["income"])){
				$totaldata1 += $objResult2["income"];  
				}   
				if(!empty($objResult2["discount"])){
				$totaldata2 += $objResult2["discount"];  
				}  


				$discount = 0;
				if(!empty($objResult2["discount"])){ 
					$discount = $objResult2["discount"];
				}

				$income = 0;
				if(!empty($objResult2["income"])){ 
					$income = $objResult2["income"];
				}

				$newcalculator = $income - $discount;
				$vat = ($newcalculator * 100) / 107;


				$allpasy +=  $newcalculator - ($vat);


				$newpayment += ($objResult2["money"] * 100) / 107;
			}

			   $totaldata3 += $allpasy; 
			   $loopdataall2 += $totaldata2;
			   $loopdataall3 += $totaldata3;
			   $loopdataall4 += $totaldata1;
			   $loopdataall5 += $newpayment;


			   $totaldata5 += $allpasy + $newpayment;



			   $f_loopdataall1 += $totaldata1;
			   $f_loopdataall2 += $totaldata2;
			   $f_loopdataall3 += $loopdataall5;
			   $f_loopdataall4 += $totaldata3;
			 ////  $f_loopdataall5 += $allpasy + $newpayment;


			   $f_loopdataall5 += $totaldata1 - $totaldata2;
	   }
	   */
 


		$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		INNER Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != ''   
		and a.income != ''
		and a.income != '0'      and c.contactstatus = 'อนุมัติแล้ว' 
		".$addcode."    
		order by a.pk asc     ";  
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
			$discoount = 0;
			$discoountpaymentother = 0;  
 
  
			$discoount_cut = 0;  
			$discoount_cut1 = 0;  
			$discoount_cut2 = 0; 



			$discountbank = 0;  
			$countloopnopay = 0;
			$chk_total = 0;   
  
			$discount = 0;
			if(!empty($objResult["discount"])){ 
				$discount = $objResult["discount"];
			}
			 
			$income = 0;
			if(!empty($objResult["income"])){ 
				$income = $objResult["income"];
			}
			 
			$newcalculator = $income - $discount;
			$vat = ($newcalculator * 100) / 107;

 
			$allpasy =  $newcalculator - ($vat);
			 
			$newmoney = $income - $discount;
			$newpayment = ($newmoney * 100) / 107;
			
			$totalnew1++; 
			$totalnew2 += $income; 
			$totalnew3 += $discount; 
			$totalnew4 += $allpasy; 
			$totalnew5 += $newmoney; 
		}

		$sumall = $totalnew2;
		if($sumall <= 0){
			$sumall = 0;
		}


		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดสิ้นเชื่อที่ชำระแล้ว', '".$sumall."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  '". date('H:i') ."' )"; 
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