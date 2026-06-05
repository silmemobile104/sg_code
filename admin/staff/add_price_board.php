<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 
	$status = "";
	if(empty($_GET["type"])){
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
                     <font size="4px" color="#000000">  รายงานยอดเงินรวมทุกสาขา   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > รายงานยอดเงินรวมทุกสาขา  </font>   
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
                     <font size="4px" color="#000000">  รายงานยอดเงินรวมทุกสาขา   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ 
					
					
							$addcode = "";
							$addcode2 = "";
							 
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
									
							
							$addcode2 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode = "  and  datesave2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$addcode3 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							 
					
					
								$price1 = 0;
								$price2 = 0;
								$price3 = 0;
								$price4 = 0;
								$price5 = 0;
								$price6 = 0;
								$price7 = 0;
								$price8 = 0;
								$price9 = 0;
								$price10 = 0;
								$sql = "SELECT * FROM price_setting Where  money != ''   ".$addcode2." ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$price1 += $objResult["money"];

								}
	
								$sql = "SELECT * FROM money_customer_bank  Where  money != ''   ".$addcode2." ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$price2 += $objResult["money"];

								}
	
								$sql = "SELECT * FROM history_payment   Where   income != ''   ".$addcode2."   ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["income"])){
										if(($objResult["typesave"] == "ชำระหักเงินฝาก")){
											$price4 += $objResult["income"];
										}else{ 
											$price3 += $objResult["income"];
										}
									} 
								}




								$sql = " SELECT *  FROM list_chk_computer  where  bill_no != ''   ".$addcode2."  Group By bill_no order by pk asc     ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{    
									$sql_c = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
									Inner Join customer b On   a.customer = b.pk
									Inner Join product c On   a.menu_id = c.pk
									Inner Join list_chk_computer d On   a.pk = d.pkselect 
									where d.bill_no = '".$objResult["bill_no"]."'  
									order by a.pk asc    "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$price5 +=  $objResult_c["computer2"];
									} 
								}


								$sql = "SELECT * FROM list_order_store   Where  money != ''  ".$addcode2."  ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["money"])){ 
										$price6 += $objResult["money"]; 
									} 
								}

								$sql = "SELECT * FROM mobile_restore   Where   price2 != ''   ".$addcode."   ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["price2"])){ 
										$price7 += $objResult["price2"]; 
									} 
								}

								$sql = "SELECT * FROM otherdata   Where   price != ''   ".$addcode3."  ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["price"])){ 
										$price8 += $objResult["price"]; 
									} 
								}

								 
					
						?>
  
                 		     
                 		   
                       <div class=" col-lg-6 "  align="left" >
					    <table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >
					    		<a href="add_price.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -2px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  เพิ่มทุน    </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
								<a href="add_price_board.php?page=">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -2px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  รายงานยอดเงินรวมทุกสาขา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
								<a href="add_price_table.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -2px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ภาพรวมการเงินของธุระกิจ   </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                       <div class="col-lg-12"> <hr> </div>  
                		       
                		         
                 	   <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="center" >
					   <font color="#FFFFFF" size="3px" class="serif2"  >
					   <div style="margin-top: 6px;" > 
						 <font size="4px" color="#000000">  รายงานยอดเงินรวมทุกสาขา  </font>   
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
               		  
               		  
               		  
                		  <?php if(empty($_GET["type"])){ ?>

								<div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 

								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #F77369; border: 1px solid #F77369; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr>
								</table>

								</div>

								<div class=" col-lg-12 "  align="left" style=" margin-top: 10px; " >    </div>


								<form action="add_price_board.php" method="get" >
								<input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
								<input type="hidden" id="page" name="page" value="" >


								<div   class="col-lg-4"  align="left"  > 
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

							   <?php }else if($_GET["type"] == "month"){ ?>


							   <div class=" col-lg-4 "  align="left" style=" margin-top: 10px; " > 

								<table width="100%" border="0" style="  ">
								<tr> 
									<td width="30%" align="center"      >      
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #F77369; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr> 
								</table>

								</div>

								<div class=" col-lg-12 "  align="left" style=" margin-top: 10px; " >    </div>


								 <form action="add_price_board.php" method="get" >
								 <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
								 <input type="hidden" id="page" name="page" value="" >
								 <input type="hidden" id="type" name="type" value="month" >



 
								   <div   class="col-lg-4"  align="left"  > 
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
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px; width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >  
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบวันที่    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=month" class=" btn btn-sm " style=" background-color: #FFF; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#000" style="font-size: 14px; ">  แบบเดือน    </font>  
									</div>
									</a>
									</td>
									<td width="30%" align="center" bgcolor="#FFF"  >  
									<a href="add_price_board.php?major=<?php echo $major; ?>&page=&type=year" class=" btn btn-sm " style=" background-color: #F77369; border: 1px solid #F77369; border-radius: 5px;   width: 100%; "  >  
									<div style="margin-top: 5px; margin-bottom: 5px; "  align="center" >     
									<font size="3px" color="#FFF" style="font-size: 14px; ">  แบบปี    </font>  
									</div>
									</a>
									</td>
								</tr>
								</table>

								</div>



								<div class=" col-lg-12 "  align="left" style=" margin-top: 10px; " >    </div>


								  <form action="add_price_board.php" method="get" >
								  <input type="hidden" id="major" name="major" value="<?php echo $major; ?>" >
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
                 	 		            
                		          
                		        
								<div class=" col-lg-12 "  align="left" >  <hr>   </div>
                		   
                      			 <style>  
						.small-box {
						  border-radius: 10px;
						  box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
						  display: block;
						  margin-bottom: 20px;
						  position: relative;
						}

						.small-box > .inner {
						  padding: 10px;
						}

						.small-box > .small-box-footer {
						  background: rgba(0, 0, 0, 0.1);
						  color: rgba(255, 255, 255, 0.8);
						  display: block;
						  padding: 3px 0;
						  position: relative;
						  text-align: center;
						  text-decoration: none; 
						}

						.small-box > .small-box-footer:hover {
						  background: rgba(0, 0, 0, 0.15);
						  color: #ffffff;
						}

						.small-box h3 {
						  font-size: 2.2rem;
						  font-weight: bold;
						  margin: 0 0 10px 0;
						  padding: 0; 
						}
 
						.small-box .icon {
						  color: #FFF;
						  z-index: 0;
						}

						.small-box .icon > img {
						  font-size: 90px;
						  position: absolute;
						  right: 15px;
						  top: 15px;
						  transition: all 0.3s linear;
						}

						.small-box .icon > img.fa, .small-box .icon > img.fas, .small-box .icon > img.far, .small-box .icon > img.fab, .small-box .icon > img.glyphicon, .small-box .icon > img.ion {
						  font-size: 70px;
						  top: 20px;
						} 
					</style>
                    
								<?php
							 
								$price1 = 0;
								$price2 = 0;
								$price3 = 0;
								$price4 = 0;
								$price5 = 0;
								$price6 = 0;
								$price7 = 0;
								$price8 = 0;
								$price9 = 0;
								$price10 = 0;
								$price11 = 0;
								$price12 = 0;
								$price10 = 0;
	
	
								$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";   
								$sql = "SELECT * FROM price_setting Where  money != ''   ".$addcode." ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$price1 += $objResult["money"];

								}
					 
	
								$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
								$sql = "  SELECT a.* FROM money_customer_bank a
								Inner Join customer b On a.customer = b.pk
								Inner Join list_order c On c.bill_no = a.bill_no 
								where a.bill_no != '' ".$addcode."  Group By a.bill_no  order by a.pk desc     ";   
								$query = mysqli_query($con,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{       
									$name_cutomer = " - ";
									$name_cutomer2 = " - ";     

									$note1 = " - ";
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

									$discountbank = 0;  
									$discount = 0;  
									$income1 = 0;  
									$moneybank = 0;
									$bankdate = "OFF"; 


									$datenow1   = date("Y-m-d", strtotime($totalprice4)); 
									$datenow2   = date("Y-m-d", strtotime($daystart_load2));  
									$addcode_check = "  and  create_date2 BETWEEN '".$datenow1."' AND '".$datenow2."'  "; 
									$sql_c = "SELECT * FROM money_customer_bank where customer = '".$objResult["customer"]."' and bill_no = '".$objResult["bill_no"]."'   
									and (  typegetpayment = 'รับเงินสด' or  typegetpayment = 'โอนผ่านบัญชีบริษัท'  )   ".$addcode_check."
									order by pk asc  "; 

								////	echo $sql_c."<Br>";
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$moneybank +=  $objResult_c["money"];   
									}	


									$checkdatenow1 = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
									$checkdatenow2 =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load2)));
									$code_check2 = " and create_date2 BETWEEN '".$checkdatenow1."' AND '".$checkdatenow2."'  "; 
									$sql_p = " SELECT * FROM history_payment Where  customer = '". $objResult["customer"]."'    and bill_no = '".$objResult["bill_no"]."'   ".$code_check2." ";   
									$query_p = mysqli_query($objCon,$sql_p); 
									while($objResult_p = mysqli_fetch_array($query_p))
									{   
										if(!empty($objResult_p["income"])){  
											if($objResult_p["typesave"] == "ชำระหักเงินฝาก"){
												$discountbank += $objResult_p["bank"];  
											}
											if($objResult_p["typesave"] == "ชำระ2ทาง"){
												$discountbank += $objResult_p["bank"];  
											}
										}   
									}	 	



									$calcultor = $moneybank - $discountbank;
									if($calcultor <= 0){
										$calcultor = 0;
									} 

									$price2 += $calcultor;  

								} 
	
	  
								$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
								$sql2 = " SELECT a.*  FROM list_chk_computer a 
								Inner Join list_order b  On a.pkselect = b.pk
								Inner Join product c  On b.menu_id = c.pk
								where  a.bill_no != ''   
								".$addcode."
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
										$total_price +=  $objResult_c["computer2"];
										$pricecal = $objResult_c["priceorder"] - $objResult_c["moneydown"] - $objResult_c["moneycontact"] + $objResult_c["computer2"];


										$pasy = $objResult_c["computer2"] * 0.03;
										$cal = $pricecal * 0.03;
										$cal2 = $pricecal  - $pasy;


										if($cal2 <= 0){
											$cal2 = 0;
										}

										$s_m1 += $cal2;

									}


									$price3 += $s_m1;  
									$price6 += $total_price;   
							}
	
	 
	
	
								$addcode = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql = "  SELECT a.* FROM payment_other_bill_no a
								Inner Join list_order b On a.bill_no_ref = b.bill_no 
								Where  a.price != ''  ".$addcode." order by a.pk desc   ";  
	 
								$query = mysqli_query($con,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{        
									$discount = 0;
									if(!empty($objResult["discount"])){ 
										$discount = $objResult["discount"];
									}

									$income = 0;
									if(!empty($objResult["price"])){ 
										$income = $objResult["price"];
									}
	
									
									$calcuator = $income-$discount;
									if($calcuator <= 0 ){
										$calcuator = 0;
									}
									
									$price4 += $calcuator;
								}
	
	 
								$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
								$sql2 = " SELECT a.*, b.name  FROM paymentother  a
								Inner Join customer b On   a.customer = b.pk 
								where a.bill_no != ''   
								".$addcode."  
								order by a.pk asc   ";  
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{       
 									$price5 += $objResult2["data2"];
									
								}
	
	
								$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql2 = " SELECT * FROM list_order_store  where bill_no != ''  ".$addcode."   order by  pk asc   ";  
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{        
									$totalprice1 = $objResult2["money"];   
									
									$price7 += $totalprice1;
								}
	
	
	  
								$cno = 0;
								$cno1 = 0;
								$cno2 = 0;
								$cno3 = 0;  
								$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
								$sql2 = "  SELECT * FROM member_bank where bill_no != '' ".$addcode."   order by pk desc     ";   
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
 
										$price10 += $calsumper; 
								}
	
	
								$addcode = "  and  a.npl_datestart2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
								Inner Join customer b On   a.customer = b.pk
								Inner Join product c On   c.pk = a.menu_id
								where a.bill_no != ''   
								and a.contactstatus = 'อนุมัติแล้ว' 
								".$addcode."  
								order by a.pk asc   "; 

								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{       

									$totalprice1 = $objResult2["money"]; 
									$totalprice2 = $objResult2["daytotal"]; 
									$totalprice3 = $objResult2["dayprice"];  
									$c_status = $objResult2["c_status"];  
									$g_create_date2 = $objResult2["create_date2"];  
									$startdate = $objResult2["startdate"];  
									$endate = $objResult2["endate"];  
									$totalprinend = $objResult2["totalprinend"];  



									$price11 += $totalprinend;
								}
	
	
	
	
								$allprice = $price1 -  $price2 -  $price3 -  $price4 -  $price5 -  $price6 -  $price7 - $price8 -  $price9 - $price10 - $price11 ;
	
								$price12 = $allprice;
							?>
                         
                         
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #5B86E5; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดเงินทุนร้าน </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price1);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #006400; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดเงินฝาก </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price2);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div> 
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #8B008B; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดชำระสินเชื่อ </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price3);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div> 
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #FF8C00; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ค่าปรับ </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price4);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							 
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #FF1493; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> รายได้อื่นๆ </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price5);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #00BFFF; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ค่าคอม </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price6);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #DAA520; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> รายได้จากการหน้าร้าน </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price7);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #CD5C5C; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> รายได้จากการซ่อม </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price8);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #ADD8E6; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ค่าใช้จ่ายทุกสาขา </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price9);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #FFB6C1; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> รายได้จากค่าธรรมเนียม </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price10);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #00FFFF; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> รายได้จากกการปิดยอดดำเนินคดี </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price11);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
							
							<div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #778899; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> กำไรขาดทุน </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price12);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
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