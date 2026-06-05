<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $bill_no = $_GET["bill_no"];


	$sql = "SELECT * FROM slip_data Where  round = '". $_GET["round"] ."' and  bill_no = '". $_GET["bill_no"] ."' 
	order by pk desc limit 1";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$img = $objResult["img"];  
	}  
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  อัพสลิป   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > อัพสลิป  </font>   
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
                     <font size="4px" color="#000000">  อัพสลิป <?php echo $_GET["bill_no"]; ?>   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                    
 
                  		     <form role="form" name="frmMain" method="post" action="save_update_slip.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 							
                  		     
                  		     <input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $_GET["bill_no"]; ?>" >
                  		     <input type="hidden" name="round" id="round" class="form-control " value="<?php echo $_GET["round"]; ?>" >

							  <div class="col-md-12" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> อัพสลิป </font>
									 <br>
									 <div class="col-md-12" align="left"  > 
							   		   <font color = '#FF0000' size="4px" > *** การลบรูปภาพจะมีผลทันที่  </font>   
						  			 </div> 
							   
 
									<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
									<link rel="stylesheet" href="upload_image/css/style.css">  
									<script src="upload_image/js/app.js"></script> 
									
									<ul id="media-list" class="clearfix"> 
											 
											 
									   <?php 
											$imgload = "";
										
											$pkselect = "";
											$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.bill_no = '".$_GET["bill_no"]."' 
											order by a.pk asc     "; 
							 
											$query2 = mysqli_query($con,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$pkselect = $objResult2["pk"];
											}
										
										
											$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$pkselect."' and typedata = '3'   order by pk asc  ";  
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{  
												$imgload = "";
												$sql_c2 = "SELECT * FROM imagecontact where bill_no = '".$objResult_c["bill_no"]."'    order by pk asc  "; 
												$query_c2 = mysqli_query($objCon,$sql_c2);
												while($objResult_c2 = mysqli_fetch_array($query_c2))
												{  
												$imgload =  $objResult_c2["img"];

												if( !empty($imgload) ){
											?>
											 <li class="myupload"  > 
											  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
												<img src="../img/<?php echo $imgload; ?>" style="width: 100%; " >
											  </a>
											  </li> 
											<?php		
													}
												}
											}  
											?>
											   
											   
											   
											<?php 
											$sql = "SELECT * FROM product_img where bill_no = '".$bill_no."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?> 
												<li class="myupload"  > 
												<img src='../img/<?php echo $objResult["img"]; ?>' /><div  class='post-thumb'><div class='inner-post-thumb'>
												
												<a  data-id='' class='remove-pic' onClick="myFunction<?php echo $objResult["pk"]; ?>(<?php echo $objResult["pk"]; ?>)" style="cursor: pointer;">
												<i class='fa fa-times' aria-hidden='true' style="color: #FFF;"></i></a>
												
												<script>
												function myFunction<?php echo $objResult["pk"]; ?>(Delepk) {
												   
													$.ajax({
														type: "POST",
														url: "delete_img.php",
														data: {del:Delepk},
														success: function( ) {   
														}
													});   
													
												}
												</script> 
												</li> 
											 
											 <?php } ?>
											 		
											 		
											 
											<li class="myupload"> 
												<span><i class="fa fa-plus" aria-hidden="true"></i>
												<input type="file"  click-type="type2"   class="picupload"  name="picupload[]" id="picupload"  multiple="multiple"     ></span>
											</li>
                             
										</ul>   
									 
							   
								  </div>
							   </div>  
 
							  </div> 
							  <div class="col-md-12"  >   </div>  
							   
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  	  <a href="view_history.php?bill_no=<?php echo $_GET["bill_no"]; ?>">  
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ย้อนกลับ  </font> </button> 
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