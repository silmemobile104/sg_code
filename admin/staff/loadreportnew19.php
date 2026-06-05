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


?>
     
    <div class="col-md-12" style="margin-top: 15px; display: none;  " > 
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

	$addcode = "  and  create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 

  
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

	</div>
					
		<?php
 
		?>
					
        <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
		<div class="table-responsive"  >
		<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px; "    >
		 <thead>  
		 <tr>
			<th width="4%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  วันที่    </font></div></th>  
			<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  เลขที่เอกสาร    </font></div></th>      
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> เลขประจำเครื่อง  </font></div></th>       
			<th width="6%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ชื่อผู้ซื้อ  </font></div></th>  
			<th width="6%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รายการสินค้า </font></div></th>     
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ยอดเงิน </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ภาษี </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  ชำระจริง </font></div></th>   
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
		   <font size="3px" class="serif2" color="#000" style=" font-size: 15px; "> ต้นทุน </font></div></th>        
			<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">   กำไร/ขาดทุน   </font></div></th>  
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

		$totaldata1 = 0;
		$totaldata2 = 0;
		$totaldata3 = 0; 
		$totaldata4 = 0; 
		$totaldata5 = 0; 
		$sql2 = " SELECT * FROM list_order_store  where bill_no != ''  ".$addcode.$addcode2.$addcode3."   order by  pk asc   "; 
			 
		$query2 = mysqli_query($con,$sql2); 
		while($objResult2 = mysqli_fetch_array($query2))
		{      
			if($bg == "#FFF"){ 
				$bg = "#F8FAFD"; 
			}else{  
				$bg = "#FFF"; 
			} 

			

			$totalprice1 = $objResult2["money"];  
			$customer = $objResult2["customer"];  

			$name_create = "-"; 
			$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
					$name_create =  $objResult["name"];
			}

			$price1 = 0;
			$price2 = 0;
			$name_create2 = "-"; 
			$name_create3 = "-"; 
			$name_create4 = "-"; 
			$name_create5 = "-"; 
			$name_create6 = "-"; 
			$name_major = "-"; 
			$sql = "SELECT * FROM product where pk = '".$objResult2["menu_id"]."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{  
				
				$price1 = $objResult["price1"];
				$price2 = $objResult["price2"];
				
				$sql_c = "SELECT * FROM store where pk = '".$objResult["typedata_2"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
						$name_create2 =  $objResult_c["name"];
				}
				$sql_c = "SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."'   order by pk asc  "; 
				$query_c = mysqli_query($objCon,$sql_c);
				while($objResult_c = mysqli_fetch_array($query_c))
				{ 
						$name_create3 =  $objResult_c["name"];
				} 
				$name_create5  =  $objResult["codeno"];; 
				$name_create6  =  $objResult["name"];; 
			}

			$sql_c = "SELECT * FROM major where pk = '".$objResult2["major"]."'   order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$name_major =  $objResult_c["name"];
			}	
			
			$calcuator = $objResult2["money"] - $price1;
			if($calcuator <= 0){
				$calcuator = 0;
			}
		?>
		<tr style="background-color: <?php echo $bg; ?>; ">  

		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div></td> 

 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?>  </font></div></td>
	   
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create5; ?>  </font></div></td>
		
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $customer; ?>  </font></div></td>
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create6; ?>  </font></div></td>
		 
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>  </font></div></td> 
     
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["pasy"]; ?>  </font></div></td> 
							
							
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$objResult2["money"]); ?>  </font></div></td> 
							
							
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$price1); ?>  </font></div></td> 
							
							
		<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$calcuator); ?>  </font></div></td> 
							
		</tr> 
		<?php $i++; $totaldata1+= $objResult2["money"]; $totaldata2+= 0;  $totaldata3++; $totaldata4+=$price1; $totaldata5+=$calcuator; 
		
		
		} ?>
		</tbody>

		<tfooter> 
		 <tr>
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  รวม   &nbsp;  </font></div></th>   
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th>  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata3); ?>  &nbsp;  </font></div></th>      
			<th width="2%" bgcolor="#FFF" colspan="4" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="right"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">    &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata1); ?>  &nbsp;  </font></div></th>   
			  
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata4); ?>  &nbsp;  </font></div></th> 
			<th width="2%" bgcolor="#FFF" colspan="1" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
			<font size="3px" class="serif2" color="#000" style=" font-size: 15px; ">  <?php echo number_format(0+$totaldata5); ?>  &nbsp;  </font></div></th> 
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