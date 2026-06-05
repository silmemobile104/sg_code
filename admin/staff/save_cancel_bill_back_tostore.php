<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
 
 
		$bill_no = $_GET["bill_no"];
		$status = $_GET["status"]; 
		   
		if(!empty($_SESSION["UserID"])){
			 
					 
						  
			$menu_id = "";
			$check_status = "";
			$sql2 = "SELECT * FROM list_order where bill_no = '".$_GET["bill_no"]."'  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				 $menu_id = $objResult2["menu_id"];  
				 $check_status = $objResult2["w_status_save"];  
			} 
			
			
			if($check_status == "รอตรวจสอบ"){
				 
			$total = 0; 
			if($status == "เครมสินค้า/รอสินค้า"){
				$total = 0;
			}
			if($status == "พร้อมจำหน่าย"){
				$total = 1;
			} 
			if($status == "ส่งคืนต้นทาง"){
					$total = 0; 
				
					$select_chk = "OFF";
					$sql_c = "SELECT * FROM list_chk_cleam_back_two where pkselect = '".$menuid."'  and status = 'ส่งคืนต้นทาง'   order by pk asc  "; 
					$query_c = mysqli_query($objCon,$sql_c); 
					while($objResult_c = mysqli_fetch_array($query_c))
					{ 
						$select_chk =  "ON";
					}
				
					$sql = "SELECT * FROM product where pk = '".$menuid."'   order by pk asc  "; 
					$query = mysqli_query($objCon,$sql);
					while($objResult = mysqli_fetch_array($query))
					{  
						$majorsave = $objResult["major"];
						$major_storesave = $objResult["typedata_2"]; 
					}
				

					if($select_chk == "OFF"){
						$strSQL = "SELECT * FROM list_chk_cleam_back_two WHERE pkselect = '".$menuid."' ";
						$objQuery = mysqli_query($objCon, $strSQL);
						$objResult = mysqli_fetch_array($objQuery);
						if(!$objResult)
						{ 
							$bill_no_cc = ""; 
							$GGyear= date('Y')+543 ; 
							$sql2 = "SELECT count(pk) as total FROM run_cleam_backnew_two  ";
							$query2 = mysqli_query($objCon,$sql2);
							while($objResult2 = mysqli_fetch_array($query2))
							{
								$total = $objResult2["total"] + 1;   
							}

							$bill_no_cc =  "SGRC".date('Ymd')."-".$total; 
							$strSQL = "INSERT INTO run_cleam_backnew_two (bill_no) VALUES  ('".$bill_no_cc."')";  
							$objQuery = mysqli_query($objCon, $strSQL);
								
								
							
							$strSQL = "INSERT INTO list_chk_cleam_back_two ( 
							pkselect, create_by, create_date, create_date2, create_time, bill_no, status, major, major2  ) 
							VALUES ( 
							'".$menuid."', '".$_SESSION["UserID"]."', '".date('d-m-Y')."', 
							'".date('Y-m-d')."', '".date('H:i')."', '".$bill_no_cc."' , 'ส่งคืนต้นทาง', '".$majorsave."', '".$major_storesave."'  
							)"; 
							$objQuery = mysqli_query($objCon, $strSQL);

						} 
					}
					  
			}
 
		
			$strSQL = "Update product Set          
			 total = '".$total."',  
			 status = '".$status."' " ;
			$strSQL .=" WHERE pk = '". $menu_id  ."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 

			$strSQL = " Update list_order Set               
						w_status_save = '".$status."',
						w_date = '".date('d-m-Y')."' ,
						w_date2 = '".date('Y-m-d')."' ,
						w_time = '".date('H:i')."'   " ;
			$strSQL .=" WHERE  bill_no = '".$_GET["bill_no"]."' "; 

			$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' ทำรายการ ".$status."  ', '".$bill_no."', '".$bill_no."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
				
			}


		}
 

 
			$data = array(
			   'ans' => "1" 
			); 

echo json_encode($data);
?>







