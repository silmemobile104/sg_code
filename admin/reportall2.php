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


	$month = date('m');
	$year = date('Y');
	if(empty($_GET["month"])){
	}else{
		$month = $_GET["month"];
	}
	if(empty($_GET["year"])){
	}else{
		$year = $_GET["year"];
	}
 
?> 
     
      
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
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
                  
                  
						<form action="reportall2.php" method="get" >
                    	<div   class="col-lg-5"  align="left"    > 
						<table width="100%">
							<tr>    
								<td width="40%">  
								 <select class="form-control myselect" id="month" name="month" required  style="border-radius: 5px; border: 1px solid #C9C9C9; width: 100%; " >   
									<?php 
									$sql = "SELECT * FROM month where statusdata = '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM month where statusdata != '".$month."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["statusdata"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>

								</td>  
								<td width="1%">&nbsp;  </td>  
								<td width="40%">  
								 <select class="form-control myselect" id="year" name="year" required  style="border-radius: 5px; border: 1px solid #C9C9C9;  width: 100%; " >   
									<?php 
									$sql = "SELECT * FROM year where year = '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?> 
									<?php 
									$sql = "SELECT * FROM year where year != '".$year."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["year"]; ?>">
									 <?php echo  $objResult["name"]; ?> </option> 
									<?php  
									}
									?>     
								</select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>
								</td>  
								
								<td width="1%">&nbsp;  </td>  
								
								<td width="10%" align="right"> 
								 
							    <button  class="btn btn-sm  " style=" width: 100px;  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;   margin-top: 5px; margin-left: 5px;  " type="submit"    >
									<font color="#FFF" >  ค้นหา </font>
							    </button>		
 
								</td> 
							</tr>
						</table>  
						</div> 
               
                    	<div   class="col-lg-7"  align="right"    > 
						<table width="100%">
							<tr> 
								<td width="30%" align="right"> 
								
							   <a href="printreportall2.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>" target="_blank">

							   <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;   margin-top: 0px;  " type="button"    >
									<font color="#FFF" >  พิมพ์เอกสาร </font>
							   </button>		

								</a>
								</td>   
							</tr>
						</table>  
						</div>
                
                
						</form>
                 
                      <?php if(empty($_GET["page"])){  ?>
                        
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
                         
                         
                    	<div   class="col-lg-7"  align="left" style=" margin-top: 25px;"  >  </div>
                    	 
                   	 
                   	
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
													 
													 
						$date_income = "01"."-".$month."-".$year; 
						$contactstart = date("Y-m-d", strtotime($date_income)); 
						$checkend = date("Y-m-t", strtotime($contactstart));  
													 
						$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
						/// echo $addcode;
													 
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
						$p_m11 = 0;
													 
						 
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
												 
						
						$addcode = "  and  a.create_date2  BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
						$sql = "  SELECT a.* FROM money_customer_bank a
						Inner Join customer b On a.customer = b.pk
						Inner Join list_order c On c.bill_no = a.bill_no 
						where a.bill_no != '' ".$addcode."  Group By a.bill_no  order by a.pk desc     ";   
						$query = mysqli_query($con,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{    
							
							$totalprice1 = 0;
							$totalprice2 = 0;
							$totalprice3 = 0;
							$totalprice4 = " - ";
							$totalprice5 = " - ";
							$startdate = " - ";
							$codecustomer = " - ";
							$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 

								$customer = $objResult2["customer"]; 
								$codecustomer = $objResult2["codecustomer"]; 
							}
							
							$datestart1   = date("Y-m-d", strtotime($totalprice4)); 
							$addcode_check = "  and  create_date2 BETWEEN '".$datestart1."' AND '".$checkend."'  ";  
							$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
							and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
							order by pk asc  ";  
							$query_c = mysqli_query($objCon,$sql_c);
							while($objResult_c = mysqli_fetch_array($query_c))
							{ 
								$totaldata1 +=  $objResult_c["money"];    
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
						where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว'  and  a.closebill = 'เป็นหนี้'
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
					 
	
						 
 
						$contactstart = date("Y-m-d", strtotime("2000-01-01"));  
						$addcode = " and create_date BETWEEN '".$contactstart."' and '".$checkend."'  "; 
						$sql2 = "  SELECT * FROM databank where money1 != '' ".$addcode."   order by create_date asc    ";   
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
                    	  
                  		<div class="col-lg-12"  align="center" style="margin-top: 15px; "  >  
                        <font size="3px" color="#000000">  บริษัท เอสจี ลิสซิ่ง พลัส จำกัด    </font>   
						</div>
                 		
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">  รายงานนำเสนอผู้บริหาร   </font>   
						</div>
                 		 
                  		<div class="col-lg-12"  align="center" style="margin-top: 5px; "  >  
                        <font size="3px" color="#000000">   (   <?php echo  DateThai2($date_income) ; ?>  )  </font>   
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
                         ยอดรวมผ่อนสินค้าประจำเดือน
                          
                         <div style=" margin-top: 5px;">  </div>
                         <font color="#000" >  ต้นทุนสินเชื่อประจำเดือน   </font>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         ยอดเงินฝากประจำเดือน 
                         
                          
                         <!--- 
                         <div style=" margin-top: 5px;">  </div>
                         ยอดเงินฝากประจำเดือน
                         -->
                         
                         <div style=" margin-top: 5px;">  </div>
                         มูลค่าสต๊อกคงเหลือ
                         
                         <div style=" margin-top: 5px;">  </div>
                         เงินทุนสะสมคงเหลือ 
                         
                          
                         
                         <div style=" margin-top: 5px;">  </div> 
                         กำไรสุทธิ์
                         
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
                         <?php echo number_format(0+$p_m11); ?>
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m8); ?>
                         
                         <div style=" margin-top: 5px;">  </div>
                         <?php echo number_format(0+$p_m10); ?>
                          
                         
                         
                         
                         
                         
                         
                         <div style=" margin-top: 5px;">  </div>
                           <?php
										
							$date_income = "01"."-".$month."-".$year; 
							$daystart_load = date("Y-m-d", strtotime($date_income));  
							$contactstart = date("Y-m-d", strtotime($daystart_load));   
							$checkend = date('Y-m-t',strtotime($contactstart));
	
	
							$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode2 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode4 = "  and  d.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode5 = "  and  savedata BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
							$addcode6 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	 
								
	 
									
	
	
							/// echo $addcode . " <br> ";
						 			
							$p_m1 = 0;
							$p_m1_2 = 0;
							$p_m1_3 = 0;
							$p_m1_4 = 0;
													 
							$p_m2 = 0;
							$p_m3 = 0;
							$p_m4 = 0;
							$p_m5 = 0;
										
							$p_dis1 = 0;
													 
							
							$addcode8 = "  and  a.npl_datestart2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							Inner Join product c On   c.pk = a.menu_id
							where a.bill_no != ''   
							and a.contactstatus = 'อนุมัติแล้ว' 
							".$addcode8."  
							order by a.pk asc   "; 

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								
								  $totalprinend = $objResult2["totalprinend"]; 
								
								  $p_m1_3 += $totalprinend;
								
								
							}

													 
													 
							$sql2 = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != ''   
							and a.income != ''
							and a.income != '0'  
							and a.status = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
							".$addcode6."    
							order by a.pk asc     ";   
							// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								 
								if(!empty($objResult2["discount"])){ 
									$p_dis1 += $objResult2["discount"];
								}
							}
													 
							$sql2 = "SELECT a.*  
							FROM payment_other_bill_no a 
							Inner join list_order b   On  a.bill_no_ref = b.bill_no
							Where a.bill_no != '' and price != '' ".$addcode2." ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m2 += $objResult2["price"];       
							}
													 
													 				 
							$sql2 = "  SELECT * FROM paymentother   where   bill_no != ''  and data2 != '0'   ".$addcode3."   order by  pk asc ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m3 += $objResult2["data2"];       
							}
								
													 
													 
							
							$addcode44 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = "  SELECT * FROM list_order_store  where bill_no != ''  and money != '' ".$addcode44."   order by  pk asc   ";  
							$query2 = mysqli_query($objCon,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{  
								$p_m4 += $objResult2["money"];       
							}
											  
							$sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price2 != ''  order by  pk asc    ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{

								if($objResult2["statuspayment"] == "รอชำระเงิน"){
									
								}else{
									$p_m5 += $objResult2["price2"]; 
								}  

							}  		
									 				 			 
							$s_m1 = 0;
							$s_m2 = 0;
							$s_m3 = 0;
							$s_m4 = 0;
							$s_m5 = 0;
													 
													 		  
							$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   a.menu_id = c.pk
									Inner Join list_chk_computer d On   a.pk = d.pkselect

									where d.bill_no != ''  ". $addcode4 ."
									order by a.pk asc    "; 
							/// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{


								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"];  

								$pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];
								
								
								$pasy = $objResult2["computer2"] * 0.03;
								$cal = $pricecal * 0.03;
								$cal2 = $pricecal  - $pasy;
								
								
								if($cal2 <= 0){
									$cal2 = 0;
								}
								  
								$s_m1 += $cal2;
							}  	
								
													 
													 
							 $sql2 = " SELECT * FROM product  where name != ''  ". $addcode2 ."   order by pk asc    "; 
							/// echo $sql2;
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{ 
								$totalprice1 = $objResult2["price1"];  
								if($totalprice1 <= 0){
									$totalprice1 = 0;
								}
								  
								$s_m2 += $totalprice1;
							}  	
											
													 
						    $sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price1 != ''  order by  pk asc    ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
 
									$s_m3 += $objResult2["price1"]; 
								 
							}  	
									
													 
													 
													 			 
						    $sql2 = " SELECT * FROM member_bank where bill_no != ''  and typedata = 'ถอนเงิน'  ".$addcode3."  and price != ''  order by  pk asc    ";    
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
  
	 								$percent = 0;	
									if(!empty($objResult2["percent"])){ 
										$percent = $objResult2["percent"];
									}

									$discount = 0; 

									$income1 = 0;
									if(($objResult2["typedata"] == "ฝากเงิน")){ 

									if(!empty($objResult2["price"])){ 
										$income1 = $objResult2["price"];
									}

									}
									$income2 = 0;
									$calsumper = 0;
									if(($objResult2["typedata"] == "ถอนเงิน")){ 

									if(!empty($objResult2["price"])){ 
										$income2 = $objResult2["price"];
										$calsumper = ($percent / 100)   * $income2;
									}
									}

									$p_m1_4 += $calsumper;
							}  	
									
													 
													 
											
							$typedata = "ถอนเงิน"; 		 
													 
							 $sql2 = " SELECT * FROM member_bank  where price != '' and typedata = '".$typedata."'   ". $addcode3 ."   order by pk asc    "; 
							 /// echo $sql2;
							 $query2 = mysqli_query($con,$sql2); 
							 while($objResult2 = mysqli_fetch_array($query2))
							 { 
								$totalprice1 = $objResult2["price"];  
								if($totalprice1 <= 0){
									$totalprice1 = 0;
								}
								  
								$s_m4 += $totalprice1;
							}  	
													 
													 
													 
													 
							
							
										 
							$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != ''   
							and a.income != ''
							and a.income != '0'      and c.contactstatus = 'อนุมัติแล้ว' 
							".$addcode."    
							order by a.pk asc     ";  
							$query = mysqli_query($con,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{      
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								} 

								$name_cutomer = " - ";
								$name_cutomer2 = " - ";    

								$note1 = " - ";
								$totalprice1 = 0;
								$totalprice2 = 0;
								$totalprice3 = 0;
								$totalprice4 = " - ";
								$totalprice5 = " - ";
								$startdate = " - "; 
								$discoount = 0;
								$discoountpaymentother = 0;  


								$discoount_cut = 0;  
								$discoount_cut1 = 0;  
								$discoount_cut2 = 0; 



								$discountbank = 0;  
								$countloopnopay = 0;
								$chk_total = 0;   

								$discount = 0;
								if(!empty($objResult["discount"])){ 
									$discount = $objResult["discount"];
								}

								$income = 0;
								if(!empty($objResult["income"])){ 
									$income = $objResult["income"];
								}

								$newcalculator = $income - $discount;
								$vat = ($newcalculator * 100) / 107;


								$allpasy =  $newcalculator - ($vat);

								$newmoney = $income - $discount;
								$newpayment = ($newmoney * 100) / 107;
 
								$p_m1 += $newmoney; 
							}					
	
													 	 
													 
							$alldata = $p_m1+$p_m1_3+$p_m1_4+$p_m2+$p_m3+$p_m4+$p_m5;	
	
							$totalall2 = $s_m1;							 
							///   echo $totalall2 . " <br> ";
							///   echo $paymenttotal . " <br> ";
	
	
							$paymenttotal = 0;						 
							$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql2 = "  SELECT * FROM paymenttyp3   where  price != ''  ".$addcode."   order by  create_date2 asc   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$bill_no =  $objResult2["bill_no"];
								$g_create_date2 =  $objResult2["create_date2"];
								$typedata =  $objResult2["typedata"];
								$note =  $objResult2["note"];
								$statuspasy =  $objResult2["statuspasy"];

								$price1 =  0;
								if(!empty($objResult2["price"])){
									$price1 =  $objResult2["price"];

								}

								$vat = 0;
								$pasy = 0;
								if(empty($statuspasy)){

								}else if($statuspasy == "ภาษีภายใน"){
									$pasy  = ($price1 *  7 ) / 107;
									$totaldata2 +=  $pasy;
								}else if($statuspasy == "ภาษีภายนอก"){ 
									$pasy  = ($price1 *  100 ) / 107;
									$totaldata3 +=  $pasy;
								}

								$newmoney =  $price1 - $pasy;

 
								$paymenttotal +=  $price1;

							}	
	
	
							$cal1 = $alldata;					 
							$cal2 = $totalall2+$paymenttotal;	
													 
							$cal3 = $cal1 - $cal2;
	
	 
	
							echo "".number_format(0+$cal3); 
							////  echo "".number_format(0+$alldata); 
							//// echo "".number_format(0+$cal3); 
							
	 
	
							?>
                         <div style=" margin-top: 5px;">  </div>
                        
                         
                         
                        </font>  
                          
						</div>
						</div>
						</div>
						</div>
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
                         &nbsp;
                         <?php   echo number_format(0); ?>
                          
                         <div style=" margin-top: 5px;">  </div>
                         <?php   echo number_format(0+$cal3); ?>
						  <div style=" margin-top: 5px;">  </div>
                          
                            
                         <?php 					 
							$totalall = $p_m1+$p_m2_new+$p_m3+$p_m4+$p_m5+$p_m6+$p_m7+$p_m8;	
	
							/*
							echo $p_m1 . " <br> ";
							echo $p_m2_new . " <br> ";
							echo $p_m3 . " <br> ";
							echo $p_m4 . " <br> ";
							echo $p_m5 . " <br> ";
							echo $p_m6 . " <br> ";
							echo $p_m7 . " <br> ";
							echo $p_m8 . " <br> ";
							*/
						 ?>
                         
                         <?php
							$person = 0;				 
							$sql2 = " SELECT * FROM customerpunpon  order by pk asc ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{   
								$person = 0;	
								if(empty($objResult2["percent"])){
									 $person = $cal3 * 0;
								}else{
									 $person = $cal3 *  ( $objResult2["percent"] / 100) ;
								} 
								
								
								if($cal3 <= 0){
									$person = 0;
								}
							?>
                          <?php echo number_format(0+$person); ?>
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