<?php 
session_start();
$_SESSION["load"] = "1";
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

	$total = 0;
	$total2 = 0;
	$sql2 = "SELECT a.*, b.name FROM datachat a
	Inner Join customer b On a.customer = b.pk
	where a.datesave != ''  
	order by a.pk asc   ";  
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($objResult2["drop_chat"] == "อยู่ในระหว่างการติดตาม"){
			$total++;
		}

		if($objResult2["drop_chat"] == "ติดตามเสร็จสิ้น"){
			$total2++;
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
                     <font size="4px" color="#000000">  บันทึกข้อความตามสาขา   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ดูรายการบันทึก   </font>   
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
                     <font size="4px" color="#000000">  ดูรายการบันทึก   </font>   
                  </div> 
                  </font> 
                  </div>
                     
                     
                      <?php if(empty($_GET["page"])){ ?>
                       
						     <div class=" col-lg-4 "  align="left" >
							  <table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr>
									<td width="50%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >
									<a href="chatmajor.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกข้อความตามสาขา    </font>  
									</div>
									</a>
									</td> 
									<td width="50%" align="center" bgcolor="#F77369"   >   
									<a href="chatmajor_view.php">    
									<div  >   
									<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  ดูรายการบันทึก  </font>  
									</div> 
									</a>
									</td>
								</tr>
							</table>
						     </div>
                      
                      
							<div class="col-lg-8" align="left">
							 
							<a href="chatmajor_view_all.php"> 
							<div style=" background-color: #FF0000; height: 34px;  " class=" btn btn-sm" >    
							&nbsp;
							<font size="3px" color="#FFF" style="font-size: 14px; ">  ลูกค้าทีอยู่ในสถานะระหว่างการติดตาม ( <?php echo number_format(0+$total); ?> ) </font>  
							&nbsp;
							</div>
							</a>
							 
							<a href="chatmajor_view_all2.php"> 
							<div style=" background-color: #006400; height: 34px;  " class=" btn btn-sm" >    
							&nbsp;
							<font size="3px" color="#FFF" style="font-size: 14px; ">  ติดตามเสร็จสิ้น ( <?php echo number_format(0+$total2); ?> ) </font>  
							&nbsp;
							</div>
							</a>
							
							</div>
                      
                      
							<div class="col-lg-12">
							<hr>
							</div>
                      
                       
                     	      <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกลูกค้า    </font>

										<form action="chatmajor_view.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control myselect " id="searchname" name="searchname"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; width: 100%;   " onchange='this.form.submit()'   >  
										  <?php if(empty($searchname)){ ?>
										  	<option value="">  เลือกลูกค้า    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM customer where pk = '".$searchname."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM customer where pk != '".$searchname."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname2)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										    <?php } ?>
											</select> 
											<script type="text/javascript">
											$(".myselect").select2();
											</script> 
										  
										<span class="input-group-append " style=" display: none; "  >
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>     
										<td width="1%">&nbsp;
										
										</td>  
										<td width="40%">
										<a href="chatmajor_view.php"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
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
													$addcode = " and  customer = '".$searchname."'    ";

												}else{
													$addcode = " and  customer = '".$searchname."'    ";
												} 
												if(empty($_GET["searchname2"])){
													$addcode2 = " and  major = '".$searchname2."'   ";

												}else{
													$addcode2 = " and  major = '".$searchname2."'   ";
												} 
													 
											$sql2 = " SELECT * FROM datachat 
											where datesave != ''  
											".$addcode.$addcode2."  
											order by pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="chatmajor_view.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="chatmajor_view.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="chatmajor_view.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="chatmajor_view.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="chatmajor_view.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="chatmajor_view.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="chatmajor_view.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="chatmajor_view.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="chatmajor_view.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
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
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีทำการบันทึก    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อลูกค้า  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลทีบันทึก   </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำการบันทึก   </font></div></th> 
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th> 
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
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
										    
										$sql2 = "SELECT a.*, b.name FROM datachat a
										Inner Join customer b On a.customer = b.pk
											where a.datesave != ''
											".$addcode.$addcode2."  
											order by a.pk asc    limit {$start} , {$perpage}   ";  
	 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											
											
											$name_major = " ";
											$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$name_major =  $objResult_c["name"];
											}  
											
											
											$name_pro = " - ";
											$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$name_pro = $objResult_c["name"]; 
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["datenew1"])." ".DateThai2($objResult2["datenew1"]); ?>  </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
											 
									    <a data-toggle="modal" data-target="#Loadimg<?php echo $i; ?>" style="cursor: pointer; "  >    ดูข้อมูลทีบันทึก  </a>
									     
									      <!-- modal small -->
										<div class="modal fade" id="Loadimg<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
												  <div class="col-md-6" align="left"> 
												   
												   รายละเอียด : <?php echo $objResult2["detail"]; ?>
												   
												  </div>     
												  <div class="col-md-6"> 
												   
												   <?php 
													$imgload = "";
													$sql_c = "SELECT * FROM product_img where bill_no = '".$objResult2["bill_no"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$imgload =  $objResult_c["img"];
														if( !empty($imgload) ){
													?>
												  <div class="col-md-4" align="left"> 
												  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
													<img src="../img/<?php echo $imgload; ?>" style="width: 100%; height: 80px; " >
												  </a>
												  </div> 
													<?php		
														}
													}  
													?>
												  </div>   
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 	
											
										</font></div></td> 
										 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_pro; ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["drop_chat"]; ?>   </font></div></td> 
										
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
									<?php
									if($_SESSION["Status"] == "A"){	
									?>	
										<a href="chatmajor_edit.php?CusID=<?php echo $objResult2["pk"];?>&bill_no=<?php echo $objResult2["bill_no"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>
										<?php }else{ ?>
									
									<a href="typedata.php?CusID=<?php echo $objResult2["pk"];?>&page=1" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; display: none; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
									<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>
									
									
									
									<a onclick="SebndOTPget<?php echo $objResult2["pk"]; ?>()"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; " >
									<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข   </font></a>
									
									
									<input type="hidden" id="pageget" name="pageget" value="บันทึกข้อความตามสาขา">
									
									 <script>
										function SebndOTPget<?php echo $objResult2["pk"]; ?>( ) {
											 
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
											});   
											 
											   
										}
										function SendgetKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var note = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;
											 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "send_get_page_otp.php?pageget="+pageget+"&note="+note,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
												  
												
											}
											});	
											
											 
											document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
											document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
											
											
											//////alert("loadchat_total.php?customer="+customerpk);
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note="+note,
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});

											
										}
										 
										 
										function CheckKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var checkkey1 = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											var checkkey2 = document.getElementById("getkey<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(checkkey1 == ""){
												alert(" กรุณาทำรายการข้อใหม่ ");
											}else if(checkkey1 != checkkey2){
												alert(" รหัสไม่ตรงกรุณากรอกรหัสใหม่ ");
											}else if(checkkey1 == checkkey2){
												document.getElementById("nextpage<?php echo $objResult2["pk"]; ?>").click();
											}
											
										}
											
											
									</script>
									
									
									
											    <!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข  
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข
												 	
												 </font>
												  
												 </div> 
												 
												 <div class="col-lg-12" style="margin-top: 15px;" id="showtxt1<?php echo $objResult2["pk"]; ?>">   
												 	
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรุณาแจ้ง เหตุผลการแก้ไข 
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="note<?php echo $objResult2["pk"]; ?>" name="note<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="SendgetKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ส่งคำขอ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
											 
											 
												 </div>
												 
												 
												 
												 <div class="col-lg-12" style="margin-top: 15px; display: none; " id="showtxt2<?php echo $objResult2["pk"]; ?>">   
												 	
												 <input type="hidden" id="keycheck<?php echo $objResult2["pk"]; ?>" name="keycheck<?php echo $objResult2["pk"]; ?>" >
												 
												 
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 <font style="font-size: 17px; " color="#FF0000">
												 	
												 	กรอกรหัส
												 	
												 </font>
												  
												 	<input class="form-control"   type="text" style=" border-radius: 5px;   " id="getkey<?php echo $objResult2["pk"]; ?>" name="getkey<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 
												 	  
												 </div>
												 	  
												 	  
												 <div class="col-md-12" style=" margin-top: 15px; ">
												 	 
											     <a onClick="CheckKey<?php echo $objResult2["pk"]; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันรายการ   </font> </button>  </a>


												 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
											 
												 </div>
												 
												 
												 </div>
												 
												 
												 
												 
												 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
									<?php } ?>	 
										</font></div></td> 
										  

										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
							</table>  
							</div>
						  </div>
                     	     
                     	      
                  	  
                   	  <?php } ?>
                   		    
                   		  
                          
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
include('footer.php');
?>