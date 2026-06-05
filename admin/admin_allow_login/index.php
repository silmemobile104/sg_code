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
				    
				    
				    
				    
			   <script>
				function validateForm() {
				  var chkpin = document.getElementById("codepin").value; 
					
				  var pin1 = document.getElementById("pin1").value; 
				  var pin2 = document.getElementById("pin2").value; 
				  var pin3 = document.getElementById("pin3").value; 
				  var pin4 = document.getElementById("pin4").value;  
				  
				  var allpin = pin1+""+pin2+""+pin3+""+pin4;

				  if (allpin != chkpin) {
					/// alert(" คุณกรอก PIN ไม่ถูกต้อง ");
					  
					  document.getElementById("showerror1").style.display = "block";
					  document.getElementById("showerror2").style.display = "none";
					   
					return false;
				  } else{
					  document.getElementById("showerror1").style.display = "none";
					  document.getElementById("showerror2").style.display = "block";
					  document.getElementById("form1").submit();
					  
				  }

				}
				</script>
							
				<form class="login100-form validate-form" id="form1"  action="index_passlock.php" method="post"  onsubmit="return validateForm()" >
					
					<input type="hidden" id="codepin" name="codepin" value="<?php echo $name_pin; ?>"  > 
					
					 <style>
						 
						@bone: #fff;
						@eggshell: #efeffe;
						@body-bg: #fefefe;
						@breakpoint-tablet: 1200px;
						@breakpoint-mobile: 450px;
 
						.flex-box {
						  display: flex;
						  flex-direction: column;
						  align-items: center;
						  justify-content: center;
						  padding: 75px;
						  @media only screen and (max-width: @breakpoint-tablet) {
							padding: 25px;
						  }
						}

						h1 {
						  color: @bone;
						  font-size: 3.5em;
						  line-height: 1.25;
						  text-align: center;
						}

						h3 {
						  color: @eggshell;
						  opacity: 0.7;
						  font-weight: 300;
						  font-style: italic;
						  :after {
							content: "\005f";
						  }
						}

						h5 {
						  color: @eggshell;
						  font-size: 2em;
						  font-weight: 400;
						  text-transform: uppercase;
						  letter-spacing: 1px;
						  &:after {
							content: "";
							position: relative;
							display: block;
							padding-bottom: 5px;
							width: 100%;
							border-bottom: 2px solid #fff;
						  }
						}

						.passcode-area {
						  margin-top: 10px;
						  text-align: center;
						}

						.passcode-area > input {
						  background-color: @bone;
						  border: 2px solid #d6d6d6;
						  border-radius: 4px;
						  padding: 0;
						  margin: 4px 4px 0;
						  width: 50px;
						  height: 50px;
						  text-align: center;
						  font-size: 32px; 
						  text-transform: uppercase;
						  background-clip: padding-box;
						  &:nth-child(3) {
							  
						  }
						  &:focus {
							-webkit-appearance: none;
							border: 2px solid skyblue;
							outline: 0;
							box-shadow: 0px 0px 3px rgba(131, 192, 253, 0.5);
						  }
						} 
						 
						  
					  @media only screen and (max-width: 767px){ 
						  .passcode-area > input {
							  background-color: @bone;
							  border: 2px solid #d6d6d6;
							  border-radius: 4px;
							  padding: 0;
							  margin: 4px 4px 0;
							  width: 35px;
							  height: 35px;
							  text-align: center;
							  font-size: 32px; 
							  text-transform: uppercase;
							  background-clip: padding-box;
							  &:nth-child(3) {

							  }
							  &:focus {
								-webkit-appearance: none;
								border: 2px solid skyblue;
								outline: 0;
								box-shadow: 0px 0px 3px rgba(131, 192, 253, 0.5);
							  }
							} 
					  }  
					 </style>
					  
					 <div align="center" style=" border: 1px solid #FFF; "> 
						<font style = "font-size: 25px;" > กรุณาใส่รหัสผ่าน </font> 
						<div class="passcode-area">
						  <input autofocus type="text" id="pin1" maxlength="1"  autocomplete="off" onKeyUp="validateForm()"  >
						  <input type="text" id="pin2" maxlength="1" autocomplete="off"  onKeyUp="validateForm()" >
						  <input type="text" id="pin3" maxlength="1" autocomplete="off"  onKeyUp="validateForm()" >
						  <input type="text" id="pin4" maxlength="1" autocomplete="off"  onKeyUp="validateForm()" > 
						</div>
					  </div>
					 
					<script  src="./script.js"></script>
						 
					<br>
					<div class="col-lg-12" >
				    	<table width="100%" border="0">
				    		<tr>
				    			<td width="100%" align="center">   
				    			<button type="button" class="btn " id="showerror1"  style=" display: none;  background-color: #023047; border-radius: 5px; margin-top: 5px; font-size: 10px;  "> 
								<font size="4px" color="white" >  รหัสผ่านไม่ถูกต้อง   </font> </button>  
			    			
				    			<button type="button" class="btn " id="showerror2"  style=" display: none;  background-color: #006400; border-radius: 5px; margin-top: 5px; font-size: 10px;  "> 
								<font size="4px" color="white" >  รหัสผ่านถูกต้อง   </font> </button>  
			    				</td> 
				    		</tr>
				    	</table> 
					</div>
						 
				</form>
				     
					   
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