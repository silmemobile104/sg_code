<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	 
			$strSQL = "Update bank2 Set  
				 name = '".$_POST["name"]."',       
				 bank = '".$_POST["bank"]."',     
				 bookbank = '".$_POST["bookbank"]."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 echo("<script>window.location = 'bank.php?CusID=".$_POST["idupdate"]."';</script>");
 
?>