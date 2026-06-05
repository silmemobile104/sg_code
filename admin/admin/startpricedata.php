<?php 
session_start();
$_SESSION["load"] = "21";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";



	$typedata = "ราคาดาวน์ไอโฟน";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  กำหนดราคาผ่อน </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > กำหนดราคาผ่อน  </font>   
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
                     <font size="4px" color="#000000">  กำหนดราคาผ่อน   </font>   
                  </div> 
                  </font> 
                  </div>
                 
						  <?php   
							$sql = "SELECT * FROM startpricedata Where  statusdata = '".$typedata."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$downpercent = $objResult["downpercent"];   
								$data1 = $objResult["data1"];   
								$data2 = $objResult["data2"];   
								$data3 = $objResult["data3"];   
								$data4 = $objResult["data4"];   
								$data5 = $objResult["data5"];   
								$data6 = $objResult["data6"];   
								$data7 = $objResult["data7"];   
								$data8 = $objResult["data8"];   
								$data9 = $objResult["data9"];   

							}   
					
							$btn1 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
					
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							if($typedata == "ราคาดาวน์ไอโฟน"){

							$btn1 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							} else if($typedata == "ราคาแอนดอรย์"){

							$btn2 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn1 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
							$txt2 = " #FFF ";
							$txt1 = " #000 ";
							}
					
					
						  ?>
						 <form role="form" name="frmMain" method="post" action="save_startpricedata.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
						 <input type="hidden" id="typedata"  name="typedata" value="<?php echo $typedata; ?>">
				
							<div class="col-md-12" style=" margin-top:  0px; " >  </div>
					 
						  
                  		    <div class="col-md-12">
                  		  	<a href="startpricedata.php?typedata=ราคาดาวน์ไอโฟน"> 
							 <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?>  "  data-toggle="modal" data-target="#smallmodal" > <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >    ราคาดาวน์ไอโฟน   </font> </button> 
							</a>   
                  		  	<a href="startpricedata.php?typedata=ราคาแอนดอรย์"> 
							 <button type="button" class="btn btn-primary" style="  <?php echo $btn2; ?>  "  data-toggle="modal" data-target="#smallmodal" > <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >    ราคาแอนดอรย์   </font> </button> 
							</a>  
                  		  </div>
                         
                         
                          
							<div class="col-md-12" style=" margin-top:  10px; " >  </div>
                          
                            <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>   <?php echo $typedata; ?>   </b>  </font>    
							</div>
						    </div> 
							<div class="col-md-12" style=" margin-top:  0px; " >  </div>
                          
                           
                            <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>  กำหนดขายกำหนด % ดาวน์   </b>  </font>   
							  <input type="text" class="form-control" id="downpercent" name="downpercent"  autocomplete="off"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " value="<?php echo $downpercent; ?>"     style="border-radius: 5px; border: 1px solid #C9C9C9; " onKeyUp="calAge2()"  onChange="calAge2()" >
							</div>
						   </div> 
						  
							<div class="col-md-12" style=" margin-top:  0px; " >  </div>
 
						   <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>  3 เดือน กำหนด   </b>  </font>   
							  <input type="text" class="form-control"  id="data1" name="data1"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  onKeyUp="calAge2()"  onChange="calAge2()"   value="<?php echo $data1; ?>" >
							</div>
						  </div>  
						   <div class="col-md-2"  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  /  (หาร)    </b> </font>   
							  <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data2; ?>"    >
							</div>
						  </div> 
						   <div class="col-md-2" style = "  "  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  %  (เปอร์เซ็นต์)  </b> </font>   
							  <input type="text" class="form-control" id="data3" name="data3"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data3; ?>"    >
							</div>
						  </div>
                         
                         
							<div class="col-md-12" style=" margin-top:  0px; " >  </div>
                          
                          
                          
						   <div class="col-md-2"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>  6 เดือน กำหนด   </b>  </font>   
							  <input type="text" class="form-control"  id="data4" name="data4"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  onKeyUp="calAge2()"  onChange="calAge2()"   value="<?php echo $data4; ?>" >
							</div>
						  </div>  
						   <div class="col-md-2"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  /  (หาร)    </b> </font>  
							  <input type="text" class="form-control" id="data5" name="data5"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data5; ?>"    >
							</div>
						  </div> 
						   <div class="col-md-2" style = "  "  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  %  (เปอร์เซ็นต์)  </b> </font>  
							  <input type="text" class="form-control" id="data6" name="data6"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data6; ?>"    >
							</div>
						  </div>
                          
                          
							<div class="col-md-12" style=" margin-top:  0px; " >  </div>
                          
						   <div class="col-md-2"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > <b>  10 เดือน กำหนด   </b>  </font>   
							  <input type="text" class="form-control"  id="data7" name="data7"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  onKeyUp="calAge2()"  onChange="calAge2()"   value="<?php echo $data7; ?>" >
							</div>
						  </div>  
						   <div class="col-md-2"  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  /  (หาร)    </b> </font>  
							  <input type="text" class="form-control" id="data8" name="data8"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data8; ?>"    >
							</div>
						  </div> 
						   <div class="col-md-2" style = "  "  >
							<div class="form-group">
							   <font color = '#000' size="3px" >  <b>  %  (เปอร์เซ็นต์)  </b> </font> 
							  <input type="text" class="form-control" id="data9" name="data9"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"     style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "   style="border-radius: 5px; border: 1px solid #C9C9C9; "   onKeyUp="calAge2()"  onChange="calAge2()"  value="<?php echo $data9; ?>"    >
							</div>
						  </div>
                          
                            
						  <div class="col-lg-12" align="left"   > 
						  <div class="form-group">     

						  <button type="button" class="btn btn-primary" style="background-color: #2948FF; border-radius: 5px; width: 130px; height: 40px; border-color: #2948FF; margin-top: 15px; "  data-toggle="modal" data-target="#confrimadata" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มรายการ   </font> </button> 

						  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #2948FF; margin-top: 15px; "  > <font color="#2948FF" size="2px" class="serif1" >    ยกเลิก   </font> </button> 

 
							<!-- modal small -->
							<div class="modal fade" id="confrimadata" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true"  style=" margin-top: 100px; ">
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

									<button type="submit" class="btn btn-primary" style="background-color: #333E4D; border-radius: 5px; width: 130px; height: 40px; border-color: #333E4D;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


								</div> 

								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  
 

							</div> 
							</div>  
						  
						  
						  </form>  
                          
                          
                          
                          
                           
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