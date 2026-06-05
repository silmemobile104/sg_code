<?php
session_start();  
include('../database.php');
	    
			$major = $_GET["searchname2"];     
			$major2 = $_GET["searchname"];     
			$member_user = $_SESSION["UserID"];

		  
			  
			if(empty($member_user)){ 
				 
			}else{ 
				    $major2_chk = "";
					$strSQL2 = "SELECT * FROM list_chk_computer WHERE pasy_bill = '' and major2 = '".$major2."' Group By bill_no    ";
					$objQuery2 = mysqli_query($objCon, $strSQL2);
					while($objResult_c = mysqli_fetch_array($objQuery2))
					{ 			 
						$menuid_del = $objResult_c["bill_no"];
						 
						$strSQL = " Update list_chk_computer Set  pasy_onoff = 'ON', pasy_createby = '".$_SESSION["UserID"]."'    " ;
						$strSQL .=" WHERE bill_no  = '".$menuid_del."' ";  
						$objQuery = mysqli_query($objCon, $strSQL); 
						 
					} 
			}	 
				 
 
		echo("<script>window.location = 'list_pasy.php?page2=&searchname=".$major2."&searchname2=".$major."&searchname3=&searchname4=&searchname4=';</script>");
			 	  
?>