<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ประวัติการหักยอดเงินฝาก  </title>
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
		
		 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
	$data = "";
	$customer = "";
	$searchname = "";
	$producttype = "";
	$cod = "";
	$computer = "";
	$moneymonth = "";
	$moneycontact = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$getpayment = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}

	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}
	$bill_no  = $_GET["bill_no"];
	$customer  = $_GET["customer"];

	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

	$codecustomer = "";
	$sql = "SELECT * FROM list_order Where  bill_no = '". $bill_no ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$codecustomer = $objResult["codecustomer"];
	}

	$sql = "SELECT * FROM customer Where  pk = '". $customer ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$bill_no_customer = $objResult["bill_no"]; 
		
		$title = $objResult["title"];    
		$name = $objResult["name"];    
		$bridedate = $objResult["bridedate"];    
		$age = $objResult["age"];    
		$nickname = $objResult["nickname"];    
		$address = $objResult["address"];    
		$address1 = $objResult["address1"];    
		$address2 = $objResult["address2"];    
		$address3 = $objResult["address3"];    
		$address4 = $objResult["address4"];    
		$telphone = $objResult["telphone"];    
		$facebook = $objResult["facebook"];    
		$line = $objResult["line"];    
		$telphoneadd = $objResult["telphoneadd"];    
		$ashap = $objResult["ashap"];    
		$pricemonth = $objResult["pricemonth"];    
		$pricetotal = $objResult["pricetotal"];    
		$passport = $objResult["passport"];    
		$drop_people = $objResult["drop_people"];    
		$drop_sex = $objResult["drop_sex"];   
		
		
		
		$title2 = $objResult["title2"];    
		$name2 = $objResult["name2"];    
		$bridedate2 = $objResult["bridedate2"];    
		$age2 = $objResult["age2"];    
		$nickname2 = $objResult["nickname2"];    
		$address25 = $objResult["address25"];    
		$address21 = $objResult["address21"];    
		$address22 = $objResult["address22"];    
		$address23 = $objResult["address23"];    
		$address24 = $objResult["address24"];    
		$telphone2 = $objResult["telphone2"];    
		$facebook2 = $objResult["facebook2"];    
		$line2 = $objResult["line2"];    
		$telphoneadd2 = $objResult["telphoneadd2"];    
		$ashap2 = $objResult["ashap2"];    
		$pricemonth2 = $objResult["pricemonth2"];    
		$pricetotal2 = $objResult["pricetotal2"];     
		$drop_sex2 = $objResult["drop_sex2"];   
		$baby2 = $objResult["baby2"];   
		 
	} 

	$all_address = "";
	$sql = "SELECT * FROM data1 where PROVINCE_ID = '".$address1."'   order by PROVINCE_ID asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
			$all_address = $all_address." จังหวัด : ".$objResult["PROVINCE_NAME"];
	}

	$sql = "SELECT * FROM data2 where PROVINCE_ID = '".$address1."' 
	and AMPHUR_ID = '".$address2."'  order by AMPHUR_ID asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 

			$all_address = $all_address." อำเภอ : ".$objResult["AMPHUR_NAME"];
	}
	$sql = "SELECT * FROM data3 where PROVINCE_ID = '".$address1."' 
	and AMPHUR_ID = '".$address2."' and DISTRICT_CODE = '".$address3."'  order by DISTRICT_ID asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
			$all_address = $all_address." ตำบล : ".$objResult["DISTRICT_NAME"];
	}
	?>
    	       
     <table width="100%">
     	<tr>
     		<td width="50%" valign="top" > 
     		<div class="col-lg-6" style=" margin-top: 10px; " align="left">
			  <font size="3px" color="#000000" > 
				ข้อมูลลูกค้า : <?php echo $name; ?>
				<div style=" margin-top: 5px; " > </div>
				ที่อยู่  : <?php echo $all_address; ?>
				<div style=" margin-top: 5px; " > </div>
				โทร : <?php echo $telphone; ?>
				<div style=" margin-top: 5px; " > </div>
				เลขที่สัญญา : <?php echo $bill_no; ?>
				<div style=" margin-top: 5px; " > </div>
				รหัสลูกค้า : <?php echo $codecustomer; ?>
				<div style=" margin-top: 5px; " > </div>
			  </font>
			  </div> 
     		</td>
     		<td width="50%"> 
     		 <?php
						$i = 1;
						$bg = "#F8FAFD"; 


						$moneybankall = 0;
						$c_no1 = 0;
						$c_no2 = 0;
						$totalprice = 0;
						$price1 = 0;
						$price2 = 0;

						$startdate = "";
						$startdate2 = "";
						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk asc limit 1   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$startdate = $objResult2["create_date"];
						}
						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk desc limit 1   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$startdate2 = $objResult2["create_date"];
						}


						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

								$bg1 = "";
								$bg2 = "";
								$txt1 = "";
								$price = "";
								$typedata = " - ";
								$typedata2 = " - ";
								if($objResult2["typegetpayment"] == "โอนผ่านบัญชีบริษัท"){
									$bg1 = "#006400";
									$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
									$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
									$typedata = "โอนเข้าบัญชี";


									$totalprice += $objResult2["money"];
									$price1 += $objResult2["money"];
									$c_no1++;
								}
								if($objResult2["typegetpayment"] == "รับเงินสด"){
									$bg1 = "#006400";
									$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
									$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
									$typedata = "เงินสด";

									$totalprice += $objResult2["money"];
									$price1 += $objResult2["money"];
									$c_no1++;
								} 

								if($objResult2["typegetpayment"] == "ชำระหักเงินฝาก"){
									$bg1 = "#FF8C00";
									$bg2 = "#FF8C00";
									$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
									$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
									$typedata2 = "ชำระหักเงินฝาก";
									$typedata2 = " <font color = '#FFF'>  ชำระหักเงินฝาก   </font>   "; 


									$totalprice -= $objResult2["money"];
									$price2 += $objResult2["money"];
									$c_no2++;
								} 


								if($objResult2["typegetpayment"] == "ชำระ2ทาง"){
									$bg1 = "#FF8C00";
									$bg2 = "#FF8C00";
									$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
									$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
									$typedata2 = "ชำระหักเงินฝาก";
									$typedata2 = " <font color = '#FFF'>  ชำระ2ทาง   </font>   "; 

									$totalprice -= $objResult2["money"];
									$price2 += $objResult2["money"];
									$c_no2++;
								} 

								}
						?>
					  <div class="col-lg-5"  style=" margin-top: 10px; " >
						<table width="100%" border="1" id="customers">
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">  &nbsp;  เลขที่สัญญาอ้างอิง  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $bill_no; ?> &nbsp;  </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  ชื่อเจ้าของสัญญา  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $name; ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รอบทีเริ่มฝาก  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php  
									 if(!empty($startdate)){
										echo DateThai($startdate)." ".DateThai2($startdate) ." ถึงวันที่ ".  DateThai($startdate2)." ".DateThai2($startdate2);  
									 } 
									 ?> 
									  &nbsp; </font>
								</td>
							</tr>
							<?php 
							$sql2 = "SELECT * FROM money_customer_bank   where bank != '' and bill_no = '".$bill_no."'  Group by bank  order by pk desc    ";  
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{    
								$nambank = ""; 
								$sql_bank = "SELECT * FROM bank   where pk = '".$objResult2["bank"]."'   order by pk desc    ";  
								$query_bank = mysqli_query($con,$sql_bank); 
								while($objResult_bank = mysqli_fetch_array($query_bank))
								{   
									$nambank = $objResult_bank["name"];
								}
								$c_nobank = 0; 
								$sql_bank = "SELECT * FROM money_customer_bank   
								where bank = '".$objResult2["bank"]."' and bill_no = '".$bill_no."'   order by pk desc    ";  
								$query_bank = mysqli_query($con,$sql_bank); 
								while($objResult_bank = mysqli_fetch_array($query_bank))
								{   
									$c_nobank++;
								}
							?>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $nambank; ?>  &nbsp; </font>
								</td>
								<td> 
								  <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_nobank); ?> ครั้ง </font>   
								</td>
							</tr>
							<?php } ?>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รายการฝาก  &nbsp; </font>
								</td>
								<td> 
								<table width="100%" id="customers" >
									<tr>
										<td width="50%" height="0px" style=" border: 1px solid #FFF; "> <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_no1); ?> รายการ </font> </td>
										<td width="50%" height="0px" style=" border: 1px solid #FFF; " align="right" > <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$price1, '2', '.', ','); ?>   &nbsp;  </font> </td> 
									</tr>
								</table>  
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รายการหักเงิน  &nbsp; </font>
								</td>
								<td> 
								<table width="100%" border="0" id="customers" >
									<tr>
										<td width="50%" style=" border: 1px solid #FFF; "> <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_no2); ?> รายการ  &nbsp;  </font> </td>
										<td width="50%"  style=" border: 1px solid #FFF; " align="right" > <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$price2, '2', '.', ','); ?>   &nbsp;  </font> </td> 
									</tr>
								</table>  
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  ยอดเงินคงเหลือ  &nbsp; </font>
								</td>
								<td align="right">  
								  <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$totalprice, '2', '.', ','); ?>  &nbsp; 
								</td>
							</tr>
						</table>
					  </div>
     		
     		</td>
     	</tr>
     </table>            
       
      <div class="col-lg-12"  align="left" style="margin-top: 13px; "  >  
	<div class="table-responsive"  >
	<table id="customer"     > 
	<thead>  
		 <tr>
			<td  width="4%" bgcolor="#BEC6CB" height="33px;" style="     "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่    </font></div></td>    
			<td  width="2%" bgcolor="#BEC6CB" style="  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เวลา  </font></div></td>   
			<td  width="3%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ     </font></div></td>   
			<td  width="5%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ฝากเงิน/ หักเงินค่าสัญญา   </font></div></td> 
			<td  width="3%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></td> 
			<td  width="3%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบการฝาก   </font></div></td>   
			<td  width="4%" bgcolor="#BEC6CB" style="  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบการชำระสินเชื่อ   </font></div></td>    
			<td  width="4%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำรายการ   </font></div></td>  
			<td  width="3%" bgcolor="#BEC6CB" style="   "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></td>  
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

		$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
	}



	$moneybankall = 0;
	$totalprice = 0;
	$sql2 = "SELECT * FROM money_customer_bank  
		where money != '' and bill_no = '".$bill_no."'  
		order by pk asc   ";  

	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

		$name_pro = " - ";
		$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$name_pro = $objResult_c["name"]; 
		}


		$bg1 = "";
		$bg2 = "";
		$txt1 = "";
		$price = "";
		$typedata = " - ";
		$typedata2 = " - ";
		if($objResult2["typegetpayment"] == "โอนผ่านบัญชีบริษัท"){
			$bg1 = "#006400";
			$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
			$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
			$typedata = "โอนเข้าบัญชี";


			$totalprice += $objResult2["money"];
		}
		if($objResult2["typegetpayment"] == "รับเงินสด"){
			$bg1 = "#006400";
			$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
			$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
			$typedata = "เงินสด";

			$totalprice += $objResult2["money"];
		} 

		if($objResult2["typegetpayment"] == "ชำระหักเงินฝาก"){
			$bg1 = "#FF8C00";
			$bg2 = "#FF8C00";
			$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
			$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
			$typedata2 = "ชำระหักเงินฝาก";
			$typedata2 = " <font color = '#FFF'>  ชำระหักเงินฝาก   </font>   "; 


			$totalprice -= $objResult2["money"];
		} 


		if($objResult2["typegetpayment"] == "ชำระ2ทาง"){
			$bg1 = "#FF8C00";
			$bg2 = "#FF8C00";
			$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
			$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
			$typedata2 = "ชำระหักเงินฝาก";
			$typedata2 = " <font color = '#FFF'>  ชำระ2ทาง   </font>   "; 

			$totalprice -= $objResult2["money"];
		} 

		$name_pro = " - ";
		$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$name_pro = $objResult_c["name"]; 
		}


	?>
	<tr style="background-color: <?php echo $bg ?>; "> 

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 

	<td style=" border-left: 0px solid #F2F2F2; " bgcolor="<?php echo $bg1; ?>"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
	<?php 
		 echo $txt1; 
	?>    
	</font></div></td>
	<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
	<?php 
		 echo $price; 
	?>    
	</font></div></td>

	<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
	<?php 
		 echo number_format(0+$totalprice); 
	?>    
	</font></div></td>

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $typedata; ?>   </font></div></td> 
	</font></div></td>
					
	<td style=" border-left: 0px solid #F2F2F2; " bgcolor="<?php echo $bg2; ?>" ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $typedata2; ?>   </font></div></td>  





	<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
	<?php 
		 echo $name_pro; 
	?>    
	</font></div></td>


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 


	</tr>  
	<?php $i++;  } ?>
	</tbody> 
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