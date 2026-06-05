<?php 
session_start();
$_SESSION["load"] = "4";
include('header.php');
 
	 	 
	$name = ""; 
	$codeno = ""; 
	$appleid = ""; 
	$storerage = ""; 
	$color = ""; 
	$password = ""; 
	$typedata_2 = ""; 
	$note = ""; 
	$price1 = ""; 
	$price2 = ""; 
	$totalprice = ""; 


	
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
 	 
		   
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  
	$major = "";
	$major2 = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
		$major2 = $_GET["major"];
	}  

	if(empty($_GET["major2"])){
		
	}else{
		$major = $_GET["major2"];
		$major2 = $_GET["major2"];
	}  

	$typedata = "ฝากเงิน"; 
	$typedata2 = ""; 
	$memberpk = "";
	if(empty($_GET["CusID"])){
		
	}else{
		$memberpk = $_GET["CusID"]; 
	}  
	  
	$namestaff = "";
	$namestaff2 = "";
	$namestaff3 = "";
	$namestaff4 = "";
	$sql = "SELECT * FROM customer where pk = '".$memberpk."'  order by pk desc limit 1 "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$namestaff = $objResult["name"];  
	} 
 

	$total_p = 0;
	$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
	and typedata = 'ฝากเงิน'
	order by pk desc   "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$total_p += $objResult["price"];  
	} 
											
	$total_d = 0;
	$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
	and typedata = 'ถอนเงิน'
	order by pk desc "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$total_d += $objResult["price"];  
	} 

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ประวัติฝากถอน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ประวัติฝากถอน >  <?php echo $namestaff; ?>    </font>   
                     <div > &nbsp; </div>
                  </div> 
                  </font> 
                  </div>
             
            <div class="row"  >
              <div class=" col-lg-12 "  style="margin-top: -15px;"  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  ประวัติฝากถอน  <?php echo $namestaff; ?>   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                       
                        <link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

						<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
						<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

						<script type="text/javascript"> 
											$(document).ready(function() {
												var d = new Date();
												d.setDate(d.getDate());
												var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear()); 

												$(".current").datepicker({    
												changeMonth: true, 
												changeYear: true, 
												dateFormat: 'dd/mm/yy', 
												isBuddhist: false, 
												defaultDate: toDay, 
												dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
												yearRange: "-1:+5",
													  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
													  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
													  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});
											}); 
											</script>
 
 
							   
                    	<div class="col-lg-12"  id="showcustomer"   > 
                   	       
						<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                       
                  		<?php
						$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px;  border-color: #006400; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";
						$colorbtns3s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
  			 
						$p_total1 = 0;
						$p_total2 = 0;
						$p_total3 = 0;
						$total_p = 0;
						$total_d = 0;
						$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
						and typedata = 'ฝากเงิน'
						order by pk desc   "; 
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{ 
							$total_p += $objResult["price"];  
						} 
											
						$total_d = 0;
						$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
						and typedata = 'ถอนเงิน'
						order by pk desc "; 
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{ 
							$total_d += $objResult["price"];  
						} 
						?>	
                    	  
						 <div id="showtabledata1"  >
						 <div class="col-md-4" style="margin-top: 15px;" > 
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
											if(empty($searchname)){ 
												$addcode = " and create_date = '".$daystart_load."'  ";
											}else{
												$addcode = " and create_date = '".$daystart_load."'  ";
											}

										$sql2 = " SELECT * FROM member_bank  
										where  price != ''  
										and major = '".$major."' 
										and member = '".$memberpk."'  
										".$addcode.$addcode2."  
										order by  pk asc    "; 

										$query2 = mysqli_query($objCon, $sql2);
										$total_record = mysqli_num_rows($query2);
										$total_page = ceil($total_record / $perpage);
										 ?>  
										<?php if (ceil($total_record / $perpage) > 0): ?>
											<ul class="pagination">
																			<?php if ($page > 1): ?>
																			<li class="prev"><a href="member_bank_income.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Prev</a></li>
																			<?php endif; ?>

																			<?php if ($page > 3): ?>
																			<li class="start"><a href="view_member_bank_income.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">1</a></li>
																			<li class="dots">...</li>
																			<?php endif; ?>

																			<?php if ($page-2 > 0): ?><li class="page"><a href="view_member_bank_income.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																			<?php if ($page-1 > 0): ?><li class="page"><a href="view_member_bank_income.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																			<li class="currentpage"><a href="view_member_bank_income.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page ?></a></li>

																			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="view_member_bank_income.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="view_member_bank_income.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																			<?php if ($page < ceil($total_record / $perpage)-2): ?>
																			<li class="dots">...</li>
																			<li class="end"><a href="view_member_bank_income.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																			<?php endif; ?>

																			<?php if ($page < ceil($total_record / $perpage)): ?>
																			<li class="next"><a href="view_member_bank_income.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Next</a></li>
																			<?php endif; ?>
																		</ul> 
										<?php endif; ?>

									</div>

						 <div   class="col-lg-8"  align="right"  >  
						 <button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  จำนวนเงินฝาก   <?php echo number_format(0+$total_p); ?> บาท </font> </button>

						 <button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนถอนเงิน  <?php echo number_format(0+$total_d); ?> บาท </font> </button>

						 <button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor3; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนคงเหลือ   <?php echo number_format(0+$total_p-$total_d); ?> บาท </font> </button>   
						 </div>
                       
                         
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						 <div class="table-responsive"  >
						 <table id="key_product"  class=" table    tablemobile  " border="0"    >
						 <thead> 
						 <tr>
							<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ครั้งที่    </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่ทำรายการฝาก  </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันเดือนปี     </font></div></th>  
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา     </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงิน      </font></div></th> 
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ      </font></div></th>  
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ประวัติการแก้ไข     </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ออกบิล   </font></div></th>  
						 </tr>
					  	</thead>  
										 
										 
										<tbody>
									  
									 	<?php 
										$bg = "#F8FAFD";  
										$i = 1;
										$total = 0;

 
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM member_bank  
											where  price != ''  
											and major = '".$major."' 
											and member = '".$memberpk."'  
											".$addcode.$addcode2."  
											order by  pk asc    limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
										if($objResult2["typedata"] == "ฝากเงิน"){ 
											$bg = "#006400"; 
										}else{  
											$bg = "#FF0000"; 
										} 
											 
												$name_create = "";
												$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_create =  $objResult["name"];
												}
											
												$name_major = "";
												$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_major =  $objResult["name"];
												}  
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price"]); ?> </font></div></td> 
										 
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo  $objResult2["typedata"] ; ?> </font></div></td> 
										 
									  
									  
									  
									  
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="#000" style=" font-size: 13px; " > 
										ประวัติ   
										</font>  
										</a> 
										
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
								<div class="col-lg-12" align="left"   >   
								<font size="3px" color="#FFF" style="font-size: 14px;">   
 								<?php
								$ic = 1;
								$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'   
								order by pk desc  ";   
								$query_v = mysqli_query($objCon,$sql_v);
								while($objResult_v = mysqli_fetch_array($query_v))
								{
										$memberlast1 = "";
										$memberlast2 = "";
										$memberlast3 = "";
										 
										$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
										$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
										while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
										{
											$memberlast1 = $objResult_getstaff["name"];  
										} 
									
										$memberlast2 = $objResult_v["create_date2"];
										$memberlast3 = $objResult_v["create_time"];
										 
										echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
											" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br>
											-------------------------- <Br> ";
									 
									$ic++;
							    } 
								?> 
								</font> 
								</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										</font></div></td>
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">  
										
										<?php if($objResult2["typedata"] == "ฝากเงิน"){  ?>
										
										<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="print_income.php?bill_no=<?php echo $objResult2["bill_no"];?>&round=<?php echo $i;?>" target="_blank"  > 
										<font size="3px" color="#FFF" style=" font-size: 13px; " > ออกบิล </font>
										</a>
										<?php }else{ ?>
										
										<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="print_out.php?bill_no=<?php echo $objResult2["bill_no"];?>&round=<?php echo $i;?>" target="_blank"  > 
										<font size="3px" color="#FFF" style=" font-size: 13px; " > ออกบิล </font>
										</a>
										<?php } ?>  
        								</div></td> 
										 
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
							</table>  
							</div>
						   </div>
                   	         </div>
                      
                   	      </div>
                     
                   	  <?php } ?>
                   		    
                   		 
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR><bR><br> <bR><bR><bR><br>   
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>