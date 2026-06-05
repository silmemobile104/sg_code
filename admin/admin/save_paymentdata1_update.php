<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
 
	
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		   
		$cut = explode("/",$_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
		$typedata = $_POST["typedata"]; 
		$major = $_POST["major2"]; 
		 
		 
			$strSQL = "Update payment_other Set           
				 bank = '".$_POST["bank"]."',                  
				 savedate = '".$_POST["savedate"]."',                  
				 price = '".$_POST["price"]."',                  
				 note = '".$_POST["note"]."',                  
				 note2 = '".$_POST["note2"]."',                  
				 statuspayment = '".$_POST["statuspayment"]."',                  
				 statuspasy = '".$_POST["statuspasy"]."',                  
				 create_date = '".$daystart."',         
				 create_date2 = '".$dayend."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 /// echo("<script>window.location = 'staff_hr_edit.php?CusID=".$_POST["idupdate"]."';</script>");
		 
		 
		///echo("<script>window.location = 'paymentdata1.php?searchname=".$_POST["savedate"]."&major=".$major."&typedata=".$typedata."';</script>");
		 
		echo("<script>window.location = 'paymentdata1.php?searchname=".$_POST["savedate"]."&getmajorline=".$_POST["getmajorline"]."&page=1&CusID=".$_POST["idupdate"]."&major=".$major."&typedata=".$typedata."';</script>");
	   
	}
?>