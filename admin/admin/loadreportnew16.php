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

						
	$typesearch = "";
	if(empty($_GET["typesearch"])){
		
	}else{
		$typesearch = $_GET["typesearch"];
	}  

?>
     
    <div class="col-md-12" style="margin-top: 15px;  " > 
	<style>
		 .pagination {
			list-style-type: none; 
			display: inline-flex;
			justify-content: space-between;
			box-sizing: border-box;
		}
		.pagination li {
			box-sizing: border-box;
			padding-right: 10px;
		}
		.pagination li a {
			box-sizing: border-box;
			background-color: #e2e6e6;
			padding: 8px;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
			color: #616872;
			border-radius: 4px;
		}
		.pagination li a:hover {
			background-color: #d4dada;
		}
		.pagination .next a, .pagination .prev a {
			text-transform: uppercase;
			font-size: 12px;
		}
		.pagination .currentpage a {
			background-color: #518acb;
			color: #fff;
		}
		.pagination .currentpage a:hover {
			background-color: #518acb;
		}
	</style> 

	<?php											
		$perpage = 20;
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
		 
		 
		
	$contactstart   = date("Y-m-d", strtotime($daystart_load)); 
	$checkend   = date("Y-m-d", strtotime($daystart_load2)); 

	$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

 
	if(empty($_GET["searchname3"])){

	}else if(($_GET["searchname3"] == "กำลังผ่อน")){
		$addcode2 = " and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "NPL")){
		$addcode2 = " and  a.onoff = 'NPL' and  a.closebill = 'เป็นหนี้' ";
	}else if(($_GET["searchname3"] == "หมดหนี้")){
		$addcode2 = " and  a.closebill = 'หมดหนี้' ";
		  
	} 

	$sql2 = " SELECT a.*, b.name, c.codeno FROM list_order  a
	Inner Join customer b On   a.customer = b.pk
	Inner Join product c On   c.pk = a.menu_id
	where a.bill_no != ''  and a.contactstatus = 'อนุมัติแล้ว' 
	".$addcode.$addcode2.$addcode3."  
	order by a.pk asc    "; 
	$query2 = mysqli_query($objCon, $sql2);
		 
	 ///   echo $sql2;
	$total_record = mysqli_num_rows($query2);
	$total_page = ceil($total_record / $perpage);
	 ?>  
	<?php if (ceil($total_record / $perpage) > 0): ?>
		<ul class="pagination">
			<?php if ($page > 1): ?>
			<li class="prev"><a href="reportnew16.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Prev</a></li>
			<?php endif; ?>

			<?php if ($page > 3): ?>
			<li class="start"><a href="reportnew16.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">1</a></li>
			<li class="dots">...</li>
			<?php endif; ?>

			<?php if ($page-2 > 0): ?><li class="page"><a href="reportnew16.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
			<?php if ($page-1 > 0): ?><li class="page"><a href="reportnew16.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

			<li class="currentpage"><a href="reportnew16.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page ?></a></li>

			<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew16.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
			<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="reportnew16.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)-2): ?>
			<li class="dots">...</li>
			<li class="end"><a href="reportnew16.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
			<?php endif; ?>

			<?php if ($page < ceil($total_record / $perpage)): ?>
			<li class="next"><a href="reportnew16.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>">Next</a></li>
			<?php endif; ?>
		</ul> 
	<?php endif; ?>

	</div>
					
		<?php
 
		?>
					
        <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="key_product"  class=" table  table-bordered   tablemobile  " border="1" style="  "    >
		 <thead>  
		 <tr>
			<th width="2%" valign="" rowspan="2" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px"  class="serif2" color="#000" style=" font-size: 15px; ">  รหัสลูกค้า    </font></div></th>    
			  
			<th width="3%" rowspan="2" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อเฟสบุ๊ค  </font></div></th>  
			     
			<th width="3%" colspan="4" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ยอดปล่อยสินเชื่อ  </font></div></th>  
			
			<th width="3%"  colspan="4" bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชำระแล้ว </font></div></th> 
		   
		           
			<th width="3%"   colspan="4" bgcolor="#FFF" ><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ค้างชำระ </font></div></th>         
		 </tr> 
		 <tr>
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
		             
		             
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
		             
		             
		             
			<th width="2%" bgcolor="#FFF" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  งวด    </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เงินต้น  </font></div></th>      
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ภาษี  </font></div></th>        
			<th width="3%" bgcolor="#FFF" ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> รวม  </font></div></th> 
			             
		 </tr>
	    </thead>    
		<tbody> 
		<?php 
		$i = 1;
		$bg = "#F8FAFD"; 

		if (empty($_GET['page2'])) { 
			$i = 1;
		}else if (($_GET['page2'] == 1)) { 
			$i = 1;
		}else{

			$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
		}

		$totaldata1_no = 0;
		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0;
		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   c.pk = a.menu_id
		where a.bill_no != ''  
		".$addcode.$addcode2.$addcode3."  
		order by a.pk asc  limit {$start} , {$perpage}   ";  
			
			

		$sql2 = " SELECT a.*, b.name, c.codeno, b.facebook FROM list_order  a
		Inner Join customer b On   a.customer = b.pk
		Inner Join product c On   c.pk = a.menu_id
		where a.bill_no != ''   and a.contactstatus = 'อนุมัติแล้ว' 
		".$addcode.$addcode2.$addcode3."  
		order by a.pk asc    limit {$start} , {$perpage}   "; 
			 
		///	echo $sql2;
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			$money = $objResult2["money"]; 
			$daytotal = $objResult2["daytotal"]; 
			$dayprice = $objResult2["dayprice"];  
			$c_status = $objResult2["c_status"];  
			$g_create_date2 = $objResult2["create_date2"];  
			$startdate = $objResult2["startdate"]; 
			$endate = $objResult2["endate"];   


			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$name_create =  $objResult["name"];
			}
 

			$allmoney = 0;
			$discoount = 0;
			$discoountpaymentother = 0;
			
			$check_round_payment = 0;
			$check_round_dis = $daytotal;
			
			$allpasy = 0;
			$allpasy2 = 0;
			
			
			$loadstart1 = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
			$loadstart2 = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
			$code_check2 = "  and create_date2 BETWEEN '".$loadstart1."' AND '".$loadstart2."'  "; 
			$sql_c = "SELECT * FROM history_payment Where  
			bill_no = '". $objResult2["bill_no"]."' 
			and income != '' 
			and income != '0'   
			".$code_check2." "; 
			
			///  echo $sql_c."<br>";
			$query_c = mysqli_query($objCon,$sql_c); 
			while($objResult_c = mysqli_fetch_array($query_c))
			{  
				if(!empty($objResult_c["income"])){
					
					
					
				$discountshow = 0;
				$getdata2 = 0;
				if(!empty($objResult_c["discount"])){
					$discountshow = $objResult_c["discount"];
				}
				if(!empty($objResult_c["income"])){
					$getdata2 =  $objResult_c["income"];	
				} 
				
				$newcalculator = $getdata2 - $discountshow;
			 	$vat = ($newcalculator * 100) / 107;
					
					
					
				$allpasy2 += $vat; 
				$allpasy +=  $newcalculator - ($vat);
				 
					
					
				$discoount += $objResult_c["income"]; 
					
					if($check_round_payment == $objResult_c["orderdata"]){
						
					}else{
						$check_round_payment = $objResult_c["orderdata"];
						$check_round_dis++;
					}
					 
				}
				 
				if(!empty($objResult_c["paymentother"])){
				$discoountpaymentother += $objResult_c["paymentother"]; 
				}  
			}	

										 
 
			$txtshow = " เป็นหนี้ ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
			if($objResult2["closebill"] == "เป็นหนี้"){ 
				
			$txtshow = " กำลังผ่อน ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			if($objResult2["onoff"] == "NPL"){ 
				
			$txtshow = " กำลังผ่อน NPL ";
			$hdd = " "; 
			$bgbtn = " #D7F1E4  ";
				
			}

			}else if($objResult2["closebill"] == "หมดหนี้"){
			$txtshow = " หมดหนี้ ";
			$hdd = " display: none;  "; 
			$bgbtn = " #FFE0E0  ";

			}
			 
			$allmoney = ($daytotal*$dayprice)-$discoount;	
			
			$disround = $daytotal - $check_round_payment;
			
			if($disround <= 0){
				$disround = 0;
			}
			
			
			$moneydata = $objResult2["moneydata"]; 
			$moneydown = $objResult2["moneydown"];   
			
			$vat = (($moneydata-$moneydown) * 100 )  / 107;
			$vat2 = ($moneydata-$moneydown) - $vat;
			
			if($vat2 <= 0){
				$vat2 = 0;
			} 
			
			
			
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?>  </font></div></td>
 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["facebook"]; ?>  </font></div></td>
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$daytotal); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$money); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$vat2); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$money); ?>  </font></div></td>
	 
	  
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$check_round_payment); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy2); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allpasy); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$discoount); ?>  </font></div></td>
    
     
	 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$disround); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allmoney); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0); ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$allmoney); ?>  </font></div></td>
     
		</tr> 
		<?php $i++; $totaldata1_no++; $totaldata1+= $money; $totaldata2 += $discoount; $totaldata3 += $allmoney; } ?>
		</tbody>

		<tfooter> 
		 <tr>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม <?php echo number_format(0+$totaldata1_no); ?> &nbsp;  </font></div></th>     
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata1); ?>  &nbsp;  </font></div></th>   
			
			 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata2); ?>  &nbsp;  </font></div></th> 
			
			 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"    ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;"   ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata3); ?>  &nbsp;  </font></div></th> 
			
			   
		 </tr>
		  
	    </tfooter>
	    
	    
	    
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