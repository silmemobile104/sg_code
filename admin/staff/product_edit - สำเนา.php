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

 
	$sql = "SELECT * FROM product Where  pk = '". $_GET["CusID"] ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$name = $objResult["name"];   
		$codeno = $objResult["codeno"];    
		$typedata = $objResult["typedata"];   
		$typedata2 = $objResult["typedata2"];   
		$color = $objResult["color"];   
		$storerage = $objResult["storerage"];   
		$appleid = $objResult["appleid"];   
		$password = $objResult["password"];   
		$typedata_2 = $objResult["typedata_2"];   
		$note = $objResult["note"];   
		$price1 = $objResult["price1"];   
		$price2 = $objResult["price2"];   
		$totalprice = $objResult["totalprice"]; 
		$bill_no = $objResult["bill_no"];  
		$major = $objResult["major"];  
		$status = $objResult["status"];  
	}  

?>  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>   
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
                     <font size="4px" color="#000000">  เพิ่มรายการสินค้า/ราคาสินค้า/สต๊อก   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
                       		<div class=" col-lg-4 "  align="left" >
							<table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr>   
									<td width="50%" align="center" bgcolor="#FFF"  >
									<a href="product.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  เพิ่มรายการสินค้า    </font>  
									</div>
									</a>
									</td>
									<td width="50%" align="center" bgcolor="#F77369" style="border-top-right-radius: 5px;" >   
									<div  >   
									<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการสินค้า   </font>  
									</div> 
									</td>
								</tr>
							</table>
						   </div>
                      
							<div class="col-lg-12">
							<hr>
							</div>
                       
                      
						  <form role="form" name="frmMain" method="post" action="save_product_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" >
						  
						   <input type="hidden" id="idupdate" name="idupdate" value="<?php echo $_GET["CusID"]; ?>" >
						   <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>" >
 
                          <div class="col-lg-7" >  
						    <div class="col-md-12"  >	
							<div class="form-group">
							<font color = '#000' size="3px" > สาขา </font>   
							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  " onchange="LoadDropdown()"   >   
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
							<?php 
								$sql = "SELECT * FROM major where pk != '".$major."' order by pk asc  "; 
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
                    	  
                    	   <script>   
							function LoadDropdown()
							{   
								 
								var major = document.getElementById("major").value;  
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_major1.php?major="+major,
									success: function(result) {
									$('#typedata_2').html(result);
									}
								});	
								$.ajax({
									type: "GET",
									url: "dropdown_major2.php?major="+major,
									success: function(result) {
									$('#typedata2').html(result);
									}
								});	
								$.ajax({
									type: "GET",
									url: "dropdown_major3.php?major="+major,
									success: function(result) {
									$('#color').html(result);
									}
								});	
								$.ajax({
									type: "GET",
									url: "dropdown_major4.php?major="+major,
									success: function(result) {
									$('#typedata').html(result);
									}
								});		
								$.ajax({
									type: "GET",
									url: "dropdown_major6.php?major="+major,
									success: function(result) {
									$('#typedata').html(result);
									}
								});											
							} 
						  </script>
						  
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อรายการสินค้า </font> 
							   <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"   >
							</div>
						  </div> 
							
							
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเลขเครื่อง </font>   
							  <input type="text" class="form-control" id="codeno" name="codeno"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $codeno; ?>"   >
							</div>
						  </div> 
							
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกร้านผู้จำหน่าย   </font>   
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							     <select class="form-control" id="typedata_2" name="typedata_2"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM store   where pk = '".$typedata_2."' and major = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>      
										<?php 
										$sql = "SELECT * FROM store   where pk != '".$typedata_2."'  and major = '".$major."' order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div>
                     	  
                     	    
                      	    
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยี้ห้อ </font>    
							   <select class="form-control" id="typedata2" name="typedata2"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
										<?php 
										$sql = "SELECT * FROM drop_typedata2   where pk = '".$typedata2."' and major = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										<?php 
										$sql = "SELECT * FROM drop_typedata2   where pk != '".$typedata2."' and major = '".$major."' order by pk asc  "; 
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
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>  
							   <select class="form-control" id="color" name="color"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
										<?php 
										$sql = "SELECT * FROM drop_typecolor   where pk = '".$color."' and major = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										<?php 
										$sql = "SELECT * FROM drop_typecolor   where pk != '".$color."' and major = '".$major."' order by pk asc  "; 
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
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>    
							   <select class="form-control" id="storerage" name="storerage"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
										<?php 
										$sql = "SELECT * FROM drop_typestore   where pk = '".$storerage."' and major = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										<?php 
										$sql = "SELECT * FROM drop_typestore   where pk != '".$storerage."' and major = '".$major."' order by pk asc  "; 
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
							
                      	  <div class="col-md-4" style=" display: none; "  >
							<div class="form-group">
							   <font color = '#000' size="3px" > Apple id </font>   
							  <input type="text" class="form-control" id="appleid" name="appleid"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $appleid; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  style=" display: none; "  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสผ่าน </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $password; ?>"     >
							</div> 
						  </div> 
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ประเภทสินค้า </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							    <select class="form-control" id="typedata" name="typedata"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
										<?php 
										$sql = "SELECT * FROM drop_typedata  where pk = '".$typedata."' and major = '".$major."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										<?php 
										$sql = "SELECT * FROM drop_typedata  where pk != '".$typedata."' and major = '".$major."' order by pk asc  "; 
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
								<button class="btn " style="border: 0px solid;  height: 30px;  margin-top: -2px;  " type="button">
									<img src="images/down.png" style="width: 18px; ">		 
								</button>
								</span>
								</div> 
							</div> 
						  </div> 
						  
						     
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเหตุ </font>   
							  <input type="text" class="form-control" id="note" name="note"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $note; ?>"     >
							</div> 
						  </div> 
							
                      	 	
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาทุน </font>   
							  <input type="text" class="form-control" id="price1" name="price1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $price1; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onKeyUp="Calculaprice()"   >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาขาย </font>   
							  <input type="text" class="form-control" id="price2" name="price2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $price2; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onKeyUp="Calculaprice()"  >
							</div> 
						  </div> 
							 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > กำไร </font>   
							  <input type="text" class="form-control" id="totalprice" name="totalprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $totalprice; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" onKeyUp="Calculaprice()" readonly  >
							</div> 
						  </div>
                        
                          
										<script language="javascript">
										 function Calculaprice()
										 { 
											var int1 = document.getElementById("price1").value;   /// ราคาทุน    
											var int2 = document.getElementById("price2").value;     //// ราคาขาย
  
											if(int1 == ""){
												int1 = "0";
											}
											if(int2 == ""){
												int2 = "0";
											}  
											var n1 = parseFloat(int1);	 //// ยอดค้าง  
											var n2 = parseFloat(int2);	 //// ยอดชำระเก่า  

											var sumallshow = (n2 - n1);  

											var intshow1 =  document.getElementById('totalprice'); 
											intshow1.value = (sumallshow.toFixed(0));
  													  
									   	} 
										</script>
                        
                            <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะ </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 35px;   ">  
							    <select class="form-control" id="status" name="status"    style=" width:30px; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; font-size: 15px; "  >
							    <?php if($status == "ไม่พร้อมจำหน่าย"){ ?>
							    
							    		<?php 
										$sql = "SELECT * FROM drop_cleam_product  where name = '".$status."'   order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										
							    <?php }else{ ?>
							       
							    
							    		<?php 
										$sql = "SELECT * FROM drop_cleam_product  where name = '".$status."'  and name != 'ไม่พร้อมจำหน่าย' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>  
										<?php 
										$sql = "SELECT * FROM drop_cleam_product  where name != '".$status."'   and name != 'ไม่พร้อมจำหน่าย' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>    
										
										
							    <?php } ?>
							    
							    
										 
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
                      	  <div class="col-md-12" align="left"  > 
							   <font color = '#FF0000' size="4px" > *** การลบรูปภาพจะมีผลทันที่  </font>   
						  </div> 
							   
 
									<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
									<link rel="stylesheet" href="upload_image/css/style.css">
									<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
									<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
									<script src="upload_image/js/app.js"></script> 
									
									<ul id="media-list" class="clearfix"> 
											 
											<?php 
											$sql = "SELECT * FROM product_img where bill_no = '".$bill_no."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?> 
												<li class="myupload"  > 
												<img src='../img/<?php echo $objResult["img"]; ?>' /><div  class='post-thumb'><div class='inner-post-thumb'>
												
												<a  data-id='' class='remove-pic' onClick="myFunction<?php echo $objResult["pk"]; ?>(<?php echo $objResult["pk"]; ?>)" style="cursor: pointer;">
												<i class='fa fa-times' aria-hidden='true' style="color: #FFF;"></i></a>
												
												<script>
												function myFunction<?php echo $objResult["pk"]; ?>(Delepk) {
												   
													$.ajax({
														type: "POST",
														url: "delete_img.php",
														data: {del:Delepk},
														success: function( ) {   
														}
													});   
													
												}
												</script> 
												</li> 
											 
											 <?php } ?>
											 		
											 		
											 
											<li class="myupload"> 
												<span><i class="fa fa-plus" aria-hidden="true"></i>
												<input type="file"  click-type="type2"   class="picupload"  name="picupload[]" id="picupload"  multiple="multiple"     ></span>
											</li>
                             
										</ul>  
						  </div>
                  		  
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="product_edit_select.php">
							  	  	 
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
include('footer.php');
?>