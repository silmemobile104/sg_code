<?php 
session_start(); 
include('../database.php');
 
	$searchname = "";
	if(!empty($_GET["startdate"])){
		$searchname = $_GET["startdate"];
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}  
	$searchname2 = "";
	if(!empty($_GET["endate"])){
		$searchname2 = $_GET["endate"];
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
		
	} 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'";
		
	} 
	$major_store = "";
	if(!empty($_GET["major_store"])){
		$major_store = $_GET["major_store"];
		$major_store = " and a.sendata = '" . $_GET["major_store"] . "'";
		
	} 	
?> 
	 <input type="hidden" id="major" value="<?php echo $_GET["major"]; ?>" >
	 <input type="hidden" id="major2" value="<?php echo $_GET["major_store"]; ?>" >
       
     <div class="table-responsive"  >
	 <table id="key_product"  class=" table    tablemobile  " border="0"     >
		
		<thead> 
				<tr>
									 <th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลือก    </font></div></th>  
									    
									 <th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    เลขที่รายการซ่อม  </font></div></th>   
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
									 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วัน เดือน ปี  </font></div></th>   
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลูกค้า     </font></div></th> 
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เบอร์โทร   </font></div></th>  
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  อาการซ่อม   </font></div></th>      
									      
												 
									 <th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									 <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าซ่อม   </font></div></th>
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
										   
 
										$contactstart = date("Y-m-d", strtotime($daystart_load));  
										$checkend = date("Y-m-d", strtotime($daystart_load2)); 
 
										$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
									
										$sql2 = " SELECT a.*,  b.name FROM mobile_restore  a 
											Inner Join store_cleam b On   a.sendata = b.pk
											 
											where a.bill_no != ''   and a.chk = ''      and a.statuspayment = 'ชำระเงินแล้ว'
											".$addcode.$addcode2.$major.$major_store."  
											order by a.pk desc   ";  
									
										/// echo $sql2;
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										}
											   
										$select_chk = "OFF";
										$sql_c = "SELECT * FROM list_chk_cleam where pkselect = '".$objResult2["pk"]."'   order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c);
											
										 echo $sql_c.""; 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$select_chk =  "ON";
										}
											 
											
										
										$data1 = "";
										$data2 = "";
										$data3 = "";
										$data4 = "";
										$data5 = 0;
										$sql_c = "SELECT * FROM mobile_restore where pk = '".$objResult2["pk"]."'   order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c); 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$data1 =  $objResult_c["bill_no"];
											$data2 =  $objResult_c["datesave2"];
											$data3 =  $objResult_c["customer"];
											$data4 =  $objResult_c["telphone"];
											$data5 =  $objResult_c["price1"];
										}
											 
											
										$note_cleam = $objResult2["typerestore"];
											 
											
											
											$hiiden1 = "";
											$hiiden2 = "display: none;";
											if($select_chk == "ON"){  
											$hiiden1 = " display: none; ";
											$hiiden2 = " display: none; ";
											}
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
										 
									     <?php if(empty($_GET["major_store"])){ }else{ ?>
									       
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
											function getRadioVaal(radio_val){
											//  document.getElementById("studen_select").value = ""+radio_val;
												document.getElementById("showdata"+radio_val).style.display = "none";
												document.getElementById("showdatacan"+radio_val).style.display = "block";  
												document.getElementById("savedatacan"+radio_val).checked  = true; 
												
												 var int1 = radio_val;
												 var int2 = document.getElementById("major").value; ;
												 var int3 = document.getElementById("major2").value; ;
												  
												/// alert(" save_select.php " + int1 + " // " + int2);
												$.ajax({
														type: "POST",
														url: "save_select_cleam.php",
														data: {data1:int1, data2:int2, data3:int3},
														success: function(result) {
 
 
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
														url: "save_select_cleam_cancel.php",
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
										
										 
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data1; ?> </font></div></td> 
										 
										 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($data2)." ".DateThai2($data2); ?> </font></div></td> 
										 
										 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data3; ?> </font></div></td> 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $data4; ?> </font></div></td> 
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $note_cleam; ?> </font></div></td>
										
										<td><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$data5); ?> </font></div></td>
										 
											 
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