<?php 
include('../database.php');

$strExcelFileName = "กำหนดค่าใช้จ่ายดำเนินคดี.xls";
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
	
	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}  
	 
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	 
 
 
	$tanaidata = "";
	if(empty($_GET["tanaidata"])){
		
	}else{
		$tanaidata = $_GET["tanaidata"];
	}  



		$searchname = date('d/m')."/".(date('Y'));
		if(empty($_GET["searchname"])){

			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			$daystart_load = date("Y-m-d", strtotime($date_income)); 

		}else{
			$searchname = $_GET["searchname"]; 

			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load = date("Y-m-d", strtotime($date_income)); 
		}

		$searchname2 = date('d/m')."/".(date('Y'));
		if(empty($_GET["searchname2"])){

			$cut = explode("/",$searchname2);
			$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
			$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 

		}else{
			$searchname2 = $_GET["searchname2"];

			$cut = explode("/",$searchname2);
			$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
		} 

		$month = "";
		if(empty($_GET["month"])){

		}else{
			$month = $_GET["month"];
		}
		$year = "";
		if(empty($_GET["year"])){

		}else{
			$year = $_GET["year"];
		}


		$searchtype = "";
		if(empty($_GET["searchtype"])){

		}else{
			$searchtype = $_GET["searchtype"];
		}


		$shdd1 = " display:  none; ";
		$shdd2 = " display:  none; ";
		if($searchtype == "ประเภทเดือนปี"){
			$shdd1 = "   ";
			$shdd2 = " display:  none; ";
		}
		if($searchtype == "ประเภทวัน"){
			$shdd1 = " display:  none; ";
			$shdd2 = "   ";

		}

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
					if(empty($_GET["searchname"])){

					}else{
						$addcode = " and ( b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'  )  ";
					}
					$addcode2 = "";  


					if($searchtype == ""){
						$addcode2 = "  ";  	 
					} 
					if($searchtype == "รอดำเนินคดี"){
						$addcode2 = " and  (a.tanai_status1 = 'รอดำเนินคดี' or a.tanai_status1 = '')  ";  	 
					}
					if($searchtype == "อยู่ในระหว่างไกล่เกลี่ย"){
						$addcode2 = "  and (a.tanai_status1 = 'อยู่ในระหว่างไกล่เกลี่ย' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/ผ่อนต่อ' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/คืนเครื่อง') ";  	  
					}
					if($searchtype == "อยู่ในระหว่างฟ้องร้อง"){
						$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างฟ้องร้อง'  ";  	  
					}
					if($searchtype == "คดีเสร็จสิ้นแล้ว"){
						$addcode2 = "  and a.tanai_status1 = 'คดีเสร็จสิ้นแล้ว'  ";  	  
					}
					$addcode = "";
					if(empty($_GET["bill_no"])){

					}else{
						$addcode = " and  a.bill_no like '%".$bill_no."%'   ";
					}
													  
					$contactstart = date("Y-m-d", strtotime($daystart_load));  
					$checkend = date("Y-m-d", strtotime($daystart_load2)); 
					$addcode3 = "   "; 

					if($searchtype == "ประเภทเดือนปี"){

						$datadate  = "01-".$month."-".$year;		 			   
						$contactstart = date("Y-m-d", strtotime($datadate)); 
						$datadate2 = date('Y-m-t',strtotime($datadate));   
						$checkend = date("Y-m-d", strtotime($datadate2)); 
						$addcode3 = " and (a.create_date2 BETWEEN '".$contactstart."' and '".$checkend."')   "; 
					}
					if($searchtype == "ประเภทวัน"){ 
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load2)); 
						$addcode3 = " and (a.create_date2 BETWEEN '".$contactstart."' and '".$checkend."')   "; 

					}

	
	 
?>
    	     
	   <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					<div class="table-responsive"  >
					<table id="key_product"  class=" tables    tablemobile  " border="0" style=" width: 1400px;  "    >
					 <thead> 
					 <tr> 
						<th width="4%" bgcolor="#FFF"  style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่สัญญา    </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รหัสลูกค้า  </font></div></th>       
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า     </font></div></th>      
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดค้าง     </font></div></th>     
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด     </font></div></th>       
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ    </font></div></th> 
						
						       
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี    </font></div></th>  
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด    </font></div></th>  
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทั้งสิ้น    </font></div></th> 
						            
						                  
						                        
						                              
						                                    
						                                          
						                                                      
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบดำเนินคดี     </font></div></th>    
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคดี     </font></div></th>     
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทนายรับเคส   </font></div></th>   
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี   </font></div></th>
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะชำระ   </font></div></th>       
					 </tr>
					</thead>   
					  
					  <tbody> 
					<?php 
						$bg = "#F8FAFD"; 
						$i = 1;
						$total = 0;
						$totalprice1 = 0;
						$totalprice2 = 0;
						$totalprice3 = 0;
						$totalprice4 = 0; 

						if (empty($_GET['page2'])) { 
							$i = 1;
						}else if (($_GET['page2'] == 1)) { 
							$i = 1;
						}else{

							$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
						}

						$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != '' 
						".$addcode.$addcode2.$addcode3."  
						order by a.pk asc  limit {$start} , {$perpage}   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

						if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
						}else{  
							$bg = "#FFF"; 
						} 

						$bill_no = $objResult2["bill_no"]; 
						$codecustomer = $objResult2["codecustomer"]; 
						$create_date = $objResult2["create_date"]; 
						$create_time = $objResult2["create_time"]; 
						$name_major = "-"; 
						$name_create = ""; 	

						$sql_c = " SELECT * FROM member_all  where pk = '".$objResult2["tanaidata"]."'   order by pk asc     ";   
						$query_c = mysqli_query($con,$sql_c); 
						while($objResult_c = mysqli_fetch_array($query_c))
						{       
							$name_create = $objResult_c["name"];
						}  
 
							$bill_no = $objResult2["bill_no"]; 
							$room = $objResult2["room"]; 
							$menu_id = $objResult2["menu_id"]; 
							$money = $objResult2["money"]; 
							$daytotal = $objResult2["daytotal"]; 
							$dayprice = $objResult2["dayprice"];  
							$daytotal2 = $objResult2["daytotal2"];  
							$startdate = $objResult2["startdate"];  
							$endate = $objResult2["endate"];  
							$total = $objResult2["total"];  
							$codecustomer = $objResult2["codecustomer"];  
							$moneydown = $objResult2["moneydown"];  
							$moneydata = $objResult2["moneydata"];  
							$pasy = $objResult2["pasy"];  
							$cod = $objResult2["cod"];  
							$moneycontact = $objResult2["moneycontact"];  
							$percent = $objResult2["percent"];  
							$computer = $objResult2["computer"];  
							$computer2 = $objResult2["computer2"];  
							$priceorder = $objResult2["priceorder"];  
							$major = $objResult2["major"];  
							$customer = $objResult2["customer"];  
							$endold = $objResult2["endold"];  
							$dateold = $objResult2["dateold"];  
							$bank2 = $objResult2["bank"];  
							$pasycal = $objResult2["pasycal"];  
							$qrdata = $objResult2["qrdata"]; 
							$allday = $objResult2["allday"]; 
							$appleid = $objResult2["appleid"]; 
							$password = $objResult2["password"]; 
							$contactstatus = $objResult2["contactstatus"]; 


							$discoount = 0;
							$discoountpaymentother = 0;
							$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
							$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql_m = "SELECT * FROM history_payment Where  
							bill_no = '". $bill_no ."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_m = mysqli_query($objCon,$sql_m); 
							while($objResult_m = mysqli_fetch_array($query_m))
							{  
								if(!empty($objResult_m["income"])){
								$discoount += $objResult_m["income"]; 

								}
								if(!empty($objResult_m["paymentother"])){
								$discoountpaymentother += $objResult_m["paymentother"]; 
								}  
							}	

							$allmoney = ($dayprice*$daytotal)-$discoount;
							

							$chk_total = $objResult2["totalno_payment"];
							$tanai_status1 = $objResult2["tanai_status1"];
							$tanai_status2 = $objResult2["tanai_status2"];
							$tanai_status3 = $objResult2["tanai_status3"];
							$tanai_payment = $objResult2["tanai_payment"];
							
							$tanai_momey1 = $objResult2["tanai_momey1"];
							$tanai_momey2 = $objResult2["tanai_momey2"];
							$tanai_momey3 = $objResult2["tanai_momey3"];
							$tanai_momey4 = $objResult2["tanai_momey4"];
							$tanai_momey5 = $objResult2["tanai_momey5"];

							$priceother = 0;
							$priceothershow = " ................ ";
							if(!empty($objResult2["priceother"])){
								$priceother = $objResult2["priceother"];
								$priceothershow = $objResult2["priceother"];
							}

							
							
							if($tanai_payment == "รอชำระ"){ 
									$txtshow = " รอชำระ ";
									$hdd =  " "; 
									$bgbtn = " #FF7403  "; 
							}else if($tanai_payment == "ชำระแล้ว"){
									$txtshow = " ชำระแล้ว ";
									$hdd = "  "; 
									$bgbtn = " #0B9444  "; 
							}else{
									$txtshow = " รอชำระ ";
									$hdd = "    "; 
									$bgbtn = " #DA0706  ";  
							}
					?>
					<tr style="background-color: <?php echo $bg ?>; "> 

				  
					
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $bill_no; ?> </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $codecustomer; ?> </font></div></td> 
					
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $objResult2["name"]; ?> </font></div></td> 
					
					
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$allmoney); ?> </font></div></td> 
					 
					  
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 <?php echo $tanai_momey1; ?>
					 
					 </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
				 <?php echo $tanai_momey2; ?>
					 
					 	 
					 </font></div></td> 
					 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					<?php echo $tanai_momey3; ?>
					 
					 </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					<?php echo $tanai_momey4; ?>
					 
					 </font></div></td> 
					 
					 
					  <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					<?php echo $tanai_momey5; ?>
					  
						 
						 
					 </font></div></td> 
					  
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status1; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status2; ?> </font></div></td> 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $name_create; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$priceother); ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="<?php echo $bgbtn; ?>" style=" font-size: 13px; "  class="serif"> 
						
						 <?php echo $txtshow; ?> 
							 
						
					</font></div></td> 
					
					 
					  
					    
							
					</tr>  
					<?php $i++; } ?>
					</tbody>
					
					
					</table> 
					</div> 
					</div>
  
                                	  

</BODY>

</HTML>
