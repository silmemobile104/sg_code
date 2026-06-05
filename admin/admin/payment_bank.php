<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	
		 
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
	$moneycontact = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$getpayment = "";


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

	$major = "1"; 
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}


	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เมนูฝากเงิน/ประวัติฝากเงิน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เมนูฝากเงิน/ประวัติฝากเงิน > เมนูฝากเงิน  </font>   
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
                     <font size="4px" color="#000000">  เมนูฝากเงิน   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                       
                          <div class=" col-lg-8 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="payment_bank.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เมนูฝากเงิน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="payment_bank_edit.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ประวัติฝากเงิน   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="payment_bank2.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  รายชื่อลูกค้าที (มีเงินเหลือฝากในระบบ)   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
							<hr>
						  </div>
                        
						  <script>
							function validateForm() {  
								 var x1 = document.getElementById("customerid").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือกข้อมูลลูกค้า ");
									return false;
								 }
								 var x1 = document.getElementById("productid").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือกรายการสินค้า ");
									return false;
								 }
 		
								}
							</script>
                     	  
                       
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
								yearRange: "-5:+5",
									  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
									  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
									  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
									});
							}); 
							</script>
                     	   
				  		  <script>  
						  	function myFunction1() 
							{
							  var customer = document.getElementById("customer").value; 
							  var major = document.getElementById("major").value; 
							  var getX = customer.split("///");
								
							  if(getX[0] == ""){
									
								document.getElementById("showtable").style.display = 'none';
								}else{
									
								document.getElementById("showtable").style.display = 'block';
									
									
									$.ajax({
									type: "GET",
									url: "loadtablecustomer.php?customer="+getX[0]+"&major="+major,
									success: function(result) {
									$('#showtable').html(result);
									}
									});	 
									
									
								}    
							 }
							   
 
							function LoadDropdown()
							{   
								   
								var major = document.getElementById("major").value;   
								
								if(major == ""){
									
								document.getElementById("showdatakey").style.display = 'none';
								}else{
									
								document.getElementById("showdatakey").style.display = 'block';
								}    
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_major5.php?major="+major,
									success: function(result) {
									$('#producttype').html(result);
									}
								});	  											
							}  
						  </script>
                      	     
                          <div class="col-lg-4"  align="left"  > 
							<table width="100%">
							<tr>  
								<td width="100%"> 
								<font color="black" size="3px" class="serif">  สาขา   </font>
  
								 <form action="payment_bank.php" method="get" >
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; " > 
									  <select class="form-control" id="major" name="major"   
									   style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
									   <?php if(empty($major)){ ?>
										<option value="">  สาขา    </option> 
									   <?php } ?>

										<?php 
										$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>    
									   </select> 
									  <span class="input-group-append">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
											<img src="images/search.png" style="width: 15px; "> 
									  </button>
									</span>
									</div>
								</form> 

								</td>     
							</tr>
							</table>  
							</div>
							 
							 
						  <?php if(!empty($major)   && empty($_GET["customer"])){ 
						 
							$totalprice = 0;
							$totalprice2 = 0;
							$checkcustomer = "";
											
							 	
							?> 
                    	    
                    	   <div class="col-lg-12">  &nbsp;  </div>
                    	    
                     	     <div   class="col-lg-4"  align="left"  > 
							 <table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ค้นหารายชื่อ / รหัสลูกค้า   </font>

									<form action="payment_bank.php" method="get" >
									<input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >

									<span class="input-group-append">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
											<img src="images/search.png" style="width: 15px; "> 
									  </button>
									</span>
									</div>
									</form> 

									</td>   
								</tr>
							 </table>  
							 </div>
                    
                    	   <div class="col-lg-12">  &nbsp;  </div>
                     	   
                      	    <div class="col-lg-8" align="left" style="display: none; "> 
							<a href="payment_bank.php?major=<?php echo $_GET["major"]; ?>&select=totalprice"> 
							<div style=" background-color: #006400; height: 34px;  " class=" btn btn-sm" >    
							&nbsp;
							<font size="3px" color="#FFF" style="font-size: 14px; ">  จำนวนยอดรายชื่อคนฝาก ( <?php echo number_format(0+$totalprice2); ?> ) คน </font>  
							&nbsp;
							</div>
							</a>
							 
							<a href="payment_bank.php?major=<?php echo $_GET["major"]; ?>&select=totalprice"> 
							<div style=" background-color: #FF0000; height: 34px;  " class=" btn btn-sm" >    
							&nbsp;
							<font size="3px" color="#FFF" style="font-size: 14px; ">  ยอดรวม ( <?php echo number_format(0+$totalprice); ?> ) บาท </font>  
							&nbsp;
							</div>
							</a> 
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
									$total_record = 0;
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
										$addcode = "  ";
									}else{
										$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like    '%".$searchname."%' )  ";
									} 
											
									if(empty($_GET["select"])){ 
									/*
									
									$sql2 = " SELECT * FROM customer 
									where name != ''  
									".$addcode.$addcode2."  
									order by pk asc    ";
									
									*/
										
									$sql2 = "  SELECT a.*, b.name, b.telphone  FROM list_order  a
											Inner Join customer b On   a.customer = b.pk 
											where a.bill_no != ''     
											and a.major = '".$major."'     
											".$addcode." 
											Group By a.customer
											order by a.pk asc   ";    
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											$total_record++;
										} 
									$total_page = ceil($total_record / $perpage);
									?>  
									<?php if (ceil($total_record / $perpage) > 0): ?>
										<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="payment_bank.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="payment_bank.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="payment_bank.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="payment_bank.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="payment_bank.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="payment_bank.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="payment_bank.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="payment_bank.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="payment_bank.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
									<?php endif; 
								
								
									}else{
										 
									} 
								
								?>

							 </div>
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
								<tr>
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลำดับ    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อ-นามสกุล  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เบอร์โทรติดต่อ     </font></div></th>     
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงินฝากสะสม     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทำรายการฝากเงิน   </font></div></th>  
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
										    
												
								    if(empty($_GET["select"])){ 
										
										$sql2 = " SELECT a.*, b.name, b.telphone  FROM list_order  a
											Inner Join customer b On   a.customer = b.pk 
											where a.bill_no != ''     
											and a.major = '".$major."'   
											".$addcode." 
											Group By a.customer
											order by a.pk asc    limit {$start} , {$perpage} ";   
										
										
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											if($bg == "#FFF"){ 
												$bg = "#F8FAFD"; 
											}else{  
												$bg = "#FFF"; 
											}
											
											$totalprice = 0;
											$sql_money = " SELECT a.*, b.name, b.telphone  FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where  a.bill_no != '' and a.major = '".$major."'   and a.customer = '".$objResult2["customer"]."' 
											Group By a.customer
											order by a.pk asc   ";    
											$query_money = mysqli_query($con,$sql_money); 
											while($objResult_money = mysqli_fetch_array($query_money))
											{
												  
											$moneybank = 0;
											$bankdate = "OFF"; 
											$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult2["customer"]."'  
											and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )
											order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$moneybank +=  $objResult_c["money"];   
											}	
											   
											$totalprice4 = $objResult_money["startdate"]; 
											$discountbank = 0;  

											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
											$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
											$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult2["customer"]."'      ".$code_check2." ";   
											$query_p = mysqli_query($objCon,$sql_p); 
											while($objResult_p = mysqli_fetch_array($query_p))
											{   
												if(!empty($objResult_p["income"])){  
													if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
														$discountbank += $objResult_p["bank"];  
													}
													if($objResult_c["typesave"] == "ชำระ2ทาง"){
														$discountbank += $objResult_p["bank"];  
													}
												}   
											}	 			 
 
											///  echo $moneybank." <br> ";
											// echo $discountbank." <br> ";
											$totalprice += $moneybank - $discountbank ;
												 
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["telphone"]; ?>   </font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice); ?>   </font></div></td> 
										  
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											 
											<a href="payment_bank.php?customer=<?php echo $objResult2["customer"];?>&major=<?php echo $_GET["major"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ฝากเงิน </font></a>
											 
										</font></div></td> 
										  

										</tr>  
										<?php $i++;  } ?>
										<?php } else {  
										
										
										$sql2 = " SELECT a.*, b.name, b.telphone  FROM list_order  a
											Inner Join customer b On   a.customer = b.pk 
											where a.bill_no != ''     
											and a.major = '".$major."'    
											".$addcode." 
											Group By a.customer
											order by a.pk asc    limit {$start} , {$perpage} ";  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											 
											$totalprice = 0;
											$moneybank = 0;
											$bankdate = "OFF"; 
											$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult2["customer"]."'   
											and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  ) order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$moneybank +=  $objResult_c["money"];  
											 
											}	
											  

											$totalprice4 = $objResult2["startdate"]; 
											$discountbank = 0;  

											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
											$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
											$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult2["customer"]."'  ".$code_check2." "; 
											/// echo $sql2;
											$query_p = mysqli_query($objCon,$sql_p); 
											while($objResult_p = mysqli_fetch_array($query_p))
											{   
												if(!empty($objResult_p["income"])){  
													if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
														$discountbank += $objResult_p["bank"];  
													}
													if($objResult_c["typesave"] == "ชำระ2ทาง"){
														$discountbank += $objResult_p["bank"];  
													}
												}   
											}	 			 


											$totalprice = $moneybank - $discountbank;

											if($totalprice > 0){  
								 		?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["telphone"]; ?>   </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice); ?>   </font></div></td> 
										  
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											 
											<a href="payment_bank.php?customer=<?php echo $objResult2["customer"];?>&major=<?php echo $_GET["major"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ฝากเงิน </font></a>
											 
										</font></div></td> 
										  

										</tr>   
										<?php $i++; } } } ?>
									</tbody>
  
										 
							</table>  
							</div>
						     </div>
							 
						  <?php } ?>
						  
                  	   
						  <?php if(!empty($_GET["customer"])){  ?> 
                          <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						  <div class="table-responsive"  >
						  <table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1670px;"    >
						   
						  <tbody> 
						  <?php 
							$bg = "#F8FAFD"; 
							$i = 1;
							$total = 0;
							$totalprice1 = 0;
							$totalprice2 = 0;
							$totalprice3 = 0;
							$totalprice4 = 0; 
							$moneybankall = 0; 
  
							$sql2 = " SELECT a.*, b.name, b.telphone  FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''  
							and a.customer = '".$customer."'   
							and a.major = '".$major."'   
							order by a.pk asc   ";   
								 
								/// echo $sql2;
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



									$moneybank = 0;
									$bankdate = "";
									$bankdatetime = "";
									$sql_c = "SELECT * FROM money_customer_bank where bill_no = '".$objResult2["bill_no"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										if($objResult_c["typegetpayment"] == "รับเงินสด"){
											$moneybank +=  $objResult_c["money"];
										} 
										 
										$bankdate =  $objResult_c["create_date"];
										$bankdatetime =  $objResult_c["create_time"];
									}	




								$discountbank = 0;
								$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."'  order by pk asc  "; 
								$query_c = mysqli_query($objCon,$sql_c);
								while($objResult_c = mysqli_fetch_array($query_c))
								{ 
									if($objResult_c["typesave"] == "ชำระหักเงินฝาก"){
										$discountbank += $objResult_c["bank"];  
									}
									if($objResult_c["typesave"] == "ชำระ2ทาง"){
										$discountbank += $objResult_c["bank"];  
									}
								}	
								
								
								
								$moneybank = 0;
								$bankdate = ""; 
								$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult2["customer"]."'  
								and bill_no = '".$objResult2["bill_no"]."'
								and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )
								order by pk asc  "; 
								$query_c = mysqli_query($objCon,$sql_c);
								while($objResult_c = mysqli_fetch_array($query_c))
								{ 
									$moneybank +=  $objResult_c["money"];   
									$bankdate =  $objResult_c["create_date"];   
								}	

								$totalprice4 = $objResult2["startdate"]; 
								$discountbank = 0;  

								$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
								$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
								$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql_p = " SELECT * FROM history_payment 
								Where  customer = '". $objResult2["customer"]."'      
								and bill_no = '".$objResult2["bill_no"]."'
								".$code_check2."  order by pk asc ";   
								$query_p = mysqli_query($objCon,$sql_p); 
								while($objResult_p = mysqli_fetch_array($query_p))
								{   
									if(!empty($objResult_p["income"])){  
										if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
											$discountbank += $objResult_p["bank"];  
										}
										if($objResult_p["typesave"] == "ชำระ2ทาง"){
											$discountbank += $objResult_p["bank"];  
										}
									}   
								}	 			 
 
								
								$totalprice = 0;
								$totalprice += $moneybank - $discountbank ;

							?>
							<tr style="background-color: <?php echo $bg ?>; "> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["telphone"]; ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo number_format(0+$objResult2["daytotal"]); ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo number_format(0+$objResult2["dayprice"]); ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo number_format(0+$totalprice); ?>     </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<a href="payment_bank.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&customer=<?php echo $objResult2["customer"]; ?>&major=<?php echo $objResult2["major"]; ?>&page=2"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " > 
							คลิก   
							</font>  
							</a> 
							</font></div></td>

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<a href="payment_bank_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&customer=<?php echo $objResult2["customer"]; ?>&major=<?php echo $objResult2["major"]; ?>&page=2"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " > 
							คลิก   
							</font>  
							</a> 
							</font></div></td>


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php 

								if(!empty($bankdate)){ 
								echo DateThai($bankdate)." ".DateThai2($bankdate); 	
								} 

							?>   
							</font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php 

								if(!empty($bankdatetime)){ 
								echo $bankdatetime; 	
								} 

							?>   
							</font></div></td> 
 

							</tr>  
							<?php $i++; $moneybankall+= ($moneybank - $discountbank); } ?>

							</tbody>
							
							 <thead> 
							<tr>
							<th width="1%" colspan="9" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-bottom: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo number_format(0+$moneybankall); ?>  </font></div></th>  
							</tr>
							 <tr>
							<th width="1%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ข้อมูลลูกค้า     </font></div></th> 
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เบอร์โทร   </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่เริ่ม     </font></div></th>   
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>   
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวนงวด     </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  งวดละ     </font></div></th>    
							<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินฝากคงเหลือ     </font></div></th> 
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทำรายการฝาก     </font></div></th> 
							<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการหักยอดเงินฝาก     </font></div></th>
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ฝากครั้งล่าสุด     </font></div></th>  
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>  
						 	</tr>
							</thead>	
									
									  
							</table>  
						  </div>
						  </div>
                 	  	  <?php } ?>
                  	  
                  	   
                   	  <?php } ?>
                   		    
                      <?php if(isset($_GET["page"])){  if(($_GET["page"] == "2")){ 
					 
							$bill_no = $_GET["bill_no"];
							$customer = $_GET["customer"];
							$major = $_GET["major"];
	
							?>
                   	  
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
									yearRange: "-5:+5",
										  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
										  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
										  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
										});
								}); 
								</script>
                      
                          	<div class=" col-lg-4 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="payment_bank.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เมนูฝากเงิน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="payment_bank_edit.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ประวัติฝากเงิน   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
							<div class="col-lg-12">
							<hr>
							</div>
                       
                      	    <form role="form" name="frmMain" method="post" action="save_payment_bank.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
							  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $_GET["bill_no"]; ?>" >
							  <input type="hidden" id="customer" name="customer" value="<?php echo $_GET["customer"]; ?>" >
							  <input type="hidden" id="major" name="major" value="<?php echo $_GET["major"]; ?>" >


							  <div class="col-lg-6" >   
							  <div class="col-md-12"  >	
								<div class="form-group">
								<font color = '#000' size="3px" > สาขา </font>   
								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
								<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
								<?php 
									$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>    
								</select>
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
								</div> 
								</div>
								</div>

							  <div class="col-md-12"  >	 
								<div class="form-group">
								   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font> 
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="customer" name="customer" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php 
										$sql = "SELECT * FROM customer where pk = '".$customer."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
									?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
										}
									?>    
									</select>
									<span class="input-group-append">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div> 

							  <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันทีบันทึก </font>   
								  <input type="text" class="form-control  current " id="datesave" name="datesave"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('d/m')."/".(date('Y')); ?>" readonly  >
								</div>
							  </div> 

							  <div class="col-md-12"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ระบุยอดรับเงินฝาก </font>  
								  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $telphone; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 

							  <div class="col-md-12"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > เงือนไขการรับเงิน  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="getpayment" name="getpayment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php 
										$sql = "SELECT * FROM drop_paymentbank where name = '".$getpayment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
									?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
										}
									?>    
									<?php 
										$sql = "SELECT * FROM drop_paymentbank where name != '".$getpayment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
									?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
										}
									?>  
									</select>
									<span class="input-group-append">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div> 
							  
							  
							  <div class="col-md-12"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($bank)){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									</select>
									<span class="input-group-append">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
							  </div> 

							  <div class="col-md-5">
								 <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
										<link rel="stylesheet" href="upload_image/css/style.css">  
										<script src="upload_image/js/app.js"></script> 

										<ul id="media-list" class="clearfix">
												<li class="myupload"> 
													<span><i class="fa fa-plus" aria-hidden="true"></i>
													<input type="file"  click-type="type2"   class="picupload"  name="picupload[]" id="picupload"  multiple="multiple"     ></span>
												</li>


												<li class="myupload" style="display: none; "> 
													<img src='images/upload.png' /><div  class='post-thumb'><div class='inner-post-thumb'>

												</li> 

											</ul>  
							  </div>


							  <div class="col-lg-12 ">   </div> 

							  <div class="col-lg-12" align="left"   > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

									  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


									  <a href="payment_bank.php">

									  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

									  </a>


										  <!-- modal small -->
										<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาาร </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="center">

												<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


												<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 

								  </div> 
							  </div>  
							  </div>  


							  <div class="col-lg-12">
								<hr>
							  </div> 
							  </form> 
                  	    
                   	 		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							    
										 

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
										    
 
									$moneybankall = 0;
									$sql2 = "SELECT * FROM money_customer_bank  
										where money != '' and bill_no = '".$bill_no."' 
										and ( typegetpayment = 'โอนผ่านบัญชีบริษัท' or typegetpayment = 'รับเงินสด' )
										order by pk asc   ";  

									$query2 = mysqli_query($con,$sql2); 
									while($objResult2 = mysqli_fetch_array($query2))
									{      
											if($bg == "#FFF"){ 
												$bg = "#F8FAFD"; 
											}else{  
												$bg = "#FFF"; 
											} 

										$name_pro = " - ";
										$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c);
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$name_pro = $objResult_c["name"]; 
										}



										$discountbank = "ON";
										$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' 
										and datestart = '".$objResult2["create_date"]."' order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c);
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											if($objResult_c["typesave"] == "ชำระหักเงินฝาก"){
												$discountbank = "OFF";
											}
											if($objResult_c["typesave"] == "ชำระ2ทาง"){
												$discountbank = "OFF";
											}
										}	 

									?>
									<tr style="background-color: <?php echo $bg ?>; "> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>   </font></div></td> 


									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>   </font></div></td> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>   </font></div></td> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["typegetpayment"]; ?>   </font></div></td> 


									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >

									<a data-toggle="modal" data-target="#Loadimg<?php echo $i; ?>" style="cursor: pointer; "  >    คลิก  </a>

									   <!-- modal small -->
									<div class="modal fade" id="Loadimg<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
											  <div class="row">      
											  <div class="col-md-12"> 

											   <?php 
												$imgload = "";
												$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$objResult2["pk"]."' and typedata = '1'   order by pk asc  ";  
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 

													$imgload = "";
													$sql_c2 = "SELECT * FROM imagecontact where bill_no = '".$objResult_c["bill_no"]."'    order by pk asc  "; 
													$query_c2 = mysqli_query($objCon,$sql_c2);
													while($objResult_c2 = mysqli_fetch_array($query_c2))
													{  
													$imgload =  $objResult_c2["img"];

													if( !empty($imgload) ){
												?>
												  <div class="col-md-4" align="left"> 
												  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
													<img src="../img/<?php echo $imgload; ?>" style="width: 100%; height: 80px; " >
												  </a>
												  </div> 
												<?php		
														}
													}
												}  
												?>


											   <?php 
												$imgload = "";
												$sql_c = "SELECT * FROM product_img where bill_no = '".$objResult2["bill_no_ref"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$imgload =  $objResult_c["img"];
													if( !empty($imgload) ){
												?>
											  <div class="col-md-4" align="left"> 
											  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
												<img src="../img/<?php echo $imgload; ?>" style="width: 100%; height: 80px; " >
											  </a>
											  </div> 
												<?php		
													}
												}  
												?>
											  </div>   
											 </div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 	

									</font></div></td> 


									 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >

									<a data-toggle="modal" data-target="#Loadimghitory<?php echo $i; ?>" style="cursor: pointer; "  >    คลิก  </a>

									   <!-- modal small -->
									<div class="modal fade" id="Loadimghitory<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-sm" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
											  <div class="row">      
											  <div class="col-md-12" align="left"> 

											   <?php 
												$imgload = "";
												$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no_ref"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 

													$name_pro = " - ";
													$sql_c2 = "SELECT * FROM member_all where   pk = '".$objResult_c["create_by"]."' order by pk asc  "; 
													$query_c2 = mysqli_query($objCon,$sql_c2);
													while($objResult_c2 = mysqli_fetch_array($query_c2))
													{ 
														$name_pro = $objResult_c2["name"]; 
													}

													echo $name_pro. " ". $objResult_c["status"] . " <br> ";
													echo  " ". DateThai($objResult_c["create_date2"])." ".DateThai2($objResult_c["create_date2"]). " <br> ";
													echo  " -------------------------------- <br> ";
												}  
												?>
											  </div>   
											 </div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 	

									</font></div></td> 



									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_pro; ?>   </font></div></td> 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 


									<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									<font size="3px" color="Black" style=" font-size: 13px; " > 

									<?php if($discountbank == "ON"){ ?>
									<a href="payment_bank.php?CusID=<?php echo $objResult2["pk"];?>&bill_no=<?php echo $_GET["bill_no"];?>&customer=<?php echo $_GET["customer"];?>&major=<?php echo $_GET["major"];?>&page=3"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>
									<?php }else{  ?>

									<font color="#FF0000" > หมดเวลาแก้ไข </font>

									<?php } ?>
									</font></div></td> 



									<td style=" border-left: 0px solid #F2F2F2; "><div align="center">  
									<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="print_bank.php?bill_no=<?php echo $objResult2["bill_no_ref"];?>&round=<?php echo $i;?>&major=<?php echo $major;?>" target="_blank"  > 
									<font size="3px" color="#FFF" style=" font-size: 13px; " > ออกบิล </font>
									</a>
									</div></td> 


									</tr>  
									<?php $i++; $moneybankall+= $objResult2["money"]; } ?>
								</tbody> 
								<thead> 
								<tr>
								<th width="1%" colspan="4" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-bottom: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo number_format(0+$moneybankall); ?>  </font></div></th>  
								</tr> 
								 <tr>
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่สัญญา    </font></div></th>    
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วัน เดือน ปี  </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา     </font></div></th> 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ครั้งทีฝาก   </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดรับเงิน   </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงือนไขรับเงิน   </font></div></th> 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หลักฐาน   </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการแก้ไข   </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำรายการ   </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลาล่าสุด   </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ออกบิล   </font></div></th>  
								 </tr>
							  </thead>
								</table>  
							</div>
						  </div>
                   	   
                   	  <?php } }  ?>
                         
                          
                      <?php if(isset($_GET["page"])){  if(($_GET["page"] == "3")){ 
					 
							$bill_no = $_GET["bill_no"];
							$customer = $_GET["customer"];
							$major = $_GET["major"];
	 
							$sql = "SELECT * FROM money_customer_bank Where  pk = '". $_GET["CusID"] ."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$datesave = $objResult["datesave"]; 
								$money = $objResult["money"];   
								$typegetpayment = $objResult["typegetpayment"];   
								$bill_no_ref = $objResult["bill_no_ref"];   
								$bank = $objResult["bank"];   
							}  
 
							?>
                          
							<link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

							<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
							<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

							 
                          
                          	<div class=" col-lg-4 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="payment_bank.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เมนูฝากเงิน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="payment_bank_edit.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ประวัติฝากเงิน   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                          
							<div class="col-lg-12">
							<hr>
							</div>
                       
                      	    <form role="form" name="frmMain" method="post" action="save_payment_bank_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  <input type="hidden" id="bill_no_ref" name="bill_no_ref" value="<?php echo $bill_no_ref; ?>" >
                      	  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $_GET["bill_no"]; ?>" >
                      	  <input type="hidden" id="customer" name="customer" value="<?php echo $_GET["customer"]; ?>" >
                      	  <input type="hidden" id="major" name="major" value="<?php echo $_GET["major"]; ?>" >
                      	  <input type="hidden" id="idupdate" name="idupdate" value="<?php echo $_GET["CusID"]; ?>" >
                      	  
                      	  
                          <div class="col-lg-6" >   
						  <div class="col-md-12"  >	
							<div class="form-group">
							<font color = '#000' size="3px" > สาขา </font>   
							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
							<?php 
								$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
							?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
							<?php  
								}
							?>    
							</select>
							<span class="input-group-append">
							<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
								<img src="images/down.png" style="width: 15px;">		 
							</button>
							</span>
							</div> 
							</div>
							</div>
                    	  
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font> 
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
								<select class="form-control" id="customer" name="customer" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
								<?php 
									$sql = "SELECT * FROM customer where pk = '".$customer."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>    
								</select>
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
							    </div> 
							</div>
						  </div> 
							
                     	  
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
								yearRange: "-5:+5",
									  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
									  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
									  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
									});
							}); 
							</script>
                     	     
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันทีบันทึก </font>   
							  <input type="text" class="form-control current  " id="datesave" name="datesave"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave; ?>" readonly  >
							</div>
						  </div> 
							
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							  <font color = '#000' size="3px" > ระบุยอดรับเงินฝาก </font>  
							  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $money; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div>
						  </div> 
						  
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							  <font color = '#000' size="3px" > เงือนไขการรับเงิน  </font>   
							  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
								<select class="form-control" id="getpayment" name="getpayment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
								<?php 
									$sql = "SELECT * FROM drop_paymentbank where name = '".$typegetpayment."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>    
								<?php 
									$sql = "SELECT * FROM drop_paymentbank where name != '".$typegetpayment."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>  
								</select>
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
							    </div> 
							</div>
						  </div> 
                         
                         
                         
                         
							  <div class="col-md-12"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($bank)){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									<?php if(!empty($bank)){ ?>
									<option value=""> ไม่เลือก </option>
									<?php } ?>
									</select>
									<span class="input-group-append">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
                          </div> 
							 
						  <div class="col-md-6">
							 <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
									<link rel="stylesheet" href="upload_image2/css/style.css">  
									<script src="upload_image2/js/app.js"></script> 
									
									<ul id="media-list" class="clearfix">
									
									 <?php 
											$imgload = "";
										
											$pkselect = "";
											$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.bill_no = '".$_GET["bill_no"]."' 
											order by a.pk asc     "; 
							 
											$query2 = mysqli_query($con,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$pkselect = $objResult2["pk"];
											}
										 
											$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$pkselect."' and typedata = '1'   order by pk asc  ";  
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{  
												$imgload = "";
												$sql_c2 = "SELECT * FROM imagecontact where bill_no = '".$objResult_c["bill_no"]."'    order by pk asc  "; 
												$query_c2 = mysqli_query($objCon,$sql_c2);
												while($objResult_c2 = mysqli_fetch_array($query_c2))
												{  
												$imgload =  $objResult_c2["img"];

												if( !empty($imgload) ){
											?>
											 <li class="myupload"  > 
											  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
												<img src="../img/<?php echo $imgload; ?>" style="width: 100%; " >
											  </a>
											  </li> 
											<?php		
													}
												}
											}  
											?>
											   
											   
											   
										<?php 
											$sql = "SELECT * FROM product_img where bill_no = '".$bill_no_ref."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?> 
												<li class="myupload"  > 
												<img src='../img/<?php echo $objResult["img"]; ?>' /><div  class='post-thumb'><div class='inner-post-thumb'>
												
												<a  data-id='' class='remove-pic' onClick="myFunction<?php echo $objResult["pk"]; ?>(<?php echo $objResult["pk"]; ?>)" style="cursor: pointer;">
												<i class='fa fa-times' aria-hidden='true' style="color: #FFF;"></i></a>
												
												<script>
												function myFunction<?php echo $objResult["pk"]; ?>(Delepk) {
												   
													$.ajax({
														type: "POST",
														url: "delete_img.php",
														data: {del:Delepk},
														success: function( ) {   
														}
													});   
													
												}
												</script> 
												</li> 
											 
											 <?php } ?>
											 
											 
											<li class="myupload"> 
												<span><i class="fa fa-plus" aria-hidden="true"></i>
												<input type="file"  click-type="type2"   class="picupload"  name="picupload[]" id="picupload"  multiple="multiple"     ></span>
											</li>
											
											
											 
										</ul>  
						  </div>
                  		  
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								  
							  	  <a href="payment_bank.php?bill_no=<?php echo $_GET["bill_no"]; ?>&customer=<?php echo $_GET["customer"]; ?>&major=<?php echo $_GET["major"]; ?>&page=2">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
 
							  	  </a>
							  
							  
									  <!-- modal small -->
									<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาาร </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										<div class="col-lg-12" align="center">
										 
											<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 

											   
										</div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 
							     
						  	  </div> 
						  </div>  
						  </div>  
                           
						  
						  <div class="col-lg-12">
							<hr>
						  </div> 
					   	  </form> 
                         
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