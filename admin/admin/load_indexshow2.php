<?php
session_start();
include('../database.php');
    
    $html = '';

 
	$searchname = "";
	if(!empty($_GET["startdate"])){
		$searchname = $_GET["startdate"];
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}  
	$searchname2 = "";
	if(!empty($_GET["endate"])){
		$searchname2 = $_GET["endate"];
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
		
	} 

	$addcode = "";
	$addcode2 = "";
										  
		 
	$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
	$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 

 
	$addcode = "  and startdate BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	$p_total1 = 0;
	$p_total2 = 0;
	$p_total3 = 0;
	$p_total4 = 0;
	$sql2 = " SELECT * FROM list_order where bill_no != '' and closebill = 'เป็นหนี้'  ".$addcode."  order by pk asc ";   
 
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{
		$cal1 = $objResult2["moneydata"] - $objResult2["moneydown"] + $objResult2["moneycontact"] ; 
		$p_total1 += $cal1;
		
		
		
		$cal2 = $objResult2["moneydata"] - $objResult2["priceorder"];  
		
	}
 
		
		$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ  
		$checkend =  date("Y-m-d", strtotime("+0 day", strtotime($daystart_load2)));
		$code_check2 = " and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no != ''  and onoff_copy = 'ปกติ' and closebill = 'เป็นหนี้' and status = 'ปกติ' ".$code_check2." ";    
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			$p_total3 += $objResult_npl["money"];
		} 
		$sql_npl = " SELECT * FROM history_payment Where  bill_no != ''  and onoff_copy = 'NPL'  and closebill = 'เป็นหนี้'  and status = 'ปกติ'  ".$code_check2." ";   
		$query_npl = mysqli_query($objCon,$sql_npl); 
		while($objResult_npl = mysqli_fetch_array($query_npl))
		{   
			$p_total4 += $objResult_npl["money"];
		}

?>

								 
						   <div class="col-md-3  " > 
							<div class=" small-box  "  style="background-color: #5B86E5; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ราคาทุน </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$p_total1);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

							</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #2AC1CE; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> กำไร </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$cal2);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #53B49A; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ยอดเก็บปกติ   </font>  
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$p_total3);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>

						   <div class="col-md-3  " > 
									<div class=" small-box  "  style="background-color: #F4BC4E; ">
									  <div class="row">
									  <div class=" col-md-9" style="border: 0px solid #000; " > 
									  <p style="padding-left: 10px; padding-right: 5px; padding-top: 10px;"> 
										<font color="white" style="font-size: 14px;"> ยอดเก็บ NPL  </font> 
									  </p>
									  <p style="padding-left: 10px; padding-right: 5px;  "> 
										<font color="white" style="font-size: 18px;"> <?php echo number_format(0+$p_total4);  ?> </font>  
									  </p>
									  </div>
									  <div class="  col-md-2 " align="right">
									  <p style="   padding-top: 10px;"> 
										<img src="images/add.png" width="30px" style=" padding-right: 5px; ">
									  </p>
									  </div>
									  </div>

									</div>
						   </div>  								 

<script> 
		function Commas(str)
		{
			var parts = str.toString().replace("," ,"").split(".");
			parts[0] = parts[0].replace("," ,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}
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