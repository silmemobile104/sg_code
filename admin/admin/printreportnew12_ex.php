<?php 
include('../database.php');

$strExcelFileName = "สรุปรายงานสต๊อกสินค้า.xls";
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
$bg = "#F8FAFD";  
$member_main = $_SESSION["UserID"];  
$major = $_SESSION["Major"];  

$detail = "";
$notedata = "";
$customer = "";

$searchname = date('d/m')."/".(date('Y'));
if(empty($_GET["searchname"])){

$cut = explode("/",$searchname);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
$daystart_load = date("d-m-Y", strtotime($date_income)); 
}else{
$searchname = $_GET["searchname"];



$cut = explode("/",$searchname);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

$daystart_load = date("d-m-Y", strtotime($date_income)); 
}


$searchname2 = date('d/m')."/".(date('Y'));
if(empty($_GET["searchname2"])){

$cut = explode("/",$searchname2);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
}else{
$searchname2 = $_GET["searchname2"];



$cut = explode("/",$searchname2);
$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
}

$searchname3 = "";
if(empty($_GET["searchname3"])){

}else{
$searchname3 = $_GET["searchname3"];
}  					
$searchname4 = "";
if(empty($_GET["searchname4"])){

}else{
$searchname4 = $_GET["searchname4"];
}  					
$searchname5 = "";
if(empty($_GET["searchname5"])){

}else{
$searchname5 = $_GET["searchname5"];
}  

$searchname6 = "";
if(empty($_GET["searchname6"])){

}else{
$searchname6 = $_GET["searchname6"];
}  

?>            
<?php											
$perpage = 20;
if (isset($_GET['page2'])) {
	$page = $_GET['page2']; 
 } else {
	$page = 1;
} 

if (empty($_GET['page2'])) {
	 $page = 1;
 }  			
$start = ($page - 1) * $perpage;



$addcode = "";
$addcode2 = ""; 
$addcode3 = ""; 
$addcode4 = ""; 
$addcode5 = ""; 
$addcode6 = ""; 
$addcode7 = ""; 



$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

$addcode = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 


if(empty($_GET["searchname3"])){

}else if(($_GET["searchname3"] == "พร้อมจำหน่าย")){
$addcode2 = " and  status = 'พร้อมจำหน่าย' ";
}else if(($_GET["searchname3"] == "ไม่พร้อมจำหน่าย")){
$addcode2 = " and  status = 'ไม่พร้อมจำหน่าย' ";
}else if(($_GET["searchname3"] == "จำหน่ายแล้ว")){
$addcode2 = " and status = 'ไม่พร้อมจำหน่าย' "; 
} 


if(empty($_GET["searchname4"])){

}else{
$addcode3 = " and typedata2 = '".$_GET["searchname4"]."'  ";
} 
if(empty($_GET["searchname5"])){

}else{
$addcode4 = " and color = '".$_GET["searchname5"]."'  ";
} 
if(empty($_GET["searchname6"])){

}else{
$addcode5 = " and storerage = '".$_GET["searchname6"]."'  ";
} 
if(empty($_GET["searchname7"])){

}else{
$addcode6 = " and typedata = '".$_GET["searchname7"]."'  ";
} 

?>
   
<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="key_product"  class=" table    tablemobile  " border="0" style=" width:  <?php echo $table; ?> "    >
		 <thead>  
		 <tr>
			<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เลขประจำเครื่อง    </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ประเภทสินค้า  </font></div></th>       
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ยี้ห้อ  </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รายการสินค้า  </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ความจุ </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  สี </font></div></th>        
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   ต้นทุน   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   เงินต้น   </font></div></th>  
		 </tr>
	    </thead>    
		<tbody> 
		<?php 
		$i = 1;
		$bg = "#F8FAFD"; 

		if (empty($_GET['page2'])) { 
			$i = 1;
		}else if (($_GET['page2'] == 1)) { 
			$i = 1;
		}else{

			$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
		}

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$sql2 = " SELECT * FROM product  where name != ''    ".$addcode.$addcode2.$addcode3.$addcode4.$addcode5.$addcode6.$addcode7."   order by pk asc  ";   
		
		if(empty($_GET["searchname8"])){ 

		}else{
		$addcode7 = " and b.closebill = '".$_GET["searchname8"]."'  "; 
		} 		
		$sql2 = " SELECT a.*, b.closebill FROM product  a
		left join list_order b On a.pk = b.menu_id
		where a.name != ''   ".$addcode.$addcode2.$addcode3.$addcode4.$addcode5.$addcode6.$addcode7."   order by pk asc    limit {$start} , {$perpage}  "; 
			
			
			 
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 
			$bill_no = $objResult2["bill_no"];

			$drop_buy = " - ";
			if(empty($objResult2["drop_buy"])){
			}else if($objResult2["drop_buy"] == "โปรดเลือกรายการ"){

			}else{ 
				$drop_buy = $objResult2["drop_buy"];
			}


			$name_typedata = "";
			$sql = "SELECT * FROM store where pk = '".$objResult2["typedata_2"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_typedata =  $objResult["name"];
			}
			$name_typedata2 = "";
			$sql = "SELECT * FROM drop_typedata2 where pk = '".$objResult2["typedata2"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_typedata2 =  $objResult["name"];
			}
			$name_typedata3 = "";
			$sql = "SELECT * FROM drop_typecolor where pk = '".$objResult2["color"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_typedata3 =  $objResult["name"];
			}
			$name_typedata4 = "";
			$sql = "SELECT * FROM drop_typedata where pk = '".$objResult2["typedata"]."'    order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_typedata4 =  $objResult["name"];
			} 
			$name_typedata5 = "";
			$sql = "SELECT * FROM drop_typestore where pk = '".$objResult2["storerage"]."'    order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_typedata5 =  $objResult["name"];
			} 
			$name_major = "";
			$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_major =  $objResult["name"];
			}


			$date_start = "";
			$date_start2 = "";
			$date_start3 = "";
			$sql = " SELECT * FROM update_real_time where bill_no = '".$bill_no."' order by pk desc limit 1 ";    
			$query = mysqli_query($con,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{ 
				$date_start = $objResult["create_by"];
				$date_start2 = $objResult["create_date2"];
				$date_start3 = $objResult["create_time"];
			}

			$name_staff = "";
			$sql = " SELECT * FROM member_all where pk = '".$date_start."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_staff =  $objResult["name"];
			}
			 
			
			
			
			$price1 = 0;
			if(empty($objResult2["price1"])){ 

			}else{ 
				$price1 = $objResult2["price1"];
			}
			$moneydown = 0;
			$moneydata = 0;
			$sql = "SELECT * FROM list_order Where  menu_id = '". $objResult2["pk"] ."' order by pk desc limit 1 "; 
			 
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{    
				$moneydown = $objResult["moneydown"];  
				$moneydata = $objResult["moneydata"];    
			}  
			$totalldata1 = $moneydata-$moneydown;
			
					$txtshow = " เป็นหนี้ ";
					$hdd = " "; 
					$bgbtn = " #FF0000  ";
			if($objResult2["closebill"] == "เป็นหนี้"){ 
					$txtshow = " เป็นหนี้ ";
					$hdd = " "; 
					$bgbtn = " #FF0000  ";

			}else if($objResult2["closebill"] == "หมดหนี้"){
					$txtshow = " หมดหนี้ ";
					$hdd = " display: none;  "; 
					$bgbtn = " #006400  "; 
			}
					
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codeno"]; ?>  </font></div></td>
 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata4; ?>  </font></div></td>
	  
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata2; ?>  </font></div></td>
	  
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata5; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata3; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalldata1); ?>  </font></div></td>
		
		
		
		  <td style=" border-bottom:  0px solid #F2F2F2; ">

			<div align="center"   >
			<font size="3px" color="Black" style=" font-size: 13px; " >  
			<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: -5px;     "    id="btnsavetwo<?php echo $objResult2["pk"];?>"   >
			<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdata<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
			</font>
			</div>

		 </td>
     
		</tr> 
		<?php $i++; $totaldata1 += $price1; $totaldata2++; } ?>
		</tbody>

		 <tr style="background-color: #F8FAFD; ">  

		<th style=" border-left: 0px solid #F2F2F2;  " colspan="1"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <b>    <?php echo number_format(0+$totaldata2); ?>    </b> </font></div></th>
		<th style=" border-left: 0px solid #F2F2F2;  " colspan="4"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <b>  รวมทั้งหมด  </b> </font></div></th>
  
		
		<th style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " ><b>   <?php echo number_format(0+$totaldata1); ?>   </b> </font></div></th>
  
     
		</tr> 
	    
	    
	    
		</table>  
		</div>
	  </div>	  	
    				 	  
                                                                                                                                                                                                                                                                                                                          		 	   		 	   		 	 
   
                                	  

</BODY>

</HTML>
