<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		  
		 	$month = $_POST["month"];
		 	$year = $_POST["year"];
		 
		 
			$date_income = "01"."-".$month."-".$year; 
			$daystart = date("Y-m-d", strtotime($date_income)); 
		 
		 	$newdatasave = $daystart;
		 
		 
			$bill_no = ""; 
			$GGyear= date('Y')+543 ; 
			$sql2 = "SELECT count(pk) as total FROM run_bill_punpon  ";
			$query2 = mysqli_query($objCon,$sql2);
			while($objResult2 = mysqli_fetch_array($query2))
			{
				$total = $objResult2["total"] + 1;  
			} 

			$bill_no =  "SGDY".date('Y').$month.$year."-".$total; 
			$strSQL = "INSERT INTO run_bill_punpon (bill_no) VALUES  ('".$bill_no."')";  
			$objQuery = mysqli_query($objCon, $strSQL);
				
				
		    /*  
			$cut = explode("/",$_POST["datestart"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		 
			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
			
			*/
		 
			$strSQL = "INSERT INTO pricepunpon ( 
			bill_no, create_date, create_date2, create_time, create_by, 
			customer, percent, notedata, payment, month, year, newdatasave, percent2   ) 
			VALUES ( 
			'".$bill_no."',  '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."',  '".$_SESSION["UserID"]."', 
			'".$_POST["customer"]."', '".$_POST["percent"]."', '".$_POST["notedata"]."', '".$_POST["payment"]."', '".$_POST["month"]."', '".$_POST["year"]."',  '".$newdatasave."', '".$_POST["percent2"]."'  
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL);

			//echo $strSQL;
			//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>"); 
		  
		 
		 echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_pricepunpon.php?bill_no=".$bill_no."'); </script>"); 
	 
	 }
		
	 
	 
?>

<form id="frm" method="post" action="pricepunpon.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 

