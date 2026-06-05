<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> หนังสือรับรองการหักภาษี ณ ที่จ่าย   </title>
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
	 $pasy_bill = $_GET["pasy_bill"];
	 $total_price = 0;
	
	$sql2 = " SELECT * FROM list_chk_computer where  pasy_bill = '".$pasy_bill."' Group By bill_no  order by pk asc   ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		
		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
		$bill_no = $objResult2["bill_no"];
		$pasy_createdate = $objResult2["pasy_createdate"];
		$pasy_createtime = $objResult2["pasy_createtime"];
		$pasy_bill = $objResult2["pasy_bill"];
		$pasy_createby = $objResult2["pasy_createby"];
		$major = $objResult2["major"];
		$store = $objResult2["major2"];
			
		
		 
		$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   a.menu_id = c.pk
		Inner Join list_chk_computer d On   a.pk = d.pkselect 
		where d.bill_no = '".$bill_no."'  
		order by a.pk asc    "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$total_price +=  $objResult_c["computer2"];
		}
		$totalprice1+=$total_price;  

		$menuid = "-";
		$sql_c = "SELECT * FROM list_order where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$menuid =  $objResult_c["menu_id"];
		}
		
		$name_create1 = "-"; 
		$name_create2 = "-"; 
		$name_create3 = "-";  
		$name_major = "-"; 
		$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{  
			$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_create1 =  $objResult_c["name"];
				$name_create2 =  $objResult_c["address"];
				$name_create3 =  $objResult_c["telphone"];
			}
								
			

			$showclose5 = "-";
			$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
			$query_chk = mysqli_query($objCon,$sql_chk); 
			while($objResult_chk = mysqli_fetch_array($query_chk))
			{
				$showclose5 = $objResult_chk["name"];   
			}

			
		}									
													
	}
	 		
	$name_create = "-"; 
	$sql = "SELECT * FROM member_all where pk = '".$pasy_createby."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_create =  $objResult["name"];
	}
	
	$pasymajor = "-"; 
	$namemajor = "-"; 
	$addressmajor = "-"; 
	$telphonemajor = "-"; 
	$sql = "SELECT * FROM major where pk = '".$major."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$pasymajor =  $objResult["pasy"];
		$namemajor =  $objResult["name"]; 
		$addressmajor =  $objResult["address"]; 
		$telphonemajor =  $objResult["telphone"];  
	}
	
	
	$s_name = " - ";  
	$s_address = " - ";  
	$s_telphone = " - ";     
	$s_major = " - ";    
	$s_bank = " - ";    
	$s_passport = " - ";    
	$sql = "SELECT * FROM store Where  pk = '". $major ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$s_name = $objResult["name"];  
		$s_address = $objResult["address"];
		$s_telphone = $objResult["telphone"];   
		$s_major = $objResult["major"];   
		$s_bank = $objResult["bank"];    
		$s_passport = $objResult["passport"];    

	}  
	
 
?>
    
  	<style>
      input.box {
        width: 15px;
        height: 15px;
      }
    </style>
    
    	      
    	      	      	      
    <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
	<font size="2px" style="font-size: 13px;">   
	 ฉบับที่ 1 (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย ใช้แนบพร้อมกับแบบแสดงรายการภาษี)
	 <div style=" margin-top: 5px; " > </div>
	 ฉบับที่ 2 (สำหรับผู้ถูกหักภาษี ณ ที่จ่าย เก็บไว้เป็นหลักฐาน) 
	</font>
 	</div>
 	 
  	 <table width="100%" border="0" style=" border: 1px solid #000; border-collapse: collapse;"   > 
  	 
  	 <tr>
	 <td colspan="4" align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 0px; margin-right: 0px; margin-top: -3px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	<b>  หนังสือรับรองการหักภาษี ณ ที่จ่าย ตามมาตรา 50 ทวิ แห่งประมวลรัษฎากร	 </b> 
				</font>
			 </div>
			 </td>
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 0px; margin-right: 0px; margin-top: -3px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	  	<b>  	เลขที่ &nbsp; <?php echo $pasy_bill; ?>   &nbsp;&nbsp;&nbsp;&nbsp;   เล่มที่ &nbsp;    </b> 
				</font>
			 </div>
			 </td>
		  </tr>    
  	</table>
	 </td> 
  	 </tr>
  	    
	 <tr>
	 <td colspan="4" align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; display: none; "  >  
			<font size="2px" style="font-size: 13px;">   
			 ผู้มีหน้าที่หักภาษา ณ ที่จ่าย 	 
			  <div style=" margin-top: 5px; " > </div>
			 ชื่อ  สำนักงานหลักประกันสุขภาพแห่งชาติ 
			  <div style=" margin-top: 5px; " > </div>
			ที่อยู่  120 หมู่ 3 ชั้น 2-4 ถนนแจ้งวัฒนะ ศูนย์ราชการเฉลิมพระเกียรติ 80 พรรษา แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพมหานคร 10210
			</font>
		 </div>
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">   
			 ผู้มีหน้าที่หักภาษา ณ ที่จ่าย 	 
			  <div style=" margin-top: 5px; " > </div>
			 ชื่อ  <?php echo $namemajor; ?> 
			  <div style=" margin-top: 5px; " > </div>
			 ที่อยู่  <?php echo $addressmajor; ?> โทร. <?php echo $telphonemajor; ?> 
			</font>
		 </div>
		 </td>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; display: none;  "  >  
			<font size="2px" style="font-size: 13px;">    
			  เลขประจำตัวผู้เสียภาษีอากร (13 หลัก) 
			  <div style=" margin-top: 5px; " > </div>
			  0-9940-00041-09-8 &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " >
			  <div style=" margin-top: 5px; " > </div>
			</font>
		 </div>
		 
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			  เลขประจำตัวผู้เสียภาษีอากร (13 หลัก) 
			  <div style=" margin-top: 5px; " > </div>
			  หนังสือรับรองการหักภาษี ณ ที่จ่าย <?php echo $pasymajor; ?> &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " >
			  <div style=" margin-top: 5px; " > </div>
			</font>
		 </div>
		 </td>
	  </tr>   
  	 </table>
	 </td>
  	 </tr> 
  	 
  	 <!--
  	 <tr>
	 <td  colspan="4"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">   
			 	กระทำการแทนโดย ....................................................................................  	
			 	เลขประจำตัวผู้เสียภาษี ....................................................................................
	 			<div style=" margin-top: 5px; " > </div>
				ชื่อ  ........................................................................................................................................................................   &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " > .........................................................................................................  &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " >
	 			<div style=" margin-top: 5px; " > </div>   
				ที่อยู่  ........................................................................................................................................................................   
				</font>
			 </div>
			 </td> 
		  </tr>   
  	</table>
	 </td>
  	 </tr> 
  	 -->
  	   
  	 <tr>
	 <td  colspan="4"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	    
		 <div style="width: 100%; margin-left: 10px; margin-top: 5px;" align="left"><font size="6px" style="font-size: 13px;"> ชื่อ - ผู้ถูกหักภาษา ณ ที่จ่าย  ........................................................................................................ เลขประจำตัวผู้เสียภาษี ............................................................................................................................ 
			<div style=" margin-top: 5px; " > </div>   
		ชื่อ  ...................................................................................................................................................................................................................................................................................................................
			<div style=" margin-top: 5px; " > </div>   
		ที่อยู่  ................................................................................................................................................................................................................................................................................................................ 
			</font></div>
	 		
		<div style="  margin-top: -63px; margin-left: 130px; " align="left"><font size="6px" style="font-size: 13px;"> 
		 <?php    echo $s_name;    ?>    </font></div> 
		<div style="  margin-top: -15px; margin-left: 430px;  " align="left"><font size="6px" style="font-size: 13px;"> 
		 <?php    echo $s_passport;    ?>    </font></div> 
		<div style="  margin-top: 5px; margin-left: 50px;  " align="left"><font size="6px" style="font-size: 13px;"> 
		 <?php    echo $s_name;    ?>    </font></div>  
		<div style="  margin-top: 5px; margin-left: 50px;  " align="left"><font size="6px" style="font-size: 13px;"> 
		 <?php    echo $s_address;    ?>    </font></div>  
		 
		 
		<div style="margin-top: -13px; "  ><font size="6px" style="font-size: 13px;">  &nbsp;    </div>
	 		  
	 </td>
  	 </tr> 
  	 <tr>
	 <td colspan="4" align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="20%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">   
			 	 ลำดับที่    &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 60px;  " >
				</font>
			 </div>
			 </td> 
			 <td align="left" width="80%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">   
			 	 ในแบบ   &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > 
			 	 ภ.ง.ด. 1ก	&nbsp;  &nbsp; 	 &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > 
			 	 ภ.ง.ด. 1ก พิเศษ	&nbsp;  &nbsp;   &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > 
			 	 ภ.ง.ด. 2	&nbsp;  &nbsp;   &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " >  
			 	 ภ.ง.ด. 3ก
	 			  <div style=" margin-top: 5px; " > </div>
	 			    &nbsp;  &nbsp;  &nbsp;  &nbsp;  
	 			    &nbsp; 
	 			    &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > ภ.ง.ด. 2ก	&nbsp;  &nbsp; 	  &nbsp; 
	 			    <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px; text-align: center;  " value=" ✓ " > ภ.ง.ด. 3ก	&nbsp;  &nbsp; 	 &nbsp; 
	 			    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px; margin-left: 5px;   " > ภ.ง.ด. 53

				</font>
			 </div>
			 </td> 
		  </tr>   
  	 </table>
	 </td>
  	 </tr> 
  	 
  	 <tr>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">   
				
				 <div style=" margin-top: 0px; " align="center" > 
				 ประเภทเงินที่จ่าย
				 </div>
			 	  
				</font>
			 </div>
			 </td>  
		  </tr>   
  	 </table>
	 </td>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="100%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 0px; " align="center" > 
			 วัน/เดือน/ปี
			 </div>
			</font>
		 </div>
		 </td>  
	  </tr>   
  	 </table>
	 </td>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="100%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">   
			 <div style=" margin-top: 0px; " align="center" > 
			 จำนวนเงิน
			 </div>
			</font>
		 </div>
		 </td>  
	  </tr>   
  	 </table>
	 </td> 
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">    
				 <div style=" margin-top: 0px; " align="center" > 
				 ภาษีที่หัก
				 </div>
				</font>
			 </div>
			 </td>  
		  </tr>   
  	 </table>
	 </td>
  	 </tr> 
  	 
  	 
  	 <tr>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">    
				1.เงินเดือน ค่าจ้าง โบนัส ตามมาตรา 40(1)
				 <div style=" margin-top: 5px; " > </div>
				2.ค่าธรรมเนียม ค่านายหน้า ตามมาตรา 40(2)
	 			<div style=" margin-top: 5px; " > </div>
				3.ค่าแห่งลิขสิทธิ์ ตามมาตรา 40(3)
	 			<div style=" margin-top: 5px; " > </div>
				4.(ก) ค่าดอกเบี้ย ตามมาตรา ตามมาตรา 40(4) (ก)
	 			<div style=" margin-top: 5px; " > </div>
				  &nbsp;&nbsp;(ข) เงินปันผล เงินส่วนแบ่งกำไร ตามมาตรา 40(4) (ข) ที่จ่ายจาก
	 			<div style=" margin-top: 5px; " > </div>
				  &nbsp;&nbsp;&nbsp;&nbsp;(1) กิจการที่ต้องเสียเงินได้ นิติบุคคลในอัตราดังนี้
	 			<div style=" margin-top: 5px; " > </div>
				  &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " > (1.1) อัตราร้อยละ 30 ของกำไรสุทธิ
	 			<div style=" margin-top: 5px; " > </div>
				  &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " > (1.2) อัตราร้อยละ 25 ของกำไรสุทธิ
	 			<div style=" margin-top: 5px; " > </div>
				  &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " > (1.3) อัตราร้อยละ 20 ของกำไรสุทธิ
	 			<div style=" margin-top: 5px; " > </div>
				 &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 30px;  " > 1.4) อัตราอื่นๆ (ระบุ)     [ &nbsp;&nbsp; ]    ของกำไรสุทธิ
	 			<div style=" margin-top: 5px; " > </div>
					 &nbsp;&nbsp;(2)กิจการที่ได้รับการยกเว้นภาษีเงินได้นิติบุคคลซึ่งผู้รับเงินปันผลไมได้รับเครดิตภาษี
	 			<div style=" margin-top: 5px; " > </div>
					 &nbsp;&nbsp;(3)กำไรที่ได้รับส่วนที่ได้รับยกเว้นไม่ต้องนำมารวมคำนวณภาษีเงินได้นิติบุคคลซึ่งผู้รับเงิน 
	 			<div style=" margin-top: 5px; " > </div>
						&nbsp;&nbsp;&nbsp;&nbsp; ปันผลไม่ได้รับเครดิตภาษี
	 			<div style=" margin-top: 5px; " > </div>
				5.การจ่ายเงินได้ที่ต้องหักภาษี ณ ที่จ่าย ตามคำสั่งกรมสรรพากรที่ออกตามมาตรา 3 เตรส เช่น ค่าซื้อพืชผลทางการเกษตร (ยางพารา มันสำปะหลัง ข้าว) รางวัลในการประกวด การแข่งขัน การชิงโชค ร้องเพลง ค่าบริการ ค่าแสดงภาพยนตร์ ดนตรี มหรสพ ค่าจ้างทำของ ส่วนลดหรือประโยชน์ใดๆ เนื่องจากการส่งเสริมการขาย ค่าโฆษณา ค่าเช่า ค่าเบี้ยประกัน วินาศภัย ค่าจ้างขนส่ง เงินสะสมจ่ายเข้ากองทุนสำรองเบี้ยเลี้ยงชีพ 
	 			<div style=" margin-top: 5px; " > </div>
				6. อื่นๆ (ระบุ)  &nbsp; <input type="text" style="border: 1px solid #A9A9A9; background-color: #A9A9A9; width: 70px;  " >    

				</font>
			 </div>
			 </td>  
		  </tr>   
  	 </table>
	 </td>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="100%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 5px; " align="center" > 
			     
			     &nbsp;
				 <div style=" margin-top: 0px; " > </div>
				 <?php echo DateThai($pasy_createdate). "  ".DateThai2($pasy_createdate) ; ?>
				
				
			 </div>
			</font>
		 </div>
		 </td>  
	  </tr>   
  	 </table>
	 </td>
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="100%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">   
			 <div style=" margin-top: 5px; " align="center" > 
			  
			     &nbsp;
				 <div style=" margin-top: 0px; " > </div>
				 <?php echo  number_format(0+$totalprice1, 2, '.', ','); ?>
				
				
				
			 </div>
			</font>
		 </div>
		 </td>  
	  </tr>   
  	 </table>
	 </td> 
	 <td  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 13px;">    
				 <div style=" margin-top: 5px; " align="center" > 
				  
			     &nbsp;
				 <div style=" margin-top: 0px; " > </div>
				 <?php 
					 
					if($totalprice1 <= 0){
					$totalsum = 0; 
					}else{ 
					$totalsum = $totalprice1  * 0.03;    
					}
					echo  number_format(0+$totalsum, 2, '.', ','); 
					 
					 ?>
				 
				 </div>
				</font>
			 </div>
			 </td>  
		  </tr>   
  	 </table>
	 </td>
  	 </tr> 
  	 
  	 
  	 <tr>
	 <td colspan="3"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 5px; " align="center" > 
			 รวมเงินภาษีที่หักนำส่ง (ตัวอักษร)  &nbsp;   <?php 
					 
					if($totalprice1 <= 0){
					$totalsum = 0; 
					}else{ 
					$totalsum = $totalprice1  * 0.03;    
					}
					 echo   Convert($totalsum); 
					 
					 ?>
			 </div>
			</font>
		 </div>
		 </td>   
		 <td align="right" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 5px; " align="right" > 
			รวมเงินที่จ่ายและภาษีที่หักนำส่ง 
			 </div>
			</font>
		 </div>
		 </td>   
  	 </tr> 
  	 </table>
  	 </td> 
  	 <td colspan="1"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="100%" valign="top" height="0px"  >  
		 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 5px; " align="center" > 
			  &nbsp;<?php 
					 
					if($totalprice1 <= 0){
					$totalsum = 0; 
					}else{ 
					$totalsum = $totalprice1  * 0.03;    
					}
					 echo  number_format(0+$totalsum, 2, '.', ','); 
					 
					 ?>
			 </div>
			</font>
		 </div>
		 </td>  
	  </tr>   
  	 </table>
	 </td>
  	 </tr> 
  	 
  	 
  	 
  	  <tr>
	 <td colspan="4"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">    
			 <div style=" margin-top: 0px; " align="left" > 
			  เงินที่จ่ายเข้า กบข./กสจ./กองทุนสงเคราะห์ครูโรงเรียนเอกชน .............................. บาท กองทุนประกันสังคม ..................................... บาท 
	 			<div style=" margin-top: 5px; " > </div>
			   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
			   &nbsp; &nbsp; &nbsp; &nbsp; 
			   กองทุนสำรองเลี้ยงชีพ .............................................................. บาท 
			 </div>
			</font>
		 </div>
		 </td>     
  	 </tr> 
  	 </table>
  	 </td>  
  	 </tr> 
  	 
  	 
  	 
  	 <tr>
	 <td colspan="4"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	 <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">     
				จ่ายเงิน 	                
	 			<div style=" margin-top: 5px; " > </div>
				 &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px; text-align: center;" value="✓" > &nbsp; หักภาษี ณ ที่จ่าย 
	 			<div style=" margin-top: 5px; " > </div>
				 &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " >&nbsp;  ออกภาษีให้ตลอดไป	
	 			<div style=" margin-top: 5px; " > </div>         
				 &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > &nbsp;  ออกภาษีให้ครั้งเดียว
	 			<div style=" margin-top: 5px; " > </div>	               
				 &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > &nbsp;  อื่นๆ (ระบุ)  &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 70px;  " >      
			</font>
		 </div>
		 </td>  
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">     
				ขอรับรองว่า ข้อความและตัวเลขดังกล่าวข้างต้นถูกต้องตรงกับความเป็นจริงทุกประการ 
	 			<div style=" margin-top: 30px; " > </div>
 
	        	<table width="100%">
	        		<tr>
	        			<td width="80%">   
						<font size="2px" style="font-size: 13px;">     
						ลงชื่อ .............................................................. มีหน้าที่หักภาษี ณ ที่จ่าย
						<div style=" margin-top: 5px; " > </div>
						วัน/เดือน/ปี  &nbsp; <input type="text" style="border: 1px solid #000; background-color: #A9A9A9; width: 30px;  " > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ที่ออกหนังสือรับรอง  
	        			</font>
	        			</td>
	        			<td>   
 	            			<img src="../logo.png" style=" width: 100%; border-radius: 30px;   " >
	        			</td>
	        		</tr>
	        	</table> 
			</font>
		 </div>
		 </td>
  	 </tr> 
  	 </table>
  	 </td> 
  	  
  	 </tr> 
  	 
  	 
  	 
  	 
  	 <tr>
	 <td colspan="4"  align="left" width="100%" valign="top" height="0px"  style=" border: 1px solid #000; " >  
  	  <table width="100%" border="0"   >  
	  <tr>
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">     
				หมายเหตุ เลขประจำตัวผู้เสียภาษีอากร (13 หลัก)* หมายถึง 
			</font>
		 </div>
		 </td>  
		 <td align="left" width="50%" valign="top" height="0px"  >  
		 <div style="margin-left: 0px; margin-right: 0px; margin-top: 0px; "  >  
			<font size="2px" style="font-size: 13px;">     
				 1. กรณีบุคคลธรรมดาไทย ให้ใช้เลขประจำตัวประชาชนของกรมการปกครอง
	 			<div style=" margin-top: 5px; " > </div>
				2. กรณีนิติบุคคล ให้ใช้เลขทะเบียนนิติบุคคลของกรมพัฒนาธุรกิจการค้า
	 			<div style=" margin-top: 5px; " > </div>
				3. กรณีอื่น ๆ นอกเหนือจาก 1. และ 2. ให้ใช้เลขประจำตัวผู้เสียภาษีอากร (13 หลัก) ของกรมสรรพากร 
			</font>
		 </div>
		 </td>
  	 </tr> 
  	 </table>
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
  height: 13px;
  width: 13px; 
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