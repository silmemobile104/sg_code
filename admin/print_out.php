<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  บิลทำรายการถอน  </title>
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
	 $round = $_GET["round"];
	 $total_p = $_GET["totalmoney"];
	
	  $namemember1 = "";
	  $namemember2 = "";
	  $namemember3 = "";
	  $namemember4 = "";
	  $namemember5 = "";
	  $sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone, b.passport 
		 FROM member_bank  a Inner Join customer b On   a.member = b.pk 
		 where a.bill_no != '' and a.bill_no = '".$bill_no."'  order by a.pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			$namemember1 = $objResult2["name"];								 
			$namemember2 = $objResult2["telphone"];								 
			$namemember3 = $objResult2["passport"];								 
			$create_date2 = $objResult2["create_date2"];								 
			$price = $objResult2["price"];								 
			$percent = $objResult2["percent"];								 
			$img = $objResult2["img"];								 
			 
		}
	$sql = "SELECT * FROM major Where  pk = '". $_GET["major"] ."' ";   
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$names = $objResult["name"];  
		$addresss = $objResult["address"];
		$telphones = $objResult["telphone"];   
 
	}  
	
	$calsumper = ($percent / 100)   * $price;
	
	
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
    	        
                   
                   
  <table width="100%" style="border: 1px solid #000; ">
  	<tr>
  		<td>
  			 
  			
    	<table width="100%" border="0"  style="border-bottom: 1px solid #000; "   >  
		  <tr>
			 <td align="center" width="10%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <img src="../logo.png" style="width: 100%;">
				</font>
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> บิลทำรายการถอน    </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $name_major1; ?>    <br>
			 	  <?php echo $name_major2; ?>  โทร. <?php echo $name_major3; ?>    <br>    
			 	  เลขประจำวผู้เสียภาษี <?php echo $name_major4; ?>    <br>    
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  	</table>	
                  
                  
  		<table width="100%" border="0" style="border-bottom: 1px solid #000; "  >  
		  <tr>
			 <td align="left"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; เลขที่ทำรายการฝาก  </b>  <?php echo $bill_no; ?>   <br>  
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
			 <td align="left"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div> 
			 	 <b> &nbsp; วันที่  </b>  <?php echo DateThai($create_date2)." ".DateThai2($create_date2);  ?>   <br>   
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
		  </tr>   
  		</table> 
                   
                 
      	      
                  
      	 <table width="100%" border="0"    >  
		  <tr>
			 <td align="left" width="60%" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ข้อมูลผู้ฝากเงิน  </b>  <?php echo $namemember1;  ?>  โทร.  <?php echo $namemember2;  ?>  
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ถอนเงิน   </b>   <?php echo number_format(0+$price); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; หักค่าธรรมเนียม   </b>   <?php echo number_format(0+$calsumper); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ยอดรับเงินสุทธิ   </b>   <?php echo number_format(0+$price - $calsumper); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ยอดเงินคงเหลือ   </b>   <?php echo number_format(0+$total_p); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
			 <td align="left" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
					
					  
					   <?php if(!empty($img)){ ?>
					
							<img src="../img/<?php echo $img; ?>" style=" width: 0%;  ">  
					 
					  <?php  }else{  ?>
	 	 	  
							<img src="images/show.jpg" style=" width: 0%;  ">  
	 	 	  		  
 	 	 	  		  <?php } ?>
	 	 	 
	 	 	 	  <br>  
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
		  </tr>   
		      	 
  		  </table>
      	   
  		  
    	<br>  
                   
      	<div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ผู้ทำรายการถอน  </font> 
    	<br> 
    	<br> 
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> พนักงานทำรายการ  </font> 
    	<br> 
    	<br> 
			 </td> 
		 </tr> 
	  </table> 
	  </div> 
  	
  	            
  		</td>
  	</tr>
  </table>                 
                   
                   
                   
                   
  <table width="100%" style="border: 1px solid #000; ">
  	<tr>
  		<td>
  			 
  			
    	<table width="100%" border="0"  style="border-bottom: 1px solid #000; "   >  
		  <tr>
			 <td align="center" width="10%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <img src="../logo.png" style="width: 100%;">
				</font>
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> บิลทำรายการถอน    </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $name_major1; ?>    <br>
			 	  <?php echo $name_major2; ?>  โทร. <?php echo $name_major3; ?>    <br>    
			 	  เลขประจำวผู้เสียภาษี <?php echo $name_major4; ?>    <br>      
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  	</table>	
                  
                  
  		<table width="100%" border="0" style="border-bottom: 1px solid #000; "  >  
		  <tr>
			 <td align="left"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; เลขที่ทำรายการฝาก  </b>  <?php echo $bill_no; ?>   <br>  
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
			 <td align="left"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div> 
			 	 <b> &nbsp; วันที่  </b>  <?php echo DateThai($create_date2)." ".DateThai2($create_date2);  ?>   <br>   
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
		  </tr>   
  		</table> 
                   
                 
      	      
                  
      	 <table width="100%" border="0"    >  
		  <tr>
			 <td align="left" width="60%" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ข้อมูลผู้ฝากเงิน  </b>  <?php echo $namemember1;  ?>  โทร.  <?php echo $namemember2;  ?>  
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ถอนเงิน   </b>   <?php echo number_format(0+$price); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; หักค่าธรรมเนียม   </b>   <?php echo number_format(0+$calsumper); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ยอดรับเงินสุทธิ   </b>   <?php echo number_format(0+$price - $calsumper); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
			 	 <b> &nbsp; ยอดเงินคงเหลือ   </b>   <?php echo number_format(0+$total_p); ?> บาท   
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
			 <td align="left" valign="top"  >   
				<font size="2px" style="font-size: 16px;">   
		 	 	 <div style="margin-top: 5px; ">  </div>
					
					  
					   <?php if(!empty($img)){ ?>
					
							<img src="../img/<?php echo $img; ?>" style=" width: 0%;  ">  
					 
					  <?php  }else{  ?>
	 	 	  
							<img src="images/show.jpg" style=" width: 0%;  ">  
	 	 	  		  
 	 	 	  		  <?php } ?>
	 	 	 
	 	 	 	  <br>  
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font> 
			 </td> 
		  </tr>   
		      	 
  		  </table>
      	   
  		  
    	<br>  
                   
      	<div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ผู้ทำรายการถอน  </font> 
    	<br> 
    	<br> 
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  .................................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> พนักงานทำรายการ  </font> 
    	<br> 
    	<br> 
			 </td> 
		 </tr> 
	  </table> 
	  </div> 
  	
  	            
  		</td>
  	</tr>
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