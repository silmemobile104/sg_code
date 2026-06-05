<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
 
	 
		
			$strSQL = "Update customerpunpon Set           
				 name = '".$_POST["name"]."',         
				 percent = '".$_POST["percent"]."',            
				 address = '".$_POST["address"]."',         
				 telphone = '".$_POST["telphone"]."',         
				 bank1 = '".$_POST["bank1"]."',             
				 bank2 = '".$_POST["bank2"]."'  
				 " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		  
		
		   echo("<script>window.location = 'customerpunpon.php';</script>");
	    
?>