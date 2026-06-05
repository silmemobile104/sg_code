<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 
 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
	$data = "";
	$customer = "";
	$searchname = "";
	$producttype = "";
	$cod = "";
	$computer = "";
	$moneymonth = "";
	$moneycontact = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$appleid = "";
	$bank2 = "";
	$dataicloud = "";


	$status = "";
	if(empty($_GET["type"])){
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


		$searchname2 = date('d/m')."/".(date('Y'));
		if(empty($_GET["searchname2"])){

			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		}else{
			$searchname2 = $_GET["searchname2"];



			$cut = explode("/",$searchname2);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
		}
	}else{ 
		$searchname2 = date('m');
		if(empty($_GET["searchname2"])){

		}else{
			$searchname2 = $_GET["searchname2"];
		}

		$searchname = date('Y');
		if(empty($_GET["searchname"])){

		}else{
			$searchname = $_GET["searchname"];
		}
	}
	
	
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
	$searchname4 = "";
	if(empty($_GET["searchname4"])){
		
	}else{
		$searchname4 = $_GET["searchname4"];
	}

	$adminstatus = "";
	if(empty($_GET["adminstatus"])){
		
	}else{
		$adminstatus = $_GET["adminstatus"];
	}


		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			 
			<link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

			<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

			<script type="text/javascript"> 
			$(document).ready(function() {
				var d = new Date();
				d.setDate(d.getDate());
				var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear()); 

				$(".current").datepicker({    
				changeMonth: true, 
				changeYear: true, 
				dateFormat: 'dd/mm/yy', 
				isBuddhist: false, 
				defaultDate: toDay, 
				dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
				yearRange: "-5:+5",
					  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
					  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
					  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
					});
			}); 
			</script>
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เกรดลูกค้า   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เกรดลูกค้า   </font>   
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
                     <font size="4px" color="#000000">  เกรดลูกค้า   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?> 
                      		 
                       		 <div class="col-lg-12"> &nbsp; </div>
                           
                           
                           
                           <div class="col-md-4" style="margin-top: 15px;" > 
							    
												
							<?php											
								$perpage = 25;
								if (isset($_GET['page2'])) {
									$page = $_GET['page2']; 
								 } else {
									$page = 1;
								} 

								if (empty($_GET['page2'])) {
									 $page = 1;
								 }  			
								$start = ($page - 1) * $perpage;


								$addcode = ""; 
								$addcode2 = "";  
								$addcode3 = "";    
												
							    if($searchtype == ""){
								$addcode2 = "     "; 	 
								} 
								if($searchtype == "A"){
								$addcode2 = "  and a.totalno_payment  <= '0'  "; 	 	 
								}
								if($searchtype == "B"){
								$addcode2 = "  and a.totalno_payment > '0'  and  a.totalno_payment <= '30' "; 
								}
								if($searchtype == "C"){
								$addcode2 = "  and a.totalno_payment > '30'  and  a.totalno_payment <= '60' "; 
								}
								if($searchtype == "D"){
								$addcode2 = "  and a.totalno_payment > '60'  "; 
								}

													 
								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;
								$total_record= 0;
													 					  
								$txt2 = "#000";							   
							 ?>   
							</div>
                            
                           
                            <div class="col-lg-12"  align="left" style="  "  >  
                          		 <font color="<?php echo $txt2; ?>" size="2px" class="serif1" style=" font-size: 15px; " >  เกรด A ไม่เคยขาดส่ง  </font>
                          		 
                          		    &nbsp;   
                          		
                          		 <font color="<?php echo $txt2; ?>" size="2px" class="serif1" style=" font-size: 15px; " >   เกรด B ขาดส่ง 1 เดือน   </font>
                          		 
                          		    &nbsp;
                          		      

							     <font color="<?php echo $txt2; ?>" size="2px" class="serif1" style=" font-size: 15px; " >   เกรด C ขาดส่ง 2 เดือน   </font> 
							     
							      &nbsp;

							     <font color="<?php echo $txt2; ?>" size="2px" class="serif1" style=" font-size: 15px; " >   เกรด D ขาดส่งเลยสัญญา NPL      </font> 
                         
                           		  &nbsp; 
                          
                            </div> 
                            
                            
                            <div class="col-lg-12"  align="left" style=" margin-top: 5px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="1"     >
							    <thead> 
								<tr>
								<td width="3%" bgcolor="#006400" height="65px;" style="  "  ><div align="center" style=" margin-top: 10px; "> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    เกรด A       </font></div></td>    
								<td width="3%" bgcolor="#FF8C00" style=" "><div align="center" style=" margin-top: 10px; "> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">     เกรด B   </font></div></td>    
								<td width="3%" bgcolor="#FFD700" style="  "><div align="center" style=" margin-top: 10px; "> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เกรด C    </font></div></td>   
								<td width="3%" bgcolor="#FF0000" style=""><div align="center" style=" margin-top: 10px; "> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">     เกรด D     </font></div></td>  
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

							if (empty($_GET['page2'])) { 
								$i = 1;
							}else if (($_GET['page2'] == 1)) { 
								$i = 1;
							}else{

								$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
							}

							$sql2 = "  SELECT a.*, b.name, c.codeno FROM list_order  a
									left Join customer b On   a.customer = b.pk
									left Join product c On   c.pk = a.menu_id
									where a.bill_no != '' and a.closebill = 'เป็นหนี้'  and a.contactstatus = 'อนุมัติแล้ว'  
									order by a.pk asc   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$totalno_payment = $objResult2["totalno_payment"]; 
								$onoff = $objResult2["onoff"];  
								
								$checkgrad = $totalno_payment;
								$showgrad = "  ";
								$bg = "";
								
								
								if( $onoff == "NPL" ){
									$totalprice4++;
									
								}else{
									 
									if($checkgrad <= 0){ 
										$totalprice1++;
									}
									if($checkgrad >= 1 && $checkgrad <= 30){
										$totalprice2++;
									}
									if($checkgrad > 30 && $checkgrad <= 60){
										$totalprice3++;
									}
									if($checkgrad > 60){
										$totalprice4++;
									}
								}
							$i++; } 
	
	
							$bg = " #FFF ";
							?>
                           <tr style="  "> 
										  
							<td style=" height: 65px; background-color: <?php echo $bg ?>; "><div align="center" style=" margin-top: 10px; "><font size="3px" color="#000" style=" font-size: 15px; " >  <?php echo number_format(0+$totalprice1); ?>  สัญญา    </font></div></td>
							 
							<td style=" background-color: <?php echo $bg ?>; "><div align="center" style=" margin-top: 10px; "><font size="3px" color="#000" style=" font-size: 15px; " >  <?php echo number_format(0+$totalprice2); ?>   สัญญา  </font></div></td>
							
							<td style=" background-color: <?php echo $bg ?>; "><div align="center" style=" margin-top: 10px; "><font size="3px" color="#000" style=" font-size: 15px; " >  <?php echo number_format(0+$totalprice3); ?>   สัญญา  </font></div></td>
							
							<td style=" background-color: <?php echo $bg ?>; "><div align="center" style=" margin-top: 10px; "><font size="3px" color="#000" style=" font-size: 15px; " >  <?php echo number_format(0+$totalprice4); ?>   สัญญา  </font></div></td>
                             	
							</tr> 
                           </tbody>
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>