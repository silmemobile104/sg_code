<?php
session_start();  
include('../database.php');
	 
	$member_user = $_SESSION["UserID"];



	$major2_chk = 0;
	$strSQL2 = "SELECT * FROM member_bank WHERE bill_no != '' and typedata = 'ถอนเงิน' and  pasy_bill = '' and pasy_onoff = 'ON' and pasy_createby = '".$_SESSION["UserID"]."'
	 Group By bill_no 
	";
	$objQuery2 = mysqli_query($objCon, $strSQL2);
	while($objResult_c = mysqli_fetch_array($objQuery2))
	{ 			
		 $major2_chk++;
	} 
?>


<font color="#FFF" size="2px" class="serif1"  id="totaltxtbill" >  ออกบิลใบเสร็จวางบิล ( <?php echo number_format(0+$major2_chk); ?> )   </font>