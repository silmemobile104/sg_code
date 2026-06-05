<?php 
session_start();
$_SESSION["load"] = "25";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $telphone = "";
	 $name = "";


	$bill_no = "1";
	$sql = "SELECT * FROM notedataprint Where  pk = '1' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name = $objResult["name"]; 
		$telphone = $objResult["telphone"]; 
		$logo = $objResult["logo"]; 
		$detail = $objResult["detail"]; 
		$logobackground = $objResult["logobackground"]; 
				 
	} 

?> 
        
		<script type="text/javascript">
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
       
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
      
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ข้อมูลสงสัยหนี้จะศูนย์    </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ข้อมูลสงสัยหนี้จะศูนย์   </font>   
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
                     <font size="4px" color="#000000">  ข้อมูลสงสัยหนี้จะศูนย์   </font>   
                  </div> 
                  </font> 
                  </div>
                  
 
                  		     <form role="form" name="frmMain" method="post" action="save_editnoticlogo.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
                  		     
                  		     <input type="hidden" name="bill_no" id="bill_no" value="<?php echo $bill_no; ?>" >
                  		     <input type="hidden" name="idupdate" id="idupdate" value="1" >

							  <div class="col-md-10" style=" margin-top:  15px; " > 

						   	   <div class="col-md-2 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> logo </font>
							 	   
								 	   <div class="col-lg-2">   </div>
								 	   
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
												$showimg = "images/11111.png";
												if(!empty($logo)){ 
												$showimg = "../img/".$logo;
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
						   
							   <div class="col-md-8 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สำนักทนายความ </font>
									 	<textarea class="form-control" id="detail" name="detail"><?php echo $detail; ?></textarea>
						 
										<script>
											CKEDITOR.replace('detail');
											function CKupdate() {
											 for (instance in CKEDITOR.instances)
											 CKEDITOR.instances[instance].updateElement();
										 } 
										</script>
								  </div>
							   </div>  
							   
							   
							   <div class="col-md-2 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> logo พื้นหลังเอกสาร </font>
							 	   
								 	   <div class="col-lg-12">   </div>
								 	   
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
												function readURL2(input) { 
													if (input.files && input.files[0]) {
														var reader = new FileReader();

														reader.onload = function (e) {
															$('#blah2').attr('src', e.target.result);
														}

														reader.readAsDataURL(input.files[0]);
													}
												}  
											</script>	

 
											 <?php
												$showimg = "images/11111.png";
												if(!empty($logobackground)){ 
												$showimg = "../img/".$logobackground;
												}
											 ?>
											 <img src="<?php echo $showimg; ?>" style="width: 100%;" class="myAvatar2" id="blah2" />
											 <input type="file" name="newAvatar2" id="newAvatar2" style="display:none;" onchange="readURL2(this);"  />
											 <script>
												$(".myAvatar2").click(function() {
													$("#newAvatar2").trigger("click");
												});
											 </script> 
								  </div>
							   </div>  
 
 
							    <div class="col-md-12"  >	  </div> 
 
 
							    <div class="col-md-3"  >	 
								<div class="form-group">
								   <font color = '#000' size="3px" > เบอร์โทร </font> 
								   <input type="text" class="form-control" id="telphone" name="telphone"  autocomplete="off" required    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF;"  value="<?php echo $telphone; ?>"   >
								</div>
							    </div> 
							  
							    <div class="col-md-3"  >	 
								<div class="form-group">
								   <font color = '#000' size="3px" > ชื่อลงท้ายเอกสาร </font> 
								   <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF;"  value="<?php echo $name; ?>"   >
								</div>
							    </div> 
							  
 
							  </div>   
							   
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								
							  	  <a href="editnoticlogo.php">
							  	  	 
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