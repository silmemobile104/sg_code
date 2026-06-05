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
							 
			 ?>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print  " style="background-color: #323D55; margin-top: -10px; ">
              <div class="menu_section">
                 
                <ul class="nav side-menu">
                 	
                 	<?php if($chk1 == "Dashboard"){ ?>
                  	<li><a href="index.php"> <img src="images/c1.png" style="width: 13px; margin-left: 5px; " > <font size="2px"  color="<?php echo $page1; ?>"> &nbsp;  Dashboard </font> </a> </li> 
                  	<?php } ?>
                  	 
                  	 
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   จัดการข้อมูลพื้นฐานภายในบริษัท </font> </a>  </li> 
                	    
                 	<?php if($chk3 == "เพิ่มข้อมูลสาขา"){ ?>
                  	<li style="margin-top: -8px; "><a href="major.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มข้อมูลสาขา </font> </a>  </li>   
                  	<?php } ?>
                  	
                 	<?php if($chk2 == "เพิ่มข้อมูลร้านค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="store.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มข้อมูลร้านค้า </font> </a>  </li> 
                  	<?php } ?> 
                  	  
                 	<?php if($chk4 == "เพิ่มสถานะผู้ใช้งาน"){ ?>
                  	<li style="margin-top: -8px; "><a href="type_staff.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มสถานะผู้ใช้งาน </font> </a>  </li> 
                  	<?php } ?>  
                  	  
                 	<?php if($chk5 == "กำหนดสิทธิ์การเข้าถึงระบบ"){ ?>
                 	<!--
                  	<li style="margin-top: -8px; "><a href="staff.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; กำหนดสิทธิ์การเข้าถึงระบบ  </font> </a>  </li> 
                  	-->
                  	
                  		 <?php 
						$sql = "SELECT * FROM drop_type_staff   order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{ 
						?>
                  			<li style="margin-top: -8px; "><a href="staff.php?postion=<?php echo $objResult["pk"]; ?>""> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; <?php echo $objResult["name"]; ?>   </font> </a>  </li>  
						<?php  
						}
						?>   
                 	
                 	
                  	<?php } ?>
                  	  
                   
                    <li><a href="#"> <img src="images/c3.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   จัดการข้อมูลลูกค้า </font> </a>  </li>
                     
                 	<?php if($chk7 == "เพิ่มรายชื่อลูกค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="customer.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายชื่อลูกค้า  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk8 == "แก้ไขรายชื่อลูกค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="customer_edit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายชื่อลูกค้า  </font> </a>  </li>
                  	<?php } ?>
                	    
                   
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกทำสัญญาผ่อนมือถือ </font> </a>  </li> 
                  	
                 	<?php if($chk10 == "ออกบันทึกทำสัญญา"){ ?>
                  	<li style="margin-top: -8px; "><a href="contact.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ออกบันทึกทำสัญญา  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk11 == "ตรวจสอบคำขอยกเลิกสัญญา"){ ?>
                  	<li style="margin-top: -8px; "><a href="check_contact.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ตรวจสอบคำขอยกเลิกสัญญา  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk12 == "พิมพ์ใบเอกสารสัญญา/ใบเสร็จ"){ ?>
                  	<li style="margin-top: -8px; "><a href="contact_print.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; พิมพ์ใบเอกสารสัญญา/ใบเสร็จ  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk13 == "ประวัติชำระหนี้"){ ?>
                  	<li style="margin-top: -8px; "><a href="history.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประวัติชำระหนี้  </font> </a>  </li>
                  	<?php } ?>
                	    
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   ข้อมูลยอดค่าทำสัญญา/ค่าคอม </font> </a>  </li>
                  	
                 	<?php if($chk15 == "ข้อมูลยอดค่าทำสัญญา/ค่าคอม"){ ?>
                  	<li style="margin-top: -8px; "><a href="add_computer.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ข้อมูลยอดค่าทำสัญญา/ค่าคอม  </font> </a>  </li> 
                  	<?php } ?>
                    
                      
                    <li><a href="#"> <img src="images/c2.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   บันทึกยอดชำระหนี้ </font> </a>  </li> 
                  	
                 	<?php if($chk14 == "บันทึกยอดชำระหนี้"){ ?>
                  	<li style="margin-top: -8px; "><a href="savepayment.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกยอดชำระหนี้  </font> </a>  </li> 
                  	<?php } ?>
                   
                    <li><a href="#"> <img src="images/c4.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp; เพิ่มประเภทข้อมูลรายการสินค้า </font> </a>  </li> 
                  	
                 	<?php if($chk17 == "ประเภทสินค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="typedata.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสินค้า  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk18 == "ประเภทยี้ห้อ"){ ?>
                  	<li style="margin-top: -8px; "><a href="typedata2.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทยี้ห้อ  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk19 == "ประเภทสี"){ ?>
                  	<li style="margin-top: -8px; "><a href="typecolor.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; ประเภทสี  </font> </a>  </li> 
                  	<?php } ?>
                   
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เพิ่มสินค้า/ราคาสินค้า/สต๊อก </font> </a>  </li> 
                  	
                 	<?php if($chk21 == "เพิ่มรายการสินค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="product.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มรายการสินค้า  </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk22 == "แก้ไขรายการสินค้า"){ ?>
                  	<li style="margin-top: -8px; "><a href="product_edit_select.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการสินค้า  </font> </a>  </li> 
                  	<?php } ?>
                   
                 	<?php if($chk23 == "เมนูขายหน้าร้าน"){ ?>
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูขายหน้าร้าน </font> </a>  </li> 
                     
                  	<li style="margin-top: -8px; "><a href="savepayment_store.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกขายสดหน้าร้าน  </font> </a>  </li>
                   
                  	<li style="margin-top: -8px; "><a href="savepayment_storeedit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขบิลรายการขาย  </font> </a>  </li> 
                  	
                  	<?php } ?>
                   
                 	<?php if($chk16 == "เมนูรับซ่อมมือถือ"){ ?>
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูรับซ่อมมือถือ </font> </a>  </li> 
                  	
                 	 
                  	<li style="margin-top: -8px; "><a href="savepayment_mobile.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกรายการรับซ่อมมือถือ  </font> </a>  </li>
                   
                  	
                 	 
                  	<li style="margin-top: -8px; "><a href="savepayment_mobile_edit.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; แก้ไขรายการรับซ่อมมือถือ  </font> </a>  </li> 
                  	<?php } ?>
                  	 
                   
                 	<?php if($chk20 == "เมนูเพิ่มทุน/รายการหักค่าใช้จ่าย"){ ?>
                    <li><a href="#"> <img src="images/c5.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   เมนูเพิ่มทุน/รายการหักค่าใช้จ่าย </font> </a>  </li> 
                  	
                 	 
                  	<li style="margin-top: -8px; "><a href="add_price.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; เพิ่มทุน  </font> </a>  </li>
                  	 
                  	
                 	 
                  	<li style="margin-top: -8px; "><a href="add_price_payment.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; บันทึกหักค่าทุนและค่าใช้จ่าย  </font> </a>  </li>
                  	<?php } ?>
                  	 
                   
                    <li><a href="#"> <img src="images/c6.png" style="width: 13px; margin-left: 5px;  " >  <font size="2px"  color="<?php echo $page4; ?>"> &nbsp;   สรุปรายงาน </font> </a>  </li> 
                  	
                 	<?php if($chk24 == "รายงานยอดหนี้เสียแต่ละสาขา"){ ?>
                  	<li style="margin-top: -8px; "><a href="report1.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดหนี้เสีย   </font> </a>  </li>
                  	<?php } ?>
                  	
                 	<?php if($chk25 == "รายงานยอดทุนและกำไรแต่ละสาขา"){ ?>
                  	<li style="margin-top: -8px; "><a href="report2.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานยอดทุนและกำไร   </font> </a>  </li> 
                  	<?php } ?>
                  	
                 	<?php if($chk26 == "รายงานสต๊อกสินค้าแต่ละสาขา"){ ?>
                  	<li style="margin-top: -8px; "><a href="report3.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานสต๊อกสินค้า   </font> </a>  </li> 
                  	<?php } ?>
                  	
                 	<?php if($chk27 == "รายงานค่าใช้จ่ายต่าง"){ ?>
                  	<li style="margin-top: -8px; "><a href="report4.php"> &nbsp; <img src="images/bb.png"  style="width: 5px; margin-left: 8px; " > <font size="1px" style=" font-size: 13px; "  color="#A3AFB6">  &nbsp; รายงานค่าใช้จ่ายต่าง  </font> </a>  </li> 
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
                   <div class="col-md-4"> 
                   </div>
                   <div class="col-md-4" align="center"  > 
                   <div class="btn btn-sm" align="center" style="background-color: #F4F5FA; border-radius: 10px; "  > 
                   <p style="margin-top: 5px; margin-bottom: 5px; border-radius: 10px;  " > 
                    <font size="2px" color="#000" style="font-size: 14px;"> ยินดีตอนรับคุณ 
                    
                   <?php echo $_SESSION["Fullname"]; ?>
                    สถานะ <?php if($_SESSION["Status"] == "A"){ echo "แอดมิน"; }else{ echo $name_po;  }  ?> 
                    
                    </font> 
                   </p>
                   </div>
                   </div>
                   <div class="col-md-2" a>
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
       