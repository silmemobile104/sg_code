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
 	 
		 
		 
	$searchname2 = "1"; 

		 
		 
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
		 
		 
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}

?>  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>   
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
                     <font size="4px" color="#000000">  เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
                       		<div class=" col-lg-6 "  align="left" >
							<table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr>
									<td width="30%" align="center" bgcolor="#FFF"   >   
									<a href="product.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  ออกบิลบันทึก/รับเข้าสินค้า    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >   
									<a href="product_pasy.php">  
									<div  >   
									<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  ออกบิลใบเสร็จ/ใบวางบิล   </font>  
									</div> 
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#F77369" style="border-top-right-radius: 5px;" >   
									<a href="product_edit_select.php">  
									<div  >   
									<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการสินค้า   </font>  
									</div> 
									</a>
									</td>
								</tr>
							</table>
						   </div>
                      
							<div class="col-lg-12">
							<hr>
							</div>
                      
                       
                    		<div  class="col-lg-7"  align="left"  > 
							<table width="100%">
									<tr> 
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  ชื่อรายการสินค้า /  หมายเลขเครื่อง   </font>

										<form action="product_edit_select.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										</form> 

										</td>    
										<td width="1%">&nbsp;
										
										</td> 
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  ผู้จำหน่าย   </font>

										<form action="product_edit_select.php" method="get" > 
										<input type="hidden" id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>" >
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname3" name="searchname3"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname3)){ ?>
										  	<option value="">  ผู้จำหน่าย    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM store where pk = '".$searchname3."' and major = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM store where pk != '".$searchname3."' and major = '".$searchname2."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname3)){ ?>
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
                   
							<div class="col-lg-12">   </div>
                      
                   
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
								$addcode3 = "";
								$addcode4 = "";
								if(empty($_GET["searchname"])){

								}else{
									$addcode = " and ( name like '%".$searchname."%' or  codeno like '%".$searchname."%'  ) ";
								} 
								if(empty($_GET["searchname2"])){

								}else{
									$addcode2 = " and major = '".$searchname2."'  ";
								} 
								if(empty($_GET["searchname3"])){

								}else{
									$addcode3 = " and typedata_2 = '".$searchname3."'  ";
								} 
								if(empty($_GET["typedata"])){

								}else{
									$addcode4 = " and status = '".$typedata."'  ";
								} 
													 
								$sql2 = " SELECT * FROM product 
								where name != ''   
								".$addcode.$addcode2.$addcode3.$addcode4."  
								order by pk asc    "; 

								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									<ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="product_edit_select.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="product_edit_select.php?page2=1&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="product_edit_select.php?page2=<?php echo $page-2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="product_edit_select.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="product_edit_select.php?page2=<?php echo $page ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="product_edit_select.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="product_edit_select.php?page2=<?php echo $page+2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="product_edit_select.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="product_edit_select.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>">Next</a></li>
									<?php endif; ?>
								</ul>
							<?php endif; ?> 
							</div>
                 		  
                  		 	<?php
							$totalcal1= 0;
							$totalcal2= 0;
							$totalcal3 = 0;
							$totalcal4 = 0;
							$endback= 0;
													 
													 
							$sql2 = " SELECT * FROM product 
							where name != ''  
							".$addcode.$addcode2.$addcode3."  
							order by pk asc      ";  
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
								if($objResult2["status"] == "พร้อมจำหน่าย"){
									$totalcal1++;
									
								}
								if($objResult2["status"] == "ไม่พร้อมจำหน่าย"){ 
									$totalcal2++; 
								}
								
							}
							?>
                   			<div class="col-md-8" style="margin-top: 15px;" align="right" > 
                   			
							<a href="product_edit_select.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=พร้อมจำหน่าย"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  พร้อมจำหน่าย <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="product_edit_select.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ไม่พร้อมจำหน่าย"    > 
							<button type="button" class="btn btn-primary" style="background-color: #8B0000; border-radius: 5px; height: 40px; border: 1px solid  #8B0000;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ไม่พร้อมจำหน่าย <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>
							
							</div>
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 2400px; "    >
							     
							  <thead> 
								 <tr>
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    หมายเลขเครื่อง    </font></div></th>  
									<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา  </font></div></th>       
									<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อรายการสินค้า  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยี้ห้อ     </font></div></th> 
									<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผู้จำหน่าย   </font></div></th>
									<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภทสินค้า   </font></div></th>    
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>    

									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน     </font></div></th>
									<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะค่าคอม  </font></div></th>
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขอ้างอิงสัญญา  </font></div></th>
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสินค้า     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะการขาย     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์     </font></div></th>
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
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
											where name != ''  
											".$addcode.$addcode2.$addcode3.$addcode4."  
											order by pk asc    limit {$start} , {$perpage}   ";  
	   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											 	$bill_no = $objResult2["bill_no"];
											
												$drop_buy = " - ";
												if(empty($objResult2["drop_buy"])){
												}else if($objResult2["drop_buy"] == "โปรดเลือกรายการ"){
													
												}else{ 
													$drop_buy = $objResult2["drop_buy"];
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
											
											
												$date_start = "";
												$date_start2 = "";
												$date_start3 = "";
												$sql = " SELECT * FROM update_real_time where bill_no = '".$bill_no."' order by pk desc limit 1 ";    
												$query = mysqli_query($con,$sql); 
												while($objResult = mysqli_fetch_array($query))
												{ 
													$date_start = $objResult["create_by"];
													$date_start2 = $objResult["create_date2"];
													$date_start3 = $objResult["create_time"];
												}
												
												$name_staff = "";
												$sql = " SELECT * FROM member_all where pk = '".$date_start."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_staff =  $objResult["name"];
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
										    
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
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
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["price2"]); ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["total"]); ?>   </font></div></td> 
										  
										 
										 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
											
										if($objResult2["computer"] == "ยังไม่ได้ชำระค่าคอม"){
											echo  " <font color = '#FF0000' >  " . $objResult2["computer"]  . " </font> "; 
											
										}else if($objResult2["computer"] == "ชำระค่าคอมไปแล้ว"){
											echo  " <font color = '#006400' >   " . $objResult2["computer"]  . " </font> "; 
											
										}else if($objResult2["computer"] == "ไม่ต้องจ่ายค่าคอม (เคลมสินค้า)"){
											echo  " <font color = '#FF0000' >   " . $objResult2["computer"]  . " </font> ";  
										}
											 
										?>   
										</font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no_ref"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
											
										if($objResult2["status"] == "บันทึกทำสัญญาผ่อนมือถือ"){
											echo  " <font color = '#006400' >  ได้จำหน่ายออกแล้ว </font> "; 
											
										}else if($objResult2["status"] == "ขายหน้าร้าน"){
											echo  " <font color = '#006400' >  จำหน่ายแล้วอัตโนมัติ </font> "; 
											
										}else if($objResult2["status"] == "พร้อมจำหน่าย"){
											echo  " <font color = '#006400' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "เครมสินค้า"){
											echo  " <font color = '#FF0000' >  " . $objResult2["status"]  . " </font> "; 
											
										}else {
											
											echo  " <font color = '#FF8C00' >  ได้จำหน่ายออกแล้ว </font> "; 
											
										}
											 
										?>   
										</font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $drop_buy; ?>  </font></div></td>  
										
										
										 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["comeback"]; ?>  </font></div></td> 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_staff; ?>  
								    	<div> </div>
									    <?php echo DateThai($date_start2)." ".DateThai2($date_start2); ?>  
									     </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $date_start3; ?>  </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
										<?php if($objResult2["contactstatus"] == "สั่งซื้อปกติ"){  ?>
										<a href="print_product.php?bill_no=<?php echo $objResult2["bill_no"];?>" target="_blank" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  พิมพ์ </font></a>
										<?php } ?>
										</font></div></td> 
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
									<?php
									if($_SESSION["Status"] == "A"){	
									?>
										<a href="product_edit.php?CusID=<?php echo $objResult2["pk"];?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>
											 
										  <?php }else{ ?>
									
									<a href="product_edit.php?CusID=<?php echo $objResult2["pk"];?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; display: none; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
									<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>
									
									
									
									<a onclick="SebndOTPget<?php echo $objResult2["pk"]; ?>()"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; " >
									<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข   </font></a>
									
									
									<input type="hidden" id="pageget" name="pageget" value="แก้ไขรายการสินค้า/ราคาสินค้า/สต๊อก">
									
									
									 <script>
										function SebndOTPget<?php echo $objResult2["pk"]; ?>( ) {
											 
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
											});   
											 
											   
										}
										function SendgetKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var note = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;
											 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "send_get_page_otp.php?pageget="+pageget+"&note="+note,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												  
												
											}
											});	
											
											 
											document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
											document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
											
											
											//////alert("loadchat_total.php?customer="+customerpk);
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});
											
											
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});

											
											
											var check_get_key = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(check_get_key == ""){
												alert(" การส่ง PIN ผิดพลาด ");
												 
											 
												document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
												document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
												
												
											}
											
											
										} 
										function CheckKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var checkkey1 = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											var checkkey2 = document.getElementById("getkey<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(checkkey1 == ""){
												alert(" กรุณาทำรายการข้อใหม่ ");
											}else if(checkkey1 != checkkey2){
												alert(" รหัสไม่ตรงกรุณากรอกรหัสใหม่ ");
												
											
												$.ajax({
												type: "GET",
												url: "load_key.php?pageget="+pageget+"&note=",
												success: function(result) {
													 /// alert(result); 

												  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 

												}
												});
												
												
											}else if(checkkey1 == checkkey2){
												document.getElementById("nextpage<?php echo $objResult2["pk"]; ?>").click();
											}
											
										} 
									</script>
									
									
									
											    <!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข  
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข
												 	
												 </font>
												  
												 </div> 
												 
												 <div class="col-lg-12" style="margin-top: 15px;" id="showtxt1<?php echo $objResult2["pk"]; ?>">   
												 	
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรุณาแจ้ง เหตุผลการแก้ไข 
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="note<?php echo $objResult2["pk"]; ?>" name="note<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="SendgetKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ส่งคำขอ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
											 
											 
												 </div>
												 
												 
												 
												 <div class="col-lg-12" style="margin-top: 15px; display: none; " id="showtxt2<?php echo $objResult2["pk"]; ?>">   
												 	
												 <input type="hidden" id="keycheck<?php echo $objResult2["pk"]; ?>" name="keycheck<?php echo $objResult2["pk"]; ?>" >
												 
												 
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรอกรหัส
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="getkey<?php echo $objResult2["pk"]; ?>" name="getkey<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="CheckKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันรายการ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
												 
												 
												 </div>
												 
												 
												 
												 
												 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
									<?php } ?>
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