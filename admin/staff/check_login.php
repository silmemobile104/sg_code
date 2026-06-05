<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		
		
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
	}

	$getmajorline = "";
	$customer = "";
	$searchname2 = "";

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบคำข้อเข้าระบบ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ตรวจสอบคำข้อเข้าระบบ   </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบคำข้อเข้าระบบ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      
						  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  วันที่ <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load); ?>  </font>   
						  </div> 
						  </font> 
						  </div>
                       
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
                         
                        
                    	<div   class="col-lg-3"  align="left" style=" display: none; "  > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif">  เลือกวันที่ค้นหา    </font>

								<form action="check_login.php" method="get" >
								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								<input class="form-control  current "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

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
							if(empty($_GET["customer"])){ 
								$addcode = " ";
							}else{
								$addcode = " and b.name like '%".$customer."%' ";
							}
							$addcode2 = " and date_start = '".$daystart_load2."' ";  

						$sql2 = "SELECT a.*, b.name FROM history_checkin  a
						Inner Join member_all b On   a.member = b.pk
						where a.bill_no != ''   
						".$addcode.$addcode2."  
						order by a.pk asc    "; 
						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
							 <ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="check_login.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="check_login.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="check_login.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="check_login.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="check_login.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_login.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_login.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="check_login.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="check_login.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&getmajorline=<?php echo $getmajorline; ?>&customer=<?php echo $customer; ?>&page=contact">Next</a></li>
								<?php endif; ?>
							</ul>
							<?php endif; ?>

						</div>
                         
                         
                           <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" tables    tablemobile  " border="0"     >
							 <thead> 
								 <tr>
									<th width="3%" bgcolor="#BEC6CB" height="45px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่ที่คำขอ   </font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อ-นามสกุล   </font></div></th>     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ตำแหน่ง  </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   พิกัด     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เวลา     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ     </font></div></th>         
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;    "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> หมายเหตุ  </font></div></th>  
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
								$sql2 = " SELECT a.*, b.name, b.poition FROM history_checkin  a
								Inner Join member_all b On   a.member = b.pk
								where a.bill_no != ''   
								".$addcode.$addcode2."  
								order by a.pk desc limit {$start} , {$perpage}   ";   
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
									
									
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								}

							 
								$name_create = "-";   
								$sql = "SELECT * FROM drop_type_staff where pk = '".$objResult2["poition"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}
								 
									
									$txtshow = "รอตรวจสอบ";
									$hdd = " "; 
									$bgbtn = " #FF8C00  ";
									if($objResult2["onoff"] == ""){ 

									}else if($objResult2["onoff"] == "อนุมัติ"){
									$txtshow = " อนุมัติ ";
									$hdd = " "; 
									$bgbtn = " #006400  ";
									}else if($objResult2["onoff"] == "ไม่อนุมัติ"){
									$txtshow = " ไม่อนุมัติ ";
									$hdd = " display: none;  "; 
									$bgbtn = " #FF0000  ";

									}
									
								 $note = $objResult2["note1"];
									
								?>
                  		     	<tr style="background-color: <?php echo $bg ?>; "> 
 
								<td style=" border-left: 0px solid #F2F2F2; " height="50px;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?> </font></div></td>  

                 		      
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 
                 		       
                  		      <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"   >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" target="_blank" style=" background-color: #FF0000; border-radius: 5px;  border-radius: 5px; cursor: pointer;     " href="https://www.google.com/maps/search/<?php echo $objResult2["location"]; ?>/@<?php echo $objResult2["location"]; ?>,13z/data=!3m1!4b1?entry=ttu"  >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "   > พิกัด  </font>   </a> 
								</font>
								</div>
                 		     
							  </td>
                  		      
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["date_time"]; ?> </font></div></td>  

                 		      
                 		      
                  		      <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"  id="showorder<?php echo $objResult2["pk"]; ?>"  >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer;     "   id="btnsave<?php echo $objResult2["pk"];?>" data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""   >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdata<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
								</font>
								</div>
                 		      
							
								 <!-- Modal -->
								<div class="modal fade" id="myEodal1<?php echo $objResult2["pk"]; ?>" role="dialog" style=" margin-top: 75px; ">
								<div class="modal-dialog modal-md"> 
								<!-- Modal content-->
									<div class="modal-content">
									<div class="modal-header">
									<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $objResult2["bill_no"]; ?> </font> 
									<button type="button" id="closepop<?php echo $objResult2["pk"]; ?>"  class="close" data-dismiss="modal">&times;</button>
									</div> <br>
									<center>  
									<div class="col-lg-12" style=" margin-top: 10px;  "  align="left"> 
									<div class="row">  
									<div class="col-lg-12" style="   "  align="left">  

									<div class="col-lg-12" style="  "  align="left">  

									<font size="3px" style=" font-size: 16px; " color="#000">  

									<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" > 
									<input type="hidden" id="checkpass<?php echo $objResult2["pk"]; ?>" value="" > 

									<script>

									function 
									Canceldata<?php echo $objResult2["pk"]; ?>( ) { 

										var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
										var checkpass = document.getElementById("checkpass<?php echo $objResult2["pk"]; ?>").value;
										var passportadmin = "";

										 
									/////	document.getElementById("passportadmin<?php echo $objResult2["pk"]; ?>").value = "";
											
										check_status_save = "อนุมัติ";  

										document.getElementById("txtshowdata<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

										document.getElementById("hddbtn<?php echo $objResult2["pk"]; ?>").style.display = "none"; 

										document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#006400";
										  
 
										var jsonString = ""; 
										$.ajax({
										type: "POST",
										url: "save_check_login.php?status="+check_status_save+"&bill_no="+save_key,
										contentType: 'application/json',
										data: jsonString,
										success: function(result) {
										//alert(result);
										}
										});
										  
										 document.getElementById("closepop<?php echo $objResult2["pk"]; ?>").click(); 
										  
									}	

									function 
									CanceldataNo<?php echo $objResult2["pk"]; ?>( ) { 
										var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
										var checkpass = document.getElementById("checkpass<?php echo $objResult2["pk"]; ?>").value;
										var passportadmin = "";

										 
											////document.getElementById("passportadmin<?php echo $objResult2["pk"]; ?>").value = "";

											check_status_save = "ไม่อนุมัติ";  

										
											document.getElementById("txtshowdata<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

											document.getElementById("hddbtn<?php echo $objResult2["pk"]; ?>").style.display = "none"; 

											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#FF0000";
 

											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_check_login.php?status="+check_status_save+"&bill_no="+save_key,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
											}
											});
 
										 document.getElementById("closepop<?php echo $objResult2["pk"]; ?>").click(); 
										
									}	

									</script> 
 
									<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $objResult2["pk"]; ?>"   >     
									 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
									 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > อนุมัติ   </font> </button>  </a>


									 <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
									 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่อนุมัติ  </font> </button> </a>

									 </div>

									<div style=" margin-top: 20px; " > &nbsp; </div>  

									</font>
									</div>
									</div>
									</div>
									</div>
									</center>
									</div>
								</div>
								</div>  

								</td> 
                 		     
                 		     
                 		     
                 		     <td style=" border-left: 0px solid #F2F2F2; ">

								<div align="center"  id="showorder<?php echo $objResult2["pk"]; ?>"  >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: #006400; border-radius: 5px;  border-radius: 5px; cursor: pointer;     "     data-toggle="modal" data-target="#myNote<?php echo $objResult2["pk"];?>" data-id=""   >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "    > หมายเหตุ </font>   </a> 
								</font>
								</div>
                 		      
							
								 <!-- Modal -->
								<div class="modal fade" id="myNote<?php echo $objResult2["pk"]; ?>" role="dialog" style=" margin-top: 75px; ">
								<div class="modal-dialog modal-md"> 
								<!-- Modal content-->
									<div class="modal-content">
									<div class="modal-header">
									<font size="2px" color="black"  class="serif2"> หมายเหตุ : <?php echo $objResult2["bill_no"]; ?> </font> 
									<button type="button" id="closepoppop<?php echo $objResult2["pk"]; ?>"  class="close" data-dismiss="modal">&times;</button>
									</div> <br>
									<center>  
									<div class="col-lg-12" style=" margin-top: 10px;  "  align="left"> 
									<div class="row">  
									<div class="col-lg-12" style="   "  align="left">  

									<div class="col-lg-12" style="  "  align="left">  

									<font size="3px" style=" font-size: 16px; " color="#000">  
 

									<script>

									function 
									Savenote<?php echo $objResult2["pk"]; ?>( ) { 

										var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
										var note = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;
										var passportadmin = "";
 
 
										var jsonString = ""; 
										$.ajax({
										type: "POST",
										url: "save_check_login2.php?note="+note+"&bill_no="+save_key,
										contentType: 'application/json',
										data: jsonString,
										success: function(result) {
										//alert(result);
										}
										});
										  
										 document.getElementById("closepoppop<?php echo $objResult2["pk"]; ?>").click(); 
										  
									}	
 
									</script> 
									
									 
									  <div class="col-md-12"  >	 
										   <font color = '#000' size="3px" > หมายเหตุ </font>   
										  <textarea type="text" class="form-control" id="note<?php echo $objResult2["pk"]; ?>" name="name<?php echo $objResult2["pk"]; ?>"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $name; ?>" rows="5"   ><?php echo $note; ?></textarea> 
									  </div> 
						   
									<div class="col-lg-12" style="margin-top: 25px;  " align="center"    >     
									 <a onClick="Savenote<?php echo $objResult2["pk"]; ?>()" >
									 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 100%;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 16px; " > บันทึก   </font> </button>  </a>
 
									 </div>

									<div style=" margin-top: 20px; " > &nbsp; </div>  

									</font>
									</div>
									</div>
									</div>
									</div>
									</center>
									</div>
								</div>
								</div>  

								</td> 
                  		     
                   		       </tr> 	 
                  		       <?php } ?>
                   		     </tbody> 	 
							</table>  
							</div>
						  </div>
                   		  
                  		  
                          
                  		  
                          
                          
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