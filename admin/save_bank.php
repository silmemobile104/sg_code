<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
    
		 
		$strSQL = "INSERT INTO bank2 ( bank, name, bookbank   ) 
		VALUES (  '".$_POST["bank"]."', '".$_POST["name"]."', '".$_POST["bookbank"]."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		//echo $strSQL;
			  
		echo("<script>window.location = 'bank.php';</script>");
	 
?>