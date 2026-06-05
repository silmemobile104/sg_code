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
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
                  <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกยอดชำระหนี้   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > บันทึกยอดชำระหนี้   </font>   
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
                     <font size="4px" color="#000000">  เลือกประเภทสัญญาทำรายการ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
						<div class="col-lg-12" align="left"   >  
						 <?php
							$colorbtns1s = " background-color: #4B5E69; border-radius: 5px; width: 170px; height: 50px; border-color: #4B5E69; margin-top: 15px; ";
							$colorbtns2s = " background-color: #FF0000; border-radius: 5px; width: 170px; height: 50px; border-color: #FF0000; margin-top: 15px; ";

							$txtcolor1 = "#FFF"; 
  	
						?> 
   
 						<a href="savepayment.php"    >
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns1s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" >    ลูกหนี้สัญญาปกติ     </font> </button> </a>
    					 
 						<a href="savepayment_npl.php"    >
						<button type="button" class="btn btn-primary" style=" <?php echo $colorbtns2s; ?> " > <font color="<?php echo $txtcolor1; ?>" size="3px" class="serif1" >    ลูกหนี้เลยสัญญา NPL     </font> </button> </a>
    					 
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
                          <bR><bR><bR><br>    
                          <bR><bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>