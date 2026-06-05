 <?php 
include("../database.php");
 
 	if(empty($_SESSION["UserID"]) ){ 
		if (isset($_COOKIE["UserID"])){
			$_SESSION["UserID"] = $_COOKIE["UserID"];
			$_SESSION["Status"] = $_COOKIE["Status"];
			$_SESSION["User"] = $_COOKIE["User"];
			$_SESSION["Fullname"] = $_COOKIE["Fullname"]; 
		} else { 
			echo("<script>alert(' กรุณาล็อกอิน !')</script>");
			echo("<script>window.location = '../index.php';</script>");
		}
    }

	 
ini_set("memory_limit","10M");
?>
<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/logo3.ico" type="image/ico" />

    <title> SG LEASING </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 
    <link href="build/css/custom.min.css" rel="stylesheet">
    
    
	
	<link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui.css" />
    <link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui-timepicker-addon.css" />
        
        <script type="text/javascript" src="jquerydatepicker/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
        <script type="text/javascript" src="jquerydatepicker/jquery-ui-sliderAccess.js"></script>
        
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
        
  </head>
  
 <style>
@font-face {
  font-family: SukhumvitSet-Medium;
  src: url('../fonts/NotoSansThai-Regular.ttf'); 
}

@font-face {
  font-family: SukhumvitSet-SemiBold;
  src: url('../fonts/NotoSansThai-Regular.ttf'); 
} 
	 
.serif {
  font-family:  SukhumvitSet-Medium, serif;
} 
.serif2 {
  font-family:  SukhumvitSet-SemiBold, serif;
}

</style>
 
  <body class="nav-md serif " style="background-color: #323D55;">
    <div class="container body"  style="background-color: #FFF;" >
      <div class="main_container"  style="background-color: #323D55;" >
        <div class="col-md-3 left_col"   style="background-color: #FFF;" >
          <div class="left_col scroll-view" style="background-color: #323D55;"> 
           
              <div class="navbar nav_title"  style="background-color: #FFF;   margin-top: -2px; " align="left">
              <a href="index.php" class="site_title"   >
              <img src="../logo.png" style="width: 40px; " >  &nbsp;
              <font size="2px" class="serif"  color="#000" style="font-size: 18px;"> SG LEASING </font>  
              </a> 
              </div>

            <div class="clearfix"></div> 
            <br />
			 <?php 
						$loaddata = $_SESSION["load"];

			  				$page1 = "#FFFFFF"; 
							$page2 = "#FFFFFF";  
							$page3 = "#FFFFFF";  
							$page4 = "#FFFFFF";  
							$page5 = "#FFFFFF";  
							$page6 = "#FFFFFF";  
							$page7 = "#FFFFFF";    
							$page8 = "#FFFFFF";    
							$page9 = "#FFFFFF";  
							 
			  
			  				if($loaddata == "1"){
								$active1 = "active";
							}else if($loaddata == "21"){
								$active21 = "active";
							}else if($loaddata == "22"){
								$active22 = "active";
							}else if($loaddata == "23"){
								$active23 = "active";
							}else if($loaddata == "24"){
								$active24 = "active";
							}else if($loaddata == "25"){
								$active25 = "active";
							}else if($loaddata == "26"){
								$active26 = "active";
							}else if($loaddata == "27"){
								$active27 = "active";
							}else if($loaddata == "3"){
								$active3 = "active";
							}else if($loaddata == "4"){
								$active4 = "active";
							}else if($loaddata == "5"){
								$active5 = "active";
							}else if($loaddata == "6"){
								$active6 = "active";
							}else if($loaddata == "7"){
								$active7 = "active";
							}else if($loaddata == "8"){
								$active8 = "active";
							}else if($loaddata == "9"){
								$active9 = "active";
							}else if($loaddata == "10"){
								$active10 = "active";
							}
			 ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print  main_menu" style="background-color: #323D55; margin-top: -10px; ">
              <div class="menu_section"> 
                 
                <ul class="nav side-menu">
                 	
                  	<li class="<?php echo $active1; ?>" ><a href="index.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  ออกใบคำขอสินเชื่อ </font> </a> </li> 
                  	  
                  	<li class="<?php echo $active2; ?>" ><a href="check_contact_store.php?page="> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page2; ?>"> &nbsp;  ตรวจสอบสถานะคำขอ </font> </a> </li> 
                  	   
            
                  	<li class="<?php echo $active3; ?>" ><a href="check_payment.php?page="> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page3; ?>"> &nbsp;  ตรวจสอบสถานะชำระ </font> </a> </li> 
                 	    
                  	<li class="<?php echo $active3; ?>" ><a href="checkprice.php?page="> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page3; ?>"> &nbsp;  เช็คราคาดาวน์ </font> </a> </li> 
                 	   
                 	    
                </ul>
              </div> 
            </div>
            <!-- /sidebar menu -->

           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav"  >
          <div class="nav_menu"  style="background-color: #FFF; height: 57px;  ">
              <div class="nav toggle" >
                <a id="menu_toggle"> <img src="images/bar.png" style="width: 28px; display: none; ">  </a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                 
                <div class="col-md-12" align="right"> 
                    
					 
                  
                   <button class="btn btn-sm" align="center"   href="javascript:;" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false" style=" display: none; ">
                   
                   <i class="fa fa-bell" style="color: #000;"></i>
					  <span class="count  "> <font id="countclickdata"  color="#000" >  0  </font> </span>
                  
                   </button>
                    
                   
					  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1" style=" margin-top: 15px; ">

					   <div id="dataall"   > </div>
 

					  </ul>
                 
                   
                  
                   <button class="btn btn-sm" align="center" style="background-color: #F4F5FA; border-radius: 12px; ">  
                    <font size="2px" color="#000" style="font-size: 14px;"> ยินดีตอนรับคุณ 
                    
                   <?php echo $_SESSION["Fullname"]; ?>
                    สถานะ <?php if($_SESSION["Status"] == "A"){ echo "แอดมิน"; }else{ echo " พาทเนอร์ ";  }  ?> 
                    
                    </font>  
                   </button>
                   
                    &nbsp; 
                   <a href="profile.php">  
                    <button class="btn btn-sm" align="center" style="background-color: #E5F9FF; border-radius: 12px; ">  
                    <font size="2px" color="#000"  style="font-size: 14px;">
                     แก้ไขข้อมูลส่วนตัว 
                    </font>  
                   </button>
                   </a>   
                     
                    
                    &nbsp; 
                   <a href="../check_out.php">  
                   <button class="btn btn-sm" align="center" style="background-color: #FFF; border-radius: 12px; border: 1px solid #FF84A8; ">  
                     <font size="2px" color="#000" style="font-size: 14px;"> <img src="images/ic2.png" style="width: 15px; display: none; " >  ออกจากระบบ  </font>
                   </button> 
                   </a>   
                   </div>
                  
                   
                    
                   
                </li> 
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

		  <style> 
						@media only screen and (max-width: 767px){
							.tablemobile{
								width: 1280px;
							}
						} 
						</style>	
						
						 
						  
		   <script>
			$(document).ready(function(){

			 function load_unseen_notification()
			 {
			  $.ajax({
			   url:"fetch.php",
			   method:"POST",
			   data:{},
			   dataType:"json",
			   success:function(data)
			   {
				  
				if(data.countid > 0)
				{ 
					document.getElementById("countclickdata").innerHTML  = "" + data.countid;
					  
				}else{
					document.getElementById("countclickdata").innerHTML  = "0";
				}
 

			   }


			  });
			 }

			 function load_unseen_notification2()
			 {
			 
				$.ajax({
					type: "GET",
					url: "fetch2.php",
					success: function(result) {
					$('#dataall').html(result);
					}
				});	
			}
 
			 setInterval(function(){  
			  load_unseen_notification();  
			  load_unseen_notification2();  
			 }, 2000);



			});
			</script>
       
       