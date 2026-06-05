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
	 
    