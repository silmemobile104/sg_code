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

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  Dashboard   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > Dashboard   </font>   
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
                     <font size="4px" color="#000000">  Dashboard   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">   ข้อมูลรายงานผลประกอบการตามสาขา  </font>   
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
                         
                        
                    	<div   class="col-lg-4"  align="left"    > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกวันที่ค้นหา    </font>

										<form action="index.php" method="get" >
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
                   	
                   	
                   	
                  		<?php
						$colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
						$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
  			 
											 
						$p_total1 = 0;		
						$p_total2 = 0;
						$p_total3 = 0;		  				 
										
						$price1 = 0;
						$price2 = 0;
						$price3 = 0;
						$price4 = 0;
						$price5 = 0;
						$price6 = 0;
						$price7 = 0;
						$price8 = 0;
						$price9 = 0;
						$price10 = 0;	
						$contactstart   = date("Y-m-d", strtotime($daystart_load2)); 
						$checkend   = date("Y-m-d", strtotime($daystart_load2)); 
						$addcode = "  and  create_date2 BETWEEN '".$checkend."' AND '".$checkend."'  ";
													 
													 			 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ยอดที่ต้องเก็บวันนี้'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price1 += $objResult2["price"];
							}				 			 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ลูกหนี้ปกติ'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price2 += $objResult2["price"];
							}				 			 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ลูกหนี้ NPL'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price3 += $objResult2["price"];
							}				 			 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ลูกหนี้เลือนชำระ'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price4 += $objResult2["price"];
							}			
													 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ยอดที่ชำระ'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price5 += $objResult2["price"];
							}
										
									
													 
						?>	
                    	<div   class="col-lg-8"  align="right" style=" display: none; "  >  
						<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >  จำนวนลูกค้าค้างจ่าย 5 งวด  <?php echo number_format(0+$p_total1); ?> รายการ </font> </button>
						
						<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนลูกค้าค้างจ่าย 15 งวด  <?php echo number_format(0+$p_total2); ?> รายการ </font> </button>
						
						<button type="button" class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor3; ?>" size="3px" class="serif1" style=" font-size: 14px; "  >  จำนวนสงสัยหนี้จะศูนย์ 3 เดือน  <?php echo number_format(0+$p_total3); ?> รายการ </font> </button>   
						</div>
                         
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                        <font size="3px" color="#000000">  ข้อมูลรายงานผลประกอบการตามสาขา  ประจำวันที <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load); ?>  เวลาอัพเดทล่าสุด <?php echo date('H:i'); ?> น  </font>   
						</div>
                     
                      
                      	 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						<div class="table-responsive"  >
						<table id="key_product"  class=" table    tablemobile  " border="0"    >
						 <thead> 
						 <tr>
							<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา    </font></div></th>      
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดที่ต้องเก็บวันนี้     </font></div></th> 
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลูกหนี้ปกติ   </font></div></th>    
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลูกหนี้ NPL   </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลูกหนี้เลือนชำระ   </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-right: 1px solid #FFF;   "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดที่ชำระ   </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th>  
						 </tr>
					 	 </thead>  
										 
										 
								<tbody>


								<?php 
								$bg = "#F8FAFD"; 

								$sql2 = "SELECT * FROM major   order by pk asc   ";   
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{ 

								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								}

								$totalprice1 = 0; 
								$day_cancel = 0;  

								/*
								$payment = 0; 
								$payment_n = 0; 
								$payment_npl = 0; 
								$payment_income = 0; 
								$sql = " SELECT * FROM history_payment where  major = '".$objResult2["pk"]."'   
								and datestart = '".$daystart_load."'
								and status = 'ปกติ'
								and closebill = 'เป็นหนี้'  
								order by pk asc ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["money"])){
										$payment += $objResult["money"];
									}

									if($objResult["onoff_copy"] == "NPL"){
										if(!empty($objResult["money"])){
										$payment_npl += $objResult["money"];
										}
									}else{  
										if(!empty($objResult["money"])){
										$payment_n += $objResult["money"];
										}
									}


									if(!empty($objResult["income"])){
										$payment_income += $objResult["income"];
									}
								}


								$totalload =  ( $payment_n + $payment_npl ) - $payment_income;

									if($totalload <= 0){
										$totalload = 0;
									}
								*/
								?>
								<tr style="background-color: <?php echo $bg ?>; "> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price2); ?> </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price3); ?>   </font></div></td> 

 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price4); ?>   </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price5); ?>   </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalload) ; ?>  </font></div></td> 


								</tr>  
								<?php } ?>
							</tbody>
  
										 
							</table>  
							</div>
						  </div>
                        
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                         <font size="3px" color="#000000">  กราฟข้อมูลรายงานผลประกอบการตามสาขา   </font>   
						 </div>
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                       	  
						 <div id="barchart" style="width: 900px; height: 500px;"></div>
 
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
								google.charts.load('current', {'packages':['bar']});
								google.charts.setOnLoadCallback(drawChart);

								function drawChart(){
									var data = google.visualization.arrayToDataTable([
									[  'ยอดที่ต้องเก็บวันนี้', 'ยอดที่ต้องเก็บวันนี้', 'ลูกหนี้ปกติ', 'ลูกหนี้ NPL' ],
									<?php
													 
										$i = 1;			 
										$sql2 = " SELECT * FROM major where name = '111111111111111' order by pk asc  ";  
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{     
											
											$totalprice1 = 0; 
											$day_cancel = 0;  

											$payment = 0; 
											$payment_n = 0; 
											$payment_npl = 0; 
											$payment_income = 0; 
											$sql = " SELECT * FROM history_payment where  major = '".$objResult2["pk"]."'   
											and datestart = '".$daystart_load."'
											and status = 'ปกติ'
											and closebill = 'เป็นหนี้'  
											order by pk asc ";  
											$query = mysqli_query($objCon,$sql); 
											while($objResult = mysqli_fetch_array($query))
											{  
												if(!empty($objResult["money"])){
													$payment += $objResult["money"];
												}

												if($objResult["onoff"] == "NPL"){
													if(!empty($objResult["money"])){
													$payment_npl += $objResult["money"];
													}
												}else{  
													if(!empty($objResult["money"])){
													$payment_n += $objResult["money"];
													}
												}


												if(!empty($objResult["income"])){
													$payment_income += $objResult["income"];
												}
}


											$totalload =  ( $payment_n + $payment_npl ) - $payment_income;
											
											if($totalload <= 0){
												$totalload = 0;
											}
											
								 
											echo  $totalprice1.', '.$payment.', '.$payment_n.', '.$payment_npl.'],'; 
											
											$i++;
										}
									?>
								]);

								var options = {
									 colors: ['#FF8C00', '#87CEEB', '#2E8B57', '#FF0000'],
									 vAxis: {format:'###,###,###'}, // Money format
									chart: {
										title: '   ',
										subtitle: '   ',
									}
								};

								var chart = new google.charts.Bar(document.getElementById('barchart'));
								 
								chart.draw(data, google.charts.Bar.convertOptions(options));

								}
							</script>

						 </div>	 

					
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                         <font size="3px" color="#000000">  <hr>   </font>   
						 </div>
                          
                          
                          
                          
                     	 <style>  
						.small-box {
						  border-radius: 10px;
						  box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
						  display: block;
						  margin-bottom: 20px;
						  position: relative;
						}

						.small-box > .inner {
						  padding: 10px;
						}

						.small-box > .small-box-footer {
						  background: rgba(0, 0, 0, 0.1);
						  color: rgba(255, 255, 255, 0.8);
						  display: block;
						  padding: 3px 0;
						  position: relative;
						  text-align: center;
						  text-decoration: none; 
						}

						.small-box > .small-box-footer:hover {
						  background: rgba(0, 0, 0, 0.15);
						  color: #ffffff;
						}

						.small-box h3 {
						  font-size: 2.2rem;
						  font-weight: bold;
						  margin: 0 0 10px 0;
						  padding: 0; 
						}
 
						.small-box .icon {
						  color: #FFF;
						  z-index: 0;
						}

						.small-box .icon > img {
						  font-size: 90px;
						  position: absolute;
						  right: 15px;
						  top: 15px;
						  transition: all 0.3s linear;
						}

						.small-box .icon > img.fa, .small-box .icon > img.fas, .small-box .icon > img.far, .small-box .icon > img.fab, .small-box .icon > img.glyphicon, .small-box .icon > img.ion {
						  font-size: 70px;
						  top: 20px;
						} 
					</style>
                          
                          
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
							  
							  
							 function Getsearchdata() 
							 {
							  var typeselect = document.getElementById("typeselect").value; 
							  var major = ""; 
							  var major_store = ""; 
								  
								 
							  document.getElementById("onoff").value = "";
								 
								 
							  if(typeselect == "1"){
							  var month = document.getElementById("month").value; 
							  var year = document.getElementById("year").value; 
								
								/// alert(" A "+major);
								$.ajax({
								type: "GET",
								url: "load_indexshow1.php?major="+major+"&major_store="+major_store+"&month="+month+"&year="+year,
								success: function(result) {
									$('#totalchart').html(result);
								}
								});	
								   
								 
							  }else if(typeselect == "2"){ 
							  var searchname = document.getElementById("startdate1").value; 
							  var searchname2 = document.getElementById("startdate2").value; 
								  
								 
								$.ajax({
								type: "GET",
								url: "load_indexshow2.php?major="+major+"&major_store="+major_store+"&startdate="+searchname+"&endate="+searchname2,
								success: function(result) {
									$('#totalchart').html(result);
								}
								});		  
								  
							 
							  }else{
								    
							  } 
							 }
							  
							  
						  </script>
                         
                   		  <input type="hidden" id="typeselect" value="">
                   		  <input type="hidden" id="onoff" value="">
                   	
                      	  
                         
                          <div class="col-lg-5"  align="left"  > 
                    	
							<table width="57%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
											<option value="">  ประเภทการค้นหา    </option> 
											<?php 
											$sql = "SELECT * FROM drop_type   order by pk asc  "; 
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
								  
							<table width="100%" id="showsearchdata1" style="display: none; ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
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
										 <select class="form-control" id="year" name="year" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
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
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>
							</table>  
								 
							<table width="100%" id="showsearchdata2" style="display: none; ">
								<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="startdate1" name="startdate1" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" onClick="Getsearchdata()" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>

										 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="startdate2" name="startdate2" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="button" onClick="Getsearchdata()" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>
							</table>  
								 
						  </div>
                 		 
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                         <font size="3px" color="#000000">  &nbsp;   </font>   
						 </div>
                          
						   <div class="col-lg-12" id=" ">
						   <div class="row" id="totalchart">

						   <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #5B86E5; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ราคาทุน </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

							</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #2AC1CE; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> กำไร </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #53B49A; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ยอดเก็บปกติ   </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #F4BC4E; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ยอดเก็บ NPL  </font> 
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>  


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