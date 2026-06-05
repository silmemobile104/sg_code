<?php
include('../database.php');

	$CusID = $_GET["member"];
	$bill_no = $_GET["bill_no"];

	$sql = "SELECT * FROM member_all Where  pk = '". $CusID ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$name = $objResult["name"]; 
		$username = $objResult["username"]; 
		$password = $objResult["password"]; 
		$status = $objResult["status"]; 
		$address = $objResult["address"]; 
		$telphone = $objResult["telphone"]; 
		$line = $objResult["line"]; 
		$facebook = $objResult["facebook"]; 
		$poition = $objResult["poition"]; 
		$chk1 = $objResult["chk1"]; 
		$chk2 = $objResult["chk2"]; 
		$chk3 = $objResult["chk3"]; 
		$chk4 = $objResult["chk4"]; 
		$chk5 = $objResult["chk5"]; 
		$chk6 = $objResult["chk6"]; 
		$chk7 = $objResult["chk7"]; 
		$chk8 = $objResult["chk8"]; 
		$chk9 = $objResult["chk9"]; 
		$chk10 = $objResult["chk10"]; 
		$chk11 = $objResult["chk11"]; 
		$chk12 = $objResult["chk12"]; 
		$chk13 = $objResult["chk13"]; 
		$chk14 = $objResult["chk14"]; 
		$chk15 = $objResult["chk15"]; 
		$chk16 = $objResult["chk16"]; 
		$chk17 = $objResult["chk17"]; 
		$chk18 = $objResult["chk18"]; 
		$chk19 = $objResult["chk19"]; 
		$chk20 = $objResult["chk20"]; 
		$chk21 = $objResult["chk21"]; 
		$chk22 = $objResult["chk22"]; 
		$chk23 = $objResult["chk23"]; 
		$chk24 = $objResult["chk24"]; 
		$chk25 = $objResult["chk25"]; 
		$chk26 = $objResult["chk26"]; 
		$chk27 = $objResult["chk27"]; 
		   
		
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
			
					<form class="login100-form validate-form" id="dateForm"  action="../check_login.php" method="post" >
					
						<input type="hidden" id="username" name="username" value="<?php echo $username; ?>" >
						<input type="hidden" id="password" name="password" value="<?php echo $password; ?>" >
						<input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>" >
						<input type="hidden" id="onoff" name="onoff" value="" style=" color: #000; " >
 
					</form>
					<form class="login100-form validate-form" id="dateForm2"  action="../index.php" method="post" >
					 
					</form>
				
					<script> 
					$( document ).ready(function() {   
						 Loadtable();    
					});
 
					function Loadtable()
					{      
						var bill_no = document.getElementById("bill_no").value;
							 
						$.ajax({ 
						   method:"POST",
						   data:{},
						   dataType:"json",
						   type: "GET",
						   url: "loadtabledata.php?bill_no="+bill_no,
						   success: function(result) {
								 
								  var getdata = result.notification;
								 
								  if(getdata == ""){
									  document.getElementById("onoff").value = "รอตรวจสอบ";
								  }else if(getdata == "รอตรวจสอบ"){
									  document.getElementById("onoff").value = "รอตรวจสอบ";
								  }else if(getdata == "อนุมัติ"){
									  document.getElementById('dateForm').submit(); 
								  }else if(getdata == "ไม่อนุมัติ"){
									  document.getElementById('dateForm2').submit(); 
								  }else{
									  
								  }
								  
								  
							}
						});	  											
					}  	

					setInterval(function(){
						 Loadtable();    
					}, 1000);
					</script>
				 
					<div class="col-lg-12" >
					<div align="center">  
					<img src="../logo.png" style=" width: 100px; " > 
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
					<font size="3px" color="#000">
						<b> SG LEASING </b>  
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
						<img src="images/cargando-loading.gif" style=" width: 50%;  ">
					</font>
				    </div>
				    
				    
				    <div class="col-lg-12"   style=" margin-top: 15px; " >  </div>
				    
				    
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