<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 


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
	 

	$chk1 = "";
	$chk2 = "";
	$chk3 = "";
	$chk4 = "";
	$chk5 = "";
	$chk6 = "";
	$chk7 = "";
	$chk8 = "";
	$chk9 = "";
	$chk10 = "";
	$chk11 = "";
	$chk12 = "";
	$chk13 = "";
	$chk14 = "";
	$chk15 = "";
	$chk16 = "";
	$chk17 = "";
	$chk18 = "";
	$chk19 = "";
	$chk20 = "";
	$chk21 = "";
	$chk22 = "";
	$chk23 = "";
	$chk24 = "";
	$chk25 = "";
	$chk26 = "";
	$chk27 = "";
	$chk28 = "";
	$postion = "";
	$telphone = "";
	$telphone2 = "";
	$telphone3 = "";
	$name2 = "";
	$age = "";
	$work = "";
	$passport = "";
	$name = "";


?> 
        
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
                     	  
                     	  
                     	  
			<link href='calenthai/css/jquery-ui-1.8.10.custom.css' rel='stylesheet' type='text/css'/>

			<script type="text/javascript" src="calenthai/js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="calenthai/js/jquery.datepick.js"></script>

			<script type="text/javascript"> 
			$(document).ready(function() {
				var d = new Date();
				d.setDate(d.getDate());
				var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear()); 

				$(".current").datepicker({    
				changeMonth: true, 
				changeYear: true, 
				dateFormat: 'dd/mm/yy', 
				isBuddhist: false, 
				defaultDate: toDay, 
				dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
				yearRange: "-10:+10",
					  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
					  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
					  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
					});
			}); 
			</script>	
									
									
									
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  สร้างหมวดค่าใช้จ่าย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > สร้างหมวดค่าใช้จ่าย   </font>   
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
                     <font size="4px" color="#000000">  สร้างหมวดค่าใช้จ่าย   </font>   
                  </div> 
                  </font> 
                  </div>
                        
                         <div class="col-md-12">  <br> </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
                       
                          
                          <form role="form" name="frmMain" method="post" action="save_paymenttype.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
 
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> สร้างหมวดค่าใช้จ่าย </font>
								 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
							  </div> 

							</div>   
  
   
						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 100px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


						  <a href="paymenttype.php">

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 100px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

						  </a>

							  <!-- modal small -->
							<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาาร </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<div class="col-lg-12" align="center">

									<button type="submit" class="btn btn-primary" style="background-color: #3F3F3F; border-radius: 5px; width: 130px; height: 40px; border-color: #3F3F3F;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #3F3F3F;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  

						  </div>  
						  </div> 	   

						 </form>
                       
                          
                          
                           
                   	  <?php } ?>
                   		    
                   		  
                  		  	  
                   	    <?php 
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM paymenttype Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{     
							$name = $objResult["name"];   
						}  
						?> 
                  		  
                  		  <form role="form" name="frmMain" method="post" action="save_paymenttype_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 
                  		  
						    <input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
                           
						  <div class="col-md-3"  > 

							  <div class="form-group"> 
								 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> สร้างหมวดค่าใช้จ่าย </font>
								 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
							  </div> 

							</div>  
   
  
   						  <div class="col-md-12" >  
						  <div class="form-group">     

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #003F88; border-radius: 5px; width: 100px; height: 40px; border-color: #003F88; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 


						  <a href="paymenttype.php">

						  <button type="button" class="btn btn-sm btn-primary" style="background-color: #FFF; border-radius: 5px; width: 100px;  height: 40px; border-color: #FFF; border: 1px solid  #003F88;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 

						  </a>

							  <!-- modal small -->
							<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
							<div class="modal-dialog modal-md" role="document">
								<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="smallmodalLabel"> ยืนยันทำรายกาาร </h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								</div>
								<div class="modal-body">
								<div class="col-lg-12" align="center">

									<button type="submit" class="btn btn-primary" style="background-color: #3F3F3F; border-radius: 5px; width: 130px; height: 40px; border-color: #3F3F3F;  margin-top: 15px; " > <font color="#FFF" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 


									<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border: 1px solid  #3F3F3F;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 


								</div> 
								</div> 
								</div>
							</div>
							</div>
							<!-- end modal small -->  

						  </div>  
						  </div>
						    	   

						 </form>
                   	  
                   	  
                   	  
                   	  <?php } } ?>
                   	  
                   	  
                          
                  		  
                         <div class="col-md-12">  <hr> </div>
                         
                         
						<div   class="col-lg-4"  align="left"  > 
						<table width="100%">
							<tr> 
								<td width="40%"> 
								<font color="black" size="3px" class="serif">  ค้นหาหมวดค่าใช้จ่าย  </font>

								<form action="paymenttype.php" method="get" >
								<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
								<input class="form-control    "   type="search" style="background-color: #FFF;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"       autocomplete="off"  >

								<span class="input-group-append" style=" background-color: #FFF; height: 38px; border-radius: 10p">
								  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF; box-shadow: none; border-radius: 10px;  " type="submit">
										<img src="images/search.png" style="width: 15px; "> 
								  </button>
								</span>
								</div> 
								</form> 

								</td>      


							</tr>
						</table>  
						 </div>
                  		    
                  		    


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
							if(empty($_GET["searchname"])){

							}else{
								$addcode = " and  name like '%".$searchname."%' ";
							} 

						$sql2 = "  SELECT * FROM paymenttype where name != ''  ".$addcode." order by pk asc     "; 
						$query2 = mysqli_query($objCon, $sql2);
						$total_record = mysqli_num_rows($query2);
						$total_page = ceil($total_record / $perpage);
						 ?>  
						<?php if (ceil($total_record / $perpage) > 0): ?>
							<ul class="pagination">
								<?php if ($page > 1): ?>
								<li class="prev"><a href="paymenttype.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Prev</a></li>
								<?php endif; ?>

								<?php if ($page > 3): ?>
								<li class="start"><a href="paymenttype.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">1</a></li>
								<li class="dots">...</li>
								<?php endif; ?>

								<?php if ($page-2 > 0): ?><li class="page"><a href="paymenttype.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
								<?php if ($page-1 > 0): ?><li class="page"><a href="paymenttype.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

								<li class="currentpage"><a href="paymenttype.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page ?></a></li>

								<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttype.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
								<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttype.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)-2): ?>
								<li class="dots">...</li>
								<li class="end"><a href="paymenttype.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
								<?php endif; ?>

								<?php if ($page < ceil($total_record / $perpage)): ?>
								<li class="next"><a href="paymenttype.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>">Next</a></li>
								<?php endif; ?>
							</ul> 
							<?php endif; ?>

						</div>   

						  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
								<div class="table-responsive"  >
								<table id="key_product"  class=" table    tablemobile  " border="0"    >
								 <thead> 
								 <tr>
									<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ลำดับ    </font></div></th>      
									<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมวดค่าใช้จ่าย  </font></div></th> 
									<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันทีเพิ่มรายการ   </font></div></th>  
									<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  คนทำรายการ   </font></div></th>   
									<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  เวลา   </font></div></th>    
									<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
									<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   แก้ไข   </font></div></th>  
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

								$sql2 = "  SELECT * FROM paymenttype where name != ''  ".$addcode." order by pk asc     limit {$start} , {$perpage}   ";  

								$query2 = mysqli_query($con,$sql2); 
								while($objResult2 = mysqli_fetch_array($query2))
								{      
										if($bg == "#FFF"){ 
											$bg = "#F8FAFD"; 
										}else{  
											$bg = "#FFF"; 
										} 

									$name_create_by = "";
									$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
										$name_create_by =  $objResult["name"];
									} 

									$colorbg = "#000"; 

									$bill_no = $objResult2["pk"];
								?>
								<tr style="background-color: <?php echo $bg; ?>; ">  

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td>


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >  <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>   </font></div></td> 

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_by; ?>  </font></div></td> 


								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["create_time"]; ?>  </font></div></td>  

								<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >    
								<a href="paymenttype.php?CusID=<?php echo $objResult2["pk"];?>&page=1" class="  btn-sm " style="background-color: #F8741D; border-radius: 5px;  border-color: #F8741D; border: 1px solid  #F8741D;   " >
								<font size="3px" color="#FFF" style=" font-size: 13px; " >  แก้ไข </font></a>

								</font></div></td> 

								 </tr> 
								<?php $i++; } ?>
								</tbody>


								</table>  
								</div>
							  </div> 

                         
                          
                          
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