<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  บิลใบเสร็จ (ชำระค่าซ่อม)  </title>
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
	 
	$sql2 = " SELECT * FROM list_chk_cleam where  bill_no = '".$bill_no."' Group By bill_no  order by pk asc   ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
		$major = $objResult2["major"];
		$major2 = $objResult2["major2"];
			
		

		$menuid = "-";
		$sql_c = "SELECT * FROM mobile_restore where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$menuid =  $objResult_c["menu_id"];
		}
		 								
				

		$storename1 = "-";
		$storename2 = "-";
		$storename3 = "-";
		$storename4 = "-";
		$sql_c = "SELECT * FROM store where pk = '".$objResult2["major2"]."'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$storename1 =  $objResult_c["name"];
			$storename2 =  $objResult_c["address"];
			$storename3 =  $objResult_c["telphone"];
		}									
	}
	 		
	$name_create = "-"; 
	$sql = "SELECT * FROM member_all where pk = '".$create_by."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_create =  $objResult["name"];
	}
	
	
												 
	$name_major1 = "";
	$name_major2 = "";
	$name_major3 = "";
	$name_major4 = "";
	$sql_c = "SELECT * FROM major where pk = '".$major."'   order by pk asc  "; 
	$query_c = mysqli_query($objCon,$sql_c);
	while($objResult_c = mysqli_fetch_array($query_c))
	{ 
		$name_major1 =  $objResult_c["name"]; 
		$name_major2 =  $objResult_c["address"]; 
		$name_major3 =  $objResult_c["telphone"]; 
		$name_major4 =  $objResult_c["pasy"]; 
	}
	
	
	
?>
    	      
   
  	<table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="7%" valign="top" height="0px"  >    
				  
			 	<img src="../logo.png" style=" width: 100%; " >
				  
			 </td>
			 <td align="left" width="40%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> บิลใบเสร็จชำระเงิน  ค่าซ่อมมือถือ   </b>  <br>
			 	  <?php echo $name_major1; ?>     <br>
			 	  <?php echo $name_major2; ?> โทร. <?php echo $name_major3; ?>   <br>  
			 	  เลขประจำตัวผู้เสียภาษี <?php echo $name_major4; ?>    
				</font>
			 </div>
			 </td>
			 <td align="right" width="20%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	    เลขออกบิลใบเสร็จ <?php echo $bill_no; ?> <br>
			 	 	วันที <?php echo DateThai($create_date)." ".datethai2($create_date)." เวลา ".$create_time." น. ";?> <br>
					พนักงานทำเอกสาร <?php echo $name_create; ?> <br>  
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>
  			
  			
  			
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  ร้านค้า        </b> <?php echo $storename1; ?> 
		 	 	 <div style="margin-top: 5px; ">  </div> 
			 	  <b>  ที่อยู่      </b> <?php echo $storename2; ?>
		 	 	 <div style="margin-top: 5px; ">  </div> 
			 	  <b> เบอร์โทรติดต่อ      </b> <?php echo $storename3; ?>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>  
     	 
    <table id="customers" style="margin-top: 15px;"   >
	    				       
										 
	    <tbody>
									 
									 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
										$totalend = 0; 
   
												
										$addcode = "";
										$addcode2 = "";
										  
												
									
										$sql2 = " SELECT a.*,  b.name   FROM mobile_restore  a 
											Inner Join store_cleam b On   a.sendata = b.pk 
											Inner Join list_chk_cleam d On   a.pk = d.pkselect
											 
											where d.bill_no = '".$bill_no."'  
											order by a.pk asc   ";  
									
										/// echo $sql2;
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												 
											 		   
										$data1 = "";
										$data2 = "";
										$data3 = "";
										$data4 = "";
										$data5 = 0;
										$sql_c = "SELECT * FROM mobile_restore where pk = '".$objResult2["pk"]."'   order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c); 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$data1 =  $objResult_c["bill_no"];
											$data2 =  $objResult_c["datesave2"];
											$data3 =  $objResult_c["customer"];
											$data4 =  $objResult_c["telphone"];
											$data5 =  $objResult_c["price1"];
										}
											 
											
										$note_cleam = $objResult2["typerestore"]; 
											 
										?>
										<tr > 
										  
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?> </font></div></td> 
										
										
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data1; ?> </font></div></td> 
										 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($data2)." ".DateThai2($data2); ?> </font></div></td> 
										 
										 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data3; ?> </font></div></td> 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data4; ?> </font></div></td> 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $note_cleam; ?> </font></div></td>
										
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$data5); ?> </font></div></td>
										  
										</tr>  
										<?php 
											
										$i++;  
										$totalend += $data5;
										
										} ?>
										<tr>
											<td colspan="4" style="border-left: 1px solid #FFF; border-bottom: 1px solid #FFF; " >&nbsp;
											
											</td>
											<td colspan="2" >
												<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > ยอดเงินสุทธิ </font></div>
											</td>
											<td colspan="1" >
												<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalend); ?>  </font></div>
											</td>
										</tr> 
	  </tbody> 						 
	  
	  
	  
	    					<thead> 
										<tr>
											<td colspan="6" style=" border: 1px solid #FFF; border-bottom: 1px solid #000; border-right: 1px solid #000; "  >&nbsp;
											
											</td> 
											<td colspan="1" >
												<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalend); ?>  </font></div>
											</td>
										</tr> 
								  <tr>
												<td width="4%" bgcolor="#FFF" height="35px;"  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></td>     
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่รายการซ่อม     </font></div></td> 
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วัน เดือน ปี   </font></div></td>    
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลูกค้า     </font></div></td>   
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เบอร์โทร    </font></div></th>   
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  อาการซ่อม     </font></div></td>         
												 
												<td width="4%" bgcolor="#FFF"  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าซ่อม   </font></div></td>  
											 </tr>
							 </thead> 	
							 
							 
	</table> 
   
                               
      <div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="50%" border="0" align="center"  style="margin-top: 55px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ....................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px; "> ชื่อผู้ทำรายการ  </font> 
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
			 <td align="center" width="1%">&nbsp;  
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ....................................................................................................... </font>
			<br> 
				<font size="2px" color="Black" style="margin-left: -20px; font-size: 18px;"> ชื่อผู้อนุมัติ  </font> 
    	<br>  
    	<br>  
    	<br>  
    	<br>   
			 </td> 
		 </tr> 
	  </table> 
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