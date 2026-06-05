<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];    

	$detail = "";
	$notedata = "";
	$customer = "";

	 
	$bill_no = $_GET["bill_no"]; 
 
	
		 
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
		$allday = $objResult["allday"]; 
		$appleid = $objResult["appleid"]; 
		$password = $objResult["password"]; 
		$contactstatus = $objResult["contactstatus"]; 


		$dateold = $objResult["dateold"]; 
		$endold = $objResult["endold"]; 
		$daypayment = $objResult["daypayment"]; 


		$create_date = $objResult["create_date"]; 
		$create_date2 = $objResult["create_date2"]; 


		$chk_total = $objResult["totalno_payment"];
		$tanai_status1 = $objResult["tanai_status1"];
		$tanai_status2 = $objResult["tanai_status2"];
		$tanai_status3 = $objResult["tanai_status3"];
		 
		$priceother = 0;
		$priceothershow = " ................ ";
		if(!empty($objResult["priceother"])){
			$priceother = $objResult["priceother"];
			$priceothershow = $objResult["priceother"];
		}
		 
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
	$codeno = "-";
	$sql = "SELECT * FROM product where pk = '".$menu_id."'   order by pk asc  "; 
	$query = mysqli_query($objCon,$sql);
	while($objResult = mysqli_fetch_array($query))
	{ 
		$producttypename = $objResult["name"];
		$producttype = $objResult["typedata"];
		$storerage = $objResult["storerage"];
		$store = $objResult["typedata_2"];   
		$codeno = $objResult["codeno"];   


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



	$discoount = 0;
	$discoountpaymentother = 0;
	$contactstart = date("Y-m-d", strtotime($startdate));  /// วันที่เริ่มเก็บ 
	$checkend = date("Y-m-d", strtotime(date('d-m-Y')));  /// วันที่เลือกล่าสุด 
	$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
	$sql2 = "SELECT * FROM history_payment Where  
	bill_no = '". $bill_no ."' 
	and income != '' 
	and income != '0'   
	".$code_check2." ";   
	$query2 = mysqli_query($objCon,$sql2); 
	while($objResult2 = mysqli_fetch_array($query2))
	{  
		if(!empty($objResult2["income"])){
		$discoount += $objResult2["income"]; 

		}
		if(!empty($objResult2["paymentother"])){
		$discoountpaymentother += $objResult2["paymentother"]; 
		}  
	}	

	$allmoney = ($dayprice*$daytotal)-$discoount;
 
?>
 
 
<div style=" margin-top: 25px; " class=" col-lg-12 ">
<font size="4px" color="#000" class="serif" style=" font-size: 17px;"> 
<b>    
เลขที่สัญญา  <?php echo $bill_no; ?>   &nbsp; กู้คืนกลับไประบบหลังบ้าน  
</b>  
<div style=" margin-top: 5px; "> </div>

รหัสลูกค้า <?php echo $codecustomer; ?>    ระยะขาดส่ง
	
	 <?php 
		if($chk_total > 0){

			$dates = $chk_total;
			$years = floor($dates/365);
			$months = floor(($dates-($years*365))/30);
			$dates2 = $dates-(($years*365)+($months*30));

			if(!empty($years)){
				echo $years." ปี ";	
			}if(!empty($months)){
				echo $months." เดือน";
			}if(!empty($dates2)){
				echo $dates2." วัน";
			} 
		}
	?> 
	
	
	ค่าใช้จ่ายดำเนินคดี 
      <a  onClick="CanceldataNo()"  id="savedataall2"  class="btn btn-sm" style="cursor: pointer; background-color: #FFFF; border: 1px solid #0000; border-radius: 10px;  "    >
	   &nbsp; &nbsp;  <font size="3px" color="#000" id="showtxtprice" >  <?php echo $priceothershow; ?>   </font> &nbsp; &nbsp; 
	  </a>   บาท 
	  
	  
	  
		<input type="hidden" id="bill_no" value="<?php echo $_GET["bill_no"]; ?>" >
		<script> 
		function 
		CanceldataNo( ) { 

			$(document).ready(function(){ 
			$('#discoutdataclose').modal('show'); //myModal is ID of div
			});    

		}  
		function 
		Savepriceother( ) { 
			 
			var data1 = document.getElementById("data1").value; /// เงินกู้
			var bill_no = document.getElementById("bill_no").value; /// รายวัน  

			document.getElementById("showtxtprice").innerHTML = data1;
			 
			var jsonString = ""; 
			$.ajax({
			type: "POST",
			url: "save_tanai1.php?data1="+data1+"&bill_no="+bill_no,
			contentType: 'application/json',
			data: jsonString,
			success: function(result) {
			//alert(result);
			}
			});

			
			
			$(document).ready(function(){ 
			$('#discoutdataclose').modal('hide'); //myModal is ID of div
			});    

		}  
		</script>
		<!-- modal small -->
		<div class="modal fade" id="discoutdataclose" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="smallmodalLabel"> ค่าใช้จ่ายดำเนินคดี <?php echo $bill_no;?>  </h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body"> 

			<div class="col-lg-12" align="center" id="showtotalmoney"   >   
			<font size="3px" color="black" style="font-size: 25px;">  

		
		
				<div class="col-md-12" align="left"  > 

				  <div class="form-group"> 
					 <font class="serif" size="3px" color="black" for="address"> ค่าใช้จ่ายดำเนินคดี  </font>
					 <input type="text" class="form-control" id="data1" name="data1"   autocomplete="off" required  style="border: 1px solid #39464F; height: 40px;  border-radius: 5px; background-color: #F4F4F4; "      value="<?php echo  $priceother; ?>"  value=""  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"   >
				  </div> 

				</div>	 
 

				<div class="col-md-12" align="left"  > 
					<button type="button" class="btn btn-sm btn-primary" style="background-color: #FF7A7B; border-radius: 5px; width: 100%; height: 40px; border-color: #FF7A7B; margin-top: 15px;  " onClick="Savepriceother()"   > <font color="#FFF" size="2px" class="serif1" >  บันทึก   </font> </button> 
				</div>	


 
			</font> 
			</div> 


			</div> 
			</div>
			</div>
		</div>
			<!-- end modal small --> 				
									
   
<div style=" margin-top: 10px; "> </div>
	
ชื่อลูกค้า <?php echo $name_customer; ?> 
วันเริ่มสัญญา <?php echo DateThai($startdate)." ".DateThai2($startdate); ?>  
วันที่สิ้นสุด <?php echo DateThai($endate)." ".DateThai2($endate); ?> 

ยอดค้าง <?php echo number_format(0+$allmoney); ?> บาท
   
<div style=" margin-top: 10px; "> </div>

ข้อมูลการติดตามส่งเอกสารโนติส พิมพ์เอกสารใบโนติส 

       
<?php echo $name_create; ?> 
&nbsp;
<?php echo  DateThai($create_date)." ".DateThai2($create_date); ?>  
&nbsp; 
<?php echo  $create_time; ?> 
<div style=" margin-top: 5px; "> </div>
 			 				 
		
</font>  		 				  
<hr style=" border: 1px dashed #383A44; "> 
<div   class="col-lg-12"  align="left" style=" margin-top: 25px; "   >  </div>
                  		
<table id="key_product"  class=" tables    tablemobile  " border="0" style=" width: 100%; "    >
<thead> 
<tr>
<th width="2%" bgcolor="#000" height="45px;" style="border: 0px solid #FFF;   "  ><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  หัวข้อ    </font></div></th>    
<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">   หัวข้อ  </font></div></th>       
<th width="6%" bgcolor="#000" style="border: 0px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>    
<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  หัวข้อ     </font></div></th>         
<th width="6%" bgcolor="#000" style="border: 0px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>      
<th width="4%" bgcolor="#000" style="border: 0px solid #FFF;    "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  หัวข้อ     </font></div></th>       
<th width="6%" bgcolor="#000" style="border: 0px solid #FFF;   "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  พนักงานทำรายการ     </font></div></th>    
<th width="6%" bgcolor="#000" style="border: 0px solid #FFF;   "><div align="center"> 
<font size="3px" class="serif2" color="#FFF" style=" font-size: 13px; ">  ดูข้อมุลสัญญา     </font></div></th>   
</tr>
</thead>   
<tbody> 
	<?php 
	  for($loop = 1; $loop <= 3; $loop++){
		 				 
		  
		$roundata = $loop;
		$tanaistatus1 = "";
		$tanaistatus1_by = "";
		$tanaistatus1_date = "";
		$tanaistatus1_time = "";
		$name_customer1 = "";
		$sql = "SELECT * FROM list_order_tanai where  bill_no = '".$bill_no."' and roundata = '".$roundata."' and statussave = '1' order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$tanaistatus1 = $objResult["tanaistatus1"];
			$tanaistatus1_by = $objResult["tanaistatus1_by"];
			$tanaistatus1_date = $objResult["tanaistatus1_date"];
			$tanaistatus1_time = $objResult["tanaistatus1_time"];
			 
			$sql = "SELECT * FROM member_all where pk = '".$tanaistatus1_by."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer1 = $objResult["name"];
			}
			
		}
		 

		  
		$roundata = $loop;
		$tanaistatus2 = "";
		$tanaistatus2_by = "";
		$tanaistatus2_date = "";
		$tanaistatus2_time = "";
		$name_customer2 = "";
		$sql = "SELECT * FROM list_order_tanai where  bill_no = '".$bill_no."' and roundata = '".$roundata."' and statussave = '2' order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$tanaistatus2 = $objResult["tanaistatus1"];
			$tanaistatus2_by = $objResult["tanaistatus1_by"];
			$tanaistatus2_date = $objResult["tanaistatus1_date"];
			$tanaistatus2_time = $objResult["tanaistatus1_time"];
			 
			$sql = "SELECT * FROM member_all where pk = '".$tanaistatus2_by."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer2 = $objResult["name"];
			}
			
		}
		  
		  
		$roundata = $loop;
		$tanaistatus3 = "";
		$tanaistatus3_by = "";
		$tanaistatus3_date = "";
		$tanaistatus3_time = "";
		$name_customer3 = "";
		$sql = "SELECT * FROM list_order_tanai where  bill_no = '".$bill_no."' and roundata = '".$roundata."' and statussave = '3' order by pk asc  "; 
		$query = mysqli_query($objCon,$sql);
		while($objResult = mysqli_fetch_array($query))
		{ 
			$tanaistatus3 = $objResult["tanaistatus1"];
			$tanaistatus3_by = $objResult["tanaistatus1_by"];
			$tanaistatus3_date = $objResult["tanaistatus1_date"];
			$tanaistatus3_time = $objResult["tanaistatus1_time"];
			 
			$sql = "SELECT * FROM member_all where pk = '".$tanaistatus3_by."'   order by pk asc  "; 
			$query = mysqli_query($objCon,$sql);
			while($objResult = mysqli_fetch_array($query))
			{ 
				$name_customer3 = $objResult["name"];
			}
			
		}
		/// echo $tanaistatus1 . " <Br> "; 
						
		if($tanaistatus1 == "ยังไม่ส่งเอกสาร"){ 
				$txtshow = " ยังไม่ส่งเอกสาร ";
				$hdd = " "; 
				$bgbtn = " #FF8C00  ";

		}else if($tanaistatus1 == "ส่งเอกสารแล้ว"){ 
				$txtshow = " ส่งเอกสารแล้ว ";
				$hdd = "    "; 
				$bgbtn = " #006400  "; 
		}else{ 
				$txtshow = " ยังไม่ส่งเอกสาร ";
				$hdd = "   "; 
				$bgbtn = " #FF8C00  "; 
		}
					
		  
		if($tanaistatus2 == "รอตอบรับ"){ 
				$txtshow2 = " รอตอบรับ ";
				$hdd2 = " "; 
				$bgbtn2 = " #FF8C00  ";

		}else if($tanaistatus2 == "ตอบรับแล้ว"){ 
				$txtshow2 = " ตอบรับแล้ว ";
				$hdd2 = "    "; 
				$bgbtn2 = " #006400  "; 
		}else{ 
				$txtshow2 = " รอตอบรับ ";
				$hdd2 = "   "; 
				$bgbtn2 = " #FF8C00  "; 
		}
		  
		  
		if($tanaistatus3 == "ไม่มีการตอบรับ"){ 
				$txtshow3 = " ไม่มีการตอบรับ ";
				$hdd3 = " "; 
				$bgbtn3 = " #FF8C00  ";

		}else if($tanaistatus3 == "ตอบรับแล้ว"){ 
				$txtshow3 = " ตอบรับแล้ว ";
				$hdd3 = "    "; 
				$bgbtn3 = " #006400  "; 
		}else{ 
				$txtshow3 = " ไม่มีการตอบรับ ";
				$hdd3 = "   "; 
				$bgbtn3 = " #FF8C00  "; 
		}
								
	 ?>		
	 <input type="hidden" id="bill_no" value="<?php echo $bill_no; ?>">
	 
	 <tr  > 

	 <td style=" border-left: 0px solid #F2F2F2; " height="45px">
	 <div align="center">
	 <font size="3px" color="Black" style=" font-size: 13px; " class="serif" > ติดตามครั้งที่ <?php echo $loop; ?> </font>
	 </div></td> 	
	 
	  
	  <td style=" border-left: 0px solid #F2F2F2; ">

		<div align="center"   id="btnshowround1<?php echo $loop; ?>"  >
		<font size="3px" color="Black" style=" font-size: 13px; " >  
		<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: 5px;     "     id="btnsave<?php echo $loop;?>" data-toggle="modal"    >
		<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdatathree<?php echo $loop; ?>"  > <?php echo $txtshow; ?> </font>   </a> 
		</font>
		</div>
 
		 <!-- Modal -->
		<div class="modal fade" id="myEodal1<?php echo $loop; ?>" role="dialog" style=" margin-top: 75px; ">
		<div class="modal-dialog modal-md"> 
		<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
			<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $bill_no; ?> </font> 
			<button type="button" id="closepop<?php echo $loop; ?>"  class="close" data-dismiss="modal">&times;</button>
			</div> <br>
			<center>  
			<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
			<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  


			<font size="3px" style=" font-size: 16px; " color="#000">  

			<input type="hidden" id="savebill_no<?php echo $loop; ?>" value="<?php echo $loop; ?>" > 

			<script> 
			function 
			Canceldatabill<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";


					////document.getElementById("passportadmin<?php echo $loop; ?>").value = "";

					check_status_save = ""+statusbill;  
				  
					if(check_status_save == "ยังไม่ส่งเอกสาร"){

					document.getElementById("txtshowdatathree<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave<?php echo $loop; ?>").style.background = "#FF8C00";

					} else if(check_status_save == "ส่งเอกสารแล้ว"){ 
					document.getElementById("txtshowdatathree<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} else { 
					document.getElementById("txtshowdatathree<?php echo $loop; ?>").innerHTML = " ยังไม่ส่งเอกสาร "; 
					document.getElementById("btnsave<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} 


				var jsonString = ""; 
				$.ajax({
				type: "POST",
				url: "save_tanai_status1.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
				contentType: 'application/json',
				data: jsonString,
				success: function(result) {
				//alert(result);
				}
				});


 

				 document.getElementById("closepop<?php echo $loop; ?>").click(); 
				 reloadstaff();

			}

			</script> 

			<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $loop; ?>"   >    


				<div class="col-md-12" style="  "  > 


					 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> <b>  สถานะเอกสาร    </b>  </font> 

					 <select class="form-control  " id="statusbill<?php echo $loop; ?>" name="statusbill<?php echo $loop; ?>" required style=" width: 100%; color: #000; border: 1px solid #CACACA; height: 40px;  border-radius: 10px; background-color: #FFF; box-shadow: none;"   >  

						<?php 
						$sql = "SELECT * FROM drio_tanai1 where name = '".$tanaistatus1."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{  

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>   
						<?php 
						$sql = "SELECT * FROM drio_tanai1 where name != '".$tanaistatus1."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{   

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>    
						</select>  

				</div>  

				<div class="col-lg-12" style="  "  >   
				  <div class="form-group">     

				  <button type="button" class="btn btn-primary" style="background-color: #000; border-radius: 5px; width: 100%; height: 40px; border-color: #000; margin-top: 15px; "  onClick='Canceldatabill<?php echo $loop; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 


				 </div> 
				 </div>



			 </div>

			<div style=" margin-top: 20px; " > &nbsp; </div>  

			</font>  
			</div>
			</div>
			</center>
			</div>
		</div>
		</div>  



	<script> 
		setInterval(load_unseen_notification1<?php echo $loop; ?>, 1000);
		setInterval(load_unseen_notification2<?php echo $loop; ?>, 2000);
		setInterval(load_unseen_notification3<?php echo $loop; ?>, 3000);
		
	function load_unseen_notification1<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";
				check_status_save = ""+statusbill;  
		 
				
		 
		$.ajax({
		type: "GET",
		url: "loadbtnfoune.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
		success: function(result) {
			$('#showround1<?php echo $loop; ?>').html(result);  
		}
		});	 
		
		$.ajax({
		type: "GET",
		url: "loadbtnfoune4.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
		success: function(result) {
			$('#btnshowround1<?php echo $loop; ?>').html(result);  
		}
		});	 
				
	}
	function load_unseen_notification2<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill2<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";
				check_status_save = ""+statusbill;
		
			 
					$.ajax({
					type: "GET",
					url: "loadbtnfoune2.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
					success: function(result) {
						$('#showround2<?php echo $loop; ?>').html(result);  
					}
					});	 
 
		$.ajax({
		type: "GET",
		url: "loadbtnfoune5.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
		success: function(result) {
			$('#btnshowround2<?php echo $loop; ?>').html(result);  
		}
		});	 
				
	}
	function load_unseen_notification3<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill3<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";
				check_status_save = ""+statusbill;
		
			$.ajax({
			type: "GET",
			url: "loadbtnfoune3.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
			success: function(result) {
				$('#showround3<?php echo $loop; ?>').html(result);  
			}
			});	 
				
		$.ajax({
		type: "GET",
		url: "loadbtnfoune6.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
		success: function(result) {
			$('#btnshowround3<?php echo $loop; ?>').html(result);  
		}
		});	 
	}
	</script>
 
 
 
	 </td> 	
   
	 <td style=" border-left: 0px solid #F2F2F2; " height="45px">
	 <div align="center" style=" margin-top: 5px; "  id="showround1<?php echo $loop; ?>"  >  
	 <font size="3px" color="Black" style=" font-size: 13px; " class="serif" >  <?php 
		  
		  if(!empty($tanaistatus1_date)){
			   echo $name_customer1; 
			   echo " &nbsp;  "; 
			   echo DateThai($tanaistatus1_date)." ".DateThai2($tanaistatus1_date);
			   echo " &nbsp;  ";  
			   echo $tanaistatus1_time; 
		  }
		   
		 ?>   </font>
	 </div></td> 	
   
	  <td style=" border-left: 0px solid #F2F2F2; ">

		<div align="center"    id="btnshowround2<?php echo $loop; ?>"  >
		<font size="3px" color="Black" style=" font-size: 13px; " >  
		<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn2; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: 5px;     "     id="btnsave2<?php echo $loop;?>" data-toggle="modal"   >
		<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdatathree2<?php echo $loop; ?>"  > <?php echo $txtshow2; ?> </font>   </a> 
		</font>
		</div>
   
    <!-- Modal -->
		<div class="modal fade" id="myEodal2<?php echo $loop; ?>" role="dialog" style=" margin-top: 75px; ">
		<div class="modal-dialog modal-md"> 
		<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
			<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $bill_no; ?> </font> 
			<button type="button" id="closepop2<?php echo $loop; ?>"  class="close" data-dismiss="modal">&times;</button>
			</div> <br>
			<center>  
			<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
			<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  


			<font size="3px" style=" font-size: 16px; " color="#000">  
 

			<script> 
			function 
			Canceldatabill2<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill2<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";


					////document.getElementById("passportadmin<?php echo $loop; ?>").value = "";

					check_status_save = ""+statusbill;  
				  
					if(check_status_save == "รอตอบรับ"){

					document.getElementById("txtshowdatathree2<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave2<?php echo $loop; ?>").style.background = "#FF8C00";

					} else if(check_status_save == "ตอบรับแล้ว"){ 
					document.getElementById("txtshowdatathree2<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave2<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} else { 
					document.getElementById("txtshowdatathree2<?php echo $loop; ?>").innerHTML = " รอตอบรับ "; 
					document.getElementById("btnsave2<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} 


				var jsonString = ""; 
				$.ajax({
				type: "POST",
				url: "save_tanai_status2.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
				contentType: 'application/json',
				data: jsonString,
				success: function(result) {
				//alert(result);
				}
				});


 

				 document.getElementById("closepop2<?php echo $loop; ?>").click(); 
					reloadstaff();

			}

			</script> 

			<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $loop; ?>"   >    


				<div class="col-md-12" style="  "  > 


					 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> <b>  สถานะเอกสาร    </b>  </font> 

					 <select class="form-control  " id="statusbill2<?php echo $loop; ?>" name="statusbill2<?php echo $loop; ?>" required style=" width: 100%; color: #000; border: 1px solid #CACACA; height: 40px;  border-radius: 10px; background-color: #FFF; box-shadow: none;"   >  

						<?php 
						$sql = "SELECT * FROM drio_tanai2 where name = '".$tanaistatus2."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{  

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>   
						<?php 
						$sql = "SELECT * FROM drio_tanai2 where name != '".$tanaistatus2."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{   

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>    
						</select>  

				</div>  

				<div class="col-lg-12" style="  "  >   
				  <div class="form-group">     

				  <button type="button" class="btn btn-primary" style="background-color: #000; border-radius: 5px; width: 100%; height: 40px; border-color: #000; margin-top: 15px; "  onClick='Canceldatabill2<?php echo $loop; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 


				 </div> 
				 </div>



			 </div>

			<div style=" margin-top: 20px; " > &nbsp; </div>  

			</font>  
			</div>
			</div>
			</center>
			</div>
		</div>
		</div>  
	 </td> 	
     
     
	
	 <td style=" border-left: 0px solid #F2F2F2; " height="45px">
	 <div align="center" style=" margin-top: 5px; "  id="showround2<?php echo $loop; ?>"  >  
	 <font size="3px" color="Black" style=" font-size: 13px; " class="serif" >  <?php 
		  
		  if(!empty($tanaistatus2_date)){
			   echo $name_customer2; 
			   echo " &nbsp;  "; 
			   echo DateThai($tanaistatus2_date)." ".DateThai2($tanaistatus2_date); 
			   echo " &nbsp;  ";  
			   echo $tanaistatus2_time; 
		  }
		   
		 ?>   </font>
	 </div></td> 
	 
	 
	 
	  <td style=" border-left: 0px solid #F2F2F2; ">

		<div align="center"     id="btnshowround3<?php echo $loop; ?>" >
		<font size="3px" color="Black" style=" font-size: 13px; " >  
		<a class="btn  btn-sm" style=" background-color: <?php echo $bgbtn3; ?>; border-radius: 5px;  border-radius: 5px; cursor: pointer; margin-top: 5px;     "     id="btnsave3<?php echo $loop;?>" data-toggle="modal"    >
		<font color="#FFF" size="2px" class="serif2"  style=" font-size: 13px; "  id="txtshowdatathree3<?php echo $loop; ?>"  > <?php echo $txtshow3; ?> </font>   </a> 
		</font>
		</div>
   
   
   
   
    <!-- Modal -->
		<div class="modal fade" id="myEodal3<?php echo $loop; ?>" role="dialog" style=" margin-top: 75px; ">
		<div class="modal-dialog modal-md"> 
		<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
			<font size="2px" color="black"  class="serif2"> เลขที่บิลรายการ : <?php echo $bill_no; ?> </font> 
			<button type="button" id="closepop3<?php echo $loop; ?>"  class="close" data-dismiss="modal">&times;</button>
			</div> <br>
			<center>  
			<div class="row"  style=" margin-left: 10px; margin-right: 10px; ">   
			<div class="col-lg-12" style=" margin-top: 10px;  "  align="left">  


			<font size="3px" style=" font-size: 16px; " color="#000">  
 

			<script> 
			function 
			Canceldatabill3<?php echo $loop; ?>( ) { 
				var save_key = document.getElementById("bill_no").value; 
				var statusbill = document.getElementById("statusbill2<?php echo $loop; ?>").value; 
				var savebill_no = document.getElementById("savebill_no<?php echo $loop; ?>").value; 
				var passportadmin = "";


					////document.getElementById("passportadmin<?php echo $loop; ?>").value = "";

					check_status_save = ""+statusbill;  
				  
					if(check_status_save == "ไม่มีการตอบรับ"){

					document.getElementById("txtshowdatathree3<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave3<?php echo $loop; ?>").style.background = "#FF8C00";

					} else if(check_status_save == "ตอบรับแล้ว"){ 
					document.getElementById("txtshowdatathree3<?php echo $loop; ?>").innerHTML = ""+check_status_save; 
					document.getElementById("btnsave3<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} else { 
					document.getElementById("txtshowdatathree3<?php echo $loop; ?>").innerHTML = " ไม่มีการตอบรับ "; 
					document.getElementById("btnsave3<?php echo $loop; ?>").style.background = "#FF0000"; 
						
					} 


				var jsonString = ""; 
				$.ajax({
				type: "POST",
				url: "save_tanai_status3.php?status="+check_status_save+"&bill_no="+save_key+"&roundata="+savebill_no,
				contentType: 'application/json',
				data: jsonString,
				success: function(result) {
				//alert(result);
				}
				});

 

				 document.getElementById("closepop3<?php echo $loop; ?>").click(); 
					reloadstaff();

			}

			</script> 

			<div class="col-lg-12" style="margin-top: 25px; <?php echo $hdd; ?>  " align="center" id="hddbtn<?php echo $loop; ?>"   >    


				<div class="col-md-12" style="  "  > 


					 <font class="serif" size="3px" color="black" for="address"  style="font-size: 15px;"> <b>  สถานะเอกสาร    </b>  </font> 

					 <select class="form-control  " id="statusbill3<?php echo $loop; ?>" name="statusbill3<?php echo $loop; ?>" required style=" width: 100%; color: #000; border: 1px solid #CACACA; height: 40px;  border-radius: 10px; background-color: #FFF; box-shadow: none;"   >  

						<?php 
						$sql = "SELECT * FROM drio_tanai3 where name = '".$tanaistatus3."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{  

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>   
						<?php 
						$sql = "SELECT * FROM drio_tanai3 where name != '".$tanaistatus3."'  order by pk asc  "; 
						$query = mysqli_query($objCon,$sql);
						while($objResult = mysqli_fetch_array($query))
						{   

						?>
						<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
						<?php  
						}
						?>    
						</select>  

				</div>  

				<div class="col-lg-12" style="  "  >   
				  <div class="form-group">     

				  <button type="button" class="btn btn-primary" style="background-color: #000; border-radius: 5px; width: 100%; height: 40px; border-color: #000; margin-top: 15px; "  onClick='Canceldatabill3<?php echo $loop; ?>()'  > <font color="#FFF" size="2px" class="serif1" >    ยืนยันทำรายการ   </font> </button> 


				 </div> 
				 </div>



			 </div>

			<div style=" margin-top: 20px; " > &nbsp; </div>  


			</font>  
			</div>
			</div>
			</center>
			</div>
		</div>
		</div> 
	 </td> 	
   
	 
	 <td style=" border-left: 0px solid #F2F2F2; " height="45px">
	 <div align="center" style=" margin-top: 5px; "  id="showround3<?php echo $loop; ?>"  >  
	 <font size="3px" color="Black" style=" font-size: 13px; " class="serif" >  <?php 
		  
		  if(!empty($tanaistatus3_date)){
			   echo $name_customer3; 
			   echo " &nbsp;  "; 
			   echo DateThai($tanaistatus3_date)." ".DateThai2($tanaistatus3_date); 
			   echo " &nbsp;  ";  
			   echo $tanaistatus3_time; 
		  }
		   
		 ?>   </font>
	 </div></td>
	   
	   
	   <td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 

		<a href="printbill.php?bill_no=<?php echo $bill_no; ?>" target="_blank" class="  btn-sm " style="background-color: #FFF; border-radius: 5px;  border-color: #F77369; border: 1px solid  #F77369;   "  >
		<font size="3px" color="#F77369" style=" font-size: 13px; " > 
		ดูข้อมูลสัญญา   
		</font>  
		</a> 

		</font></div></td>
						
	 </tr>    
	<?php } ?>	 
</tbody> 			 
</table> 			 
 
 		  
<hr style=" border: 1px dashed #383A44; "> 
<div   class="col-lg-12"  align="left" style=" margin-top: 25px; "   >  </div>
	
	
			 
<input type="hidden" id="bilsave" name="bilsave" value="<?php echo $bill_no; ?>">

 <script> 
	function 
	savestatustnai1() { 
	var save_key = document.getElementById("bilsave").value; 
		 
	var tanai_status1 = document.getElementById("tanai_status1").value;  
	var tanai_status2 = document.getElementById("tanai_status2").value;  
	var tanai_status3 = document.getElementById("tanai_status3_note").value;  

 
	var jsonString = ""; 
	$.ajax({
	type: "POST",
	url: "save_tanai_notedata.php?bill_no="+save_key+"&tanai_status1="+tanai_status1+"&tanai_status2="+tanai_status2+"&tanai_status3="+tanai_status3,
	contentType: 'application/json',
	data: jsonString,
	success: function(result) {
	//alert(result);
	}
	});

 
}

	function 
	savestatustnai2() { 
		 var save_key = document.getElementById("bilsave").value;  
		 
		var tanai_status3 =  document.getElementById("note3").value;;  

		alert(" บันทึกสำเร็จแล้ว ");
 	//////	document.getElementById("showtxt").innerHTML = "save_tanai_notedata2.php?bill_no="+save_key+"&tanai_status3="+tanai_status3;
		 
		var jsonString = ""; 
		$.ajax({
		type: "POST",
		url: "save_tanai_notedata2.php?bill_no="+save_key+"&tanai_status3="+tanai_status3,
		contentType: 'application/json',
		data: jsonString,
		success: function(result) {
		//alert(result);
		}
		});
		
		
	}
	
</script>	 
				 
	
<div   class="row"  align="left"   > 
<div   class="col-lg-4"  align="left"   >  


<div   class="col-lg-12"  align="left"   > 
<table width="100%">
<tr> 
<td width="100%"> 
<font color="black" size="3px" class="serif">  รูปแบบดำเนินคดี </font>

<select class="form-control myselect" id="tanai_status1" name="tanai_status1" required style=" width: 100%;" onChange="savestatustnai1()"     > 
<?php if(empty($tanai_status1)){ ?>
<option value="">  รูปแบบดำเนินคดี </option>
<?php } ?>

<?php 
$sql = "SELECT * FROM drop_tanai_status1 where name = '".$tanai_status1."'  order by pk asc  "; 
$query = mysqli_query($objCon,$sql);
while($objResult = mysqli_fetch_array($query))
{  
 

?>
<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
<?php  
}
?>      
</select>
<script type="text/javascript">
$(".myselect").select2();
</script> 


</td>  
</tr>
</table>  
</div>	
		 
		 		 
<div   class="col-lg-12"  align="left" style=" margin-top: 25px; "   >  </div>
		 						
<div   class="col-lg-12"  align="left"   > 
<table width="100%">
<tr> 
<td width="100%"> 
<font color="black" size="3px" class="serif">  สถานะของคดี </font>

<select class="form-control myselect" id="tanai_status2" name="tanai_status2" required style=" width: 100%;" onChange="savestatustnai1()"     > 
<?php if(empty($tanai_status2)){ ?>
<option value="">  สถานะของคดี </option>
<?php } ?>

<?php 
$sql = "SELECT * FROM drop_tanai_status2 where name = '".$tanai_status2."'  order by pk asc  "; 
$query = mysqli_query($objCon,$sql);
while($objResult = mysqli_fetch_array($query))
{  
 

?>
<option value="<?php echo $objResult["name"]; ?>">  <?php echo $objResult["name"]; ?></option> 
<?php  
}
?>      
</select>
<script type="text/javascript">
$(".myselect").select2();
</script> 


</td>  
</tr>
</table>  
</div>			



</div>		
<div   class="col-lg-2"  align="left"   >  	
  
 <div class="col-md-12"  > 

<div class="form-group"> 
<img src="images/upload.png" style=" width: 100%; "    data-toggle="modal" data-target="#uploadimagedata1"  >  
</div> 
 
<script type="text/javascript">
$( document ).ready(function() {   
Loadimagedatauploadshow();
});



function Loadimagedatauploadshow(dataload)
{       
var bill_no = document.getElementById("bill_no").value;  
var sendata = dataload; 

var i = 1; 
for(i = 1; i <= 1; i++){

$.ajax({
	type: "GET",
	url: "showdata1_re.php?sendata="+sendata+"&bill_no="+bill_no,
	success: function(result) {
		$('#showimage'+sendata).html(result); 

	}
});	 
} 
}


function Loadimagedatauploadshow()
{      
var bill_no = document.getElementById("bill_no").value; 

var sendata = "1";
$.ajax({
type: "GET",
url: "showdata1_re.php?sendata="+sendata+"&bill_no="+bill_no,
success: function(result) {
	$('#showimage1').html(result); 

}
});	


} 	

</script>	



<div class="modal fade" id="uploadimagedata1" tabindex="-1" role="dialog" aria-labelledby="uploadimagedata" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="smallmodalimage"> อัพโหลดภาพ </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="col-lg-12" align="left">


<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="upload_image2/css/style.css">  
<script src="upload_image2/js/app.js"></script> 

<ul id="media-list" class="clearfix"> 

<div id="showimage1">

</div>


	<li class="myupload"> 
		<span><i class="fa fa-plus" aria-hidden="true"></i>
		<input type="file"  click-type="type2"    name="picupload[]" id="picupload"  multiple="multiple" onchange="readURL(this);"     ></span>
	</li> 

	<script type="text/javascript"> 
	function readURL(input) { 
		if (input.files && input.files[0]) {
			var reader = new FileReader(); 
			var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object 
			var files = $('#picupload')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

			// เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
			if(files.length > 0 ){


				var enddata = files.length;
				var i = 0; 
				for(i == 0; i <= enddata; i++){
					/// alert( " AS " + i );

				var sendata = "1";
				var bill_no = document.getElementById("bill_no").value; 
				fd.append('file',files[i-1]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 
					 $.ajax({
						url:'upload_img2_re.php?sendata='+sendata+"&bill_no="+bill_no, //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
						type:'post',
						data:fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
						contentType: false,
						processData: false,
						success:function(){ //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้



						}

					});

				Loadimagedatauploadshow(sendata);

				}

			}else{
				alert("Please select a file.");
			}

			var loop = 1;
			for(loop = 1; loop <= 5; loop++){ 
			var sendata = "1"; 
				Loadimagedatauploadshow(sendata); 
			}

		}
	}  
	</script>	
</ul>    


</div> 
</div> 
</div>
</div>
</div> 


</div>
						   
						   
</div>			
</div>			
				
<div   class="col-lg-12"  align="left" style=" margin-top: 25px; "   >  </div>
		 
		 
						
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        
<div   class="col-lg-8"  align="left"   > 
<table width="100%">
<tr> 
<td width="40%"> 
<font color="black" size="3px" class="serif" id="showtxt">   หมายเหตุ </font>
  
  <div style=" margin-top: 5px; "></div>
  
  <input type="text" id="note3" value="<?php echo $tanai_status3; ?>" style=" display: none; ">

  <textarea class="form-control" id="tanai_status3_note" name="tanai_status3_note" rows="2" onKeyUp="savestatustnai1()" ><?php echo $tanai_status3; ?></textarea>

	<script>
		CKEDITOR.replace('tanai_status3_note');
		function CKupdate() {
		 for (instance in CKEDITOR.instances)
		 CKEDITOR.instances[instance].updateElement(); 
	 }
	var e =CKEDITOR.instances['tanai_status3_note']; e.on('key',function() {
            var value = e.getData();
           document.getElementById("note3").value = value;
        });
	</script>
  

</td>     							
</tr>
</table>  
</div>			
				
<div class="col-lg-12" style="  "  >   
<div class="form-group">     

<button type="button" class="btn btn-primary" style="background-color: #000; border-radius: 5px; width: 150px; height: 40px; border-color: #000; margin-top: 15px; "  onClick='savestatustnai2()'  > <font color="#FFF" size="2px" class="serif1" >  บันทึก   </font> </button> 


</div> 
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
	
<?php
	 function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	 function TimeDiff($strTime1,$strTime2)
	 {
				return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 }
	 function DateTimeDiff($strDateTime1,$strDateTime2)
	 {
				return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	 } 
?>
 
 
 
 
 
 
 
 
 
 
 
  