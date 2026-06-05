<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
 
 
		$cut = explode("/",$_POST["datesave"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 


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
							 
						$check_image11 = "FREGrimg".rand(1,999)."img".rand(110000,999999).".png"; 
						move_uploaded_file($file_tmp,"../img/".$check_image11);
						$update_img11  =  $check_image11 ; 



						$strSQL = "INSERT INTO product_img ( img, bill_no   ) VALUES 
						( '".$update_img11."',  '".$_POST["bill_no"]."'  )"; 
						$objQuery = mysqli_query($objCon, $strSQL);
						}

					}  
			}
	 
		
			$strSQL = "Update datachat Set  
				 datesave = '".$_POST["datesave"]."',      
				 datenew1 = '".$daystart."',   
				 datenew2 = '".$dayend."',   
				 detail = '".$_POST["detail"]."', 
				 drop_chat = '".$_POST["drop_chat"]."', 
				 major = '".$_POST["major"]."' " ;
				$strSQL .=" WHERE pk = '". $_POST["idupdate"]."' ";  
				$objQuery = mysqli_query($objCon, $strSQL); 
		 
		
		 echo("<script>window.location = 'chatmajor_edit.php?CusID=".$_POST["idupdate"]."&bill_no=".$_POST["bill_no"]."';</script>");
	 
?>