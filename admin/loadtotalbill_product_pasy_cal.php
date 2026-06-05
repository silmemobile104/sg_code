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


	$sql2 = "  SELECT *  FROM product 
	where  bill_no != ''  and pasy_onoff = 'ON' and pasy_bill = '' and pasy_createby = '".$_SESSION["UserID"]."'   and contactstatus = 'สั่งซื้อปกติ'
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

		$total_price_old = $objResult2["price1"]; 
		$total_price = $objResult2["price2"]; 
		$bill_no = $objResult2["bill_no"]; 
		$cutbill = explode("PO", $bill_no);
		$newbill =   "SGCIFR".$cutbill[1];

		$name_typedata = "";
		$sql = "SELECT * FROM store where pk = '".$objResult2["typedata_2"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_typedata =  $objResult["name"];
		}
		$name_typedata2 = "";
		$sql = "SELECT * FROM drop_typedata2 where pk = '".$objResult2["typedata2"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_typedata2 =  $objResult["name"];
		}
		$name_typedata3 = "";
		$sql = "SELECT * FROM drop_typecolor where pk = '".$objResult2["color"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_typedata3 =  $objResult["name"];
		}
		$name_typedata4 = "";
		$sql = "SELECT * FROM drop_typedata where pk = '".$objResult2["typedata"]."'    order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_typedata4 =  $objResult["name"];
		} 
		$name_major = "";
		$sql = " SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_major =  $objResult["name"];
		}

		$date_start = "";
		$date_start2 = "";
		$date_start3 = "";
		$sql = " SELECT * FROM update_real_time where bill_no = '".$bill_no."' order by pk desc limit 1 ";    
		$query = mysqli_query($con,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{ 
			$date_start = $objResult["create_by"];
			$date_start2 = $objResult["create_date2"];
			$date_start3 = $objResult["create_time"];
		} 
		$name_staff = "";
		$sql = " SELECT * FROM member_all where pk = '".$date_start."'   order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$name_staff =  $objResult["name"];
		}

		$pasy_onoff = $objResult2["pasy_onoff"];
		$hiiden1 = "";
		$hiiden2 = "display: none;";
		if($pasy_onoff == "ON"){  
		$hiiden1 = " display: none; ";
		$hiiden2 = " ";
		}
		
		
	 $i++;  $totalprice1+=$total_price_old;  
	
	} 
?>
   
<tr>
<td width="2%" colspan="2" bgcolor="#FFF" height="35px;" style=" border: 0px solid #FFF;"  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    &nbsp;    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="   border: 1px solid #DCDCDC;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดสุทธิ    </font></div></th>  
<td width="2%" colspan="" bgcolor="#FFF" height="35px;" style="  border: 1px solid #DCDCDC;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    <?php echo number_format(0+$totalprice1); ?>    </font></div></th>     
</tr> 
  





