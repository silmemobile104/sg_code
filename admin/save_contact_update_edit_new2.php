<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	$bill_no = $_POST["bill_no"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
		 
	$strSQL = "SELECT * FROM list_order WHERE codecustomer = '".($_POST['codecustomer'])."'  and status != 'อนุมัติ/สัญญาโมฆะ' and bill_no != '".$bill_no."'  ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		 echo("<script>alert(' รหัสลูกค้า ซ้ำกับในระบบ!!')</script>"); 
		 echo("<script>window.location = 'contact_edit_full.php?bill_no=".$bill_no."';</script>");
	}
	else
	{	
		$menu_id = $_POST["productid"];   
		$customer = $_POST["customerid"];   
		$codecustomer = $_POST["codecustomer"];  
		  
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
		
		
		//// ทำการ  คืน  Srock และอัพเดตรายการ 
		 
		
		
		//// $moneystartprice = $_POST["moneystartprice"]; 
		/// $money = $_POST["money"]; 
		
		
		///// $priceorder = $_POST["priceorder"];  
		///// $moneydata = $_POST["money"]; 
		$priceorder = $_POST["moneystartprice"];  
		$moneydata = $_POST["money"];  
		$productidback = $_POST["productidback"];  
		$contactstatus = $_POST["contactstatus"];  
		 
		$strSQL = " Update list_order Set    percent = '".$percent."'   " ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
						
	 
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 echo("<script>window.location = 'contact_edit_full2.php?bill_no=".$bill_no."';</script>");
			 
		}
	}
?>