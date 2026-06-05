<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	
	$status = "";
	if(empty($_GET["type"])){
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


		$searchname2 = date('d/m')."/".(date('Y'));
		if(empty($_GET["searchname2"])){

			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname2 = $_GET["searchname2"];



			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		}
	}else{ 
		$searchname2 = date('m');
		if(empty($_GET["searchname2"])){

		}else{
			$searchname2 = $_GET["searchname2"];
		}

		$searchname = date('Y');
		if(empty($_GET["searchname"])){

		}else{
			$searchname = $_GET["searchname"];
		}
	}
	
	 
	$type = "";
	if(empty($_GET["type"])){

	}else{
		$type = $_GET["type"];
	}
 
	$major = "1";  
	$getmajorline = "1";
	$getmajorline2 = "1"; 
?> 
        
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกหักค่าทุนและค่าใช้จ่าย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกหักค่าทุนและค่าใช้จ่าย  </font>   
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
                     <font size="4px" color="#000000">  บันทึกหักค่าทุนและค่าใช้จ่าย   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                 
                      <?php if(empty($_GET["page"])){ 
					
							$addcode = "";
							$addcode2 = "";
							 
							$month = "";
							if(empty($_GET["month"])){
								$month = date('m');
							}else{
								$month = $_GET["month"];
							} 
							$year = "";
							if(empty($_GET["year"])){
								$year = date('Y'); 
							}else{
								$year = $_GET["year"];
							}  


							
							if(empty($_GET["type"])){

							$contactstart = date("Y-m-d", strtotime($daystart_load));  
							$checkend = date("Y-m-d", strtotime($daystart_load2));

							}else if($_GET["type"] == "month"){
								 $year = $searchname2;
								 $datadate  = "01-".$searchname."-".$year;				   
								 $datadate2  = "31-".$searchname."-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2));  

								 $daystart_load2 = $checkend;

							}else if($_GET["type"] == "year"){
								 $year = $searchname2;
								 $datadate  = "01-01-".$year;				   
								 $datadate2  = "31-12-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2)); 


								 $daystart_load2 = $checkend;
							} 
									
							
							$addcode2 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
					
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
                      
                        <div class="col-lg-12"> <hr>  </div>
                        
                    	 
                    	     <select class="form-control" id="majorline" name="majorline" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px; display: none; "  onchange="LoadDropdown()"   >  
							<?php 
							$sql = "SELECT * FROM major where pk = '".$major."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							?>
							<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
							<?php  
							}
							?>      
							</select> 
                 	   
							  
                   	     
                        
                   	     
                   	     	  <?php
								$hd = "none";
								if(!empty($getmajorline)){
									$hd = "block";
								} 
							  ?>
                   	      
                  	 		  <div class="col-lg-12"  align="left" style="margin-top: 15px; display: <?php echo $hd; ?>; "  id="showcustomer"   >  
                  	 		 
                  	 		   
                 	 		    <?php if(empty($_GET["type"])){ ?>

								<div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 

								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr>
								</table>

								</div>


								<div class=" col-lg-12 "  align="left" >  <hr>   </div>


								<form action="add_price_payment_add.php" method="get" >
								<input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
								<input type="hidden" id="page" name="page" value="" >


								<div   class="col-lg-4"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;   </td>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
									</tr>
								</table>  
								</div>
								
								
							   
								  <div  class="col-lg-8"   align="right">
									   
									  <a href="select_payment.php"> 
									  <button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
									  <font color="#FFF" size="2px" class="serif1" >  เพิ่ม / ลบ / แก้ไข  </font> 
									  </button>  
									  </a>
									  
								  </div>
								  
								  
								  
								</form>

							   <?php }else if($_GET["type"] == "month"){ ?>


							   <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 

								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr> 
								</table>

								</div>

								<div class=" col-lg-12 "  align="left" >  <hr>   </div>


								 <form action="add_price_payment_add.php" method="get" >
								 <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
								 <input type="hidden" id="page" name="page" value="" >
								 <input type="hidden" id="type" name="type" value="month" >



 
								   <div   class="col-lg-4"  align="left"  > 
									<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เดือน    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 

										<select   name="searchname" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "   > 
										<?php 
												$sql = "SELECT * FROM month where statusdata = '".$searchname."' order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
											?>
												<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
												}
											?>    
											<?php 
												$sql = "SELECT * FROM month where statusdata != '".$searchname."' order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;   </td>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										<select  name="searchname2" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
											<?php 
												$sql = "SELECT * FROM year where year = '".$searchname2."' order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
											?>
												<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
												}
											?>    
											<?php 
												$sql = "SELECT * FROM year where year != '".$searchname2."' order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
									</tr>
								</table>  
									</div>
							    
							   
									  <div  class="col-lg-8"   align="right"> 
									  <a href="select_payment.php"> 
									  <button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
									  <font color="#FFF" size="2px" class="serif1" >  เพิ่ม / ลบ / แก้ไข  </font> 
									  </button>  
									  </a>
									  </div>

								  
								   </form>



							   <?php }else if($_GET["type"] == "year"){ ?>

							   <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 

								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_payment_add.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr>
								</table>

								</div>



								<div class=" col-lg-12 "  align="left" >  <hr>   </div>


								  <form action="add_price_payment_add.php" method="get" >
								  <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
								  <input type="hidden" id="page" name="page" value="" > 
								  <input type="hidden" id="type" name="type" value="year" >


								   <div   class="col-lg-3"  align="left"  > 
									<table width="100%">
									<tr>   
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										<select  name="searchname2" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
											<?php 
												$sql = "SELECT * FROM year where year = '".$searchname2."' order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
											?>
												<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
												}
											?>    
											<?php 
												$sql = "SELECT * FROM year where year != '".$searchname2."' order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
									</tr>
								</table>  
								</div>
							   
							   
							   
							   
								  <div  class="col-lg-9"   align="right"> 
									  <a href="select_payment.php"> 
									  <button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
									  <font color="#FFF" size="2px" class="serif1" >  เพิ่ม / ลบ / แก้ไข  </font> 
									  </button>  
									  </a>
								  </div>
								  
								  
								   </form>

							   <?php } ?> 
                 	 		   
                  	 		 
                  	 		 
                 	 		  
                    		<div id="showtotalprice"  >
                  	 		  
   							<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							   
										<tbody> 
									 	<?php 
										$bg = "#F8FAFD";  
										$i = 1;
										$total1 = 0;
										$total2 = 0;
										$total3 = 0;
										$total4 = 0;
										$total5 = 0;
										$total6 = 0;
										$total7 = 0;
										$total8 = 0;
										$total9 = 0;

 
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
										$price1 = 0;
										$price2 = 0;
										$price3 = 0;
										$price4 = 0;
										$price5 = 0;
										$price6 = 0;
										$price7 = 0;
										$price8 = 0;
										$price9 = 0;
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM payment_other  
											where  price != ''  
											and major = '".$major."'
											".$addcode.$addcode2."  
											Group By create_date
											order by  create_date2 asc     ";  
	 
										//// echo $sql2;
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										} 
											  
										$price1 = 0;
										$price2 = 0;
										$price3 = 0;
										$price4 = 0;
										$price5 = 0;
										$price6 = 0;
										$price7 = 0;
										$price8 = 0;
										$price9 = 0;
										$sql = " SELECT * FROM payment_other  
											where  price != ''  
											and major = '".$major."'   and create_date2 = '".$objResult2["create_date2"]."'
											order by  pk asc     "; 
											
											
										//// echo $sql . "  <br> ";
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
											if($objResult["typedata"] == "ค่าเช่า"){
												
											$price1 +=  $objResult["price"];
												
											}else if($objResult["typedata"] == "ค่ายิงแอด"){
												
											$price2 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าส่งของ"){
												
											$price3 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าพนักงาน"){
												
											$price4 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าโทรศัพท์"){
												
											$price5 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าเน็ต"){
												
											$price6 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าน้ำ"){
												
											$price7 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าไฟ"){
												
											$price8 +=  $objResult["price"];
											}else if($objResult["typedata"] == "ค่าใช้จ่ายอื่นๆ"){
												
											$price9 +=  $objResult["price"];
												
											} 
										}
											  
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price2); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price3); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price4); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price5); ?> </font></div></td> 
								 

										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price6); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price7); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price8); ?> </font></div></td> 
								 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price9); ?> </font></div></td> 
								 
										  
										</tr>  
										<?php 
										$i++;  
										
										$total1 += $price1;
										$total2 += $price2;
										$total3 += $price3;
										$total4 += $price4;
										$total5 += $price5;
										$total6 += $price6;
										$total7 += $price7;
										$total8 += $price8;
										$total9 += $price9;
										
										} 
										?>
									</tbody>
  
									<thead> 
										 <tr>
												<th width="4%" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF;"  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$total1); ?>    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$total2); ?>  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo number_format(0+$total3); ?>     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-bottom: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total4); ?>   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total5); ?>     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total6); ?>   </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total7); ?>   </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total8); ?>   </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px; border-bottom: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$total9); ?>   </font></div></th>  
											 </tr>
											 <tr>
												<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันเดือนปี    </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ค่าเช่า    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ค่ายิงแอด  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ค่าส่งของ     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าพนักงาน   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าโทรศัพท์     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าเน็ต   </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> ค่าน้ำ   </font></div></th>
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าไฟ   </font></div></th>
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าใช้จ่ายอื่นๆ   </font></div></th>  
											 </tr>
										  </thead>	 
							</table>  
							</div>
						   </div> 
                 	 		  
                 	 		  
                 	 		  
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