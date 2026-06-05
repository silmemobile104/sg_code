<?php include('../database.php'); 




	$sql = "SELECT * FROM notedataprint Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$namedata = $objResult["name"]; 
		$telphonedata = $objResult["telphone"]; 
		$logo = $objResult["logo"]; 
		$detail = $objResult["detail"]; 
		$logobackground = $objResult["logobackground"]; 
				 
	} 
 


	$showimg1 = "images/11111.png";
	if(!empty($logo)){ 
	$showimg1 = "../img/".$logo;
	}
	$showimg2 = "images/11111.png";
	if(!empty($logobackground)){ 
	$showimg2 = "../img/".$logobackground;
	}
?>
<script> 
window.print(); 
</script>


<style>
	body {  
	}

	body:before {
	  content: "";
	  position: absolute;
	  z-index: 99999;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  opacity: 0.3;  
	 	background-image: url("<?php echo $showimg2; ?>"); 
		background-position: center;
		background-repeat: no-repeat;
		margin-left: 0px; 
	}
</style>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  เอกสารใบโนติส  </title>
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
		$sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone FROM list_order  a Inner Join customer b On   a.customer = b.pk 
		 where a.bill_no != '' and a.bill_no = '".$bill_no."'  order by a.pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{   
				$totalprice1 = $objResult2["money"]; 
				$totalprice2 = $objResult2["daytotal"]; 
				$totalprice3 = $objResult2["dayprice"];  
				$totalprice4 = $objResult2["total"];  
				$create_date = $objResult2["create_date"];  
				$create_date2 = $objResult2["create_date2"];  
				$create_time = $objResult2["create_time"];  
				$name = $objResult2["name"];  
				$facebook = $objResult2["facebook"];  
				$telphone = $objResult2["telphone"];   
				$startdate = $objResult2["startdate"];   
				$endate = $objResult2["endate"];   
				$moneydown = $objResult2["moneydown"];   
				$cod = $objResult2["cod"];   
				$moneydata = $objResult2["moneydata"];   
				$codecustomer = $objResult2["codecustomer"];  
			
				$appleid = $objResult2["appleid"];   
				$password = $objResult2["password"];   
				$bank = $objResult2["bank"]; 
			
				$showstart = $objResult2["startdate"]; 
			
			
				$qrdata = $objResult2["qrdata"];   
			
			$nambankfull = "";
			$sql_b = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk where a.name != ''  and a.pk = '".$bank."' order by a.pk asc   "; 
			$query_b = mysqli_query($objCon,$sql_b);
			while($objResult_b = mysqli_fetch_array($query_b))
			{ 
				$nambank = "";
				$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_b["bank"]."'    order by pk asc  "; 
				$query_b2 = mysqli_query($objCon,$sql_b2);
				while($objResult_b2 = mysqli_fetch_array($query_b2))
				{ 
					$nambank =  $objResult_b2["name"];
				} 
				
				$nambankfull = $nambank." ".$objResult_b["name"]. " [ " .$objResult_b["bookbank"] . " ] ";
			} 
			 		 
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
			$name_major2 = "-"; 
			$p_data1 = "";
			$p_data2 = "";
			$p_data3 = "";
			$p_data4 = "";
			$p_data5 = "";
			$p_data6 = "";
			$p_dataname = "";
			$codeno = "";
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$p_data1 = $objResult["appleid"];
				$p_data2 = $objResult["password"];
				$p_data3 = $objResult["storerage"];  
				$p_dataname = $objResult["name"];  
				$codeno = $objResult["codeno"];   
				
				$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data4 =  $objResult_c["name"];
				}
				
				$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$name_create2 =  $objResult_c["name"];
				}
				
				$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$name_create3 =  $objResult_c["name"];
				}
				
				
				$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data5 =  $objResult_c["name"];
				}
				
				
				$sql_c = "SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data6 =  $objResult_c["name"];
				}
			}
							
			
			  
		}  
	
	
		$name_major1 = "";
		$name_major2 = "";
		$name_major3 = "";
		$sql_c = "SELECT * FROM major where pk = '1'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$name_major1 =  $objResult_c["name"]; 
			$name_major2 =  $objResult_c["address"]; 
			$name_major3 =  $objResult_c["telphone"]; 
		}	 
	
	
		$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
		$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'   "; 
	
	
		$order_check = "";
		$priceback = 0;
		$chk_total2 = 0;
		$countloopnopay_pay = 0;
		$countloopnopay = 0;
		$moneypaymentall = 0;
		$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($checkend)));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $bill_no ."'  ".$code_check2." order by pk asc ";   
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			if(!empty($objResult_npl["income"])){ 
				$priceback += $objResult_npl["income"];


				$date_payment = $objResult_npl["create_date2"];

				$countloopnopay = 0;
				$chk_total = 0;
			}else{
				$countloopnopay++;
			} 
 
 
			if($countloopnopay >= 5){ 
				if(!empty($objResult_npl["income"])){ 

					$checkpaymentday = "ON";
					$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$bill_no."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
	
		$sql2 = " SELECT * FROM history_payment where bill_no = '".$bill_no."' and addon = ''  ".$code_check2." order by pk asc    ";   
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{  
			if($objResult2["orderdata"] != $order_check){
				
				if(empty($objResult2["income"])){ 
					 
					$income = "";
					$datestartshow = "";

					$sql_chk = " SELECT * FROM history_payment where bill_no = '".$bill_no."' and orderdata = '".$objResult2["orderdata"]."' and income != ''   ";  
					 
					$query_chk = mysqli_query($objCon,$sql_chk); 
					while($objResult_chk = mysqli_fetch_array($query_chk))
					{ 

						$income = $objResult_chk["income"];
						$datestartshow = $objResult_chk["date_start2"]; 

					}
					
					if(empty($datestartshow)){ 
						$order_check  =  $objResult2["orderdata"];
						$countloopnopay_pay  += $objResult2["money"];
						$chk_total2++; 
						/// echo $order_check . " <br> ";
					} 
						 
					 
				}
				
				
				
				
				
			}
		}
	
	
		$discountshow = $chk_total*50;	

		$allmoney = ($totalprice2*$totalprice3)-$priceback;
	
		/// echo "asdfads".$discountshow. " <br> ";
		/// echo "asdfads".$allmoney. " <br> ";
?> 
 	
    <table width="100%" border="0">
    	<tr>
    	
    		<td align="center">
    		<font style=" font-size: 22px; ">
    		 
    		
			<style>
				.grid-container {
				display: grid;
				grid-template-columns: 100%;  
				}
				.grid-container2 {
				display: grid;
				grid-template-columns: 25% 75% ;  
				} 
				.grid-item {  
				padding-right: 3px; 
				}
			</style>
   		
   			<div class=" grid-container2 " style="   "> 
   			<div class=" grid-item " align="right"  style="  "> 
    		<img src="<?php echo $showimg1; ?>" style=" width: 110px; " >
			</div>
   			<div class=" grid-item "  style="    "> 
   			<div  style=" margin-left: 0px; "> 
    		 
    		 <?php if(empty($detail)){ ?>
    		
    			สำนักงานกฎหมายจรรยาวิชรทนายความ 
    			<div style="margin-top: 5px;" > </div>
				1280/2 22 ถนนสุขุมวิท ตำบลสำโรงเหนือ อำเภอเมืองสมุทรปราการ
    			<div style="margin-top: 5px;" > </div> 
				จังหวัดสมุทรปราการ 10270 โทร. 073-729-965
   		 
    		 
				<?php }else{ ?>
				<div align="left"  style=" margin-left: 10px;   "> 
   				<font style=" font-size: 40px; "> 
    		  <b>   	สำนักงานกฎหมายชลธิชา ทนายความ     </b>
   				</font>
				</div>
				<div align="left"  style=" margin-left: 10px;   "> 
   				<font style=" font-size: 18px; "> 
    			<div style="margin-top: 5px;" > </div>
				 เลขที่ 46/23 ชอยพันธ์มณี ถนนเวฬุวัน ตำบลสะเตง อำเภอเมือง จังหวัดยะลา 95000
    			<div style="margin-top: 5px;" > </div> 
				โทร. 073-729-916 มือถือ 084-2939750 
				</font>
				</div>
				<?php } ?>  
   			  
   			 
			</div>
			</div>
			</div>
    		
    		 
    			<div style="margin-top: 5px;" > <hr> </div>  
				<div   style=" margin-left: 100px; ">  
					<div style="margin-top: 5px;" > </div>
					วันที่ <?php echo DateThai(date('d-m-Y'))." ".DateThai2(date('d-m-Y')); ?> 
				</div>  
   			  	 
    		</font> 
    		</td> 
    	</tr>
    </table>
           
	<div style="margin-top: 5px;" > </div>
    <table width="100%" border="0">
    	<tr>
    		<td align="left">
    		<font style=" font-size: 20px; "> 
    			เรื่อง ทวงถามชำระหนี้และบอกเลิกสัญญา
    			<div style="margin-top: 5px;" > </div>
				เรียน คุณ  <?php echo $name; ?>  
    			<div style="margin-top: 5px;" > </div>
				อ้างถึง หนังสือสัญญาเช่าซื้อโทรศัพท์มือถือ เลขที่ <?php echo $bill_no; ?> ฉบับลงวันที่ <?php echo DateThai($create_date)." ".DateThai2($create_date); ?> 
    		</font> 
    		</td>
    	</tr>
    </table>
  
	    
	<div style="margin-top: 5px;" > </div>
    <table width="100%" border="0">
    	<tr>
    		<td align="left">
    		<font style=" font-size: 20px; "> 
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ตามสัญญาเช่าซื้อที่ท่านได้เช่าซื้อโทรศัพท์มือถือ ยี่ห้อ  <?php echo $p_dataname; ?>   <?php echo $name_create3; ?>   สี <?php echo $p_data4; ?> ขนาดความจุ <?php echo $p_data6; ?>
			หมายเลขประจำเครื่อง(IMEI) <?php echo $codeno; ?> จาก <?php echo $name_major1; ?> เมื่อวันที่ <?php echo DateThai($create_date)." ".DateThai2($create_date); ?> จำนวน 1 เครื่อง  ในราคา <?php echo number_format(0+$moneydata); ?>  โดยท่านตกลงยินยอมชำระเงินดาวน์ จำนวน <?php echo number_format(0+$moneydown); ?> บาท ในวันทำสัญญาส่วนที่เหลืออีก จำนวน <?php echo number_format(0+$moneydata-$moneydown); ?> บาท ตกลงผ่อนชำระเป็นรายเดือนรวม <?php echo number_format(0+$totalprice2); ?> งวด งวดละ <?php echo number_format(0+$totalprice3); ?> บาท ทุกวัน <?php echo DateThai($startdate)." ".DateThai2($startdate); ?> -  <?php echo DateThai($endate)." ".DateThai2($endate); ?>     ทาง <?php echo $name_major1; ?> มีสิทธิ์บอกเลิกสัญญาเช่าซื้อและรับเงินค่าเช่าซื้อที่ได้ชำระมาแล้วทั้งหมดและสามารถเรียกคืนโทรศัพท์มือถือที่เช่าซื้อได้ตามสัญญาเช่าซื้อในกรณีที่ผู้เช่าซื้อผิดนัดชำระหนี้งวดใดงวดหนึ่งเกินกว่า 15 วัน รายละเอียดตามที่ท่านทราบดีอยู่แล้วนั้น

    			<div style="margin-top: 5px;" > </div>
   		
   		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ต่อมาปรากฏว่าท่านได้ผิดนัดชำระค่าเช่าซื้อจำนวน <?php echo $chk_total2; ?> งวด เป็นเงินจำนวนทั้งสิ้น <?php echo number_format(0+$countloopnopay_pay); ?> บาท (<?php echo  convert(0+$countloopnopay_pay); ?>) และ พร้อมกับค่าติดตาม 1,000 บาท (หนึ่งพันบาทถ้วน) การกระทำที่ท่านเป็นเหตุในทางร้าน 
   		
    			<div style="margin-top: 5px;" > </div>
   		
   		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ดังนั้นข้าพเจ้าในฐานะทนายความผู้ได้รับมอบหมายอำนาจจาก นายพิสิฏฐ์ จรรยา จึงบอกเลิกสัญญาเช่าซื้อดังกล่าวนับตั้งแต่วันที่ลงหนังสือสัญญาและให้ท่านนำเงินค่าเช่าซื้อที่ งวดที่ค้าง <?php echo $chk_total2; ?> งวด และ พร้อมกับค่าติดตาม 1,000 บาท (หนึ่งพันบาทถ้วน)  พร้อมดอกเบี้ยร้อยละ 5 ต่อปีไปชำระให้แก่ร้าน <?php echo $name_major1; ?> หรือส่งมอบโทรศัพท์มือถือในสภาพที่สมบูรณ์คืนแก่ร้าน <?php echo $name_major1; ?> ภายในกำหนด 7 วันนับตั้งแต่ที่ท่านได้รับหนังสือบอกกล่าวฉบับนี้
   		
    			<div style="margin-top: 5px;" > </div>
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	อนึ่งหากท่านมีข้อสอบถามเพิ่มเติม ท่านสามารถติดต่อสอบถามได้ที่โทรศัพท์หมายเลข <?php echo $telphonedata; ?> มิฉะนั้น ข้าพเจ้ามีความจำเป็นต้องดำเนินคดีกับท่านตามกฎหมายต่อไป และผู้เช่าซื้อจะต้องชำระค่าใช้จ่ายในการดำเนินคดีทั้งหมด
    			
    			
    			
    			<div style="margin-top: 25px;" align="center" >
    			<font style=" font-size: 20px; ">  
    			
    			ขอแสดงความนับถือ
    			
    			</font>
    			</div>
    			
    			
    			<div style="margin-top: 45px;" align="center" >
    			<font style=" font-size: 20px; ">  
    			
    			( <?php echo $namedata; ?> )
    			<div style="margin-top: 5px;" > </div>
				ทนายความผู้รับมอบอำนาจ

    			
    			</font>
    			</div>
    			
    			
   		
    		</font> 
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

 