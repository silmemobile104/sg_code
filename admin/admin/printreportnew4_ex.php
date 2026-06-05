<?php 
include('../database.php');

$strExcelFileName = "สรุปรายงานการรับเงิน.xls";
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="'. $strExcelFileName .'"');
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
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html4">
 <meta charset="UTF-8">
<HTML>

<HEAD>
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
		  width: 100%;
		}
		   
		 #customers2 td, #customers2 th { 
			 border: 0px solid #FFFFFF; 
		}  
 </style>
 
  
      
		<?php
	$bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";

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


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  


									
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
	}  
	?>
    	       
     <?php											
		$perpage = 20;
		if (isset($_GET['page2'])) {
			$page = $_GET['page2']; 
		 } else {
			$page = 1;
		} 

		if (empty($_GET['page2'])) {
			 $page = 1;
		 }  			
		$start = ($page - 1) * $perpage;



		$addcode = "";
		$addcode2 = ""; 
		$addcode3 = ""; 
		$addcode4 = ""; 
		 
		 
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 
		
		
	if(!empty($_GET["customername"])){
		$addcode4 = "   and b.name like '%".$customername."%'  or  c.codecustomer like '%".$customername."%' "; 
	}
		 
	 ?>            
       
   
	 <table id="customers"    >
		 <thead>  
		 <tr>
			<th width="4%" bgcolor="#E2E7EC" height="35px;" style=" "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  วันครบกำหนดชำระ    </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เลขที่เอกสาร  </font></div></th>       
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รหัสลูกค้า  </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชื่อเฟส </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ยอดชำระ </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ส่วนลด </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  มูลค้าสินค้า </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชำระจริง </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ภาษี </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวมทั้งสิ้น </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ตัดเงินฝาก </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style=" "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   คงเหลือจ่ายจริง   </font></div></th>  
		 </tr>
	    </thead>    
		<tbody> 
		<?php 
		$i = 1;
		$bg = "#F8FAFD"; 

		if (empty($_GET['page2'])) { 
			$i = 1;
		}else if (($_GET['page2'] == 1)) { 
			$i = 1;
		}else{

			$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
		}

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		$totaldata5 = 0;
		$totaldata6 = 0;
		$totaldata7 = 0;
		$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		INNER Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != ''   
		and a.income != ''
		and a.income != '0'  
		and a.status = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
		".$addcode.$addcode2.$addcode3.$addcode4."    
		order by a.pk asc   limit {$start} , {$perpage}  ";   
			 
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
 
  
			$discoount_cut = 0;  
			$discoount_cut1 = 0;  
			$discoount_cut2 = 0; 



			$discountbank = 0;  
			$countloopnopay = 0;
			$chk_total = 0;  

			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql2 = " SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"] ."'  ".$code_check2." "; 
			/// echo $sql2;
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{  
				if(!empty($objResult2["income"])){
				$discoount += $objResult2["income"]; 

				}
				if(!empty($objResult2["paymentother"])){
				$discoountpaymentother += $objResult2["paymentother"]; 
				}  
				
				
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

					// $countloopnopay = 0;
					// $chk_total = 0;
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

			$allmoney = ($totalprice2*$totalprice3)-$discoount;
			/// echo $objResult["bill_no"] . " -- " . $chk_total . " <br> ";


			$moneybank = 0;
			$sql_c = "SELECT * FROM money_customer_bank where bill_no = '".$objResult["bill_no"]."' 
			and ( typegetpayment = 'โอนผ่านบัญชีบริษัท'  or  typegetpayment = 'รับเงินสด'  )
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


			$discountshow = "0";
			if(empty($objResult["paymentother"])){
				$discountshow = $chk_total*50;
			}
			if(!empty($objResult["paymentother"])){
				/// $discountshow = $objResult["paymentother"];
			}


			 $total_dis = ($chk_total*50);
			 if($total_dis <= 0){
			 $total_dis = 0;
			 } 

			$getbill = $objResult["bill_no"];
			$totalprice_chk = ( $chk_total * 50 );  
			$discountpayment = 0;
			$code_check2 = " and date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql2 = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' ".$code_check2." ";  
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{  
				if(!empty( $objResult2["price"])){
				if(!empty( $objResult2["discount"])){
					$discountpayment += $objResult2["price"] + $objResult2["discount"];
				}
				}
				   
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
			
			
			$bill_no = $objResult["bill_no"];   
			$orderdata = $objResult["orderdata"];   
			$datashow = "BR".$bill_no."-".($orderdata+1);  
			$datashowSHow = explode("BRSGB",$datashow); 
			$txtbill = "SGRBC".$datashowSHow[1];
			
			
			
			$newpayment = ($totalprice3 * 100) / 107;
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult["create_date2"])." ".DateThai2($objResult["create_date2"])  ; ?>  </font></div></td>
 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $txtbill; ?>  </font></div></td>
	 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["codecustomer"]; ?>  </font></div></td>
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["facebook"]; ?>  </font></div></td>
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?>   </font></div></td> 
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$discount); ?>   </font></div></td>  
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$newpayment); ?>   </font></div></td> 
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$income); ?>   </font></div></td> 
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy); ?>   </font></div></td> 
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$income); ?>   </font></div></td> 
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0); ?>   </font></div></td> 
		
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allmoney); ?>   </font></div></td> 
		 
		</tr> 
		<?php $i++;  $totaldata1++;   $totaldata2 += $totalprice3;  $totaldata3 += $allpasy;  $totaldata4 += $allmoney;  } ?>
		
		
		<tr style="background-color: #F8FAFD; ">  

		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>
 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
	 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <b>  <?php echo number_format(0+$totaldata1); ?>   </b> </font></div></td>
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <b>  <?php echo number_format(0+$totaldata2); ?>   </b>  </font></div></td> 
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <b>   <?php echo number_format(0+$totaldata3); ?>   </b>  </font></div></td> 
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
		 
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp;  </font></div></td>
		
		
		<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <b>  <?php echo number_format(0+$totaldata4); ?>    </b> </font></div></td> 
		 
		</tr> 
		
		
		
		</tbody> 
		</table>	
    				 	  
                                                                                                                                                                                                                                                                                                                          		 	   		 	   		 	 
   
                                	  

</BODY>

</HTML>
