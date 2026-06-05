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
	   $searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		
		
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
	}

	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load21 = date("d-m-Y", strtotime($date_income)); 
		$daystart_load22 = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];
		
		
		
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load21 = date("d-m-Y", strtotime($date_income)); 
		$daystart_load22 = date("Y-m-d", strtotime($date_income)); 
	}

	$major = "1";
	?> 
 	
   
                     	<style>
						.grid-container {
						display: grid;
						grid-template-columns: 100%;  
						}
						.grid-container2 {
						display: grid;
						grid-template-columns: 50% 50% ;  
						}
						.grid-container3 {
						display: grid;
						grid-template-columns: 90% 10% ;  
						}
						.grid-container4 {
						display: grid;
						grid-template-columns: 15% 79% 6% ;  
						}
						.grid-item {  
							padding-right: 10px; 
							padding-left: 10px;
						}
					</style>
                  		<?php
						$colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
						$colorbtns3s = " background-color: #000000; border-radius: 5px;  height: 40px;  border-color: #000000; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
  			 
													 
						/*
						$p_total1 = 0;		
						$p_total2 = 0;
						$p_total3 = 0;
						$sql2 = " SELECT * FROM list_order where bill_no != '' and closebill = 'เป็นหนี้'  order by pk asc ";    
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{ 
							$totalprice1 = $objResult2["money"]; 
							$totalprice2 = $objResult2["daytotal"]; 
							$totalprice3 = $objResult2["dayprice"];  
							$totalprice4 = $objResult2["startdate"]; 
							$totalprice5 = $objResult2["endate"];    

							$chk_total = 0; 

							$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
							$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
							$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2." ";   
							$query_npl = mysqli_query($objCon,$sql_npl); 
							while($objResult_npl = mysqli_fetch_array($query_npl))
							{   
								if(!empty($objResult_npl["income"])){  
									$chk_total = 0; 
								}else{
									$chk_total++;
								} 
							}
							
							if($chk_total >= 5 && $chk_total <= 14){
								$p_total1++; 
							}
							if($chk_total >= 15 && $chk_total <= 29){
								$p_total2++; 
							}
							if($chk_total >= 30){
								$p_total3++; 
							}
						}
						*/							 
													 
									   
							$contactstart = date("Y-m-d", strtotime($daystart_load));  
							$checkend = date("Y-m-d", strtotime($daystart_load21));  
							$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode2 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode4 = "  and  d.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode5 = "  and  savedata BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
							$addcode6 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									
													 
							$p_m1 = 0;
							$p_m1_2 = 0;
							$p_m1_3 = 0;
							$p_m1_4 = 0;
													 
							$p_m2 = 0;
							$p_m3 = 0;
							$p_m4 = 0;
							$p_m5 = 0;
										
							$p_dis1 = 0;
												
	
	
							$addcode8 = "  and  a.npl_datestart2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							Inner Join product c On   c.pk = a.menu_id
							where a.bill_no != ''   
							and a.contactstatus = 'อนุมัติแล้ว' 
							".$addcode8."  
							order by a.pk asc   "; 

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								
								  $totalprinend = $objResult2["totalprinend"]; 
								
								  $p_m1_3 += $totalprinend;
								
								
							}

	
	
	
							$sql2 = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != ''   
							and a.income != ''
							and a.income != '0'  
							and a.status = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
							".$addcode6."    
							order by a.pk asc     ";   
							// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								 
								if(!empty($objResult2["discount"])){ 
									$p_dis1 += $objResult2["discount"];
								}
							}
													 
							$sql2 = "SELECT a.*  
							FROM payment_other_bill_no a 
							Inner join list_order b   On  a.bill_no_ref = b.bill_no
							Where a.bill_no != '' and price != '' ".$addcode2." ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m2 += $objResult2["price"];       
							}
													 
													 				 
							$sql2 = "  SELECT * FROM paymentother   where   bill_no != ''  and data2 != '0'   ".$addcode3."   order by  pk asc ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m3 += $objResult2["data2"];       
							}
								
													 
													 
							
							$addcode44 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = "  SELECT * FROM list_order_store  where bill_no != ''  and money != '' ".$addcode44."   order by  pk asc   ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m4 += $objResult2["money"];       
							}
											  
							$sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price2 != ''  order by  pk asc    ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{

								if($objResult2["statuspayment"] == "รอชำระเงิน"){
									
								}else{
									$p_m5 += $objResult2["price2"]; 
								}  

							}  		
									 				 			 
							$s_m1 = 0;
							$s_m2 = 0;
							$s_m3 = 0;
							$s_m4 = 0;
							$s_m5 = 0;
													 
													 		  
							$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   a.menu_id = c.pk
									Inner Join list_chk_computer d On   a.pk = d.pkselect

									where d.bill_no != ''  ". $addcode4 ."
									order by a.pk asc    "; 
							/// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{


								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"];  

								$pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];
								
								
								$pasy = $objResult2["computer2"] * 0.03;
								$cal = $pricecal * 0.03;
								$cal2 = $pricecal  - $pasy;
								
								
								if($cal2 <= 0){
									$cal2 = 0;
								}
								  
								$s_m1 += $cal2;
							}  	
								
													 
													 
							 $sql2 = " SELECT * FROM product  where name != ''  ". $addcode2 ."   order by pk asc    "; 
							/// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{ 
								$totalprice1 = $objResult2["price1"];  
								if($totalprice1 <= 0){
									$totalprice1 = 0;
								}
								  
								$s_m2 += $totalprice1;
							}  	
											
													 
						    $sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price1 != ''  order by  pk asc    ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
 
									$s_m3 += $objResult2["price1"]; 
								 
							}  	
									
													 
													 
													 			 
						    $sql2 = " SELECT * FROM member_bank where bill_no != ''  and typedata = 'ถอนเงิน'  ".$addcode3."  and price != ''  order by  pk asc    ";    
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
  
	 								$percent = 0;	
									if(!empty($objResult2["percent"])){ 
										$percent = $objResult2["percent"];
									}

									$discount = 0; 

									$income1 = 0;
									if(($objResult2["typedata"] == "ฝากเงิน")){ 

									if(!empty($objResult2["price"])){ 
										$income1 = $objResult2["price"];
									}

									}
									$income2 = 0;
									$calsumper = 0;
									if(($objResult2["typedata"] == "ถอนเงิน")){ 

									if(!empty($objResult2["price"])){ 
										$income2 = $objResult2["price"];
										$calsumper = ($percent / 100)   * $income2;
									}
									}

									$p_m1_4 += $calsumper;
							}  	
									
													 
													 
											
							$typedata = "ถอนเงิน"; 		 
													 
							 $sql2 = " SELECT * FROM member_bank  where price != '' and typedata = '".$typedata."'   ". $addcode3 ."   order by pk asc    "; 
							 /// echo $sql2;
							 $query2 = mysqli_query($con,$sql2); 
							 while($objResult2 = mysqli_fetch_array($query2))
							 { 
								$totalprice1 = $objResult2["price"];  
								if($totalprice1 <= 0){
									$totalprice1 = 0;
								}
								  
								$s_m4 += $totalprice1;
							}  	
													 
													 
													 
									 
							$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != ''   
							and a.income != ''
							and a.income != '0'      and c.contactstatus = 'อนุมัติแล้ว' 
							".$addcode."    
							order by a.pk asc     ";  
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

								$note1 = " - ";
								$totalprice1 = 0;
								$totalprice2 = 0;
								$totalprice3 = 0;
								$totalprice4 = " - ";
								$totalprice5 = " - ";
								$startdate = " - "; 
								$discoount = 0;
								$discoountpaymentother = 0;  


								$discoount_cut = 0;  
								$discoount_cut1 = 0;  
								$discoount_cut2 = 0; 



								$discountbank = 0;  
								$countloopnopay = 0;
								$chk_total = 0;   

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

								$newmoney = $income - $discount;
								$newpayment = ($newmoney * 100) / 107;
 
								$p_m1 += $newmoney; 
							}						 
													 
													 
													 
						?>	
                    	 
                         
                  		<div class="col-lg-12"  align="center" style="margin-top: 0px; "  >  
                        <font size="3px" color="#000000">  บริษัท เอสจี ลิสซิ่ง พลัส จำกัด   </font>   
						</div>
                 		
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">  งบกำไรขาดทุน   </font>   
						</div>
                 		 
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">   ( ตั้งแต่วันที่ <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load)." ถึงวันที่ ".DateThai($daystart_load21)." ".DateThai2($daystart_load21); ?>  )  </font>   
						</div>
                   
	   
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;  "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; border: 1px solid #000; border-radius: 5px; height: 410px; "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; margin-left: 10px; "  >  
                        <font size="3px" color="#000000"> <b>  รายได้   </b> </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px;  margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <u> <b>   รายได้จากการขายสินค้าหรือบริการ - สุทธิ์   </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  รายได้จากการชำระเงินค่างวด  </font> 
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >   รายได้จากการรับชำระเงินค่าปิดบัญชี (ดำเนินคดี)   </font>
                          
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  รายได้จากการหักค่าธรรมเนียมการถอนเงินออม   </font>
                         <div style=" margin-top: 5px;">  </div>
                         รายได้จากการรับชำระเงินค่าปรับ 
                         
                         <?php 					 
							$sql2 = "  SELECT * FROM paymentother   where   bill_no != ''  and data2 != '0'   ".$addcode3."  
							group by data1 
							order by  pk asc ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   				 
						  ?> 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo $objResult2["data1"]; ?>
                         <?php } ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                          รายได้จากการชำระเงินอื่นๆ  
                         
                          
                         
                         <div style=" margin-top: 5px;">  </div>
                         รายได้จากการขายหน้าร้าน (เครื่องยึดคืน)
                         <div style=" margin-top: 5px;">  </div>
                         รายได้จากการซ่อมมือถือ
                         <div style=" margin-top: 5px;">  </div>
                         &nbsp;
                         <div style=" margin-top: 35px;">  </div>
                         
                         รวมรายได้
                         <div style=" margin-top: 5px;">  </div>
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m1); ?> 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m1_3); ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m1_4); ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m2); ?>
                          
                            
                         <?php 					 
							$sql2 = "  SELECT *, sum(data2) as totalmoney FROM paymentother   where   bill_no != ''  and data2 != '0'   ".$addcode3."  
							group by data1 
							order by  pk asc ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   				 
						  ?> 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo $objResult2["totalmoney"]; ?>
                         <?php } ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m3); ?>
                         
                         
                         
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m4); ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m5); ?>
                         <div style=" margin-top: 5px;">  </div>
                         ---------------
                         <div style=" margin-top: 5px;">  </div>
                         
                         <div style=" margin-top: 25px;">  </div>
                         
                         <?php echo number_format(0+$p_m1+$p_m1_3+$p_m1_4+$p_m2+$p_m3+$p_m4+$p_m5); ?>
                         <div style=" margin-top: 5px;">  </div>
                         
                         <?php 					 
							$alldata = $p_m1+$p_m1_3+$p_m1_4+$p_m2+$p_m3+$p_m4+$p_m5;						 
						 ?>
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						</div>
						</div>
                     	  
                          
                        <div class="col-lg-12"  align="left" style="margin-top: 15px;    "  >  
                        <div class="col-lg-12"  align="left" style="margin-top: 15px;  border: 1px solid #000;  border-radius: 5px;  height: 240px;"  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;  margin-left: 10px;   "  >  
                        <font size="3px" color="#000000"> <b>  ค่าใช้จ่าย   </b> </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px;   margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <u> <b>  ต้นทุนเพื่อขาย  </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         ต้นทุนสินเชื่อ
                         <div style=" margin-top: 5px;">  </div>
                         ต้นทุนงานซ่อม  
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  รวมค่าใช้จ่าย  </font>
                          
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$s_m1); ?>
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$s_m3); ?>   
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$s_m1); ?> 
                          
                          <?php 					 
							$totalall2 = $s_m1;						 
						   ?>
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						</div>
						</div> 
                       
                        <div class="col-lg-12"  align="left" style="margin-top: 15px;    "  >  
                        <div class="col-lg-12"  align="left" style="margin-top: 15px;  border: 1px solid #000;  border-radius: 5px; "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;   margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <b>  ค่าใช้จ่ายในการบริหาร   </b> </font> 
						</div>
                 		
                 		<?php  
													 
						$totalmoney = 0;
						$sql2 = "   SELECT * FROM paymenttype  order by pk asc     ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$paymenttype = $objResult2["pk"];
						?>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px;   margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <u> <b>  <?php echo $objResult2["name"]; ?>  </b> </u>  </font> 
						</div>
                 		 
                 		<?php 
						$sub_m1 = 0;
						$sql_load = "   SELECT * FROM paymenttype2 where paymenttype  = '".$paymenttype."' order by pk asc     ";  

						$query_load = mysqli_query($con,$sql_load); 
						while($objResult_load = mysqli_fetch_array($query_load))
						{   
							$paymenttype2 = $objResult_load["pk"];
	
							$sub_m1_load = "OFF";
							$sub_m1 = 0;
							$sql_c = "SELECT * FROM paymenttyp3 Where paymenttype = '".$paymenttype."' and paymenttype2 = '".$paymenttype2."'  ". $addcode7 ."   ";  
							 
							$query_c = mysqli_query($objCon,$sql_c); 
							while($objResult_c = mysqli_fetch_array($query_c))
							{     
								$sub_m1 += $objResult_c["price"];
								$sub_m1_load = "ON"; 
							}   
						 
						
							//// echo $paymenttype2 . " <Br> ";
							if($sub_m1_load == "ON"){ 
						?>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo $objResult_load["name"]; ?> 
                          
                          
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$sub_m1); ?>  
                          
                          
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						<?php } ?>
						<?php } ?>
						 
						<?php } ?>
						
						
						
						<?php
													 
							
							$paymenttotal = 0;						 
							$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = "  SELECT * FROM paymenttyp3   where  price != ''  ".$addcode."   order by  create_date2 asc   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$bill_no =  $objResult2["bill_no"];
								$g_create_date2 =  $objResult2["create_date2"];
								$typedata =  $objResult2["typedata"];
								$note =  $objResult2["note"];
								$statuspasy =  $objResult2["statuspasy"];

								$price1 =  0;
								if(!empty($objResult2["price"])){
									$price1 =  $objResult2["price"];

								}

								$vat = 0;
								$pasy = 0;
								if(empty($statuspasy)){

								}else if($statuspasy == "ภาษีภายใน"){
									$pasy  = ($price1 *  7 ) / 107;
									$totaldata2 +=  $pasy;
								}else if($statuspasy == "ภาษีภายนอก"){ 
									$pasy  = ($price1 *  100 ) / 107;
									$totaldata3 +=  $pasy;
								}

								$newmoney =  $price1 - $pasy;

 
								$paymenttotal +=  $price1;

							}	
						?>
						
						<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                        <font size="3px" color="#000000"> <b>      </b> </font> 
						</div> 
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         รวมค่าใช้จ่ายในการบริหาร
                         <div style=" margin-top: 5px;">  </div> 
                            
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$paymenttotal); ?>
                         <div style=" margin-top: 5px;">  </div> 
                          
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						
						
						
						
						
						
						
						
						</div>
						</div>
                         
                          
                         <div class="col-lg-12"  align="left" style="margin-top: 15px;  "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; border: 1px solid #000; border-radius: 5px; height: 210px; "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <b>  รายได้   </b> </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px;   margin-left: 10px;  "  >  
                        <font size="3px" color="#000000"> <u> <b>   รายได้จากการขายสินค้าหรือบริการ - สุทธิ์   </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  รวมรายได้  </font> 
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  รวมค่าใช้จ่ายเพื่อขายและค่าใช้จ่ายในการบริหาร  </font>
                          
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000000" >  กำไรขาดทุนสุทธิ   </font>
                         <div style=" margin-top: 5px;">  </div> 
                         
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$alldata); ?> 
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$totalall2+$paymenttotal); ?> 
                         <div style=" margin-top: 5px;">  </div>
                         <?php
							$cal1 = $alldata;					 
							$cal2 = $totalall2+$paymenttotal;	
													 
							$cal3 = $cal1 - $cal2;
							echo "".number_format(0+$cal3); ?> 
                        </font>  
                          
						</div>
						</div>
						</div>
						</div>
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

 