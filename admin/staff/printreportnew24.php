<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  สรุปรายงานส่งเครม  </title>
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
		  border: 1px solid #A9A9A9; 
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

	$price1 = 0;
	$price2 = 0;
	$price3 = 0;
	$price4 = 0;
	$price5 = 0;
	$price6 = 0;
	$price7 = 0;
	$price8 = 0;
	$price9 = 0;
	$price10 = 0;
 

	$searchname4 =  date('Y');
	if(empty($_GET["searchname4"])){

	}else{
		$searchname4 = $_GET["searchname4"];
	} 
 					
	$searchname5 = "";
	if(empty($_GET["searchname5"])){
		
	}else{
		$searchname5 = $_GET["searchname5"];
	}  



	$page2 = "";
	if(empty($_GET["page2"])){
		
	}else{
		$page2 = $_GET["page2"];
	} 
	 
	$typesearch = "";
	if(empty($_GET["typesearch"])){
		
	}else{
		$typesearch = $_GET["typesearch"];
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
		 
		 
	if(empty($_GET["searchname4"])){
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		
	}else{
		
		
	$datadate1  = "01-01-".$searchname4;				    
	$datadate2  = "31-12-".$searchname4;				    

	$contactstart   = date("Y-m-d", strtotime($datadate1)); 
	$checkend   = date("Y-m-d", strtotime($datadate2)); 
 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

	}
 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.status = 'เครมสินค้า/รอสินค้า' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.status = 'พร้อมจำหน่าย'   "; 
		  
	} 

	if(empty($_GET["searchname5"])){

	}else {
		$addcode3 = " and  b.typedata_2 = '".$searchname5."' ";
	}
		
		
		
	 ?>            
       
   
	 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="customers"  class=" table  table-bordered   tablemobile  " border="1" style="  "    >
		 <thead>  
		 <tr>
			<th width="2%" valign=""   bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px"  class="serif2" color="#000" style=" font-size: 15px; ">  ลำดับ    </font></div></th> 
			 
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> วันที่ทำรายการ  </font></div></th>    
			  
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ร้านค้า  </font></div></th>  
			     
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อสินค้า  </font></div></th>  
			
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เลขประจำเครื่อง </font></div></th> 
		   
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ความจุ </font></div></th> 
	           
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  สี </font></div></th> 
	           
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  หมายเหตุ </font></div></th> 
	           
	           
			<th width="3%"   bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  สถานะเครื่องเลม </font></div></th> 
	           
	            
			<th width="3%"    bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ต้นทุสินค้า </font></div></th>         
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

		$totaldata1_no = 0;
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0; 

		$sql2 = "  SELECT a.* FROM list_chk_cleam_back_two a
		Inner Join product b  On a.pkselect = b.pk
		where a.bill_no != ''  
		".$addcode.$addcode2.$addcode3.$addcode4."   
		order by a.pk asc    limit {$start} , {$perpage}   "; 
			 
		///	echo $sql2;
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

		 
			
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
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td>
 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codeno; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $showclose5; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata3; ?>  </font></div></td>
	  
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >   </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["status"]; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?>  </font></div></td> 
      
		</tr> 
		<?php $i++; $totaldata1_no++; $totaldata1+= $price1;  } ?>
		</tbody>

		<tfooter> 
		 <tr>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม <?php echo number_format(0+$totaldata1_no); ?> &nbsp;  </font></div></th>     
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata1); ?>  &nbsp;  </font></div></th>   
			  
			   
		 </tr>
		  
	    </tfooter>
	    
	    
	    
		</table>  
		</div>
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