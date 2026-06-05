<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];    

	$detail = "";
	$notedata = "";
	$customer = "";

	 
	$status = $_GET["status"]; 
	$bill_no = $_GET["bill_no"]; 
	$roundata = $_GET["roundata"]; 
 
		$bg = "#F8FAFD"; 
		$i = 1;
		$total = 0;
		$totalprice1 = 0;
		$totalprice2 = 0;
		$totalprice3 = 0;
		$totalprice4 = 0; 
 

		 
		$tanaistatus1 = "";
		$tanaistatus1_by = "";
		$tanaistatus1_date = "";
		$tanaistatus1_time = "";
		$name_customer1 = "";
		$sql = "SELECT * FROM list_order_tanai where  bill_no = '".$bill_no."' and roundata = '".$roundata."' and statussave = '1' order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$tanaistatus1 = $objResult["tanaistatus1"];
			$tanaistatus1_by = $objResult["tanaistatus1_by"];
			$tanaistatus1_date = $objResult["tanaistatus1_date"];
			$tanaistatus1_time = $objResult["tanaistatus1_time"];
			 
			$sql = "SELECT * FROM member_all where pk = '".$tanaistatus1_by."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer1 = $objResult["name"];
			}
			
		}
		 
									
?>
<font size="3px" color="Black" style=" font-size: 13px; " class="serif" >  <?php 

if(!empty($tanaistatus1_date)){
echo $name_customer1; 
echo " &nbsp;  "; 
echo DateThai($tanaistatus1_date)." ".DateThai2($tanaistatus1_date); 
echo " &nbsp;  "; 
echo $tanaistatus1_time; 
}

?>   </font>
   
 
 
 

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
 
 
 
 
 
 
 
 
 
 
 
  