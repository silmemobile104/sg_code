<meta charset="utf-8">
<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	}else{
		 
	 
		$menu_id = $_POST["productid"];   
		$customer = $_POST["customer"];   
		$codecustomer = $_POST["codecustomer"];  
		$producttype = $_POST["producttype"];  
		$payment = $_POST["payment"];  
		$menu_id_back = $_POST["productidback"];  
		
		$moneydata = $_POST["money"];  
		$moneydown = "";  
		$money = $_POST["money"];  
		$moneyback = $_POST["moneyback"];  
		$daytotal = "";   
		$dayprice = "";   
		$pasy = $_POST["pasy"];  
		$pasycal = $_POST["pasycal"];  
		$cod = "";    
		$moneycontact = "";   
		$percent = "";  
		$computer = "";  
		$computer2 = "";    
		$priceorder = "";   
		
		
		
		$datepicker = ""; 
		$endate = "";  
		
		$saveroom = ""; 
		$major = $_POST["major"]; 
		$major2 = ""; 

		$bill_ref  = "";  //// บิลอ้างอิง
		$bill_ref_cut  = ""; /// บิลที่ต้องหมดหนี้
		$typebill  = "ซื้อหน้าร้าน";
		$bill_no =  $_POST["bill_no"]; 
		
		
		if($menu_id == $menu_id_back){
			/// 
		$strSQL = " Update list_order_store Set 
		money = '".$money."'  ,  
		menu_id = '".$menu_id."'  ,  
		major = '".$major."'    ,
		customer = '".$customer."'    ,
		codecustomer = '".$codecustomer."'   , 
		pasy = '".$pasy."'    ,
		pasycal = '".$pasycal."'    ,
		payment = '".$payment."'   
		" ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
			
			
		$daystart = date("Y-m-d", strtotime(date('d-m-Y'))); 
		$dayend = date("Y-m-d", strtotime(date('d-m-Y'))); 

 
		 
  			/*
				$strSQL = "INSERT INTO list_order_cleam (bill_no, room, menu_id,
				money , daytotal, dayprice, daytotal2, startdate, endate, total, 
				create_date, create_date2, create_by, customer, create_time, status, typedata, dateold, endold,  
				
				codecustomer, moneydown, moneydata, pasy, cod, moneycontact,
				percent, computer, major, closebill, onoff, computer2, priceorder, menu_id2
				
				) VALUES 
				(
				'".$bill_no."' ,'' ,'".$menu_id_back."',
				'".$money."', '".$daytotal."', '".$dayprice."', '".$daytotal."', '".$daystart."', '".$dayend."', '1', 
				'".date('d-m-Y')."', '".date('Y-m-d')."', '".$_SESSION["UserID"]."', '".$customer."', '".date('H:i')."', 'ปกติ', 
				'รายวัน', '".$datepicker."', '".$endate."', 
				 
				'".$codecustomer."', '".$moneydown."', '".$moneydata."', '".$pasy."', '".$cod."', '".$moneycontact."',
				'".$percent."', '".$computer."', '".$major."', 'หมดหนี้', 'ปกติ', '".$computer2."', '".$priceorder."', '".$menu_id."'   
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
			 
			
			//// คืนรายการเก่า 
			$strSQL = " Update list_order_cleam Set 
			menu_id = '".$menu_id_back."', 
			money = '".$money."', 
			codecustomer = '".$codecustomer."', 
			pasy = '".$pasy."', 
			cod = '".$cod."', 
			moneycontact = '".$moneycontact."', 
			percent = '".$percent."', 
			computer = '".$computer."', 
			computer2 = '".$computer2."', 
			priceorder = '".$priceorder."', 
			menu_id2 = '".$menu_id."', 
			
			status = 'พร้อมจำหน่าย'   " ;
			$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
			*/ 
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำการอัพเดตรายการ  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
	
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ราคาตั้งขาย ".$moneyback." -> ".$money."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
		
			
			
		  //echo("<script>alert(' ทำรายการสำเร็จ ')</script>"); 
		  echo("<script>window.location = 'contact_store_edit.php';</script>");
			
		}else{
			 
		$total = 1;
		$total_check = 0;
		$sql2 = "SELECT * FROM product where pk = '".$menu_id."'  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			 $total_check = $objResult2["total"];  
		} 
		
		if($total_check < $total){
				 
		  echo("<script>alert(' รายการสินค้านี้ได้ทำรายการขายไปแล้ว ')</script>"); 
		  echo("<script>window.location = 'contact_store_edit_cleam.php?bill_no=".$bill_no."';</script>");
			
		}else{ 
			 
		//// คืนรายการเก่า 
		$strSQL = " Update product Set total = '1', status = 'พร้อมจำหน่าย'   " ;
		$strSQL .=" WHERE pk = '". $menu_id_back ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
			
		/// หักรายการใหม่
		$strSQL = " Update product Set total = '0', status = 'ไม่พร้อมจำหน่าย'  " ;
		$strSQL .=" WHERE pk = '". $menu_id ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
		/// 
		$strSQL = " Update list_order_store Set 
		money = '".$money."'  ,  
		menu_id = '".$menu_id."'  ,  
		major = '".$major."'    ,
		customer = '".$customer."'    ,
		codecustomer = '".$codecustomer."'   , 
		pasy = '".$pasy."'    ,
		pasycal = '".$pasycal."'    ,
		payment = '".$payment."'   
		" ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			 
		 /// echo $strSQL;
 
	 
		
		$daystart = date("Y-m-d", strtotime(date('d-m-Y'))); 
		$dayend = date("Y-m-d", strtotime(date('d-m-Y'))); 
 
			 
			
					
			$p_back = "";
			$sql = "SELECT * FROM product where pk = '".$menu_id_back."' order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$p_back = $objResult["name"];
			}
			
			$p_backsend = "";
			$sql = "SELECT * FROM product where pk = '".$menu_id."' order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$p_backsend = $objResult["name"];
			}
					 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' เปลี่ยนรายการสินค้า  ".$p_back." -> ".$p_backsend."   ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ราคาตั้งขาย ".$moneyback." -> ".$money."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
		
			 ///echo $strSQL;
			 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
			  echo("<script>window.location = 'contact_store_edit.php';</script>");
			
			} 
		}
	}
?>