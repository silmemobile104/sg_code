<meta charset="UTF-8">
<?php  
session_start();
include("database.php");
  
		 
			$strSQL = "SELECT * FROM member_all WHERE username = '".$_POST['username']."' 
			and password = '".$_POST['password']."' ";
			$objQuery = mysqli_query($objCon,$strSQL);
			$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC); 
			if(!$objResult)
			{  
					  
				 echo("<script>alert('ตรวจสอบ user และ password อีกครั้ง !!')</script>");
				 echo("<script>window.location = 'index.php';</script>");

			}
			else
			{ 
					$_SESSION["CHKStatus"] = $objResult["status"]; 
					$_SESSION["CHKStatuspoition"] = $objResult["poition"];  
				 

					if($_SESSION["CHKStatus"] == "A"){
						
					$_SESSION["UserID"] = $objResult["pk"];
					$_SESSION["Status"] = $objResult["status"];
					$_SESSION["User"] = $objResult["username"];
					$_SESSION["Fullname"] = $objResult["name"];
							 
						setcookie("UserID", $_SESSION["UserID"], time()+12800);
						setcookie("Status", $_SESSION["Status"], time()+12800);
						setcookie("User", $_SESSION["User"], time()+12800);
						setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 
						
						
						
				  
						$useragent=$_SERVER['HTTP_USER_AGENT']; 	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

							
						//echo " Mobile ";
					 	 
						if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
						{ 
							//echo "iPhone or iPad";
							echo("<script>window.location = 'admin/index.php';</script>"); 
						} else { 
							//echo "Other, non-iOS device"; 
							echo("<script>window.location = 'admin/index.php';</script>");
						}

						}else{
						 
						if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
						{ 
							//echo "iPhone or iPad";
							echo("<script>window.location = 'admin/index.php';</script>"); 
						} else { 
							//echo "Other, non-iOS device"; 
							echo("<script>window.location = 'admin/index.php';</script>");
						}
							
					 	//echo("<script>window.location = 'adminlogin/index.php';</script>");
						}  
					}else if($_SESSION["CHKStatus"] == "T"){
						
					$_SESSION["UserID"] = $objResult["pk"];
					$_SESSION["Status"] = $objResult["status"];
					$_SESSION["User"] = $objResult["username"];
					$_SESSION["Fullname"] = $objResult["name"];
							 
						setcookie("UserID", $_SESSION["UserID"], time()+12800);
						setcookie("Status", $_SESSION["Status"], time()+12800);
						setcookie("User", $_SESSION["User"], time()+12800);
						setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 
						
						
						$bill_no = ""; 
						$GGyear= date('Y')+543 ; 
						$sql2 = "SELECT count(pk) as total FROM run_bill_checkin  ";
						$query2 = mysqli_query($objCon,$sql2);
						while($objResult2 = mysqli_fetch_array($query2))
						{
							$total = $objResult2["total"] + 1;  
						} 

						$bill_no =  "SGCHK".date('Ymd')."-".$total; 
						$strSQL = "INSERT INTO run_bill_checkin (bill_no) VALUES  ('".$bill_no."')";  
						$objQuery = mysqli_query($objCon, $strSQL);
 
		
						
						
						$strSQL = "INSERT INTO history_checkin ( member, location, bill_no, date_time, date_start   ) 
						VALUES  ( '". $objResult["pk"] ."', '".$gpsdata."', '".$bill_no."', '".date('H:i')."', '".date('Y-m-d')."'   )"; 
						$query2 = mysqli_query($objCon,$strSQL);
						
							echo("<script>window.location = 'tanaidata/index.php';</script>"); 
						
						
					}else if($_SESSION["CHKStatuspoition"] == "7"){
						
						$onoff = ""; 
						$date =  date('H');  
						$start3 = "08"; 
						$end3 = "21";  
						$login_on = "off";
						if($date >= $start3 && $date <= $end3){ 
							$login_on = "on"; 
						}	

						$sql_m = "SELECT * FROM onoff_server Where pk = '1'     ";   
						$query_m = mysqli_query($objCon,$sql_m); 
						while($objResult_m = mysqli_fetch_array($query_m))
						{  
							$onoff = $objResult_m["name"];
						}	

						if($onoff == "เปิดระบบทันที"){ 
							$login_on = "on"; 
						} 


						if($login_on == "on"){

							$_SESSION["UserID"] = $objResult["pk"];
							$_SESSION["Status"] = $objResult["status"];
							$_SESSION["User"] = $objResult["username"];
							$_SESSION["Fullname"] = $objResult["name"];

							setcookie("UserID", $_SESSION["UserID"], time()+12800);
							setcookie("Status", $_SESSION["Status"], time()+12800);
							setcookie("User", $_SESSION["User"], time()+12800);
							setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 

							echo("<script>window.location = 'staffpartner/index.php';</script>"); 

						//echo $onoff . " <br> " ;
						//echo $login_on . " <br> " ;

						}else{ 

							echo("<script>alert(' ขณะนี้ระบบปิดทำการ !!')</script>");
							echo("<script>window.location = 'index.php';</script>");

						}
						
						
						
						
					}else if($_SESSION["CHKStatuspoition"] == "4"){
						
						$onoff = ""; 
						$date =  date('H');  
						$start3 = "08"; 
						$end3 = "21";  
						$login_on = "off";
						if($date >= $start3 && $date <= $end3){ 
							$login_on = "on"; 
						}	

						$sql_m = "SELECT * FROM onoff_server Where pk = '1'     ";   
						$query_m = mysqli_query($objCon,$sql_m); 
						while($objResult_m = mysqli_fetch_array($query_m))
						{  
							$onoff = $objResult_m["name"];
						}	

						if($onoff == "เปิดระบบทันที"){ 
							$login_on = "on"; 
						} 


						if($login_on == "on"){

							$_SESSION["UserID"] = $objResult["pk"];
							$_SESSION["Status"] = $objResult["status"];
							$_SESSION["User"] = $objResult["username"];
							$_SESSION["Fullname"] = $objResult["name"];

							setcookie("UserID", $_SESSION["UserID"], time()+12800);
							setcookie("Status", $_SESSION["Status"], time()+12800);
							setcookie("User", $_SESSION["User"], time()+12800);
							setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 

							echo("<script>window.location = 'admin/staff/index.php';</script>"); 

						//echo $onoff . " <br> " ;
						//echo $login_on . " <br> " ;

						}else{ 

							echo("<script>alert(' ขณะนี้ระบบปิดทำการ !!')</script>");
							echo("<script>window.location = 'index.php';</script>");

						}
						
						
						
						
					}else if($_SESSION["CHKStatus"] == "ST"){
						
						
					$date =  date('H');  
					$start3 = "06"; 
					$end3 = "23"; 
						
					$login_on = "off";
					if($date >= $start3 && $date <= $end3){ 
						$login_on = "on"; 
					}	
					 
						$login_on = "on"; 
						  
					$gpsdata = $_POST["note1"];
					if($login_on == "on"){
						
						/*
						$_SESSION["UserID"] = $objResult["pk"];
						$_SESSION["Status"] = $objResult["status"];
						$_SESSION["User"] = $objResult["username"];
						$_SESSION["Fullname"] = $objResult["name"];
						  
						setcookie("UserID", $_SESSION["UserID"], time()+12800);
						setcookie("Status", $_SESSION["Status"], time()+12800);
						setcookie("User", $_SESSION["User"], time()+12800);
						setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 
						*/
						
					$poition = $objResult["poition"];
				 
						
					if($poition == "4"){
						
						$_SESSION["UserID"] = $objResult["pk"];
						$_SESSION["Status"] = $objResult["status"];
						$_SESSION["User"] = $objResult["username"];
						$_SESSION["Fullname"] = $objResult["name"];
						  
						setcookie("UserID", $_SESSION["UserID"], time()+12800);
						setcookie("Status", $_SESSION["Status"], time()+12800);
						setcookie("User", $_SESSION["User"], time()+12800);
						setcookie("Fullname", $_SESSION["Fullname"], time()+12800); 
						 
						echo("<script>window.location = 'admin/staff/index.php';</script>"); 
						
						
					}else{
						 
						
						$bill_no = ""; 
						$GGyear= date('Y')+543 ; 
						$sql2 = "SELECT count(pk) as total FROM run_bill_checkin  ";
						$query2 = mysqli_query($objCon,$sql2);
						while($objResult2 = mysqli_fetch_array($query2))
						{
							$total = $objResult2["total"] + 1;  
						} 

						$bill_no =  "SGCHK".date('Ymd')."-".$total; 
						$strSQL = "INSERT INTO run_bill_checkin (bill_no) VALUES  ('".$bill_no."')";  
						$objQuery = mysqli_query($objCon, $strSQL);
 
		
						
						
						$strSQL = "INSERT INTO history_checkin ( member, location, bill_no, date_time, date_start   ) 
						VALUES  ( '". $objResult["pk"] ."', '".$gpsdata."', '".$bill_no."', '".date('H:i')."', '".date('Y-m-d')."'   )"; 
						$query2 = mysqli_query($objCon,$strSQL);
 
						 
						echo("<script>window.location = 'admin/staff_wait/index.php?member=". $objResult["pk"]."&bill_no=".$bill_no."';</script>"); 
						
					}
					}else{ 
						echo("<script>alert(' ขณะนี้ระบบปิดทำการ !!')</script>");
						echo("<script>window.location = 'index.php';</script>");
					}
						  
					}else{
						
					echo("<script>alert(' ระงับการใช้งาน !!')</script>");
					echo("<script>window.location = 'index.php';</script>");
					}


			} 
			
		 

	mysqli_close($objCon);
?>