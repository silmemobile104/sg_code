<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
  
    if(empty($_GET["datestart"])){
		$loaddate = date('d-m-Y'); 
	}else{ 
		$loaddate = date("d-m-Y", strtotime($_GET["datestart"])); 
	}
		$name = "";  
		$address = ""; 
		$telphone = "";   
		$line = "";   
		$password = ""; 
		$repassword = ""; 
		$username = ""; 
		$code_member = ""; 
		$status = "";  
		$img = ""; 
		$address1 = ""; 
		$address2 = ""; 
		$address3 = ""; 
		$address4 = ""; 


		$bill_no = $_GET["bill_no"]; 
		$daytotal = 0; 
		$pricemoney = 0; 
		$money = 0; 
		$dayprice = 0; 
		$totalprice1 = 0; 
		$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  "; 
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{   
			$onoff = $objResult["onoff"]; 
			$onoff_copy = $objResult["onoff_copy"]; 
			$showstart = $objResult["startdate"]; 
			$showend = $objResult["endate"]; 
			$customer = $objResult["customer"]; 
			$closebill = $objResult["closebill"]; 
			$dayprice = $objResult["dayprice"]; 
			$daytotal = $objResult["daytotal"]-1; 
			$daytotal_end = $objResult["daytotal"]; 
			$dayprice_end = $objResult["dayprice"]; 
			$totalprice1 = $objResult["dayprice"]*$objResult["daytotal"]; 
		}


		$sql = "SELECT * FROM customer Where  pk = '". $customer ."' ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{  
			$name = $objResult["name"]; 

		} 

		$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
		$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

			$readonly = "";
		if($closebill == "หมดหนี้"){
			$code_check2 = "";
			$readonly = "readonly";
		}else{ 
			$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'   "; 
		} 


		$dis_show = 0;
		$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $bill_no ."' ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{  
			$dis_show += $objResult["price"];   
			$dis_show += $objResult["discount"];   
		}


		$getstart = 0;
		$sql = "SELECT * FROM history_payment Where  bill_no = '". $bill_no ."' order by pk asc limit 1 ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{  
			$getstart = $objResult["orderdata"];   
		}

		$onoffadd = "";
		if($getstart >= 1){
			$onoffadd = "off";
		}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกยอดชำระหนี้  </font>   
                     <div > &nbsp; </div>
                  </div> 
                  </font> 
                  </div>
             
               <div class="row"  >
              <div class=" col-lg-12 "  style="margin-top: -15px;"  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้ <?php echo $bill_no; ?>  </font>  
                     <br> 
                     <font size="4px" color="#FF0000">  สถานะชำระหนี้ [<?php echo $closebill; ?>]  </font>  
                     <br> 
                     <font size="4px" color="#FF0000">  สัญญา [<?php 
						 if($onoff_copy == "ปกติ"){
							 echo " <font color = 'darkgreen' > " . $onoff_copy . " </font> "; 
						 }else{
							 echo " <font color = 'red' > " . $onoff_copy . " </font> ";  
						 }
							 
						 
						 ?>]  </font>   
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
									yearRange: "-1:+5",
										  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
										  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
										  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
										});
								}); 
								</script> 
                      
                      		<div class="col-lg-6">
							<font color="black" class="serif"  size = "4px"   color="Black" style=" font-size: 18px; "> 
							<?php echo $name; ?>  <Br>  
							วันทีเริ่มชำระ <?php echo DateThai($showstart)." ".DateThai2($showstart); ?> 
							<font color="red"> <b>   วันทีชำระงวดสุดท้าย <?php echo DateThai($showend)." ".DateThai2($showend); ?>  </b></font> <Br>
							</font> 
						    </div>
                        
							<?php
								$colorbtns1s = " background-color: #FBFBFB; border-radius: 5px;  height: 40px; border-color: #334148; margin-top: 15px; ";
								$colorbtns2s = " background-color: #5DC9C1; border-radius: 5px;  height: 40px; border-color: #FBFBFB; margin-top: 15px; ";

								$colorbtns3s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 15px; ";
								$colorbtns4s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 15px; ";
								$colorbtns5s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 15px; ";
													 
													 
								$colorbtns6s = " background-color: #00008B; border-radius: 5px;  height: 40px;  border-color: #00008B; margin-top: 15px; ";

								$txtcolor1 = "#FFF"; 
								$txtcolor2 = "#FFF";
													 
													 
								$p_total1 = 0;
								$chk_total = 0;
								$sql2 = " SELECT * FROM update_real_time where bill_no = '".$bill_no."'
								  and status like '%เปลี่ยนวัน%'  order by pk asc ";    
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{ 
									$p_total1++;
								}
													 
											
								$countloopnopay = 0;
								$moneypaymentall = 0;
								$moneypaymentall2 = 0;
													 
								/*
								$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
								$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($loaddate)));
								$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								*/					 
													 
								$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $bill_no ."'  ".$code_check2." order by pk asc ";  
													 
								///echo $sql_npl;
								$query_npl = mysqli_query($objCon,$sql_npl); 
								while($objResult_npl = mysqli_fetch_array($query_npl))
								{   
									
									if(!empty($objResult_npl["income"])){ 
										$moneypaymentall += $objResult_npl["income"];
									}
									
									if(!empty($objResult_npl["income"])){   
										$countloopnopay = 0;
										$chk_total = 0;
									}else{
										$countloopnopay++;
									} 
									
										$calA = 0;
									if(!empty($objResult_npl["income"])){ 
										$calA = $objResult_npl["income"];
									}
									
									
									$calB = 0;
									if(!empty($objResult_npl["discount"])){ 
										$calB = $objResult_npl["discount"];
									}
									
									
									$sumnewprice = $calA - $calB;
									if($sumnewprice <= 0){
										$sumnewprice = 0;
									}
									
									$moneypaymentall2 += $sumnewprice;



									if($countloopnopay >= 5){ 
										if(!empty($objResult_npl["income"])){  
												$chk_total = 0; 
											
												$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$bill_no."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
				
									
									/*
									if($countloopnopay >= 5){ 
										if(!empty($objResult_npl["income"])){  
											//$chk_total = 0; 
											//$countloopnopay = 0;
												$checkpaymentday = "ON";
												$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$bill_no."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
									
									$countloopnopay++;
									*/
								}
													 
													 
								///echo $chk_total . " <br> ";
								$total_dis = ($chk_total*50)-$dis_show;
								 if($total_dis <= 0){
									 $total_dis = 0;
								 }
							?> 
							<div class="col-lg-6" align="right"> 
							 <a data-toggle="modal" data-target="#myHidden" data-id=""  class="btn btn-primary"   style=" <?php echo $colorbtns6s; ?> "  >
							 <font size="3px" color="white" >   ยินยันการซ่อน   </font>
							 </a>  

							
							 <?php if($closebill == "หมดหนี้"){ ?> 
							 <a  class="btn btn-primary" style=" <?php echo $colorbtns4s; ?> "   >
							 <font size="3px" color="white" >  ค่าปรัมสะสม  <?php echo number_format(0); ?>  </font>
							 </a> 
								
							 <?php }else{ ?>
							  
								
							 <a  class="btn btn-primary" style=" <?php echo $colorbtns4s; ?> " href="view_history.php?page=1&bill_no=<?php echo $_GET["bill_no"]; ?>"    >
							 <font size="3px" color="white" >  ค่าปรัมสะสม  <?php echo number_format(0+  $total_dis   ); ?>  </font>
							 </a> 
							 <?php } ?> 
							  
							 <a   data-toggle="modal" data-target="#viewallcancelorder2"   class="btn btn-primary" style=" <?php echo $colorbtns5s; ?> "  >
							 <font size="3px" color="white" >  ประวัติการชำระทั้งหมด  <?php echo number_format(0+$moneypaymentall2); ?>  บาท    </font>
							 </a> 
							  
							<!-- modal small -->
							<div class="modal fade" id="viewallcancelorder2" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									<div class="col-lg-12" align="left"   >   
									<font size="3px" color="black" style="font-size: 14px;">   
									<?php
									$ic = 1;
									$sql_v = "SELECT * FROM update_real_time where bill_no = '".$bill_no."'  and status like '%กรอกยอดเงิน%'  
									order by pk desc  ";    
									$query_v = mysqli_query($objCon,$sql_v);
									while($objResult_v = mysqli_fetch_array($query_v))
									{
											$memberlast1 = "";
											$memberlast2 = "";
											$memberlast3 = "";

											$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
											$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
											while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
											{
												$memberlast1 = $objResult_getstaff["name"];  
											} 

											$memberlast2 = $objResult_v["create_date2"];
											$memberlast3 = $objResult_v["create_time"];

											echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
												" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br>
												-------------------------- <Br> ";

										$ic++;
									} 
									?> 
									</font> 
									</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  
							 <a  data-toggle="modal" data-target="#viewallcancelorder"   class="btn btn-primary" style=" <?php echo $colorbtns3s; ?> "  >
							 <font size="3px" color="white" >  ประวัติการเลื่อนชำระ  <?php echo $p_total1; ?>   ครั้ง    </font>
							 </a>  
							 
							<!-- modal small -->
							<div class="modal fade" id="viewallcancelorder" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<div class="col-lg-12" align="left"   >   
								<font size="3px" color="black" style="font-size: 14px;">   
 								<?php
								$ic = 1;
								$sql_v = "  SELECT * FROM update_real_time where bill_no = '".$bill_no."'
								  and status like '%เปลี่ยนวัน%'  order by pk asc  ";   
								$query_v = mysqli_query($objCon,$sql_v);
								while($objResult_v = mysqli_fetch_array($query_v))
								{
										$memberlast1 = "";
										$memberlast2 = "";
										$memberlast3 = "";
										 
										$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
										$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
										while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
										{
											$memberlast1 = $objResult_getstaff["name"];  
										} 
									
										$memberlast2 = $objResult_v["create_date2"];
										$memberlast3 = $objResult_v["create_time"];
										 
										echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
											" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br>
											-------------------------- <Br> ";
									 
									$ic++;
							    } 
								?> 
								</font> 
								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 
										
										
							
							 
						 		  
									 
									 
										 <!-- Modal -->
										<div class="modal fade" id="myHidden" role="dialog" style=" margin-top: 75px; ">
										<div class="modal-dialog modal-md"> 
										<!-- Modal content-->
											<div class="modal-content">
											<div class="modal-header">
											<font size="2px" color="black"  class="serif2"> ยินยันการซ่อน </font> 
											<button type="button" id="closepop"  class="close" data-dismiss="modal">&times;</button>
											</div> <br>
											<center>  
											<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
											<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  


											<font size="3px" style=" font-size: 16px; " color="#000">  

											<div class="col-lg-12" style="margin-top: 25px;  " align="center"    >     
												<div class="col-lg-12" style="  " align=""  >   
												  <div class="form-group">     

												  <button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; width: 150px; height: 40px; border-color: #FF8C00; margin-top: 15px; "  onClick='savehidden()'  > <font color="#FFF" size="2px" class="serif1" >    ซ่อนสัญญา   </font> </button> 


												  <button type="button" class="btn btn-primary" style="background-color: #8B0000; border-radius: 5px; width: 150px; height: 40px; border-color: #8B0000; margin-top: 15px; "  class="close" data-dismiss="modal" > <font color="#FFF" size="2px" class="serif1" >    ไม่ซ่อนสัญญา   </font> </button> 


												 </div> 
												 </div>
 
											 </div>

											<div style=" margin-top: 20px; " > &nbsp; </div>  

											</font>  
											</div>
											</div>
											</center>
											</div>
										</div>
										</div>  
										
										
							 <?php 
								$iloop = 1;
								$sql_getpayment = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   and hiddendata = ''   order by pk asc ";   	 
								$query_getpayment = mysqli_query($con,$sql_getpayment); 
								while($objResult_getpayment = mysqli_fetch_array($query_getpayment))
								{ 
									$iloop++;
								} 
							 ?>
							 <input type="hidden" id="chktotalend" value="<?php echo ($iloop-1); ?>" >
							 <input type="hidden" id="billcancel" value="<?php echo $_GET["bill_no"]; ?>" >
							 <script language="javascript">
								 
								function savehidden()
								{  
									var totalend = document.getElementById("chktotalend").value;
									var int1bill = document.getElementById("billcancel").value;
									for(var isave = 1; isave <= totalend; isave++){  

										var btnchk = document.getElementById("myCheck"+isave); //// รับเงินลูกค้า   
										 if (btnchk.checked == true){
											////	alert(" fff ");
											  document.getElementById("hiddendata"+isave).style.display = "none";
											 
											var data1 = document.getElementById("savepkdata"+isave).value;
											var bill = document.getElementById("billsave"+isave).value;
											  
											 //// alert("save_pkhistory_hidden.php?data1="+data1+"&bill="+bill);
											  
											 	var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_pkhistory_hidden.php?data1="+data1+"&bill="+bill,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {  
												}
												});  
											  
											 
										  }   
									}
									
									
											$(document).ready(function(){ 
											$('#myHidden').modal('hide'); //myModal is ID of div
											});   
								} 
								 
								 
								function savebillall()
								{
								 	alert(" Save Complete ");

									document.getElementById("savedataall").style.backgroundColor  = "#006400"; 

									var totalend = document.getElementById("chktotalend").value;
									var int1bill = document.getElementById("billcancel").value;
									for(var isave = 1; isave <= totalend; isave++){ 


										var discountmoney = document.getElementById("money"+isave).value; //// รับเงินลูกค้า  
										var discountmoneysave = document.getElementById("savedata"+isave).value; ////   
										var sumallold = document.getElementById("sumallold"+isave).value; ////   
										var getpaymentother = document.getElementById("getpaymentother"+isave).value; ////    ค่าปรับ
										var majordata = document.getElementById("billdatasave").value; ////    billdatasave 
										var contacdata = document.getElementById("contacdata"+isave).value;   /// majordata   
										var discount = document.getElementById("discount"+isave).value;   /// majordata   


										/*/
									    alert( "save_paymentcheckbill.php?money="+discountmoney+"&bill="+discountmoneysave+"&datesave="+discountmoneysave+"&paymentother="+getpaymentother+"&majordata="+majordata+"&contacdata="+contacdata );
										*/
									 
										var jsonString = ""; 
										$.ajax({
												type: "POST",
												url: "save_paymentcheckbill.php?money="+discountmoney+"&bill="+discountmoneysave+"&datesave="+discountmoneysave+"&paymentother="+getpaymentother+"&majordata="+majordata+"&contacdata="+contacdata+"&discount="+discount,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {  

												}
											});  
										 
									}
									
									
									 
 
							 } 
							</script> 
							</div>   
      		   
      		    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1850px; "    >
							 <thead> 
								<tr>
								<th width="1%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    #    </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    บันทึก  </font></div></th>
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันครบกำหนดชำระ  </font></div></th>   
								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   งวดที่     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระ   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดที่ต้องชำระ     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดส่วนลด     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดที่ชำระจริง     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับสะสม   </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหนี้คงเหลือ     </font></div></th>   

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทบ    </font></div></th>  
								
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ลูกค้าโอน    </font></div></th>  

								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th>    
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เวลาล่าสุด     </font></div></th>    

								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  อัพสลิป     </font></div></th>  

								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติ    </font></div></th> 

								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไขยอด    </font></div></th>  

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบเสร็จ   </font></div></th> 
							 </tr>
							 </thead>  
									 	 
							 <tbody>
									 
									 
								<?php 
								$i = 1;  

								$bg = "#F8FAFD"; 
								$bill_no = $_GET["bill_no"];
								$countall = 0;
								$moneyday = 0; 
								$money1 = 0; 
								$money2 = 0; 
								$money3 = 0; 
								$paytotatab = 0;
 
								$totalall =  $totalprice1 ;    
								$countall =  $totalprice1 ;
													 
								$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
								$checkend = date("Y-m-d", strtotime($loaddate));  /// วันที่เลือกล่าสุด 
								$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								  $code_check2 = "  "; 
										   
								$countalldata = 0;
								$sql = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   "; 
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
									$countalldata++; 
								}
 
													 
								$sql2 = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."' and hiddendata = ''   ".$code_check2."  order by create_date2 asc   ";  
								$query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{     
									
									$daystart = date("d/m/Y", strtotime($objResult2["datestart"]));
									$daystart2 = date("Y-m-d", strtotime($objResult2["create_date2"]));
									$date_start2 =  $objResult2["date_start2"];
									
									$countloopnopay = 0;
									$chk_total = 0; 
									$discoount_cut1 = 0;
									
									$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
									$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart2)));
									$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $bill_no ."'  ".$code_check2." ";
									//  echo $sql_npl."<br>";
									$query_npl = mysqli_query($objCon,$sql_npl); 
									while($objResult_npl = mysqli_fetch_array($query_npl))
									{    
										$price1 = 0;
										if(!empty($objResult_npl["income"])){ 
											$price1 = $objResult_npl["income"];  
											//$countloopnopay = 0; 
											//$chk_total = 0; 
										} 

										
										
										if(!empty($objResult_npl["income"])){   
											$countloopnopay = 0;
											$chk_total = 0;
										}else{
											$countloopnopay++;
										} 

										  
										
										if($countloopnopay >= 5){ 
											if(!empty($objResult_npl["income"])){ 
												 
												$checkpaymentday = "ON";
												$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$_GET["bill_no"]."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
										 
										
										
										if($objResult_npl["addon"] == ""){
											$discoount_cut1 += $dayprice - $price1 ; 
										} 
										 
										//// echo $discoount_cut1 . " - " . $price1 . " <br> ";
										$calnew = $discoount_cut1 - $price1 ; 
										$discoount_cut1 = $calnew ; 
										 
									}
									/// echo $countloopnopay  . " <br> ";
									// echo   " --------------------- <br> ";
									 
									$namestaff = "";
									$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$namestaff = $objResult["name"]; 
									}
 
										$money1 = $objResult2["income"]; 
										$money2 = $objResult2["paymentother"];  
										$money3 = $objResult2["money"];  
										$addon = $objResult2["addon"];  
										$discount = $objResult2["discount"];  


										if(!empty($objResult2["income"])){ 
											$totalall += (-$objResult2["income"]);
										} 
											$orderdata = $objResult2["orderdata"]+1;


										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										} 
									
										if($discoount_cut1 <= 0){
											$discoount_cut1 = 0;
										}
									
									 
										$discountshow = "";
										if(empty($objResult["paymentother"])){
											$discountshow = $chk_total*50;
										}
										if(!empty($objResult["paymentother"])){
											$discountshow = $objResult["paymentother"];
										}
									 
									
										$getbill = $_GET["bill_no"];
										$totalprice1 = ( $chk_total * 50 ); 
									    $code_check2 = " and date_start2 BETWEEN '2020-01-01' AND '".$daystart2."'  "; 
										$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' ".$totalshow." ";  
										$query = mysqli_query($objCon,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{  
											$totalprice2 += $objResult["price"] + $objResult["discount"];  
										}  

										$totalshow = $totalprice1 - $totalprice2;
										if($totalshow <= 0){
											$totalshow = 0;
										}
									 
									if($closebill == "หมดหนี้"){ 
										$totalshow = 0;
										$totalall = 0;
										$discoount_cut1 = 0;
									}
								?>
									<tr style="background-color: <?php echo $bg ?>; " id="hiddendata<?php echo $i; ?>">
									
									 
									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
									
									 <a  id="savehid<?php echo $i; ?>"  class="btn btn-sm" style=" display: none;   background-color: #FF0000; border-radius: 5px; cursor: pointer; "  data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""   >
									 <font size="3px" color="white" >   ซ่อน    </font>
									 </a>   
									 
									 <input type="hidden" id="savepkdata<?php echo $i; ?>" value="<?php echo $objResult2["pk"]; ?>" >
									 <input type="hidden" id="billsave<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
									 
									  <script language="javascript">
										function savehid<?php echo $objResult2["pk"]; ?>()
										{ 
												document.getElementById("savehid<?php echo $i; ?>").style.backgroundColor  = "#006400"; 
												document.getElementById("hiddendata<?php echo $i; ?>").style.display  = "none"; 

												var data1 = document.getElementById("savepkdata<?php echo $i; ?>").value; 
												var bill = document.getElementById("billsave<?php echo $i; ?>").value;


											
											///alert("save_pkhistory_hidden.php?data1="+data1+"&bill="+bill);
												
												var jsonString = ""; 
												$.ajax({
												type: "POST",
												url: "save_pkhistory_hidden.php?data1="+data1+"&bill="+bill,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {  
												}
												});  
												
											
											$(document).ready(function(){ 
											$('#myEodal1<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
 
										 } 
										  
										  function Canceldatabill<?php echo $objResult2["pk"]; ?>()
										{  
 
											$(document).ready(function(){ 
											$('#myEodal1<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
 
										 
										 } 
										</script>
									
									 
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
											<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
											<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  


											<font size="3px" style=" font-size: 16px; " color="#000">  

											<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $objResult2["pk"]; ?>"   >     
												<div class="col-lg-12" style="  " align=""  >   
												  <div class="form-group">     

												  <button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; width: 150px; height: 40px; border-color: #FF8C00; margin-top: 15px; "  onClick='savehid<?php echo $objResult2["pk"]; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ซ่อนสัญญา   </font> </button> 


												  <button type="button" class="btn btn-primary" style="background-color: #8B0000; border-radius: 5px; width: 150px; height: 40px; border-color: #8B0000; margin-top: 15px; "  onClick='Canceldatabill<?php echo $objResult2["pk"]; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ไม่ซ่อนสัญญา   </font> </button> 


												 </div> 
												 </div>
 
											 </div>

											<div style=" margin-top: 20px; " > &nbsp; </div>  

											</font>  
											</div>
											</div>
											</center>
											</div>
										</div>
										</div>  
								
								 
								 
									  <label class="container2" >  
									  <input type="checkbox" name="myCheck<?php echo $i; ?>" id="myCheck<?php echo $i; ?>" value="<?php echo $objResult2["pk"]; ?>"  >
									  <span class="checkmark"></span>
									  </label>  
								  
								  
									</font></div></td> 

									
									  

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										
									 <a onClick="savepk<?php echo $i; ?>()"  id="savedataallpk<?php echo $i; ?>"  class="btn btn-sm" style=" background-color: #FF0000; border-radius: 5px; cursor: pointer; "    >
									 <font size="3px" color="white" >   บันทึก    </font>
									 </a>  
									    
										<script language="javascript">
										function savepk<?php echo $i; ?>()
										{ 
											document.getElementById("savedataallpk<?php echo $i; ?>").style.backgroundColor  = "#006400"; 

											var data1 = document.getElementById("savepkdata<?php echo $i; ?>").value;
											var data2 = document.getElementById("money<?php echo $i; ?>").value;
											var data3 = document.getElementById("discount<?php echo $i; ?>").value;
											var bill = document.getElementById("billsave<?php echo $i; ?>").value;
										 
											/*
												var jsonString = ""; 
												$.ajax({
														type: "POST",
														url: "save_paymentcheckbill.php?money="+discountmoney+"&bill="+discountmoneysave+"&datesave="+discountmoneysave+"&paymentother="+getpaymentother+"&majordata="+majordata+"&contacdata="+contacdata+"&discount="+discount,
														contentType: 'application/json',
														data: jsonString,
														success: function(result) {  

														}
													});  

											}
											*/
											
										 
											///alert("save_pkhistory.php?data1="+data1+"&data2="+data2+"&data3="+data3+"&bill="+bill);
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_pkhistory.php?data1="+data1+"&data2="+data2+"&data3="+data3+"&bill="+bill,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {  
											}
											});  
										  
											alert(" Save Complete "); 

									 } 
									</script>
									</font></div></td> 

								 

									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >   
									<?php if($closebill == "หมดหนี้"){ 
										echo "   ". DateThai($objResult2["datestart"])." ". DateThai2($objResult2["datestart"])  ;
									 }else{ ?>

									<input type="text" class=" current " id="startdate<?php echo $objResult2["pk"]; ?>" name="startdate<?php echo $objResult2["pk"]; ?>"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9;  border: 1px solid #F77369; font-size: 14px; width: 100%; text-align: center; "  value="<?php echo $daystart; ?>" onChange="calAge2<?php echo $i; ?>(<?php echo $objResult2["pk"]; ?>)"    >
									<?php } ?>

									<input type="hidden" id="dayback<?php echo $objResult2["pk"]; ?>" value="<?php echo $daystart; ?>" >
									<input type="hidden" id="datesavedata<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["create_date2"]; ?>" >

									<script> 
									function calAge2<?php echo $i; ?>(Savedata) 
									{

									 var datasaveok = Savedata; 
									 var datasaveok2 = document.getElementById("startdate"+Savedata).value; 
									 var datasaveok3 = document.getElementById("billdatasave").value; 
									 var datasaveok4 = document.getElementById("dayback"+Savedata).value; 
									 var datasaveok5 = document.getElementById("datesavedata"+Savedata).value; 

										var jsonString = ""; 

										//// alert("save_Chgdate.php?pksave="+datasaveok+"&date="+datasaveok2+"&bill="+datasaveok3+"&dateback="+datasaveok4);
										$.ajax({
												type: "POST",
												url: "save_Chgdate.php?pksave="+datasaveok+"&date="+datasaveok2+"&bill="+datasaveok3+"&dateback="+datasaveok4,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {  

												}
											});  


										alert(" Save Complete ");

									 }
									</script>  
									
									</font></div></td> 


									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
									
									if($onoffadd == "off"){
										echo ($objResult2["orderdata"]); 
									}else{
										echo ($objResult2["orderdata"]+1); 
									}
									  
									?> </font></div></td> 


									<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 	
									<?php  
										echo number_format(0+$objResult2["money"]); 
									?> 
									<input type="hidden" id="moneybackday" value="<?php echo $money3; ?>" >
									</font></div></td> 
										 
									<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; ">   
							 
							  
									 <input type="hidden" name="smoneyalldata" id="smoneyalldata"  
									 value="<?php echo $countall; ?>"   class="form-control"   style="font-size: 18px; width: 100%; text-align: center; " >

									 <input type="hidden" name="billdatasave" id="billdatasave"  
									 value="<?php echo $_GET["bill_no"]; ?>"   class="form-control"   style="font-size: 18px; width: 100%; text-align: center; " >

									 <!--  สาขา  -->
									 <input type="hidden" id="majordata<?php echo $i; ?>" value="<?php echo $objResult2["major"]; ?>"   > 
									 <!--  สาขา  -->
									 <input type="hidden" id="contacdata<?php echo $i; ?>" value="<?php echo $objResult2["typedata"]; ?>"   > 

									 <input type="hidden" name="smonetotal" id="smonetotal"  
									 value="<?php echo $totalall; ?>"   class="form-control"   style="font-size: 18px; width: 100%; text-align: center; " >

									 <input type="hidden" name="savedata<?php echo $i; ?>" id="savedata<?php echo $i; ?>"  
									 value="<?php echo $objResult2["pk"]; ?>"   class="form-control"   style="font-size: 18px; width: 100%; text-align: center; " >

									 <input type="hidden" name="sumallold<?php echo $i; ?>" id="sumallold<?php echo $i; ?>"  
									 value="<?php echo $money1; ?>"   class="form-control"   style="font-size: 18px; width: 100%; text-align: center; " >

									 <input type="text" name="money<?php echo $i; ?>" id="money<?php echo $i; ?>"  value="<?php echo $money1; ?>"     style="border-radius: 5px; border: 1px solid #C9C9C9;  border: 1px solid #F77369; font-size: 14px; width: 100%; text-align: center; " onKeyUp="IsNumeric<?php echo $i; ?>()"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" <?php echo $readonly; ?>  > 

 
									 </font></div></td>  
							
							     		<script language="javascript">
										function IsNumeric<?php echo $i; ?>()
										{ 
											var total1 = document.getElementById("smoneyalldata").value;	 

											var sumallshow = 0;
											var sumallshow2 = 0;
											var sumburo = 0;
											var loop = 0;
											var end = <?php echo $countalldata; ?>;
											for (i2 = 1; i2 <= end; i2++) { 		

												var discountmoney = document.getElementById("money"+i2).value; //// รับเงินลูกค้า  
												var discountmoneysave = document.getElementById("savedata"+i2).value; ////   
												var sumallold = document.getElementById("sumallold"+i2).value; ////    
												  
												var discountprice = document.getElementById("discount"+i2).value; ////    
												  
												var Newdis = 0;
												if(discountprice == ""){
													Newdis = 0;  
												}else{
													Newdis = parseFloat(discountprice); 
												}
												

												var N1 = 0;
												if(discountmoney == ""){
													N1 = 0; 
													loop++;
													
												}else{
													N1 = parseFloat(discountmoney);

													sumallshow += N1; 
													loop = 0;
												}
												
												
												 
												var calloop =  parseFloat(loop)  - parseFloat(5);  
												if(calloop <= 0){
													calloop = 0;
												}
												var calloop2 = calloop * 50; 
												//document.getElementById("daynopayment"+i2).value = ""+calloop;
												 
												//document.getElementById("sdiscount"+i2).innerHTML = numberWithCommas2(calloop2);  
												 
												 
												var N3 = 0;
												if(sumallold == ""){
													N3 = 0;
												}else{
													N3 = sumallold;
												}
												  
												
												var sumall =  parseFloat(total1)  - parseFloat(N1); 
												var sumallnew =  parseFloat(N1)  - parseFloat(Newdis); 
												if(sumallnew <= 0){
													sumallnew = 0;
												}
												 // alert("ok//" + sumall)

												document.getElementById("sallnewpriceincome"+i2).innerHTML = numberWithCommas2(sumallnew); 
												document.getElementById("smoneypayment"+i2).innerHTML = numberWithCommas2(sumall);  
												document.getElementById("smonetotaldiscount"+i2).value =  (sumall); 
 
												// document.getElementById("moneytabtom"+i2).value =  (sumall_tabtom); 
												total1-= N1;
												
												var moneyburo = document.getElementById("moneyburo"+i2).value; ////   
												var moneyday = document.getElementById("moneytabtom"+i2).value; ////   
												var addon = document.getElementById("addon"+i2).value; ////   
												
												var Nburo = 0;
												if(moneyburo == ""){
													Nburo = 0;
												}else{
													Nburo = parseFloat(moneyburo);  /// ยอดชำระ
   
												}
												var Nday = 0;
												if(moneyday == ""){
													Nday = 0;
												}else{
													Nday = parseFloat(moneyday);  /// ยอดชำระ
   
												}
												
												//// alert(Nday + " ----  " + N1 ); 
												 
												if(addon == ""){
													sumallshow2 += Nday; 
												}
												 
												/// alert(Nday);
												var sumall =  parseFloat(sumallshow2)  - parseFloat(sumallshow);
												moneyday = sumall;
												var calburo  =   moneyday ; 
												if(calburo <= 0){
													calburo = 0;
												}
												 
												sumburo = sumall;
												if(sumburo <= 0){
												document.getElementById("showtabtoms"+i2).innerHTML = numberWithCommas2(0); 
												}else{
												document.getElementById("showtabtoms"+i2).innerHTML = numberWithCommas2(0+sumburo);
												} 
												document.getElementById("moneyburo"+i2).value =   sumburo;
												
												
											}	

											  
										}
 
										function numberWithCommas(x) {
												x = x.toString();
												var pattern = /(-?\d+)(\d{3})/;
												while (pattern.test(x))
													x = x.replace(pattern, "$1,$2");
												return x;
											}
										function numberWithCommas2(x) {
												return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
											}
										</script>
								   
								    
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px"  color="Black" style=" font-size: 13px; " >
									   
									    <input type="text" name="discount<?php echo $i; ?>" id="discount<?php echo $i; ?>"  value="<?php echo $discount; ?>"     style="border-radius: 5px; border: 1px solid #C9C9C9;  border: 1px solid #F77369; font-size: 14px; width: 100%; text-align: center; " onKeyUp="IsNumeric<?php echo $i; ?>()"  autocomplete="off"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" <?php echo $readonly; ?>  > 
 
									    </font></div></td> 
									    
									     
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									   
									    <font size="3px" id="sallnewpriceincome<?php echo $i; ?>" color="Black" style=" font-size: 13px; " >
									   
									    <?php 
									
											$newprice = $money1-$discount;
											if($newprice <= 0){
												$newprice = 0;
											}
											echo number_format(0+$newprice); 
											
											?> 
									    
									    </font> 
									     
									    </font></div></td>   
									       
									         
									    
									  
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									   
									    <font size="3px" id="sdiscount<?php echo $i; ?>" color="Black" style=" font-size: 13px; " >
									  
									    <?php echo number_format(0+$totalshow); ?> 
									    
									    </font> 
									 	<!--  วันค่าปรับ  -->
										<input type="hidden" id="daynopayment<?php echo $i; ?>" value="<?php echo $chk_total; ?>"   > 
									     
									    <input type="hidden" name="getpaymentother<?php echo $i; ?>" id="getpaymentother<?php echo $i; ?>"     value="<?php echo $discountshow; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9;  border: 1px solid #F77369; font-size: 14px; width: 100%; text-align: center; "  onKeyUp="IsNumeric<?php echo $i; ?>()" onChange="IsNumeric<?php echo $i; ?>()" autocomplete="off"   <?php echo $readonly; ?>    >
 
									    </font></div></td> 
									  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
										<font size="2px" color="red" id="smoneypayment<?php echo $i; ?>"  style=" font-size: 13px; ">  <b> <?php echo number_format(0+$totalall); ?> </b> </font>    
										
						 				<input type="hidden" name="smonetotaldiscount<?php echo $i; ?>" id="smonetotaldiscount<?php echo $i; ?>" value="<?php echo $totalall; ?>"   class="form-control"   style="font-size: 14px; width: 100%; text-align: center; " > 
						 				
										</font></div></td> 
										 
										    
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> 
											
										 
										<font size="2px" color="Black" style=" font-size: 13px; " id="showtabtoms<?php echo $i; ?>"> 
										 <?php echo number_format(0+$discoount_cut1); ?> 
										</font>
										
										<font size="2px" color="Black" style=" font-size: 13px; display: none; " id="showtabtom<?php echo $i; ?>"> 
										 <?php echo $discoount_cut1; ?> 
										</font>
											 
						 				<input type="hidden" name="moneytabtom<?php echo $i; ?>" id="moneytabtom<?php echo $i; ?>" value="<?php echo $discoount_cut1; ?>"   class="form-control"   style="font-size: 14px; width: 100%; text-align: center; " >
										  
										  
									 	<!--  ยอดเงินทบ  -->
										<input type="hidden" id="moneyburo<?php echo $i; ?>" value="<?php echo $discoount_cut1; ?>"   > 
										<input type="hidden" id="moneyday<?php echo $i; ?>" value="<?php echo $money3; ?>"   > 
										<input type="hidden" id="addon<?php echo $i; ?>" value="<?php echo $objResult2["addon"]; ?>"   > 
								   
								   
								   
										</font></div></td>  
										
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; ">  
										<?php if($closebill == "หมดหนี้"){ 
										    if(!empty($date_start2)){
													echo DateThai($date_start2)." ".DateThai2($date_start2);
											}
									 	}else{  
											$daystartloaddata = $daystart;
										    if(!empty($date_start2)){ 
											$daystartloaddata = date("d/m/Y", strtotime($date_start2));
											} 
										?>

										<input type="text" class=" current " id="startdatesave<?php echo $objResult2["pk"]; ?>" name="startdatesave<?php echo $objResult2["pk"]; ?>"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9;  border: 1px solid #F77369; font-size: 14px; width: 100%; text-align: center; "  value="<?php echo $daystartloaddata; ?>" onChange="calAge2save<?php echo $i; ?>(<?php echo $objResult2["pk"]; ?>)"    >
										<?php } ?>

										<input type="hidden" id="daybacksave1<?php echo $objResult2["pk"]; ?>" value="<?php echo $daystart; ?>" >
										<input type="hidden" id="daybacksave2<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["create_date2"]; ?>" >

										<script> 
										function calAge2save<?php echo $i; ?>(Savedata) 
										{

										 var datasaveok = Savedata; 
										 var datasaveok2 = document.getElementById("startdatesave"+Savedata).value; 
										 var datasaveok3 = document.getElementById("billdatasave").value; 
										 var datasaveok4 = document.getElementById("daybacksave1"+Savedata).value; 
										 var datasaveok5 = document.getElementById("daybacksave2"+Savedata).value; 

											var jsonString = ""; 

											///  alert( "save_Chgdate2.php?pksave="+datasaveok+"&date="+datasaveok2+"&bill="+datasaveok3+"&dateback="+datasaveok4 );
											$.ajax({
													type: "POST",
													url: "save_Chgdate2.php?pksave="+datasaveok+"&date="+datasaveok2+"&bill="+datasaveok3+"&dateback="+datasaveok4,
													contentType: 'application/json',
													data: jsonString,
													success: function(result) {  

													}
												});  


											alert(" Save Complete ");

										 }
										</script>  
 
										</font></div></td>  
										
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $namestaff;?></font></div></td>  
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["date_time"];?></font></div></td>  
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										<a href="uploadslip.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&round=<?php echo $objResult2["pk"]; ?>"   class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;  margin-top: -5px; " >
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										อัพสลิป   
										</font>  
										</a> 
										</font></div></td> 


										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										ประวัติ   
										</font>  
										</a> 
										
										
										<!-- modal small -->
										<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												<div class="col-lg-12" align="left"   >   
												<font size="3px" color="black" style="font-size: 14px;">   
												<?php
												$ic = 1;
												$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."' 
												 and create_date = '". $objResult2["pk"] ."'
												order by pk desc  ";   
												$query_v = mysqli_query($objCon,$sql_v);
												while($objResult_v = mysqli_fetch_array($query_v))
												{
														$memberlast1 = "";
														$memberlast2 = "";
														$memberlast3 = "";

														$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
														$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
														while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
														{
															$memberlast1 = $objResult_getstaff["name"];  
														} 

														$memberlast2 = $objResult_v["create_date2"];
														$memberlast3 = $objResult_v["create_time"];

														echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
															" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br>
															-------------------------- <Br> ";

													$ic++;
												} 
												?> 
												</font> 
												</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										</font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<?php 
											$daystart_load = date("d/m/Y", strtotime($objResult2["datestart"])); 
										?>
										<a href="savepayment.php?searchname=<?php echo $daystart_load; ?>"   class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;  margin-top: -5px; " >
										<font size="3px" color="Black" style=" font-size: 13px; " > 
										คลิก   
										</font>  
										</a> 
										</font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
										<?php 
									
										$hd = "   ";
										if(empty($money1)){ 
											$hd = " display: none; ";
										}
											
										?>
										<a href="printbill2.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&round=<?php echo $objResult2["pk"]; ?>&rounddata=<?php echo $i; ?>" target="_blank"  class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;    margin-top: -5px; <?php echo $hd; ?>  " >
										<font size="3px" color="Black" style=" font-size: 12px; " > 
										พิมพ์   
										</font>  
										</a> 
										
										
										</font></div></td>
										</tr>  
										<?php $i++; } ?>
								</tbody>
  
										 
							</table>  
							</div>
						  </div>
                    
                     
                   	  <?php } ?>
                   		    
                   		  
					   <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
							
						$getbill = $_GET["bill_no"];
							
						$countloopnopay = 1;
						$moneypaymentall = 0;
							
						$totalprice1 = 0;
						$totalprice2 = 0;
							
						$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
						$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($loaddate)));
						$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $getbill ."'  ".$code_check2." order by pk asc ";  
						$query_npl = mysqli_query($objCon,$sql_npl); 
						while($objResult_npl = mysqli_fetch_array($query_npl))
						{   
							if(!empty($objResult_npl["income"])){ 
								$moneypaymentall += $objResult_npl["income"];
							}
 
							
							/*
							if($countloopnopay >= 5){ 
								if(!empty($objResult_npl["income"])){  
									//$chk_total = 0; 
									//$countloopnopay = 0;
									
									$checkpaymentday = "ON";
									$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$getbill."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
							$countloopnopay++;
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

										$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$bill_no."' and date_start2 = '".$objResult_npl["create_date2"]."'   "; 
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
							
						$totalprice1 = ( $chk_total * 50 ); 
						$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$totalprice2 += $objResult["price"] + $objResult["discount"]; 

						}  
							
						$totalshow = $totalprice1 - $totalprice2;
						if($totalshow <= 0){
							$totalshow = 0;
						}
							
							
						$searchname = date('d/m')."/".(date('Y'));
							
						$price = "";
						$discount = "";
					?> 
                        <div class="col-md-12" style=" margin-top: 25px; " > </div>
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
							yearRange: "-1:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
 
						  <script type="text/javascript"> 
						function calTotalall()
							{   
								var gemoneydata = document.getElementById("showdata").value; ///  
								var gemoneydata2 = document.getElementById("dprice").value; ///  
								var gemoneydata3 = document.getElementById("ddiscount").value; ///  
								var gemoneydata4 = document.getElementById("totaldiscount").value; ///  
								
								 
								
								var data1 = 0;
								if(gemoneydata2 == ""){

								}else{
									data1 = parseFloat(gemoneydata2);
								} 
								var data2 = 0;
								if( gemoneydata3  == ""){

								}else{
									data2 = parseFloat(gemoneydata3);
								} 
								var data3 = 0;
								if( gemoneydata  == ""){

								}else{
									data3 = parseFloat(gemoneydata);
								}  
								
								
								var sumall = data3 - (data1+data2)  ;
								if(sumall <= 0){
									sumall = 0;
								}
								
								document.getElementById("totaldiscount").value = sumall; 
								
							}
						 </script>
                 		  
                  		  <form role="form" name="frmMain" method="post" action="save_payment_other_bill_no.php" enctype="multipart/form-data"  >
						  <input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $getbill; ?>" >
                      	   
                  		  <div class="col-lg-4 ">  
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่ทำรายการ </font> 
							   <input type="text" class="form-control current " id="datestart" name="datestart"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $searchname; ?>" readonly   >
							</div>
						  </div>    
						   
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าปรับสะสม </font> 
							   <input type="text" class="form-control" id="showdata" name="showdata"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $totalshow; ?>" readonly   >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > รับยอดค่าปรับ </font> 
							   <input type="text" class="form-control" id="dprice" name="dprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $price; ?>"  onKeyUp="calTotalall()"  onChange="calTotalall()" >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ส่วนลด </font> 
							   <input type="text" class="form-control" id="ddiscount" name="ddiscount"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $discount; ?>"  onKeyUp="calTotalall()"  onChange="calTotalall()" >
							</div>
						  </div> 
                      	  <div class="col-md-4"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > คงเหลือ </font> 
							   <input type="text" class="form-control" id="totaldiscount" name="totaldiscount"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; " readonly   >
							</div>
						  </div> 
						  
						  
						     
								  <div class="col-md-6"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
									   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
										<select class="form-control" id="payment" name="payment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
										<?php if(empty(payment)){ ?>
										<option value=""> เงือนไขการชำระเงิน </option>
										<?php } ?> 
										<?php 
										$sql = "SELECT * FROM drop_payment where name = '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php 
										$sql = "SELECT * FROM drop_payment where name != '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php if(!empty(payment)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
										</select>
										<span class="input-group-append" style=" display: none; ">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>



								  <div class="col-md-6"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > บัญชีการโอนเงิน    </font>   
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
										<?php if(!empty($bank)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
										</select>   
										<span class="input-group-append" style=" display: none; ">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>

						  
						  
						  
						  
						  </div>
							   
                           
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #76622F; border-radius: 5px; width: 130px; height: 40px; border-color: #76622F; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="view_history.php?bill_no=<?php echo $getbill; ?>">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
						  </div>   
                             
					   	  </form> 
					   	  
						  <div class="col-lg-12">
							<hr>
						  </div> 
					   	   
                     	  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							 <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่ใบเสร็จค่าปรับ   </font></div></th>    
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันเดือนปี  </font></div></th>      
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เวลา  </font></div></th>  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    พนักงานทำรายการ  </font></div></th>  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดค่าปรับ  </font></div></th>  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ประวัติการแก้ไข  </font></div></th>  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    พิมพ์  </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
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
							$sql2 = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' order by pk desc     ";  

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

							?> 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["date_start"])." ".DateThai2($objResult2["date_start"]); ?> </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["date_time"]; ?> </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+ $objResult2["price"] ); ?> </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<a data-toggle="modal" data-target="#smallmodalre<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
							<font size="3px" color="Black" style=" font-size: 13px; " > 
							ประวัติ   
							</font>  
							</a> 
										
										
							<!-- modal small -->
							<div class="modal fade" id="smallmodalre<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									<div class="col-lg-12" align="left"   >   
									<font size="3px" color="black" style="font-size: 14px;">   
									<?php
									$ic = 1;
									$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'   
									order by pk desc  ";   
									$query_v = mysqli_query($objCon,$sql_v);
									while($objResult_v = mysqli_fetch_array($query_v))
									{
											$memberlast1 = "";
											$memberlast2 = "";
											$memberlast3 = "";

											$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
											$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
											while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
											{
												$memberlast1 = $objResult_getstaff["name"];  
											} 

											$memberlast2 = $objResult_v["create_date2"];
											$memberlast3 = $objResult_v["create_time"];

											echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
												" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) . " </font>   <Br>
												-------------------------- <Br> ";

										$ic++;
									} 
									?> 
									</font> 
									</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 


							</font></div></td> 
						
						
						
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										
							<?php  
							$hd = "   "; 
							?>
							<a href="printbill2_re.php?bill_no=<?php echo $getbill; ?>&bill_new=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;    margin-top: -5px; <?php echo $hd; ?>  " >
							<font size="3px" color="Black" style=" font-size: 12px; " > 
							พิมพ์   
							</font>  
							</a> 


							</font></div></td>
							
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

							<a href="view_history.php?CusID=<?php echo $objResult2["pk"];?>&page=2&bill_no=<?php echo $getbill; ?>" class="  btn-sm " style="background-color: #F8741D; border-radius: 5px;  border-color: #F8741D; border: 1px solid  #F8741D;   " >
							<font size="3px" color="#FFF" style=" font-size: 13px; " >  แก้ไข </font></a>

							</font></div></td> 


							</tr>  
							<?php $i++; } ?>
							</tbody>	 
  
										 
							</table>  
							</div>
						  </div>
					   	  
					   	  
					<?php } } ?>
					
					
					
					 <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "2" ){
							
						$getbill = $_GET["bill_no"]; 
							 
							 
						$sql = "SELECT * FROM payment_other_bill_no Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$price = $objResult["price"]; 
							$discount = $objResult["discount"]; 
							$datestart = $objResult["datestart"]; 
							$bill_no_ref = $objResult["bill_no"]; 
							$payment = $objResult["payment"]; 
							$bank = $objResult["bank"]; 

						} 
							 
					?> 
                        <div class="col-md-12" style=" margin-top: 25px; " > </div>
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
							yearRange: "-1:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>

                 		   
                  		  <form role="form" name="frmMain" method="post" action="save_payment_other_bill_no_update.php" enctype="multipart/form-data"  >
						  <input type="hidden" name="bill_no" id="bill_no" class="form-control " value="<?php echo $getbill; ?>" >
						  <input type="hidden" name="bill_no_ref" id="bill_no_ref" class="form-control " value="<?php echo $bill_no_ref; ?>" >
						  <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"] ; ?>" >
                      	  
                      	  
                  		  <div class="col-lg-4 ">  
                      	  <div class="col-md-12"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่ทำรายการ </font> 
							   <input type="text" class="form-control current " id="datestart" name="datestart"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $datestart; ?>" readonly   >
							</div>
						  </div>    
						    
                      	  <div class="col-md-6"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > รับยอดค่าปรับ </font> 
							   <input type="text" class="form-control" id="dprice" name="dprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $price; ?>"  onKeyUp="calTotalall()"  onChange="calTotalall()" >
							</div>
						  </div> 
                      	  <div class="col-md-6"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > ส่วนลด </font> 
							   <input type="text" class="form-control" id="ddiscount" name="ddiscount"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $discount; ?>"  onKeyUp="calTotalall()"  onChange="calTotalall()" >
							</div>
						  </div>  
						  </div>
						   
						   
						   
								  <div class="col-md-6"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
									   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
										<select class="form-control" id="payment" name="payment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
										<?php if(empty($payment)){ ?>
										<option value=""> เงือนไขการชำระเงิน </option>
										<?php } ?> 
										<?php 
										$sql = "SELECT * FROM drop_payment where name = '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php 
										$sql = "SELECT * FROM drop_payment where name != '".$payment."' order by pk asc  "; 
										$query = mysqli_query($objCon,$sql);
										while($objResult = mysqli_fetch_array($query))
										{ 
										?>
										<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
										}
										?>   
										<?php if(!empty($payment)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
										</select>
										<span class="input-group-append" style=" display: none; ">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>



								  <div class="col-md-6"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > บัญชีการโอนเงิน    </font>   
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
										<?php if(!empty($bank)){ ?>
										<option value=""> ไม่เลือก </option>
										<?php } ?>  
										</select>   
										<span class="input-group-append" style=" display: none; ">
										<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
											<img src="images/down.png" style="width: 15px;">		 
										</button>
										</span>
										</div> 
									</div>
								  </div>

						  
						  
						  
						  
							   
                           
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #76622F; border-radius: 5px; width: 130px; height: 40px; border-color: #76622F; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
							  	  <a href="view_history.php?bill_no=<?php echo $getbill; ?>&page=1">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
  top: -10px;
  left: 0;
  height: 30px;
  width: 30px; 
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
  left: 8px;
  top: 2px;
  width: 12px;
  height: 20px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<?php
include('footer2.php');
?>