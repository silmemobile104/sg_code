<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php');
 
	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";
	 $major = "";
	 $note = "";
	 $detail = "";
	 $price = "";


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
 	 
	
	$searchname = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname"])){
		
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
		
	}else{
		$searchname = $_GET["searchname"]; 
		 
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}
		  
	$searchname2 = date('d/m')."/".(date('Y'));
	if(empty($_GET["searchname2"])){
		
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
		
	}else{
		$searchname2 = $_GET["searchname2"];
		 
		$cut = explode("/",$searchname2);
		$date_income2 = $cut[0]."-".$cut[1]."-".($cut[2]);  
		
		$daystart_load2 = date("Y-m-d", strtotime($date_income2)); 
	}

	$searchtype = "";
	if(empty($_GET["searchtype"])){
		
	}else{
		$searchtype = $_GET["searchtype"];
	}


	$major = "";
	if(empty($_GET["major"])){
		
	}else{
		$major = $_GET["major"];
	}


		if(isset($_GET["Action"])){  
			if($_GET["Action"] == "Del")
			{  
			$strSQL = "Delete From otherdata  ";
			$strSQL .="WHERE pk = '".$_GET["CusID"]."' ";
			$objQuery = mysqli_query($objCon,$strSQL); 

				//echo("<script>alert('ทำการลบเรียบร้อย!!')</script>");
				echo("<script>window.location = 'add_price_other.php?major=".$major."';</script>"); 
			}  
		}
?> 
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  รายได้ค่าใช้จ่ายอื่นๆ   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > รายได้ค่าใช้จ่ายอื่นๆ  </font>   
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
                     <font size="4px" color="#000000">  รายได้ค่าใช้จ่ายอื่นๆ   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){ ?>
 
                  		 <form role="form" name="frmMain" method="post" action="save_add_price_other.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่ <?php echo DateThai(date('d-m-Y'))." ".DateThai2(date('d-m-Y')); ?> </font> 
								  </div>
							   </div>  
							   
							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> สาขา </font>
									<select class="form-control" id="major" name="major" required style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "  >  
									<?php if(empty($major)){ ?>
									<option value="">  สาขา    </option> 
									<?php } ?>
									 
									<?php 
									$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									<?php 
									$sql = "SELECT * FROM major where pk != '".$major."' order by pk asc  "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{ 
									?>
									<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
									<?php  
									}
									?>   
									</select>
								  </div>
							   </div>  
 
							  </div>  
							  <div class="col-md-12"  >   </div> 
							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> รายละเอียด </font>
									 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
								  </div>
							   </div>  
 
							  </div>  
							  <div class="col-md-12"  >   </div> 
							  <div class="col-md-5" style=" margin-top:  5px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ยอดเงิน </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"  maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
								  </div>
							   </div>  
 
							  </div> 
							    
							  <div class="col-md-12"  >   </div> 
							  
							    
							  <div class="col-md-5" style=" margin-top:  5px; " > 
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
									 <input type="text" class="form-control" id="detail" name="detail"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $detail; ?>"   >
								  </div>
							   </div>  
							   </div>  
							    
							    
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
								
							  	  <a href="add_price_other.php">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
 
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 

											   
										</div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small -->  
 
								  </div> 
							  </div> 
							  </div> 	  

							 </form>
                   		  
						<div class="col-md-12" >  <hr style=" border: 1px solid #C9C9C9; "> </div>
                     
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
												yearRange: "-5:+5",
													  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
													  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
													  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
													});
											}); 
											</script>
                        
				  		  <script>  
						  	 function myFunction1() 
							 {
							  var getadata = document.getElementById("searchtype").value; 
							 
								 if(getadata == "ประเภทเดือนปี"){
									  document.getElementById("showsearchdata1").style.display = "block";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "1";
								 }else if(getadata == "ประเภทวัน"){ 
									  document.getElementById("showsearchdata2").style.display = "block";
									  document.getElementById("showsearchdata1").style.display = "none";
									 
									  document.getElementById("typeselect").value = "2";
								 }else{ 
									  document.getElementById("showsearchdata1").style.display = "none";
									  document.getElementById("showsearchdata2").style.display = "none";
									 
									  document.getElementById("typeselect").value = "";
								 }
							 } 
						  </script>
                   		 
                   		 
                   		 	<div class="col-lg-5"  align="left"  > 
                    	
							<table width="50%">
								<tr> 
										<td width="100%"> 
										<font color="black" size="3px" class="serif">  ประเภทการค้นหา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="searchtype" name="searchtype" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
										 <?php  if(empty($searchtype)){   ?>
											<option value="">  ประเภทการค้นหา    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM drop_type  where name = '".$searchtype."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM drop_type  where name != '".$searchtype."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>  
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  
										</td>    
									</tr>
							</table>  
                  		 
							</div>  
                  		 	
                   		 	<div class="col-lg-12"  align="left" style="margin-top: -15px;"  > &nbsp;  </div>  
                  		  
                  		  	<?php
								$hd1 = " display: none; ";						 
								$hd2 = " display: none; ";	
													 
								if($searchtype == "ประเภทเดือนปี"){
									$hd1 = " display: block; ";
								}else if($searchtype == "ประเภทวัน"){
									$hd2 = " display: block; ";
								}
								   
							?>
                   		
                    		<form action="add_price_other.php" method="get">
                    		<input type="hidden" name="searchtype" value="ประเภทเดือนปี"  >
                    		<div id="showsearchdata1" style=" <?php echo $hd1; ?>  "   class="col-lg-6"  align="left"  > 
							<table width="100%">
								<tr> 
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     >  
											<?php 
											$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$major."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										   
										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  เลือกเดือน    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="month" name="month" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     >  
											<?php if(empty($month)){ ?>
											<option value="">  เลือกเดือน    </option> 
											<?php } ?>
											 
											<?php 
											$sql = "SELECT * FROM month   where  statusdata = '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM month   where  statusdata != '".$month."'  order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["statusdata"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										   
										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  เลือกปี    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="year" name="year" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   onchange="myFunction1()"    >  
											<?php if(empty($year)){ ?>
											<option value="">  เลือกปี    </option> 
											<?php } ?>
											<?php 
											$sql = "SELECT * FROM year where  year = '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											<?php 
											$sql = "SELECT * FROM year where  year != '".$year."'   order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["year"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>     
											</select>
										  
										<span class="input-group-append">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit" >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										  

										</td> 
									</tr>	 
							</table>  
							</div> 
							</form> 
                   		
                    		<form action="add_price_other.php" method="get"> 
                    		<input type="hidden" name="searchtype" value="ประเภทวัน"  >
                   		    <div id="showsearchdata2" style="  <?php echo $hd2; ?> "   class="col-lg-6"  align="left"  > 
							<table width="100%">
								<tr>  
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  สาขา    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										 <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "     >  
											<?php 
											$sql = "SELECT * FROM major where pk = '".$major."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											<?php 
											$sql = "SELECT * FROM major where pk != '".$major."' order by pk asc  "; 
											$query = mysqli_query($objCon,$sql);
											while($objResult = mysqli_fetch_array($query))
											{ 
											?>
											<option value="<?php echo $objResult["pk"]; ?>"><?php echo $objResult["name"]; ?></option> 
											<?php  
											}
											?>   
											</select>
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="submit">
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div>
										   
										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  วันทีเริ่มต้น   </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname" name="searchname" value="<?php echo $searchname; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append" style="display: none; ">
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FAFAFA;" type="button" >
												<img src="images/down.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 

										</td>   
										<td width="1%">&nbsp;  </td>
										<td width="30%"> 
										<font color="black" size="3px" class="serif">  วันทีสิ้นสุด    </font>
 
										<div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">
										<input class="form-control  current  "   type="text" style="background-color: #FAFAFA;  border: 1px solid #C9C9C9;  border: 0px; border-radius: 5px;   "    id="searchname2" name="searchname2" value="<?php echo $searchname2; ?>"  readonly    autocomplete="off"  >
										  
										<span class="input-group-append"> 
										  <button class="btn btn-outline-secondary  " style="border: 0px solid; background-color: #FFF;" type="submit"  >
												<img src="images/search.png" style="width: 15px; "> 
										  </button>
										</span>
										</div> 
										</td> 
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
													 
												  
													  
													  
											$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
											$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 
											$addcode2 = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
										 
													 
											if(!empty($month)  && !empty($year)){ 
												
												$addcode2 = "";
												$datadate  = "01-".$month."-".$year;				   
												$datadate2  = "31-".$month."-".$year;	


												$contactstart = date("Y-m-d", strtotime($datadate));  
												$checkend = date("Y-m-d", strtotime($datadate2)); 

												$addcode = "  and  date_start2 BETWEEN '".$contactstart."' AND '".$checkend."'  ";
											} 
													 
											if(!empty($major)){ 
												$addcode2 = " and major = '".$major."' ";  
											}
													 
											$sql2 = " SELECT * FROM otherdata  
											where  name != ''   
											".$addcode.$addcode2."  
											order by  pk asc    "; 
													  
											$query2 = mysqli_query($objCon, $sql2);
											$total_record = mysqli_num_rows($query2);
											$total_page = ceil($total_record / $perpage);
											 ?>  
											<?php if (ceil($total_record / $perpage) > 0): ?>
												<ul class="pagination">
																				<?php if ($page > 1): ?>
																				<li class="prev"><a href="add_price_other.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>">Prev</a></li>
																				<?php endif; ?>

																				<?php if ($page > 3): ?>
																				<li class="start"><a href="add_price_other.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>">1</a></li>
																				<li class="dots">...</li>
																				<?php endif; ?>

																				<?php if ($page-2 > 0): ?><li class="page"><a href="add_price_other.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
																				<?php if ($page-1 > 0): ?><li class="page"><a href="add_price_other.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

																				<li class="currentpage"><a href="add_price_other.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo $page ?></a></li>

																				<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="add_price_other.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
																				<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="add_price_other.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)-2): ?>
																				<li class="dots">...</li>
																				<li class="end"><a href="add_price_other.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
																				<?php endif; ?>

																				<?php if ($page < ceil($total_record / $perpage)): ?>
																				<li class="next"><a href="add_price_other.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&searchtype=<?php echo $searchtype; ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&month=<?php echo $month; ?>&year=<?php echo $year; ?>&majorr=<?php echo $major; ?>">Next</a></li>
																				<?php endif; ?>
																			</ul>
											<?php endif; ?>

										</div>
                        
                    		<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
							<div class="table-responsive"  >
							<table id="key_product"  class=" table    tablemobile  " border="0"    >
							 <thead> 
											 <tr>
												<th width="2%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;  border-top-left-radius: 10px; "  ><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ลำดับ    </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันเดือนปี  </font></div></th>    
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   รายละเอียด  </font></div></th>   
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ยอดเงิน     </font></div></th>  
												<th width="4%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   border-top-right-radius: 10px;"><div align="center"> 
												<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  แก้ไข - ลบ   </font></div></th>  
											 </tr>
										  </thead>  
										 
										 
										<tbody> 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 1;
										$total = 0;
 
 										if (empty($_GET['page2'])) { 
											$i = 1;
										}else if (($_GET['page2'] == 1)) { 
											$i = 1;
										}else{

											$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
										}

									   
									    $bg = "#F8FAFD"; 
										$sql2 = " SELECT * FROM otherdata 
											where  name != ''  
											".$addcode.$addcode2."  
											order by  pk asc   limit {$start} , {$perpage}   ";   
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
												if($bg == "#FFF"){ 
													$bg = "#F8FAFD"; 
												}else{  
													$bg = "#FFF"; 
												} 
											
												$name_create = "";
												$sql = " SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'   order by pk asc  "; 
												$query = mysqli_query($objCon,$sql);
												while($objResult = mysqli_fetch_array($query))
												{ 
													$name_create =  $objResult["name"];
												}  
										?>
										<tr style="background-color: <?php echo $bg ?>; "> 
										
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 
										 
										   
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["date_start"])." ".DateThai2($objResult2["date_start"]); ?> </font></div></td> 
										 
										  
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo  ($objResult2["name"]); ?> </font></div></td> 
										 
									 
										  
										<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php 
											echo number_format(0+$objResult2["price"]); 
											?> </font></div></td> 
										 
										 
										 
										<td align="center"><div align="center"><a  href="add_price_other.php?CusID=<?php echo $objResult2["pk"];?>&page=1&major=<?php echo $major;?>"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > แก้ไข </font></a> 
										&nbsp;
										-
										&nbsp;
										<a  href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='<?php echo $_SERVER["PHP_SELF"];?>?Action=Del&CusID=<?php echo $objResult2["pk"];?>&major=<?php echo $major;?>';}"  class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   " >
										<font size="3px" color="#F77369" style=" font-size: 13px; " > ลบ </font></a>
										</div></td>

									 
										</tr>  
										<?php $i++;  } ?>
									</tbody>
  
										 
							</table>  
							</div>
						  </div>
                     
                   	  <?php } ?>
                   		    
                   		  
                  		       
                       <?php  
						if(isset($_GET["page"])){
						if( ($_GET["page"]) == "1" ){
						$sql = "SELECT * FROM otherdata Where  pk = '". $_GET["CusID"] ."' ";  
						$query = mysqli_query($objCon,$sql); 
						while($objResult = mysqli_fetch_array($query))
						{  
							$name = $objResult["name"];  
							$price = $objResult["price"];
							$detail = $objResult["detail"];   

 
						}  
							 
						?> 
                           
                           <form role="form" name="frmMain" method="post" action="save_add_price_other_update.php" enctype="multipart/form-data" onsubmit="return validateForm()" > 

							<input type="hidden" name="idupdate" id="idupdate" class="form-control " value="<?php echo $_GET["CusID"]; ?>" >
							<input type="hidden" name="major" id="major" class="form-control " value="<?php echo $major; ?>" >
					
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> วันที่ <?php echo DateThai(date('d-m-Y'))." ".DateThai2(date('d-m-Y')); ?> </font> 
								  </div>
							   </div>  
							   
							  <div class="col-md-5" style=" margin-top:  15px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> รายละเอียด </font>
									 <input type="text" class="form-control" id="name" name="name"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $name; ?>"   >
								  </div>
							   </div>  
 
							  </div>  
							  <div class="col-md-12"  >   </div> 
							  <div class="col-md-5" style=" margin-top:  5px; " > 

							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> ยอดเงิน </font>
									 <input type="text" class="form-control" id="price" name="price"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $price; ?>"  maxlength="10"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  >
								  </div>
							   </div>  
 
							  </div> 
							    
							  <div class="col-md-12"  >   </div> 
							  
							    
							  <div class="col-md-5" style=" margin-top:  5px; " > 
							   <div class="col-md-12 "> 
								  <div class="form-group"> 
									 <font class="serif" size="3px" color="black" for="address"> หมายเหตุ </font>
									 <input type="text" class="form-control" id="detail" name="detail"   autocomplete="off" required  style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; background-color: #FFF; "    value="<?php echo $detail; ?>"   >
								  </div>
							   </div>  
							   </div>  
							    
							    
							  <div class="col-md-12" > 
							  <div class="col-lg-12" align="left"   > 
								  <div class="form-group">     

								  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								 
								
							  	  <a href="add_price_other.php">
							  	  	 
								  <button type="button" class="btn btn-primary" style="background-color: #FFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #F77369; border: 1px solid  #F77369;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
 
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
										 
											<button type="submit" class="btn btn-primary" style="background-color: #56BFB4; border-radius: 5px; width: 130px; height: 40px; border-color: #56BFB4;  margin-top: 15px; " > <font color="#000000" size="2px" class="serif1" > <b>  ตกลง   </b> </font> </button> 
									 		 
									 
											<button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary" style="background-color: #CAD1DB; border-radius: 5px; width: 130px;  height: 40px; border-color: #CAD1DB; border: 1px solid  #CAD1DB;  margin-top: 15px;  "  > <font color="#000000" size="2px" class="serif1" > <b>   ไม่   </b> </font> </button> 

											   
										</div> 
										</div> 
										</div>
									</div>
									</div>
									<!-- end modal small -->  
 
								  </div> 
							  </div> 
							  </div> 	  

							 </form>
                  		      
                          
                          <?php } } ?>
                          
                          
                          
                          
                          
                          
                          
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

<?php
include('footer2.php');
?>