<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
	 
		 
		$sql2 = " SELECT * FROM list_chk_cleam where  create_by = '".$_SESSION["UserID"]."' and bill_no = ''  order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			
		$strSQL = " Update mobile_restore Set  chk = 'OFF', statuspayment = 'ชำระเงินแล้ว'     " ;
		$strSQL .=" WHERE pk = '".$objResult2["pkselect"]."' ";  
		////$objQuery = mysqli_query($objCon, $strSQL); 
			 
		} 
  
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_cleam  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "BSGJ".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_cleam (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

  	 
		

		$strSQL = " Update list_chk_cleam Set  
					bill_no = '".$bill_no."' ,             
					create_date = '".date('d-m-Y')."' ,
					create_date2 = '".date('Y-m-d')."' ,
					create_time = '".date('H:i')."'   " ;
		$strSQL .=" WHERE create_by = '".$create_by."' and bill_no = '' "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 ///echo("<script>window.location = 'list_computer_edit.php';</script>");
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_cleam_bill.php?bill_no=".$bill_no."'); </script>"); 

	}
?>




<form id="frm" method="post" action="cleam_bill_edit.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 




