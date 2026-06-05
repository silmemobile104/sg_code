<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $major = "";
	 $customer = "";


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
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
			  <font color="#FFFFFF" size="3px" class="serif2"  >
			  <div style="margin-top: 1px;" > 
				 <font size="4px" color="#000000">   สลิปการโอนชำระ (อ้างอิง)    </font>  
				 <br> 
				 <font size="2px" color="#000000">  หน้าเเรก >  สลิปการโอนชำระ (อ้างอิง)   </font>   
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
                     <font size="4px" color="#000000">   สลิปการโอนชำระ (อ้างอิง)    </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ 
					
						$sql = "SELECT * FROM customer where pk != '".$customer."' order by pk asc  "; 
								  
						?>
 
                  		     <form role="form" name="frmMain" method="post" action="save_imagedata.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
 
							  <div class="col-md-3" style=" margin-top:  15px; " > 
 
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > โปรดเลือกรายชื่อลูกค้า </font>    
									<select class="form-control myselect " id="customer" name="customer" required style="  border:  0px solid #FFF; border-radius: 5px;  "  >  
									<?php if(empty($customer)){ ?>
									<option value=""> โปรดเลือกรายชื่อลูกค้า </option>
									<?php } ?>
									 
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
									</select> 
									<script type="text/javascript">
									$(".myselect").select2();
									</script>  
								</div>
							  </div>
							  
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 
 
								
							  	  <a href="imagecontact_select.php">
							  	  	 
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
							     
							 <div class="col-md-2 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> อัพโหลดรูปสลิป </font>
									  
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
												$showimg = "images/upload.png";
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

							 </form>
                   		  
							<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                      
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


								$addcode = " and a.customer = '".$customer."'  ";

								if(empty($_GET["searchname2"])){

								}else{
									$addcode2 = " and b.name like '%".$searchname2."%'  "; 
								} 


								$sql2 = " SELECT a.*, b.name FROM imagecontact   a
								Inner Join customer b On a.customer = b.pk
								where  a.img != ''   
								".$addcode.$addcode2."  
								order by  a.pk asc    "; 

								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									<ul class="pagination">
										<?php if ($page > 1): ?>
										<li class="prev"><a href="imagecontact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">Prev</a></li>
										<?php endif; ?>

										<?php if ($page > 3): ?>
										<li class="start"><a href="imagecontact.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">1</a></li>
										<li class="dots">...</li>
										<?php endif; ?>

										<?php if ($page-2 > 0): ?><li class="page"><a href="imagecontact.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
										<?php if ($page-1 > 0): ?><li class="page"><a href="imagecontact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

										<li class="currentpage"><a href="imagecontact.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

										<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="imagecontact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
										<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="imagecontact.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)-2): ?>
										<li class="dots">...</li>
										<li class="end"><a href="imagecontact.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
										<?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)): ?>
										<li class="next"><a href="imagecontact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>">Next</a></li>
										<?php endif; ?>
									</ul>
								<?php endif; ?>

							</div>
                       
                       
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
								 <tr>
									<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รูปสลิการโอน    </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันที่เพิ่มเข้าระบบ  </font></div></th>     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อลูกค้า  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พนักงาน  </font></div></th>   
									<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลาอัพเดต     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เมนูฝากเงินประวัติฝากเงิน   </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ฝาก/ถอน ออมเงินดาวน์     </font></div></th>     
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  บันทึกยอดชำระหนี้     </font></div></th>

									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ตารางแสดงข้อมูลสลิป   </font></div></th>  
								 </tr>
							   </thead>  
							  <tbody> 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;

 
	
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
									    $bg = "#F8FAFD"; 
										$sql2 = "  SELECT a.*, b.name FROM imagecontact   a
											Inner Join customer b On a.customer = b.pk
											where  a.img != ''   
											".$addcode.$addcode2."  
											order by  a.pk asc   limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											
												$name_create = "";
												$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_create =  $objResult["name"];
												} 
												$name_create23 = "";
												$sql = " SELECT * FROM customer where pk = '".$objResult2["customer"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_create23 =  $objResult["name"];
												} 
											 
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											if(!empty($objResult2["img"])){ 
										?>  
										<a data-toggle="modal" data-target="#Loadimgs<?php echo $i; ?>" style="cursor: pointer; "  >  
										<img src="../img/<?php echo $objResult2["img"]; ?>" style=" height: 45px; ">
										</a>
										
										
									       <!-- modal small -->
										<div class="modal fade" id="Loadimgs<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div class="row">      
												  <div class="col-md-12">  
												 	<img src="../img/<?php echo $objResult2["img"]; ?>" style=" width: 100%  ">
												  </div>   
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 	
											
										<?php } ?>
										</font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create23; ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
										<a   data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>"  class="  btn-sm " data-id="" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="Black" style=" font-size: 13px; " > ดูข้อมูล </font> </a>
										
										
										<!-- modal small -->
										<div class="modal fade" id="myEodal1<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left">
											<font size="3px" color="Black" style=" font-size: 13px; " >						
												  
											
											<div class="col-lg-12" align="left">
											<a href="imagecontact.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=1"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > เพิ่มข้อมูล </font></a>
											</div> 
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											<?php
											
											$loopnext = 1;
											$bill = $objResult2["bill_no"];
											$sql = " SELECT * 
											FROM list_imagecontact 
											where bill_no = '".$bill."' and typedata = '1'  
											order by pk asc  ";  
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$sql_next = "SELECT * FROM money_customer_bank  
												where money != '' and pk = '".$objResult["pkselect"]."'  
												order by pk asc   ";    
												$query_next = mysqli_query($objCon,$sql_next);
												while($objResult_next = mysqli_fetch_array($query_next))
												{ 
													echo $loopnext.".  บิลที่เลือก ".$objResult_next["bill_no"]." <br> ";
													echo " ฝากเงิน ".number_format(0+$objResult_next["money"])." <br> ";
													echo " เลขที่บิลใบเสร็จ ".$objResult_next["bill_no_ref"]." <br> ";
													echo " ------------------------------ <br> ";
													$loopnext++;
												}   
											}   
											?>
											</div> 	  				 		 	 
											 				 		 		 		 		 
											</font> 
											</div> 
											</div> 
											</div>
											</div>
										</div>
 
										</font></div></td> 
											
									     <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
										<a   data-toggle="modal" data-target="#myEodal2<?php echo $objResult2["pk"];?>"  class="  btn-sm " data-id="" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="Black" style=" font-size: 13px; " > ดูข้อมูล </font> </a>
										
										
										<!-- modal small -->
										<div class="modal fade" id="myEodal2<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left">
											<font size="3px" color="Black" style=" font-size: 13px; " >						
												  
											
											<div class="col-lg-12" align="left">
											<a href="imagecontact.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=2"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > เพิ่มข้อมูล </font></a>
											</div> 
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											<?php
											
											$loopnext = 1;
											$bill = $objResult2["bill_no"];
											$sql = " SELECT * 
											FROM list_imagecontact 
											where bill_no = '".$bill."' and typedata = '2'  
											order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												/*
												SELECT * FROM member_bank  
													where  price != ''   
													and member = '".$customer."'  
													".$addcode.$addcode2."  
													order by  pk desc
												*/
												$sql_next = " SELECT * FROM member_bank  
												where price != '' and pk = '".$objResult["pkselect"]."'  
												order by pk asc   ";    
												$query_next = mysqli_query($objCon,$sql_next);
												while($objResult_next = mysqli_fetch_array($query_next))
												{ 
													$bg2 = "#006400";
													$txt = "#FFF";
													if($objResult_next["typedata"]  == "ถอนเงิน"){
													$bg2 = "#FF0000";

													}
													
													echo $loopnext.".  เลขที่ทำรายการฝาก ".$objResult_next["bill_no"]." <br> ";
													echo " ฝากเงิน ".number_format(0+$objResult_next["price"])." <br> ";
													echo " รายการ <font color = '".$bg2."' >  " .$objResult_next["typedata"]." </font> <br> ";
													echo " ------------------------------ <br> ";
													$loopnext++;
												}   
											}   
											?>
											</div> 	  				 		 	 
											 				 		 		 		 		 
											</font> 
											</div> 
											</div> 
											</div>
											</div>
										</div>
 
										</font></div></td> 
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
										<a   data-toggle="modal" data-target="#myEodal3<?php echo $objResult2["pk"];?>"  class="  btn-sm " data-id="" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="Black" style=" font-size: 13px; " > ดูข้อมูล </font> </a>
										
										
										<!-- modal small -->
										<div class="modal fade" id="myEodal3<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left">
											<font size="3px" color="Black" style=" font-size: 13px; " >						
												  
											
											<div class="col-lg-12" align="left">
											<a href="imagecontact.php?bill_no=<?php echo $objResult2["bill_no"];?>&page=3"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > เพิ่มข้อมูล </font></a>
											</div> 
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											<?php
											
											$loopnext = 1;
											$bill = $objResult2["bill_no"];
											$sql = " SELECT * 
											FROM list_imagecontact 
											where bill_no = '".$bill."' and typedata = '3'  
											order by pk asc  "; 
												 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												/*
												SELECT a.*, b.name FROM list_order  a
												Inner Join customer b On   a.customer = b.pk
												where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.customer = '".$customer."'
												".$addcode.$addcode2."  
												order by a.pk asc  
												*/
												$sql_next = " SELECT a.*, b.name FROM list_order  a
												Inner Join customer b On   a.customer = b.pk
												where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and   a.pk = '".$objResult["pkselect"]."'   
												order by a.pk asc   ";   
												$query_next = mysqli_query($objCon,$sql_next);
												while($objResult_next = mysqli_fetch_array($query_next))
												{ 
													
													$totalprice1 = $objResult_next["money"]; 
													$totalprice2 = $objResult_next["daytotal"]; 
													$totalprice3 = $objResult_next["dayprice"];  
 

													$name_create2 = "-"; 
													$name_create3 = "-"; 
													$name_create4 = "-"; 
													$name_major = "-"; 
													$sql_c = "SELECT * FROM product where pk = '".$objResult_next["menu_id"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{  
															$sql_c2 = "SELECT * FROM store where pk = '".$objResult_c["typedata_2"]."'   order by pk asc  "; 
															$query_c2 = mysqli_query($objCon,$sql_c2);
															while($objResult_c2 = mysqli_fetch_array($query_c2))
															{ 
																	$name_create2 =  $objResult_c2["name"];
															}
															$sql_c2 = "SELECT * FROM drop_typedata where pk = '".$objResult_c["typedata"]."'   order by pk asc  "; 
															$query_c2 = mysqli_query($objCon,$sql_c2);
															while($objResult_c2 = mysqli_fetch_array($query_c2))
															{ 
																	$name_create3 =  $objResult_c2["name"];
															}
													}

													$sql_c = "SELECT * FROM major where pk = '".$objResult_next["major"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$name_major =  $objResult_c["name"];
													}
													
													echo $loopnext.".  เลขที่สัญญา ".$objResult_next["bill_no"]." <br> ";
													echo " สาขา ". $name_major ." <br> ";
													echo " ประเภท ". $name_create3 ." <br> ";
													echo " ราคาตั้งขาย  " . number_format(0+$objResult_next["moneydata"]) ." <br> ";
													echo " ------------------------------ <br> ";
													$loopnext++;
												}   
											}   
											?>
											</div> 	  				 		 	 
											 				 		 		 		 		 
											</font> 
											</div> 
											</div> 
											</div>
											</div>
										</div>
 
										</font></div></td> 
									  
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
										<a   data-toggle="modal" data-target="#myEodal4<?php echo $objResult2["pk"];?>"  class="  btn-sm " data-id="" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="Black" style=" font-size: 13px; " > ดูข้อมูล </font> </a>
									  
									  
									  	
										<!-- modal small -->
										<div class="modal fade" id="myEodal4<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left">
											<font size="3px" color="Black" style=" font-size: 13px; " >						
												   
											<div class="col-lg-10" align="left">
											 <font size="3px" color="#000" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?></font>
											<br>
											 <font size="3px" color="#000" style=" font-size: 13px; " > <?php echo $name_create23; ?>  </font>
											<br>
											 <font size="3px" color="#000" style=" font-size: 13px; " > ใช้สลิปฝากเงิน แบบอ้างอิง </font>
											</div> 	
											<div class="col-lg-2" align="righr"> 
											<?php  if(!empty($objResult2["img"])){  ?>   
												<img src="../img/<?php echo $objResult2["img"]; ?>" style=" width: 100%; "> 
											<?php } ?>
												 
											</div> 	
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											 <font size="3px" color="red" style=" font-size: 13px; " > รูปแบบการฝาก </font>
											</div> 	  
											 <div class="col-lg-12" align="left" style=" margin-top: 10px; ">  
											 <?php
											
												$loopnext = 1;
												$bill = $objResult2["bill_no"];
												$sql = " SELECT * 
												FROM list_imagecontact 
												where bill_no = '".$bill."' and typedata = '1'  
												order by pk asc  ";  
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$sql_next = "SELECT * FROM money_customer_bank  
													where money != '' and pk = '".$objResult["pkselect"]."'  
													order by pk asc   ";    
													$query_next = mysqli_query($objCon,$sql_next);
													while($objResult_next = mysqli_fetch_array($query_next))
													{ 
														echo $loopnext.".  บิลที่เลือก ".$objResult_next["bill_no"]." <br> ";
														echo " ฝากเงิน ".number_format(0+$objResult_next["money"])." <br> ";
														echo " เลขที่บิลใบเสร็จ ".$objResult_next["bill_no_ref"]." <br> ";
														echo " ------------------------------ <br> ";
														$loopnext++;
													}   
												}   
												?>
											 
											</div> 	  
											
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											 <font size="3px" color="red" style=" font-size: 13px; " >  รูปแบบฝากเงนิ ออม</font> 
											</div> 	
											 <div class="col-lg-12" align="left" style=" margin-top: 10px; ">  
											<?php
											
											$loopnext = 1;
											$bill = $objResult2["bill_no"];
											$sql = " SELECT * 
											FROM list_imagecontact 
											where bill_no = '".$bill."' and typedata = '2'  
											order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{  
												$sql_next = " SELECT * FROM member_bank  
												where price != '' and pk = '".$objResult["pkselect"]."'  
												order by pk asc   ";    
												$query_next = mysqli_query($objCon,$sql_next);
												while($objResult_next = mysqli_fetch_array($query_next))
												{ 
													$bg2 = "#006400";
													$txt = "#FFF";
													if($objResult_next["typedata"]  == "ถอนเงิน"){
													$bg2 = "#FF0000";

													}
													
													echo $loopnext.".  เลขที่ทำรายการฝาก ".$objResult_next["bill_no"]." <br> ";
													echo " ฝากเงิน ".number_format(0+$objResult_next["price"])." <br> ";
													echo " รายการ <font color = '".$bg2."' >  " .$objResult_next["typedata"]." </font> <br> ";
													echo " ------------------------------ <br> ";
													$loopnext++;
												}   
											}   
											?>
											</div> 	
											
											<div class="col-lg-12" align="left">	<hr> </div>  
											
											<div class="col-lg-12" align="left">
											 <font size="3px" color="red" style=" font-size: 13px; " > รูปแบบหักเงนิ ฝากยอดหน </font>
											</div> 					 		
											 <div class="col-lg-12" align="left" style=" margin-top: 10px; ">  
											   <?php
											
											$loopnext = 1;
											$bill = $objResult2["bill_no"];
											$sql = " SELECT * 
											FROM list_imagecontact 
											where bill_no = '".$bill."' and typedata = '3'  
											order by pk asc  "; 
												 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{  
												$sql_next = " SELECT a.*, b.name FROM list_order  a
												Inner Join customer b On   a.customer = b.pk
												where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and   a.pk = '".$objResult["pkselect"]."'   
												order by a.pk asc   ";   
												$query_next = mysqli_query($objCon,$sql_next);
												while($objResult_next = mysqli_fetch_array($query_next))
												{ 
													
													$totalprice1 = $objResult_next["money"]; 
													$totalprice2 = $objResult_next["daytotal"]; 
													$totalprice3 = $objResult_next["dayprice"];  
 

													$name_create2 = "-"; 
													$name_create3 = "-"; 
													$name_create4 = "-"; 
													$name_major = "-"; 
													$sql_c = "SELECT * FROM product where pk = '".$objResult_next["menu_id"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{  
															$sql_c2 = "SELECT * FROM store where pk = '".$objResult_c["typedata_2"]."'   order by pk asc  "; 
															$query_c2 = mysqli_query($objCon,$sql_c2);
															while($objResult_c2 = mysqli_fetch_array($query_c2))
															{ 
																	$name_create2 =  $objResult_c2["name"];
															}
															$sql_c2 = "SELECT * FROM drop_typedata where pk = '".$objResult_c["typedata"]."'   order by pk asc  "; 
															$query_c2 = mysqli_query($objCon,$sql_c2);
															while($objResult_c2 = mysqli_fetch_array($query_c2))
															{ 
																	$name_create3 =  $objResult_c2["name"];
															}
													}

													$sql_c = "SELECT * FROM major where pk = '".$objResult_next["major"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$name_major =  $objResult_c["name"];
													}
													
													echo $loopnext.".  เลขที่สัญญา ".$objResult_next["bill_no"]." &nbsp;&nbsp; ";
													echo " สาขา ". $name_major ." <br> ";
													echo " ประเภท ". $name_create3 ." &nbsp;&nbsp; ";
													echo " ราคาตั้งขาย  " . number_format(0+$objResult_next["moneydata"]) ." <br> "; 
													$loopnext++;
												}   
											}   
											?>  	 
											  </div> 
											    
											</font> 
											</div> 
											</div> 
											</div>
											</div>
										</div>
									  
										</font></div></td> 
									  
										  
										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
							</table>  
							</div>
						  </div>
                     
                   	  <?php } ?>
                   		     
                          
                          
                          
                         <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM imagecontact Where  bill_no = '". $_GET["bill_no"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$customer = $objResult["customer"];  
						}  
							
						$name_customer = "";
						$sql = " SELECT * FROM customer where pk = '".$objResult2["customer"]."'   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
							$name_customer =  $objResult["name"];
						}  
						?>  
                          
						 <input type="hidden" id="billsave" value="<?php echo $_GET["bill_no"]; ?>" > 
										  	
                         <div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"     >
							 <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>     
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ฝากเงิน  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันที่  </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บิลใบเสร็จ   </font></div></th>  
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
										    

	
										$moneybankall = 0;
										$sql2 = "SELECT * FROM money_customer_bank  
											where money != '' and customer = '".$customer."' 
											and ( typegetpayment = 'โอนผ่านบัญชีบริษัท' or typegetpayment = 'รับเงินสด' )
											order by pk asc   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											  
											$name_pro = " - ";
											$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$name_pro = $objResult_c["name"]; 
											}
											 
											$discountbank = "ON";
											$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' 
											and datestart = '".$objResult2["create_date"]."' order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												if($objResult_c["typesave"] == "ชำระหักเงินฝาก"){
													$discountbank = "OFF";
												}
												if($objResult_c["typesave"] == "ชำระ2ทาง"){
													$discountbank = "OFF";
												}
											}	
											 
											
											$select_chk = "OFF";
											$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$objResult2["pk"]."' and typedata = '1'  and bill_no = '".$_GET["bill_no"]."'    order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c); 
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$select_chk =  "ON";
											}
											 
											$hiiden1 = "";
											$hiiden2 = "display: none;";
											if($select_chk == "ON"){  
											$hiiden1 = " display: none; ";
											$hiiden2 = " ";
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
									      
									    	<div id="showdata<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden1; ?>" > 
										    <input type="checkbox" id="savedata<?php echo $objResult2["pk"]; ?>" name="savedata" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  >
										    
									    	</div> 
										  
									    	<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
										    <input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked  >
										    
									    	</div> 
										   
										    <style>
												#savedata<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
												#savedatacan<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
											</style>
											
										    <script type="text/javascript"> 
											function getRadioVaal(radio_val){
											//  document.getElementById("studen_select").value = ""+radio_val;
												document.getElementById("showdata"+radio_val).style.display = "none";
												document.getElementById("showdatacan"+radio_val).style.display = "block";  
												document.getElementById("savedatacan"+radio_val).checked  = true; 
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												///  alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact.php",
														data: {data1:int1, data2:int2, data3:int3},
														success: function(result) {
 
 
														}
													});
												
											}
											function getRadioVaalcan(radio_val){
											 //  document.getElementById("studen_select").value = ""+radio_val;
												
												document.getElementById("showdata"+radio_val).style.display = "block";
												document.getElementById("showdatacan"+radio_val).style.display = "none";  
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												// alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact_cancel.php",
														data: {data1:int1, data2:int2},
														success: function(result) {
 
														document.getElementById("showdata"+radio_val).style.display = "block";
														document.getElementById("showdatacan"+radio_val).style.display = "none";  
														document.getElementById("savedata"+radio_val).checked  = false; 
																 
 
														}
													});
											}
										  </script> 
										  
									      
										</font></div></td>   
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>   </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["typegetpayment"]; ?>   </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>   </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no_ref"]; ?>   </font></div></td> 
										
										
										</tr>  
										<?php $i++; $moneybankall+= $objResult2["money"]; } ?>
									</tbody>  
                          	</table>  
							 
						  </div>
                   	   
                          
                          
                        <?php } } ?>
                          
                          <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "2" ){
						$sql = "SELECT * FROM imagecontact Where  bill_no = '". $_GET["bill_no"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$customer = $objResult["customer"];  
						}  
							
						$name_customer = "";
						$sql = " SELECT * FROM customer where pk = '".$objResult2["customer"]."'   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
							$name_customer =  $objResult["name"];
						}  
						?>  
                          
						 <input type="hidden" id="billsave" value="<?php echo $_GET["bill_no"]; ?>" >   
                          
                          
                          <div class="table-responsive"  >
							<table id="key_product"  class="  tablemobile  " border="0" style=" border: 1px solid #FFF; "     >
							 <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>     
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่ทำรายการฝาก  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดเงินฝาก / ถอนเงิน  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่   </font></div></th>  
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
										    

	
										$moneybankall = 0;
							
										$sql2 = " SELECT * FROM member_bank  
											where  price != ''   
											and member = '".$customer."'  
											".$addcode.$addcode2."  
											order by  pk desc     "; 
							 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											  
											$name_create = "";
											$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_create =  $objResult["name"];
											}

											$name_major = "";
											$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_major =  $objResult["name"];
											}  
											 
											
											$select_chk = "OFF";
											$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$objResult2["pk"]."' and typedata = '2' and bill_no = '".$_GET["bill_no"]."'  order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c); 
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$select_chk =  "ON";
											}
											 
											$hiiden1 = "";
											$hiiden2 = "display: none;";
											if($select_chk == "ON"){  
											$hiiden1 = " display: none; ";
											$hiiden2 = " ";
											}
											
											$bg2 = "#006400";
											$txt = "#FFF";
											if($objResult2["typedata"]  == "ถอนเงิน"){
											$bg2 = "#FF0000";
												
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										  
										<td style=" border-left: 0px solid #F2F2F2; height: 35px; border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
									      
									    	<div id="showdata<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden1; ?>" > 
										    <input type="checkbox" id="savedata<?php echo $objResult2["pk"]; ?>" name="savedata" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  >
										    
									    	</div> 
										  
									    	<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
										    <input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked  >
										    
									    	</div> 
										   
										    <style>
												#savedata<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
												#savedatacan<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
											</style>
											
										    <script type="text/javascript"> 
											function getRadioVaal(radio_val){
											//  document.getElementById("studen_select").value = ""+radio_val;
												document.getElementById("showdata"+radio_val).style.display = "none";
												document.getElementById("showdatacan"+radio_val).style.display = "block";  
												document.getElementById("savedatacan"+radio_val).checked  = true; 
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												///  alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact2.php",
														data: {data1:int1, data2:int2, data3:int3},
														success: function(result) {
 
 
														}
													});
												
											}
											function getRadioVaalcan(radio_val){
											 //  document.getElementById("studen_select").value = ""+radio_val;
												
												document.getElementById("showdata"+radio_val).style.display = "block";
												document.getElementById("showdatacan"+radio_val).style.display = "none";  
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												// alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact_cancel2.php",
														data: {data1:int1, data2:int2},
														success: function(result) {
 
														document.getElementById("showdata"+radio_val).style.display = "block";
														document.getElementById("showdatacan"+radio_val).style.display = "none";  
														document.getElementById("savedata"+radio_val).checked  = false; 
																 
 
														}
													});
											}
										  </script> 
										  
									      
										</font></div></td>   
										  
										  
										<td style=" border-left: 0px solid #F2F2F2;  border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>   </font></div></td> 
										
										  
										<td style=" background-color: <?php echo $bg2; ?> ; border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="<?php echo $txt; ?>" style=" font-size: 13px; " > <?php echo $objResult2["typedata"]; ?>   </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2;  border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price"]); ?>   </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2;  border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 
										 
										
										</tr>  
										<?php $i++; $moneybankall+= $objResult2["money"]; } ?>
									</tbody>  
                          	</table>  
							 
						  </div>
                          
                          
                          
                        <?php } } ?>
                         
                           
                          <?php  
							if(isset($_GET["page"])){
							if( ($_GET["page"]) == "3" ){
							$sql = "SELECT * FROM imagecontact Where  bill_no = '". $_GET["bill_no"] ."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$customer = $objResult["customer"];  
							}  

							$name_customer = "";
							$sql = " SELECT * FROM customer where pk = '".$objResult2["customer"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_customer =  $objResult["name"];
							}  
							?>  
                          
						 <input type="hidden" id="billsave" value="<?php echo $_GET["bill_no"]; ?>" >   
                           
                         <div class="table-responsive"  >
							<table id="key_product"  class="  tablemobile  " border="0" style=" border: 1px solid #FFF; "     >
							 <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>     
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย   </font></div></th>  
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
										    

	
										$moneybankall = 0;
							
										/*
										 SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้' 
											".$addcode.$addcode2."  
											order by a.pk asc 
										*/
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.customer = '".$customer."'
											".$addcode.$addcode2."  
											order by a.pk asc     "; 
							 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											  
											
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"];  
											
											
												$name_create = "-"; 
												$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
														$name_create =  $objResult["name"];
												}
											   
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_major = "-"; 
												$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create3 =  $objResult_c["name"];
														}
												}
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$name_major =  $objResult_c["name"];
												}
											
											
											
											
												$select_chk = "OFF";
												$sql_c = "SELECT * FROM list_imagecontact where pkselect = '".$objResult2["pk"]."' and typedata = '3'   and bill_no = '".$_GET["bill_no"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c); 
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$select_chk =  "ON";
												}

												$hiiden1 = "";
												$hiiden2 = "display: none;";
												if($select_chk == "ON"){  
												$hiiden1 = " display: none; ";
												$hiiden2 = " ";
												}

												$bg2 = "#006400";
												$txt = "#FFF";
												if($objResult2["typedata"]  == "ถอนเงิน"){
												$bg2 = "#FF0000";

												}
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										  
										<td style=" border-left: 0px solid #F2F2F2; height: 35px; border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
									      
									    	<div id="showdata<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden1; ?>" > 
										    <input type="checkbox" id="savedata<?php echo $objResult2["pk"]; ?>" name="savedata" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  >
										    
									    	</div> 
										  
									    	<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
										    <input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked  >
										    
									    	</div> 
										   
										    <style>
												#savedata<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
												#savedatacan<?php echo $objResult["pk"]; ?> {
													accent-color: #83161C;
												}
											</style>
											
										    <script type="text/javascript"> 
											function getRadioVaal(radio_val){
											//  document.getElementById("studen_select").value = ""+radio_val;
												document.getElementById("showdata"+radio_val).style.display = "none";
												document.getElementById("showdatacan"+radio_val).style.display = "block";  
												document.getElementById("savedatacan"+radio_val).checked  = true; 
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												///  alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact3.php",
														data: {data1:int1, data2:int2, data3:int3},
														success: function(result) {
 
 
														}
													});
												
											}
											function getRadioVaalcan(radio_val){
											 //  document.getElementById("studen_select").value = ""+radio_val;
												
												document.getElementById("showdata"+radio_val).style.display = "block";
												document.getElementById("showdatacan"+radio_val).style.display = "none";  
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("billsave").value; ;
												 var int3 = "" ;
												  
												// alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_imagecontact_cancel3.php",
														data: {data1:int1, data2:int2},
														success: function(result) {
 
														document.getElementById("showdata"+radio_val).style.display = "block";
														document.getElementById("showdatacan"+radio_val).style.display = "none";  
														document.getElementById("savedata"+radio_val).checked  = false; 
																 
 
														}
													});
											}
										  </script> 
										  
									      
										</font></div></td>   
										  
										  
										<td style=" border-left: 0px solid #F2F2F2;  border-bottom: 1px solid #FFF; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>   </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
									 
										 
										
										</tr>  
										<?php $i++; $moneybankall+= $objResult2["money"]; } ?>
									</tbody>  
                          	</table>  
							 
						  </div>
                         
                           
                        <?php } } ?>
                         
                           
                         
                         
                          
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