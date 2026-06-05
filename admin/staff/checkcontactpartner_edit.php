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
	$appleid = "";
	$bank2 = "";
	$dataicloud = "";


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

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบคำขอสินเชื่อ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ตรวจสอบคำขอสินเชื่อ   </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบคำขอสินเชื่อ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ 
					
					    	$bill_no = $_GET["bill_no"];
							$sql2 = "  SELECT * FROM list_order_partner  where bill_no != '' and bill_no = '".$bill_no."'  order by pk  ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
									$major = $objResult2["major"];  
									$savedate = $objResult2["savedate"];  
									$typedatasave = $objResult2["typedatasave"];  
									$data1 = $objResult2["data1"];  
									$data2 = $objResult2["data2"];  
									$data3 = $objResult2["data3"];  
									$data4 = $objResult2["data4"];  
									$data5 = $objResult2["data5"];  
									$data6 = $objResult2["data6"];  
									$data7 = $objResult2["data7"];  
									$data8 = $objResult2["data8"];  
									$typedataproduct = $objResult2["typedataproduct"];  
									$typedataproduct2 = $objResult2["typedataproduct2"];  
									$typestore = $objResult2["typestore"];  
									$typecolor = $objResult2["typecolor"];  
									$dataimei = $objResult2["dataimei"];  
									$moneystartprice = $objResult2["moneystartprice"];  
									$moneyprice = $objResult2["moneyprice"];  
									$moneydown = $objResult2["moneydown"];  
									$cod = $objResult2["cod"];  
									$daypriceall3 = $objResult2["daypriceall3"];  
									$daytotal = $objResult2["daytotal"];  
									$daypriceshow1 = $objResult2["daypriceshow1"];  
									$moneymonthshow = $objResult2["moneymonthshow"];  
									$daypayment = $objResult2["daypayment"];  
									$dataicloud = $objResult2["dataicloud"];  
									$pasycal = $objResult2["pasycal"];  
									$bill_no = $objResult2["bill_no"];  
									$codecustomer = $objResult2["codecustomer"];  
									$admin1 = $objResult2["admin1"];  
									$admin2 = $objResult2["admin2"];  
									$admin3 = $objResult2["admin3"];  
									$admin4 = $objResult2["admin4"];  
									$admin5 = $objResult2["admin5"];  
									$admin6 = $objResult2["admin6"];  
									$admin7 = $objResult2["admin7"];  
									$create_by = $objResult2["create_by"];   
									$startdate = $objResult2["startdate"];   
									$enddate = $objResult2["enddate"];   
									$statusadmin = $objResult2["statusadmin"];   
									$bank2 = $objResult2["bank2"];   
									$qrdata = $objResult2["qrdata"];   

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
							yearRange: "-10:+10",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                         
						<form role="form" name="frmMain" method="post" action="save_contact_create_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	   
                      	  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>"  >
                      	  <input type="hidden" id="customerid" name="customerid" value=""  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value=""  >
                      	  <input type="hidden" id="productid" name="productid" value=""  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value=""  >
                      	   
                          <div class="col-md-3" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >   
							    <?php 
								$sql = "SELECT * FROM major where pk = '1' order by pk asc  "; 
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
                          
                           
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันเดือปี      </font>     
							  <input type="text" class="form-control current " id="savedate" name="savedate"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo $savedate; ?>"  readonly >
							</div>
						  </div>  
                           
                  		  <div class="col-lg-12 ">   </div>
                    	  
                     	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ประเภทประกัน </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="typedatasave" name="typedatasave" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
							    <?php 
								$sql = "SELECT * FROM drop_typedata where pk = '".$typedatasave."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM drop_typedata where pk != '".$typedatasave."' order by pk asc  "; 
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
                         
                         
                         
                         
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > กรอกวันทีรับประกัน      </font>     
							  <input type="text" class="form-control current " id="data8" name="data8"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo $data8; ?>"    >
							</div>
						  </div>  
                          
                  		  <div class="col-lg-12 ">   </div>
                    	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>   ข้อมูลลูกค้า  </b> </font>   
							</div>
						  </div>
                          
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ-นามสกุล </font>   
							  <input type="text" class="form-control" id="data1" name="data1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $data1; ?>"    >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Facebook </font>   
							  <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"   value="<?php echo $data2; ?>"   >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > URL Facebook </font>   
							  <input type="text" class="form-control" id="data3" name="data3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"   value="<?php echo $data3; ?>"   >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทร </font>   
							  <input type="text" class="form-control" id="data4" name="data4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"   value="<?php echo $data4; ?>"   >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > App ID </font>   
							  <input type="text" class="form-control" id="data5" name="data5"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"    value="<?php echo $data5; ?>"  >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Password </font>   
							  <input type="text" class="form-control" id="data6" name="data6"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $data6; ?>"    >
							</div>
						  </div> 
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ตำหนิ </font>   
							  <input type="text" class="form-control" id="data7" name="data7"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"    value="<?php echo $data7; ?>"  >
							</div>
						  </div> 
                         
                  		  <div class="col-lg-12 ">   </div>
                         
                         <script> 
							function myFunction2()
							{    
								var typedataproduct = document.getElementById("typedataproduct").value;   
								  
								$.ajax({
									type: "GET",
									url: "dropdown_data1.php?typedataproduct="+typedataproduct,
									success: function(result) {
									$('#typedataproduct2').html(result);
									}
								});	  											
							}  	
							
						 </script>
                         
                         <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > โปรดเลือก </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="typedataproduct" name="typedataproduct" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  " onchange="myFunction2()"   >  
							    <?php 
								$sql = "SELECT * FROM typedataproduct where pk = '".$typedataproduct."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM typedataproduct where pk != '".$typedataproduct."' order by pk asc  "; 
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
                        
                         <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="typedataproduct2" name="typedataproduct2" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "    > 
							     <?php 
								$sql = "SELECT * FROM drop_typepartner where typedataproduct = '".$typedataproduct."' and pk = '".$typedataproduct2."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							     <?php 
								$sql = "SELECT * FROM drop_typepartner where typedataproduct = '".$typedataproduct."' and pk != '".$typedataproduct2."' order by pk asc  "; 
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
                         
                  		 <div class="col-lg-12 ">   </div>
                        
                         <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="typestore" name="typestore" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "    >   
							    <?php 
								$sql = "SELECT * FROM drop_typestore where pk = '".$typestore."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM drop_typestore where pk != '".$typestore."' order by pk asc  "; 
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
                         
                         <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="typecolor" name="typecolor" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "    >  
							    <?php 
								$sql = "SELECT * FROM drop_typecolor where pk = '".$typecolor."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM drop_typecolor where pk != '".$typecolor."' order by pk asc  "; 
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
                           
                          <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > IMEI </font>   
							  <input type="text" class="form-control" id="dataimei" name="dataimei" value="<?php echo $dataimei; ?>"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"     >
							</div>
						  </div> 
                          
                  		 <div class="col-lg-12 ">   </div>
                           
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาขาย </font>   
							  <input type="text" class="form-control" id="moneystartprice" name="moneystartprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   value="<?php echo $moneystartprice; ?>"   >
							</div>
						  </div> 
                     	   
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาสินค้า ( ราคารวมผ่อน ) </font>   
							  <input type="text" class="form-control" id="moneyprice" name="moneyprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "    value="<?php echo $moneyprice; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินดาวน์   </font>   
							  <input type="text" class="form-control" id="moneydown" name="moneydown"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   value="<?php echo $moneydown; ?>"  > 
							</div>
						  </div>  
							 
						   
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่า COD    </font>   
							  <input type="text" class="form-control" id="cod" name="cod"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $cod; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   value="<?php echo $cod; ?>"  >
							</div>
						  </div> 
						   
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" >    อืนๆ   </font>   
							  <input type="text" class="form-control" id="otherprice" name="otherprice"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $cod; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  value="<?php echo $otherprice; ?>"  >
							</div>
						  </div> 
						   
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > คงเหลือ   </font>  
							   <input type="text" class="form-control" id="daypriceall3" name="daypriceall3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly      value="<?php echo $daypriceall3; ?>"  >
							   
							   
							   <input type="hidden" class="form-control" id="daypriceall" name="daypriceall"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    >
							   
							   
							   <input type="hidden" class="form-control" id="daypriceall2" name="daypriceall2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    >
							   
							   
							</div>
						  </div>  
                     	  
                     	  
                     	  
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวนการผ่อน   </font>    
							   <select class="form-control" id="daytotal" name="daytotal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  OnKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
								$sql = "SELECT * FROM drop_round where name = '".$daytotal."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_round where name != '".$daytotal."' order by pk asc  "; 
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
						    
							   
                     	  
                     	  
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น/งวด   </font>   
							   <input type="text" class="form-control" id="daypriceshow1" name="daypriceshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly      value="<?php echo $daypriceshow1; ?>" >
							   
							   
							   <input type="hidden" class="form-control" id="dayprice" name="dayprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							</div>
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-2"  >		
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดผ่อนเดือนละ      </font>   
							  <input type="text" class="form-control" id="moneymonthshow" name="moneymonthshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly    value="<?php echo $moneymonthshow; ?>"   >
							  
							  <input type="hidden" class="form-control" id="moneymonth" name="moneymonth"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneymonth; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							</div>
						  </div> 
							
                     	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชำระทุกวันที่ </font>   
							   <select class="form-control  " id="daypayment" name="daypayment" required style=" width: 100%;" onChange="calAge2()"      >     
								<?php 
								$sql = "SELECT * FROM drop_day where name = '".$daypayment."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  	 
								?>
								<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_day where name != '".$daypayment."'   order by pk asc  "; 
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
						  </div> 
                     	   
                     	 
                          
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Icould    </font>   
							  <input type="text" class="form-control" id="dataicloud" name="dataicloud"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $dataicloud; ?>"     onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " value="<?php echo $dataicloud; ?>"  >
							</div>
						  </div> 
                          
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะภาษี   </font>    
							   <select class="form-control" id="pasycal" name="pasycal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
	
								$pasycal = "ภาษีรวมใน";
								$sql = "SELECT * FROM drop_pasy where name = '".$pasycal."' order by pk asc  "; 
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
                          
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่เริ่มชำระงวดแรก      </font>     
							  <input type="text" class="form-control current " id="startdate" name="startdate"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo $startdate; ?>" onChange="calAge2()" readonly >
							</div>
						  </div>  
                          
                          <script>
							
							function calAge2()
							{  
								var getday = document.getElementById("daytotal").value;  //// จำนวนงวด


								var moneystartprice = document.getElementById("moneystartprice").value; /// ราคาขาย
								var gemoneydata = document.getElementById("moneyprice").value; /// ราคาสินค้า ( ราคารวมผ่อน )
								var gemoneydata2 = document.getElementById("moneymonthshow").value; /// ยอดผ่อนเดือนละ 
								var gemoneydata3 = document.getElementById("moneydown").value; /// เงินดาวน์ 
								var gemoneydata4 = document.getElementById("moneyprice").value; /// ราคาขายจริง 
								var gemoneydata5 = document.getElementById("otherprice").value; /// ค่าทำสัญญา 
								var gemoneydata6 = ""; /// เปอร์เซ็น 
								
								var pasyselect = document.getElementById("pasycal").value; /// ภาษี 
								
								 
								var daycal = 0;
								if(getday == ""){

								}else{
									daycal = parseInt(getday);
								} 
								var daycalmoney2 = 0;
								if(gemoneydata == ""){

								}else{
									daycalmoney2 = parseInt(gemoneydata);
								} 
								var daycalmoney3 = 0;
								if(gemoneydata3 == ""){

								}else{
									daycalmoney3 = parseInt(gemoneydata3);
								} 
								var daycalmoney4 = 0;
								if(gemoneydata4 == ""){

								}else{
									daycalmoney4 = parseInt(gemoneydata4);
								}
								var daycalmoney5 = 0;
								if(gemoneydata5 == ""){

								}else{
									daycalmoney5 = parseInt(gemoneydata5);
								} 
								var daycalmoney6 = 0;
								if(gemoneydata6 == ""){

								}else{
									daycalmoney6 = parseInt(gemoneydata6);
								} 
								
								if(daycalmoney3 > daycalmoney2){
									 /// alert( daycalmoney3 + "  >    " + daycalmoney2);
									alert(" เงินดาวน์ > ราคาตั้งขาย");
									document.getElementById("moneydown").value = "";
									
								}else{
									 
								var daypayment = (daycalmoney2 - daycalmoney3); 
								 document.getElementById("daypriceall").value = Commas(daypayment.toFixed(0)); 
								 document.getElementById("daypriceall3").value = Commas(daypayment.toFixed(0)); 
								 document.getElementById("daypriceall2").value = (daypayment.toFixed(0)); 
 
									
								var daypayment2 = 0; 
								var daypayment3 = 0; 
									
								daypayment2 = (daypayment / daycal); 
								daypayment3 = (daypayment2 * 0.07); 
									
								if(pasyselect == "ไม่คิดภาษี"){
									daypayment3 = 0; 
								}
								if(pasyselect == "ภาษีรวมใน"){
									 daypayment2 = ( (daypayment / daycal) * 100 ) / 107; 
									 daypayment3 = (daypayment2 * 0.07); 
								}
									
									 
									
								var totalpaysy = daypayment3 + daypayment2;
									
									/// alert( daypayment3 + " + "  + daypayment2  );
								
								document.getElementById("daypriceshow1").value = Commas(daypayment2.toFixed(0)); 
								/// document.getElementById("daypriceshow2").value = Commas(daypayment2.toFixed(0)); 
								
								document.getElementById("moneymonthshow").value = Commas(totalpaysy.toFixed(0)); 
								document.getElementById("moneymonth").value = (totalpaysy.toFixed(0)); 
								
								document.getElementById("dayprice").value = (totalpaysy.toFixed(0));  
								 
									 
									 
								}
								
							}
						  </script>
                          
                           <script> 
								function Checkcode()
								{   
									var codecustomer = document.getElementById("codecustomer").value; 
									var bill_no = document.getElementById("bill_no").value; 

									$.ajax({
									type: "POST",
									url: "check_code_user.php",
									data: {data1:codecustomer, data2:bill_no},
									success: function(result) { 
										var check_number = result.ans; 
										if(check_number == 0){ 
											document.getElementById("txtwarning").innerHTML = " รหัสลูกค้า  ";
										}else{  

											document.getElementById("txtwarning").innerHTML = " *** รหัสลูกค้า ซ้ำในระบบ ";
											alert(' รหัสลูกค้า  ซ้ำในระบบ !!! ');	 
										}
										}
									});

								} 
								</script>
                          
                          <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px"   id="txtwarning" > รหัสลูกค้า </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $codecustomer; ?>" required      onKeyUp="Checkcode()" >
							</div>
						  </div>  
                           
                          <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าสัญญา </font>   
							  <input type="text" class="form-control" id="admin1" name="admin1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin1; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
							</div>
						  </div> 
                          <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวน % </font>   
							  <input type="text" class="form-control" id="admin2" name="admin2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin2; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  required >
							</div>
						  </div> 
                          <div class="col-md-2" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดเงิน </font>   
							  <input type="text" class="form-control" id="admin3" name="admin3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin3; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
							</div>
						  </div> 
                          <div class="col-md-2" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าคอมฯ </font>   
							  <input type="text" class="form-control" id="admi41" name="admin4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin4; ?>"    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" >
							</div>
						  </div> 
                          <div class="col-md-2" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดผ่อนรวม </font>   
							  <input type="text" class="form-control" id="admin5" name="admin5"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin5; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
							</div>
						  </div> 
                          <div class="col-md-2" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ทุนสินเชื่อ </font>   
							  <input type="text" class="form-control" id="admin6" name="admin6"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin6; ?>"    >
							</div>
						  </div> 
                          <div class="col-md-2" style="display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > หัก 3% </font>   
							  <input type="text" class="form-control" id="admin7" name="admin7"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $admin7; ?>"    >
							</div>
						  </div> 
                           
                           
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะอนุมัติ   </font>    
							   <select class="form-control" id="statusadmin" name="statusadmin" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php  
								$sql = "SELECT * FROM drop_status_partner where name = '".$statusadmin."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							    <?php  
								$sql = "SELECT * FROM drop_status_partner where name != '".$statusadmin."' order by pk asc  "; 
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
                          
						<div class="col-md-12"  >  </div> 
                           
						<div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ช่องทางชำรเงิน   </font>    
							   <select class="form-control" id="bank2" name="bank2" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "   >  
							    <?php 
								$sql = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk 
								where a.name != ''  and a.pk = '".$bank2."' order by a.pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$nambank = "";
									$sql2 = "SELECT * FROM bank where pk = '".$objResult["bank"]."'    order by pk asc  "; 
									$query2 = mysqli_query($objCon,$sql2);
									while($objResult2 = mysqli_fetch_array($query2))
									{ 
										$nambank =  $objResult2["name"];
									} 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $nambank." ".$objResult["name"]. " [ " .$objResult["bookbank"] . " ] " ; ?></option> 
								<?php  
								}
								?>     
							    <?php 
								$sql = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk 
								where a.name != ''  and a.pk != '".$bank2."' order by a.pk asc "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$nambank = "";
									$sql2 = "SELECT * FROM bank where pk = '".$objResult["bank"]."'    order by pk asc  "; 
									$query2 = mysqli_query($objCon,$sql2);
									while($objResult2 = mysqli_fetch_array($query2))
									{ 
										$nambank =  $objResult2["name"];
									} 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $nambank." ".$objResult["name"]. " [ " .$objResult["bookbank"] . " ] " ; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>
                          
                            
						 <div class="col-md-2"  >	
						 <div class="form-group">
						   <font color = '#000' size="3px" > QR   </font>    
						   <select class="form-control" id="qrdatashow" name="qrdatashow" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "     onChange="showQR()"  > 
						   <?php if(empty($qrdata)){?> 
							<option value=""> เลือก QR  </option> 
						    <?php } ?> 
							<?php 
							$sql = "SELECT * FROM qrimage where name = '".$qrdata."' order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							?>
							<option value="<?php echo $objResult["pk"]."///".$objResult["img"]; ?>"><?php echo $objResult["name"]; ?></option> 
							<?php  
							}
							?>      
							<?php 
							$sql = "SELECT * FROM qrimage where name != '".$qrdata."' order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							?>
							<option value="<?php echo $objResult["pk"]."///".$objResult["img"]; ?>"><?php echo $objResult["name"]; ?></option> 
							<?php  
							}
							?>      
							</select>
							</div>
						  </div> 
                         
                          <input type="hidden" id="qrdata" name="qrdata" value="<?php echo $qrdata; ?>">
                          
                           <script>    
							function showQR() {
								var x = document.getElementById("qrdatashow").value; 
								var getX = x.split("///");

								document.getElementById("qrdata").value = getX[0];   
 
							}
 
						  </script>
                          
                          
                           
                          
                          <div class="col-lg-12" align="center"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

						  	  <a href="checkcontactpartner.php">
						  		 
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
                          
                          
                           
						 </form>  
                            
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