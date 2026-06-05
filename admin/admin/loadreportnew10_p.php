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


 
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
	} 
?>
     
    <div class="col-md-12" style="margin-top: 15px;   " > 
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
			$addcode4 = "   and b.name like '%".$customername."%'  or  c.codecustomer like '%".$customername."%' "; 
		}

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$totaldata4 = 0;
		$totaldata5 = 0;
		$totaldata6 = 0;
		$sql = "  SELECT a.* FROM money_customer_bank a
		Inner Join customer b On a.customer = b.pk
		Inner Join list_order c On c.bill_no = a.bill_no 
		where a.bill_no != '' ".$addcode.$addcode4."  Group By a.bill_no  order by a.pk desc     ";   
		$query = mysqli_query($con,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			$name_cutomer = " - ";
			$name_cutomer2 = " - ";     

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
 
			$facebook = " - ";
			$sql2 = "SELECT * FROM customer Where  pk = '". $customer  ."'   ";   
			$query2 = mysqli_query($objCon,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{    
				$facebook = $objResult2["name"];  
			}
		 
			$discountbank = 0;  
			$discount = 0;  
			$income1 = 0;  
			$moneybank = 0;
			$bankdate = "OFF"; 
			
			
			$contactstart   = date("Y-m-d", strtotime($totalprice4)); 
			$checkend   = date("Y-m-d", strtotime($daystart_load2));  
			$addcode_check = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
			and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
			order by pk asc  "; 
			
		////	echo $sql_c."<Br>";
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$moneybank +=  $objResult_c["money"];   
			}	
				 
			
			$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load2)));
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult["customer"]."'    and bill_no = '".$objResult["bill_no"]."'   ".$code_check2." ";   
			$query_p = mysqli_query($objCon,$sql_p); 
			while($objResult_p = mysqli_fetch_array($query_p))
			{   
				if(!empty($objResult_p["income"])){  
					if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
						$discountbank += $objResult_p["bank"];  
					}
					if($objResult_p["typesave"] == "ชำระ2ทาง"){
						$discountbank += $objResult_p["bank"];  
					}
				}   
			}	 	
			 		 
			
			
			$calcultor = $moneybank - $discountbank;
			if($calcultor <= 0){
				$calcultor = 0;
			}
			 
			$i++;  
			$totaldata1 += $moneybank; 
			$totaldata3 += $discountbank;
			$totaldata4 += $calcultor; 
			$totaldata2++;  
		
		} 
		
		?>
		 
	 

	</div>
			
	  <button class="btn btn-sm  " style="  background-color: #FF8C00; border-radius: 5px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > จำนวน  <?php echo number_format(0+$totaldata2); ?>  คน </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #006400; border-radius: 5px;  height: 40px;  border: 1px solid  #006400;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมยอดฝากชำระ  <?php echo number_format(0+$totaldata1); ?>    </font>
	  </button>

 
	  <button class="btn btn-sm  " style="  background-color: #FFD700; border-radius: 5px;  height: 40px;  border: 1px solid  #FFD700;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมตัดชำระ  <?php echo number_format(0+$totaldata3); ?>     </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #001470; border-radius: 5px;  height: 40px;  border: 1px solid  #001470;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมคงเหลือ    <?php echo number_format(0+$totaldata4); ?>  คน </font>
	  </button>


  	  <a href="printreportnew10.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>" target="_blank">
  		 
	  <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;  margin-top: 5px;  " type="button"    >
			<font color="#FFF" >  พิมพ์เอกสาร </font>
	  </button>		

		</a>			
	 

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