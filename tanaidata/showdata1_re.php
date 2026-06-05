<?php
session_start();  
include('../database.php');
	
    $bg = "#F8FAFD";  
	$member_main = $_SESSION["UserID"];   
	$sendata = $_GET["sendata"];   
	$bill_no = $_GET["bill_no"];   

  
$member = $_SESSION["UserID"];

if(!empty($bill_no)){
	$sql = "SELECT * FROM product_img where bill_no = '".$bill_no."'   order by pk asc  "; 
}else{
	$sql = "SELECT * FROM product_img where bill_no = '' and create_by = '".$member_main."'   order by pk asc  "; 
}
 



$query = mysqli_query($objCon,$sql);
while($objResult = mysqli_fetch_array($query))
{ 
?> 
<li class="myupload"  > 
<img src='../admin/img/<?php echo $objResult["img"]; ?>' /><div  class='post-thumb'><div class='inner-post-thumb'>

<a  data-id='' class='remove-pic' onClick="myFunction<?php echo $objResult["pk"]; ?>(<?php echo $objResult["pk"]; ?>)" style="cursor: pointer;">
<i class='fa fa-times' aria-hidden='true' style="color: #FFF;"></i></a>

<script>
function myFunction<?php echo $objResult["pk"]; ?>(Delepk) {

$.ajax({
type: "POST",
url: "delete_img.php",
data: {del:Delepk},
success: function( ) {   
}
});   

}
</script> 
</li> 

<?php } ?>
						