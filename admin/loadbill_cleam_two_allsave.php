<?php 
session_start(); 
include('../database.php');
 
	 
	 
	$searchname = "";
	if(!empty($_GET["month"])){
		$searchname = $_GET["month"];
		 
	}  
	$searchname2 = "";
	if(!empty($_GET["year"])){
		$searchname2 = $_GET["year"];
		 
		
	} 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'";
		
	} 
	$major_store = "";
	if(!empty($_GET["major_store"])){
		$major_store = $_GET["major_store"];
		$major_store = " and a.sendata = '" . $_GET["major_store"] . "'";
		
	} 
 
										$i = 1;
										$total = 0;
										$totalprice1 = 0;
										$totalprice2 = 0;
										$totalprice3 = 0;
										$totalprice4 = 0; 
   
												
										$addcode = "";
										$addcode2 = "";
										   
 
										$contactstart = date("Y-m-d", strtotime($daystart_load));  
										$checkend = date("Y-m-d", strtotime($daystart_load2)); 
 
										$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
									
										$sql2 = " SELECT a.*,  b.name FROM mobile_restore  a 
											Inner Join store_cleam b On   a.sendata = b.pk
											 
											where a.bill_no != ''   and a.chk = ''     and a.statuspayment = 'ชำระเงินแล้ว'  
											".$addcode.$addcode2.$major.$major_store."  
											order by a.pk desc   ";  
									
										/// echo $sql2;
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											
										
											$menuid = $objResult2["pk"]; 
											$select_chk = "OFF";
											$sql_c = "SELECT * FROM list_chk_cleam where pkselect = '".$objResult2["pk"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c); 
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
													$select_chk =  "ON";
											}
										 	 	
											if($select_chk == "OFF"){
											 	$strSQL = "SELECT * FROM list_chk_cleam WHERE pkselect = '".$menuid."' ";
												$objQuery = mysqli_query($objCon, $strSQL);
												$objResult = mysqli_fetch_array($objQuery);
												if(!$objResult)
												{ 
													$strSQL = "INSERT INTO list_chk_cleam ( 
													pkselect, create_by, create_date, create_date2, create_time, bill_no  ) 
													VALUES ( 
													'".$menuid."', '".$_SESSION["UserID"]."', '', 
													'', '', '' 
													)"; 
													$objQuery = mysqli_query($objCon, $strSQL);

												} 
											}
											 
											
										}
?>  
						 
						 