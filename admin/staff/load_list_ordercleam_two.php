<meta charset="utf-8">
<?php 
session_start(); 
include('../database.php');
 
	 
	 
	$searchname = "";
	if(!empty($_GET["month"])){
		$searchname = $_GET["month"];
		 
	}  
	$searchname2 = "";
	if(!empty($_GET["year"])){
		$searchname2 = $_GET["year"];
		 
		
	} 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'"; 
	}  
?> 
	 <input type="hidden" id="major" value="<?php echo $_GET["major"]; ?>" >
	 <input type="hidden" id="major2" value="<?php echo $_GET["major_store"]; ?>" >
       
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
				<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
				<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ     </font></div></th>    

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
						$addcode2 = " and  b.pk = '".$_GET["major_store"]."'  ";
					} 

					$sql2 = " SELECT a.*, b.pk, a.pk as newdatapl   FROM product a 
					Inner Join store b   On a.typedata_2 = b.pk 
					where a.status = 'ส่งคืนต้นทาง' ".$addcode2."
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


							$name_typedata = "";
							$sql = "SELECT * FROM store where pk = '".$objResult2["typedata_2"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_typedata =  $objResult["name"];
							}
							$name_typedata2 = "";
							$sql = "SELECT * FROM drop_typedata2 where pk = '".$objResult2["typedata2"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_typedata2 =  $objResult["name"];
							}
							$name_typedata3 = "";
							$sql = "SELECT * FROM drop_typecolor where pk = '".$objResult2["color"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_typedata3 =  $objResult["name"];
							}
							$name_typedata4 = "";
							$sql = "SELECT * FROM drop_typedata where pk = '".$objResult2["typedata"]."'    order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_typedata4 =  $objResult["name"];
							}


							$name_major = "";
							$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
							$query = mysqli_query($objCon,$sql);
							while($objResult = mysqli_fetch_array($query))
							{ 
								$name_major =  $objResult["name"];
							} 


							$showclose5 = "";
							$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult2["storerage"]."' ";   
							$query_chk = mysqli_query($objCon,$sql_chk); 
							while($objResult_chk = mysqli_fetch_array($query_chk))
							{
								$showclose5 = $objResult_chk["name"];   
							}



						$select_chk = "OFF";
						$sql_c = "SELECT * FROM list_chk_cleam_back_two where pkselect = '".$objResult2["pk"]."'  and status = 'ส่งคืนต้นทาง'  order by pk asc  "; 
						$query_c = mysqli_query($objCon,$sql_c);
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
					<tr style="background-color: <?php echo $bg ?>;  <?php echo $hiiden1; ?> "  id="closdata<?php echo $objResult2["pk"]; ?>" >


					  <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

				 		<input type="hidden" id="savedata<?php echo $i; ?>" value="<?php echo $objResult2["newdatapl"]; ?>" >
					 <?php if(empty($_GET["major_store"])){ }else{ ?>

						<div id="showdata<?php echo $i; ?>" style="<?php echo $hiiden1; ?>" > 
						<input type="checkbox" id="savedata<?php echo $i; ?>" name="savedata" value="<?php echo $i; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaal(this.value)"  > 
						</div> 

						<div id="showdatacan<?php echo $i; ?>" style="<?php echo $hiiden2; ?>"  > 
						<input type="checkbox" id="savedatacan<?php echo $i; ?>" name="savedatacan" value="<?php echo $i; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked  > 
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
						//  document.getElementById("studen_select").value = ""+radio_val;
							document.getElementById("showdata"+radio_val).style.display = "none";
							document.getElementById("showdatacan"+radio_val).style.display = "block";  
							document.getElementById("savedatacan"+radio_val).checked  = true; 

							 var int1 = document.getElementById("savedata"+radio_val).value;
							 var int2 = document.getElementById("major").value; 
							 var int3 = document.getElementById("major2").value;  
 
							
							/// alert(" save_select_cleamback_two.php " + int1 + " // " + int2 + " // " + int3 );
							$.ajax({
									type: "POST",
									url: "save_select_cleamback_two.php",
									data: {data1:int1, data2:int2, data3:int3},
									success: function(result) {

									document.getElementById("closdata"+radio_val).style.display = "none";  

									}
								});

						}
						function getRadioVaalcan(radio_val){
						 //  document.getElementById("studen_select").value = ""+radio_val;

							document.getElementById("showdata"+radio_val).style.display = "block";
							document.getElementById("showdatacan"+radio_val).style.display = "none";  

							 var int1 = radio_val;
							 var int2 = "";

							// alert(" save_select.php " + int1 + " // " + int2);
							$.ajax({
									type: "POST",
									url: "save_select_cancel_cleamback_two.php",
									data: {data1:int1, data2:int2},
									success: function(result) {

									document.getElementById("showdata"+radio_val).style.display = "block";
									document.getElementById("showdatacan"+radio_val).style.display = "none";  
									document.getElementById("savedata"+radio_val).checked  = false; 


									}
								});
						}
						</script> 

					 <?php } ?>
					</font></div></td> 




					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codeno"]; ?>  </font></div></td> 


					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_major; ?> </font></div></td> 


					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td> 


					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata2; ?>  </font></div></td> 

					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata; ?>  </font></div></td> 


					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_typedata4; ?>    </font></div></td> 


					<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

					<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
					<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
					</a>  


					 <!-- modal small -->
					<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
								ชื่อรายการสินค้า : <?php echo $objResult2["name"]; ?> <br>
								หมายเลขเครื่อง : <?php echo $objResult2["codeno"]; ?> <br>
								ประเภทสินค้า : <?php echo $name_typedata; ?> <br>

								ยี้ห้อ  : <?php echo $name_typedata2; ?> <br>
								สี  : <?php echo $name_typedata3; ?> <br>
								ความจุ : <?php echo $showclose5; ?> <br>
								Apple id : <?php echo $objResult2["appleid"]; ?> <br>
								รหัสผ่าน : <?php echo $objResult2["password"]; ?> <br>
								ประเภทสินค้า  : <?php echo $name_typedata4; ?> <br>

								หมายเหตุ : <?php echo $objResult2["note"]; ?> <br>
								ราคาทุน : <?php echo number_format(0+$objResult2["price1"]); ?> <br>
								ราคาขาย : <?php echo number_format(0+$objResult2["price2"]); ?> <br>
								กำไร : <?php echo number_format(0+$objResult2["totalprice"]); ?> <br>

							 </font> 
							 </div> 
						</div> 
						</div>
					</div>
					</div>



					</font></div></td> 


				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

					<a data-toggle="modal" data-target="#smallmodaltwo<?php echo $i; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
					<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก  </font>
					</a>  


					 <!-- modal small -->
					<div class="modal fade" id="smallmodaltwo<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
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
								<?php
									$ic = 1;
									$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'   
									order by pk desc  ";   
									$query_v = mysqli_query($objCon,$sql_v);
									while($objResult_v = mysqli_fetch_array($query_v))
									{
											$memberlast1 = "";
											$memberlast2 = "";
											$memberlast3 = "";

											$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
											$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
											while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
											{
												$memberlast1 = $objResult_getstaff["name"];  
											} 

											$memberlast2 = $objResult_v["create_date2"];
											$memberlast3 = $objResult_v["create_time"];

											echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
												" <br> <font color = 'red' > ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2) ." เวลา " . $memberlast3 . " </font>   <Br>
												-------------------------- <Br> ";

										$ic++;
									} 
									?> 
							 </font> 
							 </div> 
						</div> 
						</div>
					</div>
					</div>



					</font></div></td> 
										 
				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo   $objResult2["note"] ; ?>   </font></div></td> 

				<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php  
				if($objResult2["status"] == "พร้อมจำหน่าย"){
					echo  " <font color = '#006400' >  " . $objResult2["status"]  . " </font> "; 

				}else if($objResult2["status"] == "เครมสินค้า/รอสินค้า"){
					echo  " <font color = '#FF0000' >  " . $objResult2["status"]  . " </font> "; 

				}else if($objResult2["status"] == "ไม่พร้อมจำหน่าย"){ 
					echo  " <font color = '#FF8C00' >  " . $objResult2["status"]  . " </font> "; 

				}else if($objResult2["status"] == "ส่งคืนต้นทาง"){ 
					echo  " <font color = '#FF8C00' >  " . $objResult2["status"]  . " </font> "; 

				} 
				?>   
				</font></div></td> 




				</tr>  
				<?php $i++;  } ?>
			</tbody>
 
	</table>  
	</div>
						 
		
  <?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>   				 