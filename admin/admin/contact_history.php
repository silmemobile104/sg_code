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
                     <font size="4px" color="#000000">  บันทึกทำสัญญาผ่อนมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > ออกสัญญา  </font>   
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
                     <font size="4px" color="#000000">  เช็คประวัติลูกค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#F77369"   >    
					    		<a href="contact_history.php">   
					    		<div  >   
					    		<img src="images/search2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เช็คประวัติลูกค้า   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >  
					    		<a href="contact.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกสัญญา    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="contact.php?page=edit">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แก้ไขสัญญา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                          <div class="col-lg-12">
							<hr>
						  </div>
                       
                        
                    	     <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาเลขบัตรประชาชน    </font>

										<form action="contact_history.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
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
										<font color="black" size="3px" class="serif">  ค้นหาลูกค้า   </font>

										<form action="contact_history.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"       autocomplete="off"  >
										  
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
													$addcode = " and  b.passport like '------------' ";

												}else{
													$addcode = " and  b.passport like '%".$searchname."%' ";
												}
												$addcode2 = ""; 
												if(empty($_GET["searchname2"])){

												}else{
													$addcode = "";
													$addcode2 = " and  b.name like '%".$searchname2."%'  ";
												} 
													 
											$sql2 = "SELECT a.*, b.name, b.passport FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''   
											".$addcode.$addcode2."  
											order by a.pk asc    "; 
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												 <ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="contact_history.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="contact_history.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="contact_history.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="contact_history.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="contact_history.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_history.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_history.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="contact_history.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="contact_history.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                          
                     
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1800px;"    >
							    <thead> 
								  <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
												<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท     </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>   
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>  
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>   
												 
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>  
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
 
									   
										$sql2 = " SELECT a.*, b.name, b.passport FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''   
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
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" >
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 	
										</font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create; ?>    </font></div></td>
										
											
											
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult2["status"] == "ปกติ" ){ ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > ปกติ </font> 

										<?php }else if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){  ?>
										 <font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > ปกติอนุมัติ/สัญญาโมฆะ </font> 
										 
										<?php }else if($objResult2["status"] == "ส่งคำขอยกเลิกเอกสาร"){  ?>
										 <font size="2px" class="serif2" color="#FF8C00" style=" font-size: 13px; " > ส่งคำขอยกเลิกเอกสาร </font>  
										
										<?php } ?>
											 
										</font></div></td>  	
											
											
											
											
											
											
											
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>    </font></div></td>
										  

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