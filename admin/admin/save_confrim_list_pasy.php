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
		$sql2 = "SELECT count(pk) as total FROM run_bill_pasy  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGBUC".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill_pasy (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);
 
		
		
		$sql2 = "  SELECT *  FROM list_chk_computer 
		where  bill_no != ''  and pasy_onoff = 'ON' and pasy_bill = '' and pasy_createby = '".$_SESSION["UserID"]."'  Group By bill_no order by pk asc   ";  
		
		$strSQL = " Update list_chk_computer Set  
					pasy_bill = '".$bill_no."' ,             
					pasy_createdate = '".date('d-m-Y')."' ,
					pasy_createdate2 = '".date('Y-m-d')."' ,
					pasy_createtime = '".date('H:i')."'   " ;
		$strSQL .=" where  bill_no != ''  and pasy_onoff = 'ON' and pasy_bill = '' and pasy_createby = '".$_SESSION["UserID"]."'  order by pk asc "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 ///echo("<script>window.location = 'list_computer_edit.php';</script>");
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_list_pasy.php?pasy_bill=".$bill_no."'); </script>"); 

	}
?>




<form id="frm" method="post" action="list_pasy.php?page=2">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 




