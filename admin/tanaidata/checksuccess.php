<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 
	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}  
	 
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	 
?> 
        
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        											
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  คดีสถานะทีดำเนินการเสร็จสิ้นแล้ว   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > คดีสถานะทีดำเนินการเสร็จสิ้นแล้ว   </font>   
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
                     <font size="4px" color="#000000">  คดีสถานะทีดำเนินการเสร็จสิ้นแล้ว   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                        
                      	<form action="checksuccess.php" method="get" >
                  		    
                    	 <div   class="col-lg-6"  align="left"   > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </font>

								   <select class="form-control myselect" id="bill_no" name="bill_no" required style=" width: 100%;" onchange='this.form.submit()'     > 
									<?php if(empty($bill_no)){ ?>
									<option value=""> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										
										
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM list_order where bill_no != '".$bill_no."' and tanaidata = '".$_SESSION["UserID"]."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td> 
								<td width="1%"> </td>      
								<td width="40%">&nbsp;   </td>   

							</tr>
						</table>  
						 </div>
                     
                     
                    	<div   class="col-lg-6"  align="right"  > 
						<div style=" margin-top: 5px; "></div>
						
						<?php
						$txt1 = "#FF7403";
						$txt2 = "#0B9444";
						$txt3 = "#DA0706";
						$txt4 = "#7239E9";
						$txt5 = "#000";
							
						$btn1 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #FF7403;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn2 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #0B9444;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn3 = "  background-color: #FFF; border-radius: 5px;   height: 40px;  border: 1px solid  #DA0706;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							
						$btn4 = "  background-color: #FFF; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #7239E9;  margin-top: 15px;  box-shadow: none;   border-radius: 8px;";	
							 
							
							
						if($searchtype == "รอดำเนินคดี"){
						$txt1 = "#FFF";
						$btn1 = "  background-color: #FF7403; border-radius: 5px;   height: 40px;  border: 1px solid  #FF7403;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						} 
						if($searchtype == "อยู่ในระหว่างไกล่เกลี่ย"){
						$txt2 = "#FFF";
						$btn2 = "  background-color: #0B9444; border-radius: 5px;   height: 40px;  border: 1px solid  #0B9444;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						}
						if($searchtype == "อยู่ในระหว่างฟ้องร้อง"){
						$txt3 = "#FFF";
						$btn3 = "  background-color: #FA7123; border-radius: 5px;   height: 40px;  border: 1px solid  #DA0706;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						}
						if($searchtype == "คดีเสร็จสิ้นแล้ว"){
						$txt4 = "#FFF";
						$btn4 = "  background-color: #7239E9; border-radius: 5px; width: 140px;  height: 40px;  border: 1px solid  #7239E9;  margin-top: 15px;  box-shadow: none;  border-radius: 8px; ";	 
						} 
							
						?>
						
						  <a href="checksuccess.php?searchtype=รอดำเนินคดี">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?> "> <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >  รอดำเนินคดี  </font> </button> 

						  </a>
						  <a href="checksuccess.php?searchtype=อยู่ในระหว่างไกล่เกลี่ย">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn2; ?> "> <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >  อยู่ในระหว่างไกล่เกลี่ย  </font> </button> 

						  </a>
						  <a href="checksuccess.php?searchtype=อยู่ในระหว่างฟ้องร้อง">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn3; ?> "> <font color="<?php echo $txt3; ?>" size="2px" class="serif1" >  อยู่ในระหว่างฟ้องร้อง  </font> </button> 

						  </a>
						  <a href="checksuccess.php?searchtype=คดีเสร็จสิ้นแล้ว">

						  <button type="button" class="btn btn-primary" style=" <?php echo $btn4; ?> "> <font color="<?php echo $txt4; ?>" size="2px" class="serif1" >  คดีเสร็จสิ้นแล้ว  </font> </button> 

						  </a> 
						
						
						</div>
						
						</form>
                           
                           
                           
                           
                           
                           
                           
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
					if(empty($_GET["searchname"])){

					}else{
						$addcode = " and ( b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'  )  ";
					}
					$addcode2 = "";  


					if($searchtype == ""){
						$addcode2 = "  ";  	 
					} 
					if($searchtype == "รอดำเนินคดี"){
						$addcode2 = " and  (a.tanai_status1 = 'รอดำเนินคดี' or a.tanai_status1 = '')  ";  	 
					}
					if($searchtype == "อยู่ในระหว่างไกล่เกลี่ย"){
						$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างไกล่เกลี่ย' ";  	  
					}
					if($searchtype == "อยู่ในระหว่างฟ้องร้อง"){
						$addcode2 = "  and a.tanai_status1 = 'อยู่ในระหว่างฟ้องร้อง'  ";  	  
					}
					if($searchtype == "คดีเสร็จสิ้นแล้ว"){
						$addcode2 = "  and a.tanai_status1 = 'คดีเสร็จสิ้นแล้ว'  ";  	  
					}
					$addcode = "";
					if(empty($_GET["bill_no"])){

					}else{
						$addcode = " and  a.bill_no like '%".$bill_no."%'   ";
					}

					$sql2 = " SELECT a.*, b.name FROM list_order a 
					Inner Join customer b On a.customer = b.pk
					where a.bill_no != '' and a.tanaidata = '".$_SESSION["UserID"]."'  
					".$addcode.$addcode2."  
					order by a.pk asc    "; 

					/////echo $sql2;
					$query2 = mysqli_query($objCon, $sql2);
					$total_record = mysqli_num_rows($query2);
					$total_page = ceil($total_record / $perpage);
					 ?>  
					<?php if (ceil($total_record / $perpage) > 0): ?>
						 <ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="checksuccess.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="checksuccess.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="checksuccess.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="checksuccess.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="checksuccess.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checksuccess.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checksuccess.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="checksuccess.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="checksuccess.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">Next</a></li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>

					</div>    
                           
                           
                           
				   <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					<div class="table-responsive"  >
					<table id="key_product"  class=" tables    tablemobile  " border="0" style=" width: 1400px;  "    >
					 <thead> 
					 <tr>
						<th width="4%" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่สัญญา    </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รหัสลูกค้า  </font></div></th>       
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า     </font></div></th>      
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดค้าง     </font></div></th>     
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ส่วนลด     </font></div></th>       
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รับจริง    </font></div></th>       
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบดำเนินคดี     </font></div></th>    
						<th width="5%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;   "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะคดี     </font></div></th>     
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ทนายรับเคส   </font></div></th>   
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าดำเนินคดี   </font></div></th>
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะชำระ   </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล   </font></div></th>     
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

						if (empty($_GET['page2'])) { 
							$i = 1;
						}else if (($_GET['page2'] == 1)) { 
							$i = 1;
						}else{

							$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
						}

						$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '".$_SESSION["UserID"]."'  
						".$addcode.$addcode2."  
						order by a.pk asc  limit {$start} , {$perpage}   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

						if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
						}else{  
							$bg = "#FFF"; 
						} 

						$bill_no = $objResult2["bill_no"]; 
						$codecustomer = $objResult2["codecustomer"]; 
						$create_date = $objResult2["create_date"]; 
						$create_time = $objResult2["create_time"]; 
						$name_major = "-"; 
						$name_create = ""; 	

						$sql_c = " SELECT * FROM member_all  where pk = '".$objResult2["tanaidata"]."'   order by pk asc     ";   
						$query_c = mysqli_query($con,$sql_c); 
						while($objResult_c = mysqli_fetch_array($query_c))
						{       
							$name_create = $objResult_c["name"];
						}  
 
							$bill_no = $objResult2["bill_no"]; 
							$room = $objResult2["room"]; 
							$menu_id = $objResult2["menu_id"]; 
							$money = $objResult2["money"]; 
							$daytotal = $objResult2["daytotal"]; 
							$dayprice = $objResult2["dayprice"];  
							$daytotal2 = $objResult2["daytotal2"];  
							$startdate = $objResult2["startdate"];  
							$endate = $objResult2["endate"];  
							$total = $objResult2["total"];  
							$codecustomer = $objResult2["codecustomer"];  
							$moneydown = $objResult2["moneydown"];  
							$moneydata = $objResult2["moneydata"];  
							$pasy = $objResult2["pasy"];  
							$cod = $objResult2["cod"];  
							$moneycontact = $objResult2["moneycontact"];  
							$percent = $objResult2["percent"];  
							$computer = $objResult2["computer"];  
							$computer2 = $objResult2["computer2"];  
							$priceorder = $objResult2["priceorder"];  
							$major = $objResult2["major"];  
							$customer = $objResult2["customer"];  
							$endold = $objResult2["endold"];  
							$dateold = $objResult2["dateold"];  
							$bank2 = $objResult2["bank"];  
							$pasycal = $objResult2["pasycal"];  
							$qrdata = $objResult2["qrdata"]; 
							$allday = $objResult2["allday"]; 
							$appleid = $objResult2["appleid"]; 
							$password = $objResult2["password"]; 
							$contactstatus = $objResult2["contactstatus"]; 


							$discoount = 0;
							$discoountpaymentother = 0;
							$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
							$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql_m = "SELECT * FROM history_payment Where  
							bill_no = '". $bill_no ."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_m = mysqli_query($objCon,$sql_m); 
							while($objResult_m = mysqli_fetch_array($query_m))
							{  
								if(!empty($objResult_m["income"])){
								$discoount += $objResult_m["income"]; 

								}
								if(!empty($objResult_m["paymentother"])){
								$discoountpaymentother += $objResult_m["paymentother"]; 
								}  
							}	

							$allmoney = ($dayprice*$daytotal)-$discoount;
							

							$chk_total = $objResult2["totalno_payment"];
							$tanai_status1 = $objResult2["tanai_status1"];
							$tanai_status2 = $objResult2["tanai_status2"];
							$tanai_status3 = $objResult2["tanai_status3"];
							$tanai_payment = $objResult2["tanai_payment"];
							
							$tanai_momey1 = $objResult2["tanai_momey1"];
							$tanai_momey2 = $objResult2["tanai_momey2"];

							$priceother = 0;
							$priceothershow = " ................ ";
							if(!empty($objResult2["priceother"])){
								$priceother = $objResult2["priceother"];
								$priceothershow = $objResult2["priceother"];
							}

							
							
							if($tanai_payment == "รอชำระ"){ 
									$txtshow = " รอชำระ ";
									$hdd =  " "; 
									$bgbtn = " #FF7403  "; 
							}else if($tanai_payment == "ชำระแล้ว"){
									$txtshow = " ชำระแล้ว ";
									$hdd = "  "; 
									$bgbtn = " #0B9444  "; 
							}else{
									$txtshow = " รอชำระ ";
									$hdd = "    "; 
									$bgbtn = " #DA0706  ";  
							}
					?>
					<tr style="background-color: <?php echo $bg ?>; "> 

					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $bill_no; ?> </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $codecustomer; ?> </font></div></td> 
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $objResult2["name"]; ?> </font></div></td> 
					
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$allmoney); ?> </font></div></td> 
					 
					  
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 <input type="hidden" id="idbill<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>"   > 
					 
					 <input type="text" name="getmoney1<?php echo $i; ?>" id="getmoney1<?php echo $i; ?>"  value="<?php echo $tanai_momey1; ?>"     style=" font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off" readonly       >
					 
					 </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" >   
					 
					 <font id="showprice<?php echo $i; ?>" > <?php echo $tanai_momey2; ?> </font>
					 
					 
					 <input type="text" name="getmoney2<?php echo $i; ?>" id="getmoney2<?php echo $i; ?>"  value="<?php echo $tanai_momey2; ?>"     style=" display: none; font-size: 13px; text-align: center;  width: 100%; border: 1px solid #E8E8E8; border-radius: 5px;   background-color: #FFF;  margin-top: -5px; "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="IsNumeric<?php echo $i; ?>()"    autocomplete="off"  readonly      >
					 
					 
					 <input type="hidden" id="totalold<?php echo $i; ?>" value="<?php echo $allmoney; ?> ">
					 
					 	<script language="javascript">
						 function IsNumeric<?php echo $i; ?>()
						 { 
							var int1 = document.getElementById("idbill<?php echo $i; ?>").value;   /// บิล     
							var int2 = document.getElementById("getmoney1<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var int3 = document.getElementById("getmoney2<?php echo $i; ?>").value;     //// ID วันบันทึก 
							var totalold = document.getElementById("totalold<?php echo $i; ?>").value;     //// ID วันบันทึก 
							 
							 
							var Acal = 0;
							var Bcal = 0;
							if(int2 == ""){
								
							}else{
								Acal = parseFloat(int2);
							}
							if(totalold == ""){
								
							}else{
								Bcal = parseFloat(totalold);
							}
							 
							var Totaldata = Bcal - Acal; 
							document.getElementById("showprice<?php echo $i; ?>").innerHTML  = Totaldata;
										
							///// alert( "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key );
							var jsonString = ""; 
							$.ajax({
							type: "POST",
							url: "save_payment_tanai2.php?bill_no="+int1+"&getmoney1="+int2+"&getmoney2="+Totaldata,
							contentType: 'application/json',
							data: jsonString,
							success: function(result) {
							//alert(result);
							}
							});
										 
							 
							 
						 }
						 </script>
					 </font></div></td> 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status1; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $tanai_status2; ?> </font></div></td> 
					 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $name_create; ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$priceother); ?> </font></div></td> 
					 
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="<?php echo $bgbtn; ?>" style=" font-size: 13px; "  class="serif"> 
						
							
								<div align="center"   >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: 5px;     "     id="btnsave<?php echo $objResult2["pk"];?>" data-toggle="modal" data-target="#myEodal1<?php echo $objResult2["pk"];?>" data-id=""  >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdatathree<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
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
									<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
									<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  
 

									<font size="3px" style=" font-size: 16px; " color="#000">  

									<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
									<input type="hidden" id="checkpass<?php echo $objResult2["pk"]; ?>" value="1" >

									<script> 
									function 
									Canceldatabill<?php echo $objResult2["pk"]; ?>( ) { 
										 
										var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value; 
										var checkpass = document.getElementById("checkpass<?php echo $objResult2["pk"]; ?>").value; 
										var statusbill = document.getElementById("statusbill<?php echo $objResult2["pk"]; ?>").value;
										var passportadmin = "";

										 
											////documen 
											check_status_save = ""+statusbill;  
											//// alert(" A " + check_status_save);
										 
											if(check_status_save == "ชำระแล้ว"){
										
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#0B9444"; 
												
											}else if(check_status_save == "รอชำระ"){
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#FF7403";
												 
												
											} else {
											document.getElementById("txtshowdatathree<?php echo $objResult2["pk"]; ?>").innerHTML = " รอชำระ "; 
											document.getElementById("btnsave<?php echo $objResult2["pk"]; ?>").style.background = "#FF7403";
												 
												
											} 
 
										
										
										
										///// alert( "save_cancel_bill_contact.php?status="+check_status_save+"&bill_no="+save_key );
										var jsonString = ""; 
										$.ajax({
										type: "POST",
										url: "save_payment_tanai.php?status="+check_status_save+"&bill_no="+save_key,
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
									  
									 
										<div class="col-md-12" style="  "  > 
										 
 
											 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> <b>  สถานะชำระ    </b>  </font> 
											 
											 <select class="form-control  " id="statusbill<?php echo $objResult2["pk"]; ?>" name="statusbill<?php echo $objResult2["pk"]; ?>" required style=" width: 100%; color: #000; border: 1px solid #CACACA; height: 40px;  border-radius: 10px; background-color: #FFF; box-shadow: none;"   >  

												<?php 
												$sql = "SELECT * FROM dropppaymnet where name = '".$tanai_payment."'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  

												?>
												<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
												<?php  
												}
												?>   
												<?php 
												$sql = "SELECT * FROM dropppaymnet where name != '".$tanai_payment."'  order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{   

												?>
												<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
												<?php  
												}
												?>    
												</select>  
										  
										</div>  
										
										<div class="col-lg-12" style="  "  >   
										  <div class="form-group">     
 
										  <button type="button" class="btn btn-primary" style="background-color: #0199A7; border-radius: 5px; width: 100%; height: 40px; border-color: #0199A7; margin-top: 15px; "  onClick='Canceldatabill<?php echo $objResult2["pk"]; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 
 

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
						
					</font></div></td> 
					
					 
					  
					   
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif">

					 <a href="viewdatacontact.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"  > 
						<button type="button" class="btn btn-sm" style="background-color: #0199A7; border-radius: 5px;  border-color: #0199A7; margin-top: 5px; "  > <font color="#FFF" size="2px" class="serif1" style="  font-size: 13px; " >    คลิก   </font> </button>   
					 </a>

					 </font></div></td>  
						
							
					</tr>  
					<?php $i++; } ?>
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
					  <bR><bR>   
					 </div>
 
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>