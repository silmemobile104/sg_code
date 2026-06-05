<?php
session_start();
include('../database.php');
    
    $html = '';

	$searchname = date('d/m')."/".(date('Y'));
	$cut = explode("/",$searchname);
	$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	$daystart_load = date("d-m-Y", strtotime($date_income)); 
	 


	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}	
	 
	$totalcal1= 0;
	$addcode = "";
	if(empty($_GET["searchname"])){

	}else{
		$addcode = " and  b.name like '%".$searchname."%' ";
	}
	$addcode2 = ""; 
	if(empty($_GET["searchname2"])){
		$addcode2 = " and major = '-------------'  ";
	}else{
		$addcode2 = " and major = '".$searchname2."'  ";
	} 

							$totalcal2 = 0;
							$totalcal3 = 0;
							$totalcal4 = 0;
							$totalcal5 = 0;
							$sql2 = " SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''  and a.status = 'อนุมัติ/สัญญาโมฆะ'  
							".$addcode.$addcode2."  
							order by a.pk asc  ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 
											
								$priceorder = $objResult2["priceorder"];    
								$c_price_back = $objResult2["c_price_back"];  
								$moneydown = $objResult2["moneydown"];    
									
								
								$discoount = 0;
								$discoountpaymentother = 0;
								$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
								$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
								$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
								$sql = "SELECT * FROM history_payment Where  
								bill_no = '". $objResult2["bill_no"]."' 
								and income != ''  and income != '0'   
								".$code_check2." ";   
								$query = mysqli_query($objCon,$sql); 
								while($objResult = mysqli_fetch_array($query))
								{  
									if(!empty($objResult["income"])){
										$discoount += $objResult["income"]; 

									}
									if(!empty($objResult["paymentother"])){
										$discoountpaymentother += $objResult["paymentother"]; 
									}  
								}	

								$allmoney = ($totalprice2*$totalprice3)-$discoount;
								$endback = $moneydown+$discoount;
								
								$totalcal1 += $c_price_back;
								
								
								$calshow = 0;
								if(!empty($c_price_back)){
									$calshow = $endback - $c_price_back;
									if($calshow <= 0){
										$calshow = 0;
									}
								}
								 
								$totalcal2 += $calshow;
								
								if($objResult2["c_status2"] == "รอสินค้า"){
									$totalcal3++;
								}
								if($objResult2["c_status2"] == "จำหน่ายแล้ว"){
									$totalcal4++;
								}
								if($objResult2["c_status"] == "รอการยืนยัน"){
									$totalcal5++;
								}
							}
?> 
	<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=รอการยืนยัน"    > 
	<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
	<font color="#FFF" size="2px" class="serif1" >  รอการยืนยัน <?php echo number_format(0+$totalcal5); ?>  </font> 
	</button> 
	</a>
   							 
   	<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ยอดคืนเงินลูกค้า"    > 
	<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
	<font color="#FFF" size="2px" class="serif1" >  ยอดคืนเงินลูกค้า <?php echo number_format(0+$totalcal1); ?>  </font> 
	</button> 
   	</a>
								 
   	<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ยอดเงินคงเหลือ"    > 
	<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
	<font color="#FFF" size="2px" class="serif1" >  ยอดเงินคงเหลือ <?php echo number_format(0+$totalcal2); ?>    </font> 
	</button> 
   	</a>
								 
   	<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=รอสินค้า"    > 
	<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
	<font color="#FFF" size="2px" class="serif1" >  รอสินค้า <?php echo number_format(0+$totalcal3); ?>    </font> 
	</button>
   	</a>
								 
   	<a href="check_contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=จำหน่ายแล้ว"    > 
	<button type="button" class="btn btn-primary" style="background-color: #4B0082; border-radius: 5px; height: 40px; border: 1px solid  #4B0082;  margin-top: 15px;  "> 
	<font color="#FFF" size="2px" class="serif1" >  จำหน่ายแล้ว <?php echo number_format(0+$totalcal4); ?>    </font> 
	</button>
   	</a>
								

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