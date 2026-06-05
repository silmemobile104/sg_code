<?php 
include('../database.php');

$strExcelFileName = "บิลใบเสร็จ.xls";
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="'. $strExcelFileName .'"');
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
<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html4">
 <meta charset="UTF-8">
<HTML>

<HEAD>
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
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)

	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
?>
 
 
  <style>
		#customers { 
		  border-collapse: collapse;
		  width: 100%;
		}
		
		#customers td, #customers th {
		  border: 1px solid #A9A9A9; 
		}  
 </style>
 
   
  <style>
		#customers2 { 
		  border-collapse: collapse;
		  width: 100%;
		}
		   
		 #customers2 td, #customers2 th { 
			 border: 0px solid #FFFFFF; 
		}  
 </style>
 
   <?php   
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}	
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}	
	
	
	$searchname4 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname4"])){
		
		$cut = explode("/",$searchname3);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname4 = $_GET["searchname4"];
		
		
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
	$searchname5 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname5"])){
		
		$cut = explode("/",$searchname3);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}else{
		$searchname5 = $_GET["searchname5"];
		
		
		
		$cut = explode("/",$searchname5);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	
	?>
    	     
	<table id="key_product"  class=" table tablemobile  " border="0"   >
	<thead> 
	<?php 
		$bg = "#F8FAFD"; 
		$i = 1;
		$total = 0;
		$totalprice1 = 0;
		$totalprice2 = 0;
		$totalprice3 = 0;
		$totalprice4 = 0; 
 
		$addcode = "";
		$addcode2 = "";
		$addcode3 = "";
													 
													 
		$addcode4 = "  and  create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."'  "; 
													 
													 
		if(empty($_GET["searchname3"])){

		}else{
			$addcode3 = " and  bill_no like '%".$searchname3."%' ";
			$addcode4 = "";
		}  
		if(empty($_GET["searchname2"])){

		}else{
			$addcode = " and  major = '".$searchname2."' ";
		}  
		if(empty($_GET["searchname"])){

		}else{
			$addcode2 = " and  major2 = '".$searchname."' ";
		}  
											
		$sql2 = "  SELECT *  FROM list_chk_computer  where  bill_no != ''  ".$addcode.$addcode2.$addcode3.$addcode4." Group By bill_no order by pk asc    ";   
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
										
				$create_date = $objResult2["create_date"];
				$create_date2 = $objResult2["create_date2"];
				$create_time = $objResult2["create_time"];
				$create_by = $objResult2["create_by"];
				$pkselect = $objResult2["pkselect"];
				$bill_no = $objResult2["bill_no"];


				$total_price = 0;
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
											
	}
	?>
	<tr>
	<th width="2%" colspan="3" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom: 1px solid #FFF; "  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
	<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF; border-top: 1px solid #FFF;  "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$totalprice1); ?>  </font></div></th>  
	</tr>							
	<tr>
	<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิล    </font></div></th>    
	<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อร้าน  </font></div></th>   
	<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันทีทำเอกสาร     </font></div></th> 
	<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงินส่งคืน   </font></div></th>    
												   
	<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th>    
												 
	<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>  
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
 
									    $addcode = "";
										$addcode2 = "";
										$addcode3 = "";
										if(empty($_GET["searchname3"])){

										}else{
											$addcode3 = " and  bill_no like '%".$searchname3."%' ";
										}  
										if(empty($_GET["searchname2"])){

										}else{
											$addcode = " and  major = '".$searchname2."' ";
										}  
										if(empty($_GET["searchname"])){

										}else{
											$addcode2 = " and  major2 = '".$searchname."' ";
										}  
											
										$sql2 = "  SELECT *  FROM list_chk_computer 
											where  bill_no != ''   
											".$addcode.$addcode2.$addcode3."
											Group By bill_no
											order by pk asc    ";   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											  
											$create_date = $objResult2["create_date"];
											$create_date2 = $objResult2["create_date2"];
											$create_time = $objResult2["create_time"];
											$create_by = $objResult2["create_by"];
											$pkselect = $objResult2["pkselect"];
											$bill_no = $objResult2["bill_no"];


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
											///echo $sql;
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

											}		
											  
											
											$total_price = 0;
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
											
											
											$name_create = "-"; 
											$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_create =  $objResult["name"];
											}
											   
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create1; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($create_date)." ".datethai2($create_date);?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price);?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $create_time; ?>  </font></div></td> 
										 
										</tr>  
										<?php $i++;  $totalprice1+=$total_price;  } ?>
									</tbody>
   
	</table>  
    
                                	  

</BODY>

</HTML>
