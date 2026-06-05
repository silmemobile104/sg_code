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
	 
 
	$zonedata = "";
	if(empty($_GET["zonedata"])){
		
	}else{
		$zonedata = $_GET["zonedata"];
	}  
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  
	
		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 

	$major = "1"; 
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}

 
 	 if(isset($_GET["Action"])){ 
		 if($_GET["Action"] == "Del")
		 {  
   

			$strSQL = "Delete From databank  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'databank.php';</script>"); 
		 } 
	 }

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ฝาก/ถอน Statement   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ฝาก/ถอน Statement    </font>   
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
                     <font size="4px" color="#000000">  ฝาก/ถอน Statement   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  
					
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
					
							$totalmoney = 0;
							$totalmoney1 = 0;
							$totalmoney2 = 0;
							$startpricedate = date("Y-m-d", strtotime("2020-01-01"));  
							$startpricedate2 = date("Y-m-d", strtotime(date('Y-m-d')));  
							/// $addcode = " and create_date BETWEEN '".$startpricedate."' AND '".$startpricedate2."' ";

	
	
							$contactstart = date("Y-m-d", strtotime($startpricedate));  
							$checkend = date("Y-m-d", strtotime($startpricedate2));
							$addcode = "   "; 
							$addcode = "    "; 
							$addcode2 = " and ((create_date BETWEEN '".$contactstart."' and '".$checkend."')  OR (create_date2 BETWEEN '".$contactstart."' and '".$checkend."' )) "; 
							///// $addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
						
							if($searchtype == "ประเภทเดือนปี"){
								
								$datadate  = "01-".$month."-".$year;		 			   
								$contactstart = date("Y-m-d", strtotime($datadate)); 
								$datadate2 = date('Y-m-t',strtotime($datadate));   
								$checkend = date("Y-m-d", strtotime($datadate2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
							}
							if($searchtype == "ประเภทวัน"){ 
								$contactstart = date("Y-m-d", strtotime($daystart_load));  
								$checkend = date("Y-m-d", strtotime($daystart_load2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 

							}
						 
	
							$sql2 = "  SELECT * FROM databank 
							where pk != ''  
							".$addcode.$addcode2."  
							order by create_date asc     ";  
	  
							/// echo $sql2 . " <br> ";
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{        
							 
								/*
									if($objResult2["typedatasave"] == "ฝาก"){
										if(!empty($objResult2["money1"])){
											$totalmoney += $objResult2["money1"];
										}

									}
									if($objResult2["typedatasave"] == "ถอน"){
										if(!empty($objResult2["money1"])){
											$totalmoney -= $objResult2["money1"];
										}

									}
								*/
								
								if(!empty($objResult2["money1"])){
									$totalmoney += $objResult2["money1"];
									$totalmoney1 += $objResult2["money1"];
								}
								if(!empty($objResult2["money2"])){
									$totalmoney -= $objResult2["money2"];
									$totalmoney2 += $objResult2["money2"];
								}
 
							}
						 
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
                       
                       
                      	    <form role="form" name="frmMain" method="post" action="save_databank.php" enctype="multipart/form-data" onsubmit="return validateForm()"  >  
							
							<input type="hidden"  name="searchname" value="<?php echo $searchname; ?>">
							<input type="hidden" name="searchname2" value="<?php echo $searchname2; ?>">
							<input type="hidden"  name="searchtype" value="<?php echo $searchtype; ?>">
							<input type="hidden"  name="month" value="<?php echo $month; ?>">
							<input type="hidden"   name="year" value="<?php echo $year ?>">
						  
						  
						  
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
								   <font color = '#000' size="3px" > รายการ </font> 
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									 
								  	<input type="text" class="form-control" id="customer" name="customer"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $customer; ?>"     >
									 
									</div> 
								</div>
							  </div> 

							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันทีฝาก </font>   
								  <input type="text" class="form-control  current " id="datesave" name="datesave"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('d/m')."/".(date('Y')); ?>" readonly  >
								</div>
							  </div> 
							   
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > เวลา </font>   
								  <input type="text" class="form-control    " id="datesave2" name="datesave2"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('H:i'); ?>"    >
								</div>
							  </div> 

							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ยอดฝาก </font>  
								  <input type="text" class="form-control" id="money1" name="money1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $money1; ?>"  onKeyUp="calAge2()"  maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 
							  
							  
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันทีถอน </font>   
								  <input type="text" class="form-control  current " id="datesave3" name="datesave3"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('d/m')."/".(date('Y')); ?>" readonly  >
								</div>
							  </div> 
							   
						  
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > เวลา </font>   
								  <input type="text" class="form-control    " id="datesave4" name="datesave4"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('H:i'); ?>"    >
								</div>
							  </div> 
							  
							  
							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ยอดถอน </font>  
								  <input type="text" class="form-control" id="money2" name="money2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $money2; ?>"  onKeyUp="calAge2()"  maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 
							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > คงเหลือ </font>  
								  <input type="hidden" id="showmoney3" value="<?php echo $totalmoney; ?>">
								  
								  <input type="text" class="form-control" id="money3" name="money3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $totalmoney; ?>" readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 

							    
							  <div class="col-md-8"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > หมายเหตุ </font>  
								  <input type="text" class="form-control" id="note" name="note"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $note; ?>"      >
								</div>
							  </div> 

							  	<script>    
								 function calAge2()
								 {    
									var money1 = document.getElementById("money1").value; /// เงินกู้
									var money2 = document.getElementById("money2").value; /// เงินกู้
									var showmoney3 = document.getElementById("showmoney3").value; /// เงินกู้ 


									var CalA = 0;
									var CalB = 0;
									var CalC = 0;
									if(money1 != ""){
										CalA = parseFloat(money1);
									}
									if(money2 != ""){
										CalB = parseFloat(money2);
									}
									if(showmoney3 != ""){
										CalC = parseFloat(showmoney3);
									}

									 var sumall1  = (CalC + CalA) - CalB ; 
									 document.getElementById("money3").value = sumall1.toFixed(0);
							 
									 
								 }
							  	</script>  

							   
							  </div> 

							    
							  <div class="col-lg-12 ">   </div> 

							  <div class="col-lg-12" align="left"   > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

									  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


									  <a href="databank.php">

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
                  	    
                   	 		   
                 	   	<form action="databank.php" method="get">
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
											<option value="">  เลือกเดือน    </option> 
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
											<option value="">  เลือกปี    </option> 
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
						
						
						
						<div   class="col-lg-7"  align="right"  > 
						<div style=" margin-top: 5px; "></div>
						
						<?php
						$txt1 = "#FFF";
						$txt2 = "#FFF";
						$txt3 = "#FFF";
						$txt4 = "#FFF";
						$txt5 = "#000";
							
						$btn1 = "  background-color: #4E5976; border-radius: 5px;    height: 40px;  border: 1px solid  #4E5976;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn2 = "  background-color: #0B9444; border-radius: 5px;  height: 40px;  border: 1px solid  #0B9444;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn3 = "  background-color: #DA0706; border-radius: 5px;   height: 40px;  border: 1px solid  #DA0706;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn4 = "  background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #4E5976;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							  
							
						?>
						 
						  <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?> "> <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >  ยอดฝาก <?php echo number_format(0+$totalmoney1) ; ?> </font> </button> 

						   
						  <button type="button" class="btn btn-primary" style=" <?php echo $btn2; ?> "> <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >  ยอดถอน  <?php echo number_format(0+$totalmoney2) ; ?> </font> </button> 
 
					   
						  <button type="button" class="btn btn-primary" style=" <?php echo $btn3; ?> "> <font color="<?php echo $txt3; ?>" size="2px" class="serif1" >  ยอดคงเหลือ  <?php echo number_format(0+$totalmoney) ; ?>  </font> </button> 
 
					
						</div>
						
						</form>  


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

 
							$contactstart = date("Y-m-d", strtotime($daystart_load));  
							$checkend = date("Y-m-d", strtotime($daystart_load2));
							$addcode = "  and  create_date BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode = "    "; 
							$addcode2 = " and ((create_date BETWEEN '".$contactstart."' and '".$checkend."')  OR (create_date2 BETWEEN '".$contactstart."' and '".$checkend."' )) "; 
							///// $addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
						
							if($searchtype == "ประเภทเดือนปี"){
								
								$datadate  = "01-".$month."-".$year;		 			   
								$contactstart = date("Y-m-d", strtotime($datadate)); 
								$datadate2 = date('Y-m-t',strtotime($datadate));   
								$checkend = date("Y-m-d", strtotime($datadate2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
							}
							if($searchtype == "ประเภทวัน"){ 
								$contactstart = date("Y-m-d", strtotime($daystart_load));  
								$checkend = date("Y-m-d", strtotime($daystart_load2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 

							}
						
						
													 
							$sql2 = " SELECT * FROM databank 
							where pk != ''  and bill_no != ''
							".$addcode.$addcode2."  
							order by pk desc    "; 
						  
							//// echo $sql2;
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								 <ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="databank.php?page2=<?php echo $page-1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="databank.php?page2=1&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="databank.php?page2=<?php echo $page-2 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="databank.php?page2=<?php echo $page-1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="databank.php?page2=<?php echo $page ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="databank.php?page2=<?php echo $page+1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="databank.php?page2=<?php echo $page+2 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="databank.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="databank.php?page2=<?php echo $page+1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
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
 
							$sql2 = "  SELECT * FROM databank 
							where pk != ''  and bill_no != ''
							".$addcode.$addcode2."  
							order by create_date asc   limit {$start} , {$perpage}   ";  
	  
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       

							if($bg == "#FFF"){ 
								$bg = "#F8FAFD"; 
							}else{  
								$bg = "#FFF"; 
							} 

							$bill_no = "-"; 
							$pksave = $objResult2["pk"]; 
							$create_date = $objResult2["create_date"]; 
							$create_date2 = $objResult2["create_date2"]; 
							$create_time = $objResult2["create_time"];  
							$note = $objResult2["note"];  
							$typedatasave = $objResult2["typedatasave"];  
							$timesave1 = $objResult2["datesave2"];  
							$name_major = "-"; 
							$name_create = ""; 	
								
								$sql_c = " SELECT * FROM member_all 
									where pk = '". $create_date ."'  
									order by pk asc     ";   
								$query_c = mysqli_query($con,$sql_c); 
								while($objResult_c = mysqli_fetch_array($query_c))
								{       
									$name_create = $objResult_c["name"];
								}
								 
								 
									 
								$money1 = "";
								if(!empty($objResult2["money1"])){
									$money1 = $objResult2["money1"];
								}
								 
								 
								$money2 = "";
								if(!empty($objResult2["money2"])){
									$money2 = $objResult2["money2"];
								}
									 
								
								$money3 = "";
								 
								
							?>
							<tr style="background-color: <?php echo $bg ?>; "> 
							
							<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> <?php echo $objResult2["customer"]; ?>  </font></div></td> 

  
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($money1)){
									echo  number_format(0+$money1);
								}
							 ?> </font></div></td> 
							
							
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($create_date)){
									echo  DateThai($create_date)." ".DateThai2($create_date);
								}
								 ?> </font></div></td> 
										 
										   
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($timesave1)){
									echo  $timesave1;
								}
								 ?> </font></div></td> 
							  
							  
  
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($money2)){
									echo  number_format(0+$money2);
								}
								 ?> </font></div></td> 
							
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($create_date2)){
									echo  DateThai($create_date2)." ".DateThai2($create_date2);
								}
								 ?> </font></div></td> 
										 
										   
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($timesave1)){
									echo  $timesave1;
								}
								 ?> </font></div></td> 
							  
							 
								 
								 
							<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> 
											 
							<a href="databank.php?CusID=<?php echo $objResult2["pk"];?>&page=1&bill_no=<?php echo $objResult2["bill_no"]; ?>"   style="   cursor: pointer; text-decoration: none;"  ><font size="3px" color="red" style=" font-size: 13px; " > <font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> เเก้ไข </font>  </font></a>
 
							&nbsp;
						
							<a href="JavaScript:if(confirm(' กรุณายืนยันการลบ  ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>';}" style="text-decoration-line: none;"     > <font size="3px" class="serif2" color="#000" style=" font-size: 13px; "   > 	ลบ  </font>  </a> 
						
						
							</font></div></td> 
							 
    
							 
							</tr>  
							<?php $i++; 
							 
								
								} 
								
							?> 
							</tbody>
    
							<thead> 
						 
							 <tr>
								<th width="2%" bgcolor="#FFF" height="45px;" style="  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ    </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดฝาก     </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันที่  </font></div></th>       
								<th width="3%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>  
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดถอน   </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่   </font></div></th>   
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>     
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข - ลบ   </font></div></th> 
							 </tr>
						  	</thead>
						  	
						  	
							</table>  
							</div>
						  </div>
                  	   
                  	    
                   	  <?php } ?>
                   		    
                   
                    
                         
                         
                         	     		     
					<?php 

						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
							
						$bill_no =  $_GET["bill_no"];
						$sql = "SELECT * FROM databank Where  bill_no = '". $_GET["bill_no"] ."'  ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{   
							$customer = $objResult["customer"];              
							$major = $objResult["major"];                 
							$datesave = $objResult["datesave"];     
							$datesave2 = $objResult["datesave2"];  
							$datesave3 = $objResult["datesave3"];  
							$datesave4 = $objResult["datesave4"];  
							$money1 = $objResult["money1"];   
							$money2 = $objResult["money2"];   
							$note = $objResult["note"];   
							$idupdate = $objResult["pk"];   
   
						}   
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
                       
                       
                      	    <form role="form" name="frmMain" method="post" action="save_databank_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  >  
							 
							<input type="hidden"  name="searchname" value="<?php echo $searchname; ?>">
							<input type="hidden" name="searchname2" value="<?php echo $searchname2; ?>">
							<input type="hidden"  name="searchtype" value="<?php echo $searchtype; ?>">
							<input type="hidden"  name="month" value="<?php echo $month; ?>">
							<input type="hidden"   name="year" value="<?php echo $year ?>">
						    <input type="hidden" id="idupdate" name="idupdate" value="<?php echo $idupdate; ?>" > 
						    <input type="hidden" id="idupdate2" name="idupdate2" value="<?php echo $idupdate2; ?>" > 
						    <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>" > 
						  
						  
						  
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
								   <font color = '#000' size="3px" > รายการ </font> 
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									 
								  	<input type="text" class="form-control" id="customer" name="customer"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $customer; ?>"     >
									 
									</div> 
								</div>
							  </div> 

							 
								    <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันทีฝาก </font>   
								  <input type="text" class="form-control  current " id="datesave" name="datesave"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave; ?>" readonly  >
								</div>
							  </div> 
							  
							 
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > เวลา </font>   
								  <input type="text" class="form-control    " id="datesave2" name="datesave2"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave2; ?>"    >
								</div>
							  </div> 

							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ยอดฝาก </font>  
								  <input type="text" class="form-control" id="money1" name="money1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $money1; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 
							  
							  
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันทีถอน </font>   
								  <input type="text" class="form-control  current " id="datesave3" name="datesave3"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave3; ?>" readonly  >
								</div>
							  </div> 
							  
							  <div class="col-md-4"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > เวลา </font>   
								  <input type="text" class="form-control    " id="datesave4" name="datesave4"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave4; ?>"    >
								</div>
							  </div> 
							  
							  
							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ยอดถอน </font>  
								  <input type="text" class="form-control" id="money2" name="money2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $money2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
								</div>
							  </div> 
							  
							   
							  <div class="col-md-8"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > หมายเหตุ </font>  
								  <input type="text" class="form-control" id="note" name="note"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $note; ?>"      >
								</div>
							  </div> 

							  
							  
							   
							  </div> 

							   
 

							  <div class="col-lg-12 ">   </div> 

							  <div class="col-lg-12" align="left"   > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

									  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


									  <a href="databank.php">

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
   
					    
                       
                   	  <?php } } ?>     
                         
                         
                          
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