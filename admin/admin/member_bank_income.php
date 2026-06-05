<?php 
session_start();
$_SESSION["load"] = "4";
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
	$getpayment = ""; 
	$bank = ""; 


	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		
		
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}
 	 
		   
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  
	$major = "";
	$major2 = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
		$major2 = $_GET["major"];
	}  

	if(empty($_GET["major2"])){
		
	}else{
		$major = $_GET["major2"];
		$major2 = $_GET["major2"];
	}  

	$typedata = "ฝากเงิน"; 
	$typedata2 = ""; 
	$memberpk = "";
	if(empty($_GET["CusID"])){
		
	}else{
		$memberpk = $_GET["CusID"]; 
	}  
	  
	$namestaff = "";
	$namestaff2 = "";
	$namestaff3 = "";
	$namestaff4 = "";
	$sql = "SELECT * FROM customer where pk = '".$memberpk."'  order by pk desc limit 1 "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$namestaff = $objResult["name"];  
	} 
 

	$total_p = 0;
	$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
	and typedata = 'ฝากเงิน'
	order by pk desc   "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$total_p += $objResult["price"];  
	} 
											
	$total_d = 0;
	$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
	and typedata = 'ถอนเงิน'
	order by pk desc "; 
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$total_d += $objResult["price"];  
	} 

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ฝากเงิน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ฝากเงิน >  <?php echo $namestaff; ?>    </font>   
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
                     <font size="4px" color="#000000">  ฝากเงิน  <?php echo $namestaff; ?>   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                       
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
							yearRange: "-10:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
 
 
							   
                    	<div class="col-lg-12"  id="showcustomer"   > 
                   	       
                   	      	 <div class="col-lg-12"> <hr> </div>
                   	      	  
                  		     <form role="form" name="frmMain"  method="post" action="save_member_income.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							 <input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
							 <input type="hidden" id="CusID" name="CusID" value="<?php echo $memberpk; ?>">
							 
							 <div class="col-md-4"  >  
						   
						   	 <div   class="col-lg-12"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>

									 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="majorline" name="majorline" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
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
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>     
									</tr>
								</table>  
						     </div>
						     
						     
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่บันทึก </font>
									 <input type="text" class="form-control   " id="savedate" name="savedate"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $searchname; ?>" readonly   >
								  </div>
							   </div> 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ระบุยอดฝากเงิน </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" >
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
							    
							 <div class="col-md-2"  >    
                        	
                            	<style>
							.image-upload > input
							{
								display: none;
							}
							.upload-icon{
							  width: 100%; 
							  border: 2px solid #C2C2C2; 
							}
							.upload-icon img{
							  width: 100%; 
							  cursor: pointer;
							}
							.upload-icon.has-img {
								width: 100%; 
								border: none;
							}
							.upload-icon.has-img img {
								width: 100%;
								height: auto;
								border-radius: 18px;
								margin:0px;
							}
							</style> 
                   				<script type="text/javascript">
								function readURL1(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah1').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								}  
							</script>	
                           
                          	 	<img src="images/upload.png" style=" width: 100% ; " class="myAvatar" id="blah1" />
							 	<input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
							 	<script>
								$(".myAvatar").click(function() {
									$("#newAvatar").trigger("click");
								});
							 </script>
							 
 							 </div>  
							    
							  <div class="col-md-12"  >   </div>  
							    
							  <div class="col-lg-12" align="left"   > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  	   <a href="member_bank.php?major=<?php echo $major;?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">
							  		 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px;  border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
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
							  

							 </form>
							 
                  		  
                  		  
                  		  
                   		  
							<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                       
                       
                       
                  		<?php
						$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px;  border-color: #006400; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";
						$colorbtns3s = " background-color: #4B0082; border-radius: 5px;  height: 40px;  border-color: #4B0082; margin-top: 25px; ";
						$colorbtns4s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
						$txtcolor4 = "#FFF"; 
  			 
						$p_total1 = 0;
						$p_total2 = 0;
						$p_total3 = 0;
						$total_p = 0;
						$total_d = 0;
						$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
						and typedata = 'ฝากเงิน'
						order by pk desc   "; 
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{ 
							$total_p += $objResult["price"];  
						} 
											
						$total_d = 0;
						$total_d2 = 0;
						$sql = "SELECT * FROM member_bank where member = '".$memberpk."' and major = '".$major."' 
						and typedata = 'ถอนเงิน'
						order by pk desc "; 
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{ 
							$total_d += $objResult["price"];
							
							$total_d2 += $objResult["price"] * ($objResult["percent"] / 100); 
						} 
													 
						?>	
                    	  
                    		 <div id="showtabledata1"  >
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
													 
											$sql2 = " SELECT * FROM member_bank  
											where  price != ''  
											and major = '".$major."'
											and typedata = '".$typedata."' 
											and member = '".$memberpk."'  
											".$addcode.$addcode2."  
											order by  pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="member_bank_income.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="member_bank_income.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="member_bank_income.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="member_bank_income.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="member_bank_income.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank_income.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank_income.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="member_bank_income.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="member_bank_income.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul> 
											<?php endif; ?>

										</div>
                        
							<div   class="col-lg-8"  align="right"  >  
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  เงินฝาก   <?php echo number_format(0+$total_p); ?> บาท </font> </button>

							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  ยอดถอน  <?php echo number_format(0+$total_d); ?> บาท </font> </button>

							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor3; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  ยอดหัก   <?php echo number_format(0+$total_d2); ?> บาท </font> </button>   

							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns4s; ?> " > <font color="<?php echo $txtcolor4; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  ยอดคงเหลือ   <?php echo number_format(0+$total_p-$total_d); ?> บาท </font> </button>   
							</div>
                       
                         
                             <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ครั้งที่    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่ทำรายการฝาก  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันเดือนปี     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา     </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หลักฐาน     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงินฝาก     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ประวัติการแก้ไข     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เเก้ไข     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ออกบิล   </font></div></th>  
							 </tr>
						  	</thead>  
										 
										 
										<tbody>
									  
									 	<?php 
										$bg = "#F8FAFD";  
										$i = 1;
										$total = 0;

 
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM member_bank  
											where  price != ''  
											and major = '".$major."'
											and typedata = '".$typedata."' 
											and member = '".$memberpk."'  
											".$addcode.$addcode2."  
											order by  pk asc    limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										} 
											 
												$name_create = "";
												$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_create =  $objResult["name"];
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
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?> </font></div></td> 
										
										
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										หลักฐาน   
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
												$imgload = "";
												$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$objResult2["pk"]."' and typedata = '2'   order by pk asc  ";  
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
											$ic = 1;
											$img = "";
											$sql_v = "SELECT * FROM member_bank where pk = '".$objResult2["pk"]."'   
											order by pk desc  ";   
											$query_v = mysqli_query($objCon,$sql_v);
											while($objResult_v = mysqli_fetch_array($query_v))
											{ 
												$img = $objResult_v["img"];
											} 
											
											if(!empty($img)){
												 
											?> 
											<img src="../img/<?php echo $img; ?>" style="width: 100%;">
											<?php }?>
											</font> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										</font></div></td>
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price"]); ?> </font></div></td> 
										 
									  
									  
									  
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
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">  
										<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="member_bank_income.php?editdata=<?php echo $objResult2["pk"];?>&page=1&searchname=<?php echo $searchname;?>&major=<?php echo $major;?>&typedata=<?php echo $typedata;?>&CusID=<?php echo $memberpk;?>"  > 
										<font size="3px" color="#FFF" style=" font-size: 13px; " > เเก้ไข </font>
										</a>
        								</div></td> 
										 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">  
										<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="print_income.php?bill_no=<?php echo $objResult2["bill_no"];?>&round=<?php echo $i;?>&major=<?php echo $major;?>" target="_blank"  > 
										<font size="3px" color="#FFF" style=" font-size: 13px; " > ออกบิล </font>
										</a>
        								</div></td> 
										 
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
							</table>  
							</div>
						   </div>
                   	         </div>
                      
                   	      </div>
                     
                   	  <?php } ?>
                   		    
                   		    <?php  
							if(isset($_GET["page"])){
							if( ($_GET["page"]) == "1" ){
							$sql = "SELECT * FROM member_bank Where  pk = '". $_GET["editdata"] ."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$savedate = $objResult["savedate"];    
								$price = $objResult["price"];    
								$img = $objResult["img"];    
								$major = $objResult["major"];    
								$bill_no = $objResult["bill_no"];    
								$pkselect = $objResult["pk"];    
								$getpayment = $objResult["getpayment"];    
								$bank = $objResult["bank"];    

							}  
							?> 
                     	    
                       
                  		      <form role="form" name="frmMain"  method="post" action="save_member_income_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							 <input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
							 <input type="hidden" id="CusID" name="CusID" value="<?php echo $memberpk; ?>">
							 <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>">
						     <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["editdata"]; ?>" > 
							 
							 <div class="col-md-4"  >  
						   
						   	 <div   class="col-lg-12"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>

									 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="majorline" name="majorline" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
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
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>     
									</tr>
								</table>  
						     </div>
						     
						     
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่บันทึก </font>
									 <input type="text" class="form-control   " id="savedate" name="savedate"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $searchname; ?>" readonly   >
								  </div>
							   </div> 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ระบุยอดฝากเงิน </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10"   >
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
							    
							 <div class="col-md-6"  >    
                        	
                            	<style>
							.image-upload > input
							{
								display: none;
							}
							.upload-icon{
							  width: 100%; 
							  border: 2px solid #C2C2C2; 
							}
							.upload-icon img{
							  width: 100%; 
							  cursor: pointer;
							}
							.upload-icon.has-img {
								width: 100%; 
								border: none;
							}
							.upload-icon.has-img img {
								width: 100%;
								height: auto;
								border-radius: 18px;
								margin:0px;
							}
							</style> 
                   				<script type="text/javascript">
								function readURL1(input) { 
									if (input.files && input.files[0]) {
										var reader = new FileReader();

										reader.onload = function (e) {
											$('#blah1').attr('src', e.target.result);
										}

										reader.readAsDataURL(input.files[0]);
									}
								}  
							</script>	
                           
                            <?php 
								$imgload = "";
 
								$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$pkselect."' and typedata = '2'   order by pk asc  ";  
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
								  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
									<img src="../img/<?php echo $imgload; ?>" style=" width: 200px ; "  >
								  </a>  &nbsp;
								<?php		
										}
									}
								}  
								?>
                           
                           	 	<?php
								$showimg = "images/upload.png";
								if(!empty($img)){ 
								$showimg = "../img/".$img;
								}
							 	?>
                           
                           
                          	 	<img src="<?php echo $showimg; ?>" style=" width: 200px ; " class="myAvatar" id="blah1" />
							 	<input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
							 	<script>
								$(".myAvatar").click(function() {
									$("#newAvatar").trigger("click");
								});
							 </script>
							 
 							 </div>  
							    
							  <div class="col-md-12"  >   </div>  
							    
							  <div class="col-lg-12" align="left"   > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  	   <a href="member_bank_income.php?major=<?php echo $major;?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">
							  		 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px;  border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
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
							  

							 </form>
                          
                          
                          
                       <?php } } ?>
                       
                       
                       
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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