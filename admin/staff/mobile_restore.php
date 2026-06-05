<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	
		 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "1";
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
	$bank = "";


	
	
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


?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกรายการรับซ่อมมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกรายการรับซ่อมมือถือ    </font>   
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
                     <font size="4px" color="#000000">  บันทึกรายการรับซ่อมมือถือ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                       
                          <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="mobile_restore.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  บันทึกรายการรับซ่อมมือถือ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="mobile_restore_edit.php">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แก้ไขรายการรับซ่อมมือถือ    </font>  
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
                        
                     	   
                      	  <form role="form" name="frmMain" method="post" action="save_mobile_restore.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
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
							  <input type="text" class="form-control current "  id="datesave" name="datesave" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"     >
							</div>
						    </div> 
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      	  
                    	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>    
							    <select class="form-control" id="major" name="major" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onchange="LoadDropdown()"   >   
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
							</div>
						  </div>
                     
				  		  <script>   
							$( document ).ready(function() {   
								 LoadDropdown();    
							});
							  
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
                     
                     
                     
                     		<div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อลูกค้า </font>   
							  <input type="text" class="form-control" id="customer" name="customer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"     >
							</div>
						   </div>  
                    		
                     		<div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone" name="telphone"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10"  value="<?php echo $telphone; ?>"  >
							</div>
						   </div>
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                    
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสหน้าจอ </font>   
							  <input type="text" class="form-control" id="proshow5" name="proshow5"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div> 
                     
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							  <input type="text" class="form-control" id="proshow1" name="proshow1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div> 
							 
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							  <input type="text" class="form-control" id="proshow2" name="proshow2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     >
							</div>
						  </div> 
							   
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อีมี่ </font>   
							  <input type="text" class="form-control" id="proshow4" name="proshow4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div>  
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อื่น </font>   
							  <input type="text" class="form-control" id="proshow6" name="proshow6"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div>  
                     
                      	  <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสลูกค้า (กรอกเอง) </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"    >
							</div>
						  </div>
                       
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รายการส่งซ่อม </font>   
							   <select class="form-control" id="typerestore" name="typerestore" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  onchange="LoadDropdown()"   >  
								<option value="">  โปรดเลือกอาการ    </option> 
							    <?php 
								$sql = "SELECT * FROM drop_typerestore where name = '".$typerestore."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore where name != '".$typerestore."' order by pk asc  "; 
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
                      
                      	  <div class="col-md-12" style="display: none; " id="addother"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > อื่นๆ </font>   
							  <input type="text" class="form-control" id="proshow7" name="proshow7"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >
							</div>
						  </div>  
                     
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ส่งซ่อมที่ไหน </font>    
							   <select class="form-control" id="sendata" name="sendata" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "   >  
								 
							    </select>
							</div>
						  </div>  
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      	  
                     
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone1" name="telphone1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10" >
							</div>
						  </div>  
                      	   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone2" name="telphone2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" maxlength="10" >
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
										$.ajax({
											type: "GET",
											url: "get_show_addtable.php",
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
									 
									 var jsonString = "";  
										$.ajax({
											type: "POST",
											url: "save_detial.php?save_key="+save_key+"&detail="+detail,
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
							  <input type="text" class="form-control   " id="price4" name="price4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()" >
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > กรอกต้นทุนงานซ่อม </font>   
							  <input type="text" class="form-control   " id="price1" name="price1"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()" >
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group"> 
							   <font color = '#000' size="3px" > ราคาขายหน้าร้าน </font>   
							  <input type="text" class="form-control   " id="price2" name="price2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value=""  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   onKeyUp="calAge3()"  onChange="calAge3()">
							</div>
							</div>
                      	   <div class="col-md-3"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" >  กำไร </font>   
							  <input type="text" class="form-control   " id="price3" name="price3"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="" readonly  >
							</div>
							</div>
               		  	
							<script> 
							function calAge3()
							{  
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
								$sql = "SELECT * FROM drop_typerestore2 where name = '".$statusave."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore2 where name != '".$statusave."' order by pk asc  "; 
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
								$sql = "SELECT * FROM drop_typerestore3 where name = '".$statusavevat."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore3 where name != '".$statusavevat."' order by pk asc  "; 
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
							   <font color = '#000' size="3px" > สถานะชำระเงิน </font>   
							   <select class="form-control" id="statuspayment" name="statuspayment" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  >   
							    <?php 
								$sql = "SELECT * FROM drop_typerestore4 where name = '".$statuspayment."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_typerestore4 where name != '".$statuspayment."' order by pk asc  "; 
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
               		  
               		  
               		  
							  <div class="col-md-6"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($bank)){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
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
									$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
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