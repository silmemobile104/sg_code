<?php 
session_start();
$_SESSION["load"] = "4";
include('header.php');
 
	 	 
	$name = ""; 
	$codeno = ""; 
	$appleid = ""; 
	$storerage = ""; 
	$color = ""; 
	$password = ""; 
	$typedata_2 = ""; 
	$note = ""; 
	$price1 = ""; 
	$price2 = ""; 
	$totalprice = ""; 


	
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
 	 
		   
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}  
	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}  

	 
	if(empty($_GET["getmajorline2"])){
		
	}else{
		$major = $_GET["getmajorline2"];
	}  

	  
	 
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกหักค่าทุนและค่าใช้จ่าย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกหักค่าทุนและค่าใช้จ่าย  </font>   
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
                     <font size="4px" color="#000000">  บันทึกหักค่าทุนและค่าใช้จ่าย   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      <div class=" col-lg-12 "  align="left" >
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #6A5ACD; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าเช่า">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าเช่า   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #5F9EA0; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่ายิงแอด">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่ายิงแอด   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #FF4500; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าส่งของ">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าส่งของ   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #000080; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าพนักงาน">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าพนักงาน   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #FFC0CB; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าโทรศัพท์">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าโทรศัพท์   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #FF00FF; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าเน็ต">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าเน็ต   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #40E0D0; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าน้ำ">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าน้ำ   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #EE82EE; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าไฟ">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าไฟ   </font>   
                  		</div> 
					    </a> 
					  </div>
					  </div> 
                      <div class=" col-lg-2 " style=" margin-top: 10px;"  >
                      <div class=" col-lg-12 " style="background-color: #A0522D; height: 50px; border-radius: 10px; " align="center" >
					    <a href="paymentdata1.php?major=<?php echo $major; ?>&typedata=ค่าใช้จ่ายอื่นๆ">
					    <div style="margin-top: 13px;" > 
                     		<font size="4px" color="#FFF">  ค่าใช้จ่ายอื่นๆ   </font>   
                  		</div> 
					    </a> 
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
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer.php');
?>