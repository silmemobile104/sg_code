<?php
session_start();  
include('../database.php');
	 

	$bill_no = $_GET["bill_no"];

	$getshow = "";
	$sql = "SELECT * FROM history_checkin Where  bill_no = '". $bill_no ."' ";  
	$query = mysqli_query($objCon,$sql); 
	while($objResult = mysqli_fetch_array($query))
	{
		
		$getshow = $objResult["onoff"];
		
	}
 
	$data = array(
	   'notification' => $getshow,
	   'unseen_notification'  => '0', 
	   'countid'  => $getshow 
	);

echo json_encode($data);
?>
    
 
