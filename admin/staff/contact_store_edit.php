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


		$searchname3 = "";
	if(empty($_GET["searchname3"])){  
		$searchname3 = "";
	}else{
		$searchname3 = $_GET["searchname3"];
		
		
		
		$cut = explode("/",$searchname3);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}


		$searchname4 = "";
	if(empty($_GET["searchname4"])){
		$searchname4 = ""; 
	}else{
		$searchname4 = $_GET["searchname4"];



		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 =  date("Y-m-d", strtotime($date_income));  
	}





	$type = "";
	if(empty($_GET["type"])){
		
	}else{
		$type = $_GET["type"];
	}
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกรายการขาย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกรายการขาย    </font>   
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
                     <font size="4px" color="#000000">  บันทึกรายการขาย   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                       
                          <div class=" col-lg-4 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="contact_store.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกรายการขาย    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="contact_store_edit.php">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                          <div class="col-lg-12">
                      	    <hr>
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
                         
						    
							<form action="contact_store_edit.php" method="get" >
                    	     <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  เริ่มวันที่    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off" readonly  >
										  
										<span class="input-group-append" style=" display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td> 
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  สิ้นสุด    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname4" name="searchname4" value="<?php echo $searchname4; ?>"       autocomplete="off" readonly >
										  
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
                    
                    	     <div   class="col-lg-12"  align="left"  > </div>
                    
                    
                    		<div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr>  
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  ค้นหาจากเลบที่บิลใบเสร็จ    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>  
										<td width="1%">&nbsp;
										 
										</td>  
										<td width="30%">
										<a href="contact_store_edit.php"> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a> 
										</td>  
									</tr>
								</table>  
							</div>
							</form> 
                     
                    
                             <div class="col-md-6" style="margin-top: 15px;" > 
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
										$addcode = " and  bill_no like '%".$searchname."%' ";
									}
									$addcode2 = ""; 
									if(empty($_GET["searchname2"])){

									}else{
										$addcode2 = " and major = '".$searchname2."'  ";
									} 
									$addcode3 = ""; 
									if(empty($_GET["searchname3"])){

										$addcode3 = "  ";
									}else{
										$addcode3 = "  and  create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."' ";
									} 
											
									if(empty($_GET["type"])){

									}else{
										
										if(($_GET["type"] == "รอชำระเงิน")){
											$addcode4 = " and ( npl_status = '".$type."' or npl_status = '' ) ";
											
										}else if(($_GET["type"] == "ชำระเงินแล้ว")){
											$addcode4 = " and npl_status = '".$type."'  ";
											
										}
										 
									} 		 
										$sql2 = " SELECT * FROM list_order_store 
										where bill_no != ''   
										".$addcode.$addcode2.$addcode3.$addcode4."  
										order by  pk asc    "; 
										$query2 = mysqli_query($objCon, $sql2);
										$total_record = mysqli_num_rows($query2);
										$total_page = ceil($total_record / $perpage);
										 ?>  
										<?php if (ceil($total_record / $perpage) > 0): ?>
										 <ul class="pagination">
											<?php if ($page > 1): ?>
											<li class="prev"><a href="contact_store_edit.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">Prev</a></li>
											<?php endif; ?>

											<?php if ($page > 3): ?>
											<li class="start"><a href="contact_store_edit.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">1</a></li>
											<li class="dots">...</li>
											<?php endif; ?>

											<?php if ($page-2 > 0): ?><li class="page"><a href="contact_store_edit.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
											<?php if ($page-1 > 0): ?><li class="page"><a href="contact_store_edit.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

											<li class="currentpage"><a href="contact_store_edit.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page ?></a></li>

											<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_store_edit.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
											<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="contact_store_edit.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

											<?php if ($page < ceil($total_record / $perpage)-2): ?>
											<li class="dots">...</li>
											<li class="end"><a href="contact_store_edit.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
											<?php endif; ?>

											<?php if ($page < ceil($total_record / $perpage)): ?>
											<li class="next"><a href="contact_store_edit.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">Next</a></li>
											<?php endif; ?>
										</ul>
									<?php endif; ?>

								</div>
                          
                          
                          
                                <div   class="col-lg-6"  align="right"  > 
								<a href="contact_store_edit.php?searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=รอชำระเงิน"> 
								 <button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px;  height: 40px; border-color: #FF8C00; margin-top: 20px; " > <font color="#FFF" size="2px" class="serif1" >    รอชำระเงิน   </font> </button> 
								</a> 

								<a href="contact_store_edit.php?searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=ชำระเงินแล้ว"> 
								 <button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px;  height: 40px; border-color: #006400; margin-top: 20px; "   > <font color="#FFF" size="2px" class="serif1" >    ชำระเงินแล้ว   </font> </button> 
								</a> 
								</div>
                   
                   
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1900px; "     >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขบิลใบเสร็จ    </font></div></th>    
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วัน เดือน ปี  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายละเอียด     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี   </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงือนไขการชำระ     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี     </font></div></th> 
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์     </font></div></th>   
								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประวัติ     </font></div></th>    

								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา     </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะชำระเงิน   </font></div></th>  
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


							$sql2 = "  SELECT * FROM list_order_store  where bill_no != ''  ".$addcode.$addcode2.$addcode3.$addcode4."   order by  pk asc limit {$start} , {$perpage} "; 
											 
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
								if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									}

									$totalprice1 = $objResult2["money"];  

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

									$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_major =  $objResult_c["name"];
									}	 
							?>
							<tr style="background-color: <?php echo $bg ?>; "> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

							<a href="contact_store_edit_cleam.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก    </font>

							</a>

							</font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["pasy"]; ?>  </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["payment"]; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>  </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["pasycal"]); ?>  </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  

							<a href="printbill_store.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " >
							พิมพ์   
							</font>  
							</a> 

							</font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

							<a href="contact_store_edit_cleam.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " > คลิก    </font>

							</a>

							</font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?> </font></div></td> 



							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px;   " > 
							<font size="3px" color="#F77369" style=" font-size: 13px; " > 
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

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["create_time"]; ?> </font></div></td> 


						
						
							<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
							<div align="center"><font size="3px" color="Black" style=" font-size: 13px; ">   
							<?php  
							$hdst = " background-color: #FF8C00; ";
							if($objResult2["npl_status"] == "รอชำระเงิน"){
								$hdst = " background-color: #FF8C00; ";
							}else if($objResult2["npl_status"] == "ชำระเงินแล้ว"){
								$hdst = " background-color: #006400;  ";
							}  	
							?>

							<select class="form-control " style="  color: white; font-size: 12px; margin-top: -5px; <?php echo $hdst; ?> " id="stauts_back<?php echo $objResult2["pk"]; ?>" name="stauts_back<?php echo $objResult2["pk"]; ?>" onChange="showUserstauts_back<?php echo $objResult2["pk"]; ?>(this.value)"  > 

							<?php if($objResult2["npl_status"] == ""){ ?>
							<option value="รอชำระเงิน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอชำระเงิน </font></option> 

							<option value="ชำระเงินแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระเงินแล้ว </font></option> 

							<?php }else if($objResult2["npl_status"] == "รอชำระเงิน"){ ?>
							<option value="รอชำระเงิน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอชำระเงิน </font></option> 

							<option value="ชำระเงินแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระเงินแล้ว </font></option> 


							<?php }else if($objResult2["npl_status"] == "ชำระเงินแล้ว"){ ?> 
							<option value="ชำระเงินแล้ว//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ชำระเงินแล้ว </font></option> 

							<option value="รอชำระเงิน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอชำระเงิน </font></option> 


							<?php } ?> 

							</select>   
							</font></div></td>

							 <input type="hidden" id="savebill_no<?php echo $i; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >	

							 <script>
								function  showUserstauts_back<?php echo $objResult2["pk"]; ?>(str) {

									var cut_data = str.split("//"); 
									var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

									var check_status = cut_data[0];
									var check_status_save = "";

									var typedata = document.getElementById("savebill_no<?php echo $i; ?>").value;  

									if(check_status == "ชำระเงินแล้ว"){
										document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#006400";

									}else{
										document.getElementById("stauts_back<?php echo $objResult2["pk"]; ?>").style.background = "#FF8C00";

									}
									///alert("save_cancel_bill_back4.php?bill_no="+typedata+"&status="+check_status);
									$.ajax({
										type: "GET",
										url: "save_cancel_bill_contact_store_edit.php?bill_no="+typedata+"&status="+check_status,
										success: function(result) {

										}
									}); 
								}   
							</script>
						
						 
						
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