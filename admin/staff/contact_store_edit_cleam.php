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


	
	$sql = "SELECT * FROM list_order_store Where  bill_no = '". $_GET["bill_no"] ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{  
		$bill_no = $objResult["bill_no"]; 
		$money = $objResult["money"];  
		$create_date = $objResult["create_date"];  
		$create_date2 = $objResult["create_date2"];  
		$create_time = $objResult["create_time"];     
		$name = $objResult["customer"];     
		$pasy = $objResult["pasy"];     
		$menu_id = $objResult["menu_id"];     
		$customer = $objResult["customer"];     
		$major = $objResult["major"];     
		$codecustomer = $objResult["codecustomer"];     
		$pasycal = $objResult["pasycal"];     
		$payment = $objResult["payment"];     
		$bank = $objResult["bank"];     
		   
		
	}  
 
	$producttype = "";
	$producttypename = "";
	$showclose4 = "-";
	$showclose3 = "-";
	$showclose1 = "-";
	$showclose2 = "-";
	$showimg = "-";
	$codeno = "-";
	$storerage = "-";
	$sql = "SELECT * FROM product where pk = '".$menu_id."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$producttypename = $objResult["name"];
		$producttype = $objResult["typedata"];
		$storerage = $objResult["storerage"];
		$codeno = $objResult["codeno"];
		
		$storerage_show = "-";
		$sql_chk = " SELECT * FROM drop_typestore where pk = '".$storerage."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$storerage_show = $objResult_chk["name"];   
		}
		 
		
		$showimg = "";
		$sql_chk = " SELECT * FROM product_img where bill_no = '".$objResult["bill_no"]."' order by pk asc limit 1 ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showimg = $objResult_chk["img"];   
		}
		 
		
		
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
	}	

?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       		<!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
            
             <div class=" col-lg-12 " style="  " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  บันทึกรายการขาย   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > แก้ไขบันทึกรายการขาย    </font>   
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
                     <font size="4px" color="#000000">  แก้ไขบันทึกรายการขาย   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php if(empty($_GET["page"])){  ?>
                       
                           
                          <div class=" col-lg-4 "  align="left" >
					    	<table width="100%" border="1" style="border: 1px solid #F77369;  ">
					    	<tr> 
					    		<td width="30%" align="center" bgcolor="#FFF" style="border-top-right-radius: 5px;" > 
					    		<a href="contact_store.php"> 
					    		<div style="margin-top: 5px; margin-bottom: 5px; " >   
					    		<img src="images/add3.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#000" style="font-size: 14px; ">  บันทึกรายการขาย    </font>  
					    		</div>
					    		</a>
					    		</td> 
					    		<td width="30%" align="center" bgcolor="#F77369"   > 
					    		<a href="contact_store_edit.php">   
					    		<div  >   
					    		<img src="images/add4.png" style="width: 13px; margin-top: -5px; "> 
					    		&nbsp;
					    		<font size="3px" color="#FFF" style="font-size: 14px; ">  แก้ไขรายการ    </font>  
					    		</div>
					    		</a>
					    		</td>
					    	</tr>
					    </table>
					   </div>
                      
                          <div class="col-lg-12">
                      	<hr>
                      </div>
                        
						  <script>
							function validateForm() {   
								 var x1 = document.getElementById("productid").value;  
								 if (x1 == "") {
									alert(" กรุณาเลือกรายการสินค้า ");
									return false;
								 }
 		
								}
							</script>
                     	  
                        
                     	  
                      	  <form role="form" name="frmMain" method="post" action="save_contact_store_update.php" enctype="multipart/form-data" onsubmit="return validateForm()"  > 
                      	  
                      	  <input type="hidden" id="bill_no" name="bill_no" value="<?php echo $bill_no; ?>"  >
                      	  <input type="hidden" id="customerid" name="customerid" value="<?php echo $customer; ?>"  >
                      	  <input type="hidden" id="producttypename" name="producttypename" value="<?php echo $producttypename; ?>"  >
                      	  <input type="hidden" id="productid" name="productid" value="<?php echo $menu_id; ?>"  >
                      	  <input type="hidden" id="priceorder" name="priceorder" value="<?php echo $money; ?>"  > 
                      	  <input type="hidden" id="productidback" name="productidback" value="<?php echo $menu_id; ?>"> 
                      	  <input type="hidden" id="moneyback" name="moneyback" value="<?php echo $money; ?>"> 
                      	  
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
								
								 document.getElementById("productid").value = "";   
								 document.getElementById("proshow1").value = "";    
								 document.getElementById("proshow2").value = "";    
								 document.getElementById("proshow3").value = ""; 
								 document.getElementById("priceorder").value = ""; 
								 document.getElementById("showproduct").innerHTML = " รายการ "; 
								
								
								var typedata = document.getElementById("producttype").value; 
							 	var getX = typedata.split("///");
							 	document.getElementById("producttypename").value = getX[1];  
									
									
								/// alert("dropdown.php?typedata="+getX[0]);
								$.ajax({
									type: "GET",
									url: "dropdown_part2.php?typedata="+getX[0],
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
									
								 document.getElementById("productid").value = getX[0];   
								 document.getElementById("proshow1").value = getX[2];   
								 document.getElementById("proshow2").value = getX[3];   
								 document.getElementById("proshow3").value = getX[4];   
								 document.getElementById("proshow4").value = getX[9];   
								 document.getElementById("money").value = getX[5];   
								 document.getElementById("priceorder").value = getX[8];   
								 document.getElementById("showproduct").innerHTML = " รายการ " + getX[6] + " " + getX[1] +"   สินค้าจาก "+ getX[7] +"";  /// ราคา   
								
								 
								 if( getX[10]  == "-"){
									 document.getElementById("showimg").style.display = "none";
									$('#blah').attr('src', "../img/up.png"); 
									 
								 }else if(getX[10] == "null"){
									 document.getElementById("showimg").style.display = "none";
									$('#blah').attr('src', "../img/up.png"); 
								 }else{
									 
									 document.getElementById("showimg").style.display = "block";
									$('#blah').attr('src', "../img/"+getX[10]);
								 } 

								
									 									
								 var moneydata = 0;
								 if(getX[5] == ""){
									 moneydata = 0;
								 }else{
									 moneydata = parseInt(getX[5]);
								 }
								
								
								 Loadpasy();
							}
							   
							   
							function Loadpasy(){
								var typedata = document.getElementById("pasy").value; 
								var gemoneydata = document.getElementById("money").value; /// ราคาตั้งขาย
								 
								var daycalmoney2 = 0;
								if(gemoneydata == ""){

								}else{
									daycalmoney2 = parseInt(gemoneydata);
								} 
								
								
								if(typedata == "ไม่คิดภาษี"){
									daypayment2 = 0; 
								}
								if(typedata == "ภาษีรวมใน"){
									 daypayment2 = ( daycalmoney2 * 100 ) / 107;  
								}
								if(typedata == "ภาษีแยกนอก"){
									 daypayment2 = ( daycalmoney2 * 0.07 ) / 107;  
								}
								
								
								document.getElementById("pasycal").value = (daypayment2.toFixed(0)); 
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
									url: "dropdown_major5_part2.php?major="+major,
									success: function(result) {
									$('#producttype').html(result);
									}
								});	  											
							}  
						  </script>
                      	  
                          <div class="col-lg-6" >  
                          
                          <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สาขา </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="major" name="major" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "  onchange="LoadDropdown()"   >  
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
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
								</div> 
							</div>
						  </div>
						    
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      	  
                          <div class="col-md-12"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ชื่อลูกค้า </font>   
							  <input type="text" class="form-control" id="customer" name="customer"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; background-color: #FFF; height: 38px;" value="<?php echo $customer; ?>"       >
							</div>
						  </div> 
							 
                      	  <div class="col-md-12" style="margin-top: -10px;"  >	 &nbsp;   </div>
                      	  
                      	  <div class="col-md-6"  >
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
							
                      	  <div class="col-md-6"  >
							<div class="form-group">
							   <font color = '#000' size="3px" > โปรดเลือกรายการสินค้า </font>        
							    <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 38px;   ">  
							    <select class="form-control" id="product" name="product" required style=" width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;   height: 30px; "  onchange="myFunction3()"    > 
							       
							    <?php 
								$sql = " SELECT * FROM product where typedata = '".$producttype."'   and pk = '".$menu_id."'  order by pk asc  ";  
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
									$showclose5 = "-";
									$sql_chk = " SELECT * FROM product_img where bill_no = '".$objResult["bill_no"]."' order by pk asc limit 1 ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose5 = $objResult_chk["img"];   
									}
									$showclose6 = "-";
									$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose6 = $objResult_chk["name"];   
									}
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$showclose6."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]."///".$objResult["codeno"]."///".$showclose5; ?>">  
								<?php echo $objResult["name"]; ?> </option> 
								<?php  
								}
								?>   
							    <?php 
								$sql = " SELECT * FROM product where typedata = '".$producttype."' 
								and total = '1'  
								and pk != '".$menu_id."'   
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
									$showclose5 = "-";
									$sql_chk = " SELECT * FROM product_img where bill_no = '".$objResult["bill_no"]."' order by pk asc limit 1 ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose5 = $objResult_chk["img"];   
									}
									$showclose6 = "-";
									$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
									$query_chk = mysqli_query($objCon,$sql_chk); 
									while($objResult_chk = mysqli_fetch_array($query_chk))
									{
										$showclose6 = $objResult_chk["name"];   
									}
								?>
								<option value="<?php echo $objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$showclose6."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]."///".$objResult["codeno"]."///".$showclose5; ?>">  
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
								<font color = '#000' size="3px" id="showproduct" > รายการ <?php echo $showclose3." ".$producttypename." สินค้าจาก ".$showclose4; ?>     </font>  
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
							  <input type="text" class="form-control" id="proshow2" name="proshow2"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $storerage_show; ?>" readonly   >
							</div>
						  </div> 
							 
                      	  <div class="col-md-4"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สี </font>   
							  <input type="text" class="form-control" id="proshow3" name="proshow3"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $showclose2; ?>" readonly  >
							</div>
						  </div> 
							 
                      	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > หมายเลขเครื่อง </font>   
							  <input type="text" class="form-control" id="proshow4" name="proshow4"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFF;    " value="<?php echo $codeno; ?>" readonly  >
							</div>
						  </div> 
                     	  
                     	  
                      	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > สภาพสินค้า   </font>   
							  <input type="text" class="form-control" id="codecustomer" name="codecustomer"  autocomplete="off"      style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px;"  value="<?php echo $codecustomer; ?>"   >
							</div>
						  </div>
                     	  
                      	  <div class="col-md-12"  >	&nbsp;  </div>
                          
                      	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ราคาตั้งขาย </font>   
							  <input type="text" class="form-control" id="money" name="money"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;   "    onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; "    value="<?php echo $money; ?>"   >
							</div>
						  </div> 
							
                     	  
                     	  <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" >  ต้องการคิดภาษีมูลค่าเพิ่ม หรือ ไม่     </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="pasy" name="pasy" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  " onchange="Loadpasy()"  >  
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name = '".$pasy."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>     
							    <?php 
								$sql = "SELECT * FROM drop_pasy where name != '".$pasy."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
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
                     	  
                     	    
                     	  <?php
							$csspasy = "display: none;";
							if($pasy == "คิดภาษี"){ 
							$csspasy = "display: block;";
							}					 
						 ?>
                      	  <div class="col-md-8"    >	
							<div class="form-group">
							   <font color = '#000' size="3px" > ภาษี 7%   </font>   
							  <input type="text" class="form-control" id="pasycal" name="pasycal"  autocomplete="off" required    style="border-radius: 5px; border: 1px solid #C9C9C9; height: 38px; background-color: #FFFAFA; border: 1px solid #F77369;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required onKeyUp="calAge2()"  onChange="calAge2()" style="border: 1px solid #CACACA; height: 40px;  border-radius: 5px; " readonly value="<?php echo $pasycal; ?>"     >
							</div>
						  </div> 
							
                      	   
                         
                          <div class="col-md-8"  >	
							<div class="form-group">
							   <font color = '#000' size="3px" > เงือนไขการชำระเงิน    </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="payment" name="payment" required style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >   
							    <?php 
								$sql = "SELECT * FROM drop_payment where name = '".$payment."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
								<?php  
								}
								?>      
							    <?php 
								$sql = "SELECT * FROM drop_payment where name != '".$payment."' order by pk asc  "; 
								$query = mysqli_query($objCon,$sql);
								while($objResult = mysqli_fetch_array($query))
								{ 
								?>
								<option value="<?php echo $objResult["name"]; ?>"><?php echo $objResult["name"]; ?></option> 
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
							   <font color = '#000' size="3px" > บัญชีการโอนเงิน    </font>   
							   <div class="input-group   "  style="border: 1px solid #C9C9C9; border-radius: 4px; height: 40px; ">  
							    <select class="form-control" id="droppaymentbank" name="droppaymentbank"   style="width:30px;-webkit-appearance: none; border:  0px solid #FFF; border-radius: 5px;  "   >  
								<?php if(empty($bank)){ ?>
								<option value=""> โปรดเลือก </option>
								<?php } ?>
								<?php 
								$sql_pay = "SELECT * FROM bank2 where pk = '".$bank."' order by pk asc  "; 
								$query_pay = mysqli_query($objCon,$sql_pay);
								while($objResult_pay = mysqli_fetch_array($query_pay))
								{ 
									$namebank = " ";
									$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
									$query_b2 = mysqli_query($objCon,$sql_b2);
									while($objResult_b2 = mysqli_fetch_array($query_b2))
									{  
											$namebank = $objResult_b2["name"];
									}
								?>
								<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
								<?php  
								}
								?>       
								<?php 
								$sql_pay = "SELECT * FROM bank2 where pk != '".$bank."' order by pk asc  "; 
								$query_pay = mysqli_query($objCon,$sql_pay);
								while($objResult_pay = mysqli_fetch_array($query_pay))
								{ 
									$namebank = " ";
									$sql_b2 = "SELECT * FROM bank where pk = '".$objResult_pay["bank"]."'  order by pk desc "; 
									$query_b2 = mysqli_query($objCon,$sql_b2);
									while($objResult_b2 = mysqli_fetch_array($query_b2))
									{  
											$namebank = $objResult_b2["name"];
									}
								?>
								<option value="<?php echo $objResult_pay["pk"]; ?>">  <?php echo $namebank." [เลขบัญชี : ".$objResult_pay["bookbank"]." ]";  ?> </option> 
								<?php  
								}
								?>       
								<?php if(!empty($bank)){ ?>
								<option value=""> ไม่เลือก </option>
								<?php } ?>
								</select>   
								<span class="input-group-append">
								<button class="btn  " style="border: 0px solid; background-color: #FFF;" type="button">
									<img src="images/down.png" style="width: 15px;">		 
								</button>
								</span>
								</div> 
							</div>
						  </div>   
                               
                                   
                          </div> 
							     
                  		  <div class="col-lg-3 ">   
                  		  			   
							 <div class="form-group" style="display: none; " id="showimg"> 
							 <?php
							  $pathimg = "../img/up.png";
							  if(!empty($showimg)){
								  $pathimg = "../img/".$showimg;  
							  }
							?>
							 <img id="blah" src="<?php echo $pathimg; ?>"  width="250px" /> 
							 </div>
                  		  
                  		  </div> 
                  		  
                  		  
                  		  
                  		  <div class="col-lg-12 ">   </div> 
                         
                          <div class="col-lg-12" align="left"   > 
                          <div class="col-lg-12" align="left"   > 
							  <div class="form-group">     

							  <button type="button" class="btn btn-primary" style="background-color: #F77369; border-radius: 5px; width: 130px; height: 40px; border-color: #F77369; margin-top: 15px; "  data-toggle="modal" data-target="#smallmodal" > <font color="#FFF" size="2px" class="serif1" >    เพิ่มข้อมูล   </font> </button> 

								  <button type="button" class="btn btn-primary" style="background-color: #FFFF; border-radius: 5px; width: 130px;  height: 40px; border-color: #C9C9C9; border: 1px solid  #C9C9C9;  margin-top: 15px;  "> <font color="#000000" size="2px" class="serif1" >  ยกเลิก  </font> </button> 
  
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