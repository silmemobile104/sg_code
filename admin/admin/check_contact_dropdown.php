<?php
session_start();
include("../database.php");
    
 
	$bill_no = $_GET["bill_no"]; 
    $html = '';

	/*
	<option value="รอการยืนยัน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> รอการยืนยัน </font></option> 
	<option value="อนุมัติการยกเลิก//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> อนุมัติการยกเลิก </font></option> 
	<option value="กู้คืน//<?php echo $objResult2["bill_no"]; ?>" ><font size="2px" class="serif2"> กู้คืน </font></option>
	*/
	 
    $html .= '<option value="รอการยืนยัน////"'.$bill_no.'">  รอการยืนยัน </option>';
    $html .= '<option value="อนุมัติการยกเลิก////"'.$bill_no.'">  อนุมัติการยกเลิก </option>';
    $html .= '<option value="กู้คืน////"'.$bill_no.'">  กู้คืน </option>';

      

    print_r($html);
?>