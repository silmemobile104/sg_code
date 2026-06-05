<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $name = "";
	$code_student = "";
	$telphone = "";
	$address = "";
	$searchname = "";
	$username = "";
	$password = "";
	$major = "1";


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
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
            <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เพิ่มประเภทข้อมูลรายการสินค้า   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เพิ่มประเภทข้อมูลรายการสินค้า > ประเภทรุ่น   </font>   
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
                     <font size="4px" color="#000000">  เพิ่มประเภทข้อมูลรายการสินค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      	<?php if(empty($_GET["page"])){ ?>
                       
                  		     <form role="form" name="frmMain" method="post" action="save_typedata2.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ประเภทรุ่น  </font>
									 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
								  </div>
							   </div>  
 
							   
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > สาขา </font>   
								   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
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
							   
 
							  </div> 
							   
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="typedata2.php">
							  	  	 
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
                   		  
							<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                    
                    
                    		<div   class="col-lg-4"  align="left"  > 
							<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>

										<form action="typedata2.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname2)){ ?>
										  	<option value="">  สาขา    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname2."' order by pk asc  "; 
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
												if(empty($_GET["searchname2"])){

												}else{
													$addcode2 = " and major = '".$searchname2."'  ";
												} 
													 
											$sql2 = " SELECT * FROM drop_typedata2  
											where  name != ''   
											".$addcode.$addcode2."  
											order by  pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="typedata2.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="typedata2.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="typedata2.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="typedata2.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="typedata2.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="typedata2.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="typedata2.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="typedata2.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="typedata2.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                       
                       
                    		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
											 <tr>
												<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา  </font></div></th>      
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ประเภท  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันทีสร้าง     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>   
												 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
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
										$sql2 = " SELECT * FROM drop_typedata2 
											where  name != ''  
											".$addcode.$addcode2."  
											order by  pk asc   limit {$start} , {$perpage}   ";  
	 
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
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["date_start"])." ".DateThai2($objResult2["date_start"]); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["date_time"]; ?>   </font></div></td> 
										 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
											
										<?php
										if($_SESSION["Status"] == "A"){	
										?>	
										<a href="typedata2.php?CusID=<?php echo $objResult2["pk"];?>&page=1" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>
										<?php }else{ ?>
									
										<a href="typedata2.php?CusID=<?php echo $objResult2["pk"];?>&page=1" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; display: none; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>



										<a onclick="SebndOTPget<?php echo $objResult2["pk"]; ?>()"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข   </font></a>


										<input type="hidden" id="pageget" name="pageget" value="รายการยี้ห้อ">

										  
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
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});
											
											
											$.ajax({
											type: "GET",
											url: "load_key.php?pageget="+pageget+"&note=",
											success: function(result) {
												 /// alert(result); 
												  
											  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 
												  
											}
											});

											
											
											var check_get_key = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(check_get_key == ""){
												alert(" การส่ง PIN ผิดพลาด ");
												 
											 
												document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "block"; 
												document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
												
												
											}
											
											
										} 
										function CheckKey<?php echo $objResult2["pk"]; ?>( ) {
											var pageget = document.getElementById("pageget").value;
											var checkkey1 = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
											var checkkey2 = document.getElementById("getkey<?php echo $objResult2["pk"]; ?>").value;
											
											
											if(checkkey1 == ""){
												alert(" กรุณาทำรายการข้อใหม่ ");
											}else if(checkkey1 != checkkey2){
												alert(" รหัสไม่ตรงกรุณากรอกรหัสใหม่ ");
												
											
												$.ajax({
												type: "GET",
												url: "load_key.php?pageget="+pageget+"&note=",
												success: function(result) {
													 /// alert(result); 

												  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 

												}
												});
												
												
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
                   		    
                   		  
                  		  
                          
                  		     <?php  
							if(isset($_GET["page"])){
							if( ($_GET["page"]) == "1" ){
							$sql = "SELECT * FROM drop_typedata2 Where  pk = '". $_GET["CusID"] ."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$name = $objResult["name"];  
								$major = $objResult["major"];  

							}  
							?> 
                  		  
                  		    <form role="form" name="frmMain" method="post" action="save_typedata2_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
						    <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
                          

							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ประเภทรุ่น  </font>
									 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
								  </div>
							   </div>  
 
							   
							   <div class="col-md-12"  >	
								<div class="form-group">
								   <font color = '#000' size="3px" > สาขา </font>   
								   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  >  
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
							   
 
							  </div> 
							   
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								
							  	  <a href="typedata2.php">
							  	  	 
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