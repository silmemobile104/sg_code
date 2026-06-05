<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	$strSQL = "SELECT * FROM member_all WHERE username = '".($_POST['username'])."' and pk != '".$_POST["idupdate"]."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' เลขบัตรประชาชน ซ้ำกับในระบบ!!')</script>");
		 echo("<script>window.location = 'staff_editdata2.php?CusID=".$_POST["idupdate"]."';</script>");
	}
	else
	{	 
			$strSQL = "Update member_all Set  
				 username = '".$_POST["username"]."',         
				 name = '".$_POST["name"]."',         
				 password = '".$_POST["password"]."',         
				 store = '".$_POST["store"]."',         
				         
				 address = '".$_POST["address"]."',         
				 telphone = '".$_POST["telphone"]."',         
				 line = '".$_POST["line"]."',         
				 facebook = '".$_POST["facebook"]."',         
				 poition = '".$_POST["poition"]."',  
				 
				 chk1 = '".$_POST["data1"]."',  
				 chk2 = '".$_POST["data2"]."',  
				 chk3 = '".$_POST["data3"]."',  
				 chk4 = '".$_POST["data4"]."',  
				 chk5 = '".$_POST["data5"]."',  
				 chk6 = '".$_POST["data6"]."',  
				 chk7 = '".$_POST["data7"]."',  
				 chk8 = '".$_POST["data8"]."',  
				 chk9 = '".$_POST["data9"]."',  
				 chk10 = '".$_POST["data10"]."',  
				 chk11 = '".$_POST["data11"]."',  
				 chk12 = '".$_POST["data12"]."',  
				 chk13 = '".$_POST["data13"]."',  
				 chk14 = '".$_POST["data14"]."',  
				 chk15 = '".$_POST["data15"]."',  
				 chk16 = '".$_POST["data16"]."',  
				 chk17 = '".$_POST["data17"]."',  
				 chk18 = '".$_POST["data18"]."',  
				 chk19 = '".$_POST["data19"]."',  
				 chk20 = '".$_POST["data20"]."',  
				 chk21 = '".$_POST["data21"]."',  
				 chk22 = '".$_POST["data22"]."',  
				 chk23 = '".$_POST["data23"]."',  
				 chk24 = '".$_POST["data24"]."',  
				 chk25 = '".$_POST["data25"]."',  
				 chk26 = '".$_POST["data26"]."',  
				 chk27 = '".$_POST["data27"]."'  " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 echo("<script>window.location = 'staff_editdata2.php?CusID=".$_POST["idupdate"]."';</script>");
	}
?>