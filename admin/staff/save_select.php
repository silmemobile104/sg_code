<?php
session_start(); 
header('Content-Type: application/json');
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
 
			$menuid = $_POST["data1"];    
			$major = $_POST["data2"];     
			$major2 = $_POST["data3"];     
			$member_user = $_SESSION["UserID"];

		  
			  
			if(empty($member_user)){
				
			}else{
					
				    $major2_chk = "";
					$strSQL2 = "SELECT * FROM list_chk_computer WHERE bill_no = '' and create_by = '".$_SESSION["UserID"]."'  ";
					$objQuery2 = mysqli_query($objCon, $strSQL2);
					while($objResult_c = mysqli_fetch_array($objQuery2))
					{ 			
						$major2_chk = $objResult_c["major2"];
						$menuid_del = $objResult_c["pkselect"];
						
						if($major2_chk != $major2){
							$strSQL = "Delete From list_chk_computer  ";
							$strSQL .="WHERE  pkselect = '".$menuid_del."' and bill_no = '' and create_by = '".$_SESSION["UserID"]."' ";
							$objQuery = mysqli_query($objCon,$strSQL); 
				 
							$strSQL = " Update list_order Set  chk = ''   " ;
							$strSQL .=" WHERE pk = '".$menuid_del."' ";  
							$objQuery = mysqli_query($objCon, $strSQL);  
						}
						
						
					}
				
					 
				
				
				
					$strSQL = "SELECT * FROM list_chk_computer WHERE pkselect = '".$menuid."' ";
					$objQuery = mysqli_query($objCon, $strSQL);
					$objResult = mysqli_fetch_array($objQuery);
					if(!$objResult)
					{ 
						$strSQL = "INSERT INTO list_chk_computer ( 
						pkselect, create_by, create_date, create_date2, create_time, bill_no, major, major2  ) 
						VALUES ( 
						'".$menuid."', '".$_SESSION["UserID"]."', '', 
						'', '', '', '".$major."', '".$major2."'
						)"; 
						$objQuery = mysqli_query($objCon, $strSQL);
		  
					} 
			}	 
				
				$data = array(
				   'ans' => "0" 
				);
 
			 	 
			  
echo json_encode($data);
?>