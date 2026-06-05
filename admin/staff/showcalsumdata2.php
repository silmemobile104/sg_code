<?php
session_start();
include('../database.php');
    
    $html = '';

	$searchname = date('d/m')."/".(date('Y'));
	$cut = explode("/",$searchname);
	$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	$daystart_load = date("d-m-Y", strtotime($date_income)); 
	 



												$addcode = "";
												if(empty($_GET["searchname"])){

												}else{
													$addcode = " and  ( b.name like '%".$searchname."%' or a.codecustomer like '%".$searchname."%' or a.bill_no like '%".$searchname."%' )";
												}
												$addcode2 = ""; 
												if(empty($_GET["searchname2"])){

												}else{
													$addcode2 = " and major = '".$searchname2."'  ";
												} 
																					 
												$addcode3 = ""; 
												if(empty($_GET["status"])){
												}else if(($_GET["status"] == "ปกติ")){	
													
													$addcode3 = " and status = 'ปกติ'  ";
													
												}else if(($_GET["status"] == "อนุมัติ/สัญญาโมฆะ")){
													
													$addcode3 = " and status = 'อนุมัติ/สัญญาโมฆะ'  ";
													 
												}else{
												 
												} 

							$totalcal2 = 0;
							$totalcal3 = 0;
							$totalcal4 = 0;
							$sql2 = " SELECT a.*, b.name FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											where a.bill_no != ''    and a.closebill = 'เป็นหนี้' 
											".$addcode.$addcode2."  
											order by a.pk asc  ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								if($objResult2["status"] == "ปกติ"){
									$totalcal1++;
								}
								if($objResult2["status"] == "อนุมัติ/สัญญาโมฆะ"){
									$totalcal2++;
								}
							}
?> 
   							 
  <a href="contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=ปกติ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ปกติ <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="contact.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&page=edit&typedata=อนุมัติ/สัญญาโมฆะ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF0000; border-radius: 5px; height: 40px; border: 1px solid  #FF0000;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  อนุมัติ/สัญญาโมฆะ <?php echo number_format(0+$totalcal2); ?>    </font> 
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