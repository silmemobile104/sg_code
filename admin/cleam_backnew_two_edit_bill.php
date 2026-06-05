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

	$major2 = "";
	if(empty($_GET["major2"])){
		
	}else{
		$major2 = $_GET["major2"];
	}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลรายการส่งคืนต้นทาง   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ออกบิล/แก้ไขบิลรายการส่งคืนต้นทาง  </font>   
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
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลรายการส่งคืนต้นทาง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
						  
                          
                          <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="cleam_backnew_two.php">   
					    		<div  >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  รายการส่งคืนต้นทาง   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="cleam_backnew_two_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกบิล/แก้ไขบิลรายการส่งคืนต้นทาง    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div> 
                      
                          <div class="col-lg-12">
                      		<hr>
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
								$addcode3 = "";
								$addcode4 = "";


								$addcode3 = " and major2 = '".$major2."'  ";


							$sql2 = " SELECT * FROM list_chk_cleam_back_two 
							where bill_no != ''  
							".$addcode.$addcode2.$addcode3.$addcode4."  
							Group By bill_no 
							order by pk asc    "; 

							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								<ul class="pagination">
																<?php if ($page > 1): ?>
																<li class="prev"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">Prev</a></li>
																<?php endif; ?>

																<?php if ($page > 3): ?>
																<li class="start"><a href="cleam_backnew_one_edit_bill.php?page2=1&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">1</a></li>
																<li class="dots">...</li>
																<?php endif; ?>

																<?php if ($page-2 > 0): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																<?php if ($page-1 > 0): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																<li class="currentpage"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page ?></a></li>

																<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																<?php if ($page < ceil($total_record / $perpage)-2): ?>
																<li class="dots">...</li>
																<li class="end"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																<?php endif; ?>

																<?php if ($page < ceil($total_record / $perpage)): ?>
																<li class="next"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">Next</a></li>
																<?php endif; ?>
															</ul>
							<?php endif; ?>

						</div>
                          
                         
                         
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    > 
							  <thead> 
								 <tr>
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บิลรายการเครม    </font></div></th>  
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วัน เดือน ปี  </font></div></th>       
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ  </font></div></th>       
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เงื่อนไขการส่งสินค้า  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   จำนวนส่งคืน    </font></div></th>      
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์     </font></div></th>     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> พนักงานทำรายการ   </font></div></th>  
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
										    
										$sql2 = " SELECT * FROM list_chk_cleam_back_two 
											where bill_no != ''  
											".$addcode.$addcode2.$addcode3.$addcode4."  
											Group By bill_no 
											order by pk asc     limit {$start} , {$perpage}   ";  
	  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											 	$bill_no = $objResult2["bill_no"];
 
												$name_typedata1 = "";
												$name_typedata2 = "";
												$name_typedata3 = "";
												$sql = "SELECT * FROM store where pk = '".$objResult2["major2"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_typedata1 =  $objResult["name"];
													$name_typedata2 =  $objResult["address"];
													$name_typedata3 =  $objResult["telphone"];
												}
												 
											
												$totalbill1 = 0;
												$totalbill2 = 0;
												$totalbill3 = 0;
												$sql = "SELECT * FROM list_chk_cleam_back_two where bill_no = '".$objResult2["bill_no"]."'  and bill_no != '' 
												Group By bill_no
												order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$totalbill1++;
												}
												$sql = "SELECT * FROM list_chk_cleam_back_two where bill_no = '".$objResult2["bill_no"]."'   and bill_no != '' 
												order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$totalbill2++;	
													if($objResult["status"] == "เครมสินค้า/รอสินค้า"){
													 
													}else{
													$totalbill3++;	
													} 
												}
											 
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>    </font></div></td>
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
										<a  href="print_cleam_billnew_two.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " target="_blank" >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก </font></a>
											
										</font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; ">
										<div align="left" style=" margin-left: 5px; margin-right: 5px; ">
										<font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["notecleamback"]; ?> </font>
										</div>
										</td> 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalbill2); ?> </font></div></td>  
										
										    
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
										<a href="print_cleam_billnew_two.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " target="_blank" >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  พิมพ์ </font></a>
											
										</font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; cursor: pointer; " > 
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
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