<?php
session_start();  
include('../database.php');
	    
			$major = $_GET["searchname2"];     
			$major2 = $_GET["searchname"];     
			$member_user = $_SESSION["UserID"];
			$searchname4 = date('d/m')."/".(date('Y'));
			if(empty($_GET["searchname4"])){

				$cut = explode("/",$searchname3);
				$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
				$daystart_load = date("Y-m-d", strtotime($date_income)); 
			}else{
				$searchname4 = $_GET["searchname4"];



				$cut = explode("/",$searchname4);
				$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

				$daystart_load = date("Y-m-d", strtotime($date_income)); 
			}
			$searchname5 = date('d/m')."/".(date('Y'));
			if(empty($_GET["searchname5"])){

				$cut = explode("/",$searchname3);
				$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
				$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
			}else{
				$searchname5 = $_GET["searchname5"];



				$cut = explode("/",$searchname5);
				$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  

				$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
			}

		  
			  
			if(empty($member_user)){ 
				 
			}else{ 
				 
					$addcode = "";
					$addcode2 = "";
					$addcode3 = "";
					$addcode4 = "";
					if(empty($_GET["searchname4"])){
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load2));
						$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	

					}else{  
						$contactstart = date("Y-m-d", strtotime($daystart_load));  
						$checkend = date("Y-m-d", strtotime($daystart_load2));
						$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 	 
					} 
	 
				
					$addcode2 = " and  major = '1' "; 
					$addcode = " and  b.name like '%".$major2."%' ";
				
				
				    $major2_chk = "";
					//$strSQL2 = "SELECT * FROM member_bank WHERE pasy_bill = '' and member = '".$major2."' and typedata = 'ถอนเงิน'  ".$addcode.$addcode2.$addcode3.$addcode4."  Group By bill_no    ";
				
					$strSQL2 = " SELECT a.*, b.name  FROM member_bank  a
					Inner Join customer b  On a.member = b.pk
					where  a.bill_no != ''    and a.pasy_onoff = '' and a.typedata = 'ถอนเงิน'
					".$addcode.$addcode2.$addcode3.$addcode4."
					Group By a.bill_no 
					order by a.pk asc    ";
				
					//echo $strSQL2;
					$objQuery2 = mysqli_query($objCon, $strSQL2);
					while($objResult_c = mysqli_fetch_array($objQuery2))
					{ 			 
						$menuid_del = $objResult_c["bill_no"];
						 
						$strSQL = " Update member_bank Set  pasy_onoff = 'ON', pasy_createby = '".$_SESSION["UserID"]."'    " ;
						$strSQL .=" WHERE bill_no  = '".$menuid_del."' ";  
						$objQuery = mysqli_query($objCon, $strSQL); 
						 
					} 
			}	 
				 
 
		echo("<script>window.location = 'outaommoney.php?page2=&searchname=".$major2."&searchname2=".$major."&searchname3=&searchname4=".$_GET["searchname4"]."&searchname5=".$_GET["searchname5"]."';</script>");
			 	  
?>