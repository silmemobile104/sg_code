<?php
session_start();
	 
			$_SESSION["UserID"] = "";
			$_SESSION["Status"] = "";
			$_SESSION["User"] = "";
			$_SESSION["Fullname"] = ""; 

			setcookie("UserID", "", time() - 3600);    

			unset($_COOKIE["UserID"]);
			unset($_COOKIE["Status"]);
			unset($_COOKIE["User"]);
			unset($_COOKIE["UserID"]);
			unset($_COOKIE["Fullname"]); 

			//echo("<script>alert('Login out Sucess !!')</script>");
			echo("<script>window.location = 'index.php';</script>");
					 
?>