<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  ใบเครมสินค้า  </title>
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
	 
	$sql2 = " SELECT * FROM list_chk_cleam_back where  bill_no = '".$bill_no."' Group By bill_no  order by pk asc   ";
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
		$date_comeback = $objResult2["date_comeback"];
		
		$totalbill1 = 0;
		$totalbill2 = 0;
		$totalbill3 = 0;
		$sql = "SELECT * FROM list_chk_cleam_back where bill_no = '".$objResult2["bill_no"]."'  and bill_no != '' 
		Group By bill_no
		order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$totalbill1++;
		}
		$sql = "SELECT * FROM list_chk_cleam_back where bill_no = '".$objResult2["bill_no"]."'   and bill_no != '' 
		order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$totalbill2++;	
			if($objResult["status"] == "เครมสินค้า/รอสินค้า"){

			}else{
			$totalbill3++;	
			} 
		} 
			 										
	}
	 		
	$name_create = "-"; 
	$sql = "SELECT * FROM member_all where pk = '".$create_by."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_create =  $objResult["name"];
	}
	
	
	$name_typedata1 = "";
	$name_typedata2 = "";
	$name_typedata3 = "";
	$sql = "SELECT * FROM store where pk = '".$major2."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_typedata1 =  $objResult["name"];
		$name_typedata2 =  $objResult["address"];
		$name_typedata3 =  $objResult["telphone"];
	}
												 
	
	
	$check = $totalbill2-$totalbill3;
	if($check <= 0){
		$custbill = explode("SGC", $bill_no);
		$bill_no2 = "SGRT".$custbill[1];
	}									 
	
					 
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
    	      
   
  	<table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="7%" valign="top" height="0px"  >    
				  
			 	<img src="../logo.png" style=" width: 100%; " >
				  
			 </td>
			 <td align="left" width="40%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">     
			 	  <?php echo $name_major1; ?>    <br>
			 	  <?php echo $name_major2; ?>  โทร. <?php echo $name_major3; ?>    <br>    
			 	  เลขประจำวผู้เสียภาษี <?php echo $name_major4; ?>    <br>      
			 	  เลขที่เอกสารอ้างอิง <?php echo $bill_no; ?>  <br>    
			 	  เลขที่เอกสาร <?php echo $bill_no2; ?>  <br>    
				</font>
			 </div>
			 </td>
			 <td align="right" width="20%" valign="top" height="0px"  >  
			 <div align="center" style="margin-left: 5px; margin-right: 5px; margin-top: 5px; border: 1px solid #000; width: 100px; "  >  
				<div style="margin-top: 5px; margin-bottom: 5px; ">    
				<font size="2px" style="font-size: 16px;">    
			 	    ใบรับเข้าสินค้า   <br>  
				</font>
				</div>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>
 			
 	<hr>
 	
 	<table width="100%" border="0"   >  
		  <tr> 
			 </td>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	  ข้อมูลร้าน : <?php echo $name_typedata1; ?>    <br>
			 	  ที่อยู่ : <?php echo $name_typedata2; ?>    <br>  
			 	  เบอร์โทร : <?php echo $name_typedata3; ?>    <br>  
				</font>
			 </div>
			 </td>
			  
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	  วันที่รับเตนมเข้า <?php 
					if(!empty($date_comeback)){
						echo DateThai($date_comeback)." ".DateThai2($date_comeback); 
					} 
					?>  <br>
			 	  &nbsp;; <br> 
			 	  &nbsp;; <br> 
				</font>
			 </div>
			 </td>
		  </tr>   
		      	 
  	</table>
 			
 	<hr>
  			
     	 
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
										  
												
									
										$sql2 = " SELECT * FROM list_chk_cleam_back where  bill_no = '".$bill_no."'  order by pk asc  ";   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												 
											  
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_create5 = "-"; 
												$name_create6 = "-"; 
												$name_create7 = "-"; 
												$showclose5 = "-"; 
												$name_major = "-"; 
												$name = "";
												$nstorerage = "";
												$codeno = "";
												$appleid = "";
												$password = "";
												$note = "";
												$price1 = "";
												$price2 = "";
												$totalprice = "";
												$sql = "SELECT * FROM product where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
													$nstorerage = $objResult["storerage"];
													$name = $objResult["name"];
													$codeno = $objResult["codeno"];
													$appleid = $objResult["appleid"];
													$password = $objResult["password"];
													$note = $objResult["note"];
													$price1 = $objResult["price1"];
													$price2 = $objResult["price2"];
													$totalprice = $objResult["totalprice"]; 
													 
														$sql_c = " SELECT * FROM major where pk = '".$objResult["major"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
															$name_major =  $objResult_c["name"];
														} 
											 
													
														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata4 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata3 =  $objResult_c["name"];
														}
 
														$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
														$query_chk = mysqli_query($objCon,$sql_chk); 
														while($objResult_chk = mysqli_fetch_array($query_chk))
														{
															$showclose5 = $objResult_chk["name"];   
														}

												}
											 		 
										?>
										<tr > 
										  	
										  
										<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  	
										  
										<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?>  </font></div></td> 
										 
										  	
										  
										<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata3; ?>  </font></div></td> 
										 
										  	
										  
										<td style="   "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codeno; ?>  </font></div></td> 
										  	
										  
										<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $showclose5; ?>  </font></div></td> 
										  	
										  
										<td style="   "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $note; ?>  </font></div></td> 
										  
									 
	  						 					
										</tr > 
										<?php $i++; $totalprice1++;   } ?>
										<tr>
											<td>&nbsp;  </td>
											<td>&nbsp;  </td>
											<td>&nbsp;  </td>
											<td>&nbsp;  </td>
											<td>&nbsp;  </td>
											<td>&nbsp;  </td>
										</tr>
									</tbody>	 
	   
	    							<thead>  
								  	<tr>
												<td width="4%" bgcolor="#FFF" height="30px;"  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></td>     
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อสินค้า     </font></div></td> 
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี  </font></div></td>    
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเลขเครื่อง     </font></div></td>   
												<td width="4%" bgcolor="#FFF" ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> ความจุ    </font></div></th>           
												 
												<td width="4%" bgcolor="#FFF"  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ   </font></div></td>  
											 </tr>
							 		</thead> 	
							 
							 
	</table> 
   
    <br>  
                  
                  
      
 	<table width="100%" border="0"   >  
		  <tr> 
			 </td>
			 <td align="left" width="40%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	  จำนวนรายการ : <?php echo number_format(0+$totalprice1); ?>   รายการ    <br>
			 	  จำนวนสินค้า : <?php echo number_format(0+$totalprice1); ?>    ชิ้น  <br>   
				</font>
			 </div>
			 </td>
			  
		  </tr>   
		      	 
  	</table>
 			            
                  
               
    <br>     
                  
                   
      	<div style="margin-left: 10px; margin-right: 10px; ">
      	<table width="100%" border="0" align="center"  style="margin-top: 5px;">
		 <tr>
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ผู้ส่งสินค้า............................................................................... </font>  
    	<br> 
    	<br> 
			 </td> 
			 <td align="center"> 
				<font size="2px" color="Black" style="font-size: 18px;">
    	<br>  ผู้รับสินค้า............................................................................... </font> 
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