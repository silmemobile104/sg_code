<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}


	$searchname2 = "1"; 	

	$tpedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$tpedata = $_GET["typedata"];
	}	

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ประวัติชำระหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ประวัติชำระหนี้  </font>   
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
                     <font size="4px" color="#000000">  ประวัติชำระหนี้   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                        
                    	     <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">   ค้นหารายชื่อ / รหัสลูกค้า     </font>

										<form action="history.php" method="get" >
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
										<td width="40%">
										<a href="history.php"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										</td>  
									</tr>
								</table>  
								</div>
                     
                   	     
                    	        <div   class="col-lg-4"  align="right"  > 
								<a href="print_execel_history.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=<?php echo $tpedata; ?>" target="_blank"> 
								 <button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; width: 130px; height: 40px; border-color: #FF8C00; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    Execel   </font> </button> 
								</a> 
								</div>
                     
                    
                             <div class="col-md-12"   >  </div>
                             
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
									$perpage = 45;
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
										$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like '%".$searchname."%' ) ";
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

									}else if(($_GET["typedata"] == "NPL")){

										$addcode3 = " and onoff = 'NPL'  ";

									}else if(($_GET["typedata"] == "หมดหนี้")){

										$addcode3 = " and  closebill = 'หมดหนี้'  ";

									}else{

									} 

													 
													 
									$sql2 = "SELECT a.*, b.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									where a.bill_no != ''    and a.contactstatus = 'อนุมัติแล้ว' 
									".$addcode.$addcode2.$addcode3."  
									order by a.pk asc    "; 
									$query2 = mysqli_query($objCon, $sql2);
									$total_record = mysqli_num_rows($query2);
									$total_page = ceil($total_record / $perpage);
									 ?>  
									<?php if (ceil($total_record / $perpage) > 0): ?>
										 <ul class="pagination">
										<?php if ($page > 1): ?>
										<li class="prev"><a href="history.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>">Prev</a></li>
										<?php endif; ?>

										<?php if ($page > 3): ?>
										<li class="start"><a href="history.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>">1</a></li>
										<li class="dots">...</li>
										<?php endif; ?>

										<?php if ($page-2 > 0): ?><li class="page"><a href="history.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
										<?php if ($page-1 > 0): ?><li class="page"><a href="history.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

										<li class="currentpage"><a href="history.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo $page ?></a></li>

										<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="history.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
										<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="history.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)-2): ?>
										<li class="dots">...</li>
										<li class="end"><a href="history.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
										<?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)): ?>
										<li class="next"><a href="history.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $tpedata; ?>">Next</a></li>
										<?php endif; ?>
									</ul>
									<?php endif; ?>

							 </div>
                          
                             <div class="col-lg-8"  align="right"  id="showcalsumdata"   >
                            
							<a href="history.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ปกติ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" > สัญญาปกติ  </font> 
							</button> 
							</a>
							
							  
							<a href="history.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=อนุมัติ/สัญญาโมฆะ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" > สัญญา ยกเลิก </font> 
							</button> 
							</a>

							<a href="history.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=NPL"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" > สัญญา NPL </font> 
							</button> 
							</a>

							<a href="history.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=หมดหนี้"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" > สัญญาหมดหนี้   </font> 
							</button>
							</a>
							
							</div>
  
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 2200px;"    >
							 <thead> 
								 <tr>
									<th width="1%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
									<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
									<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคืนเครื่อง     </font></div></th>  
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th> 

									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คลิกประวัติ ย่อ    </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คลิกประวัติ เต็ม    </font></div></th> 

									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สเตทเม้นชำระหนี้   </font></div></th>  
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

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}
									
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.contactstatus = 'อนุมัติแล้ว' 
											".$addcode.$addcode2.$addcode3."  
											order by a.pk asc limit {$start} , {$perpage}   ";   
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
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 
										
										 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;  margin-top: -5px;     " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 
										</font></div></td>
										 
										
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult2["status"] == "ปกติ" ){ ?>
										
										<?php if($objResult2["onoff"] == "ปกติ"){ ?>
										<font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > ปกติ </font> 
										<?php }else if($objResult2["onoff"] == "NPL"){ ?>
										<font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > NPL </font> 
										<?php } ?>
										  

										<?php }else if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){  ?>
										 <font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > อนุมัติ/สัญญาโมฆะ </font> 
										 
										<?php }else if($objResult2["status"] == "ส่งคำขอยกเลิกเอกสาร"){  ?>
										 <font size="2px" class="serif2" color="#FF8C00" style=" font-size: 13px; " > ส่งคำขอยกเลิกเอกสาร </font>  
										
										<?php } ?> 
										</font></div></td>    	
									  
									   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										<?php echo $objResult2["typenpl1"]; ?> 
										  </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										  
										<?php  if($objResult2["closebill"] == "เป็นหนี้"){  ?>
										 <font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > เป็นหนี้ </font> 
										<?php }else  if($objResult2["closebill"] == "หมดหนี้") { ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > หมดหนี้ </font>  
										<?php } ?>
											 
										</font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history_full.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history_show.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;  margin-top: -5px;     " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
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