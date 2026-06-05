<?php
session_start();
include("../database.php");
    
 
	$major = $_GET["major"];
    $html = '';
	$html .= '<option value=""> แสดงทุกร้าน </option>';
    $i = 1;
    $sql = "SELECT * FROM store where major = '".$major."'  order by pk asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {  
         $html .= '<option value="'.$objResult["pk"].'"> '.$objResult["name"].' </option>';

        $i++; 
    }

    print_r($html);
?>