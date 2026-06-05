<?php 
session_start();
$_SESSION["load"] = "";
include('header.php');
ini_set("memory_limit","512M");
 
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


	$searchname4 =  "";
	if(empty($_GET["searchname4"])){

	}else{
		$searchname4 = $_GET["searchname4"];
	} 
 					
	$searchname5 = "";
	if(empty($_GET["searchname5"])){
		
	}else{
		$searchname5 = $_GET["searchname5"];
	}  



	$page2 = "";
	if(empty($_GET["page2"])){
		
	}else{
		$page2 = $_GET["page2"];
	} 
	 
	$typesearch = "";
	if(empty($_GET["typesearch"])){
		
	}else{
		$typesearch = $_GET["typesearch"];
	} 
	 
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
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
                     <font size="4px" color="#000000">  บันทึกทำสัญญาผ่อนมือถือ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > รอตรวจสอบข้อมการทำสัญญา  </font>   
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
                     <font size="4px" color="#000000">  รอตรวจสอบข้อมการทำสัญญา   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                          
                          <form action="check_contact_onoff.php" method="get">
                          	 
							<div   class="col-lg-10"  align="left"  > 
						    <table width="100%">
							<tr> 
								<td width="25%"> 
								<div style=" margin-top: 10px; "> </div>
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
								<div style=" margin-top: 10px; "> </div>
								<font color="black" size="3px" class="serif">  สิ้นสุด  </font>

								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								<input class="form-control  current  "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"   readonly    autocomplete="off"  >

								<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none;">
								  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
										<img src="images/search.png" style="width: 15px; "> 
								  </button>
								</span>
								</div>  
								</td>      
								<td width="1%">&nbsp;   </td>   
								<td width="25%"> 
								<div style=" margin-top: 10px; "> </div>
								<font color="black" size="3px" class="serif">  ปี  </font>

								 <div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								 <select id="searchname4"  name="searchname4" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    > 
									<?php if(empty($searchname4)){ ?>
									<option value=""> ค้นหาปี  </option> 
									<?php } ?>
									<?php 
										$sql = "SELECT * FROM year where year = '".$searchname4."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
									?>
										<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
										}
									?>    
									<?php 
										$sql = "SELECT * FROM year where year != '".$searchname4."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
									?>
										<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
										}
									?>   
								</select>

								<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none; ">
								  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
										<img src="images/search.png" style="width: 15px; "> 
								  </button>
								</span>
								</div>

								</td>  
								<td width="1%">&nbsp;   </td>  
								<td width="30%"> 
								<font color="black" size="3px" class="serif">  ค้นหาร้านค้า  </font>
								<select class="form-control  myselect" id="searchname3" name="searchname3"    style="background-color: #FFF;    color: #000;  border: 1px solid #C9C9C9;  height: 40px; width: 100%; border-radius: 5px; "      > 
									<?php if(empty($searchname3)){ ?>
									<option value=""> แสดงทั้งหมด  </option> 
									<?php } ?>

									<?php 
													 
									$sql = " SELECT d.pk, d.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   c.pk = a.menu_id
									Inner Join store d On   c.typedata_2 = d.pk
									where a.bill_no != '' and d.pk = '".$searchname3."' 
									Group by c.typedata_2
									order by d.pk asc    ";  
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>    
									<?php 
									$sql = " SELECT d.pk, d.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   c.pk = a.menu_id
									Inner Join store d On   c.typedata_2 = d.pk
									where a.bill_no != '' and d.pk != '".$searchname3."' 
									Group by c.typedata_2
									order by d.pk asc    ";   
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php if(!empty($searchname3)){ ?>
									<option value=""> แสดงทั้งหมด  </option> 
									<?php } ?>
									</select> 
									<script type="text/javascript">
									$(".myselect").select2();
									</script>
								</td>    
								<td width="1%">&nbsp;   </td>  
								<td width="25%">   
								 
								 <button type="submit" class="btn btn-sm  btn-primary" style="background-color: #006400; border-radius: 5px; width: 110px;  height: 40px;   border: 1px solid  #006400; margin-top: 25px;   "  > <font color="#FFF" size="2px" class="serif1"  style=" font-size: 13px; ">  ค้นหา  </font> </button>  
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
									$perpage = 15;
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

									}else{
										$addcode2 = " and c.typedata_2 = '".$searchname3."'  ";
									} 
													 
												 
													 
									if(empty($_GET["searchname4"])){

									$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
									$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

									$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

									}else{


									$datadate1  = "01-01-".$searchname4;				    
									$datadate2  = "31-12-".$searchname4;				    

									$contactstart   = date("Y-m-d", strtotime($datadate1)); 
									$checkend   = date("Y-m-d", strtotime($datadate2)); 


									$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

									}

									if($typedata == "รอตรวจสอบ"){
										$addcode3 = " and (a.contactstatus = '' or a.contactstatus = 'รอตรวจสอบ' ) ";  
									}if($typedata == "อนุมัติ"){
										$addcode3 = " and a.contactstatus = 'อนุมัติแล้ว'   ";  
									}if($typedata == "ไม่อนุมัติ"){
										$addcode3 = " and a.contactstatus = 'ไม่อนุมัติ'   ";  
									}	 

									$totalcal1= 0;
									$totalcal2= 0;
									$totalcal3 = 0;
									$totalcal4 = 0;
									$endback= 0;
									$total_record= 0;

									$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   c.pk = a.menu_id
									where a.bill_no != ''
									".$addcode.$addcode2.$addcode3."  
									order by a.pk asc    "; 
									$query2 = mysqli_query($objCon, $sql2);
									$total_record = mysqli_num_rows($query2); 



									$total_page = ceil($total_record / $perpage);
									 ?>  
									<?php if (ceil($total_record / $perpage) > 0): ?>
										 <ul class="pagination">
										<?php if ($page > 1): ?>
										<li class="prev"><a href="check_contact_onoff.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page=">Prev</a></li>
										<?php endif; ?>

										<?php if ($page > 3): ?>
										<li class="start"><a href="check_contact_onoff.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page=">1</a></li>
										<li class="dots">...</li>
										<?php endif; ?>

										<?php if ($page-2 > 0): ?><li class="page"><a href="check_contact_onoff.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo $page-2 ?></a></li><?php endif; ?>
										<?php if ($page-1 > 0): ?><li class="page"><a href="check_contact_onoff.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo $page-1 ?></a></li><?php endif; ?>

										<li class="currentpage"><a href="check_contact_onoff.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo $page ?></a></li>

										<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_onoff.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo $page+1 ?></a></li><?php endif; ?>
										<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_onoff.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo $page+2 ?></a></li><?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)-2): ?>
										<li class="dots">...</li>
										<li class="end"><a href="check_contact_onoff.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page="><?php echo ceil($total_record / $perpage) ?></a></li>
										<?php endif; ?>

										<?php if ($page < ceil($total_record / $perpage)): ?>
										<li class="next"><a href="check_contact_onoff.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&typedata=<?php echo $typedata; ?>&page=">Next</a></li>
										<?php endif; ?>
									</ul>
									<?php endif; ?>

							</div>
                     
                  			 <div class="col-md-8"   align="right" >
                  			 <?php
								$btn1 = " background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #001470;  margin-top: 15px; ";
								$btn2 = " background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #001470;  margin-top: 15px; ";
								$btn3 = " background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #001470;  margin-top: 15px; ";
													 
								$btntxt1 = " #000; ";
								$btntxt2 = " #000; ";
								$btntxt3 = " #000; ";
													 
									
									if($typedata == "รอตรวจสอบ"){
										$btn1 = " background-color: #FF8C00; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 15px; "; 
										$btntxt1 = " #FFF; ";
									}if($typedata == "อนุมัติ"){
										$btn2 = " background-color: #006400; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #006400;  margin-top: 15px; "; 
										$btntxt2 = " #FFF; ";
									}if($typedata == "ไม่อนุมัติ"){
										$btn3 = " background-color: #FF0000; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #FF0000;  margin-top: 15px; "; 
										$btntxt3 = " #FFF; ";
									}
													 
													 
								?>
                  			  <a href="check_contact_onoff.php?searchname=<?php echo $_GET["searchname"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname4=<?php echo $_GET["searchname4"]; ?>&searchname3=<?php echo $_GET["searchname3"]; ?>&typedata=รอตรวจสอบ">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?>  "> <font color="<?php echo $btntxt1; ?>" size="2px" class="serif1" >  รอตรวจสอบ  </font> </button> 

							  </a>

                  			  <a href="check_contact_onoff.php?searchname=<?php echo $_GET["searchname"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname4=<?php echo $_GET["searchname4"]; ?>&searchname3=<?php echo $_GET["searchname3"]; ?>&typedata=อนุมัติ">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn2; ?>   "> <font color="<?php echo $btntxt2; ?>" size="2px" class="serif1" >  อนุมัติ  </font> </button> 

							  </a>

                  			  <a href="check_contact_onoff.php?searchname=<?php echo $_GET["searchname"]; ?>&searchname2=<?php echo $_GET["searchname2"]; ?>&searchname4=<?php echo $_GET["searchname4"]; ?>&searchname3=<?php echo $_GET["searchname3"]; ?>&typedata=ไม่อนุมัติ">

							  <button type="button" class="btn btn-primary" style=" <?php echo $btn3; ?>  "> <font color="<?php echo $btntxt3; ?>" size="2px" class="serif1" >  ไม่อนุมัติ  </font> </button> 

							  </a>
                  			 </div>
                  			  
                   			 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1600px;"    >
							    <thead> 
								<tr>
								<th width="3%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
								<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อร้านค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รายการสินค้า   </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภทสินค้า   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ความจุ     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคารวมผ่อน     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาทุน     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าสัญญา     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  %     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าคอม     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>  
								
								  
 
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะตรวจสอบ     </font></div></th> 
								
								 
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไขสัญญา   </font></div></th>  
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

											$i = ( ($_GET["page2"]-1) * 15 ) + 1; 
										}
									   
										$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
												Inner Join customer b On   a.customer = b.pk
												Inner Join product c On   c.pk = a.menu_id
												where a.bill_no != '' 
												".$addcode.$addcode2.$addcode3."  
												order by a.pk desc   limit {$start} , {$perpage}   ";  
															  
															  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											 
												 $pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];
											
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"];  
												$c_status = $objResult2["c_status"];  
											
											
												$name_create = "-"; 
												$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
														$name_create =  $objResult["name"];
												}
												$name_create_contact = "-"; 
												$sql = "SELECT * FROM member_all where pk = '".$objResult2["contactstatus_name"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
														$name_create_contact =  $objResult["name"];
												}
											   
											   
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_create5 = "-"; 
												$name_create6 = "-"; 
												$name_create7 = "-"; 
												$showclose5 = "-"; 
												$name_major = "-"; 
												$name = "";
												$nstorerage = "";
												$codeno = "";
												$appleid = "";
												$password = "";
												$note = "";
												$price1 = "";
												$price2 = "";
												$totalprice = "";
												$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
														$nstorerage = $objResult["storerage"];
														$name = $objResult["name"];
														$codeno = $objResult["codeno"];
														$appleid = $objResult["appleid"];
														$password = $objResult["password"];
														$note = $objResult["note"];
														$price1 = $objResult["price1"];
														$price2 = $objResult["price2"];
														$totalprice = $objResult["totalprice"]; 

														$sql_c = " SELECT * FROM major where pk = '".$objResult["major"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
															$name_major =  $objResult_c["name"];
														} 


														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata4 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata3 =  $objResult_c["name"];
														}

														$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
														$query_chk = mysqli_query($objCon,$sql_chk); 
														while($objResult_chk = mysqli_fetch_array($query_chk))
														{
															$showclose5 = $objResult_chk["name"];   
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
											 
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name; ?>   </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_typedata4; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $showclose5; ?>   </font></div></td> 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["priceorder"]); ?>    </font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneycontact"]); ?>      </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["percent"]); ?>      % </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["computer"]); ?>      </font></div></td>
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										   <?php echo number_format(0+$pricecal); ?> 
										
										</font></div></td>
										  
									 
										   
									   <td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
									    
										<?php if($objResult2["contactstatus"] == "รอตรวจสอบ" ){ ?> 
										
										<select class="form-control " style="background-color: #006400; color: white; font-size: 12px; " id="contact_status<?php echo $objResult2["pk"]; ?>" name="contact_status<?php echo $objResult2["pk"]; ?>" onChange="showUsercontact<?php echo $objResult2["pk"]; ?>(this.value)"  > 
											<option value="รอตรวจสอบ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอตรวจสอบ </font></option> 
											
											<option value="อนุมัติแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติ </font></option> 
											
											<option value="ไม่อนุมัติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ไม่อนุมัติ </font></option>       
										</select>  
										
										
										<font size="2px" id="contacttxt<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="display: none; ">   </font>
									
									
										<?php }else if($objResult2["contactstatus"] == "" ){ ?> 
										
										<select class="form-control " style="background-color: #006400; color: white; font-size: 12px; " id="contact_status<?php echo $objResult2["pk"]; ?>" name="contact_status<?php echo $objResult2["pk"]; ?>" onChange="showUsercontact<?php echo $objResult2["pk"]; ?>(this.value)"  > 
											<option value="รอตรวจสอบ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอตรวจสอบ </font></option> 
											
											<option value="อนุมัติแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติ </font></option> 
											
											<option value="ไม่อนุมัติ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ไม่อนุมัติ </font></option>       
										</select>  
										
										
										<font size="2px" id="contacttxt<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="display: none; ">   </font>
										<?php }else if($objResult2["contactstatus"] == "อนุมัติแล้ว"){  ?>
 
										<font size="2px" id="contacttxt<?php echo $objResult2["pk"]; ?>" class="serif2" color="#06400" style="  "> อนุมัติแล้ว </font>
									
									
										<?php }else if($objResult2["contactstatus"] == "ไม่อนุมัติ"){  ?>
										 
										<font size="2px" id="contacttxt<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="   "> ไม่อนุมัติ </font>
									
										
										<?php } ?>
									  
											    <!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณายืนยันการ ยกเลิกสัญญา <?php echo $objResult2["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	หมายเหตุ  <br> 
													ถ้าทำการกดยกเลิกสัญญาแล้ว รายการสินค้าจะถูกนำเข้าไปสต๊อกแบบเดิม
													และจะไม่สามารถใช้เลขที่สัญญาเดิมได้ หรือ ทำการแก้ไขอย่างอืนไม่ได้อีก
													โปรดตรวจสอบให้แน่ใจว่าได้ทำการตรวจสอบดีแล้ว
												 	
												 </font>
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	
												 	<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
												 	 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  ยกเลิกสัญญา   </font> </button>  </a>

							 					 
							 					     <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่ยกเลิกสัญญา  </font> </button> </a>
												 	 
												 </div>
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
									 
										<input type="hidden" id="savebill_nocontact<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
										<script> 
										function 
										CanceldataNo<?php echo $objResult2["pk"]; ?>( ) {
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
										}
											
										function 
										Canceldata<?php echo $objResult2["pk"]; ?>( ) {
											var save_key = document.getElementById("savebill_nocontact<?php echo $objResult2["pk"]; ?>").value;
											 
												 check_status_save = "ไม่อนุมัติ";
												 
												document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").style.display = "block";

												document.getElementById("contact_status<?php echo $objResult2["pk"]; ?>").style.display = "none";


												document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").innerHTML  = check_status_save;

											
											//// alert( "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key );
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												// alert(result);

												}
												});
												 
											document.getElementById("fulledit<?php echo $objResult2["pk"]; ?>").style.display = "none";
											 
											  
										}
											
										function 
										showUsercontact<?php echo $objResult2["pk"]; ?>(str) {

											var save_key = document.getElementById("savebill_nocontact<?php echo $objResult2["pk"]; ?>").value;
											
											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
											if(check_status=="อนุมัติแล้ว"){  

												 check_status_save = "อนุมัติแล้ว";
												 
											document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").style.display = "block";
												
											document.getElementById("contact_status<?php echo $objResult2["pk"]; ?>").style.display = "none";
												
											document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").innerHTML  = check_status_save;
												
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);

												}
												});
												 
												
											}else if(check_status=="ไม่อนุมัติ"){ 
												 
												
												 $(document).ready(function(){ 
													$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
												 });   
												
											/*
												 check_status_save = "ไม่อนุมัติ";
												 
											document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").style.display = "block";

											document.getElementById("contact_status<?php echo $objResult2["pk"]; ?>").style.display = "none";


											document.getElementById("contacttxt<?php echo $objResult2["pk"]; ?>").innerHTML  = check_status_save;
												  
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {
												//alert(result);

												}
												});
												 
											document.getElementById("fulledit<?php echo $objResult2["pk"]; ?>").style.display = "none";
											*/
												
												
											} 

											 
										}
									    </script>
									
										</font></div></td>
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"> <font size="3px" color="Black" style=" font-size: 13px; " >  &nbsp;
									    
									   <?php  if($objResult2["closebill"] == "เป็นหนี้"){  //// เป็นหนี้   ?>
									      
										<a href="contact_edit_full.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "   id="fulledit<?php echo $objResult2["pk"]; ?>">
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										แก้ไข   
										</font>  
										</a> 
									     
									   <?php } ?> 
									    &nbsp;
										</font></div></td>
										   
										   
										</tr>  
										<?php $i++;  } ?>
									</tbody>
   
							</table>  
							</div>
						  </div>
                  	  
                   	  <?php }  ?>
                         
                          
						 
                         
                          
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