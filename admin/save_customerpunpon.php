<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
    
	 
		
 
		$strSQL = "INSERT INTO customerpunpon ( 
		name, percent, telphone, 
		address, bank1, bank2  ) 
		VALUES 
		( 
		'".$_POST["name"]."', '".$_POST["percent"]."', '".$_POST["telphone"]."', '".$_POST["address"]."', 
		'".$_POST["bank1"]."', '".$_POST["bank2"]."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		//echo $strSQL;
			 
		 
		
		echo("<script>window.location = 'customerpunpon.php';</script>");
		 
?>