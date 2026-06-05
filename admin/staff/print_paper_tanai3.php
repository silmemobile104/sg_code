<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ใบเสร็จ  </title>
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
	    $bill_no = $_GET["pasy_bill"];
		$sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone FROM list_order  a Inner Join customer b On   a.customer = b.pk 
		 where a.bill_no != '' and a.tanai_pasy_bill = '".$bill_no."'  order by a.pk  ";  
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
			
			
				$qrdata = $objResult2["qrdata"];  
			
			
				$priceorder = $objResult2["priceorder"];    
				$c_price_back = $objResult2["c_total"];

				$moneydown = $objResult2["moneydown"];    
				$c_moneydown = $objResult2["c_moneydown"];    
				$c_discount = $objResult2["c_discount"];    
				$c_cancel = $objResult2["c_cancel"];    
				$c_rowback = $objResult2["c_rowback"];    
				$c_total = $objResult2["c_total"];    
				$c_moneylost = $objResult2["c_moneylost"];   
				$c_company = $objResult2["c_company"];  
			
			
				$tanaistatus1 = $objResult2["tanaistatus1"];   
				$tanaistatus2 = $objResult2["tanaistatus2"];   
				$tanaistatus3 = $objResult2["tanaistatus3"];   
				$$tanai_pasy_by = $objResult2["tanai_pasy_by"];   
				$tanai_pasy_addon = $objResult2["tanai_pasy_addon"];   
				$customer = $objResult2["customer"];   
				$tanai_pasy_date = $objResult2["tanai_pasy_date"];   

		 
			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '". $$tanai_pasy_by ."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_create =  $objResult["name"];
			}
											   
			

			$name_customer = "";
			$address = "";
			$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer = $objResult["name"];
				$address = $objResult["address"];
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
		}    
	?> 
 	
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="13%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 
					<img src="../logo.png" style=" width: 100%; " >
			 	 
				</font>
			 </div>
			 </td>
			 <td align="left" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	<b>   <?php echo $name_major1; ?>    </b> 
			 	 <div style=" margin-top: 3px; " > </div>
			 	<b>    <?php echo $name_major2; ?>   </b>  
			 	 <div style=" margin-top: 3px; " > </div>
			 	<b>  เบอร์โทร <?php echo $name_major3; ?> &nbsp; เลขที่ผู้เสียภาษี <?php echo $name_major4; ?>   </b>  
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>		
 	 
  	<table width="100%" border="0" style=" margin-top: 15px; "   >  
		  <tr>
			 <td align="center" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 2px; "  >  
				<font size="2px" style="font-size: 20px;">   
			 	 <b>  ใบเสร็จ    </b> 
			 	 
			 	 <div style=" margin-top: 5px; ">  </div>
			 	  <b>  ชำระค่าบริการดำเนินคดี    </b> 
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>	
                                                                                	                                       
  	 	        
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  ชื่อ-นามสกุล        </b> <?php echo $name_customer; ?> 
			 	 <div style=" margin-top: 3px; " > </div>
			 	  <b>  ที่อยู่      </b> <?php echo $address; ?>
			 	 <div style=" margin-top: 3px; " > </div>
			 	  <b> เลขประจำตัวผู้เสียภาษี      </b>  
				</font>
			 </div>
			 </td> 
			 <td align="left"  valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b> เลขที่   </b> <?php echo $bill_no; ?> 
			 	 <div style=" margin-top: 3px; " > </div>
			 	  <b> วันที่ <?php echo DateThai($tanai_pasy_date)." ".DateThai2($tanai_pasy_date); ?>     </b> 
			 	 <div style=" margin-top: 3px; " > </div>
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>                                                                                                                                    
  	        
                                    
  	<table id="customers" style="margin-top: 15px; "    >
	<thead> 
	<tr>
	<td width="1%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">  <b>  ลำดับ    </b>  </font></div></td>   
	 
	<td width="20%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>   รายการ  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>  จำนวน  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>  ราคา/หน่วย  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>  จำนวนเงิน   </b>   </font></div></td>    
	   
	</tr>
	</thead>  						 
	<tbody>
	<?php 
	$i = 1;
	$totalall = 0;
	$sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone FROM list_order  a Inner Join customer b On   a.customer = b.pk 
		 where a.bill_no != '' and a.tanai_pasy_bill = '".$bill_no."'  order by a.pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{   
				$bill_no1 = $objResult2["bill_no"]; 
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
			
			
				$qrdata = $objResult2["qrdata"];  
			
			
				$priceorder = $objResult2["priceorder"];    
				$c_price_back = $objResult2["c_total"];

				$moneydown = $objResult2["moneydown"];    
				$c_moneydown = $objResult2["c_moneydown"];    
				$c_discount = $objResult2["c_discount"];    
				$c_cancel = $objResult2["c_cancel"];    
				$c_rowback = $objResult2["c_rowback"];    
				$c_total = $objResult2["c_total"];    
				$c_moneylost = $objResult2["c_moneylost"];   
				$c_company = $objResult2["c_company"];  
			
			
				$tanaistatus1 = $objResult2["tanaistatus1"];   
				$tanaistatus2 = $objResult2["tanaistatus2"];   
				$tanaistatus3 = $objResult2["tanaistatus3"];   
				$$tanai_pasy_by = $objResult2["tanai_pasy_by"];   
				$tanai_pasy_addon = $objResult2["tanai_pasy_addon"];   
				$customer = $objResult2["customer"];   
				$tanai_pasy_date = $objResult2["tanai_pasy_date"];   

		 
			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '". $$tanai_pasy_by ."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_create =  $objResult["name"];
			}
											   
			

			$name_customer = "";
			$address = "";
			$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer = $objResult["name"];
				$address = $objResult["address"];
			}
			
			$priceother = 0;
			$priceothershow = " ................ ";
			if(!empty($objResult2["priceother"])){
				$priceother = $objResult2["priceother"];
				$priceothershow = $objResult2["priceother"];
			}
			$tanai_status1 = $objResult2["tanai_status1"];
			$tanai_status2 = $objResult2["tanai_status2"];
			$tanai_status3 = $objResult2["tanai_status3"];
			$tanai_payment = $objResult2["tanai_payment"];

			$tanai_momey1 = $objResult2["tanai_momey1"];
			$tanai_momey2 = $objResult2["tanai_momey2"];

	?>
	<tr >  								
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
	<td ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<?php echo $bill_no1; ?>  
	<div style=" margin-top: 0px; "></div>
	<?php echo $tanai_status1; ?> &nbsp;  - &nbsp; <?php echo $tanai_status2; ?>   
	</div>
	
	</font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(1); ?>  </font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$priceother, '2'); ?>  </font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$priceother, '2'); ?>  </font></div></td>  
	</tr>
	<?php $i++; $totalall+= $priceother;  } ?>
	
	<tr  >  								
	<td colspan="3" ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; "></div>
	<?php 
		echo Convert($totalall); 
		?>  
	<div style=" margin-top: 0px; "></div>
	</font></div></td> 					
	<td  ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 รวมเป็นเงิน
	<div style=" margin-top: 0px; "></div>
	 Total
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 				
	<td  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 <?php echo number_format(0+$totalall, '2'); ?> 
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 
	 
	</tr>
	<tr  >  								
	<td colspan="3" rowspan="2" ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<b>  
	<div style=" margin-top: 10px; margin-left: 5px; margin-right: 5px; margin-bottom: 10px; ">
	<div style=" margin-top: 0px; "></div>
	หมายเหตุ :
	<div style=" margin-top: 0px; "></div>
	1. กรณีชำ ระเงินโดยเช็คกรุณาสั่งจ่ายเช็คขีดคร่อมในนาม "บริษัท ตัวอย่าง จำกัด" เท่านั้น
	<div style=" margin-top: 0px; "></div>
	2. สินค้าตามรายการข้างต้นแม้จะได้ส่งมอบให้แก่ผู้ซื้อแล้วก็ยังคงเป็นทรัพย์สินของผู้ขายจนกว่าผู้ซื้อจะได้ชำระเงินเรียบร้อยแล้ว
	<div style=" margin-top: 0px; "></div>
	3. บริษัทฯ ขอสงวนสิทธิ์ในการแก้ไขใบกำกับภาษีภายใน 7 วัน นับจากวันที่ระบุในใบก า กับภาษี (ผิด ตก ยกเว้น E. & OE.)
	<div style=" margin-top: 0px; "></div> 
	</div>
	</b>
	</font></div></td> 					
	<td  ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 ภาษี 7% 
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 				
	<td  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 <?php 
		
		$pasy = 0;
		if($tanai_pasy_addon == "คิด"){
			$pasy = $totalall * 0.07;
			echo number_format(0+$pasy, '2');
		} 
		
		?> 
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 
	 
	</tr>
	<tr  >  				 
	<td  ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 ยอดสุทธิ 
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 				
	<td  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
	<div style=" margin-top: 0px; "></div>
	 <?php echo number_format(0+$totalall+$pasy, '2'); ?> 
	<div style=" margin-top: 0px; "></div>  
	</div>
	</font></div></td> 
	 
	</tr>
	
	
	</tbody> 
	</table> 
	    
	          
	     
      	<table id="customers" width="100%" border="1" align="center"  style="margin-top: 25px;">
		 <tr>
			 <td align="left" width="33.33%"> 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="  font-size: 12px; "> ได้รับสินค้าตามรายการข้างต้นไว้เรียบร้อยแล้ว  </font> 
			<br> 
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 ผู้รับสินค้า.................................................................................................... </font>
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 วันที่........................................................................................................ </font>
    	<br>  
			 </div>
			 </td> 
			 <td align="center" width="30%">  
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="  font-size: 12px; ">  &nbsp;  </font> 
			<br> 
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 ผู้ส่งสินค้า................................................................................. </font>
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 วันที่.............................................................................. </font>
    	<br>  
			 </div>
			 </td> 
			 <td align="center" width="36.33%"> 
	<div style=" margin-top: 0px; margin-left: 5px; margin-right: 5px; ">
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="  font-size: 12px; "> ใน นาม บริษัท เอสจี ลิส่ง พลัส จำกัด  </font> 
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 ผู้รับสินค้า........................................................................................................ </font>
				 <div style=" margin-top: 5px; "> </div>  
				<font size="2px" color="Black" style="font-size: 12px;"> 
    		 ผู้มีอำนาจลงนาม </font>
    	<br>  
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

 