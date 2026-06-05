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

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
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
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
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
		 
	   $loopdata = 0;
	   $loopdataall = 0;
	   for($x = 1; $x <= $loadyear; $x++){

		$loopdata++;
		$loaddate_show = date ("Y-m-d", strtotime("+ ". ($x-1) ." day", strtotime($contactstart)));
		$loaddate_show2 = $d_array[ $x ];

		$sumround = 0; 
		   
		   
		$datadate1  = "01-".$x."-".$searchname;				    
		$datadate2  = "31-".$x."-".$searchname;				    
		
		$contactstart   = date("Y-m-d", strtotime($datadate1)); 
		$checkend   = date("Y-m-d", strtotime($datadate2)); 

		$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		   
		 
			$cno = 0;
			$cno1 = 0;
			$cno2 = 0;
			$cno3 = 0;
			$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
			Inner Join customer b On   a.customer = b.pk
			Inner Join product c On   c.pk = a.menu_id
			where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
			".$addcode."  
			order by a.pk asc    ";  
		     
			$query2 = mysqli_query($con,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{      
					if($bg == "#FFF"){ 
						$bg = "#F8FAFD"; 
					}else{  
						$bg = "#FFF"; 
					} 

					$money = $objResult2["money"]; 
					$daytotal = $objResult2["daytotal"]; 
					$dayprice = $objResult2["dayprice"];  
					$c_status = $objResult2["c_status"];  
					$g_create_date2 = $objResult2["create_date2"];  
					$priceorder = $objResult2["priceorder"];  
					$pasy = $objResult2["pasy"];  


					$cno++;
					$cno1 += $priceorder; 
					$cno2 += $money; 
					$cno3 += $pasy; 
			}
	?>
	 <tr>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo $loaddate_show2;  ?>    </font></div></td>  
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$cno);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo number_format(0+$cno1);  ?>    </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   <?php echo number_format(0+ (($cno1*100) / 107) ); ?>     </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php
				$var1 = $cno1;
				$var2 = ($cno1*100) / 107;
				$var3 = $var1 - $var2;
				
				echo number_format(0+$var3); ?>   </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$cno1); ?>  </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$cno1); ?>    </font></div></td>  			
        
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