<meta charset="utf-8">
<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		 
	$bill_no =  $_POST["bill_no"]; 
	$codecustomer = $_POST["codecustomer"];  
		
	$check_status = "";
	$pasycal = "";
	$sql2 = "SELECT * FROM list_order where bill_no = '".$bill_no."'  ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$check_status = $objResult2["status"];  
		$pasycal = $objResult2["pasycal"];  
	} 
		
	if($check_status == "อนุมัติ/สัญญาโมฆะ"){
		
		 echo("<script>alert(' สัญญา อนุมัติ/สัญญาโมฆะ ไปแล้ว ')</script>");
		 echo("<script>window.location = 'cleam.php';</script>");
		
	}else  if($check_status == "ส่งคำขอยกเลิกเอกสาร"){
		
		 echo("<script>alert(' สัญญา ส่งคำขอยกเลิกเอกสาร ไปแล้ว ')</script>");
		 echo("<script>window.location = 'cleam.php';</script>");
		
	}else{
		 
		
	$strSQL = "SELECT * FROM list_order WHERE codecustomer = '".$codecustomer."' and bill_no != '". $bill_no ."'  ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		 echo("<script>alert(' รหัสลูกค้า (กรอกเอง) ซ้ำกับในระบบ!! ')</script>");
		 echo("<script>window.location = 'contact_cleam.php?bill_no=".$bill_no."';</script>");
	}
	else
	{	
	 
		$menu_id = $_POST["productid"];   
		$menu_id_back = $_POST["productidback"];   
		$customer = $_POST["customerid"];   
		$codecustomer = $_POST["codecustomer"];  
		
		$moneydata = $_POST["money"];  
		$moneydown = $_POST["moneydown"];  
		$money = $_POST["money"] - $_POST["moneydown"];  
		$daytotal = $_POST["daytotal"];  
		$dayprice = $_POST["dayprice"];  
		$pasy = $_POST["pasy"];  
		$cod = $_POST["cod"];  
		$moneycontact = $_POST["moneycontact"];  
		$percent = $_POST["percent"];  
		$computer = $_POST["computer"];  
		$computer2 = $_POST["computer2"];  
		$priceorder = $_POST["priceorder"];  
		
		$bank = $_POST["bank2"];  
		
		
		
		$datepicker = $_POST["startdate"];  
		$endate = $_POST["endate"];   
		$qrdata = $_POST["qrdata"];   
		
		$saveroom = ""; 
		$major = $_POST["major"]; 
		$major2 = ""; 

		$bill_ref  = "";  //// บิลอ้างอิง
		$bill_ref_cut  = ""; /// บิลที่ต้องหมดหนี้
		$typebill  = "บิลผ่อน";
		$bill_no =  $_POST["bill_no"]; 
		
		
		$appleid = $_POST["appleid"];  
		$password = $_POST["password"];  
		
		
		if($menu_id == $menu_id_back){
			
		$strSQL = " Update list_order Set  codecustomer = '".$codecustomer."',  
		bank = '".$bank."', 
		appleid = '".$appleid."', 
		password = '".$password."',
		qrdata = '".$qrdata."'  " ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			 
		$cut = explode("/",$_POST["startdate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$cut2 = explode("/",$_POST["endate"]);
		$date_income2 = $cut2[0]."-".$cut2[1]."-".($cut2[2]); 
			
		$daystart = date("Y-m-d", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income2)); 
 
			
		$bill_noRF = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_order_cleam_update  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_noRF =  "RF".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_order_cleam_update (bill_no) VALUES  ('".$bill_noRF."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

 
		$strSQL = "INSERT INTO list_order_cleam (bill_no, room, menu_id,
		money , daytotal, dayprice, daytotal2, startdate, endate, total, 
		create_date, create_date2, create_by, customer, create_time, status, typedata, dateold, endold,  
				
		codecustomer, moneydown, moneydata, pasy, cod, moneycontact,
		percent, computer, major, closebill, onoff, computer2, priceorder, menu_id2, bank, biil_ref, pasycal, qrdata
				
		) VALUES 
		(
		'".$bill_no."' ,'' ,'".$menu_id_back."',
		'".$money."', '".$daytotal."', '".$dayprice."', '".$daytotal."', '".$daystart."', '".$dayend."', '1', 
		'".date('d-m-Y')."', '".date('Y-m-d')."', '".$_SESSION["UserID"]."', '".$customer."', '".date('H:i')."', 'ปกติ', 
		'รายวัน', '".$datepicker."', '".$endate."', 
				 
		'".$codecustomer."', '".$moneydown."', '".$moneydata."', '".$pasy."', '".$cod."', '".$moneycontact."',
		'".$percent."', '".$computer."', '".$major."', 'เป็นหนี้', 'ปกติ', '".$computer2."', '".$priceorder."', '".$menu_id."', '".$bank."', '".$bill_noRF."', '".$pasycal."', '".$qrdata."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
			//echo $strSQL;
			
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$menu_id_back."', '".$menu_id."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' อัพเดตรายการเปลี่ยนเครื่อง  ', '".$bill_noRF."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	
					 
			 
		  echo("<script>alert(' ทำรายการสำเร็จ ')</script>"); 
		  echo("<script>window.location = 'cleam.php';</script>");
			
		}else{
			 
		$total = 1;
		$total_check = 0;
		$computer = "";
		$sql2 = "SELECT * FROM product where pk = '".$menu_id."'  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 $total_check = $objResult2["total"];   
		} 
		
		if($total_check < $total){
				 
		  echo("<script>alert(' รายการสินค้านี้ได้ทำรายการขายไปแล้ว ')</script>"); 
		  echo("<script>window.location = 'contact_cleam.php?bill_no=".$bill_no."';</script>");
			
		}else{ 
			 
		//// คืนรายการเก่า 
		/*
		$strSQL = " Update product Set total = '1' ,  status = 'พร้อมจำหน่าย'   " ;
		$strSQL .=" WHERE pk = '". $menu_id_back ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		*/
			
			
		/// หักรายการใหม่
		$strSQL = " Update product Set total = '0' ,  status = 'ไม่พร้อมจำหน่าย'    " ;
		$strSQL .=" WHERE pk = '". $menu_id ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
		/// 
		$strSQL = " Update list_order Set menu_id = '".$menu_id."',  
		codecustomer = '".$codecustomer."',  
		bank = '".$bank."',  
		appleid = '".$appleid."', 
		password = '".$password."',
		qrdata = '".$qrdata."'  " ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			 
 
		$cut = explode("/",$_POST["startdate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$cut2 = explode("/",$_POST["endate"]);
		$date_income2 = $cut2[0]."-".$cut2[1]."-".($cut2[2]); 
			
		$daystart = date("Y-m-d", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income2)); 
 
			
		$bill_noRF = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_order_cleam_update  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_noRF =  "RF".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_order_cleam_update (bill_no) VALUES  ('".$bill_noRF."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

 
		$strSQL = "INSERT INTO list_order_cleam (bill_no, room, menu_id,
		money , daytotal, dayprice, daytotal2, startdate, endate, total, 
		create_date, create_date2, create_by, customer, create_time, status, typedata, dateold, endold,  
				
		codecustomer, moneydown, moneydata, pasy, cod, moneycontact,
		percent, computer, major, closebill, onoff, computer2, priceorder, menu_id2, bank, biil_ref, pasycal, qrdata,
		w_status_save, w_typedata
				
		) VALUES 
		(
		'".$bill_no."' ,'' ,'".$menu_id_back."',
		'".$money."', '".$daytotal."', '".$dayprice."', '".$daytotal."', '".$daystart."', '".$dayend."', '1', 
		'".date('d-m-Y')."', '".date('Y-m-d')."', '".$_SESSION["UserID"]."', '".$customer."', '".date('H:i')."', 'ปกติ', 
		'รายวัน', '".$datepicker."', '".$endate."', 
				 
		'".$codecustomer."', '".$moneydown."', '".$moneydata."', '".$pasy."', '".$cod."', '".$moneycontact."',
		'".$percent."', '".$computer."', '".$major."', 'เป็นหนี้', 'ปกติ', '".$computer2."', '".$priceorder."', '".$menu_id."', '".$bank."', '".$bill_noRF."', '".$pasycal."', '".$qrdata."',
		'รอตรวจสอบ', 'เครมสินค้า'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
					 
		/*
		$strSQL = " Update list_order Set closebill = 'หมดหนี้', w_status_save = 'รอตรวจสอบ', w_typedata = 'คืนเครื่อง' " ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		*/
			
			
		$name_back = "";
		$name_back2 = "";
		$computer = "";
		$sql2 = "SELECT * FROM product where pk = '".$menu_id_back."'  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 $name_back = $objResult2["name"];  
			 $computer = $objResult2["computer"];  
		} 
		$sql2 = "SELECT * FROM product where pk = '".$menu_id."'  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 $name_back2 = $objResult2["name"];  
		} 
			
		
		if($computer == "ชำระค่าคอมไปแล้ว"){ 
			$strSQL = " Update product Set computer = 'ไม่ต้องจ่ายค่าคอม (เคลมสินค้า)', bill_no_ref = '".$bill_no."'     " ;
			$strSQL .=" WHERE pk = '". $menu_id ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
		}
		if($computer == "ไม่ต้องจ่ายค่าคอม (เคลมสินค้า)"){ 
			$strSQL = " Update product Set computer = 'ไม่ต้องจ่ายค่าคอม (เคลมสินค้า)', bill_no_ref = '".$bill_no."'    " ;
			$strSQL .=" WHERE pk = '". $menu_id ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
		}
			
		 
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no, cleam_bk, cleam_new ) VALUES  ( '".$menu_id_back."', '".$menu_id."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' เปลี่ยนเครื่อง ".$name_back." -> ".$name_back2." ', '".$bill_noRF."', '".$bill_no."', '".$menu_id_back."', '".$menu_id."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	
					 
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		   echo("<script>window.location = 'contact_cleam.php?bill_no=".$bill_no."';</script>");
			
				} 
			} 
		}
	}
		
		
		
		
	}
?>