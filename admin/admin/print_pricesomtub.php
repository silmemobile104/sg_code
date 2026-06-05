<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  บิลใบเสร็จ   </title>
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
	
    $namemember5 = "";
    $sql2 = "  SELECT *  FROM pricesomtub   where bill_no = '".$bill_no."'     ";  
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
		$create_date = $objResult2["create_date"];       
		$create_date2 = $objResult2["create_date2"];       
		$create_time = $objResult2["create_time"];       
		$create_by = $objResult2["create_by"];       
		$titledata = $objResult2["titledata"];       
		$price = $objResult2["price"];       
		$bank = $objResult2["bank"];       
		$notedata = $objResult2["notedata"];       
		$payment = $objResult2["payment"];       
		$pasycheck = $objResult2["pasy"];       

	} 			 
	
	$sql = "SELECT * FROM customerpunpon Where  pk = '".$customer."' ";   
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$c_names = $objResult["name"];  
		$c_percent = $objResult["percent"];
		$c_telphone = $objResult["telphone"];   
		$c_address = $objResult["address"];   
		$c_bank1 = $objResult["bank1"];   
		$c_bank2 = $objResult["bank2"];   
 
	}  
	
	
	$sql = "SELECT * FROM major Where  pk = '1' ";   
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$names = $objResult["name"];  
		$addresss = $objResult["address"];
		$telphones = $objResult["telphone"];   
		$pasy = $objResult["pasy"];   
 
	}  
							 
	
?>
    	      
   
  	<table width="100%" border="0"   >  
		  <tr> 
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 19px;">   
			 	 <b> <?php echo $names; ?>  </b>  <br>
			 	  <?php echo $addresss; ?>  <br>
			 	  โทร <?php echo $telphones; ?>   <br>  
			 	  เลขที่ผู้เสียภาษี <?php echo $pasy; ?>   <br>   
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>
 			
 			
  	<table width="100%" border="0" align="center"   >  
		  <tr>  
			 <td align="center" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 19px;">    
			 	     <b> บิลใบเสร็จ   </b>
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>
  	
  	<table width="100%" border="0"   >  
		  <tr>  
			 <td align="right" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">    
			 	    เลขที่ <?php echo $bill_no; ?>  <br>
			 	 	วันที <?php echo DateThai($create_date)." ".datethai2($create_date)." เวลา ".$create_time." น. ";?> <br> 
				</font>
			 </div>
			 </td>
		  </tr>    
  	</table>
  			 
<table id="customers"    > 
<tbody>   
<tr > 

<td><div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > 1 </font></div></td> 
 
<td><div align="left" style=" margin-left: 5px; margin-right: 5px; "><font size="3px" color="Black" style=" font-size: 18px; " > <?php echo $titledata; ?> </font></div></td> 
 
<td><div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > <?php echo number_format(0+$price); ?> </font></div></td>

</tr>   
<?php for($loop = 1; $loop <=10; $loop++){ ?>

<tr >  
<td><div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > &nbsp; </font></div></td> 
<td><div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > &nbsp; </font></div></td> 
<td><div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > &nbsp; </font></div></td> 
</td>

</tr> 
<?php } ?>
<tr> 
<td colspan="2" >
<div align="right"><font size="3px" color="Black" style=" font-size: 18px; " > รวมเป็นเงิน &nbsp;  </font></div>
</td>
<td colspan="1" >
<div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > <?php echo number_format(0+$price); ?>  </font></div>
</td>
</tr>  
<tr> 
<td colspan="2" >
<div align="right"><font size="3px" color="Black" style=" font-size: 18px; " > จำนวนภาษีมูลค่าเพิ่ม 7.00 %  &nbsp; </font></div>
</td>
<td colspan="1" >
<div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > <?php 
	if($pasycheck == "ภาษีแยกนอก"){
		 $calpasy =  $price * 0.07 ;  
	}
	if($pasycheck == "ภาษีรวมใน"){
		 $calpasy = ( $price * 7 ) / 107;  
	} 

	if($pasycheck == "ไม่คิดภาษี"){
		$calpasy = 0; 
	} 
	 
	echo number_format(0+$calpasy); 
	?>  </font></div>
</td>
</tr> 
<tr> 
<td colspan="2" >
<div align="right"><font size="3px" color="Black" style=" font-size: 18px; " > จำนวนเงินรวมทั้งสิน  &nbsp; </font></div>
</td>
<td colspan="1" >
<div align="center"><font size="3px" color="Black" style=" font-size: 18px; " > <?php 
	 
	$cal = $calpasy + $price;
	  
	echo number_format(0+$cal); 
	
	
	?>  </font></div>
</td>
</tr> 
  
 
</tbody>  
<thead>  
<tr>
<td width="4%" bgcolor="#FFF" height="35px;"  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 18px; ">   ลำดับ    </font></div></td>     
<td width="50%" bgcolor="#FFF" ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 18px; ">  รายการ     </font></div></td>    
<td width="8%" bgcolor="#FFF"  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 18px; ">  จำนวนเงิน   </font></div></td>  
</tr>
</thead>  					 
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