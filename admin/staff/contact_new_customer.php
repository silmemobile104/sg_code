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
	$data = "";
	$customer = "";
	$searchname = "";
	$producttype = "";
	$cod = "";
	$computer = "";
	$moneymonth = "";
	$moneycontact = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$appleid = "";
	$bank2 = "";



	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}	

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}	

	$type = "";
	if(empty($_GET["type"])){
		
	}else{
		$type = $_GET["type"];
	}	

 
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

?> 
		<link href="../select2.min.css" rel="stylesheet" />
		<script src="../select2.min.js"></script>  
  			
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
				yearRange: "-5:+5",
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
                     <font size="4px" color="#000000">  เปลี่ยนสัญญาใหม่ (สำหรับเปลี่ยนคนผ่อน)   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เปลี่ยนสัญญาใหม่ (สำหรับเปลี่ยนคนผ่อน)   </font>   
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
                     <font size="4px" color="#000000">  เปลี่ยนสัญญาใหม่ (สำหรับเปลี่ยนคนผ่อน)   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                         
                             <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="contact_new_customer.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  เปลี่ยนสัญญาใหม่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"   > 
					    		<a href="contact_new_customer.php?page=edit">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ประวัติการเปลี่ยนโอนสัญญา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    	</table>
					   		</div>
                       
                       		 <div class="col-lg-12"> &nbsp; </div>
                        
                        
							<form action="contact_new_customer.php" method="get" >
							<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
                        
                    	     <div   class="col-lg-4"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  รายชื่อลูกค้า (เจ้าของสัญญาเดิม)    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>    
									</tr>
								</table>  
							 </div>
                    
                             <div class="col-md-12"> &nbsp; </div>
							
                    	     <div   class="col-lg-4"  align="left"  > 
								<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;   </td>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>    
									</tr>
								</table>  
							</div>
                     
							</form> 
                    
                     
                       		 <div class="col-lg-12"> &nbsp; </div>
                       		 
                       		 
                  			 <div class="col-md-4" style="margin-top: 15px;" > 
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
								if(empty($_GET["searchname3"])){

								}else{
									$addcode = " and  ( b.name like '%".$searchname3."%' or a.codecustomer like '%".$searchname3."%' or a.bill_no like '%".$searchname3."%' )";
								}
								$addcode2 = "";    
								if(empty($_GET["searchname"])){
									$contactstart = date("Y-m-d", strtotime($daystart_load));  
									$checkend = date("Y-m-d", strtotime($daystart_load2));
									$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	

								}else{ 

									$contactstart = date("Y-m-d", strtotime($daystart_load));  
									$checkend = date("Y-m-d", strtotime($daystart_load2));
									$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	 
								} 
													 

								$addcode3 = ""; 
								if(empty($_GET["typedata"])){
								}else if(($_GET["typedata"] == "ปกติ")){	

									$addcode3 = " and a.status = 'ปกติ'  ";

								}else if(($_GET["typedata"] == "อนุมัติ/สัญญาโมฆะ")){

									$addcode3 = " and a.status = 'อนุมัติ/สัญญาโมฆะ'  ";

								} 
													 
								$addcode4 = "";
								if(empty($_GET["type"])){ 
									$sql2 = "SELECT a.*, b.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									where a.bill_no != '' and a.closebill = 'เป็นหนี้' 
									".$addcode.$addcode2.$addcode3."  
									order by a.pk asc    "; 
									
								}else if(($_GET["type"] == "เป็นหนี้")){
									$sql2 = "SELECT a.*, b.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									where a.bill_no != '' and a.closebill = 'เป็นหนี้' 
									".$addcode.$addcode2.$addcode3."  
									order by a.pk asc    "; 
									 
									
								}else if(($_GET["type"] == "ทำการย้ายหนี้สำเร็จ")){
									
									$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'   order by pk desc limit 1  "; 
									
									$sql2 = "SELECT a.*, b.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join update_real_time c On   a.bill_no = c.bill_no 
									where a.bill_no != '' and a.closebill = 'เป็นหนี้'   and c.status = 'ทำการย้ายหนี้สำเร็จ'
									".$addcode.$addcode2.$addcode3."  
									Group by a.bill_no
									order by a.pk asc    "; 
									
								}
 
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								 <ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="contact_new_customer.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="contact_new_customer.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="contact_new_customer.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="contact_new_customer.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="contact_new_customer.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_new_customer.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_new_customer.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="contact_new_customer.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="contact_new_customer.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=&type=<?php echo $type; ?>">Next</a></li>
								<?php endif; ?>
								</ul>
							<?php endif; ?>

							</div>
                    
                    
                    
                    	    <div   class="col-lg-8"  align="right"  > 
                    		<a href="contact_new_customer.php?searchname=<?php echo $searchname; ?>&type=เป็นหนี้"> 
							 <button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; margin-top: 20px; " > <font color="#FFF" size="2px" class="serif1" >    เป็นหนี้   </font> </button> 
							</a> 
							 
                    		<a href="contact_new_customer.php?searchname=<?php echo $searchname; ?>&type=ทำการย้ายหนี้สำเร็จ"> 
							 <button type="button" class="btn btn-primary" style="background-color: #FFA500; border-radius: 5px;  height: 40px; border-color: #FFA500; margin-top: 20px; "   > <font color="#FFF" size="2px" class="serif1" >    ทำการย้ายหนี้สำเร็จ   </font> </button> 
							</a> 
                    		</div>
                    		 
                   	 		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							 <div class="table-responsive"  >
							 <table id="key_product"  class=" table    tablemobile  " border="0" style="  width: 1600px; "   >
							    <thead> 
							    <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อ-นามสกุล  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดหนี้คงเหลือ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>    

								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลือก     </font></div></th>  
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการย้ายหนี้   </font></div></th>  
							 </tr>
							 </thead>  
										 
								<tbody> 
								<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
 
									   
													 
										if(empty($_GET["type"])){ 
											$sql2 = "SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != '' and a.closebill = 'เป็นหนี้' 
											".$addcode.$addcode2.$addcode3."  
											order by a.pk asc  limit {$start} , {$perpage}   "; 

										}else if(($_GET["type"] == "เป็นหนี้")){
											$sql2 = "SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != '' and a.closebill = 'เป็นหนี้' 
											".$addcode.$addcode2.$addcode3."  
											order by a.pk asc   limit {$start} , {$perpage}  "; 

 
											
										}else if(($_GET["type"] == "ทำการย้ายหนี้สำเร็จ")){

											$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'   order by pk desc limit 1  "; 

											$sql2 = "SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join update_real_time c On   a.bill_no = c.bill_no 
											where a.bill_no != '' and a.closebill = 'เป็นหนี้'   and c.status = 'ทำการย้ายหนี้สำเร็จ'
											".$addcode.$addcode2.$addcode3."  
											Group by a.bill_no
											order by a.pk asc  limit {$start} , {$perpage}   "; 

										} 
													  
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
												$startdate = $objResult2["startdate"];  
												$customer = $objResult2["customer"];  
											
											
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
											
												$customernew = "";
												$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'   order by pk desc limit 1  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$customernew =  $objResult_c["customer_new"];
												}
											
											
											
												$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
												$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

												$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";

												$discoount = 0;
												$sql_getpayment = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' ".$code_check2." order by pk asc    ";  
												$query_getpayment = mysqli_query($con,$sql_getpayment); 
												while($objResult_getpayment = mysqli_fetch_array($query_getpayment))
												{ 
													  $discoount += $objResult_getpayment["income"];
												} 
 
												$allmoney = ($totalprice2*$totalprice3)-$discoount;
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="showtextchg<?php echo $i; ?>" >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FF0000" style=" font-size: 13px; " >  <?php echo number_format(0+$allmoney); ?>   </font></div></td> 
									   
									     
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									    <font size="3px" color="Black" style=" font-size: 13px; " >  <?php 
											
											if($objResult2["onoff"] == "ปกติ"){
												echo "<font color = 'darkgreen' >  " . $objResult2["onoff"] . " </font> "; 
											}else{
												echo "<font color = 'red' >  " . $objResult2["onoff"] . " </font> "; 
											}
											  
											?>   </font></div></td>
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; " id="showtxtclode<?php echo $i; ?>" >  
								    	<?php 
											 
											if(empty($customernew)){
												echo "<font color = '#FF0000'  >  " . $objResult2["closebill"] . " </font> ";  
											}else{
												echo "<font color = '#FF8C00' >   ทำการย้ายหนี้สำเร็จ   </font> "; 
											}
											   
											?>    
								    	</font></div></td> 
									    
									     
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<a  class="  btn-sm "  data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										เลือก   
										</font>  
										</a> 
										
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>"  aria-labelledby="smallmodalLabel" >
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<font style=" font-size: 14px; " > เปลี่ยนสัญญาใหม่ (สำหรับเปลี่ยนคนผ่อน) <?php echo $objResult2["bill_no"]; ?> </font>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="row" align="left"   >   
											<div class="col-lg-12" align="left"   >   
											  
			 
											     
											  <div class="col-md-12"  >	  
											   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้าที่ต้องการผ่อนต่อ </font>        
												<div class="input-group  "  style="border: 1px solid #FFFF; border-radius: 4px; height: 38px;   ">  
												<select class="form-control myselect" id="customer<?php echo $i; ?>" name="customer<?php echo $i; ?>" required style=" width: 100%;   "  onchange="Loaddatashowcustomer<?php echo $i; ?>()"    >  
												<option value=""> เลือกรายชื่อลูกค้า </option>        
												<?php 
												$sql = "SELECT * FROM customer where pk != '".$customer."'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$address1 = $objResult["address1"];
													$address2 = $objResult["address2"];
													$address3 = $objResult["address3"];
													$address4 = $objResult["address4"];
 													$all_address = "";
													
												?>
												<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$objResult["telphone"]."///".$all_address."///".$objResult["passport"]; ?>">  <?php echo $objResult["name"]; ?></option> 
												<?php  
												}
												?>   
												</select>
												<script type="text/javascript">
												$(".myselect").select2();
												</script>   
												</div>
										  	  </div>  
											   
											  <div class="col-md-12"  >	 
											   <font color = '#000' size="3px" id="showdata<?php echo $i; ?>" >   </font>    
											  </div> 
											  
											  <input type="hidden" id="customerback<?php echo $i; ?>" name="customerback<?php echo $i; ?>" value="<?php echo $customer;?> "  >
											  <input type="hidden" id="customerid<?php echo $i; ?>" name="customerid<?php echo $i; ?>" value=""  >
											  <input type="hidden" id="bill_no<?php echo $i; ?>" name="bill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>"  > 

											  <script>  
												function Loaddatashowcustomer<?php echo $i; ?>() 
												{
												 var x = document.getElementById("customer<?php echo $i; ?>").value; 
												 var getX = x.split("///");

												 document.getElementById("customerid<?php echo $i; ?>").value = getX[0];  
												 document.getElementById("showdata<?php echo $i; ?>").innerHTML = "ชื่อ "+getX[0]+ "<br> เบอร์โทร "+getX[2]+"<br> เลขที่บัตรประชาชน "+getX[4]+" ";  /// ราคา    

												 }
												function 
												CanceldataNo<?php echo $i; ?>( ) {
													// alert(" No "  );  
													$(document).ready(function(){ 
													$('#smallmodal<?php echo $i; ?>').modal('hide'); //myModal is ID of div
													});   
												}
												function 
												Canceldata<?php echo $i; ?>( ) {
													 
													var save_key = document.getElementById("bill_no<?php echo $i; ?>").value;
													var save_customer = document.getElementById("customerid<?php echo $i; ?>").value;
													var save_customerbk = document.getElementById("customerback<?php echo $i; ?>").value;
												  
													 var x = document.getElementById("customer<?php echo $i; ?>").value; 
													 var getX = x.split("///");
  													 document.getElementById("showtextchg<?php echo $i; ?>").innerHTML =  ""+getX[1]  ;  /// ราคา  
													 
													
													if(save_customer == ""){
														alert(" กรุณาเลือก รายชื่อลูกค้าผ่อนต่อ ");
													}else{
														
														var jsonString = ""; 
														$.ajax({
														type: "POST",
														url: "save_contact_new_customer.php?customernew="+save_customer+"&customerback="+save_customerbk+"&bill_no="+save_key,
														contentType: 'application/json',
														data: jsonString,
														success: function(result) {  
 															document.getElementById("showtxtclode<?php echo $i; ?>").innerHTML = " ทำการย้ายหนี้สำเร็จ ";  /// ราคา   
														}
														});	
														
													$(document).ready(function(){ 
													$('#smallmodal<?php echo $i; ?>').modal('hide'); //myModal is ID of div
													});  
														
													}
												}
											  </script> 
							  
											  
											  <div class="col-lg-12" style="margin-top: 15px;" align="center">   
 
												 <a onClick="Canceldata<?php echo $i; ?>()" >
												 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px;   height: 40px; border-color: #F77369; width: 210px;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  ยืนยันเปลี่ยนลูกค้าที่ต้องการผ่อนต่อ   </font> </button>  </a>


												 <a onClick="CanceldataNo<?php echo $i; ?>()"        >
												 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  width: 210px;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่เปลี่ยน  </font> </button> </a>

											 </div>
											  
											</div> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										
										</font></div></td>
											
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<a  class="  btn-sm "  data-toggle="modal" data-target="#historyshow<?php echo $i; ?>" style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; "  >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										เลือก   
										</font>  
										</a> 
										
										
										
										<!-- modal small -->
										<div class="modal fade" id="historyshow<?php echo $i; ?>"  aria-labelledby="smallmodalLabel" >
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<font style=" font-size: 14px; " > เปลี่ยนสัญญาใหม่ (สำหรับเปลี่ยนคนผ่อน) <?php echo $objResult2["bill_no"]; ?> </font>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="row" align="left"   >   
											<div class="col-lg-12" align="left"   >   
											  
			 
											     
											  <div class="col-md-12"  >	  
											  <font color="#000" style=" font-size: 15px; "  >	  
											    <?php
												$no = 1;
												$sql = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$customer_new = $objResult["customer_new"];
													$customer_bk = $objResult["customer_bk"]; 
													
													
													$nameback1 = "";
													$nameback2 = "";
													$sql_c = "SELECT * FROM customer where pk = '".$customer_bk."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$nameback1 =  $objResult_c["name"];
													}
													$sql_c = "SELECT * FROM customer where pk = '".$customer_new."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$nameback2 =  $objResult_c["name"];
													}
													
													
													echo " ครั้งที่ ". $no.". ทำการย้ายจาก " .  $nameback1 .  " -> " . $nameback2 . " <br> " ;
													$no++;
													
												} ?>
										  	  </font>  
										  	  </div>  
											 
											  
											</div> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										
										</font></div></td> 
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                  	  
                  	  
                  	 
                   	  <?php }   ?>
                         
                         
                         
                         
                         <?php  
							if(isset($_GET["page"])){
							if( ($_GET["page"]) == "edit" ){
							?>
                      
                         
                            <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF"   > 
					    		<a href="contact_new_customer.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  เปลี่ยนสัญญาใหม่    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="contact_new_customer.php?page=edit">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ประวัติการเปลี่ยนโอนสัญญา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    	</table>
					   		</div>
                       
                       		 <div class="col-lg-12"> &nbsp; </div>
                        
                    	     <div   class="col-lg-3"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  รายชื่อลูกค้า/รหัสลูกค้า/เลขที่สัญญา   </font>

										<form action="contact_new_customer.php" method="get" >
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
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
                    
                    
                    
                    	    <div   class="col-lg-9"  align="right"  > 
                    		<a href="contact_new_customer.php?page=edit2"> 
							 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ทำการย้ายหนี้สำเร็จ   </font> </button> 
							</a> 
                    		</div>
                     
                       		 <div class="col-lg-12"> &nbsp; </div>
						   
                  	    
                  			 <div class="col-md-4" style="margin-top: 15px;" > 
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
							$addcode3 = ""; 
							if(empty($_GET["searchname3"])){ 
								$addcode = " and  ( b.name like '101' )";
								$addcode2 = " and  ( b.name like '101' )";
							}else{
								$addcode = " and  ( b.name like '%".$searchname3."%' or a.codecustomer like '%".$searchname3."%' or a.bill_no like '%".$searchname3."%' )";
								$addcode2 = " and  ( b.name like '%".$searchname3."%'  or c.codecustomer like '%".$searchname3."%'   or a.bill_no like '%".$searchname3."%' )";
							}  

							$sql2 = "SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != '' and a.closebill = 'เป็นหนี้' 
							".$addcode."  
							order by a.pk asc    "; 
							$query2 = mysqli_query($objCon, $sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  	
								$total_record++;  
							}
								
							$sql_c = "SELECT a.*, b.name, c.codecustomer FROM update_real_time  a
							Inner Join customer b On   a.customer_bk = b.pk
							Inner Join list_order c On   a.bill_no = c.bill_no
							where a.status = 'ทำการย้ายหนี้สำเร็จ' 
							".$addcode2."    
							order by a.pk desc  "; 
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{ 
								$total_record++;
							}
								 
							$total_page = ceil($total_record / $perpage);	
							 ?>   

							</div>
                     
                   	 		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							 <div class="table-responsive"  >
							 <table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px; "   >
							    <thead> 
							    <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อ-นามสกุล  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดหนี้คงเหลือ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการชำรหนี้     </font></div></th>    

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบสัญญา   </font></div></th>  
							 </tr>
							 </thead>  
										 
								<tbody> 
								<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
 
									   
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้' 
											".$addcode."  
											order by a.pk asc limit {$start} , {$perpage}   "; 
								
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "##FFFF00"; 
												}else{  
													$bg = "#FFF"; 
												}
											  
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"];  
												$startdate = $objResult2["startdate"];  
												$customer = $objResult2["customer"];  
											
											
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
											
												$customernew = "";
												$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'   order by pk desc limit 1  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$customernew =  $objResult_c["customer_new"];
												}
											
											
											
												$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
												$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

												$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";

												$discoount = 0;
												$sql_getpayment = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' ".$code_check2." order by pk asc    ";  
												$query_getpayment = mysqli_query($con,$sql_getpayment); 
												while($objResult_getpayment = mysqli_fetch_array($query_getpayment))
												{ 
													  $discoount += $objResult_getpayment["income"];
												} 
 
												$allmoney = ($totalprice2*$totalprice3)-$discoount;
											
											
													$bg = "#FFFF00"; 
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="#FF0000" style=" font-size: 13px; " >  <?php echo number_format(0+$allmoney); ?>   </font></div></td> 
									   
									     
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; "  >  
								    	<?php   
											if(empty($customernew)){
												echo "<font color = '#FF0000'  >  " . $objResult2["onoff"] . " </font> ";  
											}else{
												echo "<font color = '#FF8C00' >   ทำการย้ายหนี้สำเร็จ   </font> "; 
											}
										?>    
								    	</font></div></td>  
								    	
								    	 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; "  >  
								    	<?php  
											if(empty($customernew)){
												echo "<font color = '#FF0000'  >  " . $objResult2["closebill"] . " </font> ";  
											}else{
												echo "<font color = '#FF8C00' >   ย้ายหนี้   </font> "; 
											} 
										?>    
								    	</font></div></td> 
									    
									    
										    
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   
										</font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										 
											
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill_new.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&customer=<?php echo $objResult2["customer"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										คลิก 
										</font>  
										</a>
										</font></div></td>
											 
										</tr>  
										<?php $i++;  } ?>
										
										<?php 
										$bg = "#F8FAFD";  
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0;  
								
								
										$sql_old = " SELECT a.*, b.name, c.codecustomer FROM update_real_time  a
												Inner Join customer b On   a.customer_bk = b.pk
												Inner Join list_order c On   a.bill_no = c.bill_no
												where a.status = 'ทำการย้ายหนี้สำเร็จ' 
												".$addcode2."    
												order by a.pk desc";
								  
									$query_old = mysqli_query($objCon,$sql_old);
									while($objResult_old = mysqli_fetch_array($query_old))
									{ 
										$customer_bk = $objResult_old["customer_bk"];
										$endate_data = $objResult_old["create_date2"];
										
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.bill_no = '".$objResult_old["bill_no"]."'
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
												$startdate = $objResult2["startdate"];  
												$customer = $objResult2["customer"];  
											 
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$name_major =  $objResult_c["name"];
												}
											
												$c_data1 = "";
												$c_data2 = "";
												$c_data3 = "";
												$c_data2 =  $objResult2["codecustomer"];
											
											
												$sql_c = "SELECT * FROM customer where pk = '".$customer_bk."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$c_data1 =  $objResult_c["name"]; 
												}
											  
												$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
												$checkend = date("Y-m-d", strtotime($endate_data));  /// วันที่เลือกล่าสุด 

												$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												$discoount = 0;
												$sql_getpayment = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' ".$code_check2." order by pk asc    ";  
												$query_getpayment = mysqli_query($con,$sql_getpayment); 
												while($objResult_getpayment = mysqli_fetch_array($query_getpayment))
												{ 
													  $discoount += $objResult_getpayment["income"];
												} 
 
												$allmoney = ($totalprice2*$totalprice3)-$discoount;
										?> 
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $c_data1; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $c_data2; ?>   </font></div></td> 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo number_format(0+$allmoney); ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									    <font size="3px" color="Black" style=" font-size: 13px; " >  
								    	<?php  
										   if($objResult2["onoff"] == "NPL"){
												echo "<font color = 'red' >  " . $objResult2["onoff"] . " </font> ";  
											}else{
												echo "<font color = 'darkgreen' >  " . $objResult2["onoff"] . " </font> "; 
											}
										?>   
									    </font></div></td>
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; " id="showtxtclode<?php echo $i; ?>" >  
								    	<?php  
										   if($objResult2["closebill"] == "เป็นหนี้"){
												echo "<font color = 'darkgreen' >  " . $objResult2["closebill"] . " </font> "; 
											}else{
												echo "<font color = 'red' >  " . $objResult2["closebill"] . " </font> "; 
											}
										?>     
								    	</font></div></td> 
									    
									    	    
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   
										</font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill_new.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&customer=<?php echo $customer_bk; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										คลิก 
										</font>  
										</a>
										</font></div></td>
										 
										
									</tr>
									<?php  $i++; } } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                  	    
                  	    
                  	    
                   	    <?php } } ?>
                         
                         
                         <?php  
							if(isset($_GET["page"])){
							if( ($_GET["page"]) == "edit2" ){
							?>
                         
                              <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF"   > 
					    		<a href="contact_new_customer.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  เปลี่ยนสัญญาใหม่    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
					    		<a href="contact_new_customer.php?page=edit">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ประวัติการเปลี่ยนโอนสัญญา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    	</table>
					   		</div>
                       
                       		 <div class="col-lg-12"> &nbsp; </div>
                        
                    	     <div   class="col-lg-3"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  รายชื่อลูกค้า/รหัสลูกค้า/เลขที่สัญญา   </font>

										<form action="contact_new_customer.php" method="get" >
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
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
                   
                   
                       		 <div class="col-lg-12"> &nbsp; </div>
                   
                  			 <div class="col-md-4" style="margin-top: 15px;" > 
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
							$addcode3 = ""; 
							if(empty($_GET["searchname"])){ 
								 
							}else{
								$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like '%".$searchname."%' or a.bill_no like '%".$searchname."%' )";
								$addcode2 = " and  ( b.name like '%".$searchname."%'  or c.codecustomer like '%".$searchname."%'   or a.bill_no like '%".$searchname."%' )";
							}  
 
							$sql_c = "SELECT a.*, b.name, c.codecustomer FROM update_real_time  a
							Inner Join customer b On   a.customer_bk = b.pk
							Inner Join list_order c On   a.bill_no = c.bill_no
							where a.status = 'ทำการย้ายหนี้สำเร็จ' 
							".$addcode2."    
							order by a.pk desc  "; 
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{ 
								$total_record++;
							}
								 
							$total_page = ceil($total_record / $perpage);	
							 ?>   

							</div>
                   
                   
                   
                   
                   
                  			 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							 <div class="table-responsive"  >
							 <table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px; "   >
							    <thead> 
							    <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อ-นามสกุล  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดหนี้คงเหลือ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะหนี้     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติการชำรหนี้     </font></div></th>    

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบสัญญา   </font></div></th>  
							 </tr>
							 </thead>  
										 
								<tbody> 
								 
										<?php 
										$bg = "#F8FAFD";  
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0;  
								
								
										$sql_old = " SELECT a.*, b.name, c.codecustomer FROM update_real_time  a
												Inner Join customer b On   a.customer_bk = b.pk
												Inner Join list_order c On   a.bill_no = c.bill_no
												where a.status = 'ทำการย้ายหนี้สำเร็จ' 
												".$addcode2."    
												order by a.pk desc";
								  
									$query_old = mysqli_query($objCon,$sql_old);
									while($objResult_old = mysqli_fetch_array($query_old))
									{ 
										$customer_bk = $objResult_old["customer_bk"];
										$endate_data = $objResult_old["create_date2"];
										
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้'  and a.bill_no = '".$objResult_old["bill_no"]."'
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
												$startdate = $objResult2["startdate"];  
												$customer = $objResult2["customer"];  
											 
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$name_major =  $objResult_c["name"];
												}
											
												$c_data1 = "";
												$c_data2 = "";
												$c_data3 = "";
												$c_data2 =  $objResult2["codecustomer"];
											
											
												$sql_c = "SELECT * FROM customer where pk = '".$customer_bk."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$c_data1 =  $objResult_c["name"]; 
												}
											  
												$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
												$checkend = date("Y-m-d", strtotime($endate_data));  /// วันที่เลือกล่าสุด 

												$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												$discoount = 0;
												$sql_getpayment = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' ".$code_check2." order by pk asc    ";  
												$query_getpayment = mysqli_query($con,$sql_getpayment); 
												while($objResult_getpayment = mysqli_fetch_array($query_getpayment))
												{ 
													  $discoount += $objResult_getpayment["income"];
												} 
 
												$allmoney = ($totalprice2*$totalprice3)-$discoount;
											
											
											
											
												$customernew = "";
												$sql_c = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' and status = 'ทำการย้ายหนี้สำเร็จ'   order by pk desc limit 1  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
														$customernew =  $objResult_c["customer_new"];
												}
											
											
											
										?> 
										<tr style="background-color: <?php echo $bg ?>; "> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $c_data1; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $c_data2; ?>   </font></div></td> 
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo number_format(0+$allmoney); ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; "  >  
								    	<?php   
											if(empty($customernew)){
												echo "<font color = '#FF0000'  >  " . $objResult2["onoff"] . " </font> ";  
											}else{
												echo "<font color = '#FF8C00' >   ทำการย้ายหนี้สำเร็จ   </font> "; 
											}
										?>    
								    	</font></div></td>  
								    	
								    	 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
								    	<font size="3px" color="Black" style=" font-size: 13px; "  >  
								    	<?php  
											if(empty($customernew)){
												echo "<font color = '#FF0000'  >  " . $objResult2["closebill"] . " </font> ";  
											}else{
												echo "<font color = '#FF8C00' >   ย้ายหนี้   </font> "; 
											} 
										?>    
								    	</font></div></td> 
									    
									    	    
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   
										</font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="view_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; margin-top: -5px;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  
										คลิก   
										</font>  
										</a> 
										</font></div></td>
										 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill_new.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&customer=<?php echo $customer_bk; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										คลิก 
										</font>  
										</a>
										</font></div></td>
										 
										
									</tr>
									<?php  $i++; } } ?>
										 
   
								</tbody>  
							</table>  
							</div>
						  </div>
                    
                   	    <?php } } ?>
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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