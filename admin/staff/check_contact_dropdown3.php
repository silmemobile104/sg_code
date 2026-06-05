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
	 
    $html .= '<option value="เครมสินค้า/รอสินค้า////"'.$bill_no.'">  เครมสินค้า/รอสินค้า </option>';
    $html .= '<option value="พร้อมจำหน่าย////"'.$bill_no.'">  พร้อมจำหน่าย </option>'; 

      

    print_r($html);
?>