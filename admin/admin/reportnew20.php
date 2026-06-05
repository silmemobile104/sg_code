<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

	
$searchname =  date('Y');
if(empty($_GET["searchname"])){

}else{
	$searchname = $_GET["searchname"];
} 
$searchname2 = date('Y');
if(empty($_GET["searchname2"])){

}else{
	$searchname2 = $_GET["searchname2"];
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
                     <font size="4px" color="#000000">  สรุปวิเคราะห์ขายสินค้าหน้าร้าน     </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สรุปวิเคราะห์ขายสินค้าหน้าร้าน     </font>   
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
                     <font size="4px" color="#000000">  สรุปวิเคราะห์ขายสินค้าหน้าร้าน     </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
						  
					   <div   class="col-lg-5"  align="left"  > 
					   <table width="100%">
						<tr> 
							<td width="25%"> 
							<font color="black" size="3px" class="serif">  ปี  </font>
 
							<div class="input-group    "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
							 <select id="searchname"  name="searchname" class="form-control"  style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   " onchange='Loadtable()'    > 
								<?php 
									$sql = "SELECT * FROM year where year = '".$searchname."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>    
								<?php 
									$sql = "SELECT * FROM year where year != '".$searchname."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
								?>
									<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
									}
								?>   
							</select>

							<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10px; display: none; ">
							  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="button"  onClick="Loadtable()"  >
									<img src="images/search.png" style="width: 15px; "> 
							  </button>
							</span>
							</div>  
							</td>     
							<td width="1%">&nbsp;   </td> 
							<td width="25%">&nbsp;   </td> 
							        
						</tr>
					   </table>  
					   </div> 
                           
					  <input type="hidden" id="searchname2" value="">
					  <input type="hidden" id="searchname3" value="">
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
							 
							 /// alert("loadreportnew2.php?searchname="+searchname+"&searchname2="+searchname2+"&searchname3="+searchname3+"&page2="+page2);
							
							
							$.ajax({
								type: "GET",
								url: "loadreportnew20.php?searchname="+searchname+"&searchname2="+searchname2+"&searchname3="+searchname3+"&page2="+page2,
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>