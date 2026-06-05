<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ใบส่งซ่อม  </title>
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
		$sql2 = "  SELECT * FROM mobile_restore    where  bill_no != '' and  bill_no = '".$bill_no."'  order by  pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{   
				$datesave = $objResult2["datesave"];  
				$customer  = $objResult2["customer"];  
				$telphone  = $objResult2["telphone"];  
				$proshow1  = $objResult2["proshow1"];  
				$proshow2  = $objResult2["proshow2"];  
				$proshow3  = $objResult2["proshow3"];  
				$proshow4  = $objResult2["proshow4"];  
				$proshow5  = $objResult2["proshow5"];  
				$proshow6  = $objResult2["proshow6"];  
				$proshow7  = $objResult2["proshow7"];  
				$typerestore  = $objResult2["typerestore"];  
				$sendata  = $objResult2["sendata"];  
				$telphone1  = $objResult2["telphone1"];  
				$telphone2  = $objResult2["telphone2"];  
				$price1  = $objResult2["price1"];  
				$price2  = $objResult2["price2"];  
				$price3  = $objResult2["price3"];  
				$statusave  = $objResult2["statusave"];  
				$statusavevat  = $objResult2["statusavevat"];  
				$datesave2  = $objResult2["datesave2"];  
				$codecustomer  = $objResult2["codecustomer"];  
				$major = $objResult2["major"];
				$major2 = $objResult2["major2"];
											
			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_create =  $objResult["name"];
			}
											   
		 
		}   
	
		$typerestore_name = "";
		$sql = "SELECT * FROM drop_typerestore where name = '".$typerestore."' order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$typerestore_name = $objResult["name"];
		}
	
	    $sendata_name = "";
		$sql = "SELECT * FROM store_cleam where pk = '".$sendata."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$sendata_name = $objResult["name"];
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
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  <?php echo $name_major1; ?>   </b>  <br>
			 	    <?php echo $name_major2; ?> <br>
			 	    โทร. <?php echo $name_major3; ?>  <br>    
				</font>
			 </div>
			 </td>
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	<b> Page 1 of 1  </b>  <br>
			 	   เลขประจำตัวผู้เสียภาษี <?php echo $name_major4; ?> <br> 
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
			 	 <b> ใบส่งซ่อม    </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>	
                  
                  
  	<table width="100%" border="0"    > 
     <tr>
	 <td align="center" width="70%" valign="top" height="70px"  >               
  		<table width="100%" border="0"  id="customers"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="80px" style=" border-right: 1px solid #000;  "  > 
			   
			  <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; รหัสหน้าจอ =   </b>  <?php echo $proshow5; ?> 
			 	    &nbsp; 
			 	 <b> &nbsp; รุ่น =  </b>  <?php echo $proshow1; ?>  
			 	    &nbsp;  
			 	 <b> &nbsp; สี = </b>  <?php echo $proshow3; ?>   
			 	    &nbsp; 
			 	 <b> &nbsp; ความจุ =  </b>  <?php echo $proshow2; ?>     
			 	    &nbsp; 
			 	 <b>  &nbsp; อีมี่  = </b>  <?php echo $proshow4; ?>   
			 	    &nbsp; 
			 	 <b>  &nbsp; อื่น =  </b>  <?php echo $proshow6; ?>   
				</font>
			 </div>
			  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 2px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; เลขที่สัญญา  </b>  <?php echo $bill_no; ?>    
			 	 <div style="margin-left: 5px; margin-right: 5px; margin-top: 2px; "  >  </div> 
			 	 <b> &nbsp; ชื่อผู้ทำสัญญา  </b>  <?php echo $customer;  ?>   
			 	 <div style="margin-left: 5px; margin-right: 5px; margin-top: 2px; "  >  </div> 
			 	 <b> &nbsp; ที่อยู่  </b>      
		 	 	 
			 	 <div style="margin-left: 5px; margin-right: 5px; margin-top: 25px; "  >  </div> 
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  		  </table>
	 </td>
	 <td align="center" width="30%" valign="top" height="70px"  >       
  		<table width="100%" border="0"  id="customers"   > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="80px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; วันที่  </b>   <?php echo DateThai($datesave2)." ".DateThai2($datesave2); ?>  
		 	 	 <div style="margin-top: 2px; ">  </div>  
			 	 <b> &nbsp; เลขที่ใบเสร็จ  </b>    <?php echo $bill_no; ?> 
		 	 	 <div style="margin-top: 2px; ">  </div>  
			 	 <b> &nbsp; เลขที่อ้างอิง  </b>   <?php echo $bill_no; ?>  
		 	 	 <div style="margin-top: 2px; ">  </div>  
			 	 <b> &nbsp; รายการส่งซ่อม =   </b>  <?php echo $typerestore_name; ?>  
		 	 	 <div style="margin-top: 2px; ">  </div>  
			 	 <b> &nbsp; งซ่อมที่ไหน =  </b>  <?php echo $proshow1; ?>   
		 	 	 <div style="margin-top: 2px; ">  </div>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  		  </table>
	 </td>
	 </tr>    
                 
  	</table> 
                  
     
	 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
		<font size="2px" style="font-size: 16px;">   
		 <b> รายละเอียด    </b>  
		</font>
	 </div>             
    <table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="15%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  วันที่    </b>  
				</font>
			 </div>
			 </td> 
			 <td align="left" width="90%" valign="top" height="0px"    >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> รายละเอียด    </b>  
				</font>
			 </div>
			 </td>  
		  </tr>   
		      	 
  	</table> 
  	
  	<div style="margin-top: -10px;">   
    <hr style="border-bottom: 1px solid #000; "  >
    </div>
                 
	<table width="100%"    > 
  	  	<?php
			$i = 1; 
			$sql = "  
			SELECT *  FROM table_list_store  
			where bill_no = '".$bill_no."'
			order by  pk asc "; 
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{ 
		?>
		  <tr>
			 <td align="left" width="15%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  	<?php echo datethai($objResult["save_key2"])." ".datethai2($objResult["save_key2"]); ?>   </b>  
				</font>
			 </div>
			 </td> 
			 <td align="left" width="90%" valign="top" height="0px"    >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>  	<?php echo $objResult["detail"]; ?>   </b>  
				</font>
			 </div>
			 </td>  
		  </tr>  
	     <?php } ?> 
		      	 
  	</table> 
                  
    
  	<div style="margin-top: 10px;">   
    <hr style="border-bottom: 1px solid #000; "  >
    </div>
                  
	
    
	 <div style="margin-left: 5px; margin-right: 5px; margin-top: 25px; "  >  
		<font size="2px" style="font-size: 16px;">   
		 <b> ยอดชำระค่าซ่อม    </b>  
		</font>
	 </div>             
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
			 	 <b>   <?php echo $typerestore; ?>     </b>  
				</font>
			 </div>
			 </td> 
			 <td align="right" width="30%" valign="top" height="0px"   >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b>    <?php echo number_format(0+$price2, '2', '.', ','); ?>   </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table> 
                               
                  
  	<div style="margin-top: 10px;">   
    <hr style="border-bottom: 1px solid #000; "  >
    </div>
                  
      
  	<table width="100%" border="0" align="center"  style="margin-top: 30px;">
	 <tr>
		 <td align="center"> 
			<font size="2px" color="Black" style="font-size: 18px;"> <b>   ผู้ตรวจสอบ    </b>................................................  </font>
		<br> 
			<font size="2px" color="Black" style="margin-left: 30px; font-size: 18px; "> 
			( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )  </font> 
		 </td> 
		 <td align="center"> 
			<font size="2px" color="Black" style="font-size: 18px;"> <b> ผู้อนุมัติ </b>................................................ </font>
		<br> 
			<font size="2px" color="Black" style="margin-left: 30px; font-size: 18px; "> 
			( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )  </font> 
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