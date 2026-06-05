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
		
		
	$sql2 = " SELECT a.* FROM list_chk_cleam_back a
	Inner Join product b  On a.pkselect = b.pk
	where a.bill_no != ''  
	".$addcode.$addcode2.$addcode3.$addcode4."   
	order by a.pk asc    "; 
		 
		 
		 
	 ///   echo $sql2;
	$total_record = mysqli_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
	 ?>  
	<?php if (ceil($total_record / $perpage) > 0): ?>
		<ul class="pagination">
			<?php if ($page > 1): ?>
			<li class="prev"><a href="reportnew23.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>">Prev</a></li>
			<?php endif; ?>

			<?php if ($page > 3): ?>
			<li class="start"><a href="reportnew23.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>">1</a></li>
			<li class="dots">...</li>
			<?php endif; ?>

			<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew23.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
			<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew23.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

			<li class="currentpage"><a href="reportnew23.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page ?></a></li>

			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew23.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew23.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)-2): ?>
			<li class="dots">...</li>
			<li class="end"><a href="reportnew23.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
			<?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)): ?>
			<li class="next"><a href="reportnew23.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>">Next</a></li>
			<?php endif; ?>
		</ul> 
	<?php endif; ?>

	</div>
					
		<?php
 
		?>
					
        <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="key_product"  class=" table  table-bordered   tablemobile  " border="1" style="  "    >
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

		$sql2 = "  SELECT a.* FROM list_chk_cleam_back a
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