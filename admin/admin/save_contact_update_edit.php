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
	$appleid = $_POST["appleid"];  
	$password = $_POST["password"];  
		
	$strSQL = " SELECT * FROM list_order where codecustomer = '".$codecustomer."' and bill_no != '".$bill_no."'  ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' รหัสลูกค้า ซ้ำกับในระบบ!!')</script>");
		echo("<script>window.location = 'contact.php?bill_no=".$bill_no."&page=2';</script>");
	}
	else
	{	
		$strSQL = " Update list_order Set codecustomer = '".$codecustomer."',
		appleid = '".$appleid."', 
		password = '".$password."'  " ;
		$strSQL .=" WHERE bill_no = '".$bill_no."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		
		$check_status = "";
		$pasycal = "";
		$sql2 = "SELECT * FROM list_order where bill_no = '".$bill_no."'  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$check_status = $objResult2["status"];  
			$pasycal = $objResult2["pasycal"];  
		} 


		$onoff_edit = "ON";
		$sql_c = "SELECT * FROM history_payment where bill_no = '".$bill_no."' and income != ''   
		order by pk asc limit 1 "; 
		$query_c = mysqli_query($objCon,$sql_c);
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$onoff_edit =  "OFF";
		}

			if($onoff_edit == "OFF"){

				 echo("<script>alert(' มีการชำรงวดแรกแล้ว ไม่สามารถแก้ไขรายการได้ อีก ')</script>");
				 echo("<script>window.location = 'contact.php?page=edit';</script>");

			}else{

				$allday = $_POST["allday"];

				if(empty($allday)){

				}else if($allday > 0){

					
					$cut = explode("/",$_POST["datesave"]);
					$savedatedata1 = $cut[0]."-".$cut[1]."-".($cut[2]);  

					$savedata1 = date("d-m-Y", strtotime($savedatedata1)); 
					$savedata2 = date("Y-m-d", strtotime($savedatedata1)); 
			
			

					/*
					$sql_c = "SELECT * FROM history_payment where bill_no = '".$bill_no."' and  addon = ''    order by pk asc   "; 
					$query_c = mysqli_query($objCon,$sql_c);
					while($objResult_c = mysqli_fetch_array($query_c))
					{ 

						$cut = explode("-",$objResult_c["datestart"]);

						if($cut[1] == "02"){
							$date_income = "28-".$cut[1]."-".($cut[2]);  	
						}else if($cut[1] == "2"){
							$date_income = "28-".$cut[1]."-".($cut[2]);  	
						}else{
							$date_income = $allday."-".$cut[1]."-".($cut[2]);  	
						}


						$daystart = date("d-m-Y", strtotime($date_income)); 
						$dayend = date("Y-m-d", strtotime($date_income)); 


						$strSQL = "Update history_payment Set    datestart = '".$daystart."',  create_date2 = '".$dayend."' " ;
						$strSQL .=" WHERE pk = '". $objResult_c["pk"]."' ";  
						$objQuery = mysqli_query($objCon, $strSQL); 

					}
					*/

					$strSQL = "Update list_order Set 
					allday = '".$allday."',  
					create_date = '".$savedata1."',  
					create_date2 = '".$savedata2."'  
					
					
					" ;
					$strSQL .=" WHERE bill_no = '".$bill_no."'  ";  
					$objQuery = mysqli_query($objCon, $strSQL); 

					$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' อัพเดวันเป้นวันที่ ".$allday." ', '".$bill_no."', '".$bill_no."' )"; 
					$objQuery = mysqli_query($objCon, $strSQL);	


				}
				
				
					$cut = explode("/",$_POST["datesave"]);
					$savedatedata1 = $cut[0]."-".$cut[1]."-".($cut[2]);  

					$savedata1 = date("d-m-Y", strtotime($savedatedata1)); 
					$savedata2 = date("Y-m-d", strtotime($savedatedata1)); 
			
				
					$strSQL = "Update list_order Set  
					create_date = '".$savedata1."',  
					create_date2 = '".$savedata2."' " ;
					$strSQL .=" WHERE bill_no = '".$bill_no."'  ";  
					$objQuery = mysqli_query($objCon, $strSQL); 
			 	 echo("<script>window.location = 'contact.php?page=edit';</script>");
			}
		}

		
		
	}
?>