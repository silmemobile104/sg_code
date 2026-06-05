<?php 
session_start(); 
include('../database.php');  
  

if(empty($_GET["dayround"])){
$loopdata = 0;	
$round = 0;	
}else{
$loopdata = $_GET["dayround"];
$round = $_GET["dayround"];
}

if(empty($_GET["dayprice"])){
$dayprice = 0;	
}else{
$dayprice = $_GET["dayprice"];
}
  
 
$daypayment = $_GET["daypayment"];
$daystart = $_GET["daystart"];
 
$cut2 = explode("/",$daystart);
$date_income = $cut2[0]."-".$cut2[1]."-".($cut2[2]); 
$date_income2 = $daypayment."-".$cut2[1]."-".($cut2[2]); 
			

$n = 10;
function getName($n) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';

	for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}

$namebtm = getName($n); 
?>   

<table   class=" table    tablemobile  " border="0"    > 
 <tr>
	<th width="2%" colspan="6" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF; border-bottom: 1px solid #FFF; "  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    ตารางการผ่อนชำระ    </font></div></th>
 </tr> 
 <tr>
	<th width="10%" bgcolor="#BEC6CB" height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    งวดที่    </font></div></th>    
	<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    จำนวนเงิน  </font></div></th>   
	<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">   วันที่ต้องโอน  </font></div></th>    
	<th width="10%" bgcolor="#BEC6CB" style="border: 0px solid #FFF;   "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  หมายเหตุ   </font></div></th>  
 </tr>   
 <?php  
	 $bg = "#F8FAFD"; 
	 $i = 1;
	 for($loop = 1; $loop <= $loopdata; $loop++){ 

		if($bg == "#FFF"){ 
			$bg = "#F8FAFD"; 
		}else{  
			$bg = "#FFF"; 
		}  
		 
		$daystart1 = date("Y-m-d", strtotime($date_income)); 
		$daystart2 = date("Y-m-d", strtotime($date_income2)); 
		if($loop == 1){
		$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart1 ) ) . "+0 month" ) );	
		}else{
		$monthadd =  $loop - 1;
		$myDate = date("d/m/Y", strtotime( date( "Y-m-d", strtotime( $daystart2 ) ) . "+$monthadd month" ) );	
		} 
		 
		 

		$daypercent = 0;
		if($round == 6){
			if($loop == 1){
				$daypercent = 25 - ($loop*0);
			}else{
				$daypercent = 25 - (($loop-1) *5);
			} 
		}else if($round == 8){ 
			if($loop == 1){
				$daypercent = 35 - ($loop*0);
			}else{
				$daypercent = 35 - (($loop-1) *5);
			} 
		}else if($round == 10){
			if($loop == 1){
				$daypercent = 40 - ($loop*0);
			}else if($loop == 2){ 
				$daypercent = 40 - ($loop*0);
			}else{
				$daypercent = 40 - (($loop-2) *5);
			}  
		}else if($round == 12){
			if($loop == 1){
				$daypercent = 40 - ($loop*0);
			}else if($loop == 2){ 
				$daypercent = 40 - ($loop*0);
			}else if($loop == 3){ 
				$daypercent = 40 - ($loop*0);
			}else{
				$daypercent = 40 - (($loop-3) *5);
			}   
		}

		 if(  $daypercent <= 0 ){
			 $daypercent = 0;
		 }
		 
	?>
	<tr style="background-color: <?php echo $bg ?>; "> 
	<th width="10%"  height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    
	
		งวดที่ <?php echo $loop; ?>    
	
	  </font></div></th>   
	<th width="10%"  height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">  <?php echo number_format(0+$dayprice); ?> </font></div></th>   
	<th width="10%"  style="border: 0px solid #FFF;  border-right: 1px solid #FFF; "><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">    
	<input type="text" class="form-control  " id="<?php echo $namebtm."".$loop; ?>" name="dateincome<?php echo $loop; ?>"  autocomplete="off"   required   style="border-radius: 5px; border: 1px solid #FFF; text-align: center; "  value="<?php echo $myDate ?>" readonly       >  
	</font></div></th>      
	<th width="10%"  height="35px;" style="border: 0px solid #FFF; border-right: 1px solid #FFF;"  ><div align="center"> 
	<font size="3px" class="serif2" color="#000" style=" font-size: 13px; ">      </font></div></th>     
	</tr>   
	
	<script type="text/javascript"> 
	$(function(){
	var d = new Date();
	d.setDate(d.getDate());
	var toDay = d.getDate() + '/' + (d.getMonth() + 1) + '/' + (d.getFullYear()); 
	$("#<?php echo $namebtm."".$loop; ?>").datepicker({   
	changeMonth: true, 
	changeYear: true, 
	dateFormat: 'dd/mm/yy', 
	isBuddhist: false, 
	defaultDate: toDay, 
	dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
	yearRange: "-5:+5",
	  dayNamesMin: ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'],
	  monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
	  monthNamesShort: ['ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.']
	});
	}); 
	</script>
 
	 
 
  <?php $i++; } ?>  
 </table>	 
	  
  
 
																											
		 