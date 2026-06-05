<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";

	$searchname = date('d/m')."/".(date('Y'));
	$cut = explode("/",$searchname);
	$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	$daystart_load = date("d-m-Y", strtotime($date_income)); 
	 


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

	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}


	if(isset($_GET["all"])){
	if( ($_GET["all"]) == "1" ){
		
		$sql_cc = "SELECT * FROM list_order where w_status_save = 'รอตรวจสอบ' and  (w_typedata = 'ยกเลิกสัญญา'  or  w_typedata = 'คืนเครื่อง') 
		 and major = '".$searchname2."' 
		order by pk asc  "; 
		$query_cc = mysqli_query($objCon,$sql_cc);
		while($objResult_cc = mysqli_fetch_array($query_cc))
		{ 
			
			$bill_no = $objResult_cc["bill_no"];
			$status = "เครมสินค้า/รอสินค้า"; 
		   
						  
			$menu_id = "";
			$check_status = "";
			$sql2 = "SELECT * FROM list_order where bill_no = '".$objResult_cc["bill_no"]."'  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				 $menu_id = $objResult2["menu_id"];  
				 $check_status = $objResult2["w_status_save"];  
			} 
			
			if($check_status == "รอตรวจสอบ"){
				 
			$total = 0; 
			if($status == "เครมสินค้า/รอสินค้า"){
				$total = 0;
			}
			if($status == "พร้อมจำหน่าย"){
				$total = 1;
			} 
 
		
			$strSQL = "Update product Set          
			 total = '".$total."',  
			 status = '".$status."' " ;
			$strSQL .=" WHERE pk = '". $menu_id  ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 

			$strSQL = " Update list_order Set               
						w_status_save = '".$status."',
						w_date = '".date('d-m-Y')."' ,
						w_date2 = '".date('Y-m-d')."' ,
						w_time = '".date('H:i')."'   " ;
			$strSQL .=" WHERE  bill_no = '".$objResult_cc["bill_no"]."' "; 

			$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			

			}
		}
		
		echo("<script>window.location = 'product_check_stock.php?searchname2=".$searchname2."';</script>");
	}
	
	if( ($_GET["all"]) == "2" ){
	
		
		$sql_cc = "SELECT * FROM list_order where w_status_save = 'รอตรวจสอบ' and  (w_typedata = 'ยกเลิกสัญญา'  or  w_typedata = 'คืนเครื่อง') 
		 and major = '".$searchname2."' 
		order by pk asc  "; 
		$query_cc = mysqli_query($objCon,$sql_cc);
		while($objResult_cc = mysqli_fetch_array($query_cc))
		{ 
			
			$bill_no = $objResult_cc["bill_no"];
			$status = "พร้อมจำหน่าย"; 
		   
						  
			$menu_id = "";
			$check_status = "";
			$sql2 = "SELECT * FROM list_order where bill_no = '".$objResult_cc["bill_no"]."'  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				 $menu_id = $objResult2["menu_id"];  
				 $check_status = $objResult2["w_status_save"];  
			} 
			
			if($check_status == "รอตรวจสอบ"){
				 
			$total = 0; 
			if($status == "เครมสินค้า/รอสินค้า"){
				$total = 0;
			}
			if($status == "พร้อมจำหน่าย"){
				$total = 1;
			} 
 
		
			$strSQL = "Update product Set          
			 total = '".$total."',  
			 status = '".$status."' " ;
			$strSQL .=" WHERE pk = '". $menu_id  ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 

			$strSQL = " Update list_order Set               
						w_status_save = '".$status."',
						w_date = '".date('d-m-Y')."' ,
						w_date2 = '".date('Y-m-d')."' ,
						w_time = '".date('H:i')."'   " ;
			$strSQL .=" WHERE  bill_no = '".$objResult_cc["bill_no"]."' "; 

			$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			

			}
		}
		
		echo("<script>window.location = 'product_check_stock.php?searchname2=".$searchname2."';</script>");
	}
	
	}
							 

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบรายการสินค้า   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ตรวจสอบรายการสินค้า  </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบรายการสินค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                    	    <div   class="col-lg-4"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>

										<form action="product_check_stock.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										  <?php if(empty($searchname2)){ ?>
										  	<option value="">  สาขา    </option> 
										  <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM major where pk = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>    
											</select> 
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
                   
                    
                    
                           <div class="col-md-12"> &nbsp; </div>
                           
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
							$addcode = " and   a.major = '".$searchname2."'   ";
							
							$addcode2 = "";  
							$addcode3 = "";   

							$sql2 = "SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''    
							and a.w_status_save = 'รอตรวจสอบ' 
							and  (a.w_typedata = 'ยกเลิกสัญญา'  or  a.w_typedata = 'คืนเครื่อง') 
							".$addcode.$addcode2.$addcode3."  
							order by a.pk asc    "; 
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								 <ul class="pagination">
																<?php if ($page > 1): ?>
																<li class="prev"><a href="product_check_stock.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">Prev</a></li>
																<?php endif; ?>

																<?php if ($page > 3): ?>
																<li class="start"><a href="product_check_stock.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">1</a></li>
																<li class="dots">...</li>
																<?php endif; ?>

																<?php if ($page-2 > 0): ?><li class="page"><a href="product_check_stock.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																<?php if ($page-1 > 0): ?><li class="page"><a href="product_check_stock.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																<li class="currentpage"><a href="product_check_stock.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page ?></a></li>

																<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="product_check_stock.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="product_check_stock.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																<?php if ($page < ceil($total_record / $perpage)-2): ?>
																<li class="dots">...</li>
																<li class="end"><a href="product_check_stock.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																<?php endif; ?>

																<?php if ($page < ceil($total_record / $perpage)): ?>
																<li class="next"><a href="product_check_stock.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&typedata=<?php echo $typedata; ?>">Next</a></li>
																<?php endif; ?>
															</ul>
							<?php endif; ?>

						</div>
                          
                          
                            <div class="col-md-6" align="right" style=" display: none; "> 
							    
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  "    data-toggle="modal" data-target="#smallmodal"  >  
							<font color="#FFF" size="2px" class="serif1" >  เปลี่ยนสถานะส่งเครมทั้งหมด </font> 
							</button> 
							</a>
							  
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  "    data-toggle="modal" data-target="#smallmodal2" > 
							<font color="#FFF" size="2px" class="serif1" > เปลี่ยนสถานะพร้อมจำหน่ายทั้งหมด  </font> 
							</button>  

								
                         
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

                            		<a href="product_check_stock.php?all=1&searchname2=<?php echo $searchname2; ?>"    > 
									<button type="button" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									</a>


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 
 
								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->
					
                          
						    <!-- modal small -->
							<div class="modal fade" id="smallmodal2" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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

									<a href="product_check_stock.php?all=2&searchname2=<?php echo $searchname2; ?>"    > 
									<button type="button" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									</a>


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 
 
								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->
                           
                           </div>
                           
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1900px;"    >
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
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สาขา     </font></div></th>   
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภท     </font></div></th>   
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเลขเครื่อง     </font></div></th>  
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาตั้งขาย     </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เงินดาวน์     </font></div></th>     
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สินค้า     </font></div></th>     
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ     </font></div></th> 
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รูปแบบเงือนไข     </font></div></th>    
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>  
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
								where a.bill_no != ''  
								and a.w_status_save = 'รอตรวจสอบ' 
								and  (a.w_typedata = 'ยกเลิกสัญญา'  or  a.w_typedata = 'คืนเครื่อง') 
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
								
									$note = $objResult2["note"];   

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
									$name_create5 = "-"; 
									$name_major = "-"; 
									$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										$name_create4 = $objResult["name"];
										$name_create5 = $objResult["codeno"];
										
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
							<tr style="background-color: <?php echo $bg ?>; " id="hdd<?php echo $objResult2["pk"]; ?>"   > 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["codecustomer"]; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $objResult2["name"]; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_major; ?>   </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create3; ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create5; ?>   </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  number_format(0+$objResult2["moneydata"]); ?>    </font></div></td>
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo  number_format(0+$objResult2["moneydown"]); ?>      </font></div></td> 
							 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create4; ?>    </font></div></td>
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >    
							<a data-toggle="modal" data-target="#Cannote<?php echo $objResult2["pk"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer;" ><font size="3px" color="red" style=" font-size: 13px; " >
							หมายเหตุ   
							</font>  
							</a> 
										
										
							<!-- modal small -->
							<div class="modal fade" id="Cannote<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> หมายเหตุ </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<div class="col-lg-12" align="left"   >   
								<font size="3px" color="black" style="font-size: 14px;">   
											 
											 
								  <div class="col-md-12"  >	
									<div class="form-group">
									   <font color = '#000' size="3px" > หมายเหตุ </font>   
									  <input type="text" class="form-control" id="note<?php echo $objResult2["pk"]; ?>" name="note<?php echo $objResult2["pk"]; ?>"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $note; ?>"   >
									</div>
								  </div>
										
									<div class="col-lg-12" style="margin-top: 15px;">   


										 <a onClick="Savenote<?php echo $objResult2["pk"]; ?>()" >
										 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 120px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > บันทึกรายการ   </font> </button>  </a>


										 <a onClick="CanSavenote<?php echo $objResult2["pk"]; ?>()"        >
										 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 120px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก/ปิด  </font> </button> </a>

									 </div>
									 
									 		
								</font> 
								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 
										
							<script> 
							function  Savenote<?php echo $objResult2["pk"]; ?>( ) { 
								var save_key = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;
								var savebill_no = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								 
								var jsonString = "";   
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore_note.php?note="+save_key+"&bill_no="+savebill_no,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#Cannote<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								 
								
							}
								
							function  CanSavenote<?php echo $objResult2["pk"]; ?>( ) { 
								
								$(document).ready(function(){ 
								$('#Cannote<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
							}
								
									 
							</script>
							
							</font></div></td>
							
							
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create; ?>    </font></div></td>


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  
							
							<?php echo  $objResult2["w_typedata"]; ?>     
							
							</font></div></td> 

						
						
							<td height="25px" style=" border-left: 0px solid #F2F2F2; "  >
							<div align="center"><font size="3px" color="Black" style=" font-size: 13px; "> 
						 

							<select class="form-control " style="background-color: #FF8C00; color: white; font-size: 12px; " id="status_payment<?php echo $objResult2["pk"]; ?>" name="status_payment<?php echo $objResult2["pk"]; ?>" onChange="showUser<?php echo $objResult2["pk"]; ?>(this.value)"  > 
								<option value="รอตรวจสอบ//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอตรวจสอบ </font></option> 
								<option value="เครมสินค้า/รอสินค้า//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> เครมสินค้า/รอสินค้า </font></option> 
								<option value="พร้อมจำหน่าย//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> พร้อมจำหน่าย </font></option>     
								<option value="ส่งคืนต้นทาง//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> ส่งคืนต้นทาง </font></option>     
							</select>  
							
						
							<font size="2px" id="showtxtcancel<?php echo $objResult2["pk"]; ?>" class="serif2" color="#FF0000" style="display: none; "> <?php echo $objResult2["w_status_save"]; ?> </font>
						
						
							<input type="hidden" id="savebill_no<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >
										    
							
							<script>
							function  showUser<?php echo $objResult2["pk"]; ?>(str) {

								var cut_data = str.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								var check_status = cut_data[0];
								var check_status_save = "";
								if(check_status=="รอตรวจสอบ"){ 
									document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
									document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#FF8C00";

									check_status_save = "รอตรวจสอบ";

								}else if(check_status=="เครมสินค้า/รอสินค้า"){ 
 
									var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
									var typesavedata = check_status;  

									$.ajax({
										type: "GET",
										url: "check_contact_dropdown4.php?bill_no="+typedata,
										success: function(result) {
										$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
										}
									});			


									 $(document).ready(function(){ 
										$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
									 });   

								}else if(check_status=="พร้อมจำหน่าย"){ 
									
 
									var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
									var typesavedata = check_status;  

									$.ajax({
										type: "GET",
										url: "check_contact_dropdown4.php?bill_no="+typedata,
										success: function(result) {
										$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
										}
									});			


									 $(document).ready(function(){ 
										$('#myModalthree<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
									 });   
									
								}else if(check_status=="ส่งคืนต้นทาง"){ 
									
 
									var typedata = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;  
									var typesavedata = check_status;  

									$.ajax({
										type: "GET",
										url: "check_contact_dropdown4.php?bill_no="+typedata,
										success: function(result) {
										$('#status_payment<?php echo $objResult2["pk"]; ?>').html(result);
										}
									});			


									 $(document).ready(function(){ 
										$('#myModalfoul<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
									 });   
									
									
								}  
							}  
						
							function  Canceldata<?php echo $objResult2["pk"]; ?>( ) { 
								var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								var dropdown = document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").value;
								
								var cut_data = dropdown.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

								check_status_save = "เครมสินค้า/รอสินค้า";  

								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none"; 


								/// alert("save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key);
								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore_price1.php?status="+check_status_save+"&bill_no="+save_key,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
								document.getElementById("hdd<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
								
							}
								 
							function  CanceldataNo<?php echo $objResult2["pk"]; ?>( ) { 
								
								var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								var dropdown = document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").value;
								
								var cut_data = dropdown.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

								check_status_save = "เครมสินค้า/รอสินค้า";  

								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none"; 


								/// alert("save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key);
								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore_price2.php?status="+check_status_save+"&bill_no="+save_key,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#myModaltwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
								document.getElementById("hdd<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
								 
								
								
							}
								 
							function  Canceldata2<?php echo $objResult2["pk"]; ?>( ) { 
								var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								var dropdown = document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").value;
								
								var cut_data = dropdown.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

								check_status_save = "พร้อมจำหน่าย";  

								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none"; 


								/// alert("save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key);
								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore_price3.php?status="+check_status_save+"&bill_no="+save_key,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#myModalthree<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
								document.getElementById("hdd<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
								
							}
								
							function  CanceldataNo2<?php echo $objResult2["pk"]; ?>( ) { 
								
								var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								var dropdown = document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").value;
								
								var cut_data = dropdown.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

								check_status_save = "พร้อมจำหน่าย";  

								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none"; 


								/// alert("save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key);
								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore_price4.php?status="+check_status_save+"&bill_no="+save_key,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#myModalthree<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
								document.getElementById("hdd<?php echo $objResult2["pk"]; ?>").style.display = "none";  
								
								
							}
								
								
								
							function  Canceldata3<?php echo $objResult2["pk"]; ?>( ) { 
								var save_key = document.getElementById("savebill_no<?php echo $objResult2["pk"]; ?>").value;
								var dropdown = document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").value;
								
								var cut_data = dropdown.split("//"); 
								var jsonString = "{\"status\":"+cut_data[0]+",\"bill_no\":"+cut_data[1]+"}"; 

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.color = "White"; 
								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.backgroundColor = "#006400"; 

								check_status_save = "ส่งคืนต้นทาง";  

								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.display = "block";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").style.color = "#006400";
								document.getElementById("showtxtcancel<?php echo $objResult2["pk"]; ?>").innerHTML = ""+check_status_save;

								document.getElementById("status_payment<?php echo $objResult2["pk"]; ?>").style.display = "none"; 


								/// alert("save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key);
								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "save_cancel_bill_back_tostore.php?status="+check_status_save+"&bill_no="+save_key,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);
								}
								});
 
								$(document).ready(function(){ 
								$('#myModalfoul<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
								document.getElementById("hdd<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
								
							}
								
							function  CanceldataNo3<?php echo $objResult2["pk"]; ?>( ) { 
								
								$(document).ready(function(){ 
								$('#myModalfoul<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
								});   
								
								
							}
								
								
							</script>
							 
							<!-- modal small -->
							<div class="modal fade" id="myModaltwo<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> 

								<font style="font-size: 15px;">
									กรุณายืนยันการ ทำรายการ <?php echo $objResult2["bill_no"]; ?> 
								</font>


								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									 <div class="col-lg-12" align="left">  

									 <font style="font-size: 14px; " color="#FF0000">

										คุณต้องการคำนวนต้นทุน ใหม่ หรือ ไม่

									 </font>

									 </div> 
									 <div class="col-lg-12" style="margin-top: 15px;">   


										 <a onClick="Canceldata<?php echo $objResult2["pk"]; ?>()" >
										 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 120px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > คำนวนต้นทุนใหม่   </font> </button>  </a>


										 <a onClick="CanceldataNo<?php echo $objResult2["pk"]; ?>()"        >
										 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 120px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่คำนวนต้นทุนใหม่  </font> </button> </a>

									 </div>
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 
						
						
						
							 
							<!-- modal small -->
							<div class="modal fade" id="myModalthree<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> 

								<font style="font-size: 15px;">
									กรุณายืนยันการ ทำรายการ <?php echo $objResult2["bill_no"]; ?> 
								</font>


								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									 <div class="col-lg-12" align="left">  

									 <font style="font-size: 14px; " color="#FF0000">

										คุณต้องการคำนวนต้นทุน ใหม่ หรือ ไม่

									 </font>

									 </div> 
									 <div class="col-lg-12" style="margin-top: 15px;">   


										 <a onClick="Canceldata2<?php echo $objResult2["pk"]; ?>()" >
										 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 120px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > คำนวนต้นทุนใหม่   </font> </button>  </a>


										 <a onClick="CanceldataNo2<?php echo $objResult2["pk"]; ?>()"        >
										 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 120px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ไม่คำนวนต้นทุนใหม่  </font> </button> </a>

									 </div>
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 
						
						
							<!-- modal small -->
							<div class="modal fade" id="myModalfoul<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> 

								<font style="font-size: 15px;">
									กรุณายืนยันการ ทำรายการ <?php echo $objResult2["bill_no"]; ?> 
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
										การกดยืนยันแล้วจะไม่สามารถแก้ไข รายการนี้ได้อีก 

									 </font>

									 </div> 
									 <div class="col-lg-12" style="margin-top: 15px;">   


										 <a onClick="Canceldata3<?php echo $objResult2["pk"]; ?>()" >
										 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 120px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันทำรายการ   </font> </button>  </a>


										 <a onClick="CanceldataNo3<?php echo $objResult2["pk"]; ?>()"        >
										 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 120px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "     > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก/ปิด  </font> </button> </a>

									 </div>
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 
						
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