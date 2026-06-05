<meta charset="utf-8">
<?php  
session_start();
include("../database.php");
   
   
	 if(empty($_SESSION["UserID"])){
		 //echo("<script>alert('ไม่พบ Username / Passaword Customer นี้ในระบบ!!')</script>");
		 echo("<script>window.location = '../index.php';</script>");
	 
	 } else{
		  
 
		$cut = explode("/",$_POST["savedate"]);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
			
		$daystart = date("d-m-Y", strtotime($date_income)); 
		$dayend = date("Y-m-d", strtotime($date_income)); 
		$typedata = $_POST["typedata"]; 
		$major = $_POST["major2"]; 
		 
		 
		$bill_no = ""; 
		$GGyear= date('Y')+543 ; 
		$sql2 = "SELECT count(pk) as total FROM run_bill_payment where typedata = '".$typedata."' and major = '".$major."' and create_date2 = '".$dayend."'   ";
		$query2 = mysqli_query($objCon,$sql2);
		while($objResult2 = mysqli_fetch_array($query2))
		{
			$total = $objResult2["total"] + 1;  
		} 
 
		 /*
		ค่าเช่า คือ SGR
		ค่ายิงแอด SGAD
		ค่าส่งของ SGST
		ค่าพนักงาน SGE
		ค่าโทรศัพท์ SGT
		ค่าเน็ต SGN
		ค่าน้ำ SGW
		ค่าไฟ SGF 
		ค่าใช้จ่ายอืนๆ SGALL

		*/
		$ttitlabill = "";
		if($typedata == "ค่าเช่า"){
			$ttitlabill = "SGR";
		}
		if($typedata == "ค่ายิงแอด"){
			$ttitlabill = "SGAD";
		}
		if($typedata == "ค่าส่งของ"){
			$ttitlabill = "SGST";
		}
		if($typedata == "ค่าพนักงาน"){
			$ttitlabill = "SGE";
		}
		if($typedata == "ค่าโทรศัพท์"){
			$ttitlabill = "SGT";
		}
		if($typedata == "ค่าเน็ต"){
			$ttitlabill = "SGN";
		}
		if($typedata == "ค่าน้ำ"){
			$ttitlabill = "SGW";
		}
		if($typedata == "ค่าไฟ"){
			$ttitlabill = "SGF";
		}
		if($typedata == "ค่าใช้จ่ายอืนๆ"){
			$ttitlabill = "SGALL";
		}
		$bill_no =  $ttitlabill."".date('Ymd')."-".$total; 
		 
		 
		 
		$strSQL = "INSERT INTO run_bill_payment (bill_no, major, create_date, create_date2, create_time, typedata) 
		VALUES  ('".$bill_no."', '".$major."', '".$daystart."', '".$dayend."', '".date('H:i:s')."', '".$typedata."' )";  
		$objQuery = mysqli_query($objCon, $strSQL);

		 
		 
		 
		 
		$strSQL = "INSERT INTO payment_other ( 
		savedate, price, note, create_date, create_date2, create_time, 
		create_by, major, typedata, bill_no, note2, statuspayment, statuspasy, bank  
		) 
		VALUES ( 
		'".$_POST["savedate"]."', '".$_POST["price"]."', '".$_POST["note"]."', '".$daystart."', '".$dayend."', 
		'".date('H:i')."', '".$_SESSION["UserID"]."', '".$major."',  '".$typedata."', '".$bill_no."', '".$_POST["note2"]."' , '".$_POST["statuspayment"]."', '".$_POST["statuspasy"]."', '".$_POST["bank"]."'
		)"; 
		$objQuery = mysqli_query($objCon, $strSQL);
		  
		//echo $strSQL;
		//echo("<script>alert('สมัครสมาชิกเรียบร้อย!!')</script>");
		echo("<script>window.location = 'paymentdata1.php?searchname=".$_POST["savedate"]."&major=".$major."&typedata=".$typedata."';</script>");
		 
	 }
		
	 
	 
?>