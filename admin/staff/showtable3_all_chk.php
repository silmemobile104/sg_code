<?php 
session_start(); 
include('../database.php');
 
	 
	$major = "";
	if(!empty($_GET["major"])){
		$major = $_GET["major"];
		$major = " and a.major = '" . $_GET["major"] . "'";
		
	}else{
		$major = " and a.major = '-'";
	} 
	$major_store = "";
	if(!empty($_GET["major_store"])){
		$major_store = $_GET["major_store"];
		$major_store = " and c.typedata_2 = '" . $_GET["major_store"] . "'";
		
	} else{
		$major_store = " ";
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
   
										
											
										$select_chk = "OFF";
										$sql_c = "SELECT * FROM list_chk_computer where  create_by = '".$_SESSION["UserID"]."' and bill_no = ''  order by pk asc  "; 
										$query_c = mysqli_query($objCon,$sql_c); 
										while($objResult_c = mysqli_fetch_array($query_c))
										{ 
											$select_chk =  "ON";
											if($select_chk == "ON"){
												$i++;
											}
											
										}
										 	 	
										 
										echo $i;
										?>
	 
    