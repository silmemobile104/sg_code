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
	$majorsave = "";
	if(!empty($_GET["major"])){
		$majorsave = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'";
		
	} 
	$major_store = "";
	$major_storesave = "";
	if(!empty($_GET["major_store"])){
		$major_storesave = $_GET["major_store"];
		$major_store = " and c.typedata_2 = '" . $_GET["major_store"] . "'";
		
	} 	
?>  	 
									 
									 	<?php 
										$bg = "#F8FAFD"; 
										$i = 0;
										$total = 0;
										$data1 = 0;
										$data2 = 0;
										$data3 = 0;
										$data4 = 0;
										$data5 = 0; 
										$data6 = 0; 
										$data7 = 0; 
   
												
										$addcode = "";
										$addcode2 = "";
										   
										if(empty($_GET["major"])){ 
											$addcode = " and major = '----'  ";
										}else{
											$addcode = " and major = '".$_GET["major"]."'  ";
										} 
										if(empty($_GET["major_store"])){ 
											$addcode2 = " and typedata_2 = '----'  ";
										}else{
											$addcode2 = " and typedata_2 = '".$_GET["major_store"]."'  ";
										} 
											
										$sql2 = " SELECT * FROM product 
											where name != '' and status = 'เครมสินค้า/รอสินค้า'
											".$addcode.$addcode2."  
											order by pk asc    ";  
	 
										$query2 = mysqli_query($con,$sql2);  
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											 
											$menuid = $objResult2["pk"];  
											
											$select_chk = "OFF";
											$sql_c = "SELECT * FROM list_chk_cleam_back where pkselect = '".$objResult2["pk"]."'  and status = 'เครมสินค้า/รอสินค้า'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c); 
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$select_chk =  "ON";
											}
										 	 	
											if($select_chk == "OFF"){
											 	$strSQL = "SELECT * FROM list_chk_cleam_back WHERE pkselect = '".$menuid."' ";
												$objQuery = mysqli_query($objCon, $strSQL);
												$objResult = mysqli_fetch_array($objQuery);
												if(!$objResult)
												{ 
													$strSQL = "INSERT INTO list_chk_cleam_back ( 
													pkselect, create_by, create_date, create_date2, create_time, bill_no, status, major, major2  ) 
													VALUES ( 
													'".$menuid."', '".$_SESSION["UserID"]."', '', 
													'', '', '', 'เครมสินค้า/รอสินค้า', '".$majorsave."', '".$major_storesave."' 
													)"; 
													$objQuery = mysqli_query($objCon, $strSQL);

												} 
											}
										} 
 
											
										?>
	  