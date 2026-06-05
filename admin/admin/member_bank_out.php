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

	$typedata = "ถอนเงิน"; 
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
                     <font size="4px" color="#000000">  ถอนเงิน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ถอนเงิน >  <?php echo $namestaff; ?>    </font>   
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
                     <font size="4px" color="#000000">  ถอนเงิน  <?php echo $namestaff; ?>   </font>   
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
                   	      	    
                        
                  		 	<?php
							$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px;  border-color: #006400; margin-top: 25px; ";
							$colorbtns2s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";
							$colorbtns3s = " background-color: #4B0082; border-radius: 5px;  height: 40px;  border-color: #4B0082; margin-top: 25px; ";
							$colorbtns4s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
							$colorbtns5s = " background-color: #20B2AA; border-radius: 5px;  height: 40px;  border-color: #20B2AA; margin-top: 25px; ";

							$txtcolor1 = "#FFF"; 
							$txtcolor2 = "#FFF"; 
							$txtcolor3 = "#FFF"; 
							$txtcolor4 = "#FFF"; 
							$txtcolor5 = "#FFF"; 

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
																				<li class="prev"><a href="member_bank_out.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="member_bank_out.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="member_bank_out.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="member_bank_out.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="member_bank_out.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank_out.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank_out.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="member_bank_out.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="member_bank_out.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul> 
											<?php endif; ?>

										</div>
                      
                       
							<div   class="col-lg-8"  align="right"  >  
							
							<a data-toggle="modal" data-target="#smallmodalthree"   >
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns5s; ?> " > <font color="<?php echo $txtcolor5; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  ถอนเงินฝาก  </font> </button>
							</a>
							
								
							<!-- modal small -->
								<div class="modal fade" id="smallmodalthree" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
									<div class="modal-header">
									<h5 class="modal-title" id="smallmodalLabel"> รายการ <?php echo $name; ?>  </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									</div>
									<div class="modal-body">
									<div class="col-lg-12" align="left"   >   
									<font size="3px" color="black" style="font-size: 14px;">   

									<form role="form" name="frmMain"  method="post" action="save_member_bank_out.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 


									 <input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
									 <input type="hidden" id="CusID" name="CusID" value="<?php echo $memberpk; ?>">
									 <input type="hidden" id="savebill_no" value="<?php echo $memberpk; ?>" > 

									 <div id="showcontactsave" class="col-lg-12" style="margin-top: 5px;  " align="center">   

									  <div class="col-md-12"  >  <font color = '#FF0000' size="3px" > ถอนเงินฝาก </font> 	 </div> 

										 <div class="col-md-12" style=" margin-top: 10px; "  >   </div> 



									  <div class="col-md-8"  >


									   <div class="col-md-6 "> 
										  <div class="form-group"> 
											 <font class="serif" size="3px" color="black" for="address"> วันที่บันทึก </font>
											 <input type="text" class="form-control   " id="savedate" name="savedate"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $searchname; ?>" readonly   >
										  </div>
									   </div> 
									 <div class="col-md-12"    >   </div> 


									   <div class="col-md-6"  >	
										<div class="form-group">
										   <font color = '#000' size="3px" > จำนวนคงเหลือ </font>   
										  <input type="text" class="form-control" id="1data" name="1data"  autocomplete="off" required  value="<?php echo $total_p-$total_d; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1()" readonly     >
										</div>
									   </div> 

									   <div class="col-md-6"  >	
										<div class="form-group">
										   <font color = '#000' size="3px" > กรุณาระบุยอดถอนเงินฝาก </font>   
										  <input type="text" class="form-control" id="2data" name="2data"  autocomplete="off" required  value=""   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1()"  >
										</div>
									   </div> 

									   <div class="col-md-6"  >	
										<div class="form-group">
										   <font color = '#000' size="3px" > หักค่าธรรมเนียม %  </font>   
										  <input type="text" class="form-control" id="3data" name="3data"  autocomplete="off" required  value=""   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1()"  >
										</div>
									   </div> 


									   <div class="col-md-6"  >	
										<div class="form-group">
										   <font color = '#000' size="3px" > ยอดรับเงินสุทธิ  </font>   
										  <input type="text" class="form-control" id="4data" name="4data"  autocomplete="off" required  value=""   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1()" readonly  >
										</div>
									   </div> 
									   
									   
									   
									   
									   
									   
									   
									  <div class="col-md-6"  >	
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
											<span class="input-group-append" style=" display: none; ">
											<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
												<img src="images/down.png" style="width: 15px;">		 
											</button>
											</span>
											</div> 
										</div>
									  </div> 
							  
							  
								  <div class="col-md-6"  >	
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
										<span class="input-group-append" style=" display: none; ">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
										</div>
										</div>
							  
								   
								   
								   
									   </div> 


									   <div class="col-md-3"  >	
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

										<div class="col-md-12"  > 

										<div class="col-md-12" align="center" style=" margin-top: 15px; "  > 

										<a data-toggle="modal" data-target="#Savepayment"   class="btn btn-sm btn-primary"  style="cursor: pointer;  background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;  width: 120px; height: 40px;    " >
										<font size="3px" color="#FFF" style=" font-size: 18px; " > 
										บันทึกข้อมูล   
										</font>  
										</a> 

										<!-- modal small -->
										<div class="modal fade" id="Savepayment" tabindex="-2" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document" style="margin-top: 100px;">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> กรุณายืนยันทำรายการ ถอนเงินฝาก </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										<div class="col-lg-12" align="left"   >   
										<font size="3px" color="black" style="font-size: 14px;">   

										<div class="col-lg-12" align="left">  

										 <font style="font-size: 14px; " color="#FF0000">

											หมายเหตุ  <br> 
											กรุณาตรวจสอบรายการก่อนกดบันทึก เพราะเมื่อกดบันทึกรายการแล้ว จะไม่สามารถแก้ไขรายการได้อีก

										 </font>

										 </div> 


										<div class="col-lg-12" style="margin-top: 15px;" align="center">   


											 <button type="submit"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  บันทึกรายการ   </font> </button> 

											 <a onClick="Saveconfrimcancel()" >
											 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "  > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button>    </a>

										 </div>

										</font> 
										</div>  
										</div> 
										</div> 
										</div> 
										</div> 

										</div> 


									   </div> 
									 </div>


									</form>



									</div>
									</div>
								</div>
								</div>
								</div>
								<!-- end modal small --> 
										
										<script>
										 
										function
										Saveconfrimcancel( ) {
										  
											$(document).ready(function(){ 
											$('#Savepayment').modal('hide'); //myModal is ID of div
											});    
											
										}
											
											
										function calAge1()
										{   
											
											var data1 = document.getElementById("1data").value; ///   
											var data2 = document.getElementById("2data").value; ///   
											var data3 = document.getElementById("3data").value; ///   
											var data4 = document.getElementById("4data").value; ///   
											
											var sdata1 = 0;
											var sdata2 = 0;
											var sdata3 = 0;
											var sdata4 = 0; 
											if(data1 == ""){ 
											}else{
												sdata1 = parseInt(data1);
											}  
											if(data2 == ""){ 
											}else{
												sdata2 = parseInt(data2);
											}  
											if(data3 == ""){ 
											}else{
												sdata3 = parseInt(data3);
											}  
											if(data4 == ""){ 
											}else{
												sdata4 = parseInt(data4);
											}   
											
											var cal1 = (sdata1 - sdata2); 
											var cal2 = (sdata3 / 100); 
											var cal3 = sdata2 * cal2; 
											var cal4 = sdata2 - cal3; 
											 
											if(sdata1 < sdata2){
												alert(' คุณระบุยอดเงินถอนเกินกว่ายอดเงินฝากคงเหลือ ');
												
												document.getElementById("2data").value = "";
												document.getElementById("4data").value = "";
											}else{
												
												if(sdata2 == "0"){
												document.getElementById("4data").value = "";	
												}else{
													 
												document.getElementById("4data").value = Commas(cal4.toFixed(0));  
												} 
											}
											
											 
										}
											
									  </script>
											
										
							
							
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
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดถอนเงิน     </font></div></th>  
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดคงเหลือ     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะวางบิล     </font></div></th> 
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ประวัติ     </font></div></th>   
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
										 
									  
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
											
											$total_p -= $objResult2["price"];
											
											echo number_format(0+$total_p); 
											
											?> </font></div></td> 
										  
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
										
										
										 	
										<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										<input type="hidden" id="savebill_save<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      

										<?php if($objResult2["pasy"] == ""){ ?>

										 <select class="form-control " style="background-color: #FF0000; color: white; font-size: 12px;  margin-top: -5px;  " id="status_paymentnpl<?php echo $objResult2["pk"]; ?>" name="status_paymentnpl<?php echo $objResult2["pk"]; ?>" onChange="showUsernpl<?php echo $objResult2["pk"]; ?>(this.value)"  > 

											<option value="ยังไม่ได้วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไม่ได้วางบิล  </font></option> 
 
											<option value="วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> วางบิล </font></option> 

										</select>  


										<?php }else if($objResult2["pasy"] == "ยังไม่ได้วางบิล"){ ?>

										 <select class="form-control " style="background-color: #FF0000; color: white; font-size: 12px;  margin-top: -5px;  " id="status_paymentnpl<?php echo $objResult2["pk"]; ?>" name="status_paymentnpl<?php echo $objResult2["pk"]; ?>" onChange="showUsernpl<?php echo $objResult2["pk"]; ?>(this.value)"  > 
 
											<option value="ยังไม่ได้วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไม่ได้วางบิล  </font></option> 
 
											<option value="วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> วางบิล </font></option> 
  
										</select>  


										<?php }else if($objResult2["pasy"] == "วางบิล"){ ?>

										 <select class="form-control " style="background-color: #006400; color: white; font-size: 12px;  margin-top: -5px;  " id="status_paymentnpl<?php echo $objResult2["pk"]; ?>" name="status_paymentnpl<?php echo $objResult2["pk"]; ?>" onChange="showUsernpl<?php echo $objResult2["pk"]; ?>(this.value)"  > 

											<option value="ยังไม่ได้วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไม่ได้วางบิล  </font></option> 
 
											<option value="วางบิล//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> วางบิล </font></option> 

										</select>  

										<?php } ?>


										<script>
										function  showUsernpl<?php echo $objResult2["pk"]; ?>(str) {

												//// alert(str);
												var cut_data = str.split("//"); 
												var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

												var check_status = cut_data[0];
												var check_status_save = "";

												if(check_status == "ยังไม่ได้วางบิล"){ 
												var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;


													document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
													document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF0000";

													check_status_save = "ยังไม่ได้วางบิล";


													var jsonString = ""; 
													$.ajax({
													type: "POST",
													url: "save_check_pasy_aom.php?status="+check_status_save+"&bill_no="+save_key,
													contentType: 'application/json',
													data: jsonString,
													success: function(result) {
													//alert(result);
													}
													});


												}else if(check_status == "วางบิล" ){ 
												///	alert( check_status );
												var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;


												///	alert( save_key );
													document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
													document.getElementById("status_paymentnpl<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

													check_status_save = "วางบิล";


												///	alert("save_check_no_payment_loan.php?status="+check_status_save+"&bill_no="+save_key);
													var jsonString = ""; 
													$.ajax({
													type: "POST",
													url: "save_check_pasy_aom.php?status="+check_status_save+"&bill_no="+save_key,
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
										
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">  
										<a class=" btn btn-sm" style=" background-color: #FFAA36; border-radius: 5px;   margin-top: -5px;  " href="print_out.php?bill_no=<?php echo $objResult2["bill_no"];?>&round=<?php echo $i;?>&major=<?php echo $major;?>&totalmoney=<?php echo $total_p; ?>" target="_blank"  > 
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
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" readonly >
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
                           
                           
                           
                           	 	<?php
								$showimg = "images/upload.png";
								if(!empty($img)){ 
								$showimg = "../img/".$img;
								}
							 	?>
                           
                           
                          	 	<img src="<?php echo $showimg; ?>" style=" width: 100% ; " class="myAvatar" id="blah1" />
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

							  	   <a href="member_bank_out.php?major=<?php echo $major;?>&typedata=<?php echo $typedata; ?>&CusID=<?php echo $memberpk; ?>">
							  		 
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