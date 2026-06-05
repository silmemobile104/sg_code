<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> SG LEASING </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<?php
		if(empty($_SESSION["UserID"]) ){   
			$_SESSION["UserID"] = $_COOKIE["UserID"];
			$_SESSION["Status"] = $_COOKIE["Status"];
			$_SESSION["User"] = $_COOKIE["User"];
			$_SESSION["Fullname"] = $_COOKIE["Fullname"];  
		} 
 		if(!empty($_SESSION["UserID"])){ 
			if(($_SESSION["Status"] == "ST")){ 
						
				echo("<script>window.location = 'staff/index.php';</script>");  
			}
			if(($_SESSION["Status"] == "A")){ 
						
				echo("<script>window.location = 'admin/index.php';</script>");  
			}
			if(($_SESSION["Status"] == "P")){ 
						
				echo("<script>window.location = 'staffpartner/index.php';</script>");  
			}
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
					
					
<body    style="    " class="serif  imgresizebg  " >
	 
	<div class="row"  >  
	<div class="col-lg-6 imgresize "   > 
	
		<div class="container-login100" align="center"  >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style=" width: 80%; ">
				
				<img src="images/lebg.png" style="width: 450px;" >
					<br> 
			</div>
		</div>
	
	</div>
	<div class="col-lg-6">
		  
		    
	  <script>
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(redirectToPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function redirectToPosition(position) {
		 ////   window.location='test.php?lat='+position.coords.latitude+'&long='+position.coords.longitude;


			document.getElementById("note1").value = ""+position.coords.latitude+","+position.coords.longitude;


		}

		getLocation()

	</script>
	<?php
		echo $lat=(isset($_GET['lat']))?$_GET['lat']:'';
		echo $long=(isset($_GET['long']))?$_GET['long']:'';
	?>
	
	
		<div class="container-login100"  >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style=" width: 80%; ">
				 <form action="check_login_savehistory.php" method="post"  >
				  <input type="hidden" class="form-control" id="note1" name="note1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; "  value="<?php echo $note1; ?>" readonly   >
				 
					 <div class="col-lg-12 ">
					     <br>	 <br> 
					</div>

					 <div class="col-lg-12" > <br> 
					    	<center>  
					    	<img src="logo.png" style="width: 100px;" >   <br> <br>
						<font size="5px" color="#000" > <b> SG LEASING </b> </font>  
							</center> 
				    	<Br>  
					    	<center>  
						<font size="4px" color="#000"  > ล็อกอินเข้าสู่ระบบ </font>
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
						 
  
					 <div class="col-lg-12" >
					<font size="4px"  color="#000"  > Username :  </font>
					 <div class="input-group input-group-unstyled" style="background-color: #FFF;  height: 38px; border-radius: 5px; border: 1px solid #CACACA; border-left-color: #FFF; border-top-color: #FFF; border-right-color: #FFF; border-bottom-color: #B21810;  " >
						<input type="text" class="form-control" style=" border: 0px solid #CACACA; " id="username" name="username"  />
						<span class="input-group-addon">
							<img src="images/cc1.png" style="width: 15px;">
						</span>
					</div>
  
					</div>

					 <div class="col-lg-12" style="margin-top: 15px;" >
					<font size="4px"  color="#000"  > Password :   </font>
					 <div class="input-group input-group-unstyled" style="background-color: #FFF;  height: 38px; border-radius: 5px; border: 1px solid #CACACA;  border-left-color: #FFF; border-top-color: #FFF; border-right-color: #FFF; border-bottom-color: #B21810;   " >
						<input type="password" class="form-control" style=" border: 0px solid #CACACA; " id="password" name="password"  />
						<span class="input-group-addon">
							<img src="images/cc2.png" style="width: 15px;">
						</span>
					</div>
  
					</div>
   
					 <div class="col-lg-12" style="margin-top: 15px;" >
					 <center>  
					    	<table width="100%">
					    		<tr>
					    			<td width="100%"> 
						    <button type="submit" class="btn  "  style="background-color: #B21810;   width: 100%; margin-top: 10px; border-radius: 10px; "> 
						    <font size="4px" color="#FFFFFF" > ล็อกอิน </font> </button> </td>
					    		</tr>
					    		<tr>
					    			<td> 
						    <button type="reset" class="btn "  style="background-color: #FFF; width: 100%;   margin-top: 10px; border-radius: 10px; border: 1px solid #B21810; "> 
						    <font size="4px" color="#000" > ยกเลิก </font> </button> </td>
					    		</tr>
					    	</table>  </center>
					</div> 
 
			 
				 </form> 
			</div>
		</div>
	 
	 
	</div>
	</div>
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>