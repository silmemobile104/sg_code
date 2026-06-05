<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
ini_set("memory_limit","10M");
 
	
		 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
	$data = "";
	$customer = "";
	$searchname = "";
	$producttype = "";
	$cod = "";
	$computer = "";
	$moneymonth = "";
	$moneycheck_contact_store = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$appleid = "";
	$bank2 = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}


?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกทำสัญญาผ่อนมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > เช็คสัญญา  </font>   
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
                     <font size="4px" color="#000000">  เช็คสัญญา   </font>   
                  </div> 
                  </font> 
                  </div>
                  
                      <?php if(isset($_GET["page"])){  
							if(($_GET["page"] == "edit")){ ?>
                   		   
                    	     <div   class="col-lg-12"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="20%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/รหัสลูกค้า/เบอร์โทร/รหัสเครื่อง/รหัสบัตรประชาชน   </font>

										<form action="check_contact_store.php" method="get" >
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>  
										<td width="1%">&nbsp;
										
										</td> 
										<td width="15%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname2)){ ?>
										  	<option value="">  สาขา    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname2)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										    <?php } ?>
											</select> 
										  <span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										</form> 

										</td>   
										<td width="1%">&nbsp;  
										
										</td> 
										<td width="20%">
										<a href="check_contact_store.php?page=edit"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										    &nbsp;  
										<a href="print_ex_check_contact_store.php?page=edit" target="_blank"  > 
										 <button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; width: 130px; height: 40px; border-color: #006400; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    Export Excel   </font> </button> 
										</a> 
										</td>  
									</tr>
								</table>  
								</div>
                     
                       		 <div class="col-lg-12"> &nbsp; </div>
                       		 
                       		 
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
									$perpage = 25;
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
									if(empty($_GET["searchname"])){

									}else{
										$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like '%".$searchname."%' or a.bill_no like '%".$searchname."%' or b.telphone like '%".$searchname."%' or c.codeno like '%".$searchname."%' or b.passport like '%".$searchname."%'   )";
									}
									$addcode2 = ""; 
									if(empty($_GET["searchname2"])){

									}else{
										$addcode2 = " and major = '".$searchname2."'  ";
									} 

									$addcode3 = ""; 
									if(empty($_GET["typedata"])){
									}else if(($_GET["typedata"] == "ปกติ")){	

										$addcode3 = " and status = 'ปกติ'  ";

									}else if(($_GET["typedata"] == "อนุมัติ/สัญญาโมฆะ")){

										$addcode3 = " and status = 'อนุมัติ/สัญญาโมฆะ'  ";

									}else{

									} 

								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;
								$total_record= 0;
															  
								$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
								Inner Join customer b On   a.customer = b.pk
								Inner Join product c On   c.pk = a.menu_id
								where a.bill_no != '' and a.closebill = 'เป็นหนี้' and a.contactstatus = 'อนุมัติแล้ว'  
								".$addcode.$addcode2.$addcode3."  
								order by a.pk asc    "; 
								 $query2 = mysqli_query($objCon, $sql2);
								 $total_record = mysqli_num_rows($query2);
								
								/*
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{       
									if($objResult2["status"] == "ปกติ"){
										$totalcal1++;
									}
									if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){
										$totalcal2++;
									}
									
									$total_record++;
								}							  
								*/							  
															  
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="check_contact_store.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="check_contact_store.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="check_contact_store.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"&page=edit><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="check_contact_store.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="check_contact_store.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>

							</div>
                     
						    <div class="col-lg-8"  align="right"   id="showcalsumdata" style=" display: none; "  > 
							<a href="check_contact_store.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=ปกติ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ปกติ <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="check_contact_store.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=อนุมัติ/สัญญาโมฆะ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  อนุมัติ/สัญญาโมฆะ <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>
 
							</div>
                    
                     
                   			<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							    <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
								   
								  
								  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>  
								
							 
								
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
								 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th> 
  
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
												Inner Join customer b On   a.customer = b.pk
												Inner Join product c On   c.pk = a.menu_id
												where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว' 
												".$addcode.$addcode2.$addcode3."  
												order by a.pk asc   limit {$start} , {$perpage}   ";   
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
												$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' and income != ''   
												order by pk asc limit 1 "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$onoff_edit =  "OFF";
												}
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 
										
										</font></div></td>
										
										
										 
										 
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create; ?>    </font></div></td>
										
										 
									   
										  
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										  
										<?php  if($objResult2["closebill"] == "เป็นหนี้"){  ?>
										
										<?php if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){ ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > หมดหนี้ </font>  
										<?php }else{ ?>
										<font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > เป็นหนี้ </font> 
										<?php } ?>
										  
										<?php }else  if($objResult2["closebill"] == "หมดหนี้") { ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > หมดหนี้ </font>  
										<?php } ?>
											 
										</font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>    </font></div></td>
										   
										    
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                  	  
                   	  <?php } }  ?>
                         
                       
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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
        
    
<style>
/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px; 
  cursor: pointer;   
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px; 
  background-color: #FFF;
	border-radius: 0px;
	border: 2px solid #229B9C;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #229B9C;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container2 .checkmark:after {
  left: 5px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>    
        

<script> 
		function Commas(str)
		{
			var parts = str.toString().replace("," ,"").split(".");
			parts[0] = parts[0].replace("," ,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}
</script>
<?php
include('footer2.php');
?>