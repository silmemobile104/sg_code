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
		$sql2 = "SELECT count(pk) as total FROM run_bill3  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =  "SGBT".date('Ymd')."-".$total; 
		$strSQL = "INSERT INTO run_bill3 (bill_no) VALUES  ('".$bill_no."')";  
		$objQuery = mysqli_query($objCon, $strSQL);

		 
		$sql2 = " SELECT * FROM list_chk_computer where  create_by = '".$_SESSION["UserID"]."' and bill_no = ''  order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			
			$strSQL = " Update list_order Set  chk = 'OFF'   " ;
			$strSQL .=" WHERE pk = '".$objResult2["pkselect"]."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
			
			
			
			$get_menu = "";
			$sql = "SELECT * FROM list_order Where  pk = '". $objResult2["pkselect"] ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{   
				$get_menu = $objResult["menu_id"];    
			}  	
			
			$bill_no_product = "";
			$sql = "SELECT * FROM product Where  pk = '". $get_menu ."' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{   
				$bill_no_product = $objResult["bill_no"];    
			}  	
			
			
			$strSQL = " Update product Set  computer = 'ชำระค่าคอมไปแล้ว'   " ;
			$strSQL .=" WHERE pk = '".$get_menu."' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
			
			

			if(!empty($bill_no_product)){ 
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no_product."', '".$bill_no_product."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' ออกบิลใบเสร็จชำระค่าคอม/ค่าเครือง ', '".$bill_no."', '".$bill_no_product."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);	
			} 
					 
			
			
		} 
  
		 
  	 
		

		$strSQL = " Update list_chk_computer Set  
					bill_no = '".$bill_no."' ,             
					create_date = '".date('d-m-Y')."' ,
					create_date2 = '".date('Y-m-d')."' ,
					create_time = '".date('H:i')."'   " ;
		$strSQL .=" WHERE create_by = '".$create_by."' and bill_no = '' "; 

		$objQuery = mysqli_query($objCon, $strSQL); 
		
		
		
		 //echo $strSQL;
		 //echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		 ///echo("<script>window.location = 'list_computer_edit.php';</script>");
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_computer.php?bill_no=".$bill_no."'); </script>"); 

	}
?>




<form id="frm" method="post" action="list_computer_edit.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 




