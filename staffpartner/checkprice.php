<?php 
session_start();
$_SESSION["load"] = "1";
include('header.php'); 

 	 $codepro = "";
	 $name = "";
	 $address = "";
	 $telphone = "";



	$typedata = "ราคาดาวน์ไอโฟน";
	if(empty($_GET["typedata"])){
		
	}else{
		$typedata = $_GET["typedata"];
	}
 

	 
?> 
			<link href="../select2.min.css" rel="stylesheet" />
			<script src="../select2.min.js"></script>  
  			
        
       <!-- page content -->
        	<div class="right_col" role="main" style="background-color: #F5F5F7; " >
           
             
             <div class=" col-lg-12 " style="  " align="left" >
             <font color="#FFFFFF" size="3px" class="serif2"  >
             <div style="margin-top: 1px;" > 
                     <font size="4px" color="#000000">  เช็คราคาดาวน์   </font>  
                     <br> 
                     <font size="2px" color="#000000">  หน้าเเรก > เช็คราคาดาวน์   </font>   
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
                     <font size="4px" color="#000000">  เช็คราคาดาวน์   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                            <?php   
							$sql = "SELECT * FROM startpricedata Where  statusdata = '".$typedata."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$downpercent = $objResult["downpercent"];   
								$data1 = $objResult["data1"];   
								$data2 = $objResult["data2"];   
								$data3 = $objResult["data3"];   
								$data4 = $objResult["data4"];   
								$data5 = $objResult["data5"];   
								$data6 = $objResult["data6"];   
								$data7 = $objResult["data7"];   
								$data8 = $objResult["data8"];   
								$data9 = $objResult["data9"];   

							} 
					
					
							$btn1 = "  background-color: #323232; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px; ";
					
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							if($typedata == "ราคาดาวน์ไอโฟน"){

							$btn1 = "  background-color: #323232; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px; ";
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							} else if($typedata == "ราคาแอนดอรย์"){

							$btn2 = "  background-color: #323232; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px;  ";
							$btn1 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323232; margin-top: 20px; ";
							$txt2 = " #FFF ";
							$txt1 = " #000 ";
							}
					  ?>
                        
						  
                  		  <div class="col-md-12">
                  		  	<a href="checkprice.php?typedata=ราคาดาวน์ไอโฟน"> 
							 <button type="button" class="btn btn-primary" style=" <?php echo $btn1; ?>  "  data-toggle="modal" data-target="#smallmodal" > <font color="<?php echo $txt1; ?>" size="2px" class="serif1" >    IOS   </font> </button> 
							</a>   
                  		  	<a href="checkprice.php?typedata=ราคาแอนดอรย์"> 
							 <button type="button" class="btn btn-primary" style="  <?php echo $btn2; ?>  "  data-toggle="modal" data-target="#smallmodal" > <font color="<?php echo $txt2; ?>" size="2px" class="serif1" >    Android    </font> </button> 
							</a>  
                  		  </div> 
                          
                  		 <div class="col-lg-12"  align="left" style="margin-top: 5px; "  >  
                          <bR>   
						 </div>
                     
                    
                </div>
              </div>
            </div> 
            
             <div class=" col-lg-12 " style="    " align="left" >
			  <font color="#FFFFFF" size="3px" class="serif2"  >
			  <div style="margin-top: 6px;" > 
				 <font size="4px" color="#000000">  ตารางเช็คเรทผ่อน iphone / ipad     </font>   
			  </div> 
			  </font> 
			  </div>
            
            
            <div class="row"  >
              <div class=" col-lg-12 "  style="margin-top: 10px;"  > 
                <div class="x_panel"  style="background-color: #FFFFFF;  border-radius: 10px; " > 
                 
                  <div class=" col-lg-12 " style="background-color: #FFF; height: 38px; " align="left" >
                  <font color="#FFFFFF" size="3px" class="serif2"  >
                  <div style="margin-top: 6px;" > 
                     <font size="4px" color="#000000">  เช็คราคาดาวน์   </font>   
                  </div> 
                  </font> 
                  </div>
                 
                      <?php   
							$sql = "SELECT * FROM startpricedata Where  statusdata = '".$typedata."' ";  
							$query = mysqli_query($objCon,$sql); 
							while($objResult = mysqli_fetch_array($query))
							{  
								$downpercent = $objResult["downpercent"];   
								$data1 = $objResult["data1"];   
								$data2 = $objResult["data2"];   
								$data3 = $objResult["data3"];   
								$data4 = $objResult["data4"];   
								$data5 = $objResult["data5"];   
								$data6 = $objResult["data6"];   
								$data7 = $objResult["data7"];   
								$data8 = $objResult["data8"];   
								$data9 = $objResult["data9"];   

							} 
					
					
							$btn1 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
					
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							if($typedata == "ราคาดาวน์ไอโฟน"){

							$btn1 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn2 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
							$txt1 = " #FFF ";
							$txt2 = " #000 ";
							} else if($typedata == "ราคาแอนดอรย์"){

							$btn2 = "  background-color: #323D55; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px;  ";
							$btn1 = "  background-color: #FFF; border-radius: 5px; width: 130px; height: 40px; border-color: #323D55; margin-top: 20px; ";
							$txt2 = " #FFF ";
							$txt1 = " #000 ";
							}
					  ?>
                         
                         
                          <div class=" col-lg-12 " style="background-color: #FFF;  " align="center" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  ตารางเช็คเรทผ่อน iPhone / iPad ใช้คำนวณเฉพาะ มือ 1   </font>   
						  </div> 
						  </font> 
						  </div>
                         
                          <div class=" col-lg-12 " style="background-color: #FFF;  " align="center" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  ใส่ราคาขายช่อง " ราคาขาย " ได้เลยครับ ระบบจะคำนวณเรท ให้เองครับ  </font>   
						  </div> 
						  </font> 
						  </div>
                   		    
                   		    
                  		  <div class=" col-lg-12 " style="background-color: #FFF;   " align="left" >
                          <div class=" col-lg-3 " style="background-color: #FFF;  " align="center" >
						  </div>
                          <div class=" col-lg-12 " style="background-color: #FFF;  " align="center" >
                          
                          <div class=" col-lg-12 " style="background-color: #FFF;  " align="center" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  เช็คเรทผ่อน </font>   
						  </div> 
						  </font> 
						  </div>
                         
                          <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >   
						  <table id="key_product"  class=" table  table-borders  tablemobile  " border="0" style=" width: 100%; "   > 
						  <thead> 
						  <tr> 
						  <th width="2%"  bgcolor="#E2E7EC" height="35px;"   style=" border: 0px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย    </font></div></th>  
						  <th width="2%"   bgcolor="#E2E7EC" height="35px;"  style=" border: 0px solid #000; "  >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์    </font></div></th>  
						  <th width="2%"  bgcolor="#E2E7EC" height="35px;"   style=" border: 0px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผ่อน 3 เดือน     </font></div></th>  
						  <th width="2%"   bgcolor="#E2E7EC" height="35px;"  style=" border: 0px solid #000; "  >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผ่อน 6 เดือน     </font></div></th>
						  <th width="2%"  bgcolor="#E2E7EC" height="35px;"   style=" border: 0px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ผ่อน 10 เดือน    </font></div></th>  
						  <th width="2%"  bgcolor="#E2E7EC" height="35px;"   style=" border: 0px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ผ่อน 12 เดือน    </font></div></th>        
						  </tr>
						  </thead> 
						  <tbody> 
                          <input type="hidden" id="keydata1" value="<?php echo $downpercent; ?>">	
						  
						  <input type="hidden" id="getdata1" value="<?php echo $data1; ?>">	
						  <input type="hidden" id="getdata2" value="<?php echo $data2; ?>">	
						  <input type="hidden" id="getdata3" value="<?php echo $data3; ?>">	
						  	
						  <input type="hidden" id="getdata4" value="<?php echo $data4; ?>">	
						  <input type="hidden" id="getdata5" value="<?php echo $data5; ?>">	
						  <input type="hidden" id="getdata6" value="<?php echo $data6; ?>">	
						  
						  	
						  <input type="hidden" id="getdata7" value="<?php echo $data7; ?>">	
						  <input type="hidden" id="getdata8" value="<?php echo $data8; ?>">	
						  <input type="hidden" id="getdata9" value="<?php echo $data9; ?>">	
                          <?php for($loop = 1; $loop <= 1; $loop++){ ?> 
						  <tr >  
                            
						  <td style=" border-left: 0px solid #F2F2F2;  border: 0px solid #000;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
						  
							
						  <input type="text" name="keydataone<?php echo $loop; ?>" id="keydataone<?php echo $loop ?>"      style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="Bankdata<?php echo $loop; ?>()"    autocomplete="off"     >
									 
						 	<script language="javascript"> 

								function Bankdata<?php echo $loop; ?>()
								{  
									 var int1 = document.getElementById("keydataone<?php echo $loop; ?>").value;   /// บิล    
									 
									 var keydata1 = document.getElementById("keydata1").value;   /// บิล      
									 var getdata1 = document.getElementById("getdata1").value;   /// บิล      
									 var getdata2 = document.getElementById("getdata2").value;   /// บิล       
									 var getdata4 = document.getElementById("getdata4").value;   /// บิล      
									 var getdata5 = document.getElementById("getdata5").value;   /// บิล      
									 var getdata7 = document.getElementById("getdata7").value;   /// บิล      
									 var getdata8 = document.getElementById("getdata8").value;   /// บิล     
									
									 
									 var percent1 = document.getElementById("getdata3").value;   /// บิล     
									 var percent2 = document.getElementById("getdata6").value;   /// บิล     
									 var percent3 = document.getElementById("getdata9").value;   /// บิล     
  
									 if(int1 == ""){
										int1 = "0";
									 }
									 if(keydata1 == ""){
										keydata1 = "0";
									 }
									 if(getdata1 == ""){
										getdata1 = "0";
									 }
									 if(getdata2 == ""){
										getdata2 = "0";
									 }
									 if(getdata4 == ""){
										getdata4 = "0";
									 }
									 if(getdata5 == ""){
										getdata5 = "0";
									 }
									 if(getdata7 == ""){
										getdata7 = "0";
									 }
									 if(getdata8 == ""){
										getdata8 = "0";
									 }
									 if(percent1 == ""){
										percent1 = "0";
									 }
									 if(percent2 == ""){
										percent2 = "0";
									 }
									 if(percent3 == ""){
										percent3 = "0";
									 }
									 var startprice = parseFloat(int1);	 //// เงิน ช่องรับเข้า ธนาคาร 
									 var n1 = parseFloat(keydata1);	 //// เงิน ช่องรับเข้า ธนาคาร 
									 var n2 = parseFloat(getdata1);	 //// เงิน คงเหลือในบัญชี  
									 var n3 = parseFloat(getdata2);	 //// เงิน ชำรเก่า 
									 var n4 = parseFloat(getdata4);	 //// เงิน ชำรเก่า 
									 var n5 = parseFloat(getdata5);	 //// เงิน ชำรเก่า 
									 var n6 = parseFloat(getdata7);	 //// เงิน ชำรเก่า 
									 var n7 = parseFloat(getdata8);	 //// เงิน ชำรเก่า 
									
									
									 var per1 = parseFloat(percent1);	 //// เงิน ชำรเก่า 
									 var per2 = parseFloat(percent2);	 //// เงิน ชำรเก่า 
									 var per3 = parseFloat(percent3);	 //// เงิน ชำรเก่า 

									 
									 if(int1 == 0){
										
									 var intshow1 =  document.getElementById('showone<?php echo $loop; ?>');  
									 var intshow2 =  document.getElementById('showtwo<?php echo $loop; ?>');  
									 var intshow3 =  document.getElementById('showthree<?php echo $loop; ?>');  
									 var intshow4 =  document.getElementById('showfour<?php echo $loop; ?>');  
									 var intshow5 =  document.getElementById('showfive<?php echo $loop; ?>');  
									 intshow1.innerHTML = "";
									 intshow2.innerHTML = "";
									 intshow3.innerHTML = "";
									 intshow4.innerHTML = ""; 
									 intshow5.innerHTML = ""; 
										 
									 }else{
										 
									 var calper1 = (per1/100);
									 var calper2 = (per2/100);
									 var calper3 = (per3/100);
										 
										 
									 var calcutor1 = (keydata1/100);
									 var calcutor2 = startprice * calcutor1 ;
									 var calcutor3 = startprice - calcutor2 ;
										 
									 var addon1 = ( calcutor3 * n2 ) * calper1 ;
									 var addon2 = ( calcutor3 * n4 ) * calper2 ;
									 var addon3 = ( calcutor3 * n6 ) * calper3 ;
										
									 var calcutor4 = (( calcutor3 * n2 )+addon1) / n3  ;
										  
									 var calcutor5 =  (( calcutor3 * n4 )+addon2)  / n5 ;
										 
									 var calcutor6 =   (( calcutor3 * n6 )+addon3)  / n7 ;
										 
										 
									
									 var calcutornew1 = 1.4; 
									 var calcutornew3 = ( startprice - calcutor2 ) * 1.4 ;	 
									 var calcutornew4 = ( calcutornew3 +  ( startprice - calcutor2 )  ) ;	  
										 
										 
									 var calcutor7 =   calcutornew4  / 12 ;
										 
									 var intshow1 =  document.getElementById('showone<?php echo $loop; ?>');  
									 var intshow2 =  document.getElementById('showtwo<?php echo $loop; ?>');  
									 var intshow3 =  document.getElementById('showthree<?php echo $loop; ?>');  
									 var intshow4 =  document.getElementById('showfour<?php echo $loop; ?>'); 
									 var intshow5 =  document.getElementById('showfive<?php echo $loop; ?>'); 
										 
									 intshow1.innerHTML = numberWithCommas2(calcutor2.toFixed(0)); 
									 intshow2.innerHTML = numberWithCommas2(calcutor4.toFixed(0)); 
									 intshow3.innerHTML = numberWithCommas2(calcutor5.toFixed(0)); 
									 intshow4.innerHTML = numberWithCommas2(calcutor6.toFixed(0)); 
									 intshow5.innerHTML = numberWithCommas2(calcutor7.toFixed(0)); 
										 
										 
									 }
 

								 }

						   </script>
									   
						  </font></div></td> 
						  <td style=" background-color: #FFF;  border: 0px solid #000;">
						   <div align="center" style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  " >
						   
						   <div align="center" style=" margin-top: 10px;">
						   <font size="3px" color="Black" style=" font-size: 15px; " id="showone<?php echo $loop; ?>" > </font>
						  </div>
						  
						  </div>
						  </td> 
						  <td style="background-color: #FFF;   border: 0px solid #000;"> 
						  
						  
						   <div align="center" style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  " >
						   
						   <div align="center" style=" margin-top: 10px;">
						   <font size="3px" color="Black" style=" font-size: 15px; " id="showtwo<?php echo $loop; ?>" > </font>
						  </div>
						  
						  </div>
						  
						  </td> 
						  <td style=" background-color: #FFF;  border: 0px solid #000; "> 
						   
						   <div align="center" style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  " >
						   
						   <div align="center" style=" margin-top: 10px;">
						   <font size="3px" color="Black" style=" font-size: 15px; " id="showthree<?php echo $loop; ?>" > </font>
						  </div>
						  
						  </div>
						  
						  </td> 
						  <td style=" background-color: #FFF;  border: 0px solid #000; "> 
						  
						   <div align="center" style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  " >
						   
						   <div align="center" style=" margin-top: 10px;">
						   <font size="3px" color="Black" style=" font-size: 15px; " id="showfour<?php echo $loop; ?>" > </font>
						  </div>
						  
						  </div>
									  
						  </td> 
						  <td style=" background-color: #FFF;  border: 0px solid #000; "> 
						  
						   <div align="center" style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #323232; border-radius: 5px; height: 45px;   background-color: #FFF; margin-top: -5px;  " >
						   
						   <div align="center" style=" margin-top: 10px;">
						   <font size="3px" color="Black" style=" font-size: 15px; " id="showfive<?php echo $loop; ?>" > </font>
						  </div>
						  
						  </div>
									  
						  </td> 
										  
						  </tr>
                          <?php } ?> 
						  </tbody>
						  
						  </table>
						  </div>
						  </div>
						  
						   
                          
                          <div class=" col-lg-6 " style="background-color: #FFF; display: none; " align="center" >
                          
                          <div class=" col-lg-12 " style="background-color: #FFF;  " align="center" >
						  <font color="#FFFFFF" size="3px" class="serif2"  >
						  <div style="margin-top: 6px;" > 
							 <font size="4px" color="#000000">  เช็คเรทผ่อน </font>   
						  </div> 
						  </font> 
						  </div>
						  
						  <div class="col-lg-12"  align="left" style="margin-top: 15px; "  >   
						  <table id="key_product"  class=" table  table-borders  tablemobile  " border="1" style=" width: 100%; "   > 
						  <thead> 
						  <tr>
						  <th width="2%"   bgcolor="#FFF" height="35px;" style=" border: 1px solid #000; "   >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  กรอกข้อมูล    </font></div></th>  
						  <th width="2%"  bgcolor="#FFF" height="35px;"   style=" border: 1px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาขาย    </font></div></th>  
						  <th width="2%"   bgcolor="#FFF" height="35px;"  style=" border: 1px solid #000; "  >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ราคาดาวน์    </font></div></th>  
						  <th width="2%"  bgcolor="#FFF" height="35px;"   style=" border: 1px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผ่อน 3 เดือน     </font></div></th>  
						  <th width="2%"   bgcolor="#FFF" height="35px;"  style=" border: 1px solid #000; "  >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  ผ่อน 6 เดือน     </font></div></th>
						  <th width="2%"  bgcolor="#FFF" height="35px;"   style=" border: 1px solid #000; " >
						  <div align="center"> 
						  <font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   ผ่อน 10 เดือน    </font></div></th>        
						  </tr>
						  </thead> 
						  <tbody>  
                          <input type="hidden" id="skeydata1" value="<?php echo $downpercent; ?>">	
						  
						  <input type="hidden" id="sgetdata1" value="<?php echo $data1; ?>">	
						  <input type="hidden" id="sgetdata2" value="<?php echo $data2; ?>">	
						  <input type="hidden" id="sgetdata3" value="<?php echo $data3; ?>">	
						  	
						  <input type="hidden" id="sgetdata4" value="<?php echo $data4; ?>">	
						  <input type="hidden" id="sgetdata5" value="<?php echo $data5; ?>">	
						  <input type="hidden" id="sgetdata6" value="<?php echo $data6; ?>">	
						  
						  	
						  <input type="hidden" id="sgetdata7" value="<?php echo $data7; ?>">	
						  <input type="hidden" id="sgetdata8" value="<?php echo $data8; ?>">	
						  <input type="hidden" id="sgetdata9" value="<?php echo $data9; ?>">	
                          <?php for($loop = 1; $loop <= 1; $loop++){ ?> 
						  <tr > 
						  <td style=" background-color: #FFF; border: 1px solid #000; " height="30px;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <font size="3px" color="Black" style=" font-size: 13px; "   >
							<img src="images/pngegg.png" style=" width: 25px; ">     
						  </font></div></td> 
                            
						  <td style=" border-left: 0px solid #F2F2F2;  border: 1px solid #000;"><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > 
						  
							
						  <input type="text" name="skeydataone<?php echo $loop; ?>" id="skeydataone<?php echo $loop ?>"      style=" font-size: 15px; text-align: center;  width: 100%; border: 1px solid #FFF; border-radius: 5px; height: 30px;   background-color: #FFF; margin-top: -5px;  "  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"  onKeyUp="sBankdata<?php echo $loop; ?>()"    autocomplete="off"     >
									 
						 	 <script language="javascript"> 

								function sBankdata<?php echo $loop; ?>()
								{  
									 var int1 = document.getElementById("skeydataone<?php echo $loop; ?>").value;   /// บิล    
									 
									 var keydata1 = document.getElementById("skeydata1").value;   /// บิล      
									 var getdata1 = document.getElementById("sgetdata1").value;   /// บิล      
									 var getdata2 = document.getElementById("sgetdata2").value;   /// บิล       
									 var getdata4 = document.getElementById("sgetdata4").value;   /// บิล      
									 var getdata5 = document.getElementById("sgetdata5").value;   /// บิล      
									 var getdata7 = document.getElementById("sgetdata7").value;   /// บิล      
									 var getdata8 = document.getElementById("sgetdata8").value;   /// บิล     
									
									 
									 var percent1 = document.getElementById("sgetdata3").value;   /// บิล     
									 var percent2 = document.getElementById("sgetdata6").value;   /// บิล     
									 var percent3 = document.getElementById("sgetdata9").value;   /// บิล     
  
									 if(int1 == ""){
										int1 = "0";
									 }
									 if(keydata1 == ""){
										keydata1 = "0";
									 }
									 if(getdata1 == ""){
										getdata1 = "0";
									 }
									 if(getdata2 == ""){
										getdata2 = "0";
									 }
									 if(getdata4 == ""){
										getdata4 = "0";
									 }
									 if(getdata5 == ""){
										getdata5 = "0";
									 }
									 if(getdata7 == ""){
										getdata7 = "0";
									 }
									 if(getdata8 == ""){
										getdata8 = "0";
									 }
									 if(percent1 == ""){
										percent1 = "0";
									 }
									 if(percent2 == ""){
										percent2 = "0";
									 }
									 if(percent3 == ""){
										percent3 = "0";
									 }
									 var startprice = parseFloat(int1);	 //// เงิน ช่องรับเข้า ธนาคาร 
									 var n1 = parseFloat(keydata1);	 //// เงิน ช่องรับเข้า ธนาคาร 
									 var n2 = parseFloat(getdata1);	 //// เงิน คงเหลือในบัญชี  
									 var n3 = parseFloat(getdata2);	 //// เงิน ชำรเก่า 
									 var n4 = parseFloat(getdata4);	 //// เงิน ชำรเก่า 
									 var n5 = parseFloat(getdata5);	 //// เงิน ชำรเก่า 
									 var n6 = parseFloat(getdata7);	 //// เงิน ชำรเก่า 
									 var n7 = parseFloat(getdata8);	 //// เงิน ชำรเก่า 
									
									
									 var per1 = parseFloat(percent1);	 //// เงิน ชำรเก่า 
									 var per2 = parseFloat(percent2);	 //// เงิน ชำรเก่า 
									 var per3 = parseFloat(percent3);	 //// เงิน ชำรเก่า 

									 
									 if(int1 == 0){
										
									 var intshow1 =  document.getElementById('sshowone<?php echo $loop; ?>');  
									 var intshow2 =  document.getElementById('sshowtwo<?php echo $loop; ?>');  
									 var intshow3 =  document.getElementById('sshowthree<?php echo $loop; ?>');  
									 var intshow4 =  document.getElementById('sshowfour<?php echo $loop; ?>');  
									 intshow1.innerHTML = "";
									 intshow2.innerHTML = "";
									 intshow3.innerHTML = "";
									 intshow4.innerHTML = ""; 
										 
									 }else{
										 
									 var calper1 = (per1/100);
									 var calper2 = (per2/100);
									 var calper3 = (per3/100);
										 
										 
									 var calcutor1 = (keydata1/100);
									 var calcutor2 = startprice * calcutor1 ;
									 var calcutor3 = startprice - calcutor2 ;
										 
									 var addon1 = ( calcutor3 * n2 ) * calper1 ;
									 var addon2 = ( calcutor3 * n4 ) * calper2 ;
									 var addon3 = ( calcutor3 * n6 ) * calper3 ;
										
									 var calcutor4 = (( calcutor3 * n2 )+addon1) / n3  ;
										  
									 var calcutor5 =  (( calcutor3 * n4 )+addon2)  / n5 ;
										 
									 var calcutor6 =   (( calcutor3 * n6 )+addon3)  / n7 ;
										 
									 var intshow1 =  document.getElementById('sshowone<?php echo $loop; ?>');  
									 var intshow2 =  document.getElementById('sshowtwo<?php echo $loop; ?>');  
									 var intshow3 =  document.getElementById('sshowthree<?php echo $loop; ?>');  
									 var intshow4 =  document.getElementById('sshowfour<?php echo $loop; ?>'); 
										 
									 intshow1.innerHTML = numberWithCommas2(calcutor2.toFixed(0)); 
									 intshow2.innerHTML = numberWithCommas2(calcutor4.toFixed(0)); 
									 intshow3.innerHTML = numberWithCommas2(calcutor5.toFixed(0)); 
									 intshow4.innerHTML = numberWithCommas2(calcutor6.toFixed(0)); 
										 
										 
									 }
 

								 }

						   </script>
									   
						  </font></div></td> 
						  <td style=" background-color: #FF8C00;  border: 1px solid #000;"><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <font size="3px" color="Black" style=" font-size: 15px; " id="sshowone<?php echo $loop; ?>" >
							   
						  </font></div></td> 
						  <td style="background-color: #FF8C00;   border: 1px solid #000;"><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <font size="3px" color="Black" style=" font-size: 15px; " id="sshowtwo<?php echo $loop; ?>" >
							  
						  </font></div></td> 
						  <td style=" background-color: #FF8C00;  border: 1px solid #000; "><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <font size="3px" color="Black" style=" font-size: 15px; " id="sshowthree<?php echo $loop; ?>" >
							  
						  </font></div></td> 
						  <td style=" background-color: #FF8C00;  border: 1px solid #000; "><div align="center"><font size="3px" color="Black" style=" font-size: 15px; " > <font size="3px" color="Black" style=" font-size: 15px; " id="sshowfour<?php echo $loop; ?>" >
							  
						  </font></div></td> 
										  
						  </tr>
                          <?php } ?> 
						  </tbody>
						  
						  </table>
						  </div>
						  
						  
						  </div>
						  </div>
                          
                          
                          
                          
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


<script> 
function Commas(str)
{
	var parts = str.toString().replace("," ,"").split(".");
	parts[0] = parts[0].replace("," ,"").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	return parts.join(".");
}
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}
	function numberWithCommas2(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
</script>


<?php
include('footer2.php');
?>