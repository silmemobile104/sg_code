<?php 
session_start();
$_SESSION["load"] = "24";
include('header.php');
 
	
			 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$chk5 = "";
	$chk6 = "";
	$chk7 = "";
	$chk8 = "";
	$chk9 = "";
	$chk10 = "";
	$chk11 = "";
	$chk12 = "";
	$chk13 = "";
	$chk14 = "";
	$chk15 = "";
	$chk16 = "";
	$chk17 = "";
	$chk18 = "";
	$chk19 = "";
	$chk20 = "";
	$chk21 = "";
	$chk22 = "";
	$chk23 = "";
	$chk24 = "";
	$chk25 = "";
	$chk26 = "";
	$chk27 = "";
	$postion = "";

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

?>  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                 <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  กำหนดสิทธิ์การเข้าถึงระบบ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > กำหนดสิทธิ์การเข้าถึงระบบ > เพิ่มข้อมูล   </font>   
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
                     <font size="4px" color="#000000">  จัดการข้อมูลลูกค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
                       		 
						   <div class=" col-lg-4 "  align="left" >
							<table width="100%" border="1" style="border: 1px solid #F77369;  ">
								<tr> 
									<td width="50%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
									<a href="staff.php"> 
									<div style="margin-top: 5px; margin-bottom: 5px; " >   
									<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#000" style="font-size: 14px; ">  เพิ่มข้อมูล   </font>  
									</div>
									</a>
									</td>
									<td width="50%" align="center" bgcolor="#F77369"   >  
									<a href="staff_edit.php">   
									<div  >   
									<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
									&nbsp;
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขข้อมูลพนักงาน   </font>  
									</div>
									</a>
									</td>
								</tr>
							</table>
						   </div>
                      
							<div class="col-lg-12">
							<hr>
							</div>
                      
                       
                     	     <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ    </font>

										<form action="staff_edit.php" method="get" >
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  สถานะของระบบ    </font>

										 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										    <select class="form-control myselect" id="searchname2" name="searchname2" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "      > 

											<?php if(empty($searchname2)){ ?>
											<option value="">  สถานะของระบบ   </option> 
											<?php } ?>

											<?php 
											$sql = "SELECT * FROM drop_type_staff a 
											where pk = '".$searchname2."'  
											order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{  

											?>
											<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM drop_type_staff a 
											where pk != '".$searchname2."'  
											order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{   

											?>
											<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
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
												$perpage = 20;
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

												}else{
													$addcode = " and  name like '%".$searchname."%'   ";
												} 
												if(empty($_GET["searchname2"])){

												}else{
													$addcode2 = " and  poition = '".$searchname2."'   ";
												} 
													 
											$sql2 = " SELECT * FROM member_all 
											where name != '' 
											and (status = 'ST' or status = 'P' or status = 'T')
											".$addcode.$addcode2."  
											order by pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="staff_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="staff_edit.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="staff_edit.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="staff_edit.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="staff_edit.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="staff_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="staff_edit.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="staff_edit.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="staff_edit.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                   
                   
                    
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
							 <tr>
								<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลำดับ    </font></div></th>    
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อ-นามสกุล  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เบอร์โทรติดต่อ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สถานะของระบบ     </font></div></th> 
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล   </font></div></th>      
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข   </font></div></th>  
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

							$sql2 = " SELECT * FROM member_all 
								where name != ''  
								and (status = 'ST' or status = 'P' or status = 'T')
								".$addcode.$addcode2."  
								order by pk asc    limit {$start} , {$perpage}   ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									} 
								
								
								$poition = $objResult2["poition"];
								$name_p = " - ";
								$sql = "SELECT * FROM drop_type_staff where pk = '".$poition."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_p = $objResult["name"]; 
								}

							?>
								<tr style="background-color: <?php echo $bg ?>; "> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["telphone"]; ?>   </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_p; ?>   </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

 

								<?php if($objResult2["status"] == "ST"){ ?>
								
									
									<a href="staff_editdata.php?CusID=<?php echo $objResult2["pk"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ดูข้อมูล </font></a>
								
								<?php }else if($objResult2["status"] == "T"){ ?>
								
									
									<a href="staff_editdata3.php?CusID=<?php echo $objResult2["pk"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ดูข้อมูล </font></a>
								
								<?php }else{  ?>
								
									
									<a href="staff_editdata2.php?CusID=<?php echo $objResult2["pk"];?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " ><font size="3px" color="red" style=" font-size: 13px; " > ดูข้อมูล </font></a>
								<?php } ?> 
								

								</font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
 
								<?php if($objResult2["status"] == "ST"){ ?>
								
									<a href="staff_editdata.php?CusID=<?php echo $objResult2["pk"];?>&postion=<?php echo $objResult2["poition"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>
								
								<?php }else if($objResult2["status"] == "T"){ ?>
								
									<a href="staff_editdata3.php?CusID=<?php echo $objResult2["pk"];?>&postion=<?php echo $objResult2["poition"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>
								
								<?php }else{  ?>
								
									<a href="staff_editdata2.php?CusID=<?php echo $objResult2["pk"];?>&postion=<?php echo $objResult2["poition"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  ><font size="3px" color="red" style=" font-size: 13px; " > แก้ไข </font></a>
								<?php } ?> 
 
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
        

<?php
include('footer.php');
?>