<?php 
session_start(); 
include('../database.php');
 
 
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
										$sql_c = "SELECT * FROM list_chk_cleam_back_two where  create_by = '".$_SESSION["UserID"]."' and bill_no = ''  order by pk asc  "; 
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
	 
    