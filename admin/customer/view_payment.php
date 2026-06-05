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

	
			$bill_no = $_GET["bill_no"]; 
			$daytotal = 0; 
			$pricemoney = 0; 
			$money = 0; 
			$dayprice = 0; 
			$totalprice1 = 0; 
			$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."'  "; 
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{   
				$showstart = $objResult["startdate"]; 
				$showend = $objResult["endate"]; 
				$customer = $objResult["customer"]; 
				$closebill = $objResult["closebill"]; 
				$dayprice = $objResult["dayprice"]; 
				$daytotal = $objResult["daytotal"]-1; 
				$daytotal_end = $objResult["daytotal"]; 
				$dayprice_end = $objResult["dayprice"]; 
				$totalprice1 = $objResult["dayprice"]*$objResult["daytotal"]; 
			}


			$discoount = 0;
			$discoountpaymentother = 0;
			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
			$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
			$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			$sql_p = "SELECT * FROM history_payment Where  
			bill_no = '". $bill_no ."' 
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

			$allmoney = $totalprice1-$discoount;



 			$sql = "SELECT * FROM customer Where  pk = '". $customer ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$name = $objResult["name"]; 
				 
			} 

			$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ 
			$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 

			if($closebill == "หมดหนี้"){
				$code_check2 = "";
			}else{ 
				$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
			} 
 			 
 
		 $cal_psercent = ( $discoount / $totalprice1 ) * 100;
?>
    <!-- loader -->
    <div id="loader">
        <img src="../logo.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader" style="background-color: #B21810; ">
        <div class="left">
            <a href="#" class="headerButton goBack"  >
                <img src="img/icback2.png" style="width: 10px"> 
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
                   
                        
       		       <div class="col-lg-12" style="margin-top: 10px; margin-left: 5px; margin-right: 5px;  border-radius: 10px; background-image: url('img/gg2.png'); background-repeat: no-repeat;   " >	  
					<div style=" margin-top: 10px; margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px; padding-left: 5px; padding-right: 5px; ">
						<font size="2px" color="#FFF"  style="font-size: 14px;" >  
						  
									 
									<div class="grid-container"  >   
									<div class="grid-item" align="left">  
										<font size="2px" color="#FFF"  style="font-size: 16px;" > 
										<b>
											 
										  เลขที่สัญญา <?php echo $bill_no; ?> 
										  
										</b>
										  </font>
									</div>
									</div>
									  
								  
									 
									<div class="grid-container"  >   
									<div class="grid-item" align="left">  
										<font size="2px" color="#FFF"  style="font-size: 14px;" > 
										
										  <hr>
										  
										 </font>
									</div>
									</div>
							   
									<div class="grid-container2"  >   
									<div class="grid-item" align="left">  
										<font size="2px" color="#FFF"  style="font-size: 15px;" > 
										
										 ยอดหนี้  <br> <?php echo number_format(0+$totalprice1); ?>
 
										  
										  </font>
									</div>
									<div class="grid-item" align="right">  
										<font size="2px" color="#FFF"  style="font-size: 15px;" > 
										
										ยอดหนี้คงเหลือ <br> <?php echo number_format(0+$allmoney); ?>
 
										  
										  </font>
									</div>
									</div>
									
									
									
									 
									<div class="grid-container"   style=" margin-top: 15px; "  >   
									<div class="grid-item" align="left" style=" border: 1px solid #707070; background-color: #FFFFFF; ">  
										<font size="2px" color="#FFF"  style="font-size: 14px;  " > 
										
										 <div class="progress-bar bg-default" role="progressbar" style="width: <?php echo $cal_psercent; ?>%; background-color: #DB3F37; border: 1px solid #707070;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										  
										 </font>
									</div>
									</div>
									
									 
									<div class="grid-container2" style=" margin-top: 15px; "  >   
									<div class="grid-item" align="left">  
										<font size="2px" color="#FFF"  style="font-size: 15px;" > 
										
										 วันทีเริ่มสัญญา  <br> <?php echo DateThai($showstart)." ".DateThai2($showstart); ?> 
 
										  
										  </font>
									</div>
									<div class="grid-item" align="right">  
										<font size="2px" color="#FFF"  style="font-size: 15px;" > 
										
										วันที่สิ้นสุดสัญญา <br> <?php echo DateThai($showend)." ".DateThai2($showend); ?> 
 
										  
										  </font>
									</div>
									</div>
						</font>
					</div>  
				  </div>  
       		                  
       		       	
							    		 
					<div class="col-lg-12 "   >
					<?php 
								$i = 1;

								$bg = "#F8FAFD"; 
									
								$bill_no = $_GET["bill_no"];
								$countall = 0;
								$moneyday = 0; 
								$money1 = 0; 
								$money2 = 0; 
								$money3 = 0; 
								$paytotatab = 0;
 
								$totalall =  $totalprice1 ;    
								$countall =  $totalprice1 ; 
							
								$contactstart = date("Y-m-d", strtotime($showstart));  /// วันที่เริ่มเก็บ  
								$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
								$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
										   
													    
								$sql2 = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'  ".$code_check2."   order by pk asc ";  
								$query2 = mysqli_query($objCon,$sql2);
								while($objResult2 = mysqli_fetch_array($query2))
								{     
									$countalldata = 0;
									$sql = "SELECT * FROM history_payment where bill_no = '".$_GET["bill_no"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$countalldata++; 
									}
 
									$namestaff = "";
									$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   "; 
									$query = mysqli_query($objCon,$sql); 
									while($objResult = mysqli_fetch_array($query))
									{ 
										$namestaff = $objResult["name"]; 
									}
 
										$money1 = $objResult2["income"]; 
										$money2 = $objResult2["paymentother"];  
										$money3 = $objResult2["money"];  


										if(!empty($objResult2["income"])){ 
											$totalall += (-$objResult2["income"]);
										} 
											$orderdata = $objResult2["orderdata"]+1;

									
									
									if($bg == "#FFF"){ 
										$bg = "#F8FAFD"; 
									}else{  
										$bg = "#FFF"; 
									}
											 
								?>	 
					<div class="col-lg-12 " style="margin-bottom: 10px; border: 1px solid #B21810; border-radius: 5px; background-color: <?php echo $bg; ?>;  " >
					<div class="row"  >
					<div class="col-lg-12 ">
					<div class="form-group" style="margin-top: 15px;"  >   
					 <div  style="margin-top: 10px;" align="left" >    
					 <font color="black" size="3px" class="serif" style="font-size: 15px;">  
											     
						<font color="#000">  
									   
							ค่างวดที่ <?php echo $i;?> 
							
							วันที่ <?php echo DateThai($objResult2["create_date2"])." ".DateThai2($objResult2["create_date2"])  ;?>
							
							<div>  </div>
							ยอดชำระ <?php echo number_format(0+$objResult2["money"]);?>   
							&nbsp;
							<?php 
							if( $objResult2["money"] <= $objResult2["income"]){
								echo " <font color='#006400'>  สถานะชำระแล้ว  </font> ";
							}else{
								echo " <font color='#FF0000'>  ค้างชำระ  </font> ";
							} 
							?>   		     
							 &nbsp;
							<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>" style="cursor: pointer; "  > 		     
							หลักฐานชำระเงิน 
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
											<div class="col-lg-12" align="left"   >   
											<font size="3px" color="black" style="font-size: 14px;">   
												<?php 
												$sql = "SELECT * FROM slip_data Where  round = '". $objResult2["pk"]."' and  bill_no = '". $objResult2["bill_no"] ."' 
												order by pk desc limit 1";   
												$query = mysqli_query($objCon,$sql); 
												while($objResult = mysqli_fetch_array($query))
												{  
													$img = $objResult["img"];  
												}  
												?>
												<?php if(!empty($img)){ ?>
												<img src="../img/<?php echo $img; ?>" style="width: 100%; " >
												<?php } ?>
											</font> 
											</div> 
											</div> 
											</div>
										</div>
										</div>
										<!-- end modal small -->   
										     
							</font>  
									 	 
						 </font> 
						</div>  
						</div>  
						</div> 
					</div> 
					</div>  
					<?php $i++; } ?>
						  
					</div>  
						  
						  
						 
       		        
                </div>
            </div>
            <!-- * card block -->
  </div>
            
            
<?php
include('footer2.php');
?>