<?php 
session_start(); 
include('../database.php');
 
	 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		///$major = " and major = '" . $_GET["major"] . "'";
		
	}  
	$major2 = "";
	if(!empty($_GET["major_store"])){
		$major2 = $_GET["major_store"];
		///$major_store = " and major2 = '" . $_GET["major_store"] . "'";
		
	} 	
 										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
										$data1 = 0;
										$data2 = 0;
										$data3 = 0;
										$data4 = 0;
										$data5 = 0; 
										$data6 = 0; 
										$data7 = 0; 
    
										
										$loopbill = 0;
										$total_price = 0;
										$sql_c = "SELECT * FROM list_chk_cleam 
										where major = '".$major."'   and bill_no = ''   order by pk asc  ";  
										$query_c = mysqli_query($objCon,$sql_c); 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$loopbill++;
											
											   
											$data1 = "";
											$data2 = "";
											$data3 = "";
											$data4 = "";
											$data5 = 0;
											$sql_c2 = "SELECT * FROM mobile_restore where pk = '".$objResult_c["pkselect"]."'   order by pk asc  "; 
											$query_c2 = mysqli_query($objCon,$sql_c2); 
											while($objResult_c2 = mysqli_fetch_array($query_c2))
											{ 
												$data1 =  $objResult_c2["bill_no"];
												$data2 =  $objResult_c2["datesave2"];
												$data3 =  $objResult_c2["customer"];
												$data4 =  $objResult_c2["telphone"];
												$data5 =  $objResult_c2["price1"];
											}
											 
											$total_price += $data5;
											
										} 
	 ?>
	  
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > ยอดค่าจ้างซ่อม </font>   
							   <input type="text" class="form-control" id="data1" name="data1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$total_price); ?>"  readonly >
							</div>
						  </div> 
                    	  <div class="col-md-3"  >	 
							<div class="form-group" align="left">
							   <font color = '#000' size="3px" > จำนวนบิลในระบบ </font>   
							   <input type="text" class="form-control" id="data2" name="data2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #F77369; "  value="<?php echo number_format(0+$loopbill); ?>"  readonly >
							</div>
						  </div> 
						 