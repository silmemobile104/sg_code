<?php 
session_start();
$_SESSION["load"] = "1";
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
									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
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
 

 
	$page2 = "";
	if(empty($_GET["page2"])){
		
	}else{
		$page2 = $_GET["page2"];
	} 
	 				
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
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
				yearRange: "-10:+10",
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
                     <font size="4px" color="#000000">  สรุปรายละเอียดบัญชีลูกหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สรุปรายละเอียดบัญชีลูกหนี้   </font>   
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
                     <font size="4px" color="#FF0000">  ***** รายการอัพเดต ยอดสรุปทุกวันอาทิตย์ สามารถดูยอดได้ในวันจันทร์ เป็นต้นไป *****    </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                       
						<form action="reportnew3.php" method="get">
							 
					   <div   class="col-lg-4"  align="left"  > 
					   <table width="100%">
						<tr> 
							<td width="25%"> 
							<font color="black" size="3px" class="serif">  วันที่เริ่ม  </font>
 
							<div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							<input class="form-control current   "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>" readonly       autocomplete="off"  >

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none; ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>     
							<td width="1%">&nbsp;   </td> 
							<td width="25%"> 
							<font color="black" size="3px" class="serif"> สิ้นสุด  </font>
 
							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							<input class="form-control  current  "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"   readonly    autocomplete="off"  >

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="submit"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>  
						</tr>
					   </table>  
					   </div>
                         
						</form>
                         
                          
                          
                        <?php 
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
													 
									  
							$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
							$checkend   = date("Y-m-d", strtotime($daystart_load2)); 
	 						$addcode = "  and  create_date2 BETWEEN '".$checkend."' AND '".$checkend."'  "; 
													 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'เงินลงทุน'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price1 += $objResult2["price"];
							}
										
													 			 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'เงินทุนสะสม'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price2 += $objResult2["price"];
							}
													 			 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ยอดสิ้นเชื่อทั้งหมด'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price3 += $objResult2["price"];
							}
													 			 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ยอดสิ้นเชื่อที่ชำระแล้ว'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price4 += $objResult2["price"];
							}
													 			 
													 
							$sql2 = " SELECT *  FROM report_reportnew3  
							where price != '' and title = 'ยอดสิ้นเชื่อที่ค้างชำระ'   ".$addcode."
							order by create_date2 asc, pk asc    ";  

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								$price5 += $objResult2["price"];
							}
													 
													 
						?>
                  
                        <style>  
						.small-box {
						  border-radius: 10px;
						  box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
						  display: block;
						  margin-bottom: 20px;
						  position: relative;
						}

						.small-box > .inner {
						  padding: 10px;
						}

						.small-box > .small-box-footer {
						  background: rgba(0, 0, 0, 0.1);
						  color: rgba(255, 255, 255, 0.8);
						  display: block;
						  padding: 3px 0;
						  position: relative;
						  text-align: center;
						  text-decoration: none; 
						}

						.small-box > .small-box-footer:hover {
						  background: rgba(0, 0, 0, 0.15);
						  color: #ffffff;
						}

						.small-box h3 {
						  font-size: 2.2rem;
						  font-weight: bold;
						  margin: 0 0 10px 0;
						  padding: 0; 
						}
 
						.small-box .icon {
						  color: #FFF;
						  z-index: 0;
						}

						.small-box .icon > img {
						  font-size: 90px;
						  position: absolute;
						  right: 15px;
						  top: 15px;
						  transition: all 0.3s linear;
						}

						.small-box .icon > img.fa, .small-box .icon > img.fas, .small-box .icon > img.far, .small-box .icon > img.fab, .small-box .icon > img.glyphicon, .small-box .icon > img.ion {
						  font-size: 70px;
						  top: 20px;
						} 
					</style>
                        
						<div class=" col-lg-12 "  align="left" >  <hr>   </div>
                        
                         <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #2E8B57; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> เงินลงทุน </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price1);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
                         
                         <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #A0522D; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> เงินทุนสะสม </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price2);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
                         
                         <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #FF8C00; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดสิ้นเชื่อทั้งหมด </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price3);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
                         
                         <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #5B86E5; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดสิ้นเชื่อที่ชำระแล้ว </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price4);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
							  </div>
							  </div> 
							</div>
							</div>
                          
                           
                           <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #006400; ">
							  <div class="row">
							  <div class=" col-md-9" style="border: 0px solid #000; " > 
							  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
								<font color="white" style="font-size: 14px;"> ยอดสิ้นเชื่อที่ค้างชำระ </font>  
							  </p>
							  <p style="padding-left: 10px; padding-right: 5px;  "> 
								<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$price5);  ?> </font>  
							  </p>
							  </div>
							  <div class="  col-md-2 " align="right">
							  <p style="   padding-top: 10px;"> 
								<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
							  </p>
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