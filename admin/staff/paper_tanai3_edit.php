<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 
	 
 
	$tanaidata = "";
	if(empty($_GET["tanaidata"])){
		
	}else{
		$tanaidata = $_GET["tanaidata"];
	}  

$status = "";
	if(empty($_GET["type"])){
		$searchname = date('d/m')."/".(date('Y')+543);
		if(empty($_GET["searchname"])){

			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);  
			$daystart_load = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname = $_GET["searchname"];



			$cut = explode("/",$searchname);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);  

			$daystart_load = date("d-m-Y", strtotime($date_income)); 
		}


		$searchname2 = date('d/m')."/".(date('Y')+543);
		if(empty($_GET["searchname2"])){

			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);  
			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
			
		}else{
			$searchname2 = $_GET["searchname2"];



			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);  

			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		}
	}else{ 
		$searchname2 = date('m');
		if(empty($_GET["searchname2"])){

		}else{
			$searchname2 = $_GET["searchname2"];
		}

		$searchname = date('Y');
		if(empty($_GET["searchname"])){

		}else{
			$searchname = $_GET["searchname"];
		}
	}
	
	
 
 	$major = "";
	$type = "";
	if(empty($_GET["type"])){

	}else{
		$type = $_GET["type"];
	}
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  

?> 
        

			<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        											
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
                     	  
			<link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

			<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

			 	
					 	
		 	 <script type="text/javascript">
					$(function(){
						var dateBefore=null;
					$(".current").datepicker({ 
							dateFormat: 'dd/mm/yy', 
							dayNamesMin: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'], 
							monthNamesShort: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
							changeMonth: true,
							yearRange: "-10:+10",
							changeYear: true ,
							beforeShow:function(){
								if($(this).val()!=""){
									var arrayDate=$(this).val().split("/");		
									arrayDate[2]=parseInt(arrayDate[2])-543;
									$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+(arrayDate[2]));
									 
								}
								setTimeout(function(){
									$.each($(".ui-datepicker-year option"),function(j,k){
										var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
										$(".ui-datepicker-year option").eq(j).text(textYear);
									});				
								},50);

							},
							onChangeMonthYear: function(){
								setTimeout(function(){
									$.each($(".ui-datepicker-year option"),function(j,k){
										var textYear=parseInt($(".ui-datepicker-year option").eq(j).val())+543;
										$(".ui-datepicker-year option").eq(j).text(textYear);
									});				
								},50);		
							},
							onClose:function(){
								 
									var arrayDate=$(this).val().split("/");		
									arrayDate[2]=parseInt(arrayDate[2])+543;
									$(this).val(arrayDate[0]+"/"+arrayDate[1]+"/"+arrayDate[2]);
								 		
							} 

						});


					});
				</script>
								
													
                     	  
                     	  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ออกใบเส็รจระค่าบริการ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ออกใบเส็รจระค่าบริการ   </font>   
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
                     <font size="4px" color="#000000">  ออกใบเส็รจระค่าบริการ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                         	<?php
							$colorbtns1s = " background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; margin-top: 15px; ";
							$colorbtns2s = " background-color: #5DC9C1; border-radius: 5px;  height: 40px; border-color: #FBFBFB; margin-top: 15px; ";

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF"; 

							?>	 

                          <div class="col-lg-12"  align="left"  > 
 
							<a href="paper_tanai3.php?tanaidata=<?php echo $tanaidata; ?>">
								 
							<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> "> 
							<font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > 
							 ออกบิลใบเสร็จ    
							</font>       
							</button>  
							</a>  

				  		
				  		
							<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>">
								 
							<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> "> 
							<font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  > 
							 แก้ไขใบเสร็จ    
							</font>       
							</button>  
							</a>  
					  		</div>
                          
                          <div class="col-lg-12"  align="left"  > 
                         <hr>
					  		</div>
                           
					 
                      	<form action="paper_tanai3_edit.php" method="get" >
                  		    
                    	 <div   class="col-lg-5"  align="left"   > 
							<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> โปรดเลือกทนาย </font>

								   <select class="form-control myselect" id="tanaidata" name="tanaidata" required style=" width: 100%;" onchange='this.form.submit()'     > 
									<?php if(empty($tanaidata)){ ?>
									<option value=""> โปรดเลือกทนาย </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM member_all where pk = '".$tanaidata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM member_all where pk != '".$tanaidata."' and status = 'T'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{    
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td>   

							</tr>
						</table>  
						 </div>
                         
						</form>
                           
                          <div class="col-lg-12"  align="left"  > 
                         <hr>
					  		</div>
                           
                           
                            
                           
                           
                              <?php if(empty($_GET["type"])){ ?>
                           
                            <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
					    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					        </table>
					   
					        </div>
                        
                        	  
					        <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                          
                  		    <form action="paper_tanai3_edit.php" method="get" >
                  		    <input type="hidden" id="tanaidata" name="tanaidata" value="<?php echo $tanaidata; ?>" >
                  		    <input type="hidden" id="page" name="page" value="" >
                  		    
                  		    
							<div   class="col-lg-3"  align="left"  > 
							<table width="100%">
								<tr>  
									<td width="1%">&nbsp;   </td>  
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  วันที่    </font>

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
                          
                           <?php }else if($_GET["type"] == "month"){ ?>
                           
                             
                            <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
					    	<table width="100%" border="0" style="  ">
					    	<tr> 
					    		<td width="30%" align="center"      >      
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบเดือน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF"  >  
					    		<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
					    		<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
					    		<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr> 
					        </table>
					   
					        </div>
                        
                        	 
                          
					        <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                         
                          
                  		     <form action="paper_tanai3_edit.php" method="get" >
                  		     <input type="hidden" id="tanaidata" name="tanaidata" value="<?php echo $tanaidata; ?>" >
                  		     <input type="hidden" id="page" name="page" value="" >
                  		     <input type="hidden" id="type" name="type" value="month" >
                  		       
							   <div   class="col-lg-5"  align="left"  > 
								<table width="100%">
								<tr> 
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  เดือน    </font>

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
									
									<select   name="searchname" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "   > 
									<?php 
											$sql = "SELECT * FROM month where statusdata = '".$searchname."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM month where statusdata != '".$searchname."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>  
									</select> 

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
									<select  name="searchname2" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
										<?php 
											$sql = "SELECT * FROM year where year = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM year where year != '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
									</select>
										
										
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
                         
                         
                          
                           <?php }else if($_GET["type"] == "year"){ ?>
                             
                              <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 
                           
								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="paper_tanai3_edit.php?tanaidata=<?php echo $tanaidata; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #013B2D; border: 1px solid #013B2D; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr>
								</table>

								</div>
                        
                        	   
                            
					          <div class=" col-lg-12 "  align="left" >  <hr>   </div>
                         
                          
                  		      <form action="paper_tanai3_edit.php" method="get" >
                  		      <input type="hidden" id="tanaidata" name="tanaidata" value="<?php echo $tanaidata; ?>" >
                  		      <input type="hidden" id="page" name="page" value="" > 
                  		      <input type="hidden" id="type" name="type" value="year" >
                  		       
                  		       
							    <div   class="col-lg-3"  align="left"  > 
								<table width="100%">
								<tr>   
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  วันที่สิ้นสุด    </font>

									<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; "> 
									<select  name="searchname2" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "     > 
										<?php 
											$sql = "SELECT * FROM year where year = '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>    
										<?php 
											$sql = "SELECT * FROM year where year != '".$searchname2."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
										?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
										<?php  
											}
										?>   
									</select>
										
										
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
                          
                           <?php } ?> 
                           
                            
                           
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

								$month = "";
								if(empty($_GET["month"])){
									$month = date('m');
								}else{
									$month = $_GET["month"];
								} 
								$year = "";
								if(empty($_GET["year"])){
									$year = date('Y'); 
								}else{
									$year = $_GET["year"];
								}  



							if(empty($_GET["type"])){

							$contactstart = date("Y-m-d", strtotime($daystart_load));  
							$checkend = date("Y-m-d", strtotime($daystart_load2));

							}else if($_GET["type"] == "month"){
								 $year = $searchname2;
								 $datadate  = "01-".$searchname."-".$year;				   
								 $datadate2  = "31-".$searchname."-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2));  

								 $daystart_load2 = $checkend;

							}else if($_GET["type"] == "year"){
								 $year = $searchname2;
								 $datadate  = "01-01-".$year;				   
								 $datadate2  = "31-12-".$year;				   
								 $contactstart = date("Y-m-d", strtotime($datadate));  
								 $checkend = date("Y-m-d", strtotime($datadate2)); 


								 $daystart_load2 = $checkend;
							} 


							$addcode = "  and  a.tanai_pasy_date BETWEEN '".$contactstart."' AND '".$checkend."'  ";  

							$addcode2 = " and  a.tanai_payment = 'ชำระแล้ว'  ";  	 

							$addcode = "";
							if(empty($_GET["customer"])){

							}else{
								$addcode = " and  a.tanai_pasy_nill like '%".$bill_no."%'   ";
							}


							$sql2 = "  SELECT a.*, b.name FROM list_order a 
							Inner Join customer b On a.customer = b.pk
							where a.tanai_pasy_bill != '' and a.tanaidata = '".$tanaidata."'    
							".$addcode.$addcode2." 
							Group By a.tanai_pasy_bill
							order by a.pk asc    "; 


							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								  <ul class="pagination">
							<?php if ($page > 1): ?>
							<li class="prev"><a href="paper_tanai3_edit.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>">Prev</a></li>
							<?php endif; ?>

							<?php if ($page > 3): ?>
							<li class="start"><a href="paper_tanai3_edit.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>">1</a></li>
							<li class="dots">...</li>
							<?php endif; ?>

							<?php if ($page-2 > 0): ?><li class="page"><a href="paper_tanai3_edit.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
							<?php if ($page-1 > 0): ?><li class="page"><a href="paper_tanai3_edit.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

							<li class="currentpage"><a href="paper_tanai3_edit.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo $page ?></a></li>

							<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paper_tanai3_edit.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
							<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paper_tanai3_edit.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)-2): ?>
							<li class="dots">...</li>
							<li class="end"><a href="paper_tanai3_edit.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
							<?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)): ?>
							<li class="next"><a href="paper_tanai3_edit.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&tanaidata=<?php echo $tanaidata; ?>&customer=<?php echo $customer; ?>&customer=<?php echo $customer; ?>&tanaidata=<?php echo $tanaidata; ?>">Next</a></li>
							<?php endif; ?>
								</ul>
							<?php endif; ?>

							</div>




							  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    > 
										 
										 
							<tbody>
							<?php 
							$bg = "#F8FAFD"; 
								
							 
										
										
							if (empty($_GET['page2'])) { 
								$i = 1;
							}else if (($_GET['page2'] == 1)) { 
								$i = 1;
							}else{ 
								$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
							}


							$bg = "#E8E8E8";
							$total_price = 0; 
							$total_price2 = 0; 
							$total_price3 = 0; 
							$total_price4 = 0; 
							$total_price5 = 0; 
							$total_price6 = 0; 
													 
							$sql = "  SELECT a.*, b.name FROM list_order a 
							Inner Join customer b On a.customer = b.pk
							where a.tanai_pasy_bill != '' and a.tanaidata = '".$tanaidata."'    
							".$addcode.$addcode2." 
							Group By a.tanai_pasy_bill
							order by a.pk asc    limit {$start} , {$perpage}  "; 

							/// echo $sql;
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_cutomer = " - ";
								$name_cutomer2 = " - "; 
								$name_cutomer = $objResult["name"];       
								$tanai_pasy_date = $objResult["tanai_pasy_date"];       
 
								if($bg == "#FFF"){ 
									 $bg = "#F2F2F2";

								}else{  
									$bg = "#FFF"; 
								}  
 
								$name_staff = " - ";
								$name_staff2 = " - "; 
								$sql2 = "SELECT * FROM member_all Where  pk = '". $objResult["tanaidata"]."'   ";   
								$query2 = mysqli_query($objCon,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{  
									$name_staff = $objResult2["name"];   
								}
								$sql2 = "SELECT * FROM member_all Where  pk = '". $objResult["tanai_pasy_by"]."'   ";   
								$query2 = mysqli_query($objCon,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{  
									$name_staff2 = $objResult2["name"];   
								}
 
								$discoountpaymentother = 0; 
								$priceother = 0;  
   
								$sql2 = "SELECT * FROM list_order Where  tanai_pasy_bill = '". $objResult["tanai_pasy_bill"]."'   ";   
								$query2 = mysqli_query($objCon,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{   
									$priceothershow = " ................ ";
									if(!empty($objResult2["priceother"])){
										$priceother += $objResult2["priceother"]; 
									}
								}
 
									    
									 
							?>
							<tr id="hddata<?php echo $i; ?>"  style="background-color: <?php echo $bg ?>; "> 
									 
							  
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="<?php echo $txt; ?>" style=" font-size: 13px; " > <?php echo $objResult["tanai_pasy_bill"]; ?> </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="<?php echo $txt; ?>" style=" font-size: 13px; " > <?php echo DateThai($tanai_pasy_date)." ".DateThai($tanai_pasy_date); ?> </font></div></td>  
								 
								  
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> <?php echo number_format(0+$priceother); ?>  </font></div></td> 
							
							 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> 
							<a href="print_paper_tanai3.php?pasy_bill=<?php echo $objResult["tanai_pasy_bill"];?>&page=1"   style="   cursor: pointer; text-decoration: none;" target="_blank"  >
							<font size="3px" color="red" style=" font-size: 13px; " > 
								
								<font size="3px" color="#000" style="  font-size: 13px;  " > &nbsp;  ดูใบเสร็จ &nbsp;  </font>
								
							</font></a>  </font></div></td> 
							  
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> <?php echo $name_staff; ?>  </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif"> <?php echo $name_staff2; ?>  </font></div></td> 
							 
							
								  	  	   	 
 
							</tr>  
							<?php 
								
								$i++; 
							}
								
							?>
							</tbody>
  
							
					   <thead> 
						  	 

							<tr>
							<th width="4%" bgcolor="#000" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  "  ><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">   เลขที่บิลชำระ    </font></div></th>     
							<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">   วันเดือนปี  </font></div></th>   
							<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">   ยอดเงิน     </font></div></th>        
							<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">  ดูใบเสร็จ     </font></div></th>     
							<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">  ชื่อทนาย     </font></div></th>        
							<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif" color="#FFF" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>       
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