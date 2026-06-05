<?php
session_start();
include("../database.php");
    
 
	$data1 = $_GET["data1"];
	$data2 = $_GET["data2"];
	$data3 = $_GET["data3"];
    $html = '';
	$html .= '<option value=""> กรุณาเลือก </option>';
    $i = 1;
    $sql = "SELECT * FROM data4 where district_code = '".$data3."'  order by id asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {  
        $html =  $objResult["zipcode"] ;

        $i++; 
    }

    print_r($html);
?>