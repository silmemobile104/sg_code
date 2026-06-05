<?php
session_start();
include("../database.php");

    $accessToken = "g4UJ0L1ATqYsZR6u+YTY66k7iEJ+VrFZnyEgyVKs5LIXBLpxFsFH6TaonruNf6sOyRlOFrPWwWlbvLS4wVlh0JT6C6IX8LmcT9pXeKzrgF3NWTQv7UC2+kSeQsMCLDnOPs29XyP7LdWb3r2gBro2KgdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";

   //รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้ $id = "U94630e0fddf4666a16d8b0043e464ecb";
   $id = $arrayJson['events'][0]['source']['userId'];

	///// 
	// SA : 
	// ID :
	$rest = substr($message, 0, 2); 

	 
	 
   #ตัวอย่าง Message Type "Text + Sticker"
   if($message == "สวัสดี"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
      $arrayPostData['messages'][1]['type'] = "sticker";
      $arrayPostData['messages'][1]['packageId'] = "2";
      $arrayPostData['messages'][1]['stickerId'] = "34";
      pushMsg($arrayHeader,$arrayPostData);
	   
   }else if($message == "ยืนยัน"){
      $arrayPostData['to'] = $id;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "token : " . $id;  
      pushMsg($arrayHeader,$arrayPostData);
	   
    }else if(!empty($message)){
	   
	     $strSQL = "SELECT * FROM customer WHERE ( passport = '".$message."'  or telphone = '".$message."' )  ";
		 $objQuery = mysqli_query($objCon,$strSQL);
		 $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC); 
			if(!$objResult)
			{  
				 $arrayPostData['to'] = $id;
				 $arrayPostData['messages'][0]['type'] = "text";
				 $arrayPostData['messages'][0]['text'] = " ไม่พบ User นี้ในระบบ  ";  
				 pushMsg($arrayHeader,$arrayPostData);
			}
			else
			{ 
				 $arrayPostData['to'] = $id;
				 $arrayPostData['messages'][0]['type'] = "text";
				 $arrayPostData['messages'][0]['text'] = $objResult["passport"]. "\n".$objResult["name"].  "\n". "คุณได้ทำการผูกไอดีลาย (สำเร็จ) ";     
				 pushMsg($arrayHeader,$arrayPostData);
				 

				 $strSQL = " Update customer Set lineadmin = '".$id."' ";
				 $strSQL .=" WHERE pk = '".$objResult["pk"]."' "; 

				 $objQuery = mysqli_query($objCon, $strSQL); 
 
			} 
   }
	  

   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;
?>