<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 
	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}  
	 
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	 
 
 
	$tanaidata = "";
	if(empty($_GET["tanaidata"])){
		
	}else{
		$tanaidata = $_GET["tanaidata"];
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


		$searchtype = "";
		if(empty($_GET["searchtype"])){

		}else{
			$searchtype = $_GET["searchtype"];
		}


		$shdd1 = " display:  none; ";
		$shdd2 = " display:  none; ";
		if($searchtype == "ประเภทเดือนปี"){
			$shdd1 = "   ";
			$shdd2 = " display:  none; ";
		}
		if($searchtype == "ประเภทวัน"){
			$shdd1 = " display:  none; ";
			$shdd2 = "   ";

		}




?> 
        
			<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        											
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                    	  
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
                     	  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  กำหนดค่าใช้จ่ายดำเนินคดี   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > กำหนดค่าใช้จ่ายดำเนินคดี   </font>   
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
                     <font size="4px" color="#000000">  กำหนดค่าใช้จ่ายดำเนินคดี   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
                        
                      	<form action="paper_tanai2.php" method="get" >
                  		    
                    	 <div   class="col-lg-5"  align="left"   > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> โปรดเลือกทนาย </font>

								   <select class="form-control myselect" id="tanaidata" name="tanaidata" required style=" width: 100%;" onchange='this.form.submit()'     > 
									<?php if(empty($tanaidata)){ ?>
									<option value=""> โปรดเลือกทนาย </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM member_all where pk = '".$tanaidata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM member_all where pk != '".$tanaidata."' and status = 'T'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{    
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td>   

							</tr>
						</table>  
						 </div>
                         
						</form>
                 		 
                 		 
                    	 <div   class="col-lg-12"  align="left" style=" margin-top: 15px; "   >  </div> 
                       
                       
                          <?php
							$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										
										
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}
										 
									}
							?>
                        
                      	<form action="paper_tanai2.php" method="get" >
                      	<input type="hidden" id="tanaidata" name="tanaidata" value="<?php echo $tanaidata; ?>">
                  		    
                    	 <div   class="col-lg-5"  align="left"   > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </font>

								   <select class="form-control myselect" id="bill_no" name="bill_no"   style=" width: 100%;" onchange='this.form.submit()'     > 
									<?php if(empty($bill_no)){ ?>
									<option value=""> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										
										
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM list_order where bill_no != '".$bill_no."' and tanaidata = '".$tanaidata ."' and tanaidata != ''  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td>   

							</tr>
						</table>  
						 </div>
                     
                     
                    	  <div   class="col-lg-7"  align="right"  > 
						<div style=" margin-top: 5px; "></div>
						
						<?php
						$txt1 = "#FF7403";
						$txt2 = "#0B9444";
						$txt3 = "#DA0706";
						$txt4 = "#7239E9";
						$txt5 = "#000";
							
						$btn1 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #FF7403;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn2 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #0B9444;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn3 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #DA0706;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn4 = "  background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #7239E9;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
	
	
						$btn5 = "  background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #7239E9;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							 
							
							
						if($searchtype == "รอดำเนินคดี"){
						$txt1 = "#FFF";
						$btn1 = "  background-color: #FF7403; border-radius: 5px;   height: 40px;  border: 1px solid  #FF7403;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						} 
						if($searchtype == "อยู่ในระหว่างไกล่เกลี่ย"){
						$txt2 = "#FFF";
						$btn2 = "  background-color: #0B9444; border-radius: 5px;   height: 40px;  border: 1px solid  #0B9444;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						}
						if($searchtype == "อยู่ในระหว่างฟ้องร้อง"){
						$txt3 = "#FFF";
						$btn3 = "  background-color: #FA7123; border-radius: 5px;   height: 40px;  border: 1px solid  #DA0706;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						}
						if($searchtype == "คดีเสร็จสิ้นแล้ว"){
						$txt4 = "#FFF";
						$btn4 = "  background-color: #7239E9; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #7239E9;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						} 
							
													 
						$total1 = 0;
						$total2 = 0;
						$total3 = 0;
						$total4 = 0;
													  					 
					 	$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != ''   
						and  (a.tanai_status1 = 'รอดำเนินคดี' or a.tanai_status1 = '')  
						group by a.codecustomer 
						order by a.pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
							$total1++;
						}					 
					 	$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != ''   
						and (a.tanai_status1 = 'อยู่ในระหว่างไกล่เกลี่ย' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/ผ่อนต่อ' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/คืนเครื่อง')
						group by a.codecustomer 
						order by a.pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
							$total2++;
						}			 
					 	$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != ''   
						and a.tanai_status1 = 'อยู่ในขั้นดำเนินคดี'
						group by a.codecustomer 
						order by a.pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
							$total3++;
						}			 
					 	$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != ''   
						and a.tanai_status1 = 'คดีเสร็จสิ้นแล้ว'
						group by a.codecustomer 
						order by a.pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
							$total4++;
						}
						?>
						  <a href="paper_tanai2_execel.php?&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>" target="_blank">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn5; ?> "> <font color="<?php echo $txt5; ?>" size="2px" class="serif1" > Export Execel  </font> </button> 

						  </a>
						  
						   
						  <a href="paper_tanai2.php?searchtype=รอดำเนินคดี&tanaidata=<?php echo $tanaidata; ?>">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?> "> <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >  รอดำเนินคดี <?php echo number_format(0+$total1); ?>  </font> </button> 

						  </a>
						  <a href="paper_tanai2.php?searchtype=อยู่ในระหว่างไกล่เกลี่ย&tanaidata=<?php echo $tanaidata; ?>">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn2; ?> "> <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >  อยู่ในระหว่างไกล่เกลี่ย  <?php echo number_format(0+$total2); ?> </font> </button> 

						  </a>
						  <a href="paper_tanai2.php?searchtype=อยู่ในระหว่างฟ้องร้อง&tanaidata=<?php echo $tanaidata; ?>">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn3; ?> "> <font color="<?php echo $txt3; ?>" size="2px" class="serif1" >  อยู่ในระหว่างฟ้องร้อง  <?php echo number_format(0+$total3); ?> </font> </button> 

						  </a>
						  <a href="paper_tanai2.php?searchtype=คดีเสร็จสิ้นแล้ว&tanaidata=<?php echo $tanaidata; ?>">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn4; ?> "> <font color="<?php echo $txt4; ?>" size="2px" class="serif1" >  คดีเสร็จสิ้นแล้ว  <?php echo number_format(0+$total4); ?> </font> </button> 

						  </a> 
						
						
						</div>
						
						
						
                    	 <div   class="col-lg-12"  align="left" style=" margin-top: 15px; "   >  </div> 
						
						
						
						<input type="hidden" id="typeselect" value="">
						<input type="hidden" id="onoff" value="">

						<div  align="left" class="col-md-5"  >  
							<table width="50%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px; box-shadow: none;  "   onchange="myFunction1()"    >  

										 <?php if(empty($searchtype)){ ?>
										 <option value="">  ประเภทการค้นหา    </option> 
										 <?php } ?>

											<?php 
											$sql = "SELECT * FROM drop_type  where name = '".$searchtype."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_type  where name != '".$searchtype."'  order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA; box-shadow: none;  " type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>

										</td>    
									</tr>
							</table>     


							<table width="100%" id="showsearchdata1" style=" <?php echo $shdd1; ?> ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  box-shadow: none;   "    >  
										 
										 <?php if(empty($month)){ ?>
										 <option value="">  เลือกเดือน    </option> 
										 <?php } ?>
										 
											 
											<?php 
											$sql = "SELECT * FROM month  where   statusdata = '".$month."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											 
											<?php 
											$sql = "SELECT * FROM month where   statusdata != '".$month."'  order by pk asc  "; 
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
										 <select class="form-control" id="year" name="year"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  box-shadow: none;   "   >
										 
										 <?php if(empty($year)){ ?>
										 <option value="">  เลือกปี    </option> 
										 <?php } ?>
										   
											<?php 
											$sql = "SELECT * FROM year where year = '".$year."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM year  where year != '".$year."'    order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none;  " type="submit" onClick="Loaddatashow()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>


										</td> 
								</tr>
							</table>   

							<table width="100%" id="showsearchdata2" style=" <?php echo $shdd2; ?> ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control   current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  box-shadow: none;    "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" onClick="Loaddatashow()" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>


										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control   current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  box-shadow: none;    "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none;  " type="submit"   >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>


										</td> 
									</tr>
							</table>   

						 </div>
						 
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
						$addcode = " and ( b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'  )  ";
					}
					$addcode2 = "";  


					if($searchtype == ""){
						$addcode2 = "  ";  	 
					} 
					if($searchtype == "รอดำเนินคดี"){
						$addcode2 = " and  (a.tanai_status1 = 'รอดำเนินคดี' or a.tanai_status1 = '')  ";  	 
					}
					if($searchtype == "อยู่ในระหว่างไกล่เกลี่ย"){
						$addcode2 = "  and (a.tanai_status1 = 'อยู่ในระหว่างไกล่เกลี่ย' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/ผ่อนต่อ' or a.tanai_status1 = 'อยู่ในขั้นตอนระหว่างไกล่เกลี่ย/คืนเครื่อง') ";  	  
					}
					if($searchtype == "อยู่ในระหว่างฟ้องร้อง"){
						$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างฟ้องร้อง'  ";  	  
					}
					if($searchtype == "คดีเสร็จสิ้นแล้ว"){
						$addcode2 = "  and a.tanai_status1 = 'คดีเสร็จสิ้นแล้ว'  ";  	  
					}
					$addcode = "";
					if(empty($_GET["bill_no"])){

					}else{
						$addcode = " and  a.bill_no like '%".$bill_no."%'   ";
					}
													  
					$contactstart = date("Y-m-d", strtotime($daystart_load));  
					$checkend = date("Y-m-d", strtotime($daystart_load2)); 
					$addcode3 = "    "; 

					if($searchtype == "ประเภทเดือนปี"){

						$datadate  = "01-".$month."-".$year;		 			   
						$contactstart = date("Y-m-d", strtotime($datadate)); 
						$datadate2 = date('Y-m-t',strtotime($datadate));   
						$checkend = date("Y-m-d", strtotime($datadate2)); 
						$addcode3 = " and (a.create_date2 BETWEEN '".$contactstart."' and '".$checkend."')   "; 
					}
					if($searchtype == "ประเภทวัน"){ 
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load2)); 
						$addcode3 = " and (a.create_date2 BETWEEN '".$contactstart."' and '".$checkend."')   "; 

					}


					$sql2 = " SELECT a.*, b.name FROM list_order a 
					Inner Join customer b On a.customer = b.pk
					where a.bill_no != '' and a.tanaidata = '". $tanaidata ."' and a.tanaidata != ''  
					".$addcode.$addcode2.$addcode3."  
					order by a.pk asc    "; 

					////   echo $sql2;
					$query2 = mysqli_query($objCon, $sql2);
					$total_record = mysqli_num_rows($query2);
					$total_page = ceil($total_record / $perpage);
					 ?>  
					<?php if (ceil($total_record / $perpage) > 0): ?>
						 <ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="paper_tanai2.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="paper_tanai2.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="paper_tanai2.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="paper_tanai2.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="paper_tanai2.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paper_tanai2.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paper_tanai2.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="paper_tanai2.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="paper_tanai2.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>&tanaidata=<?php echo $tanaidata; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>">Next</a></li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>

					</div>    
                            
					    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					<div class="table-responsive"  >
					<table id="key_product"  class=" tables    tablemobile  " border="0" style=" width: 1400px;  "    >
					 <thead> 
					 <tr>
						<th width="3%" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  บันทึก    </font></div></th> 
						<th width="4%" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่สัญญา    </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รหัสลูกค้า  </font></div></th>       
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า     </font></div></th>      
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดค้าง     </font></div></th>     
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด     </font></div></th>       
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ    </font></div></th> 
						
						       
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี    </font></div></th>  
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด    </font></div></th>  
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทั้งสิ้น    </font></div></th> 
						            
						                  
						                        
						                              
						                                    
						                                          
						                                                      
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบดำเนินคดี     </font></div></th>    
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคดี     </font></div></th>     
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทนายรับเคส   </font></div></th>   
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี   </font></div></th>
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะชำระ   </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล   </font></div></th>     
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

						if (empty($_GET['page2'])) { 
							$i = 1;
						}else if (($_GET['page2'] == 1)) { 
							$i = 1;
						}else{

							$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
						}

						$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '". $tanaidata ."'   and a.tanaidata != '' 
						".$addcode.$addcode2.$addcode3."  
						order by a.pk asc  limit {$start} , {$perpage}   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

						if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
						}else{  
							$bg = "#FFF"; 
						} 

						$bill_no = $objResult2["bill_no"]; 
						$codecustomer = $objResult2["codecustomer"]; 
						$create_date = $objResult2["create_date"]; 
						$create_time = $objResult2["create_time"]; 
						$name_major = "-"; 
						$name_create = ""; 	

						$sql_c = " SELECT * FROM member_all  where pk = '".$objResult2["tanaidata"]."'   order by pk asc     ";   
						$query_c = mysqli_query($con,$sql_c); 
						while($objResult_c = mysqli_fetch_array($query_c))
						{       
							$name_create = $objResult_c["name"];
						}  
 
							$bill_no = $objResult2["bill_no"]; 
							$room = $objResult2["room"]; 
							$menu_id = $objResult2["menu_id"]; 
							$money = $objResult2["money"]; 
							$daytotal = $objResult2["daytotal"]; 
							$dayprice = $objResult2["dayprice"];  
							$daytotal2 = $objResult2["daytotal2"];  
							$startdate = $objResult2["startdate"];  
							$endate = $objResult2["endate"];  
							$total = $objResult2["total"];  
							$codecustomer = $objResult2["codecustomer"];  
							$moneydown = $objResult2["moneydown"];  
							$moneydata = $objResult2["moneydata"];  
							$pasy = $objResult2["pasy"];  
							$cod = $objResult2["cod"];  
							$moneycontact = $objResult2["moneycontact"];  
							$percent = $objResult2["percent"];  
							$computer = $objResult2["computer"];  
							$computer2 = $objResult2["computer2"];  
							$priceorder = $objResult2["priceorder"];  
							$major = $objResult2["major"];  
							$customer = $objResult2["customer"];  
							$endold = $objResult2["endold"];  
							$dateold = $objResult2["dateold"];  
							$bank2 = $objResult2["bank"];  
							$pasycal = $objResult2["pasycal"];  
							$qrdata = $objResult2["qrdata"]; 
							$allday = $objResult2["allday"]; 
							$appleid = $objResult2["appleid"]; 
							$password = $objResult2["password"]; 
							$contactstatus = $objResult2["contactstatus"]; 


							$discoount = 0;
							$discoountpaymentother = 0;
							$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
							$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql_m = "SELECT * FROM history_payment Where  
							bill_no = '". $bill_no ."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_m = mysqli_query($objCon,$sql_m); 
							while($objResult_m = mysqli_fetch_array($query_m))
							{  
								if(!empty($objResult_m["income"])){
								$discoount += $objResult_m["income"]; 

								}
								if(!empty($objResult_m["paymentother"])){
								$discoountpaymentother += $objResult_m["paymentother"]; 
								}  
							}	

							$allmoney = ($dayprice*$daytotal)-$discoount;
							

							$chk_total = $objResult2["totalno_payment"];
							$tanai_status1 = $objResult2["tanai_status1"];
							$tanai_status2 = $objResult2["tanai_status2"];
							$tanai_status3 = $objResult2["tanai_status3"];
							$tanai_payment = $objResult2["tanai_payment"];
							
							$tanai_momey1 = $objResult2["tanai_momey1"];
							$tanai_momey2 = $objResult2["tanai_momey2"];
							$tanai_momey3 = $objResult2["tanai_momey3"];
							$tanai_momey4 = $objResult2["tanai_momey4"];
							$tanai_momey5 = $objResult2["tanai_momey5"];

							$priceother = 0;
							$priceothershow = " ................ ";
							if(!empty($objResult2["priceother"])){
								$priceother = $objResult2["priceother"];
								$priceothershow = $objResult2["priceother"];
							}

							
							
							if($tanai_payment == "รอชำระ"){ 
									$txtshow = " รอชำระ ";
									$hdd =  " "; 
									$bgbtn = " #FF7403  "; 
							}else if($tanai_payment == "ชำระแล้ว"){
									$txtshow = " ชำระแล้ว ";
									$hdd = "  "; 
									$bgbtn = " #0B9444  "; 
							}else{
									$txtshow = " รอชำระ ";
									$hdd = "    "; 
									$bgbtn = " #DA0706  ";  
							}
					?>
					<tr style="background-color: <?php echo $bg ?>; "> 

				 
				 	 <td style=" border-bottom: 1px dashed #E0E3E9; " height="55px;"><div align="center"><font size="3px" color="<?php echo $txt; ?>" style=" font-size: 13px; " > 
									
					 <a onClick="savepk<?php echo $i; ?>()"  id="savedataallpk<?php echo $i; ?>"  class="btn btn-sm" style=" background-color: #1766AD; border-radius: 5px; cursor: pointer; margin-top: -5px;   <?php echo $showbtn; ?> "    >
					 <font size="3px" color="white"style=" font-size: 13px; "   >   บันทึก    </font>
					 </a>   

					  <script language="javascript">
					 function savepk<?php echo $i; ?>()
					 { 	 
						 document.getElementById("savedataallpk<?php echo $i; ?>").style.backgroundColor  = "#FF0000"; 

						 alert(" บันทึกสำเร็จ ");

							var int1 = document.getElementById("idbill<?php echo $i; ?>").value;   /// บิล     
							var int2 = document.getElementById("getmoney1<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var int3 = document.getElementById("getmoney2<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							var int4 = document.getElementById("getmoney3<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var int5 = document.getElementById("getmoney4<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							 
							var totalold = document.getElementById("totalold<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							 
							var Acal = 0;
							var Bcal = 0;
							var Ccal = 0;
							var Dcal = 0;
							if(int2 == ""){
								
							}else{
								Acal = parseFloat(int2);
							}
							if(totalold == ""){
								
							}else{
								Bcal = parseFloat(totalold);
							}
							if(int4 == ""){
								
							}else{
								Ccal = parseFloat(int4);
							}
							if(int5 == ""){
								
							}else{
								Dcal = parseFloat(int5);
							}
							 
							var Totaldata = Bcal - Acal; 
							document.getElementById("showprice<?php echo $i; ?>").innerHTML  = Totaldata;
							 
							 
							if(Totaldata <= 0){
								Totaldata = 0;
							}
							 
							 var Totaldatasave = (Totaldata + Ccal) - Dcal;
							document.getElementById("showprice2<?php echo $i; ?>").innerHTML  = Totaldatasave;
							 
										
							///// alert( "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key );
							var jsonString = ""; 
							$.ajax({
							type: "POST",
							url: "save_payment_tanai2.php?bill_no="+int1+"&getmoney1="+int2+"&getmoney2="+Totaldata+"&getmoney3="+Ccal+"&getmoney4="+Dcal+"&getmoney5="+Totaldatasave,
							contentType: 'application/json',
							data: jsonString,
							success: function(result) {
							//alert(result);
							}
							});
										 
							 
							 
					 }
					 </script>

					</font></div></td> 	
					
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $bill_no; ?> </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $codecustomer; ?> </font></div></td> 
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $objResult2["name"]; ?> </font></div></td> 
					
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$allmoney); ?> </font></div></td> 
					 
					  
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 <input type="hidden" id="idbill<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>"   > 
					 
					 <input type="text" name="getmoney1<?php echo $i; ?>" id="getmoney1<?php echo $i; ?>"  value="<?php echo $tanai_momey1; ?>"     style=" font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"       >
					 
					 </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					 <font id="showprice<?php echo $i; ?>" > <?php echo $tanai_momey2; ?> </font>
					 
					 
					 <input type="text" name="getmoney2<?php echo $i; ?>" id="getmoney2<?php echo $i; ?>"  value="<?php echo $tanai_momey2; ?>"     style=" display: none; font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"       >
					 
					 
					 <input type="hidden" id="totalold<?php echo $i; ?>" value="<?php echo $allmoney; ?> ">
					 
					 	 
					 </font></div></td> 
					 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					 <input type="text" name="getmoney3<?php echo $i; ?>" id="getmoney3<?php echo $i; ?>"  value="<?php echo $tanai_momey3; ?>"     style=" font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"       >
					 
					 </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					 <input type="text" name="getmoney4<?php echo $i; ?>" id="getmoney4<?php echo $i; ?>"  value="<?php echo $tanai_momey4; ?>"     style=" font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"       >
					 
					 </font></div></td> 
					 
					 
					  <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					 <font id="showprice2<?php echo $i; ?>" > <?php echo $tanai_momey5; ?> </font>
					 
					 <input type="text" name="getmoney5<?php echo $i; ?>" id="getmoney5<?php echo $i; ?>"  value="<?php echo $tanai_momey5; ?>"     style=" display: none; font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"       >
					 
					 
					 
					 <script language="javascript">
						 function IsNumeric<?php echo $i; ?>()
						 { 
							var int1 = document.getElementById("idbill<?php echo $i; ?>").value;   /// บิล     
							var int2 = document.getElementById("getmoney1<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var int3 = document.getElementById("getmoney2<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							var int4 = document.getElementById("getmoney3<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var int5 = document.getElementById("getmoney4<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							 
							var totalold = document.getElementById("totalold<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							 
							var Acal = 0;
							var Bcal = 0;
							var Ccal = 0;
							var Dcal = 0;
							if(int2 == ""){
								
							}else{
								Acal = parseFloat(int2);
							}
							if(totalold == ""){
								
							}else{
								Bcal = parseFloat(totalold);
							}
							if(int4 == ""){
								
							}else{
								Ccal = parseFloat(int4);
							}
							if(int5 == ""){
								
							}else{
								Dcal = parseFloat(int5);
							}
							 
							var Totaldata = Bcal - Acal; 
							document.getElementById("showprice<?php echo $i; ?>").innerHTML  = Totaldata;
							 
							 
							if(Totaldata <= 0){
								Totaldata = 0;
							}
							 
							 var Totaldatasave = (Totaldata + Ccal) - Dcal;
							document.getElementById("showprice2<?php echo $i; ?>").innerHTML  = Totaldatasave;
							 
										  
							 
							 
						 }
						 </script>
						 
						 
					 </font></div></td> 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status1; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status2; ?> </font></div></td> 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $name_create; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$priceother); ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="<?php echo $bgbtn; ?>" style=" font-size: 13px; "  class="serif"> 
						
							
								<div align="center"   >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: 5px;     "     id="btnsave<?php echo $objResult2["pk"];?>" data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""  >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdatathree<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
								</font>
								</div>
								 
							
								 <!-- Modal -->
								<div class="modal fade" id="myEodal1<?php echo $objResult2["pk"]; ?>" role="dialog" style=" margin-top: 75px; ">
								<div class="modal-dialog modal-md"> 
								<!-- Modal content-->
									<div class="modal-content">
									<div class="modal-header">
									<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $objResult2["bill_no"]; ?> </font> 
									<button type="button" id="closepop<?php echo $objResult2["pk"]; ?>"  class="close" data-dismiss="modal">&times;</button>
									</div> <br>
									<center>  
									<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
									<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  
 

									<font size="3px" style=" font-size: 16px; " color="#000">  

									<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
									<input type="hidden" id="checkpass<?php echo $objResult2["pk"]; ?>" value="1" >

									<script> 
									function 
									Canceldatabill<?php echo $objResult2["pk"]; ?>( ) { 
										 
										var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value; 
										var checkpass = document.getElementById("checkpass<?php echo $objResult2["pk"]; ?>").value; 
										var statusbill = document.getElementById("statusbill<?php echo $objResult2["pk"]; ?>").value;
										var passportadmin = "";

										 
											////documen 
											check_status_save = ""+statusbill;  
											//// alert(" A " + check_status_save);
										 
											if(check_status_save == "ชำระแล้ว"){
										
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#0B9444"; 
												
											}else if(check_status_save == "รอชำระ"){
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#FF7403";
												 
												
											} else {
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = " รอชำระ "; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#FF7403";
												 
												
											} 
 
										
										
										
										///// alert( "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key );
										var jsonString = ""; 
										$.ajax({
										type: "POST",
										url: "save_payment_tanai.php?status="+check_status_save+"&bill_no="+save_key,
										contentType: 'application/json',
										data: jsonString,
										success: function(result) {
										//alert(result);
										}
										});
										 

										 
  
										 document.getElementById("closepop<?php echo $objResult2["pk"]; ?>").click(); 
										
									}

									</script> 
 
									<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $objResult2["pk"]; ?>"   >    
									  
									 
										<div class="col-md-12" style="  "  > 
										 
 
											 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> <b>  สถานะชำระ    </b>  </font> 
											 
											 <select class="form-control  " id="statusbill<?php echo $objResult2["pk"]; ?>" name="statusbill<?php echo $objResult2["pk"]; ?>" required style=" width: 100%; color: #000; border: 1px solid #CACACA; height: 40px;  border-radius: 10px; background-color: #FFF; box-shadow: none;"   >  

												<?php 
												$sql = "SELECT * FROM dropppaymnet where name = '".$tanai_payment."'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  

												?>
												<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
												<?php  
												}
												?>   
												<?php 
												$sql = "SELECT * FROM dropppaymnet where name != '".$tanai_payment."'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{   

												?>
												<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
												<?php  
												}
												?>    
												</select>  
										  
										</div>  
										
										<div class="col-lg-12" style="  "  >   
										  <div class="form-group">     
 
										  <button type="button" class="btn btn-primary" style="background-color: #0199A7; border-radius: 5px; width: 100%; height: 40px; border-color: #0199A7; margin-top: 15px; "  onClick='Canceldatabill<?php echo $objResult2["pk"]; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 
 

										 </div> 
										 </div>
 
									 

									 </div>

									<div style=" margin-top: 20px; " > &nbsp; </div>  

									</font>  
									</div>
									</div>
									</center>
									</div>
								</div>
								</div>  
						
					</font></div></td> 
					
					 
					  
					   
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif">

					 <a href="viewdatacontact.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"  > 
						<button type="button" class="btn btn-sm" style="background-color: #0199A7; border-radius: 5px;  border-color: #0199A7; margin-top: 5px; "  > <font color="#FFF" size="2px" class="serif1" style="  font-size: 13px; " >    คลิก   </font> </button>   
					 </a>

					 </font></div></td>  
						
							
					</tr>  
					<?php $i++; } ?>
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