<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

	
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
					
					
						$searchtype = "";
						if(empty($_GET["searchtype"])){

						}else{
							$searchtype = $_GET["searchtype"];
						}
 	 
					
						$shdd1 = " display:  none; ";
						$shdd2 = " display:  none; ";
						if($searchtype == "ประเภทเดือนปี"){
							$shdd1 = "   ";
							$shdd2 = " display:  none; ";
						}
						if($searchtype == "ประเภทวัน"){
							$shdd1 = " display:  none; ";
							$shdd2 = "   ";
							
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
                     <font size="4px" color="#000000">  สถานะหนี้บัญชี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สถานะหนี้บัญชี้   </font>   
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
                     <font size="4px" color="#000000">  สถานะหนี้บัญชี้   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
					  
                 	   	<form action="reportnew30.php" method="get">
						<input type="hidden" id="typeselect" value="">
						<input type="hidden" id="onoff" value="">

						<div  align="left" class="col-md-5"  >  
							<table width="50%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px; box-shadow: none;  "   onchange="myFunction1()"    >  

										 <?php if(empty($searchtype)){ ?>
										 <option value="">  ประเภทการค้นหา    </option> 
										 <?php } ?>

											<?php 
											$sql = "SELECT * FROM drop_type  where name = '".$searchtype."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_type  where name != '".$searchtype."'  order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA; box-shadow: none;  " type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>

										</td>    
									</tr>
							</table>     


							<table width="100%" id="showsearchdata1" style=" <?php echo $shdd1; ?> ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  box-shadow: none;   "    >  
											<option value="">  เลือกเดือน    </option> 
											<?php 
											$sql = "SELECT * FROM month   order by pk asc  "; 
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
										 <select class="form-control" id="year" name="year"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  box-shadow: none;   "   >  
											<option value="">  เลือกปี    </option> 
											<?php 
											$sql = "SELECT * FROM year   order by pk asc  "; 
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none;  " type="submit" onClick="Loaddatashow()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>


										</td> 
								</tr>
							</table>   

							<table width="100%" id="showsearchdata2" style=" <?php echo $shdd2; ?> ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control   current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  box-shadow: none;    "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" onClick="Loaddatashow()" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>


										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control   current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;  box-shadow: none;    "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none;  " type="submit"   >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>


										</td> 
									</tr>
							</table>   

						</div>
						</form>  


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

 
							$contactstart = date("Y-m-d", strtotime($daystart_load));  
							$checkend = date("Y-m-d", strtotime($daystart_load2));
							$addcode = "  and  create_date BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode = "    "; 
							$addcode2 = " and ((create_date BETWEEN '".$contactstart."' and '".$checkend."')  OR (create_date2 BETWEEN '".$contactstart."' and '".$checkend."' )) "; 
							$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
						
							if($searchtype == "ประเภทเดือนปี"){
								
								$datadate  = "01-".$month."-".$year;		 			   
								$contactstart = date("Y-m-d", strtotime($datadate)); 
								$datadate2 = date('Y-m-t',strtotime($datadate));   
								$checkend = date("Y-m-d", strtotime($datadate2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 
							}
							if($searchtype == "ประเภทวัน"){ 
								$contactstart = date("Y-m-d", strtotime($daystart_load));  
								$checkend = date("Y-m-d", strtotime($daystart_load2)); 
								$addcode2 = " and (create_date BETWEEN '".$contactstart."' and '".$checkend."')   "; 

							}
						
						
													 
							$sql2 = " SELECT * FROM databank 
							where pk != ''  
							".$addcode.$addcode2."  
							order by pk desc    "; 
						  
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								 <ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="reportnew30.php?page2=<?php echo $page-1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="reportnew30.php?page2=1&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew30.php?page2=<?php echo $page-2 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew30.php?page2=<?php echo $page-1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="reportnew30.php?page2=<?php echo $page ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew30.php?page2=<?php echo $page+1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew30.php?page2=<?php echo $page+2 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="reportnew30.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="reportnew30.php?page2=<?php echo $page+1 ?>&searchtype=<?php echo $searchtype; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
								<?php endif; ?>
							</ul>
							<?php endif; ?>

							</div>
                 	   
                  	   
                  	   
                  	   
                  	    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							 <tr>
								<th width="2%" bgcolor="#FFF" height="45px;" style="  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ    </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดฝาก     </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันที่  </font></div></th>       
								<th width="3%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>  
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดถอน   </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่   </font></div></th>   
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>    
								<th width="4%" bgcolor="#FFF" style="     "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th>  
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

							$sql2 = "  SELECT * FROM databank 
							where pk != ''  
							".$addcode.$addcode2."  
							order by create_date asc   limit {$start} , {$perpage}   ";  
	 
							 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       

							if($bg == "#FFF"){ 
								$bg = "#F8FAFD"; 
							}else{  
								$bg = "#FFF"; 
							} 

							$bill_no = "-"; 
							$pksave = $objResult2["pk"]; 
							$create_date = $objResult2["create_date"]; 
							$create_date2 = ""; 
							$create_time = $objResult2["create_time"];  
							$note = $objResult2["note"];  
							$typedatasave = $objResult2["typedatasave"];  
							$timesave1 = $objResult2["datesave2"];  
							$name_major = "-"; 
							$name_create = ""; 	
								
								$sql_c = " SELECT * FROM member_all 
									where pk = '". $create_date ."'  
									order by pk asc     ";   
								$query_c = mysqli_query($con,$sql_c); 
								while($objResult_c = mysqli_fetch_array($query_c))
								{       
									$name_create = $objResult_c["name"];
								}
								 
								
								if($typedatasave == "ฝาก"){
									 
								$money1 = "";
								if(!empty($objResult2["money1"])){
									$money1 = $objResult2["money1"];
								}
								
								}
								
								if($typedatasave == "ถอน"){
									 
								$money1 = "";
								if(!empty($objResult2["money1"])){
									$money1 = $objResult2["money1"];
								}
									
								}
								
								$money3 = "";
								
								$totalmoney = 0;
								$daystart_load2 = date("Y-m-d", strtotime("2000-01-01")); 
								$daystart_load22 = date("Y-m-d", strtotime($create_date)); 
								$addcode = " and create_date BETWEEN '".$daystart_load2."' AND '".$daystart_load22."' ";
								$sql = "SELECT * FROM databank Where bill_no != '' ".$addcode." and pk <= '".$pksave."'  order by pk asc "; 

								/// echo $sql. " <br> ";

								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{   

									if($objResult["typedatasave"] == "ฝาก"){
										if(!empty($objResult["money1"])){
											$totalmoney += $objResult["money1"];
										}

									}
									if($objResult["typedatasave"] == "ถอน"){
										if(!empty($objResult["money1"])){
											$totalmoney -= $objResult["money1"];
										}

									}

								}

							?>
							<tr style="background-color: <?php echo $bg ?>; "> 
							
							<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> <?php echo $objResult2["customer"]; ?>  </font></div></td> 

  
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ฝาก"){
									echo  number_format(0+$money1);
								}
							 ?> </font></div></td> 
							
							
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ฝาก"){
									echo  DateThai($create_date)." ".DateThai2($create_date);
								}
								 ?> </font></div></td> 
										 
										   
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ฝาก"){
									echo  $timesave1;
								}
								 ?> </font></div></td> 
							  
							  
  
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ถอน"){
									echo  number_format(0+$money1);
								}
								 ?> </font></div></td> 
							
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ถอน"){
									echo  DateThai($create_date)." ".DateThai2($create_date);
								}
								 ?> </font></div></td> 
										 
										   
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if($typedatasave == "ถอน"){
									echo  $timesave1;
								}
								 ?> </font></div></td> 
							  
							
							 <td style="  " height="45px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > 
							<?php 
								if(!empty($totalmoney)){
									echo  number_format(0+$totalmoney);
								}else{
									echo "0";
								}
								 ?> </font></div></td> 
								 
								 
								  
    
							 
							</tr>  
							<?php $i++; 
							
								if(!empty($totalmoney)){
								$totalprice1 += $totalmoney;
								}
								
								} 
								
							?>
							 
							
							
							<?php
													 
							$p_m11 = 0;
							$sql2 = "  SELECT * FROM databank where money1 != ''   order by create_date asc    ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{        
								if(($objResult2["typedatasave"] == "ฝาก")){ 
									$p_m11 += $objResult2["money1"];
								} 
								if(($objResult2["typedatasave"] == "ถอน")){ 
									$p_m11 -= $objResult2["money1"];
								} 
							}
													 
							?>
							<tr style="background-color: <?php echo $bg ?>; "> 
							 
							<td style="  "   colspan="1"  height="45px;"><div align="center"><font size="3px" color="Black" style=" font-size: 15px; "  class="serif"> <b>    รวม  </b> </font></div></td>  
							<td style="  "   colspan="6"  height="45px;"><div align="center"><font size="3px" color="Black" style=" font-size: 15px; "  class="serif"> <b>       </b> </font></div></td> 
							<td style="  "><div align="center"><font size="3px" color="Black" style=" font-size: 15px; "  class="serif"> <b>    <?php echo number_format(0+$p_m11); ?>  </b> </font></div></td>  
							
							</tr>
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

<?php
include('footer2.php');
?>