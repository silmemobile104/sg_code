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
	$getpayment = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}

	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}
	$bill_no  = $_GET["bill_no"];
	$customer  = $_GET["customer"];

	$daystart_load = date("d-m-Y", strtotime(date('d-m-Y'))); 

	$codecustomer = "";
	$sql = "SELECT * FROM list_order Where  bill_no = '". $bill_no ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
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

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เมนูฝากเงิน/ประวัติฝากเงิน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เมนูฝากเงิน/ประวัติฝากเงิน > ประวัติการหักยอดเงินฝาก  </font>   
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
                     <font size="4px" color="#000000">  เมนูฝากเงิน   </font>   
                  </div> 
                  </font> 
                  </div>
                   
				 	  <div class=" col-lg-4 "  align="left" >
					<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					<tr> 
						<td width="30%" align="center" bgcolor="#F77369"   >   
						<a href="payment_bank.php"> 
						<div style="margin-top: 5px; margin-bottom: 5px; " >   
						<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
						&nbsp;
						<font size="3px" color="#FFF" style="font-size: 14px; ">  เมนูฝากเงิน    </font>  
						</div>
						</a>
						</td>
						<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
						<a href="payment_bank_edit.php?page=">   
						<div  >   
						<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
						&nbsp;
						<font size="3px" color="#000" style="font-size: 14px; ">  ประวัติฝากเงิน   </font>  
						</div>
						</a>
						</td>
					</tr>
				</table>
			   </div>

					  <div class="col-lg-12">
						<hr>
					  </div>
					  
					  <div class="col-lg-12" align="right">
						   <a href="print_payment_bank_history.php?bill_no=<?php echo $_GET["bill_no"]; ?>&customer=<?php echo $_GET["customer"]; ?>&major=<?php echo $_GET["major"]; ?>&page=2" target="_blank" >

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
                        
                      <?php
						$i = 1;
						$bg = "#F8FAFD"; 


						$moneybankall = 0;
						$c_no1 = 0;
						$c_no2 = 0;
						$totalprice = 0;
						$price1 = 0;
						$price2 = 0;

						$startdate = "";
						$startdate2 = "";
						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk asc limit 1   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$startdate = $objResult2["create_date"];
						}
						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk desc limit 1   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{    
							$startdate2 = $objResult2["create_date"];
						}


						$sql2 = "SELECT * FROM money_customer_bank   where money != '' and bill_no = '".$bill_no."'   order by pk asc   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

								$bg1 = "";
								$bg2 = "";
								$txt1 = "";
								$price = "";
								$typedata = " - ";
								$typedata2 = " - ";
								if($objResult2["typegetpayment"] == "โอนผ่านบัญชีบริษัท"){
									$bg1 = "#006400";
									$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
									$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
									$typedata = "โอนเข้าบัญชี";


									$totalprice += $objResult2["money"];
									$price1 += $objResult2["money"];
									$c_no1++;
								}
								if($objResult2["typegetpayment"] == "รับเงินสด"){
									$bg1 = "#006400";
									$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
									$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
									$typedata = "เงินสด";

									$totalprice += $objResult2["money"];
									$price1 += $objResult2["money"];
									$c_no1++;
								} 

								if($objResult2["typegetpayment"] == "ชำระหักเงินฝาก"){
									$bg1 = "#FF8C00";
									$bg2 = "#FF8C00";
									$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
									$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
									$typedata2 = "ชำระหักเงินฝาก";
									$typedata2 = " <font color = '#FFF'>  ชำระหักเงินฝาก   </font>   "; 


									$totalprice -= $objResult2["money"];
									$price2 += $objResult2["money"];
									$c_no2++;
								} 


								if($objResult2["typegetpayment"] == "ชำระ2ทาง"){
									$bg1 = "#FF8C00";
									$bg2 = "#FF8C00";
									$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
									$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
									$typedata2 = "ชำระหักเงินฝาก";
									$typedata2 = " <font color = '#FFF'>  ชำระ2ทาง   </font>   "; 

									$totalprice -= $objResult2["money"];
									$price2 += $objResult2["money"];
									$c_no2++;
								} 

								}
						?>
					  <div class="col-lg-5"  style=" margin-top: 10px; " >
						<table width="100%" border="1">
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">  &nbsp;  เลขที่สัญญาอ้างอิง  &nbsp; </font>
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
								 <font size="3px" color="#000000">   &nbsp;  รอบทีเริ่มฝาก  &nbsp; </font>
								</td>
								<td>  
								 <font size="3px" color="#000000">   &nbsp;  <?php  
									 if(!empty($startdate)){
										echo DateThai($startdate)." ".DateThai2($startdate) ." ถึงวันที่ ".  DateThai($startdate2)." ".DateThai2($startdate2);  
									 } 
									 ?> 
									  &nbsp; </font>
								</td>
							</tr>
							<?php 
							$sql2 = "SELECT * FROM money_customer_bank   where bank != '' and bill_no = '".$bill_no."'  Group by bank  order by pk desc    ";  
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{    
								$nambank = ""; 
								$sql_bank = "SELECT * FROM bank   where pk = '".$objResult2["bank"]."'   order by pk desc    ";  
								$query_bank = mysqli_query($con,$sql_bank); 
								while($objResult_bank = mysqli_fetch_array($query_bank))
								{   
									$nambank = $objResult_bank["name"];
								}
								$c_nobank = 0; 
								$sql_bank = "SELECT * FROM money_customer_bank   
								where bank = '".$objResult2["bank"]."' and bill_no = '".$bill_no."'   order by pk desc    ";  
								$query_bank = mysqli_query($con,$sql_bank); 
								while($objResult_bank = mysqli_fetch_array($query_bank))
								{   
									$c_nobank++;
								}
							?>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  <?php echo $nambank; ?>  &nbsp; </font>
								</td>
								<td> 
								  <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_nobank); ?> ครั้ง </font>   
								</td>
							</tr>
							<?php } ?>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  รายการฝาก  &nbsp; </font>
								</td>
								<td> 
								<table width="100%">
									<tr>
										<td width="50%"> <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_no1); ?> รายการ </font> </td>
										<td width="50%" align="right" > <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$price1, '2', '.', ','); ?>   &nbsp;  </font> </td> 
									</tr>
								</table>  
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  รายการหักเงิน  &nbsp; </font>
								</td>
								<td> 
								<table width="100%">
									<tr>
										<td width="50%"> <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$c_no2); ?> รายการ  &nbsp;  </font> </td>
										<td width="50%" align="right" > <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$price2, '2', '.', ','); ?>   &nbsp;  </font> </td> 
									</tr>
								</table>  
								</td>
							</tr>
							<tr>
								<td height="35px;">  
								 <font size="3px" color="#000000">   &nbsp;  ยอดเงินคงเหลือ  &nbsp; </font>
								</td>
								<td align="right">  
								  <font size="3px" color="#000000">   &nbsp;  <?php echo number_format(0+$totalprice, '2', '.', ','); ?>  &nbsp; 
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
					<table id="key_product"  class=" table    tablemobile  " border="0"  style=" width: 1400px; "   > 
				    <thead>  
						 <tr>
							<th width="4%" bgcolor="#BEC6CB" height="33px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่    </font></div></th>    
							<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เวลา  </font></div></th>   
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายการ     </font></div></th>   
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ฝากเงิน/ หักเงินค่าสัญญา   </font></div></th> 
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th> 
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบการฝาก   </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบการชำระสินเชื่อ   </font></div></th>  
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาพสลิป   </font></div></th>  
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำรายการ   </font></div></th>  
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>  
						 </tr>
					  </thead>
					  
					  <tbody> 
					<?php 
					$i = 1;
					$bg = "#F8FAFD"; 

					if (empty($_GET['page2'])) { 
						$i = 1;
					}else if (($_GET['page2'] == 1)) { 
						$i = 1;
					}else{

						$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
					}


					
					$moneybankall = 0;
					$totalprice = 0;
					$sql2 = " SELECT * FROM money_customer_bank  
						where money != '' and bill_no = '".$bill_no."'  
						order by pk asc   ";  

						  
					//// echo $sql2;
					$query2 = mysqli_query($con,$sql2); 
					while($objResult2 = mysqli_fetch_array($query2))
					{      
							if($bg == "#FFF"){ 
								$bg = "#F8FAFD"; 
							}else{  
								$bg = "#FFF"; 
							} 

						$name_pro = " - ";
						$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
						$query_c = mysqli_query($objCon,$sql_c);
						while($objResult_c = mysqli_fetch_array($query_c))
						{ 
							$name_pro = $objResult_c["name"]; 
						}

						
						$bg1 = "";
						$bg2 = "";
						$txt1 = "";
						$price = "";
						$typedata = " - ";
						$typedata2 = " - ";
 						if($objResult2["typegetpayment"] == "โอนผ่านบัญชีบริษัท"){
							$bg1 = "#006400";
							$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
							$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
							$typedata = "โอนเข้าบัญชี";
							
							
							$totalprice += $objResult2["money"];
						}
						if($objResult2["typegetpayment"] == "รับเงินสด"){
							$bg1 = "#006400";
							$txt1 = " <font color = '#FFF'>    ฝากเงิน    </font>   ";
							$price = " <font color = '#006400'>  +  ". number_format(0+$objResult2["money"])."    </font>   ";
							$typedata = "เงินสด";
							
							$totalprice += $objResult2["money"];
						} 
						
						if($objResult2["typegetpayment"] == "ชำระหักเงินฝาก"){
							$bg1 = "#FF8C00";
							$bg2 = "#FF8C00";
							$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
							$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
							$typedata2 = "ชำระหักเงินฝาก";
							$typedata2 = " <font color = '#FFF'>  ชำระหักเงินฝาก   </font>   "; 
							
							
							$totalprice -= $objResult2["money"];
						} 
						
						
						if($objResult2["typegetpayment"] == "ชำระ2ทาง"){
							$bg1 = "#FF8C00";
							$bg2 = "#FF8C00";
							$txt1 = " <font color = '#FFF'>    หักเงิน    </font>   ";
							$price = " <font color = '#FF0000'>  -  ". number_format(0+$objResult2["money"])."    </font>   "; 
							$typedata2 = "ชำระหักเงินฝาก";
							$typedata2 = " <font color = '#FFF'>  ชำระ2ทาง   </font>   "; 
							
							$totalprice -= $objResult2["money"];
						} 
						 
						$name_pro = " - ";
						$sql_c = "SELECT * FROM member_all where   pk = '".$objResult2["create_by"]."' order by pk asc  "; 
						$query_c = mysqli_query($objCon,$sql_c);
						while($objResult_c = mysqli_fetch_array($query_c))
						{ 
							$name_pro = $objResult_c["name"]; 
						}
											
											
					?>
					<tr style="background-color: <?php echo $bg ?>; "> 
  
					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 

					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 

					<td style=" border-left: 0px solid #F2F2F2; " bgcolor="<?php echo $bg1; ?>"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
					<?php 
						 echo $txt1; 
					?>    
					</font></div></td>
					<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
					<?php 
						 echo $price; 
					?>    
					</font></div></td>
 
					<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
					<?php 
						 echo number_format(0+$totalprice); 
					?>    
					</font></div></td>
					
					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $typedata; ?>   </font></div></td> 
					</font></div></td>
					
					<td style=" border-left: 0px solid #F2F2F2; " bgcolor="<?php echo $bg2; ?>" ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $typedata2; ?>   </font></div></td>  

 
				
					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
					<?php if($objResult2["typegetpayment"] == "โอนผ่านบัญชีบริษัท"){  ?>	
					<a data-toggle="modal" data-target="#Loadimg<?php echo $i; ?>" style="cursor: pointer; "  >    คลิก  </a>
					<?php }else if($objResult2["typegetpayment"] == "รับเงินสด"){	 ?>	 
					 				 
					<a data-toggle="modal" data-target="#Loadimg<?php echo $i; ?>" style="cursor: pointer; "  >    คลิก  </a>
					<?php }else{  ?>
			   			<font size="3px" color="Black" style=" font-size: 13px; " >  -   </font>
			   		<?php } ?>
				    
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
								$sql_c = "SELECT * FROM product_img where bill_no = '".$objResult2["bill_no_ref"]."'   order by pk asc  "; 
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
										
									
					<td style=" border-left: 0px solid #F2F2F2; " ><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
					<?php 
						 echo $name_pro; 
					?>    
					</font></div></td>
 	
					
					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>   </font></div></td> 
										
										
					</tr>  
					<?php $i++;  } ?>
					</tbody> 
					</table>  
					</div>
					</div>
                        
                         
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