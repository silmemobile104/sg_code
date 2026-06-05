<meta charset="utf-8">
<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	}else{
		 
		 
		$bank2 = $_POST["bank2"];   
		$qrdata = $_POST["qrdata"];   
		$bill_no = $_POST["bill_no"];   
		$dayround = $_POST["daytotal"];   
		$loopdata = $_POST["daytotal"];   
		$cut = explode("/", $_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart = date("Y-m-d", strtotime($date_income));  
									
		for($loop = 1; $loop <= $loopdata; $loop++){   
			  
			$daystart1 = date("Y-m-d", strtotime($date_income)); 
			$daystart2 = date("Y-m-d", strtotime($date_income)); 
			if($loop == 1){
			$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart1 ) ) . "+0 month" ) );	
			}else{
			$monthadd =  $loop - 1;
			$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart2 ) ) . "+$monthadd month" ) );	
			} 
		 
			
				 
			$endate = $myDate;
		}	
	  
			/// 
		$strSQL = " Update list_order_partner Set 
		bank2 = '".$bank2."',  
		qrdata = '".$qrdata."',  
		admin_apple = '".$create_by."',  
		codecustomer = '".$_POST["codecustomer"]."',  
		savedate = '".$_POST["savedate"]."',  
		typedatasave = '".$_POST["typedatasave"]."',  
		statusadmin = '".$_POST["statusadmin"]."',  
		admin1 = '".$_POST["admin1"]."',  
		admin2 = '".$_POST["admin2"]."',  
		admin3 = '".$_POST["admin3"]."',  
		admin4 = '".$_POST["admin4"]."',  
		admin5 = '".$_POST["admin5"]."',  
		admin6 = '".$_POST["admin6"]."',  
		admin7 = '".$_POST["admin7"]."',  
		startdate = '".$_POST["startdate"]."',  
		enddate = '".$myDate."',  
		data1 = '".$_POST["data1"]."',  
		data2 = '".$_POST["data2"]."',  
		data3 = '".$_POST["data3"]."',  
		data4 = '".$_POST["data4"]."',  
		data5 = '".$_POST["data5"]."',  
		data6 = '".$_POST["data6"]."',  
		data7 = '".$_POST["data7"]."',  
		data8 = '".$_POST["data8"]."',  
		typedataproduct = '".$_POST["typedataproduct"]."',  
		typedataproduct2 = '".$_POST["typedataproduct2"]."',  
		typestore = '".$_POST["typestore"]."',  
		typecolor = '".$_POST["typecolor"]."',  
		dataimei = '".$_POST["dataimei"]."',  
		moneystartprice = '".$_POST["moneystartprice"]."',  
		moneyprice = '".$_POST["moneyprice"]."',  
		moneydown = '".$_POST["moneydown"]."',  
		cod = '".$_POST["cod"]."',  
		daypriceall3 = '".$_POST["daypriceall3"]."',  
		daytotal = '".$_POST["daytotal"]."',  
		daypriceshow1 = '".$_POST["daypriceshow1"]."',  
		moneymonthshow = '".$_POST["moneymonthshow"]."',  
		daypayment = '".$_POST["daypayment"]."',  
		dataicloud = '".$_POST["dataicloud"]."',  
		pasycal = '".$_POST["pasycal"]."' 
		" ;
		$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
		$objQuery = mysqli_query($objCon, $strSQL);
			
	 
		///echo $strSQL;
		  //echo("<script>alert(' ทำรายการสำเร็จ ')</script>"); 
		  echo("<script>window.location = 'checkcontactpartner.php';</script>");
			
		  
	}
?>