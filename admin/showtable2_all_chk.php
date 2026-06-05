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
										  
										$datadate  = "01-".$searchname."-".$searchname2;				   
										$datadate2  = "31-".$searchname."-".$searchname2;	

 
										$contactstart = date("Y-m-d", strtotime($datadate));  
										$checkend = date("Y-m-d", strtotime($datadate2)); 
 
										$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
									
											
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
	  