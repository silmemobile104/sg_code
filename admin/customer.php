<!DOCTYPE html>
<html lang="en">
<head>
	<title> SG LEASING </title>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, user-scalable=no">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
@font-face {
  font-family: NotoSansThai-Regular;
  src: url('fonts/NotoSansThai-Regular.ttf'); 
}

@font-face {
  font-family: NotoSansThai-Regular;
  src: url('fonts/NotoSansThai-Regular.ttf'); 
} 
	 
.serif {
  font-family:  NotoSansThai-Regular, serif;
} 
.serif2 {
  font-family: NotoSansThai-Regular, serif;
}

</style>

<?php
	
	$closddata = "block";
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { 
	// echo "iPhone or iPad";
	$closddata = "block";
}
else { 
	//  echo "Other, non-iOS device"; 
	$closddata = "block";
}
?>
<style>   
	.imgresize{ 
		 display: <?php echo $closddata; ?>;  
	}
	@media only screen and (max-width: 767px){    
		.imgresize{ display: none; } 
	}
	.imgresizebg{ 
		 background-image: url('images/bg.png'); background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;   
	}
	@media only screen and (max-width: 767px){    
		.imgresizebg{  background-image: url('images/bg2.png'); background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;    } 
	}
		  
</style>
					
					
<body    style="  background-image: url('images/bg5.png');
  background-repeat: no-repeat; 
  background-attachment: fixed;
  background-size: cover;  " class="serif     " >
	  
		  
		<div  style=" margin-top: 100px; margin-left: 15px; margin-right: 15px;  "   >
		 
				 <form action="check_login_m.php" method="post"  >
				  
					 <div class="col-lg-12" > 
					    	<center>  
					    	<img src="logo.png" style="width: 100px;" >   <br> <br>
							<font size="5px" color="#000" > <b> SG LEASING </b> </font>  
							</center> 
				    		<Br>  
					    	<center>  
						<font size="4px" color="#000"  > <b>  ล็อกอินเข้าสู่ระบบ  </b> </font>
							</center> 
						<br>   
					</div>
					
					
					 <style>
						.input-group.input-group-unstyled input.form-control {
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
            border-radius: 4px;
}
.input-group-unstyled .input-group-addon {
    border-radius: 4px;
    border: 0px;
    background-color: transparent;
}
						</style>
						 
  
					 <div class="col-lg-12" style="margin-top: 15px;" >
					 <font size="4px"  color="#000" style="  font-size: 14px;  "  > 
					 &nbsp;
					 <img src="images/cc1.png" style="width: 15px; "> Username ( กรอกเลขบัตรประชาชน 13 หลัก )  
					 
					 </font>
					 <div  style=" margin-top: 10px;  background-color: #FFF;  border-radius: 20px;  border: 1px solid #B21810;    font-size: 14px; " >
						<input type="text" class="form-control" style=" background-color: #FFF;   height: 38px;  border-radius: 20px;  font-size: 14px; " id="username" name="username" placeholder=" Username "  /> 
					 </div>
  
					 </div>

					  
   
					 <div class="col-lg-12" style="margin-top: 15px;" >
					 <center>  
					    	<table width="100%">
					    		<tr>
					    			<td width="100%"> 
						    <button type="submit" class="btn  "  style="background-color: #B21810;   width: 100%; margin-top: 10px; border-radius: 20px; "> 
						    <font size="4px" color="#FFFFFF" > เข้าสู่ระบบ </font> </button> </td>
					    		</tr> 
					    	</table>  </center>
					</div> 
 
			 
				 </form> 
			 
		</div>
	 
	   
</body>
</html>