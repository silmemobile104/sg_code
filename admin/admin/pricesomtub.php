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
 	  
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
 

	$datesave = date('d/m')."/".(date('Y'));


		if(isset($_GET["Action"])){  
			if($_GET["Action"] == "Del")
			{  
				
			$strSQL = "Delete From pricesomtub  ";
			$strSQL .="WHERE bill_no = '".$_GET["bill_no"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				 
				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'pricesomtub.php';</script>"); 
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
                     <font size="4px" color="#000000">  เงินทุนสะสม   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เงินทุนสะสม > เพิ่มข้อมูล   </font>   
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
                     <font size="4px" color="#000000">  เงินทุนสะสม   </font>   
                  </div> 
                  </font> 
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
							yearRange: "-40:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                     
                     
                      <?php if(empty($_GET["page"])){ ?>
                       
                      	  <form role="form" name="frmMain" method="post" action="save_pricesomtub.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                          <div class="col-lg-5" >  
						   
                      	    
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่บันทึก  </font>   
							  <input type="text" class="form-control current" id="datesave" name="datesave"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $datesave; ?>" readonly   >
							</div> 
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายการ  </font>    
							  
							  <select class="form-control  " id="titledata" name="titledata" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($titledata)){ ?>
										<option value=""> รายการ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM drop_titledata where pk = '".$titledata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM drop_titledata where name != '".$titledata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select>
								
								
							</div> 
						  </div> 
							   
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดเงิน  </font>   
							  <input type="text" class="form-control" id="price" name="price"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $price; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     >
							</div> 
						  </div> 
						  
						  
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > บัญชีที่โอน  </font>    
							  
							  <select class="form-control  " id="bank" name="bank" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($bank)){ ?>
										<option value=""> รายการ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM bank2 where pk = '".$bank."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM bank2 where pk != '".$bank."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select>
								
								
							</div> 
						  </div> 
							   
							
						   <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  ต้องการคิดภาษีมูลค่าเพิ่ม หรือ ไม่     </font>  
							 	 <select class="form-control" id="pasy" name="pasy" required style="border-radius: 5px; border: 1px solid #C9C9C9; "  >  
								<option value="">   ต้องการคิดภาษีมูลค่าเพิ่ม หรือ ไม่      </option> 
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name = '".$pasy."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_pasy where name != '".$pasy."' order by pk asc  "; 
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
						  
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเหตุ </font>   
							  <input type="text" class="form-control" id="notedata" name="notedata"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $notedata; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะชำระเงิน </font>   
							    
								  <select class="form-control  " id="payment" name="payment" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($payment)){ ?>
										<option value=""> สถานะ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM drop_paymentpunpon where pk = '".$payment."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM drop_paymentpunpon where name != '".$payment."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select> 
							</div> 
						  </div> 
							  
                         
                          </div> 
							  
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="pricesomtub.php">
							  	  	 
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
                   		    
                   		   
                       <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM pricesomtub Where  bill_no = '". $_GET["bill_no"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$titledata = $objResult["titledata"];  
							$price = $objResult["price"]; 
							$bank = $objResult["bank"];  
							$notedata = $objResult["notedata"];  
							$payment = $objResult["payment"];  
							$bill_no = $objResult["bill_no"];  
							$pasy = $objResult["pasy"];  
						}  
							 
						?> 
                         
                         
                         <form role="form" name="frmMain" method="post" action="save_pricesomtub_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
							<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $bill_no; ?>" >
							<input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $bill_no; ?>" >
                         
                         
                         
                          <div class="col-lg-5" >  
						    
                     	  
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > รายการ  </font>    
							  
							  <select class="form-control  " id="titledata" name="titledata" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($titledata)){ ?>
										<option value=""> รายการ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM drop_titledata where pk = '".$titledata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM drop_titledata where name != '".$titledata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select>
								
								
							</div> 
						  </div> 
							   
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดเงิน  </font>   
							  <input type="text" class="form-control" id="price" name="price"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $price; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     >
							</div> 
						  </div> 
						  
						  
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > บัญชีที่โอน  </font>   
							 	 <select class="form-control  " id="bank" name="bank" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($bank)){ ?>
										<option value=""> รายการ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM bank2 where pk = '".$bank."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM bank2 where pk != '".$bank."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select>
							</div> 
						  </div> 
							   
						   <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  ต้องการคิดภาษีมูลค่าเพิ่ม หรือ ไม่     </font>  
							 	  <select class="form-control" id="pasy" name="pasy" required style="border-radius: 5px; border: 1px solid #C9C9C9; "  >  
								<option value="">   ต้องการคิดภาษีมูลค่าเพิ่ม หรือ ไม่      </option> 
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name = '".$pasy."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM drop_pasy where name != '".$pasy."' order by pk asc  "; 
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
						  
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเหตุ </font>   
							  <input type="text" class="form-control" id="notedata" name="notedata"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $notedata; ?>"    >
							</div> 
						  </div> 
							
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะชำระเงิน </font>   
							    
								  <select class="form-control  " id="payment" name="payment" required  style="border-radius: 5px; border: 1px solid #C9C9C9; "  >
									<?php if(empty($payment)){ ?>
										<option value=""> สถานะ </option>  
									<?php } ?>   
									<?php 
									$sql = "SELECT * FROM drop_paymentpunpon where pk = '".$payment."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
									<?php 
									$sql = "SELECT * FROM drop_paymentpunpon where name != '".$payment."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["name"]; ?>"> <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>  
								</select> 
							</div> 
						  </div> 
							  
                         
                          </div> 
							  
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="pricesomtub.php">
							  	  	 
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
                         <hr>   
						 </div>
                        
						 <form action="pricesomtub.php" method="get" >'
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
                        
                        
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >   </div>
                         
                         <div   class="col-lg-4"  align="left"  > 
							<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ค้นหารายการ  </font>
 
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >

									<span class="input-group-append">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
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
							$addcode2 = "";
							 
							 
						$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
						$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
 
							 
						if(empty($_GET["searchname3"])){

						}else{
							$addcode = " and (  titledata like '%".searchname3."%'  )  ";
						} 

						$sql2 = " SELECT *  FROM pricesomtub  
						where bill_no != ''  
						".$addcode.$addcode2."  
						order by pk asc    "; 

						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
						<ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="pricesomtub.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="pricesomtub.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="pricesomtub.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="pricesomtub.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="pricesomtub.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="pricesomtub.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="pricesomtub.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="pricesomtub.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="pricesomtub.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Next</a></li>
						<?php endif; ?>
						</ul>
						<?php endif; ?> 
						</div>
                          
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1800px; "    >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บิล    </font></div></th>    
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ/ผู้ทำรายการ   </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รายการ  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เพิ่มเงินลงทุน     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ถอนเงินลงทุน   </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  บัญชี   </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ   </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี   </font></div></th>      
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์บิล   </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข - ลบ   </font></div></th>  
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

								$sql2 = " SELECT *  FROM pricesomtub  
								where bill_no != ''  
								".$addcode.$addcode2."  
								order by create_date2 asc, pk asc  limit {$start} , {$perpage}   ";  

								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 

									$allmoney = 0;

									$contactstart   = date("Y-m-d", strtotime("2020-01-01")); 
									$checkend   = date("Y-m-d", strtotime($objResult2["create_date2"])); 

									$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									$sql = "SELECT * FROM pricesomtub where titledata != ''  ".$addcode." and pk <= '".$objResult2["pk"]."'   
									order by create_date2 asc, pk asc   "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										if(($objResult["titledata"] == "เพิ่มเงินลงทุน")){
											$allmoney +=  $objResult["price"] ;
										} else if(($objResult["titledata"] == "ถอนเงินลงทุน")){
											$allmoney -=  $objResult["price"] ;
										}
									} 

									if($allmoney <= 0){
										$allmoney = 0;
									}

									$namestaff = "";
									$namestaff2 = $objResult2["create_date"];
									$namestaff3 = "";
									$namestaff4 = "";  
									$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$namestaff =  $objResult["name"];
									} 

									$status1 = " - ";
									if(($objResult2["payment"] == "ชำระแล้ว")){
										$status1 = " <font color = '#006400' >  ".$objResult2["payment"]."  </font> ";
									} else if(($objResult2["payment"] == "ยังไม่ชำระ")){
										$status1 = " <font color = '#FF0000' >  ".$objResult2["payment"]."  </font> ";
									}

									$price1 = 0;
									$price2 = 0;
									if(($objResult2["titledata"] == "เพิ่มเงินลงทุน")){
										$price1 =  $objResult2["price"] ;
									} else if(($objResult2["titledata"] == "ถอนเงินลงทุน")){
										$price2 =  $objResult2["price"] ;
									}




									$pasy = $objResult2["pasy"];
									$bank = $objResult2["bank"];
									$namebank = " - ";
									$sql = "SELECT * FROM bank2 where pk = '".$bank."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 

									$namebank = $objResult["name"];

									}
								?>
								<tr style="background-color: <?php echo $bg ?>; "> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								<?php echo DateThai($namestaff2)." ".DateThai2($namestaff2); ?>  
								<div> </div>
								<?php echo $namestaff; ?> 

								</font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["titledata"]; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								<?php 
									if(!empty($price1)){
										echo number_format(0+$price1);
									}
									  ?>   </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								<?php 
									if(!empty($price2)){
										echo number_format(0+$price2);
									}
									  ?>   </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								<?php  
										echo number_format(0+$allmoney); 
									  ?>   </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $namebank; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["notedata"]; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $status1; ?>  </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $pasy; ?>  </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 


								<a href="print_pricesomtub.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > พิมพ์ </font></a>


								</font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 


								<a href="pricesomtub.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=1" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
								<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>


								&nbsp;
								-
								&nbsp;
								<a  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>&bill_no=<?php echo $objResult2["bill_no"];?>&searchname=<?php echo $_GET["searchname"];?>&searchname2=<?php echo $_GET["searchname2"];?>&searchname3=<?php echo $_GET["searchname3"];?>';}"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
								<font size="3px" color="#F77369" style=" font-size: 13px; " > ลบ </font></a>


								</font></div></td> 



								</tr>  
								<?php $i++;  } ?>
							</tbody>
  
										 
							</table>  
							</div>
						  </div>
                          
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