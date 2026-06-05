<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
 
	
		 
	$name = ""; 
	$codeno = ""; 
	$appleid = ""; 
	$storerage = ""; 
	$color = ""; 
	$password = ""; 
	$typedata_2 = ""; 
	$note = ""; 
	$price1 = ""; 
	$price2 = ""; 
	$totalprice = ""; 


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

		 
		 
	$searchname3 = "";
	if(empty($_GET["searchname3"])){
		
	}else{
		$searchname3 = $_GET["searchname3"];
	}
		 
		 
	$typedata = "";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}

	$major2 = "";
	if(empty($_GET["major2"])){
		
	}else{
		$major2 = $_GET["major2"];
	}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลส่งเครม   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > ออกบิล/แก้ไขบิลส่งเครม  </font>   
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
                     <font size="4px" color="#000000">  ออกบิล/แก้ไขบิลส่งเครม   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                      
                      
						  
                          <div class=" col-lg-5 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr>
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="cleam_backnew_one.php">   
					    		<div  >   
					    		<img src="images/add.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  รายการส่งเครมแต่ละร้าน   </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="cleam_backnew_one_edit.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add2.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  ออกบิล/แก้ไขบิลส่งเครม    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    	</tr>
					    </table>
					      </div>
                      
                          <div class="col-lg-12">
                      		<hr>
                      	  </div>
                      	     
                      	     
                      	      <form action="cleam_backnew_one_edit_bill.php" method="get" >
                  	      	  <input type="hidden" id="major2" name="major2" value="<?php echo $major2; ?>" >	
                   	          
                    	        <div   class="col-lg-6"  align="left"  > 
								<table width="100%">
									<tr> 
										<td width="40%"> 
										<font color="black" size="3px" class="serif">  ค้นหาหมายเลขเครื่อง    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit">
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;   </td>  
										<td width="40%">&nbsp;  </td>  
									</tr>
								</table>  
							 	</div> 
                   	          
							   </form>
                            
                            
                             
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
							$addcode4 = "";


							$addcode3 = " and a.major2 = '".$major2."'  ";

							/*		 
							 SELECT a.*  FROM list_chk_cleam_back  a  
							Inner Join product b  On a.pkselect = b.pk
							where  a.bill_no = '".$bill_no."'   
							order by a.pk asc
							*/	 
													 
							$pkselect = "";
							if(empty($_GET["searchname"])){

							}else{
								$searchname = $_GET["searchname"];

								$pkselect = " and b.codeno like '%".$searchname."%'" ; 

							} 					 

							$sql2 = " SELECT a.* FROM list_chk_cleam_back a
							Inner Join product b  On a.pkselect = b.pk
							where a.bill_no != ''  
							".$addcode.$addcode2.$addcode3.$addcode4.$pkselect."  
							Group By a.bill_no 
							order by a.pk asc    "; 

							/// echo $sql2;
							$query2 = mysqli_query($objCon, $sql2);
							$total_record = mysqli_num_rows($query2);
							$total_page = ceil($total_record / $perpage);
							 ?>  
							<?php if (ceil($total_record / $perpage) > 0): ?>
								<ul class="pagination">
							<?php if ($page > 1): ?>
							<li class="prev"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">Prev</a></li>
							<?php endif; ?>

							<?php if ($page > 3): ?>
							<li class="start"><a href="cleam_backnew_one_edit_bill.php?page2=1&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">1</a></li>
							<li class="dots">...</li>
							<?php endif; ?>

							<?php if ($page-2 > 0): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
							<?php if ($page-1 > 0): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page-1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

							<li class="currentpage"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page ?></a></li>

							<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
							<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+2 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)-2): ?>
							<li class="dots">...</li>
							<li class="end"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
							<?php endif; ?>

							<?php if ($page < ceil($total_record / $perpage)): ?>
							<li class="next"><a href="cleam_backnew_one_edit_bill.php?page2=<?php echo $page+1 ?>&searchnamer=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchname3=<?php echo $searchname3; ?>&typedata=<?php echo $typedata; ?>&major2=<?php echo $major2; ?>">Next</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>

						</div>
                          
                         
                         
				  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
					<div class="table-responsive"  >
					<table id="key_product"  class=" table    tablemobile  " border="0" style=" width: 1600px;"    > 
					  <thead> 
						 <tr>
							<th width="4%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px;  "  ><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เลขที่บิลรายการเครม    </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   เลขที่รับคืนสินค้า  </font></div></th>  
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วัน เดือน ปี  </font></div></th>       
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    รายการ  </font></div></th>   
							<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   จำนวนส่งเครม     </font></div></th> 
							<th width="5%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  จำนวนรับคืนกลับสต๊อก   </font></div></th>
							<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คงเหลือ   </font></div></th>    
							<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข     </font></div></th>    
							<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบเครม     </font></div></th>    
							<th width="2%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พิมพ์ใบรับคืน     </font></div></th>     
							<th width="3%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
							<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> พนักงานทำรายการ   </font></div></th>  
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

							$sql2 = "  SELECT a.* FROM list_chk_cleam_back a
							Inner Join product b  On a.pkselect = b.pk
							where a.bill_no != ''  
							".$addcode.$addcode2.$addcode3.$addcode4.$pkselect."  
							Group By a.bill_no 
							order by a.pk asc    limit {$start} , {$perpage}   ";  
	  
						$query2 = mysqli_query($con,$sql2); 
						while($objResult2 = mysqli_fetch_array($query2))
						{      
								if($bg == "#FFF"){ 
									$bg = "#F8FAFD"; 
								}else{  
									$bg = "#FFF"; 
								} 
								$bill_no = $objResult2["bill_no"];

								$name_typedata1 = "";
								$name_typedata2 = "";
								$name_typedata3 = "";
								$sql = "SELECT * FROM store where pk = '".$objResult2["major2"]."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$name_typedata1 =  $objResult["name"];
									$name_typedata2 =  $objResult["address"];
									$name_typedata3 =  $objResult["telphone"];
								}


								$totalbill1 = 0;
								$totalbill2 = 0;
								$totalbill3 = 0;
								$sql = "SELECT * FROM list_chk_cleam_back where bill_no = '".$objResult2["bill_no"]."'  and bill_no != '' 
								Group By bill_no
								order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$totalbill1++;
								}
								$sql = "SELECT * FROM list_chk_cleam_back where bill_no = '".$objResult2["bill_no"]."'   and bill_no != '' 
								order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$totalbill2++;	
									if($objResult["status"] == "เครมสินค้า/รอสินค้า"){

									}else{
									$totalbill3++;	
									} 
								} 

						?>
						<tr style="background-color: <?php echo $bg ?>; "> 


						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["bill_no"]; ?> </font></div></td> 


						<td style=" border-left: 0px solid #F2F2F2; "><div align="center">
						<font size="3px" color="Black" style=" font-size: 13px; " > 

						<?php
						$check = $totalbill2-$totalbill3;
						if($check <= 0){
							$custbill = explode("SGC", $objResult2["bill_no"]);
							echo "SGRT".$custbill[1];
						} 
						?> 
						</font></div></td> 



						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>    </font></div></td>


						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

						<a  href="print_cleam_billnew.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " target="_blank" >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก </font></a>

						</font></div></td> 



						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalbill2); ?> </font></div></td> 
						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalbill3); ?> </font></div></td> 
						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo number_format(0+$totalbill2-$totalbill3); ?> </font></div></td> 



						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

						<?php
						if($_SESSION["Status"] == "A"){	
						?>
						<a href="cleam_backnew_one_edit_bill2.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  คลิก </font></a>

					
						<?php }else{ ?>
									
						<a href="cleam_backnew_one_edit_bill2.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; display: none; " id="nextpage<?php echo $objResult2["pk"]; ?>" >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข </font></a>



						<a onclick="SebndOTPget<?php echo $objResult2["pk"]; ?>()"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369; cursor: pointer; " >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  แก้ไข   </font></a>


						<input type="hidden" id="pageget" name="pageget" value="แก้ไขบิลส่งเครม">

						 <script>
							function SebndOTPget<?php echo $objResult2["pk"]; ?>( ) {

								$(document).ready(function(){ 
								$('#myModal<?php echo $objResult2["pk"]; ?>').modal('show'); //myModal is ID of div
								});   


							}
							function SendgetKey<?php echo $objResult2["pk"]; ?>( ) {
								var pageget = document.getElementById("pageget").value;
								var note = document.getElementById("note<?php echo $objResult2["pk"]; ?>").value;

								var jsonString = ""; 
								$.ajax({
								type: "POST",
								url: "send_get_page_otp.php?pageget="+pageget+"&note="+note,
								contentType: 'application/json',
								data: jsonString,
								success: function(result) {
								//alert(result);


								}
								});	


								document.getElementById("showtxt1<?php echo $objResult2["pk"]; ?>").style.display = "none"; 
								document.getElementById("showtxt2<?php echo $objResult2["pk"]; ?>").style.display = "block"; 


								//////alert("loadchat_total.php?customer="+customerpk);
								$.ajax({
								type: "GET",
								url: "load_key.php?pageget="+pageget+"&note="+note,
								success: function(result) {
									 /// alert(result); 

								  document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value = result.trim(); 

								}
								});


							}


							function CheckKey<?php echo $objResult2["pk"]; ?>( ) {
								var pageget = document.getElementById("pageget").value;
								var checkkey1 = document.getElementById("keycheck<?php echo $objResult2["pk"]; ?>").value;
								var checkkey2 = document.getElementById("getkey<?php echo $objResult2["pk"]; ?>").value;


								if(checkkey1 == ""){
									alert(" กรุณาทำรายการข้อใหม่ ");
								}else if(checkkey1 != checkkey2){
									alert(" รหัสไม่ตรงกรุณากรอกรหัสใหม่ ");
								}else if(checkkey1 == checkkey2){
									document.getElementById("nextpage<?php echo $objResult2["pk"]; ?>").click();
								}

							}


						</script>



									<!-- modal small -->
							<div class="modal fade" id="myModal<?php echo $objResult2["pk"]; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> 

								<font style="font-size: 15px;">
									กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข  
								</font>


								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
									 <div class="col-lg-12" align="left">  

									 <font style="font-size: 14px; " color="#FF0000">

										กรุณาทำการกรอกรหัสการอนุมัติการแก้ไข

									 </font>

									 </div> 

									 <div class="col-lg-12" style="margin-top: 15px;" id="showtxt1<?php echo $objResult2["pk"]; ?>">   

									 <div class="col-md-12" style=" margin-top: 15px; ">
									 <font style="font-size: 17px; " color="#FF0000">

										กรุณาแจ้ง เหตุผลการแก้ไข 

									 </font>

										<input class="form-control"   type="text" style=" border-radius: 5px;   " id="note<?php echo $objResult2["pk"]; ?>" name="note<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 

									 </div>



									 <div class="col-md-12" style=" margin-top: 15px; ">

									 <a onClick="SendgetKey<?php echo $objResult2["pk"]; ?>()" >
									 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ส่งคำขอ   </font> </button>  </a>


									 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
									 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>

									 </div>


									 </div>



									 <div class="col-lg-12" style="margin-top: 15px; display: none; " id="showtxt2<?php echo $objResult2["pk"]; ?>">   

									 <input type="hidden" id="keycheck<?php echo $objResult2["pk"]; ?>" name="keycheck<?php echo $objResult2["pk"]; ?>" >


									 <div class="col-md-12" style=" margin-top: 15px; ">
									 <font style="font-size: 17px; " color="#FF0000">

										กรอกรหัส

									 </font>

										<input class="form-control"   type="text" style=" border-radius: 5px;   " id="getkey<?php echo $objResult2["pk"]; ?>" name="getkey<?php echo $objResult2["pk"]; ?>"      autocomplete="off"  > 

									 </div>


									 <div class="col-md-12" style=" margin-top: 15px; ">

									 <a onClick="CheckKey<?php echo $objResult2["pk"]; ?>()" >
									 <button type="button"   class="btn btn-sm btn-primary" style="background-color: #D7F1E4; border-radius: 5px; width: 200px;  height: 40px; border-color: #D7F1E4;  "      > <font color="#000" size="2px" class="serif1" style=" font-size: 13px; " > ยืนยันรายการ   </font> </button>  </a>


									 <a onClick="NoSendgetKey<?php echo $objResult2["pk"]; ?>()"        >
									 <button type="button" class="btn btn-sm  btn-primary" style="background-color: #FFE0E0; border-radius: 5px;  width: 200px;  height: 40px; border-color: #FFE0E0;    "     > <font color="#000" size="2px" class="serif1"  style=" font-size: 13px; ">  ยกเลิก  </font> </button> </a>

									 </div>


									 </div>





								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small --> 


						<?php } ?>
									
									
						</font></div></td> 

						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

						<a href="print_cleam_billnew_old2.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " target="_blank" >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  พิมพ์ </font></a>

						</font></div></td> 
						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

						<a href="print_cleam_billnew2.php?major2=<?php echo $objResult2["major2"];?>&bill_no=<?php echo $objResult2["bill_no"]; ?>" class="btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; " target="_blank" >
						<font size="3px" color="#F77369" style=" font-size: 13px; " >  พิมพ์ </font></a>

						</font></div></td> 

						<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
						<a data-toggle="modal" data-target="#smallmodal<?php echo $i; ?>"  class=" btn btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   margin-top: -5px; cursor: pointer; " > 
						<font size="3px" color="#F77369" style=" font-size: 13px; " > 
						ประวัติ   
						</font>  
						</a> 

						<!-- modal small -->
						<div class="modal fade" id="smallmodal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md" role="document">
							<div class="modal-content">
							<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel"> ดูข้อมูล </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
							<div class="modal-body">
								<div class="col-lg-12" align="left"   >   
								<font size="3px" color="black" style="font-size: 14px;">   
								<?php
								$ic = 1;
								$sql_v = "SELECT * FROM update_real_time where bill_no = '".$objResult2["bill_no"]."'   
								order by pk desc  ";   
								$query_v = mysqli_query($objCon,$sql_v);
								while($objResult_v = mysqli_fetch_array($query_v))
								{
										$memberlast1 = "";
										$memberlast2 = "";
										$memberlast3 = "";

										$sql_getstaff = "SELECT * FROM member_all Where  pk = '". $objResult_v["create_by"] ."' ";  
										$query_getstaff = mysqli_query($objCon,$sql_getstaff); 
										while($objResult_getstaff = mysqli_fetch_array($query_getstaff))
										{
											$memberlast1 = $objResult_getstaff["name"];  
										} 

										$memberlast2 = $objResult_v["create_date2"];
										$memberlast3 = $objResult_v["create_time"];

										echo $ic.". ".$memberlast1 . " " . $objResult_v["status"] .
											" <br> <font color = 'red' > 
											ทำรายการ : ". DateThai($memberlast2)." ".Datethai2($memberlast2)."   เวลา ".$memberlast3  . " </font>   <Br>
											-------------------------- <Br> ";

									$ic++;
								} 
								?> 
								</font> 
								</div> 
							</div> 
							</div>
						</div>
						</div>
						<!-- end modal small --> 


						</font></div></td> 



						</tr>  
						<?php $i++;  } ?>
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
		  <bR><bR><bR><br> <bR><bR><bR><br> 
		  <bR><bR><bR><br> <bR><bR><bR><br> 
		  <bR><bR><bR><br> <bR><bR><bR><br>  
		  <bR><bR>   
		 </div>

                    
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
</script>
<?php
include('footer2.php');
?>