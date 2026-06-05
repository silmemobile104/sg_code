<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}


	$searchname2 = "1"; 


	$tpedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$tpedata = $_GET["typedata"];
	}	



	$month = "";
	if(empty($_GET["month"])){
		
	}else{
		$month = $_GET["month"];
	}
 	 
	$year = "";
	if(empty($_GET["year"])){
		
	}else{
		$year = $_GET["year"];
	}
 	 
	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
		
	}else{
		$searchname = $_GET["searchname"]; 
		 
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
		  
	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
		
	}else{
		$searchname2 = $_GET["searchname2"];
		 
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}

	$alldata = "";
	if(empty($_GET["alldata"])){
		
	}else{
		$alldata = $_GET["alldata"];
	}

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ติดตามเครือง(จากการฟ้องคดี)   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ติดตามเครือง(จากการฟ้องคดี)  </font>   
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
                     <font size="4px" color="#000000">  ติดตามเครือง(จากการฟ้องคดี)   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
							<form action="npl_order.php" method="get" >
                    	    <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/เลขทีสัญญา/รหัสลูกค้า    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td>  
										<td width="40%">
										
										
										<a href="npl_order.php?alldata=all"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										
										
										</td>  
									</tr>
								</table>  
							</div>
                            <div class="col-lg-12"  align="right"   >  </div>
							</form> 
                            
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
                        
				  		 	 <script>  
						  	 function myFunction1() 
							 {
							  var getadata = document.getElementById("searchtype").value; 
							 
								 if(getadata == "ประเภทเดือนปี"){
									  document.getElementById("showsearchdata1").style.display = "block";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "1";
								 }else if(getadata == "ประเภทวัน"){ 
									  document.getElementById("showsearchdata2").style.display = "block";
									  document.getElementById("showsearchdata1").style.display = "none";
									 
									  document.getElementById("typeselect").value = "2";
								 }else{ 
									  document.getElementById("showsearchdata1").style.display = "none";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "";
								 }
							 } 
						  </script>
                            
                            
                   		 	<div class="col-lg-5"  align="left"  > 
                    	
							<table width="50%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
										 <?php  if(empty($searchtype)){   ?>
											<option value="">  ประเภทการค้นหา    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM drop_type  where name = '".$searchtype."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_type  where name != '".$searchtype."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>  
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  
										</td>    
									</tr>
							</table>  
                  		 
							</div>  
                  		 	
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                             
                  		  	<?php
								$hd1 = " display: none; ";						 
								$hd2 = " display: none; ";	
													 
								if($searchtype == "ประเภทเดือนปี"){
									$hd1 = " display: block; ";
								}else if($searchtype == "ประเภทวัน"){
									$hd2 = " display: block; ";
								}
								   
							?>
                    		<form action="npl_order.php" method="get">
                    		<input type="hidden" name="searchtype" value="ประเภทเดือนปี"  >
                    		<input type="hidden" name="searchname3" value="<?php echo $searchname3; ?>"  >
                    		<div id="showsearchdata1" style=" <?php echo $hd1; ?>  "   class="col-lg-5"  align="left"  > 
							<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     >  
											<?php if(empty($month)){ ?>
											<option value="">  เลือกเดือน    </option> 
											<?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM month   where  statusdata = '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM month   where  statusdata != '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										   
										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกปี    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="year" name="year" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
											<?php if(empty($year)){ ?>
											<option value="">  เลือกปี    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM year where  year = '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM year where  year != '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>	 
							</table>  
							</div> 
							</form> 
                   		
                    		<form action="npl_order.php" method="get"> 
                    		<input type="hidden" name="searchtype" value="ประเภทวัน"  >
                    		<input type="hidden" name="searchname3" value="<?php echo $searchname3; ?>"  >
                   		    <div id="showsearchdata2" style="  <?php echo $hd2; ?> "   class="col-lg-5"  align="left"  > 
							<table width="100%">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 
										</td> 
									</tr>
							</table> 
							</div>
							</form> 
                     
                           
                            <div class="col-lg-12"  align="right"   >  </div>
                            
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
									$addcode2 = "";  
 
									$addcode3 = ""; 
									if(empty($_GET["typedata"])){
									}else if(($_GET["typedata"] == "คลิก")){	
										$addcode3 = " and closebill != 'หมดหนี้'  ";
										
									}else if(($_GET["typedata"] == "คืนเครื่อง")){	

										$addcode3 = " and typenpl1 = 'คืนเครื่อง'  ";

									}else if(($_GET["typedata"] == "ปิดยอด")){

										$addcode3 = " and typenpl1 = 'ปิดยอด'  ";

									}else if(($_GET["typedata"] == "กำลังดำเนินการ")){

										$addcode3 = " and npl_status = 'ดำเนินการ'  ";

									}else if(($_GET["typedata"] == "จำหน่ายแล้ว")){

										$addcode3 = " and  npl_status = 'จำหน่ายแล้ว'  ";

									}else{

									} 
 
													  
									$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
									$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 
									$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
 

									if(!empty($month)  && !empty($year)){ 

										$addcode2 = "";
										$datadate  = "01-".$month."-".$year;				   
										$datadate2  = "31-".$month."-".$year;	


										$contactstart = date("Y-m-d", strtotime($datadate));  
										$checkend = date("Y-m-d", strtotime($datadate2)); 

										$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";
									} 
													 
												
									if(!empty($_GET["alldata"])){ 
										$addcode2 = "";
									}
									if(empty($_GET["searchname3"])){

									}else{
										$addcode = " and (  b.name like '%".$searchname3."%' or a.bill_no like '%".$searchname3."%'   or a.codecustomer like '%".$searchname3."%'  )  ";
										$addcode2 = "";
									}
													  
	 

								$sql2 = "SELECT a.*, b.name FROM list_order  a
								Inner Join customer b On   a.customer = b.pk
								where a.bill_no != ''   and a.onoff_copy = 'NPL'  and a.contactstatus = 'อนุมัติแล้ว'  ".$addcode.$addcode2.$addcode3."  
								order by a.pk asc    ";   
												 	 
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="npl_order.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>&typedata=<?php echo $typedata; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="npl_order.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="npl_order.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="npl_order.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="npl_order.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="npl_order.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="npl_order.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="npl_order.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="npl_order.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>&searchname3=<?php echo $searchname3; ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&alldata=<?php echo $alldata; ?>">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>

							</div>
                           
                            <?php
							$totalcal1= 0;
							$totalcal2= 0;
							$totalcal3 = 0;
							$totalcal4 = 0;
							$totalcal5 = 0;
							$endback= 0;
							$sql2 = " SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''   and a.onoff_copy = 'NPL'  and a.contactstatus = 'อนุมัติแล้ว'  ".$addcode.$addcode2."  
							order by a.pk asc ";   
													 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 
											
								$priceorder = $objResult2["priceorder"];    
								$c_price_back = $objResult2["c_price_back"];  
								$moneydown = $objResult2["moneydown"];    
									
							 
  
								if($objResult2["typenpl1"] == "คืนเครื่อง"){
									$totalcal1++;
								}
								if($objResult2["typenpl1"] == "ปิดยอด"){
									$totalcal2++;
								}
								if($objResult2["npl_status"] == "ดำเนินการ"){
									$totalcal3++;
								}
								if($objResult2["npl_status"] == "จำหน่ายแล้ว"){
									$totalcal4++;
								}
								
								if($objResult2["closebill"] != "หมดหนี้"){
									$totalcal5++; 
								}
							}
							?>
                            <div class="col-lg-8"  align="right"  id="showcalsumdata"   >
                            
							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=คลิก&alldata=<?php echo $alldata; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  คลิก <?php echo number_format(0+$totalcal5); ?>  </font> 
							</button> 
							</a>
							
							  
							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=คืนเครื่อง&alldata=<?php echo $alldata; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  คืนเครื่อง <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ปิดยอด&alldata=<?php echo $alldata; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ปิดยอด <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=กำลังดำเนินการ&alldata=<?php echo $alldata; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  กำลังดำเนินการ <?php echo number_format(0+$totalcal3); ?>    </font> 
							</button>
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=จำหน่ายแล้ว&alldata=<?php echo $alldata; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #4B0082; border-radius: 5px; height: 40px; border: 1px solid  #4B0082;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  จำหน่ายแล้ว <?php echo number_format(0+$totalcal4); ?>    </font> 
							</button>
							</a>
							</div>
                           
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 2050px;"    >
							    <thead> 
								  <tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>        
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>  
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีชำระล่าสุด     </font></div></th>   
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คืนเครือง/ปิดยอดหนี้     </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบลดหนี้     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบคืนเครื่อง     </font></div></th> 
									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสินค้า     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะของดดี     </font></div></th> 
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะตัวเครื่อง     </font></div></th> 


									<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบเสร็จ   </font></div></th> 
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
								$pricetotal = 0; 
								$pricetotal2 = 0; 

								if (empty($_GET['page2'])) { 
									$i = 1;
								}else if (($_GET['page2'] == 1)) { 
									$i = 1;
								}else{

									$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
								}

								$sql2 = " SELECT a.*, b.name FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									where a.bill_no != ''   and a.onoff_copy = 'NPL'  and a.contactstatus = 'อนุมัติแล้ว'   ".$addcode.$addcode2.$addcode3."  
									order by a.pk asc limit {$start} , {$perpage}   ";   
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
									$pricetotal = 0; 
									$pricetotal2 = 0; 

									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									}
									
									/// ปิดยอด

									$totalprice1 = $objResult2["money"]; 
									$totalprice2 = $objResult2["daytotal"]; 
									$totalprice3 = $objResult2["dayprice"];  
									$totalprice4 = $objResult2["startdate"]; 
									$totalprice5 = $objResult2["endate"];    

									$priceorder = $objResult2["priceorder"];  
									
									$computer2 = $objResult2["computer2"] + $objResult2["moneydown"]; 
									
									
									$typenpl1 = $objResult2["typenpl1"];  
									$typenpl2 = $objResult2["typenpl2"];  
									$discount = $objResult2["discount"];  
									$note = $objResult2["note"];  
									$moneydown = $objResult2["moneydown"]; 

									$n_cancel= $objResult2["n_cancel"];   
									$n_total = $objResult2["n_total"];   
									$n_priceback = $objResult2["n_priceback"];   
									$n_total_price_no = $objResult2["n_total_price_no"];   
									$n_addon_price = $objResult2["n_addon_price"];   


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
										$name_create2  =  $objResult["name"];
										$name_create3  =  $objResult["codeno"];
									}


									$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_major =  $objResult_c["name"];
									}


									$dis_show = 0;
									$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $objResult2["bill_no"] ."' ";  
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{  
										$dis_show += $objResult["price"];   
									}

									

									$chk_total = 0;
									$priceback = 0;
									$countloopnopay = 0;
									$date_payment = "";

									$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
									$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
									$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									// $sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"] ."'  ".$code_check2." "; 
									  $sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"] ."'  "; 
									 
									///  echo $sql_npl . " <bR> ";
									
									$query_npl = mysqli_query($objCon,$sql_npl); 
									while($objResult_npl = mysqli_fetch_array($query_npl))
									{   
										if(!empty($objResult_npl["income"])){ 
											$priceback += $objResult_npl["income"];

											///$countloopnopay = 0;

											$date_payment = $objResult_npl["create_date2"];
										}else{ 
											///$countloopnopay++;
										} 


										/*
										 if($countloopnopay >= 5){ 
											if(!empty($objResult_npl["income"])){  
													$chk_total = 0; 
											}else{
													$chk_total++;
											} 
										 }
										 */
										
										
										if(!empty($objResult_npl["income"])){   
											$countloopnopay = 0;
											$chk_total = 0;
										}else{
											$countloopnopay++;
										} 
										
										if($countloopnopay >= 5){ 
										if(!empty($objResult_npl["income"])){  
												$chk_total = 0; 
											
												$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$objResult2["bill_no"]."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
												$query = mysqli_query($objCon,$sql); 
												while($objResult = mysqli_fetch_array($query))
												{ 
													$checkpaymentday = "OFF"; 
												}

												if($checkpaymentday == "OFF"){ 
													$countloopnopay = 0;
													$chk_total = 0; 
												}else{ 
													$chk_total++;
												}
											
										}else{
												$chk_total++;
										} 
									}	 
										

									}	 	


									$pricetotal = ($totalprice3*$totalprice2) - $priceback - $moneydown;
									$pricetotal2 = $priceorder - $priceback - $moneydown;
									$pricetotal3 = $pricetotal2 + ($chk_total*50);


									//// $cal1 = $computer2-$moneydown-$n_pricebackl;
									 $cal1 = $priceorder-$moneydown-$n_pricebackl;
									
									
									/// $cal2 = $cal1 - ($chk_total*50); 

									if(!empty($chk_total)){ 
										$n_total_price_no = ($chk_total*50) - $dis_show;
									} 
									
								    $cal2 = $cal1 + ($n_total_price_no); 
									$cal3 = $cal2 - $discount;
									$cal4 = $cal3 - $n_cancel;
									
									 /*
									$total_dis = ($chk_total*50)-$dis_show;
									 if($total_dis <= 0){
										 $total_dis = 0;
									 }
									 */


									$c_cal0 = ($totalprice3*$totalprice2) - $priceback; 
									$c_cal1 = $pricetotal;
									$c_cal2 = $n_total_price_no;
									$c_cal3 = $c_cal1 + $c_cal2;
									$c_cal4 = $c_cal3 - $discount;
								?>
										<tr style="background-color: <?php echo $bg ?>; "> 
											
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
								
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a>    
										      
										</font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										<?php 
											if(!empty($date_payment)){
												 echo DateThai($date_payment)." ".DateThai2($date_payment); 
											}
										?>   
										</font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      
										 
										<?php if(empty($typenpl1)){ ?> 
										<?php if($objResult2["closebill"] == "เป็นหนี้"){ ?>
										<a id="btn1<?php echo $i; ?>" data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn  btn-sm " style="cursor: pointer;  background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										คลิก   
										</font>  
										</a> 
										<?php }else{  ?> 
										<a  id="btn4<?php echo $i; ?>" data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>"  class=" btn  btn-sm " style="cursor: pointer;  background-color: #FF0000; border-radius: 5px;  width: 70px; border-color: #FF0000; border: 1px solid  #FF0000;  " >
										<font size="3px" color="#FFF" style=" font-size: 13px; " id="showtxtclose<?php echo $i; ?>" >  
											หมดหนี้
										</font>  
										</a> 
										<?php } ?>
										
										<a  id="btn2<?php echo $i; ?>" data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>"  class=" btn  btn-sm " style="cursor: pointer;  background-color: #FF0000; border-radius: 5px;  width: 70px; border-color: #FF0000; border: 1px solid  #FF0000; display: none; " >
										<font size="3px" color="#FFF" style=" font-size: 13px; " id="showtxtclose<?php echo $i; ?>" >  <?php echo $typenpl1; ?>    
										</font>  
										</a> 
										
										
										<a  id="btn3<?php echo $i; ?>" data-toggle="modal" data-target="#smallmodalthree<?php echo $i; ?>"  class=" btn  btn-sm " style="cursor: pointer;  background-color: #006400; border-radius: 5px;  width: 70px; border-color: #006400; border: 1px solid  #006400; display: none; " >
										<font size="3px" color="#FFF" style=" font-size: 13px; " id="showtxtclosethree<?php echo $i; ?>" >  <?php echo $typenpl1; ?>    
										</font>  
										</a> 
										
										<?php }else if($typenpl1 == "คืนเครื่อง"){  ?>  
										<a data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>"  class="btn  btn-sm " style="cursor: pointer;  background-color: #FF0000; border-radius: 5px;  border-color: #FF0000; border: 1px solid  #FF0000;   " >
										<font size="3px" color="#FFF" style=" font-size: 13px; " > 
										<?php echo $typenpl1; ?>   
										</font>  
										</a>  
										<?php }else if($typenpl1 == "ปิดยอด"){  ?>  
										<a data-toggle="modal" data-target="#smallmodalthree<?php echo $i; ?>"  class="btn  btn-sm " style="cursor: pointer;  background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;   " >
										<font size="3px" color="#FFF" style=" font-size: 13px; " > 
										<?php echo $typenpl1; ?>   
										</font>  
										</a> 
										<?php } ?>
										
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> รายการ <?php echo $objResult2["bill_no"]; ?>  </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left"   >   
											<font size="3px" color="black" style="font-size: 14px;">   

											<input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
											<div class="col-lg-12" style="margin-top: 5px;" align="center">   
												 	 
												 	
												 	 <a onClick="Paymentone<?php echo $i; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  คืนเครือง     </font> </button>  </a>

							 					 
							 					     <a onClick="Paymenttwo<?php echo $i; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ปิดยอด  </font> </button> </a>
												 	 
												 </div>
										 
										
											 <div id="showcontactsave<?php echo $i; ?>" class="col-lg-12" style="margin-top: 5px; display: none; " align="center">   
									 	  
										 	  <div class="col-md-12"  >  <hr>	  </div> 
										 	  <div class="col-md-12"  >  <font color = '#FF0000' size="3px" > คืนเครื่อง </font> 	 </div> 
										 
										 	   <div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หมายเลขเครือง </font>   
												  <input type="text" class="form-control" id="data<?php echo $i;?>" name="data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $name_create3; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   >
												</div>
											   </div> 
											   
										 	   <div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > วันที่ทำรายการ </font>   
												  <input type="text" class="form-control current " id="datesavedata1<?php echo $i;?>" name="datesavedata1<?php echo $i;?>"  autocomplete="off" required value="<?php echo date('d/m')."/".(date('Y')); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   >
												</div>
											   </div> 
											   
											  <div class="col-md-12"  >  </div> 
												 
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ราคาทุน </font>   
												  <input type="text" class="form-control" id="1data<?php echo $i;?>" name="1data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo $priceorder; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
												 		
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > เงินดาวน์ </font>   
												  <input type="text" class="form-control" id="2data<?php echo $i;?>" name="2data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo  $moneydown; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > จ่ายค่างวด </font>   
												  <input type="text" class="form-control" id="3data<?php echo $i;?>" name="3data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $n_priceback; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดคงเหลือ </font>   
												  <input type="text" class="form-control" id="4data<?php echo $i;?>" name="4data<?php echo $i;?>"  autocomplete="off" required value="<?php echo number_format(0+$cal1); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดค่าปรับสะสม </font>   
												  <input type="text" class="form-control" id="5data<?php echo $i;?>" name="5data<?php echo $i;?>"  autocomplete="off" required 
												  value="<?php echo $n_total_price_no; ?>" readonly    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > รวม </font>   
												  <input type="text" class="form-control" id="6data<?php echo $i;?>" name="6data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo number_format(0+$cal2); ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ส่วนลด </font>   
												  <input type="text" class="form-control" id="7data<?php echo $i;?>" name="7data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $discount; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > เหลือ </font>   
												  <input type="text" class="form-control" id="8data<?php echo $i;?>" name="8data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo number_format(0+$cal3); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ค่าเสื่อม </font>   
												  <input type="text" class="form-control" id="81data<?php echo $i;?>" name="81data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo $n_cancel; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > (ค่าใช่จ่ายดำเนินคดี) </font>   
												  <input type="text" class="form-control" id="83data<?php echo $i;?>" name="83data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo $n_addon_price; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   <div class="col-md-3" style="display: none; "  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดเงินคงเหลือ </font>   
												  <input type="text" class="form-control" id="82data<?php echo $i;?>" name="82data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo number_format(0+$cal4); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
									
											   <div class="col-md-12"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หมายเหตุ </font>   
												  <input type="text" class="form-control" id="9data<?php echo $i;?>" name="8data<?php echo $i;?>"  autocomplete="off"     value="<?php echo $note; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " >
												</div>
											   </div> 
								 			
								 			
									 			<div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > สถานะคดี </font>   
												 	  <select class="form-control" id="10data<?php echo $i;?>" name="10data<?php echo $i;?>" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >  
														<?php 
														$sql = "SELECT * FROM drop_type_npl where name = '".$typenpl2."' order by pk asc  "; 
														$query = mysqli_query($objCon,$sql);
														while($objResult = mysqli_fetch_array($query))
														{ 
														?>
														<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
														<?php  
														}
														?>   
														<?php 
														$sql = "SELECT * FROM drop_type_npl where name != '".$typenpl2."' order by pk asc  "; 
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
										
											    <div class="col-md-12"  > 
											   
											    <div class="col-md-12" align="center" style=" margin-top: 15px; "  > 
											     
											    <a data-toggle="modal" data-target="#Savepayment<?php echo $i; ?>"   class="btn btn-sm btn-primary"  style="cursor: pointer;  background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;  width: 120px; height: 40px;    " >
											    <font size="3px" color="#FFF" style=" font-size: 18px; " > 
												บันทึกข้อมูล   
												</font>  
												</a> 
											   
											   	<!-- modal small -->
												<div class="modal fade" id="Savepayment<?php echo $i; ?>" tabindex="-2" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document" style="margin-top: 100px;">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="smallmodalLabel"> กรุณายืนยันทำรายการ <?php echo $objResult2["bill_no"]; ?>  </h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<div class="col-lg-12" align="left"   >   
												<font size="3px" color="black" style="font-size: 14px;">   

												<input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >

												<div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	หมายเหตุ  <br> 
													กรุณาตรวจสอบรายการก่อนกดบันทึก เพราะเมื่อกดบันทึกรายการแล้ว จะไม่สามารถแก้ไขรายการได้อีก
												 	
												 </font>
												  
												</div> 
											
											
												<div class="col-lg-12" style="margin-top: 15px;" align="center">   
												 	
												 	<input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
												 	 <a onClick="Saveconfrim<?php echo $i; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  บันทึกรายการ   </font> </button>  </a>

							 					     <a onClick="Saveconfrimcancel<?php echo $i; ?>()" >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "  > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button>    </a>
												 	 
												 </div>
													  
												</font> 
												</div>  
												</div> 
												</div> 
												</div> 
												</div> 
												
											 	</div> 
											
											 
											</div> 
											</div>
											
											
										
										    <div id="showcontactsavetwo<?php echo $i; ?>" class="col-lg-12" style="margin-top: 5px; display: none; " align="center">   
											
										 	  <div class="col-md-12"  >  <hr>	  </div> 
										 	  <div class="col-md-12"  >  <font color = '#006400' size="3px" > ปิดยอด </font> 	 </div> 
										 	  
										 	  
										 	   <div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หมายเลขเครือง </font>   
												  <input type="text" class="form-control" id="data<?php echo $i;?>" name="data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $name_create3; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   >
												</div>
											   </div> 
											   
										 	   <div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > วันที่ทำรายการ </font>   
												  <input type="text" class="form-control current " id="datesavedata11<?php echo $i;?>" name="datesavedata11<?php echo $i;?>"  autocomplete="off" required value="<?php echo date('d/m')."/".(date('Y')); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   >
												</div>
											   </div> 
											   
											  <div class="col-md-12"  >  </div> 
												 
											   <div class="col-md-3" style="display: none; "  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ราคาทุน </font>   
												  <input type="text" class="form-control" id="11data<?php echo $i;?>" name="1data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo $priceorder; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 
												 		
											   <div class="col-md-3"  style="display: none; "  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > เงินดาวน์ </font>   
												  <input type="text" class="form-control" id="22data<?php echo $i;?>" name="2data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo  $moneydown; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  style="display: none; "  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > จ่ายค่างวด </font>   
												  <input type="text" class="form-control" id="33data<?php echo $i;?>" name="3data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $c_cal1; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หนี้คงค้างทั้งหมด </font>   
												  <input type="text" class="form-control" id="44data<?php echo $i;?>" name="4data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $c_cal0; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ค่าปรับ </font>   
												  <input type="text" class="form-control" id="55data<?php echo $i;?>" name="5data<?php echo $i;?>"  autocomplete="off" required 
												  value="<?php echo $c_cal2; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > รวม </font>   
												  <input type="text" class="form-control" id="66data<?php echo $i;?>" name="6data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo number_format(0+$c_cal0+$c_cal2); ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ส่วนลด </font>   
												  <input type="text" class="form-control" id="77data<?php echo $i;?>" name="7data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $discount; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > (ค่าใช่จ่ายดำเนินคดี) </font>   
												  <input type="text" class="form-control" id="89data<?php echo $i;?>" name="89data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo $n_addon_price; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดปิดหนี้ทั้งหมด </font>   
												  <input type="text" class="form-control" id="88data<?php echo $i;?>" name="8data<?php echo $i;?>"  autocomplete="off" required   value="<?php echo ($c_cal0+$c_cal2); ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge2<?php echo $i; ?>()">
												</div>
											   </div> 
									
											   <div class="col-md-12"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หมายเหตุ </font>   
												  <input type="text" class="form-control" id="99data<?php echo $i;?>" name="8data<?php echo $i;?>"  autocomplete="off"     value="<?php echo $note; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " >
												</div>
											   </div> 
								 			
								 			
									 			<div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > สถานะคดี </font>   
												 	  <select class="form-control" id="1010data<?php echo $i;?>" name="1010data<?php echo $i;?>" required  style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    >  
														<?php 
														$sql = "SELECT * FROM drop_type_npl where name = '".$typenpl2."' order by pk asc  "; 
														$query = mysqli_query($objCon,$sql);
														while($objResult = mysqli_fetch_array($query))
														{ 
														?>
														<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
														<?php  
														}
														?>   
														<?php 
														$sql = "SELECT * FROM drop_type_npl where name != '".$typenpl2."' order by pk asc  "; 
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
										
											    <div class="col-md-12"  > 
											   
											    <div class="col-md-12" align="center" style=" margin-top: 15px; "  > 
											     
											    <a data-toggle="modal" data-target="#Savepaymenttwo<?php echo $i; ?>"   class="btn btn-sm btn-primary"  style="cursor: pointer;  background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;  width: 120px; height: 40px;    " >
											    <font size="3px" color="#FFF" style=" font-size: 18px; " > 
												บันทึกข้อมูล   
												</font>  
												</a> 
											   
											   	<!-- modal small -->
												<div class="modal fade" id="Savepaymenttwo<?php echo $i; ?>" tabindex="-2" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document" style="margin-top: 100px;">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="smallmodalLabel"> กรุณายืนยันทำรายการ <?php echo $objResult2["bill_no"]; ?>  </h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												</div>
												<div class="modal-body">
												<div class="col-lg-12" align="left"   >   
												<font size="3px" color="black" style="font-size: 14px;">   

												<input type="hidden" id="savebill_notwo<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >

												<div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	หมายเหตุ  <br> 
													กรุณาตรวจสอบรายการก่อนกดบันทึก เพราะเมื่อกดบันทึกรายการแล้ว จะไม่สามารถแก้ไขรายการได้อีก
												 	
												 </font>
												  
												 </div> 
											
											
												<div class="col-lg-12" style="margin-top: 15px;" align="center">   
												 	
												 	<input type="hidden" id="savebill_notwo<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
												 	
												 	 <a onClick="Saveconfrimtwo<?php echo $i; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  บันทึกรายการ   </font> </button>  </a>

							 					     <a onClick="Saveconfrimcanceltwo<?php echo $i; ?>()" >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "  > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button>    </a>
												 	 
												 </div>
													  
												</font> 
												</div>  
												</div> 
												</div> 
												</div> 
												</div> 
												
											 	</div> 
											
											 
											</div> 
										 	  
										 	  
											</div>
											
											
											
											
											
											</div>
											</div>
										</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										<script>
										function 
										Paymentone<?php echo $i; ?>( ) {
											var save_key = document.getElementById("savebill_no<?php echo $i; ?>").value;
											document.getElementById("showcontactsave<?php echo $i; ?>").style.display = 'block';
											document.getElementById("showcontactsavetwo<?php echo $i; ?>").style.display = 'none';
											 
											
										}
										function 
										Paymenttwo<?php echo $i; ?>( ) {
											var save_key = document.getElementById("savebill_no<?php echo $i; ?>").value;
											
											document.getElementById("showcontactsavetwo<?php echo $i; ?>").style.display = 'block';
											document.getElementById("showcontactsave<?php echo $i; ?>").style.display = 'none';
											
										 
										}
										function
										Saveconfrimcancel<?php echo $i; ?>( ) {
										  
											$(document).ready(function(){ 
											$('#Savepayment<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});    
											
										}
										function
										Saveconfrimcanceltwo<?php echo $i; ?>( ) {
										  
											$(document).ready(function(){ 
											$('#Savepaymenttwo<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});    
											
										}
										function
										Saveconfrim<?php echo $i; ?>( ) { 
										 
											var data1 = document.getElementById("1data<?php echo $i; ?>").value; ///   
											var data2 = document.getElementById("2data<?php echo $i; ?>").value; ///   
											var data3 = document.getElementById("3data<?php echo $i; ?>").value; ///   
											var data4 = document.getElementById("4data<?php echo $i; ?>").value; ///   
											var data5 = document.getElementById("5data<?php echo $i; ?>").value; ///   
											var data6 = document.getElementById("6data<?php echo $i; ?>").value; ///   
											var data7 = document.getElementById("7data<?php echo $i; ?>").value; ///   
											var data8 = document.getElementById("8data<?php echo $i; ?>").value; ///  
											var data9 = document.getElementById("9data<?php echo $i; ?>").value; ///  
											var data10 = document.getElementById("10data<?php echo $i; ?>").value; ///  
											
											var data81 = document.getElementById("81data<?php echo $i; ?>").value; ///  
											var data82 = document.getElementById("82data<?php echo $i; ?>").value; ///  
											var data83 = document.getElementById("83data<?php echo $i; ?>").value; ///  
											
											
											var datesavedata1 = document.getElementById("datesavedata1<?php echo $i; ?>").value; ///  
											
											var save_key = document.getElementById("savebill_no<?php echo $i; ?>").value;
											document.getElementById("showtxtclose<?php echo $i; ?>").innerHTML = "คืนเครือง";
											document.getElementById("showtxttwo<?php echo $i; ?>").innerHTML = " <font color='#FF0000' > คืนเครือง </font> ";
											document.getElementById("showtxtthree<?php echo $i; ?>").innerHTML = ""+data10; 
											
											/*
											alert("saveconfrimnpl.php?bill_no="+save_key+"&priceorder="+data1+"&discount="+data7+"&note="+data9+"&typenpl2="+data10);
											  
											 */
											
											
											
											////////////////////////////////////
											document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
											////////////////////////////////////
											
											/*
											alert("saveconfrimnpl.php?bill_no="+save_key+"&priceorder="+data1+"&discount="+data7+"&note="+data9+"&typenpl2="+data10+"&data81="+data81+"&data82="+data82+"&n_priceback="+data3);
											*/
											
											$.ajax({
											type: "GET",
											url: "saveconfrimnpl.php?bill_no="+save_key+"&priceorder="+data1+"&discount="+data7+"&note="+data9+"&typenpl2="+data10+"&data81="+data81+"&data82="+data82+"&data83="+data83+"&n_priceback="+data3+"&n_total_price_no="+data5+"&datesavedata1="+datesavedata1,
											success: function(result) {
											 
											}
											});		
											
											
											document.getElementById("btn1<?php echo $i; ?>").style.display = 'none';
											document.getElementById("btn2<?php echo $i; ?>").style.display = 'block';
											document.getElementById("btn3<?php echo $i; ?>").style.display = 'none';
											
											  
											
											$(document).ready(function(){ 
											$('#Savepayment<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
											$(document).ready(function(){ 
											$('#smallmodal<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}
										function
										Saveconfrimtwo<?php echo $i; ?>( ) { 
										 
											var data1 = document.getElementById("11data<?php echo $i; ?>").value; ///   
											var data2 = document.getElementById("22data<?php echo $i; ?>").value; ///   
											var data3 = document.getElementById("33data<?php echo $i; ?>").value; ///   
											var data4 = document.getElementById("44data<?php echo $i; ?>").value; ///   
											var data5 = document.getElementById("55data<?php echo $i; ?>").value; ///   
											var data6 = document.getElementById("66data<?php echo $i; ?>").value; ///   
											var data7 = document.getElementById("77data<?php echo $i; ?>").value; ///   
											var data8 = document.getElementById("88data<?php echo $i; ?>").value; ///  
											var data9 = document.getElementById("99data<?php echo $i; ?>").value; ///   
											var data10 = document.getElementById("1010data<?php echo $i; ?>").value; ///   
											var data11 = document.getElementById("89data<?php echo $i; ?>").value; ///   
											
											
											var datesavedata11 = document.getElementById("datesavedata11<?php echo $i; ?>").value; ///   
											
											var save_key = document.getElementById("savebill_no<?php echo $i; ?>").value;
											document.getElementById("showtxtclosethree<?php echo $i; ?>").innerHTML = "ปิดยอด";
											document.getElementById("showtxttwo<?php echo $i; ?>").innerHTML = " <font color='#006400' >  ปิดยอด  </font> ";
											document.getElementById("showtxtthree<?php echo $i; ?>").innerHTML = ""+data10; 
											
											/*
											alert("saveconfrimnpl.php?bill_no="+save_key+"&priceorder="+data1+"&discount="+data7+"&note="+data9+"&typenpl2="+data10);
											  
											  */
											
											
											
											////////////////////////////////////
											document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printladne<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcanceltwo<?php echo $objResult2["pk"]; ?>").style.display = "block";
											////////////////////////////////////
											
											
											
											
											$.ajax({
											type: "GET",
											url: "saveconfrimnpl2.php?bill_no="+save_key+"&priceorder="+data1+"&discount="+data7+"&note="+data9+"&typenpl2="+data10+"&data11="+data11+"&totalprinend="+data8+"&datesavedata11="+datesavedata11,
											success: function(result) {
											 
											}
											});		
											 
											
											document.getElementById("btn1<?php echo $i; ?>").style.display = 'none';
											document.getElementById("btn2<?php echo $i; ?>").style.display = 'none';
											document.getElementById("btn3<?php echo $i; ?>").style.display = 'block';
											
											  
											
											$(document).ready(function(){ 
											$('#Savepaymenttwo<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
											$(document).ready(function(){ 
											$('#smallmodal<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}
										   
										function calAge1<?php echo $i; ?>()
										{   
											
											var data1 = document.getElementById("1data<?php echo $i; ?>").value; ///   
											var data2 = document.getElementById("2data<?php echo $i; ?>").value; ///   
											var data3 = document.getElementById("3data<?php echo $i; ?>").value; ///   
											var data4 = document.getElementById("4data<?php echo $i; ?>").value; ///   
											var data5 = document.getElementById("5data<?php echo $i; ?>").value; ///   
											var data6 = document.getElementById("6data<?php echo $i; ?>").value; ///   
											var data7 = document.getElementById("7data<?php echo $i; ?>").value; ///   
											var data8 = document.getElementById("8data<?php echo $i; ?>").value; ///  
											var data81 = document.getElementById("81data<?php echo $i; ?>").value; ///  
											var data82 = document.getElementById("82data<?php echo $i; ?>").value; ///   
											
											var sdata1 = 0;
											var sdata2 = 0;
											var sdata3 = 0;
											var sdata4 = 0;
											var sdata5 = 0;
											var sdata6 = 0;
											var sdata7 = 0;
											var sdata8 = 0;
											var sdata81 = 0;
											var sdata82 = 0; 
											if(data1 == ""){ 
											}else{
												sdata1 = parseInt(data1);
											}  
											if(data2 == ""){ 
											}else{
												sdata2 = parseInt(data2);
											}  
											if(data3 == ""){ 
											}else{
												sdata3 = parseInt(data3);
											}  
											if(data4 == ""){ 
											}else{
												sdata4 = parseInt(data4);
											}  
											if(data5 == ""){ 
											}else{
												sdata5 = parseInt(data5);
											}  
											if(data6 == ""){ 
											}else{
												sdata6 = parseInt(data6);
											}  
											if(data7 == ""){ 
											}else{
												sdata7 = parseInt(data7);
											}  
											if(data8 == ""){ 
											}else{
												sdata8 = parseInt(data8);
											}  
											if(data81 == ""){ 
											}else{
												sdata81 = parseInt(data81);
											}  
											if(data82 == ""){ 
											}else{
												sdata82 = parseInt(data82);
											}   
											
											 
											var cal1 = (sdata1 - sdata2 - sdata3);   /// ราคาทุน - เงินดาวน์  - จ่ายค่างวด
											var cal2 = cal1 + sdata5;  //// ยอดคงเหลือ - ยอดค่าปรับสะสม
											var cal3 = cal2 - sdata7;  
											var totalback = 0;
											  
											 
											
											document.getElementById("4data<?php echo $i; ?>").value = Commas(cal1.toFixed(0));  
											document.getElementById("6data<?php echo $i; ?>").value = Commas(cal2.toFixed(0));
											
											document.getElementById("8data<?php echo $i; ?>").value = Commas(cal3.toFixed(0));  
											document.getElementById("82data<?php echo $i; ?>").value = Commas(cal3.toFixed(0));  
										}
											
											
										function calAge2<?php echo $i; ?>()
										{   
											
											var data1 = document.getElementById("11data<?php echo $i; ?>").value; ///   
											var data2 = document.getElementById("22data<?php echo $i; ?>").value; ///   
											var data3 = document.getElementById("33data<?php echo $i; ?>").value; ///   
											var data4 = document.getElementById("44data<?php echo $i; ?>").value; ///   
											var data5 = document.getElementById("55data<?php echo $i; ?>").value; ///   
											var data6 = document.getElementById("66data<?php echo $i; ?>").value; ///   
											var data7 = document.getElementById("77data<?php echo $i; ?>").value; ///   
											var data8 = document.getElementById("88data<?php echo $i; ?>").value; ///  
											var data89 = document.getElementById("89data<?php echo $i; ?>").value; ///  
											
											var sdata1 = 0;
											var sdata2 = 0;
											var sdata3 = 0;
											var sdata4 = 0;
											var sdata5 = 0;
											var sdata6 = 0;
											var sdata7 = 0;
											var sdata8 = 0;
											var sdata9 = 0;
											if(data1 == ""){ 
											}else{
												sdata1 = parseInt(data1);
											}  
											if(data2 == ""){ 
											}else{
												sdata2 = parseInt(data2);
											}  
											if(data3 == ""){ 
											}else{
												sdata3 = parseInt(data3);
											}  
											if(data4 == ""){ 
											}else{
												sdata4 = parseInt(data4);
											}  
											if(data5 == ""){ 
											}else{
												sdata5 = parseInt(data5);
											}  
											if(data6 == ""){ 
											}else{
												sdata6 = parseInt(data6);
											}  
											if(data7 == ""){ 
											}else{
												sdata7 = parseInt(data7);
											}  
											if(data8 == ""){ 
											}else{
												sdata8 = parseInt(data8);
											}  
											if(data89 == ""){ 
											}else{
												sdata9 = parseInt(data89);
											}  
											
											var cal1 = sdata4 + sdata5;   
											var cal2 = cal1 - sdata7 + sdata9;   
											 
											document.getElementById("66data<?php echo $i; ?>").value = Commas(cal1.toFixed(0));  
											document.getElementById("88data<?php echo $i; ?>").value = (cal2.toFixed(0));  
										}

									    </script> 
									    
										</font></div></td>    
								    
								            
									    <td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($typenpl1 == "คืนเครื่อง"){
											$hdst = " display : block; ";
										}else if($typenpl1 == "ปิดยอด"){
											$hdst = " display : block; ";
										}
											
										?> 

										<a id="printladne<?php echo $objResult2["pk"]; ?>" href="print_ladnee.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์    
										</font>  
										</a> 
										 
										</font></div></td>
									            
										 <td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($typenpl1 == "คืนเครื่อง"){
											$hdst = " display : block; ";
										}else if($typenpl1 == "ปิดยอด"){
											$hdst = " display : block; ";
										}
											
										?> 

										
										<a id="printcanceltwo<?php echo $objResult2["pk"]; ?>" href="printbill_cancel.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์   
										</font>  
										</a> 
										 
										</font></div></td>
										            
										              
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="showtxttwo<?php echo $i; ?>"  >  
										<?php 
											if($typenpl1 == "คืนเครื่อง"){
												 echo    " <font color='#FF0000' >  " . $typenpl1 . " </font> ";  
											}else if($typenpl1 == "ปิดยอด"){
												 echo    " <font color='#006400' >  " . $typenpl1 . " </font> ";  
											}   
										?>   
										</font></div></td>               
										                  
										                     
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " id="showtxtthree<?php echo $i; ?>"  >  
										  <?php 
											if($typenpl2 == "ปิดบัญชีแบบดำเนินคดี"){
												 echo    " <font color='#FF0000' >  " . $typenpl2 . " </font> ";  
											}else if($typenpl2 == "ปิดบัญชีแบบปกติ"){
												 echo    " <font color='#006400' >  " . $typenpl2 . " </font> ";  
											}   
										?>    
										</font></div></td> 
									                     
									                   
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($typenpl1 == "คืนเครื่อง"){
											$hdst = " display : block; ";
										}else if($typenpl1 == "ปิดยอด"){
											$hdst = " display : block; ";
										}  	
										?>
										<select class="form-control " style="background-color: #006400; color: white; font-size: 12px; margin-top: -5px; <?php echo $hdst; ?> " id="stauts_back<?php echo $objResult2["pk"]; ?>" name="stauts_back<?php echo $objResult2["pk"]; ?>" onChange="showUserstauts_back<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										
										<?php if($objResult2["npl_status"] == ""){ ?>
										<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
											
										<option value="ดำเนินการ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ดำเนินการ </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else if($objResult2["npl_status"] == "รอการยืนยัน"){ ?>
										<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
											
										<option value="ดำเนินการ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ดำเนินการ </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else if($objResult2["npl_status"] == "ดำเนินการ"){ ?> 
										<option value="ดำเนินการ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ดำเนินการ </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else  if($objResult2["npl_status"] == "จำหน่ายแล้ว"){ ?> 
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										
										<option value="ดำเนินการ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ดำเนินการ </font></option>  
										<?php } ?> 
											   
										</select>   
										</font></div></td>
								   
								   
										<script>
										function  showUserstauts_back<?php echo $objResult2["pk"]; ?>(str) {

											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
										 
											var typedata = document.getElementById("savebill_no<?php echo $i; ?>").value;  

											var major =  document.getElementById("searchname2").value; ///    
											 
											
											
											///alert("save_cancel_bill_back4.php?bill_no="+typedata+"&status="+check_status);
												$.ajax({
													type: "GET",
													url: "save_cancel_bill_back4.php?bill_no="+typedata+"&status="+check_status,
													success: function(result) {
													  
													}
												});

												$.ajax({
													type: "GET",
													url: "showcalsumdata_npl.php?searchname2="+major,
													success: function(result) {
													$('#showcalsumdata').html(result);
													}
												});		

											
										}   
										</script>                           
									                                  
									                                    
									    <td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
											<?php  
										$hdst = " display : none; ";
										if($typenpl1 == "คืนเครื่อง"){
											$hdst = " display : block; ";
										}else if($typenpl1 == "ปิดยอด"){
											$hdst = " display : block; ";
										} 
											
										?>

										<a id="printcancel<?php echo $objResult2["pk"]; ?>" href="print_cancel2.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์   
										</font>  
										</a> 
										 
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