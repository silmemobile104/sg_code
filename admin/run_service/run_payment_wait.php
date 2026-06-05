<?php
session_start();
include("../database.php");
ini_set("memory_limit","100000M");

$searchname = date('d/m')."/".(date('Y'));
$daystart_load = date("d-m-Y", strtotime($searchname)); 
$daystart_load2 = date("Y-m-d", strtotime($searchname));
	 
$i = 1; 

$bg = "#E8E8E8";
$total_price = 0; 
$total_price2 = 0; 
$total_price3 = 0; 
$total_price4 = 0; 
$total_price5 = 0; 
$total_price6 = 0; 
$total_price7 = 0; 
$total_price8 = 0;  



$bg = "#E8E8E8";
$total_price = 0; 
$total_price2 = 0; 
$total_price3 = 0; 
$total_price3_2 = 0; 

$total_price4 = 0; 
$total_price5 = 0; 
$total_price6 = 0; 



$addcode = "";
$addcode2 = "";  
$addcode3 = "";  
if(empty($_GET["searchname"])){
$addcode2 = "and a.datestart = '".$daystart_load."' ";

}else{
$addcode2 = "and a.datestart = '".$daystart_load."' ";
}  


$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook    FROM history_payment a 
	INNER Join customer b On a.customer = b.pk
	INNER Join list_order c On a.bill_no = c.bill_no
	where a.bill_no != '' 
	and ( a.income = '' or a.income = '0'  )
	and a.closebill = 'เป็นหนี้'   
	and a.status = 'ปกติ'   
	and a.onoff_copy = 'ปกติ'   
	".$addcode.$addcode2.$addcode3."    
	order by a.pk asc   ";  

  echo $sql;
$query = mysqli_query($objCon,$sql); 
while($objResult = mysqli_fetch_array($query))
{ 
	
$onoffsave = "ON";
$sql_checkend = " SELECT * FROM payment_wait   
where bill_no = '". $objResult["bill_no"] ."' and create_date2 = '". date('Y-m-d') ."'   order by pk desc ";   
	 
$query_checkend = mysqli_query($con,$sql_checkend); 
while($objResult_checkend = mysqli_fetch_array($query_checkend))
{ 
	 $onoffsave = "OFF";
}
	
	
	
if($onoffsave == "ON"){
	
	
$name_cutomer = " - ";
$name_cutomer2 = " - "; 
$name_cutomer = $objResult["name"];    

$note1 = " - ";
$totalprice1 = 0;
$totalprice2 = 0;
$totalprice3 = 0;
$totalprice4 = " - ";
$totalprice5 = " - ";
$startdate = " - ";
$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{   
$totalprice1 = $objResult2["money"]; 
$totalprice2 = $objResult2["daytotal"]; 
$totalprice3 = $objResult2["dayprice"]; 
$totalprice4 = $objResult2["startdate"]; 
$totalprice5 = $objResult2["endate"]; 
}

$discoount = 0;
$discoountpaymentother = 0;
$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
$sql2 = "SELECT * FROM history_payment Where  
bill_no = '". $objResult["bill_no"]."' 
and income != '' 
and income != '0'   
".$code_check2." ";   
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{  
if(!empty($objResult2["income"])){
$discoount += $objResult2["income"]; 

}
if(!empty($objResult2["paymentother"])){
$discoountpaymentother += $objResult2["paymentother"]; 
}  
}	

$allmoney = ($totalprice2*$totalprice3)-$discoount;

if($bg == "#FFF"){ 
$bg = "#E8E8E8";

}else{  
$bg = "#FFF"; 
}   
$bg = "#E8E8E8";

$name_staff = " - ";
$name_staff2 = $objResult["date_time"];
$sql2 = "SELECT * FROM member_all Where  pk = '". $objResult["create_by"]."'   ";   
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{  
$name_staff = $objResult2["name"];   
}

$discoount_cut = 0;  
$discoount_cut1 = 0;  
$discoount_cut2 = 0; 


$discountbank = 0;  
$countloopnopay = 0;
$chk_total = 0;  

$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
$sql2 = " SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"]."'  ".$code_check2." "; 
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
	$discountbank += $objResult2["bank"];  
}
if($objResult2["typesave"] == "ชำระ2ทาง"){
	$discountbank += $objResult2["bank"];  
}

$countloopnopay = 0;
$chk_total = 0;
} 


if($objResult2["addon"] == "ไม่นับ"){
	$discoount_cut1 -= $price1;
}else{
	$discoount_cut1 += $totalprice3 - $price1 ;
} 


if(!empty($objResult2["income"])){   
	$countloopnopay = 0;
	$chk_total = 0;
}else{
	$countloopnopay++;
}  

if($countloopnopay >= 5){ 
	if(!empty($objResult2["income"])){ 

		$checkpaymentday = "ON";
		$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$objResult2["bill_no"]."' and date_start2 = '".$objResult2["create_date2"]."'   "; 
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{ 
			$checkpaymentday = "OFF"; 
		}

		if($checkpaymentday == "OFF"){ 
			$countloopnopay = 0;
			$chk_total = 0; 
		}else{ 
			$chk_total++;
		}

	}else{
		$chk_total++; 
	} 
}


}	 			 

$moneybank = 0;
$sql_c = "SELECT * FROM money_customer_bank where bill_no = '".$objResult["bill_no"]."'  and ( typegetpayment = 'โอนผ่านบัญชีบริษัท'  or  typegetpayment = 'รับเงินสด'  )
".$code_check2."  order by pk asc  "; 
$query_c = mysqli_query($objCon,$sql_c);
while($objResult_c = mysqli_fetch_array($query_c))
{ 
if(!empty($objResult_c["money"])){ 
$moneybank +=  $objResult_c["money"];
} 
}	



if( $discoount_cut1 < 0){
$discoount_cut1 = 0;
}
///echo $totalprice3 . " - " . $price1 ; 


$name_major = " - "; 
$sql2 = "SELECT * FROM major Where  pk = '". $objResult["major"]."'   ";   
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{  
$name_major = $objResult2["name"];   
}

$discountshow = "";
if(empty($objResult["paymentother"])){
$discountshow = $chk_total*50;
}
if(!empty($objResult["paymentother"])){
$discountshow = $objResult["paymentother"];
}

$total_dis = ($chk_total*50);
if($total_dis <= 0){
$total_dis = 0;
} 


$getbill = $objResult["bill_no"];
$totalprice_chk = ( $chk_total * 50 );  
$discountpayment = 0;
$code_check2 = " and date_start2 BETWEEN '2020-01-01' AND '".$checkend."'  "; 
$sql2 = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' ".$code_check2." ";  
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{  
	if(empty($objResult2["price"])){
		$discountpayment += $objResult2["price"]; 
	}
	if(empty($objResult2["price"])){
		$discountpayment += $objResult2["discount"]; 
	}
	
	/// $discountpayment += $objResult2["price"] + $objResult2["discount"];  
}  

$total_dis = $totalprice_chk - $discountpayment  ;
if($total_dis <= 0){
$total_dis = 0;
}

$getstart = 0;
$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"] ."' order by pk asc limit 1 ";  
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{  
$getstart = $objResult2["orderdata"];   
}

$onoffadd = "";
if($getstart >= 1){
$onoffadd = "off";
}
	
	/*
	<input type="hidden" id="totaldata" value="<?php echo $total_count; ?>"   > 
	<!--  บิล  -->
	<input type="hidden" id="idbill<?php echo $i; ?>" value="<?php echo $objResult["bill_no"]; ?>"   > 
	<!--  ID วันบันทึก  -->
	<input type="hidden" id="datesave<?php echo $i; ?>" value="<?php echo $objResult["pk"]; ?>"   > 

	<input type="hidden" id="summonetontop<?php echo $i; ?>" value="<?php echo number_format(0+$allmoney, '0', '', ''); ?>"   > 
	<!--  สาขา  -->
	<input type="hidden" id="majordata<?php echo $i; ?>" value=""   > 
	<!--  สาขา  -->
	<input type="hidden" id="contacdata<?php echo $i; ?>" value="<?php echo $objResult["typedata"]; ?>"   > 
	<input type="hidden" id="discounttotalpay<?php echo $i; ?>" value="<?php echo $discoount_cut1; ?>"   > 
	<input type="hidden" id="getincomememberback<?php echo $i; ?>" value="<?php echo  $discoount_cut2; ?>"   > 

	<input type="hidden" id="getincomememberbackddata<?php echo $i; ?>" value="<?php echo  $objResult["income"]; ?>"   > 

	<input type="hidden" id="ontopdata<?php echo $i; ?>" value="<?php echo  $discoount_cut1; ?>"   > 
	<input type="hidden" id="typedatapayment<?php echo $i; ?>" value="ชำระกรอกเอง"   > 
	<input type="hidden" id="bankdata<?php echo $i; ?>" value=""   > 
	*/								   				  				  
	
	
	if(empty($total_count)){
		$total_count = "";
	}
	$total_count = $total_count;
	$bill_no = $objResult["bill_no"];
	$datesave = $objResult["pk"];
	$summonetontop = $allmoney;
	$contacdata = $objResult["typedata"];
	$discounttotalpay = $discoount_cut1;
	$getincomememberback = $discoount_cut2;
	$getincomememberbackddata = $objResult["income"];
	$ontopdata = $discoount_cut1;
	$typedatapayment = "ชำระกรอกเอง";
	$bankdata = "";
	$discoount_cut1 = $discoount_cut1;
	$getincomememberold = $total_dis;
	$distoutshow = $allmoney;
	$moneybank = $moneybank;
	$discountbank = $discountbank; 
	
	$strSQL_save = "INSERT INTO payment_wait ( bill_no, create_date, create_date2,  
	total_count, datesave, summonetontop, contacdata, discounttotalpay,  
	getincomememberback, getincomememberbackddata, ontopdata, typedatapayment, bankdata,  
	discoount_cut1, getincomememberold, distoutshow, moneybank,  discountbank  
	) 
	VALUES ( 
	'". $objResult["bill_no"] ."', '". date('d-m-Y') ."',  '". date('Y-m-d') ."',  
	'".$total_count."', '".$datesave."', '".$summonetontop."', '".$contacdata."', '".$discounttotalpay."',  
	'".$getincomememberback."', '".$getincomememberbackddata."', '".$ontopdata."', '".$typedatapayment."', '".$bankdata."',  
	'".$discoount_cut1."', '".$getincomememberold."', '".$distoutshow."', '".$moneybank."',  '".$discountbank."'  
	 
	)"; 
	$objQuery = mysqli_query($objCon, $strSQL_save);
	
	
}
	
}


	 
?>
  
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