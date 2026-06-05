<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
 
	
		 
	$name = ""; 
	$codeno = ""; 
	$appleid = ""; 
	$storerage = ""; 
	$color = ""; 
	$password = ""; 
	$typedata_2 = ""; 
	$note = ""; 
	$price1 = ""; 
	$price2 = ""; 
	$totalprice = ""; 


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

		 
		 
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
		 
		 
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}

	$major2 = "";
	if(empty($_GET["major2"])){
		
	}else{
		$major2 = $_GET["major2"];
	}

	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลส่งเครม   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ออกบิล/แก้ไขบิลส่งเครม  </font>   
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
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลส่งเครม   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
						  
                          <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="cleam_backnew_one.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  รายการส่งเครมแต่ละร้าน   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="cleam_backnew_one_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกบิล/แก้ไขบิลส่งเครม    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                      	     
                              
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    > 
							  <thead> 
								 <tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>  
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

									<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>    
								 </tr>
							  </thead> 
							  <tbody> 
							<?php 
							$i = 1;
							$bg = "#F8FAFD"; 

							if (empty($_GET['page2'])) { 
								$i = 1;
							}else if (($_GET['page2'] == 1)) { 
								$i = 1;
							}else{

								$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
							}


							
							/*
							SELECT a.* FROM list_chk_cleam_back a
							Inner Join list_order b  On a.pkselect = b.pk
							Inner Join product c  On b.menu_id = c.pk
							where a.bill_no != ''  
							".$addcode.$addcode2.$addcode3.$addcode4.$pkselect."  
							Group By a.bill_no 
							order by a.pk asc 
							*/	
								
							$sql2 = "  SELECT a.*  FROM list_chk_cleam_back  a  
								Inner Join product b  On a.pkselect = b.pk
								where  a.bill_no = '".$bill_no."'   
								order by a.pk asc ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 
									$bill_no = $objResult2["bill_no"];


									$name_create2 = "-"; 
									$name_create3 = "-"; 
									$name_create4 = "-"; 
									$name_create5 = "-"; 
									$name_create6 = "-"; 
									$name_create7 = "-"; 
									$showclose5 = "-"; 
									$name_major = "-"; 
									$name = "";
									$nstorerage = "";
									$codeno = "";
									$appleid = "";
									$password = "";
									$note = "";
									$price1 = "";
									$price2 = "";
									$totalprice = "";
									$sql = "SELECT * FROM product where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										$nstorerage = $objResult["storerage"];
										$name = $objResult["name"];
										$codeno = $objResult["codeno"];
										$appleid = $objResult["appleid"];
										$password = $objResult["password"];
										$note = $objResult["note"];
										$price1 = $objResult["price1"];
										$price2 = $objResult["price2"];
										$totalprice = $objResult["totalprice"]; 

											$sql_c = " SELECT * FROM major where pk = '".$objResult["major"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$name_major =  $objResult_c["name"];
											} 


											$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
													$name_typedata =  $objResult_c["name"];
											}
											$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
													$name_typedata4 =  $objResult_c["name"];
											}
											$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
													$name_typedata2 =  $objResult_c["name"];
											}
											$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
													$name_typedata3 =  $objResult_c["name"];
											}

											$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
											$query_chk = mysqli_query($objCon,$sql_chk); 
											while($objResult_chk = mysqli_fetch_array($query_chk))
											{
												$showclose5 = $objResult_chk["name"];   
											}

									}


							?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
									   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codeno; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata2; ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata4; ?>    </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										    
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
										</a>  
										
										
										 <!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div align="left" class="col-lg-12">   
												  <font size="3px" color="black">   
													ชื่อรายการสินค้า : <?php echo $name; ?> <br>
													หมายเลขเครื่อง : <?php echo $codeno; ?> <br>
													ประเภทสินค้า : <?php echo $name_typedata; ?> <br>
 
													ยี้ห้อ  : <?php echo $name_typedata2; ?> <br>
													สี  : <?php echo $name_typedata3; ?> <br>
													ความจุ : <?php echo $showclose5; ?> <br>
													Apple id : <?php echo $appleid; ?> <br>
													รหัสผ่าน : <?php echo $password; ?> <br>
													ประเภทสินค้า  : <?php echo $name_typedata4; ?> <br>
													
													หมายเหตุ : <?php echo $note; ?> <br>
													ราคาทุน : <?php echo number_format(0+$price1); ?> <br>
													ราคาขาย : <?php echo number_format(0+$price2); ?> <br>
													กำไร : <?php echo number_format(0+$totalprice); ?> <br>

												 </font> 
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										 
										</font></div></td> 
										   
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php  
										if($objResult2["status"] == "พร้อมจำหน่าย"){
											echo  " <font color = '#006400' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "เครมสินค้า/รอสินค้า"){
										?>
										 
										<select class="form-control " style="background-color: #FF0000; color: white; font-size: 12px; margin-top: -5px; " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										<option value="เครมสินค้า/รอสินค้า//<?php echo $objResult2["pk"]; ?>" ><font size="2px" class="serif2"> เครมสินค้า/รอสินค้า </font></option>   
										<option value="พร้อมจำหน่าย//<?php echo $objResult2["pk"]; ?>" ><font size="2px" class="serif2"> พร้อมจำหน่าย </font></option>      
										</select>  
										
										
										<font size="2px" id="showtxtcancel<?php echo $objResult2["pk"]; ?>" class="serif2" color="#006400" style="display: none; "> พร้อมจำหน่าย </font>
										
										 	  
										<!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณายืนยันการ   <?php echo $objResult2["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
													คุณต้องการคำนวนต้นทุน ใหม่ หรือ ไม่

												 </font>
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	
												 	<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["pk"]; ?>" >
												 	
												 	 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  คำนวนต้นทุนใหม่   </font> </button>  </a>

												 	 <a onClick="CanceldataThree<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #FF8C00; border-radius: 5px; width: 130px; height: 40px; border-color: #FF8C00;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  ไม่คำนวนต้นทุนใหม่   </font> </button>  </a>
							 					 
							 					     <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  เครมสินค้า/รอสินค้า  </font> </button> </a>
												 	 
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

											check_status_save = "พร้อมจำหน่าย";  
												
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
												
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
												 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_cleamback_drop1.php?status="+check_status_save+"&bill_no="+save_key,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												 
												
											}
											});
											
											
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										///	alert(" YES "  +save_key );
											
										}
											
											
										function 
										CanceldataThree<?php echo $objResult2["pk"]; ?>( ) {
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
											
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF0000"; 

											check_status_save = "พร้อมจำหน่าย";  
												
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
												
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
												 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_cleamback_drop2.php?status="+check_status_save+"&bill_no="+save_key,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												 
												
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
											
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  

												$.ajax({
													type: "GET",
													url: "check_contact_dropdown3.php?bill_no="+typedata,
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
											if(check_status=="เครมสินค้า/รอสินค้า"){ 
												
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

												check_status_save = "เครมสินค้า/รอสินค้า";
												
											}else if(check_status=="พร้อมจำหน่าย"){ 
												 
												
												 $(document).ready(function(){ 
													$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
												 });   
												
												
												var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  

												$.ajax({
													type: "GET",
													url: "check_contact_dropdown3.php?bill_no="+typedata,
													success: function(result) {
													$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
													}
												});			
											
												 
											} 

											 
										}
									    </script>
										 	 
											 	 
										<?php	
										}else if($objResult2["status"] == "ไม่พร้อมจำหน่าย"){ 
											echo  " <font color = '#FF8C00' >  " . $objResult2["status"]  . " </font> ";  
										} 
										?>   
										</font></div></td> 
										
										

										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
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