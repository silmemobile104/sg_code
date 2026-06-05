<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
    
	$strSQL = "SELECT * FROM customer WHERE passport = '".($_POST['passport'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' เลขบัตรประชาชน ซ้ำกับในระบบ!!')</script>");
		echo("<script>window.location = 'customer.php';</script>");
	}
	else
	{	
		
		
		
	$strSQL = "SELECT * FROM customer WHERE telphone = '".($_POST['telphone'])."' ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		echo("<script>alert(' เบอร์โทรติดต่อ ซ้ำกับในระบบ!!')</script>");
		echo("<script>window.location = 'customer.php';</script>");
	}
	else
	{	
		$bill_nocount = 1;
		$sql2 = " SELECT * FROM run_product   order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$bill_nocount ++;
		}

		$bill_no =  "POC"."".date('Ydm')."-".$bill_nocount;
		
		$strSQL = "INSERT INTO run_product ( bill_no   ) VALUES  ( '".$bill_no."'  )"; 
		$query2 = mysqli_query($objCon,$strSQL);
		 
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
					 
					
					$check_image11 = "CCGrimg".rand(1,9999999)."img".rand(110000,999999).".png"; 
					move_uploaded_file($file_tmp,"../img/".$check_image11);
					$update_img11  =  $check_image11 ; 
					
					if(!empty($file_name)){
						 
					 
					$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES 
					( '".$update_img11."',  '".$bill_no."'  )"; 
					$objQuery = mysqli_query($objCon, $strSQL);
					
					}
				} 
			}
	 
		 
		$strSQL = "INSERT INTO customer ( 
		title, name, bridedate, age, 
		nickname, address, address1, address2, 
		address3, address4, telphone, facebook, 
		line, telphoneadd, ashap, pricemonth, 
		pricetotal, passport, drop_people, drop_sex, 
		
		title2, name2, bridedate2, age2, 
		nickname2, address25, address21, address22, 
		address23, address24, telphone2, facebook2, 
		line2, telphoneadd2, ashap2, pricemonth2, 
		pricetotal2, baby2, drop_sex2, 
		
		bill_no, pasy, facebookurl ) 
		VALUES 
		( 
		'".$_POST["title"]."', '".$_POST["name"]."', '".$_POST["bridedate"]."', '".$_POST["age"]."', 
		'".$_POST["nickname"]."', '".$_POST["address"]."', '".$_POST["address1"]."', '".$_POST["address2"]."', 
		'".$_POST["address3"]."', '".$_POST["address4"]."', '".$_POST["telphone"]."', '".$_POST["facebook"]."', 
		'".$_POST["line"]."', '".$_POST["telphoneadd"]."', '".$_POST["ashap"]."', '".$_POST["pricemonth"]."', 
		'".$_POST["pricetotal"]."', '".$_POST["passport"]."', '".$_POST["drop_people"]."', '".$_POST["drop_sex"]."', 
		
		
		'".$_POST["title2"]."', '".$_POST["name2"]."', '".$_POST["bridedate2"]."', '".$_POST["age2"]."', 
		'".$_POST["nickname2"]."', '".$_POST["address25"]."', '".$_POST["address21"]."', '".$_POST["address22"]."', 
		'".$_POST["address23"]."', '".$_POST["address24"]."', '".$_POST["telphone2"]."', '".$_POST["facebook2"]."', 
		'".$_POST["line2"]."', '".$_POST["telphoneadd2"]."', '".$_POST["ashap2"]."', '".$_POST["pricemonth2"]."', 
		'".$_POST["pricetotal2"]."', '".$_POST["baby2"]."', '".$_POST["drop_sex2"]."', 
		
		'".$bill_no."', '".$_POST["pasy"]."', '".$_POST["facebookurl"]."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		//echo $strSQL;
			 
		
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".date('d-m-Y')."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', ' เพิ่มรายชื่อลูกค้า ', '".$bill_no."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
			

		
		echo("<script>window.location = 'customer_edit.php';</script>");
		}
	}
?>