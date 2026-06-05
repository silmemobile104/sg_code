<meta charset="utf-8">
<?php
include('../database.php');
 
	 
	  
	$p_total1 = 0;		
	$p_total2 = 0;
	$p_total3 = 0;
	$sql2 = " SELECT * FROM list_order where bill_no != '' and closebill = 'เป็นหนี้' and onoff = 'NPL'  and status = 'ปกติ' order by pk asc ";    
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{ 
		$totalprice1 = $objResult2["money"]; 
		$totalprice2 = $objResult2["daytotal"]; 
		$totalprice3 = $objResult2["dayprice"];  
		$totalprice4 = $objResult2["startdate"]; 
		$totalprice5 = $objResult2["endate"];    

		$chk_total = 0; 
		
		$p_total1 += $totalprice2 * $totalprice3;
		$p_total3 += $totalprice1;

		$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime(date('Y-m-d'))));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no = '". $objResult2["bill_no"]."'  ".$code_check2." ";   
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			if(!empty($objResult_npl["income"])){  
				$p_total2 += $objResult_npl["income"]; 
			} 
		}
			 
	}



echo " ยอดหนี้ปกติทั้งหมดในระบบ  ต้น (  NPL) :  " . number_format(0+$p_total3) . " <br> ";
echo " ยอดหนี้ปกติทั้งหมดในระบบ  ต้น + ดอก (  NPL) :  " . number_format(0+$p_total1) . " <br> ";
echo " ยอดหนี้ปกติทั้งหมดในระบบ  ชำระมาแล้ว (  NPL) :  " . number_format(0+$p_total2) . " <br> ";





?> 
        
      