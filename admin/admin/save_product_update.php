<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	$strSQL = "SELECT * FROM product WHERE codeno = '".($_POST['codeno'])."' and pk != '".$_POST["idupdate"]."'  ";
	$objQuery = mysqli_query($objCon, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if($objResult)
	{
		//echo("<script>alert(' รหัสสินค้า ซ้ำกับในระบบ!!')</script>");
		//echo("<script>window.location = 'product_edit.php?CusID=".$_POST["idupdate"]."';</script>");
	}
	else
	{	 }
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
							 	   

							$check_image11 = "REGrimg".rand(1,9999999)."img".rand(110000,999999).".png"; 
							move_uploaded_file($file_tmp,"../img/".$check_image11);
							$update_img11  =  $check_image11 ; 


							$strSQL = "INSERT INTO product_img ( img, bill_no, img_old   ) VALUES 
							( '".$update_img11."',  '".$_POST["bill_no"]."', '".$file_name."'  )"; 
							$objQuery = mysqli_query($objCon, $strSQL);
							 
						}

					}  
			}
	 
  
			$total = 0;
			if($_POST["status"] == "เครมสินค้า/รอสินค้า"){
				$total = 0;
			}
			if($_POST["status"] == "พร้อมจำหน่าย"){
				$total = 1;
			}
			if($_POST["status"] == "ไม่พร้อมจำหน่าย"){
				$total = 0;
			}
			if($_POST["status"] == "ส่งคืนต้นทาง"){
				$total = 0;
			}
		
		
		
			$strSQL = "Update product Set  
				 drop_buy = '".$_POST["drop_buy"]."',      
				 comeback = '".$_POST["comeback"]."',      
				 name = '".$_POST["name"]."',      
				 major = '".$_POST["major"]."',   
				 codeno = '".$_POST["codeno"]."',   
				 typedata = '".$_POST["typedata"]."', 
				 typedata2 = '".$_POST["typedata2"]."', 
				 color = '".$_POST["color"]."',        
				 storerage = '".$_POST["storerage"]."',        
				 appleid = '".$_POST["appleid"]."',        
				 password = '".$_POST["password"]."',        
				 typedata_2 = '".$_POST["typedata_2"]."',        
				 note = '".$_POST["note"]."',        
				 totalprice = '".$_POST["totalprice"]."',        
				 total = '".$total."',  
				 status = '".$_POST["status"]."',        
				 price1 = '".$_POST["price1"]."',        
				 price2 = '".$_POST["price2"]."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		
		
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$_POST["bill_no"]."', '".$_POST["bill_no"]."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
			' เปลี่ยนสถานะเป็น " .$_POST["status"] ."', '".$_POST["bill_no"]."', '".$_POST["bill_no"]."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

			if(!empty($_POST["note"])){
				$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$_POST["bill_no"]."', '".$_POST["bill_no"]."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', 
				' หมายเหตุ " .$_POST["note"] ."', '".$_POST["bill_no"]."', '".$_POST["bill_no"]."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
			}
		
		
		 echo("<script>window.location = 'product_edit.php?CusID=".$_POST["idupdate"]."';</script>");
	 
?>