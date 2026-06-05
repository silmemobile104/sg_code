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
                     <font size="4px" color="#000000">  ส่งคืนต้นทาง    </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ส่งคืนต้นทาง     </font>   
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
                     <font size="4px" color="#000000">  ส่งคืนต้นทาง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
                          <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="cleam_backnew_two.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  รายการส่งคืนต้นทาง    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="cleam_backnew_two_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกบิล/แก้ไขบิลรายการส่งคืนต้นทาง    </font>  
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
                     	  
                     	  <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px; display:  none ; "  onchange="LoadDropdown()"   > 
						 <?php if(empty($major)){ ?> 
							<option value="">  สาขา    </option> 
						 <?php } ?>  
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
                    	   
                    	   
                     	   
                    	<div   class="col-lg-6"  align="left"  > 
                    	 	<table width="100%">
								<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกร้าน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="typedata_2" name="typedata_2"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "   >
									 
									    </select>
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="LoadDropdown2()" >
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
									    
									$.ajax({
										type: "GET",
										url: "dropdown_major_search.php?major="+major,
										success: function(result) {
										$('#typedata_2').html(result);
										}
									});	
									 
									 
									 	/// alert(" A "+major);
									 /*
									var major2 = document.getElementById("typedata_2").value;  
									$.ajax({
									type: "GET",
									url: "load_list_ordercleam_two.php?major="+major+"&major_store="+major2,
									success: function(result) {
										$('#showtabledata').html(result);
									}
									});	
									*/
									 
									  
								 }										
							 } 
							    
							 function Loadtotalcart()
							 {
								  
								$.ajax({
								type: "GET",
								url: "load_total_select_bill_cleamback_two.php",
								success: function(result) {
									$('#showallselectbill').html(result);
								}
								});	
 
								 
							 }
							  
							 function LoadDropdown2()
							 {    
								  
								var major = document.getElementById("major").value;  
								var major2 = document.getElementById("typedata_2").value;  
								  
								$.ajax({
								type: "GET",
								url: "load_list_ordercleam_two.php?major="+major+"&major_store="+major2,
								success: function(result) {
										$('#showtabledata').html(result);
								}
								});	 
								 
							 }
								  
							 function Saveallbill() 
							 { 
							  var major = document.getElementById("major").value; 
							  var major_store = document.getElementById("typedata_2").value; 
								 
								 
								$.ajax({
								type: "GET",
								url: "save_cleamback_allbill_two.php?major="+major+"&major_store="+major_store,
								success: function() {
									LoadDropdown2(); 
								}
								});	
								    
							 }
							 
							 function Saveallbill2() 
							 { 
							  var major = document.getElementById("major").value; 
							  var major_store = document.getElementById("typedata_2").value; 
								 
								 
								$.ajax({
								type: "GET",
								url: "save_cleamback_allbill2_two.php?major="+major+"&major_store="+major_store,
								success: function() {
									LoadDropdown2(); 
								}
								});	
								    
							 }
							  
						  	 function Closslect() 
							 {
								 
								document.getElementById("showtableselect").style.display = "none";
								document.getElementById("allselect").style.display = "block";
								  
								$.ajax({
								type: "GET",
								url: "show_bill_cleam_all_select_two.php",
								success: function(result) {
									$('#showtabledataselect').html(result);
								}
								});	
								 
							 }
							 
						  	 function Backselect() 
							 {
								  
								 document.getElementById("showtableselect").style.display = "block";
								 document.getElementById("allselect").style.display = "none";
								 
								 LoadDropdown2();  
							 }
								  
						  	 function reloadcart() 
							 { 
								document.getElementById("showtableselect").style.display = "none";
								document.getElementById("allselect").style.display = "block";
								  
								$.ajax({
								type: "GET",
								url: "show_bill_cleam_all_select_two.php",
								success: function(result) {
									$('#showtabledataselect').html(result);
								}
								});	
							 }
							 
							  
							 setInterval(function(){  
								Loadtotalcart();   
							 }, 1100);
						  </script>
                   	
                   	
                   	
                   	
                   		 <!--- เลือกรายการ --->
                    	 <div id="showtableselect" style="display: none; "  > 
                    	  
                     	  <?php
							$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px; border-color: #006400; margin-top: 15px; ";
							$colorbtns2s = " background-color: #5DC9C1; border-radius: 5px;  height: 40px; border-color: #FBFBFB; margin-top: 15px; ";
							$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; margin-top: 15px; ";

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF"; 
  			 
							?>	  
                      	    <div class="col-lg-12"  align="left"  > 
                    	  
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " onClick="Saveallbill()" > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > เลือกรายการเครื่องทั้งหมด   </font> </button>  
								
								
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns3s; ?> " onClick="Saveallbill2()" > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > ยกเลิกรายการทั้งหมด   </font> </button>  
								       
						 
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " onClick="Closslect()"> 
					    	    <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > 
						    	 บิลที่เลือกไว้ 
						    	 <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" id="showallselectbill" >    0   </font>
						    	 บิล    
						    	</font>       
						    	</button>    
							    
						  </div>
                     	    
                      	    
                    	    <div  class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                    		<div  id="showtabledata"   >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							  <thead> 
								 <tr>
									<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   หมายเลขเครื่อง  </font></div></th>   
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา  </font></div></th>       
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อรายการสินค้า  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยี้ห้อ     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผู้จำหน่าย   </font></div></th>
									<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภทสินค้า   </font></div></th>    
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล     </font></div></th>   
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ     </font></div></th>    

									<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ     </font></div></th>
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th>
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไขสถานะ   </font></div></th>  
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
							    
										 
									 
							</table>  
							</div>
						    </div>
						    </div>
                    	 
                    	 
                    	 
                      	    <form role="form" name="frmMain" method="post" action="save_confrim_cleam_backnew_two.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                    	 
                    	 	  <div class="col-lg-12" align="center" style=" margin-top: 35px;  "   > 
                         	  
                         	  
                         	   <div class="col-md-8" align="left"  >
								<div class="form-group">
								   <font color = '#000' size="3px" > เงื่อนไขการส่งสินค้าคืน </font>      
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
									<input class="form-control    "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  height: 33px;  "    id="notecleamback" name="notecleamback"     > 
									</div> 
								</div> 
							  </div> 
                         	  
                         	  
                         	  
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