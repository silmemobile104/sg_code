<?php 
session_start();
$_SESSION["load"] = "4";
include('header.php');
 
	 	 
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
	$bank = ""; 


	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		
		
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
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


	$major = 1;
	$major2 = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
		$major2 = $_GET["major"];
	}  

	if(empty($_GET["major2"])){
		
	}else{
		$major = $_GET["major2"];
		$major2 = $_GET["major2"];
	}  

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
		$typedata2 = $_GET["typedata"];
	}  
	$typedata2 = "";
	if(empty($_GET["typedata2"])){
		
	}else{
		$typedata = $_GET["typedata2"];
		$typedata2 = $_GET["typedata2"];
	}  
	  
	 

	if(isset($_GET["Action"])){
		 
	if($_GET["Action"] == "Del2")
	{  
			$strSQL = "Delete From payment_other  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
			echo("<script>window.location = 'paymentdata1.php?searchname=".$_GET["searchname"]."&major=".$major."&typedata=".$typedata."';</script>"); 
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
                     <font size="4px" color="#000000">  บันทึกหักค่าทุนและค่าใช้จ่าย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกหักค่าทุนและค่าใช้จ่าย >  <?php echo $typedata; ?>    </font>   
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
                     <font size="4px" color="#000000">  <?php echo $typedata; ?>   </font>   
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
												yearRange: "-10:+5",
													  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
													  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
													  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});
											}); 
											</script>
 
                 		      
                    	     <div   class="col-lg-12"  align="left"  > 
                    	     <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>

									 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="majorline" name="majorline" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
										<?php if(empty($major)){ ?>
										<option value="">  สาขา    </option> 
										<?php } ?> 
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
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										 

										</td>      
										<td width="1%">&nbsp;
										
										</td>  
										<td width="40%">&nbsp;
										 
										</td>  
									</tr>
								</table>  
						     </div>
						     </div>
                 	   
							 <script>   
								function LoadDropdown()
								{    
									var majorline = document.getElementById("majorline").value;
									var savedate = document.getElementById("savedate").value;
									 document.getElementById("getmajorline").value = majorline;      
									 document.getElementById("getmajorline2").value = majorline;    
   
  									if(majorline == ""){ 
									document.getElementById("showcustomer").style.display = 'none';
									}else{

									document.getElementById("showcustomer").style.display = 'block';
									}   
									
									///alert("showtabledata1.php?getmajorline="+majorline+"&searchname="+savedate);
									$.ajax({
										type: "GET",
										url: "showtabledata1.php?getmajorline="+majorline+"&searchname="+savedate,
										success: function(result) {
										$('#showtabledata1').html(result);
										}
									});	  
								}  
							  </script>
                   	     
                 	   
                   	     	  <?php
								$hd = "none";
								if(!empty($major)){
									$hd = "block";
									
								}else  if(!empty($major2)){
									$hd = "block";
								} 
							  ?>
                   	      
                    
                    		 <div class="col-lg-12"  id="showcustomer"  style="display: <?php echo $hd; ?>; " > 
                   	       
                   	      	 <div class="col-lg-12"> <hr> </div>
                   	      	 
                   	      	 
                  		     <form role="form" name="frmMain"  method="post" action="save_paymentdata1.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							 <input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
							 <input type="hidden" id="typedata" name="typedata" value="<?php echo $typedata; ?>">
										 
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่บันทึก </font>
									 <input type="text" class="form-control current " id="savedate" name="savedate"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $searchname; ?>" readonly   >
								  </div>
							   </div> 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> <?php echo $typedata; ?> </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" >
								  </div>
							   </div>  
 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
									 <input type="text" class="form-control" id="note" name="note"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note; ?>"  >
								  </div>
							   </div>  
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ข้อมูลผู้รับเงิน </font>
									 <input type="text" class="form-control" id="note2" name="note2"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note2; ?>"  >
								  </div>
							   </div>  
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspasy" name="statuspasy" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_pasy2 where name = '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_pasy2 where name != '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
										</select>
								  </div>
							   </div>  
							   
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspayment" name="statuspayment" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name = '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name != '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
										</select>
								  </div>
							   </div>  
							   
							   
							  <div class="col-md-12"  >   </div> 
							   
							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($bank)){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									</select>
									<span class="input-group-append" style="display: none; ">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
							 
							  <div class="col-md-12"  >   </div>  
							    
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  	   <a href="paymentdata1.php?major=<?php echo $major;?>&typedata=<?php echo $typedata; ?>">
							  		 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px;  border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
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
							 
                   		  
							<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                      
                    		 <div   class="col-lg-3"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาวันที่    </font>

										<form action="paymentdata1.php" method="get" >
										
							 			<input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
							 			<input type="hidden" id="typedata2" name="typedata2" value="<?php echo $typedata; ?>">
										 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										</form> 

										</td>  
									</tr>
								</table>  
								</div>
                   		 
                             <div class="col-md-12" style="margin-top: 5px;" >  </div> 
                   		 
                    		 <div id="showtabledata1"  > 
                             <div class="col-md-8" style="margin-top: 15px;" > 
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
									if(empty($searchname)){ 
										$addcode = " and create_date = '".$daystart_load."'  ";
									}else{
										$addcode = " and create_date = '".$daystart_load."'  ";
									}
									if(empty($_GET["alldata"])){ 
										 
									}else{
										$addcode = "   ";
									}

								$sql2 = " SELECT * FROM payment_other  
								where  price != ''  
								and major = '".$major."'
								and typedata = '".$typedata."' 


								".$addcode.$addcode2."  
								order by  pk asc    "; 

								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									<ul class="pagination">
																	<?php if ($page > 1): ?>
																	<li class="prev"><a href="paymentdata1.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>">Prev</a></li>
																	<?php endif; ?>

																	<?php if ($page > 3): ?>
																	<li class="start"><a href="paymentdata1.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>">1</a></li>
																	<li class="dots">...</li>
																	<?php endif; ?>

																	<?php if ($page-2 > 0): ?><li class="page"><a href="paymentdata1.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																	<?php if ($page-1 > 0): ?><li class="page"><a href="paymentdata1.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																	<li class="currentpage"><a href="paymentdata1.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page ?></a></li>

																	<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymentdata1.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																	<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymentdata1.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																	<?php if ($page < ceil($total_record / $perpage)-2): ?>
																	<li class="dots">...</li>
																	<li class="end"><a href="paymentdata1.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																	<?php endif; ?>

																	<?php if ($page < ceil($total_record / $perpage)): ?>
																	<li class="next"><a href="paymentdata1.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&major=<?php echo $major; ?>&typedata=<?php echo $typedata; ?>">Next</a></li>
																	<?php endif; ?>
																</ul> 
								<?php endif; ?>

							</div>
                             <div class="col-md-4" style="margin-top: 15px;" align="right" > 
							  	  <a href="paymentdata1.php?searchname=<?php echo $searchname; ?>&major=1&typedata=<?php echo $typedata; ?>&alldata=all">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: -10px;  "> <font color="#000000" size="2px" class="serif1" >  แสดงรายการที่บันทึกทั้งหมด  </font> </button> 
 
							  	  </a> 
							 </div> 
                       
                         
                             <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
								 <tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สร้าง  </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเลขบิลรายการ  </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php echo $typedata; ?>     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   หมายเหตุ     </font></div></th>    
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ข้อมูลผู้รับเงิน     </font></div></th>   
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะชำระเงิน     </font></div></th> 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พนักงานทำรายการ     </font></div></th>  
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิมพ์ใบเสร็จ     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เเก้ไข - ลบ   </font></div></th>  
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
							$sql2 = " SELECT * FROM payment_other  
								where  price != ''  
								and major = '".$major."'
								and typedata = '".$typedata."' 


								".$addcode.$addcode2."  
								order by  pk asc    limit {$start} , {$perpage}   ";  

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

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?> </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["price"]); ?> </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["note"]; ?> </font></div></td> 
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["note2"]; ?> </font></div></td> 
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
							<?php 
								if($objResult2["statuspayment"] == "รอยืนยันชำระเงิน"){ 
							?> 
							<a   class=" btn  btn-sm " style="background-color: #FF741D; border-radius: 20px;   border: 1px solid  #FF741D; width: 100%; margin-top: -5px;   "  ><font size="3px" color="#FFF" style=" font-size: 13px; " > รอยืนยันชำระเงิน </font></a>
							<?php
								}else{ 
							?>  
							<a   class=" btn  btn-sm " style="background-color: #6CB141; border-radius: 20px;   border: 1px solid  #6CB141; width: 100%;  margin-top: -5px;   "  ><font size="3px" color="#FFF" style=" font-size: 13px; " > ชำระเงินแล้ว </font></a>
							<?php
								} 
							?>   
							</font></div></td> 
							
							

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								
							<a class="btn  btn-sm" style=" background-color: #FFAA36; border-radius: 5px;  margin-top: -5px; " href="print_pasy_paymentdata1.php?CusID=<?php echo $objResult2["pk"];?>&page=1&searchname=<?php echo $searchname;?>&major=<?php echo $major;?>&typedata=<?php echo $typedata;?>" target="_blank"  > 
							<font size="3px" color="#FFF" style=" font-size: 13px; " > &nbsp;&nbsp; พิมพ์ &nbsp;&nbsp; </font>
							</a>
								
							</font></div></td> 




							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"> 
							<a class=" btn  btn-sm" style=" background-color: #E54545; border-radius: 5px;  margin-top: -5px; "  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del2&CusID=<?php echo $objResult2["pk"];?>&searchname=<?php echo $searchname;?>&major=<?php echo $major;?>&typedata=<?php echo $typedata;?>';}"  > 
							<font size="3px" color="#FFF" style=" font-size: 13px; " > &nbsp;&nbsp; ลบ &nbsp;&nbsp; </font>
							</a> &nbsp; 
 
							<a class="btn  btn-sm" style=" background-color: #FFAA36; border-radius: 5px;  margin-top: -5px; " href="paymentdata1.php?CusID=<?php echo $objResult2["pk"];?>&page=1&searchname=<?php echo $searchname;?>&major=<?php echo $major;?>&typedata=<?php echo $typedata;?>"  > 
							<font size="3px" color="#FFF" style=" font-size: 13px; " > &nbsp;&nbsp; เเก้ไข &nbsp;&nbsp; </font>
							</a>
							</div></td> 


							</tr>  
							<?php $i++;  } ?>
						</tbody>


					</table>  
					</div>
				   </div>
					 		</div>

				 			 </div>

                   	  <?php } ?>
                   		    
                   	   <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM payment_other Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$savedate = $objResult["savedate"];    
							$price = $objResult["price"];    
							$note = $objResult["note"];    
							$major = $objResult["major"];    
							$note2 = $objResult["note2"];    
							$statuspaymentr = $objResult["statuspayment"];    
							$statuspasy = $objResult["statuspasy"];    
							$bank = $objResult["bank"];    
 
						}  
						?> 
                     	    
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
												yearRange: "-10:+5",
													  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
													  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
													  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});
											}); 
											</script>  
                          
                           
                  		     <form role="form" name="frmMain"  method="post" action="save_paymentdata1_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
                  		     
						     <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" > 
							 <input type="hidden" id="major2" name="major2" value="<?php echo $major; ?>">
							 <input type="hidden" id="typedata" name="typedata" value="<?php echo $typedata; ?>">
										 
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่บันทึก </font>
									 <input type="text" class="form-control current " id="savedate" name="savedate"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $searchname; ?>" readonly   >
								  </div>
							   </div> 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> <?php echo $typedata; ?> </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  maxlength="10" >
								  </div>
							   </div>  
 
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
									 <input type="text" class="form-control" id="note" name="note"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note; ?>"  >
								  </div>
							   </div>  
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ข้อมูลผู้รับเงิน </font>
									 <input type="text" class="form-control" id="note2" name="note2"   autocomplete="off"    style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $note2; ?>"  >
								  </div>
							   </div>  
							   
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspasy" name="statuspasy" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_pasy2 where name = '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_pasy2 where name != '".$statuspasy."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
										</select>
								  </div>
							   </div>  
							   
							   
							  <div class="col-md-12"  >   </div>  
							   
							   <div class="col-md-4 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สถานะชำระเงิน </font>
									  <select class="form-control" id="statuspayment" name="statuspayment" required tyle="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "   >   
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name = '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM drop_staus_payment where name != '".$statuspaymentr."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
										</select>
								  </div>
							   </div> 
							   
							    
							     
							      
							  <div class="col-md-12"  >   </div> 
							   
							  <div class="col-md-4"  >	
								<div class="form-group">
								  <font color = '#000' size="3px" > ธนาคาร  </font>   
								  <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
									<select class="form-control" id="bank" name="bank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
									<?php if(empty($bank)){ ?>
									<option value=""> โปรดเลือก </option>
									<?php } ?>
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									<?php 
									$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
									$query_pay = mysqli_query($objCon,$sql_pay);
									while($objResult_pay = mysqli_fetch_array($query_pay))
									{ 
										$namebank = " ";
										$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
										$query_b2 = mysqli_query($objCon,$sql_b2);
										while($objResult_b2 = mysqli_fetch_array($query_b2))
										{  
												$namebank = $objResult_b2["name"];
										}
									?>
									<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
									<?php  
									}
									?>       
									</select>
									<span class="input-group-append" style="display: none; ">
									<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
										<img src="images/down.png" style="width: 15px;">		 
									</button>
									</span>
									</div> 
								</div>
							  </div>
							 
							  
							    
							 
							  <div class="col-md-12"  >   </div>  
							    
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

							  	   <a href="paymentdata1.php?major=<?php echo $major;?>&typedata=<?php echo $typedata; ?>">
							  		 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px;  border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
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
                           
                       <?php } } ?>
                       
                       
                       
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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