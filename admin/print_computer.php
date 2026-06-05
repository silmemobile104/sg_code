<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  บิลใบเสร็จ (ชำระค่าคอม/ค่าเครื่อง)  </title>
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
	 $major = 1;
	 
	$sql2 = " SELECT * FROM list_chk_computer where  bill_no = '".$bill_no."' Group By bill_no  order by pk asc   ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
			
		

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
	$sql = "SELECT * FROM member_all where pk = '".$create_by."'   order by pk asc  "; 
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
	
							 
	
	?>
    	      
   
  	<table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> <?php echo $namemajor; ?>  </b>  <br>
			 	  <?php echo $addressmajor; ?>    โทร <?php echo $telphonemajor; ?> <br>
			 	   เลขประจำตัวผู้เสียภาษี  <?php echo $pasymajor; ?>   <br>    
				</font>
			 </div>
			 </td>
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">    
			 	    เลขที่บิลใบเสร็จ <?php echo $bill_no; ?> <br>
			 	 	วันที <?php echo DateThai($create_date)." ".datethai2($create_date)." เวลา ".$create_time." น. ";?> <br>
					พนักงานทำเอกสาร <?php echo $name_create; ?> <br>  
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
			 	 <b> บิลใบเสร็จ (ชำระค่าคอม/ค่าเครื่อง)    </b>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>	
                  
                  
    
  	<table width="100%" border="0"    > 
  	  
		  <tr>
			 <td align="left" width="100%" valign="top" height="80px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 16px;">   
			 	 <b> &nbsp; ร้าน  <?php echo $name_create1; ?>  </b>  <br>
			 	  &nbsp;  ที่อยู่ <?php echo $name_create2; ?>  &nbsp;&nbsp;   เบอร์โทร <?php echo $name_create3; ?>  
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>
	  
  	
  	
    <table id="customers" style="margin-top: -15px;"   >
	   
	    <thead> 
		  <tr>
			<td width="4%" bgcolor="#FFF" height="35px;"  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า    </font></div></td>     
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อรายการสินค้า     </font></div></td> 
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าส่งของ   </font></div></td>    
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ความจุ     </font></div></td>   
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี     </font></div></th>     
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเลขเครื่อง/เลขอีมี่    </font></div></th>   
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย (ราคาต้นทุน)     </font></div></td>   
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></td>    
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></td>    
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน %     </font></div></td>      
			<td width="4%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าคอม    </font></div></td>       

			<td width="4%" bgcolor="#FFF"  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน   </font></div></td>  
		 </tr>
		 </thead> 					       
										 
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
		$pasy = 0; 


		$addcode = "";
		$addcode2 = "";



		$sql2 = " SELECT a.*, b.name, c.typedata_2, d.pkselect FROM list_order  a
			Inner Join customer b On   a.customer = b.pk
			Inner Join product c On   a.menu_id = c.pk
			Inner Join list_chk_computer d On   a.pk = d.pkselect

			where d.bill_no = '".$bill_no."'  
			order by a.pk asc   ";  

		/// echo $sql2;
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      

				$totalprice1 = $objResult2["money"]; 
				$totalprice2 = $objResult2["daytotal"]; 
				$totalprice3 = $objResult2["dayprice"];  


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
				$name_create5 = "-"; 
				$name_create6 = "-"; 
				$name_create7 = "-"; 
				$showclose5 = "-";
				$name_major = "-"; 
				$codeno = "-"; 
				$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
				$query = mysqli_query($objCon,$sql);
				while($objResult = mysqli_fetch_array($query))
				{  
					$name_create5 = $objResult["storerage"];
					$name_create7 = $objResult["name"];
					$codeno = $objResult["codeno"];


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
								$name_create4 =  $objResult_c["name"];
						}

						$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
						$query_c = mysqli_query($objCon,$sql_c);
						while($objResult_c = mysqli_fetch_array($query_c))
						{ 
								$name_create6 =  $objResult_c["name"];
						}



						$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
						$query_chk = mysqli_query($objCon,$sql_chk); 
						while($objResult_chk = mysqli_fetch_array($query_chk))
						{
							$showclose5 = $objResult_chk["name"];   
						}


				}

				$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
						$name_major =  $objResult_c["name"];
				}	



				$select_chk = "OFF";
				$sql_c = "SELECT * FROM list_chk_computer where pkselect = '".$objResult2["pk"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);

				////echo $sql_c."";

				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$select_chk =  "ON";
				}


			$hiiden1 = "";
			$hiiden2 = "display: none;";
			if($select_chk == "ON"){  
			$hiiden1 = " display: none; ";
			$hiiden2 = " ";
			}
			
			$pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];
		?>
		<tr > 

		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create7; ?>   </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["cod"]; ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $showclose5; ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create6; ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codeno; ?> </font></div></td> 
		
		 
		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["priceorder"]); ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["moneydown"]); ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["moneycontact"]); ?> </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["percent"]); ?> % </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["computer2"]); ?>   </font></div></td> 


		<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$pricecal); ?>   </font></div></td> 

		</tr>  
		<?php $i++;  
		$totalend += $pricecal;
			
		$pasy += $objResult2["computer2"] * 0.03;

		} ?>
										
		<tr>
			<td colspan="8" style="border-left: 1px solid #FFF; border-bottom: 1px solid #FFF; " >&nbsp;

			</td>
			<td colspan="2" >
				<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > ยอดเงินสุทธิ </font></div>
			</td>
			<td colspan="2" >
				<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalend); ?>  </font></div>
			</td>
		</tr>						
		<tr>
			<td colspan="8" style="border-left: 1px solid #FFF; border-bottom: 1px solid #FFF; " >&nbsp;

			</td>
			<td colspan="2" >
				<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > ยอดหลังหักภาษี ณ ที่จ่าย </font></div>
			</td>
			<td colspan="2" >
				<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
					
					$cal = $totalend * 0.03;
					$cal2 = $totalend  - $pasy;
					
					
					echo number_format(0+$cal2); 
					
					?>  </font></div>
			</td>
		</tr>
	  </tbody> 						 
	  
	</table> 
   
                 
    <br><br>  
                      
    <table width="100%" border="0" align="center"  style="margin-top: 5px;">
				 <tr>
					 <td align="center"> 
						<font size="2px" color="Black" style="font-size: 18px;"> <b>   ผู้รับเงิน </b>................................................  </font>
					<br> 
						<font size="2px" color="Black" style="margin-left: 30px; font-size: 18px; "> 
						( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )  </font> 
					 </td> 
					 <td align="center"> 
						<font size="2px" color="Black" style="font-size: 18px;"> <b> ผู้ทำเอกสาร </b>................................................ </font>
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