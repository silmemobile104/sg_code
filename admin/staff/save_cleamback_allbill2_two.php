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
											where name != '' and status = 'ส่งคืนต้นทาง'
											".$addcode.$addcode2."  
											order by pk asc    ";  
	 
										$query2 = mysqli_query($con,$sql2);  
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											 
											$menuid = $objResult2["pk"];  
											 
											$strSQL = " Delete From list_chk_cleam_back_two  ";
											$strSQL .=" WHERE  pkselect = '".$menuid."' and bill_no = '' and create_by = '".$_SESSION["UserID"]."' ";
											$objQuery = mysqli_query($objCon,$strSQL); 
				
											 
										} 
 
											
										?>
	  