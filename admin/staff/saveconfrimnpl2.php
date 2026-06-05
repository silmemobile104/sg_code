<?php  
session_start();
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
	
		  
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		
		 $priceorder = $_GET["priceorder"];
		 $typenpl1 = "ปิดยอด";
		 $typenpl2 = $_GET["typenpl2"];
		 $discount = $_GET["discount"];
		 $note = $_GET["note"];
		 $bill_no = $_GET["bill_no"];
		 $n_addon_price = $_GET["data11"];
		 $totalprinend = $_GET["totalprinend"];
			 
		 $datesavedata1 = $_GET["datesavedata11"];
			 
 
		$cut = explode("/",$datesavedata1);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
			 
		 $strSQL = "SELECT * FROM list_order WHERE bill_no = '". $bill_no ."' and typenpl1 = '' ";
		$objQuery = mysqli_query($objCon, $strSQL);
		$objResult = mysqli_fetch_array($objQuery);
		if($objResult)
		{ 
			
				$bill_no2 = ""; 
				$GGyear= date('Y')+543 ; 
				$sql2 = "SELECT count(pk) as total FROM run_bill_cancel2  ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$total = $objResult2["total"] + 1;  
				} 

				$bill_no2 =  "BLSGMM".date('Ymd')."-".$total; 
				$strSQL = "INSERT INTO run_bill_cancel2 (bill_no) VALUES  ('".$bill_no2."')";  
				$objQuery = mysqli_query($objCon, $strSQL);
							
			
			
				 $strSQL = "Update list_order Set 
				 totalprinend = '".$totalprinend."',    
				 npl_bill = '".$bill_no2."',    
				 priceorder = '".$priceorder."',      
				 typenpl1 = '".$typenpl1."',      
				 typenpl2 = '".$typenpl2."',         
				 discount = '".$discount."',         
				 note = '".$note."',         
				 n_addon_price = '".$n_addon_price."',         
				 npl_datestart = '".$daystart."',         
				 npl_datestart2 = '".$dayend."',         
				 npl_datetime = '".date('H:i:s')."',         
				 npl_createby = '".$_SESSION["UserID"]."' " ;
				 $strSQL .=" WHERE bill_no = '". $bill_no ."' ";  
				 $objQuery = mysqli_query($objCon, $strSQL); 
		 
			///echo $strSQL;
			
			
			$strSQL = " Update list_order Set closebill = 'หมดหนี้'  " ;
			$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);

			$strSQL = " Update history_payment Set closebill = 'หมดหนี้'  " ;
			$strSQL .=" WHERE bill_no = '". $bill_no ."' "; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$typenpl1."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
		}
		 
	}
			    $data = array(
				   'ans' => "1" 
				); 

echo json_encode($data);
?>