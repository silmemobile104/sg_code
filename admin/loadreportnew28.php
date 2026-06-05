<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];  
	$major = $_SESSION["Major"];  

	$detail = "";
	$notedata = "";
	$customer = "";

	 
	$searchname =  date('m');
	if(empty($_GET["searchname"])){

	}else{
		$searchname = $_GET["searchname"];
	} 
	$searchname2 = date('Y');
	if(empty($_GET["searchname2"])){

	}else{
		$searchname2 = $_GET["searchname2"];
	}

									
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}  


?>
     
     
						
		
	<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
	<div class="table-responsive"  >
	<table id="key_product"  class=" table table-borders   tablemobile  " border="0"     >					
	<thead>  
	 <tr>
		<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เดือน    </font></div></th>      
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เพิ่มเงินลงทุน  </font></div></th>    
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ถอนเงินลงทุน  </font></div></th>           
		<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
		<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวมทั้งสิ้น   </font></div></th>  
	 </tr>
	</thead>							
										
	<?php  
		///  echo $numDays;

		$datadate  = "01-01-".$searchname;				    
		$contactstart = date("Y-m-d", strtotime($datadate));  
		$enddate = date("Y-m-t", strtotime($datadate)); 

		$d_array = array(
		"1" => "มกราคม",
		"2" => "กุมภาพันธ์",
		"3" => "มีนาคม",
		"4" => "เมษายน",
		"5" => "พฤษภาคม",
		"6" => "มิถุนายน",
		"7" => "กรกฎาคม",
		"8" => "สิงหาคม",
		"9" => "กันยายน",
		"10" => "ตุลาคม",
		"11" => "พฤศจิกายน", 
		"12" => "ธันวาคม"
		);

		$checkyear = date('Y');
		$checkmonth = date('m');
		
		$loadyear = 0;
		if($searchname > $searchname){
			$loadyear = 0;
		}
		if($searchname < $searchname){
			$loadyear = 12;
		}
		if($searchname == $searchname){
			$loadyear = $checkmonth;
		}
		 
	   $loopdata = 0;
	   $loopdataall = 0;
	   for($x = 1; $x <= $loadyear; $x++){

		$loopdata++;
		$loaddate_show = date ("Y-m-d", strtotime("+ ". ($x-1) ." day", strtotime($contactstart)));
		$loaddate_show2 = $d_array[ $x ];

		$sumround = 0; 
		   
		   
		$datadate1  = "01-".$x."-".$searchname;				    
		$datadate2  = "31-".$x."-".$searchname;				    
		
		$contactstart   = date("Y-m-d", strtotime($datadate1));  
		$enddate = date("Y-m-t", strtotime($contactstart)); 

		$addcode = "  and create_date2 BETWEEN '".$contactstart."' AND '".$enddate."'  "; 
		   
		 
			$allmoney = 0;
			$cno = 0;
			$cno1 = 0;
			$cno2 = 0;
			$cno3 = 0;
			$price1 = 0;
			$price2 = 0;
			$sql2 = "  SELECT *  FROM pricesomtub  where bill_no != ''   ".$addcode."   order by create_date2 asc, pk asc     ";  
		     
			$query2 = mysqli_query($con,$sql2); 
			while($objResult2 = mysqli_fetch_array($query2))
			{       
				$contactstart   = date("Y-m-d", strtotime("2020-01-01")); 
				$checkend   = date("Y-m-d", strtotime($objResult2["create_date2"])); 

				$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
				$sql = "SELECT * FROM pricesomtub where titledata != ''  ".$addcode." and pk <= '".$objResult2["pk"]."'   
				order by create_date2 asc, pk asc   "; 
				$query = mysqli_query($objCon,$sql);
				while($objResult = mysqli_fetch_array($query))
				{ 
					if(($objResult["titledata"] == "เพิ่มเงินลงทุน")){
						$allmoney +=  $objResult["price"] ;
					} else if(($objResult["titledata"] == "ถอนเงินลงทุน")){
						$allmoney -=  $objResult["price"] ;
					}
				} 

				if($allmoney <= 0){
					$allmoney = 0;
				}
  
 
				if(($objResult2["titledata"] == "เพิ่มเงินลงทุน")){
					$price1 +=  $objResult2["price"] ;
				} else if(($objResult2["titledata"] == "ถอนเงินลงทุน")){
					$price2 +=  $objResult2["price"] ;
				}
		 
			}
		   
		   $calmoneyall = $price1 - $price2;
		   if($calmoneyall <= 0){
			  $calmoneyall = 0; 
		   }
		    
		   $loopdataall += $calmoneyall;
		   
		   
	?>
	 <tr>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php   echo $loaddate_show2;  ?>    </font></div></td>  
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$price1); ?>  </font></div></td>
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$price2); ?>    </font></div></td> 
	 <td width="2%" bgcolor="#FFF" height="35px;" style="border: 1px solid #DCDCDC;  "   ><div align="center"> 
	 <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$loopdataall); ?>    </font></div></td>  			
        
	 </tr> 
	 <?php } ?>

	 
	 </tbody> 
	 </table>  
	 </div>  
	 </div> 

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