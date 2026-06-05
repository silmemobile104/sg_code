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
	
	

	$month = date('m');
	$year = date('Y');
	if(empty($_GET["month"])){
	}else{
		$month = $_GET["month"];
	}
	if(empty($_GET["year"])){
	}else{
		$year = $_GET["year"];
	}
 
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
						padding-right: 3px; 
						}
					</style>
                  		<?php
						 $colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
						$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
  			  
									   
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load21));  
													 
													 
						$date_income = "01"."-".$month."-".$year; 
						$contactstart = date("Y-m-d", strtotime($date_income)); 
						$checkend = date("Y-m-t", strtotime($contactstart));  
													 
						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
						/// echo $addcode;
													 
						$p_m1 = 0; 
						$p_m2 = 0;
						$p_m2_new = 0;
						$p_m3 = 0;
						$p_m4 = 0;
						$p_m5 = 0;
						$p_m6 = 0;
						$p_m7 = 0;
						$p_m8 = 0;
						$p_m9 = 0;
						$p_m10 = 0;
													 
						 
						$sql2 = " SELECT *  FROM pricesomtub  
						where bill_no != '' ".$addcode."  
						order by pk asc     ";  

						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{     
							$p_m10 += $objResult2["price"];
						} 
													 
											 				 
						$sql2 = " SELECT * FROM list_order where bill_no != '' and ( onoff = 'ปกติ' or onoff = 'NPL')  and closebill = 'เป็นหนี้' ".$addcode." order by pk asc ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{   
							
							$totalprice1 = $objResult2["money"]; 
							$totalprice2 = $objResult2["daytotal"]; 
							$totalprice3 = $objResult2["dayprice"]; 
							$totalprice4 = $objResult2["startdate"]; 
							$totalprice5 = $objResult2["endate"]; 
							
							
							$discoount = 0;
							$discoountpaymentother = 0;
							$loaddata1 = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
							$loaddata2 = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$loaddata1."' AND '".$loaddata2."'  "; 
							$sql_c = "SELECT * FROM history_payment Where  
							bill_no = '". $objResult2["bill_no"]."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_c = mysqli_query($objCon,$sql_c); 
							while($objResult_c = mysqli_fetch_array($query_c))
							{  
								if(!empty($objResult_c["income"])){
								$discoount += $objResult_c["income"]; 

								}
								if(!empty($objResult_c["paymentother"])){
								$discoountpaymentother += $objResult_c["paymentother"]; 
								}  
							}	
							
							
							$allmoney = ($totalprice2*$totalprice3)-$discoount;
							if($allmoney <= 0){
								$allmoney = 0;
							}
							$p_m5 += $allmoney;
						}
													 
													 
						$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								 
						$sql2 = " SELECT a.*  FROM list_chk_computer a 
						Inner Join list_order b  On a.pkselect = b.pk
						Inner Join product c  On b.menu_id = c.pk
						where  a.bill_no != ''    ". $addcode2 ."
						Group By a.bill_no
						order by a.pk asc    ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{
							$create_date = $objResult2["create_date"];
							$create_date2 = $objResult2["create_date2"];
							$create_time = $objResult2["create_time"];
							$create_by = $objResult2["create_by"];
							$pkselect = $objResult2["pkselect"];
							$bill_no = $objResult2["bill_no"];
							$pasy_onoff = $objResult2["pasy_onoff"];

							$pricecal = 0;
							$total_price = 0;
							$s_m1 = 0;
							$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							Inner Join product c On   a.menu_id = c.pk
							Inner Join list_chk_computer d On   a.pk = d.pkselect 
							where d.bill_no = '".$bill_no."'  
							order by a.pk asc    "; 
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{  
								$p_m4 +=  $objResult_c["priceorder"];
								 
								$total_price +=  $objResult_c["computer2"];
								$pricecal = $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];
 
								$pasy = $objResult_c["computer2"] * 0.03;
								$cal = $pricecal * 0.03;
								$cal2 = $pricecal  - $pasy;
 
								if($cal2 <= 0){
									$cal2 = 0;
								}

								$p_m3 += $cal2;

							}
											
						}
									   
					 
						$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
						$sql2 = "  SELECT a.*  FROM list_chk_cleam_back  a   Inner Join product b  On a.pkselect = b.pk where  a.bill_no != '' ".$addcode2."   order by a.pk asc "; 		   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{  
							$sql = "SELECT * FROM product where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{  
								$nstorerage = $objResult["storerage"];
								$name = $objResult["name"];
								$codeno = $objResult["codeno"];
								$appleid = $objResult["appleid"];
								$password = $objResult["password"];
								$note = $objResult["note"];
								$price1 = $objResult["price1"];
								$price2 = $objResult["price2"];
								$totalprice = $objResult["totalprice"]; 

								
								$p_m6 += $price1;
							}
						}					
									
													 
													 
						$totaldata1 = 0;							 
						$totaldata2 = 0;		
						$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM money_customer_bank where bill_no != '' ".$addcode7."   order by pk desc    ";
												 
						
						$addcode = "  and  a.create_date2  BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql = "  SELECT a.* FROM money_customer_bank a
						Inner Join customer b On a.customer = b.pk
						Inner Join list_order c On c.bill_no = a.bill_no 
						where a.bill_no != '' ".$addcode."  Group By a.bill_no  order by a.pk desc     ";   
						$query = mysqli_query($con,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{    
							
							$totalprice1 = 0;
							$totalprice2 = 0;
							$totalprice3 = 0;
							$totalprice4 = " - ";
							$totalprice5 = " - ";
							$startdate = " - ";
							$codecustomer = " - ";
							$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 

								$customer = $objResult2["customer"]; 
								$codecustomer = $objResult2["codecustomer"]; 
							}
							
							$datestart1   = date("Y-m-d", strtotime($totalprice4)); 
							$addcode_check = "  and  create_date2 BETWEEN '".$datestart1."' AND '".$checkend."'  ";  
							$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
							and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
							order by pk asc  ";  
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{ 
								$totaldata1 +=  $objResult_c["money"];    
							}	
						}

									
						if($totaldata1 <= 0){
							$totaldata1 = 0;
						}
													 
													 
		   				$p_m7 = $totaldata1;				 
									
													 
													 

						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM money_customer_bank where bill_no != '' ".$addcode."   order by pk desc    ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{        
							if(!empty($objResult2["money"])){ 
								$p_m9 += $objResult2["money"];
							}

						}
													 
													 
													  
						$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
						Inner Join customer b On   a.customer = b.pk
						Inner Join product c On   c.pk = a.menu_id
						where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว'  and  a.closebill = 'เป็นหนี้'
						".$addcode."  
						order by a.pk asc    ";  

						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
								$money = $objResult2["money"]; 
								$daytotal = $objResult2["daytotal"]; 
								$dayprice = $objResult2["dayprice"];  
								$c_status = $objResult2["c_status"];  
								$g_create_date2 = $objResult2["create_date2"];  
								$priceorder = $objResult2["priceorder"];  
								$pasy = $objResult2["pasy"];  


								$p_m1++;
								$p_m2 += $priceorder;  
							    $p_m2_new += $daytotal * $dayprice;  
						}			
					 
 
						$addcode = " and create_date BETWEEN '".$contactstart."' and '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM databank where money1 != '' ".$addcode."   order by create_date asc    ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{        
							if(($objResult2["typedatasave"] == "ฝาก")){ 
								$p_m11 += $objResult2["money1"];
							} 
							if(($objResult2["typedatasave"] == "ถอน")){ 
								$p_m11 -= $objResult2["money1"];
							} 
						}
	
						?>	
                    	  
                  		<div class="col-lg-12"  align="center" style="margin-top: 15px; "  >  
                        <font size="3px" color="#000000">  บริษัท เอสจี ลิสซิ่ง พลัส จำกัด   </font>   
						</div>
                 		
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">  รายงานนำเสนอผู้บริหาร   </font>   
						</div>
                 		 
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">   (   <?php echo  DateThai2($date_income) ; ?>  )  </font>   
						</div>
                     
                        
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;  "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; border: 1px solid #000; border-radius: 5px;  "  >   
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000"> <u> <b>     </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                        	
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  จำนวนสินเชื่อประจำเดือน   </font>
                         
                         <div style=" margin-top: 5px;">  </div>
                         ยอดรวมผ่อนสินค้าประจำเดือน
                          
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  ต้นทุนสินเชื่อประจำเดือน   </font>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         ยอดเงินฝากประจำเดือน 
                         
                          
                         <!--- 
                         <div style=" margin-top: 5px;">  </div>
                         ยอดเงินฝากประจำเดือน
                         -->
                         
                         <div style=" margin-top: 5px;">  </div>
                         มูลค่าสต๊อกคงเหลือ
                         
                         <div style=" margin-top: 5px;">  </div>
                         เงินทุนสะสมคงเหลือ 
                         
                         
                         <div style=" margin-top: 5px;">  </div> 
                         กำไรสุทธิ์
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
                        
						  <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m1); ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m2_new); ?>
                          
                          
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m3); ?> 
                          
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m11); ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m8); ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m10); ?>
                          
                          
                         <div style=" margin-top: 5px;">  </div>
                           <?php
										
							$date_income = "01"."-".$month."-".$year; 
							$daystart_load = date("Y-m-d", strtotime($date_income));  
							$contactstart = date("Y-m-d", strtotime($daystart_load));   
							$checkend = date('Y-m-t',strtotime($contactstart));
	
	
							$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode2 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode4 = "  and  d.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode5 = "  and  savedata BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
							$addcode6 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	 
								
							/// echo $addcode . " <br> ";
													 
							
	
							/// echo $addcode . " <br> ";
						 			
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
	
													 	 
													 
							$alldata = $p_m1+$p_m1_3+$p_m1_4+$p_m2+$p_m3+$p_m4+$p_m5;	
	
							$totalall2 = $s_m1;							 
							///   echo $totalall2 . " <br> ";
							///   echo $paymenttotal . " <br> ";
	
	
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
	
							$cal1 = $alldata;					 
							$cal2 = $totalall2+$paymenttotal;	
													 
							$cal3 = $cal1 - $cal2;
	
							echo "".number_format(0+$cal3); 
							////  echo "".number_format(0+$alldata); 
							//// echo "".number_format(0+$cal3); 
							
							
							?>
                         <div style=" margin-top: 5px;">  </div>
                         
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						</div>
						</div>
                     	  
                          
                           
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;  "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; border: 1px solid #000; border-radius: 5px;  "  >   
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000"> <u> <b>     </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                          
                         <div style=" margin-top: 5px;">  </div> 
                         สรุปกำไร (ขาดทุน) สุทธิ์ 
                         <div style=" margin-top: 5px;">  </div>
                         ยอดปันผลผู้ถือหุ้น
                         
                          
						  <div style=" margin-top: 5px;">  </div> 
                         
                         <?php
							$person = 0;			 
							$sql2 = " SELECT * FROM customerpunpon  order by pk asc ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$person++;
								$namefull = $objResult2["name"];
							?>
                          <?php echo $namefull; ?>
						  <div style=" margin-top: 5px;">  </div> 
                        <?php } ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                         <font size="3px" color="#000000">  
						   
                         <div style=" margin-top: 5px;">  </div>  
                         &nbsp;
                         <?php   echo number_format(0); ?>
                          
                         <div style=" margin-top: 5px;">  </div>
                         <?php   echo number_format(0+$cal3); ?>
						  <div style=" margin-top: 5px;">  </div>
                          
                            
                         <?php 					 
							$totalall = $p_m1+$p_m2_new+$p_m3+$p_m4+$p_m5+$p_m6+$p_m7+$p_m8;	
	
							/*
							echo $p_m1 . " <br> ";
							echo $p_m2_new . " <br> ";
							echo $p_m3 . " <br> ";
							echo $p_m4 . " <br> ";
							echo $p_m5 . " <br> ";
							echo $p_m6 . " <br> ";
							echo $p_m7 . " <br> ";
							echo $p_m8 . " <br> ";
							*/
						 ?>
                         
                         <?php
							$person = 0;				 
							$sql2 = " SELECT * FROM customerpunpon  order by pk asc ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$person = 0;	
								if(empty($objResult2["percent"])){
									 $person = $cal3 * 0;
								}else{
									 $person = $cal3 *  ( $objResult2["percent"] / 100) ;
								} 
								
								
								if($cal3 <= 0){
									$person = 0;
								}
							?>
                          <?php echo number_format(0+$person); ?>
						  <div style=" margin-top: 5px;">  </div>
                       
                          <?php } ?>
                        
                         
                         
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

 