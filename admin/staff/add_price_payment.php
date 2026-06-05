<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";




	$month = "";
	if(empty($_GET["month"])){
		
	}else{
		$month = $_GET["month"];
	}
 	 
	$year = "";
	if(empty($_GET["year"])){
		
	}else{
		$year = $_GET["year"];
	}
 	 
	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
		
	}else{
		$searchname = $_GET["searchname"]; 
		 
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
		  
	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
		
	}else{
		$searchname2 = $_GET["searchname2"];
		 
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}


	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}



?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  แก้ไขรายการ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > แก้ไขรายการ  </font>   
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
                     <font size="4px" color="#000000">  แก้ไขรายการ   </font>   
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
							  var getadata = document.getElementById("searchtype").value; 
							 
								 if(getadata == "ประเภทเดือนปี"){
									  document.getElementById("showsearchdata1").style.display = "block";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "1";
								 }else if(getadata == "ประเภทวัน"){ 
									  document.getElementById("showsearchdata2").style.display = "block";
									  document.getElementById("showsearchdata1").style.display = "none";
									 
									  document.getElementById("typeselect").value = "2";
								 }else{ 
									  document.getElementById("showsearchdata1").style.display = "none";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "";
								 }
							 } 
						  </script>
                      
                        
                          <div class=" col-lg-4 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>  
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="add_price_payment_add.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกค่าใช้จ่าย    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="add_price_payment.php">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการ   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                          <div class="col-lg-12">
							<hr>
						  </div>
                    	 
                     
                    	  <form action="add_price_payment.php" method="get"> 
                          <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
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
								<?php 
								$sql = "SELECT * FROM major where pk != '".$major."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
								<span class="input-group-append"  >
								<button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit" >
									<img src="images/search.png" style="width: 15px; "> 
								</button>
								</span>
								</div> 
							</div>
						  </div>
						  </form>
                    
                  		  <div class="col-lg-12 ">  
                          <div id="showtablecal" > 
                          <font style="font-size: 18px;" color="#000" >  </font>
                          </div>
                          </div>
                        
                    	  
                         
						 <?php if(!empty($major)){   ?>
                  		 	  
                   		 	<div class="col-lg-5"  align="left"  > 
                    	
							<table width="50%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
										 <?php  if(empty($searchtype)){   ?>
											<option value="">  ประเภทการค้นหา    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM drop_type  where name = '".$searchtype."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_type  where name != '".$searchtype."' order by pk asc  "; 
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
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  
										</td>    
									</tr>
							</table>  
                  		 
							</div>  
                  		 	
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                  		  
                  		  	<?php
								$hd1 = " display: none; ";						 
								$hd2 = " display: none; ";	
													 
								if($searchtype == "ประเภทเดือนปี"){
									$hd1 = " display: block; ";
								}else if($searchtype == "ประเภทวัน"){
									$hd2 = " display: block; ";
								}
								   
							?>
                    		<form action="add_price_payment.php" method="get">
                    		<input type="hidden" name="searchtype" value="ประเภทเดือนปี"  >
                    		<input type="hidden" name="major" value="<?php echo $_GET["major"]; ?>"  >
                    		<div id="showsearchdata1" style=" <?php echo $hd1; ?>  "   class="col-lg-5"  align="left"  > 
							<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     >  
											<?php if(empty($month)){ ?>
											<option value="">  เลือกเดือน    </option> 
											<?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM month   where  statusdata = '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM month   where  statusdata != '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										   
										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกปี    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="year" name="year" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
											<?php if(empty($year)){ ?>
											<option value="">  เลือกปี    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM year where  year = '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM year where  year != '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>	 
							</table>  
							</div> 
							</form> 
                   		
                    		<form action="add_price_payment.php" method="get"> 
                    		<input type="hidden" name="searchtype" value="ประเภทวัน"  >
                    		<input type="hidden" name="major" value="<?php echo $_GET["major"]; ?>"  >
                   		    <div id="showsearchdata2" style="  <?php echo $hd2; ?> "   class="col-lg-5"  align="left"  > 
							<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 
										</td> 
									</tr>
							</table> 
							</div>
							</form> 
                         
                         
                         
                          
                         
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
													 
												   
													  
											$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
											$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 
											$addcode2 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
										 
													 
											if(!empty($month)  && !empty($year)){ 
												
												$addcode2 = "";
												$datadate  = "01-".$month."-".$year;				   
												$datadate2  = "31-".$month."-".$year;	


												$contactstart = date("Y-m-d", strtotime($datadate));  
												$checkend = date("Y-m-d", strtotime($datadate2)); 

												$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";
											} 
													 
													 
											$sql2 = " SELECT * FROM add_price_payment_add  
											where  bill_no != ''   and major = '".$major."'
											".$addcode.$addcode2."  
											order by  pk asc    "; 
													  
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="add_price_payment.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="add_price_payment.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="add_price_payment.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="add_price_payment.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="add_price_payment.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="add_price_payment.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="add_price_payment.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="add_price_payment.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="add_price_payment.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                    
                    		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							    
										 
										 
										<tbody>
									 
									 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$totalprice = 0;
										$totalprice2 = 0;
										$total = 0;

 
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM add_price_payment_add 
											where  bill_no != ''   and major = '".$major."'
											".$addcode.$addcode2."  
											order by  pk asc   limit {$start} , {$perpage}   ";  
	 
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
												$name_createmajor = "";
												$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_createmajor =  $objResult["name"];
												} 
											
											$totalprice = 0;
											
											$totalprice += $objResult2["money1"];
											$totalprice += $objResult2["money2"];
											$totalprice += $objResult2["money3"];
											$totalprice += $objResult2["money4"];
											$totalprice += $objResult2["money5"];
											$totalprice += $objResult2["money6"];
											$totalprice += $objResult2["money7"];
											$totalprice += $objResult2["money8"];
											$totalprice += $objResult2["money9"];
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date2"])." ".DateThai2($objResult2["create_date2"]); ?> </font></div></td> 
										 
										  
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money1"]); 
											}
											 
											?> </font></div></td> 
										 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money2"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money3"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money4"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money9"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money5"]); 
											}
											 
											?> </font></div></td> 
										 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money6"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money7"]); 
											}
											 
											?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["money1"])){
												echo number_format(0+$objResult2["money8"]); 
											}
											 
											?> </font></div></td> 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											 
												echo number_format(0+$totalprice); 
											 
											?> </font></div></td> 
										 
										  
										 	 
										<td align="center"><div align="center"><a  href="add_price_payment.php?CusID=<?php echo $objResult2["pk"];?>&page=1&major=<?php echo $_GET["major"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > แก้ไข </font></a>  
										</div></td>

										</tr>  
										<?php $i++; $totalprice2+= $totalprice;  } ?>
									</tbody>
  									<thead> 
  									<tr>
												<th width="5%" colspan="10" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$totalprice2); ?>  </font></div></th>   
												<th width="3%" bgcolor="#FFF" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;      </font></div></th>  
											 </tr>
											 <tr>
												<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันเดือนปี    </font></div></th>    
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ค่าเช่า  </font></div></th>   
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ค่ายิงแอด     </font></div></th> 
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าส่งของ   </font></div></th>    
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าพนักงาน     </font></div></th>   
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าโทรศัพท์      </font></div></th>   
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าเน็ต   </font></div></th>  
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าน้ำ     </font></div></th>  
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าไฟ     </font></div></th> 
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าใช้อื่นๆเบ็ตเตล๊ด     </font></div></th>   
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดรวม     </font></div></th>  
												 
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
											 </tr>
										  </thead>
										 
							</table>  
							</div>
						  </div>
                    
                    
                      
                  		 	<?php } ?>
						 
                   	  <?php } ?>
                   		    
                   		  
                  		<?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM add_price_payment_add Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$money1 = $objResult["money1"];     
							$money2 = $objResult["money2"];     
							$money3 = $objResult["money3"];     
							$money4 = $objResult["money4"];     
							$money5 = $objResult["money5"];     
							$money6 = $objResult["money6"];     
							$money7 = $objResult["money7"];     
							$money8 = $objResult["money8"];     
							$money9 = $objResult["money9"];     
							$note = $objResult["note"];     
							$bill_no = $objResult["bill_no"];     

 
						}  
							 
						?> 
                          <form role="form" name="frmMain" method="post" action="save_add_price_payment_add_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 

							<input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $bill_no; ?>" >
							<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
							<input type="hidden" name="major" id="major" class="form-control " value="<?php echo $_GET["major"]; ?>" >
					
					
                      	  
                      	   
                      	  <input type="hidden" id="customerid" name="customerid" value=""  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value=""  >
                      	  <input type="hidden" id="productid" name="productid" value=""  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value=""  >
                      	   
                      	  
                          <div class="col-lg-7" >  
                             
                         	
                          <div id="showdatakey"  >
                          
                         
                         
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าเช่า </font>   
							  <input type="text" class="form-control" id="money1" name="money1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  value="<?php echo $money1; ?>"      >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่ายิงแอด </font>   
							  <input type="text" class="form-control" id="money2" name="money2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   value="<?php echo $money2; ?>"        >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าส่งของ </font>   
							  <input type="text" class="form-control" id="money3" name="money3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     value="<?php echo $money3; ?>"      >
							</div>
						  </div> 
                         
                         
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าพนักงาน </font>   
							  <input type="text" class="form-control" id="money4" name="money4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    value="<?php echo $money4; ?>"       >
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > โทรศัพท์ </font>   
							  <input type="text" class="form-control" id="money9" name="money9"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    value="<?php echo $money9; ?>"        >
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าเน็ต </font>   
							  <input type="text" class="form-control" id="money5" name="money5"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     value="<?php echo $money5; ?>"       >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าน้ำ </font>   
							  <input type="text" class="form-control" id="money6" name="money6"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    value="<?php echo $money6; ?>"       >
							</div>
						  </div> 
                         
                         
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าไฟ  </font>   
							  <input type="text" class="form-control" id="money7" name="money7"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    value="<?php echo $money7; ?>"     >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าใช้อื่นๆเบ็ตเตล๊ด </font>   
							  <input type="text" class="form-control" id="money8" name="money8"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     value="<?php echo $money8; ?>"     >
							</div>
						  </div> 
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเหตุ </font>   
							  <input type="text" class="form-control" id="note" name="note"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "  value="<?php echo $note; ?>"       >
							</div>
						  </div> 
                         
                              
                  		  <div class="col-lg-12 ">   </div> 
                           
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  
							  <a href="add_price_payment_add.php?major=<?php echo $_GET["major"]; ?>">
							  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
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