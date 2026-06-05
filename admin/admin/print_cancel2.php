<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  คืนเครื่อง ( ปิดบัญชีปกติ)  </title>
</head>  
<style>
@font-face {
  font-family: SukhumvitSet-Medium;
  src: url('../fonts/regular2.ttf'); 
}

@font-face {
  font-family: SukhumvitSet-SemiBold;
  src: url('../fonts/regular2.ttf'); 
} 
	 
.serif {
  font-family:  SukhumvitSet-Medium, serif;
} 
.serif2 {
  font-family:  SukhumvitSet-SemiBold, serif;
}

</style>

<body class="serif">  
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

   
	
  <style>
		#customers { 
		  border-collapse: collapse;
		  width: 100%;
		}
		
		#customers td, #customers th {
		  border: 1px solid #000; 
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
  
  
  <style>
		#customers3 { 
		  border-collapse: collapse;
		  width: 50%;
		}
		
		#customers3 td, #customers th {
		  border: 1px solid #A9A9A9; 
		}  
 </style>
   	     
  	<?php
	 $bill_no = $_GET["bill_no"];
	 $round = $_GET["round"];
	 $searchname = date('d/m')."/".(date('Y'));
	 $cut = explode("/",$searchname);
	 $date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	 $daystart_load = date("d-m-Y", strtotime($date_income)); 
	 
	  	$namemember5 = "";
	  	$sql2 = "  SELECT *   FROM list_order    where bill_no = '".$bill_no."'     ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			$bill_no = $objResult2["bill_no"];								 
			$c_run_bill_no = $objResult2["npl_bill"];								 
			$c_status2 = $objResult2["c_status2"];								 
			$c_create_date = $objResult2["npl_datestart"];				 							 
			$daytotal = $objResult2["daytotal"];								 
			$moneydown = $objResult2["moneydown"];		//// เงินดาวน์				 
			$c_price_back = $objResult2["c_price_back"];	/// คืนให้ลูกค้า
			$major = $objResult2["major"]; 
			$startdate = $objResult2["startdate"]; 
			$endate = $objResult2["endate"]; 
			$discount = $objResult2["discount"]; 
			$npl_status = $objResult2["npl_status"]; 
			$typenpl1 = $objResult2["typenpl1"]; 
			$typenpl2 = $objResult2["typenpl2"]; 
			
			$priceorder = $objResult2["priceorder"];  
			$note = $objResult2["note"];     
			$n_addon_price = $objResult2["n_addon_price"];   
			$npl_createby = $objResult2["npl_createby"];   
										 
			$name_create2 = "-"; 
			$name_create3 = "-"; 
			$name_create4_npl = "-"; 
			$name_major = "-"; 
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$name_create2  =  $objResult["name"];
				$name_create3  =  $objResult["codeno"];
			}
			$sql = "SELECT * FROM member_all where pk = '". $npl_createby ."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$name_create4_npl  =  $objResult["name"]; 
			}
																	
				 
		 
			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$totalprice4 = $objResult2["startdate"]; 
			$totalprice5 = $objResult2["endate"];    

			$priceorder = $objResult2["priceorder"];  
			$computer2 = $objResult2["computer2"] + $objResult2["moneydown"];  
			$typenpl1 = $objResult2["typenpl1"];  
			$typenpl2 = $objResult2["typenpl2"];  
			$discount = $objResult2["discount"];  
			$note = $objResult2["note"];  
			$moneydown = $objResult2["moneydown"]; 

			$n_cancel= $objResult2["n_cancel"];   
			$n_total = $objResult2["n_total"];   
			$n_priceback = $objResult2["n_priceback"];   
			$n_total_price_no = $objResult2["n_total_price_no"];   
			$n_addon_price = $objResult2["n_addon_price"];   
			$npl_datestart2 = $objResult2["npl_datestart2"];   


			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$name_create =  $objResult["name"];
			}

			$name_create2 = "-"; 
			$name_create3 = "-"; 
			$name_create4 = "-"; 
			$name_major = "-"; 
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$name_create2  =  $objResult["name"];
				$name_create3  =  $objResult["codeno"];
			}


			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major =  $objResult_c["name"];
			}


			$chk_total = 0;
			$priceback = 0;
			$date_payment = "";
			
			
			$dis_show = 0;
			$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $objResult2["bill_no"] ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$dis_show += $objResult["price"];   
			}

			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$endate = date("Y-m-d", strtotime($npl_datestart2));  /// วันที่เริ่มเก็บ  
			
			
			
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($endate)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'   "; 
			 
			$query_npl = mysqli_query($objCon,$sql_npl); 
			while($objResult_npl = mysqli_fetch_array($query_npl))
			{   
				if(!empty($objResult_npl["income"])){ 
					$priceback += $objResult_npl["income"]; 
					$date_payment = $objResult_npl["create_date2"];
				}else{  
				} 


				if(!empty($objResult_npl["income"])){   
					$countloopnopay = 0;
					$chk_total = 0;
				}else{
					$countloopnopay++;
				} 
				
				 if($countloopnopay >= 5){ 
					if(!empty($objResult_npl["income"])){  
							$chk_total = 0; 

							$sql = "SELECT * FROM payment_other_bill_no where bill_no_ref = '".$objResult2["bill_no"]."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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


			$pricetotal = ($totalprice3*$totalprice2) - $priceback - $moneydown;
			$pricetotal = ($totalprice3*$totalprice2) - $priceback ;
			
			/*
			echo ($totalprice3*$totalprice2) . " <br> ";
			echo $priceback . " <br> ";
			echo $moneydown . " <br> ";
			echo $chk_total . " <br> ";
			*/
			
			
			$pricetotal2 = $priceorder - $priceback - $moneydown;
			$pricetotal3 = $pricetotal2 + ($chk_total*50);


			$cal1 = $computer2-$moneydown-$n_pricebackl;
			/// $cal2 = $cal1 - ($chk_total*50);
			$cal2 = $cal1 + ($chk_total*50);
			
			
			 /// echo $cal1 . " <br> ";
			///  echo ($chk_total*50) . " <br> ";
			
			
			
			$cal3 = $cal2 - $discount;
			 
			$cal4 = $cal3 - $n_cancel;

			if(empty($n_total_price_no)){ 
				$n_total_price_no = ($chk_total*50);
			} 


			$c_cal1 = $priceback;
			$c_cal1_new = $pricetotal;
			 
			
			
			$c_cal2 = $n_total_price_no - $dis_show; 
			if($c_cal2 <= 0){
				$c_cal2 = 0;
			}
			
			/// $c_cal3 = $c_cal1 + $c_cal2;
			$c_cal3 = ($c_cal1_new + $c_cal2) - $discount;
			/// echo $c_cal1_new . " <br> ";
			/// echo $c_cal2 . " <br> ";
			/// echo $discount . " <br> ";
			
			
			$c_cal4 = $c_cal3 - $discount; 
			
			 
			 

		}
	
		$name_major1 = "";
		$name_major2 = "";
		$name_major3 = "";
		$name_major4 = "";
		$sql_c = "SELECT * FROM major where pk = '1'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$name_major1 =  $objResult_c["name"]; 
			$name_major2 =  $objResult_c["address"]; 
			$name_major3 =  $objResult_c["telphone"]; 
			$name_major4 =  $objResult_c["pasy"]; 
		}
							 
	
	?>
    	       
  <table width="100%" style="border: 1px solid #000; ">
  	<tr>
  		<td> 
    	<table width="100%" border="0"  style="border-bottom: 1px solid #000; "   >  
		  <tr>
			 <td align="center" width="10%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <img src="../logo.png" style="width: 100%;">
				</font>
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> <?php echo $typenpl1. " ( ".$typenpl2." )"; ?>    </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $name_major1; ?>    <br>
			 	  <?php echo $name_major2; ?>  โทร. <?php echo $name_major3; ?>    <br>    
			 	  เลขประจำวผู้เสียภาษี <?php echo $name_major4; ?>    <br>    
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  	</table>	
                       
                  
      	<table width="100%" border="0"    >  
		  <tr>
			 <td align="left" width="100%" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-left: 5px; margin-right: 5px; "> 
		 	 	 <div style="margin-top: 5px; ">  </div>
		 	 	 
		 	 	 เลขที่ทำรายการ <?php echo $c_run_bill_no;  ?> วันที่ <?php echo DateThai($c_create_date)." ".DateThai2($c_create_date);  ?>
		 	 	 <div style="margin-top: 5px; ">  </div> 
				 เลขที่อ้างอิงสัญญา <?php echo $bill_no;  ?>  
		 	 	 <div style="margin-top: 5px; ">  </div> 
				 วันทีเริ่มทำสัญญา <?php echo DateThai($startdate)." ".DateThai2($startdate); ?>  ถึงวันที่ <?php echo DateThai($endate)." ".DateThai2($endate); ?> 
		 	 	 <div style="margin-top: 5px; ">  </div> 
				 หมายเลขเครื่อง <?php echo $name_create3; ?>  
		 	 	 <div style="margin-top: 5px; ">  </div>  
		 	 	   
				<?php  if($typenpl1 == "คืนเครื่อง"){ 
					 
					 
					 $cal1 = $priceorder - $moneydown  -  $n_priceback;
					 $cal2 = $cal1 + $n_total_price_no;
					 $cal3 = $cal2 - $discount;
					 $cal4 = $cal2 - $discount - $n_cancel - $n_addon_price;
					 ?> 
				  
					 ราคาทุน <?php echo number_format(0+$priceorder); ?> 
					 เงินดาวน์ <?php echo number_format(0+$moneydown); ?> 
					 จ่ายค่างวด <?php echo number_format(0+$n_priceback); ?>    
					 ยอดคงเหลือ <?php echo number_format(0+$cal1); ?>
					 ยอดค่าปรับสะสม <?php echo number_format(0+$n_total_price_no); ?>
					 รวม <?php echo number_format(0+$cal2); ?>
					 ส่วนลด <?php echo number_format(0+$discount); ?>
					  
		 	 	 	 <div style="margin-top: 5px; ">  </div>  
		 	 	 
					 เหลือ <?php echo number_format(0+$cal3); ?>
					 ค่าเสื่อม <?php echo number_format(0+$n_cancel); ?>
					 (ค่าใช่จ่ายดำเนินคดี) <?php echo number_format(0+$n_addon_price); ?>
					 ยอดเงินคงเหลือ <?php echo number_format(0+$cal4); ?>
					 
				<?php }else if($typenpl1 == "ปิดยอด"){  ?>  
					 
					 หนี้ค้างทั้งหมด <?php echo number_format(0+$c_cal1_new); ?> 
					 ค่าปรับสะสม <?php echo number_format(0+$c_cal2); ?> 
					 รวม <?php echo number_format(0+$c_cal1_new+$c_cal2); ?> 
					 ส่วนลด <?php echo number_format(0+$discount); ?> 
					 (ค่าใช่จ่ายดำเนินคดี) <?php echo number_format(0+$n_addon_price); ?> 
					 ยอดหนี้ทั้งหมด <?php echo number_format(0+$c_cal3); ?> 
	 	 	  
	 	 	    <?php } ?>
		 	 	  
		 	 	 <div style="margin-top: 5px; ">  </div>  
					หมายเหตุ <?php echo $note; ?>
		 	 	 </div> 
				</font> 
			 </td>  
		  </tr>   
		      	 
  		  </table>   
      	    
    	<br> 
                  
                    
                   
      	 <div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ............................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ลูกค้า  </font> 
				
				
			<div style = " margin-top: -55px; " > <font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> &nbsp;  </font>   </div>
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ............................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> พนักงานทำรายการ  </font> 
				
				
			<div style = " margin-top: -55px; " > <font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> &nbsp;  <?php echo $name_create4_npl; ?> </font>   </div>
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
		 </tr> 
	  </table> 
	  </div> 
  	
  	            
  		</td>
  	</tr>
  </table>              
       
  
                      
   <table width="100%" style="border: 1px solid #000; ">
  	<tr>
  		<td> 
    	<table width="100%" border="0"  style="border-bottom: 1px solid #000; "   >  
		  <tr>
			 <td align="center" width="10%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <img src="../logo.png" style="width: 100%;">
				</font>
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> <?php echo $typenpl1. " ( ".$typenpl2." )"; ?>    </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $name_major1; ?>    <br>
			 	  <?php echo $name_major2; ?>  โทร. <?php echo $name_major3; ?>    <br>    
			 	  เลขประจำวผู้เสียภาษี <?php echo $name_major4; ?>    <br>    
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  	</table>	
                       
                  
      	<table width="100%" border="0"    >  
		  <tr>
			 <td align="left" width="100%" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-left: 5px; margin-right: 5px; "> 
		 	 	 <div style="margin-top: 5px; ">  </div>
		 	 	 
		 	 	 เลขที่ทำรายการ <?php echo $c_run_bill_no;  ?> วันที่ <?php echo DateThai($c_create_date)." ".DateThai2($c_create_date);  ?>
		 	 	 <div style="margin-top: 5px; ">  </div> 
				 เลขที่อ้างอิงสัญญา <?php echo $bill_no;  ?>  
		 	 	 <div style="margin-top: 5px; ">  </div> 
				 วันทีเริ่มทำสัญญา <?php echo DateThai($startdate)." ".DateThai2($startdate); ?>  ถึงวันที่ <?php echo DateThai($endate)." ".DateThai2($endate); ?> 
		 	 	 <div style="margin-top: 5px; ">  </div> 
					หมายเลขเครื่อง <?php echo $name_create3; ?>
		 	 	 <div style="margin-top: 5px; ">  </div>  
		 	 	 
		 	 	 
				<?php  if($typenpl1 == "คืนเครื่อง"){ 
					 
					 
					 $cal1 = $priceorder - $moneydown  -  $n_priceback;
					 $cal2 = $cal1 + $n_total_price_no;
					 $cal3 = $cal2 - $discount;
					 $cal4 = $cal2 - $discount - $n_cancel - $n_addon_price;
					 ?> 
				  
					 ราคาทุน <?php echo number_format(0+$priceorder); ?> 
					 เงินดาวน์ <?php echo number_format(0+$moneydown); ?> 
					 จ่ายค่างวด <?php echo number_format(0+$n_priceback); ?>    
					 ยอดคงเหลือ <?php echo number_format(0+$cal1); ?>
					 ยอดค่าปรับสะสม <?php echo number_format(0+$n_total_price_no); ?>
					 รวม <?php echo number_format(0+$cal2); ?>
					 ส่วนลด <?php echo number_format(0+$discount); ?>
					 
					 
					 
		 	 	 <div style="margin-top: 5px; ">  </div>  
					 เหลือ <?php echo number_format(0+$cal3); ?>
					 ค่าเสื่อม <?php echo number_format(0+$n_cancel); ?>
					 (ค่าใช่จ่ายดำเนินคดี) <?php echo number_format(0+$n_addon_price); ?>
					 ยอดเงินคงเหลือ <?php echo number_format(0+$cal4); ?>
				<?php }else if($typenpl1 == "ปิดยอด"){  ?>  
					 
					 หนี้ค้างทั้งหมด <?php echo number_format(0+$c_cal1_new); ?> 
					 ค่าปรับสะสม <?php echo number_format(0+$c_cal2); ?> 
					 รวม <?php echo number_format(0+$c_cal1_new+$c_cal2); ?> 
					 ส่วนลด <?php echo number_format(0+$discount); ?> 
					 (ค่าใช่จ่ายดำเนินคดี) <?php echo number_format(0+$n_addon_price); ?> 
					 ยอดหนี้ทั้งหมด <?php echo number_format(0+$c_cal3); ?> 
	 	 	  
	 	 	    <?php } ?>
		 	 	  
		 	 	 <div style="margin-top: 5px; ">  </div>  
					หมายเหตุ <?php echo $note; ?>
		 	 	 </div> 
				</font> 
			 </td>  
		  </tr>   
		      	 
  		  </table>   
      	    
    	<br> 
                  
                    
                   
      	<div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ............................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ลูกค้า  </font> 
				
				
			<div style = " margin-top: -55px; " > <font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> &nbsp;  </font>   </div>
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ............................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> พนักงานทำรายการ  </font> 
				
				
			<div style = " margin-top: -55px; " > <font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> &nbsp;  <?php echo $name_create4_npl; ?> </font>   </div>
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
		 </tr> 
	  </table> 
	  </div> 
  	
  	            
  		</td>
  	</tr>
  </table>                                 
                                                      
                                                                      
                                                                                                        
<style>
/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px; 
  cursor: pointer;   
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 14px;
  width: 14px; 
  background-color: #FFFFFFF;
	border-radius: 5px;
	border: 2px solid #707070;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #707070;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container2 .checkmark:after {
  left: 3px;
  top: 1px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>   
</body>
</html>