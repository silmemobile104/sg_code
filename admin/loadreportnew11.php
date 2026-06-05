<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";

	 
	$searchname =  date('m');
	if(empty($_GET["searchname"])){

	}else{
		$searchname = $_GET["searchname"];
	} 
	$searchname2 = date('Y');
	if(empty($_GET["searchname2"])){

	}else{
		$searchname2 = $_GET["searchname2"];
	}

									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  


?>
     
    <div class="col-md-12" style="margin-top: 15px; display: none;  " > 
	<style>
		 .pagination {
			list-style-type: none; 
			display: inline-flex;
			justify-content: space-between;
			box-sizing: border-box;
		}
		.pagination li {
			box-sizing: border-box;
			padding-right: 10px;
		}
		.pagination li a {
			box-sizing: border-box;
			background-color: #e2e6e6;
			padding: 8px;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
			color: #616872;
			border-radius: 4px;
		}
		.pagination li a:hover {
			background-color: #d4dada;
		}
		.pagination .next a, .pagination .prev a {
			text-transform: uppercase;
			font-size: 12px;
		}
		.pagination .currentpage a {
			background-color: #518acb;
			color: #fff;
		}
		.pagination .currentpage a:hover {
			background-color: #518acb;
		}
	</style> 

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
		 
		 
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 

	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	Inner Join product c On   c.pk = a.menu_id
	where a.bill_no != '' 
	".$addcode.$addcode2.$addcode3."  
	order by a.pk asc    "; 
	$query2 = mysqli_query($objCon, $sql2);
		 
	 ///   echo $sql2;
	//$total_record = mysqli_num_rows($query2);
	//$total_page = ceil($total_record / $perpage);
	 ?>   

	</div>
				
					
						
		
	<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
	<div class="table-responsive"  >
	<table id="key_product"  class=" table table-borders   tablemobile  " border="0"     >					
	<thead>  
	 <tr>
		<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เดือน    </font></div></th>      
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ยอดรับเงินฝาก  </font></div></th>       
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ยอดตัดชำระเงินฝาก  </font></div></th>             
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   คงเหลือทั้งสิ้น   </font></div></th>  
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
	   $loopdataall1 = 0;
	   $loopdataall2 = 0;
	   $loopdataall3 = 0;
		
		
		$checkyear = date('Y');
		$checkmonth = date('m');
		
		$loadyear = 0;
		if($searchname > $searchname){
			$loadyear = 0;
		}
		if($searchname < $searchname){
			$loadyear = 12;
		}
		if($searchname == $searchname){
			$loadyear = $checkmonth;
		}
		
		
	   $calculatormoney = 0;
	   for($x = 1; $x <= $loadyear; $x++){

		$loopdata++;
		$loaddate_show = date ("Y-m-d", strtotime("+ ". ($x-1) ." day", strtotime($contactstart)));
		$loaddate_show2 = $d_array[ $x ];

		$sumround = 0; 
		   
		   
		$datadate1  = "01-".$x."-".$searchname;				    
		$datadate2  = "31-".$x."-".$searchname;				    
		
		$contactstart   = date("Y-m-d", strtotime($datadate1)); 
		$checkend   = date("Y-m-d", strtotime($datadate2)); 
		$checkend   =  date('Y-m-t',strtotime($contactstart));

		$addcode = "  and  a.create_date2  BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		   
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		   
		    
		$sql = "  SELECT a.* FROM money_customer_bank a
		Inner Join customer b On a.customer = b.pk
		Inner Join list_order c On c.bill_no = a.bill_no 
		where a.bill_no != '' ".$addcode."  Group By a.bill_no  order by a.pk desc     ";   
		$query = mysqli_query($con,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{      
			
			$note1 = " - ";
			$totalprice1 = 0;
			$totalprice2 = 0;
			$totalprice3 = 0;
			$totalprice4 = " - ";
			$totalprice5 = " - ";
			$startdate = " - ";
			$codecustomer = " - ";
			$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{   
				$totalprice1 = $objResult2["money"]; 
				$totalprice2 = $objResult2["daytotal"]; 
				$totalprice3 = $objResult2["dayprice"]; 
				$totalprice4 = $objResult2["startdate"]; 
				$totalprice5 = $objResult2["endate"]; 
				
				$customer = $objResult2["customer"]; 
				$codecustomer = $objResult2["codecustomer"]; 
			}
			
			
			$discountbank = 0;  
			$discount = 0;  
			$income1 = 0;  
			$moneybank = 0;
			$contactstart   = date("Y-m-d", strtotime($totalprice4)); 
			$checkend2   = date("Y-m-d", strtotime($checkend));  
			$addcode_check = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend2."'  "; 
			$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
			and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
			order by pk asc  ";  
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$totaldata1 +=  $objResult_c["money"];  
				$moneybank +=  $objResult_c["money"];   
			}	
				 
			
			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend2 =  date("Y-m-d", strtotime("+0 day", strtotime($checkend)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend2."'  "; 
			$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult["customer"]."'    and bill_no = '".$objResult["bill_no"]."'   ".$code_check2." ";   
			$query_p = mysqli_query($objCon,$sql_p); 
			while($objResult_p = mysqli_fetch_array($query_p))
			{   
				if(!empty($objResult_p["income"])){  
					if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
						$totaldata2 += $objResult_p["bank"];  
						$discountbank += $objResult_p["bank"];  
					}
					if($objResult_p["typesave"] == "ชำระ2ทาง"){
						$totaldata2 += $objResult_p["bank"];
						$discountbank += $objResult_p["bank"];    
					}
				}   
			}	 	
			 		 
			$calcultor = $moneybank - $discountbank;
			if($calcultor <= 0){
				$calcultor = 0;
			}
			$totaldata3 += $calcultor;
			 
		}
	  
		    
		   
		   if($totaldata3 <= 0){
			   $totaldata3 = 0;
		   }
		   $calculatormoney += $totaldata1 - $totaldata2;
		   
		   
		   $loopdataall1 += $totaldata1;
		   $loopdataall2 += $totaldata2;
		   $loopdataall += $calculatormoney; 
		   
	?>
	 <tr>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo $loaddate_show2;  ?>    </font></div></td>  
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata1);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$totaldata2);  ?>    </font></div></td> 
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$calculatormoney );  ?>    </font></div></td>  			
        
	 </tr> 
	 <?php    } ?>

	<tfooter> 
	 <tr>
		<th width="1%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม &nbsp;  </font></div></th>    
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$loopdataall1); ?>  &nbsp;  </font></div></th>    
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$loopdataall2); ?>  &nbsp;  </font></div></th>    
		<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 1px solid #DCDCDC;  "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$loopdataall); ?>  &nbsp;  </font></div></th>    
	 </tr>

	</tfooter>
	 </tbody> 
	 </table>  
	 </div>  
	 </div> 

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