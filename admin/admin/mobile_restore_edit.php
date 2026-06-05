<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $major = "";
	 $note = "";
	 $detail = "";
	 $price = "";


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

	$bill = "";
	if(empty($_GET["bill"])){
		
	}else{
		$bill = $_GET["bill"];
	}


	$major = "1"; 
		
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}
 
		
	$typedata2 = "";
	if(empty($_GET["typedata2"])){
		
	}else{
		$typedata2 = $_GET["typedata2"];
	}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
             
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  แก้ไขรายการรับซ่อมมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > แก้ไขรายการรับซ่อมมือถือ  </font>   
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
                     <font size="4px" color="#000000">  แก้ไขรายการรับซ่อมมือถือ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
 
                  		 <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="mobile_restore.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกรายการรับซ่อมมือถือ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="mobile_restore_edit.php">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการรับซ่อมมือถือ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div> 
                         
                         
                          <div class="col-lg-12">
							<hr>
						  </div>
                        
						  
                      
                      
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
                   		 
                   		 
                   		 
                   		 
                    	    <div   class="col-lg-4"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>

										<form action="mobile_restore_edit.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="major" name="major"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
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
                  		 	
                  		  	<?php
								$hd1 = " display:  none; ";						 
								$hd2 = " display:  none; ";	
													 
								if($searchtype == "ประเภทเดือนปี"){
									$hd1 = " display: block; ";
								}else if($searchtype == "ประเภทวัน"){
									$hd2 = " display: block; ";
								}
													 
										 
								$hdmajor = " display:  none;  ";
								if(!empty($major)){
									$hdmajor = " display: block; ";
								} 
							?>
                   		 
                   		 	<div style=" <?php echo $hdmajor; ?>  ">
                   		 		 
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                   		 
                   		 	<div class="col-lg-4"  align="left"  >  
                    		<form action="mobile_restore_edit.php" method="get"> 
							<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/ค้นหาเลขที่บิล    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input type="hidden" id="major" name="major" value="<?php echo $major; ?>"  >
										<input class="form-control     "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="bill" name="bill" value="<?php echo $bill; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 
										   
										</td>    
									</tr>	 
							</table>   
							</form> 
							</div>  
							
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
							
                   		 	<div class="col-lg-4"  align="left"  > 
							<table width="100%">
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
                  		   
                  		 	 
                   		 	<div class="col-lg-4"  align="left"  >  
                    		<form action="mobile_restore_edit.php" method="get">
                    		<input type="hidden" name="searchtype" value="ประเภทเดือนปี"  >
							<input type="hidden" id="major" name="major" value="<?php echo $major; ?>"  >
                   		
                    		<div id="showsearchdata1" style=" <?php echo $hd1; ?>  "   align="left"  > 
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
							</div> 
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                   		
                   		 	 <div class="col-lg-4"  align="left"  >  
                    		<form action="mobile_restore_edit.php" method="get"> 
                    		<input type="hidden" name="searchtype" value="ประเภทวัน"  >
							<input type="hidden" id="major" name="major" value="<?php echo $major; ?>"  >
                  		    
                   		    <div id="showsearchdata2" style="  <?php echo $hd2; ?> "    align="left"  > 
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
							</div> 
                   		 
                    		 
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                            
                        
                            	
                            	 
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
												$addcode3 = "";  
												$addcode4 = "";  
													  
											$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
											$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 
											$addcode2 = "  and  datesave2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												 
													 
											if(!empty($month)  && !empty($year)){ 
												
												$addcode2 = "";
												$datadate  = "01-".$month."-".$year;				   
												$datadate2  = "31-".$month."-".$year;	


												$contactstart = date("Y-m-d", strtotime($datadate));  
												$checkend = date("Y-m-d", strtotime($datadate2)); 

												$addcode = "  and  datesave2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";
											} 
													 
											if(!empty($bill)){ 
												$addcode2 = "";
												$addcode = ""; 
												
												$addcode3 = "  and   ( bill_no like '%".$bill."%'  or customer like '%".$bill."%'  )  ";
												
											} 
											if(empty($_GET["typedata"])){

											}else{
													$addcode4 = " and statusave = '".$typedata."'  ";
											} 
											if(empty($_GET["typedata2"])){

											}else{
													$addcode5 = " and statuspayment = '".$typedata2."'  ";
											} 
													 
											$sql2 = " SELECT * FROM mobile_restore  
											where  bill_no != ''   and major = '".$major."'
											".$addcode.$addcode2.$addcode3.$addcode4.$addcode5."  
											order by  pk asc    ";  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="mobile_restore_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="mobile_restore_edit.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="mobile_restore_edit.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="mobile_restore_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="mobile_restore_edit.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="mobile_restore_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="mobile_restore_edit.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="mobile_restore_edit.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="mobile_restore_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>&typedata2=<?php echo $typedata2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                       
                       
                       		 <?php 
										$total1 = 0; 
										$total2 = 0; 
										$total3 = 0; 
										$total4 = 0; 
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM mobile_restore 
											where bill_no != ''  and major = '".$major."' and chk = ''
											".$addcode.$addcode2.$addcode3."  
											order by  pk asc    ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											
											if($objResult2["statuspayment"] == "รอชำระเงิน"){
												$total1 += $objResult2["price2"];  
											}else{
												$total3 += $objResult2["price2"]; 
											}  
											 
										}  
													 
										$sql2 = " SELECT * FROM mobile_restore 
											where bill_no != ''  and major = '".$major."'  
											".$addcode.$addcode2.$addcode3."  
											order by  pk asc    ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											if($objResult2["statusave"] == "รอคอนเฟิร์มการซ่อม"){
												$total4++; 
											}
											 
											$total2++;
										} 
							?>
                        
							 <div   class="col-lg-8"  align="left"  >      
							  <div class="col-md-3"  >	 
								<div class="form-group" align="left">
								   <font color = '#000' size="3px" > บิลที่รอการคอนเฟิร์ม  </font>   
								   <input type="text" class="form-control" id="data4" name="data4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$total4); ?>"  readonly >
								</div>
							  </div> 
							  <div class="col-md-3"  >	 
								<div class="form-group" align="left">
								   <font color = '#000' size="3px" > ยอดจำนวนที่ยังไม่ได้คิดเงิน </font>   
								   <input type="text" class="form-control" id="data1" name="data1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$total1); ?>"  readonly >
								</div>
							  </div> 
							  <div class="col-md-3"  >	 
								<div class="form-group" align="left">
								   <font color = '#000' size="3px" > จำนวนบิล </font>   
								   <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$total2); ?>"  readonly >
								</div>
							  </div> 
							  <div class="col-md-3"  >	 
								<div class="form-group" align="left">
								   <font color = '#000' size="3px" > ยอดที่ได้รับเงินแล้ว </font>   
								   <input type="text" class="form-control" id="data3" name="data3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$total3); ?>"  readonly >
								</div>
							  </div> 
							  </div>  
                            
                            <?php
								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;


								$sql2 = "  SELECT * FROM mobile_restore 
											where bill_no != ''     and major = '".$major."'
											".$addcode.$addcode2.$addcode3."  
											order by  pk asc   ";  
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
									if($objResult2["statusave"] == "ส่งมอบแล้วข้อมูลตัดออกไป"){
										$totalcal1++;

									}
									if($objResult2["statusave"] == "ทำรายการดำเนินงานส่งมอบแล้ว"){ 
										$totalcal2++; 
									}

									if($objResult2["statuspayment"] == "มัดจำแล้ว"){ 
										$totalcal3++; 
									}

								}
								?>
							<div   class="col-lg-12"  align="right"  >  
							<a href="mobile_restore_edit.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata2=มัดจำแล้ว&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" > รายชื่อมัดจำแล้ว <?php echo number_format(0+$totalcal3); ?>  </font> 
							</button> 
							</a>
							
							
							<a href="mobile_restore_edit.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ส่งมอบแล้วข้อมูลตัดออกไป&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ส่งมอบแล้วข้อมูลตัดออกไป <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="mobile_restore_edit.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ทำรายการดำเนินงานส่งมอบแล้ว&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&major=<?php echo $major; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #8B0000; border-radius: 5px; height: 40px; border: 1px solid  #8B0000;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ทำรายการดำเนินงานส่งมอบแล้ว <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>
							    
							</div> 
                        
                       
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table tablemobile  " border="0" style=" width: 1700px; "    >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่รายการซ่อม     </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วัน เดือน ปี  </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ลูกค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายละเอียดการซ่อม     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ต้นทุนงานซ่อม     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ราคาขายหน้าร้าน     </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   มัดจำ     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   กำไร     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะ     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะชำระเงิน     </font></div></th>  
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   อัพเดทเวลา     </font></div></th>      
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   แก้ไข     </font></div></th>       
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิมพ์สัญญา     </font></div></th> 
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> พิมพ์ใบเสร็จ </font></div></th>  
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
										$sql2 = " SELECT * FROM mobile_restore 
											where bill_no != ''     and major = '".$major."'
											".$addcode.$addcode2.$addcode3.$addcode4.$addcode5."  
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
											
											
											$name_create_e1 = "";
											$name_create_e2 = "";
											$sql = " SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_create_e1 =  $objResult["create_by"];
												$name_create_e2 =  $objResult["create_time"];
											}  
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 
										 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["datesave2"])." ".DateThai2($objResult2["datesave2"]); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["customer"]; ?>  </font></div></td> 
										 
								  
								 
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["typerestore"]; ?>  </font></div></td> 
										 
								  
								  
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price1"]); ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price2"]); ?>  </font></div></td>
										  
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price4"]); ?>  </font></div></td> 
										   
										
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price2"] - $objResult2["price1"]); ?>  </font></div></td> 
								  
								  
								   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										คลิก   
										</font>  
										</a> 
										
										 
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
											$sql_v = "SELECT * FROM table_list_store where bill_no = '".$objResult2["bill_no"]."'   
											order by pk desc  ";   
											$query_v = mysqli_query($objCon,$sql_v);
											while($objResult_v = mysqli_fetch_array($query_v))
											{ 
													echo $ic.". ". $objResult_v["detail"] .
														" <br> <font color = 'red' > ทำรายการ : ". DateThai($objResult_v["save_key2"])." ".Datethai2($objResult_v["save_key2"]) . " </font>   <Br>
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
										
										
										</font></div></td>   
										  
								  
								  
								  
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<?php 
											
											if($objResult2["statuspayment"] == "รอชำระเงิน"){
												echo  " <font color = 'red' >  " . $objResult2["statuspayment"] . " </font> "; 
											}else{
												echo  " <font color = 'darkgreen' >  " . $objResult2["statuspayment"] . " </font> "; 
											} 
											
										?>  
										
										
										</font></div></td> 
										 
								 	 	 
										<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_e2; ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										 
										<a href="mobile_restore_edit.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&page=1"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										แก้ไข   
										</font>  
										</a> 
										
										</font></div></td>
										  
										  
										  
									  
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										 
										
										<a href="printbill_mobile_show.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์   
										</font>  
										</a> 
										
										 
										
										</font></div></td>
									 
									  
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										<?php  if($objResult2["statuspayment"] == "ชำระเงินแล้ว"){  ?>
										
										<a href="printbill_mobile.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์   
										</font>  
										</a> 
										
										<?php } ?> 
										
										</font></div></td>
										  
										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                     
                   		 	</div>
                   	  <?php } ?>
                   		    
                   		  
                  		       
                       <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql2 = "SELECT * FROM mobile_restore Where  bill_no = '". $_GET["bill_no"] ."' ";  
						$query2 = mysqli_query($objCon,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{  
							$bill_no  = $objResult2["bill_no"];
							$major  = $objResult2["major"];
							 
						?> 
                           
                  		 <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="mobile_restore.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกรายการรับซ่อมมือถือ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="mobile_restore_edit.php">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการรับซ่อมมือถือ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div> 
                         
                         
                          <div class="col-lg-12">
							<hr>
						  </div>
                        
                            
                      
                      
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
                        
                     	   
                      	  <form role="form" name="frmMain" method="post" action="save_mobile_restore_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
						   
						   <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>" >
  
                      	  
                      	  <input type="hidden" id="customerid" name="customerid" value=""  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value=""  >
                      	  <input type="hidden" id="productid" name="productid" value=""  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value=""  >
                      	  
				  		   <script>  
						  	function LoadDropdown() 
							{
							 var typerestore = document.getElementById("typerestore").value; 
						 
								 
							 if(typerestore == "อื่นๆ"){
							 document.getElementById("addother").style.display = "block"; /// ราคา   
							 }else {
							 document.getElementById("addother").style.display = "none"; /// ราคา   
							 } 
 
							 } 
						  </script>
                      	  
                           <div class="col-md-6" >   
                     
                     		<div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที </font>   
							  <input type="text" class="form-control current "  id="datesave" name="datesave" value="<?php echo $objResult2["datesave"]; ?>"  readonly    autocomplete="off"  required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"     >
							</div>
						    </div> 
                     	  
                     	  
                     	  
                     	   <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>    
							    <select class="form-control" id="major" name="major" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onchange="LoadDropdown()"   >  
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
							</div>
						  </div>
                     
				  		  <script>   
							function LoadDropdown()
							{   
								   
								var major = document.getElementById("major").value;    
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_major_cleam.php?major="+major,
									success: function(result) {
									$('#sendata').html(result);
									}
								});	  											
							}  
						  </script>
                     	  
                     	  
                     	  
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                     
                     		<div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อลูกค้า </font>   
							  <input type="text" class="form-control" id="customer" name="customer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;" value="<?php echo $objResult2["customer"]; ?>"     >
							</div>
						   </div>  
                    		
                     		<div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone" name="telphone"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10"   value="<?php echo $objResult2["telphone"]; ?>"     >
							</div>
						   </div>
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                    
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสหน้าจอ </font>   
							  <input type="text" class="form-control" id="proshow5" name="proshow5"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  value="<?php echo $objResult2["proshow5"]; ?>"    >
							</div>    
						  </div> 
                     
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							  <input type="text" class="form-control" id="proshow1" name="proshow1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   value="<?php echo $objResult2["proshow1"]; ?>"      >
							</div>
						  </div> 
							 
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   value="<?php echo $objResult2["proshow3"]; ?>"      >
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							  <input type="text" class="form-control" id="proshow2" name="proshow2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    value="<?php echo $objResult2["proshow2"]; ?>"      >
							</div>
						  </div> 
							   
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อีมี่ </font>   
							  <input type="text" class="form-control" id="proshow4" name="proshow4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    value="<?php echo $objResult2["proshow4"]; ?>"     >
							</div>
						  </div>  
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อื่น </font>   
							  <input type="text" class="form-control" id="proshow6" name="proshow6"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  value="<?php echo $objResult2["proshow6"]; ?>"      >
							</div>
						  </div>  
                     
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสลูกค้า (กรอกเอง) </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"    value="<?php echo $objResult2["codecustomer"]; ?>"   >
							</div>
						  </div>
                       
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รายการส่งซ่อม </font>   
							   <select class="form-control" id="typerestore" name="typerestore" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  onchange="LoadDropdown()"   >   
							    <?php 
								$sql = "SELECT * FROM drop_typerestore where name = '".$objResult2["typerestore"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore where name != '".$objResult2["typerestore"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>  
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      
                     	  <?php
								$HD = " display: none; ";
							if( $objResult2["typerestore"] == "อื่นๆ"){
								$HD = " display: block; ";
							}
							?>
                     	  
                     	  
                      	  <div class="col-md-12" style=" <?php echo $HD; ?> " id="addother"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อื่นๆ </font>   
							  <input type="text" class="form-control" id="proshow7" name="proshow7"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  value="<?php echo $objResult2["customer"]; ?>"       >
							</div>
						  </div>  
                     
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ส่งซ่อมที่ไหน </font>      
							   <select class="form-control" id="sendata" name="sendata" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   >  
								   <?php 
								$sql = "SELECT * FROM store_cleam where pk = '".$objResult2["sendata"]."' and major = '".$major."'  order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM store_cleam where pk != '".$objResult2["sendata"]."'  and major = '".$major."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>  
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      	  
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone1" name="telphone1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10"  value="<?php echo $objResult2["telphone1"]; ?>"    >
							</div>
						  </div>  
                      	   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone2" name="telphone2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10"  value="<?php echo $objResult2["telphone2"]; ?>"    >
							</div>
						  </div>
                      	  
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <hr> </font>    
							</div>
						  </div>
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อัพเดทสถานะ </font>   
							</div>
						  </div>
                     	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่ </font>   
							  <input type="text" class="form-control current " id="save_key" name="save_key"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $searchname; ?>"  >
							</div>
						  </div>
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > กรอกรายละเอียด </font>   
							  <input type="text" class="form-control" id="detail" name="detail"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  >
							</div>
						  </div>
                     	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > &nbsp; </font>  
							   <a onClick="save_drop()"        >
								<button type="button" id="savedrop"  class="btn btn-sm btn-primary" style=" background-color: #5DC9C1; border-radius: 5px; height: 38px; margin-top: 25px;   border-color: #FBFBFB;  " > <font color="#FFF" size="3px" class="serif1" > เพิ่มรายการ   </font> </button> </a>
							</div>
						  </div> 
                      	  
                      	  <div class="col-md-12"  >	
                           <div id="table_payment" >  
                  		    
                  		      
                  		    
						   </div>
						  </div>
                      	  <script language="javascript">
								 $( document ).ready(function() {   
										 getTabel_new_con();   
									});
							 	
							 	 function getTabel_new_con() { 
									var bill = document.getElementById("bill_no").value;
									  
									 
										$.ajax({
											type: "GET",
											url: "get_show_addtable_re.php?bill="+bill,
											success: function(result) {
												$('#table_payment').html(result);
											}
										});
									}
								    
							    
								 /// ปุ่มลบ เรียกเป็น Class แถน 
								 $(document).on('click', '.btn-delete-fuck1', function() {
									var int1 = $(this).attr('data-id');

									// alert(int1);
									$.ajax({
										type: "POST",
										url: "delete_list_store.php",
										data: {del:int1},
										success: function( ) {  
										 getTabel_new_con();  
										}
									});   
								});

							  
								 function save_drop()
								 { 
									var save_key = document.getElementById("save_key").value;
									var detail = document.getElementById("detail").value;
									var bill = document.getElementById("bill_no").value;
									 
									 var jsonString = "";  
										$.ajax({
											type: "POST",
											url: "save_detial_re.php?save_key="+save_key+"&detail="+detail+"&bill="+bill,
											contentType: 'application/json',
											data: jsonString,
											success: function( ) {  
												
												document.getElementById("detail").value = "";
												getTabel_new_con();  
										}
										});   
								 } 
							  
								 setInterval(function(){  
								  getTabel_new_con();  
								 }, 1000);
						  </script>
                      	  
                      	   
                      	   
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <hr> </font>    
							</div>
						  </div>
                      	   
                      	    
                      	   <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินมัดจำ </font>   
							  <input type="text" class="form-control   " id="price4" name="price4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $objResult2["price4"]; ?>" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()" >
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > กรอกต้นทุนงานซ่อม </font>   
							  <input type="text" class="form-control   " id="price1" name="price1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()"  value="<?php echo $objResult2["price1"]; ?>"    >
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group"> 
							   <font color = '#000' size="3px" > ราคาขายหน้าร้าน </font>   
							  <input type="text" class="form-control   " id="price2" name="price2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()" value="<?php echo $objResult2["price2"]; ?>"    >
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" >  กำไร </font>   
							  <input type="text" class="form-control   " id="price3" name="price3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   value="<?php echo $objResult2["price2"]-$objResult2["price1"]; ?>"    >
							</div>
							</div>
               		  	
							<script> 
							function calAge3()
							{  
								//// alert("ASDFADSF");
								var price1 = document.getElementById("price1").value; /// จำนวนวัน
								var price2 = document.getElementById("price2").value; /// ชำระต่อวัน 
	
								var daycal = 0;
								if(price1 == ""){

								}else{
									daycal = parseInt(price1);
								} 
								var daycal2 = 0;
								if(price2 == ""){

								}else{
									daycal2 = parseInt(price2);
								}
								
								var daypayment = (daycal2 - daycal); 
								
               		  
								document.getElementById("price3").value = addCommas(daypayment); 
							}
							</script>
               		  
               		    
               		  
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะ </font>   
							   <select class="form-control" id="statusave" name="statusave" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   >   
							    <?php 
								$sql = "SELECT * FROM drop_typerestore2 where name = '".$objResult2["statusave"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore2 where name != '".$objResult2["statusave"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>  
               		      <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะ Vat </font>   
							   <select class="form-control" id="statusavevat" name="statusavevat" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  >   
							    <?php 
								$sql = "SELECT * FROM drop_typerestore3 where name = '".$objResult2["statusavevat"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore3 where name != '".$objResult2["statusavevat"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>  
              		      
              		      
              		      <?php if($objResult2["statuspayment"] == "ชำระเงินแล้ว"){ ?>
              		      
              		      <?php }else{ ?>
              		       
               		      <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะชำระเงิน </font>   
							   <select class="form-control" id="statuspayment" name="statuspayment" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  >   
							    <?php 
								$sql = "SELECT * FROM drop_typerestore4 where name = '".$objResult2["statuspayment"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>       
							    <?php 
								$sql = "SELECT * FROM drop_typerestore4 where name != '".$objResult2["statuspayment"]."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>  
							    </select>
							</div>
						  </div> 
               		  
              		      <?php } ?>
              		      
              		      
              		      
              		      
              		      
               		  
							  <div class="col-md-6"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($objResult2["bank"])){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$objResult2["bank"]."' order by pk asc  "; 
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
									$sql_pay = "SELECT * FROM bank2 where pk != '".$objResult2["bank"]."' order by pk asc  "; 
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
                  		  
                  		  
                     	  
                     	   <div class="col-md-5"  >	
							  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
									<link rel="stylesheet" href="upload_image2/css/style.css"> 
									<script src="upload_image2/js/app.js"></script> 
									
									<ul id="media-list" class="clearfix">
									
									<?php 
											$sql = "SELECT * FROM product_img where bill_no = '".$objResult2["bill_no"]."'   order by pk asc  ";   
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
                     	  
                     	  
                     	  
                     	  
                     	  
                     	  
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <hr> </font>    
							</div>
						  </div>
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  
							  <a href="mobile_restore_edit.php"> 
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
                            
					   	  </form> 
                  		      
                          
                          <?php } } } ?>
                          
                          
                           
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
							  function addCommas(nStr)
								{
									nStr += '';
									x = nStr.split('.');
									x1 = x[0];
									x2 = x.length > 1 ? '.' + x[1] : '';
									var rgx = /(\d+)(\d{3})/;
									while (rgx.test(x1)) {
										x1 = x1.replace(rgx, '$1' + ',' + '$2');
									}
									return x1 + x2;
								}
							  </script>
<?php
include('footer2.php');
?>