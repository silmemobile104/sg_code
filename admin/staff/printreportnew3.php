<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  สรุปรายละเอียดบัญชีลูกหนี้  </title>
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
		  border: 1px solid #A9A9A9; 
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
	$bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";

	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){

		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];



		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  


									
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
	}  
	?>
    	       
     <?php											
		$perpage = 20;
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
		$addcode2 = ""; 
		$addcode3 = ""; 
		$addcode4 = ""; 
		 
		 
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 
		
		
	if(!empty($_GET["customername"])){
		$addcode4 = "   and b.name like '%".$customername."%'  or  a.codecustomer like '%".$customername."%' "; 
	}
		 
	 ?>            
       
   
		<table id="customers" border="1"  >
		 <thead>  
		 <tr>
			<th width="2%" valign="" rowspan="2" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px"  class="serif2" color="#000" style=" font-size: 15px; ">  รหัสลูกค้า    </font></div></th>    
			  
			<th width="3%" rowspan="2" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อเฟสบุ๊ค  </font></div></th>  
			     
			<th width="3%" colspan="4" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ยอดปล่อยสินเชื่อ  </font></div></th>  
			
			<th width="3%"   colspan="4" bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ค้างชำระ </font></div></th> 
		   
		   
			<th width="3%"  colspan="4" bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชำระแล้ว </font></div></th> 
		   
		                    
		 </tr> 
		 <tr>
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
		             
		             
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
		             
		             
		             
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
			             
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

		$totaldata1_no = 0;
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0; 

		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   c.pk = a.menu_id
		where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว' 
		".$addcode.$addcode2.$addcode3.$addcode4."  
		order by a.pk asc  limit {$start} , {$perpage}  "; 
			 
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			$money = $objResult2["money"]; 
			$daytotal = $objResult2["daytotal"]; 
			$dayprice = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$startdate = $objResult2["startdate"]; 
			$endate = $objResult2["endate"];   


			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$name_create =  $objResult["name"];
			}
 

			$allmoney = 0;
			$discoount = 0;
			$discoountpaymentother = 0;
			
			$check_round_payment = 0;
			$check_round_dis = $daytotal;
			
			
			$allpasy = 0;
			$allpasy2 = 0;
			
			
			$allpasy_new = 0;
			$allpasy2_new = 0;
			$allpasy3_new = 0;
			
			
			$loadstart1 = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
			$loadstart2 = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
			$code_check2 = "  and create_date2 BETWEEN '".$loadstart1."' AND '".$loadstart2."'  "; 
			
			
		    if($objResult2["closebill"] == "หมดหนี้"){
			  $code_check2 = "";

			}
			
			
			$sql_c = "SELECT * FROM history_payment Where  
			bill_no = '". $objResult2["bill_no"]."' 
			and income != '' 
			and income != '0'   
			".$code_check2."  order by create_date2 asc "; 
			
			///  echo $sql_c."<br>";
			$query_c = mysqli_query($objCon,$sql_c); 
			while($objResult_c = mysqli_fetch_array($query_c))
			{  
				if(!empty($objResult_c["income"])){
					
					
				$discountshow = 0;
				$getdata2 = 0;
				if(!empty($objResult_c["discount"])){
					$discountshow = $objResult_c["discount"];
				}
				if(!empty($objResult_c["income"])){
					$getdata2 =  $objResult_c["income"];	
				} 
				
				$newcalculator = $getdata2 - $discountshow;
			 	$vat = ($newcalculator * 100) / 107;
					
					
					
				$allpasy2 += $vat; 
				$allpasy +=  $newcalculator - ($vat);
				  
				if(!empty($objResult_c["income"])){
					$allpasy2_new +=  $objResult_c["income"];	
				} 
					 
				if(!empty($objResult_c["discount"])){
					$allpasy3_new += $objResult_c["discount"];
				}
					 
					$discoount += $objResult_c["income"]; 
					
					if($check_round_payment == $objResult_c["orderdata"]){
						
					}else{
						$check_round_payment = $objResult_c["orderdata"];
						$check_round_dis++; 
					}
					 
				}
				 
				if(!empty($objResult_c["paymentother"])){
				$discoountpaymentother += $objResult_c["paymentother"]; 
				}  
				 
				
			}	

										 
 
			$txtshow = " เป็นหนี้ ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
			if($objResult2["closebill"] == "เป็นหนี้"){ 
				
			$txtshow = " กำลังผ่อน ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			if($objResult2["onoff"] == "NPL"){ 
				
			$txtshow = " กำลังผ่อน NPL ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			}

			}else if($objResult2["closebill"] == "หมดหนี้"){
			$txtshow = " หมดหนี้ ";
			$hdd = " display: none;  "; 
			$bgbtn = " #FFE0E0  ";

			}
			 
			$allmoney = ($daytotal*$dayprice)-$discoount;
			
			//// echo   $dayprice  . " <Br> ";
			//// echo  ($daytotal*$dayprice) . " <Br> ";
			//// echo  $discoount . " <Br> ";
			//// echo  $allmoney . " <Br> ";
			
			$vat3_new = (($allmoney) * 100 )  / 107;
			$vat4_new = ($allmoney) - $vat3_new;
			
			//// echo  $vat3_new . " <Br> ";
			//// echo  $vat4_new . " <Br> ";
			 
			
			$disround = $daytotal - $check_round_payment;
			
			if($disround <= 0){
				$disround = 0;
			}
			 
			
			$moneydata = $objResult2["moneydata"]; 
			$moneydown = $objResult2["moneydown"];   
			
			$vat = (($moneydata-$moneydown) * 100  )  / 107;
			$vat2 = ($moneydata-$moneydown) - $vat;
			
			
			
			$vat_new = (($money) * 100 )  / 107;
			$vat2_new = ($money) - $vat_new;
			
			 
			//// echo  $money . " <Br> ";
			// echo $vat_new . " <Br> ";
			// echo $vat2_new . " <Br> ";
			
			if($vat2 <= 0){
				$vat2 = 0;
			} 
			
		    if($objResult2["closebill"] == "หมดหนี้"){
			 $vat2 = 0;
			 $allmoney = 0;
			 $disround = 0;

			}
		?>
		<tr  >  

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?>  </font></div></td>
 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td>
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$daytotal); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$money-$vat2_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$vat2_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+ ($money-$vat2_new) + $vat2_new); ?>  </font></div></td>
	 
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$disround); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$vat3_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$vat4_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$vat4_new+$vat3_new); ?>  </font></div></td>
	 
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$check_round_payment); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy2_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy3_new); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy2_new-$allpasy3_new); ?>  </font></div></td> 
    
     
	 
		</tr> 
		<?php $i++; $totaldata1_no++; $totaldata1+= (($money-$vat2_new) + $vat2_new); $totaldata2 += $allpasy2_new-$allpasy3_new; $totaldata3 += $vat4_new+$vat3_new; } ?>
		</tbody>

		 <tfooter> 
		 <tr>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม <?php echo number_format(0+$totaldata1_no); ?> &nbsp;  </font></div></th>     
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata1); ?>  &nbsp;  </font></div></th>   
			 
			 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata3); ?>  &nbsp;  </font></div></th> 
			
			   
			 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata2); ?>  &nbsp;  </font></div></th> 
			
		 </tr>
		  
	    </tfooter>
	    
	    
	    
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