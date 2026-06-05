<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";
 							
	$customer = "";
	if(empty($_GET["customer"])){
		
	}else{
		$customer = $_GET["customer"];
	}   							
	$percent = "";
	if(empty($_GET["percent"])){
		
	}else{
		$percent = $_GET["percent"];
	}   							
	$month = "";
	if(empty($_GET["month"])){
		
	}else{
		$month = $_GET["month"];
	}  							
	$year = "";
	if(empty($_GET["year"])){
		
	}else{
		$year = $_GET["year"];
	} 
	$major = "1";
 
	$date_income = "01"."-".$month."-".$year; 
	$contactstart = date("Y-m-d", strtotime($date_income)); 
	$checkend = date("Y-m-t", strtotime($contactstart));  

	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";  
	/// echo $addcode;

	$p_m1 = 0; 
	$p_m2 = 0;
	$p_m2_new = 0;
	$p_m3 = 0;
	$p_m4 = 0;
	$p_m5 = 0;
	$p_m6 = 0;
	$p_m7 = 0;
	$p_m8 = 0;
	$p_m9 = 0;
	$p_m10 = 0;
				
	$contactstart = date("Y-m-d", strtotime($contactstart)); 
	$checkend = date("Y-m-d", strtotime(date('d-m-Y')));   

	//// echo $contactstart . " <br> ";
	//// echo $checkend . " <br> ";



	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode2 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode3 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode4 = "  and  d.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode5 = "  and  savedata BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

	$addcode6 = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$addcode7 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 


	$p_m1 = 0;
	$p_m1_2 = 0;
	$p_m1_3 = 0;
	$p_m1_4 = 0;

	$p_m2 = 0;
	$p_m3 = 0;
	$p_m4 = 0;
	$p_m5 = 0;

	$p_dis1 = 0;

	$sql2 = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
	INNER Join customer b On a.customer = b.pk
	INNER Join list_order c On a.bill_no = c.bill_no
	where a.bill_no != ''   
	and a.income != ''
	and a.income != '0'  
	and a.status = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
	".$addcode6."    
	order by a.pk asc     ";   
	// echo $sql2;
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  

		if(!empty($objResult2["discount"])){ 
			$p_dis1 += $objResult2["discount"];
		}
	}

	$sql2 = "SELECT a.*  
	FROM payment_other_bill_no a 
	Inner join list_order b   On  a.bill_no_ref = b.bill_no
	Where a.bill_no != '' and price != '' ".$addcode2." ";  
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  
		$p_m2 += $objResult2["price"];       
	}


	$sql2 = "  SELECT * FROM paymentother   where   bill_no != ''  and data2 != '0'   ".$addcode3."   order by  pk asc ";  
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  
		$p_m3 += $objResult2["data2"];       
	}




	$addcode44 = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$sql2 = "  SELECT * FROM list_order_store  where bill_no != ''  and money != '' ".$addcode44."   order by  pk asc   ";  
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  
		$p_m4 += $objResult2["money"];       
	}

	$sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price2 != ''  order by  pk asc    ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{

		if($objResult2["statuspayment"] == "รอชำระเงิน"){

		}else{
			$p_m5 += $objResult2["price2"]; 
		}  

	}  		

	$s_m1 = 0;
	$s_m2 = 0;
	$s_m3 = 0;
	$s_m4 = 0;
	$s_m5 = 0;


	$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
			Inner Join customer b On   a.customer = b.pk
			Inner Join product c On   a.menu_id = c.pk
			Inner Join list_chk_computer d On   a.pk = d.pkselect

			where d.bill_no != ''  ". $addcode4 ."
			order by a.pk asc    "; 
	/// echo $sql2;
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{


		$totalprice1 = $objResult2["money"]; 
		$totalprice2 = $objResult2["daytotal"]; 
		$totalprice3 = $objResult2["dayprice"];  

		$pricecal = $objResult2["priceorder"] - $objResult2["moneydown"] - $objResult2["moneycontact"] + $objResult2["computer2"];


		$pasy = $objResult2["computer2"] * 0.03;
		$cal = $pricecal * 0.03;
		$cal2 = $pricecal  - $pasy;


		if($cal2 <= 0){
			$cal2 = 0;
		}

		$s_m1 += $cal2;
	}  	



	 $sql2 = " SELECT * FROM product  where name != ''  ". $addcode2 ."   order by pk asc    "; 
	/// echo $sql2;
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{ 
		$totalprice1 = $objResult2["price1"];  
		if($totalprice1 <= 0){
			$totalprice1 = 0;
		}

		$s_m2 += $totalprice1;
	}  	


	$sql2 = " SELECT * FROM mobile_restore where bill_no != ''  and major = '".$major."'  ".$addcode3."  and price1 != ''  order by  pk asc    ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{

			$s_m3 += $objResult2["price1"]; 

	}  	




	$sql2 = " SELECT * FROM member_bank where bill_no != ''  and typedata = 'ถอนเงิน'  ".$addcode3."  and price != ''  order by  pk asc    ";    
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{

			$percent = 0;	
			if(!empty($objResult2["percent"])){ 
				$percent = $objResult2["percent"];
			}

			$discount = 0; 

			$income1 = 0;
			if(($objResult2["typedata"] == "ฝากเงิน")){ 

			if(!empty($objResult2["price"])){ 
				$income1 = $objResult2["price"];
			}

			}
			$income2 = 0;
			$calsumper = 0;
			if(($objResult2["typedata"] == "ถอนเงิน")){ 

			if(!empty($objResult2["price"])){ 
				$income2 = $objResult2["price"];
				$calsumper = ($percent / 100)   * $income2;
			}
			}

			$p_m1_4 += $calsumper;
	}  	




	$typedata = "ถอนเงิน"; 		 

	 $sql2 = " SELECT * FROM member_bank  where price != '' and typedata = '".$typedata."'   ". $addcode3 ."   order by pk asc    "; 
	 /// echo $sql2;
	 $query2 = mysqli_query($con,$sql2); 
	 while($objResult2 = mysqli_fetch_array($query2))
	 { 
		$totalprice1 = $objResult2["price"];  
		if($totalprice1 <= 0){
			$totalprice1 = 0;
		}

		$s_m4 += $totalprice1;
	}  	





	$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
	INNER Join customer b On a.customer = b.pk
	INNER Join list_order c On a.bill_no = c.bill_no
	where a.bill_no != ''   
	and a.income != ''
	and a.income != '0'  
	and a.status = 'ปกติ'      and c.contactstatus = 'อนุมัติแล้ว' 
	".$addcode."    
	order by a.pk asc     ";  
	$query = mysqli_query($con,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{      
		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		} 

		$name_cutomer = " - ";
		$name_cutomer2 = " - ";    

		$note1 = " - ";
		$totalprice1 = 0;
		$totalprice2 = 0;
		$totalprice3 = 0;
		$totalprice4 = " - ";
		$totalprice5 = " - ";
		$startdate = " - "; 
		$discoount = 0;
		$discoountpaymentother = 0;  


		$discoount_cut = 0;  
		$discoount_cut1 = 0;  
		$discoount_cut2 = 0; 



		$discountbank = 0;  
		$countloopnopay = 0;
		$chk_total = 0;   

		$discount = 0;
		if(!empty($objResult["discount"])){ 
			$discount = $objResult["discount"];
		}

		$income = 0;
		if(!empty($objResult["income"])){ 
			$income = $objResult["income"];
		}

		$newcalculator = $income - $discount;
		$vat = ($newcalculator * 100) / 107;


		$allpasy =  $newcalculator - ($vat);

		$newmoney = $income - $discount;
		$newpayment = ($newmoney * 100) / 107;

		$p_m1 += $newmoney; 
	}						 




	$paymenttotal = 0;						 
	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$sql2 = "  SELECT * FROM paymenttyp3   where  price != ''  ".$addcode."   order by  create_date2 asc   ";   
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{       
		$bill_no =  $objResult2["bill_no"];
		$g_create_date2 =  $objResult2["create_date2"];
		$typedata =  $objResult2["typedata"];
		$note =  $objResult2["note"];
		$statuspasy =  $objResult2["statuspasy"];

		$price1 =  0;
		if(!empty($objResult2["price"])){
			$price1 =  $objResult2["price"];

		}

		$vat = 0;
		$pasy = 0;
		if(empty($statuspasy)){

		}else if($statuspasy == "ภาษีภายใน"){
			$pasy  = ($price1 *  7 ) / 107;
			$totaldata2 +=  $pasy;
		}else if($statuspasy == "ภาษีภายนอก"){ 
			$pasy  = ($price1 *  100 ) / 107;
			$totaldata3 +=  $pasy;
		}

		$newmoney =  $price1 - $pasy;


		$paymenttotal +=  $price1;

	}	
	 
	$alldata = $p_m1+$p_m1_3+$p_m1_4+$p_m2+$p_m3+$p_m4+$p_m5;	 
	$totalall2 = $s_m1;	

 
	$cal1 = $alldata;					 
	$cal2 = $totalall2+$paymenttotal;	 
	$cal3 = $cal1 - $cal2;

	//// echo $cal1 . " <br> ";
	//// echo $cal2 . " <br> ";
	//// echo $cal3 . " <br> ";



	$person = 0;				 
	$sql2 = " SELECT * FROM customerpunpon where pk = '".$customer."'  order by pk asc ";   
	/// echo $sql2; 
	$query2 = mysqli_query($con,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{   
		$person = 0;	
		if(empty($objResult2["percent"])){
			 $person = $cal3 * 0;
		}else{
			 $person = $cal3 *  ( $objResult2["percent"] / 100) ;
		} 
		
		if($cal3 <= 0){
			$person = 0;
		}
	}
 
	$show = number_format(0 + $person, '0','', '');


?>
    
    
   <input type="text" class="form-control" id="percent2" name="percent2"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $show; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"     > 
     
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