<?php
session_start();
include("../database.php");
    
 
	$data1 = $_GET["data1"];
	$data2 = $_GET["data2"];
    $html = '';
	$html .= '<option value=""> กรุณาเลือก </option>';
    $i = 1;
    $sql = "SELECT * FROM data3 where PROVINCE_ID = '".$data1."'  and AMPHUR_ID = '".$data2."' order by DISTRICT_ID asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {  
        $html .= '<option value="'.$objResult["DISTRICT_CODE"].'"> '.$objResult["DISTRICT_NAME"].' </option>';

        $i++; 
    }

    print_r($html);
?>