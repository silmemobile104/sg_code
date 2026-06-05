<?php 
session_start();
$_SESSION["load"] = "24";
include('header.php');
 
	
		 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
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
	$postion = "";
	$poition = "";



	$sql = "SELECT * FROM member_all Where  pk = '". $_GET["CusID"] ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$name = $objResult["name"]; 
		$username = $objResult["username"]; 
		$password = $objResult["password"]; 
		$status = $objResult["status"]; 
		$address = $objResult["address"]; 
		$telphone = $objResult["telphone"]; 
		$line = $objResult["line"]; 
		$facebook = $objResult["facebook"]; 
		$poition = $objResult["poition"]; 
		$chk1 = $objResult["chk1"]; 
		$chk2 = $objResult["chk2"]; 
		$chk3 = $objResult["chk3"]; 
		$chk4 = $objResult["chk4"]; 
		$chk5 = $objResult["chk5"]; 
		$chk6 = $objResult["chk6"]; 
		$chk7 = $objResult["chk7"]; 
		$chk8 = $objResult["chk8"]; 
		$chk9 = $objResult["chk9"]; 
		$chk10 = $objResult["chk10"]; 
		$chk11 = $objResult["chk11"]; 
		$chk12 = $objResult["chk12"]; 
		$chk13 = $objResult["chk13"]; 
		$chk14 = $objResult["chk14"]; 
		$chk15 = $objResult["chk15"]; 
		$chk16 = $objResult["chk16"]; 
		$chk17 = $objResult["chk17"]; 
		$chk18 = $objResult["chk18"]; 
		$chk19 = $objResult["chk19"]; 
		$chk20 = $objResult["chk20"]; 
		$chk21 = $objResult["chk21"]; 
		$chk22 = $objResult["chk22"]; 
		$chk23 = $objResult["chk23"]; 
		$chk24 = $objResult["chk24"]; 
		$chk25 = $objResult["chk25"]; 
		$chk26 = $objResult["chk26"]; 
		$chk27 = $objResult["chk27"]; 
		
		
		$store = $objResult["store"]; 
		   
		
	}  



	$postion = $_GET["postion"];


	$showadd = "";
	$sql = "SELECT * FROM drop_type_staff  where pk = '".$postion."'  order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$showadd = $objResult["name"];
	}
?> 
		  <link href="../select2.min.css" rel="stylesheet" />
		  <script src="../select2.min.js"></script>  
  			 
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
            <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  กำหนดสิทธิ์การเข้าถึงระบบ  <?php echo $showadd; ?>  </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > กำหนดสิทธิ์การเข้าถึงระบบ  <?php echo $showadd; ?> > เพิ่มข้อมูล   </font>   
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
                     <font size="4px" color="#000000">  กำหนดสิทธิ์การเข้าถึงระบบ   <?php echo $showadd; ?> </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
					  <div class=" col-lg-4 "  align="left" >
							<table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr> 
									<td width="50%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
									<a href="staffpartner.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  เพิ่มข้อมูล   </font>  
									</div>
									</a>
									</td>
									<td width="50%" align="center" bgcolor="#F77369"   >  
									<a href="staff_edit.php">   
									<div  >   
									<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขข้อมูลพนักงาน   </font>  
									</div>
									</a>
									</td>
								</tr>
							</table>
						   </div>
                      
                      <div class="col-lg-12">
                      	<hr>
                      </div>
                      
                      
                      	<form role="form" name="frmMain" method="post" action="save_staffpartner_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	
                      
                      <div class="col-lg-5" style="   ">  
                      	
						<input type="hidden" id="idupdate" name="idupdate" value="<?php echo $_GET["CusID"]; ?>" > 
  
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อ-นามสกุล </font>   
							  <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; " value="<?php echo $name; ?>"  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ที่อยู่ </font>   
							  <input type="text" class="form-control" id="address" name="address"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $address; ?>"   >
							</div>
						  </div> 
							  
                      	  <div class="col-md-12"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เบอร์โทรติดต่อ </font>   
							  <input type="text" class="form-control" id="telphone" name="telphone"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $telphone; ?>"   maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
							</div> 
						  </div> 
							  
                  		 <div class="col-lg-12 ">   </div> 
                          
                         <div class="col-md-6"   >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Line </font>   
							  <input type="text" class="form-control" id="line" name="line"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "    value="<?php echo $line; ?>"   >
							</div>
						  </div> 
                          
                         <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Facebook </font>   
							  <input type="text" class="form-control" id="facebook" name="facebook"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "    value="<?php echo $facebook; ?>"   >
							</div>
						  </div> 
                          
                  		 <div class="col-lg-12 ">   </div>  
                         
                         <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะของระบบ </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="poition" name="poition" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
							    <?php 
								$sql = "SELECT * FROM drop_type_staff where pk = '".$poition."' order by pk asc  "; 
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
                        
                        
                         <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ร้านค้า </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="store" name="store" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
							    <?php 
								$sql = "SELECT * FROM store where pk = '".$store."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM store where pk != '".$store."' order by pk asc  "; 
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
                        
                         
                  		 <div class="col-lg-12 " style="display: none;">   </div> 
                           
                         <div class="col-md-12" style="display: none;"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
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
                         
                  		 <div class="col-lg-12 ">   </div> 
                            
                         <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ข้อมูลเข้าสู่ระบบ </font>  
							</div>
						  </div> 
                         
                  		 <div class="col-lg-12 ">   </div> 
 
                         <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Username </font>   
							  <input type="text" class="form-control" id="username" name="username"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $username; ?>"  > 
							</div>
						  </div> 
                 		 
                  		 <div class="col-lg-12 ">   </div> 
                          
                         <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > Password </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $password; ?>" > 
							</div>
						  </div> 
                 		  
                  		 <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

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