 <?php 
include("../database.php");

	if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	} 

	 
	
	$sql = "SELECT * FROM member_all Where  pk = '". $_SESSION["UserID"] ."' ";  
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

	$name_po = "";
	$sql = "SELECT * FROM drop_type_staff where pk = '".$poition."' order by pk asc  ";  
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_po = $objResult["name"];
	}


	
	$onoff = ""; 
	$date =  date('H');  
	$start3 = "08"; 
	$end3 = "21";  
	$login_on = "off";
	if($date >= $start3 && $date <= $end3){ 
		$login_on = "on"; 
	}	
 
	if($login_on == "off"){
		
		//echo("<script>alert(' ขณะนี้ระบบปิดทำการ !!')</script>");
		//echo("<script>window.location = '../check_out.php';</script>");

	}

	 
ini_set("memory_limit","100000M");
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
							 
			 ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print  " style="background-color: #323D55; margin-top: -10px; ">
              <div class="menu_section">
                 
                 <ul class="nav side-menu">
                 	
                  	<li class="<?php echo $active1; ?>" ><a href="index.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รายชื่อที่ถูกดำเนินคดี </font> </a> </li> 
                  	  
                  	   
                  	<li class="<?php echo $active1; ?>" ><a href="checksuccess.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  คดีทีดำเนินการเสร็จสิ้นแล้ว </font> </a> </li> 
                     
                  	
                  	<li class="<?php echo $active1; ?>" ><a href="checknopayment.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รายได้ค่าบริการทียังไม่ได้ชำระ </font> </a> </li> 
                  	
                  	
                  	<li class="<?php echo $active1; ?>" ><a href="checkpayment.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รายการทีชำระเงินแล้ว </font> </a> </li> 
                    
                    
                  	
                  	<li class="<?php echo $active1; ?>" ><a href="checkbotic.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รายชื่อส่งโนติส </font> </a> </li> 
                    
                    
                     
                  	<li class="<?php echo $active1; ?>" ><a href="../check_out.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  ออกจากระบบ </font> </a> </li> 
                  	 
                  	  
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
                    
					 
                  <?php 
					  $hdd = " display: none; ";
					  if($poition = 4){ 
						   $hdd = ""; 
					  } ?>
                   <button class="btn btn-sm" align="center"   href="javascript:;" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false" style=" <?php echo $hdd; ?> ">
                   
                   <i class="fa fa-bell" style="color: #000;"></i>
					  <span class="count  "> <font id="countclickdata"  color="#000" >  0  </font> </span>
                  
                   </button>
                    
                   
					  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1" style=" margin-top: 15px; ">

					   <div id="dataall"   > </div>
 

					  </ul>
                 
                   
                  
                   <button class="btn btn-sm" align="center" style="background-color: #F4F5FA; border-radius: 12px; ">  
                    <font size="2px" color="#000" style="font-size: 14px;"> ยินดีตอนรับคุณ 
                    
                   <?php echo $_SESSION["Fullname"]; ?>
                    สถานะ ทนาย
                    
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
       