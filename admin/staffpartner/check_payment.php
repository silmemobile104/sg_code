<?php 
session_start();
$_SESSION["load"] = "3";
include('header.php'); 
 $codepro = "";
	 $name = "";
	 $searchname = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}


	$searchname2 = "1"; 

	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}

	$searchname6 = "";
	if(empty($_GET["searchname6"])){
		
	}else{
		$searchname6 = $_GET["searchname6"];
	}


	
	$searchname4 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname4"])){
		
		$cut = explode("/",$searchname3);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname4 = $_GET["searchname4"];
		
		
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
	$searchname5 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname5"])){
		
		$cut = explode("/",$searchname3);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}else{
		$searchname5 = $_GET["searchname5"];
		
		
		
		$cut = explode("/",$searchname5);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$alldata = "";
	if(empty($_GET["alldata"])){
		
	}else{
		$alldata = $_GET["alldata"];
	} 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
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
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}


	$searchname4 = "";
	if(empty($_GET["searchname4"])){
		
	}else{
		$searchname4 = $_GET["searchname4"];
	}

	$typedatasearch = "";
	if(empty($_GET["typedatasearch"])){
		
	}else{
		$typedatasearch = $_GET["typedatasearch"];
	}

	$major = 1;
 

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบสถานะชำระ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ตรวจสอบสถานะชำระ   </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบสถานะชำระ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php
					
						
						$store = "";
						$sql = "SELECT * FROM member_all where pk = '".$_SESSION["UserID"]."'   order by pk asc  ";  
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
							$store = $objResult["store"];
						}

					
					?>
                      
                       <form action="check_payment.php" method="get" >
					   <input type="hidden" id="typedata" name="typedata" value="<?php echo $typedata; ?>" >	

						<select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; display: none;"      onchange="loaddropdata()"      >  
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
                   	      
                   	      
				        <div   class="col-lg-4"  align="left" style=" display: none; "   > 
					 	<table width="100%" border="0">
						<tr>   
							<td width="40%"> 
							<font color="black" size="3px" class="serif">  ร้านค้า    </font>


							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
							  <select class="form-control" id="searchname" name="searchname"   style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >   
								<?php 
								$sql = "SELECT * FROM store where  pk = '".$store."' order by pk asc  "; 
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


							</td>        
							</tr>
							</table>  
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
                         
						    
								<div   class="col-lg-12"  align="left"  >    </div>
								
								<div   class="col-lg-8"  align="left"  >  
								<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									 <select class="form-control" id="searchtype" name="searchtype"   style="width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    > 

									   <?php if(empty($searchtype)){ ?>
									   <option value="">  ประเภทการค้นหา    </option> 
									   <?php } ?> 

										<?php 
										$sql = "SELECT * FROM drop_type where name = '".$searchtype."'   order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>     
										<?php 
										$sql = "SELECT * FROM drop_type where name != '".$searchtype."'   order by pk asc  "; 
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
									<td width="1%">&nbsp;  </td>
										
									<td width="40%">&nbsp;  </td>     
								</tr>
								</table>     

							
								<?php
								$HDshow1 = "display: none;";
								$HDshow2 = "display: none;";
								if($searchtype == "ประเภทเดือนปี"){ 
								$HDshow1 = "display: block;";
								}
								if($searchtype == "ประเภทวัน"){ 
								$HDshow2 = "display: block;";
								}
								?>
								<table width="100%" id="showsearchdata1" style=" <?php echo $HDshow1; ?> "   >
									<tr> 
											<td width="40%"> 
											<font color="black" size="3px" class="serif">  เลือกเดือน    </font>

											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											 <select class="form-control" id="month" name="month" required style="width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >   
												<?php 
												$sql = "SELECT * FROM month   order by pk asc  "; 
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
												<?php 
												$sql = "SELECT * FROM year   order by pk asc  "; 
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
											<td width="1%">&nbsp;  </td>

											<td width="7%">&nbsp;  </td>  
										</tr>
								</table>  

								<table width="100%" id="showsearchdata2"  style=" <?php echo $HDshow2; ?> "     >
									<tr> 
											<td width="24%"> 
											<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>

											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname4" name="searchname4" value="<?php echo $searchname4; ?>"  readonly    autocomplete="off"  >

											<span class="input-group-append" style="display: none; ">
											  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
													<img src="images/down.png" style="width: 15px; "> 
											  </button>
											</span>
											</div> 

											</td>   
											<td width="1%">&nbsp;  </td>
											<td width="24%"> 
											<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>


											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname5" name="searchname5" value="<?php echo $searchname5; ?>"  readonly    autocomplete="off"  >

											<span class="input-group-append"> 
											  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
													<img src="images/search.png" style="width: 15px; "> 
											  </button>
											</span>
											</div>


											</td> 
											<td width="1%">&nbsp;  </td>

											<td width="60%">&nbsp;  </td> 
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

									 }else if(getadata == "ประเภทวัน"){ 
										  document.getElementById("showsearchdata2").style.display = "block";
										  document.getElementById("showsearchdata1").style.display = "none";

									 }else{ 
										  document.getElementById("showsearchdata1").style.display = "none";
										  document.getElementById("showsearchdata2").style.display = "none";

									 }
								 } 
								</script>
                    
                    	        <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาหมายเลขเครื่อง    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname6" name="searchname6" value="<?php echo $searchname6; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;   </td>  
										<td width="40%">&nbsp;  </td>  
									</tr>
								</table>  
							 	</div> 
                   	        
								<div   class="col-lg-12"  align="left"  >    </div> 
                   	        
                    	        <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาเลขที่บิลใบเสร็จ    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;
										
										</td>  
										<td width="40%">
										<a href="check_payment.php?alldata=all"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										</td>  
									</tr>
								</table>  
							 	</div> 
							 	
							 	
							 	                   	        
                    	        <div   class="col-lg-8"  align="left" style=" display: none; "  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  โปรดเเลือกสถานะชำระ    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="typedatasearch" name="typedatasearch"   style="width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     > 

										   <?php if(empty($typedatasearch)){ ?>
										   <option value="">  โปรดเเลือกสถานะชำระ    </option> 
										   <?php } ?> 

											<?php 
											$sql = "SELECT * FROM drop_check_payment where name = '".$typedatasearch."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_check_payment where name != '".$typedatasearch."'   order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;
										
										</td>  
										<td width="40%"> 
										  
										</td>  
									</tr>
								</table>  
							 	</div> 
							 	
							 	
							   
							   </form>
                   		    
                   		   
                   		   
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
								$addcode2 = "";
								$addcode3 = "";  
								$addcode4 = "";  
								$addcode5 = "";  
								$addcode6 = "";  

							 	if($searchtype == "ประเภทเดือนปี"){ 
								$datadate  = "01-".$month."-".$year;				   
								$datadate2  = "31-".$month."-".$year;	

 
								$contactstart = date("Y-m-d", strtotime($datadate));  
								$checkend = date("Y-m-d", strtotime($datadate2)); 
  
								$addcode4 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								}
								if($searchtype == "ประเภทวัน"){ 
								$addcode4 = "  and  a.create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."'  "; 
								}

								if(empty($_GET["searchname3"])){

								}else{
									$addcode3 = " and  a.bill_no like '%".$searchname3."%' ";
									$addcode4 = "";
								}  
								if(empty($_GET["searchname2"])){

								}else{
									$addcode = " and  a.major = '".$searchname2."' ";
								}  
								 
							   
								$addcode2 = " and  c.typedata_2 = '".$store."' ";
								  
													 
													 
								$pkselect = "";
								if(empty($_GET["searchname6"])){

								}else{
									$searchname6 = $_GET["searchname6"];
									 
									$pkselect = " and c.codeno like '%".$searchname6."%'" ; 
									
								} 
													 
													 

								if($alldata == "all"){ 
								$addcode = "";
								//// $addcode2 = "";
								$addcode3 = "";
								$addcode4 = "";
								}
													 
													 
								$typedata = "";
								if(empty($_GET["typedata"])){

								}else{
									if(($_GET["typedata"] == "หักภาษีแล้ว")){
										$addcode5 = " and  a.pasy_onoff = 'ON' ";
									}else{
										$addcode5 = " and  a.pasy_onoff = '' ";
									}
									 
								}
													 
									
 
							if(empty($_GET["typedatasearch"])){

							}else{

								if($_GET["typedatasearch"] == "รอชำระ"){
									$addcode6 = " and  ( a.npl_status = '".$_GET["typedatasearch"]."' or a.npl_status = '' ) ";
								}else{
									$addcode6 = " and  a.npl_status = '".$_GET["typedatasearch"]."' ";
								}
								 $typedatasearch = $_GET["typedatasearch"];
							}  				 

							$sql2 = " SELECT a.*  FROM list_chk_computer a 
							Inner Join list_order b  On a.pkselect = b.pk
							Inner Join product c  On b.menu_id = c.pk
							where  a.bill_no != ''   
							".$addcode.$addcode2.$addcode3.$addcode4.$addcode5.$addcode6.$pkselect."
							Group By a.bill_no
							order by a.pk asc    "; 
 
							///   echo $sql2;
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
							<ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="check_payment.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="check_payment.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="check_payment.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="check_payment.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="check_payment.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_payment.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_payment.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="check_payment.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="check_payment.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&typedata=<?php echo $typedata; ?>&typedatasearch=<?php echo $typedatasearch; ?>">Next</a></li>
						<?php endif; ?>
						</ul>
						<?php endif; ?>
						</div>
                   		    
                   		   	  <div class="col-md-8" style="margin-top: 15px;  " align="right" > 
                              
								 <a href="check_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $store; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>&typedatasearch=รอชำระ"> 
								 <button type="button"  class="btn btn-primary" style="background-color: #FFA500; border-radius: 5px;  height: 40px; border-color: #FFA500;   "    > <font color="#FFF" size="2px" class="serif1"  id="totaltxtbill2" >  รอชำระ   </font> </button>  </a>


								 <a href="check_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $store; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>&typedatasearch=ชำระเงินแล้ว"> 
								 <button type="button"  class="btn btn-primary" style="background-color: #006400; border-radius: 5px;  height: 40px; border-color: #006400;   "    > <font color="#FFF" size="2px" class="serif1"  id="totaltxtbill2" >  ชำระเงินแล้ว   </font> </button>  </a>
							  
                              
                           		 <a href="check_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $store; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>&typedata=หักภาษีแล้ว"> 
                         	  	 <button type="button"  class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border-color: #006400;  "    > <font color="#FFF" size="2px" class="serif1" >   หักภาษีแล้ว   </font> </button>  </a>
                         	  	  
                           		 <a href="check_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $store; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>&typedata=ยังไม่ได้หักภาษี"> 
                         	  	 <button type="button"  class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px;   height: 40px; border-color: #FF0000;   "    > <font color="#FFF" size="2px" class="serif1" >   ยังไม่ได้หักภาษี   </font> </button>  </a>
                         	  	   
							  </div>
                   		    
                   		   
                   		   <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							  <div class="table-responsive"  >
							  <table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px; "   >
							     
									<tbody> 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
 
									   
										$sql2 = " SELECT a.*  FROM list_chk_computer a 
										Inner Join list_order b  On a.pkselect = b.pk
										Inner Join product c  On b.menu_id = c.pk
										where  a.bill_no != ''   
										".$addcode.$addcode2.$addcode3.$addcode4.$addcode5.$addcode6.$pkselect."
										Group By a.bill_no
										order by a.pk asc   limit {$start} , {$perpage}   ";   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											if($bg == "#FFF"){ 
												$bg = "#F8FAFD"; 
											}else{  
												$bg = "#FFF"; 
											}
											  
											$create_date = $objResult2["create_date"];
											$create_date2 = $objResult2["create_date2"];
											$create_time = $objResult2["create_time"];
											$create_by = $objResult2["create_by"];
											$pkselect = $objResult2["pkselect"];
											$bill_no = $objResult2["bill_no"];
											$pasy_onoff = $objResult2["pasy_onoff"];


											$menuid = "-";
											$sql_c = "SELECT * FROM list_order where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$menuid =  $objResult_c["menu_id"];
											}
											
											$name_create1 = "-"; 
											$name_create2 = "-"; 
											$name_create3 = "-";  
											$name_major = "-"; 
											$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  "; 
											///echo $sql;
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{  
												$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$name_create1 =  $objResult_c["name"];
													$name_create2 =  $objResult_c["address"];
													$name_create3 =  $objResult_c["telphone"];
												}

											}		
											  
											
											$total_price = 0;
											$pricecal = 0;
											$pasy = 0;
											$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join product c On   a.menu_id = c.pk
											Inner Join list_chk_computer d On   a.pk = d.pkselect 
											where d.bill_no = '".$bill_no."'  
											order by a.pk asc    "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$total_price +=  $objResult_c["computer2"];
												
												$pricecal += $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];
												$pasy += $objResult_c["computer2"] * 0.03;
											}
											
											
											$name_create = "-"; 
											$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_create =  $objResult["name"];
											}
											    
											    
											$cal = $pricecal * 0.03;
											$cal2 = $pricecal  - $pasy;
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create1; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($create_date)." ".datethai2($create_date);?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$cal2);?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										
										<a href="print_computer.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์เอกสาร   
										</font>  
										</a> 
										
										</font></div></td>
										 
										<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										<input type="hidden" id="savebill_save<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										 
										<?php if($pasy_onoff == ""){ ?>
										<td style=" background-color: #FF0000;    border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >     
 
										 <font size="2px" class="serif2" color="#FFF"> ยังไม่ได้หักภาษี  </font> 
 
										</font></div></td>
										<?php }else if($pasy_onoff == "ON"){ ?> 
										<td style="  background-color: #006400;  border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >     

										<font size="2px" class="serif2" color="#FFF"> หักภาษีแล้ว  </font> 


										</font></div></td>
										<?php } ?>

 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $create_time; ?>  </font></div></td> 
										  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">   
										<?php  
										$hdst = " background-color: #FF8C00; ";
										if($objResult2["npl_status"] == "รอชำระ"){
											$hdst = " background-color: #FF8C00; ";
											echo $objResult2["npl_status"] ;
										}else if($objResult2["npl_status"] == "ชำระเงินแล้ว"){
											$hdst = " background-color: #006400;  ";
											echo $objResult2["npl_status"] ;
										}else{
											
											echo "รอชำระ" ;
										} 	  
											
										?> 
										</font></div></td>
  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 12px; " > 
										
										<?php
											$bank = " - ";
											$sql_pay = "SELECT * FROM bank2 where pk = '".$objResult2["banksave"]."' order by pk asc  "; 
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
												
												$bank = $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";
											}
											
											echo $bank;
										?>
										  
										</font></div></td>	  
										  
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php
											$txtbg = "#FF8C00";
											if($objResult2["partnerstatus"] == ""){
											$txtbg = "#FF8C00";
											}else if($objResult2["partnerstatus"] == "ชำระแล้ว"){
											$txtbg = "#006400";
											}else if($objResult2["partnerstatus"] == "ตรวจสอบไม่ได้"){
											$txtbg = "#FF8C00";
											}else if($objResult2["partnerstatus"] == "ยังไมไ่ด้ชำระ"){ 
											$txtbg = "#FF0000";
											}
										?>
										<select class="form-control " style="  color: white; font-size: 12px; margin-top: -5px; background-color:  <?php echo $txtbg; ?>; " id="stauts_back<?php echo $objResult2["pk"]; ?>" name="stauts_back<?php echo $objResult2["pk"]; ?>" onChange="showUserstauts_back<?php echo $objResult2["pk"]; ?>(this.value)"  > 

										<?php if($objResult2["partnerstatus"] == ""){ ?>
										<option value="รอชำระเงิน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> โปรดเลือก </font></option>  
										<option value="ชำระแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระแล้ว </font></option> 
										<option value="ตรวจสอบไม่ได้//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ตรวจสอบไม่ได้ </font></option> 
										<option value="ยังไมไ่ด้ชำระ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไมไ่ด้ชำระ </font></option> 

										<?php }else if($objResult2["partnerstatus"] == "ชำระแล้ว"){ ?> 
										<option value="ชำระแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระแล้ว </font></option> 
										<option value="ตรวจสอบไม่ได้//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ตรวจสอบไม่ได้ </font></option> 
										<option value="ยังไมไ่ด้ชำระ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไมไ่ด้ชำระ </font></option> 
 
										<?php }else if($objResult2["partnerstatus"] == "ตรวจสอบไม่ได้"){ ?> 
										<option value="ตรวจสอบไม่ได้//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ตรวจสอบไม่ได้ </font></option> 
										<option value="ชำระแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระแล้ว </font></option>  
										<option value="ยังไมไ่ด้ชำระ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไมไ่ด้ชำระ </font></option> 

										<?php }else if($objResult2["partnerstatus"] == "ยังไมไ่ด้ชำระ"){ ?> 
										<option value="ยังไมไ่ด้ชำระ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ยังไมไ่ด้ชำระ </font></option> 
										<option value="ตรวจสอบไม่ได้//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ตรวจสอบไม่ได้ </font></option> 
										<option value="ชำระแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระแล้ว </font></option>   

										<?php } ?> 

										</select>   
										 <input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >	

										 <script>
											function  showUserstauts_back<?php echo $objResult2["pk"]; ?>(str) {

												var cut_data = str.split("//"); 
												var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

												var check_status = cut_data[0];
												var check_status_save = "";

												var typedata = document.getElementById("savebill_no<?php echo $i; ?>").value;  

												if(check_status == "โปรดเลือก"){
													document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#FF8C00";
												}else if(check_status == "ชำระแล้ว"){
													document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#006400";
												}else if(check_status == "ตรวจสอบไม่ได้"){
													document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#FF8C00"; 
												}else{
													document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#FF0000";

												}
												///alert("save_cancel_bill_back4.php?bill_no="+typedata+"&status="+check_status);
												$.ajax({
													type: "GET",
													url: "save_cancel_bill_partner.php?bill_no="+typedata+"&status="+check_status,
													success: function(result) {

													}
												}); 
											}   
										</script>
										
										
										</font></div></td>
										 
										 
								</tr>  
								<?php $i++;  $totalprice1+=$total_price;  } ?>
									</tbody>
  
									<thead> 
									<tr>
									<th width="2%" colspan="3" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom: 1px solid #FFF; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF; border-top: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$totalprice1); ?>  </font></div></th>  
									</tr>
									
									<tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;    "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิล    </font></div></th>    
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อร้าน  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันทีทำเอกสาร     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหลังหักภาษี ณ ที่จ่าย   </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์เอกสาร     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี     </font></div></th>
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th>    
												 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th> 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ธนาคาร   </font></div></th>  
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  โปรดเเลือกสถานะ ชำระ   </font></div></th>  
									</tr>
							</thead>
							</table>  
							</div>
						  </div>
                   		   
                   		    
                          
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

<?php
include('footer2.php');
?>