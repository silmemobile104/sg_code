<?php 
session_start(); 
include('../database.php');
 
 
?> 
       
   <div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 1650px;"    > 
										<thead> 
											 <tr>
												<th width="5%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>  
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   หมายเลขเครื่อง  </font></div></th>    
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   สาขา  </font></div></th>       
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ชื่อรายการสินค้า  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยี้ห้อ     </font></div></th> 
												<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผู้จำหน่าย   </font></div></th>
												<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ประเภทสินค้า   </font></div></th>    
												<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล     </font></div></th>      
												     
												<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ     </font></div></th> 
												<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะ   </font></div></th>  
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
											
											
										$addcode = "    ";
										$addcode2 = "    ";
										    
										if(empty($_GET["major"])){ 
										}else{
											$addcode = " and major = '".$_GET["major"]."'  ";
										} 
										if(empty($_GET["major_store"])){ 
										}else{
											$addcode2 = " and typedata_2 = '".$_GET["major_store"]."'  ";
										} 
											
										$sql2 = " SELECT * FROM product 
											where name != '' and status = 'เครมสินค้า/รอสินค้า'
											".$addcode.$addcode2."  
											order by pk asc    ";  
											 
	 
										$sql2 = " SELECT a.* FROM list_chk_cleam_back  a 
											Inner Join product b On   a.pkselect = b.pk 
											 
											where  a.create_by = '".$_SESSION["UserID"]."'  and a.bill_no = ''
											order by a.pk asc   ";  
									
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											  
											
											
											$select_chk = "OFF"; 
											$select_chk =  "ON";
											
											
											
											$hiiden1 = "";
											$hiiden2 = "display: none;";
											if($select_chk == "ON"){  
											$hiiden1 = " display: none; ";
											$hiiden2 = " ";
											}
											
											
											
											  
												$name_create2 = "-"; 
												$name_create3 = "-"; 
												$name_create4 = "-"; 
												$name_create5 = "-"; 
												$name_create6 = "-"; 
												$name_create7 = "-"; 
												$showclose5 = "-"; 
												$name_major = "-"; 
												$name = "";
												$nstorerage = "";
												$codeno = "";
												$appleid = "";
												$password = "";
												$note = "";
												$price1 = "";
												$price2 = "";
												$totalprice = "";
												$sql = "SELECT * FROM product where pk = '".$objResult2["pkselect"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{  
													$nstorerage = $objResult["storerage"];
													$name = $objResult["name"];
													$codeno = $objResult["codeno"];
													$appleid = $objResult["appleid"];
													$password = $objResult["password"];
													$note = $objResult["note"];
													$price1 = $objResult["price1"];
													$price2 = $objResult["price2"];
													$totalprice = $objResult["totalprice"]; 
													 
														$sql_c = " SELECT * FROM major where pk = '".$objResult["major"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
															$name_major =  $objResult_c["name"];
														} 
											 
													
														$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata4 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata2 =  $objResult_c["name"];
														}
														$sql_c = "SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."'   order by pk asc  "; 
														$query_c = mysqli_query($objCon,$sql_c);
														while($objResult_c = mysqli_fetch_array($query_c))
														{ 
																$name_typedata3 =  $objResult_c["name"];
														}
 
														$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
														$query_chk = mysqli_query($objCon,$sql_chk); 
														while($objResult_chk = mysqli_fetch_array($query_chk))
														{
															$showclose5 = $objResult_chk["name"];   
														}

												}
											
											
										?>
										<tr style="background-color: <?php echo $bg ?>; " id="closdata<?php echo $objResult2["pk"]; ?>" >
										
										 
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
											  
												document.getElementById("showdata"+radio_val).style.display = "block";
												document.getElementById("showdatacan"+radio_val).style.display = "none";  
												
												 var int1 = radio_val;
												 var int2 = "";
												  
											 
														$.ajax({
														type: "POST",
														url: "save_select_cancel_cleamback2.php?pkselect="+int1,
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
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $codeno; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 
										
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata2; ?>  </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?>  </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata4; ?>    </font></div></td> 
										 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										    
										<a data-toggle="modal" data-target="#smallmodalthree<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
										</a>  
										
										
										 <!-- modal small -->
										<div class="modal fade" id="smallmodalthree<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
											<div class="modal-header">
											<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											</div>
											<div class="modal-body">
												  <div align="left" class="col-lg-12">   
												  <font size="3px" color="black">   
													ชื่อรายการสินค้า : <?php echo $name; ?> <br>
													หมายเลขเครื่อง : <?php echo $codeno; ?> <br>
													ประเภทสินค้า : <?php echo $name_typedata; ?> <br>
 
													ยี้ห้อ  : <?php echo $name_typedata2; ?> <br>
													สี  : <?php echo $name_typedata3; ?> <br>
													ความจุ : <?php echo $showclose5; ?> <br>
													Apple id : <?php echo $appleid; ?> <br>
													รหัสผ่าน : <?php echo $password; ?> <br>
													ประเภทสินค้า  : <?php echo $name_typedata4; ?> <br>
													
													หมายเหตุ : <?php echo $note; ?> <br>
													ราคาทุน : <?php echo number_format(0+$price1); ?> <br>
													ราคาขาย : <?php echo number_format(0+$price2); ?> <br>
													กำไร : <?php echo number_format(0+$totalprice); ?> <br>

												 </font> 
												 </div> 
											</div> 
											</div>
										</div>
										</div>
										
										
										
										</font></div></td> 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo   $note ; ?>   </font></div></td> 
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php  
										if($objResult2["status"] == "พร้อมจำหน่าย"){
											echo  " <font color = '#006400' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "เครมสินค้า/รอสินค้า"){
											echo  " <font color = '#FF0000' >  " . $objResult2["status"]  . " </font> "; 
											
										}else if($objResult2["status"] == "ไม่พร้อมจำหน่าย"){ 
											echo  " <font color = '#FF8C00' >  " . $objResult2["status"]  . " </font> "; 
											
										} 
										?>   
										</font></div></td> 
										 
										     
										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
  
										 
							</table>  
							</div>     
						 
						 