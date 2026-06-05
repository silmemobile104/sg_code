<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 
 
	$tanaidata = "";
	if(empty($_GET["tanaidata"])){
		
	}else{
		$tanaidata = $_GET["tanaidata"];
	}  


	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}  
	 
?> 
        
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        											
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  รายชื่อถูกดำเนินคดี   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > รายชื่อถูกดำเนินคดี   </font>   
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
                     <font size="4px" color="#000000">  รายชื่อถูกดำเนินคดี   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
					 
                      	<form action="paper_tanai1.php" method="get" >
                  		    
                    	 <div   class="col-lg-8"  align="left"   > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> โปรดเลือกทนาย </font>

								   <select class="form-control myselect" id="tanaidata" name="tanaidata" required style=" width: 100%;" onchange='this.form.submit()'     > 
									<?php if(empty($tanaidata)){ ?>
									<option value=""> โปรดเลือกทนาย </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM member_all where pk = '".$tanaidata."'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM member_all where pk != '".$tanaidata."' and status = 'T'  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{    
									?>
									<option value="<?php echo $objResult["pk"]; ?>">  <?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td> 
								<td width="1%"> </td>      
								<td width="40%">&nbsp;   </td>   

							</tr>
						</table>  
						 </div>
                         
						</form>
                 		 
                 		 
                    	 <div   class="col-lg-12"  align="left" style=" margin-top: 15px; "   >  </div> 
                 		 
                  		 
                     	  <div   class="col-lg-8"  align="left"   > 
							<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif"> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </font>

								   <select class="form-control myselect" id="bill_no" name="bill_no" required style=" width: 100%;" onChange="loadcustomer()"     > 
									<?php if(empty($bill_no)){ ?>
									<option value=""> ค้นหารายชื่อ/เลขที่สัญญา/รหัสลูกค้า </option>
									<?php } ?>

									<?php 
									$sql = "SELECT * FROM list_order where bill_no = '".$bill_no."' and tanaidata != ''  order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{  
										
										
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM list_order where bill_no != '".$bill_no."' and tanaidata = '".$tanaidata."'  and tanaidata != ''   order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
										$name_create = "-"; 
										$sql_m = "SELECT * FROM customer where pk = '".$objResult["customer"]."'   order by pk asc  "; 
										$query_m = mysqli_query($objCon,$sql_m);
										while($objResult_m = mysqli_fetch_array($query_m))
										{ 
												$name_create =  $objResult_m["name"];
										}

									?>
									<option value="<?php echo $objResult["bill_no"]; ?>">  <?php echo $objResult["bill_no"]." [ " . $name_create . " ]"; ?></option> 
									<?php  
									}
									?>    
									</select>
									<script type="text/javascript">
									$(".myselect").select2();
									</script> 
										

								</td> 
								<td width="1%"> </td>      
								<td width="40%">&nbsp;   </td>   

							</tr>
						</table>  
						 </div>
                      
                      	  <script> 
							function loadcustomer()
							{   
								var bill_no = document.getElementById("bill_no").value; 
								 
								//// alert(" " + datazonedata );
								
								  $.ajax({
									type: "GET",
									url: "loadcustomercontact.php?bill_no="+bill_no,
									success: function(result) {
										$('#reloadproduct').html(result);  
									}
								});	
 								
							}  
							</script>
                         
                          
                          
                          <div id="reloadproduct">
                          	
                          	
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