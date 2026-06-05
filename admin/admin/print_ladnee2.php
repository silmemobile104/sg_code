<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> ใบลดหนี้ / ใบกำกับภาษี </title>
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
		$sql2 = "  SELECT a.*, b.name, b.facebook, b.telphone FROM list_order  a Inner Join customer b On   a.customer = b.pk 
		 where a.bill_no != '' and a.bill_no = '".$bill_no."'  order by a.pk  ";  
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{   
				$totalprice1 = $objResult2["money"]; 
				$totalprice2 = $objResult2["daytotal"]; 
				$totalprice3 = $objResult2["dayprice"];  
				$totalprice4 = $objResult2["total"];  
				$totalprice5 = $objResult2["endate"]; 
				$create_date = $objResult2["create_date"];  
				$create_date2 = $objResult2["create_date2"];  
				$create_time = $objResult2["create_time"];  
				$name = $objResult2["name"];
				$name = $objResult2["name"];
			
			
			
				$facebook = $objResult2["facebook"];  
				$telphone = $objResult2["telphone"];   
				$startdate = $objResult2["startdate"];   
				$endate = $objResult2["endate"];   
				$moneydown = $objResult2["moneydown"];   
				$cod = $objResult2["cod"];   
				$moneydata = $objResult2["moneydata"];   
				$codecustomer = $objResult2["codecustomer"];  
			
				$appleid = $objResult2["appleid"];   
				$password = $objResult2["password"];   
				$bank = $objResult2["bank"]; 
			
			  

				$priceorder = $objResult2["priceorder"];    
				$c_price_back = $objResult2["c_total"];
  
				$c_moneydown = $objResult2["c_moneydown"];    
				$c_discount = $objResult2["c_discount"];    
				$c_cancel = $objResult2["c_cancel"];    
				$c_rowback = $objResult2["c_rowback"];    
				$c_total = $objResult2["c_total"];    
				$c_moneylost = $objResult2["c_moneylost"];   
				$c_noreaddon1 = $objResult2["c_noreaddon1"];   
				$c_noreaddon2 = $objResult2["c_noreaddon2"]; 

			
				$n_cancel= $objResult2["n_cancel"];   
				$n_total = $objResult2["n_total"];   
				$n_priceback = $objResult2["n_priceback"];   
				$n_total_price_no = $objResult2["n_total_price_no"];   
				$n_addon_price = $objResult2["n_addon_price"];   
				$c_noreaddon2 = $objResult2["discount"];  
				$c_noreaddon1 = $objResult2["note"];  
			
			
			
				$qrdata = $objResult2["qrdata"];   
			
			$nambankfull = "";
			$sql_b = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk where a.name != ''  and a.pk = '".$bank."' order by a.pk asc   "; 
			$query_b = mysqli_query($objCon,$sql_b);
			while($objResult_b = mysqli_fetch_array($query_b))
			{ 
				$nambank = "";
				$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_b["bank"]."'    order by pk asc  "; 
				$query_b2 = mysqli_query($objCon,$sql_b2);
				while($objResult_b2 = mysqli_fetch_array($query_b2))
				{ 
					$nambank =  $objResult_b2["name"];
				} 
				
				$nambankfull = $nambank." ".$objResult_b["name"]. " [ " .$objResult_b["bookbank"] . " ] ";
			} 
			
			
			
			
											 
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
			$p_data6 = "";
			$p_dataname = "";
			$codeno = "";
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$p_data1 = $objResult["appleid"];
				$p_data2 = $objResult["password"];
				$p_data3 = $objResult["storerage"];  
				$p_dataname = $objResult["name"];  
				$codeno = $objResult["codeno"];   
				
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
				
				
				$sql_c = "SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data6 =  $objResult_c["name"];
				}
			}
							
			
			
			$name_major1 = "";
			$name_major2 = "";
			$name_major3 = "";
			$name_major4 = "";
			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major1 =  $objResult_c["name"]; 
				$name_major2 =  $objResult_c["address"]; 
				$name_major3 =  $objResult_c["telphone"]; 
				$name_major4 =  $objResult_c["pasy"]; 
			}	 
		}    
	?> 
 	
  	<table width="100%" border="0"   >  
		  <tr>
			 <td align="left" width="10%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				 <img src="../logo.png" style=" width: 100%; " >
			 </div>
			 </td>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 22px;">   
			 	<b>     บริษัท เอสจี ลิสซิ่ง พลัส จำกัด		</b>  
			    <div style=" margin-top: 0px; "  >  </div> 		
				<b>    SG LEASING PLUS CO.,LTD.	</b>				
			    <div style=" margin-top: 2px; "  >  </div> 
			    <font size="2px" style="font-size: 14px;"> 	
				สำนักงานใหญ่ : 883 ถนนสิโรรส ตำบลสะเตง อำเภอเมืองยะลา จังหวัดยะลา 95000
				 
				โทร. 073-729950     เลขประจำตัวผู้เสียภาษี 0955566000730 
				</font>
			    <div style=" margin-top: 5px; "  >  </div> 	
				</font>
			 </div>
			 </td>
		  </tr>   
  	</table>		 
	  
	    
  	<table width="100%" border="0"   >  
		  <tr> 
			 <td align="center" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 20px;">   
			 	<b>   ใบลดหนี้ / ใบกำกับภาษี	</b>    
				</font>
			 </div>
			 </td>
		  </tr>   
  	</table>		
      
       
             
  	<table width="100%" border="0"   > 
  	  
		  <tr>
			 <td align="left" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  ชื่อ-นามสกุล        </b> <?php echo $name; ?> 
			 	    <div style=" margin-top: 2px;" >  </div>
			 	  <b>    ที่อยู่     </b>   
				</font>
			 </div>
			 </td> 
			 <td align="right" width="50%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 5px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  เลขที่        </b>  <?php echo $bill_no; ?> 
			 	    <div style=" margin-top: 2px;" >  </div>
			 	  <b>  วันที่  </b> <?php echo DateThai($create_date)." ".DateThai2($create_date); ?> 
				</font>
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>     
      
      <table width="100%" border="0"   > 
		  <tr>
			 <td align="left" width="100%" valign="top" height="0px"  >  
			 <div style="margin-left: 5px; margin-right: 5px; margin-top: 0px; "  >  
				<font size="2px" style="font-size: 18px;">   
			 	  <b>  เลขประจำตัวผู้เสียภาษี  </b> <?php echo $name_major4; ?>    
				</font> 
			 </div>
			 </td> 
		  </tr>   
		      	 
  	</table>  
      
         
            
    <table id="customers" style="margin-top: 15px; "    >
	<thead> 
	<tr>
	<td width="1%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">  <b>  ลำดับ    </b>  </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>   รายการ  </b>    </font></div></td>   
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    จำนวน  </b>    </font></div></td>     
	 
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    หน่วยละ   </b>   </font></div></td>    
	  
	<td width="2%"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 16px; ">   <b>    จำนวนเงิน   </b>   </font></div></td>  
	   
	</tr>
	</thead>  						 
	<tbody>           
    <tr >  								
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 1 </font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo $p_dataname; ?>
	</font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
	<?php echo number_format(0+1); ?>	
	</font></div></td> 
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
	เครื่อง
	</font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
	<?php echo number_format(0+$moneydata); ?>	
	</font></div></td> 
	</tr> 
	
     <?php for($loop = 1; $loop <= 10; $loop++){ ?> 
    <tr >  								
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>  
	<td ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > &nbsp; </font></div></td>    
	</tr>                     
     <?php } ?>      
                              
                                                                                       
    <tr >  								
	<td colspan="3" rowspan="5" valign="top" style=" border: 1px solid #000; border-right: 1px solid #000;" ><div align="left"><font size="3px" color="Black" style=" font-size: 14px; " > 
	<div style=" margin-left: 10px; margin-right: 10px; " >  
	<div style=" margin-top: 5px; " > </div>
	สาเหตุ :
	 <?php echo $c_noreaddon1; ?>
	 </div>
	</font></div></td>   	 
	</tr>      
                              
                                                                                 
    <tr >  	
    			    				
	<td colspan="1" style=" border: 1px solid #000; " ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; เงินดาวน์    
	<div style=" margin-top: 0px; " > </div>
	<font size="3px" color="Black" style=" font-size: 10px; " > &nbsp;     </font>
	 </div></td>  				
	<td colspan="1" ><div align="right"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo number_format(0+$moneydown); ?>  &nbsp;	 
	</font></div></td>
	</tr>                                                                       
    <tr >  	
    			    				
	<td colspan="1" style=" border: 1px solid #000; " ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; มูลค่าที่ถูกต้อง  
	<div style=" margin-top: 0px; " > </div>
	<font size="3px" color="Black" style=" font-size: 10px; " > &nbsp;    </font>
	 </div></td>  				
	<td colspan="1" ><div align="right"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo number_format(0+$moneydata-$moneydown); ?>  &nbsp;	 
	</font></div></td>
	</tr>                                                                                                      
    <tr >  	
    			    				
	<td colspan="1" style=" border: 1px solid #000; " ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; ส่วนลด  
	<div style=" margin-top: 0px; " > </div>
	<font size="3px" color="Black" style=" font-size: 10px; " > &nbsp;    </font>
	 </div></td>  				
	<td colspan="1" ><div align="right"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo number_format(0+$c_noreaddon2); ?>  &nbsp;	 
	</font></div></td>
	</tr>                                                                                                 
    <tr >  	
    			    				
	<td colspan="1" style=" border: 1px solid #000; " ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; ภาษีมูลค่าเพิ่ม7%
	<div style=" margin-top: 0px; " > </div>
	<font size="3px" color="Black" style=" font-size: 10px; " > &nbsp;     </font>
	 </div></td>  				
	<td colspan="1" ><div align="right"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo number_format(0+ ($moneydata-$moneydown-$c_noreaddon2) *0.07); ?>  &nbsp;	 
	</font></div></td>
	</tr>                                                                     
    	
   			       				  
    <tr >  								
	<td colspan="3" rowspan="2" valign="top" style=" border: 1px solid #000; border-top: 1px solid #000;  " ><div align="center"><font size="3px" color="Black" style=" font-size: 16px; " > 
	(  <?php echo Convert($moneydata); ?>  )
	</font></div></td>   	 
	</tr>  
    <tr > 	    				
	<td colspan="1" style=" border: 1px solid #000; " ><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > 
	 &nbsp; ยอดเงินสุทธิ
	<div style=" margin-top: 0px; " > </div>
	<font size="3px" color="Black" style=" font-size: 10px; " > &nbsp;   </font>
	 </div></td>  				
	<td colspan="1" ><div align="right"><font size="3px" color="Black" style=" font-size: 13px; " > 
	<?php echo number_format(0+    ($moneydata-$moneydown-$c_noreaddon2)  -  (($moneydata-$moneydown-$c_noreaddon2) *0.07)  ); ?>  &nbsp;	 
	</font></div></td>
	</tr>                                                
	                              
	</tbody> 
	</table>      
          
          
          
    <table   style="margin-top: 15px; " width="100%"    >
	<thead> 
	<tr>    
          
      <td width="30%" >
      	 <table   style="margin-top: 15px; " id="customers"   > 
		 <tr>  
      	 <td>  
      	 <font size="3px" color="Black" style=" font-size: 13px; " > 
		 <div style=" margin-top: 10px; margin-left: 5px; margin-right: 5px; margin-bottom: 10px;  " >
	 	   ผู้จัดทำ 
		 <div style=" margin-top: 0px; " > </div>
		  วันที่..................................................................................... 
		 </div>
		 </font>
		 </td>
		 </tr> 
		 </table>
      </td>
          
      <td width="30%" >
      	 <table   style="margin-top: 15px; " id="customers"   > 
		 <tr>  
      	 <td>  
      	 <font size="3px" color="Black" style=" font-size: 13px; " > 
		 <div style=" margin-top: 10px; margin-left: 5px; margin-right: 5px; margin-bottom: 10px;  " >
	 	   ผู้รับ 
		 <div style=" margin-top: 0px; " > </div>
		  วันที่..................................................................................... 
		 </div>
		 </font>
		 </td>
		 </tr> 
		 </table>
      </td>
      <td width="30%" >
      	 <table   style="margin-top: 15px; " id="customers"   > 
		 <tr>  
      	 <td>  
      	 <font size="3px" color="Black" style=" font-size: 13px; " > 
		 <div style=" margin-top: 10px; margin-left: 5px; margin-right: 5px; margin-bottom: 10px;  " >
	 	   ผู้อนุมัติ 
		 <div style=" margin-top: 0px; " > </div>
		  วันที่..................................................................................... 
		 </div>
		 </font>
		 </td>
		 </tr> 
		 </table>
      </td>
          
       
      
       
      
     </tr>                                                
	                              
	</tbody> 
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

 