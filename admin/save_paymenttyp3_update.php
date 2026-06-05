<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  
		$cut = explode("-",$_POST["startdate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]-543);   
			
		$daystart = date("Y-m-d", strtotime($date_income));  
		$daystartold = $_POST["startdate"];  

 
		$create_by = $_SESSION["UserID"]; 
		$paymenttype = $_POST["paymenttype"]; 
		$paymenttype2 = $_POST["paymenttype2"]; 
		$price = $_POST["price"];   
		 
		
		$strSQL = "Update paymenttyp3 Set           
		 price = '".$_POST["price"]."',                  
		 note = '".$_POST["note"]."',                  
		 note2 = '".$_POST["note2"]."',                  
		 statuspasy = '".$_POST["statuspasy"]."',                  
		 statuspayment = '".$_POST["statuspayment"]."',                  
		 paymenttype = '".$paymenttype."',                  
		 paymenttype2 = '".$paymenttype2."'  " ;
		$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
		$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		echo("<script>window.location = 'paymenttyp3.php?paymenttype=".$paymenttype."&paymenttype2=".$paymenttype2."';</script>");
	   
?>