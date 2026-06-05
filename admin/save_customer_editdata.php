<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
 
	$strSQL = "SELECT * FROM customer WHERE passport = '".($_POST['passport'])."' and pk != '".$_POST["idupdate"]."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' เลขบัตรประชาชน ซ้ำกับในระบบ!!')</script>");
		 echo("<script>window.location = 'customer_editdata.php?CusID=".$_POST["idupdate"]."';</script>");
	}
	else
	{	
		
		
	$strSQL = "SELECT * FROM customer WHERE telphone = '".($_POST['telphone'])."' and pk != '".$_POST["idupdate"]."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' เบอร์โทรติดต่อ ซ้ำกับในระบบ!!')</script>");
		 echo("<script>window.location = 'customer_editdata.php?CusID=".$_POST["idupdate"]."';</script>");
	}
	else
	{	
		
		
			$update_img11 = "";
			if(isset($_FILES["picupload"]))
			{
				 
					foreach($_FILES['picupload']['tmp_name'] as $key => $val)
					{
						$update_img11 = "";
						$file_name = $_FILES['picupload']['name'][$key];
						$file_size =$_FILES['picupload']['size'][$key];
						$file_tmp =$_FILES['picupload']['tmp_name'][$key];
						$file_type=$_FILES['picupload']['type'][$key];   


						if(!empty($file_name)){
							 
						$check_image11 = "CCCFREGrimg".rand(1,999)."img".rand(110000,999999).".png"; 
						move_uploaded_file($file_tmp,"../img/".$check_image11);
						$update_img11  =  $check_image11 ; 


						if(!empty($file_name)){
							 
							$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES 
							( '".$update_img11."',  '".$_POST["bill_no"]."'  )"; 
							$objQuery = mysqli_query($objCon, $strSQL);
							}

						}
					}  
			}
	 
		
			$strSQL = "Update customer Set  
				 facebookurl = '".$_POST["facebookurl"]."',         
				 pasy = '".$_POST["pasy"]."',         
				 title = '".$_POST["title"]."',         
				 name = '".$_POST["name"]."',         
				 bridedate = '".$_POST["bridedate"]."',         
				 age = '".$_POST["age"]."',         
				 nickname = '".$_POST["nickname"]."',         
				 address = '".$_POST["address"]."',         
				 address1 = '".$_POST["address1"]."',         
				 address2 = '".$_POST["address2"]."',         
				 address3 = '".$_POST["address3"]."',         
				 address4 = '".$_POST["address4"]."',         
				 telphone = '".$_POST["telphone"]."',         
				 facebook = '".$_POST["facebook"]."',         
				 line = '".$_POST["line"]."',         
				 telphoneadd = '".$_POST["telphoneadd"]."',         
				 ashap = '".$_POST["ashap"]."',         
				 pricemonth = '".$_POST["pricemonth"]."',         
				 pricetotal = '".$_POST["pricetotal"]."',         
				 passport = '".$_POST["passport"]."',         
				 pricemonth = '".$_POST["pricemonth"]."',         
				 drop_people = '".$_POST["drop_people"]."',         
				 drop_sex = '".$_POST["drop_sex"]."' 
				 
				 
				 " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		$bill_no = $_POST["bill_no"];
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".date('d-m-Y')."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', ' แก้ไขข้อมูลลูกค้า ', '".$bill_no."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		
		   echo("<script>window.location = 'customer_editdata.php?CusID=".$_POST["idupdate"]."';</script>");
	   }
	}
?>