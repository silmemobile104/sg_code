<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ใบวางบิล  </title>
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
	
	$sql2 = "  SELECT *  FROM member_bank 
	where  bill_no != ''  and  pasy_bill = '".$bill_no."'  Group By bill_no order by pk asc   ";   
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  
		 
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"];
		$pasy_onoff = $objResult2["pasy_onoff"];
		$member = $objResult2["member"];
		 
		 
	}  			 
	
	$sql = "SELECT * FROM major Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$m_name = $objResult["name"];  
		$m_address = $objResult["address"];
		$m_telphone = $objResult["telphone"];   
		$m_pasy = $objResult["pasy"];    
	} 
	
	
	
		 
		$name_customer = "";
		$telphone_customer = "";
		$address1 = "";
		$address2 = "";
		$address3 = "";
		$address4 = "";
		$all_address = "";
		$sql = " SELECT * FROM customer where pk = '".$member."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
			$telphone_customer =  $objResult["telphone"];
			$address1 = $objResult["address1"];
			$address2 = $objResult["address2"];
			$address3 = $objResult["address3"];
			$address4 = $objResult["address4"];


			$all_address = "";
			$sql_c = "SELECT * FROM data1 where PROVINCE_ID = '".$address1."'   order by PROVINCE_ID asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
					$all_address = $all_address." จังหวัด : ".$objResult_c["PROVINCE_NAME"];
			}

			$sql_c = "SELECT * FROM data2 where PROVINCE_ID = '".$address1."' 
			and AMPHUR_ID = '".$address2."'  order by AMPHUR_ID asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 

					$all_address = $all_address." อำเภอ : ".$objResult_c["AMPHUR_NAME"];
			}
			$sql_c = "SELECT * FROM data3 where PROVINCE_ID = '".$address1."' 
			and AMPHUR_ID = '".$address2."' and DISTRICT_CODE = '".$address3."'  order by DISTRICT_ID asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
					$all_address = $all_address." ตำบล : ".$objResult_c["DISTRICT_NAME"];
			}
			
			
			
			$all_address = $all_address." รหัสไปษรณีย์ ".$address4;
		}
	
	
	
?>
    	       
  
    	 <table width="100%" border="0"    >  
		  <tr> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 0px; margin-right: 0px; margin-top: 5px; " align="center"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> <?php echo $m_name; ?> </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $m_name; ?>   <br>  
			 	  <?php echo $m_address; ?>  โทร <?php echo $m_telphone; ?>   <br>   
			 	  เลขประจำตัวผู้เสียภาษี  <?php echo $m_pasy; ?>     
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  		</table>	
                         
    	 <table width="100%" border="0"     >  
		  <tr> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 0px; margin-right: 0px; margin-top: 2px; " align="center"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> ใบวางบิล </b>  <br>  
				</font>
			 </div>
			 </td> 
		  </tr>   
  		</table>	   
           
    	 <table width="100%" border="0"      >  
		  <tr> 
		   <td align="center" valign="top" height="0px" width="50%"   >  
		   
			 <div style=" border: 1px solid #000; height: 80px; border: 1px solid #000;  border-radius: 5px; " >
			 <table width="100%" border="0"     >  
			  <tr> 
				 <td align="center" valign="top" height="0px" width="10%"   >  
				 <div style="margin-left: 10px; margin-right: 10px; margin-top: 2px; " align="left"  >  
					<font size="2px" style="font-size: 15px;">   
					  ชื่อลูกค้า 
					  <div>  </div>
					  เอบรืดทรติดต่อ
					  <div>  </div>
					  ที่อยู่
					  <div>  </div>
					</font>
				 </div>
				 </td> 
				 <td align="left" valign="top" height="0px" width="50%"   >  
				 <div style="margin-left: 0px; margin-right: 0px; margin-top: 2px; " align="left"  >  
					<font size="2px" style="font-size: 15px;">   
					  <?php echo $name_customer; ?>
					  <div>  </div>
					  <?php echo $telphone_customer; ?>
					  <div>  </div>
					  <?php echo $all_address; ?>
					  <div>  </div>
					</font>
				 </div>
				 </td> 
			  </tr>   
 			  </table>
			  </div>	   
                         
		   </td>  
		   <td align="center" valign="top" height="0px" width="50%"    >  
		   
			 <div style=" border: 1px solid #000; height: 80px;  border: 1px solid #000; border-radius: 5px;  " >
			 <table width="100%" border="0"      >  
			  <tr> 
				 <td align="center" valign="top" height="0px" width="30%"   >  
				 <div style="margin-left: 10px; margin-right: 10px; margin-top: 2px; " align="left"  >  
					<font size="2px" style="font-size: 15px;">   
					  เลขที่
					  <div>  </div>
					  วันที่ 
					  <div>  </div> 
					   &nbsp;
					  <div>  </div3
					></font>
				 </div>
				 </td> 
				 <td align="left" valign="top" height="0px" width="50%"   >  
				 <div style="margin-left: 0px; margin-right: 0px; margin-top: 2px; " align="left"  >  
					<font size="2px" style="font-size: 15px;">   
					   <?php echo $bill_no; ?> 
					  <div>  </div>
					   <?php echo DateThai($pasy_createdate)." ".datethai2($pasy_createdate);?> 
					  <div>  </div>
					   &nbsp;
					  <div>  </div>
					</font>
				 </div>
				 </td> 
			  </tr>   
			 </table>	
			  </div>	   
                                                                                                       
			            
			 </td> 
		  </tr>   
  		</table>	                                                                                                                       
                                                                                                       
			                                                                                                                                             
		 
	<table width="100%" border="1" id="customers" style="margin-top: 15px; "    > 
	
	<tr >
	<td width="4%"    ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    #    </font></div></td>    
	<td width="4%"   ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่ทำี่ยการถอน  </font></div></td>   
	<td width="4%"   ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ถอน    </font></div></td>  
	<td width="4%"   ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ประเภท     </font></div></td>   
	<td width="4%"   ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน    </font></div></td>  
	</tr>   
	<tbody> 
		<tr >
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;  ">
	<?php 
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 

 
	$sql2 = "  SELECT *  FROM member_bank  where  bill_no != ''  and  pasy_bill = '". $pasy_bill ."' Group By bill_no  order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}


		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pk"];
		$bill_no = $objResult2["bill_no"];
		$total_price = $objResult2["price"];
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"]; 
		$pasy_createby = $objResult2["pasy_createby"];



		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}

		$name_customer = "-"; 
		$sql = "SELECT * FROM customer where pk = '".$objResult2["member"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}

	?>  

		 <div align="center" style=" margin-bottom: 5px; "><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div>  
 
		<?php $i++;  $totalprice1+=$total_price;  } ?>
		</td> 
		 
	 	<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;  ">
	<?php 
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 


	$sql2 = "  SELECT *  FROM member_bank  where  bill_no != ''  and  pasy_bill = '". $pasy_bill ."' Group By bill_no  order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}


		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pk"];
		$bill_no = $objResult2["bill_no"];
		$total_price = $objResult2["price"];
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"]; 
		$pasy_createby = $objResult2["pasy_createby"];



		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}

		$name_customer = "-"; 
		$sql = "SELECT * FROM customer where pk = '".$objResult2["member"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}
		?>  

		 <div align="center" style=" margin-bottom: 5px; "><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $bill_no; ?>  </font></div>  

 
     
		<?php $i++;  $totalprice1+=$total_price;  } ?>
		</td>
		
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;  ">
	<?php 
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 


	$sql2 = "  SELECT *  FROM member_bank  where  bill_no != ''  and  pasy_bill = '". $pasy_bill ."' Group By bill_no  order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}


		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pk"];
		$bill_no = $objResult2["bill_no"];
		$total_price = $objResult2["price"];
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"]; 
		$pasy_createby = $objResult2["pasy_createby"];



		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}

		$name_customer = "-"; 
		$sql = "SELECT * FROM customer where pk = '".$objResult2["member"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		} 
		?>  

		 <div align="center" style=" margin-bottom: 5px; "><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($pasy_createdate)."".DateThai2($pasy_createdate); ?>  </font></div>  

 
     
		<?php $i++;  $totalprice1+=$total_price;  } ?>
		</td>
		
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;  ">
	<?php 
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 


	$sql2 = "  SELECT *  FROM member_bank  where  bill_no != ''  and  pasy_bill = '". $pasy_bill ."' Group By bill_no  order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}


		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pk"];
		$bill_no = $objResult2["bill_no"];
		$total_price = $objResult2["price"];
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"]; 
		$pasy_createby = $objResult2["pasy_createby"];



		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}

		$name_customer = "-"; 
		$sql = "SELECT * FROM customer where pk = '".$objResult2["member"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}
		?>  

		 <div align="center" style=" margin-bottom: 5px; "><font size="3px" color="Black" style=" font-size: 13px; " > รายการถอน  </font></div>  

 
     
		<?php $i++;  $totalprice1+=$total_price;  } ?>
		</td>
		
		 
		
		<td  width="4%"  style=" border: 1px solid #FFF;  border-right: 1px solid #000;  ">
	<?php 
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 


	$sql2 = "  SELECT *  FROM member_bank  where  bill_no != ''  and  pasy_bill = '". $pasy_bill ."' Group By bill_no  order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}


		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pk"];
		$bill_no = $objResult2["bill_no"];
		
		
		$percent = 0;
		if(!empty($objResult2["percent"])){ 
			$percent = $objResult2["price"] * ($objResult2["percent"] / 100);
			
			
			$total_price = $objResult2["price"] - $percent;
		}else{
			$total_price = $objResult2["price"];
		} 
		
		
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"]; 
		$pasy_createby = $objResult2["pasy_createby"];



		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}

		$name_customer = "-"; 
		$sql = "SELECT * FROM customer where pk = '".$objResult2["member"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_customer =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}
		?>  

		 <div align="center" style=" margin-bottom: 5px; "><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price); ?>  </font></div>  

 
     
		<?php $i++;  $totalprice1+=$total_price;  } ?>
		</td> 
		</tr>  
		
		<tr  > 
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000; border-bottom: 1px solid #000;"> 
		<?php for($loop = $i; $loop <= 20; $loop++ ){ ?>  
		  <div>   &nbsp;    </div>
		<?php } ?>  
		</td>  
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;   border-bottom: 1px solid #000;"> 
		<?php for($loop = $i; $loop <= 20; $loop++ ){ ?>  
		  <div>   &nbsp;    </div>
		<?php } ?>  
		</td>  
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;   border-bottom: 1px solid #000;"> 
		<?php for($loop = $i; $loop <= 20; $loop++ ){ ?>  
		  <div>   &nbsp;    </div>
		<?php } ?>  
		</td>  
		<td  width="4%"  style=" border: 1px solid #FFF; border-left: 1px solid #000;   border-bottom: 1px solid #000;"> 
		<?php for($loop = $i; $loop <= 20; $loop++ ){ ?>  
		  <div>   &nbsp;    </div>
		<?php } ?>  
		</td>    
		<td  width="4%"  style=" border: 1px solid #FFF; border-right: 1px solid #000;   border-bottom: 1px solid #000;"> 
		<?php for($loop = $i; $loop <= 20; $loop++ ){ ?>  
		  <div>   &nbsp;    </div>
		<?php } ?>  
		</td>  
		</tr>
		
		
		
		<tr > 
		<td  width="4%" colspan="2" align="center"  > 
		  <font size="2px" style="font-size: 17px;">   
		  รวมเป็นเงิน    
		</font>
		</td>  
		<td  width="4%" colspan="2"  align="center"  > 
		  <font size="2px" style="font-size: 17px;">   
		  <?php echo Convert($totalprice1); ?>    
		</font>
		</td>  
		<td  width="4%" colspan="2"  align="center"  > 
		  <font size="2px" style="font-size: 17px;">   
		  <?php echo  number_format(0+$totalprice1); ?>      
		</font>
		</td>  
		</tr>
		
		
		 
	</tbody>  		 
	</table> 
		
	<div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ในนาม  </font> 
			<br> 
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ผู้ทำรายการถอน  </font> 
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> วันที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </font> 
    	<br> 
    	<br> 
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> &nbsp;  </font> 
			<br> 
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> พนักงานทำรายการ  </font> 
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> วันที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </font> 
    	<br> 
    	<br> 
			 </td> 
		 </tr> 
	  </table> 
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