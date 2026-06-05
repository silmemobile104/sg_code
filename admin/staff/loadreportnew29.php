<?php
session_start();  
include('../database.php');
	
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


?>
     
    <div class="col-md-5" style="margin-top: 15px;  " > 
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

	$addcode = "  and  a.tanai_date BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
				
	$searchname4 = "";
	if(empty($_GET["searchname4"])){
		
	}else{
		$addcode3 = " and a.bill_no like  '%". $searchname4 ."%'";
	}  
   
	if($searchname3 == ""){
		$addcode2 = "  ";  	 
	} 
	if($searchname3 == "รอดำเนินคดี"){
		$addcode2 = " and  (a.tanai_status1 = 'รอดำเนินคดี' or a.tanai_status1 = '')  ";  	 
	}
	if($searchname3 == "อยู่ในระหว่างไกล่เกลี่ย"){
		$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างไกล่เกลี่ย' ";  	  
	}
	if($searchname3 == "อยู่ในระหว่างฟ้องร้อง"){
		$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างฟ้องร้อง'  ";  	  
	}
	if($searchname3 == "คดีเสร็จสิ้นแล้ว"){
		$addcode2 = "  and a.tanai_status1 = 'คดีเสร็จสิ้นแล้ว'  ";  	  
	}

 
	$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
	left Join customer b On   a.customer = b.pk
	left Join product c On   c.pk = a.menu_id
	where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว'   and a.tanaidata != ''
	".$addcode.$addcode2.$addcode3."  
	order by a.pk asc   ";    
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{        
		$total_record++;
	}						
	$query2 = mysqli_query($objCon, $sql2);
		 
	  ///   echo $sql2;
	$total_record = mysqli_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
	 ?>  
	<?php if (ceil($total_record / $perpage) > 0): ?>
		<ul class="pagination">
			<?php if ($page > 1): ?>
			<li class="prev"><a href="reportnew29.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Prev</a></li>
			<?php endif; ?>

			<?php if ($page > 3): ?>
			<li class="start"><a href="reportnew29.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">1</a></li>
			<li class="dots">...</li>
			<?php endif; ?>

			<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew29.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
			<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew29.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

			<li class="currentpage"><a href="reportnew29.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page ?></a></li>

			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew29.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew29.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)-2): ?>
			<li class="dots">...</li>
			<li class="end"><a href="reportnew29.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
			<?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)): ?>
			<li class="next"><a href="reportnew29.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Next</a></li>
			<?php endif; ?>
		</ul> 
	<?php endif; ?>

	</div>
	
	 
	 
<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
<div class="table-responsive"  >
<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px "     >
<thead> 
<tr>
<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่สัญญา    </font></div></th>    
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>    
<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า    </font></div></th>    
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหนี้ค้าง     </font></div></th>   


   
						       
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี    </font></div></th>  
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด    </font></div></th>  
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;   "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทั้งสิ้น    </font></div></th> 




<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ล่าช้า/วัน     </font></div></th>   
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เกรดลูกค้า   </font></div></th>  
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะบัญชี   </font></div></th>  
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบดำเนินคดี   </font></div></th> 
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคดี   </font></div></th>  
<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทนายเครส   </font></div></th> 

<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์สัญญา   </font></div></th>  
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

if (empty($_GET['page2'])) { 
$i = 1;
}else if (($_GET['page2'] == 1)) { 
$i = 1;
}else{

$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
}

$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
left Join customer b On   a.customer = b.pk
left Join product c On   c.pk = a.menu_id
where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว'  and a.tanaidata != ''
".$addcode.$addcode2.$addcode3."  
order by a.pk asc   limit {$start} , {$perpage}   ";  
/// echo $sql2;

$query2 = mysqli_query($con,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{      
if($bg == "#FFF"){ 
	$bg = "#F8FAFD"; 
}else{  
	$bg = "#FFF"; 
}

$totalprice1 = $objResult2["money"]; 
$totalprice2 = $objResult2["daytotal"]; 
$totalprice3 = $objResult2["dayprice"];  
$c_status = $objResult2["c_status"];  
$totalprice4 = $objResult2["startdate"]; 
$totalprice5 = $objResult2["endate"]; 

$discoount = 0;
$discoountpaymentother = 0;
$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
$checkend = date("Y-m-d", strtotime(date('Y-m-d')));  /// วันที่เลือกล่าสุด 
$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
$sql = "SELECT * FROM history_payment Where  
bill_no = '". $objResult2["bill_no"]."' 
and income != '' 
and income != '0'   
".$code_check2." ";   
$query = mysqli_query($objCon,$sql); 
while($objResult = mysqli_fetch_array($query))
{  
	if(!empty($objResult["income"])){
	$discoount += $objResult["income"]; 

	}
	if(!empty($objResult["paymentother"])){
	$discoountpaymentother += $objResult["paymentother"]; 
	}  
}	

$allmoney = ($totalprice2*$totalprice3)-$discoount;

 
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
}

$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
$query_c = mysqli_query($objCon,$sql_c);
while($objResult_c = mysqli_fetch_array($query_c))
{ 
		$name_major =  $objResult_c["name"];
} 

$onoff_edit = "ON"; 

$bill_no = $objResult2["bill_no"];  
$codecustomer = $objResult2["codecustomer"];  
$name = $objResult2["name"];  
$daystart = $objResult2["startdate"];  
$endate = $objResult2["endate"];  
$totalno_payment = $objResult2["totalno_payment"];  
$onoff = $objResult2["onoff"];  


$checkgrad = $totalno_payment;
$showgrad = "  ";
$bg = "";

if( $onoff == "NPL" ){
$showgrad = " D ";
$bg = " #FF0000  ";

}else{

if($checkgrad <= 0){
$showgrad = " A ";
$bg = " #006400  ";
}
if($checkgrad >= 1 && $checkgrad <= 30){
$showgrad = " B ";
$bg = "  #FF8C00 ";
}
if($checkgrad > 30 && $checkgrad <= 60){
$showgrad = " C ";
$bg = " #FFD700  ";
}
if($checkgrad > 60){
$showgrad = " D ";
$bg = " #FF0000  ";
}
 
	
}
	
	
		$chk_total = $objResult2["totalno_payment"];
		$tanai_status1 = $objResult2["tanai_status1"];
		$tanai_status2 = $objResult2["tanai_status2"];
		$tanai_status3 = $objResult2["tanai_status3"];
		$tanai_payment = $objResult2["tanai_payment"];

		$tanai_momey1 = $objResult2["tanai_momey1"];
		$tanai_momey2 = $objResult2["tanai_momey2"];
		$tanai_momey3 = $objResult2["tanai_momey3"];
		$tanai_momey4 = $objResult2["tanai_momey4"];
		$tanai_momey5 = $objResult2["tanai_momey5"];


		$priceother = 0;
		$priceothershow = " ................ ";
		if(!empty($objResult2["priceother"])){
			$priceother = $objResult2["priceother"];
			$priceothershow = $objResult2["priceother"];
		}
	
		$nametanai = " - ";
		$sql_c = " SELECT * FROM member_all  where pk = '".$objResult2["tanaidata"]."'   order by pk asc     ";   
		$query_c = mysqli_query($con,$sql_c); 
		while($objResult_c = mysqli_fetch_array($query_c))
		{       
			$nametanai = $objResult_c["name"];
		}  


?>
<tr style="  "> 

<td style=" border-left: 0px solid #F2F2F2; " height="30px;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $bill_no; ?> </font></div></td>

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codecustomer; ?> </font></div></td>

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?> </font></div></td>
 
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$tanai_momey2); ?> </font></div></td>
 
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$tanai_momey3); ?> </font></div></td>
 
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$tanai_momey4); ?> </font></div></td>
 
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$tanai_momey5); ?> </font></div></td>

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalno_payment); ?> </font></div></td>
 
<td style=" border-left: 0px solid #F2F2F2; background-color: <?php echo $bg ?>; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo $showgrad; ?> </font></div></td>
  
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $onoff; ?>  </font></div></td>

 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status1; ?> </font></div></td> 
					 
<td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status2; ?> </font></div></td> 


<td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $nametanai; ?> </font></div></td> 

  
<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
<?php  
$hdst = " display :  ; "; 
?> 

<a id="printcanceltwo<?php echo $objResult2["pk"]; ?>" href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
<font size="3px" color="#F77369" style=" font-size: 13px; " > 
พิมพ์   
</font>  
</a> 

</font></div></td>
									   


 

</tr>
<?php  $i++; } ?>
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