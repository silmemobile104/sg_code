<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
  
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
			 echo("<script>alert(' Username ซ้ำกับในระบบ!!')</script>");
			 echo("<script>window.location = 'stafftanai.php';</script>");
	}
	else
	{	
		  	 
		$strSQL = "INSERT INTO member_all (
		 name, username, password, status,  address,   
		 telphone, line, facebook, poition,
		  
		 chk1, chk2, chk3, chk4,
		 chk5, chk6, chk7, chk8,
		 chk9, chk10, chk11, 
		 chk12, 
		 chk13, chk14, chk15, chk16, 
		 chk17, chk18, chk19, chk20, 
		 chk21, chk22, chk23, chk24, 
		 chk25, chk26, chk27, major, store, pasy, nameconatct
		 
		 ) VALUES (
		  '".$_POST["name"]."',  '".$_POST["username"]."', '".$_POST["password"]."', 'T', '".$_POST["address"]."',    
		  '".$_POST["telphone"]."',  '".$_POST["line"]."', '".$_POST["facebook"]."',  '".$_POST["poition"]."', 
		  
		  '".$_POST["data1"]."',  '".$_POST["data2"]."', '".$_POST["data3"]."',  '".$_POST["data4"]."',  
		  '".$_POST["data5"]."',  '".$_POST["data6"]."', '".$_POST["data7"]."',  '".$_POST["data8"]."',  
		  '".$_POST["data9"]."',  '".$_POST["data10"]."', '".$_POST["data11"]."',  
		  '".$_POST["data12"]."',  
		  '".$_POST["data13"]."',  '".$_POST["data14"]."', '".$_POST["data15"]."',  '".$_POST["data16"]."',  
		  '".$_POST["data17"]."',  '".$_POST["data18"]."', '".$_POST["data19"]."',  '".$_POST["data20"]."',  
		  '".$_POST["data21"]."',  '".$_POST["data22"]."', '".$_POST["data23"]."',  '".$_POST["data24"]."',  
		  '".$_POST["data25"]."',  '".$_POST["data26"]."', '".$_POST["data27"]."', '".$_POST["major"]."', '".$_POST["store"]."', '".$_POST["pasy"]."', '".$_POST["nameconatct"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'stafftanai.php';</script>");
		
	}
	 
?>