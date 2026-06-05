<?php  
session_start();
include('../database.php');
   
	$create_by = $_SESSION["UserID"];   
	$tanai_pasy_addon = $_POST["tanai_pasy_addon"];   
	$tanaidata = $_POST["tanaidata"];   
	if(empty($create_by)){
		 echo("<script>alert(' กรุณาล็อกอิน ')</script>");
		 echo("<script>window.location = '../index.php';</script>");
		
	}else{
	 
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_tanai  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGLAW-B".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_tanai (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);
 
		
		
		$sql2 = "  SELECT *  FROM list_order 
		where  bill_no != ''  and tanai_chk = 'ON' and tanai_pasy_bill = ''   Group By bill_no order by pk asc   ";  
		
		$strSQL = " Update list_order Set  
					tanai_pasy_addon = '".$tanai_pasy_addon."' ,       
					tanai_pasy_bill = '".$bill_no."' ,       
					tanai_pasy_by = '".$create_by."' ,       
					tanai_pasy_date = '".date('Y-m-d')."' ,
					tanai_pasy_time = '".date('H:i')."'   " ;
		$strSQL .=" where   bill_no != ''  and tanai_chk = 'OK' and tanai_pasy_bill = ''  and   tanaidata = '".$tanaidata."'   "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 ///echo("<script>window.location = 'list_computer_edit.php';</script>");
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_paper_tanai3.php?pasy_bill=".$bill_no."'); </script>"); 

	}
?>




<form id="frm" method="post" action="paper_tanai3.php?page=">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 




