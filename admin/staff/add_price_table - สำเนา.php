<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $major = "";
	 $note = "";
	 $detail = "";
	 $price = "";
	 $money = "";


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
 	 
	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
		
	}else{
		$searchname = $_GET["searchname"]; 
		 
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
		  
	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
		
	}else{
		$searchname2 = $_GET["searchname2"];
		 
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}


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
 	$sql = "SELECT * FROM price_setting Where  create_date2 = '". $daystart_load2 ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$price1 += $objResult["money"];
		
	}
 	$sql = "SELECT * FROM money_customer_bank  Where  create_date2 = '". $daystart_load2 ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$price2 += $objResult["money"];
		
	}
 	$sql = "SELECT * FROM history_payment   Where  create_date2 = '". $daystart_load2 ."'   ";  
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




 	$sql = " SELECT *  FROM list_chk_computer  where  bill_no != '' and  create_date2 = '". $daystart_load2 ."' Group By bill_no order by pk asc     ";  
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


 	$sql = "SELECT * FROM list_order_store   Where  create_date2 = '". $daystart_load2 ."'   ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		if(!empty($objResult["money"])){ 
			$price6 += $objResult["money"]; 
		} 
	}

 	$sql = "SELECT * FROM mobile_restore   Where  datesave2 = '". $daystart_load2 ."'   ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		if(!empty($objResult["price2"])){ 
			$price7 += $objResult["price2"]; 
		} 
	}

 	$sql = "SELECT * FROM otherdata   Where  date_start2 = '". $daystart_load2 ."'   ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		if(!empty($objResult["price"])){ 
			$price8 += $objResult["price"]; 
		} 
	}
 
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
              
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  สรุปภาพรวม   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สรุปภาพรวม  </font>   
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
                     <font size="4px" color="#000000">  สรุปภาพรวม   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
 
                 		     
                 		   
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
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
								<a href="add_price_board.php?page=">   
					    		<div  >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -2px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  รายงานยอดเงินรวมทุกสาขา   </font>  
					    		</div>
					    		</a>
					    		</td>
					    		<td width="30%" align="center" bgcolor="#F77369"   >   
								<a href="add_price_table.php?page=">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -2px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  สรุปภาพรวม   </font>  
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
						 <font size="4px" color="#000000">  รายงานยอดเงินรวมทุกสาขา ประจำวันที <?php echo DateThai($daystart_load)." ".DateThai2($daystart_load) ;?>  </font>   
					  </div> 
					  </font> 
					  </div>
                		        
                       <div class="col-lg-12" style="margin-top: 10px; " >   </div>  
                       
                       
                 		  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    > 
  							<thead>  
											 <tr>
												<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    สาขา    </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ยอดเงินฝาก  </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายได้จากซ่อม     </font></div></th> 
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รายได้จากขายหน้าร้าน   </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระสิ้นเชื่อ ปกติ     </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดชำระสิ้นเชื่อ  หักเงินฝาก      </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หักค่าใช้จ่ายค่าคอม   </font></div></th>   
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าใช้จ่ายตามสาขา     </font></div></th>  
												 
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าใช้จ่ายอื่นๆ   </font></div></th>  
											 </tr>
										  </thead>
									
										 
							<?php 
								$bg = "#F8FAFD"; 
										
								$sql2 = "SELECT * FROM major where name != '' order by pk asc   ";   
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{ 
											
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								}
									
								$major = $objResult2["pk"];
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

								$sql = "SELECT * FROM price_setting Where  create_date2 = '". $daystart_load2 ."' ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$price1 += $objResult["money"]; 
								}
								$sql = "SELECT a.bill_no, a.money FROM money_customer_bank a  
								Inner Join list_order b On b.bill_no = a.bill_no
								
								Where  a.create_date2 = '". $daystart_load2 ."' and b.major = '".$major."' ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									$price2 += $objResult["money"];
								} 
									
									
								$sql = "SELECT * FROM mobile_restore   Where  datesave2 = '". $daystart_load2 ."'   ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["price2"])){ 
										$price7 += $objResult["price2"]; 
									} 
								}
									
									
								$sql = "SELECT * FROM list_order_store   Where  create_date2 = '". $daystart_load2 ."' and major = '".$major."'   ";  
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["money"])){ 
										$price6 += $objResult["money"]; 
									} 
								}
									
		
								$sql = "SELECT * FROM history_payment   Where  create_date2 = '". $daystart_load2 ."'  and major = '".$major."'  ";  
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
									
									

								$sql = " SELECT *  FROM list_chk_computer  where  bill_no != '' and  create_date2 = '". $daystart_load2 ."'  and major2 = '".$major."' Group By bill_no order by pk asc     ";  
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

									
									$sql = "SELECT * FROM add_price_payment_add   Where  create_date2 = '". $daystart_load2 ."'   
									and major = '".$major."'  ";  
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{  
										$price9 += $objResult["money1"];
										$price9 += $objResult["money2"];
										$price9 += $objResult["money3"];
										$price9 += $objResult["money4"];
										$price9 += $objResult["money5"];
										$price9 += $objResult["money6"];
										$price9 += $objResult["money7"];
										$price9 += $objResult["money8"];
										$price9 += $objResult["money9"];
									}
									
									
									
									$sql = "SELECT * FROM otherdata   Where  date_start2 = '". $daystart_load2 ."'   ";  
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{  
										if(!empty($objResult["price"])){ 
											$price8 += $objResult["price"]; 
										} 
									}
								?>
								<tr style="background-color: <?php echo $bg ?>; "> 
										
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 
										 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price2); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price7); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price6); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price3); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price4); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price5); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price9); ?>  </font></div></td> 
									 
								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price8); ?>  </font></div></td> 
									 

								</tr>  	 
							<?php } ?>
											
											
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

<?php
include('footer2.php');
?>