<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


	
	
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


	 
	 $data1 = ""; 
	 $data2 = ""; 
	 $data3 = ""; 
	 $data4 = ""; 
	 $data5 = ""; 
	 $data6 = ""; 

 

	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}

	$_SESSION["loadbill"] = $_GET["bill_no"]
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  แก้ไขออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง    </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > แก้ไขออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง     </font>   
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
                     <font size="4px" color="#000000">  แก้ไขออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
                          <div class=" col-lg-6 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" >  
					    		<a href="list_computer.php">   
					    		<div  >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="list_computer_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขบิลใบเสร็จ    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                      	  
                      	  
                      	  
                   		<input type="hidden" id="typeselect" value="">
                   		<input type="hidden" id="onoff" value="">
                   		<input type="hidden" id="bill_no" value="<?php echo $_GET["bill_no"]; ?>">
                   	  
                     	  
                    	 <script>  
							$( document ).ready(function() {   
								 Getsearchdata2();    
							});
							 
						  	 function Getsearchdata2() 
							 {  
								 
							  var bill_no = document.getElementById("bill_no").value;  
								 
								$.ajax({
								type: "GET",
								url: "show_bill_computer_select_re.php?bill_no="+bill_no,
								success: function(result) {
									$('#showtabledataselect').html(result);
								}
								});	
								 
							 }
							  
							 setInterval(function(){  
								/// Getsearchdata2();  
							 }, 1100);
						  </script>
                   	
                   	 
                   		 <!--- รายการที่เลือกแล้ว --->
                     	 <div  id="allselect">
                     	 
                     	    <?php
							$colorbtns1s = " background-color: #6495ED; border-radius: 5px;  height: 40px; border-color: #6495ED; margin-top: 15px; "; 

							$txtcolor1 = "#000000"; 
							$txtcolor2 = "#FFF"; 
  			 
							?>	 
                     	    <div class="col-lg-12"  align="left"  > 
                    	  
							<font color="#000" size="3px" class="serif1"  > 
							    รายการบิลใบเสร็จหมายเลข   <?php echo $_GET["bill_no"]; ?>  
							</font>   
						    </div>
                    	    
                    	    
                     	    <div class="col-lg-12"  align="left"  > 
                    	  
							<font color="red" size="3px" class="serif1"  > 
						      **** หมายเหตุ 
							    <br>
							    1. การกด Checkbox ออก หมายถึงการลบรายการนั้นออกจาก บิลใบเสร็จนั้นๆ มีผลทันที่ที่ติ๊กรายการออก   
							    <br>
							    2. หากทำการ ติ๊ก ลบรายการออกหมด หมายเลขบิลนี้ จะไม่ถูกแสดงในหน้ารายการแก้ไขบิลอีก   
							</font>   
						    </div>
                     	    
                     	     
                      	    <div class="col-lg-12"  align="left"  > 
                    	  
                    	  		<a href="list_computer_edit.php">
                    	  			 
								<button type="button"  class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " onClick="Backselect()" > <font color="<?php echo $txtcolor2; ?>" size="3px" class="serif1"  >   ย้อนกลับไปหน้ารายการแก้ไขบิล   </font> </button>  
								    
                    	  		</a>
						    </div>
                     	 
                     	 	<div  class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
                    		<div  id="showtabledataselect"   >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
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
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สี     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>   
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์     </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></th>    
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวน %     </font></div></th>     
									<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน   </font></div></th>  
								 </tr>
							 </thead>  
										 
									 
							</table>  
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>