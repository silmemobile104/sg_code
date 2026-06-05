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
                     <font size="4px" color="#000000">  ประวัติการเปลี่ยนเครื่อง   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ประวัติการเปลี่ยนเครื่อง  </font>   
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
                     <font size="4px" color="#000000">  ประวัติการเปลี่ยนเครื่อง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                         
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
													$addcode = " and  a.customer = '".$searchname."' ";

												}else{
													$addcode = " and  a.customer = '".$searchname."' ";
												}
												$addcode2 = ""; 
												if(empty($_GET["searchname2"])){
													$addcode2 = " and major = '".$searchname2."'  ";

												}else{
													$addcode2 = " and major = '".$searchname2."'  ";
												} 
													 
											$sql2 = "SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว'    
											".$addcode.$addcode2."  
											order by a.pk asc    "; 
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												 <ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="history.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="history_cleam_backview.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="history_cleam_backview.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="history_cleam_backview.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="history_cleam_backview.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="history_cleam_backview.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="history_cleam_backview.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="history_cleam_backview.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="history_cleam_backview.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                          
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1500px;"    >
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
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการเปลี่ยน     </font></div></th> 
												    
												 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวนครั้ง   </font></div></th>  
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
 
									   
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''     and a.contactstatus = 'อนุมัติแล้ว' 
											".$addcode.$addcode2."  
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
											
											
												$chg = 0;
												$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' 
												and status like  '%เปลี่ยนเครื่อง%'  order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$chg++;
												}	 
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 
										</font></div></td>
										 
										
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult2["status"] == "ปกติ" ){ ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > ปกติ </font> 

										<?php }else if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){  ?>
										 <font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > อนุมัติ/สัญญาโมฆะ </font> 
										 
										<?php }else if($objResult2["status"] == "ส่งคำขอยกเลิกเอกสาร"){  ?>
										 <font size="2px" class="serif2" color="#FF8C00" style=" font-size: 13px; " > ปกติ </font>  
										
										<?php } ?>
											 
										</font></div></td>    	
										  
									 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; cursor: pointer;  " > 
										<font size="3px" color="Black" style=" font-size: 13px; " > 
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
											<font size="3px" color="black" style="font-size: 14px;">   
											<?php
											$ic = 1;
											$sql_v = " SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'  and status like  '%เปลี่ยนเครื่อง%'  order by pk asc  ";   
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
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >     
										<a data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;  cursor: pointer;   " > 
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										  <?php echo  number_format(0+$chg); ?>    
										</font>  
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
											<div class="col-lg-12" align="left"   >   
											<font size="3px" color="black" style="font-size: 14px;">   
											<?php
											$ic = 1;
											$sql_v = " SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'  and status like  '%เปลี่ยนเครื่อง%'  order by pk asc  ";   
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
														" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br> ";
											?>
											
											<a href="printbill_re2.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&product=<?php echo $objResult_v["create_date"]; ?>&contact=<?php echo $objResult_v["contact"]; ?>" target="_blank"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: 10px;  cursor: pointer;   "  >
											<font size="3px" color="Black" style=" font-size: 13px; " > 
											ดูข้อมูลสัญญา   
											</font>  
											</a> 
											<br>
											
											<?php
												
												echo " ------------------------------   <Br> ";
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