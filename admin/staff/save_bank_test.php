<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
    
		 
	 	 
		$sql = "SELECT * FROM databank Where bill_no != ''   order by create_date, datesave2 asc "; 

		echo $sql ." <br> ";

		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{   

			$newdate = $objResult["create_date"]." ".$objResult["datesave2"];
			
			
	 
				$strSQL = "Update databank Set   datesavedata = '".$newdate."' " ;
				$strSQL .=" WHERE pk = '". $objResult["pk"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
			
			
		}
	 
?>