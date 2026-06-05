<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	
		 
	$name = ""; 
	$title = "";
	$bridedate = "";
	$age = "";
	$nickname = "";
	$address = ""; 
	$address1 = ""; 
	$address2 = ""; 
	$address3 = ""; 
	$address4 = ""; 
	$telphone = ""; 
	$line = ""; 
	$telphoneadd = ""; 
	$ashap = ""; 
	$pricemonth = ""; 
	$pricetotal = ""; 
	$passport = ""; 
	$drop_people = ""; 
	$drop_sex = ""; 
	$facebook = ""; 

	$name2 = ""; 
	$title2 = "";
	$bridedate2 = "";
	$age2 = "";
	$nickname2 = "";
	$address25 = ""; 
	$address21 = ""; 
	$address22 = ""; 
	$address23 = ""; 
	$address24 = ""; 
	$telphone2 = ""; 
	$line2 = ""; 
	$telphoneadd2 = ""; 
	$ashap2 = ""; 
	$pricemonth2 = ""; 
	$pricetotal2 = ""; 
	$passport2 = ""; 
	$drop_people2 = ""; 
	$drop_sex2 = ""; 
	$facebook2 = ""; 
	$baby2 = ""; 

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
 
<script language = "JavaScript">
 
		//**** List Province (Start) ***//
		function ListProvince11(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address1").value  ;    	
			/// alert("dropdown_nation.php?data1="+data1);
			$.ajax({
			type: "GET",
			url: "dropdown_nation.php?data1="+data1,
			success: function(result) {
			$('#address2').html(result);
			}
			});		
			 														
		}
	 
		//**** List Province (Start) ***//
		function ListProvince22(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address1").value  ;    	
        	var data2 =  document.getElementById("address2").value  ;    	
			/// alert("dropdown_nation.php?data1="+data1);
			$.ajax({
			type: "GET",
			url: "dropdown_nation2.php?data1="+data1+"&data2="+data2,
			success: function(result) {
			$('#address3').html(result);
			}
			});		
			 														
		}
	 	 
		//**** List Province (Start) ***//
		function ListProvince33(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address1").value  ;    	
        	var data2 =  document.getElementById("address2").value  ;    	
        	var data3 =  document.getElementById("address3").value  ;    	
			// alert("dropdown_nation3.php?data1="+data1+"&data2="+data2+"&data3="+data3);
			$.ajax({
			type: "GET",
			url: "dropdown_nation3.php?data1="+data1+"&data2="+data2+"&data3="+data3,
			success: function(result) {
			 	//alert(result); 
				document.getElementById("address4").value = ""+result;
			}
			});		
			 														
		}
	
	
	
		//**** List Province (Start) ***//
		function ListProvince(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address21").value  ;    	
			/// alert("dropdown_nation.php?data1="+data1);
			$.ajax({
			type: "GET",
			url: "dropdown_nation.php?data1="+data1,
			success: function(result) {
			$('#address22').html(result);
			}
			});		
			 														
		}
	 
		//**** List Province (Start) ***//
		function ListProvince2(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address21").value  ;    	
        	var data2 =  document.getElementById("address22").value  ;    	
			/// alert("dropdown_nation.php?data1="+data1);
			$.ajax({
			type: "GET",
			url: "dropdown_nation2.php?data1="+data1+"&data2="+data2,
			success: function(result) {
			$('#address23').html(result);
			}
			});		
			 														
		}
	 	 
		//**** List Province (Start) ***//
		function ListProvince3(SelectValue)
		{ 
			
        	var data1 =  document.getElementById("address21").value  ;    	
        	var data2 =  document.getElementById("address22").value  ;    	
        	var data3 =  document.getElementById("address23").value  ;    	
			// alert("dropdown_nation3.php?data1="+data1+"&data2="+data2+"&data3="+data3);
			$.ajax({
			type: "GET",
			url: "dropdown_nation3.php?data1="+data1+"&data2="+data2+"&data3="+data3,
			success: function(result) {
			 	//alert(result); 
				document.getElementById("address24").value = ""+result;
			}
			});		
			 														
		}
	
	
	
	
</script>
     
      
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
      
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
           <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  จัดการข้อมูลลูกค้า   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > จัดการข้อมูลลูกค้า > เพิ่มข้อมูล   </font>   
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
                     <font size="4px" color="#000000">  จัดการข้อมูลลูกค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
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
													yearRange: "-40:+5",
														  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
														  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
														  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
														});
												}); 
												</script>
                      
                       <div class=" col-lg-4 "  align="left" >
					    <table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="50%" align="center" bgcolor="#F77369"   >   
					    		<a href="customer.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เพิ่มรายชื่อลูกค้า    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="50%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
								<a href="customer_edit.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แก้ไขข้อมูลลูกค้า   </font>  
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
							 var checkuser =  document.getElementById("passport").value;
							 var chkx1 = checkuser.length;
								
							  if (chkx1 < 13) {
								alert(" กรุณากรอก เลขบัตรประชาชน ให้ครบ 13 หลัก ");
								return false;
							  }
								 
							  var checkuser =  document.getElementById("telphone").value;
							  var chkx1 = checkuser.length;
								
							  if (chkx1 < 10) {
								alert(" กรุณากรอก เบอร์โทรติดต่อ ให้ครบ 10 หลัก ");
								return false;
							  }
								
								<?php
								$intRows = 0;
								$strSQL = "SELECT * FROM customer order by pk asc ";
								$objQuery =  mysqli_query($objCon,$strSQL);
								$intRows = 0;
								while($objResult = mysqli_fetch_array($objQuery))
								{
								$intRows++;
								?>			
									x = <?php echo $intRows;?>;
									mySubList = new Array(); 
									strGroup = "<?php echo $objResult["passport"];?>"; 
									mySubList[x,0] = strGroup; 
									if (mySubList[x,0] == checkuser){
										 alert(" เลขบัตรประชาชน  ซ้ำในระบบกรุณาทำการกรอกใหม่ "); 
										 return false;
									}
								<?php
								}
								?>	 
							} 
						</script>
                     	  
                      	  <form role="form" name="frmMain" method="post" action="save_customer.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                          <div class="col-lg-7" >  
						  
                      	  <div class="col-md-4"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > คำนำหน้า </font>        
							     <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							     <select class="form-control" id="title" name="title"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_title  order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div>
						  </div> 
							
							
                      	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ-นามสกุล </font>   
							  <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"   >
							</div>
						  </div> 
							 
                           
                          <script> 
							function Calage()
							  {
								var getday = document.getElementById("bridedate").value; 
								const d = new Date();
							    var year = d.getFullYear(); 
								var tmp = getday.split("/");
								 
								  var calage = year - tmp[2];
								  
								document.getElementById("age").value = ""+calage;
							  } 
							</script>
                     	  
                     	  
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > วันเกิด </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
								<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  height: 33px;  "    id="bridedate" name="bridedate" value="<?php echo $bridedate; ?>"       autocomplete="off" onKeyUp="Calage()"  onChange="Calage()"   >
								<span class="input-group-append">
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/calendar.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > อายุ </font>   
							  <input type="text" class="form-control" id="age" name="age"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $age; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" readonly   >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4" style=" display: none; "  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อเล่น </font>   
							  <input type="text" class="form-control" id="nickname" name="nickname"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $nickname; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-8"  style=" display: none; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > ที่อยู่ </font>   
							  <input type="text" class="form-control" id="address" name="address"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $address; ?>"   >
							</div> 
						  </div> 
							
                      	    <div class="col-md-4"   style=" display:  ; ">
							<div class="form-group">
							   <font color = '#000' size="3px" > จังหวัด </font>    
							   <select class="form-control" id="address1" name="address1"     oninput="setCustomValidity('')" onChange = "ListProvince11(this.value)"       style="border-radius: 5px; border: 1px solid #C9C9C9; "    >
								<option value="">  จังหวัด </option>
							   <?php 
									$sql = "SELECT * FROM data1 where PROVINCE_ID = '".$address1."' order by PROVINCE_ID asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
								<option value="<?php echo $objResult["PROVINCE_ID"]; ?>"><?php echo $objResult["PROVINCE_NAME"]; ?></option> 
								<?php  } ?>   
								<?php 
									$sql = "SELECT * FROM data1 where PROVINCE_ID != '".$address1."' order by PROVINCE_ID asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
								<option value="<?php echo $objResult["PROVINCE_ID"]; ?>"><?php echo $objResult["PROVINCE_NAME"]; ?></option> 
							  <?php  } ?>   
							  </select> 	
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"   style=" display:  ; ">
							<div class="form-group">
							   <font color = '#000' size="3px" > อำเภอ </font>    
								<select class="form-control  " id="address2" name="address2"   
								 style="border-radius: 5px; border: 1px solid #C9C9C9; " 
								 onChange = "ListProvince22(this.value)"  >  </select>
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  style=" display:  ; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > ตำบล </font>    
								<select class="form-control  " id="address3" name="address3"   
								 style="border-radius: 5px; border: 1px solid #C9C9C9; "  
								 onChange = "ListProvince33(this.value)"  >  </select> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  style=" display:  ; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสไปรษณีย์ </font>   
							  <input type="text" class="form-control" id="address4" name="address4"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $address4; ?>"    >
							</div> 
						  </div> 
							 
						 <script> 
							function Checktelphone()
							{   
								var codecustomer = document.getElementById("telphone").value; 
								 
								$.ajax({
								type: "POST",
								url: "check_code_telphone.php",
								data: {data1:codecustomer},
								success: function(result) { 
									var check_number = result.ans; 
									if(check_number == 0){ 
									}else{  
										alert(' เบอร์โทรติดต่อ ซ้ำในระบบ !!! ');	 
									}
									}
								});
 								
							}
							function Checkpassport()
							{   
								var codecustomer = document.getElementById("passport").value; 
								 
								$.ajax({
								type: "POST",
								url: "check_code_passport.php",
								data: {data1:codecustomer},
								success: function(result) { 
									var check_number = result.ans; 
									if(check_number == 0){ 
									}else{  
										alert(' เลขบัตรประชาชน ซ้ำในระบบ !!! ');	 
									}
									}
								});
 								
							}
						 </script>
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone" name="telphone"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $telphone; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onchange="Checktelphone()" onKeyUp="Checktelphone()" >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > Facebook </font>   
							  <input type="text" class="form-control" id="facebook" name="facebook"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $facebook; ?>"    >
							</div> 
						  </div> 
                     	  
                      	  <div class="col-md-4"   style=" display:  ; ">
							<div class="form-group">
							   <font color = '#000' size="3px" > Facebook URL </font>   
							  <input type="text" class="form-control" id="facebookurl" name="facebookurl"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $facebookurl; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"   style=" display: none; ">
							<div class="form-group">
							   <font color = '#000' size="3px" > Line </font>   
							  <input type="text" class="form-control" id="line" name="line"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $line; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-8"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เพิ่มรายชื่อเบอร์ </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   "> 
								<input class="form-control    "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  height: 33px;  "    id="telphoneadd" name="telphoneadd" value="<?php echo $telphoneadd; ?>"       autocomplete="off"  >
								<span class="input-group-append">
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/plus.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เพศ </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							     <select class="form-control" id="drop_sex" name="drop_sex"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_sex  order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
                      	  <div class="col-md-4"  style=" display: none; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > อาชีพ </font>   
							  <input type="text" class="form-control" id="ashap" name="ashap"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $ashap; ?>"   >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  style=" display: none; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายได้ต่อเดือน </font>   
							  <input type="text" class="form-control" id="pricemonth" name="pricemonth"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $pricemonth; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  style=" display: none; " >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายได้รวม </font>   
							  <input type="text" class="form-control" id="pricetotal" name="pricetotal"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $pricetotal; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลขบัตรประชาชน </font>   
							  <input type="text" class="form-control" id="passport" name="passport"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $passport; ?>"   maxlength="13"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    onchange="Checkpassport()" onKeyUp="Checkpassport()"  >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลขที่เสียภาษี </font>   
							  <input type="text" class="form-control" id="pasy" name="pasy"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $pasy; ?>"     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะ </font>     
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">   
							     <select class="form-control" id="drop_people" name="drop_people"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_people  order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
                         
                          </div> 
							 
						  <div class="col-md-5">
							<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
							<link rel="stylesheet" href="upload_image/css/style.css">  
							<script src="upload_image/js/app.js"></script> 

							<ul id="media-list" class="clearfix">
							<li class="myupload"> 
								<span><i class="fa fa-plus" aria-hidden="true"></i>
								<input type="file"  click-type="type2"   class="picupload"  name="picupload[]" id="picupload"  multiple="multiple"     ></span>
							</li>


							<li class="myupload" style="display: none; "> 
								<img src='images/upload.png' /><div  class='post-thumb'><div class='inner-post-thumb'>

								<a  data-id='' class='remove-pic' onClick="myFunction()" style="cursor: pointer;">
								<i class='fa fa-times' aria-hidden='true' style="color: #FFF;"></i></a>

								<script>
								function myFunction() {
								   alert("delete");
								}
								</script>

							</li> 

							 </ul>  
						  </div>
                  		 
						  <div class="col-lg-12">
							<hr>
						  </div>
                		   
                          <div class="col-lg-7" style="display: none;" >
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ข้อมูลคู่สมรส </font>    
							</div>
						  </div>   
					  
                      	  <div class="col-md-4"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > คำนำหน้า </font>        
							     <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							     <select class="form-control" id="title2" name="title2"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_title  order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div>
						  </div> 
							 
                      	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ-นามสกุล </font>   
							  <input type="text" class="form-control" id="name2" name="name2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"   >
							</div>
						  </div> 
							
                     	   
                     	     <script> 
							 function Calage2()
							  {
								var getday = document.getElementById("bridedate2").value; 
								const d = new Date();
							    var year = d.getFullYear(); 
								var tmp = getday.split("/");
								 
								  var calage = year - tmp[2];
								  
								document.getElementById("age2").value = ""+calage;
							  } 
							</script>
                     	  
                     	      
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > วันเกิด </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
								<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  height: 33px;  "    id="bridedate2" name="bridedate2" value="<?php echo $bridedate2; ?>"       autocomplete="off" onKeyUp="Calage2()" onChange="Calage2()"  >
								<span class="input-group-append">
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/calendar.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > อายุ </font>   
							  <input type="text" class="form-control" id="age2" name="age2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $age2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" readonly   >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อเล่น </font>   
							  <input type="text" class="form-control" id="nickname2" name="nickname2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $nickname2; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-8"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ที่อยู่ </font>   
							  <input type="text" class="form-control" id="address25" name="address25"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $address25; ?>"   >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > จังหวัด </font>    
							   <select class="form-control" id="address21" name="address21"     oninput="setCustomValidity('')" onChange = "ListProvince(this.value)"       style="border-radius: 5px; border: 1px solid #C9C9C9; "    >
											 <option value="">  จังหวัด </option>
							   <?php 
									$sql = "SELECT * FROM data1 where PROVINCE_ID = '".$address21."' order by PROVINCE_ID asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
								<option value="<?php echo $objResult["PROVINCE_ID"]; ?>"><?php echo $objResult["PROVINCE_NAME"]; ?></option> 
								<?php  } ?>   
								<?php 
									$sql = "SELECT * FROM data1 where PROVINCE_ID != '".$address21."' order by PROVINCE_ID asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
								<option value="<?php echo $objResult["PROVINCE_ID"]; ?>"><?php echo $objResult["PROVINCE_NAME"]; ?></option> 
							  <?php  } ?>   
							  </select> 	
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > อำเภอ </font>    
								<select class="form-control  " id="address22" name="address22"   
								 style="border-radius: 5px; border: 1px solid #C9C9C9; " 
								 onChange = "ListProvince2(this.value)"  >  </select>
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ตำบล </font>    
								<select class="form-control  " id="address23" name="address23"   
								 style="border-radius: 5px; border: 1px solid #C9C9C9; "  
								 onChange = "ListProvince3(this.value)"  >  </select> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสไปรษณีย์ </font>   
							  <input type="text" class="form-control" id="address24" name="address24"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $address24; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone2" name="telphone2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $telphone2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > Facebook </font>   
							  <input type="text" class="form-control" id="facebook2" name="facebook2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $facebook2; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > Line </font>   
							  <input type="text" class="form-control" id="line2" name="line2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $line2; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-8"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เพิ่มรายชื่อเบอร์ </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   "> 
								<input class="form-control    "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  height: 33px;  "    id="telphoneadd2" name="telphoneadd2" value="<?php echo $telphoneadd2; ?>"       autocomplete="off"  >
								<span class="input-group-append">
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/plus.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เพศ </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							     <select class="form-control" id="drop_sex2" name="drop_sex2"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_sex  order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > อาชีพ </font>   
							  <input type="text" class="form-control" id="ashap2" name="ashap2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $ashap2; ?>"   >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายได้ต่อเดือน </font>   
							  <input type="text" class="form-control" id="pricemonth2" name="pricemonth2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $pricemonth2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายได้รวม </font>   
							  <input type="text" class="form-control" id="pricetotal2" name="pricetotal2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $pricetotal2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
                     	   
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวนบุตร </font>   
							  <input type="text" class="form-control" id="baby2" name="baby2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $baby2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div>  
                         
                          </div> 
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="customer.php">
							  	  	 
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
                  	  
                  	    
                   	  <?php } ?>
                   		    
                   		  
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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
        

<?php
include('footer2.php');
?>