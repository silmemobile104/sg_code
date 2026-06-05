<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		 
	$strSQL = "SELECT * FROM list_order WHERE codecustomer = '".($_POST['codecustomer'])."'  and status != 'อนุมัติ/สัญญาโมฆะ'  ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		 echo("<script>alert(' รหัสลูกค้า ซ้ำกับในระบบ!!')</script>");
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'check_contact.php';</script>");
	}
	else
	{	
		$menu_id = $_POST["productid"];   
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
		
		$appleid = $_POST["appleid"];  
		$password = $_POST["password"];  
		
		$bank = $_POST["bank2"];  
		$pasycal = $_POST["pasycal"];  
		
		
		$datepicker = $_POST["startdate"];  
		$endate = $_POST["endate"];   
		$qrdata = $_POST["qrdata"];   
		
		$saveroom = ""; 
		$major = $_POST["major"]; 
		$major2 = ""; 

		$bill_ref  = "";  //// บิลอ้างอิง
		$bill_ref_cut  = ""; /// บิลที่ต้องหมดหนี้
		$typebill  = "บิลผ่อน";
		
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
		  echo("<script>window.location = 'check_contact.php';</script>");
			
		}else{ 
			 
		$strSQL = " Update product Set total = '0', status = 'บันทึกทำสัญญาผ่อนมือถือ'  " ;
		$strSQL .=" WHERE pk = '". $menu_id ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
	   
  
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGB".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

 
		$cut = explode("/",$_POST["startdate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$cut2 = explode("/",$_POST["endate"]);
		$date_income2 = $cut2[0]."-".$cut2[1]."-".($cut2[2]); 
			
			
		$daystart = date("Y-m-d", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income2)); 

		$addday = ($_POST["daytotal"]-1);
		$data1 = $_POST["dayprice"];
			
		/*
		for($i = 0; $i<= $addday; $i++){ 
 
			$cal_day = $i * 30;
			$datecal =  date("d-m-Y", strtotime("+ ".$cal_day." day", strtotime($daystart)));
			$datecal2 =  date("Y-m-d", strtotime("+ ".$cal_day." day", strtotime($daystart)));

			$strSQL = "INSERT INTO history_payment (bill_no, datestart, money, income, orderdata, create_date2, create_by, date_time, date_start, date_start2, room, status, onoff, typedata, paymentother, customer, closebill, major, onoff_copy   ) 
			VALUES ( '".$bill_no."', '".$datecal."',  '".$data1."', '', '".$i."', '".$datecal2."', '', '', '', '', '".$saveroom."', 'ปกติ', 'ปกติ', 'รายวัน', '', '".$customer."', 'เป็นหนี้', '".$major."', 'ปกติ'   )"; 
			$objQuery = mysqli_query($objCon, $strSQL);   
					
			 
			$endate = $datecal2;
		}
		*/
			
			///  echo $addday;
			
		$dayround = $_POST["daytotal"];   
		for($i = 1; $i<= $dayround; $i++){  
			 
			
			$cut = explode("/", $_POST["dateincome".$i] );
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
			$datecal =  date("d-m-Y", strtotime($date_income)); 
			$datecal2 = date("Y-m-d", strtotime($date_income)); 
				
			
			$moneycreate = ""; 
			$strSQL = "INSERT INTO history_payment (bill_no, datestart, money, income, orderdata, create_date2, create_by, date_time, date_start, date_start2, room, status, onoff, typedata, paymentother, customer, closebill, major, onoff_copy   ) 
			VALUES ( '".$bill_no."', '".$datecal."',  '".$data1."', '', '".$i."', '".$datecal2."', '', '', '', '', '".$saveroom."', 'ปกติ', 'ปกติ', 'รายวัน', '', '".$customer."', 'เป็นหนี้', '".$major."', 'ปกติ'   )"; 
			$objQuery = mysqli_query($objCon, $strSQL);    
				
			$endate = $datecal2;
		}
  
			
			
		$cut = explode("/",$_POST["datesave"]);
		$savedatedata1 = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$savedata1 = date("d-m-Y", strtotime($savedatedata1)); 
		$savedata2 = date("Y-m-d", strtotime($savedatedata1)); 
			
			
			
  
		$strSQL = "INSERT INTO list_order (bill_no, room, menu_id,
		money , daytotal, dayprice, daytotal2, startdate, endate, total, 
		create_date, create_date2, create_by, customer, create_time, status, typedata, dateold, endold,  

		codecustomer, moneydown, moneydata, pasy, cod, moneycontact,
		percent, computer, major, closebill, onoff, computer2, priceorder, appleid, password, onoff_copy, bank, pasycal, qrdata

		) VALUES 
		(
		'".$bill_no."' ,'' ,'".$menu_id."',
		'".$money."', '".$daytotal."', '".$dayprice."', '".$daytotal."', '".$daystart."', '".$endate."', '1', 
		'".$savedata1."', '".$savedata2."', '".$_SESSION["UserID"]."', '".$customer."', '".date('H:i')."', 'ปกติ', 
		'รายวัน', '".$datepicker."', '".$endate."', 

		'".$codecustomer."', '".$moneydown."', '".$moneydata."', '".$pasy."', '".$cod."', '".$moneycontact."',
		'".$percent."', '".$computer."', '".$major."', 'เป็นหนี้', 'ปกติ', '".$computer2."', '".$priceorder."', 
		'".$appleid."', '".$password."', 'ปกติ', '".$bank."', '".$pasycal."', '".$qrdata."'  
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
					
				
			
		$sql = "SELECT * FROM product Where  pk = '". $menu_id ."' ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{   
			$bill_no_product = $objResult["bill_no"];    
		}  	
			
			
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no_product."', '".$bill_no_product."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' ออกบิลรายการขายสินค้า ', '".$bill_no."', '".$bill_no_product."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	
					 
			
			 
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
		percent, computer, major, closebill, onoff, computer2, priceorder, menu_id2, bank, biil_ref
				
		) VALUES 
		(
		'".$bill_no."' ,'' ,'".$menu_id."',
		'".$money."', '".$daytotal."', '".$dayprice."', '".$daytotal."', '".$daystart."', '".$dayend."', '1', 
		'".date('d-m-Y')."', '".date('Y-m-d')."', '".$_SESSION["UserID"]."', '".$customer."', '".date('H:i')."', 'ปกติ', 
		'รายวัน', '".$datepicker."', '".$endate."', 
				 
		'".$codecustomer."', '".$moneydown."', '".$moneydata."', '".$pasy."', '".$cod."', '".$moneycontact."',
		'".$percent."', '".$computer."', '".$major."', 'เป็นหนี้', 'ปกติ', '".$computer2."', '".$priceorder."', '".$menu_id."', '".$bank."', '".$bill_noRF."'   
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
					 
			
		 
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$menu_id_back."', '".$menu_id."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' เปลี่ยนเครื่อง ', '".$bill_noRF."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	
					 
		
			
			
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'contact.php';</script>");
			
		}
	}
	}
?>