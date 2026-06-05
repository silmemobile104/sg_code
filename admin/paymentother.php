<?php 
session_start();
$_SESSION["load"] = "27";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $major = "";
	 $customer = "";
	 $datesave = "";


	
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


	
	$searchname4 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname4"])){
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname4 = $_GET["searchname4"];
		 
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
	$searchname5 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname5"])){
		
		$cut = explode("/",$searchname5);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}else{
		$searchname5 = $_GET["searchname5"];
		
		
		
		$cut = explode("/",$searchname5);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$datesave = date('d/m/Y');
	$alldata = "";
	if(empty($_GET["alldata"])){
		
	}else{
		$alldata = $_GET["alldata"];
	} 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
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
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}




		if(isset($_GET["Action"])){  
			if($_GET["Action"] == "Del")
			{  
				
			$strSQL = "Delete From paymentother  ";
			$strSQL .="WHERE pk = '".$_GET["bill_no"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				 
				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'paymentother.php?customer=".$_GET["customer"]."';</script>"); 
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
				 <font size="4px" color="#000000">   บันทึกรายอื่นๆ    </font>  
				 <br> 
				 <font size="2px" color="#000000">  หน้าเเรก >  บันทึกรายอื่นๆ   </font>   
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
                     <font size="4px" color="#000000">  บันทึกรายอื่นๆ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ 
					
						$sql = "SELECT * FROM customer where pk != '".$customer."' order by pk asc  "; 
								  
						?>
 
                  		     <form role="form" name="frmMain" method="post" action="save_paymentother.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
 
							  <div class="col-md-5" style=" margin-top:  15px; " > 
 
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > รายการ </font>    
							  		<select class="form-control myselect" id="data1" name="data1"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >   
									<?php 
									$sql = "SELECT * FROM drop_paymentother where name = '".$data1."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 	 
									?>
									<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM drop_paymentother where name != '".$data1."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script>  
								</div>
							  </div>
							  
							  
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > วันที่บันทึก </font>    
							 		 <input type="text" class="form-control current   " id="datesave" name="datesave"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $datesave; ?>" readonly    >
									 
								</div>
							  </div>
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > พิมพ์หัวข้อ </font>    
							 		 <input type="text" class="form-control   " id="data4" name="data4"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data4; ?>"    >
									 
								</div>
							  </div>
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > ระบุยอดเงิน </font> 
							  		<input type="text" class="form-control   " id="data2" name="data2"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data2; ?>"    maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    >   
									 
								</div>
							  </div>
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > อ้างอิง </font>    
							 		 <input type="text" class="form-control   " id="data3" name="data3"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data3; ?>"    >
									 
								</div>
							  </div>
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > อ้างอิงลูกค้า </font>     
									<select class="form-control myselect" id="customer" name="customer"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >   
									<?php 
									$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 	 
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]."[".$objResult["passport"]."]"; ?></option> 
									<?php  
									}
									?>     
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script>  
									</div>
								  </div>
								  
								  
								   
								  <div class="col-md-12"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
									   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
										<select class="form-control" id="payment" name="payment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
										<option value="">  เงือนไขการชำระเงิน    </option> 
										<?php 
										$sql = "SELECT * FROM drop_payment where name = '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php 
										$sql = "SELECT * FROM drop_payment where name != '".$payment."' order by pk asc  "; 
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
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>



								  <div class="col-md-12"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > บัญชีการโอนเงิน    </font>   
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

						  
						  
						  
						  

							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 
 
								
							  	  <a href="paymentother.php?customer=<?php echo $customer; ?>">
							  	  	 
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
							     
							   <div class="col-md-2 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> อัพโหลดรูปสลิป </font>
									  
									 	    <style>
												.image-upload > input
												{
													display: none;
												}
												.upload-icon{
												  width: 100%; 
												  border: 2px solid #C2C2C2; 
												}
												.upload-icon img{
												  width: 100%; 
												  cursor: pointer;
												}
												.upload-icon.has-img {
													width: 100%; 
													border: none;
												}
												.upload-icon.has-img img {
													width: 100%;
													height: auto;
													border-radius: 18px;
													margin:0px;
												}
												</style> 
											<script type="text/javascript">
												function readURL1(input) { 
													if (input.files && input.files[0]) {
														var reader = new FileReader();

														reader.onload = function (e) {
															$('#blah1').attr('src', e.target.result);
														}

														reader.readAsDataURL(input.files[0]);
													}
												}  
											</script>	
 
											 <?php
												$showimg = "images/upload.png";
												if(!empty($img)){ 
												$showimg = "../img/".$img;
												}
											 ?>
											 <img src="<?php echo $showimg; ?>" style="width: 100%;" class="myAvatar" id="blah1" />
											 <input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
											 <script>
												$(".myAvatar").click(function() {
													$("#newAvatar").trigger("click");
												});
											 </script> 
								  </div>
							   </div> 	  

							 </form>
                   		  
							 <div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                     
                     
                     
                     
                      		 <form action="paymentother.php" method="get" >
                   	       
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
                         
						    
								<div   class="col-lg-8"  align="left"  >  
								<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    > 

									   <?php if(empty($searchtype)){ ?>
									   <option value="">  ประเภทการค้นหา    </option> 
									   <?php } ?> 

										<?php 
										$sql = "SELECT * FROM drop_type where name = '".$searchtype."'   order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>     
										<?php 
										$sql = "SELECT * FROM drop_type where name != '".$searchtype."'   order by pk asc  "; 
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
									<td width="1%">&nbsp;  </td>
										
									<td width="40%">&nbsp;  </td>     
								</tr>
								</table>     

							
								<?php
								$HDshow1 = "display: none;";
								$HDshow2 = "display: none;";
								if($searchtype == "ประเภทเดือนปี"){ 
								$HDshow1 = "display: block;";
								}
								if($searchtype == "ประเภทวัน"){ 
								$HDshow2 = "display: block;";
								}
								?>
								<table width="100%" id="showsearchdata1" style=" <?php echo $HDshow1; ?> "   >
									<tr> 
											<td width="40%"> 
											<font color="black" size="3px" class="serif">  เลือกเดือน    </font>

											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >   
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
											  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit" >
													<img src="images/search.png" style="width: 15px; "> 
											  </button>
											</span>
											</div> 
											</td>
											<td width="1%">&nbsp;  </td>

											<td width="7%">&nbsp;  </td>  
										</tr>
								</table>  

								<table width="100%" id="showsearchdata2"  style=" <?php echo $HDshow2; ?> "     >
									<tr> 
											<td width="24%"> 
											<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>

											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname4" name="searchname4" value="<?php echo $searchname4; ?>"  readonly    autocomplete="off"  >

											<span class="input-group-append" style="display: none; ">
											  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" onClick="Getsearchdata()" >
													<img src="images/down.png" style="width: 15px; "> 
											  </button>
											</span>
											</div> 

											</td>   
											<td width="1%">&nbsp;  </td>
											<td width="24%"> 
											<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>


											<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
											<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname5" name="searchname5" value="<?php echo $searchname5; ?>"  readonly    autocomplete="off"  >

											<span class="input-group-append"> 
											  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
													<img src="images/search.png" style="width: 15px; "> 
											  </button>
											</span>
											</div>


											</td> 
											<td width="1%">&nbsp;  </td>

											<td width="60%">&nbsp;  </td> 
										</tr>
								</table>  
								</div>
                   
                   				<script> 
								 function myFunction1() 
								 {
								  var getadata = document.getElementById("searchtype").value; 

									 if(getadata == "ประเภทเดือนปี"){
										  document.getElementById("showsearchdata1").style.display = "block";
										  document.getElementById("showsearchdata2").style.display = "none";

									 }else if(getadata == "ประเภทวัน"){ 
										  document.getElementById("showsearchdata2").style.display = "block";
										  document.getElementById("showsearchdata1").style.display = "none";

									 }else{ 
										  document.getElementById("showsearchdata1").style.display = "none";
										  document.getElementById("showsearchdata2").style.display = "none";

									 }
								 } 
								</script>
                    
							   </form> 
                   
                      
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
								$perpage = 20;
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
								$addcode2 = "";
								$addcode3 = "";  
								$addcode4 = "";  

							 	if($searchtype == "ประเภทเดือนปี"){ 
								$datadate  = "01-".$month."-".$year;				   
								$datadate2  = "31-".$month."-".$year;	

 
								$contactstart = date("Y-m-d", strtotime($datadate));  
								$checkend = date("Y-m-d", strtotime($datadate2)); 
  
								$addcode4 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								}
								if($searchtype == "ประเภทวัน"){ 
								$addcode4 = "  and  create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."'  "; 
								}
 


								$sql2 = " SELECT * FROM paymentother  
								where   bill_no != '' and customer = '".$customer."'
								".$addcode.$addcode2.$addcode4."  
								order by  pk asc    "; 
 
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									<ul class="pagination">
										<?php if ($page > 1): ?>
										<li class="prev"><a href="paymentother.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">Prev</a></li>
										<?php endif; ?>

										<?php if ($page > 3): ?>
										<li class="start"><a href="paymentother.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">1</a></li>
										<li class="dots">...</li>
										<?php endif; ?>

										<?php if ($page-2 > 0): ?><li class="page"><a href="paymentother.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
										<?php if ($page-1 > 0): ?><li class="page"><a href="paymentother.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

										<li class="currentpage"><a href="paymentother.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

										<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymentother.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
										<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymentother.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)-2): ?>
										<li class="dots">...</li>
										<li class="end"><a href="paymentother.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
										<?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)): ?>
										<li class="next"><a href="paymentother.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">Next</a></li>
										<?php endif; ?>
									</ul>
								<?php endif; ?>

							</div>
                       
                       
						    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
								 <tr>
									<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ  </font></div></th>     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงิน  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สลิปรูปภาพ  </font></div></th>   
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขอ้างอิง     </font></div></th>  
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   อ้างอิงลูกค้า     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน   </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ       </font></div></th>     
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิมพ์ใบเสร็จ     </font></div></th> 

									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
								 </tr>
							   </thead>  
							  <tbody> 
							<?php 
							$bg = "#F8FAFD"; 
							$i = 1;
							$total = 0;

							if (empty($_GET['page2'])) { 
								$i = 1;
							}else if (($_GET['page2'] == 1)) { 
								$i = 1;
							}else{ 
								$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
							}

							$bg = "#F8FAFD"; 
							$sql2 = " SELECT * FROM paymentother  
									where   bill_no != ''   and customer = '".$customer."'
									".$addcode.$addcode2.$addcode4."  
									order by  pk asc    limit {$start} , {$perpage}   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      

									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 

									$name_create = "";
									$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$name_create =  $objResult["name"];
									}  
									$name_create2 = "";
									$sql = " SELECT * FROM customer where pk = '".$objResult2["customer"]."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$name_create2 =  $objResult["name"];
									}  

							?>
							<tr style="background-color: <?php echo $bg ?>; "> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  ($objResult2["data1"]); ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  ($objResult2["data2"]); ?>  </font></div></td> 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  $name_create2; ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php 
								if(!empty($objResult2["img"])){ 
							?>  
							<a data-toggle="modal" data-target="#Loadimgs<?php echo $i; ?>" style="cursor: pointer; "  >  
							<img src="../img/<?php echo $objResult2["img"]; ?>" style=" height: 45px; ">
							</a>


							   <!-- modal small -->
							<div class="modal fade" id="Loadimgs<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									  <div class="row">      
									  <div class="col-md-12">  
										<img src="../img/<?php echo $objResult2["img"]; ?>" style=" width: 100%  ">
									  </div>   
									 </div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 	

							<?php } ?>
							</font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  ($objResult2["data3"]); ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>  </font></div></td> 
										 
										 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								
							<a class="btn  btn-sm" style=" background-color: #FFAA36; border-radius: 5px;  margin-top: -5px; " href="print_pasy_paymentother.php?CusID=<?php echo $objResult2["pk"];?>" target="_blank"  > 
							<font size="3px" color="#FFF" style=" font-size: 13px; " > &nbsp;&nbsp; พิมพ์ &nbsp;&nbsp; </font>
							</a>
								
							</font></div></td> 

										 
							 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							  
								<a href="paymentother.php?CusID=<?php echo $objResult2["pk"];?>&page=1"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a> 
								
								
								&nbsp;
								-
								&nbsp;
								<a  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>&bill_no=<?php echo $objResult2["pk"];?>&customer=<?php echo $_GET["customer"];?>';}"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
								<font size="3px" color="#F77369" style=" font-size: 13px; " > ลบ </font></a>
								
							 </font></div></td> 


							</tr>  
							<?php $i++;  } ?>
						</tbody>
  
										 
						</table>  
						</div>
					  </div>
                     
                   	  <?php } ?>
                   		     
                          	       
                       <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM paymentother Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$data1 = $objResult["data1"];  
							$data2 = $objResult["data2"];
							$data3 = $objResult["data3"];   
							$data4 = $objResult["data4"];   
							$img = $objResult["img"];   
							$bill_no = $objResult["bill_no"];    
							$customer = $objResult["customer"];    
							$payment = $objResult["payment"];    
							$bank = $objResult["bank"]; 
							
							
							$datesave = $objResult["create_date"];
							$cut = explode("-",$datesave);
							$date_income = $cut[0]."-".$cut[1]."-".($cut[2]); 
							$daystart = date("d/m/Y", strtotime($date_income));  
							
							
						}   
						?> 
                         
                         <form role="form" name="frmMain" method="post" action="save_paymentother_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
                         
							<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
						 
							<input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $bill_no; ?>" >
						 
 
							  <div class="col-md-5" style=" margin-top:  15px; " > 
 
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > รายการ </font>    
							  		<select class="form-control myselect" id="data1" name="data1"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >   
									<?php 
									$sql = "SELECT * FROM drop_paymentother where name = '".$data1."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 	 
									?>
									<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM drop_paymentother where name != '".$data1."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script>  
								</div>
							  </div>
							  
							   
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > พิมพ์หัวข้อ </font>    
							 		 <input type="text" class="form-control   " id="data4" name="data4"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data4; ?>"    >
									 
								</div>
							  </div>
							  
							  
							  
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > ระบุยอดเงิน </font> 
							  		<input type="text" class="form-control   " id="data2" name="data2"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data2; ?>"    maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    >   
									 
								</div>
							  </div>
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > อ้างอิง </font>    
							 		 <input type="text" class="form-control   " id="data3" name="data3"  autocomplete="off"       style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $data3; ?>"    >
									 
								</div>
							  </div>
							  
							  <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > อ้างอิงลูกค้า </font>     
									<select class="form-control myselect" id="customer" name="customer"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  >   
									<?php 
									$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 	 
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]."[".$objResult["passport"]."]"; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM customer where pk != '".$customer."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]."[".$objResult["passport"]."]"; ?></option> 
									<?php  
									}
									?>   
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script>  
									</div>
								  </div>
							  
							  
							  
								  
								   
								  <div class="col-md-12"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
									   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
										<select class="form-control" id="payment" name="payment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
										<?php if(empty($payment)){ ?>
										<option value=""> เงือนไขการชำระเงิน </option>
										<?php } ?> 
										<?php 
										$sql = "SELECT * FROM drop_payment where name = '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php 
										$sql = "SELECT * FROM drop_payment where name != '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php if(!empty($payment)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
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
									   <font color = '#000' size="3px" > บัญชีการโอนเงิน    </font>   
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
										<?php if(!empty($bank)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
										</select>   
										<span class="input-group-append">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>

						  
						  
						  
						  
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 
 
								
							  	  <a href="paymentother.php">
							  	  	 
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
							     
							 <div class="col-md-2 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> อัพโหลดรูปสลิป </font>
									  
									 	    <style>
												.image-upload > input
												{
													display: none;
												}
												.upload-icon{
												  width: 100%; 
												  border: 2px solid #C2C2C2; 
												}
												.upload-icon img{
												  width: 100%; 
												  cursor: pointer;
												}
												.upload-icon.has-img {
													width: 100%; 
													border: none;
												}
												.upload-icon.has-img img {
													width: 100%;
													height: auto;
													border-radius: 18px;
													margin:0px;
												}
												</style> 
											<script type="text/javascript">
												function readURL1(input) { 
													if (input.files && input.files[0]) {
														var reader = new FileReader();

														reader.onload = function (e) {
															$('#blah1').attr('src', e.target.result);
														}

														reader.readAsDataURL(input.files[0]);
													}
												}  
											</script>	
 
											 <?php
												$showimg = "images/upload.png";
												if(!empty($img)){ 
												$showimg = "../img/".$img;
												}
											 ?>
											 <img src="<?php echo $showimg; ?>" style="width: 100%;" class="myAvatar" id="blah1" />
											 <input type="file" name="newAvatar" id="newAvatar" style="display:none;" onchange="readURL1(this);"  />
											 <script>
												$(".myAvatar").click(function() {
													$("#newAvatar").trigger("click");
												});
											 </script> 
								  </div>
							   </div> 	  

							 </form>
                         
                         
                         
                         
                         <?php } } ?>
                          
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

<?php
include('footer2.php');
?>