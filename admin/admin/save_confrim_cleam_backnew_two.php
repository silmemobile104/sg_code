<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
	 
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_cleam_backnew_two  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGRC".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_cleam_backnew_two (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

		  
		$notedata = $_POST["notecleamback"];

		$strSQL = " Update list_chk_cleam_back_two Set  
					notecleamback = '".$notedata."' ,             
					bill_no = '".$bill_no."' ,             
					create_date = '".date('d-m-Y')."' ,
					create_date2 = '".date('Y-m-d')."' ,
					create_time = '".date('H:i')."'   " ;
		$strSQL .=" WHERE create_by = '".$create_by."' and bill_no = '' "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' สร้างบิล ', '".$bill_no."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	

		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 ///echo("<script>window.location = 'list_computer_edit.php';</script>");
		 //echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_computer.php?bill_no=".$bill_no."'); </script>"); 

	}
?>




<form id="frm" method="post" action="cleam_backnew_two_edit.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 




