<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  พิมพ์ใบสัญญา  </title>
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
	    $productbacnk = $_GET["product"];
	    $codecustomerback = $_GET["codecustomer"];
	    $bill_no_rf = $_GET["contact"];
	
	
		if(empty($bill_no_rf)){
			 
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
				$productbacnk = $objResult2["menu_id"];  
			
				$appleid = $objResult2["appleid"];   
				$password = $objResult2["password"];   
			
				$bank = $objResult2["bank"];   
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
			$p_dataname = "";
			$codeno = "";
			$sql = "SELECT * FROM product where pk = '".$productbacnk."'   order by pk asc  "; 
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
			}
											
			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major =  $objResult_c["name"]; 
			}	 
		}    
			
			
		}else{
			
			
		$sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone FROM list_order_cleam  a Inner Join customer b On   a.customer = b.pk 
		 where a.bill_no != '' and a.biil_ref = '".$bill_no_rf."'  order by a.pk  ";  
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
				$productbacnk = $objResult2["menu_id"];  
			
				$appleid = $objResult2["appleid"];   
				$password = $objResult2["password"];   
			
				$bank = $objResult2["bank"];   
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
			$p_dataname = "";
			$codeno = "";
			$sql = "SELECT * FROM product where pk = '".$productbacnk."'   order by pk asc  "; 
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
			}
				 	 
		}  
			
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
 	
	
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="65%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b> วันที่ทำสัญญา   <?php echo DateThai($create_date)." ".DateThai2($create_date); ?>   </b> 
			 	 <div style=" margin-top: 3px; " > </div>
			 	  
			 	 <b>  รหัสลูกค้า     <?php echo $codecustomer; ?>  </b>  
			 	 
				</font>
			 </div>
			 </td>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	<b>   <?php echo $name_major1; ?> เบอร์โทร <?php echo $name_major3; ?>  </b> 
			 	 <div style=" margin-top: 3px; " > </div>
			 	<b>    <?php echo $name_major2; ?>   </b>  
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>		
 	 
  	<table width="100%" border="0"   >  
		  <tr>
			 <td align="center" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 2px; "  >  
				<font size="2px" style="font-size: 20px;">   
			 	 <b>  หนังสือสัญญาเช่าซื้อ    <?php echo $name_major1; ?>  </b> 
			 	 
			 	 <div style=" margin-top: 5px; " > </div>
			 	  <font size="2px" style="font-size: 15px;">     สินค้าจาก   </font>
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>	
                                                                                	                                       
  	<table width="100%" border="0" style=" display: none; "   > 
  	  
		  <tr>
			 <td align="left" width="60%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b>  ประเภท   </b> <?php echo $name_create3; ?>
				</font>
			 </div>
			 </td>
			 <td align="left"   valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b>  สินค้าจาก   </b> <?php echo $name_create2; ?>
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>	        
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  ชื่อ-นามสกุล        </b> <?php echo $name; ?> 
			 	    &nbsp; 
			 	  <b>  ชื่อ - เฟส       </b> <?php echo $facebook; ?>
			 	    &nbsp;    
			 	  <b> เบอร์โทร      </b> <?php echo $telphone; ?>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>                                                                                                                                    
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b> Apple id =   </b>  <?php echo $appleid; ?> 
			 	    &nbsp; 
			 	 <b>  รหัสผ่าน =  </b>  <?php echo $password; ?>  
			 	    &nbsp;  
			 	 <b> สินค้า  </b>  <?php echo $p_dataname; ?>   
			 	    &nbsp; 
			 	 <b>  สี   </b>  <?php echo $p_data4; ?>    
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>       
                                   
                                                                                                                                                                                                                                                                                                                                                                                           
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b> ราคาสินค้า  </b> <?php echo number_format(0+$moneydata); ?> บาท  
			 	    &nbsp; 
			 	 <b> เงินดาวน์    </b> <?php echo number_format(0+$moneydown); ?> บาท  
			 	    &nbsp;  
			 	 <b> ค่า COD   </b> <?php echo number_format(0+$cod); ?> บาท  
			 	    &nbsp;   
			 	 <b> คงเหลือ  </b> <?php echo number_format(0+$moneydata-$moneydown); ?> บาท 
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>  
                                                                                                                                                                                                                                                                                                                                                 
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	 <b> ผ่อนเดือนละ  </b> <?php echo number_format(0+$totalprice3); ?> บาท  
			 	    &nbsp; &nbsp;  
			 	 <b> จำนวน   </b> <?php echo number_format(0+$totalprice2); ?> เดือน 
			 	    &nbsp; &nbsp;   
			 	 <b> เริ่มชำระ - สิ้นสุดวันที่   </b>  
			 	 <?php echo DateThai($startdate)." ".DateThai2($startdate); ?> 
			 	 - 
			 	 <?php echo DateThai($endate)." ".DateThai2($endate); ?>   
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>  
  	<table id="customers" style="margin-top: 15px; "    >
	<thead> 
	<tr>
	<td width="1%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">  <b>  งวดที่    </b>  </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    จำนวนเงิน (บาท)  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    วันที่ต้องโอน  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    วันที่ลูกค้าโอน  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    ผู้รับเงิน   </b>   </font></div></td>    
	   
	</tr>
	</thead>  						 
	<tbody>
	<?php 
	$i = 1;
	$sql2 = " SELECT * FROM history_payment where bill_no = '".$bill_no."'  order by pk asc    ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{ 
		
			$namestaff = "";
		if(!empty($objResult2["income"])){  
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   "; 
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{ 
				$namestaff = $objResult["name"]; 
			}
		}
	?>
	<tr >  								
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>  </font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo DateThai($objResult2["datestart"])." ".DateThai2($objResult2["datestart"]); ?>
	</font></div></td>  		 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; <?php
		if(!empty($objResult2["income"])){ 
		echo DateThai($objResult2["date_start2"])." ".DateThai2($objResult2["date_start2"]);
		}
		?>
	</font></div></td> 		 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; <?php echo $namestaff; ?>
	</font></div></td>   
	</tr>
	<?php $i++; } ?>
	</tbody> 
	</table> 
	
	   
	<div align="center" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	 	**ราคานี้รวมค่าประกันสินค้าแล้ว (เงื่อนไขการรับประกันเป็นไปตามที่ทางบริษัทกำหนด)**
	 </font>	
	</div>      
	         
	<div align="left" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	 	<b>   เงื่อนไขการผ่อนชำระสินค้า  </b>
	 </font>	
	</div>    
	<div align="left" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	   <div style="margin-left: 10px;"> 
	 	1.	ผู้เช่าซื้อจะต้องชำระเงินตามเวลา หรือ ในระยะเวลาที่ทางร้านกำหนดให้   <br> 
		2.	กรณีค้างชำระเกิน 5 วัน จะมีค่าเบี้ยปรับล่าช้าและทางบริษัทจะทำการล็อกเครื่องทันที เมื่อผู้เช่าซื้อขาดการติดต่อ  <br> 
		3.	กรณีค้างชำระเกิน 15 วัน จะมีการคิดค่าติดตาม พร้อมเบี้ยปรับขั้นต่ำ 500 บาท ขึ้นไป  <br> 
		4.	กรณีค้างชำระเงินเกิน30วันทางบริษัทจะทำการเรียกสินค้าคืนจากผู้เช่าซื้อโดยผู้เช่าซื้อจะต้องคืนสินค้ามายังบริษัทในสภาพสมบูรณ์   <br> 
		5.	กรณีผ่อนจ่ายยังไม่หมดสินค้ายังถือว่าเป็นกรรมสิทธิ์ของทางบริษัทอย่างถูกต้องตามกฎหมาย เช่าซื้อไม่มีสิทธ์ขายหรือส่งต่อให้ผู้อื่น <br> จนกว่าจะผ่อนชำระหมด แล้วทางบริษัทจะถอน ระบบล็อกเครื่องให้   <br> 
		6.	กรณีที่เรียกสินค้าคืนแล้ว ผู้เช่าซื้อไม่ส่งมอบให้ ทางบริษัทจะดำเนินคดีกับผู้เช่าซื้อ ซึ่งจะมีความผิดทางคดีอาญาฐานยักยอกทรัพย์ ***ตามประมวลกฎหมายอาญามาตรา 352 ต้องโทษจำคุกไม่เกิน 3ปี***  <br> 
		7.	กรณีผ่อนไม่ไหว สามารถคืนเครื่อง รับเงินดาวน์กลับ ตามเงื่อนไขบริษัทฯ และลูกค้าจะต้องชดใช้ค่าภาษี (vat) คืนให้กับบริษัทฯ ตามยอดสินค้า  <br>  
		</div>  
	 </font>	
	</div>      
	         
	<div align="left" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	 	<b>   ยินยอมตกลงตามเงื่อนไข  </b>
	 </font>	
	</div> 
     <table width="70%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;"> (  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;    
				 ) </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ผู้เช่าซื้อ  </font> 
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;"> (  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;    
				 ) </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> ผู้อนุมัติสินค้า  </font> 
			 </td> 
		 </tr> 
	  </table>    
	         
	<div align="left" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	 	<b>   เลขประจำเครื่อง   </b>  <?php echo $codeno; ?>
	 </font>	
	</div> 
	           
	<div align="left" style="margin-top: 5px;">
	 <font size="2px" style="font-size: 18px;">   
	 	<b>   วิธีการชำระเงิน  โอนเข้าบัญชี **นี้ เท่านั้น** บัญชีอื่น ระบบไม่ตัดยอดให้   </b>   
	 </font>	
	</div>   
           
    <?php 
	$sql = "SELECT * FROM QRdata Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$data1 = $objResult["data1"]; 
		$img = $objResult["img"]; 
		$bill_no = $objResult["bill_no"]; 
				 
	} 


	$img = "";
	$sql = "SELECT * FROM qrimage Where  pk = '".$qrdata."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$img = $objResult["img"];  
				 
	}  
	?>
	           
	<div align="left" style="margin-top: 0px;">
	 <font size="2px" style="font-size: 18px;">   
	 	
		 <table width="70%">
		 	<tr>
		 		<td>   
	 			<font size="2px" style="font-size: 18px;">
		 		1.	{ชื่อบัญชี}  <?php echo $nambankfull; ?> 
				<?php echo $data1; ?>
			    </font>	
		 		</td>
		 		<td>   
				<?php
					$showimg = " ";
					if(!empty($img)){ 
					$showimg = "../img/".$img;
					}
				 ?>
		 		<img src="<?php echo $showimg; ?>" style="width: 100px;" >
		 		
		 		</td>
		 	</tr>
		 </table>
	 </font>	
	</div>  
	
	
	
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

 