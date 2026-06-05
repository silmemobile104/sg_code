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
	
	

	$major = "";
	$type = "";
	if(empty($_GET["type"])){

	}else{
		$type = $_GET["type"];
	}
 
  
		 
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  
	  
	$getmajorline = "";

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  สรุปรายงานประวัติการเข้าใช้งานระบบ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สรุปรายงานประวัติการเข้าใช้งานระบบ   </font>   
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
                     <font size="4px" color="#000000">  สรุปรายงานประวัติการเข้าใช้งานระบบ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      
						  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  สรุปรายงานประวัติการเข้าใช้งานระบบ    </font>   
						  </div> 
						  </font> 
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
                         
                        
						   <div class="col-lg-12">  <br>   
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
									
							
							$addcode2 = "  and  date_start BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
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
							yearRange: "-10:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                          
                      
                          <?php if(empty($_GET["type"])){ ?>
                           
                            <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
					    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					        </table>
					   
					        </div>
                         
                         
					        <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                         
                          
                  		    <form action="report_login.php" method="get" >
                  		    <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
                  		    <input type="hidden" id="page" name="page" value="" >
                  		    
                  		    
							<div   class="col-lg-5"  align="left"  > 
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
							
							
							
							<div   class="col-lg-12"  align="left"  >  </div>
							
							
							<div   class="col-lg-5"  align="left"  > 
							<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif"> ค้นหาชื่อ   </font>
 
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="customer" name="customer" value="<?php echo $customer; ?>"       autocomplete="off"  >

									<span class="input-group-append">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
											<img src="images/search.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td> 
									<td width="1%">&nbsp;    </td>  
									<td width="40%">&nbsp;      </td>  
								</tr>
							</table>  
							</div>
							
							
							
							</form>
                          
                           <?php }else if($_GET["type"] == "month"){ ?>
                           
                             
                           <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
					    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr> 
					        </table>
					   
					        </div>
                          
					        <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                         
                          
                  		     <form action="report_login.php" method="get" >
                  		     <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
                  		     <input type="hidden" id="page" name="page" value="" >
                  		     <input type="hidden" id="type" name="type" value="month" >
                  		       
							   <div   class="col-lg-5"  align="left"  > 
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
						   
						    
								<div   class="col-lg-12"  align="left"  >  </div>


								
								 <div   class="col-lg-5"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif"> ค้นหาชื่อ   </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="customer" name="customer" value="<?php echo $customer; ?>"       autocomplete="off"  >

										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td> 
										<td width="1%">&nbsp;    </td>  
										<td width="40%">&nbsp;      </td>  
									</tr>
								</table>  
								</div>
							
							
							 
							   </form>
                         
                         
                          
                           <?php }else if($_GET["type"] == "year"){ ?>
                             
                              <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
					    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="report_login.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					        </table>
					   
					        </div>
                           
                           
                           
					          <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                         
                          
                  		      <form action="report_login.php" method="get" >
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
						    
								<div   class="col-lg-12"  align="left"  >  </div>


								
								
								
								 <div   class="col-lg-3"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif"> ค้นหาชื่อ   </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="customer" name="customer" value="<?php echo $customer; ?>"       autocomplete="off"  >

										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td> 
										<td width="1%">&nbsp;    </td>  
										<td width="40%">&nbsp;      </td>  
									</tr>
								</table>  
								</div>
							
							
							
							 
							   </form>
                          
                           <?php } ?> 
                             
                     
                   	  <?php } ?>
                   		    
					<div class="col-lg-12">
						 <br>      
					</div>    
                   	   
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
							if(empty($_GET["customer"])){ 
								$addcode = " ";
							}else{
								$addcode = " and b.name like '%".$customer."%' ";
							}   

						$sql2 = "SELECT a.*, b.name FROM history_checkin  a
						Inner Join member_all b On   a.member = b.pk
						where a.bill_no != ''   
						".$addcode.$addcode2."  
						order by a.pk asc    "; 
							 
						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
							 <ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="report_login.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="report_login.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="report_login.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="report_login.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="report_login.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="report_login.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="report_login.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="report_login.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page="><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="report_login.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=">Next</a></li>
								<?php endif; ?>
							</ul>
							<?php endif; ?>

						</div>
                         
                         
                           <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" tables    tablemobile  " border="0"     >
							 <thead> 
								 <tr>
									<th width="3%" bgcolor="#BEC6CB" height="45px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่ที่คำขอ   </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อ-นามสกุล   </font></div></th>     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ตำแหน่ง  </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิกัด     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th>         
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;    "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> หมายเหตุ  </font></div></th>  
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
								$sql2 = " SELECT a.*, b.name, b.poition FROM history_checkin  a
								Inner Join member_all b On   a.member = b.pk
								where a.bill_no != ''   
								".$addcode.$addcode2."  
								order by a.pk desc limit {$start} , {$perpage}   ";   
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
									
									
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								}

							 
								$name_create = "-";   
								$sql = "SELECT * FROM drop_type_staff where pk = '".$objResult2["poition"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}
								 
									
									$txtshow = "รอตรวจสอบ";
									$hdd = " "; 
									$bgbtn = " #FF8C00  ";
									if($objResult2["onoff"] == ""){ 

									}else if($objResult2["onoff"] == "อนุมัติ"){
									$txtshow = " อนุมัติ ";
									$hdd = " "; 
									$bgbtn = " #006400  ";
									}else if($objResult2["onoff"] == "ไม่อนุมัติ"){
									$txtshow = " ไม่อนุมัติ ";
									$hdd = " display: none;  "; 
									$bgbtn = " #FF0000  ";

									}
									
								 $note = $objResult2["note1"];
									
								?>
                  		     	<tr style="background-color: <?php echo $bg ?>; "> 
 
								<td style=" border-left: 0px solid #F2F2F2; " height="50px;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?> </font></div></td>  

                 		      
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 
                 		       
                  		      <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"   >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" target="_blank" style=" background-color: #FF0000; border-radius: 5px;  border-radius: 5px; cursor: pointer;     " href="https://www.google.com/maps/search/<?php echo $objResult2["location"]; ?>/@<?php echo $objResult2["location"]; ?>,13z/data=!3m1!4b1?entry=ttu"  >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "   > พิกัด  </font>   </a> 
								</font>
								</div>
                 		     
							  </td>
                  		      
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["date_time"]; ?> </font></div></td>  

                 		      
                 		      
                  		      <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"  id="showorder<?php echo $objResult2["pk"]; ?>"  >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer;     "   id="btnsave<?php echo $objResult2["pk"];?>" data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""   >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdata<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
								</font>
								</div>
                 		      
							 

								</td> 
                 		     
                 		     
                 		     
                 		     <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"  id="showorder<?php echo $objResult2["pk"]; ?>"  >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: #006400; border-radius: 5px;  border-radius: 5px; cursor: pointer;     "     data-toggle="modal" data-target="#myNote<?php echo $objResult2["pk"];?>" data-id=""   >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "    > หมายเหตุ </font>   </a> 
								</font>
								</div>
                 		      
							
								 <!-- Modal -->
								<div class="modal fade" id="myNote<?php echo $objResult2["pk"]; ?>" role="dialog" style=" margin-top: 75px; ">
								<div class="modal-dialog modal-md"> 
								<!-- Modal content-->
									<div class="modal-content">
									<div class="modal-header">
									<font size="2px" color="black"  class="serif2"> หมายเหตุ : <?php echo $objResult2["bill_no"]; ?> </font> 
									<button type="button" id="closepoppop<?php echo $objResult2["pk"]; ?>"  class="close" data-dismiss="modal">&times;</button>
									</div> <br>
									<center>  
									<div class="col-lg-12" style=" margin-top: 10px;  "  align="left"> 
									<div class="row">  
									<div class="col-lg-12" style="   "  align="left">  

									<div class="col-lg-12" style="  "  align="left">  

									<font size="3px" style=" font-size: 16px; " color="#000">  
 

									  
									
									 
									  <div class="col-md-12"  >	 
										   <font color = '#000' size="3px" > หมายเหตุ </font>   
										   <font color = '#000' size="3px" > <?php echo $note; ?> </font>   
									  </div> 
						   
									 
									<div style=" margin-top: 20px; " > &nbsp; </div>  

									</font>
									</div>
									</div>
									</div>
									</div>
									</center>
									</div>
								</div>
								</div>  

								</td> 
                  		     
                   		       </tr> 	 
                  		       <?php } ?>
                   		     </tbody> 	 
							</table>  
							</div>
						  </div>
                   		  
                  		  
                          
                  		  
                          
                          
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