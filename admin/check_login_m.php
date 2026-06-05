<meta charset="UTF-8">
<?php  
session_start();
include("database.php");
  
		 
			$strSQL = "SELECT * FROM customer WHERE passport = '".$_POST['username']."'   ";
			$objQuery = mysqli_query($objCon,$strSQL);
			$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC); 
			if(!$objResult)
			{  
					  
				 echo("<script>alert('ตรวจสอบ เลขบัตรประชาชน อีกครั้ง !!')</script>");
				 echo("<script>window.location = 'customer.php';</script>");

			}
			else
			{ 
					  
					$_SESSION["UserID2"] = $objResult["pk"];
					$_SESSION["Status2"] = "M";
					$_SESSION["User2"] = $objResult["passport"];
					$_SESSION["Fullname2"] = $objResult["name"];
						
				   
				      echo("<script>window.location = 'customer/index.php';</script>");
					 
					 

			} 
			
		 

	mysqli_close($objCon);
?>