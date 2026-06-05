<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	
		 
	$major = "1"; 
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
	$detail = ""; 
	$customer = ""; 
	$drop_chat = ""; 


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
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>   
        	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        	
        	
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกข้อความตามสาขา   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกข้อความตามสาขา   </font>   
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
                     <font size="4px" color="#000000">  บันทึกข้อความตามสาขา   </font>   
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
													yearRange: "-5:+5",
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
									<a href="chatmajor.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  บันทึกข้อความตามสาขา    </font>  
									</div>
									</a>
									</td>
									<td width="50%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >
									<a href="chatmajor_view.php">    
									<div  >   
									<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  ดูรายการบันทึก  </font>  
									</div> 
									</a>
									</td>
								</tr>
							</table>
						   </div>
                      
							<div class="col-lg-12">
							<hr>
							</div>
                      
                      
                      	  <form role="form" name="frmMain" method="post" action="save_chatmajor.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  
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
							   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font> 
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
								<select class="form-control" id="customer" name="customer" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  " onchange="LoadDropdown()"   >  
									<option value="">  เลือกรายชื่อลูกค้า    </option> 
								<?php 
									$sql = "SELECT * FROM customer where pk = '".$customer."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>   
								<?php 
									$sql = "SELECT * FROM customer where pk != '".$customer."' order by pk asc  "; 
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
							
                     	  
                     	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะ </font> 
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
								<select class="form-control" id="drop_chat" name="drop_chat" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "    >  
									<option value="">  สถานะ    </option> 
								<?php 
									$sql = "SELECT * FROM drop_chat where name = '".$drop_chat."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>   
								<?php 
									$sql = "SELECT * FROM drop_chat where name != '".$drop_chat."' order by pk asc  "; 
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
							   <font color = '#000' size="3px" > วันทีบันทึก </font>   
							  <input type="text" class="form-control current " id="datesave" name="datesave"  autocomplete="off" required     style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo date('d/m')."/".(date('Y')); ?>" readonly  >
							</div>
						  </div> 
							
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							  <font color = '#000' size="3px" > รายละเอียด </font>   
							  <textarea class="form-control" id="detail" name="detail" rows="2"   ><?php echo $detail; ?></textarea>

								<script>
								CKEDITOR.replace('detail');
								function CKupdate() {
										for (instance in CKEDITOR.instances)
										CKEDITOR.instances[instance].updateElement(); 
								 }
												
											 
									 CKEDITOR.instances['detail'].on('change', function() { 
									 var value = this.getData();
												  //alert(value);
													 
									});	
								</script>
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
                  		  
                           
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								  
							  	  <a href="chatmajor.php">
							  	  	 
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
                           
						  
						  <div class="col-lg-12">
							<hr>
						  </div> 
					   	  </form> 
                  	   
                    		  
                  	  
                   	  <?php } ?>
                   		    
                   		  
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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