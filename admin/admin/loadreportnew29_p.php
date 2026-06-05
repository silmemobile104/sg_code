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

 
 
	 ?>   

	</div>
	
	 
	  
<?php 
$bg = "#F8FAFD"; 
$i = 1;
$total = 0;
$totalprice1 = 0;
$totalprice2 = 0;
$totalprice3 = 0;
$totalprice4 = 0; 

$allmoneytanai = 0;

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
where a.bill_no != '' and a.contactstatus = 'อนุมัติแล้ว'  and a.tanaidata != ''
".$addcode.$addcode2.$addcode3."  
order by a.pk asc     ";  
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

		$priceother = 0;
		$priceothershow = " ................ ";
		if(!empty($objResult2["priceother"])){
			$priceother = $objResult2["priceother"];
			$priceothershow = $objResult2["priceother"];
		}
 

	if(!empty($tanai_momey2)){
		$allmoneytanai += $tanai_momey2;
	}


} ?>
<button class="btn btn-sm  " style="  background-color: #FF8C00; border-radius: 5px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 15px; " type="button"   >
<font color="#FFF" > ผลรวมยอดหนี้ที่ได้จากดำเนินคดี  <?php echo number_format(0+$allmoneytanai); ?>    </font>
</button>
								   				   

	 
					
         

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