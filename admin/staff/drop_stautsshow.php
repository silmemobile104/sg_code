<?php
session_start();
include("../database.php");
    
 
	$bill_no = $_GET["bill_no"];
    $html = ''; 
	$html .= '<option value="ปกติ//'.$bill_no.'"> ปกติ  </option>';
	$html .= '<option value="อนุมัติ/สัญญาโมฆะ//'.$bill_no.'"> อนุมัติ/สัญญาโมฆะ  </option>';
     
    print_r($html);
?>