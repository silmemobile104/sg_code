<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
			$cut = explode("/",$_POST["datesave"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		   
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
		 
			$cut = explode("/",$_POST["datesave3"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		   
			$dayend2 = date("Y-m-d", strtotime($date_income)); 
		  

		 $bill_no = $_POST["bill_no"]; 
		 $idupdate = $_POST["idupdate"]; 
		 $idupdate2 = $_POST["idupdate2"]; 

		 $datesave = $_POST["datesave"];
		 $datesave2 = $_POST["datesave2"];
		 $datesave3 = $_POST["datesave3"];
		 $datesave4 = $_POST["datesave4"];
	 
			 
			
			$strSQL = "Update databank Set         
				 major = '".$_POST["major"]."',       
				 customer = '".$_POST["customer"]."',       
				 create_date = '". $dayend ."',        
				 create_date2 = '". $dayend2 ."',        
				 datesave = '". $datesave ."',     
				 datesave2 = '". $datesave2 ."',       
				 datesave3 = '". $datesave3 ."',       
				 datesave4 = '". $datesave4 ."',       
				 money1 = '".$_POST["money1"]."',       
				 money2 = '".$_POST["money2"]."',       
				 note = '".$_POST["note"]."' " ;
				$strSQL .=" WHERE pk = '". $idupdate ."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
				
		 
	 
				 
		 
	  
		
		 echo("<script>window.location = 'databank.php';</script>");
 
?>