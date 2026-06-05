<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";

	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){

		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname = $_GET["searchname"];



		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load = date("d-m-Y", strtotime($date_income)); 
	}


	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){

		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}else{
		$searchname2 = $_GET["searchname2"];



		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

		$daystart_load2 = date("d-m-Y", strtotime($date_income)); 
	}
									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  

									
	$customername = "";
	if(empty($_GET["customername"])){
		
	}else{
		$customername = $_GET["customername"];
	}  
 					
	$pageloaddata = $_GET["pageloaddata"];


			$perpage = 25;
		if (isset($_GET['page2'])) {
			$page = $_GET['page2']; 
		 } else {
			$page = 1;
		} 

		if (empty($_GET['page2'])) {
			 $page = 1;
		 }  			
		$start = ($page - 1) * $perpage;



		$addcode = "";
		$addcode2 = ""; 
		$addcode3 = ""; 
		$addcode4 = ""; 
		 
		 

		$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
		$checkend   = date("Y-m-d", strtotime($daystart_load2)); 
 

		$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
		$addcode = "  and  a.date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 



		if(empty($_GET["searchname3"])){

		}else if(($_GET["searchname3"] == "กำลังผ่อน")){
			$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
		}else if(($_GET["searchname3"] == "NPL")){
			$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
		}else if(($_GET["searchname3"] == "หมดหนี้")){
			$addcode2 = " and  a.closebill = 'หมดหนี้' ";

		} 
 

		if(!empty($_GET["customername"])){
			$addcode4 = "   and (b.name like '%".$customername."%'  or  c.codecustomer like '%".$customername."%') "; 
		}
		
		

		$totalnew1 = 0;
		$totalnew2 = 0;
		$totalnew3 = 0;
		$totalnew4 = 0;
		$totalnew5 = 0;
		$totalnew6 = 0;

 

		$sql = "  SELECT a.*, b.name, c.codecustomer, c.codecustomer, b.facebook   FROM history_payment a 
		INNER Join customer b On a.customer = b.pk
		INNER Join list_order c On a.bill_no = c.bill_no
		where a.bill_no != ''   
		and a.income != ''
		and a.income != '0'      and c.contactstatus = 'อนุมัติแล้ว' 
		".$addcode.$addcode2.$addcode3.$addcode4."    
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
			
			$totalnew1++; 
			$totalnew2 += $income; 
			$totalnew3 += $discount; 
			$totalnew4 += $allpasy; 
			$totalnew5 += $newmoney; 
		}
	  ?>  
	  
	  <button class="btn btn-sm  " style="  background-color: #FF8C00; border-radius: 5px;  height: 40px;  border: 1px solid  #FF8C00;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > จำนวน  <?php echo number_format(0+$totalnew1); ?>  คน </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #006400; border-radius: 5px;  height: 40px;  border: 1px solid  #006400;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ยอดชำระ  <?php echo number_format(0+$totalnew2); ?>    </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #B22222; border-radius: 5px;  height: 40px;  border: 1px solid  #B22222;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ส่วนลด   <?php echo number_format(0+$totalnew3); ?>     </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #FFD700; border-radius: 5px;  height: 40px;  border: 1px solid  #FFD700;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > ผลรวมภาษี  <?php echo number_format(0+$totalnew4); ?>     </font>
	  </button>


	  <button class="btn btn-sm  " style="  background-color: #001470; border-radius: 5px;  height: 40px;  border: 1px solid  #001470;  margin-top: 5px; " type="button"   >
			<font color="#FFF" > รวมทั้งสิ้น    <?php echo number_format(0+$totalnew5); ?>  คน </font>
	  </button>


  	  <a href="printreportnew4.php?page2=<?php echo $pageloaddata; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>" target="_blank">
  		 
	  <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;  margin-top: 5px;  " type="button"    >
			<font color="#FFF" >  พิมพ์เอกสาร  </font>
	  </button>		

		</a>	
         
				
  	  <a href="printreportnew4_ex.php?page2=<?php echo $pageloaddata; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&customername=<?php echo $customername; ?>" target="_blank">
  		 
	  <button class="btn btn-sm  " style="  background-color: #008B8B; border-radius: 5px;   height: 40px;  border: 1px solid  #008B8B;  margin-top: 5px;  " type="button"    >
			<font color="#FFF" >  Export </font>
	  </button>		

		</a>		
         

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