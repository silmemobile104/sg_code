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

	}else if(($_GET["searchname3"] == "กำลังผ่อนปกติ")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' and  a.onoff != 'NPL'  ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 

	if(!empty($_GET["customername"])){
		$addcode4 = "   and (b.name like '%".$customername."%'  or  a.codecustomer like '%".$customername."%') "; 
	}
		
	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	left Join customer b On   a.customer = b.pk
	left Join product c On   c.pk = a.menu_id
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว'  ".$addcode.$addcode2.$addcode3.$addcode4."  
	order by a.pk asc    "; 
	$query2 = mysqli_query($objCon, $sql2);
		  
	$total_record = mysqli_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
	 ?>  
	<?php if (ceil($total_record / $perpage) > 0): ?>
		<ul class="pagination">
			<?php if ($page > 1): ?>
			<li class="prev"><a href="reportnew1.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">Prev</a></li>
			<?php endif; ?>

			<?php if ($page > 3): ?>
			<li class="start"><a href="reportnew1.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">1</a></li>
			<li class="dots">...</li>
			<?php endif; ?>

			<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew1.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
			<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew1.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

			<li class="currentpage"><a href="reportnew1.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page ?></a></li>

			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew1.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew1.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)-2): ?>
			<li class="dots">...</li>
			<li class="end"><a href="reportnew1.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
			<?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)): ?>
			<li class="next"><a href="reportnew1.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>">Next</a></li>
			<?php endif; ?>
		</ul> 
	<?php endif; ?>

	</div>
					
		<?php
 		$table = " 3200px; ";
		?>
					
        <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="key_product"  class=" table    tablemobile  " border="0" style=" width:  <?php echo $table; ?> "    >
		 <thead>  
		 <tr>
			<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รหัสลูกค้า    </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อเฟสบุ๊ค  </font></div></th>       
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อ-นามสกุล  </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เบอร์โทรติดต่อ  </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> บัตรประชาชน  </font></div></th>    
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ที่อยู่ </font></div></th> 
			<th width="2%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> apple id  </font></div></th> 
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  วันที่ทำสัญญา </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  จำนวนงวด </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวมทั้งสิ้น </font></div></th>       
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   สถานะบัญชี   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   พิมพ์   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   รุ่นสินค้า   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   สี   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   ความจุ   </font></div></th>  
			<th width="5%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   ประเภทสินค้า   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   ราคาสินค้า   </font></div></th>  
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   ผ่อนเดือนละ   </font></div></th>  
			<th width="4%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   เริ่มชำระ   </font></div></th>
			<th width="4%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   สิ้นสุดวันที่   </font></div></th>
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

			$i = ( ($_GET["page2"]-1) * 40 ) + 1; 
		}

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0; 

		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook, b.telphone, b.passport, b.address1, b.address2, b.address3, b.address4 FROM list_order  a
		left Join customer b On   a.customer = b.pk
		left Join product c On   c.pk = a.menu_id
		where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว'  
		".$addcode.$addcode2.$addcode3.$addcode4."  
		order by a.pk asc    limit {$start} , {$perpage}  "; 
			  
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 
			
			$address1 = $objResult2["address1"];
			$address2 = $objResult2["address2"];
			$address3 = $objResult2["address3"];
			$address4 = $objResult2["address4"];

			$all_address = "";
			$sql = "SELECT * FROM data1 where PROVINCE_ID = '".$address1."'   order by PROVINCE_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$all_address = $all_address." จังหวัด : ".$objResult["PROVINCE_NAME"];
			}

			$sql = "SELECT * FROM data2 where PROVINCE_ID = '".$address1."' and AMPHUR_ID = '".$address2."'  order by AMPHUR_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$all_address = $all_address." อำเภอ : ".$objResult["AMPHUR_NAME"];
			}
			$sql = "SELECT * FROM data3 where PROVINCE_ID = '".$address1."'  and AMPHUR_ID = '".$address2."' and DISTRICT_CODE = '".$address3."'  order by DISTRICT_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$all_address = $all_address." ตำบล : ".$objResult["DISTRICT_NAME"];
			}

	
			

			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$appleid = $objResult2["appleid"];   
			$cod = $objResult2["cod"];   
			$moneydata = $objResult2["moneydata"]; 
			$startdate = $objResult2["startdate"];   
			$endate = $objResult2["endate"];     
			
			$name_create2 = "-"; 
			$name_create3 = "-"; 
			$name_create4 = "-"; 
			$name_major = "-"; 
			$name_major2 = "-"; 
			$p_data1 = "";
			$p_data2 = "";
			$p_data3 = "";
			$p_data4 = "";
			$p_data5 = "";
			$p_data6 = "";
			$p_dataname = "";
			$codeno = "";
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				$p_data1 = $objResult["appleid"];
				$p_data2 = $objResult["password"];
				$p_data3 = $objResult["storerage"];  
				$p_dataname = $objResult["name"];  
				$codeno = $objResult["codeno"];   
				
				$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data4 =  $objResult_c["name"];
				}
				
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
				
				
				$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data5 =  $objResult_c["name"];
				}
				
				
				$sql_c = "SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
					$p_data6 =  $objResult_c["name"];
				}
			}

  
			$txtshow = " เป็นหนี้ ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
			if($objResult2["closebill"] == "เป็นหนี้"){ 
				
			$txtshow = " กำลังผ่อน ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			if($objResult2["onoff"] == "NPL"){ 
				
			$txtshow = " กำลังผ่อน NPL ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			}

			}else if($objResult2["closebill"] == "หมดหนี้"){
			$txtshow = " หมดหนี้ ";
			$hdd = " display: none;  "; 
			$bgbtn = " #FFE0E0  ";

			}
			 
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?>  </font></div></td>
 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["facebook"]; ?>  </font></div></td>
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td>
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["telphone"]; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["passport"]; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="left"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $all_address; ?>  </font></div></td>
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $appleid; ?>  </font></div></td>
		
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($g_create_date2)." ".DateThai2($g_create_date2); ?>  </font></div></td>
		  
		  
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice2); ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice2*$totalprice3); ?>  </font></div></td>
		
		
		<td style=" border-left: 0px solid #F2F2F2; ">

		<div align="center"  id="showorder<?php echo $objResult2["pk"]; ?>"  >
		<font size="3px" color="Black" style=" font-size: 13px; " >  
		<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: -5px;     "   id="btnsave<?php echo $objResult2["pk"];?>" data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""   >
		<font color="#000" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdata<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
		</font>
		</div> 
		  
		</td> 		
  
    	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
		<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
		<font size="3px" color="#F77369" style=" font-size: 13px; " > 
		พิมพ์   
		</font>  
		</a> 

		</font></div></td>
										
							
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $p_dataname; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $p_data4; ?>  </font></div></td> 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $p_data6; ?>  </font></div></td> 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$moneydata); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?> </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($startdate)." ".DateThai2($startdate); ?>   </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($endate)." ".DateThai2($endate); ?>    </font></div></td> 		
     
		</tr> 
		<?php $i++; $totaldata1++; $totaldata2 += $totalprice2*$totalprice3;  } ?>
		</tbody>


		<?php
		
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook, b.telphone FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   c.pk = a.menu_id
		where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว' 
		".$addcode.$addcode2.$addcode3.$addcode4."  
		order by a.pk asc     "; 
			 
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$totalprice1 = $objResult2["money"]; 
			$totalprice2 = $objResult2["daytotal"]; 
			$totalprice3 = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  

  			$totaldata2 += $totalprice2*$totalprice3; 
		}
		?>
		<tfooter> 
		 <tr>
			<th width="2%" bgcolor="#FFF" colspan="2" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวมบัญชีสินเชื่อ <?php echo number_format(0+$total_record); ?> &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="3" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata2); ?>  &nbsp;  </font></div></th>    
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