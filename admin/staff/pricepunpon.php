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

	$month = date('m');
	$year = date('Y');
 

	if(isset($_GET["Action"])){  
		if($_GET["Action"] == "Del")
		{  
			
		$strSQL = "Delete From pricepunpon  ";
		$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
		$objQuery = mysqli_query($objCon,$strSQL); 
 

			//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
			echo("<script>window.location = 'pricepunpon.php';</script>"); 
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
                     <font size="4px" color="#000000">  จ่ายเงินปันผลประจำเดือน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > จ่ายเงินปันผลประจำเดือน > เพิ่มข้อมูล   </font>   
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
                     <font size="4px" color="#000000">  จ่ายเงินปันผลประจำเดือน   </font>   
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
                      
                        <script>  
						$( document ).ready(function() {   
							$('#loading_spinner').hide();  
						});
						  	function myFunction1() 
							{
								var x = document.getElementById("customerpk").value; 
								var month = document.getElementById("month").value; 
								var year = document.getElementById("year").value; 
								var getX = x.split("///");
								
								document.getElementById("customer").value = getX[0];  
								
								document.getElementById("percent").value = getX[1]; 
								
								
							
								 $('#loading_spinner').show();
									//	$('#loading_spinner').hide();
								document.getElementById("percent2").value = " *** รอสักครู่กำลังประมวลผล ...... ";
								
							
								var customer = getX[0]; 
								var percent = getX[1]; 
								var month = document.getElementById("month").value; 
								var year = document.getElementById("year").value; 
								$.ajax({
									type: "GET",
									url: "loadpercentpunpondata.php?customer="+customer+"&percent="+percent+"&month="+month+"&year="+year,
									success: function(result) { 
										/// $('#tableshow').html(result);


										$('#showkeypunpon').html(result);

 										$('#loading_spinner').hide();
									}
								});	  
							 
							
								
							}
                        </script> 

                          
                          
                      	  <form role="form" name="frmMain" method="post" action="save_pricepunpon.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  <input type="hidden" id="customer" name="customer" >
                      	  
                          <div class="col-lg-5" >  
						   
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อผู้ถือหุ้น </font>   
								 <select class="form-control myselect" id="customerpk" name="customerpk" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " onChange="myFunction1()" > 
								 	<?php if(empty($customer)){ ?>
										<option value=""> เลือกรายชื่อผู้ถือหุ้น </option>  
									<?php } ?>     
									<?php 
									$sql = "SELECT * FROM customerpunpon where pk = '".$customer."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$percent = 0;
										if(empty($objResult["percent"])){
											
										}else{
											$percent = $objResult["percent"];	
										}
									?>
									<option value="<?php echo $objResult["pk"]."///".$percent; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM customerpunpon where pk != '".$customer."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$percent = 0;
										if(empty($objResult["percent"])){
											
										}else{
											$percent = $objResult["percent"];	
										}
									?>
									<option value="<?php echo $objResult["pk"]."///".$percent; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								 <script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
						   
						   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เดือน </font>   
								 <select class="form-control myselect" id="month" name="month" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " >   
									<?php 
									$sql = "SELECT * FROM month where statusdata = '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM month where statusdata != '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
						   
						   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ปี </font>   
								 <select class="form-control myselect" id="year" name="year" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " >   
									<?php 
									$sql = "SELECT * FROM year where year = '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM year where year != '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
							   
						 
							
                     	  <?php  $percent = ""; ?>
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดปั่นผล % <img id="loading_spinner" src="images/loading2.gif" style=" width: 25px; "   > </font>   
							   
								<div>
							   <input type="text" class="form-control" id="percent" name="percent"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $percent; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" readonly     > 
								</div> 
							
							</div> 
						  </div> 
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดปั่นผล   </font>   
							   
								<div  id="showkeypunpon">
							   <input type="text" class="form-control" id="percent2" name="percent2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $percent2; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     > 
								</div> 
							
							</div> 
						  </div> 
							
                      	  <div class="col-md-6"  >
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

								 
							  	  <a href="pricepunpon.php">
							  	  	 
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
						$sql = "SELECT * FROM pricepunpon Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$customer = $objResult["customer"];  
							$percent = $objResult["percent"];  
							$percent2 = $objResult["percent2"];  
							$notedata = $objResult["notedata"];
							$payment = $objResult["payment"];   
							$month = $objResult["month"];   
							$year = $objResult["year"];   
							$newdatasave = $objResult["newdatasave"];   

 
						}  
							 
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
							yearRange: "-40:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                      
                       
                          
                      	  <form role="form" name="frmMain" method="post" action="save_pricepunpon_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
						 <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
						 <input type="hidden" name="major" id="major" class="form-control " value="<?php echo $major; ?>" >
					
                      	  <input type="hidden" id="customer" name="customer" value="<?php echo $customer; ?>" >
                      	  
                          <div class="col-lg-5" >  
						   
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อผู้ถือหุ้น </font>   
								 <select class="form-control myselect" id="customerpk" name="customerpk" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " onChange="myFunction1()" > 
								 	<?php if(empty($customer)){ ?>
										<option value=""> เลือกรายชื่อผู้ถือหุ้น </option>  
									<?php } ?>     
									<?php 
									$sql = "SELECT * FROM customerpunpon where pk = '".$customer."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$percentsave = 0;
										if(empty($objResult["percent"])){
											
										}else{
											$percentsave = $objResult["percent"];	
										}
									?>
									<option value="<?php echo $objResult["pk"]."///".$percentsave; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>    
								</select>
								 <script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
						   
						   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เดือน </font>   
								 <select class="form-control myselect" id="month" name="month" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " >   
									<?php 
									$sql = "SELECT * FROM month where statusdata = '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM month where statusdata != '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
						   
						   
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ปี </font>   
								 <select class="form-control myselect" id="year" name="year" required  style="border-radius: 5px; border: 1px solid #C9C9C9; " >   
									<?php 
									$sql = "SELECT * FROM year where year = '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM year where year != '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>
							</div>
						  </div> 
							   
						 
							 
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดปั่นผล %  </font>   
							   
								<div >
							   <input type="text" class="form-control" id="percent" name="percent"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $percent; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     > 
								</div> 
							
							</div> 
						  </div> 
                      	  <div class="col-md-3"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดปั่นผล   </font>   
							   
								<div  id="showkeypunpon">
							   <input type="text" class="form-control" id="percent2" name="percent2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $percent2; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     > 
								</div> 
							
							</div> 
						  </div> 
							
                      	  <div class="col-md-6"  >
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
									$sql = "SELECT * FROM drop_paymentpunpon where name = '".$payment."'  order by pk asc  "; 
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

								 
							  	  <a href="pricepunpon.php">
							  	  	 
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
                         
                         
                         <div   class="col-lg-4"  align="left"  > 
							<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ค้นหารายชื่อลูกค้า  / เบอร์โทรติดต่อ  </font>

									<form action="pricepunpon.php" method="get" >
									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
									<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >

									<span class="input-group-append">
									  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
											<img src="images/search.png" style="width: 15px; "> 
									  </button>
									</span>
									</div>
									</form> 

									</td>   
								</tr>
							</table>  
							</div>
                         
                         
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
							if(empty($_GET["searchname"])){

							}else{
								$addcode = " and (  b.name like '%".$searchname."%' or b.telphone like '%".$searchname."%'  )  ";
							} 

						$sql2 = " SELECT a.*, b.name, b.telphone  FROM pricepunpon  a
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != ''  
						".$addcode.$addcode2."  
						order by pk asc    "; 

						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
						<ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="pricepunpon.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="pricepunpon.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="pricepunpon.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="pricepunpon.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="pricepunpon.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="pricepunpon.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="pricepunpon.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="pricepunpon.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="pricepunpon.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
									<?php endif; ?>
								</ul>
						<?php endif; ?> 
						</div>
                         
                         
                         
                         <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บิล    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อ-นามสกุล  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงิน     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะชำระ   </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ   </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ/ผู้ทำรายการ   </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์บิล   </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
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
										    
										$sql2 = " SELECT a.*, b.name, b.telphone  FROM pricepunpon  a
										Inner Join customer b On a.customer = b.pk
										where a.bill_no != ''  
										".$addcode.$addcode2."  
										order by pk asc    limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
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
			
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["percent2"]); ?>   </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $status1; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["notedata"]; ?>  </font></div></td> 
										 

										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php echo DateThai($namestaff2)." ".DateThai2($namestaff2); ?>  
										<div> </div>
										<?php echo $namestaff; ?> 
										
										</font></div></td> 
										 
										 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											 
									 
										<a href="print_pricepunpon.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > พิมพ์ </font></a>
										 
											
										</font></div></td> 
										
										
										<td align="center"><div align="center"><a  href="pricepunpon.php?CusID=<?php echo $objResult2["pk"];?>&page=1&major=<?php echo $major;?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > แก้ไข </font></a> 
										&nbsp;
										-
										&nbsp;
										<a  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>&major=<?php echo $major;?>';}"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > ลบ </font></a>
										</div></td>
										
										
										
										
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