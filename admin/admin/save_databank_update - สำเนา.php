<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
			$cut = explode("/",$_POST["datesave"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		   
			$dayend = date("Y-m-d", strtotime($date_income)); 
		 
		 
			$cut = explode("/",$_POST["datesave3"]);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
  
		   
			$dayend2 = date("Y-m-d", strtotime($date_income)); 
		  

		 $bill_no = $_POST["bill_no"]; 
		 $idupdate = $_POST["idupdate"]; 
		 $idupdate2 = $_POST["idupdate2"]; 

		 $datesave = $_POST["datesave"];
		 $datesave2 = $_POST["datesave2"];
		 $datesave3 = $_POST["datesave3"];
		 $datesave4 = $_POST["datesave4"];
		 if(empty($_POST["money1"])){
			 $dayend = "";
			 $datesave = "";
			 $datesave2 = "";
		 }else{
			 
			 $typedatasave = "ฝาก";
			 
 		 
			$strSQL = "Delete From databank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and typedatasave = '".$typedatasave."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			  
			$newdate = $dayend." ".$datesave2;
			 
			$strSQL = "INSERT INTO databank ( major, customer, datesave, datesave2, money1, money2, money3, note, create_date, create_by, create_time, create_date2, datesave3, datesave4, typedatasave, bill_no, datesavedata   ) 
			VALUES ( 
			'".$_POST["major"]."',  '".$_POST["customer"]."', '". $datesave ."', '". $datesave2 ."', 
			'".$_POST["money1"]."', '', '', '".$_POST["note"]."', '".$dayend."', '".$_SESSION["UserID"]."', '".date('H:i')."', '', '', '', '". $typedatasave ."', '". $bill_no ."', '". $newdate ."'    
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL); 
			 
			 echo $strSQL;
			 
			 
			 /*
			$strSQL = "Update databank Set         
				 major = '".$_POST["major"]."',       
				 customer = '".$_POST["customer"]."',       
				 create_date = '". $dayend ."',        
				 datesave = '". $datesave ."',     
				 datesave2 = '". $datesave2 ."',       
				 money1 = '".$_POST["money1"]."',       
				 note = '".$_POST["note"]."' " ;
				$strSQL .=" WHERE pk = '". $idupdate ."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
				*/
		 
		 }
		 if(empty($_POST["money2"])){
			 $dayend2 = "";
			 $datesave3 = "";
			 $datesave4 = "";
		 }else{
			 
			 $typedatasave = "ถอน";
			$strSQL = "Delete From databank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and typedatasave = '".$typedatasave."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 
			 
			$newdate = $dayend." ".$datesave2;
			 
			 
			$strSQL = "INSERT INTO databank ( major, customer, datesave, datesave2, money1, money2, money3, note, create_date, create_by, create_time, create_date2, datesave3, datesave4, typedatasave, bill_no, datesavedata    ) 
			VALUES ( 
			'".$_POST["major"]."',  '".$_POST["customer"]."', '". $datesave3 ."', '". $datesave4 ."', 
			'".$_POST["money2"]."', '', '', '".$_POST["note"]."', '".$dayend2."', '".$_SESSION["UserID"]."', '".date('H:i')."', '', '', '', '". $typedatasave ."', '". $bill_no ."', '". $newdate ."'     
			)"; 
			$objQuery = mysqli_query($objCon, $strSQL); 
			 
			 
			 /*
			$strSQL = "Update databank Set         
				 major = '".$_POST["major"]."',       
				 customer = '".$_POST["customer"]."',       
				 create_date = '". $dayend2 ."',        
				 datesave = '". $datesave3 ."',     
				 datesave2 = '". $datesave4 ."',       
				 money2 = '".$_POST["money2"]."',       
				 note = '".$_POST["note"]."' " ;
				$strSQL .=" WHERE pk = '". $idupdate2 ."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
				*/
		 
		 }
		 
				 
		 
	  
		
		 echo("<script>window.location = 'databank.php';</script>");
 
?>