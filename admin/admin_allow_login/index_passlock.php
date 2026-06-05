<?php
include('../database.php');
 

	$name_pin = "1234";
	$sql = " SELECT * FROM member_all where username = 'admin'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		///$name_pin =  $objResult["pin"];
	}

	if(empty($name_pin)){
		$name_pin = "1234";
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> SG LEASING   </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#E55002">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#E55002">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#E55002">
		
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
	
 <style>
@font-face {
  font-family: IBMPlexSansThai-Regular;
  src: url('fonts/Anuphan-VariableFont_wght.ttf'); 
}

@font-face {
  font-family:NotoSansThai-Regular;
  src: url('fonts/Anuphan-Bold.ttf'); 
} 
	 
.serif {
  font-family: IBMPlexSansThai-Regular, serif;
} 
.serif2 {
  font-family:  NotoSansThai-Regular, serif;
}

</style>
	
<body  class="serif" style=" background-color: #000;  ">
	
 
	
	<link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui-timepicker-addon.css" />
        
        <script type="text/javascript" src="jquerydatepicker/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-sliderAccess.js"></script>
        
	
	<div class="limiter">
		<div class="container-login100"  >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54"  >
			 
					 
				 
					<div class="col-lg-12" >
					<div align="center">  
					<img src="../logo.png" style=" width: 100px; " > 
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
					<font size="3px" color="#000">
						<b> SG LEASING </b>  
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
						 
					</font>
				    </div>
				    
				    
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
				    
				    
				    </div>
				    
				     
					<div class="col-lg-12" >
				    	<table width="100%" border="0">
				    		<tr>
				    			<td width="100%" align="center">  
				    			<a href="save_onoffserver.php?onoff=เปิดระบบทันที">
				    				 
				    			<button type="button" class="btn " id="showerror1"  style="  background-color: #023047; border-radius: 5px; margin-top: 5px; font-size: 10px;  "> 
								<font size="4px" color="white" >  เปิดระบบทันที   </font> </button>  
				    			</a> 
			    			
				    			<a href="save_onoffserver.php?onoff=เปิดระบบตามเวลา">
				    				 
				    			<button type="button" class="btn " id="showerror2"  style="   background-color: #006400; border-radius: 5px; margin-top: 5px; font-size: 10px;  "> 
								<font size="4px" color="white" >  เปิดระบบตามเวลา   </font> </button> 
				    			</a>  
			    				</td> 
				    		</tr>
				    	</table> 
					</div>
						  
				     
					   
			</div>
		</div>
	</div>
	
 
				
	 
	 
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
	 
	

</body>
</html>