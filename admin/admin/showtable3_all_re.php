<?php 
session_start(); 
include('../database.php');
 
	 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'";
		
	}else{
		$major = " and a.major = '-'";
	} 
	$major_store = "";
	if(!empty($_GET["major_store"])){
		$major_store = $_GET["major_store"];
		$major_store = " and c.typedata_2 = '" . $_GET["major_store"] . "'";
		
	} else{
		$major_store = " ";
	}	
?> 
     				 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$data1 = 0;
										$data2 = 0;
										$data3 = 0;
										$data4 = 0;
										$data5 = 0; 
										$data6 = 0; 
										$data7 = 0; 

										
										/*
										SELECT a.*, b.name, c.typedata_2 FROM list_order a 
										Inner Join customer b On a.customer = b.pk 
										Inner Join product c On a.menu_id = c.pk 
										where a.bill_no != '' and c.computer != 'ชำระค่าคอมไปแล้ว' and a.major = '1' order by a.pk ASC
										*/
   
										/*
											$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join product c On   a.menu_id = c.pk
											 
											where a.bill_no != ''     and a.chk = '' and a.status = 'ปกติ' and c.computer != 'ชำระค่าคอมไปแล้ว'
											".$addcode.$addcode2.$major.$major_store."  
											order by a.pk desc   ";  
										*/
												  
										$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join product c On   a.menu_id = c.pk
											 
											where a.bill_no != ''   and c.computer = 'ชำระค่าคอมไปแล้ว' and a.contactstatus = 'อนุมัติแล้ว'
											".$major.$major_store."  
											
											Group By a.menu_id 
											order by a.pk desc   ";  
									  
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
											 
											   
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_create5 = "-"; 
												$name_create6 = "-"; 
												$name_major = "-"; 
												$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
													$name_create5 = $objResult["storerage"];
													
													
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
																$name_create4 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create6 =  $objResult_c["name"];
														}
												}
											
														$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_major =  $objResult_c["name"];
														}
										 
										 $data1 += $objResult2["total"];
										 $data2 += $objResult2["priceorder"];
										 $data3 += $objResult2["moneydown"];
										 $data4 += $objResult2["money"];
										 $data5 += $objResult2["computer"];
										 //  $data6 += $objResult2["computer2"]; 
											
											
										 $pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];
										 $data6 += $pricecal;	
										 $i++;  
										} 
										?>
	 
   
	  		  			 <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > จำนวนเครือง </font>   
							   <input type="text" class="form-control" id="data1" name="data1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$data1); ?>"  readonly >
							</div>
						  </div>
                    	 <div class="col-md-12"  > </div>	
                    	 <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" >  ราคาขาย (ราคาต้นทุน)   </font>   
							   <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$data2); ?>"  readonly >
							</div>
						  </div>
                    	 <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ดาวน์ </font>   
							   <input type="text" class="form-control" id="data3" name="data3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$data3); ?>"  readonly >
							</div>
						  </div>
                    	 <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ยอดเงิน </font>   
							   <input type="text" class="form-control" id="data4" name="data4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$data6); ?>"  readonly >
							</div>
						  </div>  
                    	 <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ค่าคอม </font>   
							   <input type="text" class="form-control" id="data5" name="data5"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$data5); ?>" readonly   >
							</div>
						  </div> 
						 