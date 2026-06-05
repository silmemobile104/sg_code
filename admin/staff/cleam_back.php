<?php 
session_start();
$_SESSION["load"] = "1";
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
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เคลมสินค้า   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เคลมสินค้า   </font>   
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
                     <font size="4px" color="#000000">  เคลมสินค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                       
                       
                    		<div   class="col-lg-4"  align="left"  > 
							<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>

										<form action="cleam_back.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										</form> 

										</td>  
									</tr>
								</table>  
							</div> 
                    		<div   class="col-lg-4"  align="left"  > 
                    		<?php if(!empty($searchname2)){ 
							
							$addcode = "";
							$addcode2 = "";
							if(empty($_GET["searchname"])){

							}else{
								$addcode = " and ( name like '%".$searchname."%' or  codeno like '%".$searchname."%'  ) ";
							} 
							if(empty($_GET["searchname2"])){
									$addcode2 = " and major = '".$searchname2."'  ";
								}else{
									$addcode2 = " and major = '".$searchname2."'  ";
							} 
								
							$cc_cleam = 0;
							$sql2 = " SELECT * FROM product 
									where name != '' and status = 'เครมสินค้า/รอสินค้า'
									".$addcode.$addcode2."  
									order by pk asc   ";  
	 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      			
								$cc_cleam++; 
							}
							 
								 
							?>
							<div class="col-lg-12" align="left"   > 
							  <div class="form-group">    
							  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FF0000; border-radius: 5px;   border: 1px solid  #FF0000;  margin-top: 28px;  "> <font color="#FFF" size="3px" class="serif1" >  จำนวนส่งเครมสินค้า <?php echo  number_format(0+$cc_cleam) ; ?> จำนวน </font> </button> 
							 </div> 
							</div> 
							<?php } ?>
							</div> 
                   
                   
                   			<div class="col-md-12" style="margin-top: 15px;" > 
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
												if(empty($_GET["searchname"])){

												}else{
													$addcode = " and ( name like '%".$searchname."%' or  codeno like '%".$searchname."%'  ) ";
												} 
												if(empty($_GET["searchname2"])){
														$addcode2 = " and major = '".$searchname2."'  ";
												}else{
													$addcode2 = " and major = '".$searchname2."'  ";
												} 
													 
											$sql2 = " SELECT * FROM product 
											where name != ''  and status = 'เครมสินค้า/รอสินค้า'
											".$addcode.$addcode2."  
											order by pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="cleam_back.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="cleam_back.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="cleam_back.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="cleam_back.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="cleam_back.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_back.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_back.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="cleam_back.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="cleam_back.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                   
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1650px;"    > 
											 <thead> 
											 <tr>
												<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    หมายเลขเครื่อง    </font></div></th>  
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา  </font></div></th>       
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อรายการสินค้า  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยี้ห้อ     </font></div></th> 
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผู้จำหน่าย   </font></div></th>
												<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภทสินค้า   </font></div></th>    
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล     </font></div></th>   
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ     </font></div></th>    
												     
												<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ     </font></div></th>
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th>
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไขสถานะ   </font></div></th>  
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
										    
										$sql2 = " SELECT * FROM product 
											where name != '' and status = 'เครมสินค้า/รอสินค้า'
											".$addcode.$addcode2."  
											order by pk asc    limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											 
 
												$name_typedata = "";
												$sql = "SELECT * FROM store where pk = '".$objResult2["typedata_2"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_typedata =  $objResult["name"];
												}
												$name_typedata2 = "";
												$sql = "SELECT * FROM drop_typedata2 where pk = '".$objResult2["typedata2"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_typedata2 =  $objResult["name"];
												}
												$name_typedata3 = "";
												$sql = "SELECT * FROM drop_typecolor where pk = '".$objResult2["color"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_typedata3 =  $objResult["name"];
												}
												$name_typedata4 = "";
												$sql = "SELECT * FROM drop_typedata where pk = '".$objResult2["typedata"]."'    order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_typedata4 =  $objResult["name"];
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
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codeno"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata2; ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata4; ?>    </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										    
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
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
												  <div align="left" class="col-lg-12">   
												  <font size="3px" color="black">   
													ชื่อรายการสินค้า : <?php echo $objResult2["name"]; ?> <br>
													หมายเลขเครื่อง : <?php echo $objResult2["codeno"]; ?> <br>
													ประเภทสินค้า : <?php echo $name_typedata; ?> <br>
 
													ยี้ห้อ  : <?php echo $name_typedata2; ?> <br>
													สี  : <?php echo $name_typedata3; ?> <br>
													ความจุ : <?php echo $objResult2["storerage"]; ?> <br>
													Apple id : <?php echo $objResult2["appleid"]; ?> <br>
													รหัสผ่าน : <?php echo $objResult2["password"]; ?> <br>
													ประเภทสินค้า  : <?php echo $name_typedata4; ?> <br>
													
													หมายเหตุ : <?php echo $objResult2["note"]; ?> <br>
													ราคาทุน : <?php echo number_format(0+$objResult2["price1"]); ?> <br>
													ราคาขาย : <?php echo number_format(0+$objResult2["price2"]); ?> <br>
													กำไร : <?php echo number_format(0+$objResult2["totalprice"]); ?> <br>

												 </font> 
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										
										
										
										</font></div></td> 
										 
										  
									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										    
										<a data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
										</a>  
										
										
										 <!-- modal small -->
										<div class="modal fade" id="smallmodaltwo<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div align="left" class="col-lg-12">   
												  <font size="3px" color="black">   
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
																	" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) ." เวลา " . $memberlast3 . " </font>   <Br>
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
										
										
										
										</font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo   $objResult2["note"] ; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
											
										if($objResult2["status"] == "พร้อมจำหน่าย"){
											echo  " <font color = '#006400' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "เครมสินค้า"){
											echo  " <font color = '#FF0000' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "ไม่พร้อมจำหน่าย"){
											
											echo  " <font color = '#FF8C00' >  " . $objResult2["status"]  . " </font> "; 
											
										}
											 
											
											
											?>   </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
											
										<a href="product_edit_cleam.php?CusID=<?php echo $objResult2["pk"];?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>
											
											
										</font></div></td> 
										  

										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
  
										 
							</table>  
							</div>
						  </div>
                    
                  	    
                   	  <?php } ?>
                   		     
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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
        

<?php
include('footer.php');
?>