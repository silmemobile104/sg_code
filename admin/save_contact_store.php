<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	}else{
		 
	 
		$bank = $_POST["droppaymentbank"];
		
		$menu_id = $_POST["productid"];   
		$customer = $_POST["customer"];   
		$codecustomer = $_POST["codecustomer"];  
		$producttype = $_POST["producttype"];  
		$payment = $_POST["payment"];  
		
		$moneydata = $_POST["money"];  
		$moneydown = "";  
		$money = $_POST["money"];  
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
		  echo("<script>window.location = 'contact_store.php';</script>");
			
		}else{ 
			 
		$strSQL = " Update product Set total = '0', status = 'ขายหน้าร้าน'  " ;
		$strSQL .=" WHERE pk = '". $menu_id ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
	   
  
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill2  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "BSG".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill2 (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);
 
			
		$daystart = date("Y-m-d", strtotime(date('d-m-Y'))); 
		$dayend = date("Y-m-d", strtotime(date('d-m-Y'))); 

		 
  
				$strSQL = "INSERT INTO list_order_store ( bill_no, room, menu_id,
				major , customer, codecustomer, money, pasy, pasycal, 
				payment, create_date, create_date2, create_by , create_time, bank
				) VALUES 
				(
				'".$bill_no."' ,'' ,'".$menu_id."',
				'".$major."', '".$customer."',  '".$codecustomer."', '".$money."', '".$pasy."',  
				'".$pasycal."', '".$payment."',  
				'".date('d-m-Y')."', '".date('Y-m-d')."', '".$_SESSION["UserID"]."', '".date('H:i')."', '".$bank."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
					
					 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำการสร้างรายการ ".$bill_no."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

			
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'contact_store_edit.php';</script>");
			
		} 
	}
?>