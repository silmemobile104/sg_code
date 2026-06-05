<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ใบรับรองแทนใบเสร็จรับเงิน  </title>
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
	 $cutbill = explode("PO", $bill_no);
	 $newbill =   "SGCIFR".$cutbill[1];
	 
				
 
	$sql = "SELECT * FROM product Where  bill_no = '". $bill_no ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$name = $objResult["name"];   
		$codeno = $objResult["codeno"];    
		$typedata = $objResult["typedata"];   
		$typedata2 = $objResult["typedata2"];   
		$color = $objResult["color"];   
		$storerage = $objResult["storerage"];   
		$appleid = $objResult["appleid"];   
		$password = $objResult["password"];   
		$typedata_2 = $objResult["typedata_2"];   
		$note = $objResult["note"];   
		$price1 = $objResult["price1"];   
		$price2 = $objResult["price2"];   
		$totalprice = $objResult["totalprice"]; 
		$bill_no = $objResult["bill_no"];  
		$major = $objResult["major"];  
		$status = $objResult["status"];  
		$computer = $objResult["computer"];  
		$comeback = $objResult["comeback"];  
		$date_start = $objResult["date_start"];  
		
		
		$name_typedata = "";
		$sql_s = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
		$query_s = mysqli_query($objCon,$sql_s);
		while($objResult_s = mysqli_fetch_array($query_s))
		{ 
			$name_typedata =  $objResult_s["name"];
		}
	}  			 
	
	$sql = "SELECT * FROM major Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$m_name = $objResult["name"];  
		$m_address = $objResult["address"];
		$m_telphone = $objResult["telphone"];   
		$m_pasy = $objResult["pasy"];    
	} 
	?>
    	       
  
    	 <table width="100%" border="0"    >  
		  <tr>
			 <td align="center" width="30%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <img src="../logo.png" style="width: 100%;">
				</font>
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 30px; margin-right: 5px; margin-top: 45px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> <?php echo $m_name; ?> </b>  <br> 
				<font size="2px" style="font-size: 17px;">   
			 	  <?php echo $m_name; ?>   <br>  
			 	  <?php echo $m_address; ?>  โทร <?php echo $m_telphone; ?>   <br>   
			 	  เลขประจำตัวผู้เสียภาษี  <?php echo $m_pasy; ?>     
				</font>
				</font>
			 </div>
			 </td> 
		  </tr>   
  		</table>	
                         
    	 <table width="100%" border="0" style=" margin-top: -30px; "    >  
		  <tr>
			 <td align="center" width="30%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				 &nbsp;
			 </div>
			 </td> 
			 <td align="center" valign="top" height="0px"  >  
			 <div style="margin-left: 30px; margin-right: 5px; margin-top: 0px; " align="left"  >  
				<font size="2px" style="font-size: 22px;">   
			 	 <b> ใบรับรองแทนใบเสร็จรับเงิน </b>  <br>  
				</font>
			 </div>
			 </td> 
		  </tr>   
  		</table>	   
           
		 <div style="margin-left: 30px; margin-right: 5px; margin-top: 0px; " align="right"  >  
			<font size="2px" style="font-size: 22px;">   
			     เลขที่ <?php echo $newbill; ?>
			     <div>  </div>
				 วันที่ <?php echo DateThai($date_start)." ".DateThai2($date_start); ?>
			 <br>  
			</font>
		 </div>
  
  
		 <div style=" margin-top: 0px; " align="right"  >  
			<table width="100%">
				<tr>
					<td width="80%">  
					<font size="2px" style="font-size: 20px;"> 
					นามผู้ขาย......................................................................................................................................................
					</font>
					
					
					
					<div style="  margin-top: -30px; margin-left: 85px; " align="left"><font size="6px" style="font-size: 17px;"> 
					&nbsp; <?php echo $name_typedata; ?>    </font></div> 
					 
					 
					</td>
					<td>  
					<font size="2px" style="font-size: 20px;">   
						( ผู้ซื้อ / ผู้รับบริการ )
					</font>
					</td> 
				</tr>
			</table>
		 </div>
         
         
          <table id="customers"  style=" margin-top: 10px; "    >
					 
			 <tr>
				<td width="2%" bgcolor="#BEC6CB" height="35px;" style=" "  ><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 17px; ">    วัน เดือน ปี    </font></div></td>  
				<td width="10%" bgcolor="#BEC6CB" style="  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 17px; ">   รายละเอียดรายจ่าย  </font></div></td>       
				<td width="2%" bgcolor="#BEC6CB" style=" "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 17px; ">    จำนวนเงิน  </font></div></td>   
				<td width="2%" bgcolor="#BEC6CB" style="  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 17px; ">   หมายเหตุ     </font></div></td>  
			 </tr>   
           
            <tr > 
										
			<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " > <?php echo DateThai($date_start)." ".DateThai2($date_start); ?>  </font></div></td> 
			<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " > <?php echo $name; ?>  </font></div></td> 
			<td style=" "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " > <?php echo number_format(0+$price1); ?>  </font></div></td> 
			<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >    </font></div></td> 
			
			</tr> 
			
			<?php
				for($loop = 1; $loop <= 10; $loop++){ 
			?>
			      
            <tr > 
										
			<td style="   "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  &nbsp;  </font></div></td>  				
			<td style="   "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  &nbsp;  </font></div></td> 				
			<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  &nbsp;  </font></div></td> 				
			<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  &nbsp;  </font></div></td> 	 
			
			</tr> 
			
			<?php } ?>   
			
            <tr > 
										
			<td bgcolor="#BEC6CB" colspan="2"><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  <?php echo Convert($price2); ?>  </font></div></td>  				
			<td bgcolor="#BEC6CB"><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >  รวมทั้งสิ้น  </font></div></td> 				 
			<td bgcolor="#BEC6CB"><div align="center"><font size="3px" color="Black" style=" font-size: 17px; " >   <?php echo number_format(0+$price1); ?>   </font></div></td> 				 
			</tr> 
		  </tbody> 
		  </table>                                      
                                       
                                                                                                       
			<table width="100%" border="0" style=" margin-top: 10px; "      >  
			  <tr>
				  <td    >  
  	    
					 <div style="width: 100%;  margin-top: 5px;" align="left"><font size="6px" style="font-size: 17px;"> &nbsp;&nbsp; ข้าพเจ้า................................................................................(ผู้เบิกจ่าย)     ตำแหน่ง................................................................................	
					 <div> </div>
						ขอรับรองว่า รายจ่ายข้างต้นนี้ไม่อาจเรียกเก็บใบเสร็จรับเงินจากผู้รับได้ และข้าพเจ้าได้จ่ายไปในงานของทาง
					 <div> </div>
						บริษัท เอสจี ลิสซิ่ง พลัส จำกัด โดยแท้	ตั้งแต่วันที่       01/01/2563	ถึงวันที่    30/01/2563		
	
						</font></div>

					<div style="  margin-top: -70px; margin-left: 95px; " align="left"><font size="6px" style="font-size: 17px;"> 
					 &nbsp;   </font></div> 
					<div style="  margin-top: -20px; margin-left: 400px;  " align="left"><font size="6px" style="font-size: 17px;"> 
					  &nbsp; </font></div> 
 
					<div style="margin-top: -13px; "  ><font size="6px" style="font-size: 13px;">  &nbsp;    </div>

				 </td> 
			  </tr>   
			</table>                                                                                                                                  
                                                                                                       
			<table width="100%" border="0" style=" margin-top: 50px; "      >  
			  <tr>
				  <td    >  
  	    
					 <div style="width: 100%;  margin-top: 5px;" align="right"><font size="6px" style="font-size: 17px;">  ลงชื่อ...............................................(ผู้เบิกจ่าย)
					 <div> </div>
					 ลงชื่อ..................................................(ผู้อนุมัติ)
	
						</font></div>

					<div style="  margin-top: -47px; margin-left: 550px; " align="left"><font size="6px" style="font-size: 17px;"> 
					 &nbsp;   </font></div> 
					<div style="  margin-top: 0px; margin-left: 550px;  " align="left"><font size="6px" style="font-size: 17px;"> 
					  &nbsp; </font></div> 
 
					<div style="margin-top: -13px; "  ><font size="6px" style="font-size: 13px;">  &nbsp;    </div>

				 </td> 
			  </tr>   
			</table>                                                                                                                                            
		 <div style="margin-left: 30px; margin-right: 5px; margin-top: 20px; " align="left"  >  
			<font size="2px" style="font-size: 17px;">   
			    (หมายเหตุ  เอกสารตัวอย่างเพื่อใช้ประกอบความเข้าใจเท่านั้น อาจต้องปรับเปลี่ยนเพื่อให้เหมาะสมกับกิจการของท่าน)
			 <br>  
			</font>
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