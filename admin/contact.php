<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
ini_set("memory_limit","512M");
 
	
		 
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
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกทำสัญญาผ่อนมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > ออกสัญญา  </font>   
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
                     <font size="4px" color="#000000">  บันทึกทำสัญญาผ่อนมือถือ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  
					
						$customer = "";
						if(empty($_GET["customer"])){
							
							echo("<script>window.location = 'customer_select.php';</script>");
						}else{
							$customer = $_GET["customer"];
						}
					 
						?>
                       
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="contact_history.php">   
					    		<div  >   
					    		<img src="images/search2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  เช็คประวัติลูกค้า   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="contact.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกสัญญา    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="contact.php?page=edit">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แก้ไขสัญญา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                          <div class="col-lg-12">
							<hr>
						  </div>
                        
						  <script>
							function validateForm() {  
								 var x1 = document.getElementById("customerid").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือกข้อมูลลูกค้า ");
									return false;
								 }
								 var x1 = document.getElementById("productid").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือกรายการสินค้า ");
									return false;
								 }
 		
								 var x1 = document.getElementById("qrdata").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือก QR ");
									return false;
								 }
								}
							</script>
                     	   
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

						<form role="form" name="frmMain" method="post" action="save_contact.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	   
                      	  <input type="hidden" id="customerid" name="customerid" value=""  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value=""  >
                      	  <input type="hidden" id="productid" name="productid" value=""  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value=""  >
                      	  
				  		  <script> 
							$( document ).ready(function() {   
								 LoadDropdown();   
								 myFunction2();    
								 myFunction1();  
							});
							  
							  
						  	function myFunction1() 
							{
							 var x = document.getElementById("customer").value; 
							 var getX = x.split("///");

							 document.getElementById("customerid").value = getX[0];  
							 document.getElementById("shwocontact").innerHTML = getX[1];  /// ราคา  
							 document.getElementById("namcustomer").value = getX[2];  /// ราคา  
								 
							 if(getX[1] == "มีหนี้ระบบ"){
							 document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 }else  if(getX[1] == "ไม่มีหนี้ในระบบ"){
							 document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 } 
 
							 }
							  
							function myFunction2()
							{    
								 document.getElementById("productid").value = "";   
								 document.getElementById("proshow1").value = "";    
								 document.getElementById("proshow2").value = "";    
								 document.getElementById("proshow3").value = ""; 
								 document.getElementById("priceorder").value = ""; 
								 document.getElementById("showproduct").innerHTML = " รายการ "; 
								
								
								var typedata = document.getElementById("producttype").value; 
							 	var getX = typedata.split("///");
							 	document.getElementById("producttypename").value = getX[1];  
									
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown.php?typedata="+getX[0],
									success: function(result) {
										$('#product').html(result);
										
										calAge2();
									}
								});		
								 
							}
							  
							function myFunction3()
							{   
								var typedata = document.getElementById("producttypename").value; 
								var product = document.getElementById("product").value; 
							 	var getX = product.split("///"); 
									
								 document.getElementById("productid").value = getX[0];   
								 document.getElementById("proshow1").value = getX[2];   
								 document.getElementById("proshow2").value = getX[3]; 
								 document.getElementById("proshow3").value = getX[4];   
								 document.getElementById("money").value = getX[5];   
								 document.getElementById("moneystartprice").value = getX[8];   
								 document.getElementById("priceorder").value = getX[8];   
								 document.getElementById("showproduct").innerHTML = " รายการ " + getX[6] + " " + getX[1] +"   สินค้าจาก "+ getX[7] +"";  /// ราคา   
								
								 document.getElementById("proshow4").value = getX[9]; 
								
								calAge2();
									 									
							}
							  
							function Checkcode()
							{   
								var codecustomer = document.getElementById("codecustomer").value; 
								 
								$.ajax({
								type: "POST",
								url: "check_code.php",
								data: {data1:codecustomer},
								success: function(result) { 
									var check_number = result.ans; 
									if(check_number == 0){ 
									}else{  
										alert(' รหัสลูกค้า ซ้ำในระบบ !!! ');	 
									}
									}
								});
 								
							}
							   
							function calAge2()
							{  
								var getday = document.getElementById("daytotal").value;  //// จำนวนงวด


								var gemoneydata = document.getElementById("money").value; /// ราคาตั้งขาย
								var gemoneydata2 = document.getElementById("dayprice").value; /// เงินต้น/งวด 
								var gemoneydata3 = document.getElementById("moneydown").value; /// เงินดาวน์ 
								var gemoneydata4 = document.getElementById("priceorder").value; /// ราคาขายจริง 
								var gemoneydata5 = document.getElementById("moneycontact").value; /// ค่าทำสัญญา 
								var gemoneydata6 = document.getElementById("percent").value; /// เปอร์เซ็น 
								
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
								
								if(daycalmoney3 > gemoneydata){
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
								
								document.getElementById("daypriceshow1").value = Commas(daypayment2.toFixed(0)); 
								document.getElementById("daypriceshow2").value = Commas(daypayment2.toFixed(0)); 
								
								document.getElementById("moneymonthshow").value = Commas(totalpaysy.toFixed(0)); 
								
								document.getElementById("dayprice").value = (totalpaysy.toFixed(0)); 
								document.getElementById("moneymonth").value = (totalpaysy.toFixed(0)); 
								 
									
									  
								document.getElementById("pasyshow").value = Commas(daypayment3.toFixed(0)); 
								document.getElementById("pasy").value = (daypayment3.toFixed(0)); 
									
									
									
								 
								var daypayment4 = (gemoneydata4 - daycalmoney3 - daycalmoney5) * (  daycalmoney6 /  100 );  
									
									
								if(daypayment4 <= 0){
									daypayment4 = 0;
								}  
								document.getElementById("computer").value = (daypayment4.toFixed(0)); 
								document.getElementById("computer2").value = (daypayment4.toFixed(0)); 
 
								
								var stardate = document.getElementById("startdate").value;
								var endata = getday;
								var tmp = stardate.split("/");
								var current = new Date();

								var today1 =  (tmp[0]); 
								var today2 =  (tmp[1]); 
								var today3 =  (tmp[2]-543); 

								var today = new Date(today2+"/"+today1+"/"+today3);


								var loop = parseInt(endata)-1;
								var enddaytotal = loop * 30;
								
								
								
								var t = new Date(today);
								t.setDate(t.getDate() + enddaytotal); 
								var month = "0"+(t.getMonth()+1);
								var date = "0"+t.getDate();
								month = month.slice(-2);
								date = date.slice(-2);
								var date = date +"/"+month +"/"+t.getFullYear();

								var tmp2 = date.split("/"); 
								var new_year = parseInt(tmp2[2])+543;

								document.getElementById("endate").value  =   tmp2[0]+"/"+tmp2[1]+"/"+new_year;
								
								Getsearchdata2();
								}
								
							}
 
							function LoadDropdown()
							{    
								var major = document.getElementById("major").value;   
								 
									
								   
								$.ajax({
									type: "GET",
									url: "dropdown_major5.php?major="+major,
									success: function(result) {
									$('#producttype').html(result);
									}
								});	  											
							}  
						  </script>
                      	  
                          <div class="col-lg-12" >  
                          
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
						   
                     	  
                     	  
                      	  <div class="col-md-12"  >   </div>
                      	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่บันทึก </font>   
							  <input type="text" class="form-control current" id="datesave" name="datesave"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo date('d/m')."/".(date('Y')); ?>"  readonly  >
							</div>
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-12"  >   </div>
                     	  
                      	  <div class="col-md-3"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font>        
							    <div class="input-group  "  style="border: 1px solid #FFFF; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control myselect" id="customer" name="customer" required style=" width: 100%; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   "  onchange="myFunction1()"    >   
							    <?php 
								$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{
									
									$showclose = "ไม่มีหนี้ในระบบ";
									$sql_chk = " SELECT * FROM list_order where customer = '".$objResult["pk"]."'
									and status = 'ปกติ'  
									and closebill = 'เป็นหนี้'    
									order by pk desc  ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = "มีหนี้ระบบ";   
									}
											 
								?>
								<option value="<?php echo $objResult["pk"]."///".$showclose."///".$objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							    </select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>  
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
								<div    class="btn btn-primary" style=" background-color: #323D55; border-radius: 5px; width: 100%; height: 35px; border-color: #323D55; margin-top: 25px; "  id="btnshwocontact"    > 
								<font color="#FFF" size="2px" class="serif1" id="shwocontact" >    มีหนี้ระบบ / ไม่มีหนี้ในระบบ   </font> 
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-12"  >   </div>
                      	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อผู้ทำสัญญา </font>   
							  <input type="text" class="form-control" id="namcustomer" name="namcustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-3"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกประเภทสินค้า </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control" id="producttype" name="producttype" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; " onchange="myFunction2()"    >
							    
							    </select>
								<span class="input-group-append">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-3"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > โปรดเลือกรายการสินค้า </font>        
							    <div class="input-group   "  style="border: 0px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control myselect" id="product" name="product" required style=" width: 100%; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; "  onchange="myFunction3()"    > 
							    </select>
							    
								<script type="text/javascript">
								$(".myselect").select2();
								</script>  
								
								<span class="input-group-append" style=" display: none; ">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-9"   >	
							<div class="form-group"  style="background-color: #FFFAFA; border: 1px solid #F77369; border-radius: 5px; " >
							   <p style="margin-top: 10px;  margin-left: 10px; margin-right: 10px; ">
								<font color = '#000' size="3px" id="showproduct" > รายการ   </font>  
							   </p> 
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-12"  >  </div>
                      	   
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							  <input type="text" class="form-control" id="proshow1" name="proshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							  <input type="text" class="form-control" id="proshow2" name="proshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   >
							</div>
						  </div> 
							 
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly  >
							</div>
						  </div> 
						   
                      	  <div class="col-md-12"  >  </div>
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > Apple id </font>   
							  <input type="text" class="form-control" id="appleid" name="appleid"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $appleid; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสผ่าน </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $password; ?>"     >
							</div> 
						  </div> 
						   
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสลูกค้า (กรอกเอง) </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $address; ?>"    onchange="Checkcode()" onKeyUp="Checkcode()" >
							</div>
						  </div>
                    	  
                      	  <div class="col-md-12"  >  </div>
                    	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเลขเครื่อง </font>   
							  <input type="text" class="form-control" id="proshow4" name="proshow4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly  >
							</div>
						  </div> 
                    	   
                     	  
                          </div>  
                          
                          
                          <div class="col-lg-12" >  
                          
                            <div class="col-lg-12 ">   </div>
                     	  
						  <div class="row ">   
                  		  <div class="col-lg-3 ">   
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ช่องทางชำระเงิน   </font>    
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
                     	    
                  		  <div class="col-lg-12 ">   </div>
                     	  
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่เริ่มชำระงวดแรก      </font>     
							  <input type="text" class="form-control current " id="startdate" name="startdate"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo date('d/m')."/".(date('Y')); ?>" onChange="calAge2()" readonly >
							</div>
						  </div>  
						   
						  <div class="col-md-6 " style=" display: none; "> 
							<div class="form-group"> 
								<font class="serif" size="3px" color="black" for="address"> ถึงวันที่สิ้นสุด </font>  
				  				<input type="text" class="form-control" id="endate" name="endate"  autocomplete="off" readonly    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369;"   >
							</div>
						  </div> 
                         
                          
                  		  <div class="col-lg-12 ">   </div>
                          
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > QR   </font>    
							   <select class="form-control" id="qrdatashow" name="qrdatashow" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "     onChange="showQR()"  > 
							   
							   <option value=" "> เลือก QR </option> 
							     
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
                         
                         
                          <input type="hidden" id="qrdata" name="qrdata" value="">
                           
                          </div>
                          
                  		  <div class="col-lg-3 ">   
                        
                           <img id="blah" style="width: 100%; " /> 
                        
                          </div> 
                          <script>
							  
							   /// รายการ     
							function showQR() {
								var x = document.getElementById("qrdatashow").value; 
								var getX = x.split("///");

								document.getElementById("qrdata").value = getX[0];   

									 if(getX[1] == ""){
										document.getElementById("blah").style.display = "none"; 
									 }else if(getX[1] == "null"){
										document.getElementById("blah").style.display = "none"; 
									 }else{
										document.getElementById("blah").style.display = "block"; 
										$('#blah').attr('src', "../img/"+getX[1]);
									 } 

							}

							  
						  </script>
                          </div>
                          
                          
                      	  <div class="col-md-12"  > </div>
                          
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาต้นทุน </font>   
							  <input type="text" class="form-control" id="moneystartprice" name="moneystartprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   >
							</div>
						  </div> 
                     	   
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาตั้งขาย </font>   
							  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   >
							</div>
						  </div> 
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินดาวน์   </font>   
							  <input type="text" class="form-control" id="moneydown" name="moneydown"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "    > 
							</div>
						  </div>  
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น   </font>   
							  <input type="text" class="form-control" id="daypriceall" name="daypriceall"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    >
							  
							  <input type="hidden" class="form-control" id="daypriceall2" name="daypriceall2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    >
							</div>
						  </div>  
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวนงวด   </font>    
							   <select class="form-control" id="daytotal" name="daytotal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
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
							   <font color = '#000' size="3px" > รวมเงินทั้งสิ้น   </font>  
							   <input type="text" class="form-control" id="daypriceall3" name="daypriceall3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    >
							</div>
						  </div>  
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น/งวด   </font>   
							   <input type="text" class="form-control" id="daypriceshow1" name="daypriceshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							   
							   
							   <input type="hidden" class="form-control" id="dayprice" name="dayprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							</div>
						  </div> 
                           
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดชำระต่องวด   </font> 
							   <input type="text" class="form-control" id="daypriceshow2" name="daypriceshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะภาษี   </font>    
							   <select class="form-control" id="pasycal" name="pasycal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name = '".$pasycal."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_pasy where name != '".$pasycal."' order by pk asc  "; 
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
							   <font color = '#000' size="3px" > ภาษี   </font>   
							  <input type="text" class="form-control" id="pasyshow" name="pasyshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   >
							    
							  <input type="hidden" class="form-control" id="pasy" name="pasy"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   >
							</div>
						  </div>  
                     	   
							
                      	  <div class="col-md-2"  >		
							<div class="form-group">
							   <font color = '#000' size="3px" > ผ่อนเดือนละ      </font>   
							  <input type="text" class="form-control" id="moneymonthshow" name="moneymonthshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneymonth; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							  
							  <input type="hidden" class="form-control" id="moneymonth" name="moneymonth"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneymonth; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  >
							</div>
						  </div> 
							
                     	  
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่า COD    </font>   
							  <input type="text" class="form-control" id="cod" name="cod"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $cod; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; ">
							</div>
						  </div> 
                     	   
                     	  
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าทำสัญญา      </font>   
							  <input type="text" class="form-control" id="moneycontact" name="moneycontact"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneycontact; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " >
							</div>
						  </div> 
                          
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวน%      </font>   
							  <input type="text" class="form-control" id="percent" name="percent"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $percent; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " >
							</div>
						  </div> 
							
                      	  <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าคอม      </font>   
							  <input type="text" class="form-control" id="computer" name="computer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							  
							  <input type="hidden" class="form-control" id="computer2" name="computer2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer2; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
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
                  		 
                          
                  		  <div class="col-lg-12 ">   </div>
							   
                           
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						 <div class="table-responsive"  id="showtabledata"   >
						 <table  class=" table    tablemobile  " border="0"    > 
						   
						  
                  		 </table> 
                  		 </div> 
                  		 </div>
                  		
                          
                          <script>  
							 $( document ).ready(function() {   
								   Getsearchdata2() ;  
							 });

							 function Getsearchdata2() 
							 { 
								var loop = document.getElementById("daytotal").value; /// เงินกู้
								var dayprice = document.getElementById("dayprice").value; /// เงินกู้
								var daypayment = document.getElementById("daypayment").value; /// เงินกู้
								var daystart = document.getElementById("startdate").value; /// เงินกู้

								 //// loadtable_save.php?dayround=6&dayprice=&daypayment=1&daystart=06/11/2566 
								//// alert("loadtable_save.php?dayround="+loop+"&dayprice="+dayprice+"&daypayment="+daypayment+"&daystart="+daystart);
								   
								$.ajax({
								type: "GET",
								url: "loadtable_save.php?dayround="+loop+"&dayprice="+dayprice+"&daypayment="+daypayment+"&daystart="+daystart,
								success: function(result) {
									$('#showtabledata').html(result);
								}
								});	

							 } 
						  </script>
                          
                          
                           
                          <div class="col-lg-12" align="center"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
                  	  
					  <?php } ?>
                   		    
                      <?php if(isset($_GET["page"])){  
								if(($_GET["page"] == "edit")){ ?>
                   		  
                             <div class=" col-lg-6 "  align="left" >
							<table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr>
									<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
									<a href="contact.php?page=history">   
									<div  >   
									<img src="images/search2.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  เช็คประวัติลูกค้า   </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"   >   
									<a href="contact.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  ออกสัญญา    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#F77369"  > 
									<a href="contact.php?page=edit">   
									<div  >   
									<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขสัญญา   </font>  
									</div>
									</a>
									</td>
								</tr>
							</table>
						   </div>
                        
                       		 <div class="col-lg-12"> &nbsp; </div>
                        
                    	     <div   class="col-lg-10"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="20%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/รหัสลูกค้า/เบอร์โทร/รหัสเครื่อง   </font>

										<form action="contact.php" method="get" >
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>  
										<td width="1%">&nbsp;
										
										</td> 
										<td width="20%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname2)){ ?>
										  	<option value="">  สาขา    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname2)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										    <?php } ?>
											</select> 
										  <span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										</form> 

										</td>   
										<td width="1%">&nbsp;  
										
										</td> 
										<td width="20%">
										<a href="contact.php?page=edit"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										    &nbsp;  
										<a href="print_ex_contact.php?page=edit" target="_blank"  > 
										 <button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; width: 130px; height: 40px; border-color: #006400; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    Export Excel   </font> </button> 
										</a> 
										</td>  
									</tr>
								</table>  
								</div>
                     
                       		 <div class="col-lg-12"> &nbsp; </div>
                       		 
                       		 
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
									if(empty($_GET["searchname"])){

									}else{
										$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like '%".$searchname."%' or a.bill_no like '%".$searchname."%' or b.telphone like '%".$searchname."%' or c.codeno like '%".$searchname."%'   )";
									}
									$addcode2 = ""; 
									if(empty($_GET["searchname2"])){

									}else{
										$addcode2 = " and major = '".$searchname2."'  ";
									} 

									$addcode3 = ""; 
									if(empty($_GET["typedata"])){
									}else if(($_GET["typedata"] == "ปกติ")){	

										$addcode3 = " and status = 'ปกติ'  ";

									}else if(($_GET["typedata"] == "อนุมัติ/สัญญาโมฆะ")){

										$addcode3 = " and status = 'อนุมัติ/สัญญาโมฆะ'  ";

									}else{

									} 

								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;
								$total_record= 0;
															  
								$sql2 = " SELECT a.* FROM list_order  a
								left Join customer b On   a.customer = b.pk
								left Join product c On   c.pk = a.menu_id
								where a.bill_no != '' and a.closebill = 'เป็นหนี้'   and a.contactstatus = 'อนุมัติแล้ว' 
								".$addcode.$addcode2.$addcode3."  
								order by a.pk asc    "; 
								    
												 			 
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2); 
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="contact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="contact.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="contact.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="contact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="contact.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"&page=edit><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="contact.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="contact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>

							</div>
                    
                     
                          	 <?php 
															  
							/*						
							$sql2 = " SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''    and a.closebill = 'เป็นหนี้' 
							".$addcode.$addcode2."  
							order by a.pk asc  ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								if($objResult2["status"] == "ปกติ"){
									$totalcal1++;
								}
								if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){
									$totalcal2++;
								}
							}
							*/
							?>
                   		 
						    <div class="col-lg-8"  align="right"   id="showcalsumdata" style=" display: none; "  > 
							<a href="contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=ปกติ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ปกติ <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=อนุมัติ/สัญญาโมฆะ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  อนุมัติ/สัญญาโมฆะ <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>
 
							</div>
                    
                     
                   			<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 2900px;"    >
							    <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>  
								
								
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th> 
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ใบแจ้งหนี้     </font></div></th> 
								
								
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคืนเครื่อง     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th> 

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
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
									   
										$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
												left Join customer b On   a.customer = b.pk
												left Join product c On   c.pk = a.menu_id
												where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว' 
												".$addcode.$addcode2.$addcode3."  
												order by a.pk asc   limit {$start} , {$perpage}   ";  
															  
															  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											 
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"];  
												$c_status = $objResult2["c_status"];  
											
											
												$name_create = "-"; 
												$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
														$name_create =  $objResult["name"];
												}
											   
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_major = "-"; 
												$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create3 =  $objResult_c["name"];
														}
												}
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$name_major =  $objResult_c["name"];
												}
											
											
											
											
												$onoff_edit = "ON";
												$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' and income != ''   
												order by pk asc limit 1 "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$onoff_edit =  "OFF";
												}
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 
										
										</font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										   <?php echo number_format(0+$objResult2["moneydown"]); ?> 
										
										</font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<a href="printbill_note.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ใบแจ้งหนี้   
										</font>  
										</a> 
										
										</font></div></td>
										
										
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create; ?>    </font></div></td>
										
											
											
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult2["status"] == "ปกติ" ){ ?>

										<select class="form-control " style="background-color: #006400; color: white; font-size: 12px; " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option> 
											<option value="อนุมัติ/สัญญาโมฆะ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติ/สัญญาโมฆะ </font></option>       
										</select>  

									
										<font size="2px" id="showtxtcancel<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="display: none; "> อนุมัติ/สัญญาโมฆะ </font>
									
									
										<?php }else if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){  ?>
										
										<select class="form-control " style="background-color: #FF0000; color: white; font-size: 12px;  display: none;  " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
											<option value="อนุมัติ/สัญญาโมฆะ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติ/สัญญาโมฆะ </font></option>   
											<option value="ปกติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ปกติ </font></option>      
										</select>  
										
										
										<?php if($c_status == "รอการยืนยัน"){  ?>
										<font size="2px" class="serif2" color="#FF0000"> <?php echo $c_status; ?> </font>
										<?php }else{   ?>
										<font size="2px" class="serif2" color="#FF0000"> อนุมัติ/สัญญาโมฆะ </font>
										<?php }   ?>
										 
										 
										
										<?php } ?>
											
											    <!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณายืนยันการ ยกเลิกสัญญา <?php echo $objResult2["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	หมายเหตุ  <br> 
													ถ้าทำการกดยกเลิกสัญญาแล้ว รายการสินค้าจะถูกนำเข้าไปสต๊อกแบบเดิม
													และจะไม่สามารถใช้เลขที่สัญญาเดิมได้ หรือ ทำการแก้ไขอย่างอืนไม่ได้อีก
													โปรดตรวจสอบให้แน่ใจว่าได้ทำการตรวจสอบดีแล้ว
												 	
												 </font>
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	
												 	<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
												 	 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  ยกเลิกสัญญา   </font> </button>  </a>

							 					 
							 					     <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่ยกเลิกสัญญา  </font> </button> </a>
												 	 
												 </div>
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
											
									    <script>
										function 
										Canceldata<?php echo $objResult2["pk"]; ?>( ) {
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
											
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF0000"; 

											check_status_save = "อนุมัติ/สัญญาโมฆะ";  
												
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
												
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
												
											var major =  document.getElementById("searchname2").value; ///  
												
											
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill.php?status="+check_status_save+"&bill_no="+save_key,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												
												
												$.ajax({
													type: "GET",
													url: "showcalsumdata2.php?searchname2="+major,
													success: function(result) {
													$('#showcalsumdata').html(result);
													}
												});		
														 
												
											}
											});
											
											
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										///	alert(" YES "  +save_key );
											
										}
										function 
										CanceldataNo<?php echo $objResult2["pk"]; ?>( ) {
											// alert(" No "  );
											
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
												$.ajax({
												type: "GET",
												url: "drop_stautsshow.php?bill_no="+save_key,
												success: function(result) {
												$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
												}
												});		
											
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
										}
										   
										function 
										showUser<?php echo $objResult2["pk"]; ?>(str) {

											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
											if(check_status=="ปกติ"){ 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

												check_status_save = "ปกติ";
											}else if(check_status=="อนุมัติ/สัญญาโมฆะ"){ 
												 
												
												 $(document).ready(function(){ 
													$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
												 });   
												
												
												var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  

												$.ajax({
													type: "GET",
													url: "check_contact_dropdown2.php?bill_no="+typedata,
													success: function(result) {
													$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
													}
												});			
											
												
												
												/*
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF0000"; 

												check_status_save = "อนุมัติ/สัญญาโมฆะ";  
												
												document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
												
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
												
												
												$.ajax({
													type: "POST",
													url: "save_cancel_bill.php?status="+check_status_save+"&bill_no="+cut_data[1],
													contentType: 'application/json',
													data: jsonString,
													success: function(result) {
													//alert(result);
													}
													});



												*/
												 
											} 

											 
										}
									    </script>
									
									
										</font></div></td>    	
											
											
											
									   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										<?php echo $objResult2["typenpl1"]; ?> 
										  </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										  
										<?php  if($objResult2["closebill"] == "เป็นหนี้"){  ?>
										
										<?php if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){ ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > หมดหนี้ </font>  
										<?php }else{ ?>
										<font size="2px" class="serif2" color="#FF0000" style=" font-size: 13px; " > เป็นหนี้ </font> 
										<?php } ?>
										  
										<?php }else  if($objResult2["closebill"] == "หมดหนี้") { ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 13px; " > หมดหนี้ </font>  
										<?php } ?>
											 
										</font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>    </font></div></td>
										   
										   
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"> <font size="3px" color="Black" style=" font-size: 13px; " >  
									   
									   <?php if($onoff_edit == "ON"){ ?>
									   <?php  if($objResult2["closebill"] == "เป็นหนี้"){    ?>
									     
										<?php
										if($_SESSION["Status"] == "A"){	
										?>
										<a href="contact.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&page=2"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										แก้ไข   
										</font>  
										</a> 
										
										<?php }else{ ?>

										<a href="contact.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&page=2"   class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; display: none; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>



										<a onclick="SebndOTPget<?php echo $objResult2["pk"]; ?>()"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข   </font></a>


										<input type="hidden" id="pageget" name="pageget" value="ออกสัญญา">

										  

										<script>
										function SebndOTPget<?php echo $objResult2["pk"]; ?>( ) {
											 
											$(document).ready(function(){ 
											$('#myModalotp<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
											});   
											 
											   
										}
										function SendgetKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var note = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;
											 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "send_get_page_otp.php?pageget="+pageget+"&note="+note,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												  
												
											}
											});	
											
											 
											document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
											document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
											
											
											//////alert("loadchat_total.php?customer="+customerpk);
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});
											
											
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});

											
											
											var check_get_key = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(check_get_key == ""){
												alert(" การส่ง PIN ผิดพลาด ");
												 
											 
												document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
												document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
												
												
											}
											
											
										} 
										function CheckKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var checkkey1 = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											var checkkey2 = document.getElementById("getkey<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(checkkey1 == ""){
												alert(" กรุณาทำรายการข้อใหม่ ");
											}else if(checkkey1 != checkkey2){
												alert(" รหัสไม่ตรงกรุณากรอกรหัสใหม่ ");
												
											
												$.ajax({
												type: "GET",
												url: "load_key.php?pageget="+pageget+"&note=",
												success: function(result) {
													 /// alert(result); 

												  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 

												}
												});
												
												
											}else if(checkkey1 == checkkey2){
												document.getElementById("nextpage<?php echo $objResult2["pk"]; ?>").click();
											}
											
										} 
									</script>
									
											    <!-- modal small -->
										<div class="modal fade" id="myModalotp<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข  
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข
												 	
												 </font>
												  
												 </div> 
												 
												 <div class="col-lg-12" style="margin-top: 15px;" id="showtxt1<?php echo $objResult2["pk"]; ?>">   
												 	
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรุณาแจ้ง เหตุผลการแก้ไข 
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="note<?php echo $objResult2["pk"]; ?>" name="note<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="SendgetKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ส่งคำขอ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
											 
											 
												 </div>
												 
												 
												 
												 <div class="col-lg-12" style="margin-top: 15px; display: none; " id="showtxt2<?php echo $objResult2["pk"]; ?>">   
												 	
												 <input type="hidden" id="keycheck<?php echo $objResult2["pk"]; ?>" name="keycheck<?php echo $objResult2["pk"]; ?>" >
												 
												 
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรอกรหัส
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="getkey<?php echo $objResult2["pk"]; ?>" name="getkey<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="CheckKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันรายการ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
												 
												 
												 </div>
												 
												 
												 
												 
												 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
									<?php } ?>
										
									   <?php } ?>
									   <?php } ?>
										</font></div></td>
										   
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                  	  
                   	  <?php } }  ?>
                         
                         
                         
                         
						<?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						?>
                      
						  <div class=" col-lg-12 "  align="left" >
						  <div class=" col-lg-2 " style=" margin-top: 10px;"  >
						  <div class=" col-lg-12 " style="background-color: #6A5ACD; height: 50px; border-radius: 10px; " align="center" >
							<a href="contact.php">
							<div style="margin-top: 13px;" > 
								<font size="4px" color="#FFF">  ออกสัญญาใหม่   </font>   
							</div> 
							</a> 
						  </div>
						  </div>
						  <div class=" col-lg-2 " style=" margin-top: 10px;"  >
						  <div class=" col-lg-12 " style="background-color: #5F9EA0; height: 50px; border-radius: 10px; " align="center" >
							<a href="contact_new_customer.php">
							<div style="margin-top: 13px;" > 
								<font size="4px" color="#FFF">  เปลี่ยนสัญญาใหม่   </font>   
							</div> 
							</a> 
						  </div>
						  </div>  
						   
						  <div class=" col-lg-2 " style=" margin-top: 10px;"  >
						  <div class=" col-lg-12 " style="background-color: #5F9EA0; height: 50px; border-radius: 10px; " align="center" >
							<a href="contact.php?page=edit">
							<div style="margin-top: 13px;" > 
								<font size="4px" color="#FFF">  แก้ไขสัญญา   </font>   
							</div> 
							</a> 
						  </div>
						  </div>  
						  </div>
                     
                   	    <?php } } ?>
                         
                         
						<?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "2" ){
							
							
							$sql = "SELECT * FROM list_order Where  bill_no = '". $_GET["bill_no"] ."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$bill_no = $objResult["bill_no"]; 
								$room = $objResult["room"]; 
								$menu_id = $objResult["menu_id"]; 
								$money = $objResult["money"]; 
								$daytotal = $objResult["daytotal"]; 
								$dayprice = $objResult["dayprice"];  
								$daytotal2 = $objResult["daytotal2"];  
								$startdate = $objResult["startdate"];  
								$endate = $objResult["endate"];  
								$total = $objResult["total"];  
								$codecustomer = $objResult["codecustomer"];  
								$moneydown = $objResult["moneydown"];  
								$moneydata = $objResult["moneydata"];  
								$pasy = $objResult["pasy"];  
								$cod = $objResult["cod"];  
								$moneycontact = $objResult["moneycontact"];  
								$percent = $objResult["percent"];  
								$computer = $objResult["computer"];  
								$computer2 = $objResult["computer2"];  
								$priceorder = $objResult["priceorder"];  
								$major = $objResult["major"];  
								$customer = $objResult["customer"];  
								$endold = $objResult["endold"];  
								$dateold = $objResult["dateold"];  
								$bank2 = $objResult["bank"];  
								$pasycal = $objResult["pasycal"];  
								$qrdata = $objResult["qrdata"]; 
								$allday = $objResult["allday"]; 
								$appleid = $objResult["appleid"]; 
								$password = $objResult["password"]; 
								$create_date = $objResult["create_date"]; 


							}  

							$name_customer = "";
							$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_customer = $objResult["name"];
							}

							$producttype = "";
							$producttypename = "";
							$showclose4 = "-";
							$showclose3 = "-";
							$showclose1 = "-";
							$showclose2 = "-";
							$showclose5 = "-";
							$storerage = "-";
							$store = "-";
							$sql = "SELECT * FROM product where pk = '".$menu_id."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$producttypename = $objResult["name"];
								$producttype = $objResult["typedata"];
								$storerage = $objResult["storerage"];
								$store = $objResult["typedata_2"];   


								$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
								$query_chk = mysqli_query($objCon,$sql_chk); 
								while($objResult_chk = mysqli_fetch_array($query_chk))
								{
									$showclose4 = $objResult_chk["name"];   
								}

								$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
								$query_chk = mysqli_query($objCon,$sql_chk); 
								while($objResult_chk = mysqli_fetch_array($query_chk))
								{
									$showclose3 = $objResult_chk["name"];   
								} 
								$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
								$query_chk = mysqli_query($objCon,$sql_chk); 
								while($objResult_chk = mysqli_fetch_array($query_chk))
								{
									$showclose1 = $objResult_chk["name"];   
								} 
								$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
								$query_chk = mysqli_query($objCon,$sql_chk); 
								while($objResult_chk = mysqli_fetch_array($query_chk))
								{
									$showclose2 = $objResult_chk["name"];   
								}
								$sql_chk = " SELECT * FROM drop_typestore where pk = '".$storerage."' ";   
								$query_chk = mysqli_query($objCon,$sql_chk); 
								while($objResult_chk = mysqli_fetch_array($query_chk))
								{
									$showclose5 = $objResult_chk["name"];   
								}


							}	

								
											
							$onoff_edit = "ON";
							$sql_c = "SELECT * FROM history_payment where bill_no = '".$bill_no."' and income != ''   
							order by pk asc limit 1 "; 
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{ 
								$onoff_edit =  "OFF";
							}
							
							 if($onoff_edit == "OFF"){

								 echo("<script>alert(' มีการชำรงวดแรกแล้ว ไม่สามารถแก้ไขรายการได้ อีก ')</script>");
								 echo("<script>window.location = 'contact.php?page=edit';</script>");

							 }
							


							$cut = explode("-", $create_date);
							$savedatedata1 = $cut[0]."-".$cut[1]."-".($cut[2]);  

							$savedata1 = date("d/m/Y", strtotime($savedatedata1)); 
							$savedata2 = date("Y/m/d", strtotime($savedatedata1)); 

			
							
							
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
                         
                         <form role="form" name="frmMain" method="post" action="save_contact_update_edit.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>"  >
                      	  <input type="hidden" id="customerid" name="customerid" value="<?php echo $customer; ?>"  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value="<?php echo $producttypename; ?>"  >
                      	  <input type="hidden" id="productid" name="productid" value="<?php echo $menu_id ?>"  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value="<?php echo $moneydata; ?>"  > 
                      	  <input type="hidden" id="productidback" name="productidback" value="<?php echo $menu_id; ?>"  > 
                      	  <input type="hidden" id="store" name="store" value="<?php echo $store; ?>"  > 
                      	  
				  		  <script>  
						  	function myFunction1() 
							{
							 var x = document.getElementById("customer").value; 
							 var getX = x.split("///");

							 document.getElementById("customerid").value = getX[0];  
							 document.getElementById("shwocontact").innerHTML = getX[1];  /// ราคา  
							 document.getElementById("namcustomer").value = getX[2];  /// ราคา  
								 
							 if(getX[1] == "มีหนี้ระบบ"){
							 	document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 }else  if(getX[1] == "ไม่มีหนี้ในระบบ"){
							 	document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 } 
 
							 }
							  
							function myFunction2()
							{    
								 document.getElementById("proshow1").value = "";    
								 document.getElementById("proshow2").value = "";    
								 document.getElementById("proshow3").value = "";  
								 document.getElementById("showproduct").innerHTML = " รายการ "; 
								 
								var typedata = document.getElementById("producttype").value; 
								var moneyloop = document.getElementById("priceorder").value; 
								var store = document.getElementById("store").value; 
								var productid = document.getElementById("productid").value; 
							 	var getX = typedata.split("///");
							 	document.getElementById("producttypename").value = getX[1];  
									 
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_cleam_new.php?typedata="+getX[0]+"&pricecheck="+moneyloop+"&store="+store+"&productid="+productid,
									success: function(result) {
									$('#product').html(result);
									}
								});												
							}
							  
							function myFunction3()
							{   
								var typedata = document.getElementById("producttypename").value; 
								var product = document.getElementById("product").value; 
							 	var getX = product.split("///"); 
									
								/// alert(" sdf " + getX[0] );
								
								
								
								 document.getElementById("productid").value = getX[0];   
								 document.getElementById("proshow1").value = getX[2];   
								 document.getElementById("proshow2").value = getX[3];   
								 document.getElementById("proshow3").value = getX[4];    
								 document.getElementById("showproduct").innerHTML = " รายการ " + getX[6] + " " + getX[1] +"   สินค้าจาก "+ getX[7] +"";  /// ราคา   
								 
									 									
							}
							  
							function Checkcode()
							{   
								var codecustomer = document.getElementById("codecustomer").value; 
								 
								$.ajax({
								type: "POST",
								url: "check_code.php",
								data: {data1:codecustomer},
								success: function(result) { 
									var check_number = result.ans; 
									if(check_number == 0){ 
									}else{  
										alert(' รหัสลูกค้า ซ้ำในระบบ !!! ');	 
									}
									}
								});
 								
							}
							 
 
							function LoadDropdown()
							{   
								 
								var major = document.getElementById("major").value;  
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_major5.php?major="+major,
									success: function(result) {
									$('#producttype').html(result);
									}
								});	  											
							}  
						  </script>
                      	  
                          <div class="col-lg-7" >  
                          
                          <div class="col-md-8" style=" display: none; "  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "      >   
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
						  
						   
                      	  <div class="col-md-12"  >   </div>
                      	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่บันทึก </font>   
							  <input type="text" class="form-control current" id="datesave" name="datesave"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  value="<?php echo $savedata1; ?>"  readonly  >
							</div>
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-12"  >   </div>
						   
						  
                      	  <div class="col-md-8"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font>        
							    <div class="input-group  "  style="border: 1px solid #FFFF; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control myselect" id="customer" name="customer" required style=" width: 100%; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   "     >  
								 
							    <?php 
								$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$showclose = "ไม่มีหนี้ในระบบ";
									$sql_chk = " SELECT * FROM list_order where customer = '".$objResult["pk"]."'
									and status = 'ปกติ'  
									and closebill = 'เป็นหนี้'    
									order by pk desc  ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = "มีหนี้ระบบ";   
									} 	 
								?>
								<option value="<?php echo $objResult["pk"]."///".$showclose."///".$objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							    </select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>  
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
								<div    class="btn btn-primary" style=" background-color: #323D55; border-radius: 5px; width: 100%; height: 35px; border-color: #323D55; margin-top: 25px; "  id="btnshwocontact"    > 
								<font color="#FFF" size="2px" class="serif1" id="shwocontact" >   <?php echo $showclose; ?>   </font> 
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อผู้ทำสัญญา </font>   
							  <input type="text" class="form-control" id="namcustomer" name="namcustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;" value="<?php echo $name_customer ?>"  readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกประเภทสินค้า </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control" id="producttype" name="producttype" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; "   > 
									<?php 
									$sql = " SELECT * FROM drop_typedata where major = '".$major."' and pk = '".$producttype."'   order by pk asc "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]."///".$objResult["name"]; ?>">  
									<?php echo $objResult["name"]; ?> </option> 
									<?php  
									}
									?>      
							    </select>
								<span class="input-group-append">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > โปรดเลือกรายการสินค้า </font>        
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							   
							    <select class="form-control" id="product" name="product" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; "     > 
							    <?php 
								$sql = " SELECT * FROM product where 
								typedata = '".$producttype."'   
								and pk = '".$menu_id."' 
								and typedata_2 = '".$store."'  
								order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{    
									$showclose = "-";
									$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = $objResult_chk["name"];   
									}
									$showclose2 = "-";
									$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose2 = $objResult_chk["name"];   
									}
									$showclose3 = "-";
									$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose3 = $objResult_chk["name"];   
									}
									$showclose4 = "-";
									$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose4 = $objResult_chk["name"];   
									}
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$objResult["storerage"]."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]; ?>">  
								<?php echo $objResult["name"]; ?> </option> 
								<?php  
								}
								?>    
							    </select>
							    
								<span class="input-group-append">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-12"   >	
							<div class="form-group"  style="background-color: #FFFAFA; border: 1px solid #F77369; border-radius: 5px; " >
							   <p style="margin-top: 10px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px; ">
								<font color = '#000' size="3px" id="showproduct" > รายการ <?php echo $showclose3." ".$producttypename." สินค้าจาก ".$showclose4; ?>   </font>  
							   </p> 
							</div>
						  </div> 
                      	   
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							  <input type="text" class="form-control" id="proshow1" name="proshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose1; ?>" readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							  <input type="hidden" class="form-control" id="proshow2" name="proshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $storerage; ?>" readonly   >
							  
							  <input type="text" class="form-control" id="proshow21" name="proshow21"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose5; ?>" readonly   >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose2; ?>" readonly  >
							</div>
						  </div> 
							
                     	  
                     	  
                      	  <div class="col-md-12"  >	&nbsp;  </div>
                     	  
                      	  <div class="col-md-4"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > Apple id </font>   
							  <input type="text" class="form-control" id="appleid" name="appleid"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $appleid; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสผ่าน </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $password; ?>"     >
							</div> 
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสลูกค้า (กรอกเอง) </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $codecustomer; ?>"    onchange="Checkcode()" onKeyUp="Checkcode()"   >
							</div>
						  </div>
                     	  
                      	  <div class="col-md-12"  >	&nbsp;  </div>
                          
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาตั้งขาย </font>   
							  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo $moneydata; ?>"   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินดาวน์   </font>   
							  <input type="text" class="form-control" id="moneydown" name="moneydown"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  value="<?php echo $moneydown; ?>"  readonly  > 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น   </font>   
							  <input type="text" class="form-control" id="daypriceall" name="daypriceall"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly  value="<?php echo $moneydata-$moneydown; ?>"    >
							  
							  <input type="hidden" class="form-control" id="daypriceall2" name="daypriceall2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    value="<?php echo $moneydata-$moneydown; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวนงวด   </font>    
							   <select class="form-control" id="daytotal" name="daytotal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
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
							    </select>
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รวมเงินทั้งสิ้น   </font>  
							   <input type="text" class="form-control" id="daypriceall3" name="daypriceall3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly   value="<?php echo $moneydata-$moneydown; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น/งวด   </font>   
							   <input type="text" class="form-control" id="daypriceshow1" name="daypriceshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo number_format(0+($moneydata-$moneydown)/$daytotal, '0', '.', ','); ?>"  >
							   
							   
							   <input type="hidden" class="form-control" id="dayprice" name="dayprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo ($moneydata-$moneydown)/$daytotal; ?>"  >
							</div>
						  </div> 
                           
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดชำระต่องวด   </font> 
							   <input type="text" class="form-control" id="daypriceshow2" name="daypriceshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo number_format(0+($moneydata-$moneydown)/$daytotal, '0', '.', ','); ?>" >
							</div>
						  </div> 
							
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะภาษี   </font>    
							   <select class="form-control" id="pasycal" name="pasycal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
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
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ภาษี   </font>   
							  <input type="text" class="form-control" id="pasyshow" name="pasyshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)*0.07 , '0', ',', '.'); ?>"   >
							    
							  <input type="hidden" class="form-control" id="pasy" name="pasy"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)*0.07 , '0', ',', '.'); ?>"   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่า COD    </font>   
							  <input type="text" class="form-control" id="cod" name="cod"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $cod; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px;  "  readonly   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ผ่อนเดือนละ      </font>   
							   <?php $pasy = (($moneydata-$moneydown)/$daytotal)*0.07; ?>
							   <input type="text" class="form-control" id="moneymonthshow" name="moneymonthshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)+$pasy  , '0', '.', ','); ?>"  >
							  
							  <input type="hidden" class="form-control" id="moneymonth" name="moneymonth"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneymonth; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  value="<?php echo ($moneydata-$moneydown)/$daytotal; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าทำสัญญา      </font>   
							  <input type="text" class="form-control" id="moneycontact" name="moneycontact"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " value="<?php echo $moneycontact; ?>" readonly >
							</div>
						  </div> 
                          
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวน%      </font>   
							  <input type="text" class="form-control" id="percent" name="percent"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $percent; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าคอม      </font>   
							  <input type="text" class="form-control" id="computer" name="computer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							  
							  <input type="hidden" class="form-control" id="computer2" name="computer2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer2; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							</div>
						  </div> 
						  
                  		  <div class="col-lg-12 ">   </div>
                     	  
                     	  
                     	  <div class="row ">   
                  		  <div class="col-lg-8 ">   
                      	  <div class="col-md-12"  >	
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
						  
						  
                  		  <div class="col-lg-12 ">   </div>
                      	  <div class="col-md-6" style = "display: none;"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่เริ่มชำระงวดแรก      </font>     
							  <input type="text" class="form-control   " id="startdate" name="startdate"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo $dateold; ?>" onChange="calAge2()" readonly   >
							</div>
						  </div>  
						  
						  
                      	  <div class="col-md-6" style = "display: none;"  >	
							<div class="form-group"> 
								<font class="serif" size="3px" color="black" for="address"> ถึงวันที่สิ้นสุด </font>  
				  				<input type="text" class="form-control" id="endate" name="endate"  autocomplete="off" readonly    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369;" value="<?php echo $endold; ?>"   readonly >
							</div>
						  </div> 
                        
                  		  <div class="col-lg-12 ">   </div>
 
                      	  <div class="col-md-6" style = "display: none;"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชำระทุกวันทีของเดือน   </font>    
							   <select class="form-control" id="allday" name="allday"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "   >  
							    <?php
								if(empty($allday)){ 
								?>
						    	<option value=""> ชำระทุกวันทีของเดือน  </option> 
						    	<?php } ?>
							    <?php 
								$sql = "SELECT * FROM drop_day where name = '".$allday."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
								<?php 
								$sql = "SELECT * FROM drop_day where name != '".$allday."' order by pk asc  "; 
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
                          
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > QR   </font>    
							   <select class="form-control" id="qrdatashow" name="qrdatashow" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "     onChange="showQR()"  >  
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
                          
                         
                          </div>
                           
                          <?php
							$img = "";
							$sql = "SELECT * FROM qrimage Where  pk = '".$qrdata."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$img = $objResult["img"];   
							}  
							?>
	        
                  		  <div class="col-lg-3 ">   
                        
                           <?php
								$showimg = "";
								if(!empty($img)){ 
								$showimg = "../img/".$img; 
								}
							 ?>
							<img src="<?php echo $showimg; ?>" style="width: 100%;"  id="blah" > 
                        
                          </div> 
                           
                          <script>
							  
							  /// รายการ     
							function showQR() {
								var x = document.getElementById("qrdatashow").value; 
								var getX = x.split("///");

								document.getElementById("qrdata").value = getX[0];   

								 if(getX[1] == ""){
									document.getElementById("blah").style.display = "none"; 
								 }else if(getX[1] == "null"){
									document.getElementById("blah").style.display = "none"; 
								 }else{
									document.getElementById("blah").style.display = "block"; 
									$('#blah').attr('src', "../img/"+getX[1]);
								 } 

							}
 
						  </script>
                          </div>
                         
							  
                          </div> 
							    
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								
							  	  <a href="contact.php?page=edit">
							  	  	 
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