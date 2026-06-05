<?php
session_start();  
include('../database.php');
	
	$bg = "#F8FAFD"; 
	$i = 1;
	$total = 0;
	$totalprice1 = 0;
	$totalprice2 = 0;
	$totalprice3 = 0;
	$totalprice4 = 0; 
	$member = $_SESSION["UserID"]; 

 
	$paymenttype = "";
	if(empty($_GET["paymenttype"])){
		
	}else{
		$paymenttype = $_GET["paymenttype"];
	}  

	
	
	$searchname = "";
	if(empty($_GET["searchname"])){
		
	}else{
		$searchname = $_GET["searchname"];
	}
 	 
		 
		 
	$searchname2 = "";
	if(empty($_GET["searchname2"])){
		
	}else{
		$searchname2 = $_GET["searchname2"];
	}  
	 
?>
     
                       
<div class="col-md-12" style="margin-top: 15px;" > 
<style>
.pagination {
list-style-type: none; 
display: inline-flex;
justify-content: space-between;
box-sizing: border-box;
}
.pagination li {
box-sizing: border-box;
padding-right: 10px;
}
.pagination li a {
box-sizing: border-box;
background-color: #e2e6e6;
padding: 8px;
text-decoration: none;
font-size: 12px;
font-weight: bold;
color: #616872;
border-radius: 4px;
}
.pagination li a:hover {
background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
text-transform: uppercase;
font-size: 12px;
}
.pagination .currentpage a {
background-color: #518acb;
color: #fff;
}
.pagination .currentpage a:hover {
background-color: #518acb;
}
</style> 

<?php											
$perpage = 20;
if (isset($_GET['page2'])) {
$page = $_GET['page2']; 
} else {
$page = 1;
} 

if (empty($_GET['page2'])) {
$page = 1;
}  			
$start = ($page - 1) * $perpage;



$addcode = "";
if(empty($_GET["searchname"])){

}else{
$addcode = " and  name like '%".$searchname."%' ";
} 

$sql2 = "  SELECT * FROM paymenttype2 where   paymenttype = '".$paymenttype."' ".$addcode." order by pk asc     "; 
$query2 = mysqli_query($objCon, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record / $perpage);
?>  
<?php if (ceil($total_record / $perpage) > 0): ?>
<ul class="pagination">
<?php if ($page > 1): ?>
<li class="prev"><a href="paymenttype2.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>">Prev</a></li>
<?php endif; ?>

<?php if ($page > 3): ?>
<li class="start"><a href="paymenttype2.php?page2=1&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>">1</a></li>
<li class="dots">...</li>
<?php endif; ?>

<?php if ($page-2 > 0): ?><li class="page"><a href="paymenttype2.php?page2=<?php echo $page-2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
<?php if ($page-1 > 0): ?><li class="page"><a href="paymenttype2.php?page2=<?php echo $page-1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

<li class="currentpage"><a href="paymenttype2.php?page2=<?php echo $page ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo $page ?></a></li>

<?php if ($page+1 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttype2.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
<?php if ($page+2 < ceil($total_record / $perpage)+1): ?><li class="page"><a href="paymenttype2.php?page2=<?php echo $page+2 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

<?php if ($page < ceil($total_record / $perpage)-2): ?>
<li class="dots">...</li>
<li class="end"><a href="paymenttype2.php?page2=<?php echo ceil($total_record / $perpage) ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>"><?php echo ceil($total_record / $perpage) ?></a></li>
<?php endif; ?>

<?php if ($page < ceil($total_record / $perpage)): ?>
<li class="next"><a href="paymenttype2.php?page2=<?php echo $page+1 ?>&searchname=<?php echo $searchname; ?>&searchname2=<?php echo $searchname2; ?>&databo=<?php echo $databo; ?>">Next</a></li>
<?php endif; ?>
</ul> 
<?php endif; ?>

</div>   
                       
<div class="col-lg-12"  align="left" style="margin-top: 15px; "  >  
<div class="table-responsive"  >
<table id="key_product"  class=" table    tablemobile  " border="0"    >
<thead> 
<tr>
<th width="2%" bgcolor="#E2E7EC" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; "  ><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; "> ลำดับ    </font></div></th>      
<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมวดค่าใช้จ่าย  </font></div></th> 
<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมวดค่าใช้จ่ายแบบย่อย   </font></div></th>  
<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  วันที่ทำรายการ   </font></div></th>
<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF;  border-right: 1px solid #FFF;  "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  พนักงาน   </font></div></th>     
<th width="3%" bgcolor="#E2E7EC" style="border: 0px solid #FFF; "><div align="center"> 
<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   แก้ไข   </font></div></th>  
</tr>
</thead>  


<tbody>


<?php 
$i = 1;
$bg = "#F8FAFD"; 

if (empty($_GET['page2'])) { 
$i = 1;
}else if (($_GET['page2'] == 1)) { 
$i = 1;
}else{

$i = ( ($_GET["page2"]-1) * 20 ) + 1; 
}

$sql2 = "   SELECT * FROM paymenttype2 where paymenttype = '".$paymenttype."' ".$addcode." order by pk asc      limit {$start} , {$perpage}   ";  

$query2 = mysqli_query($con,$sql2); 
while($objResult2 = mysqli_fetch_array($query2))
{      
if($bg == "#FFF"){ 
$bg = "#F8FAFD"; 
}else{  
$bg = "#FFF"; 
} 

$name_create_by = "";
$sql = "SELECT * FROM member_all where pk = '".$objResult2["create_by"]."'    order by pk asc  "; 
$query = mysqli_query($objCon,$sql);
while($objResult = mysqli_fetch_array($query))
{ 
$name_create_by =  $objResult["name"];
} 
	
$name_create_bo = "";
$sql = "SELECT * FROM paymenttype where pk = '".$objResult2["paymenttype"]."'    order by pk asc  "; 
$query = mysqli_query($objCon,$sql);
while($objResult = mysqli_fetch_array($query))
{ 
$name_create_bo =  $objResult["name"];
} 
	
	
$colorbg = "#000"; 

$bill_no = $objResult2["pk"];
?>
<tr style="background-color: <?php echo $bg; ?>; ">  

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $i; ?>  </font></div></td> 

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_bo; ?>  </font></div></td>


<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $objResult2["name"]; ?>  </font></div></td>

	 			 			 		
<td style=" border-left: 0px solid #F2F2F2; ">
<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo DateThai($objResult2["create_date"])." ".DateThai2($objResult2["create_date"]); ?>  </font></div>
<div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo ($objResult2["create_time"]); ?>  </font></div>

</td>	
							
							
<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " > <?php echo $name_create_by; ?>  </font></div></td> 

  

<td style=" border-left: 0px solid #F2F2F2; "><div align="center"><font size="3px" color="Black" style=" font-size: 13px; " >    
<a href="paymenttype2.php?CusID=<?php echo $objResult2["pk"];?>&page=1&databo=<?php echo $databo; ?>" class="  btn-sm " style="background-color: #F8741D; border-radius: 5px;  border-color: #F8741D; border: 1px solid  #F8741D;   " >
<font size="3px" color="#FFF" style=" font-size: 13px; " >  แก้ไข </font></a>

</font></div></td> 

</tr> 
<?php $i++; } ?>
</tbody>


</table>  
</div>
</div>
<?php
				function DateThai($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strDay";
				}
				function DateThai2($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai $strYear";
				}   
				function DateThai3($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return "$strMonthThai ";
				}  
				function DateThai4($strDate)
				{
					$strYear = date("Y",strtotime($strDate))+543;
					$strMonth= date("n",strtotime($strDate));
					$strDay= date("j",strtotime($strDate));
					$strHour= date("H",strtotime($strDate));
					$strMinute= date("i",strtotime($strDate));
					$strSeconds= date("s",strtotime($strDate));
					$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
					$strMonthThai=$strMonthCut[$strMonth];
					return " $strYear";
				}  
	?> 

