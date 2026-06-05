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
                 	
                  	<li class="<?php echo $active1; ?>" ><a href="index.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  Dashboard </font> </a> </li> 
                  	  
                  	  
                  	 	  
                  	
                  	<?php if($poition == "5"){ ?>
                  	
                  	<li class="<?php echo $active1; ?>" ><a href="check_contact_onoff.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รอตรวจสอบข้อมการทำสัญญา </font> </a> </li> 
                    
                 	<?php } ?> 
                  	<?php if($poition == "4"){ ?>
                  	
                  	<li class="<?php echo $active1; ?>" ><a href="check_contact_onoff.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  รอตรวจสอบข้อมการทำสัญญา </font> </a> </li> 
                    
                 	<?php } ?>  
                  	  
                  	<?php if($chk14 == "ตรวจสอบระบบ"){ ?>
                 	  
				    <li><a> <img src="images/c3.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   ตรวจสอบระบบ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                     
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="checkcontactpartner.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ตรวจสอบคำขอสินเชื่อ  </font> </a>  </li>
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="check_login.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ตรวจสอบคำขอเข้าระบบ  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="history_login.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เช็คประวัติการเข้าใช้งานระบบ  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="report_login.php"> &nbsp;   <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงาน  </font> </a>  </li>
                  	 
                  	
                    </ul>
                  	</li>
                  	  
                 	    
                 	<?php } ?>  
                  	  
                  	  
                  	  
                  	  
                  	  
                  	  
                  	
                  	<?php if($chk1 == "ข้อมูลพื้นฐานภายในบริษัท"){ ?>
                  	<li ><a> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; ข้อมูลพื้นฐานภายในบริษัท </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu  ">  
                    
                     <li style="margin-top: 2px; " class="<?php echo $active21; ?>" ><a href="major.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไชช้อมูลสาขา </font> </a>  </li>   
                  	
                  	 <li style="margin-top: 2px; " class="<?php echo $active22; ?>" ><a href="store.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มข้อมูลร้านค้า </font> </a>  </li>  
                  	 
                  	 
                  	 <li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="bank.php"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ช่องทางชำระเงิน  </font> </a>  </li>
                 	  
                 	   
                  		 <?php 
						$sql = "SELECT * FROM drop_type_staff   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
						  <li style="margin-top: 2px; " class="<?php echo $active24; ?>" ><a href="staff.php?postion=<?php echo $objResult["pk"]; ?>"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; <?php echo $objResult["name"]; ?>  </font> </a> </li> 
						<?php  
						}
						?>   
                  	  
                  	 <li style="margin-top: 2px; " class="<?php echo $active25; ?>" ><a href="editcontactprint.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขข้อความสัญญา  </font> </a>  </li> 
                  	
                  	 <li style="margin-top: 2px; " class="<?php echo $active26; ?>" ><a href="qrimage.php"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; QR Code  </font> </a>  </li> 
                  	 
                    </ul>
                  	</li>
                  	<?php } ?>
                  	
					
                  	<?php if($chk2 == "จัดการข้อมูลลูกค้า"){ ?>
                    <li><a> <img src="images/c3.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   จัดการข้อมูลลูกค้า </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="customer.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายชื่อลูกค้า  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="bank.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ช่องทางชำระเงิน  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="customer_edit.php"> &nbsp;   <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายชื่อลูกค้า  </font> </a>  </li>
                  	
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="chatmajor.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp;  บันทึกข้อความตามสาขา     </font> </a>  </li>
                  	
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                    
                	    
                  	<?php if($chk3 == "บันทึกทำสัญญาผ่อนมือถือ"){ ?>
                    <li><a> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกทำสัญญาผ่อนมือถือ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="contact.php?page=1"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ออกบันทึกทำสัญญา  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="imagecontact_select.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สลิปการโอนชำระ (อ้างอิง)  </font> </a>  </li> 
                  	 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="check_contact.php"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ตรวจสอบคำขอยกเลิกสัญญา  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="contact_print.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; พิมพ์ใบเอกสารสัญญา/ใบเสร็จ  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="cleam.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เปลี่ยนคืนสินค้า  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active4; ?>" ><a href="history_cleam_back.php"> &nbsp;   <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประวัติการเปลี่ยนเครื่อง  </font> </a>  </li>
                  	  
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="cleam_backnew.php"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เคลมสินค้า  </font> </a>  </li> 
                  	
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                    
               	    
               	    
               	    
                  	<?php if($chk4 == "เมนูฝากเงิน/ประวัติฝากเงิน"){ ?>
                    <li><a> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูฝากเงิน/ประวัติฝากเงิน </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active5; ?>" ><a href="payment_bank.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ฝากเงิน/ประวัติฝากเงิน  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active5; ?>" ><a href="member_bank.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ฝาก/ถอน ออมเงินดาวน์  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active5; ?>" ><a href="outaommoney.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ออกใบวางบิล  </font> </a>  </li> 
                  	
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active5; ?>" ><a href="databank.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ฝาก/ถอน Statement  </font> </a>  </li> 
                  	
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active5; ?>" ><a href="reportnew30.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงาน ฝาก/ถอน    </font> </a>  </li> 
                  	
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                  	 
               	    
                  	<?php if($chk5 == "ยอดค่าทำสัญญา/ค่าคอม"){ ?>
                    <li><a> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; ยอดค่าทำสัญญา/ค่าคอม </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="add_computer.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลยอดค่าทำสัญญา/ค่าคอม  </font> </a>  </li>  
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="list_computer.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการค่าคอม  </font> </a>  </li>  
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="list_pasy.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; หนังสือหักภาษี ทำสัญญา  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="list_pasy_store.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; หนังสือหักภาษี ขายหน้าร้าน  </font> </a>  </li> 
                  	
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                  	 
                  	 
                  	 
                  	<?php if($chk6 == "บันทึกยอดชำระหนี้"){ ?>
                    <li><a> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกยอดชำระหนี้ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; "><a href="savepayment_select2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกยอดชำระหนี้  </font> </a>  </li>
                  	
                  	
                  	<li style="margin-top: 2px; "><a href="savepayment_check1.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ยอดเก็บค่าปรับ  </font> </a>  </li>
                  	
                  	
                  	<li style="margin-top: 2px; "><a href="savepayment_check2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ยอดเงินส่วนลด  </font> </a>  </li>
                  	
                  	 
                  	 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="paymentother_cusotmer.php"> &nbsp; <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกรายอื่นๆ  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="history.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประวัติชำระหนี้  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="check_no_payment_loan_lost.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายชื่อขาดส่ง 1 - 5 - 7 วัน  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="check_no_payment_loan.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลลูกหนี้ขาดส่ง  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="check_no_payment_loan_three.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลสงสัยหนี้จะศูนย์  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="npl_order.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ติดตามเครือง(จากการฟ้องคดี)   </font> </a>  </li>  
               	       
                    </ul>
                  	</li>
                  	<?php } ?>
                	      
                  	
                   
                  	<?php if($chk7 == "ข้อมูลรายการสินค้า"){ ?>
                    <li><a> <img src="images/c4.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;  ข้อมูลรายการสินค้า </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                     
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="typedata.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสินค้า  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="typedata2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทยี้ห้อ  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="typecolor.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสี  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="typestore.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทความจุ  </font> </a>  </li> 
               	      
                  	 
                    </ul>
                  	</li>
                  	<?php } ?>
                  	
                  	 
                  	<?php if($chk8 == "สินค้า/ราคาสินค้า/สต๊อก"){ ?>
                    <li><a> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; สินค้า/ราคาสินค้า/สต๊อก </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                     
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="product.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายการสินค้า  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="product_pasy.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ออกบิลใบเสร็จ/ใบวางบิล  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="product_edit_select.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการสินค้า  </font> </a>  </li> 
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                    
                  	
                  	<?php if($chk9 == "เมนูขายหน้าร้าน"){ ?>
                    <li><a> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูขายหน้าร้าน </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                      
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="contact_store.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกขายสดหน้าร้าน  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="contact_store_edit.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขบิลรายการขาย  </font> </a>  </li> 
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                  	
                    
                  	<?php if($chk10 == "เมนูรับซ่อมมือถือ"){ ?>
                    <li><a> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูรับซ่อมมือถือ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                      
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="mobile_restore.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกรายการรับซ่อมมือถือ  </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="mobile_restore_edit.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการรับซ่อมมือถือ  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="store_cleam.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการข้อมูลร้านซ่อม  </font> </a>  </li> 
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="cleam_bill.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการข้อมูลชำระค่าซ่อม  </font> </a>  </li> 
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                  	
                  	
                  	<?php if($chk15 == "เมนูค่าใช้จ่ายบริษัท"){ ?>
                   
                  	
                  	
                  	<li><a> <img src="images/c3.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูค่าใช้จ่ายบริษัท </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="paymenttype.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สร้างหมวดค่าใช้จ่าย  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="paymenttype2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สร้างหมวดค่าใช้จ่ายแบบย่อย  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active3; ?>" ><a href="paymenttyp3.php"> &nbsp;   <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกค่าใช้จ่าย  </font> </a>  </li>
                  	 
                    </ul>
                  	</li>
                  	
                  	
                  	<?php } ?>
                   
                    
                  	<?php if($chk11 == "เพิ่มทุน/รายการค่าใช้จ่าย"){ ?>
                    <li><a> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; เพิ่มทุน/รายการค่าใช้จ่าย </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                     
                  	<li style="margin-top: 2px; "><a href="add_price.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มทุน  </font> </a>  </li>
                  	
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="add_price_payment_add.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกหักค่าทุนและค่าใช้จ่าย  </font> </a>  </li> 
                  	
                    </ul>
                  	</li>
                  	<?php } ?>
                   
                   
                  	<?php if($chk12 == "สรุปรายงาน"){ ?>
                   
                      <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   ภาพรวมธุรกิจ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew3.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายละเอียดบัญชีลูกหนี้  </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew3_dashboard.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปภาพรวมธุรกิจ  </font> </a>  </li>
                    
                    </ul>
                  	</li>
                  	
                   
                   
                   
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานกำไรขาดทุน </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">  
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportall.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานงบกำไรขาดทุน   </font> </a>  </li>
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportall2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานนำเสนอผู้บริหาร     </font> </a>  </li>
                    
                    <!--
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report1.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดหนี้เสีย   </font> </a>  </li>
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดทุนและกำไร   </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report3.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานสต๊อกสินค้า   </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report4.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าใช้จ่ายต่าง  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report5.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าปรับแยกสาขา  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report6.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดหนี้เสีย NPL  </font> </a>  </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report7.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานเงินฝาก   </font> </a> </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report8.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าคอม   </font> </a> </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report9.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานขายสินค้าหน้าร้าน  </font> </a> </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report10.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายการการซ่อมมือถือ  </font> </a> </li> 
                  	<li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="report11.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานการแก้ไขข้อมูล  </font> </a> </li> 
                  	-->
                  	
                    </ul>
                  	</li>
                   
                    
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปบัญชีสินเชื่อ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew1.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปบัญชีสินเชื่อ   </font> </a>  </li>
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew2.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์บัญชีสิ้นเชื่่อ  </font> </a>  </li>
                    
                    </ul>
                  	</li>
                  	
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานการรับเงิน </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew4.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานการรับเงิน  </font> </a>  </li>
                     
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew5.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์การรับเงิน  </font> </a>  </li>
                      
                    </ul>
                  	</li>
                  	
                  	
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานชำระค่าปรับ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew6.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานชำระค่าปรับ  </font> </a>  </li>
                     
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew7.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์ชำระค่าปรับ  </font> </a>  </li>
                      
                    </ul>
                  	</li>
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานฝาก-ถอน </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew8.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานใบฝาก-ถอนเงิน  </font> </a>  </li>
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew9.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปวิเคราะห์ใบฝาก-ถอนเงิน   </font> </a>  </li>
                      
                    </ul>
                  	</li>
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานใบฝาก </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew10.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานใบฝาก   </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew11.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์ใบฝาก   </font> </a>  </li>
                      
                    </ul>
                  	</li>
                  	
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานสต๊อกสินค้า </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                 	   
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew12.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานสต๊อกสินค้า   </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew13.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์สต๊อกสินค้า   </font> </a>  </li>
                      
                    </ul>
                  	</li>
                    
                    
                    
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานค่าใช้จ่าย </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                 	   
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew14.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานค่าใช้จ่าย   </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew15.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์ค่าใช้จ่าย   </font> </a>  </li>
                 	   
                      
                    </ul>
                  	</li>
                  	
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานสิ้นเชื่อ NPL  </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew16.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานสิ้นเชื่อ NPL   </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew17.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปสิ้นเชื่อ NPL หาต้นทุน   </font> </a>  </li>
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew18.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์สิ้นเชื่อ NPL  </font> </a>  </li>
                 	   
                      
                    </ul>
                  	</li>
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปขายสินค้าหน้าร้าน    </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu"> 
                    
                 	     
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew19.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานขายสินค้าหน้าร้าน  </font> </a>  </li>
                  	    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew20.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปวิเคราะห์ขายสินค้าหน้าร้าน  </font> </a>  </li>
                 	   
                      
                    </ul>
                  	</li>
                  	
                  	
                  	
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานซ่อมมือถือ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">     
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew21.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานซ่อมมือถือ  </font> </a>  </li>
                  	   
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew22.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์ซ่อมมือถือ  </font> </a>  </li>
                  	    
                    </ul>
                  	</li>
                  	
                  	 
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานส่งเครม </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">     
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew23.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานส่งเครม  </font> </a>  </li>
                  	    
                    </ul>
                  	</li>
                  	 
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงานยอดปิดคดี </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">     
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew25.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปรายงานยอดปิดคดี  </font> </a>  </li>
                  	    
                  	    
                    </ul>
                  	</li>
                  	    
                  	    
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปยอดรายงานบันทึกอื่นๆ </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">     
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew26.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปยอดรายงานบันทึกอื่นๆ  </font> </a>  </li>
                 	    
                 	     
                    </ul>
                  	</li>
                  	
                  	
                  	
                  	
                  	    
                    <li><a> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; สรุปรายงานภาพบริษัท </font> <font style=" font-size: 10px; " >  <span class="fa fa-chevron-down"></span>  </font> </a>
                    <ul class="nav child_menu">     
                    
                    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew27.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานสรุปเงินทุนสะสม  </font> </a>  </li>
                 	    
                    <li style="margin-top: 2px; " class="<?php echo $active1; ?>" ><a href="reportnew28.php"> &nbsp;  <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สรุปเชิงวิเคราะห์ฺเงินทุนสะสม  </font> </a>  </li>
                 	     
                    </ul>
                  	</li>
                  	
                  	
                  	
                  	<?php } ?>
                   
                  
                  	   
                    
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
                    สถานะ <?php if($_SESSION["Status"] == "A"){ echo "แอดมิน"; }else{ echo $_SESSION["Status"];  }  ?> 
                    
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
       