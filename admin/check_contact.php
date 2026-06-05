<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
ini_set("memory_limit","10M");
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";

	$searchname = date('d/m')."/".(date('Y'));
	$cut = explode("/",$searchname);
	$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	$daystart_load = date("d-m-Y", strtotime($date_income)); 
	 
 

	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}	

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}	
 
	$showall = "";
	if(empty($_GET["showall"])){
		
	}else{
		$showall = $_GET["showall"];
	}	

 
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){

		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];



		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
?> 
        
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
							
							
							
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบคำขอยกเลิกสัญญา   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > ตรวจสอบคำขอยกเลิกสัญญา  </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบคำขอยกเลิกสัญญา   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
						<form action="check_contact.php" method="get" > 
                   	    
                    	    <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ / รหัสลูกค้า   </font>
 
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>      
									</tr>
								</table>  
							</div>
                           <div class="col-md-12"> &nbsp; </div>
							
                    	    <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่    </font>

										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current "   type="text" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >

										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;   </td>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

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
                    
                           <div class="col-md-12"> &nbsp; </div>
                           
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
									if(empty($_GET["searchname"])){
										$contactstart = date("Y-m-d", strtotime($daystart_load));  
										$checkend = date("Y-m-d", strtotime($daystart_load2));
										$addcode2 = "  and  c_status_date_alert BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	
										
									}else{ 
										
										$contactstart = date("Y-m-d", strtotime($daystart_load));  
										$checkend = date("Y-m-d", strtotime($daystart_load2));
										$addcode2 = "  and  c_status_date_alert BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	 
									} 



									$addcode3 = ""; 
									if(empty($_GET["typedata"])){
									}else if(($_GET["typedata"] == "ยอดคืนเงินลูกค้า")){	

										$addcode3 = " and c_total != ''  ";

									}else if(($_GET["typedata"] == "ยอดเงินคงเหลือ")){

										$addcode3 = " and c_total != ''  ";

									}else if(($_GET["typedata"] == "รอสินค้า")){

										$addcode3 = " and c_status2 = 'รอสินค้า'  ";

									}else if(($_GET["typedata"] == "จำหน่ายแล้ว")){

										$addcode3 = " and  c_status2 = 'จำหน่ายแล้ว'  ";

									}else if(($_GET["typedata"] == "รอการยืนยัน")){

										$addcode3 = " and  (c_status = 'รอการยืนยัน' or c_status = '' )  ";
 
									}else{

									} 

									if(empty($_GET["searchname3"])){

									}else{
										$addcode = " and  ( b.name like '%".$searchname3."%' or a.codecustomer like '%".$searchname3."%' ) "; 
										 
									}
												

									if(!empty($_GET["showall"])){
 
										$addcode2 = " "; 
									}
											 
									 

								$sql2 = "SELECT a.*, b.name FROM list_order  a
								Inner Join customer b On   a.customer = b.pk
								where a.bill_no != ''    and a.status = 'อนุมัติ/สัญญาโมฆะ'    and a.c_status != 'ยกเลิกสัญญา'   and a.contactstatus = 'อนุมัติแล้ว'  
								".$addcode.$addcode2.$addcode3."  
								order by a.pk asc    "; 
													  
								 
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="check_contact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="check_contact.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="check_contact.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="check_contact.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="check_contact.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="check_contact.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="check_contact.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">Next</a></li>
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
							where a.bill_no != ''  and a.status = 'อนุมัติ/สัญญาโมฆะ'  and a.c_status != 'ยกเลิกสัญญา'     and a.contactstatus = 'อนุมัติแล้ว'  
							".$addcode.$addcode2."  
							order by a.pk asc  ";   
													 
						
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 
											
								$priceorder = $objResult2["priceorder"];    
								$c_price_back = $objResult2["c_total"];  
								$moneydown = $objResult2["moneydown"];    
									
								  
												 
								$discoount = 0;
								$discoountpaymentother = 0;
								$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
								$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
								$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql = "SELECT * FROM history_payment Where  
								bill_no = '". $objResult2["bill_no"]."' 
								and income != ''  and income != '0'   
								".$code_check2." ";   
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["income"])){
										$discoount += $objResult["income"]; 

									}
									if(!empty($objResult["paymentother"])){
										$discoountpaymentother += $objResult["paymentother"]; 
									}  
								}	

								if(empty($moneydown)){
									$moneydown = 0;
								}
								
								$allmoney = ($totalprice2*$totalprice3)-$discoount;
								$endback = $moneydown+$discoount;
								
								
								if(empty($c_price_back)){
									$c_price_back = 0;
								}
								$totalcal1 += $c_price_back; 
								
								$calshow = 0;
								if(!empty($c_price_back)){
									$calshow = $endback - $c_price_back;
									if($calshow <= 0){
										$calshow = 0;
									}
								}
								 
								$totalcal2 += $calshow; 
								
								if($objResult2["c_status2"] == "รอสินค้า"){
									$totalcal3++;
								}
								if($objResult2["c_status2"] == "จำหน่ายแล้ว"){
									$totalcal4++;
								}
								if($objResult2["c_status"] == "รอการยืนยัน"){
									$totalcal5++;
								}
								if($objResult2["c_status"] == ""){
									$totalcal5++;
								}
							}
							?>
                    		<div class="col-lg-8"  align="right"   id="showcalsumdata"  > 
                    		
							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&showall=all"    > 
							<button type="button" class="btn btn-primary" style="background-color: #0000FF; border-radius: 5px; height: 40px; border: 1px solid  #0000FF;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  แสดงข้อมูลทั้งหมด  </font> 
							</button> 
							</a>
                    		 
							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&typedata=รอการยืนยัน&showall=<?php echo $showall; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  รอการยืนยัน <?php echo number_format(0+$totalcal5); ?>  </font> 
							</button> 
							</a>
							 
							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&typedata=ยอดคืนเงินลูกค้า&showall=<?php echo $showall; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ยอดคืนเงินลูกค้า <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&typedata=ยอดเงินคงเหลือ&showall=<?php echo $showall; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ยอดเงินคงเหลือ <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>

							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&typedata=รอสินค้า&showall=<?php echo $showall; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  รอสินค้า <?php echo number_format(0+$totalcal3); ?>    </font> 
							</button>
							</a>

							<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&searchname3=<?php echo $searchname3; ?>&typedata=จำหน่ายแล้ว&showall=<?php echo $showall; ?>"    > 
							<button type="button" class="btn btn-primary" style="background-color: #4B0082; border-radius: 5px; height: 40px; border: 1px solid  #4B0082;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  จำหน่ายแล้ว <?php echo number_format(0+$totalcal4); ?>    </font> 
							</button>
							</a>
							</div>
                           
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 2900px;"    >
							    <thead> 
								  <tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่สัญญา  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รหัสลูกค้า     </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเริ่ม     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่สิ้นสุด     </font></div></th>  
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูลสัญญา     </font></div></th>  
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะสัญญา     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ใบลดหนี้     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบลดหนี้     </font></div></th> 
								
								 
								   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดคืนให้ลูกค้า     </font></div></th>  

								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดคงเหลือ     </font></div></th> 
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะตัวเครื่อง     </font></div></th> 

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์     </font></div></th> 

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
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
										$totalprice3 = 0;
										$endback = 0; 
  
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
										}
													 
										$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''  and a.status = 'อนุมัติ/สัญญาโมฆะ' 
											".$addcode.$addcode2.$addcode3."  
											order by a.pk asc limit {$start} , {$perpage}   ";  
													 
											 
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												}
											 
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"]; 
												$totalprice4 = $objResult2["startdate"]; 
												$totalprice5 = $objResult2["endate"]; 
											
												$priceorder = $objResult2["priceorder"];    
												$c_price_back = $objResult2["c_total"];
											
												$moneydown = $objResult2["moneydown"];    
												$c_moneydown = $objResult2["c_moneydown"];    
												$c_discount = $objResult2["c_discount"];    
												$c_cancel = $objResult2["c_cancel"];    
												$c_rowback = $objResult2["c_rowback"];    
												$c_total = $objResult2["c_total"];    
												$c_moneylost = $objResult2["c_moneylost"];   
												$c_noreaddon1 = $objResult2["c_noreaddon1"];   
												$c_noreaddon2 = $objResult2["c_noreaddon2"];   
												$c_company = $objResult2["c_company"];   
												$c_payment = $objResult2["c_payment"];   
												$c_bank = $objResult2["c_bank"];   
											
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
														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create3 =  $objResult_c["name"];
														}
												}
											
												
												$chk_total = 0;
												$priceback = 0;
												$date_payment = "";
											
												$discoount = 0;
												$discoountpaymentother = 0;
												$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
												$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
												$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												$sql = "SELECT * FROM history_payment Where  
												bill_no = '". $objResult2["bill_no"]."'  
												".$code_check2." ";   
												$query = mysqli_query($objCon,$sql); 
												while($objResult = mysqli_fetch_array($query))
												{  
													if(!empty($objResult["income"])){
													$discoount += $objResult["income"]; 

													}
													if(!empty($objResult["paymentother"])){
													$discoountpaymentother += $objResult["paymentother"]; 
													}  
													
													
													 
													if(!empty($objResult["income"])){ 
														$priceback += $objResult["income"];

														$countloopnopay = 0;

														$date_payment = $objResult["create_date2"];
													}else{ 
														$countloopnopay++;
													} 


													 if($countloopnopay >= 5){ 
														if(!empty($objResult["income"])){  
																$chk_total = 0; 
														}else{
																$chk_total++;
														} 
													 }
												
												}	

												$allmoney = ($totalprice2*$totalprice3)-$discoount;
												$endback = $moneydown+$discoount;
											
											
												$pricetotal2 = $priceorder - $priceback - $moneydown;
												$pricetotal3 = $pricetotal2 + ($chk_total*50);
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$name_major =  $objResult_c["name"];
												}
											
											    
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>    </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>   </font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										
										<a href="printbill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ดูข้อมูลสัญญา   
										</font>  
										</a> 
										
										</font></div></td>
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create; ?>    </font></div></td>
										
											
											
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
										<?php if($objResult2["c_status"] == "รอการยืนยัน" ){ ?>

										<select class="form-control " style="background-color: #006400; color: white; font-size: 12px; margin-top: -5px; " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
											<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
											<option value="อนุมัติการยกเลิก//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติการยกเลิก </font></option> 
											<option value="กู้คืน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> กู้คืน </font></option>     
										</select>  

									
										<font size="2px" id="showtxtcancel<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="display: none; "> <?php echo $objResult2["c_status"]; ?> </font>
									 
										<?php }else if($objResult2["c_status"] == "ยกเลิกสัญญา"){  ?>
										 
										<font size="2px" class="serif2" color="#FF0000"> อนุมัติการยกเลิก </font>
										  
										<?php }else if($objResult2["c_status"] == "อนุมัติการยกเลิก"){  ?>
										 
										<font size="2px" class="serif2" color="#006400"> กู้คืน </font>
										   
										<?php } ?>
										
										
										
										<script>
										function  showUser<?php echo $objResult2["pk"]; ?>(str) {

											var cut_data = str.split("//"); 
											var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

											var check_status = cut_data[0];
											var check_status_save = "";
											if(check_status=="รอการยืนยัน"){ 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
												document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400";

												check_status_save = "รอการยืนยัน";
												
											}else if(check_status=="อนุมัติการยกเลิก"){ 
												
												
												var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  

												$.ajax({
													type: "GET",
													url: "check_contact_dropdown.php?bill_no="+typedata,
													success: function(result) {
													$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
													}
												});			
											
												
												 
												 $(document).ready(function(){ 
													$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
												 });   
												  
											}else if(check_status=="กู้คืน"){ 
												
												
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
 
											$.ajax({
												type: "GET",
												url: "check_contact_dropdown.php?bill_no="+typedata,
												success: function(result) {
												$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
												}
											});			
											
												 
												 $(document).ready(function(){ 
													$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
												 });   
												 
											} 

											 
										}   
											 
										function 
										CanceldataNo<?php echo $objResult2["pk"]; ?>( ) { 
										  
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
 
											$.ajax({
												type: "GET",
												url: "check_contact_dropdown.php?bill_no="+typedata,
												success: function(result) {
												$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
												}
											});			
											
											
											$(document).ready(function(){ 
											$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}	
										
										function 
										Canceldata<?php echo $objResult2["pk"]; ?>( ) { 
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
											
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

											check_status_save = "กู้คืน";  
												
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;
												
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
											
											
											
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_back.php?status="+check_status_save+"&bill_no="+save_key,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
											}
											});
											
											
											
												 
											$(document).ready(function(){ 
											$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
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
											
											var sdata1 = 0;
											var sdata2 = 0;
											var sdata3 = 0;
											var sdata4 = 0;
											var sdata5 = 0; 
											var sdata6 = 0; 
											var sdata7 = 0; 
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
											
											var cal1 = sdata1;  
											var cal2 = (sdata3/100);  
											 
											
											var sumall = (cal1 - ( cal1 * cal2 ) )  - sdata2 - sdata7 - sdata4 ; 
											document.getElementById("5data<?php echo $i; ?>").value  = sumall;  //// ยอดคืนลูกค้า
											
											var sumall2 = cal1 - sumall;
											document.getElementById("6data<?php echo $i; ?>").value  = sumall2;  //// ยอดที่บริษัทได้รับ
											 
											
										}	
											 
										function
										Saveconfrimcancel<?php echo $i; ?>( ) {
										  
											$(document).ready(function(){ 
											$('#Savepayment<?php echo $i; ?>').modal('hide'); //myModal is ID of div
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
											
											
											
											var c_payment = document.getElementById("c_payment<?php echo $i; ?>").value; ///   
											var c_bank = document.getElementById("c_bank<?php echo $i; ?>").value; ///   
											
											
											var major =  document.getElementById("searchname2").value; ///    
											var majorname =  document.getElementById("searchname").value; ///    
											
											
										if(data4 == ""){
											alert( "   กรุณากรอกค่าเสื่อม  ");
										}else{
											 
											check_status_save = "ยกเลิกสัญญา";  
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value; 
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+check_status_save+" </font> "; 
											
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";  
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
											  
											
											
											////////////////////////////////////
											document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcanceltwo<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printladne<?php echo $objResult2["pk"]; ?>").style.display = "block";
											////////////////////////////////////
											
											
											document.getElementById("showback<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+Commas(data5)+" </font> "; 
											
											document.getElementById("showbackm<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+Commas(data4)+" </font> "; 
											
											
											/*
												$c_moneydown = $objResult2["c_moneydown"];    
												$c_discount = $objResult2["c_discount"];    
												$c_cancel = $objResult2["c_cancel"];    
												$c_rowback = $objResult2["c_rowback"];    
												$c_total = $objResult2["c_total"];    
											*/
											
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_back2_1_new.php?status="+check_status_save+"&bill_no="+save_key+"&c_moneydown="+data1+"&c_discount="+data2+"&c_cancel="+data3+"&c_rowback="+data4+"&c_total="+data5+"&c_moneylost="+data7+"&c_company="+data6+"&c_payment="+c_payment+"&c_bank="+c_bank,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
											}
											});
											
												
											 ///alert("save_cancel_bill_back2.php?status="+check_status_save+"&bill_no="+save_key+"&c_price_back="+data4);
											$.ajax({
												type: "GET",
												url: "showcalsumdata.php?searchname2="+major,
												success: function(result) {
												$('#showcalsumdata').html(result);
												}
											});		
											
											
											
											$(document).ready(function(){ 
											$('#Savepayment<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}
										}
											
										function 
										Saveconfrimcanceltwo<?php echo $objResult2["pk"]; ?>( ) { 
										  
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
 
											$.ajax({
												type: "GET",
												url: "check_contact_dropdown.php?bill_no="+typedata,
												success: function(result) {
												$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
												}
											});			
											
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}	
											
											
										function
										SaveconfrimNomoney<?php echo $i; ?>( ) { 
										 
											var data1 = document.getElementById("1data<?php echo $i; ?>").value; ///   
											var data2 = document.getElementById("2data<?php echo $i; ?>").value; ///   
											var data3 = document.getElementById("3data<?php echo $i; ?>").value; ///   
											var data4 = document.getElementById("4data<?php echo $i; ?>").value; ///   
											var data5 = document.getElementById("5data<?php echo $i; ?>").value; ///    
											var data6 = document.getElementById("6data<?php echo $i; ?>").value; ///    
											var data7 = document.getElementById("7data<?php echo $i; ?>").value; ///   
											
											
											var major =  document.getElementById("searchname2").value; ///    
											var majorname =  document.getElementById("searchname").value; ///    
											
											 
											check_status_save = "ยกเลิกสัญญา";  
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value; 
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+check_status_save+" </font> "; 
											
											document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";  
											document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none";
											  
											
											
											////////////////////////////////////
											document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.display = "block";
											document.getElementById("printcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
											////////////////////////////////////
											
											
											document.getElementById("showback<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+Commas(data5)+" </font> "; 
											
											document.getElementById("showbackm<?php echo $objResult2["pk"]; ?>").innerHTML = " <font color='#FF0000' > "+Commas(data4)+" </font> "; 
											
											 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_back2_new.php?status="+check_status_save+"&bill_no="+save_key+"&c_moneydown="+data1+"&c_discount="+data2+"&c_cancel="+data3+"&c_rowback="+data4+"&c_total="+data5+"&c_moneylost="+data7+"&c_company="+data6,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
											}
											});
											
												
											 ///alert("save_cancel_bill_back2.php?status="+check_status_save+"&bill_no="+save_key+"&c_price_back="+data4);
											$.ajax({
												type: "GET",
												url: "showcalsumdata.php?searchname2="+major,
												success: function(result) {
												$('#showcalsumdata').html(result);
												}
											});		
											
											
											
											$(document).ready(function(){ 
											$('#Savepaymenttwo<?php echo $i; ?>').modal('hide'); //myModal is ID of div
											});   
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											 
										}
										
										function 
										SaveconfrimcancelNomoney<?php echo $objResult2["pk"]; ?>( ) { 
										  
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
 
											$.ajax({
												type: "GET",
												url: "check_contact_dropdown.php?bill_no="+typedata,
												success: function(result) {
												$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
												}
											});			
											
											
											$(document).ready(function(){ 
											$('#myModal<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
											
										}	
											
											 
											
										function
										Canceldatanote<?php echo $objResult2["pk"]; ?>( ) {
										  
											var data1 = document.getElementById("noreaddon1<?php echo $objResult2["pk"]; ?>").value; ///   
											var data2 = document.getElementById("noreaddon2<?php echo $objResult2["pk"]; ?>").value; ///  
											var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value; 
											   
											 
											var jsonString = ""; 
											$.ajax({
											type: "POST",
											url: "save_cancel_bill_back3_new.php?c_noreaddon1="+data1+"&c_noreaddon2="+data2+"&bill_no="+save_key ,
											contentType: 'application/json',
											data: jsonString,
											success: function(result) {
											//alert(result);
											}
											});
											
											 
											
											$(document).ready(function(){ 
											$('#Addondata<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});   
										}
										function
										CanceldatanoteNo<?php echo $i; ?>( ) {
										  
											$(document).ready(function(){ 
											$('#Addondata<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
											});    
											
										}
									    </script>
										
										
										<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										    
										<!-- modal small -->
										<div class="modal fade" id="myModaltwo<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												กรุณายืนยันการ การกู้คืนสัญญา <?php echo $objResult2["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												 <font style="font-size: 14px; " color="#FF0000">
												 	
												 	หมายเหตุ  <br> 
													การกู้คืนสัญญา รายการจะถูกย้ายกลับไป เป็นสัญญาปกติ
												 	
												 </font>
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	 
												 	
												 	 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันกู้คืน   </font> </button>  </a>

							 					 
							 					     <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่กู้คืน  </font> </button> </a>
												 	 
												 </div>
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
											
										
										<!-- modal small -->
										<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> รายการ <?php echo $objResult2["bill_no"]; ?>  </h5>
											
							 				<a onClick="Saveconfrimcanceltwo<?php echo $objResult2["pk"]; ?>()"        >
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button> </a>
											</div>
											<div class="modal-body">
											<div class="col-lg-12" align="left"   >   
											<font size="3px" color="black" style="font-size: 14px;">   

										 
										     <div id="showcontactsave<?php echo $objResult2["pk"]; ?>" class="col-lg-12" style="margin-top: 5px;  " align="center">   
									 	   
										 	  <div class="col-md-12"  >  <font color = '#FF0000' size="3px" > ยกเลิกสัญญา </font> 	 </div> 
										
										 	   <div class="col-md-12" align="left"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > 
												    เลขที่สัญญา <?php echo $objResult2["bill_no"]; ?>   <br> 
												    
													วันทีเริ่มทำสัญญา <?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?>  ถึงวันที่ <?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?> <br> 
													
													จำนวนงวด  <?php echo  number_format(0+$totalprice2); ?>  งวด   </font>    
												</div>
											   </div> 
											   
											   
											  <div class="col-md-12"  >  </div> 
											  
											  <!--- 
												$c_moneydown = $objResult2["c_moneydown"];    
												$c_discount = $objResult2["c_discount"];    
												$c_cancel = $objResult2["c_cancel"];    
												$c_rowback = $objResult2["c_rowback"];    
												$c_total = $objResult2["c_total"];    
											  --->
												 
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > เงินดาวน์ </font>   
												  <input type="text" class="form-control" id="1data<?php echo $i;?>" name="1data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo $moneydown; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "       onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" readonly  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
												 		 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยกเลิกสัญญา (%) </font>   
												  <input type="text" class="form-control" id="3data<?php echo $i;?>" name="3data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $c_cancel; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

										   
											   <div class="col-md-3"   >	
												<div class="form-group">
												   <font color = '#000' size="3px" > หนี้ค้าง </font>   
												  <input type="text" class="form-control" id="2data<?php echo $i;?>" name="2data<?php echo $i;?>"  autocomplete="off" required  value="<?php echo  $c_discount; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   <div class="col-md-12"  >	 </div> 
											   
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ค่าปรับ </font>   
												  <input type="text" class="form-control" id="7data<?php echo $i;?>" name="7data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $c_moneylost; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ค่าเสื่อม </font>   
												  <input type="text" class="form-control" id="4data<?php echo $i;?>" name="4data<?php echo $i;?>"  autocomplete="off" required value="<?php echo $c_rowback; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 

											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดคืนลูกค้า </font>   
												  <input type="text" class="form-control" id="5data<?php echo $i;?>" name="5data<?php echo $i;?>"  autocomplete="off" required 
												  value="<?php echo $c_total; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   <div class="col-md-3"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > ยอดที่บริษัทได้รับ </font>   
												  <input type="text" class="form-control" id="6data<?php echo $i;?>" name="6data<?php echo $i;?>"  autocomplete="off" required 
												  value="<?php echo $c_company; ?>"    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " readonly   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="calAge1<?php echo $i; ?>()">
												</div>
											   </div> 
											   
											   
											   
											   
											  <div class="col-md-6"  >	
												<div class="form-group">
												   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
												   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
													<select class="form-control" id="c_payment<?php echo $i;?>" name="c_payment<?php echo $i;?>" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
													<?php if(empty($c_payment)){ ?>
													<option value=""> เงือนไขการชำระเงิน </option>
													<?php } ?> 
													<?php 
													$sql = "SELECT * FROM drop_payment where name = '".$c_payment."' order by pk asc  "; 
													$query = mysqli_query($objCon,$sql);
													while($objResult = mysqli_fetch_array($query))
													{ 
													?>
													<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
													<?php  
													}
													?>   
													<?php 
													$sql = "SELECT * FROM drop_payment where name != '".$c_payment."' order by pk asc  "; 
													$query = mysqli_query($objCon,$sql);
													while($objResult = mysqli_fetch_array($query))
													{ 
													?>
													<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
													<?php  
													}
													?>   
													<?php if(!empty($c_payment)){ ?>
													<option value=""> ไม่เลือก </option>
													<?php } ?>  
													</select>
													<span class="input-group-append">
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
													<select class="form-control" id="c_bank<?php echo $i;?>" name="c_bank<?php echo $i;?>"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
													<?php if(empty($c_bank)){ ?>
													<option value=""> โปรดเลือก </option>
													<?php } ?>
													<?php 
													$sql_pay = "SELECT * FROM bank2 where pk = '".$c_bank."' order by pk asc  "; 
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
													$sql_pay = "SELECT * FROM bank2 where pk != '".$c_bank."' order by pk asc  "; 
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
													<?php if(!empty($c_bank)){ ?>
													<option value=""> ไม่เลือก </option>
													<?php } ?>  
													</select>   
													<span class="input-group-append">
													<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
														<img src="images/down.png" style="width: 15px;">		 
													</button>
													</span>
													</div> 
												</div>
											  </div>

											   
											   
											   
											   
											   
											   
											   
											   
											   
											   
 
											    <div class="col-md-12"  > 
											   
											    <div class="col-md-12" align="center" style=" margin-top: 15px; "  > 
											     
											    <a data-toggle="modal" data-target="#Savepayment<?php echo $i; ?>"   class="btn btn-sm btn-primary"  style="cursor: pointer;  background-color: #006400; border-radius: 5px;  border-color: #006400; border: 1px solid  #006400;  width: 120px; height: 40px;    " >
											    <font size="3px" color="#FFF" style=" font-size: 18px; " > 
												บันทึกข้อมูล   
												</font>  
												</a> 
											   
											   
											   
											    <a data-toggle="modal" data-target="#Savepaymenttwo<?php echo $i; ?>"   class="btn btn-sm btn-primary"  style="cursor: pointer;  background-color: #FF0000; border-radius: 5px;  border-color: #FF0000; border: 1px solid  #FF0000;  height: 40px;    " >
											    <font size="3px" color="#FFF" style=" font-size: 18px; " > 
												ยกเลิกสัญญา แบบไม่มีค่าใช้จ่ายใดๆ   
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
												
												
												
											   	<!-- modal small -->
												<div class="modal fade" id="Savepaymenttwo<?php echo $i; ?>" tabindex="-2" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
												<div class="modal-dialog modal-md" role="document" style="margin-top: 100px;">
												<div class="modal-content">
												<div class="modal-header">
												<h5 class="modal-title" id="smallmodalLabel"> กรุณายืนยันทำรายการ <?php echo $objResult2["bill_no"]; ?> ยกเลิกสัญญา แบบไม่มีค่าใช้จ่ายใดๆ </h5>
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
												 	  
												 	 <a onClick="SaveconfrimNomoney<?php echo $i; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  บันทึกรายการ   </font> </button>  </a>

							 					     <a onClick="SaveconfrimcancelNomoney<?php echo $i; ?>()" >
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
										
										</font></div></td>    
										 
										 	
										 		
								   		<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($objResult2["c_status"] == "ยกเลิกสัญญา"){ 
											$hdst = " display : block; ";
										}
											
										?> 

										<a id="addonladnee<?php echo $objResult2["pk"]; ?>"   class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px; cursor: pointer;   border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   "  data-toggle="modal" data-target="#Addondata<?php echo $objResult2["pk"]; ?>"   >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										ใบลดหนี้   
										</font>  
										</a> 
										 
										 
										 
										 
										<!-- modal small -->
										<div class="modal fade" id="Addondata<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												ใบลดหนี้   <?php echo $objResult2["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												 <div class="col-lg-12" align="left">  
												 
												  <div class="col-md-12"  >	
													<div class="form-group">
													   <font color = '#000' size="3px" > สาเหตุ </font>   
													  <input type="text" class="form-control" id="noreaddon1<?php echo $objResult2["pk"];?>" name="noreaddon1<?php echo $objResult2["pk"];?>"  autocomplete="off" required  value="<?php echo $c_noreaddon1; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " >
													</div>
												   </div> 
											   
												   <div class="col-md-6"  >	
													<div class="form-group">
													   <font color = '#000' size="3px" > ส่วนลด </font>   
													  <input type="text" class="form-control" id="noreaddon2<?php echo $objResult2["pk"];?>" name="noreaddon2<?php echo $objResult2["pk"];?>"  autocomplete="off" required  value="<?php echo $c_noreaddon2; ?>"   style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    "       onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"      >
													</div>
												   </div> 
												  
												 </div> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	 
												 	
												 	 <a onClick="Canceldatanote<?php echo $objResult2["pk"]; ?>()" >
												 	 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  บันทึก   </font> </button>  </a>

							 					 
							 					     <a onClick="CanceldatanoteNo<?php echo $objResult2["pk"]; ?>()"        >
								 					 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>
												 	 
												 </div>
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										</font></div></td>
									 			
										 			
								   		<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($objResult2["c_status"] == "ยกเลิกสัญญา"){ 
											$hdst = " display : block; ";
										}
											
										?> 

										<a id="printladne<?php echo $objResult2["pk"]; ?>" href="print_ladnee.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์    
										</font>  
										</a> 
										 
										</font></div></td>
								   
								   	
								   			
											 
											
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									    <font size="3px" color="Black" style=" font-size: 13px; " id="showbackm<?php echo $objResult2["pk"]; ?>" > 
									   
									   	<?php 
											if(!empty($c_price_back)){ 
												//// echo number_format(0+$allmoney); 
												echo number_format(0+$c_price_back); 
											} 
											?>
									   
										</font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
									    <font size="3px" color="Black" style=" font-size: 13px; " id="showback<?php echo $objResult2["pk"]; ?>" > 
									   
									   	<?php 
											if(!empty($c_company)){ 
												//// echo number_format(0+$allmoney);  
												echo number_format(0+$c_company);  
											} 
											?>
									   
										</font></div></td>
								   
								    
								   
								   
									   
									   
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										$colorbg = " #FF8C00 ";
										if($objResult2["c_status"] == "ยกเลิกสัญญา"){ 
											$hdst = " display : block; "; 
										}
										if($objResult2["c_status2"] == "รอการยืนยัน"){ 
											$colorbg = " #FF8C00 ";
										}
										if($objResult2["c_status2"] == "รอสินค้า"){ 
											$colorbg = " #FF8C00 ";
										}
										if($objResult2["c_status2"] == "จำหน่ายแล้ว"){ 
											$colorbg = " #4B0082 ";
										}
											
										?>
										<select class="form-control " style="background-color: <?php echo $colorbg; ?>; color: white; font-size: 12px; margin-top: -5px; <?php echo $hdst; ?> " id="stauts_back<?php echo $objResult2["pk"]; ?>" name="stauts_back<?php echo $objResult2["pk"]; ?>" onChange="showUserstauts_back<?php echo $objResult2["pk"]; ?>(this.value)"  > 
										
										<?php if($objResult2["c_status2"] == ""){ ?>
										<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
											
										<option value="รอสินค้า//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอสินค้า </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else if($objResult2["c_status2"] == "รอการยืนยัน"){ ?>
										<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
											
										<option value="รอสินค้า//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอสินค้า </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else if($objResult2["c_status2"] == "รอสินค้า"){ ?> 
										<option value="รอสินค้า//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอสินค้า </font></option> 
											
										<option value="จำหน่ายแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> จำหน่ายแล้ว </font></option>  
										<?php }else  if($objResult2["c_status2"] == "จำหน่ายแล้ว"){ ?> 
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
										 
											var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  

											var major =  document.getElementById("searchname2").value; ///    
											
											if(check_status == "รอการยืนยัน"){
												document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF8C00";   
											}else if(check_status == "รอสินค้า"){
												document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF8C00";  
											}else if(check_status == "จำหน่ายแล้ว"){
												document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#4B0082";   
											}
											
											
												$.ajax({
													type: "GET",
													url: "save_cancel_bill_back3.php?bill_no="+typedata+"&status="+check_status,
													success: function() {
													   
														
													}
												});
											 
											
										}   
										</script>
									   
									   
									   
									    <td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($objResult2["c_status"] == "ยกเลิกสัญญา"){ 
											$hdst = " display : block; ";
										}
											
										?> 

										<a id="printcanceltwo<?php echo $objResult2["pk"]; ?>" href="printbill_cancel.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์   
										</font>  
										</a> 
										 
										</font></div></td>
									   
									   
									   
									    <td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
										<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">  
										<?php  
										$hdst = " display : none; ";
										if($objResult2["c_status"] == "ยกเลิกสัญญา"){ 
											$hdst = " display : block; ";
										}
											
										?> 

										<a id="printcancel<?php echo $objResult2["pk"]; ?>" href="print_cancel.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank"  class="  btn-sm " style="  margin-top: -5px; background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; <?php echo $hdst; ?>   " >
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