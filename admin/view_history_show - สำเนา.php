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
				$codecustomer = $objResult["codecustomer"];
			}

 
			$sql = "SELECT * FROM customer Where  pk = '". $customer ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
					$bill_no_customer = $objResult["bill_no"]; 

					$title = $objResult["title"];    
					$name = $objResult["name"];    
					$bridedate = $objResult["bridedate"];    
					$age = $objResult["age"];    
					$nickname = $objResult["nickname"];    
					$address = $objResult["address"];    
					$address1 = $objResult["address1"];    
					$address2 = $objResult["address2"];    
					$address3 = $objResult["address3"];    
					$address4 = $objResult["address4"];    
					$telphone = $objResult["telphone"];    
					$facebook = $objResult["facebook"];    
					$line = $objResult["line"];    
					$telphoneadd = $objResult["telphoneadd"];    
					$ashap = $objResult["ashap"];    
					$pricemonth = $objResult["pricemonth"];    
					$pricetotal = $objResult["pricetotal"];    
					$passport = $objResult["passport"];    
					$drop_people = $objResult["drop_people"];    
					$drop_sex = $objResult["drop_sex"];   



					$title2 = $objResult["title2"];    
					$name2 = $objResult["name2"];    
					$bridedate2 = $objResult["bridedate2"];    
					$age2 = $objResult["age2"];    
					$nickname2 = $objResult["nickname2"];    
					$address25 = $objResult["address25"];    
					$address21 = $objResult["address21"];    
					$address22 = $objResult["address22"];    
					$address23 = $objResult["address23"];    
					$address24 = $objResult["address24"];    
					$telphone2 = $objResult["telphone2"];    
					$facebook2 = $objResult["facebook2"];    
					$line2 = $objResult["line2"];    
					$telphoneadd2 = $objResult["telphoneadd2"];    
					$ashap2 = $objResult["ashap2"];    
					$pricemonth2 = $objResult["pricemonth2"];    
					$pricetotal2 = $objResult["pricetotal2"];     
					$drop_sex2 = $objResult["drop_sex2"];   
					$baby2 = $objResult["baby2"];   

				} 

			$all_address = "";
			$sql = "SELECT * FROM data1 where PROVINCE_ID = '".$address1."'   order by PROVINCE_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$all_address = $all_address." จังหวัด : ".$objResult["PROVINCE_NAME"];
			}

			$sql = "SELECT * FROM data2 where PROVINCE_ID = '".$address1."' 
			and AMPHUR_ID = '".$address2."'  order by AMPHUR_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 

					$all_address = $all_address." อำเภอ : ".$objResult["AMPHUR_NAME"];
			}
			$sql = "SELECT * FROM data3 where PROVINCE_ID = '".$address1."' 
			and AMPHUR_ID = '".$address2."' and DISTRICT_CODE = '".$address3."'  order by DISTRICT_ID asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$all_address = $all_address." ตำบล : ".$objResult["DISTRICT_NAME"];
			}



			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
			$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

			if($closebill == "หมดหนี้"){
				$code_check2 = "";
			}else{ 
				$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
				$code_check2 = "";
			} 
 			  				
			$no_p1 = 0;
			$no_p2 = 0;
			$no_p3 = 0;
			$chk_total = 0;
			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
			$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($loaddate)));
			$code_check = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_npl = " SELECT * FROM history_payment Where  bill_no = '".$bill_no."'  ".$code_check."  order by pk asc ";  
			$query_npl = mysqli_query($objCon,$sql_npl); 
			 
			while($objResult_npl = mysqli_fetch_array($query_npl))
			{    
				if(!empty($objResult_npl["income"])){  

					$countloopnopay = 0;
					$chk_total = 0;
				}else{
					$countloopnopay++;
				} 



				if($countloopnopay >= 5){ 
					if(!empty($objResult_npl["income"])){  
							$chk_total = 0; 
					}else{
							$chk_total++;
					} 
				}	 
				
				
				 
				if($objResult_npl["typesave"] == "ชำระหักเงินฝาก"){
					$no_p1++;
				}
				if($objResult_npl["typesave"] == "ชำระ2ทาง"){
					$no_p2++; 
				}
				if($objResult_npl["typesave"] == "ชำระกรอกเอง"){
					$no_p3++; 
				}
			}

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  สเตทเม้นชำระหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สเตทเม้นชำระหนี้  </font>   
                     <div > &nbsp; </div>
                  </div> 
                  </font> 
                  </div>
             
               <div class="row"  >
              <div class=" col-lg-12 "  style="margin-top: -15px;"  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                  
                      <?php if(empty($_GET["page"])){ ?>
                       
      		   
     		    	 
     		    	 <div class="col-lg-12" align="right">
						   <a href="print_view_history_show.php?bill_no=<?php echo $_GET["bill_no"]; ?>&customer=<?php echo $customer; ?>"  target="_blank" >

						  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" > ปริ้นเอกสาร  </font> </button> 

						  </a>
					  </div>
     		    	 
     		    	 
      		    	 <div class="col-lg-12" align="left">
					  <div class="row"  align="left">
					  <div class="col-lg-6" style=" margin-top: 10px; " align="left">
                      <font size="3px" color="#000000"> 
						ข้อมูลลูกค้า : <?php echo $name; ?>  &nbsp; รหัสลูกค้า : <?php echo $codecustomer; ?>
						<div style=" margin-top: 5px; " > </div>
						ที่อยู่  : <?php echo $all_address; ?>
						<div style=" margin-top: 5px; " > </div>
						โทร : <?php echo $telphone; ?>
						<div style=" margin-top: 5px; " > </div>
						เลขที่สัญญา : <?php echo $bill_no; ?>
						<div style=" margin-top: 5px; " > </div> 
					  </font>
					  </div>
					  <div class="col-lg-1"  style=" margin-top: 10px; " > </div>
                          
					  <div class="col-lg-5"  style=" margin-top: 10px; " >
						<table width="100%" border="1">
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">  &nbsp;  เลขที่สัญญา  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $bill_no; ?> &nbsp;  </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  ชื่อเจ้าของสัญญา  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $name; ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  วันเริ่มสัญญา  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php  
									  
								 echo DateThai($showstart)." ".DateThai2($showstart) ." ถึงวันที่ ".  DateThai($showend)." ".DateThai2($showend);  
									 
								 ?> 
								 &nbsp; </font>
								</td>
							</tr> 
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  ยอดหนี้  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$totalprice1); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  จำนวนผ่อนครบ  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $daytotal_end; ?>  เดือน  สถานะสัญญา  <?php 
								 if($onoff_copy == "ปกติ"){
									 echo " <font color = 'darkgreen' > " . $onoff_copy . " </font> "; 
								 }else{
									 echo " <font color = 'red' > " . $onoff_copy . " </font> ";  
								 } 
								 ?> &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  จำนวนขาดส่ง  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$chk_total); ?> วัน  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระเงินสด  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p3); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระหักเงิน  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p1); ?>  &nbsp; </font>
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  รูปแบบชำระ 2 ทาง &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$no_p2); ?>  &nbsp; </font>
								</td>
							</tr>
							 
							 
							  
						</table>
					  </div>
					  </div>
					  </div>
                        
					  <div class="col-lg-6">
						<hr>
					  </div>
                        
      		    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1950px; "    >
							 <thead> 
								<tr>
												<th width="1%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันครบกำหนดชำระ  </font></div></th>   
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   งวดที่     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระ   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระจริง     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับ   </font></div></th>     
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าปรับเก็บจริง   </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดหนี้คงเหลือ     </font></div></th>   
												  
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดทบ    </font></div></th>  
												
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th>    
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> เวลาล่าสุด     </font></div></th>    
												 
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สลิป     </font></div></th>  
												  
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติ    </font></div></th> 
												  
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไขยอด    </font></div></th>  
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบชำระ    </font></div></th>
												<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ    </font></div></th>
												 
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
								$checkorderdata = "";
 
								$totalall =  $totalprice1 ;    
								$countall =  $totalprice1 ;
													 
								$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
								$checkend = date("Y-m-d", strtotime($loaddate));  /// วันที่เลือกล่าสุด 
								//$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
										   
													 
								$sql2 = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   ".$code_check2."   order by create_date2 asc ";  
													 
								/// echo $sql2;
								$query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{     
									
									$daystart = date("d/m/Y", strtotime($objResult2["datestart"]));
									$daystart2 = date("Y-m-d", strtotime($objResult2["create_date2"]));
									
									$countloopnopay = 0;
									$chk_total = 0;
									
									$discoount_cut1 = 0;
									$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
									$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart2)));
									$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $bill_no ."'  ".$code_check2." ";
									 //// echo $sql_npl."<br>";
									$query_npl = mysqli_query($objCon,$sql_npl); 
									while($objResult_npl = mysqli_fetch_array($query_npl))
									{   
										 
											$price1 = 0;
											if(!empty($objResult_npl["income"])){ 
												$price1 = $objResult_npl["income"];    
												$countloopnopay = 0; 
												$chk_total = 0; 
											}else{
												$countloopnopay++;
											} 
										 
									
											if($countloopnopay >= 5){ 
												if(!empty($objResult_npl["income"])){  
													$chk_total = 0; 
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
									
									$countalldata = 0;
									$sql = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$countalldata++; 
									}
 
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
									 
										$status_payment_bg = "#006400";
										$status_payment = " <font color = '#FFF' > ชำระปกติ </font>  ";
								?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
									
										if(empty($checkorderdata)){
											$checkorderdata = ($objResult2["orderdata"]+1); 
												echo $i;
										}else{
											$cal = ($objResult2["orderdata"]+1);
											if($checkorderdata == $cal){ 
												echo " - ";
												 
												$status_payment_bg = "#FF0000";
												$status_payment = " <font color = '#FFF' > ขาดส่ง </font>  ";
												 
											}else{ 
												$checkorderdata = ($objResult2["orderdata"]+1);
												$i++; 
												echo $i;
											}
										}
									
									
										if($objResult2["addon"] == "ไม่นับ"){
											
												$status_payment_bg = "#FF0000";
												$status_payment = " <font color = '#FFF' > ขาดส่ง </font>  ";
										}
										?>  
									 	</font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										
										<?php 
											echo "   ". DateThai($objResult2["datestart"])." ". DateThai2($objResult2["datestart"])  ;
										 ?>
									     
										</font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo ($objResult2["orderdata"]+1); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 	
										<?php  
											echo number_format(0+$objResult2["money"]); 
										?> 
										<input type="hidden" id="moneybackday" value="<?php echo $money3; ?>" >
										</font></div></td> 
										 
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; ">   
											 <?php echo  number_format(0+$money1); ?> 
										</font></div></td>  
							 
									  
									   <td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									  
									  
									   <font size="3px" id="sdiscount<?php echo $i; ?>" color="Black" style=" font-size: 13px; " >
									  
									    <?php echo number_format(0+$chk_total*50); ?> 
									    
									   </font>
									     
  										</div></td> 
									   
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
									     <?php echo number_format(0+$objResult["paymentother"]); ?>
									    </font></div></td> 
									  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										  
										<font size="2px" color="red" id="smoneypayment<?php echo $i; ?>"  style=" font-size: 13px; ">  <b> <?php echo number_format(0+$totalall); ?> </b> </font>     
										 
										</font></div></td> 
										 
										    
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> 
											
										 
										<font size="2px" color="Black" style=" font-size: 13px; " id="showtabtoms<?php echo $i; ?>"> 
										 <?php echo number_format(0+$discoount_cut1); ?> 
										</font>
										
										<font size="2px" color="Black" style=" font-size: 13px; display: none; " id="showtabtom<?php echo $i; ?>"> 
										 <?php echo $discoount_cut1; ?> 
										</font>
											  
										</font></div></td>  
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $namestaff;?></font></div></td>  
										
										<td><div align="center"><font size="2px" color="Black" style=" font-size: 13px; "> <?php echo $objResult2["date_time"];?></font></div></td>  
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
										
										 		
										<a data-toggle="modal" data-target="#Loadimg<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   "  >    คลิก </a> 
											 		
										
				   
									   <!-- modal small -->
										<div class="modal fade" id="Loadimg<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div class="row">      
												  <div class="col-md-12"> 

												   <?php 
													$imgload = "";
													$sql_c = "SELECT * FROM product_img where bill_no = '".$objResult2["bill_no"]."'   order by pk asc  "; 
													$query_c = mysqli_query($objCon,$sql_c);
													while($objResult_c = mysqli_fetch_array($query_c))
													{ 
														$imgload =  $objResult_c["img"];
														if( !empty($imgload) ){
													?>
												  <div class="col-md-4" align="left"> 
												  <a href="../img/<?php echo $imgload; ?>" target="_blank">   
													<img src="../img/<?php echo $imgload; ?>" style="width: 100%; height: 80px; " >
												  </a>
												  </div> 
													<?php		
														}
													}  
													?>
												  </div>   
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 		 		
											 		
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
										  <?php echo  $objResult2["typesave"]; ?>
										</font></div></td> 

									  
									  
									  	<?php
										$ic = 1;
										$sql_v = "  SELECT * FROM update_real_time where create_date = '".$objResult2["pk"]."'  and status like '%เปลี่ยนวัน%'  order by pk asc  ";   
										$query_v = mysqli_query($objCon,$sql_v);
										while($objResult_v = mysqli_fetch_array($query_v))
										{  
												$status_payment_bg = "#FF8C00";
												$status_payment = " <font color = '#FFF' > เลื่อนชำระ </font>  ";
										} 
									
										?>
									  	<td style="background-color: <?php echo $status_payment_bg; ?> "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
									  	
									  	<?php echo $status_payment; ?>
									  	 
										</font></div></td> 

									   
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										<a href="printbill2.php?bill_no=<?php echo $objResult2["bill_no"]; ?>&round=<?php echo $objResult2["pk"]; ?>" target="_blank"  class=" btn  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;    margin-top: -5px;  " >
										<font size="3px" color="Black" style=" font-size: 12px; " > 
										พิมพ์   
										</font>  
										</a> 
										</font></div></td>
										 
										
										</tr>  
										<?php   
										}  
										?>
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>