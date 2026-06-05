<?php
session_start();
include("../database.php");



	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

	$sql2 = " SELECT * FROM list_order where bill_no != '' and closebill = 'เป็นหนี้'  order by pk asc ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$totalprice4 = $objResult2["startdate"]; 
			$totalprice5 = $objResult2["endate"];    
											
			$priceorder = $objResult2["priceorder"];  
			$typenpl1 = $objResult2["typenpl1"];  
			$typenpl2 = $objResult2["typenpl2"];  
			$discount = $objResult2["discount"];  
			$note = $objResult2["note"];  
			$moneydown = $objResult2["moneydown"];   
		
		
		$chk_total = 0;
		$priceback = 0;
		$date_payment = "";
											
		$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2."  order by pk asc "; 
		
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			if(!empty($objResult_npl["income"])){  
				$chk_total = 0; 
			}else{
				$chk_total++;
			} 
		}
		
		if($chk_total >= 90){ 
			$strSQL = " Update list_order Set onoff = 'NPL', onoff_copy = 'NPL'   " ;
			$strSQL .=" WHERE bill_no = '".$objResult2["bill_no"]."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);

			$strSQL = " Update history_payment Set onoff = 'NPL', onoff_copy = 'NPL'  " ;
			$strSQL .=" WHERE bill_no = '".$objResult2["bill_no"] ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
		} 
		//// echo $objResult2["bill_no"] . " //// " . $chk_total  . " <br> " ;
		$strSQL = " Update list_order Set totalno_payment = '".$chk_total."'  " ;
		$strSQL .=" WHERE  bill_no = '". $objResult2["bill_no"]."'  "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
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