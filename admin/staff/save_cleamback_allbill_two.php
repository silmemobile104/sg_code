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
		$select_chk = "OFF";
		$sql_c = "SELECT * FROM list_chk_cleam_back_two where pkselect = '".$objResult2["pk"]."'  and status = 'ส่งคืนต้นทาง'   order by pk asc  "; 
		$query_c = mysqli_query($objCon,$sql_c); 
		while($objResult_c = mysqli_fetch_array($query_c))
		{ 
			$select_chk =  "ON";
		}

		if($select_chk == "OFF"){
			$strSQL = "SELECT * FROM list_chk_cleam_back_two WHERE pkselect = '".$menuid."' ";
			$objQuery = mysqli_query($objCon, $strSQL);
			$objResult = mysqli_fetch_array($objQuery);
			if(!$objResult)
			{ 
				$strSQL = "INSERT INTO list_chk_cleam_back_two ( 
				pkselect, create_by, create_date, create_date2, create_time, bill_no, status, major, major2  ) 
				VALUES ( 
				'".$menuid."', '".$_SESSION["UserID"]."', '', 
				'', '', '', 'ส่งคืนต้นทาง', '".$majorsave."', '".$major_storesave."'  
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);

			} 
		}
	} 


?>
	  