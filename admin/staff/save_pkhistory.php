<?php 
session_start();
include("../database.php");
   
			$pksave = $_GET["data1"] ;   
			$money = $_GET["data2"] ;   
			$discount = $_GET["data3"] ; 
			$bill = $_GET["bill"] ; 

 
			if($money == ""){
				$paymentother = "";
			}
			if($discount == ""){
				$discount = "";
			}
 
			$strSQL = "  Update history_payment Set 
			discount = '".$discount."',  
			income = '".$money."',    
			create_by = '".$_SESSION["UserID"]."'  ,
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$pksave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 




			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			date_default_timezone_set("Asia/Bangkok");


			$tokendata = "";
			$sql = "SELECT * FROM tokenline Where  pk = '1' ";  
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{  
				$tokendata = $objResult["tokendata"];   

			} 

			$sToken = "".$tokendata;

			$searchname = date('Y-m-d');
			$daystart_load = date('d-m-Y');


			$nameshow1 = "";
			$nameshow2 = "";
			$nameshow3 = "";
			$nameshow4 = 0;
			$nameshow5 = 0;
			$allmoney = 0;
			$sql = "   SELECT a.*, b.name, b.telphone, c.codecustomer, c.codecustomer, b.facebook    FROM history_payment a 
				INNER Join customer b On a.customer = b.pk
				INNER Join list_order c On a.bill_no = c.bill_no
				where a.bill_no != ''  and    a.pk = '".$pksave."'   
				order by a.pk asc   ";   
			$query = mysqli_query($objCon,$sql); 
			while($objResult = mysqli_fetch_array($query))
			{ 
				$nameshow1 = $objResult["name"];
				$nameshow2 = $objResult["codecustomer"];
				$nameshow3 = $objResult["bill_no"];
				$nameshow4 = $objResult["income"];
				$nameshow5 = $objResult["discount"];
				
				$note1 = " - ";
				$totalprice1 = 0;
				$totalprice2 = 0;
				$totalprice3 = 0;
				$totalprice4 = " - ";
				$totalprice5 = " - ";
				$startdate = " - ";
				$sql2 = "SELECT * FROM list_order Where  bill_no = '". $objResult["bill_no"]."'   ";   
				$query2 = mysqli_query($objCon,$sql2); 
				while($objResult2 = mysqli_fetch_array($query2))
				{   
					$totalprice1 = $objResult2["money"]; 
					$totalprice2 = $objResult2["daytotal"]; 
					$totalprice3 = $objResult2["dayprice"]; 
					$totalprice4 = $objResult2["startdate"]; 
					$totalprice5 = $objResult2["endate"]; 
				}
				
				
				$daystart_load = $objResult["create_date2"];
				$discoount = 0;
				$discoountpaymentother = 0;
				$contactstart = date("Y-m-d", strtotime($totalprice4));  /// วันที่เริ่มเก็บ 
				$checkend = date("Y-m-d", strtotime($daystart_load));  /// วันที่เลือกล่าสุด 
				$code_check2 = "  and create_date2 BETWEEN '".$contactstart."' AND '".$checkend."'  "; 
				$sql2 = "SELECT * FROM history_payment Where  
				bill_no = '". $objResult["bill_no"]."' 
				and income != '' 
				and income != '0'   
				".$code_check2." ";   
				$query2 = mysqli_query($objCon,$sql2); 
				while($objResult2 = mysqli_fetch_array($query2))
				{  
					if(!empty($objResult2["income"])){
					$discoount += $objResult2["income"]; 

					}
					if(!empty($objResult2["paymentother"])){
					$discoountpaymentother += $objResult2["paymentother"]; 
					}  
				}	

				$allmoney = ($totalprice2*$totalprice3)-$discoount;
											 
			}


			if(!empty($money)){
				  
			$sMessage = "ชื่อลูกค้า ".$nameshow1."   \n รหัสลูกค้า ".$nameshow2."  เลขสัญญา  ".$nameshow3."  \n  ยอดรับจริง ". $nameshow4  ."  ส่วนลด ". $nameshow5  ."  หนีคงเหลือ ". $allmoney ."  \n ";
 
			$chOne = curl_init(); 
			curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
			curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
			curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
			curl_setopt( $chOne, CURLOPT_POST, 1); 
			curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
			$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
			curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
			curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
			$result = curl_exec( $chOne ); 

			//Result error 
			if(curl_error($chOne)) 
			{ 
				echo 'error:' . curl_error($chOne); 
			} 
			else { 
				$result_ = json_decode($result, true); 
				echo "status : ".$result_['status']; echo "message : ". $result_['message'];
			} 
			curl_close( $chOne );   

			}








				 
 
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$pksave."', '".$bill."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$bill."', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);

?>