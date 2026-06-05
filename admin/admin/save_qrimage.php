<?php
session_start();
include("../database.php");


			

			function imageResize($imageResourceId,$width,$height) {
				$targetWidth = $width < 1280 ? $width : 1280 ;
				$targetHeight = ($height/$width)* $targetWidth;
				$targetLayer = imagecreatetruecolor($targetWidth,$targetHeight);
				imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);
				return $targetLayer;
			}

			/** show details */
			function size_as_kb($size = 0) {
				if($size < 1048576) {
					$size_kb = round($size / 1024, 2);
					return "{$size_kb} KB";
				} else {
					$size_mb = round($size / 1048576, 2);
					return "{$size_mb} MB";
				}
			}

			function imgSize($img) {
				$targetWidth = $img[0] < 1280 ? $img[0] : 1280 ;
				$targetHeight = ($img[1] / $img[0])* $targetWidth;
				return [round($targetWidth, 2), round($targetHeight, 2)];
			}


		 	$check_image11 = $_FILES["newAvatar"]["name"];
			$check_type = $_FILES["newAvatar"]["type"];
			$update_img11 = "";
  
				
			if(empty($check_image11)){
				$check_image11 = "";
			}else{
				/*
				$check_image11 = "QRD".rand(1,9999).$_FILES["newAvatar"]["name"];
				if(move_uploaded_file($_FILES["newAvatar"]["tmp_name"],"../img/".$check_image11))
				{
					 $update_img11  =  $check_image11 ;
				} 
				*/
				
				$file = $_FILES['newAvatar']['tmp_name']; 
				$sourceProperties = getimagesize($file);
				$fileNewName = "QRD".rand(1111111,9999999);
				$folderPath = "../img/";
				$ext = pathinfo($_FILES['newAvatar']['name'], PATHINFO_EXTENSION);
				$imageType = $sourceProperties[2];


				
				switch ($imageType) {

					case IMAGETYPE_PNG:
						$imageResourceId = imagecreatefrompng($file); 
						$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
						imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
						break;

					case IMAGETYPE_GIF:
						$imageResourceId = imagecreatefromgif($file); 
						$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
						imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
						break;

					case IMAGETYPE_JPEG:
						$imageResourceId = imagecreatefromjpeg($file); 
						$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
						imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
						break;

					default:
						echo "Invalid Image type.";
						exit;
						break;
				}

				 
				$update_img11 = $fileNewName. "_thump.". $ext;
			}

  
				$strSQL = "INSERT INTO qrimage ( name,  img ) VALUES 
				( '".$_POST["name"]."', '".$update_img11."' )"; 
				$objQuery = mysqli_query($objCon, $strSQL);		  

				 //echo("<script>alert(' ข้อมูลอัพเดตเรียบร้อย !! ')</script>");
				 echo("<script>window.location = 'qrimage.php';</script>");

?>