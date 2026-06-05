<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
	$check_product = "OFF";
	$sql2 = " SELECT * FROM product WHERE codeno = '".($_POST['codeno'])."' ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$check_product = "ON";
	}

	$sql2 = " SELECT * FROM product WHERE codeno = '".($_POST['codeno'])."'   order by pk desc limit 1 ";
	$query2 = mysqli_query($objCon,$sql2);
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($objResult2["computer"] == "ชำระค่าคอมไปแล้ว"){
			$check_product = "OFF";
		}else{
			$check_product = "OFF";
		}
		 
	}



	if($check_product == "ON"){
		echo("<script>alert(' รหัสสินค้า ซ้ำกับในระบบ!!')</script>");
		echo("<script>window.location = 'product.php';</script>");
		
		
	}else{
		 
 
	 
  
		$bill_nocount = 1;
		$sql2 = " SELECT * FROM run_product   order by pk asc   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$bill_nocount ++;
		}

		$bill_no =  "PO"."".$_POST["major"]."".date('Ydm')."-".$bill_nocount;
		
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


				if(!empty($file_name)){


				$check_image11 = "Grimg".rand(1,9999999)."img".rand(110000,999999).".png"; 
				move_uploaded_file($file_tmp,"../img/".$check_image11);
				$update_img11  =  $check_image11 ; 


				$strSQL = "INSERT INTO product_img ( img, bill_no, img_old    ) VALUES 
				( '".$update_img11."',  '".$bill_no."', '".$file_name."'  )"; 
				$objQuery = mysqli_query($objCon, $strSQL);
				} 	

				$strSQL = "SELECT * FROM product_img WHERE img_old = '".$file_name."' ";
				$objQuery = mysqli_query($objCon, $strSQL);
				$objResult = mysqli_fetch_array($objQuery);
				if($objResult)
				{ 
				}
				else
				{	 
				}

			} 
		}
	  
		 
		$strSQL = "INSERT INTO product ( 
		name, codeno, typedata, typedata2, 
		color, storerage, appleid, password, 
		typedata_2, note, price1, price2, 
		totalprice, date_start, date_start2, date_time, 
		create_by , bill_no, major, total, status, computer, contactstatus ) 
		VALUES 
		( 
		'".$_POST["name"]."', '".$_POST["codeno"]."', '".$_POST["typedata"]."', '".$_POST["typedata2"]."', 
		'".$_POST["color"]."', '".$_POST["storerage"]."', '".$_POST["appleid"]."', '".$_POST["password"]."', 
		'".$_POST["typedata_2"]."', '".$_POST["note"]."', '".$_POST["price1"]."', '".$_POST["price2"]."', 
		'".$_POST["totalprice"]."', '".date('d-m-Y')."', '".date('Y-m-d')."', '".date('H:i')."',  
		 '".$_SESSION["UserID"]."', '".$bill_no."', '".$_POST["major"]."', '1', 'พร้อมจำหน่าย', 'ยังไม่ได้ชำระค่าคอม', '".$_POST["contactstatus"]."'  )"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		//echo $strSQL;
			 
		
		
		$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$bill_no."', '".$bill_no."', '".date('Y-m-d')."', '".date('H:i')."', '".$create_by."', ' เพิ่มสินค้า ', '".$bill_no."', '".$bill_no."' )"; 
		$objQuery = mysqli_query($objCon, $strSQL);	
					 
		
		
		if($_POST["contactstatus"] == "สั่งซื้อปกติ"){
		 /////	echo("<SCRIPT LANGUAGE='JavaScript'> window.open('print_product.php?pasy_bill=".$bill_no."'); </script>"); 
			
		}else{
		 
		}
		
		 
	 
	}
?>

 
<form id="frm" method="post" action="product.php">
							
</form> 
<script>
document.getElementById("frm").submit();
</script> 





