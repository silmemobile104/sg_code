<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


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
	 

	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$chk5 = "";
	$chk6 = "";
	$chk7 = "";
	$chk8 = "";
	$chk9 = "";
	$chk10 = "";
	$chk11 = "";
	$chk12 = "";
	$chk13 = "";
	$chk14 = "";
	$chk15 = "";
	$chk16 = "";
	$chk17 = "";
	$chk18 = "";
	$chk19 = "";
	$chk20 = "";
	$chk21 = "";
	$chk22 = "";
	$chk23 = "";
	$chk24 = "";
	$chk25 = "";
	$chk26 = "";
	$chk27 = "";
	$chk28 = "";
	$postion = "";
	$telphone = "";
	$telphone2 = "";
	$telphone3 = "";
	$name2 = "";
	$age = "";
	$work = "";
	$passport = "";
	$name = "";

	$paymenttype = "";
	if(empty($_GET["paymenttype"])){
		
	}else{
		$paymenttype = $_GET["paymenttype"];
	}  
		 
	$page2 = "";
	if(empty($_GET["page2"])){
		
	}else{
		$page2 = $_GET["page2"];
	}  

	$calcutatorselect = "";
	if(empty($_GET["calcutatorselect"])){
		
	}else{
		$calcutatorselect = $_GET["calcutatorselect"];
	}   
	 
		 
	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}   
	 
	$paymenttype = "";
	if(empty($_GET["paymenttype"])){
		
	}else{
		$paymenttype = $_GET["paymenttype"];
	} 

	$paymenttype2 = "";
	if(empty($_GET["paymenttype2"])){
		
	}else{
		$paymenttype2 = $_GET["paymenttype2"];
	} 


	if(isset($_GET["Action"])){  
	   if($_GET["Action"] == "Del")
		 {  
			$strSQL = " Delete From paymenttyp3  ";
			$strSQL .=" WHERE pk = '".$_GET["CusID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'paymenttyp3.php?paymenttype=".$_GET["paymenttype"]."&paymenttype2=".$_GET["paymenttype2"]."';</script>"); 
		 }  
	}

	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){

		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];



		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
 	  
?> 
        
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
                     	  
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
									
									
									
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกค่าใช้จ่าย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกค่าใช้จ่าย   </font>   
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
                     <font size="4px" color="#000000">  บันทึกค่าใช้จ่าย   </font>   
                  </div> 
                  </font> 
                  </div>
                        
					 <div class="col-md-12">  <br> </div>
                    
					    <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
					  <font color="#FFFFFF" size="3px" class="serif2"  >
					  <div style="margin-top: 6px;" > 
						 <font size="4px" color="#000000">  หมวดค่าใช้จ่าย   </font>   
					  </div> 
					  </font> 
					  </div>
                  	    
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

							$addcode = "";
							$sql2 = "  SELECT * FROM paymenttype where name != ''  ".$addcode." order by pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 

								$name_create_by = "";
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create_by =  $objResult["name"];
								} 

								$colorbg = "#000"; 
								
								$bill_no = $objResult2["pk"];
								
								
								$txtcolor = " #000 ";
								$imgshow = " images/ae1.png ";
								$bgcolor = " background-color: #FFF; border-radius: 5px;   border-color: #003F88; margin-top: 15px; border: 1px solid #003F88; ";
								if($paymenttype == $objResult2["pk"]){
									
								$txtcolor = " #FFF ";
								$imgshow = " images/ae2.png ";
								$bgcolor = " background-color: #003F88; border-radius: 5px;   border-color: #003F88; margin-top: 15px; border: 1px solid #003F88; ";
									
								}
							?>
                      
                      
                      	<div class="col-md-2"   > 

					  	<a href="paymenttyp3.php?paymenttype=<?php echo $objResult2["pk"]; ?>" > 
						  <div align="center" class="form-group" class="btn btn-sm" style=" <?php echo $bgcolor; ?> "> 
						  <div style=" margin-top: 10px; margin-bottom: 10px; "> </div> 
							 <font class="serif" size="3px" color="<?php echo $txtcolor; ?>" for="address"  style="font-size: 15px;"> <b>    <?php echo $objResult2["name"]; ?>  </b>  </font> 
						  <div style=" margin-top: 10px; margin-bottom: 10px; "> </div>
						  </div>  
					  	</a>
					  	
						</div>   
                      
                       
                       <?php } ?>
                       
                   	  
					   <?php if(!empty($paymenttype)){   ?>
                 	   
					  <div class=" col-lg-12 " style="background-color: #FFF;  " align="left" >
                 	   <hr>
					  </div>
                 	     
					  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
					  <font color="#FFFFFF" size="3px" class="serif2"  >
					  <div style="margin-top: 6px;" > 
						 <font size="4px" color="#000000">  หมวดค่าใช้จ่ายแบบย่อย   </font>   
					  </div> 
					  </font> 
					  </div>
                  	   
                  	   <?php 
						$sql2 = " SELECT * FROM paymenttype2 where name != ''  and paymenttype = '".$paymenttype."' order by pk asc      ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$checknull = "";
							
							$addonboload = $objResult2["pk"]; 
							  
							
							$txtcolor = " #000 ";
							$imgshow = " images/ae1.png ";
							$bgcolor = " background-color: #FFF; border-radius: 5px;   border-color: #003F88; margin-top: 15px; border: 1px solid #003F88; ";
							
							if($paymenttype2 == $objResult2["pk"]){
								$txtcolor = " #FFF ";
								$imgshow = " images/ae2.png ";
								$bgcolor = " background-color: #003F88; border-radius: 5px;   border-color: #003F88; margin-top: 15px; border: 1px solid #003F88; ";
							}
							 
							 
							$namedata = " - ";
							if(!empty($objResult2["name"])){
								$namedata = $objResult2["name"];
							}
						?> 
                      	<div class="col-md-2"   > 

					  	<a href="paymenttyp3.php?paymenttype2=<?php echo $objResult2["pk"]; ?>&paymenttype=<?php echo $paymenttype; ?>" > 
						  <div align="center" class="form-group" class="btn btn-sm" style=" <?php echo $bgcolor; ?> "> 
						    
						  <div style=" margin-top: 10px; margin-bottom: 10px; "> </div> 
							 <font class="serif" size="3px" color="<?php echo $txtcolor; ?>" for="address"  style="font-size: 15px;"> <b>    
							 <?php echo $objResult2["name"]; ?>   
						  <div style=" margin-top: 10px; margin-bottom: 10px; "> </div>
						   
						   
						  </div>  
					  	</a>
					  	
						</div>   
                 	   
                 	   
                     
                  	   <?php } ?>
                  	   
                  	   <div class="col-lg-12">
                  	   	<br>  
                  	   </div>
                  	   <?php } ?>
                  		  
                       
                          
					   <?php if(!empty($paymenttype2)){  
							
							$nametype = " ";
							$sql2 = " SELECT * FROM paymenttype2 where name != ''  and paymenttype = '".$paymenttype."' order by pk asc      ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{    
								$nametype = $objResult2["name"];
							}
							
						?>
                          
					    <div class=" col-lg-12 " style="background-color: #FFF;  " align="left" >
                 	     <hr>
					    </div>
                  		    

						<?php if(empty($_GET["editdata"])){ ?>
					      
					    <form role="form" name="frmMain" method="post" action="save_paymenttyp3.php" enctype="multipart/form-data"  > 
 
						<input type="hidden" id="bill_no" name="bill_no">   
						<input type="hidden" id="paymenttype" name="paymenttype" value="<?php echo $paymenttype; ?>">  
						<input type="hidden" id="paymenttype2" name="paymenttype2"  value="<?php echo $paymenttype2; ?>">    

						<div class="row"   > 
						<div class="col-md-12"   > 
                       
						  <div class="col-md-3"  >	
							<div class="form-group">
							  <font color = '#000' size="3px" > วันที่บันทึกรายการ </font>    
				 			  <input type="text" class="form-control current" id="startdate" name="startdate"  autocomplete="off"  value="<?php echo date('d/m')."/".(date('Y')+543); ?>" required   style="border-radius: 5px; border: 1px solid #C9C9C9; " readonly    > 			 
							</div>
						  </div> 
						   
						  <div class="col-md-12"  >   </div>  

						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> ยอดเงิน </font> 
								 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" >
							  </div>
						   </div>  
						   
 
						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
								 <input type="text" class="form-control" id="note" name="note"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note; ?>"  >
							  </div>
						   </div>  
							    
						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> ข้อมูลผู้รับเงิน </font>
								 <input type="text" class="form-control" id="note2" name="note2"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note2; ?>"  >
							  </div>
						   </div>  
						   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-3 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspasy" name="statuspasy" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_pasy3 where name = '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_pasy3 where name != '".$statuspasy."' order by pk asc  "; 
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
							    
							   <div class="col-md-3 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspayment" name="statuspayment" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name = '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name != '".$statuspaymentr."' order by pk asc  "; 
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
									<span class="input-group-append" style="display: none; ">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
							  
							  
							   
						  
						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 140px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

 
						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#003F88" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
 

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

									<button type="submit" class="btn btn-primary" style="background-color: #3F3F3F; border-radius: 5px; width: 130px; height: 40px; border-color: #3F3F3F;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #3F3F3F;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  

						  </div>  
						  </div> 
						   
						</div>        
						</div>  
						      
						</form>  
						
						<?php } ?>
					      
					      
					   <?php 
						if(isset($_GET["editdata"])){ 
						if( ($_GET["editdata"]) == "1" ){
						$sql = "SELECT * FROM paymenttyp3 Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{     
							$startdate = $objResult["saveold"];   
							$price = $objResult["price"];      
							$savedate = $objResult["savedate"];    
							$price = $objResult["price"];    
							$note = $objResult["note"];    
							$major = $objResult["major"];    
							$note2 = $objResult["note2"];    
							$statuspaymentr = $objResult["statuspayment"];    
							$statuspasy = $objResult["statuspasy"];    
							$bank = $objResult["bank"];  
						}  
						?> 
				      
				      
					     <form role="form" name="frmMain" method="post" action="save_paymenttyp3_update.php" enctype="multipart/form-data"  > 
 
						<input type="hidden" id="bill_no" name="bill_no">   
						<input type="hidden" id="paymenttype" name="paymenttype" value="<?php echo $paymenttype; ?>">  
						<input type="hidden" id="paymenttype2" name="paymenttype2"  value="<?php echo $paymenttype2; ?>">    
						<input type="hidden" id="idupdate" name="idupdate"  value="<?php echo $_GET["CusID"]; ?>">    

						<div class="row"   > 
						 <div class="col-md-12"   > 
                       
						  <div class="col-md-3"  >	
							<div class="form-group">
							  <font color = '#000' size="3px" > วันที่บันทึกรายการ </font>    
				 			  <input type="text" class="form-control current" id="startdate" name="startdate"  autocomplete="off"  value="<?php echo date('d/m')."/".(date('Y')+543); ?>" required   style="border-radius: 5px; border: 1px solid #C9C9C9; " readonly    > 			 
							</div>
						  </div> 
						   
						  <div class="col-md-12"  >   </div>  

						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> ยอดเงิน </font> 
								 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" >
							  </div>
						   </div>  
						   
 
						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
								 <input type="text" class="form-control" id="note" name="note"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note; ?>"  >
							  </div>
						   </div>  
							    
						   <div class="col-md-3 "> 
							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"> ข้อมูลผู้รับเงิน </font>
								 <input type="text" class="form-control" id="note2" name="note2"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note2; ?>"  >
							  </div>
						   </div>  
						   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-3 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspasy" name="statuspasy" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_pasy3 where name = '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_pasy3 where name != '".$statuspasy."' order by pk asc  "; 
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
							    
							   <div class="col-md-3 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspayment" name="statuspayment" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name = '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name != '".$statuspaymentr."' order by pk asc  "; 
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
									<span class="input-group-append" style="display: none; ">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
							  
							  
							   
						  
						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 140px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

 
					  	   <a href="paymenttyp3.php?paymenttype=<?php echo $_GET["paymenttype"]; ?>&paymenttype2=<?php echo $_GET["paymenttype2"]; ?>">
					  	   	 
						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#003F88" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

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

									<button type="submit" class="btn btn-primary" style="background-color: #3F3F3F; border-radius: 5px; width: 130px; height: 40px; border-color: #3F3F3F;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #3F3F3F;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  

						  </div>  
						  </div> 
						   
						</div>        
						</div>  
						      
						</form>  
			       
			       
				       <?php } } ?>
					      
					      
					   <div class="col-lg-12">
					   	<hr>
					   </div>
				       
				       
				       
				       <form action="paymenttyp3.php" method="get" >
				       <input type="hidden" id="paymenttype2" name="paymenttype2" value="<?php echo $paymenttype2; ?>">
				       <input type="hidden" id="paymenttype" name="paymenttype" value="<?php echo $paymenttype; ?>">
				       
					   <div   class="col-lg-4"  align="left"  > 
					   <table width="100%">
						<tr> 
							<td width="30%"> 
							<font color="black" size="3px" class="serif">  วันที่เริ่ม  </font>
 
							<div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							<input class="form-control current   "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>" readonly       autocomplete="off"  >

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none; ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>     
							<td width="1%">&nbsp;   </td> 
							<td width="30%"> 
							<font color="black" size="3px" class="serif">  สิ้นสุด  </font>
 
							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							<input class="form-control  current  "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"   readonly    autocomplete="off"  >

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="submit"    >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>       
						</tr>
					   </table>  
					   </div> 
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
							 
						$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
						$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
 

						$sql2 = "  SELECT * FROM paymenttyp3 where   paymenttype = '".$paymenttype."' and paymenttype2 = '".$paymenttype2."' ".$addcode." order by pk asc     "; 
						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
						<ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="paymenttyp3.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="paymenttyp3.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="paymenttyp3.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="paymenttyp3.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="paymenttyp3.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttyp3.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttyp3.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="paymenttyp3.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="paymenttyp3.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>">Next</a></li>
						<?php endif; ?>
						</ul> 
						<?php endif; ?>

						</div> 
					       
					        <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1900px; "    >
							<thead> 
							<tr>
							<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> ลำดับ    </font></div></th>       
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเลขบิลรายการ  </font></div></th>  
							<th width="5%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รายการ    </font></div></th>  
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  มูลค่าสินค้า    </font></div></th> 
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี    </font></div></th> 
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน    </font></div></th> 
							<th width="5%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   หมายเหตุ     </font></div></th>    
							<th width="5%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ข้อมูลผู้รับเงิน     </font></div></th>   
							<th width="4%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะชำระเงิน     </font></div></th>  
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิมพ์     </font></div></th>
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ   </font></div></th>
							<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน   </font></div></th>     
							<th width="5%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   แก้ไข - ลบ   </font></div></th>  
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

							$sql2 = "   SELECT * FROM paymenttyp3 where paymenttype = '".$paymenttype."' and paymenttype2 = '".$paymenttype2."' ".$addcode." order by pk asc      limit {$start} , {$perpage}   ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
							if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
							}else{  
							$bg = "#FFF"; 
							} 

							$name_create_by = "";
							$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							$name_create_by =  $objResult["name"];
							} 

							$name_create_bo = "";
							$sql = "SELECT * FROM paymenttype where pk = '".$objResult2["paymenttype"]."'    order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							$name_create_bo =  $objResult["name"];
							} 
							$name_create_bo2 = "";
							$sql = "SELECT * FROM paymenttype2 where pk = '".$objResult2["paymenttype2"]."'    order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
							$name_create_bo2 =  $objResult["name"];
							} 


							$colorbg = "#000";  
							$bill_no =  $objResult2["bill_no"];
							$g_create_date2 =  $objResult2["create_date2"];
							$typedata =  $objResult2["typedata"];
							$note =  $objResult2["note"];
							$statuspasy =  $objResult2["statuspasy"];
								
								
							$price1 =  0;
							if(!empty($objResult2["price"])){
								$price1 =  $objResult2["price"];
							}
								
							$vat = 0;
							$pasy = 0;
								
								$newmoney2 =  $price1 ;
							if(empty($statuspasy)){
								$newmoney2 =  $price1 ;

							}else if($statuspasy == "ภาษีภายใน"){ 
								$pasy  = ($price1 *  100 ) / 107;
								
								
							$newmoney2 =  $price1 - $pasy;
							$price1 =    $pasy; 
							$pasy =  $newmoney2;
							$newmoney2 =  $price1 + $pasy;
								
							}else if($statuspasy == "ภาษีภายนอก"){  
								$pasy  = ($price1 *  7 ) / 107;
								$pasy  = $price1 * 0.07;
								
							$newmoney2 =  $price1 + $pasy;
							}

								  
								
								$cutbill = explode("B", $objResult2["bill_no"]);

								$bill_no =  "B".$objResult2["pk"].$cutbill[1];
							?>
							<tr style="background-color: <?php echo $bg; ?>; ">  

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $bill_no; ?>  </font></div></td>

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_bo2; ?>  </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?>  </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$pasy); ?>  </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$newmoney2); ?>  </font></div></td>
							 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["note"]; ?>  </font></div></td>
							
							 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["note2"]; ?>  </font></div></td>
 
 
 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
							<?php 
								if($objResult2["statuspayment"] == "รอยืนยันชำระเงิน"){ 
							?> 
							<a   class=" btn  btn-sm " style="background-color: #FF741D; border-radius: 20px;   border: 1px solid  #FF741D; width: 100%; margin-top: -5px;   "  ><font size="3px" color="#FFF" style=" font-size: 13px; " > รอยืนยันชำระเงิน </font></a>
							<?php
								}else{ 
							?>  
							<a   class=" btn  btn-sm " style="background-color: #6CB141; border-radius: 20px;   border: 1px solid  #6CB141; width: 100%;  margin-top: -5px;   "  ><font size="3px" color="#FFF" style=" font-size: 13px; " > ชำระเงินแล้ว </font></a>
							<?php
								} 
							?>   
							</font></div></td> 
							
							

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								
							<a class="btn  btn-sm" style=" background-color: #FFAA36; border-radius: 5px;  margin-top: -5px; " href="print_pasy_paymentdata_bill.php?CusID=<?php echo $objResult2["pk"];?>&page=1&searchname=<?php echo $searchname;?>&major=<?php echo $major;?>&typedata=<?php echo $typedata;?>" target="_blank"  > 
							<font size="3px" color="#FFF" style=" font-size: 13px; " > &nbsp;&nbsp; พิมพ์ &nbsp;&nbsp; </font>
							</a>
								
							</font></div></td> 

							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date2"])." ".DateThai2($objResult2["create_date2"]); ?>  </font></div></td>
							
 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_by; ?>  </font></div></td>
							
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
							    
							 <a href="paymenttyp3.php?CusID=<?php echo $objResult2["pk"];?>&editdata=1&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>" class=" btn  btn-sm " style="background-color: #F8741D; border-radius: 5px;  border-color: #F8741D; border: 1px solid  #F8741D;    margin-top: -5px; " >  <font size="3px" color="#FFF" style=" font-size: 13px; " >  แก้ไข </font> </a>
							
							 &nbsp;
							 
							 <a  href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>&paymenttype=<?php echo $paymenttype; ?>&paymenttype2=<?php echo $paymenttype2; ?>';}"   >
							 <button type="button" class=" btn btn-sm " style="background-color: #EF0000; border-radius: 5px;   border: 1px solid  #EF0000;   margin-top: -5px; ">  
							 <font color="#FFF" size="3px" class="serif1" style="font-size: 13px; " > &nbsp;   ลบ &nbsp;  </font> </button>
							 </a>   
							 
							</font></div></td> 

							</tr> 
							<?php $i++; } ?>
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>