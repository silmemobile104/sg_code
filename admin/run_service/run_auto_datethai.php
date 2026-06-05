<?php
session_start();
include("../database.php");
 
	  
		$contactstart = date("Y-m-d", strtotime("01-01-2566"));  /// วันที่เริ่มเก็บ   
		$checkend = date("Y-m-d", strtotime("31-12-2567"));  /// วันที่เริ่มเก็บ   
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$orderdata = 0; 
		$sql2 = "SELECT * FROM history_payment Where  bill_no != '' ".$code_check2." order by pk asc ";  
 
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 
			$cut = explode("-",$objResult2["datestart"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);  
  
			$save1 = date("d-m-Y", strtotime($date_income)); 
			$save2 = date("Y-m-d", strtotime($date_income));

			$strSQL = "Update history_payment Set  
			datestart  = '".$save1."',
			create_date2  = '".$save2."'   "  ;
			$strSQL .=" WHERE pk = '". $objResult2["pk"]."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
			
		}	


		$contactstart = date("Y-m-d", strtotime("01-01-2566"));  /// วันที่เริ่มเก็บ   
		$checkend = date("Y-m-d", strtotime("31-12-2567"));  /// วันที่เริ่มเก็บ   
		$code_check2 = " and startdate BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$orderdata = 0; 
		$sql2 = "SELECT * FROM list_order Where  bill_no != '' ".$code_check2." order by pk asc ";  
 
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 
			$cut = explode("-",$objResult2["startdate"]);
			$date_income = ($cut[0]-543)."-".$cut[1]."-".($cut[2]);  
   
			$save1 = date("Y-m-d", strtotime($date_income));
			
			
			$cut = explode("-",$objResult2["endate"]);
			$date_income = ($cut[0]-543)."-".$cut[1]."-".($cut[2]); 
			$save2 = date("Y-m-d", strtotime($date_income));

			$strSQL = "Update list_order Set  
			startdate  = '".$save1."',
			endate  = '".$save2."'   "  ;
			$strSQL .=" WHERE pk = '". $objResult2["pk"]."' "; 
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