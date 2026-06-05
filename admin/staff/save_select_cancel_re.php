<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$menuid = $_POST["data1"];    
			$major = $_POST["data2"];     
			$bill = $_POST["data2"];     
			$datesave = date('Y-m-d');     
			$majordata = "";     
			$member_user = $_SESSION["UserID"];
			$create_by = $_SESSION["UserID"];
 
				$bill_no = "";
				$sql = "SELECT * FROM list_chk_computer Where  pkselect = '".$menuid."' ";  
				$query = mysqli_query($objCon,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{   
					$bill_no = $objResult["bill_no"];    
				}  	

			  
				$strSQL = "Delete From list_chk_computer  ";
				$strSQL .="WHERE  pkselect = '".$menuid."' ";
				$objQuery = mysqli_query($objCon,$strSQL); 
				


				
				$strSQL = " Update list_order Set  chk = ''   " ;
				$strSQL .=" WHERE pk = '".$menuid."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 

 
				$get_menu = "";
				$sql = "SELECT * FROM list_order Where  pk = '". $menuid ."' ";  
				$query = mysqli_query($objCon,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{   
					$get_menu = $objResult["menu_id"];    
				}  	
			

				$strSQL = " Update product Set  computer = 'ยังไม่ได้ชำระค่าคอม'   " ;
				$strSQL .=" WHERE pk = '".$get_menu."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
			

				$bill_no_product = "";
				$sql = "SELECT * FROM product Where  pk = '". $get_menu ."' ";  
				$query = mysqli_query($objCon,$sql); 
				while($objResult = mysqli_fetch_array($query))
				{   
					$bill_no_product = $objResult["bill_no"];    
				}  	

				if(!empty($bill_no_product)){ 
					$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no_product."', '".$bill_no_product."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' ลบออกจาก ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง ', '".$bill_no."', '".$bill_no_product."' )"; 
					$objQuery = mysqli_query($objCon, $strSQL);	
				} 

				

		
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$member_user."', '".$bill." ทำการลบรายการ : ".$menuid."', '".$menuid."', '".$bill."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);







				$data = array(
				   'ans' => "0" 
				);
 
			 	  
 
echo json_encode($data);
?>