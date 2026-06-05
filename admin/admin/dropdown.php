<?php
session_start();
include("../database.php");
    
 
	$typedata = $_GET["typedata"];
    $html = '';
	$html .= '<option value=""> เลือกรายการสินค้า </option>';
    $i = 1;
    $sql = "SELECT * FROM product where typedata = '".$typedata."' and total = '1' and typedata != ''  order by pk asc "; 
    $query = mysqli_query($objCon,$sql); 
    while($objResult = mysqli_fetch_array($query))
    { 
		$showclose = "-";
		$sql_chk = " SELECT * FROM drop_typedata2 where pk = '".$objResult["typedata2"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose = $objResult_chk["name"];   
		}
		$showclose2 = "-";
		$sql_chk = " SELECT * FROM drop_typecolor where pk = '".$objResult["color"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose2 = $objResult_chk["name"];   
		}
		$showclose3 = "-";
		$sql_chk = " SELECT * FROM drop_typedata where pk = '".$objResult["typedata"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose3 = $objResult_chk["name"];   
		}
		$showclose4 = "-";
		$sql_chk = " SELECT * FROM store where pk = '".$objResult["typedata_2"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose4 = $objResult_chk["name"];   
		}
		$showclose5 = "-";
		$sql_chk = " SELECT * FROM drop_typestore where pk = '".$objResult["storerage"]."' ";   
		$query_chk = mysqli_query($objCon,$sql_chk); 
		while($objResult_chk = mysqli_fetch_array($query_chk))
		{
			$showclose5 = $objResult_chk["name"];   
		}
		 
		 
         $html .= '<option value="'.$objResult["pk"]."///".$objResult["name"]."///".$showclose."///".$showclose5."///".$showclose2."///".$objResult["price2"]."///".$showclose3."///".$showclose4."///".$objResult["price1"]."///".$objResult["codeno"].'"> '.$objResult["name"].' </option>';

        $i++; 
    }

    print_r($html);
?>