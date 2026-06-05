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

	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load21 = date("d-m-Y", strtotime($date_income)); 
		$daystart_load22 = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];
		
		
		
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load21 = date("d-m-Y", strtotime($date_income)); 
		$daystart_load22 = date("Y-m-d", strtotime($date_income)); 
	}

	$major = "1";
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  รายงานำเสนอผู้บริหาร ประจำเดือน   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > รายงานำเสนอผู้บริหาร ประจำเดือน   </font>   
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
                     <font size="4px" color="#000000">  รายงานำเสนอผู้บริหาร ประจำเดือน   </font>   
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
							yearRange: "-5:+5",
								  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
								  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
								  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
								});
						}); 
						</script>
                         
                        
						<form action="reportall2.php" method="get" >
                    	<div   class="col-lg-7"  align="left"  >  </div>
                    	<div   class="col-lg-5"  align="left"    > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif">  เลือกวันที่ค้นหา    </font>
 
								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

								<span class="input-group-append" style="display: none;">
								  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
										<img src="images/search.png" style="width: 15px; "> 
								  </button>
								</span>
								</div> 

								</td>  
								<td width="1%">&nbsp;  </td>  
								<td width="40%"> 
								<font color="black" size="3px" class="serif">  ถึงวันที่    </font>
 
								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >

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
                   	
						</form> 
                   	
                     	<style>
						.grid-container {
						display: grid;
						grid-template-columns: 100%;  
						}
						.grid-container2 {
						display: grid;
						grid-template-columns: 50% 50% ;  
						}
						.grid-container3 {
						display: grid;
						grid-template-columns: 90% 10% ;  
						}
						.grid-container4 {
						display: grid;
						grid-template-columns: 15% 79% 6% ;  
						}
						.grid-item {  
						padding-right: 3px; 
						}
					</style>
                  		<?php
						$colorbtns1s = " background-color: #8B4513; border-radius: 5px;  height: 40px;  border-color: #8B4513; margin-top: 25px; ";
						$colorbtns2s = " background-color: #FF8C00; border-radius: 5px;  height: 40px;  border-color: #FF8C00; margin-top: 25px; ";
						$colorbtns3s = " background-color: #FF0000; border-radius: 5px;  height: 40px;  border-color: #FF0000; margin-top: 25px; ";

						$txtcolor1 = "#FFF"; 
						$txtcolor2 = "#FFF"; 
						$txtcolor3 = "#FFF"; 
  			  
									   
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load21));  
													 
													 
						/*
						$contactstart = date("Y-m-d", strtotime(  "01".date('-m-Y')  ));  
						$checkend = date("Y-m-d", strtotime(   "31".date('-m-Y')   ));  
						*/							 
													 
						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
									
													 
						$p_m1 = 0; 
						$p_m2 = 0;
						$p_m2_new = 0;
						$p_m3 = 0;
						$p_m4 = 0;
						$p_m5 = 0;
						$p_m6 = 0;
						$p_m7 = 0;
						$p_m8 = 0;
						$p_m9 = 0;
						$p_m10 = 0;
													 
													 
						$sql2 = " SELECT *  FROM pricesomtub  
						where bill_no != '' ".$addcode."  
						order by pk asc     ";  

						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{     
							$p_m10 += $objResult2["price"];
						} 
													 
											 				 
						$sql2 = " SELECT * FROM list_order where bill_no != '' and ( onoff = 'ปกติ' or onoff = 'NPL')  and closebill = 'เป็นหนี้' ".$addcode." order by pk asc ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{   
							
							$totalprice1 = $objResult2["money"]; 
							$totalprice2 = $objResult2["daytotal"]; 
							$totalprice3 = $objResult2["dayprice"]; 
							$totalprice4 = $objResult2["startdate"]; 
							$totalprice5 = $objResult2["endate"]; 
							
							
							$discoount = 0;
							$discoountpaymentother = 0;
							$loaddata1 = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
							$loaddata2 = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$loaddata1."' AND '".$loaddata2."'  "; 
							$sql_c = "SELECT * FROM history_payment Where  
							bill_no = '". $objResult2["bill_no"]."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_c = mysqli_query($objCon,$sql_c); 
							while($objResult_c = mysqli_fetch_array($query_c))
							{  
								if(!empty($objResult_c["income"])){
								$discoount += $objResult_c["income"]; 

								}
								if(!empty($objResult_c["paymentother"])){
								$discoountpaymentother += $objResult_c["paymentother"]; 
								}  
							}	
							
							
							$allmoney = ($totalprice2*$totalprice3)-$discoount;
							if($allmoney <= 0){
								$allmoney = 0;
							}
							$p_m5 += $allmoney;
						}
													 
													 
						$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								 
						$sql2 = " SELECT a.*  FROM list_chk_computer a 
						Inner Join list_order b  On a.pkselect = b.pk
						Inner Join product c  On b.menu_id = c.pk
						where  a.bill_no != ''    ". $addcode2 ."
						Group By a.bill_no
						order by a.pk asc    ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{
							$create_date = $objResult2["create_date"];
							$create_date2 = $objResult2["create_date2"];
							$create_time = $objResult2["create_time"];
							$create_by = $objResult2["create_by"];
							$pkselect = $objResult2["pkselect"];
							$bill_no = $objResult2["bill_no"];
							$pasy_onoff = $objResult2["pasy_onoff"];

							$pricecal = 0;
							$total_price = 0;
							$s_m1 = 0;
							$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							Inner Join product c On   a.menu_id = c.pk
							Inner Join list_chk_computer d On   a.pk = d.pkselect 
							where d.bill_no = '".$bill_no."'  
							order by a.pk asc    "; 
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{  
								$p_m4 +=  $objResult_c["priceorder"];
								 
								$total_price +=  $objResult_c["computer2"];
								$pricecal = $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];
 
								$pasy = $objResult_c["computer2"] * 0.03;
								$cal = $pricecal * 0.03;
								$cal2 = $pricecal  - $pasy;
 
								if($cal2 <= 0){
									$cal2 = 0;
								}

								$p_m3 += $cal2;

							}
											
						}
									   
					 
						$addcode2 = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
						$sql2 = "  SELECT a.*  FROM list_chk_cleam_back  a   Inner Join product b  On a.pkselect = b.pk where  a.bill_no != '' ".$addcode2."   order by a.pk asc "; 		   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{  
							$sql = "SELECT * FROM product where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
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

								
								$p_m6 += $price1;
							}
						}					
									
													 
													 
						$totaldata1 = 0;							 
						$totaldata2 = 0;		
						$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM money_customer_bank where bill_no != '' ".$addcode7."   order by pk desc    ";
												 
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

							if(!empty($objResult2["money"])){ 
								$totaldata1 += $objResult2["money"];
							}

						}

									
						if($totaldata1 <= 0){
							$totaldata1 = 0;
						}
													 
													 
		   				$p_m7 = $totaldata1;				 
									
													 
													 

						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM money_customer_bank where bill_no != '' ".$addcode."   order by pk desc    ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{        
							if(!empty($objResult2["money"])){ 
								$p_m9 += $objResult2["money"];
							}

						}
													 
													 
													  
						$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
						Inner Join customer b On   a.customer = b.pk
						Inner Join product c On   c.pk = a.menu_id
						where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
						".$addcode."  
						order by a.pk asc    ";  

						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       
								$money = $objResult2["money"]; 
								$daytotal = $objResult2["daytotal"]; 
								$dayprice = $objResult2["dayprice"];  
								$c_status = $objResult2["c_status"];  
								$g_create_date2 = $objResult2["create_date2"];  
								$priceorder = $objResult2["priceorder"];  
								$pasy = $objResult2["pasy"];  


								$p_m1++;
								$p_m2 += $priceorder;  
							    $p_m2_new += $daytotal * $dayprice;  
						}						 
						?>	
                    	  
                  		<div class="col-lg-12"  align="center" style="margin-top: 15px; "  >  
                        <font size="3px" color="#000000">  บริษัท เอสจี พลัส จำกัด    </font>   
						</div>
                 		
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">  รายงานนำเสนอผู้บริหาร   </font>   
						</div>
                 		 
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">   (   <?php echo  DateThai2($contactstart) ; ?>  )  </font>   
						</div>
                     
                        
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px;  "  >  
                  		<div class="col-lg-12"  align="left" style="margin-top: 15px; border: 1px solid #000; border-radius: 5px;  "  >   
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000"> <u> <b>     </b> </u>  </font> 
						</div>
                  		<div class="col-lg-12"  align="left" style="margin-top: 5px; margin-bottom: 10px; "  >  
                  		<div class=" grid-container2  "  align="left"  >  
                  		<div class=" grid-item  "  align="left" style=" margin-left: 10px; "  >  
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  จำนวนสินเชื่อประจำเดือน   </font>
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  จำนวนสิ้นเชื่อคงเหลือ  </font>
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  ต้นทุนสินเชื่อประจำเดือน   </font>
                          
                         <div style=" margin-top: 5px;">  </div>
                         ยอดรวมผ่อนสินค้าประจำเดือน
                         <div style=" margin-top: 5px;">  </div>
                         ยอดรวมผ่อนสินเชื่อคงเหลือ
                         <div style=" margin-top: 5px;">  </div>
                         ยอดเงินฝากประจำเดือน
                         
                         <div style=" margin-top: 5px;">  </div>
                         มูลค่าสต๊อกคงเหลือ
                         <div style=" margin-top: 5px;">  </div>
                         เงินทุนสะสมคงเหลือ 
                         <div style=" margin-top: 35px;">  </div> 
                         กำไรสุทธิ์
                          
                         <div style=" margin-top: 35px;">  </div> 
                         สรุปกำไร (ขาดทุน) สุทธิ์ 
                         <div style=" margin-top: 5px;">  </div>
                         ยอดปันผลผู้ถือหุ้น
						  <div style=" margin-top: 5px;">  </div> 
                         
                         <?php
							$person = 0;			 
							$sql2 = " SELECT * FROM customerpunpon  order by pk asc ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$person++;
								$namefull = $objResult2["name"];
							?>
                          <?php echo $namefull; ?>
						  <div style=" margin-top: 5px;">  </div> 
                        <?php } ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                        </font>  
						</div> 
                  		<div class=" grid-item  "  align="right" style=" margin-right: 10px; "  >  
                       
                        <font size="3px" color="#000000">  
							
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m1); ?>
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m2_new); ?>
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m3); ?>
                         
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m2); ?>
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m5); ?>
                         <div style=" margin-top: 5px;">  </div>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m7); ?>  
                         
                         
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m8); ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m10); ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                          &nbsp;
                         
                         <div style=" margin-top: 35px;">  </div>  
                         <?php echo number_format(0+$p_m1+$p_m2+$p_m3+$p_m4+$p_m5+$p_m6+$p_m7+$p_m8); ?>
                          
                          
                         <div style=" margin-top: 5px;">  </div>
                          &nbsp;
						  <div style=" margin-top: 5px;">  </div> 
                          
                         <?php 					 
							$totalall = $p_m1+$p_m2+$p_m3+$p_m4+$p_m5+$p_m6+$p_m7+$p_m8;						 
						 ?>
                         
                         <?php
												 
						$sql2 = " SELECT * FROM customerpunpon  order by pk asc ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{   
							if(empty($objResult2["percent"])){
								 $person = 0;
							}else{
								 $person = ( $objResult2["percent"] / 100) ;
							}
							 
							
							
							
							 $showtotal = $totalall * $person ;
						?>
                          <?php echo number_format(0+$showtotal); ?>
						  <div style=" margin-top: 5px;">  </div>
                       
                        <?php } ?>
                        
                         
                         
                        </font>  
                          
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