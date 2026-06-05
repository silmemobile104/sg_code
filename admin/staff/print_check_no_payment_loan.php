<?php 
include('../database.php');

$strExcelFileName = "ข้อมูลลูกหนี้ขาดส่ง.xls";
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
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

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

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}	

	$major = "1"; 

	$perpage = 25;
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
		if(empty($_GET["searchname"])){

		}else{
			$addcode = " and (  b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'   or a.codecustomer like '%".$searchname."%'  )  ";
		}
		$addcode2 = "";  
		$addcode2 = " and a.major = '".$major."'  ";



		$addcode3 = ""; 
		if(empty($_GET["typedata"])){

			$addcode3 = " and a.totalno_payment >= '5' and totalno_payment <= 14  ";

		}else if(($_GET["typedata"] == "จำนวนลูกหนี้ขาดส่ง")){	

			$addcode3 = " and a.totalno_payment >= '5' and totalno_payment <= '14'  ";

		}else if(($_GET["typedata"] == "คำนวนลูกหนี้ที่ถูกล๊อกเครื่อง")){

			$addcode3 = " and a.lock_data = 'ล็อกเครื่อง'  ";

		}else if(($_GET["typedata"] == "จำนวนยอดหนี้ขาดส่งเกิน")){

			$addcode3 = " and a.totalno_payment >= '90'   ";
		} 

			if(!empty($_GET["searchname2"])){

				if(($_GET["searchname2"] == "ขาดส่ง 1-5 วัน")){

					$addcode3 = " and a.totalno_payment >= '1' and totalno_payment <= '5' ";

				}else if(($_GET["searchname2"] == "ขาดส่ง 7 วันขึ้นไป")){

					$addcode3 = " and a.totalno_payment >= '7'  ";

				}

			} 
	?>
    	     
	   
<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
<div class="table-responsive"  >
<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1950px;"    >
<thead> 
<tr>
<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา    </font></div></th>    
<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>        
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่างวดที่ต้องชำระ     </font></div></th>  
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับรวม     </font></div></th>   
<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ระยะเวลาขาดส่ง     </font></div></th>   
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะเครื่อง     </font></div></th> 
<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>  
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
	$pricetotal = 0; 
	$pricetotal2 = 0; 

	if (empty($_GET['page2'])) { 
		$i = 1;
	}else if (($_GET['page2'] == 1)) { 
		$i = 1;
	}else{ 
		$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
	}

	$sql2 = " SELECT a.*, b.name FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		where a.bill_no != ''   and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว'   ".$addcode.$addcode2.$addcode3."  
		order by a.pk asc    "; 

	////echo $sql2;
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{      
	$pricetotal = 0; 
	$pricetotal2 = 0; 

			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			}

			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$totalprice4 = $objResult2["startdate"]; 
			$totalprice5 = $objResult2["endate"];    

			$priceorder = $objResult2["priceorder"];  
			$typenpl1 = $objResult2["typenpl1"];  
			$typenpl2 = $objResult2["typenpl2"];  
			$discount = $objResult2["discount"];  
			$note = $objResult2["note"];  
			$moneydown = $objResult2["moneydown"];   
			$notestaff = $objResult2["notestaff"];   
			$notestaff = $objResult2["lock_data3"];   


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
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$name_create2  =  $objResult["name"];
				$name_create3  =  $objResult["codeno"];
			}


			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major =  $objResult_c["name"];
			}


		$chk_total = 0;
		$priceback = 0;
		$date_payment = "";

		$countloopnopay = 0;
		$chk_total = 0;
		$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2." order by pk asc  "; 
		 /// echo $sql_npl . " <br> ";
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			if(!empty($objResult_npl["income"])){ 
				$priceback += $objResult_npl["income"];


				$date_payment = $objResult_npl["create_date2"];

				$countloopnopay = 0;
				$chk_total = 0;
			}else{
				$countloopnopay++;
			} 



			if($countloopnopay >= 5){ 
				if(!empty($objResult_npl["income"])){  
						$chk_total = 0; 
				}else{
						$chk_total++;
				} 
			}	 
		}	 	


		$pricetotal = ($totalprice3*$totalprice2) - $priceback - $moneydown;
		$pricetotal2 = $priceorder - $priceback - $moneydown;
		$pricetotal3 = $pricetotal2 + ($chk_total*50);
	?>
	<tr style="background-color: <?php echo $bg ?>; "> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?> </font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?> </font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$chk_total*50); ?> </font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 

		if($chk_total > 0){

			$dates = $chk_total;
			$years = floor($dates/365);
			$months = floor(($dates-($years*365))/30);
			$dates2 = $dates-(($years*365)+($months*30));

			if(!empty($years)){
				echo $years." ปี ";	
			}if(!empty($months)){
				echo $months." เดือน";
			}if(!empty($dates2)){
				echo $dates2." วัน";
			} 
		}
	?> 
	</font></div></td> 

	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      

	 
	 <?php echo $objResult2["lock_data"]; ?>
	 	

	</font></div></td> 


	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      

	 <?php echo $objResult2["onoff_copy"]; ?>
	 
	</font></div></td> 

 
 
 


	</tr>  
	<?php $i++;  } ?>
</tbody>

</table>  
</div>
</div>   
                                	  

</BODY>

</HTML>
