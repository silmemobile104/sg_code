<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
    
			$onoff =  $_GET["onoff"];
		  
		 
			$strSQL = "Update onoff_server Set  name = '".$onoff."' "  ;
			$strSQL .=" WHERE pk = '1' ";  
			$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		  echo("<script>window.location = '../index.php';</script>");
	 
?>