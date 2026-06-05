<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  สเตทเม้นชำระหนี้  </title>
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
 if(empty($_GET["datestart"])){
		$loaddate = date('d-m-Y'); 
	}else{ 
		$loaddate = date("d-m-Y", strtotime($_GET["datestart"])); 
	}
		$name = "";  
		$address = ""; 
		$telphone = "";   
		$line = "";   
		$password = ""; 
		$repassword = ""; 
		$username = ""; 
		$code_member = ""; 
		$status = "";  
		$img = ""; 
		$address1 = ""; 
		$address2 = ""; 
		$address3 = ""; 
		$address4 = ""; 


			$bill_no = $_GET["bill_no"]; 
			$daytotal = 0; 
			$pricemoney = 0; 
			$money = 0; 
			$dayprice = 0; 
			$totalprice1 = 0; 
			$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  "; 
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{   
				$onoff = $objResult["onoff"]; 
				$onoff = $objResult["onoff"]; 
				$onoff_copy = $objResult["onoff_copy"]; 
				$showstart = $objResult["startdate"]; 
				$showend = $objResult["endate"]; 
				$customer = $objResult["customer"]; 
				$closebill = $objResult["closebill"]; 
				$dayprice = $objResult["dayprice"]; 
				$daytotal = $objResult["daytotal"]-1; 
				$daytotal_end = $objResult["daytotal"]; 
				$dayprice_end = $objResult["dayprice"]; 
				$totalprice1 = $objResult["dayprice"]*$objResult["daytotal"]; 
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

			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
			$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

			if($closebill == "หมดหนี้"){
				$code_check2 = "";
			}else{ 
				$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
				$code_check2 = "";
			} 
 			  				
			$no_p1 = 0;
			$no_p2 = 0;
			$no_p3 = 0;
			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($loaddate)));
			$code_check = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_npl = " SELECT * FROM history_payment Where  bill_no = '".$bill_no."'  ".$code_check."  order by pk asc ";  
			$query_npl = mysqli_query($objCon,$sql_npl); 
			 
			while($objResult_npl = mysqli_fetch_array($query_npl))
			{   
				if(!empty($objResult_npl["income"])){  
					$chk_total = 0; 
				}else{
					$chk_total++;
				} 
				 
				if($objResult_npl["typesave"] == "ชำระหักเงินฝาก"){
					$no_p1++;
				}
				if($objResult_npl["typesave"] == "ชำระ2ทาง"){
					$no_p2++; 
				}
				if($objResult_npl["typesave"] == "ชำระกรอกเอง"){
					$no_p3++; 
				}
			}
	
?>
    	       
       <table width="100%">
     	<tr>
     	 <td width="60%" valign="top" >  
					  <div class="col-lg-6" style=" margin-top: 10px; " align="left">
                      <font size="3px" color="#000000"> 
						ข้อมูลลูกค้า : <?php echo $name; ?>  &nbsp; รหัสลูกค้า : <?php echo $codecustomer; ?>
						<div style=" margin-top: 5px; " > </div>
						ที่อยู่  : <?php echo $all_address; ?>
						<div style=" margin-top: 5px; " > </div>
						โทร : <?php echo $telphone; ?>
						<div style=" margin-top: 5px; " > </div>
						เลขที่สัญญา : <?php echo $bill_no; ?>
						<div style=" margin-top: 5px; " > </div> 
					  </font>
					  </div>		 
       	 </td>
					  
     	 <td  valign="top" > 
                          
					  <div class="col-lg-5"  style=" margin-top: 10px; " >
						<table width="100%" border="1" id="customers" >
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">  &nbsp;  เลขที่สัญญา  &nbsp; </font>
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
								 <font size="3px" color="#000000">   &nbsp;  วันเริ่มสัญญา  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php  
									  
								 echo DateThai($showstart)." ".DateThai2($showstart) ." ถึงวันที่ ".  DateThai($showend)." ".DateThai2($showend);  
									 
								 ?> 
								 &nbsp; </font>
								</td>
							</tr> 
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  ยอดหนี้  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$totalprice1); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  จำนวนผ่อนครบ  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $daytotal_end; ?>  เดือน  สถานะสัญญา  <?php 
								 if($onoff_copy == "ปกติ"){
									 echo " <font color = 'darkgreen' > " . $onoff_copy . " </font> "; 
								 }else{
									 echo " <font color = 'red' > " . $onoff_copy . " </font> ";  
								 } 
								 ?> &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  จำนวนขาดส่ง  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$chk_total); ?> วัน  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระเงินสด  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p3); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระหักเงิน  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p1); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="0px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระ 2 ทาง &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p2); ?>  &nbsp; </font>
								</td>
							</tr>
							 
							 
							  
						</table>
					  </div>		 
       	 </td>
					 
       </tr>
     </table>                
                      
                    
							<table id="customers"   >
							 <thead> 
								<tr>
												<td width="1%" bgcolor="#FFF" height="35px;" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></td>    
												<td width="5%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันครบกำหนดชำระ  </font></div></td>   
												<td width="2%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   งวดที่     </font></div></td> 
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระ   </font></div></td>    
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระจริง     </font></div></td>   
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับ   </font></div></td>     
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับเก็บจริง   </font></div></td> 
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหนี้คงเหลือ     </font></div></td>   
												  
												<td width="3%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทบ    </font></div></td>  
												
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></td>    
												<td width="3%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เวลาล่าสุด     </font></div></td>    
												  
												<td width="3%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบชำระ    </font></div></td> 
												 
												<td width="3%" bgcolor="#FFF"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></td> 
											 </tr>
							 </thead>  
									 	 
							 <tbody>
									 
									 
								<?php 
								$i = 1;  

								$bg = "#F8FAFD"; 
								$bill_no = $_GET["bill_no"];
								$countall = 0;
								$moneyday = 0; 
								$money1 = 0; 
								$money2 = 0; 
								$money3 = 0; 
								$paytotatab = 0;
								$checkorderdata = "";
 
								$totalall =  $totalprice1 ;    
								$countall =  $totalprice1 ;
													 
								$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
								$checkend = date("Y-m-d", strtotime($loaddate));  /// วันที่เลือกล่าสุด 
								//$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
										   
													 
								$sql2 = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   ".$code_check2."   order by create_date2 asc ";  
													 
								/// echo $sql2;
								$query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{     
									
									$daystart = date("d/m/Y", strtotime($objResult2["datestart"]));
									$daystart2 = date("Y-m-d", strtotime($objResult2["create_date2"]));
									
									$countloopnopay = 0;
									$chk_total = 0;
									
									$discoount_cut1 = 0;
									$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
									$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart2)));
									$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $bill_no ."'  ".$code_check2." ";
									 //// echo $sql_npl."<br>";
									$query_npl = mysqli_query($objCon,$sql_npl); 
									while($objResult_npl = mysqli_fetch_array($query_npl))
									{   
										 
											$price1 = 0;
											if(!empty($objResult_npl["income"])){ 
												$price1 = $objResult_npl["income"];    
												$countloopnopay = 0; 
												$chk_total = 0; 
											}else{
												$countloopnopay++;
											} 
										 
									
											if($countloopnopay >= 5){ 
												if(!empty($objResult_npl["income"])){  
													$chk_total = 0; 
												}else{
													$chk_total++;
												} 
											}
										
										if($objResult_npl["addon"] == ""){
											$discoount_cut1 += $dayprice - $price1 ; 
										}  
										
											//// echo $discoount_cut1 . " - " . $price1 . " <br> ";
											$calnew = $discoount_cut1 - $price1 ; 
											$discoount_cut1 = $calnew ; 
										 
										 
									}
									
									$countalldata = 0;
									$sql = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$countalldata++; 
									}
 
									$namestaff = "";
									$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$namestaff = $objResult["name"]; 
									}
 
										$money1 = $objResult2["income"]; 
										$money2 = $objResult2["paymentother"];  
										$money3 = $objResult2["money"];  
										$addon = $objResult2["addon"];  


										if(!empty($objResult2["income"])){ 
											$totalall += (-$objResult2["income"]);
										} 
											$orderdata = $objResult2["orderdata"]+1;


										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										} 
									
										if($discoount_cut1 <= 0){
											$discoount_cut1 = 0;
										}
									 
										$status_payment_bg = "#006400";
										$status_payment = " <font color = '#FFF' > ชำระปกติ </font>  ";
								?>
										<tr  > 
										
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
									
										if(empty($checkorderdata)){
											$checkorderdata = ($objResult2["orderdata"]+1); 
												echo $i;
										}else{
											$cal = ($objResult2["orderdata"]+1);
											if($checkorderdata == $cal){ 
												echo " - ";
												 
												$status_payment_bg = "#FF0000";
												$status_payment = " <font color = '#FFF' > ขาดส่ง </font>  ";
											}else{ 
												$checkorderdata = ($objResult2["orderdata"]+1);
												$i++; 
												echo $i;
											}
										}  
										?>  
									 	</font></div></td> 
										 
										  
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										
										<?php 
											echo "   ". DateThai($objResult2["datestart"])." ". DateThai2($objResult2["datestart"])  ;
										 ?>
									     
										</font></div></td> 
										  
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo ($objResult2["orderdata"]+1); ?> </font></div></td> 
										 
										  
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 	
										<?php  
											echo number_format(0+$objResult2["money"]); 
										?> 
										<input type="hidden" id="moneybackday" value="<?php echo $money3; ?>" >
										</font></div></td> 
										 
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; ">   
											 <?php echo  number_format(0+$money1); ?> 
										</font></div></td>  
							 
									  
									   <td><div align="center">
									  
									  
									   <font size="3px" id="sdiscount<?php echo $i; ?>" color="Black" style=" font-size: 13px; " >
									  
									    <?php echo number_format(0+$chk_total*50); ?> 
									    
									   </font>
									     
  										</div></td> 
									   
									    <td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
									     <?php echo number_format(0+$objResult["paymentother"]); ?>
									    </font></div></td> 
									  
										  
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
										<font size="2px" color="red" id="smoneypayment<?php echo $i; ?>"  style=" font-size: 13px; ">  <b> <?php echo number_format(0+$totalall); ?> </b> </font>     
										 
										</font></div></td> 
										 
										    
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> 
											
										 
										<font size="2px" color="Black" style=" font-size: 13px; " id="showtabtoms<?php echo $i; ?>"> 
										 <?php echo number_format(0+$discoount_cut1); ?> 
										</font>
										
										<font size="2px" color="Black" style=" font-size: 13px; display: none; " id="showtabtom<?php echo $i; ?>"> 
										 <?php echo $discoount_cut1; ?> 
										</font>
											  
										</font></div></td>  
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $namestaff;?></font></div></td>  
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["date_time"];?></font></div></td>  
										
										 
										
										 
									  	<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										  <?php echo  $objResult2["typesave"]; ?>
										</font></div></td> 

									  
									  
									  	<?php
										$ic = 1;
										$sql_v = "  SELECT * FROM update_real_time where create_date = '".$objResult2["pk"]."'  and status like '%เปลี่ยนวัน%'  order by pk asc  ";   
										$query_v = mysqli_query($objCon,$sql_v);
										while($objResult_v = mysqli_fetch_array($query_v))
										{  
												$status_payment_bg = "#FF8C00";
												$status_payment = " <font color = '#FFF' > เลื่อนชำระ </font>  ";
										} 
									
										?>
									  	<td style="background-color: <?php echo $status_payment_bg; ?> "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
									  	
									  	<?php echo $status_payment; ?>
									  	 
										</font></div></td> 
 
										
										</tr>  
										<?php   
										}  
										?>
								</tbody>
   
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