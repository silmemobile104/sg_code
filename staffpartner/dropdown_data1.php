<?php
session_start();
include("../database.php");
    
 
	$typedataproduct = $_GET["typedataproduct"];
    $html = ''; 
    $i = 1;
    $sql = "SELECT * FROM drop_typepartner where typedataproduct = '".$typedataproduct."' order by pk asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    {  
		 
         $html .= '<option value="'.$objResult["pk"].'"> '.$objResult["name"].' </option>';

        $i++; 
    }

    print_r($html);
?>