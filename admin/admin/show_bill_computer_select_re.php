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



		$sql2 = " SELECT  a.*, b.name, c.typedata_2, d.bill_no FROM list_order  a
			Inner Join customer b On   a.customer = b.pk
			Inner Join product c On   a.menu_id = c.pk
			Inner Join list_chk_computer d On   a.pk = d.pkselect

			where d.bill_no != ''  and  d.bill_no = '".$_GET["bill_no"]."'
			order by d.pk asc   ";  

		///  echo $sql2;
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
			<input type="checkbox" id="savedatacan<?php echo $objResult2["pk"]; ?>" name="savedatacan" value="<?php echo $objResult2["pk"]; ?>"  style=" width: 20px; height: 20px; border: 1px solid #83161C; "   onclick="getRadioVaalcan(this.value)" checked    >

			</div> 

			<input type="hidden" id="savebill" value="<?php echo $objResult2["bill_no"]; ?>" >
			<input type="hidden" id="delpk<?php echo $objResult2["pk"]; ?>" value="<?php echo $objResult2["pk"]; ?>" >

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
				// document.getElementById("showdata"+radio_val).style.display = "block";
				// document.getElementById("showdatacan"+radio_val).style.display = "none";  

				document.getElementById("savedatacan"+radio_val).checked = true ;
				
				
				
				 var int1 = radio_val;
				 var int2 = document.getElementById("savebill").value;

				// alert(" save_select.php " + int1 + " // " + int2);
				/*
				$.ajax({
						type: "POST",
						url: "save_select_cancel_re.php",
						data: {data1:int1, data2:int2},
						success: function(result) {

						document.getElementById("showdata"+radio_val).style.display = "block";
						document.getElementById("closdata"+radio_val).style.display = "none";  
						document.getElementById("showdatacan"+radio_val).style.display = "none";  
						document.getElementById("savedata"+radio_val).checked  = false; 


						}
					});
					*/
				  
				 $(document).ready(function(){ 
					$('#Savepaymenttwo' + radio_val).modal('show'); //myModal is ID of div
				 });   
			}
				
			function
			SaveconfrimNomoney<?php echo $objResult2["pk"]; ?>( ) { 

				 var int1 = document.getElementById("delpk<?php echo $objResult2["pk"]; ?>").value; ///   
				 var int2 = document.getElementById("savebill").value;
								
				 
				 
				$.ajax({
						type: "POST",
						url: "save_select_cancel_re.php",
						data: {data1:int1, data2:int2},
						success: function(result) {

						  document.getElementById("closdata<?php echo $objResult2["pk"]; ?>").style.display = "none";  

						}
					}); 
				
				
				
				$(document).ready(function(){ 
				$('#Savepaymenttwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
				});   
			}
											
					
			function
			SaveconfrimcancelNomoney<?php echo $objResult2["pk"]; ?>( ) { 
 
				$(document).ready(function(){ 
				$('#Savepaymenttwo<?php echo $objResult2["pk"]; ?>').modal('hide'); //myModal is ID of div
				});   
			}						
		  </script> 

												
			<!-- modal small -->
			<div class="modal fade" id="Savepaymenttwo<?php echo $objResult2["pk"]; ?>" tabindex="-2" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document" style="margin-top: 100px;">
			<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="smallmodalLabel"> กรุณายืนยันทำรายการ   </h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
			<div class="col-lg-12" align="left"   >   
			<font size="3px" color="black" style="font-size: 14px;">   
 

			<div class="col-lg-12" align="left">  

			 <font style="font-size: 14px; " color="#FF0000">

				หมายเหตุ  <br> 
				กรุณายืนยันการลบ หากลบแล้วจะไม่สามารถกู้กลับมาได้อีก

			 </font>

			 </div> 


			<div class="col-lg-12" style="margin-top: 15px;" align="center">   

				 <a onClick="SaveconfrimNomoney<?php echo $objResult2["pk"]; ?>()" >
				 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #F77369; border-radius: 5px; width: 100px; height: 40px; border-color: #F77369;  "      > <font color="#FFF" size="2px" class="serif1" style=" font-size: 13px; " >  ลบรายการ   </font> </button>  </a>

				 <a onClick="SaveconfrimcancelNomoney<?php echo $objResult2["pk"]; ?>()" >
				 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 110px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;   "  > <font color="#000000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิกไม่ลบ  </font> </button>    </a>

			 </div>

			</font> 
			</div>  
			</div> 
			</div> 
			</div> 
			</div> 
												

		</font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo $name_create7; ?>   </font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["cod"]; ?> </font></div></td> 


		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create5; ?> </font></div></td> 


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
						 
						 