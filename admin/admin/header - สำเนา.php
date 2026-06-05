 <?php 
include("../database.php");

	if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	} 
	 
ini_set("memory_limit","512M");
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
                 	
                  	<li><a href="index.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  Dashboard </font> </a> </li> 
                  	 
                  	 
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   จัดการข้อมูลพื้นฐานภายในบริษัท </font> </a>  </li> 
                	    
                  	<li style="margin-top: -8px; "><a href="major.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มข้อมูลสาขา </font> </a>  </li>   
                  	
                  	<li style="margin-top: -8px; "><a href="store.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มข้อมูลร้านค้า </font> </a>  </li>  
                  	  
                  	<li style="margin-top: -8px; "><a href="type_staff.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มสถานะผู้ใช้งาน </font> </a>  </li>   
                  	  
                  	<li style="margin-top: -8px; "><a href="staff.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; กำหนดสิทธิ์การเข้าถึงระบบ  </font> </a> </li> 
                  	  
                  	<li style="margin-top: -8px; "><a href="editcontactprint.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขข้อความสัญญา  </font> </a>  </li> 
                  	
                  	<li style="margin-top: -8px; "><a href="qrimage.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; QR Code  </font> </a>  </li> 
                  	
                  	
                  	
                  	
                   
                    <li><a href="#"> <img src="images/c3.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   จัดการข้อมูลลูกค้า </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="customer.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายชื่อลูกค้า  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="customer_edit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายชื่อลูกค้า  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="chatmajor.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp;  บันทึกข้อความตามสาขา     </font> </a>  </li>
                	    
                   
                   
                   
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกทำสัญญาผ่อนมือถือ </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="contact.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ออกบันทึกทำสัญญา  </font> </a>  </li>
                  	
                  	<li style="margin-top: -8px; "><a href="imagecontact.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; สลิปการโอนชำระ (อ้างอิง)  </font> </a>  </li>
                  	
                  	
                  	<li style="margin-top: -8px; "><a href="bank.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ช่องทางชำระเงิน  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="check_contact.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ตรวจสอบคำขอยกเลิกสัญญา  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="contact_print.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; พิมพ์ใบเอกสารสัญญา/ใบเสร็จ  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="cleam.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เปลี่ยนคืนสินค้า  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="history_cleam_back.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประวัติการเปลี่ยนเครื่อง  </font> </a>  </li> 
                  	
                  	<!--
                  	<li style="margin-top: -8px; "><a href="cleam_back.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เคลมสินค้า  </font> </a>  </li> 
                  	 -->
                  	<li style="margin-top: -8px; "><a href="cleam_backnew.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เคลมสินค้า  </font> </a>  </li> 
                  	 
               	    
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูฝากเงิน/ประวัติฝากเงิน </font> </a>  </li> 
                    
                  	<li style="margin-top: -8px; "><a href="payment_bank.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ฝากเงิน/ประวัติฝากเงิน  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="member_bank.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ฝาก/ถอน ออมเงินดาวน์  </font> </a>  </li> 
               	    
               	    
                	    
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   ข้อมูลยอดค่าทำสัญญา/ค่าคอม </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="add_computer.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลยอดค่าทำสัญญา/ค่าคอม  </font> </a>  </li>  
                  	<li style="margin-top: -8px; "><a href="list_computer.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการค่าคอม  </font> </a>  </li>  
                    
                    
                      
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกยอดชำระหนี้ </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="savepayment_select2.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกยอดชำระหนี้  </font> </a>  </li>
                  	 
                  	<li style="margin-top: -8px; "><a href="history.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประวัติชำระหนี้  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="check_no_payment_loan.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลลูกหนี้ขาดส่ง  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="check_no_payment_loan_three.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลสงสัยหนี้จะศูนย์  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="npl_order.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ติดตามเครือง(จากการฟ้องคดี)   </font> </a>  </li> 
               	    
                  	
                  	
                  	
                   
                    <li><a href="#"> <img src="images/c4.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; เพิ่มประเภทข้อมูลรายการสินค้า </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="typedata.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสินค้า  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="typedata2.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทยี้ห้อ  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="typecolor.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสี  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="typestore.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทความจุ  </font> </a>  </li> 
                   
                   
                   
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เพิ่มสินค้า/ราคาสินค้า/สต๊อก </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="product.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายการสินค้า  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="product_edit_select.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการสินค้า  </font> </a>  </li> 
                  	
                  	
                   
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูขายหน้าร้าน </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="contact_store.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกขายสดหน้าร้าน  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="contact_store_edit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขบิลรายการขาย  </font> </a>  </li> 
                   
                   
                   
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูรับซ่อมมือถือ </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="mobile_restore.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกรายการรับซ่อมมือถือ  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="mobile_restore_edit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการรับซ่อมมือถือ  </font> </a>  </li> 
                  	
                  	<li style="margin-top: -8px; "><a href="store_cleam.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการข้อมูลร้านซ่อม  </font> </a>  </li> 
                  	
                  	<li style="margin-top: -8px; "><a href="cleam_bill.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; จัดการข้อมูลชำระค่าซ่อม  </font> </a>  </li> 
                   
                   
                   
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูเพิ่มทุน/รายการหักค่าใช้จ่าย </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="add_price.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มทุน  </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="add_price_payment_add.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกหักค่าทุนและค่าใช้จ่าย  </font> </a>  </li> 
                  	
                  	
                  	<!---
                  	<li style="margin-top: -8px; "><a href="add_price_other.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ค่าใช้จ่ายทั่วไป  </font> </a>  </li> 
                  	--->
                  	
                   
                    <li><a href="#"> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงาน </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report1.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดหนี้เสีย   </font> </a>  </li>
                  	<li style="margin-top: -8px; "><a href="report2.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดทุนและกำไร   </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report3.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานสต๊อกสินค้า   </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report4.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าใช้จ่ายต่าง  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report5.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าปรับแยกสาขา  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report6.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดหนี้เสีย NPL  </font> </a>  </li> 
                  	<li style="margin-top: -8px; "><a href="report7.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานเงินฝากแต่สาขา/สัญญา  </font> </a> </li> 
                  	<li style="margin-top: -8px; "><a href="report8.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าคอมทำรายการจ่ายเงิน  </font> </a> </li> 
                  	<li style="margin-top: -8px; "><a href="report9.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานขายสินค้าหน้าร้าน  </font> </a> </li> 
                  	<li style="margin-top: -8px; "><a href="report10.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายการการซ่อมมือถือ  </font> </a> </li>
                  	   
                    
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
                 
                 <!--
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                     <font size="2px" color="#FFF"> ยินตอนรับ คุณ นิด วัดดวง  สถานะ CEO    </font>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown"> 
                    <a class="dropdown-item"  href="profile.php"><font size="2px" color="black"> แก้ไขข้อมูลส่วนตัว </font></a>  
                    <a class="dropdown-item"  href="../check_out.php"><i class="fa fa-sign-out pull-right"></i><font size="2px" color="black"> ออกจากระบบ </font></a>
                  </div>
                  -->
                  
                   <li class="nav-item dropdown open" style="padding-left: 15px;">
                   </li> 
                   <div class="col-md-5"> 
                   </div>
                   <div class="col-md-3" align="center" style="background-color: #F4F5FA; border-radius: 10px; "> 
                   <p style="margin-top: 5px; margin-bottom: 5px; border-radius: 10px;  " > 
                    <font size="2px" color="#000" style="font-size: 14px;"> ยินดีตอนรับคุณ 
                    
                   <?php echo $_SESSION["Fullname"]; ?>
                    สถานะ <?php if($_SESSION["Status"] == "A"){ echo "แอดมิน"; }else{ echo $_SESSION["Status"];  }  ?> 
                    
                    </font> 
                   </p>
                   </div>
                   <div class="col-md-2">
                   <p style="margin-top: 5px; margin-bottom: 5px; border-radius: 10px;  " > 
                   &nbsp;  &nbsp; &nbsp;
                    <a href="profile.php">   
                    <font size="2px" color="#000" style="font-size: 14px;"> <img src="images/t1.png" style="width: 15px;" >   แก้ไขข้อมูลส่วนตัว  </font>    </a> 
                   </p>
                   </div>
                   <div class="col-md-2"> 
                   <p style="margin-top: 5px; margin-bottom: 5px; border-radius: 10px;  " > 
                   <a href="../check_out.php" style="text-decoration-line: none; "> <img src="images/t2.png" style="width: 15px;" >  <font size="2px" color="#000" style="font-size: 14px;">    ออกจากระบบ    </font> </a>
                   </p>
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
       