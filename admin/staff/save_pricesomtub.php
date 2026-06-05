<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		  
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_bill_pricesomtub  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "SGKF".date('Ymd')."-".$total; 
			$strSQL = "INSERT INTO run_bill_pricesomtub (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				
				
		    
			$cut = explode("/",$_POST["datesave"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		   
		 
			$strSQL = "INSERT INTO pricesomtub ( 
			bill_no, create_date, create_date2, create_time, create_by, 
			titledata, price, bank, notedata, payment, pasy     ) 
			VALUES ( 
			'".$bill_no."',  '". $daystart  ."', '". $dayend  ."', '".date('H:i')."',  '".$_SESSION["UserID"]."', 
			'".$_POST["titledata"]."', '".$_POST["price"]."', '".$_POST["bank"]."', '".$_POST["notedata"]."', '".$_POST["payment"]."', '".$_POST["pasy"]."'   
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL);

			//echo $strSQL;
			//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>"); 
		  
		 
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_pricesomtub.php?bill_no=".$bill_no."'); </script>"); 
	 
	 }
		
	 
	 
?>

<form id="frm" method="post" action="pricesomtub.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 

