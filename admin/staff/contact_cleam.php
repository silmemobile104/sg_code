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


	$sql = "SELECT * FROM list_order Where  bill_no = '". $_GET["bill_no"] ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$bill_no = $objResult["bill_no"]; 
		$room = $objResult["room"]; 
		$menu_id = $objResult["menu_id"]; 
		$money = $objResult["money"]; 
		$daytotal = $objResult["daytotal"]; 
		$dayprice = $objResult["dayprice"];  
		$daytotal2 = $objResult["daytotal2"];  
		$startdate = $objResult["startdate"];  
		$endate = $objResult["endate"];  
		$total = $objResult["total"];  
		$codecustomer = $objResult["codecustomer"];  
		$moneydown = $objResult["moneydown"];  
		$moneydata = $objResult["moneydata"];  
		$pasy = $objResult["pasy"];  
		$cod = $objResult["cod"];  
		$moneycontact = $objResult["moneycontact"];  
		$percent = $objResult["percent"];  
		$computer = $objResult["computer"];  
		$computer2 = $objResult["computer2"];  
		$priceorder = $objResult["priceorder"];  
		$major = $objResult["major"];  
		$customer = $objResult["customer"];  
		$endold = $objResult["endold"];  
		$dateold = $objResult["dateold"];  
		$bank2 = $objResult["bank"];  
		$pasycal = $objResult["pasycal"];  
		$qrdata = $objResult["qrdata"]; 
		$priceorder = $objResult["priceorder"]; 
		$appleid = $objResult["appleid"]; 
		$password = $objResult["password"]; 
		
		 
	}  

	$name_customer = "";
	$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$name_customer = $objResult["name"];
	}
		
	$producttype = "";
	$producttypename = "";
	$showclose4 = "-";
	$showclose3 = "-";
	$showclose1 = "-";
	$showclose2 = "-";
	$showclose5 = "-";
	$storerage = "-";
	$store = "-";
	$sql = "SELECT * FROM product where pk = '".$menu_id."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$producttypename = $objResult["name"];
		$producttype = $objResult["typedata"];
		$storerage = $objResult["storerage"];
		$store = $objResult["typedata_2"];   
		
		 
		$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose4 = $objResult_chk["name"];   
		}
		 
		$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose3 = $objResult_chk["name"];   
		} 
		$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose1 = $objResult_chk["name"];   
		} 
		$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose2 = $objResult_chk["name"];   
		}
		$sql_chk = " SELECT * FROM drop_typestore where pk = '".$storerage."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose5 = $objResult_chk["name"];   
		}
		
		
	}	

 							
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
              <div class=" col-lg-12 " style="  " align="left" >
			  <font color="#FFFFFF" size="3px" class="serif2"  >
			  <div style="margin-top: 1px;" > 
				 <font size="4px" color="#000000">  ทำรายการเครมสินค้า    </font>  
				 <br> 
				 <font size="2px" color="#000000">  หน้าเเรก > บันทึกทำสัญญาผ่อนมือถือ > ทำรายการเครมสินค้า  </font>   
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
                     <font size="4px" color="#000000">  ทำรายการเครมสินค้า    </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                        
                         
                      	  <form role="form" name="frmMain" method="post" action="save_contact_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>"  >
                      	  <input type="hidden" id="customerid" name="customerid" value="<?php echo $customer; ?>"  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value="<?php echo $producttypename; ?>"  >
                      	  <input type="hidden" id="productid" name="productid" value="<?php echo $menu_id ?>"  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value="<?php echo $moneydata; ?>"  > 
                      	  <input type="hidden" id="pricestart" name="pricestart" value="<?php echo $priceorder; ?>"  > 
                      	  <input type="hidden" id="productidback" name="productidback" value="<?php echo $menu_id; ?>"  > 
                      	  <input type="hidden" id="store" name="store" value="<?php echo $store; ?>"  > 
                      	  
				  		  <script>  
						  	function myFunction1() 
							{
							 var x = document.getElementById("customer").value; 
							 var getX = x.split("///");

							 document.getElementById("customerid").value = getX[0];  
							 document.getElementById("shwocontact").innerHTML = getX[1];  /// ราคา  
							 document.getElementById("namcustomer").value = getX[2];  /// ราคา  
								 
							 if(getX[1] == "มีหนี้ระบบ"){
							 	document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 }else  if(getX[1] == "ไม่มีหนี้ในระบบ"){
							 	document.getElementById("btnshwocontact").style.backgroundColor = "#323D55"; /// ราคา   
							 } 
 
							 }
							  
							function myFunction2()
							{    
								 document.getElementById("proshow1").value = "";    
								 document.getElementById("proshow2").value = "";    
								 document.getElementById("proshow3").value = "";  
								 document.getElementById("showproduct").innerHTML = " รายการ "; 
								 
								var typedata = document.getElementById("producttype").value; 
								var moneyloop = document.getElementById("priceorder").value; 
								var store = document.getElementById("store").value; 
								var productid = document.getElementById("productid").value; 
								var pricestart = document.getElementById("pricestart").value; 
							 	var getX = typedata.split("///");
							 	document.getElementById("producttypename").value = getX[1];  
									 
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_cleam_new.php?typedata="+getX[0]+"&pricecheck="+moneyloop+"&store="+store+"&productid="+productid+"&pricestart="+pricestart,
									success: function(result) {
									$('#product').html(result);
									}
								});												
							}
							  
							function myFunction3()
							{   
								var typedata = document.getElementById("producttypename").value; 
								var product = document.getElementById("product").value; 
							 	var getX = product.split("///"); 
									
								/// alert(" sdf " + getX[0] );
								
								
								
								 document.getElementById("productid").value = getX[0];   
								 document.getElementById("proshow1").value = getX[2];   
								 document.getElementById("proshow2").value = getX[3];   
								 document.getElementById("proshow3").value = getX[4];    
								 document.getElementById("showproduct").innerHTML = " รายการ " + getX[6] + " " + getX[1] +"   สินค้าจาก "+ getX[7] +"";  /// ราคา   
								 
									 									
							}
							  
							function Checkcode()
							{   
								var codecustomer = document.getElementById("codecustomer").value; 
								 
								$.ajax({
								type: "POST",
								url: "check_code.php",
								data: {data1:codecustomer},
								success: function(result) { 
									var check_number = result.ans; 
									if(check_number == 0){ 
									}else{  
										alert(' รหัสลูกค้า ซ้ำในระบบ !!! ');	 
									}
									}
								});
 								
							}
							 
 
							function LoadDropdown()
							{   
								 
								var major = document.getElementById("major").value;  
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_major5.php?major="+major,
									success: function(result) {
									$('#producttype').html(result);
									}
								});	  											
							}  
						  </script>
                      	  
                          <div class="col-lg-7" >  
                          
                          <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "      >   
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
							    </select>
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
								</div> 
							</div>
						  </div>
						  
                      	  <div class="col-md-8"  >	 
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกรายชื่อลูกค้า </font>        
							    <div class="input-group  "  style="border: 1px solid #FFFF; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control myselect" id="customer" name="customer" required style=" width: 100%; -webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   "     >  
								 
							    <?php 
								$sql = "SELECT * FROM customer where pk = '".$customer."'   order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$showclose = "ไม่มีหนี้ในระบบ";
									$sql_chk = " SELECT * FROM list_order where customer = '".$objResult["pk"]."'
									and status = 'ปกติ'  
									and closebill = 'เป็นหนี้'    
									order by pk desc  ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = "มีหนี้ระบบ";   
									} 	 
								?>
								<option value="<?php echo $objResult["pk"]."///".$showclose."///".$objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							    </select>
								<script type="text/javascript">
								$(".myselect").select2();
								</script>  
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
								<div    class="btn btn-primary" style=" background-color: #323D55; border-radius: 5px; width: 100%; height: 35px; border-color: #323D55; margin-top: 25px; "  id="btnshwocontact"    > 
								<font color="#FFF" size="2px" class="serif1" id="shwocontact" >   <?php echo $showclose; ?>   </font> 
								</div> 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อผู้ทำสัญญา </font>   
							  <input type="text" class="form-control" id="namcustomer" name="namcustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;" value="<?php echo $name_customer ?>"  readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > เลือกประเภทสินค้า </font>      
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control" id="producttype" name="producttype" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; " onchange="myFunction2()"    > 
									<?php 
									$sql = " SELECT * FROM drop_typedata where major = '".$major."' and pk = '".$producttype."'   order by pk asc "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]."///".$objResult["name"]; ?>">  
									<?php echo $objResult["name"]; ?> </option> 
									<?php  
									}
									?>   
									<?php 
									$sql = " SELECT * FROM drop_typedata where major = '".$major."' and pk != '".$producttype."'  order by pk asc "; 
									$query = mysqli_query($objCon,$sql);
									while($objResult = mysqli_fetch_array($query))
									{   
									?>
									<option value="<?php echo $objResult["pk"]."///".$objResult["name"]; ?>">  
									<?php echo $objResult["name"]; ?> </option> 
									<?php  
									}
									?>    
							    </select>
								<span class="input-group-append">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > โปรดเลือกรายการสินค้า  </font>        
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							   
							    <select class="form-control" id="product" name="product" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; "  onchange="myFunction3()"    > 
							    <?php 
								$sql = " SELECT * FROM product where 
								typedata = '".$producttype."'   
								and pk = '".$menu_id."' 
								and typedata_2 = '".$store."'  
								order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{    
									$showclose = "-";
									$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = $objResult_chk["name"];   
									}
									$showclose2 = "-";
									$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose2 = $objResult_chk["name"];   
									}
									$showclose3 = "-";
									$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose3 = $objResult_chk["name"];   
									}
									$showclose4 = "-";
									$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose4 = $objResult_chk["name"];   
									}
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$objResult["storerage"]."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]; ?>">  
								<?php echo $objResult["name"]; ?> </option> 
								<?php  
								}
								?>   
							    <?php 
								$sql = " SELECT * FROM product where 
								typedata = '".$producttype."' 
								and total = '1'  
								and pk != '".$menu_id."'  
								and price1 = '".$priceorder."'
								and price2 = '".$moneydata."'
								and typedata_2 = '".$store."' 
								order by pk asc  ";  
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{    
									$showclose = "-";
									$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose = $objResult_chk["name"];   
									}
									$showclose2 = "-";
									$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose2 = $objResult_chk["name"];   
									}
									$showclose3 = "-";
									$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose3 = $objResult_chk["name"];   
									}
									$showclose4 = "-";
									$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose4 = $objResult_chk["name"];   
									}
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$objResult["storerage"]."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]; ?>">  
								<?php echo $objResult["name"]; ?> </option> 
								<?php  
								}
								?>   
							    </select>
							    
								<span class="input-group-append">
								<div class="btn " style="border: 0px solid #000;  height: 30px;  " >
									<img src="images/down.png" style="width: 18px; ">		 
								</div>
								</span>
								</div> 
							</div> 
						  </div> 
							
                      	  <div class="col-md-12"   >	
							<div class="form-group"  style="background-color: #FFFAFA; border: 1px solid #F77369; border-radius: 5px; " >
							   <p style="margin-top: 10px; margin-bottom: 10px; margin-left: 10px; margin-right: 10px; ">
								<font color = '#000' size="3px" id="showproduct" > รายการ <?php echo $showclose3." ".$producttypename." สินค้าจาก ".$showclose4; ?>   </font>  
							   </p> 
							</div>
						  </div> 
                      	   
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รุ่น </font>   
							  <input type="text" class="form-control" id="proshow1" name="proshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose1; ?>" readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ความจุ </font>   
							  <input type="hidden" class="form-control" id="proshow2" name="proshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $storerage; ?>" readonly   >
							  <input type="text" class="form-control" id="proshow21" name="proshow21"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose5; ?>" readonly   >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose2; ?>" readonly  >
							</div>
						  </div> 
							
                      	  <div class="col-md-12"  >	&nbsp;  </div>
                      	   <div class="col-md-4"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > Apple id </font>   
							  <input type="text" class="form-control" id="appleid" name="appleid"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $appleid; ?>"  >
							</div> 
						  </div> 
							
                      	  <div class="col-md-4"   >
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสผ่าน </font>   
							  <input type="text" class="form-control" id="password" name="password"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; "   value="<?php echo $password; ?>"     >
							</div> 
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รหัสลูกค้า (กรอกเอง) </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $codecustomer; ?>"    onchange="Checkcode()" onKeyUp="Checkcode()"   >
							</div>
						  </div>
                     	  
                      	  <div class="col-md-12"  >	&nbsp;  </div>
                          
                      	 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาต้นทุน </font>   
							  <input type="text" class="form-control" id="moneystartprice" name="moneystartprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   value="<?php echo $priceorder; ?>"  >
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-12"  >  </div>
                     	  
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาตั้งขาย </font>   
							  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo $moneydata; ?>"   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินดาวน์   </font>   
							  <input type="text" class="form-control" id="moneydown" name="moneydown"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "  value="<?php echo $moneydown; ?>"  readonly  > 
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น   </font>   
							  <input type="text" class="form-control" id="daypriceall" name="daypriceall"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly  value="<?php echo $moneydata-$moneydown; ?>"    >
							  
							  <input type="hidden" class="form-control" id="daypriceall2" name="daypriceall2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly    value="<?php echo $moneydata-$moneydown; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวนงวด   </font>    
							   <select class="form-control" id="daytotal" name="daytotal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
								$sql = "SELECT * FROM drop_round where name = '".$daytotal."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    </select>
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > รวมเงินทั้งสิ้น   </font>  
							   <input type="text" class="form-control" id="daypriceall3" name="daypriceall3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFF; border: 1px solid #F77369;  " readonly   value="<?php echo $moneydata-$moneydown; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงินต้น/งวด   </font>   
							   <input type="text" class="form-control" id="daypriceshow1" name="daypriceshow1"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo number_format(0+($moneydata-$moneydown)/$daytotal, '0', '.', ','); ?>"  >
							   
							   
							   <input type="hidden" class="form-control" id="dayprice" name="dayprice"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo ($moneydata-$moneydown)/$daytotal; ?>"  >
							</div>
						  </div> 
                           
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ยอดชำระต่องวด   </font> 
							   <input type="text" class="form-control" id="daypriceshow2" name="daypriceshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo number_format(0+($moneydata-$moneydown)/$daytotal, '0', '.', ','); ?>" >
							</div>
						  </div> 
							
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สถานะภาษี   </font>    
							   <select class="form-control" id="pasycal" name="pasycal" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  nKeyUp="calAge2()"  onChange="calAge2()"  >  
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name = '".$pasycal."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>    
							    </select>
							</div>
						  </div> 
                     	  
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ภาษี   </font>   
							  <input type="text" class="form-control" id="pasyshow" name="pasyshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)*0.07 , '0', ',', '.'); ?>"   >
							    
							  <input type="hidden" class="form-control" id="pasy" name="pasy"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly   value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)*0.07 , '0', ',', '.'); ?>"   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่า COD    </font>   
							  <input type="text" class="form-control" id="cod" name="cod"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $cod; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px;  "  readonly   >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ผ่อนเดือนละ      </font>   
							   <?php $pasy = (($moneydata-$moneydown)/$daytotal)*0.07; ?>
							   <input type="text" class="form-control" id="moneymonthshow" name="moneymonthshow"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"     onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  value="<?php echo number_format(0+(($moneydata-$moneydown)/$daytotal)+$pasy  , '0', '.', ','); ?>"  >
							  
							  <input type="hidden" class="form-control" id="moneymonth" name="moneymonth"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $moneymonth; ?>"   onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly  value="<?php echo ($moneydata-$moneydown)/$daytotal; ?>"  >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าทำสัญญา      </font>   
							  <input type="text" class="form-control" id="moneycontact" name="moneycontact"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " value="<?php echo $moneycontact; ?>" readonly >
							</div>
						  </div> 
                          
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > จำนวน%      </font>   
							  <input type="text" class="form-control" id="percent" name="percent"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $percent; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							</div>
						  </div> 
							
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ค่าคอม      </font>   
							  <input type="text" class="form-control" id="computer" name="computer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							  
							  <input type="hidden" class="form-control" id="computer2" name="computer2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $computer2; ?>"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly >
							</div>
						  </div> 
						  
                  		  <div class="col-lg-12 ">   </div>
                     	  
                     	  
                     	  <div class="row ">   
                  		  <div class="col-lg-8 ">   
                      	  <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ช่องทางชำรเงิน   </font>    
							   <select class="form-control" id="bank2" name="bank2" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "   >  
							    <?php 
								$sql = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk 
								where a.name != ''  and a.pk = '".$bank2."' order by a.pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{  
									$nambank = "";
									$sql2 = "SELECT * FROM bank where pk = '".$objResult["bank"]."'    order by pk asc  "; 
									$query2 = mysqli_query($objCon,$sql2);
									while($objResult2 = mysqli_fetch_array($query2))
									{ 
										$nambank =  $objResult2["name"];
									} 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $nambank." ".$objResult["name"]. " [ " .$objResult["bookbank"] . " ] " ; ?></option> 
								<?php  
								}
								?>     
							    <?php 
								$sql = " SELECT a.* FROM bank2 a  Inner Join  bank b On a.bank = b.pk 
								where a.name != ''  and a.pk != '".$bank2."' order by a.pk asc "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
									$nambank = "";
									$sql2 = "SELECT * FROM bank where pk = '".$objResult["bank"]."'    order by pk asc  "; 
									$query2 = mysqli_query($objCon,$sql2);
									while($objResult2 = mysqli_fetch_array($query2))
									{ 
										$nambank =  $objResult2["name"];
									} 
								?>
								<option value="<?php echo $objResult["pk"]; ?>"><?php echo $nambank." ".$objResult["name"]. " [ " .$objResult["bookbank"] . " ] " ; ?></option> 
								<?php  
								}
								?>   
							    </select>
							</div>
						  </div>
						  
						  
                  		  <div class="col-lg-12 ">   </div>
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > วันที่เริ่มชำระงวดแรก      </font>     
							  <input type="text" class="form-control   " id="startdate" name="startdate"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369; "  value="<?php echo $dateold; ?>" onChange="calAge2()"   >
							</div>
						  </div>  
						  
						  
						  <div class="col-md-6 "> 
							<div class="form-group"> 
								<font class="serif" size="3px" color="black" for="address"> ถึงวันที่สิ้นสุด </font>  
				  				<input type="text" class="form-control" id="endate" name="endate"  autocomplete="off" readonly    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;  border: 1px solid #F77369;" value="<?php echo $endold; ?>"   >
							</div>
						  </div> 
                        
                  		  <div class="col-lg-12 ">   </div>
                          
                      	  <div class="col-md-6"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > QR   </font>    
							   <select class="form-control" id="qrdatashow" name="qrdatashow" required style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "     onChange="showQR()"  >  
							    <?php 
								$sql = "SELECT * FROM qrimage where name = '".$qrdata."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["img"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
								<?php 
								$sql = "SELECT * FROM qrimage where name != '".$qrdata."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["img"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    </select>
							</div>
						  </div> 
                         
                          <input type="hidden" id="qrdata" name="qrdata" value="<?php echo $qrdata; ?>">
                          
                         
                          </div>
                           
                          <?php
							$img = "";
							$sql = "SELECT * FROM qrimage Where  pk = '".$qrdata."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$img = $objResult["img"];   
							}  
							?>
	        
                  		  <div class="col-lg-3 ">   
                        
                           <?php
								$showimg = "";
								if(!empty($img)){ 
								$showimg = "../img/".$img; 
								}
							 ?>
							<img src="<?php echo $showimg; ?>" style="width: 100%;"  id="blah" > 
                        
                          </div> 
                           
                          <script>
							  
							  /// รายการ     
							function showQR() {
								var x = document.getElementById("qrdatashow").value; 
								var getX = x.split("///");

								document.getElementById("qrdata").value = getX[0];   

								 if(getX[1] == ""){
									document.getElementById("blah").style.display = "none"; 
								 }else if(getX[1] == "null"){
									document.getElementById("blah").style.display = "none"; 
								 }else{
									document.getElementById("blah").style.display = "block"; 
									$('#blah').attr('src', "../img/"+getX[1]);
								 } 

							}
 
						  </script>
                          </div>
                         
							  
                          </div> 
							    
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								
							  	  <a href="cleam.php">
							  	  	 
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
                  	  
                   	  <?php } ?>
                   		     
                  		 <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
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
        
    
	<style>
/* The container */
.container2 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px; 
  cursor: pointer;   
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px; 
  background-color: #FFF;
	border-radius: 0px;
	border: 2px solid #229B9C;
}

/* On mouse-over, add a grey background color */
.container2:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container2 input:checked ~ .checkmark {
  background-color: #229B9C;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container2 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container2 .checkmark:after {
  left: 5px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>    
        

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