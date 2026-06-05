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
	$dataicloud = "";


	$status = "";
	if(empty($_GET["type"])){
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
	}else{ 
		$searchname2 = date('m');
		if(empty($_GET["searchname2"])){

		}else{
			$searchname2 = $_GET["searchname2"];
		}

		$searchname = date('Y');
		if(empty($_GET["searchname"])){

		}else{
			$searchname = $_GET["searchname"];
		}
	}
	
	
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
	$searchname4 = "";
	if(empty($_GET["searchname4"])){
		
	}else{
		$searchname4 = $_GET["searchname4"];
	}

	$adminstatus = "";
	if(empty($_GET["adminstatus"])){
		
	}else{
		$adminstatus = $_GET["adminstatus"];
	}


		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
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
                     <font size="4px" color="#000000">  เกรดลูกค้ารายลุคคล   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เกรดลูกค้ารายลุคคล   </font>   
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
                     <font size="4px" color="#000000">  เกรดลูกค้ารายลุคคล   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
							<form action="checkgradecontact.php" method="get" >
					 
                       
                    	     <div   class="col-lg-4"  align="left"  > 
							  <table width="100%">
									<tr> 
										<td width="15%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/รหัสลูกค้า/เลขที่สัญญา   </font>
 
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
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
							 </div>
						   
						    
						    <div   class="col-lg-8"  align="right"  > 
							<div style=" margin-top: 5px; "></div>

							<?php
							$txt1 = "#000";
							$txt2 = "#000";
							$txt3 = "#000";
							$txt4 = "#000";
							$txt5 = "#000";

							$btn1 = "  background-color: #FFF; border-radius: 5px; ;  height: 40px;  border: 1px solid  #0098A6;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	

							$btn2 = "  background-color: #FFF; border-radius: 5px; ;  height: 40px;  border: 1px solid  #5BAD32006400;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	

							$btn3 = "  background-color: #FFF; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	

							$btn4 = "  background-color: #FFF; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FFD700;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	

							$btn5 = "  background-color: #FFF; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FF0000;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	


							if($searchtype == ""){
							$txt1 = "#FFF";
							$btn1 = "  background-color: #0098A6; border-radius: 5px; ;  height: 40px;  border: 1px solid  #0098A6;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
							} 
							if($searchtype == "A"){
							$txt2 = "#FFF";
							$btn2 = "  background-color: #006400; border-radius: 5px; ;  height: 40px;  border: 1px solid  #006400;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
							}
							if($searchtype == "B"){
							$txt3 = "#FFF";
							$btn3 = "  background-color: #FF8C00; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
							}
							if($searchtype == "C"){
							$txt4 = "#FFF";
							$btn4 = "  background-color: #FFD700; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FFD700;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
							}
							if($searchtype == "D"){
							$txt5 = "#FFF";
							$btn5 = "  background-color: #FF0000; border-radius: 5px; ;  height: 40px;  border: 1px solid  #FF0000;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
							}

							?>

							  <a href="checkgradecontact.php?searchtype=">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?> "> <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >  แสดงทั้งหมด  </font> </button> 

							  </a>
							  <a href="checkgradecontact.php?searchtype=A">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn2; ?> "> <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >  เกรด A ไม่เคยขาดส่ง  </font> </button> 

							  </a>
							  <a href="checkgradecontact.php?searchtype=B">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn3; ?> "> <font color="<?php echo $txt3; ?>" size="2px" class="serif1" >   เกรด B ขาดส่ง 1 เดือน   </font> </button> 

							  </a>
							  <a href="checkgradecontact.php?searchtype=C">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn4; ?> "> <font color="<?php echo $txt4; ?>" size="2px" class="serif1" >   เกรด C ขาดส่ง 2 เดือน   </font> </button> 

							  </a>
							  <a href="checkgradecontact.php?searchtype=D">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn5; ?> "> <font color="<?php echo $txt5; ?>" size="2px" class="serif1" >   เกรด D ขาดส่งเลยสัญญา NPL      </font> </button> 

							  </a>


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
								$perpage = 25;
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
									$addcode = " and  ( a.codecustomer like '%".$searchname3."%' or a.bill_no like '%".$searchname3."%' or b.name like '%".$searchname3."%' )";
								}
								$addcode2 = "";  
								$addcode3 = "";    
												
							   if($searchtype == ""){
								$addcode2 = "     "; 	 
								} 
								if($searchtype == "A"){
								$addcode2 = "  and a.totalno_payment  <= '0'  and   a.onoff != 'NPL'   "; 	 	 
								}
								if($searchtype == "B"){
								$addcode2 = "  and a.totalno_payment > '0'  and  a.totalno_payment <= '30' and   a.onoff != 'NPL'  "; 
								}
								if($searchtype == "C"){
								$addcode2 = "  and a.totalno_payment > '30'  and  a.totalno_payment <= '60' and   a.onoff != 'NPL'   "; 
								}
								if($searchtype == "D"){
								$addcode2 = "  and   a.onoff = 'NPL'   "; 
								}

													 
								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;
								$total_record= 0;
															  
								$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
								left Join customer b On   a.customer = b.pk
								left Join product c On   c.pk = a.menu_id
								where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว' 
								".$addcode.$addcode2.$addcode3."  
								order by a.pk asc   ";    
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{        
									$total_record++;
								}							  
															  
															  
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="checkgradecontact.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="checkgradecontact.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="checkgradecontact.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="checkgradecontact.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="checkgradecontact.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checkgradecontact.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checkgradecontact.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="checkgradecontact.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="checkgradecontact.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&adminstatus=<?php echo $adminstatus; ?>&page=&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchtype=<?php echo $searchtype; ?>">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>

							</div>
                           
                           
                       		 <div class="col-lg-12"> &nbsp; </div>
                            
                           
                            <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"     >
							    <thead> 
								<tr>
								<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่สัญญา    </font></div></th>    
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>    
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อ สกุล    </font></div></th>    
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันเริ่ม     </font></div></th>   
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันสิ้นสุด     </font></div></th>   
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เกรด   </font></div></th>  
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ขาดส่ง   </font></div></th>   

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติ   </font></div></th>  
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

							if (empty($_GET['page2'])) { 
								$i = 1;
							}else if (($_GET['page2'] == 1)) { 
								$i = 1;
							}else{

								$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
							}

							$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
									left Join customer b On   a.customer = b.pk
									left Join product c On   c.pk = a.menu_id
									where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว' 
									".$addcode.$addcode2.$addcode3."  
									order by a.pk asc   limit {$start} , {$perpage}   ";  


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
									$c_status = $objResult2["c_status"];  


									/*
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
 
									$onoff_edit = "ON";
									$sql_c = "SELECT * FROM history_payment where bill_no = '".$objResult2["bill_no"]."' and income != ''   
									order by pk asc limit 1 "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$onoff_edit =  "OFF";
									}
									*/

									$bill_no = $objResult2["bill_no"];  
									$codecustomer = $objResult2["codecustomer"];  
									$name = $objResult2["name"];  
									$daystart = $objResult2["startdate"];  
									$endate = $objResult2["endate"];  
									$totalno_payment = $objResult2["totalno_payment"];  
									$onoff = $objResult2["onoff"];  
								
								
								$checkgrad = $totalno_payment;
								$showgrad = "  ";
								$bg = "";
								
								if( $onoff == "NPL" ){
									$showgrad = " D ";
									$bg = " #FF0000  ";
									
								}else{
									 
								if($checkgrad <= 0){
									$showgrad = " A ";
									$bg = " #006400  ";
								}
								if($checkgrad >= 1 && $checkgrad <= 30){
									$showgrad = " B ";
									$bg = "  #FF8C00 ";
								}
								if($checkgrad > 30 && $checkgrad <= 60){
									$showgrad = " C ";
									$bg = " #FFD700  ";
								}
								if($checkgrad > 60){
									$showgrad = " D ";
									$bg = " #FF0000  ";
								}

									
								}
							?>
                           <tr style="  "> 
										 
							<td style=" border-left: 0px solid #F2F2F2; " height="30px;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $bill_no; ?> </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codecustomer; ?> </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?> </font></div></td>
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($daystart)." ".DateThai2($daystart); ?> </font></div></td>
							  
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($endate)." ".DateThai2($endate); ?> </font></div></td>
						 
                           
							<td style=" border-left: 0px solid #F2F2F2; background-color: <?php echo $bg ?>; "><div align="center"><font size="3px" color="#FFF" style=" font-size: 13px; " > <?php echo $showgrad; ?> </font></div></td>
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalno_payment); ?> </font></div></td>
                            
                            
                            
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<a href="view_history.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class="    btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;    " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " >  
							คลิก   
							</font>  
							</a> 
							</font></div></td>
										
										
							</tr>
                           <?php  $i++; } ?>
                           </tbody>
                           </table>
                           </div> 
                           </div> 
                            
                           
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>