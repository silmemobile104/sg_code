<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ปริ้นสัญญา NPL </title>
</head>  

<style>
@font-face {
  font-family: Poppins-Bold;
  src: url('../fonts/regular2.ttf'); 
}
 
	 
.serif {
  font-family:  Poppins-Bold, serif; 
}

</style>

<body class="nav-md serif "   >  
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
function Convert($amount_number)
{
$amount_number = number_format($amount_number, 2, ".","");
$pt = strpos($amount_number , ".");
$number = $fraction = "";
if ($pt === false) 
$number = $amount_number;
else
{
$number = substr($amount_number, 0, $pt);
$fraction = substr($amount_number, $pt + 1);
}

$ret = "";
$baht = ReadNumber ($number);
if ($baht != "")
$ret .= $baht . "บาท";

$satang = ReadNumber($fraction);
if ($satang != "")
$ret .=  $satang . "สตางค์";
else 
$ret .= "ถ้วน";
return $ret;
}

function ReadNumber($number)
{
$position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
$number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
$number = $number + 0;
$ret = "";
if ($number == 0) return $ret;
if ($number > 1000000)
{
$ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
$number = intval(fmod($number, 1000000));
}

$divider = 100000;
$pos = 0;
while($number > 0)
{
$d = intval($number / $divider);
$ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : 
((($divider == 10) && ($d == 1)) ? "" :
((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
$ret .= ($d ? $position_call[$pos] : "");
$number = $number % $divider;
$divider = $divider / 10;
$pos++;
}
return $ret;
} 
?>

<?php 

$searchname = date('d/m')."/".(date('Y'));
if(empty($_GET["searchname"])){

$cut = explode("/",$searchname);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
$daystart_load = date("d-m-Y", strtotime($date_income)); 
}else{
$searchname = $_GET["searchname"];



$cut = explode("/",$searchname);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

$daystart_load = date("d-m-Y", strtotime($date_income)); 
}


$major2 = $_GET["major2"];
$majorname2 = "";
$sql2 = "SELECT * FROM majorline Where  pk = '". $_GET["major2"] ."' ";  
$query2 = mysqli_query($objCon,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{
$majorname2 = $objResult2["name"]  ;  
} 
?>
<style>
#customers { 
border-collapse: collapse;
width: 100%;
}

#customers td, #customers th {
border: 1px solid #A9A9A9; 
}  
</style>

<style>
#customers2 { 
border-collapse: collapse;
width: 99%;
}

#customers2 th { 
border-bottom: 1px solid #000000;
border-top: 1px solid #000000;
}  
#customers2 td { 
border-bottom: 1px solid #ddd;
}  
</style>
	 
 
<?php 
$addcode = "";
$addcode2 = "";  
$addcode3 = "";  

$searchname2 = "";
if(empty($_GET["searchname2"])){

}else{
$searchname2 = $_GET["searchname2"];
}

$searchname3 = "";
if(empty($_GET["searchname3"])){

}else{
$searchname3 = $_GET["searchname3"];
}
	
if(empty($_GET["searchname"])){
$addcode2 = "and a.datestart = '".$daystart_load."' ";

}else{
$addcode2 = "and a.datestart = '".$daystart_load."' ";
} 


if(empty($_GET["searchname2"])){

}else{ 
$addcode = " and 
( b.name like '%".$searchname2."%'  or  a.bill_no  like '%".$searchname2."%'  or  c.codecustomer  like '%".$searchname2."%'  )  ";
} 


if(empty($_GET["searchname3"])){ 
}else{
$addcode3 = "and a.major = '".$searchname3."' ";
} 	
?>
   
   
    
<div class="table-responsive" style="margin-top: 15px;">
<center>
<font size="5px"> 
ประจำวันที่ <?php echo DateThai($daystart_load)." ".Datethai2($daystart_load); ?>
<br> 
ปริ้นสัญญา NPL
<br> 
</font>
</center>
	
	
<table id="customers" >
<thead>
<tr>
<th width="5%"><div align="center"> <font size="3px"> ลำดับ </font></div></th>
<th width="5%"><div align="center"> <font size="3px"> สัญญา </font></div></th>
<th width="5%"><div align="center"> <font size="3px"> ลูกค้า </font></div></th> 
<th width="5%"><div align="center"> <font size="3px"> ยอดเก็บ </font></div></th> 
<th width="5%"><div align="center"> <font size="3px"> ยอดทบ </font></div></th> 
<th width="5%"><div align="center"> <font size="3px"> ยอดหนี้คงเหลือ </font></div></th> 
<th width="5%"><div align="center"> <font size="3px"> จำนวนขาดส่ง  </font></div></th>    
</tr>
</thead>
<tbody>
<?php
				 
$bg = "#E8E8E8";
$i = 1;  
$total_price = 0; 
$total_price2 = 0; 
$total_price3 = 0; 
$total_price4 = 0; 
$total_price5 = 0; 
$total_price6 = 0; 
$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer   FROM history_payment a 
	INNER Join customer b On a.customer = b.pk
	INNER Join list_order c On a.bill_no = c.bill_no
	where a.bill_no != '' 
	and a.closebill = 'เป็นหนี้'    
	and a.status = 'ปกติ'   
	and a.onoff_copy = 'NPL'   
	".$addcode.$addcode2.$addcode3."    
	order by a.pk asc      "; 
	
	/*
	SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer FROM history_payment a INNER Join customer b On a.customer = b.pk INNER Join list_order c On a.bill_no = c.bill_no where a.bill_no != '' and ( a.income = '' or a.income = '0' ) and a.closebill = 'เป็นหนี้' and a.status = 'ปกติ' and a.onoff_copy = 'NPL' and a.datestart = '04-09-2023' and a.major = '1' order by a.pk asc limit 0 , 25
	
	SELECT a.*, b.name, c.codecustomer, c.codecustomer FROM history_payment a INNER Join customer b On a.customer = b.pk INNER Join list_order c On a.bill_no = c.bill_no where a.bill_no != '' and a.closebill = 'เป็นหนี้' and a.status = 'ปกติ' and a.onoff_copy = 'NPL' and a.datestart = '04-09-2023' and a.major = '' order by a.pk asc
	
	
	*/
 
$query = mysqli_query($objCon,$sql); 
while($objResult = mysqli_fetch_array($query))
{ 
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
}else{
$countloopnopay++;
}

if($objResult2["addon"] == "ไม่นับ"){
$discoount_cut1 -= $price1;
}else{
$discoount_cut1 += $totalprice3 - $price1 ;
} 

if($countloopnopay >= 5){ 
if(!empty($objResult_npl["income"])){  
$chk_total = 0; 
}else{
$chk_total++;
} 
}


}	 	




$moneybank = 0;
$sql_c = "SELECT * FROM money_customer_bank where bill_no = '".$objResult["bill_no"]."' 
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
?>
<tr  > 
<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $i; ?>  </font></div></td> 		
<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["bill_no"]; ?> </font></div></td> 	
				
<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["name"]; ?> </font></div></td> 		
						 				 

<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?>    </font></div></td> 

<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="topdata<?php echo $i; ?>" > 

<?php echo number_format(0+$discoount_cut1); ?>

</font></div></td>

<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="distoutshow<?php echo $i; ?>"  >  <?php echo number_format(0+$allmoney, '0'); ?>   
</font> 
</div></td>
					
<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="topdata<?php echo $i; ?>" > 

<?php echo number_format(0+$chk_total); ?>

</font></div></td>					 						 				 	 
					 
</tr  > 					 				 
<?php $i++; } ?>							 				 				 				 
</tbody>
</table> 
</div>                                    
</body>
</html>