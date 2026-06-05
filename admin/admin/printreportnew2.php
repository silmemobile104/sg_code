<?php include('../database.php'); ?>
<script> 
window.print(); 
</script>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  รายงานสรุปเชิงวิเคราะห์บัญชีสิ้นเชื่่อ  </title>
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


									
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
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
		 
		 
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 

	if(!empty($_GET["customername"])){
		$addcode4 = "   and b.name like '%".$customername."%'  or  a.codecustomer like '%".$customername."%' "; 
	}
		
	 ?>            
       
   
	<table id="customers"  class=" table table-borders   tablemobile  " border="0"     >					
	<thead>  
	 <tr>
		<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เดือน    </font></div></th>      
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> จำนวนสินเชื่อ  </font></div></th>    
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ผมรวมต้นทุนสินเชื่อ  </font></div></th>      
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>  
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
	   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ภาษี </font></div></th>     
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
	   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวมทั้งสิ้น </font></div></th>         
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   มูลค่าสิ้นเชื่อ   </font></div></th>  
	 </tr>
	</thead>							
										
	<?php  
		///  echo $numDays;

		$datadate  = "01-01-".$searchname;				    
		$contactstart = date("Y-m-d", strtotime($datadate));  

		$d_array = array(
		"1" => "มกราคม",
		"2" => "กุมภาพันธ์",
		"3" => "มีนาคม",
		"4" => "เมษายน",
		"5" => "พฤษภาคม",
		"6" => "มิถุนายน",
		"7" => "กรกฎาคม",
		"8" => "สิงหาคม",
		"9" => "กันยายน",
		"10" => "ตุลาคม",
		"11" => "พฤศจิกายน", 
		"12" => "ธันวาคม"
		);

	   $loopdata = 0;
	   $loopdataall = 0;
	   for($x = 1; $x <= 12; $x++){

		$loopdata++;
		$loaddate_show = date ("Y-m-d", strtotime("+ ". ($x-1) ." day", strtotime($contactstart)));
		$loaddate_show2 = $d_array[ $x ];

		$sumround = 0; 
		   
		   
		$datadate1  = "01-".$x."-".$searchname;				    
		$datadate2  = "31-".$x."-".$searchname;				    
		
		$contactstart   = date("Y-m-d", strtotime($datadate1)); 
		$checkend   = date("Y-m-d", strtotime($datadate2)); 

		$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		   
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		$totaldata5 = 0;
		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   c.pk = a.menu_id
		where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว' 
		".$addcode."  
		order by a.pk asc    "; 
			 
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			$totaldata1++;
			
			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  

			$totaldata2 += $totalprice1;
			
			
			$totaldata4 += $totalprice1;
			
			
			
			$moneydata = $objResult2["moneydata"]; 
			$moneydown = $objResult2["moneydown"];   
			
			$vat = (($moneydata-$moneydown) * 100 )  / 107;
			
			$vat2 = ($moneydata-$moneydown) - $vat;
			
			if($vat2 <= 0){
				$vat2 = 0;
			} 
			 
			$totaldata3 += $vat2;
			
			$money = $objResult2["money"]; 
			$daytotal = $objResult2["daytotal"]; 
			$dayprice = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$priceorder = $objResult2["priceorder"];  
			$pasy = $objResult2["pasy"];  
			
			
			$totaldata5 += $priceorder;
		}
		   
		   $loopdataall += $totaldata4;
	?>
	 <tr>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo $loaddate_show2;  ?>    </font></div></td>  
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata1);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata5);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata2);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata3);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata4);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata4);  ?>    </font></div></td>  			
        
	 </tr> 
	 <?php } ?>

	<tfooter> 
	 <tr>
		<th width="1%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม &nbsp;  </font></div></th>   
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="right"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="right"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="right"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="right"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$loopdataall); ?>  &nbsp;  </font></div></th>    
	 </tr>

	</tfooter>
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