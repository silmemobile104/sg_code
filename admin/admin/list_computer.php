<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


	
	
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


	 
	 $data1 = ""; 
	 $data2 = ""; 
	 $data3 = ""; 
	 $data4 = ""; 
	 $data5 = ""; 
	 $data6 = ""; 

 

	$major = "1"; 

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง    </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง     </font>   
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
                     <font size="4px" color="#000000">  ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_computer.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="list_computer_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แก้ไขบิลใบเสร็จ    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                      	  
                      	  
                      	  
                   		<input type="hidden" id="typeselect" value="">
                   		<input type="hidden" id="onoff" value="">
                   	
                      	  
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
                     	  
                     	   
                    	<div   class="col-lg-6"  align="left"  > 
                    	 	<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>
  
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
											<?php 
											$sql = "SELECT * FROM major where pk = '".$major."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
										</select>
										  
										<span class="input-group-append" style="display: none;"  >
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td>  
										 
										<td width="1%">  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกร้าน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="typedata_2" name="typedata_2"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
									 
									    </select>
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  
										</td>  
									</tr>
							</table>  
						</div>
                     	 
                    	<div   class="col-lg-12"  align="right"  > <hr> </div>
                     	  
                    	 <script>  
							 $( document ).ready(function() {   
								 LoadDropdown();    
							 });
							  
							 function LoadDropdown()
							 {    
								document.getElementById("showtableselect").style.display = "block";
								document.getElementById("allselect").style.display = "none";
								var major = document.getElementById("major").value;  
								 $('#showtabledata').html("");
								 
								 if(major == ""){
									 
									document.getElementById("showtableselect").style.display = "none";
								 }else{
									document.getElementById("showtableselect").style.display = "block";
									   
									/// alert("dropdown.php?typedata="+getX[0]);
									$.ajax({
										type: "GET",
										url: "dropdown_major_search.php?major="+major,
										success: function(result) {
										$('#typedata_2').html(result);
										}
									});	 
									 
								 }										
							 } 
							   
						  	 function Backselect() 
							 {
								 
								 document.getElementById("showtableselect").style.display = "block";
								 document.getElementById("allselect").style.display = "none";
								 $('#showtabledata').html("");
								 
							 }
							  
						  	 function Closslect() 
							 {
								 
								document.getElementById("showtableselect").style.display = "none";
								document.getElementById("allselect").style.display = "block";
								  
								$.ajax({
								type: "GET",
								url: "show_bill_computer_select.php",
								success: function(result) {
									$('#showtabledataselect').html(result);
								}
								});	
								 
							 }
							  
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
							     
							 function Saveallbill() 
							 {
							  var typeselect = document.getElementById("typeselect").value; 
							  var major = document.getElementById("major").value; 
							  var major_store = document.getElementById("typedata_2").value; 
								  
								  
								 
							  if(typeselect == "1"){
							  var month = document.getElementById("month").value; 
							  var year = document.getElementById("year").value; 
								
								$.ajax({
								type: "GET",
								url: "save_showtable2_chk.php?major="+major+"&major_store="+major_store+"&month="+month+"&year="+year,
								success: function() {
									 
								}
								});	
								     
							  }else if(typeselect == "2"){ 
							  var searchname = document.getElementById("searchname").value; 
							  var searchname2 = document.getElementById("searchname2").value; 
								  
								///alert("dropdown1.php?major="+major);
								$.ajax({
								type: "GET",
								url: "save_showtable_chk.php?major="+major+"&major_store="+major_store+"&startdate="+searchname+"&endate="+searchname2,
								success: function() {
									 
								}
								});		  
								   
							  }else{
								  
								 
								   
							  }
								 
								 
								 
								 Getsearchdata();
								 
							 }
							  
							 function Getsearchdata() 
							 {
							  var typeselect = document.getElementById("typeselect").value; 
							  var major = document.getElementById("major").value; 
							  var major_store = document.getElementById("typedata_2").value; 
								  
								 
							  document.getElementById("onoff").value = "";
								 
							  if(typeselect == "1"){
							  var month = document.getElementById("month").value; 
							  var year = document.getElementById("year").value; 
								
								/// alert(" A "+major);
								$.ajax({
								type: "GET",
								url: "showtable2_chk.php?major="+major+"&major_store="+major_store+"&month="+month+"&year="+year,
								success: function(result) {
									$('#showtabledata').html(result);
								}
								});	
								   
								document.getElementById("onoff").value = "ON";
							  }else if(typeselect == "2"){ 
							  var searchname = document.getElementById("searchname").value; 
							  var searchname2 = document.getElementById("searchname2").value; 
								  
								/// alert(" B "+major);
								$.ajax({
								type: "GET",
								url: "showtable_chk.php?major="+major+"&major_store="+major_store+"&startdate="+searchname+"&endate="+searchname2,
								success: function(result) {
									$('#showtabledata').html(result);
								}
								});		  
								  
								document.getElementById("onoff").value = "ON";
							  }else{
								   
									$.ajax({
									type: "GET",
									url: "showtable2_chk_alldata.php?major="+major+"&major_store="+major_store+"&month="+month+"&year="+year,
									success: function(result) {
										$('#showtabledata').html(result);
									}
									});	
								  
								   
									$.ajax({
									type: "GET",
									url: "showtable3_all.php?major="+major+"&major_store="+major_store,
									success: function(result) {
										$('#alldata').html(result);
									}
									});	 
							  } 
							 }
							   
							 function Getsearchdata2() 
							 {
							   var typeselect = document.getElementById("typeselect").value; 
							   var major = document.getElementById("major").value; 
							   var major_store = document.getElementById("typedata_2").value; 
							   var onoff = document.getElementById("onoff").value; 
								  
								 
							   if(onoff == "ON"){
								  
									  if(typeselect == "1"){
									  var month = document.getElementById("month").value; 
									  var year = document.getElementById("year").value; 

										$.ajax({
										type: "GET",
										url: "showtable2_all.php?major="+major+"&major_store="+major_store+"&month="+month+"&year="+year,
										success: function(result) {
											$('#alldata').html(result);
										}
										});	
										  
										   
									  }else if(typeselect == "2"){ 
									  var searchname = document.getElementById("searchname").value; 
									  var searchname2 = document.getElementById("searchname2").value; 

										///alert("dropdown1.php?major="+major);
										$.ajax({
										type: "GET",
										url: "showtable_all.php?major="+major+"&major_store="+major_store+"&startdate="+searchname+"&endate="+searchname2,
										success: function(result) {
											$('#alldata').html(result);
										}
										});		
										  
										   

									  }else{

										///alert("dropdown1.php?major="+major);
										$.ajax({
										type: "GET",
										url: "showtable3_all.php?major="+major+"&major_store="+major_store,
										success: function(result) {
											$('#alldata').html(result);
										}
										});	
										  
										  
										   
									  } 
								 }
								 
								 
								  
								$.ajax({
								type: "GET",
								url: "showtable3_all_chk.php?major="+major+"&major_store="+major_store,
								success: function(result) {
									$('#showallselectbill').html(result);
								}
								});	
 
								 
								 
							 }
							  
							   
							 setInterval(function(){  
								Getsearchdata2();  
							 }, 1100);
						  </script>
                   	
                   	
                   	
                   	
                   		 <!--- เลือกรายการ --->
                    	 <div id="showtableselect" style="display: none; "  > 
                    	  
                     	  <?php
							$colorbtns1s = " background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; margin-top: 15px; ";
							$colorbtns2s = " background-color: #5DC9C1; border-radius: 5px;  height: 40px; border-color: #FBFBFB; margin-top: 15px; ";

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF"; 
  			 
							?>	 
                     	   
                      	  <div class="col-lg-12"  align="left"  > 
                    	  
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " onClick="Saveallbill()" > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  >     เลือกบิลชำระทั้งหมด   </font> </button>  
								       
						 
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " onClick="Closslect()"> 
					    	    <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > 
						    	 บิลที่เลือกไว้ 
						    	 <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" id="showallselectbill" >    0   </font>
						    	 บิล    
						    	</font>       
						    	</button>    
							    
						  </div>
                     	    
                      	  <div class="col-lg-5"  align="left"  > 
                    	
							<table width="57%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
											<option value="">  ประเภทการค้นหา    </option> 
											<?php 
											$sql = "SELECT * FROM drop_type   order by pk asc  "; 
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
									</tr>
							</table>     
								  
							<table width="100%" id="showsearchdata1" style="display: none; ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
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
										 <select class="form-control" id="year" name="year" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>
							</table>  
								 
							<table width="100%" id="showsearchdata2" style="display: none; ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" onClick="Getsearchdata()" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>

										 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>
							</table>  
								 
						  </div>
                     	   
                    	  <div   class="col-lg-7"  align="left"  >  
                    	  	  
                    	  <div id="alldata"     >   
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > จำนวนเครือง </font>   
							   <input type="text" class="form-control" id="data1" name="data1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo $data1; ?>"  readonly >
							</div>
						  </div>
                    	  <div class="col-md-12"  > </div>	
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ราคาขาย </font>   
							   <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo $data2; ?>"  readonly >
							</div>
						  </div>
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ดาวน์ </font>   
							   <input type="text" class="form-control" id="data3" name="data3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo $data3; ?>"  readonly >
							</div>
						  </div>
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ยอดเงิน </font>   
							   <input type="text" class="form-control" id="data4" name="data4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo $data4; ?>"  readonly >
							</div>
						  </div>  
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ค่าคอม </font>   
							   <input type="text" class="form-control" id="data5" name="data5"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo $data5; ?>" readonly   >
							</div>
						  </div> 
                    	  </div> 
                    	  </div> 
                    	  
                    	  <div  class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                    		<div  id="showtabledata"   >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							  <tr>
								 <th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>  

								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 

								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ  </font></div></th>   
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 

								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อรายการสินค้า     </font></div></th> 
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าส่งของ   </font></div></th>    
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ความจุ     </font></div></th>   
								 <th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี     </font></div></th>   
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>   
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></th>    
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></th>    
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน %     </font></div></th>     
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าคอม     </font></div></th>   
								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>     

								 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  NO   </font></div></th>  
							  </tr>
							 </thead>   
							</table>  
							</div>
						    </div>
						    </div> 
                      	  </div>
                     	   
                     	   
                   		 <!--- รายการที่เลือกแล้ว --->
                     	 <div style="display: none; " id="allselect">
                     	 
                     	    <?php
							$colorbtns1s = " background-color: #6495ED; border-radius: 5px;  height: 40px; border-color: #6495ED; margin-top: 15px; "; 

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF"; 
  			 
							?>	 
                     	   
                      	    <div class="col-lg-12"  align="left"  > 
                    	  
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " onClick="Backselect()" > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  >     เลือกบิลเพิ่มเติม   </font> </button>  
								    
						    </div>
                     	 
                     	 	<div  class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                    		<div  id="showtabledataselect"   >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
								  <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลบ    </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อรายการสินค้า     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าส่งของ   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ความจุ     </font></div></th>   
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน %     </font></div></th>   
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าคอม     </font></div></th>      
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>     
												 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  NO   </font></div></th>  
											 </tr>
							 </thead>  
										 
									 
							</table>  
							</div>
						    </div>
						    </div>
                    	 
                    	 
                    	 
                      	    <form role="form" name="frmMain" method="post" action="save_confrim_computer.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                    	 
                    	 	  <div class="col-lg-12" align="center"   > 
                          	  <div class="col-lg-12" align="center"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 

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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>