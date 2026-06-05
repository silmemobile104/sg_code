<?php
session_start();
include("../database.php");

	  
	
	 $loaddate = date('d-m-Y'); 
		
	 $date_income = date('d')."/".date('m')."/".(date('Y')+543);  
			  
	 $showdataon = date('d');


	 $total_check = 0;
	 $total_update = 0;
	 $sql_checkend = "SELECT * FROM list_order  
	 where bill_no != '' and status = 'ปกติ' and closebill = 'เป็นหนี้'   
	 Group By bill_no order by pk desc ";   
	 $query_checkend = mysqli_query($con,$sql_checkend); 
	 while($objResult_checkend = mysqli_fetch_array($query_checkend))
	 { 
		$total_check++;
		 
		$totalprice1 = $objResult_checkend["money"]; /// ยอดกู้
		$totalprice2 = $objResult_checkend["daytotal"]; /// จำนวนวัน
		$totalprice3 = $objResult_checkend["dayprice"]; /// ยอดเก็บรายวัน
		$saveroom = $objResult_checkend["room"]; /// ยอดเก็บรายวัน
		$customer = $objResult_checkend["customer"]; /// ยอดเก็บรายวัน
		$startdate = $objResult_checkend["startdate"]; /// ยอดเก็บรายวัน   
		$major = $objResult_checkend["major"]; /// ยอดเก็บรายวัน   
		 
		 
		$orderdata = 0; 
		$discoount_check = 0; 
		$endate = date('Y-m-d');
		$sql2 = "SELECT * FROM history_payment Where  bill_no = '". $objResult_checkend["bill_no"]."' and (income != '' or income != '0') order by pk asc ";   
		$query2 = mysqli_query($objCon,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$discoount_check += $objResult2["income"]; 
			 
		}
		  
		$caldiscount = ($totalprice2*$totalprice3) - $discoount_check;
			 
			if( $caldiscount <= 0 ){ /// ถ้ามันน้อยกว่า 0 คือ ไม่เป็นหนี้ 
				$total_update++;
				 
				$strSQL = " Update list_order Set closebill = 'หมดหนี้'  " ;
				$strSQL .=" WHERE bill_no = '".$objResult_checkend["bill_no"]."' "; 
				$objQuery = mysqli_query($objCon, $strSQL);
									
				$strSQL = " Update history_payment Set closebill = 'หมดหนี้'  " ;
				$strSQL .=" WHERE bill_no = '".$objResult_checkend["bill_no"] ."' "; 
				$objQuery = mysqli_query($objCon, $strSQL);
				
			}
		 
		 
	}







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

		 $id = "Ub841c61c768bdea50059923e52637c32";
		$arrayPostData['to'] = $id;
		$arrayPostData['messages'][0]['type'] = "text"; 
		$arrayPostData['messages'][0]['text'] = " ระบบ ANS อัพเดตยอด หมดหนี้ ". $total_check . " รายการ  เวลา ".date('d-m-Y H:i:s') ." ยอดหมดหนี้ ".$total_update  ;     
		pushMsg($arrayHeader,$arrayPostData);


		
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
 
		
<script>
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
	function numberWithCommas2(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>

<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?>  
	

<?php
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
?>