<?php
session_start();
include("../database.php");
    
 
	$data1 = $_GET["data1"];
    $html = '';
	$html .= '<option value=""> กรุณาเลือก  </option>';
    $i = 1;
    $sql = "SELECT * FROM data2 where PROVINCE_ID = '".$data1."'  order by AMPHUR_ID asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {  
        $html .= '<option value="'.$objResult["AMPHUR_ID"].'"> '.$objResult["AMPHUR_NAME"].' </option>';

        $i++; 
    }

    print_r($html);
?>