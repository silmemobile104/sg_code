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


									
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
	}  
?>
      
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
		 
		 
		
	
	$startdate  = "01-".$searchname."-".$searchname2;
	$startdatenew  = date("Y-m-d", strtotime($startdate)); 
	$enddate = date("Y-m-t", strtotime($startdatenew)); 	 
							 
	$contactstart   = date("Y-m-d", strtotime($startdatenew)); 
	$checkend   = date("Y-m-d", strtotime($enddate)); 

	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		
		
	$cno = 0;
	$cno1 = 0;
	$cno2 = 0;
	$cno3 = 0;
	$sql2 = " SELECT *  FROM pricesomtub  
	where bill_no != ''  
	".$addcode.$addcode2."  
	order by create_date2 asc, pk asc    ";  

	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{       
		$allmoney = 0; 
		$contactstart   = date("Y-m-d", strtotime("2020-01-01")); 
		$checkend   = date("Y-m-d", strtotime($objResult2["create_date2"])); 

		$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql = "SELECT * FROM pricesomtub where titledata != ''  ".$addcode." and pk <= '".$objResult2["pk"]."'   
		order by create_date2 asc, pk asc   "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			if(($objResult["titledata"] == "เพิ่มเงินลงทุน")){
				$allmoney +=  $objResult["price"] ;
			} else if(($objResult["titledata"] == "ถอนเงินลงทุน")){
				$allmoney -=  $objResult["price"] ;
			}
		} 

		if($allmoney <= 0){
			$allmoney = 0;
		}

		$namestaff = "";
		$namestaff2 = $objResult2["create_date"];
		$namestaff3 = "";
		$namestaff4 = "";  
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$namestaff =  $objResult["name"];
		} 

		$status1 = " - ";
		if(($objResult2["payment"] == "ชำระแล้ว")){
			$status1 = " <font color = '#006400' >  ".$objResult2["payment"]."  </font> ";
		} else if(($objResult2["payment"] == "ยังไม่ชำระ")){
			$status1 = " <font color = '#FF0000' >  ".$objResult2["payment"]."  </font> ";
		}

		$price1 = 0;
		$price2 = 0;
		if(($objResult2["titledata"] == "เพิ่มเงินลงทุน")){
			$price1 =  $objResult2["price"] ;
		} else if(($objResult2["titledata"] == "ถอนเงินลงทุน")){
			$price2 =  $objResult2["price"] ;
		}
		
		
		
		$cno++;
		$cno1 += $price1;
		$cno2 += $price2;
	}
		
		 
	
	$sumall = $cno1 - $cno2;
	if($sumall <= 0){
		$sumall = 0;
	}
	?>  
	 
 
	 
	  <button class="btn btn-sm  " style="  background-color: #FF8C00; border-radius: 5px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 0px; " type="button"   >
			<font color="#FFF" > จำนวน  <?php echo number_format(0+$cno); ?>  คน </font>
	  </button>
 
	  <button class="btn btn-sm  " style="  background-color: #006400; border-radius: 5px;  height: 40px;  border: 1px solid  #006400;  margin-top: 0px; " type="button"   >
			<font color="#FFF" > เพิ่มเงินลงทุน  <?php echo number_format(0+$cno1); ?>    </font>
	  </button>
 
	  <button class="btn btn-sm  " style="  background-color: #B22222; border-radius: 5px;  height: 40px;  border: 1px solid  #B22222;  margin-top: 0px; " type="button"   >
			<font color="#FFF" > ถอนเงินลงทุน   <?php echo number_format(0+ $cno2 ); ?>     </font>
	  </button>
 

	  <button class="btn btn-sm  " style="  background-color: #B22222; border-radius: 5px;  height: 40px;  border: 1px solid  #B22222;  margin-top: 0px; " type="button"   >
			<font color="#FFF" > คงเหลือ   <?php echo number_format(0+ $sumall ); ?>     </font>
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