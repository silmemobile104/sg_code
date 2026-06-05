<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  
			$typedata = $_POST["typedata"];
			$downpercent = $_POST["downpercent"]; 
			$data1 = $_POST["data1"]; 
			$data2 = $_POST["data2"]; 
			$data3 = $_POST["data3"]; 
			$data4 = $_POST["data4"]; 
			$data5 = $_POST["data5"]; 
			$data6 = $_POST["data6"]; 
			$data7 = $_POST["data7"]; 
			$data8 = $_POST["data8"]; 
			$data9 = $_POST["data9"]; 

			$strSQL = "Update startpricedata Set  
				 downpercent = '".$_POST["downpercent"]."',   
				 data1 = '".$_POST["data1"]."',   
				 data2 = '".$_POST["data2"]."',   
				 data3 = '".$_POST["data3"]."',   
				 data4 = '".$_POST["data4"]."',   
				 data5 = '".$_POST["data5"]."',   
				 data6 = '".$_POST["data6"]."',   
				 data7 = '".$_POST["data7"]."',   
				 data8 = '".$_POST["data8"]."',   
				 data9 = '".$_POST["data9"]."'  
				 
				 
				 " ;
				$strSQL .=" WHERE statusdata = '". $typedata ."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 echo("<script>window.location = 'startpricedata.php?typedata=".$_POST["idupdate"]."';</script>");
	 
?>