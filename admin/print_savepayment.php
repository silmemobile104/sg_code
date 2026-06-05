<?php 
include('../database.php');

$strExcelFileName = "รอชำระ.xls";
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
	   
	 $codepro = "";
	 $name = "";
	 $searchname = "";

  
		 
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		 
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}
	if(!empty($_GET["searchnamedata"])){
		if(empty($_GET["searchnamedata"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname = $_GET["searchnamedata"];


			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load = date("d-m-Y", strtotime($date_income)); 
			$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}
	} 

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

	$total_page = 1;
	$perpage = 25;
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
	if(empty($_GET["searchname"])){
		$addcode2 = "and a.datestart = '".$daystart_load."' ";

	}else{
		$addcode2 = "and a.datestart = '".$daystart_load."' ";
	} 



	if(empty($_GET["searchname3"])){ 
	}else{
		$addcode3 = "and a.major = '".$searchname3."' ";
	} 


	if(empty($_GET["searchname2"])){

	}else{ 
		$addcode = " and   ( b.name like '%".$searchname2."%'  or  a.bill_no  like '%".$searchname2."%'  or  c.codecustomer  like '%".$searchname2."%'  )  ";

		/// $addcode2 = "";
	} 

							
	
	?>
 
                                		 	   		 	   		 	 
  	<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
	<div class="table-responsive"  >
	<table id="key_product"  class=" table    tablemobile  " border="0"     > 
	
	<?php 

		$i = 1;
		$ishow = 1;
 

		$bg = "#E8E8E8";
		$total_price = 0; 
		$total_price2 = 0; 
		$total_price3 = 0; 
		$total_price3_2 = 0; 

		$total_price4 = 0; 
		$total_price5 = 0; 
		$total_price6 = 0; 
		$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook    FROM history_payment a 
			INNER Join customer b On a.customer = b.pk
			INNER Join list_order c On a.bill_no = c.bill_no
			where a.bill_no != '' 
			and ( a.income = '' or a.income = '0'  )
			and a.closebill = 'เป็นหนี้'   
			and a.status = 'ปกติ'   
			and a.onoff_copy = 'ปกติ'   
			".$addcode.$addcode2.$addcode3."    
			order by a.pk asc    ";  

		//// echo $sql;
		/*
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
				$i++;	 
				$ishow++;	
				$total_price += $totalprice1;
				$total_price2 += $totalprice3;
				//// $total_price3 += $discoount;
				$total_price4 += $discoount_cut1;

				if(!empty($objResult["income"])){
				$total_price3 += $objResult["income"]; 	
				}


				if(!empty($total_dis)){
				$total_price5 += $total_dis; 	
				}


				if(!empty($objResult["discount"])){
				$total_price3_2 += $objResult["discount"]; 	
				}

				$total_price6 += $allmoney;
			}
			*/
		 ?>
	
	 <thead> 
	   	   <!--
		   <tr>
				<th width="4%" colspan="7" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
				<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom-color: #FFF;  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow1"    >   
				<?php echo number_format(0+$total_price); ?>
				</font></div></th>   
				<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;      border-bottom-color: #FFF;  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow2"    >   
					<?php echo number_format(0+$total_price2); ?>
				</font></div></th> 
				 

				<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;     border-bottom-color: #FFF;  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow4"    >    
					<?php echo number_format(0+$total_price3); ?>     </font></div></th>   
				<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;     border-bottom-color: #FFF;  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow5"    >    
					<?php echo number_format(0+$total_price5); ?>     </font></div></th>        
 
		   </tr>
		   -->
		   
		   <tr>      
			<th width="2%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ  </font></div></th> 

			<th width="5%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อลูกค้า  </font></div></th> 
			<th width="3%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>    
			<th width="4%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เบอร์โทร  </font></div></th>   
			<th width="7%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา  </font></div></th> 
			<th width="6%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่สัญญา     </font></div></th> 
			<th width="3%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  งวดชำระที่   </font></div></th>    
			<th width="3%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหนี้ตามสัญญา     </font></div></th>   
			<th width="2%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระ     </font></div></th>   
			<th width="4%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระจริง     </font></div></th>   
			<th width="4%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับสะสม     </font></div></th>    
		 </tr>
		 </thead>
		 
		   
	<tbody>
	<?php 

		$i = 1;
		$ishow = 1;
 
		$bg = "#E8E8E8";
		$total_price = 0; 
		$total_price2 = 0; 
		$total_price3 = 0; 
		$total_price3_2 = 0; 

		$total_price4 = 0; 
		$total_price5 = 0; 
		$total_price6 = 0; 
		$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
			INNER Join customer b On a.customer = b.pk
			INNER Join list_order c On a.bill_no = c.bill_no
			where a.bill_no != '' 
			and ( a.income = '' or a.income = '0'  )
			and a.closebill = 'เป็นหนี้'   
			and a.status = 'ปกติ'   
			and a.onoff_copy = 'ปกติ'   
			".$addcode.$addcode2.$addcode3."    
			order by a.pk asc    ";  

		//// echo $sql;
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
	?> 
									  
	   <tr id="hddata<?php echo $i; ?>"  style="background-color: #FFF; "> 
							 					
										
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $ishow; ?>  </font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["name"]; ?> </font></div></td> 

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["codecustomer"]; ?> </font></div></td> 

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["telphone"]; ?> </font></div></td> 

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["bill_no"]; ?> </font></div></td> 
										  
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 

			if($onoffadd == "off"){
				echo ($objResult["orderdata"]); 
			}else{
				echo ($objResult["orderdata"]+1); 
			}
		  ?> </font></div></td> 

										  
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice1); ?>   </font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?>    </font></div></td> 
										 
										   
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
		<?php echo $objResult["income"]; ?> 
		</font></div></td>
										
		 
  
										 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >     

		 <?php echo $total_dis; ?> 	

		</font></div></td>
										 
	 
								 			
								 
		</tr>    
		   <?php
				$i++;	 
				$ishow++;	
				$total_price += $totalprice1;
				$total_price2 += $totalprice3;
				//// $total_price3 += $discoount;
				$total_price4 += $discoount_cut1;

				if(!empty($objResult["income"])){
				$total_price3 += $objResult["income"]; 	
				}


				if(!empty($total_dis)){
				$total_price5 += $total_dis; 	
				}


				if(!empty($objResult["discount"])){
				$total_price3_2 += $objResult["discount"]; 	
				}

				$total_price6 += $allmoney;
			}
		  ?>
		   </tbody>
		      

		</table>  
		</div>
	  </div>                      		 	   		 	   		 	 

                                	  

</BODY>

</HTML>
