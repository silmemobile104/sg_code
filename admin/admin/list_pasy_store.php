<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 	 $codepro = "";
	 $name = ""; 


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


	
	$searchname4 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname4"])){
		
		$cut = explode("/",$searchname3);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}else{
		$searchname4 = $_GET["searchname4"];
		
		
		
		$cut = explode("/",$searchname4);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
	$searchname5 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname5"])){
		
		$cut = explode("/",$searchname3);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}else{
		$searchname5 = $_GET["searchname5"];
		
		
		
		$cut = explode("/",$searchname5);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$alldata = "";
	if(empty($_GET["alldata"])){
		
	}else{
		$alldata = $_GET["alldata"];
	} 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}
	$month = "";
	if(empty($_GET["month"])){
		
	}else{
		$month = $_GET["month"];
	}
	$year = "";
	if(empty($_GET["year"])){
		
	}else{
		$year = $_GET["year"];
	}

?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  หนังสือหักภาษี ขายหน้าร้าน    </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > หนังสือหักภาษี ขายหน้าร้าน     </font>   
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
                     <font size="4px" color="#000000">  หนังสือหักภาษี ขายหน้าร้าน   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_pasy_store.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกใบวางบิล   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="list_pasy_store.php?page=2"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกหนังสือรับการหักภาษี    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                      	   
						  
						<form action="list_pasy_store.php" method="get" >

					  	   <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; display: none;"      onchange="loaddropdata()"      >  
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
 
						   <script> 
						 function myFunction1() 
						 {
						  var getadata = document.getElementById("searchtype").value; 

							 if(getadata == "ประเภทเดือนปี"){
								  document.getElementById("showsearchdata1").style.display = "block";
								  document.getElementById("showsearchdata2").style.display = "none";

							 }else if(getadata == "ประเภทวัน"){ 
								  document.getElementById("showsearchdata2").style.display = "block";
								  document.getElementById("showsearchdata1").style.display = "none";

							 }else{ 
								  document.getElementById("showsearchdata1").style.display = "none";
								  document.getElementById("showsearchdata2").style.display = "none";

							 }
						 } 
						</script>

					   </form> 
                    
                      
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
								$addcode3 = "";  
								$addcode4 = "";  

							 	if($searchtype == "ประเภทเดือนปี"){ 
								$datadate  = "01-".$month."-".$year;				   
								$datadate2  = "31-".$month."-".$year;	

 
								$contactstart = date("Y-m-d", strtotime($datadate));  
								$checkend = date("Y-m-d", strtotime($datadate2)); 
  
								$addcode4 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								}
								if($searchtype == "ประเภทวัน"){ 
								$addcode4 = "  and  create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."'  "; 
								}

								if(empty($_GET["searchname3"])){

								}else{
									$addcode3 = " and  bill_no like '%".$searchname3."%' ";
									$addcode4 = "";
								}  
								if(empty($_GET["searchname2"])){

								}else{
									$addcode = " and  major = '".$searchname2."' ";
								}   
	
								/// $addcode2 = " and  major2 = '".$searchname."' "; 

								if($alldata == "all"){ 
								$addcode = "";
								$addcode2 = "";
								$addcode3 = "";
								$addcode4 = "";
								}

							$total_record = 0;
							$sql2 = " SELECT *  FROM list_order_store 
							where  bill_no != ''    and pasy_onoff = ''
							".$addcode.$addcode2.$addcode3.$addcode4."
							Group By bill_no
							order by pk asc    ";   
							$query2 = mysqli_query($objCon, $sql2);
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
								$total_record++;
							}
							$total_page = ceil($total_record / $perpage);
							?>   
					    </div>
                      
                       
                        <div class="col-md-8" style="margin-top: 15px;" align="right" >  
						 
						 <button type="button"  class="btn btn-primary" style="background-color: #006400; border-radius: 5px;   height: 40px; border-color: #006400;   "    > <font color="#FFF" size="2px" class="serif1" id="totaltxtbill" >  จำนวนบิลที่ยังไม่ว่างบิล <?php echo number_format(0+$total_record); ?> บิล   </font> </button>  
						 
						 
						 <a href="list_pasy_store_all.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>"> 
						 <button type="button"  class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px;  height: 40px; border-color: #FF8C00;  "    > <font color="#FFF" size="2px" class="serif1" >  เลือกรายการทั้งหมด   </font> </button>  </a>

					 
						 <a href="list_pasy_store_cancel.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>"> 
						 <button type="button"  class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px;  height: 40px; border-color: #FF0000; "    > <font color="#FFF" size="2px" class="serif1" >  ยกเลิกรายการทั้งหมด   </font> </button>  </a>
 
				   
						 <a href="list_pasy_store.php?page=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>"> 
						 <button type="button"  class="btn btn-primary" style="background-color: #9932CC; border-radius: 5px;  height: 40px; border-color: #9932CC;   "    > <font color="#FFF" size="2px" class="serif1"  id="totaltxtbill2" >  ออกหนังสือรับการหักภาษี   </font> </button>  </a>
					   </div>
                     
                       
                      	<script>  
						 $( document ).ready(function() {   
							 Getsearchdata2();    
						 });
						  
						 function Getsearchdata2() 
						 {
						    var memberdata = "";  
							 
							$.ajax({
							type: "GET",
							url: "loadtotalbill_store_pasy.php",
							success: function(result) {
								$('#totaltxtbill2').html(result);
							}
							});	

						 }
							   
						 setInterval(function(){  
							Getsearchdata2();  
						 }, 1100);
					  </script>
						  
						  
						 <input type="hidden" id="major" value="<?php echo $_GET["searchname2"]; ?>" >
						 <input type="hidden" id="major2" value="<?php echo $_GET["searchname"]; ?>" >
       
                      
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


							$sql2 = "  SELECT *  FROM list_order_store 
							where  bill_no != ''  and pasy_onoff = '' ".$addcode.$addcode2.$addcode3.$addcode4."
							Group By bill_no
							order by pk asc   ";   
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
								$customer = $objResult2["customer"];
								
								
								
								$bill_no = $objResult2["bill_no"];
								$cutbill = explode("BSG", $bill_no);
								$newbill =   "BSGTDC".$cutbill[1];


								$menuid = "-";
								$sql_c = "SELECT * FROM list_order where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
								$query_c = mysqli_query($objCon,$sql_c);
								while($objResult_c = mysqli_fetch_array($query_c))
								{ 
									$menuid =  $objResult_c["menu_id"];
								}

								$name_create1 = "-"; 
								$name_create2 = "-"; 
								$name_create3 = "-";  
								$name_major = "-"; 
								$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_create1 =  $objResult_c["name"];
										$name_create2 =  $objResult_c["address"];
										$name_create3 =  $objResult_c["telphone"];
									}

								}		


								$total_price = 0; 
								$total_price +=  $objResult2["pasycal"]; 


								$name_create = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}


								$pasy_onoff = $objResult2["pasy_onoff"];
								$hiiden1 = "";
								$hiiden2 = "display: none;";
								if($pasy_onoff == "ON"){  
								$hiiden1 = " display: none; ";
								$hiiden2 = " ";
								}

							?>
							<tr style="background-color: <?php echo $bg ?>; " id="hdd<?php echo $objResult2["pk"]; ?>"   > 

							<td style=" border-left: 0px solid #F2F2F2; ">
							<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

						 		<input type="hidden" id="bill_save<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >

								<div id="showdata<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden1; ?>" > 
								<input type="checkbox" id="savedata<?php echo $objResult2["pk"]; ?>" name="savedata" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  >

								</div> 

								<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
								<input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>" disabled  style=" width: 20px; height: 20px; border: 1px solid #83161C; "      >

								</div> 

								<style>
									#savedata<?php echo $objResult["pk"]; ?> {
										accent-color: #83161C;
									}
									#savedatacan<?php echo $objResult["pk"]; ?> {
										accent-color: #83161C;
									}
								</style>

								<script type="text/javascript"> 
								function getRadioVaal(radio_val){ 
									document.getElementById("showdata"+radio_val).style.display = "none";
									document.getElementById("showdatacan"+radio_val).style.display = "block";  
									document.getElementById("savedatacan"+radio_val).checked  = true;  

									 var int1 = radio_val;
									 var int2 = document.getElementById("major").value; ;
									 var int3 = document.getElementById("major2").value; ;
									 var bill_save = document.getElementById("bill_save"+radio_val).value; ;

									$.ajax({
										type: "POST",
										url: "save_select_store_pasy.php",
										data: {data1:int1, data2:int2, data3:int3, bill_save:bill_save},
										success: function(result) {
											 
										var check_number = result.ans;

										if(check_number == 0){  
										}else if(check_number == 1){  
											alert(' รายการนี้ถูกเลือกไปแล้ว  ');	 
										}else if(check_number == 2){  
											alert(' กรุณาล็อกอิน ');	 

										}

										}
									});

								} 
								</script> 
 
							</font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $bill_no; ?>  </font></div></td>  

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $customer; ?>  </font></div></td> 

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price);?>  </font></div></td> 
 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 
 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php echo DateThai($create_date)." ".datethai2($create_date);?> 
							<div> </div>
							<?php echo $create_time; ?>  

							</font></div></td> 


							</tr>  
							<?php $i++;  $totalprice1+=$total_price;  } ?>
						</tbody>

						<thead>   
						<tr>
						<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>    
						<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิล  </font></div></th>   
						<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อลูกค้า     </font></div></th> 
						<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงินภาษี   </font></div></th>    
						<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>  

						<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลาที่แก้ไขล่าสุด   </font></div></th>  
						</tr>
						</thead>
						</table>  
						</div> 
						</div>

		  				<?php } ?>
                  		     
                  		     
                  		     
                  		<?php 
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){ 
						?>       
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_pasy_store.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกใบวางบิล   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="list_pasy_store.php?page=2"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกหนังสือรับการหักภาษี    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                  		      
                  		     
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
									$addcode3 = "";  
									$addcode4 = "";  

									if($searchtype == "ประเภทเดือนปี"){ 
									$datadate  = "01-".$month."-".$year;				   
									$datadate2  = "31-".$month."-".$year;	


									$contactstart = date("Y-m-d", strtotime($datadate));  
									$checkend = date("Y-m-d", strtotime($datadate2)); 

									$addcode4 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
									}
									if($searchtype == "ประเภทวัน"){ 
									$addcode4 = "  and  create_date2 BETWEEN '".$daystart_load."' AND '".$daystart_load2."'  "; 
									}

									if(empty($_GET["searchname3"])){

									}else{
										$addcode3 = " and  bill_no like '%".$searchname3."%' ";
										$addcode4 = "";
									}  
									if(empty($_GET["searchname2"])){

									}else{
										$addcode = " and  major = '".$searchname2."' ";
									}   
 

									if($alldata == "all"){ 
									$addcode = "";
									$addcode2 = "";
									$addcode3 = "";
									$addcode4 = "";
									}

								$sql2 = " SELECT *  FROM list_order_store 
								where  bill_no != ''    and pasy_onoff = ''
								".$addcode.$addcode2.$addcode3.$addcode4."
								Group By bill_no
								order by pk asc    ";   
								$query2 = mysqli_query($objCon, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								?>   
							</div>


							<div class="col-md-8" style="margin-top: 15px;" align="right" >  
 
							 <a href="list_pasy_store.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname4=<?php echo $searchname4; ?>"> 
							 <button type="button"  class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px;  height: 40px; border-color: #FF8C00;  "    > <font color="#FFF" size="2px" class="serif1" >  ย้อนกลับ   </font> </button>  </a>
 
  
							 <button type="button"  class="btn btn-primary" style="background-color: #9932CC; border-radius: 5px;  height: 40px; border-color: #9932CC;   "    > <font color="#FFF" size="2px" class="serif1"  id="totaltxtbill2" >  ออกหนังสือรับการหักภาษี   </font> </button>  
						   </div>


							<script>  
							 $( document ).ready(function() {   
								 Getsearchdata2();    
								 loadpasyold();    
							 });

							 function Getsearchdata2() 
							 {
								var memberdata = "";  

								$.ajax({
								type: "GET",
								url: "loadtotalbill_store_pasy.php",
								success: function(result) {
									$('#totaltxtbill2').html(result);
								}
								});	

							 }
							 function loadpasyold() 
							 {
								var memberdata = "";  

								 
								$.ajax({
								type: "GET",
								url: "loadtotalbill_store_pasy_cal.php?bill_old=",
								success: function(result) {

									$('#key_productdata tfoot').html(result); 
 
								}
								});	

							 } 

							 setInterval(function(){  
								Getsearchdata2();  
								loadpasyold();  
							 }, 1100);
						  </script>
						  
						  
						 <input type="hidden" id="major" value="<?php echo $_GET["searchname2"]; ?>" >
						 <input type="hidden" id="major2" value="<?php echo $_GET["searchname"]; ?>" >
        
                 		     
						    <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						 <div class="table-responsive"  >
						 <table id="key_productdata"  class=" table    tablemobile  " border="0"   >
							     
						<tbody> 
						<?php 
							$bg = "#F8FAFD"; 
							$i = 1;
							$total = 0;
							$totalprice1 = 0;
							$totalprice2 = 0;
							$totalprice3 = 0;
							$totalprice4 = 0; 


							$sql2 = "  SELECT *  FROM list_order_store 
							where  bill_no != ''  and pasy_onoff = 'ON' and pasy_bill = '' and pasy_createby = '".$_SESSION["UserID"]."' 
							 Group By bill_no
							 order by pk asc   ";   
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
								$customer = $objResult2["customer"];

								
								$bill_no = $objResult2["bill_no"];
								$cutbill = explode("BSG", $bill_no);
								$newbill =   "BSGTDC".$cutbill[1];


								$menuid = "-";
								$sql_c = "SELECT * FROM list_order where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
								$query_c = mysqli_query($objCon,$sql_c);
								while($objResult_c = mysqli_fetch_array($query_c))
								{ 
									$menuid =  $objResult_c["menu_id"];
								}

								$name_create1 = "-"; 
								$name_create2 = "-"; 
								$name_create3 = "-";  
								$name_major = "-"; 
								$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_create1 =  $objResult_c["name"];
										$name_create2 =  $objResult_c["address"];
										$name_create3 =  $objResult_c["telphone"];
									}

								}		


								$total_price = 0; 
								$total_price +=  $objResult2["pasycal"]; 

								$name_create = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}


								$pasy_onoff = $objResult2["pasy_onoff"];
								$hiiden1 = "";
								$hiiden2 = "display: none;";
								if($pasy_onoff == "ON"){  
								$hiiden1 = " display: none; ";
								$hiiden2 = " ";
								}

							?>
							<tr style="background-color: <?php echo $bg ?>; " id="hdd<?php echo $objResult2["pk"]; ?>"   > 

							<td style=" border: 1px solid #DCDCDC;  ">
							<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
 
						 		<input type="hidden" id="bill_save<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["bill_no"]; ?>" >

							
								<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
								<input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"    style=" width: 20px; height: 20px; border: 1px solid #83161C; " checked   onclick="getRadioVaal(this.value)"     > 
								</div> 

								<style>
									#savedata<?php echo $objResult["pk"]; ?> {
										accent-color: #83161C;
									}
									#savedatacan<?php echo $objResult["pk"]; ?> {
										accent-color: #83161C;
									}
								</style>

								<script type="text/javascript"> 
								function getRadioVaal(radio_val){ 
								  
									 var int1 = radio_val;
									 var int2 = document.getElementById("major").value; 
									 var int3 = document.getElementById("major2").value; 
									 var bill_save = document.getElementById("bill_save"+radio_val).value; ;

									 $.ajax({
										type: "POST",
										url: "save_select_pasy_store_cancel.php",
										data: {data1:int1, data2:int2, data3:int3, bill_save:bill_save},
										success: function(result) {
											
											document.getElementById("hdd"+radio_val).style.display = "none";   
										}
									}); 

								}   
								</script> 
 
							</font></div></td> 


							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td>  

							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $customer; ?>  </font></div></td> 

							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price);?>  </font></div></td> 
   
							</tr>  
							<?php $i++;  $totalprice1+=$total_price;  } ?>
						</tbody>

						<thead>   
						<tr>
						<th width="2%" bgcolor="#BEC6CB" height="35px;" style="  border: 1px solid #DCDCDC;  "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลบ    </font></div></th>    
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิล  </font></div></th>   
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อลูกค้า     </font></div></th>  
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC; "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ภาษี   </font></div></th>  
						</tr> 
						</thead>
						  
							  
						<tfoot> 
						  
						  
						  
						</tfoot> 
						 
						 
						</table>  
						</div>
 
				  		</div>
                 		      
                      	    <form role="form" name="frmMain" method="post" action="save_confrim_list_pasy_store.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                    	 
                    	 	  <div class="col-lg-12" align="center"   > 
                          	  <div class="col-lg-12" align="center"   > 
							  <div class="form-group">     

							  	  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 

								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 

											   
										</div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small --> 
							     
						  	  </div> 
							  </div>  
							  </div>
                    	 
                     	   </form>
                     	        
                 		      
                  		<?php } } ?>     
                   		     
                   		     
                   		     
                   		<?php 
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "2" ){ 
						?>       
                   		     
                   		     
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="list_pasy_store.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกใบวางบิล   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_pasy_store.php?page=2"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกหนังสือรับการหักภาษี    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                   		     
                   		     
                   		       
						   <form action="list_pasy.php" method="get" >
						   
						   <input type="hidden" id="page" name="page" value="2">

						   <select class="form-control" id="searchname2" name="searchname2"   style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px; display: none;"      onchange="loaddropdata()"      >  
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
 
						   <div   class="col-lg-4"  align="left"   > 
							<table width="100%" border="0">
								<tr>   
									<td width="40%"> 
									<font color="black" size="3px" class="serif">  ร้านค้า <?php echo $searchname; ?>   </font>


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
								</tr>
							</table>  
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
								$addcode2 = "";
								$addcode3 = "";  
								$addcode4 = "";  
 
								if(empty($_GET["searchname"])){

								}else{
									$addcode2 = " and  major2 = '".$searchname."' ";
								}  

								if($alldata == "all"){ 
								$addcode = "";
								$addcode2 = "";
								$addcode3 = "";
								$addcode4 = "";
								}

							$sql2 = "  SELECT *  FROM list_order_store 
							where  bill_no != ''  and pasy_bill != '' ".$addcode.$addcode2.$addcode3.$addcode4."
							Group By bill_no
							order by pk asc   "; 

							/// echo $sql2;
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
							<ul class="pagination">
							<?php if ($page > 1): ?>
							<li class="prev"><a href="list_pasy_store.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2">Prev</a></li>
							<?php endif; ?>

							<?php if ($page > 3): ?>
							<li class="start"><a href="list_pasy_store.php?page2=1&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2">1</a></li>
							<li class="dots">...</li>
							<?php endif; ?>

							<?php if ($page-2 > 0): ?><li class="page"><a href="list_pasy_store.php?page2=<?php echo $page-2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo $page-2 ?></a></li><?php endif; ?>
							<?php if ($page-1 > 0): ?><li class="page"><a href="list_pasy_store.php?page2=<?php echo $page-1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo $page-1 ?></a></li><?php endif; ?>

							<li class="currentpage"><a href="list_pasy_store.php?page2=<?php echo $page ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo $page ?></a></li>

							<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="list_pasy_store.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo $page+1 ?></a></li><?php endif; ?>
							<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="list_pasy_store.php?page2=<?php echo $page+2 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo $page+2 ?></a></li><?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)-2): ?>
							<li class="dots">...</li>
							<li class="end"><a href="list_pasy_store.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2"><?php echo ceil($total_record / $perpage) ?></a></li>
							<?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)): ?>
							<li class="next"><a href="list_pasy_store.php?page2=<?php echo $page+1 ?>&searchcustomer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname4=<?php echo $searchname4; ?>&searchname5=<?php echo $searchname5; ?>&alldata=<?php echo $alldata; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&searchtype=<?php echo $searchtype; ?>&page=2">Next</a></li>
							<?php endif; ?>
							</ul>
							<?php endif; ?>
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

							$addcode = "";
							$addcode2 = "";
							$addcode3 = "";  
							$addcode4 = "";  
 
							if(empty($_GET["searchname"])){

							}else{
								$addcode2 = " and  major2 = '".$searchname."' ";
							}   
	  								
							$sql2 = "  SELECT *  FROM list_order_store 
							where  bill_no != ''  and pasy_bill != '' ".$addcode.$addcode2.$addcode3.$addcode4."
							Group By pasy_bill
							order by pk asc   limit {$start} , {$perpage} ";   
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
								$pkselect = $objResult2["pk"];
								$bill_no = $objResult2["bill_no"];
								$pasy_createdate = $objResult2["pasy_createdate"];
								$pasy_createtime = $objResult2["pasy_createtime"];
								$pasy_bill = $objResult2["pasy_bill"];
								$pasy_createby = $objResult2["pasy_createby"];
								$menuid = $objResult2["menu_id"];

								$no = 0;
								$total_price = 0; 
								$sql_c = " SELECT *  FROM list_order_store where  bill_no != ''  and pasy_bill != ''
								 and pasy_bill = '".$pasy_bill."' Group By bill_no order by pk asc "; 
								$query_c = mysqli_query($objCon,$sql_c);
								while($objResult_c = mysqli_fetch_array($query_c))
								{ 
									$no++;
									$total_price += $objResult_c["pasycal"];
								}
								
 
								
								$name_create1 = "-"; 
								$name_create2 = "-"; 
								$name_create3 = "-";  
								$name_major = "-"; 
								$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_create1 =  $objResult_c["name"];
										$name_create2 =  $objResult_c["address"];
										$name_create3 =  $objResult_c["telphone"];
									}

								}		

								$name_create = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$pasy_createby."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}


								$pasy_onoff = $objResult2["pasy_onoff"];
								$hiiden1 = "";
								$hiiden2 = "display: none;";
								if($pasy_onoff == "ON"){  
								$hiiden1 = " display: none; ";
								$hiiden2 = " ";
								}

							?>
							<tr style="background-color: <?php echo $bg ?>; " id="hdd<?php echo $objResult2["pk"]; ?>"   > 
 
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["pasy_bill"]; ?>  </font></div></td>  
  
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
							<?php echo DateThai($pasy_createdate)." ".datethai2($pasy_createdate);?>   
							</font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create1; ?>  </font></div></td> 
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $pasy_createtime; ?>  </font></div></td>
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price);?>  </font></div></td> 
  

							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$no);?>  </font></div></td> 

						
							
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >

							<a href="print_list_pasy_store.php?pasy_bill=<?php echo $objResult2["pasy_bill"]; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " > 
							พิมพ์    
							</font>  
							</a> 

							</font></div></td>
						
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >    
										
							<a href="list_pasy_store.php?pasy_bill=<?php echo $objResult2["pasy_bill"]; ?>&page=3"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
							<font size="3px" color="#F77369" style=" font-size: 13px; " > 
							คลิก   
							</font>  
							</a> 

							</font></div></td> 
										
										 
										
							</tr>  
							<?php $i++;  $totalprice1+=$total_price;  } ?>
							</tbody>

							<thead>   
							<tr>
							<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือกเลขที่ใบวางบิล    </font></div></th>    
							<th width="8%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    วันทีอออกหนังสือรับการหักภาษ  </font></div></th>   
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ร้านค้า     </font></div></th> 
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>    
							<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน     </font></div></th>  
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงินภาษี     </font></div></th>  
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวนที่วางบิล     </font></div></th>  
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบวางบิล     </font></div></th>

							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูรายการย่อยบิล   </font></div></th>  
							</tr>
							</thead>
							</table>  
							</div> 
							</div>
                   		     
                   		     
                   		 
                  		<?php } } ?>       
                   		     
                   		           
                   		<?php 
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "3" ){ 
						?>       
                   		     
                   		     
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="list_pasy_store.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกใบวางบิล   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_pasy_store.php?page=2"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกหนังสือรับการหักภาษี    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                   		      
						 <input type="hidden" id="major" value="<?php echo $_GET["searchname2"]; ?>" >
						 <input type="hidden" id="major2" value="<?php echo $_GET["searchname"]; ?>" >
						 <input type="hidden" id="pasy_bill" value="<?php echo $_GET["pasy_bill"]; ?>" >
        
                 		     
						 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
						 <div class="table-responsive"  >
						 <table id="key_productdata"  class=" table    tablemobile  " border="0"   >
							     
						<tbody> 
						<?php 
							$bg = "#F8FAFD"; 
							$i = 1;
							$total = 0;
							$totalprice1 = 0;
							$totalprice2 = 0;
							$totalprice3 = 0;
							$totalprice4 = 0; 


							$sql2 = "  SELECT *  FROM list_order_store 
							where  bill_no != ''  and  pasy_bill = '".$_GET["pasy_bill"]."'  
							 order by pk asc   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{
								$create_date = $objResult2["create_date"];
								$create_date2 = $objResult2["create_date2"];
								$create_time = $objResult2["create_time"];
								$create_by = $objResult2["create_by"];
								$pkselect = $objResult2["pkselect"];
								$bill_no = $objResult2["bill_no"];
								$customer = $objResult2["customer"];
								$menuid  = $objResult2["menu_id"];

								
								$bill_no = $objResult2["bill_no"];
								$cutbill = explode("BSG", $bill_no);
								$newbill =   "BSGTDC".$cutbill[1];
 

								$name_create1 = "-"; 
								$name_create2 = "-"; 
								$name_create3 = "-";  
								$name_major = "-"; 
								$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
									$query_c = mysqli_query($objCon,$sql_c);
									while($objResult_c = mysqli_fetch_array($query_c))
									{ 
										$name_create1 =  $objResult_c["name"];
										$name_create2 =  $objResult_c["address"];
										$name_create3 =  $objResult_c["telphone"];
									}

								}		


								$total_price = 0; 
								$total_price +=  $objResult2["pasycal"]; 

								$name_create = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_create =  $objResult["name"];
								}


								$pasy_onoff = $objResult2["pasy_onoff"];
								$hiiden1 = "";
								$hiiden2 = "display: none;";
								if($pasy_onoff == "ON"){  
								$hiiden1 = " display: none; ";
								$hiiden2 = " ";
								}
							?>
							<tr style="background-color: <?php echo $bg ?>; " id="hdd<?php echo $objResult2["pk"]; ?>"   > 
 
							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td>  


							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td>  

							<td style=" border: 1px solid #DCDCDC; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($create_date2)." ".datethai2($create_date2);?>  </font></div></td>  
 
							
							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create1; ?>  </font></div></td> 

							<td style=" border: 1px solid #DCDCDC;  "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$total_price);?>  </font></div></td> 
   
							</tr>  
							<?php $i++;  $totalprice1+=$total_price;  } ?>
						</tbody>

						<thead>   
						<tr>
						<th width="2%" bgcolor="#BEC6CB" height="35px;" style="  border: 1px solid #DCDCDC;  "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    #    </font></div></th>    
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่บิล  </font></div></th>   
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วัน เดือน ปี     </font></div></th>   
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อร้าน   </font></div></th> 
						<th width="4%" bgcolor="#BEC6CB" style="  border: 1px solid #DCDCDC; "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงินภาษี   </font></div></th>  
						</tr> 
						</thead>
						 
						<div id="tfooterdata">
							
						</div> 
						  
						<tfooter > 
						<tr>
						<td width="2%" colspan="3" bgcolor="#FFF" height="35px;" style=" border: 0px solid #FFF;"  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;   "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   มูลค่าสินค้า    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="  border: 1px solid #DCDCDC;   "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$totalprice1); ?>    </font></div></th>     
						</tr> 
						<tr>
						<td width="2%" colspan="3" bgcolor="#FFF" height="35px;" style=" border: 0px solid #FFF;   "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ภาษี 3 %    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php 
							
							if($totalprice1 <= 0){
								echo number_format(0); 
							}else{ 
								$totalsum = $totalprice1  * 0.03; 
								echo number_format(0+$totalsum); 
							}
							  
							?>    </font></div></th>     
						</tr> 
						<tr>
						<td width="2%" colspan="3" bgcolor="#FFF" height="35px;" style="  border: 0px solid #FFF;  "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รวมเงินทั้งสิน    </font></div></th>  
						<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php 
							
							if($totalprice1 <= 0){
								$totalsum = 0; 
							}else{ 
								$totalsum = $totalprice1  * 0.03; 
								 
							}
							
							$totacal = $totalprice1 - $totalsum; 
							echo number_format(0+$totacal); 
							  
							?>    </font></div></th>     
						</tr> 
						</tfooter> 
						
						
						
						</table>  
						</div>
 
				  		</div>
                 		       
                   		     
                  		<?php } } ?>  
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>