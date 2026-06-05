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

	$major = 1;
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกยอดชำระหนี้   </font>   
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
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้   </font>   
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
							yearRange: "+0:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                         
                        
                    	<div   class="col-lg-4"  align="left" style=" display: none; "  > 
						<table width="100%">
						<tr> 
							<td width="40%"> 
							<font color="black" size="3px" class="serif">  เลือกวันที่ค้นหา    </font>

							<form action="savepayment_select2.php" method="get" >
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
                     
                     
                      
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                         <font size="3px" color="#000000">   ประจำวันที <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load); ?>  เวลาอัพเดทล่าสุด <?php echo date('H:i'); ?> น  </font>   
						 </div>
                     
                     
                          	<?php
							$colorbtns1s = " background-color: #006400; border-radius: 5px;  height: 40px;  border-color: #006400; margin-top: 10px; ";
							$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 10px; ";
							$colorbtns3s = " background-color: #00008B; border-radius: 5px;  height: 40px;  border-color: #00008B; margin-top: 10px; ";
							$colorbtns4s = " background-color: #00CED1; border-radius: 5px;  height: 40px;  border-color: #00CED1; margin-top: 10px; ";
							$colorbtns5s = " background-color: #2F4F4F; border-radius: 5px;  height: 40px;  border-color: #2F4F4F; margin-top: 10px; ";
							$colorbtns6s = " background-color: #9400D3; border-radius: 5px;  height: 40px;  border-color: #9400D3; margin-top: 10px; ";
							$colorbtns7s = " background-color: #FF1493; border-radius: 5px;  height: 40px;  border-color: #FF1493; margin-top: 10px; ";
							$colorbtns8s = " background-color: #FFD700; border-radius: 5px;  height: 40px;  border-color: #FFD700; margin-top: 10px; ";
							$colorbtns9s = " background-color: #F08080; border-radius: 5px;  height: 40px;  border-color: #F08080; margin-top: 10px; ";

							$txtcolor1 = "#FFF"; 
							$txtcolor2 = "#FFF"; 
							$txtcolor3 = "#FFF"; 

							$p_total1 = 0;
							$p_total2 = 0;
							$p_total3 = 0;
							$p_total4 = 0;
							$p_total5 = 0;
							$p_total6 = 0;
							$p_total7 = 0;
							$p_total8 = 0;
							$p_total9 = 0;
							$p_total10 = 0;
							$addcode = "";  
							$addcode3 = "";   
							$addcode = " and a.major = '".$major."'  "; 
							$addcode2 = "and a.datestart = '".$daystart_load."' ";
													 
							 /*	 
							$sql2 = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, c.c_company, c.n_total, c.daytotal, c.dayprice   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != ''  
							and a.closebill = 'เป็นหนี้'   
							and a.status = 'ปกติ'     
							".$addcode.$addcode2.$addcode3."    
							order by a.pk asc    ";  
							
													  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$bill_no = $objResult2["bill_no"];
								$memberpk = $objResult2["customer"];
								
								 
								///$p_total1 += $objResult2["daytotal"] * $objResult2["dayprice"]; 
								
								
								if(!empty($objResult2["income"])){
									$p_total1 += $objResult2["income"];  
								} 
								 
								if(($objResult2["onoff_copy"]  == "ปกติ")){
									$p_total2 += $objResult2["income"];  
								} 
								if(($objResult2["onoff_copy"]  == "NPL")){
									$p_total3 += $objResult2["income"];  
								} 
								
								if(!empty($objResult2["c_company"])){
									$p_total7 += $objResult2["c_company"];  
								} 
								if(!empty($objResult2["n_total"])){
									$p_total8 += $objResult2["n_total"];  
								} 
								
								 
								$sql = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $bill_no ."' and date_start  = '".$daystart_load."' ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$p_total4 += $objResult["price"]; 
								}
								
								$sql = "SELECT * FROM money_customer_bank  
								where money != '' and bill_no = '".$bill_no."' 
								and ( typegetpayment = 'โอนผ่านบัญชีบริษัท' or typegetpayment = 'รับเงินสด' )
								and create_date  = '".$daystart_load."'
								order by pk asc   ";  
	 							$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$p_total5 += $objResult["price"]; 
								}
								 
							 }	
												 
							$sql = "SELECT * FROM member_bank where  create_date = '".$daystart_load."'    and typedata = 'ฝากเงิน' order by pk desc";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$p_total6 += $objResult["price"];  
							}
													  
							$sql = " SELECT * FROM payment_other where  price != ''  and major = '".$major."'  and create_date = '".$daystart_load."' order by  pk asc   ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$p_total9 += $objResult["price"];  
							}				 
								 */
							?>
                            <div   class="col-lg-12"  align="left" style=" display: none; "  >   
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   แสดงยอดรับเงิน  <?php echo number_format(0+$p_total1); ?>   </font> </button>  
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ยอดชำระสินเชื่อ ปกติ   <?php echo number_format(0+$p_total2); ?>   </font> </button>  
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ยอดชำระสินเชื่อ NPL  <?php echo number_format(0+$p_total3); ?>   </font> </button>  
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns4s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ยอดชำระค่าปรับ  <?php echo number_format(0+$p_total4); ?>   </font> </button> 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns5s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ยอดเงินฝากเข้าสัญญา  <?php echo number_format(0+$p_total5); ?>   </font> </button> 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns6s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ยอดเงินฝากเงินออม  <?php echo number_format(0+$p_total6); ?>   </font> </button> 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns7s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ค่ายกเลิกสัญญา   <?php echo number_format(0+$p_total7); ?>   </font> </button> 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns8s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   ค่าปิด/คืนเครือง   <?php echo number_format(0+$p_total8); ?>   </font> </button> 
							<button type="button"  class="btn btn-sm btn-primary" style=" <?php echo $colorbtns9s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" style=" font-size: 14px; " >   รายได้อื่นๆ   <?php echo number_format(0+$p_total9); ?>   </font> </button> 
 
							</div> 
                          
						    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px;"   >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-top-left-radius: 10px; "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดหนี้ปัจจุบัน  </font></div></th>   
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

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-right: 1px solid #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th>

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-right: 1px solid #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สัญญาปกติ   </font></div></th>


								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-right: 1px solid #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สัญญา NPL   </font></div></th>

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF; border-right: 1px solid #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ปริ้นสัญญาปกติ   </font></div></th>
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-top-right-radius: 10px;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ปริ้นสัญญา NPL    </font></div></th>  
							 </tr>
						  </thead>  
										 
										 
							 <tbody>
									 
									 
									 	<?php 
										$bg = "#F8FAFD"; 
										
										$sql2 = "SELECT * FROM major where name != '' order by pk asc   ";   
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
										$sql = " SELECT * FROM list_order where 
										major = '".$objResult2["pk"]."'  
										and status = 'ปกติ' 
										and closebill = 'เป็นหนี้'  
										order by pk asc ";  
										$query = mysqli_query($objCon,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{  
											$totalprice1 += $objResult["daytotal"] * $objResult["dayprice"]; 
													 
											$sql_cc = " SELECT *  FROM update_real_time where  
											bill_no = '".$objResult["bill_no"]."' 
											and status like  '%เปลี่ยนวัน%'
											and create_date2 = '".$daystart_load2."'
											Group By bill_no
											order by pk asc ";   
											////echo $sql_cc."<Br>";
											$query_cc = mysqli_query($objCon,$sql_cc); 
											while($objResult_cc = mysqli_fetch_array($query_cc))
											{  
												$day_cancel++; 
											}

										}
										*/
											
											
										$payment = 0; 
										$payment_n = 0; 
										$payment_npl = 0; 
										$payment_income = 0; 
											
										/*
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
											
										*/	
									 	$totalload =  ( $payment_n + $payment_npl ) - $payment_income;
											
											if($totalload <= 0){
												$totalload = 0;
											}
									 
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice1); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$payment); ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$payment_n); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$payment_npl); ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $day_cancel; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$payment_income); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalload) ; ?>  </font></div></td> 
										  

										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

										<a href="savepayment.php?searchname=<?php echo $searchname; ?>&searchname3=<?php echo $objResult2["pk"];?>"    >
										<button type="button" class="btn btn-sm btn-primary" style="  background-color: #006400; border-radius: 5px;  border-color: #006400; margin-top: -5px;   " > <font color="#FFF" size="3px" class="serif1" style=" font-size: 13px; " >    บันทึกยอด     </font> </button> </a>

										</font></div></td> 


										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

										<a href="savepayment_npl.php?searchname=<?php echo $searchname; ?>&searchname3=<?php echo $objResult2["pk"];?>"    >
										<button type="button" class="btn btn-sm  btn-primary" style=" background-color: #4B5E69; border-radius: 5px;   border-color: #4B5E69;  margin-top: -5px;    " > <font color="#FFF" size="3px" class="serif1"style=" font-size: 13px; "  >    บันทึกยอด     </font> </button> </a>

										</font></div></td> 



										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >      
										<a href="printround1.php?major2=<?php echo $objResult2["pk"];?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $objResult2["pk"];?>"  class="btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;  margin-top: -5px;   " target="_blank"  ><font size="3px" color="red" style=" font-size: 13px; " > ปริ้น </font></a>   

										</font></div></td> 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >     

										<a href="printround2.php?major2=<?php echo $objResult2["pk"];?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $objResult2["pk"];?>"  class="btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;  " target="_blank" ><font size="3px" color="red" style=" font-size: 13px; " > ปริ้น </font></a>   

										</font></div></td> 

									</tr>  
									<?php } ?>
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
                          <bR><bR><bR><br>    
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>