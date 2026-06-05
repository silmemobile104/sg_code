<?php 
include('../database.php');
	
		$input = file_get_contents('php://input');
		$obj = json_decode($input); 
		$tanaidata = $_GET["tanaidata"];
		  

		$no = 0;
		$sql = "SELECT * FROM list_order Where  tanaidata = '". $tanaidata ."' and tanai_chk = 'OK' and  tanai_pasy_bill = ''  ";  
		$query = mysqli_query($objCon,$sql); 
		while($objResult = mysqli_fetch_array($query))
		{  
			$no++;
		}

		echo $no;
?>







