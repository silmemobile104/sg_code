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
                     <font size="4px" color="#000000">  สร้างหมวดค่าใช้จ่ายแบบย่อย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สร้างหมวดค่าใช้จ่ายแบบย่อย   </font>   
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
                     <font size="4px" color="#000000">  สร้างหมวดค่าใช้จ่ายแบบย่อย   </font>   
                  </div> 
                  </font> 
                  </div>
                        
					 <div class="col-md-12">  <br> </div>
                     <input type="hidden" id="page2" value="<?php echo $page2; ?>" >
                     
                     <script>
						$( document ).ready(function() {   
							 Loadtable();    
						});

						function Loadtable()
							{      
								
							 var paymenttype = document.getElementById("paymenttype").value; 
							 var page2 = document.getElementById("page2").value; 
								
								$.ajax({
									type: "GET",
									url: "loaddatapaymenttype.php?paymenttype="+paymenttype+"&page2="+page2,
									success: function(result) {
									$('#tableshow').html(result);
									}
								});	 
							}
							
						function myFunction1(){ 
							 var paymenttype = document.getElementById("paymenttype").value; 
							 var page2 = document.getElementById("page2").value; 
							  
								$.ajax({
									type: "GET",
									url: "loaddatapaymenttype.php?paymenttype="+paymenttype+"&page2="+page2,
									success: function(result) {
									$('#tableshow').html(result);
									}
								});	
						}
							
						</script>
                
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
                          
                          <form role="form" name="frmMain" method="post" action="save_paymenttype2.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
 
					  
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> หมวดค่าใช้จ่าย </font>  
								 <select class="form-control myselect" id="paymenttype" name="paymenttype" required style=" width: 100%;"     onchange="myFunction1()"  >   
								 <?php if(empty($paymenttype)){ ?>
								 	<option value=""> หมวดค่าใช้จ่าย   </option> 
								 <?php } ?>
							    <?php 
								$sql = "SELECT * FROM paymenttype where pk = '".$paymenttype."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  	 
								?>
								<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM paymenttype where pk != '".$paymenttype."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{   
								?>
								<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							    
							    
							  </div> 

						   </div> 
						   
						   <div class="col-lg-12">  </div>
						   
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> สร้างหมวดค่าใช้จ่ายแบบย่อย </font>
								 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
							  </div> 

							</div>   
  
   
						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 100px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


						  <a href="paymenttype2.php">

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 100px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

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

						 </form>
                       
                           
                   	  <?php } ?>
                   		    
                   		  
                  		  	  
                   	    <?php 
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM paymenttype2 Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{     
							$paymenttype = $objResult["paymenttype"];   
							$name = $objResult["name"];   
						}  
						?> 
                  		   
                  		   
                  		   <form role="form" name="frmMain" method="post" action="save_paymenttype2_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
 
						    <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
                           
 
					  
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> หมวดค่าใช้จ่าย </font>  
								 <select class="form-control myselect" id="paymenttype" name="paymenttype" required style=" width: 100%;"     onchange="myFunction1()"  >   
								 <?php if(empty($paymenttype)){ ?>
								 	<option value=""> หมวดค่าใช้จ่าย   </option> 
								 <?php } ?>
							    <?php 
								$sql = "SELECT * FROM paymenttype where pk = '".$paymenttype."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  	 
								?>
								<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php 
								$sql = "SELECT * FROM paymenttype where pk != '".$paymenttype."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{   
								?>
								<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
							    </select>
							    
							    
							  </div> 

						   </div> 
						   
						   <div class="col-lg-12">  </div>
						   
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> สร้างหมวดค่าใช้จ่ายแบบย่อย </font>
								 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
							  </div> 

							</div>   
  
   
						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 100px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


						  <a href="paymenttype2.php">

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 100px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

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

						 </form>
                  	  
                  	  
                   	  <?php } } ?>
                   	  
                   	  
                          
                  		  
                         <div class="col-md-12">  <hr> </div>
                         
                         
						   <div class="col-lg-12">
						   <div id="tableshow"  >


						   </div>
						   </div>
                  		    
                  		    


						      

						    

                         
                          
                          
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