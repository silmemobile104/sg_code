<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{ 
		  
		    
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
 
		$dayend = date("Y-m-d", strtotime($date_income)); 


		$cut = explode("/",$_POST["datesave3"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
 
		$dayend2 = date("Y-m-d", strtotime($date_income)); 
		 
		 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_billdatabank  ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		$bill_no =   "D".date('dmY')."-".$total; 
		
		
		$strSQL = "INSERT INTO run_billdatabank ( bill_no  ) VALUES  ( '".$bill_no."'   )";  
		$objQuery = mysqli_query($objCon, $strSQL);
 
		 $newdate = "";
		 $typedatasave = "";
		 $datesave = $_POST["datesave"];
		 $datesave2 = $_POST["datesave2"];
		 $datesave3 = $_POST["datesave3"];
		 $datesave4 = $_POST["datesave4"];
		 
		$strSQL = "INSERT INTO databank ( major, customer, datesave, datesave2, money1, money2, money3, note, create_date, create_by, create_time, create_date2, datesave3, datesave4, typedatasave, bill_no, datesavedata   ) 
		VALUES ( 
		'".$_POST["major"]."',  '".$_POST["customer"]."', '". $datesave ."', '". $datesave2 ."', 
		'".$_POST["money1"]."', '".$_POST["money2"]."', '', '".$_POST["note"]."', '".$dayend."', '".$_SESSION["UserID"]."', '".date('H:i')."', '".$dayend2."', 
		'".$datesave3."', '".$datesave4."', '". $typedatasave ."', '". $bill_no ."', '". $newdate ."'    
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL); 
	 
				   
		echo("<script>window.location = 'databank.php?searchtype=".$_POST["searchtype"]."&month=".$_POST["month"]."&year=".$_POST["year"]."&searchname=".$_POST["searchname"]."&searchname2=".$_POST["searchname2"]."';</script>");
	 
	 }
		
	 
	 
?>