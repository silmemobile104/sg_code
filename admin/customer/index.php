<?php
include('header.php');

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

	


?>
    <!-- loader -->
    <div id="loader">
        <img src="../logo.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader" style="background-color: #B21810; ">
        <div class="left">
            <a href="#" class="headerButton goBack" style="display: none; ">
                <img src="img/icback.png" style="width: 25px"> 
            </a>
        </div>
        <div class="pageTitle">
         <font color="#FFF">     ตรวจสอบยอดหนี้  </font>
        </div>
        <div class="right" style="display: none; ">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#addCardActionSheet">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->
 
				
    <div id="appCapsule" >
			<style>
				.grid-container {
				display: grid;
				grid-template-columns: 100%;  
				}
				.grid-container2 {
				display: grid;
				grid-template-columns: 50% 50% ;  
				}
				.grid-item {  
				padding-right: 3px; 
				}
			</style>
        	<div class="section inset mt-2">
            <div class=" " id="accordionExample1"  >
                  <style>
												.input-group.input-group-unstyled input.form-control {
														-webkit-border-radius: 4px;
														   -moz-border-radius: 4px;
																border-radius: 4px;
													}
													.input-group-unstyled .input-group-addon {
														border-radius: 4px;
														border: 0px;
														background-color: transparent;
													}
												</style> 
                   
                       
				 <div class="col-lg-12" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;  border-radius: 10px;  background-color: #FFFFFF; border: 1px solid #D7D3D2;" >	  
					<div style=" margin-top: 10px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 5px; padding-right: 5px; ">
						<font size="2px" color="#FFF"  style="font-size: 14px;" >  
						   
									<div class="grid-container"  >  
									<div class="grid-item"  align="left">   
										<font size="2px" color="#000"  style="font-size: 15px;" id="txtshow" >  <b>  ตรวจสอบยอดหนี้  </b> </font>
									</div> 
									</div>
									 
								 
								<div style="margin-top: 0px; " > &nbsp;  </div>
							    
								   <?php 
									$i = 1;

									$bg = "#F8FAFD"; 
									
									$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''  and a.customer = '".$_SESSION["UserID2"]."'  
											order by a.pk asc   ";   
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
												$totalprice4 = $objResult2["startdate"]; 
												$totalprice5 = $objResult2["endate"]; 
											
											
												$name_create = "-"; 
												$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
														$name_create =  $objResult["name"];
												}
											    
											
												$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
												$query_c = mysqli_query($objCon,$sql_c);
												while($objResult_c = mysqli_fetch_array($query_c))
												{ 
													$name_major =  $objResult_c["name"];
												}
											
											$discoount = 0;
											$discoountpaymentother = 0;
											$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
											$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
											$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
											$sql_p = "SELECT * FROM history_payment Where  
											bill_no = '". $objResult2["bill_no"]."' 
											and income != '' 
											and income != '0'   
											".$code_check2." ";   
											$query_p = mysqli_query($objCon,$sql_p); 
											while($objResult_p = mysqli_fetch_array($query_p))
											{  
												if(!empty($objResult_p["income"])){
												$discoount += $objResult_p["income"]; 
													
												}
												if(!empty($objResult_p["paymentother"])){
												$discoountpaymentother += $objResult_p["paymentother"]; 
												}  
											}	

											$allmoney = ($totalprice2*$totalprice3)-$discoount;
											
								?>			 
								 <div class="col-lg-12 " style="margin-bottom: 10px; border: 1px solid #E0E0E0; border-radius: 5px; background-color: <?php echo $bg; ?>;  " >
										<div class="row"  >
										<div class="col-lg-12 ">
										<div class="form-group" style="margin-top: 15px;"  >   
										 <div  style="margin-top: 10px;" >    
										 <font color="black" size="3px" class="serif" style="font-size: 14px;">  
											  
											     
											<font color="#323FD4">  หมายเลขบิล   </font> <?php echo $objResult2["bill_no"]; ?>
											   
											  &nbsp;
											    
											<a href="view_payment.php?bill_no=<?php echo $objResult2["bill_no"]; ?>" class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
											<font size="3px" color="Black" style=" font-size: 15px; " > 
											ดูข้อมูล    
											</font>  
											</a> 
											    
											   
											<div style="margin-top: -15px;"> &nbsp; </div>
											วันทีเริ่ม - วันที่สิ้นสุด 
											<div style="margin-top: -15px;"> &nbsp; </div>
											<?php echo DateThai($objResult2["startdate"])." ".DateThai2($objResult2["startdate"]); ?> -
											<?php echo DateThai($objResult2["endate"])." ".DateThai2($objResult2["endate"]); ?>
											
											<div style="margin-top: -15px;"> &nbsp; </div>
											<font color="#006400">  ราคาตั้งขาย   </font>   <?php echo  number_format(0+$objResult2["moneydata"]); ?>  บาท
											<div style="margin-top: -15px;"> &nbsp; </div>
											<font color="#FF8C00">  เงินดาวน์   </font>   <?php echo  number_format(0+$objResult2["moneydown"]); ?>  บาท
											<div style="margin-top: -15px;"> &nbsp; </div>
											<font color="#FF0000">  ยอดคงเหลือ   </font>   <?php echo  number_format(0+$allmoney); ?>  บาท
											<div style="margin-top: -10px;"> &nbsp; </div>
										  </font> 
										 </div>  
										</div>  
										</div> 
										</div> 
								 </div>  
						  	<?php } ?>
						  
						  
						  
						  
						  
								 
						</font>
					</div>  
				  </div>
       		                       
       		        
                </div>
            </div>
            <!-- * card block -->
  </div>
            
            
<?php
include('footer.php');
?>