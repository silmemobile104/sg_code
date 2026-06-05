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
		 
	$sql2 = " SELECT *  FROM pricesomtub  
	where bill_no != ''  
	".$addcode.$addcode2."  
	order by pk asc    ";  
	$query2 = mysqli_query($objCon, $sql2);
		  
	      
	$total_record = mysqli_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
	 ?>  
	<?php if (ceil($total_record / $perpage) > 0): ?>
		<ul class="pagination">
			<?php if ($page > 1): ?>
			<li class="prev"><a href="reportnew27.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">Prev</a></li>
			<?php endif; ?>

			<?php if ($page > 3): ?>
			<li class="start"><a href="reportnew27.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">1</a></li>
			<li class="dots">...</li>
			<?php endif; ?>

			<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew27.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
			<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew27.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

			<li class="currentpage"><a href="reportnew27.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page ?></a></li>

			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew27.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew27.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)-2): ?>
			<li class="dots">...</li>
			<li class="end"><a href="reportnew27.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
			<?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)): ?>
			<li class="next"><a href="reportnew27.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">Next</a></li>
			<?php endif; ?>
		</ul> 
	<?php endif; ?>

	</div>
					
	<div class="col-lg-12"  align="center" style="margin-top: 5px; "  > 
	<font size="3px" class="serif2" color="#000" style=" font-size: 18px; ">  
	รายงานสรุปเพิ่มเงินบริษัท เอสจี  ลิสซิ่ง พลัส จำกัดประจำเดือน 
		<?php echo DateThai2($startdatenew); ?>	
		
	</font> 
	</div>
	
	
	
	
	<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
	<div class="table-responsive"  >
	<table id="key_product"  class=" table    tablemobile  " border="0"    >
	 <thead> 
	 <tr>
		<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;    "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ครั้งที่    </font></div></th>    
		<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ   </font></div></th>   
		<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รายการ  </font></div></th>   
		<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เพิ่มเงินลงทุน     </font></div></th> 
		<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ถอนเงินลงทุน   </font></div></th>  
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

				$sql2 = " SELECT *  FROM pricesomtub  
				where bill_no != ''  
				".$addcode.$addcode2."  
				order by create_date2 asc, pk asc  limit {$start} , {$perpage}   ";  

				$query2 = mysqli_query($con,$sql2); 
				while($objResult2 = mysqli_fetch_array($query2))
				{      
						if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
						}else{  
							$bg = "#FFF"; 
						} 

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
				?>
				<tr style="background-color: <?php echo $bg ?>; "> 

				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td>  

				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
				<?php echo DateThai($namestaff2)." ".DateThai2($namestaff2); ?>   

				</font></div></td> 

				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["titledata"]; ?>  </font></div></td> 


				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
				<?php 
					if(!empty($price1)){
						echo number_format(0+$price1);
					}
					  ?>   </font></div></td> 


				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
				<?php 
					if(!empty($price2)){
						echo number_format(0+$price2);
					}
					  ?>   </font></div></td> 
  
				</tr>  
				<?php $i++;  } ?>
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