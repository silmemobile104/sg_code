<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";

  
		 
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];
		 
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
	}
	if(!empty($_GET["searchnamedata"])){
		if(empty($_GET["searchnamedata"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
		$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname = $_GET["searchnamedata"];


			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load = date("d-m-Y", strtotime($date_income)); 
			$_SESSION["load_day"] = date("d-m-Y", strtotime($date_income)); 
		}
	} 

	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}
  
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
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
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้   </font>   
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
                         
                        
                    	<div   class="col-lg-5"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ / เลขที่สัญญา / รหัสลูกค้า    </font>

										<form action="savepayment_payment.php" method="get" >
										<input type="hidden"   id="searchnamedata" name="searchnamedata" value="<?php echo $searchname; ?>" > 
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"       autocomplete="off"  >
										  
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
								<table width="100%">
									<tr> 
										<td width="75%"> 
										<font color="black" size="3px" class="serif">  วันที่    </font>

										<form action="savepayment_payment.php" method="get" >
										<input type="hidden" id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>" >
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control current   "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/calendar.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td>  
										<td width="20%">
										 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหาวันที่   </font> </button>  
										</form> 
										</td>  
									</tr>
								</table>  
								<table width="100%">
									<tr> 
										<td width="75%"> 
										<font color="black" size="3px" class="serif">  สาขา </font>

										<form action="savepayment_payment.php" method="get" >
										<input type="hidden" id="searchname" name="searchname" value="<?php echo $searchname; ?>" >
										
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<select class="form-control" id="searchname3" name="searchname3"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname3)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname3."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname3."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											
											<?php if(!empty($searchname3)){ ?>
										  	<option value="">  ทั้งหมด    </option> 
										    <?php } ?>
											</select> 
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td>  
										<td width="20%">
										 <button type="submit" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 100%; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ค้นหา   </font> </button>  
										</form> 
										</td>  
									</tr>
								</table> 
						</div>
                    
                    
                    	<div   class="col-lg-12"  align="left"  > &nbsp; </div>
                    
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
							$total_page = 1;
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
							$addcode3 = "";  
							if(empty($_GET["searchname"])){
								$addcode2 = "and a.datestart = '".$daystart_load."' ";

							}else{
								$addcode2 = "and a.datestart = '".$daystart_load."' ";
							} 

 

							if(empty($_GET["searchname3"])){ 
							}else{
								$addcode3 = "and a.major = '".$searchname3."' ";
							} 

							
							if(empty($_GET["searchname2"])){

							}else{ 
								$addcode = " and   ( b.name like '%".$searchname2."%'  or  a.bill_no  like '%".$searchname2."%'  or  c.codecustomer  like '%".$searchname2."%'  )  ";
								
								/// $addcode2 = "";
							} 

							
													 
							 
							$sql2 = " SELECT a.*, b.name, c.codecustomer, c.codecustomer   FROM history_payment a 
							INNER Join customer b On a.customer = b.pk
							INNER Join list_order c On a.bill_no = c.bill_no
							where a.bill_no != '' 
							and a.closebill = 'เป็นหนี้'    
							and  a.income != ''  
							and  a.income != '0'  
							and a.status = 'ปกติ'   
							and a.onoff_copy = 'ปกติ'     and c.contactstatus = 'อนุมัติแล้ว' 
							".$addcode.$addcode2.$addcode3."    
							order by a.pk asc      "; 
							////  echo $sql2;
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
							 <ul class="pagination">
							<?php if ($page > 1): ?>
							<li class="prev"><a href="savepayment_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Prev</a></li>
							<?php endif; ?>

							<?php if ($page > 3): ?>
							<li class="start"><a href="savepayment_payment.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">1</a></li>
							<li class="dots">...</li>
							<?php endif; ?>

							<?php if ($page-2 > 0): ?><li class="page"><a href="savepayment_payment.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
							<?php if ($page-1 > 0): ?><li class="page"><a href="savepayment_payment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

							<li class="currentpage"><a href="savepayment_payment.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page ?></a></li>

							<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="savepayment_payment.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
							<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="savepayment_payment.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)-2): ?>
							<li class="dots">...</li>
							<li class="end"><a href="savepayment_payment.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
							<?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)): ?>
							<li class="next"><a href="savepayment_payment.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Next</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>
  
						</div>
                   
                  				<?php
								$colorbtns2s = " background-color: #FF0000; border-radius: 5px; width: 120px;   height: 40px; border-color: #FF0000; margin-top: 15px; ";
								$colorbtns1s = " background-color: #5DC9C1; border-radius: 5px; width: 120px;   height: 40px; border-color: #FBFBFB; margin-top: 15px; ";
								$colorbtns3s = " background-color: #FF8C00; border-radius: 5px; width: 120px;   height: 40px; border-color: #FF8C00; margin-top: 15px; ";

								$txtcolor1 = "#000000"; 
								$txtcolor2 = "#FFF"; 
  			 
								?>	
                  			
                   			<div class="col-md-4"  align="center" style="margin-top: 5px;"   >   
						  		<a href="savepayment.php?searchname=<?php echo $searchname;?>&searchname2=<?php echo $searchname2;?>&searchname3=<?php echo $searchname3;?>"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >     รอชำระ   </font> </button> </a>
								      
						  		<a href="savepayment_payment.php?searchname=<?php echo $searchname;?>&searchname2=<?php echo $searchname2;?>&searchname3=<?php echo $searchname3;?>"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >     ชำระเงินแล้ว   </font> </button> </a>                        
						   </div>
                   
                    
                    			<?php 
								$colorbtns1s = " background-color: #5DC9C1; border-radius: 5px;  height: 40px; border-color: #FBFBFB; margin-top: 15px; ";

								$txtcolor1 = "#000000"; 
								$txtcolor2 = "#FFF"; 
  			 

								$loppdata = 0;
								$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer   FROM history_payment a 
								INNER Join customer b On a.customer = b.pk
								INNER Join list_order c On a.bill_no = c.bill_no
								where a.bill_no != ''   
								and  a.income != ''  
								and  a.income != '0'  
								and a.closebill = 'เป็นหนี้'   
								and a.status = 'ปกติ'   
								and a.onoff_copy = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
								".$addcode.$addcode2.$addcode3."    
								order by a.pk asc   limit {$start} , {$perpage}  "; 

								///// echo $sql;
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{ 
										$loppdata++;
								}
											
											
								?>
                    	  <div class="col-md-4"  align="right" style="margin-top: 5px;"   > 
                    	  
                    	    
						  		<a href="print_savepayment_payment.php?searchname=<?php echo $searchname;?>&searchname2=<?php echo $searchname2;?>&searchname3=<?php echo $searchname3;?>&page2=<?php echo $_GET["page2"];?>" target="_blank"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns3s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >     Export Excel   </font> </button> </a>                                                       
						 	                                             
						 	                                               
						 	                                                   
						  		<a onClick="savebillall()"        >
								<button type="button" id="savebillall"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1" >     บันทึกทำรายการ   </font> </button> </a>
								 
								<input type="hidden" id="chktotalend" value="<?php echo $loppdata; ?>" >    
								<input type="hidden" id="chktotalend_end" value="<?php echo $loppdata; ?>" >      
								               
								  <script language="javascript">
								 function savebillall()
								 { 
									var totalend = document.getElementById("chktotalend").value;
									for(var isave = 1; isave <= totalend; isave++){ 

									var int1 = document.getElementById("idbill"+isave).value;   /// บิล     
									var int2 = document.getElementById("datesave"+isave).value;     //// ID วันบันทึก 

									var int3 = document.getElementById("summonetontop"+isave).value; /// ยอดค้าง   
									var int4 = document.getElementById("getincomememberold"+isave).value;   ///  ยอดชำระเก่า  

									var int5 = document.getElementById("getincomemember"+isave).value;   /// ยอดเก็บเงิน      
									var int6 = document.getElementById("majordata"+isave).value;   /// majordata    
									var int7 = document.getElementById("contacdata"+isave).value;   /// majordata    
 
									var int8 = document.getElementById("summonetontop"+isave).value;   /// ยอดหนี้คงเหลือ   
										
									var int9 = document.getElementById("calmoneybank"+isave).value;   /// ยอดหนี้คงเหลือ    
									var int10 = document.getElementById("typedatapayment"+isave).value;   /// ประเภทการบันทึก  
 
										
									var int11 = document.getElementById("bankdata"+isave).value;   /// เงินฝาก
									var int12 = document.getElementById("getmoneybank"+isave).value;   /// เงินฝาก  ทั้งหมด
									var int13 = document.getElementById("getincomememberbackddata"+isave).value;   ///  ยอดชำระเก่า  
										
									var int14 = document.getElementById("getdiscount"+isave).value;   ///  ยอดชำระเก่า  
										
									var int15 = document.getElementById("droppaymenttwo"+isave).value;   ///  ยอดชำระเก่า  
									var int16 = document.getElementById("droppaymentbank"+isave).value;   ///  ยอดชำระเก่า  
									var int17 = document.getElementById("dropcontact"+isave).value;   ///  ยอดชำระเก่า  
 
										
									if(int5 == ""){
										int5 = "0";
									}
									if(int8 == ""){
										int8 = "0";
									}
									if(int4 == ""){
										int4 = "0";
									}
									if(int9 == ""){
										int9 = "0";
									}
									if(int11 == ""){
										int11 = "0";
									}
									if(int12 == ""){
										int12 = "0";
									}
									if(int13 == ""){
										int13 = "0";
									}
									if(int14 == ""){
										int14 = "0";
									}
										
										
									var n1 = parseInt(int5);	 //// เงินที่ลูกค้าจ่าย 
									var n2 = parseInt(int8);	 //// ยอดหนี้คงเหลือ
									var n3 = parseInt(int4);	 //// ยอดชำระเก่า
									var n4 = parseInt(int9);	 //// บัญชีธนาคาร
									var n5 = parseInt(int11);	 //// เงินฝาก
									var n6 = parseInt(int13);	 //// เงินฝาก
									var n7 = parseInt(int14);	 //// เงินฝาก
										
									var check_total = (n2 + n6);
									var check_total2 = (n4 + n3);
									
									 /// alert( " คุณกรอกยอดเงินเกิน ยอดคงค้าง : " + check_total + " < " + n1 ); 
									 
										
									if(check_total < n1){
										alert( " คุณกรอกยอดเงินเกิน ยอดคงค้าง : " + int1 ); 

									}else{ 
										
										
									if(int10 == "ชำระกรอกเอง"){
										 
											var jsonString = "";  
											$.ajax({
												type: "POST",
												url: "save_payment.php?money="+int5+"&bill="+int1+"&datesave="+int2+"&majordata="+int6+	"&contactdata="+int7+"&paymentother="+int4+"&typedatapayment="+int10+"&bankdata="+int11+"&discount="+int14+"&typesave2="+int15+"&banksave="+int16+"&dropcontact="+int17,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {   
											}
											});  
										
									}else if(int10 == "ชำระหักเงินฝาก"){
										 
										if(check_total2 < n1){
											alert( " คุณกรอกยอดเงินเกิน ยอดฝากในบัญชี : " + int1 ); 

										}else{ 

											
										if(int5 == ""){
										}else if(int5 == "0"){ 
										}else{  
											document.getElementById("hddata"+isave).style.display = "none"; 
										 
											var jsonString = "";  
											$.ajax({
												type: "POST",
												url: "save_payment.php?money="+int5+"&bill="+int1+"&datesave="+int2+"&majordata="+int6+
												"&contactdata="+int7+"&paymentother="+int4+"&typedatapayment="+int10+"&bankdata="+int11+"&discount="+int14+"&typesave2="+int15+"&banksave="+int16+"&dropcontact="+int17,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {   
											}
											});   
										  	 
										}
											

										}
									}else if(int10 == "ชำระ2ทาง"){
										
										 
										if(int5 == ""){
										}else if(int5 == "0"){ 
										}else{  
											//// document.getElementById("hddata"+isave).style.display = "none"; 
											
											 
											var jsonString = "";  
											$.ajax({
												type: "POST",
												url: "save_payment.php?money="+int5+"&bill="+int1+"&datesave="+int2+"&majordata="+int6+	"&contactdata="+int7+"&paymentother="+int4+"&typedatapayment="+int10+"&bankdata="+int11+"&moneyall="+int12+"&discount="+int14+"&typesave2="+int15+"&banksave="+int16+"&dropcontact="+int17,
												contentType: 'application/json',
												data: jsonString,
												success: function(result) {   
											}
											});  
										}
										
									} 
										 
									}	 
								}
 
								alert(" Save Complete ");
								}      
						 	   </script>                          
						   </div>
                   
                   
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 3000px ;"    >  
							  <tbody>
							  <?php
													 
										$i = 1;
										$ishow = 1;
													 
 										if (empty($_GET['page2'])) { 
											$ishow = 1;
										}else if (($_GET['page2'] == 1)) { 
											$ishow = 1;
										}else{ 
											$ishow = ( ($_GET["page2"]-1) * 25 ) + 1; 
										}
													 
													 
										$bg = "#E8E8E8";
										$total_price = 0; 
										$total_price2 = 0; 
										$total_price3 = 0; 
										$total_price3_2 = 0; 
								  
								  
										$total_price4 = 0; 
										$total_price5 = 0; 
										$total_price6 = 0; 
										$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook, b.facebookurl  FROM history_payment a 
											INNER Join customer b On a.customer = b.pk
											INNER Join list_order c On a.bill_no = c.bill_no
											where a.bill_no != ''   
											and  a.income != ''  
											and  a.income != '0'  
											and a.closebill = 'เป็นหนี้'   
											and a.status = 'ปกติ'   
											and a.onoff_copy = 'ปกติ'    and c.contactstatus = 'อนุมัติแล้ว'  
											".$addcode.$addcode2.$addcode3."    
											order by a.pk asc   limit {$start} , {$perpage}  "; 
								  
								  		///// echo $sql;
										$query = mysqli_query($objCon,$sql); 
										while($objResult = mysqli_fetch_array($query))
										{ 
											$name_cutomer = " - ";
											$name_cutomer2 = " - "; 
											$name_cutomer = $objResult["name"];    
											  
											$note1 = " - ";
											$totalprice1 = 0;
											$totalprice2 = 0;
											$totalprice3 = 0;
											$totalprice4 = " - ";
											$totalprice5 = " - ";
											$startdate = " - ";
											$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{   
												$totalprice1 = $objResult2["money"]; 
												$totalprice2 = $objResult2["daytotal"]; 
												$totalprice3 = $objResult2["dayprice"]; 
												$totalprice4 = $objResult2["startdate"]; 
												$totalprice5 = $objResult2["endate"]; 
											}
  
											$discoount = 0;
											$discoountpaymentother = 0;
											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
											$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
											$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql2 = "SELECT * FROM history_payment Where  
											bill_no = '". $objResult["bill_no"]."' 
											and income != '' 
											and income != '0'   
											".$code_check2." ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												if(!empty($objResult2["income"])){
												$discoount += $objResult2["income"]; 
													
												}
												if(!empty($objResult2["paymentother"])){
												$discoountpaymentother += $objResult2["paymentother"]; 
												}  
											}	

											$allmoney = ($totalprice2*$totalprice3)-$discoount;
											
											
											if($bg == "#FFF"){ 
											  $bg = "#E8E8E8";

											}else{  
											  $bg = "#FFF"; 
											}  
											  $bg = "#E8E8E8";
										
											 
											$name_staff = " - ";
											$name_staff2 = $objResult["date_time"];
											$sql2 = "SELECT * FROM member_all Where  pk = '". $objResult["create_by"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$name_staff = $objResult2["name"];   
											}
											
											 
											$discoount_cut = 0;  
											$discoount_cut1 = 0;  
											$discoount_cut2 = 0; 
											
											
											
											$discountbank = 0;  
											$countloopnopay = 0;
											$chk_total = 0;  
											
											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
											$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
											$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql2 = " SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"] ."'  ".$code_check2." "; 
											/// echo $sql2;
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$price1 = 0;
												if(!empty($objResult2["income"])){ 
													 
													$discoount_cut += $totalprice3 - $objResult2["income"]; 
													$discoount_cut2 += $objResult2["income"];    
													$price1 = $objResult2["income"];    
													 
													if($objResult2["typesave"] == "ชำระหักเงินฝาก"){
														$discountbank += $objResult2["bank"];  
													}
													if($objResult2["typesave"] == "ชำระ2ทาง"){
														$discountbank += $objResult2["bank"];  
													}
													
													// $countloopnopay = 0;
													// $chk_total = 0;
												} 
												
													if($objResult2["addon"] == "ไม่นับ"){
														$discoount_cut1 -= $price1;
													}else{
														$discoount_cut1 += $totalprice3 - $price1 ;
													} 
													
												    
										
													if(!empty($objResult2["income"])){   
														$countloopnopay = 0;
														$chk_total = 0;
													}else{
														$countloopnopay++;
													}  
 
													if($countloopnopay >= 5){ 
														if(!empty($objResult2["income"])){ 

															$checkpaymentday = "ON";
															$sql = "SELECT * FROM payment_other_bill_no where bill_no = '".$objResult2["bill_no"]."' and date_start2 = '".$objResult2["create_date2"]."'   "; 
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
											
											/// echo $objResult["bill_no"] . " -- " . $chk_total . " <br> ";
											
											 
											$moneybank = 0;
											$contactstart = date("Y-m-d", strtotime('2020-01-01'));  /// วันที่เริ่มเก็บ  
											$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load)));
											$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql_c = "SELECT * FROM money_customer_bank where bill_no = '".$objResult["bill_no"]."' 
											and ( typegetpayment = 'โอนผ่านบัญชีบริษัท'  or  typegetpayment = 'รับเงินสด'  )
											".$code_check2."  order by pk asc  "; 
											///	echo $sql_c;
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												if(!empty($objResult_c["money"])){ 
													$moneybank +=  $objResult_c["money"];
												} 
											}	
											 
											
											if( $discoount_cut1 < 0){
												$discoount_cut1 = 0;
											}
											///echo $totalprice3 . " - " . $price1 ; 
											 
											$name_major = " - "; 
											$sql2 = "SELECT * FROM major Where  pk = '". $objResult["major"]."'   ";   
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$name_major = $objResult2["name"];   
											}
											 
											 
											$discountshow = "0";
											if(empty($objResult["paymentother"])){
												$discountshow = $chk_total*50;
											}
											if(!empty($objResult["paymentother"])){
												/// $discountshow = $objResult["paymentother"];
											}
											
											
											 $total_dis = ($chk_total*50);
											 if($total_dis <= 0){
											 $total_dis = 0;
											 } 
											
											$getbill = $objResult["bill_no"];
											$totalprice_chk = ( $chk_total * 50 );  
											$discountpayment = 0;
											$code_check2 = " and date_start2 BETWEEN '2020-01-01' AND '".$checkend."'  "; 
											$sql2 = "SELECT * FROM payment_other_bill_no Where  bill_no_ref = '". $getbill ."' ".$code_check2." ";  
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$discountpayment += $objResult2["price"] + $objResult2["discount"];  
											}  

											$total_dis = $totalprice_chk - $discountpayment  ;
											if($total_dis <= 0){
												$total_dis = 0;
											}
											
											
											
											
											$getstart = 0;
											$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult["bill_no"] ."' order by pk asc limit 1 ";  
											$query2 = mysqli_query($objCon,$sql2); 
											while($objResult2 = mysqli_fetch_array($query2))
											{  
												$getstart = $objResult2["orderdata"];   
											}

											$onoffadd = "";
											if($getstart >= 1){
												$onoffadd = "off";
											}
							  ?> 
									  
							   <tr id="hddata<?php echo $i; ?>"  style="background-color: <?php echo $bg ?>; "> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 12px; " > 
											
											<?php 
								  			$bgdrop = "#006400";
											$showdisplay1 = "display: none; ";
											$showdisplay2 = "display: none; ";
											$showdisplay3 = "display: none; "; 
											if($objResult["typesave"] == "ชำระหักเงินฝาก"){
												$bgdrop = "#FF8C00";
												$showdisplay2 = "display: block; ";
											}else if($objResult["typesave"] == "ชำระกรอกเอง"){
								  				$bgdrop = "#006400"; 
												$showdisplay1 = "display: block; ";
											}else if($objResult["typesave"] == "ชำระ2ทาง"){
								  				$bgdrop = "#FF0000";
												$showdisplay3 = "display: block; ";
											}else {
								  				$bgdrop = "#006400"; 
												$showdisplay1 = "display: block; ";
											}
											?> 
											<select class="form-control" id="droppayment<?php echo $i; ?>" name="droppayment<?php echo $i; ?>"   style="background-color: <?php echo $bgdrop; ?>;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; font-size: 10px; margin-top: -10px;  color: white;  " onChange="Loadpaymentshow<?php echo $i; ?>()"     >  
											<?php 
											$sql_pay = "SELECT * FROM droppayment where name = '".$objResult["typesave"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql_pay = "SELECT * FROM droppayment where name != '".$objResult["typesave"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>   
											</select>   
										</font></div></td> 
										   
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 12px; " > 
											
											<?php 
								  			$bgdrop = "#FFF"; 
								  			$bgdroptxt = "#000"; 
											?> 
											<select class="form-control" id="droppaymenttwo<?php echo $i; ?>" name="droppaymenttwo<?php echo $i; ?>"   style="background-color: <?php echo $bgdrop; ?>;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; font-size: 10px; margin-top: -10px;  color: <?php echo $bgdroptxt ?>;  "  >  
											<?php if(empty($objResult["typesave2"])){ ?>
											<option value=""> โปรดเลือก </option>
											<?php } ?>
											<?php 
											$sql_pay = "SELECT * FROM droppayment2 where name = '".$objResult["typesave2"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql_pay = "SELECT * FROM droppayment2 where name != '".$objResult["typesave2"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>   
											</select>   
										</font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 12px; " > 
											
											<?php 
								  			$bgdrop = "#FFF"; 
								  			$bgdroptxt = "#000"; 
											?> 
											<select class="form-control" id="droppaymentbank<?php echo $i; ?>" name="droppaymentbank<?php echo $i; ?>"   style="background-color: <?php echo $bgdrop; ?>;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; font-size: 10px; margin-top: -10px;  color: <?php echo $bgdroptxt ?>;  "  >  
											<?php if(empty($objResult["banksave"])){ ?>
											<option value=""> โปรดเลือก </option>
											<?php } ?>
											<?php 
											$sql_pay = "SELECT * FROM bank2 where pk = '".$objResult["banksave"]."' order by pk asc  "; 
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
											$sql_pay = "SELECT * FROM bank2 where pk != '".$objResult["banksave"]."' order by pk asc  "; 
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
											</select>   
										</font></div></td>
										  
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " >  <?php echo $ishow; ?>  </font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php echo $objResult["facebook"]; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > 
										<?php if(!empty($objResult["facebookurl"])){?>
										 
										<a href="<?php echo $objResult["facebookurl"]; ?>" class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " target="_blank" > 
										<font size="3px" color="Black" style=" font-size: 10px; " >   
										
										ลิ้ง 
										  
										</font>
										</a>
										 
										<?php } ?>
										   
										</font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php echo $objResult["codecustomer"]; ?> </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php echo $objResult["telphone"]; ?> </font></div></td> 
										  
										   <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 12px; " > 

											<?php 
											$bgdrop = "#FF8C00";
											if($objResult["contactdata"] == "โปรดเลือก"){
												$bgdrop = "#FF8C00";
											}else if($objResult["contactdata"] == "ติดต่อได้"){
												$bgdrop = "#006400"; 
											}else if($objResult["contactdata"] == "ติดต่อไม่ได้"){
												$bgdrop = "#FF0000";
											}
											?> 
											<select class="form-control" id="dropcontact<?php echo $i; ?>" name="dropcontact<?php echo $i; ?>"   style="background-color: <?php echo $bgdrop; ?>;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; font-size: 10px; margin-top: -10px;  color: white;  " onChange="Loadropcontact<?php echo $i; ?>()"     > 
											<?php 
											$sql_pay = "SELECT * FROM drop_contact where name = '".$objResult["contactdata"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql_pay = "SELECT * FROM drop_contact where name != '".$objResult["contactdata"]."' order by pk asc  "; 
											$query_pay = mysqli_query($objCon,$sql_pay);
											while($objResult_pay = mysqli_fetch_array($query_pay))
											{ 
											?>
											<option value="<?php echo $objResult_pay["name"]; ?>"><?php echo $objResult_pay["name"]; ?></option> 
											<?php  
											}
											?>    
											</select>  
										</font></div></td> 
										 
										  <script language="javascript">
											function Loadropcontact<?php echo $i; ?>()
											{ 
												 var int1 = document.getElementById("dropcontact<?php echo $i; ?>").value;   /// บิล    
												  
												 ///alert( int1 );
												 if(int1 == "โปรดเลือก"){
													document.getElementById("dropcontact<?php echo $i; ?>").style.background = "#FF8C00";   
												 }
												 if(int1 == "ติดต่อได้"){
													document.getElementById("dropcontact<?php echo $i; ?>").style.background = "#006400";   
												 }
												 if(int1 == "ติดต่อไม่ได้"){
													document.getElementById("dropcontact<?php echo $i; ?>").style.background = "#FF0000";   
												 }
												 
											 

												var int1 = document.getElementById("idbill<?php echo $i; ?>").value;   /// บิล     
												var int2 = document.getElementById("datesave<?php echo $i; ?>").value;     //// ID วันบันทึก 

												var int3 = document.getElementById("summonetontop<?php echo $i; ?>").value; /// ยอดค้าง   
												var int4 = document.getElementById("getincomememberold<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  

												var int5 = document.getElementById("getincomemember<?php echo $i; ?>").value;   /// ยอดเก็บเงิน      
												var int6 = document.getElementById("majordata<?php echo $i; ?>").value;   /// majordata    
												var int7 = document.getElementById("contacdata<?php echo $i; ?>").value;   /// majordata    

												var int8 = document.getElementById("summonetontop<?php echo $i; ?>").value;   /// ยอดหนี้คงเหลือ   

												var int9 = document.getElementById("calmoneybank<?php echo $i; ?>").value;   /// ยอดหนี้คงเหลือ    
												var int10 = document.getElementById("typedatapayment<?php echo $i; ?>").value;   /// ประเภทการบันทึก  


												var int11 = document.getElementById("bankdata<?php echo $i; ?>").value;   /// เงินฝาก
												var int12 = document.getElementById("getmoneybank<?php echo $i; ?>").value;   /// เงินฝาก  ทั้งหมด
												var int13 = document.getElementById("getincomememberbackddata<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  

												var int14 = document.getElementById("getdiscount<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  

												var int15 = document.getElementById("droppaymenttwo<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  
												var int16 = document.getElementById("droppaymentbank<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  
												var int17 = document.getElementById("dropcontact<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  


												if(int5 == ""){
													int5 = "0";
												}
												if(int8 == ""){
													int8 = "0";
												}
												if(int4 == ""){
													int4 = "0";
												}
												if(int9 == ""){
													int9 = "0";
												}
												if(int11 == ""){
													int11 = "0";
												}
												if(int12 == ""){
													int12 = "0";
												}
												if(int13 == ""){
													int13 = "0";
												}
												if(int14 == ""){
													int14 = "0";
												}


												var n1 = parseInt(int5);	 //// เงินที่ลูกค้าจ่าย 
												var n2 = parseInt(int8);	 //// ยอดหนี้คงเหลือ
												var n3 = parseInt(int4);	 //// ยอดชำระเก่า
												var n4 = parseInt(int9);	 //// บัญชีธนาคาร
												var n5 = parseInt(int11);	 //// เงินฝาก
												var n6 = parseInt(int13);	 //// เงินฝาก
												var n7 = parseInt(int14);	 //// เงินฝาก

												var check_total = (n2 + n6);
												var check_total2 = (n4 + n3);

												 /// alert( " คุณกรอกยอดเงินเกิน ยอดคงค้าง : " + check_total + " < " + n1 ); 
    
												var jsonString = "";  
												$.ajax({
													type: "POST",
													url: "save_payment_dropdown.php?money="+int5+"&bill="+int1+"&datesave="+int2+"&majordata="+int6+	"&contactdata="+int7+"&paymentother="+int4+"&typedatapayment="+int10+"&bankdata="+int11+"&discount="+int14+"&typesave2="+int15+"&banksave="+int16+"&dropcontact="+int17,
													contentType: 'application/json',
													data: jsonString,
													success: function(result) {   
												}
												});  

												
											}      
										   </script>  
										 
										  
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php 
									
											if($onoffadd == "off"){
												echo ($objResult["orderdata"]); 
											}else{
												echo ($objResult["orderdata"]+1); 
											}
										  ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php echo number_format(0+$totalprice1); ?>   </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > <?php echo number_format(0+$totalprice3); ?>    </font></div></td> 
										 
										   
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " > 
											
										<input type="hidden" id="totaldata" value="<?php echo $total_count; ?>"   > 
										<!--  บิล  -->
										<input type="hidden" id="idbill<?php echo $i; ?>" value="<?php echo $objResult["bill_no"]; ?>"   > 
										<!--  ID วันบันทึก  -->
										<input type="hidden" id="datesave<?php echo $i; ?>" value="<?php echo $objResult["pk"]; ?>"   > 
										 
										<input type="hidden" id="summonetontop<?php echo $i; ?>" value="<?php echo number_format(0+$allmoney, '0', '', ''); ?>"   > 
										<!--  สาขา  -->
										<input type="hidden" id="majordata<?php echo $i; ?>" value=""   > 
										<!--  สาขา  -->
										<input type="hidden" id="contacdata<?php echo $i; ?>" value="<?php echo $objResult["typedata"]; ?>"   > 
										<input type="hidden" id="discounttotalpay<?php echo $i; ?>" value="<?php echo $discoount_cut1; ?>"   > 
										<input type="hidden" id="getincomememberback<?php echo $i; ?>" value="<?php echo  $discoount_cut2; ?>"   > 
										
										<input type="hidden" id="getincomememberbackddata<?php echo $i; ?>" value="<?php echo  $objResult["income"]; ?>"   > 
 
										<input type="hidden" id="ontopdata<?php echo $i; ?>" value="<?php echo  $discoount_cut1; ?>"   > 
										<input type="hidden" id="typedatapayment<?php echo $i; ?>" value="<?php echo $objResult["typesave"]; ?>"   > 
										<input type="hidden" id="bankdata<?php echo $i; ?>" value=""   > 
											   		 		  				  
										<!----- ---->    
										<input type="text" name="getincomemembernormal<?php echo $i; ?>" id="getincomemembernormal<?php echo $i; ?>"     value="<?php echo $objResult["income"]; ?>"    style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; <?php echo $showdisplay1; ?> "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="Normaldata<?php echo $i; ?>()"    autocomplete="off"     >
											   				  				  
											   			
										<input type="text" name="getincomebank<?php echo $i; ?>" id="getincomebank<?php echo $i; ?>"     value="<?php echo $objResult["income"]; ?>"    style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px;  <?php echo $showdisplay2; ?>  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="Bankdata<?php echo $i; ?>()"    autocomplete="off"     > 
										<!--- --------- -->	  
										
										<input type="text" name="getincomebanktwo<?php echo $i; ?>" id="getincomebanktwo<?php echo $i; ?>"     value="<?php echo $objResult["income"]; ?>"    style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF; display: none; margin-top: -5px;  <?php echo $showdisplay3; ?>  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="Bankdata<?php echo $i; ?>()"    autocomplete="off" readonly     > 
										<!--- ------------ -->	   		 				  				  
										
										<script language="javascript">
											 function Loadpaymentshow<?php echo $i; ?>()
											 { 
												 var int1 = document.getElementById("droppayment<?php echo $i; ?>").value;   /// บิล    
												  
												 ///alert( int1 );
												 if(int1 == "ชำระกรอกเอง"){
													document.getElementById("getincomemember<?php echo $i; ?>").style.display = "none"; 
													document.getElementById("getincomebank<?php echo $i; ?>").style.display = "none"; 
													document.getElementById("getincomemembernormal<?php echo $i; ?>").style.display = "block"; 
													document.getElementById("getincomebanktwo<?php echo $i; ?>").style.display = "none";
													 
													document.getElementById("typedatapayment<?php echo $i; ?>").value = "ชำระกรอกเอง";  
													document.getElementById("getincomebank<?php echo $i; ?>").value = "";  
													document.getElementById("getincomemembernormal<?php echo $i; ?>").value = "";  
													document.getElementById("getincomemember<?php echo $i; ?>").value = "";  
													document.getElementById("getincomebanktwo<?php echo $i; ?>").value = "";  
													 
													Normaldata<?php echo $i; ?>();
													IsNumeric<?php echo $i; ?>(); 
													 
													 
													 document.getElementById("droppayment<?php echo $i; ?>").style.color = "White"; 
													 document.getElementById("droppayment<?php echo $i; ?>").style.backgroundColor = "#006400";
													 
													 
												 }else  if(int1 == "ชำระหักเงินฝาก"){
													 
												 	 document.getElementById("droppayment<?php echo $i; ?>").style.color = "White"; 
													 document.getElementById("droppayment<?php echo $i; ?>").style.backgroundColor = "#FF8C00";
													 
													document.getElementById("getincomemember<?php echo $i; ?>").style.display = "none";
													document.getElementById("getincomemembernormal<?php echo $i; ?>").style.display = "none";
													document.getElementById("getincomebank<?php echo $i; ?>").style.display = "block";
													document.getElementById("getincomebanktwo<?php echo $i; ?>").style.display = "none";
													 
													 
													document.getElementById("typedatapayment<?php echo $i; ?>").value = "ชำระหักเงินฝาก";  
													document.getElementById("getincomemembernormal<?php echo $i; ?>").value = "";  
													document.getElementById("getincomebank<?php echo $i; ?>").value = "";  
													document.getElementById("getincomemember<?php echo $i; ?>").value = "";  
													document.getElementById("getincomebanktwo<?php echo $i; ?>").value = "";  
													 
													 IsNumeric<?php echo $i; ?>(); 
													 
												  
												 }else  if(int1 == "ชำระ2ทาง"){
													 
												 	document.getElementById("droppayment<?php echo $i; ?>").style.color = "White"; 
													document.getElementById("droppayment<?php echo $i; ?>").style.backgroundColor = "#FF0000";
													 
													document.getElementById("getincomemember<?php echo $i; ?>").style.display = "none";
													document.getElementById("getincomemembernormal<?php echo $i; ?>").style.display = "none";
													document.getElementById("getincomebank<?php echo $i; ?>").style.display = "none";
													document.getElementById("getincomebanktwo<?php echo $i; ?>").style.display = "block";
													 
													document.getElementById("typedatapayment<?php echo $i; ?>").value = "ชำระ2ทาง";  
													document.getElementById("getincomemember<?php echo $i; ?>").value = "";  
													document.getElementById("getincomemembernormal<?php echo $i; ?>").value = "";  
													document.getElementById("getincomebank<?php echo $i; ?>").value = "";  
													document.getElementById("getincomebanktwo<?php echo $i; ?>").value = "";  
													 
													  
													 $(document).ready(function(){ 
														$('#myModalgetmoney<?php echo $i; ?>').modal('show'); //myModal is ID of div
													 });   

													 
												 } 
											 }
											 function Bankdata<?php echo $i; ?>()
											 { 
												 var int1 = document.getElementById("getincomebank<?php echo $i; ?>").value;   /// บิล    
												 var int2 = document.getElementById("calmoneybank<?php echo $i; ?>").value;   /// บิล    
												 var int3 = document.getElementById("getincomememberbackddata<?php echo $i; ?>").value;   /// บิล    
												 document.getElementById("getincomemember<?php echo $i; ?>").value = int1;   /// บิล   
												 document.getElementById("bankdata<?php echo $i; ?>").value = int1;   /// บิล   
												 
												 
												 IsNumeric<?php echo $i; ?>();
												 
												 if(int1 == ""){
													int1 = "0";
												 }
												 if(int2 == ""){
													int2 = "0";
												 }
												 if(int3 == ""){
													int3 = "0";
												 }
												 var n1 = parseFloat(int1);	 //// เงิน ช่องรับเข้า ธนาคาร 
												 var n2 = parseFloat(int2);	 //// เงิน คงเหลือในบัญชี  
												 var n3 = parseFloat(int3);	 //// เงิน ชำรเก่า 
												 
												 var sumallshow = (n2 + n3) - n1; 
												 
												 var intshow1 =  document.getElementById('moneybank<?php echo $i; ?>');  
												 intshow1.innerHTML = numberWithCommas2(sumallshow.toFixed(0));
												   
											 }
											 function Normaldata<?php echo $i; ?>()
											 { 
												 var int1 = document.getElementById("getincomemembernormal<?php echo $i; ?>").value;   /// บิล    
												 document.getElementById("getincomemember<?php echo $i; ?>").value = int1;   /// บิล   
												 IsNumeric<?php echo $i; ?>(); 
												 
												  
												 var int1 = document.getElementById("getincomebank<?php echo $i; ?>").value;   /// บิล    
												 var int2 = document.getElementById("calmoneybank<?php echo $i; ?>").value;   /// บิล    
												 var int3 = document.getElementById("getincomememberbackddata<?php echo $i; ?>").value;   /// บิล   
												 if(int1 == ""){
													int1 = "0";
												 }
												 if(int2 == ""){
													int2 = "0";
												 }
												 if(int3 == ""){
													int3 = "0";
												 }
												 var n1 = parseFloat(int1);	 //// เงิน ช่องรับเข้า ธนาคาร 
												 var n2 = parseFloat(int2);	 //// เงิน คงเหลือในบัญชี  
												 var n3 = parseFloat(int3);	 //// เงิน ชำรเก่า 
												 
												 var sumallshow = (n2 + n3); 
												 
												 var intshow1 =  document.getElementById('moneybank<?php echo $i; ?>');  
												 intshow1.innerHTML = numberWithCommas2(sumallshow.toFixed(0));
												 
												 document.getElementById("getincomebank<?php echo $i; ?>").value  = ""; 
												 
											 }
											
											
											
											function  CanceldataNo<?php echo $i; ?>( ) {
												// alert(" No "  ); 

												IsNumeric<?php echo $i; ?>(); 
													 
												$(document).ready(function(){ 
												$('#myModalgetmoney<?php echo $i; ?>').modal('hide'); //myModal is ID of div
												});   
											}
											
											function  Canceldata<?php echo $i; ?>( ) {
												 
												IsNumeric<?php echo $i; ?>(); 
													  
												// alert(" No "  );  
												$(document).ready(function(){ 
												$('#myModalgetmoney<?php echo $i; ?>').modal('hide'); //myModal is ID of div
												});   
											}
											
											
											function BankdataPayment<?php echo $i; ?>()
											{  
												 var int1 = document.getElementById("getmoneybank<?php echo $i; ?>").value;   /// ยอดเงินฝากคงเหลือ   
												 var int2 = document.getElementById("getmoneybankincome<?php echo $i; ?>").value;   /// จำนวนเงินชำระสด    
												  
												
												 if(int1 == ""){
													int1 = "0";
												 }
												 if(int2 == ""){
													int2 = "0";
												 } 
												 var n1 = parseFloat(int1);	 //// เงิน ช่องรับเข้า ธนาคาร 
												 var n2 = parseFloat(int2);	 //// เงิน คงเหลือในบัญชี   
												 
												 var sumallshow = (n1 + n2); 
												 
												/// alert(sumallshow);
												 
												 var intshow1 =  document.getElementById('getmoneybanktotal<?php echo $i; ?>');  
												 intshow1.value = numberWithCommas2(sumallshow.toFixed(0));
												     
												  
												 
												 document.getElementById("getincomemember<?php echo $i; ?>").value = ""+sumallshow;   /// บิล 
												 document.getElementById("getincomebanktwo<?php echo $i; ?>").value = ""+sumallshow;   /// บิล 
												 document.getElementById("bankdata<?php echo $i; ?>").value = ""+int1;   /// บิล 
												
												
											 }
										   
									   </script>    				  
											   				  				  
											   				  				  
										<input type="hidden" name="getincomemember<?php echo $i; ?>" id="getincomemember<?php echo $i; ?>"     value="<?php echo $objResult["income"]; ?>"    style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"     >
									 
										<script language="javascript">
										 function IsNumeric<?php echo $i; ?>()
										 { 
											var int1 = document.getElementById("idbill<?php echo $i; ?>").value;   /// บิล     
											var int2 = document.getElementById("datesave<?php echo $i; ?>").value;     //// ID วันบันทึก 

											var int3 = document.getElementById("summonetontop<?php echo $i; ?>").value; /// ยอดค้าง   
											var int4 = document.getElementById("getincomememberbackddata<?php echo $i; ?>").value;   ///  ยอดชำระเก่า  

											var int5 = document.getElementById("getincomemember<?php echo $i; ?>").value;   /// ยอดเก็บเงิน    
											var int6 = document.getElementById("discounttotalpay<?php echo $i; ?>").value;   /// ยอดทบ    
											var int7 = document.getElementById("getincomememberback<?php echo $i; ?>").value;   /// ยอดเก็บเงิน  ตั้งต้น    

											/// alert(" A " + int1); 
											if(int3 == ""){
												int3 = "0";
											}
											if(int4 == ""){
												int4 = "0";
											} 
											if(int5 == ""){
												int5 = "0";
											} 
											if(int6 == ""){
												int6 = "0";
											} 
											if(int7 == ""){
												int7 = "0";
											} 
											var n1 = parseFloat(int3);	 //// ยอดค้าง  
											var n2 = parseFloat(int4);	 //// ยอดชำระเก่า
											var n3 = parseFloat(int5);	 //// ยอดเก็บเงิน       
											var n4 = parseFloat(int6);	 //// ยอดทบ       
											var n5 = parseFloat(int7);	 //// ยอดเก็บเงิน  ตั้งต้น          

											var sumallshow = (n1 + n2) - n3; 
											 
											///   0   
											var discount = ( n4 + n5 ) -  n3;
											var discount = ( n4 + n2 ) -  n3;
											if(discount <= 0){
												discount = 0;
											}

											/// alert(" D : " + n4 + " + " + n5 + " - " + n3);
											 
											 
											var intshow1 =  document.getElementById('distoutshow<?php echo $i; ?>');  
											intshow1.innerHTML = numberWithCommas2(sumallshow.toFixed(0));
											 
											document.getElementById("distoutshowpay<?php echo $i; ?>").value  = sumallshow;
											 
											 
											 
											var intshow1 =  document.getElementById('topdata<?php echo $i; ?>'); 
											intshow1.innerHTML = numberWithCommas2(discount.toFixed(0));
											document.getElementById("ontopdata<?php echo $i; ?>").value  = discount;
											 
											 
  											// alert(" D : " + n1 + " + " + n2 + " - " + n3);
										 	//alert(" D : " + sumallshow);
			 
											var totalall = 0; 
											var totalall5 = 0; 
											var totalall6 = 0; 
											var totalall7 = 0; 
											var totalall8 = 0; 
											var totalall9 = 0; 
											var total_price = 0; 
											var int7 = document.getElementById("chktotalend_end").value;   /// majordata      
											for(loop = 1; loop <= int7; loop++){

													var int_get1 = document.getElementById("summonetontop"+loop).value;   
													var int_get2 = document.getElementById("getincomememberold"+loop).value; 
													var int_get3 = document.getElementById("getincomemember"+loop).value;  
													var int_get4 = document.getElementById("ontopdata"+loop).value;  
													var int_get5 = document.getElementById("distoutshowpay"+loop).value;  
													var int_get6 = document.getElementById("distoutshowpay"+loop).value;  
													var int_get7 = document.getElementById("getdiscount"+loop).value;  
												
												
													if(int_get1 == ""){
														int_get1 = parseFloat(0);
													} if(int_get2 == ""){
														int_get2 = parseFloat(0);
													} if(int_get3 == ""){
														int_get3 = parseFloat(0);
													} if(int_get4 == ""){
														int_get4 = parseFloat(0);
													} if(int_get5 == ""){
														int_get5 = parseFloat(0);
													}if(int_get7 == ""){
														int_get7 = parseFloat(0);
													}
															
															
															
													var n1 = parseFloat(int_get1);	 //// ยอดค้าง  
													var n2 = parseFloat(int_get2);	 //// ยอดชำระเก่า
													var n3 = parseFloat(int_get3);	 //// ยอดเก็บเงิน  
													var n4 = parseFloat(int_get4);	 //// ยอดทบ  
													var n5 = parseFloat(int_get5);	 //// ยอดทบ  
													var n6 = parseFloat(int_get7);	 //// ยอดทบ  
															
															
													/// alert(" D : " + int_get1 + " + " + int_get2 + " - " + int_get3);
													total_price =   (n1) - n3;  
													// alert(" D : " + int_get1 +" + " + int_get2 + " = " + total_price );
													totalall += parseFloat(total_price);	 //// ยอดค้าง  
													totalall5 += parseFloat(int_get3);	 //// ยอดค้าง  
													totalall6 += parseFloat(int_get2);	 //// ยอดค้าง  
													totalall7 += parseFloat(n4);	 //// ยอดทบ  
													totalall8 += parseFloat(n5);	 //// ยอดทบ  
													totalall9 += parseFloat(n6);	 //// ยอดทบ  

											}

													var intshow2 =  document.getElementById('datashow3'); 
													var intshow5 =  document.getElementById('datashow6'); 
													var intshow6 =  document.getElementById('datashow5'); 
													var intshow7 =  document.getElementById('datashow4'); 
													var intshow8 =  document.getElementById('datashow3_2'); 
													intshow2.innerHTML = numberWithCommas2(totalall5.toFixed(0));
													intshow5.innerHTML = numberWithCommas2(totalall8.toFixed(0));
													intshow6.innerHTML = numberWithCommas2(totalall6.toFixed(0));
													intshow7.innerHTML = numberWithCommas2(totalall7.toFixed(0));
													intshow8.innerHTML = numberWithCommas2(totalall9.toFixed(0));

									   		} 
										</script>
												 
												
										<!-- modal small -->
										<div class="modal fade" id="myModalgetmoney<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> 
											
											<font style="font-size: 15px;">
												ชำระ2ทาง   <?php echo $objResult["bill_no"]; ?> 
											</font>
											 
											
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body"> 
												 <div class="col-lg-12" style="margin-top: 15px;">   
												 	
												<input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult["bill_no"]; ?>" >

												<?php 
												$dataincome = 0;
												if(!empty($objResult["income"])){
													$dataincome = $objResult["income"];
												}
												$getdata = $moneybank-$discountbank+$dataincome;
											 
												?>
												<div class="col-lg-12" style="margin-top: 5px;" align="left" >   
												<font style="font-size: 15px; " > ยอดเงินฝากคงเหลือ   </font>
												<input type="text" name="getmoneybank<?php echo $i; ?>" id="getmoneybank<?php echo $i; ?>"     value="<?php echo $getdata; ?>"   class="form-control"    style="border-radius: 5px; border: 1px solid #C9C9C9; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="BankdataPayment<?php echo $i; ?>()"    autocomplete="off" readonly     > 
												</div>


												<div class="col-lg-12" style="margin-top: 5px;" align="left" >   
												<font style="font-size: 15px; " > จำนวนเงินชำระสด </font>
												<input type="text" name="getmoneybankincome<?php echo $i; ?>" id="getmoneybankincome<?php echo $i; ?>"     value=""       class="form-control"  style="border-radius: 5px; border: 1px solid #C9C9C9; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="BankdataPayment<?php echo $i; ?>()"    autocomplete="off"       > 
												</div>



												<div class="col-lg-12" style="margin-top: 5px;" align="left" >   
												<font style="font-size: 15px; " > ยอดเงินรวมทั้งหมด </font>
												<input type="text" name="getmoneybanktotal<?php echo $i; ?>" id="getmoneybanktotal<?php echo $i; ?>"     value=""     class="form-control"  style="border-radius: 5px; border: 1px solid #C9C9C9; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="BankdataPayment<?php echo $i; ?>()"    autocomplete="off" readonly     > 
												</div>



												<div class="col-lg-12" style="margin-top: 5px;" align="left" >  
												<a onClick="Canceldata<?php echo $i; ?>()" >
												<button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 10px; " >  บันทึกรายการ   </font> </button>  </a>


												<a onClick="CanceldataNo<?php echo $i; ?>()"        >
												<button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 10px; ">  ยกเลิก  </font> </button> </a>
												</div>

											 
												 </div>
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										
										</font></div></td>
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; "  > 
											
												  
										<input type="text" name="getdiscount<?php echo $i; ?>" id="getdiscount<?php echo $i; ?>"     value="<?php echo $objResult["discount"]; ?>"    style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF; margin-top: -5px;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"      >
										
										</font></div></td>
										
										
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " id="topdata<?php echo $i; ?>" > 
											
										<?php echo number_format(0+$discoount_cut1); ?>
										
										</font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " >     
										 
										<input type="text" name="getincomememberold<?php echo $i; ?>" id="getincomememberold<?php echo $i; ?>"  value="<?php echo $total_dis; ?>"     style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"    readonly    >			
										
										</font></div></td>
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " id="distoutshow<?php echo $i; ?>"  >  <?php echo number_format(0+$allmoney, '0'); ?>   
										
										
										</font>
										
										
										<input type="hidden" id="distoutshowpay<?php echo $i; ?>" value="<?php echo $allmoney; ?>"   > 
										</div></td>
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
										
										
										<font size="3px" color="Black" style=" font-size: 10px; " id="moneybank<?php echo $i; ?>"  >  
										
										<?php 
											 /*
											echo $moneybank . " <br> ";
											echo $discountbank . " <br> ";
											 */
											echo number_format(0+$moneybank-$discountbank, '0'); 
											?>  
										    
										</font>
										
										
										<input type="hidden" id="calmoneybank<?php echo $i; ?>" value="<?php echo $moneybank-$discountbank; ?>"   > 
										</div></td>
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " >  <?php echo $name_staff; ?>   </font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 10px; " >  <?php echo $objResult["date_time"]; ?>   </font></div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
										
										<a href="view_history.php?bill_no=<?php echo $objResult["bill_no"]; ?>"> 
										<font size="3px" color="Black" style=" font-size: 10px; " >   
										
										ประวัติ   
										</font>
										</a>
										
										</div></td>
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
										
										<a href="uploadslip.php?bill_no=<?php echo $objResult["bill_no"]; ?>&round=<?php echo $objResult["pk"]; ?>"> 
										<font size="3px" color="Black" style=" font-size: 10px; " >   
										
										อัพสลิป 
										  
										</font>
										</a>
										
										</div></td>
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
										 
										<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
										<font size="3px" color="Black" style=" font-size: 10px; " > 
										หมายเหตุ   
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
											หมายเหตุ : 
											<?php echo $objResult["note"]; ?> 
											
											<hr>
											
											 <a href="note_update.php?bill_no=<?php echo $objResult["bill_no"]; ?>&round=<?php echo $objResult["pk"]; ?>&backpage=savepayment_payment.php"> 
											 <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  > <font color="#FFF" size="2px" class="serif1" > อัพเดตหมายเหตุ   </font> </button> </a>

								  			 <button type="button" class="close" data-dismiss="modal" aria-label="Close"  class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
								  
								  
											</font> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small --> 
										
										</div></td>
										
										<td height="25px" style=" border-left: 0px solid #F2F2F2; "  ><div align="center"><font size="3px" color="Black" style=" font-size: 10px; "> 
										
										<?php if($objResult["status"] == "ปกติ" ){ ?>
										 <font size="2px" class="serif2" color="#006400" style=" font-size: 10px; " > ปกติ </font> 

										<?php }else if($objResult["status"] == "อนุมัติ/สัญญาโมฆะ"){  ?>
										 <font size="2px" class="serif2" color="#FF0000" style=" font-size: 10px; " > อนุมัติ/สัญญาโมฆะ </font> 
										 
										<?php }else if($objResult["status"] == "ส่งคำขอยกเลิกเอกสาร"){  ?>
										 <font size="2px" class="serif2" color="#FF8C00" style=" font-size: 10px; " > ส่งคำขอยกเลิกเอกสาร </font>  
										
										<?php } ?>
											 
										</font></div></td> 
										</tr>    
							  <?php
									$i++;	 
									$ishow++;	
									$total_price += $totalprice1;
									$total_price2 += $totalprice3;
									//// $total_price3 += $discoount;
									$total_price4 += $discoount_cut1;
											
									if(!empty($objResult["income"])){
									$total_price3 += $objResult["income"]; 	
									}
											
											
									if(!empty($total_dis)){
									$total_price5 += $total_dis; 	
									}
											
											
									if(!empty($objResult["discount"])){
									$total_price3_2 += $objResult["discount"]; 	
									}
									 
									$total_price6 += $allmoney;
								}
							  ?>
							   </tbody>
							     <thead> 
							   <tr>
									<th width="3%" colspan="10" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    &nbsp;    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow1"    >   
									<?php echo number_format(0+$total_price); ?>
									</font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;      border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow2"    >   
										<?php echo number_format(0+$total_price2); ?>
									</font></div></th> 
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;      border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow3"    >  
										<?php echo number_format(0+$total_price3); ?> </font></div></th>   
										
										  
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;      border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow3_2"    >  
										<?php echo number_format(0+$total_price3_2); ?> </font></div></th> 
										
										
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;     border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow4"    >    
										<?php echo number_format(0+$total_price4); ?>     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF;     border-bottom-color: #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow5"    >    
										<?php echo number_format(0+$total_price5); ?>     </font></div></th>        
												 
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;   border-top-right-radius: 10px;  border-bottom-color: #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 10px; " id="datashow6"    >    
										<?php echo number_format(0+$total_price6); ?>   </font></div></th>  
							   </tr>
							   <tr>
								<th width="6%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    รูปแบบชำระ    </font></div></th>     
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    เงื่อนไขการชำระ  </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    ธนาคาร  </font></div></th>  
								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    ลำดับ  </font></div></th> 

								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    ชื่อลูกค้า  </font></div></th> 
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    Facebook URL  </font></div></th>
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    รหัสลูกค้า  </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">    เบอร์โทร  </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  การติดต่อ     </font></div></th> 
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  งวดชำระที่   </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดหนี้ตามสัญญา     </font></div></th>   
								<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดชำระ     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดชำระจริง     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดส่วนลด     </font></div></th>  
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดทบ     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ค่าปรับสะสม     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดคงเหลือ     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; border-top-color: #FFF;   "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ยอดเงินฝากคงเหลือ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  พนักงาน     </font></div></th> 
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  เวลา     </font></div></th>  
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  ประวัติ     </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  อัพสลิป     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  หมายเหตุ     </font></div></th> 

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 10px; ">  สถานะ   </font></div></th>  
							 </tr>
							 </thead>  
							  
							</table>  
							</div>
						  </div>
                    
                     
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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
<?php
include('footer2.php');
?>