<?php
session_start();  
include('../database.php');
	
	 $bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 


	$sql2 = "  SELECT *  FROM member_bank 
	where  bill_no != ''  and pasy_onoff = 'ON' and pasy_bill = '' and pasy_createby = '".$_SESSION["UserID"]."' 
	 Group By bill_no
	 order by pk asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}

		$create_date = $objResult2["create_date"];
		$create_date2 = $objResult2["create_date2"];
		$create_time = $objResult2["create_time"];
		$create_by = $objResult2["create_by"];
		$pkselect = $objResult2["pkselect"];
		$bill_no = $objResult2["bill_no"];
		$total_price = $objResult2["price"];

 
	 $i++;  $totalprice1+=$total_price;  
	
	} 
?>
    
<tr>
<td width="2%" colspan="2" bgcolor="#FFF" height="35px;" style="  border: 0px solid #FFF;  "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รวมเงินทั้งสิน     </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php 
  
echo number_format(0+$totalprice1); 

?>    </font></div></th>     
</tr>  





