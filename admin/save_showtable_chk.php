<?php 
session_start(); 
include('../database.php');
 
	 
	$searchname = "";
	if(!empty($_GET["startdate"])){
		$searchname = $_GET["startdate"];
		$cut = explode("/",$searchname);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load = date("Y-m-d", strtotime($date_income)); 
	}  
	$searchname2 = "";
	if(!empty($_GET["endate"])){
		$searchname2 = $_GET["endate"];
		$cut = explode("/",$searchname2);
		$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  
		$daystart_load2 = date("Y-m-d", strtotime($date_income)); 
		
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
										$data1 = 0;
										$data2 = 0;
										$data3 = 0;
										$data4 = 0;
										$data5 = 0; 
										$data6 = 0; 
										$data7 = 0; 
   
												
										$addcode = "";
										$addcode2 = "";
										 
										$contactstart = date("Y-m-d", strtotime($daystart_load));  /// วันที่เริ่มเก็บ 
										$checkend = date("Y-m-d", strtotime($daystart_load2));  /// วันที่เลือกล่าสุด 
										$addcode = "  and  a.create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
												
									
										$sql2 = " SELECT a.*, b.name, c.typedata_2 FROM list_order  a
											Inner Join customer b On   a.customer = b.pk
											Inner Join product c On   a.menu_id = c.pk
											 
											where a.bill_no != ''   
											".$addcode.$addcode2.$major.$major_store."  
											order by a.pk asc   ";  
									
										/// echo $sql2;
										$query2 = mysqli_query($con,$sql2); 
										while($objResult2 = mysqli_fetch_array($query2))
										{      
											 
											$menuid = $objResult2["pk"]; 
											$select_chk = "OFF";
											$sql_c = "SELECT * FROM list_chk_computer where pkselect = '".$objResult2["pk"]."'   order by pk asc  "; 
											$query_c = mysqli_query($objCon,$sql_c); 
											while($objResult_c = mysqli_fetch_array($query_c))
											{ 
												$select_chk =  "ON";
											}
										 	 	
											if($select_chk == "OFF"){
											 	$strSQL = "SELECT * FROM list_chk_computer WHERE pkselect = '".$menuid."' ";
												$objQuery = mysqli_query($objCon, $strSQL);
												$objResult = mysqli_fetch_array($objQuery);
												if(!$objResult)
												{ 
													$strSQL = "INSERT INTO list_chk_computer ( 
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
	 
    