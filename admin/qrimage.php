<?php 
session_start();
$_SESSION["load"] = "26";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";

	 	if(isset($_GET["Action"])){  
		   if($_GET["Action"] == "Del")
			 {  
				$strSQL = "Delete From qrimage  ";
				$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 

					//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
					echo("<script>window.location = 'qrimage.php';</script>"); 
			 }  
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
                     <font size="4px" color="#000000">  QR Code   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > QR Code  </font>   
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
                     <font size="4px" color="#000000">  QR Code   </font>   
                  </div> 
                  </font> 
                  </div>
                  
 
                  		     <form role="form" name="frmMain" method="post" action="save_qrimage.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
                  		      

							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ข้อความ </font>
							  		  <input type="text" class="form-control" id="name" name="name"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>"   > 
								  </div>
							   </div>  
 
							  </div>  
							  <div class="col-md-12" style=" margin-top:  2px;  " > 
							  </div>  
							  <div class="col-md-3" style=" margin-top:  3px;  " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> QR </font>
							 	   
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
												$showimg = "images/up.png";
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
 
							  </div>  
							     
							   
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								
							  	  <a href="qrimage.php">
							  	  	 
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
                   		   
					<div class="col-md-12" style=" margin-top:  2px;  " >  <hr>	  </div>  
                    
                    
                    <div class="table-responsive" >  	
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
					<thead>
					<tr>
					<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
					<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลำดับ    </font></div></th>    
					<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
					<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ  </font></div></th>   
					<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
					<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รูป  QR  </font></div></th>        
					<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
					<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลบ   </font></div></th>     
					</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							$img = "";
							$img_all = "";
							$sql = "SELECT * FROM qrimage  order by pk desc ";  
							$query = mysqli_query($con,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{      
								
								$img = ""; 
								$img = $objResult["img"];
								 
						?>
						<tr onMouseover="this.style.backgroundColor='yellow';" onMouseout="this.style.backgroundColor='white';">  
					  	<tr>    
						<td  style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="2px" color="Black"> <?php echo $i;?></font></div></td>   
						<td  style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="2px" color="Black"> <?php echo $objResult["name"];?></font></div></td>   
					   
						 
						<td  style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="4px"  color="Black">
                        <div class="product_count">
						<a data-toggle="modal" data-target="#smallmodal<?php echo $objResult["pk"]; ?>" data-id="<?php echo $i; ?>"   class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " >    คลิก </font>  </a>
						</div>
						</font></div></td>  
							
						  <!-- modal small -->
							<div class="modal fade" id="smallmodal<?php echo $objResult["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										<div class="modal-header">
										<h5 class="modal-title" id="smallmodalLabel"> 
										<font size="3px" color="black">  <?php echo $objResult["title"]; ?> </font> </h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										</div>
										<div class="modal-body">
										
										<font size="3px" color="black">   
										<div class="row">
											<div class="col-lg-12"> 
													<?php
													if(empty($img)){
														$show_img2 = "images/show.jpg";
													}else{ 
														$show_img2 = "../img/".$img;
													?>
														<img src="<?php echo $show_img2 ?>" width="100%" />
													<?php
													}
													?> 
						 							 
												</div> 
											</div>
										</div> 
										</font> 
										
										
										</div> 
										</div>
							</div>
							</div>
						 <!-- end modal small --> 
						 
						  
						<td  style=" border-left: 0px solid #F2F2F2; " ><div align="center"> 
						<a  href="JavaScript:if(confirm(' กรุณายืนยันการลบ ?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult["pk"];?>';}" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -3px;   " ><font size="3px" color="red" style=" font-size: 13px; " >  ลบ </font></a> 
						</div></td>	
						
								
						</tr> 
						<?php  
						$i++;
						}
						?> 
					</tbody>
					</table> 
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