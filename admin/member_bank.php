<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

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


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
									
					
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  

	$payment = "";
	if(empty($_GET["payment"])){
		
	}else{
		$payment= $_GET["payment"];
	}	
	$major = "1"; 


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
				yearRange: "-10:+10",
					  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
					  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
					  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
					});
			}); 
			</script>	
									
														
									
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ฝาก/ถอน ออมเงินดาวน์   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ฝาก/ถอน ออมเงินดาวน์  </font>   
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
                     <font size="4px" color="#000000">  ฝาก/ถอน ออมเงินดาวน์   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                    	    <div   class="col-lg-12"  align="left" style="display: none; "  > 
							<table width="100%">
								<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>

										<form action="member_bank.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="major" name="major"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
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
                   
                   
                   		 
                           <?php if(!empty($major)){ 
 
							$colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 25px; ";
							$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
							$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";

							$txtcolor1 = "#FFF"; 
							$txtcolor2 = "#FFF"; 
							$txtcolor3 = "#FFF";  
					
							?> 
                            <div   class="col-lg-12"  align="right"  >  </div> 
                            
                    	    <div   class="col-lg-5"  align="left"  > 
							<form action="member_bank.php" method="get" >
								<table width="100%">
									<tr> 
									<td width="25%"> 
										<font color="black" size="3px" class="serif">  วันที่เริ่ม  </font>

										<div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control current   "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>" readonly       autocomplete="off"  >

										<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>  
										</td>     
										<td width="1%">&nbsp;   </td> 
										<td width="25%"> 
										<font color="black" size="3px" class="serif">  สิ้นสุด  </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"   readonly    autocomplete="off"  >

										<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="submit"   >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>  
										</td>      
										<td width="1%">&nbsp;   </td>  
										<td width="35%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ  / เลขที่บัตรประชาชน  </font>
 
										<input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>    
									</tr>
								</table>  
							</form> 
							</div>  
                           
                            <?php if(!empty($major)){
								
									$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px;  border-color: #006400; margin-top: 25px; ";
									$colorbtns2s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";
									$colorbtns3s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";

									$txtcolor1 = "#FFF"; 
									$txtcolor2 = "#FFF"; 
									$txtcolor3 = "#FFF"; 

									$p_total1 = 0;
									$p_total2 = 0;
									$p_total3 = 0;
									$total_p = 0;
									$total_d = 0;
									$sql = "SELECT * FROM member_bank where  major = '".$major."' 
									and typedata = 'ฝากเงิน'
									order by pk desc   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$total_p += $objResult["price"];  
									} 

									$total_d = 0;
									$sql = "SELECT * FROM member_bank where  major = '".$major."' 
									and typedata = 'ถอนเงิน'
									order by pk desc "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$total_d += $objResult["price"];  
									} 
											
									$total_m = 0;
									$sql = "SELECT * FROM member_bank where  major = '".$major."' 
									and typedata = 'ฝากเงิน'
									Group by member
									order by pk desc "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$total_m++;  
									} 	
							?>	
                              
                            <div   class="col-lg-7"  align="right"  >  
                              
                            <a href="member_bank.php?payment=payment"> 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  รายชื่อลูกค้าที่มีการฝากเงิน   <?php echo number_format(0+$total_m); ?> คน </font> </button>   
                            </a>
							 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนเงินฝำก   <?php echo number_format(0+$total_p); ?> บาท </font> </button>   
							 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนถอนเงิน  <?php echo number_format(0+$total_d); ?> บาท </font> </button>
 
							<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor3; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนคงเหลือ   <?php echo number_format(0+$total_p-$total_d); ?> บาท </font> </button>   
							 
							</div>
                   
                   			<?php } ?>
                    
                           
                            <div   class="col-lg-12"  align="right"  >  </div> 
                           
                            <div class="col-md-6" style="margin-top: 15px;" > 
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
												
		
							$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
							$checkend   = date("Y-m-d", strtotime($daystart_load2));  
							$addcode2 = "  and  b.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

												
							if(empty($_GET["payment"])){ 
								  

								if(empty($_GET["searchname3"])){

								}else{
									/// $addcode = " and ( name like '%".$searchname3."%' or  passport like '%".$searchname3."%' ) ";
									$addcode = " and ( a.name like '%".$searchname3."%' or  a.passport like '%".$searchname3."%' ) "; 
									$addcode2 = "  "; 
								} 

								$sql2 = " SELECT * FROM customer a
									where a.name != ''  
									".$addcode.$addcode2."  
									order by a.pk asc      "; 
								
									/*	
								$sql2 = " SELECT a.* FROM customer  a
								Inner Join member_bank b On a.pk = b.member
								where a.name != ''  
								".$addcode.$addcode2."  
								Group by b.member
								order by a.pk asc    "; 
								*/
							}else{
								$addcode2 = "";
								 
								if(empty($_GET["searchname3"])){

								}else{
									$addcode = " and ( a.name like '%".$searchname3."%' or  a.passport like '%".$searchname3."%' ) ";
									$addcode2 = "  "; 
								} 

								$sql2 = " SELECT a.* FROM customer  a
								Inner Join member_bank b On a.pk = b.member
								where a.name != ''  
								".$addcode.$addcode2."  
								Group by b.member
								order by a.pk asc    "; 
								
							} 
													   
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								<ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="member_bank.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="member_bank.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="member_bank.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="member_bank.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="member_bank.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="member_bank.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="member_bank.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="member_bank.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&major=<?php echo $major; ?>&payment=<?php echo $_GET["payment"]; ?>">Next</a></li>
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
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลำดับ    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อ-นามสกุล  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เบอร์โทรติดต่อ     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บัตรประชาชน   </font></div></th>      
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงินฝากคงเหลือ   </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ฝากเงิน   </font></div></th>      
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ถอนเงิน   </font></div></th>      
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติฝากถอน   </font></div></th>  
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


								if(empty($_GET["payment"])){
								   
								
									$sql2 = " SELECT * FROM customer a
									where a.name != ''  
									".$addcode.$addcode2."  
									order by a.pk asc    limit {$start} , {$perpage}   ";  
								
									/*	
									$sql2 = " SELECT a.* FROM customer  a
									Inner Join member_bank b On a.pk = b.member
									where a.name != ''  
									".$addcode.$addcode2."  
									Group by b.member
									order by a.pk asc    limit {$start} , {$perpage}   "; 
									*/
								
								}else{
 
									$sql2 = " SELECT a.* FROM customer  a
									Inner Join member_bank b On a.pk = b.member
									where a.name != ''  
									".$addcode.$addcode2."  
									Group by b.member
									order by a.pk asc    limit {$start} , {$perpage}   "; 

								} 
												
												
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 


								$namestaff = "";
								$namestaff2 = "";
								$namestaff3 = "";
								$namestaff4 = "";
								$sql = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' 
								order by pk desc limit 1 "; 
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
									$namestaff = $objResult["create_by"]; 
									$namestaff2 = $objResult["create_time"]; 
									$namestaff4 = $objResult["create_date"]; 
								} 


								$total_p = 0;
								$sql = "SELECT * FROM member_bank where member = '".$objResult2["pk"]."' and major = '".$major."' 
								and typedata = 'ฝากเงิน'
								order by pk desc   "; 
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
									$total_p += $objResult["price"];  
								} 

								$total_d = 0;
								$sql = "SELECT * FROM member_bank where member = '".$objResult2["pk"]."' and major = '".$major."' 
								and typedata = 'ถอนเงิน'
								order by pk desc "; 
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
									$total_d += $objResult["price"];  
								} 
							?>
							<tr style="background-color: <?php echo $bg ?>; "> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["telphone"]; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["passport"]; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; ">
							<div align="center" id="totalpaymentdiscount<?php echo $objResult2["pk"]; ?>">

							<font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php echo number_format(0+$total_p - $total_d); ?>   
							</font>

							</div></td> 





							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

								<a href="member_bank_income.php?CusID=<?php echo $objResult2["pk"];?>&major=<?php echo $major; ?>"  class="  btn-sm " style="background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;   " ><font size="3px" color="#FFF" style=" font-size: 13px; " > ฝากเงิน </font></a>

							</font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

								<a   href="member_bank_out.php?CusID=<?php echo $objResult2["pk"];?>&major=<?php echo $major; ?>" class="  btn-sm " style="background-color: #FF0000; border-radius: 5px;  border-color: #FF0000; border: 1px solid  #FF0000;   " ><font size="3px" color="#FFF" style=" font-size: 13px; " > ถอนเงิน </font></a>

							</font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

								<a href="view_member_bank_income.php?CusID=<?php echo $objResult2["pk"];?>&major=<?php echo $major; ?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ประวัติ </font></a>

							</font></div></td> 


							</tr>  
							<?php $i++;  } ?>
						</tbody>
  
										 
						</table>  
						</div>
					  </div>

				   	   <?php } ?>
                           
                    
                   	  <?php } ?>
                   		    
                   		   
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


<script> 
		function Commas(str)
		{
			var parts = str.toString().replace("," ,"").split(".");
			parts[0] = parts[0].replace("," ,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}
</script>
<?php
include('footer2.php');
?>