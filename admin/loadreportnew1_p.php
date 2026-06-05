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
     
    <div class="col-md-12" style="margin-top: 15px;  " > 
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
		$perpage = 40;
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
		
	$cno = 0;
	$cno1 = 0;
	$cno2 = 0;
	$cno3 = 0;
	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	Inner Join product c On   c.pk = a.menu_id
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
	".$addcode.$addcode2.$addcode3.$addcode4."  
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
			$cno4 += $daytotal * $dayprice; 
	}
		
		
		
		
		
		
		
		
  
		
	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  b.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  b.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  b.closebill = 'หมดหนี้' "; 
	} 

	if(!empty($_GET["customername"])){
		$addcode4 = "   and b.name like '%".$customername."%'  or  a.codecustomer like '%".$customername."%' "; 
	}
		 
	$sql2 = " SELECT a.*  FROM list_chk_computer a 
	Inner Join list_order b  On a.pkselect = b.pk
	Inner Join product c  On b.menu_id = c.pk
	where  a.bill_no != ''   
	".$addcode.$addcode2.$addcode3.$addcode4."
	Group By a.bill_no
	order by a.pk asc     ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		
		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
		$bill_no = $objResult2["bill_no"];
		$pasy_onoff = $objResult2["pasy_onoff"];


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


		$pricecal = 0;
		$total_price = 0;
		$s_m1 = 0;
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
			$pricecal = $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];


			$pasy = $objResult_c["computer2"] * 0.03;
			$cal = $pricecal * 0.03;
			$cal2 = $pricecal  - $pasy;


			if($cal2 <= 0){
				$cal2 = 0;
			}

			$s_m1 += $cal2;

		} 
		
		
		$cno1 += $s_m1;
	}
		 
	?>  
	 

	</div>
	 
	  <button class="btn btn-sm  " style="  background-color: #FF8C00; border-radius: 5px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > จำนวน  <?php echo number_format(0+$cno); ?>  คน </font>
	  </button>
 
	  <button class="btn btn-sm  " style="  background-color: #006400; border-radius: 5px;  height: 40px;  border: 1px solid  #006400;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมต้นทุนสินเชื่อ  <?php echo number_format(0+$cno1); ?>    </font>
	  </button>
 
	  <button class="btn btn-sm  " style="  background-color: #B22222; border-radius: 5px;  height: 40px;  border: 1px solid  #B22222;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมเงินต้น   <?php echo number_format(0+ (($cno4*100) / 107) ); ?>     </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #FFD700; border-radius: 5px;  height: 40px;  border: 1px solid  #FFD700;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมภาษี  <?php
				$var1 = $cno4;
				$var2 = ($cno4*100) / 107;
				$var3 = $var1 - $var2; 
				echo number_format(0+$var3); ?>     </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #001470; border-radius: 5px;  height: 40px;  border: 1px solid  #001470;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมสินเชื่อทั้งสิ้น    <?php echo number_format(0+$cno4); ?>  คน </font>
	  </button>


  	  <a href="printreportnew1.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>" target="_blank">
  		 
	  <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;  margin-top: 5px;  " type="button"    >
			<font color="#FFF" >  พิมพ์เอกสาร </font>
	  </button>		

	  </a>	
         


  	  <a href="printreportnew1_ex.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>" target="_blank">
  		 
	  <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;  margin-top: 5px;  " type="button"    >
			<font color="#FFF" > Execel </font>
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