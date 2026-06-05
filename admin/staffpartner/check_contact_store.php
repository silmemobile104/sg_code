<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


		 
	$name = "";
	$address = "";
	$telphone = "";
	$major = "";
	$username = "";
	$password = "";
	$line = "";
	$facebook = "";
	$data = "";
	$customer = "";
	$searchname = "";
	$producttype = "";
	$cod = "";
	$computer = "";
	$moneymonth = "";
	$moneycontact = "";
	$percent = "";
	$computer = "";
	$computer2 = "";
	$appleid = "";
	$bank2 = "";
	$dataicloud = "";


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


	 
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ตรวจสอบสถานะคำขอ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ตรวจสอบสถานะคำขอ   </font>   
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
                     <font size="4px" color="#000000">  ตรวจสอบสถานะคำขอ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                        
                    	     <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="20%"> 
										<font color="black" size="3px" class="serif">  ค้นหารายชื่อ/รหัสลูกค้า    </font>

										<form action="check_contact_store.php" method="get" >
										<input type="hidden" id="page" name="page" value="<?php echo $_GET["page"]; ?>">
										
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; " type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  
										</form> 
										</td>     
										<td width="1%">&nbsp;  
										
										</td> 
										<td width="20%">
										<a href="check_contact_store.php?page="> 
										 <button type="button" class="btn btn-primary" style="background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    แสดงทั้งหมด   </font> </button> 
										</a>  
										</td>  
									</tr>
								</table>  
								</div>
						   
                       		 <div class="col-lg-12"> &nbsp; </div>
                           
                           
                           
                           <div class="col-md-4" style="margin-top: 15px;" > 
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
									$addcode = " and  ( codecustomer like '%".$searchname."%' or data1 like '%".$searchname."%' )";
								}
								$addcode2 = ""; 
								if(empty($_GET["searchname2"])){

								}else{
									$addcode2 = " and major = '".$searchname2."'  ";
								} 

								$addcode3 = "";  

								$totalcal1= 0;
								$totalcal2= 0;
								$totalcal3 = 0;
								$totalcal4 = 0;
								$endback= 0;
								$total_record= 0;
															  
								$sql2 = " SELECT * FROM list_order_partner where bill_no != '' and create_by = '".$_SESSION["UserID"]."' ".$addcode.$addcode2.$addcode3." order by pk asc   ";    
								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{        
									$total_record++;
								}							  
															  
															  
								$total_page = ceil($total_record / $perpage);
								 ?>  
								<?php if (ceil($total_record / $perpage) > 0): ?>
									 <ul class="pagination">
									<?php if ($page > 1): ?>
									<li class="prev"><a href="check_contact_store.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=">Prev</a></li>
									<?php endif; ?>

									<?php if ($page > 3): ?>
									<li class="start"><a href="check_contact_store.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=">1</a></li>
									<li class="dots">...</li>
									<?php endif; ?>

									<?php if ($page-2 > 0): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page-2 ?></a></li><?php endif; ?>
									<?php if ($page-1 > 0): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page="><?php echo $page-1 ?></a></li><?php endif; ?>

									<li class="currentpage"><a href="check_contact_store.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page="><?php echo $page ?></a></li>

									<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=edit"><?php echo $page+1 ?></a></li><?php endif; ?>
									<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="check_contact_store.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)-2): ?>
									<li class="dots">...</li>
									<li class="end"><a href="check_contact_store.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page="><?php echo ceil($total_record / $perpage) ?></a></li>
									<?php endif; ?>

									<?php if ($page < ceil($total_record / $perpage)): ?>
									<li class="next"><a href="check_contact_store.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&page=">Next</a></li>
									<?php endif; ?>
								</ul>
								<?php endif; ?>

							</div>
                           
                           
                       		 <div class="col-lg-12"> &nbsp; </div>
                           
                           
                           
                           
                           <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0" style="width: 100%;"    >
							    <thead> 
								<tr>
								<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รหัสลูกค้า  </font></div></th>   
								<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ชื่อนามสกุล     </font></div></th> 
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> วันทำสัญญา   </font></div></th>    
								<th width="7%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าทำสัญญา     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ค่าคอม     </font></div></th>   
								<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  สถานะดำเนินการ     </font></div></th>   
								<th width="6%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์สัญญา     </font></div></th> 

								<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
								<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงานรับเคส   </font></div></th>  
							  </tr>
							  </thead>  
										 
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

							$sql2 = "  SELECT * FROM list_order_partner where bill_no != ''  and create_by = '".$_SESSION["UserID"]."'  ".$addcode.$addcode2.$addcode3." order by pk asc  limit {$start} , {$perpage}   ";   
							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{       
								
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								}
								
								$name_create = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
										$name_create =  $objResult["name"];
								}
								
								
								$name_create2 = "-"; 
								$sql = "SELECT * FROM member_all where pk = '".$objResult2["admin_apple"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
										$name_create2 =  $objResult["name"];
								}
								
								
 
								$cut = explode("/",$objResult2["savedate"]);
								$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
								$daystart = date("Y-m-d", strtotime($date_income));  
			
								
								
									
								$txtshow = "รอตรวจสอบ";
								$hdd = " display: none; "; 
								$bgbtn = " #FF8C00  ";
								if($objResult2["statusadmin"] == "รอตรวจสอบ"){ 

								}else if($objResult2["statusadmin"] == "อนุมัติ"){
								$txtshow = "อนุมัติ";
								$hdd = " display: block; "; 
								$bgbtn = " #006400  ";
								}else if($objResult2["statusadmin"] == "ยกเลิก"){
								$txtshow = "ยกเลิก";
								$hdd = " display: none; "; 
								$bgbtn = " #FF0000  ";

								}
									
								$major = $objResult2["major"];  
								$savedate = $objResult2["savedate"];  
								$typedatasave = $objResult2["typedatasave"];  
								$data1 = $objResult2["data1"];  
								$data2 = $objResult2["data2"];  
								$data3 = $objResult2["data3"];  
								$data4 = $objResult2["data4"];  
								$data5 = $objResult2["data5"];  
								$data6 = $objResult2["data6"];  
								$data7 = $objResult2["data7"];  
								$typedataproduct = $objResult2["typedataproduct"];  
								$typedataproduct2 = $objResult2["typedataproduct2"];  
								$typestore = $objResult2["typestore"];  
								$typecolor = $objResult2["typecolor"];  
								$dataimei = $objResult2["dataimei"];  
								$moneystartprice = $objResult2["moneystartprice"];  
								$moneyprice = $objResult2["moneyprice"];  
								$moneydown = $objResult2["moneydown"];  
								$cod = $objResult2["cod"];  
								$daypriceall3 = $objResult2["daypriceall3"];  
								$daytotal = $objResult2["daytotal"];  
								$daypriceshow1 = $objResult2["daypriceshow1"];  
								$moneymonthshow = $objResult2["moneymonthshow"];  
								$daypayment = $objResult2["daypayment"];  
								$dataicloud = $objResult2["dataicloud"];  
								$pasycal = $objResult2["pasycal"];  
								$bill_no = $objResult2["bill_no"];  
								$codecustomer = $objResult2["codecustomer"];  
								$admin1 = $objResult2["admin1"];  
								$admin2 = $objResult2["admin2"];  
								$admin3 = $objResult2["admin3"];  
								$admin4 = $objResult2["admin4"];  
								$admin5 = $objResult2["admin5"];  
								$admin6 = $objResult2["admin6"];  
								$admin7 = $objResult2["admin7"];  
								$create_by = $objResult2["create_by"];   
								$startdate = $objResult2["startdate"];   
								$enddate = $objResult2["enddate"];   
								
								
								$priceallstart = ($moneyprice - $moneydown) ;
								$priceall = ($moneyprice - $moneydown) - $moneydown  - $admin1;
								$priceall2 = $priceall * ( $admin2 / 100);
								
								$sumall = $priceall + $priceall2;
								
								$sumallpercent = $priceall2 * ( 0.03 );
								
								
                           ?>
                           <tr style="background-color: <?php echo $bg ?>; "> 
										
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 


							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["codecustomer"]; ?> </font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["data1"]; ?> </font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($daystart)." ".DateThai2($daystart); ?> </font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["moneystartprice"]; ?> </font></div></td>
                           
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $admin1; ?> </font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $priceall2; ?> </font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								 
								<div align="center"    >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: -5px;     "     >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdata<?php echo $objResult2["pk"]; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
								</font>
								</div>
                          
                          	</font></div></td>
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
								 
								<div align="center" style = "<?php echo $hdd; ?>"   >
								<font size="3px" color="Black" style=" font-size: 13px; " >  
								<a class="btn  btn-sm" style=" background-color: #87CEEB; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: -5px;     " target="_blank" href="print_partner.php?bill_no=<?php echo $objResult2["bill_no"]; ?>"     >
								<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  > พิมพ์ </font>   </a> 
								</font>
								</div>
                          
                          	</font></div></td>
                           
                           
							<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create2; ?> </font></div></td>
                           
                            
							</tr>
                           <?php  $i++; } ?>
                           </tbody>
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