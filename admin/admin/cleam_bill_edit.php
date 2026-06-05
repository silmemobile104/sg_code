<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $searchname = "";


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}


	$searchname2 = "1"; 
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}	



	$type = "";
	if(empty($_GET["type"])){
		
	}else{
		$type = $_GET["type"];
	}	
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  แก้ไขบิลใบเสร็จ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > แก้ไขบิลใบเสร็จ  </font>   
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
                     <font size="4px" color="#000000">  แก้ไขบิลใบเสร็จ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
                            
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="cleam_bill.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  จัดการข้อมูลชำระค่าซ่อม   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="cleam_bill_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">    แก้ไขบิลใบเสร็จชำระค่าซ่อม   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					       </table>
					      </div>
                      
                      
							<div class="col-lg-12">
								<hr>
							  </div>
                      	     
                   
                   	      	<script>
							$( document ).ready(function() {   
								/// myFunction1();    
							});
							  
							
						  	function myFunction1() 
							{
							  var searchname2 = document.getElementById("searchname2").value; 
							  	
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_store_cleam.php?major="+searchname2,
									success: function(result) {
									$('#searchname').html(result);
									}
								});			
							 }
					
							</script>
                   	      
							<form action="cleam_bill_edit.php" method="get" >
                    	      <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr>  
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สาขา   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    onchange="myFunction1()"      >  
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
											</select> 
										  <span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;
										
										</td>
										
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ร้านซ่อม <?php echo $searchname; ?>   </font>
  
										  
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
										  <select class="form-control" id="searchname" name="searchname"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    >  
										   <?php if(empty($searchname)){ ?>
										  	<option value="">  ร้านค้า    </option> 
										   <?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM store where major = '".$searchname2."' and pk = '".$searchname."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM store where major = '".$searchname2."'  and pk != '".$searchname."'  order by pk asc  "; 
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

										</td>  
										<td width="1%">&nbsp;
										 
										</td>      
									</tr>
								</table>  
								</div>
                     
                    	      <div   class="col-lg-8"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาเลขที่บิลใบเสร็จ    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname3" name="searchname3" value="<?php echo $searchname3; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;
										
										</td>  
										<td width="40%">
										<a href="cleam_bill_edit.php"> 
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
									$addcode2 = "";
									$addcode3 = "";
									$addcode4 = "";
									if(empty($_GET["searchname3"])){

									}else{
										$addcode3 = " and  bill_no like '%".$searchname3."%' ";
									}  
									if(empty($_GET["searchname2"])){

									}else{
										$addcode = " and  major = '".$searchname2."' ";
									}  
									if(empty($_GET["searchname"])){

									}else{
										$addcode2 = " and  major2 = '".$searchname."' ";
									}  
													 
													 
									if(empty($_GET["type"])){

									}else{
										
										if(($_GET["type"] == "รอชำระเงิน")){
											$addcode4 = " and ( npl_status = '".$type."' or npl_status = '' ) ";
											
										}else if(($_GET["type"] == "ชำระเงินแล้ว")){
											$addcode4 = " and npl_status = '".$type."'  ";
											
										}
										 
									} 

								$sql2 = " SELECT *  FROM list_chk_cleam 
								where  bill_no != ''   
								".$addcode.$addcode2.$addcode3.$addcode4."
								Group By bill_no
								order by pk asc    "; 

								/// echo $sql2;
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									<ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="cleam_bill_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="cleam_bill_edit.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="cleam_bill_edit.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="cleam_bill_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="cleam_bill_edit.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_bill_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_bill_edit.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="cleam_bill_edit.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="cleam_bill_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=<?php echo $type; ?>">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>
							  </div>
                              
                              
                              
                              <div   class="col-lg-6"  align="right"  > 
								<a href="cleam_bill_edit.php?searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=รอชำระเงิน"> 
								 <button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px;  height: 40px; border-color: #FF8C00; margin-top: 20px; " > <font color="#FFF" size="2px" class="serif1" >    รอชำระเงิน   </font> </button> 
								</a> 

								<a href="cleam_bill_edit.php?searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&type=ชำระเงินแล้ว"> 
								 <button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px;  height: 40px; border-color: #006400; margin-top: 20px; "   > <font color="#FFF" size="2px" class="serif1" >    ชำระเงินแล้ว   </font> </button> 
								</a> 
								</div>
                              
                               
                    		   <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
								<div class="table-responsive"  >
								<table id="key_product"  class=" table    tablemobile  " border="0"   >
							     
									<tbody> 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
 
									   
										$sql2 = "  SELECT *  FROM list_chk_cleam 
										where  bill_no != ''   
										".$addcode.$addcode2.$addcode3.$addcode4."
										Group By bill_no
										order by pk asc  limit {$start} , {$perpage}   ";   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{
											if($bg == "#FFF"){ 
												$bg = "#F8FAFD"; 
											}else{  
												$bg = "#FFF"; 
											}
											  
										 
										
										$create_date = $objResult2["create_date"];
										$create_date2 = $objResult2["create_date2"];
										$create_time = $objResult2["create_time"];
										$create_by = $objResult2["create_by"];
										$pkselect = $objResult2["pkselect"];
										$bill_no = $objResult2["bill_no"]; 	
										
										$data1 = "";
										$data2 = "";
										$data3 = "";
										$data4 = "";
										$data5 = 0;
										$totalprice = 0;
										$total = 0;
										$sql_c = "SELECT * FROM mobile_restore where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
										 
										$query_c = mysqli_query($objCon,$sql_c); 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$data1 =  $objResult_c["bill_no"];
											$data2 =  $objResult_c["datesave2"];
											$data3 =  $objResult_c["customer"];
											$data4 =  $objResult_c["telphone"];
											$data5 =  $objResult_c["price1"];  
										}
											 
											
											$totalprice = 0;
											$sql_c = " SELECT a.*,  b.name   FROM mobile_restore  a 
											Inner Join store_cleam b On   a.sendata = b.pk 
											Inner Join list_chk_cleam d On   a.pk = d.pkselect
											 
											where d.bill_no = '".$bill_no."'  
											order by a.pk asc    "; 
											$query_c = mysqli_query($objCon,$sql_c);
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$totalprice +=  $objResult_c["price1"];
												$total++;
											}
											
											$name_create = "-"; 
											$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
												$name_create =  $objResult["name"];
											}
											   
											   
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($create_date)." ".datethai2($create_date);?>  </font></div></td> 
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total);?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalprice);?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $create_time; ?>  </font></div></td> 
										  
									  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >    
										
										<a href="cleam_bill_editdata.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										แก้ไข   
										</font>  
										</a> 
										 
										</font></div></td> 
									  
									 
									    <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >
										
										<a href="print_cleam_bill.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > 
										พิมพ์เอกสาร   
										</font>  
										</a> 
										 
										</font></div></td>
										
													
										 
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
												url: "save_cancel_bill_cleam_bill_edit.php?bill_no="+typedata+"&status="+check_status,
												success: function(result) {

												}
											}); 
										}   
									</script>
										
										
										
									</tr>  
									<?php $i++;  $totalprice1+=$totalprice;  } ?>
									</tbody>
  
									<thead> 
									<tr>
									<th width="2%" colspan="3" bgcolor="#FFF" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; border-bottom: 1px solid #FFF; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 1px solid #FFF;  border-right: 1px solid #FFF; border-top: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$totalprice1); ?>  </font></div></th>  
									</tr>
									
									<tr>
									<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิลใบเสร็จ    </font></div></th>    
									<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันทีทำเอกสาร  </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   จำนวนบิล     </font></div></th> 
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน   </font></div></th>    
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำเอกสาร     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลาอัพเดทล่าสุด     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข     </font></div></th>   
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์     </font></div></th>   
									     
									<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>  
									</tr>
							</thead>
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