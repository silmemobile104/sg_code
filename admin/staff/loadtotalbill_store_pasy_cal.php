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


	$sql2 = "  SELECT *  FROM list_order_store 
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

		$total_price = 0;   
		$total_price +=  $objResult2["pasycal"];  


 


		$name_create = "-"; 
		$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_create =  $objResult["name"];
		}


		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}
		
		
	 $i++;  $totalprice1+=$total_price;  
	
	} 
?>
   
<tr>
<td width="2%" colspan="2" bgcolor="#FFF" height="35px;" style=" border: 0px solid #FFF;"  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   มูลค่าสินค้า    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="  border: 1px solid #DCDCDC;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$totalprice1); ?>    </font></div></th>     
</tr> 
<tr>
<td width="2%" colspan="2" bgcolor="#FFF" height="35px;" style=" border: 0px solid #FFF;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ภาษี 3 %    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php 

if($totalprice1 <= 0){
echo number_format(0); 
}else{ 
$totalsum = ($totalprice1  * 0.03); 
echo number_format(0+$totalsum); 
}

?>    </font></div></th>     
</tr> 
<tr>
<td width="2%" colspan="2" bgcolor="#FFF" height="35px;" style="  border: 0px solid #FFF;  "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รวมเงินทั้งสิน     </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;    "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   <?php 

if($totalprice1 <= 0){
$totalsum = 0; 
}else{ 
$totalsum = $totalprice1  * 0.03;   

}

$totacal = $totalprice1 - $totalsum; 
echo number_format(0+$totacal); 

?>    </font></div></th>     
</tr>  





