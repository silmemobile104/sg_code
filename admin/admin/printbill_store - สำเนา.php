<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  พิมพ์ใบเสร็จ รายการขาย </title>
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
		$sql2 = "  SELECT *
		 FROM list_order_store 
		 where bill_no != '' and bill_no = '".$bill_no."'  order by pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{   
				$totalprice1 = $objResult2["money"];  
				$create_date = $objResult2["create_date"];  
				$create_date2 = $objResult2["create_date2"];  
				$create_time = $objResult2["create_time"];     
				$name = $objResult2["customer"];     
				$pasy = $objResult2["pasy"];     
											 
											
			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_create =  $objResult["name"];
			}
											   
			$name_create2 = "-"; 
			$name_create3 = "-"; 
			$name_create4 = "-"; 
			$name_major = "-"; 
			$name_major2 = "-"; 
			$p_data1 = "";
			$p_data2 = "";
			$p_data3 = "";
			$p_data4 = "";
			$p_data5 = "";
			$codeno = "";
			$nameproduct = "";
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$p_data1 = $objResult["appleid"];
				$p_data2 = $objResult["password"];
				$p_data3 = $objResult["storerage"];  
				$codeno = $objResult["codeno"];   
				$nameproduct = $objResult["name"];  
				
				$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data4 =  $objResult_c["name"];
				}
				
				$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$name_create2 =  $objResult_c["name"];
				}
				
				$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$name_create3 =  $objResult_c["name"];
				}
				
				
				$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data5 =  $objResult_c["name"];
				}
			}
											
			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major =  $objResult_c["name"]; 
			}	 
		}   
	
	
	 	$passport = "";
	 	$all_address = "";
	 	$codecustomer = "";
 
	 
	?>
    	      
   
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> บริษัท ซิลมีน โมบาย จำกัด   </b>  <br>
			 	   883 ถ.สิโรรส ต.สะเตง  อ.เมือง  จ.ยะลา   9500 <br>
			 	   098-8957600  <br>    
				</font>
			 </div>
			 </td>
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	<b> Page 1 of 1  </b>  <br>
			 	   เลขประจำตัวผู้เสียภาษี 0955562080701 <br>
			 	   สาขาที่ออกเอกสาร <?php echo $name_create2." ".$name_major; ?>  <br>   
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>
  			
    <table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="center" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> ใบเสร็จรับเงินรายการขาย    </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>	
                  
                  
  	<table width="100%" border="0"    > 
     <tr>
	 <td align="center" width="70%" valign="top" height="0px"  >               
  		<table width="100%" border="0"  id="customers"   > 
  	  
		  <tr>
			 <td align="left" width="70%" valign="top" height="80px" style=" border-right: 1px solid #FFF;  "  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; เลขที่สัญญา  </b>  <?php echo $bill_no; ?>   <br> 
			 	 <b> &nbsp; ชื่อผู้ทำสัญญา  </b>  <?php echo $name;  ?>   <br> 
			 	 <b> &nbsp; ที่อยู่  </b> <?php echo $all_address; ?>  <br> 
		 	 	 <div style="margin-top: 5px; ">  </div>
				</font>
			 </div>
			 </td>
			 <td align="left" width="30%" valign="top" height="80px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	<b> รหัสลูกหนี้ </b>  <?php echo $codecustomer; ?> <br>   
			 	<b> เลขประจำตัว </b>  <?php echo $passport; ?>  <br>   
			 	<b> &nbsp; </b>  <br> 
		 	 	 <div style="margin-top: 5px; ">  </div>   
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  		  </table>
	 </td>
	 <td align="center" width="30%" valign="top" height="0px"  >       
  		<table width="100%" border="0"  id="customers"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="80px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; วันที่  </b>   <?php echo DateThai($create_date)." ".DateThai2($create_date); ?> <br>
			 	 <b> &nbsp; เลขที่ใบเสร็จรายการขาย  </b>  
			 	 <?php  echo $bill_no;  ?>
			 	  <br> 
			 	 <b> &nbsp; เลขที่อ้างอิง  </b>    - <br> 
		 	 	 <div style="margin-top: 5px; ">  </div>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  		  </table>
	 </td>
	 </tr>    
                 
  	</table> 
                  
                   
    <table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="15%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  No    </b>  
				</font>
			 </div>
			 </td> 
			 <td align="center" width="50%" valign="top" height="0px"    >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> รายการ    </b>  
				</font>
			 </div>
			 </td> 
			 <td align="right" width="30%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> จำนวนเงิน    </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table> 
  	
  	<div style="margin-top: -10px;">   
    <hr style="border-bottom: 1px solid #000; "  >
    </div>
                 
        <table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="15%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  1    </b>  
				</font>
			 </div>
			 </td> 
			 <td align="center" width="50%" valign="top" height="0px"    >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  <?php echo $nameproduct; ?>     </b>  
				</font>
			 </div>
			 </td> 
			 <td align="right" width="30%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>    <?php echo number_format(0+$totalprice1, '2', '.', ','); ?>   </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table> 
                  
    <br><br><br> 
                  
  	<div style="margin-top: -10px;">   
    <hr style="border-bottom: 1px solid #000; "  >
    </div>
                  
    <table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="60%" valign="top" height="0px"   >  
			 
    		 <table width="100%" border="0"   >
    		 <tr> 
			 <td align="left" width="20%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  รวมเงิน  <?php echo number_format(0+$totalprice1, '2', '.', ','); ?> บาท   </b>  
				</font
			 </div>
			 </td> 
			 <td align="center" width="20%" valign="top" height="0px"    >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> ส่วนลด 0.00 บาท    </b>  
				</font>
			 </div>
			 </td> 
			 <td align="right" width="20%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> รวมเป็นเงิน <?php echo number_format(0+$totalprice1, '2', '.', ','); ?> บาท    </b>  
				</font>
			 </div>
			 </td>  
			 </tr>   
			 <tr>
			 <td align="center" width="60%" colspan="3" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	<hr>
				</font>
			 </div> 
			 </td> 
		  	 </tr>
			 <tr>
			 <td align="center" width="60%" colspan="3" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px;   "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> ( <?php echo ReadNumber(0+$totalprice1 ); ?>บาท )   </b>  
				</font>
			 </div> 
			 </td>  
		  	 </tr>
			 <tr>
			 <td align="center" width="60%" colspan="3" valign="top" height="0px"   >  
			 <table width="100%" border="0" align="center"  style="margin-top: 5px;">
				 <tr>
					 <td align="center"> 
						<font size="2px" color="Black" style="font-size: 18px;"> <b>   ผู้รับสินค้า</b>................................................  </font>
					<br> 
						<font size="2px" color="Black" style="margin-left: 30px; font-size: 18px; "> 
						( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )  </font> 
					 </td> 
					 <td align="center"> 
						<font size="2px" color="Black" style="font-size: 18px;"> <b> ผู้รับเงิน</b>................................................ </font>
					<br> 
						<font size="2px" color="Black" style="margin-left: 30px; font-size: 18px; "> 
						( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )  </font> 
					 </td> 
				 </tr> 
			  </table>  
			 </td>  
		  	 </tr>
			 
			 </table>  
			 </td>  
			  
			 <td align="right" width="30%" valign="top" height="0px"   >  
			  <table width="100%" border="0"     >  
				  <tr>
					 <td align="left" width="100%" valign="top" height="0px" style="border: 1px solid #000; border-radius: 5px; "  >  
					 
			  		<table width="100%" border="0"     > 
			  		<tr>
			  		  <td width="50%">   
					 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
						<font size="2px" style="font-size: 16px;">   
						 <b> &nbsp; มูลค่าสินค้า  </b>  <br>
						 <b> &nbsp; ภาษี  </b>   <br> 
						 <b> &nbsp; รวมทั้งสิ้น   </b>   <br> 
						 <div style="margin-top: 5px; ">  </div>  
						</font>
					 </div>
					  </td>
					  <td align="right"> 
					 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
						<font size="2px" style="font-size: 16px;">   
						 <b> &nbsp;    <?php echo number_format(0+$totalprice1, '2', '.', ','); ?> </b>  <br>
						 <b> &nbsp;    
						 <?php 
							 if($pasy == "คิดภาษี"){
								 echo number_format(0+($totalprice1*0.07) , '2', '.', ','); 
							 }else{
								  echo number_format(0 , '2', '.', ',');
							 }
							  
							 ?> 
						 </b>   <br> 
						 <b> &nbsp;    
						 	<?php 
							  
							 if($pasy == "คิดภาษี"){
								  echo number_format(0+$totalprice1 + ($totalprice1*0.07), '2', '.', ',');  
							 }else{
								  echo number_format(0+$totalprice1 , '2', '.', ',');
							 }
							  
							 ?> </b>   <br> 
						 <div style="margin-top: 5px; ">  </div>  
						</font>
					 </div>
					  </td>  
			  		</tr> 
			  		</table> 
					 
					 
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