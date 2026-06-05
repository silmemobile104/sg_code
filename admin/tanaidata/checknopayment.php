<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 
	$bill_no = "";
	if(empty($_GET["bill_no"])){
		
	}else{
		$bill_no = $_GET["bill_no"];
	}  
	 
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}  
	 


	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	 
?> 
        
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        											
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  รายได้จากค่าบริการทียังไม่ได้ชำระ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > รายได้จากค่าบริการทียังไม่ได้ชำระ   </font>   
                     <div > &nbsp; </div>
             </div> 
             </font> 
             </div>
             
            <div class="row"  >
              <div class=" col-lg-12 "  style="margin-top: -15px;"  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  รายได้จากค่าบริการทียังไม่ได้ชำระ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                         
                           
                           
                           
                           
                        <div class="col-md-12" style="margin-top: 15px;" > 
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
					if(empty($_GET["searchname"])){

					}else{
						$addcode = " and ( b.name like '%".$searchname."%' or a.bill_no like '%".$searchname."%'  )  ";
					}
					$addcode2 = "";  

 
						$addcode2 = " and  a.tanai_payment != 'ชำระแล้ว'  ";  	 
					 
					$addcode = "";
					if(empty($_GET["bill_no"])){

					}else{
						$addcode = " and  a.bill_no like '%".$bill_no."%'   ";
					}

					$sql2 = " SELECT a.*, b.name FROM list_order a 
					Inner Join customer b On a.customer = b.pk
					where a.bill_no != '' and a.tanaidata = '".$_SESSION["UserID"]."'  
					".$addcode.$addcode2."  
					order by a.pk asc    "; 

					/////echo $sql2;
					$query2 = mysqli_query($objCon, $sql2);
					$total_record = mysqli_num_rows($query2);
					$total_page = ceil($total_record / $perpage);
					 ?>  
					<?php if (ceil($total_record / $perpage) > 0): ?>
						 <ul class="pagination">
						<?php if ($page > 1): ?>
						<li class="prev"><a href="checknopayment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">Prev</a></li>
						<?php endif; ?>

						<?php if ($page > 3): ?>
						<li class="start"><a href="checknopayment.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">1</a></li>
						<li class="dots">...</li>
						<?php endif; ?>

						<?php if ($page-2 > 0): ?><li class="page"><a href="checknopayment.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
						<?php if ($page-1 > 0): ?><li class="page"><a href="checknopayment.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

						<li class="currentpage"><a href="checknopayment.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page ?></a></li>

						<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checknopayment.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
						<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="checknopayment.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)-2): ?>
						<li class="dots">...</li>
						<li class="end"><a href="checknopayment.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
						<?php endif; ?>

						<?php if ($page < ceil($total_record / $perpage)): ?>
						<li class="next"><a href="checknopayment.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&bill_no=<?php echo $bill_no; ?>">Next</a></li>
						<?php endif; ?>
					</ul>
					<?php endif; ?>

					</div>    
                           
                           
                           
				   <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					<div class="table-responsive"  >
					<table id="key_product"  class=" tables    tablemobile  " border="0" style=" width: 100%;  "    >
					   
					  
					  <tbody> 
					<?php 
						$bg = "#F8FAFD"; 
						$i = 1;
						$total = 0;
						$totalprice1 = 0;
						$totalprice2 = 0;
						$totalprice3 = 0;
						$totalprice4 = 0; 

						if (empty($_GET['page2'])) { 
							$i = 1;
						}else if (($_GET['page2'] == 1)) { 
							$i = 1;
						}else{

							$i = ( ($_GET["page2"]-1) * 25 ) + 1; 
						}

						$sql2 = "  SELECT a.*, b.name FROM list_order a 
						Inner Join customer b On a.customer = b.pk
						where a.bill_no != '' and a.tanaidata = '".$_SESSION["UserID"]."'  
						".$addcode.$addcode2."  
						order by a.pk asc  limit {$start} , {$perpage}   ";   
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{       

						if($bg == "#FFF"){ 
							$bg = "#F8FAFD"; 
						}else{  
							$bg = "#FFF"; 
						} 

						$bill_no = $objResult2["bill_no"]; 
						$codecustomer = $objResult2["codecustomer"]; 
						$create_date = $objResult2["create_date"]; 
						$create_time = $objResult2["create_time"]; 
						$name_major = "-"; 
						$name_create = ""; 	

						$sql_c = " SELECT * FROM member_all  where pk = '".$objResult2["tanaidata"]."'   order by pk asc     ";   
						$query_c = mysqli_query($con,$sql_c); 
						while($objResult_c = mysqli_fetch_array($query_c))
						{       
							$name_create = $objResult_c["name"];
						}  
 
							$bill_no = $objResult2["bill_no"]; 
							$room = $objResult2["room"]; 
							$menu_id = $objResult2["menu_id"]; 
							$money = $objResult2["money"]; 
							$daytotal = $objResult2["daytotal"]; 
							$dayprice = $objResult2["dayprice"];  
							$daytotal2 = $objResult2["daytotal2"];  
							$startdate = $objResult2["startdate"];  
							$endate = $objResult2["endate"];  
							$total = $objResult2["total"];  
							$codecustomer = $objResult2["codecustomer"];  
							$moneydown = $objResult2["moneydown"];  
							$moneydata = $objResult2["moneydata"];  
							$pasy = $objResult2["pasy"];  
							$cod = $objResult2["cod"];  
							$moneycontact = $objResult2["moneycontact"];  
							$percent = $objResult2["percent"];  
							$computer = $objResult2["computer"];  
							$computer2 = $objResult2["computer2"];  
							$priceorder = $objResult2["priceorder"];  
							$major = $objResult2["major"];  
							$customer = $objResult2["customer"];  
							$endold = $objResult2["endold"];  
							$dateold = $objResult2["dateold"];  
							$bank2 = $objResult2["bank"];  
							$pasycal = $objResult2["pasycal"];  
							$qrdata = $objResult2["qrdata"]; 
							$allday = $objResult2["allday"]; 
							$appleid = $objResult2["appleid"]; 
							$password = $objResult2["password"]; 
							$contactstatus = $objResult2["contactstatus"]; 


							$discoount = 0;
							$discoountpaymentother = 0;
							$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
							$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
							$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
							$sql_m = "SELECT * FROM history_payment Where  
							bill_no = '". $bill_no ."' 
							and income != '' 
							and income != '0'   
							".$code_check2." ";   
							$query_m = mysqli_query($objCon,$sql_m); 
							while($objResult_m = mysqli_fetch_array($query_m))
							{  
								if(!empty($objResult_m["income"])){
								$discoount += $objResult_m["income"]; 

								}
								if(!empty($objResult_m["paymentother"])){
								$discoountpaymentother += $objResult_m["paymentother"]; 
								}  
							}	

							$allmoney = ($dayprice*$daytotal)-$discoount;
							

							$chk_total = $objResult2["totalno_payment"];
							$tanai_status1 = $objResult2["tanai_status1"];
							$tanai_status2 = $objResult2["tanai_status2"];
							$tanai_status3 = $objResult2["tanai_status3"];
							$tanai_payment = $objResult2["tanai_payment"];
							
							$tanai_momey1 = $objResult2["tanai_momey1"];
							$tanai_momey2 = $objResult2["tanai_momey2"];

							$priceother = 0;
							$priceothershow = " ................ ";
							if(!empty($objResult2["priceother"])){
								$priceother = $objResult2["priceother"];
								$priceothershow = $objResult2["priceother"];
							}

							
							
							if($tanai_payment == "รอชำระ"){ 
									$txtshow = " รอชำระ ";
									$hdd =  " "; 
									$bgbtn = " #FF7403  "; 
							}else if($tanai_payment == "ชำระแล้ว"){
									$txtshow = " ชำระแล้ว ";
									$hdd = "  "; 
									$bgbtn = " #0B9444  "; 
							}else{
									$txtshow = " รอชำระ ";
									$hdd = "    "; 
									$bgbtn = " #DA0706  ";  
							}
					?>
					<tr style="background-color: <?php echo $bg ?>; "> 

					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $bill_no; ?> </font></div></td> 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $codecustomer; ?> </font></div></td> 
					
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo $objResult2["name"]; ?> </font></div></td> 
					
					 
				 
					 <td style=" border-left: 0px solid #F2F2F2; " height="55px"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " class="serif" > <?php echo number_format(0+$priceother); ?> </font></div></td> 
					 
					  
					   
					 <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; "  class="serif">

					 <a href="viewdatacontact.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"   > 
						<button type="button" class="btn btn-sm" style="background-color: #0199A7; border-radius: 5px;  border-color: #0199A7; margin-top: 5px; "  > <font color="#FFF" size="2px" class="serif1" style="  font-size: 13px; " >    คลิก   </font> </button>   
					 </a>

					 </font></div></td>  
						
							
					</tr>  
					<?php $i++; $totalprice1 += $priceother; } ?>
					</tbody>
					<thead> 
					 <tr>
						<th width="4%" colspan="3" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">       </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$totalprice1); ?>  </font></div></th>      
						<th width="4%" colspan="3" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">       </font></div></th>    
					 </tr>
					 <tr>
						<th width="4%" bgcolor="#FFF" height="45px;" style=" border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9; "  ><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่สัญญา    </font></div></th>    
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;  "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  รหัสลูกค้า  </font></div></th>       
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ชื่อลูกค้า     </font></div></th>      
						<th width="3%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ยอดเงิน     </font></div></th>      
						<th width="4%" bgcolor="#FFF" style="border-bottom: 1px solid #E0E3E9; border-top: 1px solid #E0E3E9;    "><div align="center"> 
						<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ดูข้อมูล   </font></div></th>     
					 </tr>
					</thead>  
					
					</table> 
					</div> 
					</div> 
                           
                           
                           
                   	  <?php } ?>
                   		     
					 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					  <bR><bR><bR><br> <bR><bR><bR><br>  
					  <bR><bR><bR><br> <bR><bR><bR><br> 
					  <bR><bR><bR><br> <bR><bR><bR><br> 
					  <bR><bR><bR><br> <bR><bR><bR><br> 
					  <bR><bR><bR><br> <bR><bR><bR><br> 
					  <bR><bR><bR><br> <bR><bR><bR><br> 
					  <bR><bR><bR><br> <bR><bR><bR><br>  
					  <bR><bR><bR><br> <bR><bR><bR><br>  
					  <bR><bR>   
					 </div>
 
                </div>
              </div>
            </div>
            
             
            
        </div>

<?php
include('footer2.php');
?>