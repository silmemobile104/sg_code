<?php
session_start();
include('../database.php');
    
    $html = '';

	$searchname = date('d/m')."/".(date('Y'));
	$cut = explode("/",$searchname);
	$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
	$daystart_load = date("d-m-Y", strtotime($date_income)); 
	 


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
	 
	$totalcal1= 0;
	$addcode = "";
	if(empty($_GET["searchname"])){

	}else{
		$addcode = " and  b.name like '%".$searchname."%' ";
	}
	$addcode2 = ""; 
	if(empty($_GET["searchname2"])){
		 
	}else{
		$addcode2 = " and major = '".$searchname2."'  ";
	} 

							$totalcal1= 0;
							$totalcal2= 0;
							$totalcal3 = 0;
							$totalcal4 = 0;
							$totalcal5 = 0;
							$endback= 0;
							$sql2 = " SELECT a.*, b.name FROM list_order  a
							Inner Join customer b On   a.customer = b.pk
							where a.bill_no != ''   and a.onoff_copy = 'NPL' ".$addcode.$addcode2."  
							order by a.pk asc ";   

							$query2 = mysqli_query($con,$sql2); 
							while($objResult2 = mysqli_fetch_array($query2))
							{      
								$totalprice1 = $objResult2["money"]; 
								$totalprice2 = $objResult2["daytotal"]; 
								$totalprice3 = $objResult2["dayprice"]; 
								$totalprice4 = $objResult2["startdate"]; 
								$totalprice5 = $objResult2["endate"]; 
											
								$priceorder = $objResult2["priceorder"];    
								$c_price_back = $objResult2["c_price_back"];  
								$moneydown = $objResult2["moneydown"];    
									
							 
  
								if($objResult2["typenpl1"] == "คืนเครื่อง"){
									$totalcal1++;
								}
								if($objResult2["typenpl1"] == "ปิดยอด"){
									$totalcal2++;
								}
								if($objResult2["npl_status"] == "ดำเนินการ"){
									$totalcal3++;
								}
								if($objResult2["npl_status"] == "จำหน่ายแล้ว"){
									$totalcal4++;
								}
								if($objResult2["npl_status"] == ""){
									$totalcal5++;
								}
							}
?> 
   						
   							
                            
							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata="    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  คลิก <?php echo number_format(0+$totalcal5); ?>  </font> 
							</button> 
							</a>
							
   						
   						
    						<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=คืนเครื่อง"    > 
							<button type="button" class="btn btn-primary" style="background-color: #B22222; border-radius: 5px; height: 40px; border: 1px solid  #B22222;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  คืนเครื่อง <?php echo number_format(0+$totalcal1); ?>  </font> 
							</button> 
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=ปิดยอด"    > 
							<button type="button" class="btn btn-primary" style="background-color: #006400; border-radius: 5px; height: 40px; border: 1px solid  #006400;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  ปิดยอด <?php echo number_format(0+$totalcal2); ?>    </font> 
							</button> 
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=กำลังดำเนินการ"    > 
							<button type="button" class="btn btn-primary" style="background-color: #FF8C00; border-radius: 5px; height: 40px; border: 1px solid  #FF8C00;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  กำลังดำเนินการ <?php echo number_format(0+$totalcal3); ?>    </font> 
							</button>
							</a>

							<a href="npl_order.php?searchname2=<?php echo $searchname2; ?>&searchname=<?php echo $searchname; ?>&typedata=จำหน่ายแล้ว"    > 
							<button type="button" class="btn btn-primary" style="background-color: #4B0082; border-radius: 5px; height: 40px; border: 1px solid  #4B0082;  margin-top: 15px;  "> 
							<font color="#FFF" size="2px" class="serif1" >  จำหน่ายแล้ว <?php echo number_format(0+$totalcal4); ?>    </font> 
							</button>
							</a>				

 



 