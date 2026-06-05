<?php 
session_start(); 
include('../database.php');
 
 
?> 
       
     <div class="table-responsive"  >
	 <table id="key_product"  class=" table    tablemobile  " border="0"     >
		<thead> 
								  <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลบ    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อรายการสินค้า     </font></div></th> 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าส่งของ   </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ความจุ     </font></div></th>   
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน %     </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>     
												 
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  NO   </font></div></th>  
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
   
												
										$addcode = "";
										$addcode2 = "";
										  
												
									
										$sql2 = " SELECT a.*, b.name, c.typedata_2, d.bill_no FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join product c On   a.menu_id = c.pk
											Inner Join list_chk_computer d On   a.pk = d.pkselect
											 
											where a.bill_no != ''  and d.create_by = '".$_SESSION["UserID"]."'  and d.bill_no = ''
											order by a.pk asc   ";  
									
										/// echo $sql2;
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
												$name_create6 = "-"; 
												$name_create7 = "-"; 
												$showclose5 = "-"; 
												$name_major = "-"; 
												$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
													$name_create5 = $objResult["storerage"];
													$name_create7 = $objResult["name"];
													
													
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
														$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create4 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_create6 =  $objResult_c["name"];
														}
 
														$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
														$query_chk = mysqli_query($objCon,$sql_chk); 
														while($objResult_chk = mysqli_fetch_array($query_chk))
														{
															$showclose5 = $objResult_chk["name"];   
														}

												}
											
											
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$name_major =  $objResult_c["name"];
												}	
											
											 
											
												$select_chk = "OFF";
												$sql_c = "SELECT * FROM list_chk_computer where pkselect = '".$objResult2["pk"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
											
												////echo $sql_c."";
											
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$select_chk =  "ON";
												}
											
											
											$hiiden1 = "";
											$hiiden2 = "display: none;";
											if($select_chk == "ON"){  
											$hiiden1 = " display: none; ";
											$hiiden2 = " ";
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; " id="closdata<?php echo $objResult2["pk"]; ?>"> 
										
											<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
									     
									    	<div id="showdata<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden1; ?>" > 
										    <input type="checkbox" id="savedata<?php echo $objResult2["pk"]; ?>" name="savedata" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  >
										    
									    	</div> 
										  
									    	<div id="showdatacan<?php echo $objResult2["pk"]; ?>" style="<?php echo $hiiden2; ?>"  > 
										    <input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked  >
										    
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
											 
											function getRadioVaalcan(radio_val){
											 //  document.getElementById("studen_select").value = ""+radio_val;
												
												document.getElementById("showdata"+radio_val).style.display = "block";
												document.getElementById("showdatacan"+radio_val).style.display = "none";  
												
												 var int1 = radio_val;
												 var int2 = "";
												  
												// alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_cancel.php",
														data: {data1:int1, data2:int2},
														success: function(result) {
 
														document.getElementById("showdata"+radio_val).style.display = "block";
														document.getElementById("closdata"+radio_val).style.display = "none";  
														document.getElementById("showdatacan"+radio_val).style.display = "none";  
														document.getElementById("savedata"+radio_val).checked  = false; 
																 
 
														}
													});
											}
										  </script> 
										  
										   
										</font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create7; ?>   </font></div></td> 
										 
										    
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["cod"]; ?> </font></div></td> 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $showclose5; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create6; ?> </font></div></td> 
										
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["priceorder"]); ?> </font></div></td> 
										 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["moneydown"]); ?> </font></div></td> 
										 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["moneycontact"]); ?> </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["percent"]); ?> % </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["computer2"]); ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >   NO  </font></div></td> 
										 
											 
										</tr>  
										<?php $i++;  } ?>
	  </tbody> 
	 </table>  
	 </div>  
						 
						 