<?php
session_start();
include("../database.php");

 

	 $datadate1  = "01-01-2020";				    
	 $datadate2  = date('d-m-Y');				    

	 $contactstart   = date("Y-m-d", strtotime($datadate1)); 
	 $checkend   = date("Y-m-d", strtotime($datadate2)); 

	 $addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
 
		$cno = 0;
		$cno1 = 0;
		$cno2 = 0;
		$cno3 = 0;
	 

		 
		$sumall = 0;
		$totalmoney = 0;
		$startpricedate = date("Y-m-d", strtotime("2020-01-01"));  
		$startpricedate2 = date("Y-m-d", strtotime(date('Y-m-d')));  
		$addcode = " and create_date BETWEEN '".$startpricedate."' AND '".$startpricedate2."' "; 
		$sql2 = "  SELECT * FROM databank 
		where pk != ''  
		".$addcode."  
		order by create_date asc     ";   
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{        

				if($objResult2["typedatasave"] == "ฝาก"){
					if(!empty($objResult2["money1"])){
						$totalmoney += $objResult2["money1"];
					}

				}
				if($objResult2["typedatasave"] == "ถอน"){
					if(!empty($objResult2["money1"])){
						$totalmoney -= $objResult2["money1"];
					}

				}

		}


		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดฝากเงินทั้งหมด', '".$totalmoney."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  '". date('H:i') ."' )"; 
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