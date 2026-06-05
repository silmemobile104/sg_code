<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

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

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}	

	$major = "1"; 
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ข้อมูลลูกหนี้ขาดส่ง   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ข้อมูลลูกหนี้ขาดส่ง  </font>   
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
                     <font size="4px" color="#000000">  ข้อมูลลูกหนี้ขาดส่ง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                    	     
                    
                            <?php if(!empty($major)){  ?> 
                            <div   class="col-lg-12"  align="right"  >  </div> 
                          
                    	    <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif"> เงื่อนไขขาดส่ง    </font>

										<form action="check_no_payment_loan.php" method="get" >
										<input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchname2" name="searchname2" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "    >   
										<?php if(empty($searchname2)){   ?>
										<option value=""> เงื่อนไขขาดส่ง  </option> 
										<?php } ?>
										<?php 
										$sql = "SELECT * FROM drop_lostday where name = '".$searchname2."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>    
										<?php 
										$sql = "SELECT * FROM drop_lostday where name != '".$searchname2."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>    
										</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">     </td>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/เลขทีสัญญา/รหัสลูกค้า    </font>
 
										
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
									</tr>
								</table>  
							</div>
                           

							<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<font size="3px" color="#000000">  ข้อมูลลูกหนี้ขาดส่ง  ประจำวันที <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load); ?>   </font>   
							</div>
                            
                             
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
												$addcode = " and (  b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'   or a.codecustomer like '%".$searchname."%'  )  ";
											}
											$addcode2 = "";  
											$addcode2 = " and a.major = '".$major."'  ";



											$addcode3 = ""; 
											if(empty($_GET["typedata"])){

												$addcode3 = " and a.totalno_payment >= '5' and totalno_payment <= 14  ";

											}else if(($_GET["typedata"] == "จำนวนลูกหนี้ขาดส่ง")){	

												$addcode3 = " and a.totalno_payment >= '5' and totalno_payment <= '14'  ";

											}else if(($_GET["typedata"] == "คำนวนลูกหนี้ที่ถูกล๊อกเครื่อง")){

												$addcode3 = " and a.lock_data = 'ล็อกเครื่อง'  ";

											}else if(($_GET["typedata"] == "จำนวนยอดหนี้ขาดส่งเกิน")){

												$addcode3 = " and a.totalno_payment >= '90'   ";
											} 
													
												if(!empty($_GET["searchname2"])){

												 	if(($_GET["searchname2"] == "ขาดส่ง 1-5 วัน")){

														$addcode3 = " and a.totalno_payment >= '1' and totalno_payment <= '5' ";

													}else if(($_GET["searchname2"] == "ขาดส่ง 7 วันขึ้นไป")){
														
														$addcode3 = " and a.totalno_payment >= '7'  ";
														
													}
													 
												} 
													 
													 
											$sql2 = "SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว'    ".$addcode.$addcode2.$addcode3."  
											order by a.pk asc    "; 
												 
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
											 <ul class="pagination">
												<?php if ($page > 1): ?>
												<li class="prev"><a href="check_no_payment_loan.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">Prev</a></li>
												<?php endif; ?>

												<?php if ($page > 3): ?>
												<li class="start"><a href="check_no_payment_loan.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">1</a></li>
												<li class="dots">...</li>
												<?php endif; ?>

												<?php if ($page-2 > 0): ?><li class="page"><a href="check_no_payment_loan.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
												<?php if ($page-1 > 0): ?><li class="page"><a href="check_no_payment_loan.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

												<li class="currentpage"><a href="check_no_payment_loan.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page ?></a></li>

												<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_no_payment_loan.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
												<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_no_payment_loan.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

												<?php if ($page < ceil($total_record / $perpage)-2): ?>
												<li class="dots">...</li>
												<li class="end"><a href="check_no_payment_loan.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
												<?php endif; ?>

												<?php if ($page < ceil($total_record / $perpage)): ?>
												<li class="next"><a href="check_no_payment_loan.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">Next</a></li>
												<?php endif; ?>
											</ul>
											<?php endif; ?>

										</div>
                         
                          
                          
                          	<?php
							$colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 10px; ";
							$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 10px; ";
							$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 10px; ";
							$colorbtns4s = " background-color: #DC143C; border-radius: 5px;  height: 40px;  border-color: #DC143C; margin-top: 10px; ";

							$txtcolor1 = "#FFF"; 
							$txtcolor2 = "#FFF"; 
							$txtcolor3 = "#FFF"; 

							$p_total1 = 0;
							$p_total2 = 0;
							$p_total3 = 0;
							$p_total4 = 0;
							$addcode2 = "";  
							$addcode2 = " and major = '".$major."'  ";
												
							$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว'  ".$addcode.$addcode2."  
											order by a.pk asc  "; 
												/// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{ 
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"];  
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"];     

								$chk_total = 0; 
								$chk_total = $objResult2["totalno_payment"];   
								
								
								/*
																$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
																$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
																$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
																$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2." ";   
																$query_npl = mysqli_query($objCon,$sql_npl); 
																while($objResult_npl = mysqli_fetch_array($query_npl))
																{   
																	if(!empty($objResult_npl["income"])){  
																		$chk_total = 0; 
																	}else{
																		$chk_total++;
																	} 
																}

								*/
								
								
								if($chk_total >= 5 && $chk_total <= 14){
									$p_total1++; 
								}
								if($chk_total >= 15 && $chk_total <= 29){
									$p_total2++; 
								}
								if($chk_total >= 30){
									$p_total3++; 
								}
								
								if($objResult2["lock_data"] == "ล็อกเครื่อง"){
									$p_total4++;
								}
							}						 
													 
							?>
                            <div   class="col-lg-8"  align="right"  >  
							<a href="print_check_no_payment_loan.php?major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>" target="_blank"      > 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns4s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  Export Excel </font> </button>
							</a>
							
							
							
							
							<a href="check_no_payment_loan.php?major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&typedata=จำนวนลูกหนี้ขาดส่ง"    > 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  จำนวนลูกหนี้ขาดส่ง  <?php echo number_format(0+$p_total1); ?> รายการ </font> </button>
							</a>

							<a href="check_no_payment_loan.php?major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&typedata=คำนวนลูกหนี้ที่ถูกล๊อกเครื่อง"    > 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  คำนวนลูกหนี้ที่ถูกล๊อกเครื่อง  <?php echo number_format(0+$p_total4); ?> รายการ </font> </button>
							</a>

							<a href="check_no_payment_loan.php?major=<?php echo $major; ?>&searchname=<?php echo $searchname; ?>&typedata=จำนวนยอดหนี้ขาดส่งเกิน"    > 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor3; ?>" size="3px" class="serif1" style=" font-size: 14px; "  > จำนวนยอดหนี้ขาดส่งเกิน 3 เดือน  <?php echo number_format(0+$p_total3); ?> รายการ </font> </button> 
							</a>
							  
							</div> 
                         
                         
                         
                          
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1950px;"    >
							    <thead> 
								  <tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา    </font></div></th>    
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>        
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่างวดที่ต้องชำระ     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับรวม     </font></div></th>   
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ระยะเวลาขาดส่ง     </font></div></th>   
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะเครื่อง     </font></div></th> 
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>  

									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ     </font></div></th> 
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการชำระหนี้     </font></div></th> 
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติ   </font></div></th>  
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
										$pricetotal = 0; 
										$pricetotal2 = 0; 
  
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{ 
											$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
										}
													 
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''   and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว'   ".$addcode.$addcode2.$addcode3."  
											order by a.pk asc limit {$start} , {$perpage}   "; 
													  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
										$pricetotal = 0; 
										$pricetotal2 = 0; 
											
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											 
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"];  
												$totalprice4 = $objResult2["startdate"]; 
												$totalprice5 = $objResult2["endate"];    
											
												$priceorder = $objResult2["priceorder"];  
												$typenpl1 = $objResult2["typenpl1"];  
												$typenpl2 = $objResult2["typenpl2"];  
												$discount = $objResult2["discount"];  
												$note = $objResult2["note"];  
												$moneydown = $objResult2["moneydown"];   
												$notestaff = $objResult2["notestaff"];   
												$notestaff = $objResult2["lock_data3"];   
											
											
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
													$name_create2  =  $objResult["name"];
													$name_create3  =  $objResult["codeno"];
												}
											
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$name_major =  $objResult_c["name"];
												}
											
											 
											$chk_total = 0;
											$priceback = 0;
											$date_payment = "";
											
											$countloopnopay = 0;
											$chk_total = 0;
											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
											$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
											$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2." order by pk asc  "; 
											 /// echo $sql_npl . " <br> ";
											$query_npl = mysqli_query($objCon,$sql_npl); 
											while($objResult_npl = mysqli_fetch_array($query_npl))
											{   
												if(!empty($objResult_npl["income"])){ 
													$priceback += $objResult_npl["income"];
													
													
													$date_payment = $objResult_npl["create_date2"];
													 
													$countloopnopay = 0;
													$chk_total = 0;
												}else{
													$countloopnopay++;
												} 
												
												
												
												if($countloopnopay >= 5){ 
													if(!empty($objResult_npl["income"])){  
															$chk_total = 0; 
													}else{
															$chk_total++;
													} 
												}	 
											}	 	
											
											
											$pricetotal = ($totalprice3*$totalprice2) - $priceback - $moneydown;
											$pricetotal2 = $priceorder - $priceback - $moneydown;
											$pricetotal3 = $pricetotal2 + ($chk_total*50);
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?> </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										  
									 	<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
									 	
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice3); ?> </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$chk_total*50); ?> </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
  
											if($chk_total > 0){

												$dates = $chk_total;
												$years = floor($dates/365);
												$months = floor(($dates-($years*365))/30);
												$dates2 = $dates-(($years*365)+($months*30));

												if(!empty($years)){
													echo $years." ปี ";	
												}if(!empty($months)){
													echo $months." เดือน";
												}if(!empty($dates2)){
													echo $dates2." วัน";
												} 
											}
										?> 
										</font></div></td> 
										  
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      
									    
										<?php if($objResult2["lock_data"] == ""){ ?>
										
										 <select class="form-control " style="background-color: #006400; color: white; font-size: 12px;  margin-top: -5px;  " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										 
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											
											<option value="ล็อกเครื่อง//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ล็อกเครื่อง </font></option> 
											  
										</select>  

									
										<?php }else if($objResult2["lock_data"] == "ปกติ"){ ?>
										
										 <select class="form-control " style="background-color: #006400; color: white; font-size: 12px;  margin-top: -5px;  " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										 
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											
											<option value="ล็อกเครื่อง//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ล็อกเครื่อง </font></option> 
											  
										</select>  
										
										<?php }else if($objResult2["lock_data"] == "ล็อกเครื่อง"){ ?>
									  
										 <select class="form-control " style="background-color: #FF0000; color: white; font-size: 12px;  margin-top: -5px;  " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										 
											<option value="ล็อกเครื่อง//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ล็อกเครื่อง </font></option> 
											
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											  
										</select>  
										   
										    
										<?php } ?>
											
										<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										
										<script>
										function  showUser<?php echo $objResult2["pk"]; ?>(str) {

											//// alert(str);
											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
											
											if(check_status == "ปกติ"){ 
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
												 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

												check_status_save = "ปกติ";
												  
												
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_check_no_payment_loan.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);
												}
												});
											
											 
											}else if(check_status == "ล็อกเครื่อง"){ 
											///	alert( check_status );
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
												 
											///	alert( save_key );
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF0000";

												check_status_save = "ล็อกเครื่อง";
												 		
												
											///	alert("save_check_no_payment_loan.php?status="+check_status_save+"&bill_no="+save_key);
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_check_no_payment_loan.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);
												}
												});
											
											 
											} 
 
										} 
										</script>	
											
										</font></div></td> 
										
										
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      
									    
										<?php if($objResult2["onoff_copy"] == "ปกติ"){ ?>
										
										 <select class="form-control " style="background-color: #006400; color: white; font-size: 12px;  margin-top: -5px;  " id="status_paymentnpl<?php echo $objResult2["pk"]; ?>" name="status_paymentnpl<?php echo $objResult2["pk"]; ?>" onChange="showUsernpl<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										 
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											
											
											<option value="NPL//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> NPL </font></option> 
											  
										</select>  

									
										<?php }else if($objResult2["onoff_copy"] == "NPL"){ ?>
										
										 <select class="form-control " style="background-color: #FFA500; color: white; font-size: 12px;  margin-top: -5px;  " id="status_paymentnpl<?php echo $objResult2["pk"]; ?>" name="status_paymentnpl<?php echo $objResult2["pk"]; ?>" onChange="showUsernpl<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										 
											<option value="NPL//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> NPL </font></option> 
											
											
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											  
										</select>  
										
										<?php } ?>
										
										
										<script>
										function  showUsernpl<?php echo $objResult2["pk"]; ?>(str) {

											//// alert(str);
											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
											
											if(check_status == "ปกติ"){ 
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
												 
												document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

												check_status_save = "ปกติ";
												  
												
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_check_no_payment_loanNPL.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);
												}
												});
											
											 
											}else if(check_status == "NPL" ){ 
											///	alert( check_status );
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
												 
											///	alert( save_key );
												document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FFA500";

												check_status_save = "NPL";
												 		
												
											///	alert("save_check_no_payment_loan.php?status="+check_status_save+"&bill_no="+save_key);
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_check_no_payment_loanNPL.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);
												}
												});
											
											 
											} 
 
										} 
										</script>	
										
										</font></div></td> 
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodalnote<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										หมายเหตุ   
										</font>  
										</a> 
										
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodalnote<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> หมายเหตุ </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left"   >   
											<font size="3px" color="black" style="font-size: 14px;">   
											 <div class="col-lg-12" align="left">  
												 
												 
											   <div class="col-md-12"  >	 
												   <font color = '#000' size="3px" > หมายเหตุ </font>   
												  <textarea type="text" class="form-control" id="1data<?php echo $i;?>" name="1data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo $notestaff; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9;  background-color: #FFF; width: 100%;    " rows="10"       ><?php echo $notestaff; ?></textarea> 
											   </div> 
												 		
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	 
												 	
												 	 <a onClick="Canceldata<?php echo $i; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > บันทึก    </font> </button>  </a>

							 					 
							 					     <a onClick="CanceldataNo<?php echo $i; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ปิด  </font> </button> </a>
												 	 
												 </div>
												 
												 
											</font> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										<input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										
										<script>
											
										function 
										Canceldata<?php echo $i; ?>( ) { 
										  
											var typedata = document.getElementById("savebill_no<?php echo $i; ?>").value;  
											var notestaff = document.getElementById("1data<?php echo $i; ?>").value;  
 
											$.ajax({
												type: "GET",
												url: "save_botestaff.php?bill_no="+typedata+"&notestaff="+notestaff,
												success: function(result) {
												 
													alert(" SAVE Success ");
													
												}
											});			
											
											 
											
										}	
										function 
										CanceldataNo<?php echo $i; ?>( ) { 
										    
											$(document).ready(function(){ 
											$('#smallmodalnote<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}	
										
											
										</script>
										
										</font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history_full.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
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
											$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' 
											 and ( create_date = 'สถานะเครื่อง' or create_date = 'สถานะสัญญา' )
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
														" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>  เวลา ".$objResult_v["create_time"]."  <Br>
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