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
                     <font size="4px" color="#000000">  สรุปรายละเอียดบัญชีลูกหนี้   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
					   <div   class="col-lg-7"  align="left"  > 
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
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>      
							<td width="1%">&nbsp;   </td>  
 							<td width="30%"> 
							<font color="black" size="3px" class="serif">  สถานะ  </font>
							<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
 							<select class="form-control  myselect" id="searchname3" name="searchname3"    style="background-color: #FFF;    color: #000;  border: 1px solid #C9C9C9;  height: 40px; width: 100%; " onchange='Loadtable()'      > 
								<?php if(empty($searchname3)){ ?>
								<option value=""> แสดงทั้งหมด  </option> 
								<?php } ?>

								<?php 
								$sql = " SELECT * FROM drop_report1   where name = '".$searchname3."'    order by pk asc    "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
								<?php 
								$sql = " SELECT * FROM drop_report1   where name != '".$searchname3."'    order by pk asc   "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>   
								<?php if(!empty($searchname3)){ ?>
								<option value=""> แสดงทั้งหมด  </option> 
								<?php } ?>
								</select>
							</div>
							   
							</td>
					
					
						</tr>
					   </table>  
					   </div>
                         
                         
                         
					   <div   class="col-lg-9"  align="left"  > 
					   <table width="100%">
						<tr> 
							<td width="25%">  
							<font color="black" size="3px" class="serif">  ค้นหารายชื่อลูกค้า/รหัสลูกค้า  </font>
 
							<div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							<input class="form-control     "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="customername" name="customername" value="<?php echo $customername; ?>"         autocomplete="off"  >

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px;   ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</td>   
							<td width="1%">&nbsp;  </td>   
							<td width="80%" > 
					   			<div   class="col-lg-12"  align="left" id="showsearch2"  > 
								  <button class="btn btn-sm  " style="  background-color: #001470; border-radius: 5px;  height: 40px;  border: 1px solid  #001470;  margin-top: 15px; " type="button"   >
										<font color="#FFF" > จำนวน  0  คน </font>
								  </button>

								  <button class="btn btn-sm  " style="  background-color: #001470; border-radius: 5px;   height: 40px;  border: 1px solid  #001470;  margin-top: 15px;  " type="button"    >
										<font color="#FFF" >  พิมพ์เอกสาร </font>
								  </button>
					  			</div>
							</td>   
						</tr>
					   </table>  
					   </div>
                          
                           
					  <input type="hidden" id="totaldata" value="">
					  <input type="hidden" id="page2" value="<?php echo $page2; ?>">
                  
                          
                          
                     <script>
						 
						$( document ).ready(function() {   
							Loadtable();   
						});
							  
						  
						function Loadtable()
						{      
							
							$('#loading_spinner').show();
							
							var searchname = document.getElementById("searchname").value; 
							var searchname2 = document.getElementById("searchname2").value; 
							var searchname3 = document.getElementById("searchname3").value; 
							var page2 = document.getElementById("page2").value; 
							var customername = document.getElementById("customername").value; 
							
							
							/// alert("loadtableorcreate.php?searchname="+searchname+"&searchname2="+searchname2+"&searchname3="+searchname3+"&page2="+page2);
							
							$.ajax({
								type: "GET",
								url: "loadreportnew3_p.php?searchname="+searchname+"&searchname2="+searchname2+"&searchname3="+searchname3+"&page2="+page2+"&customername="+customername,
								success: function(result) {
									$('#showsearch2').html(result); 
								}
							});	
							
							$.ajax({
								type: "GET",
								url: "loadreportnew3.php?searchname="+searchname+"&searchname2="+searchname2+"&searchname3="+searchname3+"&page2="+page2+"&customername="+customername,
								success: function(result) {
									$('#tableshow').html(result);
									 
									
									$('#loading_spinner').hide();
								}
							});	  		
							
						}  
						
						 	
                     </script>
                     
                     <div class="col-lg-12" align="center"> 
                     	  
                     <img id="loading_spinner" src="images/loading2.gif">

                     </div> 
                      
                     
                     <div id="tableshow">
                     	
                     	
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