<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";

  
		 
	 if(empty($_GET["type"])){	 
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		 
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}

	$searchname4 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname4"])){
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day2"] = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname4 = $_GET["searchname4"];
		 
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day2"] = date("d-m-Y", strtotime($date_income)); 
	}
	}else{ 
		
		$searchname = date('m');
		if(empty($_GET["searchname"])){

		}else{
			$searchname = $_GET["searchname"];
		}
		
		
		$searchname4 = date('Y');
		if(empty($_GET["searchname4"])){

		}else{
			$searchname4 = $_GET["searchname4"];
		}
 
	}

	$type = "";
	if(empty($_GET["type"])){

	}else{
		$type = $_GET["type"];
	}
 


	if(!empty($_GET["searchnamedata"])){
		if(empty($_GET["searchnamedata"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname = $_GET["searchnamedata"];


			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load = date("d-m-Y", strtotime($date_income)); 
			$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}
	} 

	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}
  
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
 
?> 
        
       <!-- page content -->
		<div class="right_col" role="main" style="background-color: #F5F5F7; " >

		 <div class=" col-lg-12 " style="  " align="left" >
		  <font color="#FFFFFF" size="3px" class="serif2"  >
		  <div style="margin-top: 1px;" > 
			 <font size="4px" color="#000000">  ยอดเงินส่วนลด   </font>  
			 <br> 
			 <font size="2px" color="#000000">  หน้าเเรก > ยอดเงินส่วนลด  </font>   
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
                     <font size="4px" color="#000000">  ยอดเงินส่วนลด   </font>   
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
                         
                        
                        <div   class="col-lg-4"  align="left"  > 
                    	<?php
							$btn1 = "  background-color: #FFF; border: 1px solid #323D55; border-radius: 5px;   width: 100%;  ";
							$btn2 = "  background-color: #FFF; border: 1px solid #323D55; border-radius: 5px;   width: 100%; ";
							$btn3 = "  background-color: #FFF; border: 1px solid #323D55; border-radius: 5px;   width: 100%; ";
							$btntxt1 = " #000 ";
							$btntxt2 = " #000 ";
							$btntxt3 = " #000 ";
							if($type == ""){
							$btn1 = "  background-color: #323D55; border: 1px solid #323D55; border-radius: 5px; width: 100%;  ";
							$btntxt1 = " #FFF "; 
							}
							if($type == "month"){
							$btn2 = "  background-color: #323D55; border: 1px solid #323D55; border-radius: 5px; width: 100%;  ";
							$btntxt2 = " #FFF "; 
							}
							if($type == "year"){
							$btn3 = "  background-color: #323D55; border: 1px solid #323D55; border-radius: 5px; width: 100%;  ";
							$btntxt3 = " #FFF "; 
							}
						?>
                    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="savepayment_check2_npl.php?type=" class=" btn btn-sm " style=" <?php echo $btn1; ?> "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color=" <?php echo $btntxt1; ?> " style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="savepayment_check2_npl.php?type=month" class=" btn btn-sm " style="  <?php echo $btn2; ?> "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color=" <?php echo $btntxt2; ?>" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="savepayment_check2_npl.php?type=year" class=" btn btn-sm " style="  <?php echo $btn3; ?>  "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color=" <?php echo $btntxt3; ?> " style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					        </table>
                    	
						</div>
                    	<div   class="col-lg-12"  align="left"  > &nbsp; </div>
                    	
                    	
                    	
                    	<div   class="col-lg-5"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ / เลขที่สัญญา / รหัสลูกค้า    </font>

										<form action="savepayment_check2_npl.php" method="get" >
										<input type="hidden"   id="searchnamedata" name="searchnamedata" value="<?php echo $searchname; ?>" > 
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"       autocomplete="off"  >
										  
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
								   
									<?php
							if($type == ""){ 
							?>
							<table width="100%">
								<tr> 
									<td width="30%"> 
									<font color="black" size="3px" class="serif">  วันที่    </font>

									<form action="savepayment_check2_npl.php" method="get" >
									<input type="hidden" id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>" >

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control current   "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

									<span class="input-group-append" style=" display: none; ">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/calendar.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td>  
									<td width="1%">&nbsp;

									</td>  
									<td width="30%"> 
									<font color="black" size="3px" class="serif">  ถึงวันที่    </font>


									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control current   "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname4" name="searchname4" value="<?php echo $searchname4; ?>"  readonly    autocomplete="off"  >

									<span class="input-group-append" style=" display: none; ">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/calendar.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td> 
									<td width="1%">&nbsp;

									</td>  
									<td width="20%">
									 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหาวันที่   </font> </button>  
									</form> 
									</td>  
								</tr>
							</table>	
							<?php
							} 
							?>
							<?php 
							if($type == "month"){ 
							?>
							<table width="100%">
								<tr> 
									<td width="30%"> 
									<font color="black" size="3px" class="serif">  เดือน    </font>

									<form action="savepayment_check2_npl.php" method="get" >
									<input type="hidden" id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>" >

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

									<span class="input-group-append" style=" display: none; ">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/calendar.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td>  
									<td width="1%">&nbsp;

									</td>  
									<td width="30%"> 
									<font color="black" size="3px" class="serif">  ปี    </font> 

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									 <select  name="searchname4" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
										<?php 
											$sql = "SELECT * FROM year where year = '".$searchname4."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM year where year != '".$searchname4."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
									</select>

									<span class="input-group-append" style=" display: none; ">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/calendar.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td> 
									<td width="1%">&nbsp;

									</td>  
									<td width="20%">
									 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหาวันที่   </font> </button>  
									</form> 
									</td>  
								</tr>
							</table>
							<?php
							} 
							?>
							<?php 
							if($type == "year"){ 
							?>
							<table width="100%">
								<tr>  
									<td width="75%"> 
									<font color="black" size="3px" class="serif">  ปี    </font> 
									<form action="savepayment_check2_npl.php" method="get" >
									<input type="hidden" id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>" >


									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									 <select  name="searchname4" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
										<?php 
											$sql = "SELECT * FROM year where year = '".$searchname4."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM year where year != '".$searchname4."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
									</select>

									<span class="input-group-append" style=" display: none; ">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/calendar.png" style="width: 15px; "> 
									  </button>
									</span>
									</div> 

									</td> 
									<td width="1%">&nbsp;

									</td>  
									<td width="20%">
									 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหาวันที่   </font> </button>  
									</form> 
									</td>  
								</tr>
							</table>
							<?php
							}
							?>
							      
								   
								   
								   
								<table width="100%">
									<tr> 
										<td width="75%"> 
										<font color="black" size="3px" class="serif">  สาขา </font>

										<form action="savepayment_check2_npl.php" method="get" >
										<input type="hidden" id="searchname" name="searchname" value="<?php echo $searchname; ?>" >
										
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="searchname3" name="searchname3"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname3)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname3."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname3."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname3)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										    <?php } ?>
											</select> 
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td>  
										<td width="20%">
										 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหา   </font> </button>  
										</form> 
										</td>  
									</tr>
								</table> 
						</div>
                    
                   		 <?php 

							$addcode = "";
							$addcode2 = "";  
							$addcode3 = "";  
							 
							if($type == ""){
								$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
								$checkend   = date("Y-m-d", strtotime($daystart_load2));   
								$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$addcode2 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							}

							if($type == "month"){
								 $year = $searchname4;
								 $datadate  = "01-".$searchname."-".$year;				   
								 $datadate2  = "31-".$searchname."-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2));   
								 $addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$addcode2 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							}

							if($type == "year"){
								 $year = $searchname4;
								 $datadate  = "01-01-".$year;				   
								 $datadate2  = "31-12-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2));
								 $addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$addcode2 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								
							}

							if(empty($_GET["searchname3"])){ 
							}else{
								$addcode3 = "and a.major = '".$searchname3."' ";
							} 

							
							if(empty($_GET["searchname2"])){

							}else{ 
								$addcode = " and   ( b.name like '%".$searchname2."%'  or  a.bill_no  like '%".$searchname2."%'  or  c.codecustomer  like '%".$searchname2."%'  )  ";
								
								/// $addcode2 = "";
							} 

 
							if (empty($_GET['page2'])) { 
								$ishow = 1;
							}else if (($_GET['page2'] == 1)) { 
								$ishow = 1;
							}else{ 
								$ishow = ( ($_GET["page2"]-1) * 25 ) + 1; 
							}

							$bg = "#E8E8E8";
							$total_price = 0; 
							$total_price2 = 0; 
							$total_price3 = 0; 
							$total_price3_2 = 0; 

							$total_price4 = 0; 
							$total_price5 = 0; 
							$total_price6 = 0; 
							$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer   FROM history_payment a 
								INNER Join customer b On a.customer = b.pk
								INNER Join list_order c On a.bill_no = c.bill_no
								where a.bill_no != ''   
								and a.status = 'ปกติ'   
								and a.onoff_copy = 'NPL'   
								and a.discount != ''    
								and a.discount != '0'    and c.contactstatus = 'อนุมัติแล้ว' 
								".$addcode.$addcode2.$addcode3."    
								order by a.pk asc   ";   
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								      		 
								$discoount = 0;
								$discoountpaymentother = 0; 
								$income = 0; 
								$discount = 0; 
 
								$discountshow = "";  
								if(!empty($objResult["income"])){
									$income = $objResult["income"];
								}
								if(!empty($objResult["discount"])){
									$discount = $objResult["discount"];
								}
								
								$totalprice = $income - $discount;
								if($totalprice <= 0){
									$totalprice = 0;
								}
										
								if(!empty($income)){
								$total_price += $income; 	
								}
								if(!empty($discount)){
								$total_price2 += $discount; 	
								}
								if(!empty($totalprice)){
								$total_price3 += $totalprice; 	
								}	
							}



							$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px; border-color: #006400; margin-top: 15px;  display: none;"; 
							$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px; border-color: #FF8C00; margin-top: 15px; "; 
							$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; margin-top: 15px;  display: none;"; 

							$txtcolor1 = "#000000";  
							$txtcolor2 = "#FFF";  
							?>
                   			<div class="col-md-7"  align="right" style="margin-top: 5px;"   >    
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" > ยอดรับจริง <?php echo number_format(0+$total_price); ?> บาท  </font> </button> 
							                              
							                               
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" > ยอดส่วนลด <?php echo number_format(0+$total_price2); ?> บาท  </font> </button> 
							                              
							                              
							                               
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" > ยอดส่งเงินเข้าร้าน <?php echo number_format(0+$total_price3); ?> บาท  </font> </button> 
								                              
						   </div>
                   
                   
                    
                    	<div   class="col-lg-12"  align="left"  > &nbsp; </div>
                    
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
							$total_page = 1;
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

 
 

							if(empty($_GET["searchname3"])){ 
							}else{
								$addcode3 = "and a.major = '".$searchname3."' ";
							} 

							
							if(empty($_GET["searchname2"])){

							}else{ 
								$addcode = " and   ( b.name like '%".$searchname2."%'  or  a.bill_no  like '%".$searchname2."%'  or  c.codecustomer  like '%".$searchname2."%'  )  ";
								
								/// $addcode2 = "";
							} 

							
							
							
						$sql2 = " SELECT a.*, b.name, c.codecustomer, c.codecustomer   FROM history_payment a 
						INNER Join customer b On a.customer = b.pk
						INNER Join list_order c On a.bill_no = c.bill_no
						where a.bill_no != ''     
						and a.status = 'ปกติ'   
						and a.onoff_copy = 'NPL'   
						and a.discount != ''  
						and a.discount != '0'    and c.contactstatus = 'อนุมัติแล้ว' 
						".$addcode.$addcode2.$addcode3."    
						order by a.pk asc      "; 
						//  echo $sql2;
						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
							 <ul class="pagination">
							<?php if ($page > 1): ?>
							<li class="prev"><a href="savepayment_check2_npl.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Prev</a></li>
							<?php endif; ?>

							<?php if ($page > 3): ?>
							<li class="start"><a href="savepayment_check2_npl.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">1</a></li>
							<li class="dots">...</li>
							<?php endif; ?>

							<?php if ($page-2 > 0): ?><li class="page"><a href="savepayment_check2_npl.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
							<?php if ($page-1 > 0): ?><li class="page"><a href="savepayment_check2_npl.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

							<li class="currentpage"><a href="savepayment_check2_npl.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page ?></a></li>

							<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="savepayment_check2_npl.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
							<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="savepayment_check2_npl.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)-2): ?>
							<li class="dots">...</li>
							<li class="end"><a href="savepayment_check2_npl.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
							<?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)): ?>
							<li class="next"><a href="savepayment_check2_npl.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Next</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>
  
						</div>
                   
                  			<?php
							$colorbtns1s = " background-color: #FF0000; border-radius: 5px; width: 190px;  height: 40px; border-color: #FF0000; margin-top: 15px; ";
							$colorbtns2s = " background-color: #5DC9C1; border-radius: 5px; width: 190px;   height: 40px; border-color: #FBFBFB; margin-top: 15px; ";

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF";  
							?>	
                  			
                   			<div class="col-md-4"  align="center" style="margin-top: 5px;"   >   
						  		<a href="savepayment_check2.php?searchname=<?php echo $searchname;?>&searchname2=<?php echo $searchname2;?>&searchname3=<?php echo $searchname3;?>"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >    สัญญาปกติ   </font> </button> </a>
								      
						  		<a href="savepayment_check2_npl.php?searchname=<?php echo $searchname;?>&searchname2=<?php echo $searchname2;?>&searchname3=<?php echo $searchname3;?>"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >       สัญญาNPL   </font> </button> </a>                        
						   </div>
                   
                    
                    	 
                    	    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1420px; "     >  
						       <tbody>
							  <?php 
										$i = 1;
										$ishow = 1;
													 
 										if (empty($_GET['page2'])) { 
											$ishow = 1;
										}else if (($_GET['page2'] == 1)) { 
											$ishow = 1;
										}else{ 
											$ishow = ( ($_GET["page2"]-1) * 25 ) + 1; 
										}
													  
										$bg = "#E8E8E8";
										$total_price = 0; 
										$total_price2 = 0; 
										$total_price3 = 0; 
										$total_price3_2 = 0; 
								  
										$total_price4 = 0; 
										$total_price5 = 0; 
										$total_price6 = 0; 
										$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer   FROM history_payment a 
											INNER Join customer b On a.customer = b.pk
											INNER Join list_order c On a.bill_no = c.bill_no
											where a.bill_no != ''     
											and a.status = 'ปกติ'   
											and a.onoff_copy = 'NPL'  
											and a.discount != '' 
											and a.discount != '0'   and c.contactstatus = 'อนุมัติแล้ว'    
											".$addcode.$addcode2.$addcode3."    
											order by a.pk asc   limit {$start} , {$perpage}  ";  
								  
								  		//// echo $sql;
										$query = mysqli_query($objCon,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{ 
											$name_cutomer = " - ";
											$name_cutomer2 = " - "; 
											$name_cutomer = $objResult["name"];    
											  
											$note1 = " - ";
											$totalprice1 = 0;
											$totalprice2 = 0;
											$totalprice3 = 0;
											$totalprice4 = " - ";
											$totalprice5 = " - ";
											$startdate = " - ";
											$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{   
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"]; 
												$totalprice4 = $objResult2["startdate"]; 
												$totalprice5 = $objResult2["endate"]; 
											}
  
											$discoount = 0;
											$discoountpaymentother = 0; 
											$income = 0; 
											$discount = 0; 
 
											 
											if($bg == "#FFF"){ 
											  $bg = "#E8E8E8";

											}else{  
											  $bg = "#FFF"; 
											}   
											  $bg = "#E8E8E8";
											 
											$name_staff = " - ";
											$name_staff2 = $objResult["date_time"];
											$sql2 = "SELECT * FROM member_all Where  pk = '". $objResult["create_by"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$name_staff = $objResult2["name"];   
											}
											 
											$discoount_cut = 0;  
											$discoount_cut1 = 0;  
											$discoount_cut2 = 0; 
											
											
											$discountbank = 0;  
											$countloopnopay = 0;
											$chk_total = 0;  
											   
											  
											
											
											if( $discoount_cut1 < 0){
												$discoount_cut1 = 0;
											}
											///echo $totalprice3 . " - " . $price1 ; 
											
											 
											$name_major = " - "; 
											$sql2 = "SELECT * FROM major Where  pk = '". $objResult["major"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$name_major = $objResult2["name"];   
											}
											 
											$discountshow = "";
											if(empty($objResult["paymentother"])){
												$discountshow = $chk_total*50;
											}
											if(!empty($objResult["paymentother"])){
												$discountshow = $objResult["paymentother"];
											}
											if(!empty($objResult["income"])){
												$income = $objResult["income"];
											}
											if(!empty($objResult["discount"])){
												$discount = $objResult["discount"];
											}
											
											  
											
											$getstart = 0;
											$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"] ."' order by pk asc limit 1 ";  
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$getstart = $objResult2["orderdata"];   
											}

											$onoffadd = "";
											if($getstart >= 1){
												$onoffadd = "off";
											}
											
											
											 
			

											$bill_no = $objResult["bill_no"];   
											$orderdata = $objResult["orderdata"];   
											$datashow = "BR".$bill_no."-".($orderdata+1);  
											$datashowSHow = explode("BRSGB",$datashow); 
											$txtbill = "SGRBC".$datashowSHow[1];
			
							  ?> 
									  
							   <tr id="hddata<?php echo $i; ?>"  style="background-color: <?php echo $bg ?>; "> 
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $ishow; ?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["name"]; ?> </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["codecustomer"]; ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult["telphone"]; ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $txtbill; ?> </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "   > 
											
										<?php echo number_format(0+$income); ?>
										
										</font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "   > 
											
										<?php echo number_format(0+$discount); ?>
										
										</font></div></td>
										   
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "   > 
											
										<?php 
											$totalprice = $income - $discount;
											if($totalprice <= 0){
												$totalprice = 0;
											}
											echo number_format(0+$totalprice); 
											?>
										
										</font></div></td>
										     
									 
										</tr>    
							  <?php
									$i++;	 
									$ishow++;	  
											
									if(!empty($income)){
									$total_price += $income; 	
									}
									if(!empty($discount)){
									$total_price2 += $discount; 	
									}
									if(!empty($totalprice)){
									$total_price3 += $totalprice; 	
									}
									  
								}
							  ?>
							   </tbody>
							   <thead> 
							   <tr>
								<th width="4%" colspan="6" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom-color: #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow1"    >   
								<?php echo number_format(0+$total_price); ?>
								</font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom-color: #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow2"    >   
								<?php echo number_format(0+$total_price2); ?>
								</font></div></th>     
								<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;   border-top-right-radius: 10px;  border-bottom-color: #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; " id="datashow3"    >    
									<?php echo number_format(0+$total_price3); ?>   </font></div></th>  
							   </tr>
							   <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>     

								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อลูกค้า  </font></div></th> 
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เบอร์โทร  </font></div></th>   
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา  </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่สัญญา     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดรับจริง     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดส่วนลด     </font></div></th>      

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดส่งเงินเข้าร้าน   </font></div></th>  
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
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
	function numberWithCommas2(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>
<?php
include('footer2.php');
?>