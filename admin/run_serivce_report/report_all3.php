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

	/*
	$sql2 = " SELECT a.*  FROM list_chk_computer a 
	Inner Join list_order b  On a.pkselect = b.pk
	Inner Join product c  On b.menu_id = c.pk
	where  a.bill_no != ''   
	".$addcode."
	Group By a.bill_no
	order by a.pk asc    ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{ 
		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
		$bill_no = $objResult2["bill_no"];
		$pasy_onoff = $objResult2["pasy_onoff"];


		$menuid = "-";
		$sql_c = "SELECT * FROM list_order where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$menuid =  $objResult_c["menu_id"];
		}
 


		$pricecal = 0;
		$total_price = 0;
		$s_m1 = 0;
		$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   a.menu_id = c.pk
		Inner Join list_chk_computer d On   a.pk = d.pkselect 
		where d.bill_no = '".$bill_no."'  
		order by a.pk asc    "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$total_price +=  $objResult_c["computer2"];
			$pricecal = $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];


			$pasy = $objResult_c["computer2"] * 0.03;
			$cal = $pricecal * 0.03;
			$cal2 = $pricecal  - $pasy;


			if($cal2 <= 0){
				$cal2 = 0;
			}

			$s_m1 += $cal2;

		}
 	
		
		$sumall += $s_m1;  
	  }
	  */



	$cno = 0;
	$cno1 = 0;
	$cno2 = 0;
	$cno3 = 0;
	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	Inner Join product c On   c.pk = a.menu_id
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
	".$addcode."  
	order by a.pk asc    ";  
		 
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
			$sumall += $daytotal * $dayprice; 
	}
		
 
		if($sumall <= 0){
			$sumall = 0;
		}


		$strSQL_save = "INSERT INTO report_reportnew3 ( title, price, create_date,  create_date2, create_time   ) 
		VALUES ( 'ยอดสิ้นเชื่อทั้งหมด', '".$sumall."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  '". date('H:i') ."' )"; 
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