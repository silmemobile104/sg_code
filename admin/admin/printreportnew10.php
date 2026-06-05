<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  สรุปรายงานใบฝาก  </title>
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
		$addcode4 = "   and b.name like '%".$customername."%'  or  c.codecustomer like '%".$customername."%' "; 
	}
		
	 ?>            
       
   
	<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="customers"  class=" table    tablemobile  " border="0" style="   "    >
		 <thead>  
		 <tr>
			<th width="3%" bgcolor="#E2E7EC" height="35px;" style="  "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  วันที่ลงข้อมูล    </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เลขที่เอกสาร  </font></div></th>       
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รหัสลูกค้า  </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชื่อลูกค้า </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ยอดเงินฝาก </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ตัดชำระค่างวด </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  คงเหลือ </font></div></th>        
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

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		$totaldata5 = 0;
		$totaldata6 = 0;
		$sql = "   SELECT a.* FROM money_customer_bank a
		Inner Join customer b On a.customer = b.pk
		Inner Join list_order c On c.bill_no = a.bill_no 
		where a.bill_no != '' ".$addcode.$addcode4." Group By a.bill_no order by a.pk desc   ";   
			 
		/// echo $sql;
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
 
			$facebook = " - ";
			$sql2 = "SELECT * FROM customer Where  pk = '". $customer  ."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{    
				$facebook = $objResult2["name"];  
			}
		 
			$discountbank = 0;  
			$discount = 0;  
			$income1 = 0;  
			$moneybank = 0;
			$bankdate = "OFF"; 
			
			
			$contactstart   = date("Y-m-d", strtotime($totalprice4)); 
			$checkend   = date("Y-m-d", strtotime($daystart_load2));  
			$addcode_check = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
			and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
			order by pk asc  "; 
			
		////	echo $sql_c."<Br>";
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$moneybank +=  $objResult_c["money"];   
			}	
				 
			
			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult2["customer"]."'    and bill_no = '".$objResult["bill_no"]."'   ".$code_check2." ";   
			$query_p = mysqli_query($objCon,$sql_p); 
			while($objResult_p = mysqli_fetch_array($query_p))
			{   
				if(!empty($objResult_p["income"])){  
					if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
						$discountbank += $objResult_p["bank"];  
					}
					if($objResult_c["typesave"] == "ชำระ2ทาง"){
						$discountbank += $objResult_p["bank"];  
					}
				}   
			}	 			 
			
			
			$calcultor = $moneybank - $discountbank;
			if($calcultor <= 0){
				$calcultor = 0;
			}
			
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult["create_date2"])." ".DateThai2($objResult["create_date2"])  ; ?>  </font></div></td>
 
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["bill_no"]; ?>  </font></div></td>
	 
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codecustomer; ?>  </font></div></td>
		
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $facebook; ?>  </font></div></td>
		 
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$moneybank); ?>   </font></div></td>  
		 
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$discountbank); ?>   </font></div></td>  
		 
		<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$calcultor); ?>   </font></div></td> 
		
	 
		</tr> 
		<?php $i++;  $totaldata1 += $moneybank; $totaldata3 += $discountbank; $totaldata4 += $calcultor;  $totaldata2++;  } ?>
		<tr  >  

		<th colspan="3" ><div align="right"><font size="3px" color="Black" style=" font-size: 15px; " >     &nbsp; </font></div></th>
  
		<th ><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <?php echo number_format(0+$totaldata2); ?>   </font></div></th>   
		<th ><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <?php echo number_format(0+$totaldata1); ?>   </font></div></th>  
		<th ><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <?php echo number_format(0+$totaldata3); ?>   </font></div></th>  
		<th ><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <?php echo number_format(0+$totaldata4); ?>   </font></div></th>  
		
	 
		</tr> 
		</tbody> 
		</table>  
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