<?php 
session_start();
include("../database.php");
 
			$money = $_GET["money"] ;    
			$bill = $_GET["bill"] ;  
			$datesave = $_GET["datesave"] ; 


			$datedatacall = $_GET["datesave"] ;  


			$majordata = $_GET["majordata"] ;       
			$contactdata = $_GET["contactdata"] ;       
			$paymentother = $_GET["paymentother"] ;       
			$typedatapayment = $_GET["typedatapayment"] ; 
			$moneyall = $_GET["moneyall"] ;
			$discount = $_GET["discount"] ; 
			$typesave2 = $_GET["typesave2"] ; 
			$banksave = $_GET["banksave"] ; 
			$dropcontact = $_GET["dropcontact"] ; 



			$bank = $_GET["bankdata"] ;
			if(empty($bank)){
				$bank = "";
			}
 
			if($money == ""){
				$paymentother = "";
			}
			if($discount == ""){
				$discount = "";
			}
 
			$strSQL = "  Update history_payment Set 
			contactdata = '".$dropcontact."',  
			typesave2 = '".$typesave2."',  
			banksave = '".$banksave."',  
			discount = '".$discount."',  
			income = '".$money."',  
			bank = '".$bank."',  
			paymentother = '".$paymentother."',  
			typesave = '".$typedatapayment."',  
			create_by = '".$_SESSION["UserID"]."'  ,
			date_time = '".date('H:i')."'  ,
			date_start = '".date('d-m-Y')."' , 
			date_start2 = '".date('Y-m-d')."'   
			"  ;
			$strSQL .="  WHERE pk = '".$datesave."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
				 
				  
			$bill_no = " - ";
			$major = " - ";
			$customer = " - ";
			$sql_c = "SELECT * FROM history_payment where   pk = '".$datesave."' order by pk asc  "; 
			$query_c = mysqli_query($objCon,$sql_c);
			while($objResult_c = mysqli_fetch_array($query_c))
			{ 
				$datestart = $objResult_c["datestart"]; 
				$bill_no = $objResult_c["bill_no"]; 
				$major = $objResult_c["major"]; 
				$customer = $objResult_c["customer"]; 
			}

			$cut = explode("-",$datestart);
			$date_income = $cut[0]."-".$cut[1]."-".($cut[2]);  

			$daystart = date("d-m-Y", strtotime($date_income)); 
			$dayend = date("Y-m-d", strtotime($date_income)); 
			$datesave = date("d/m/Y", strtotime($date_income)); 

			$strSQL = "Delete From money_customer_bank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and create_date = '".$daystart."' and typegetpayment  = 'ชำระหักเงินฝาก'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 

			$strSQL = "Delete From money_customer_bank  ";
			$strSQL .="WHERE bill_no = '".$bill_no."' and create_date = '".$daystart."' and typegetpayment  = 'ชำระ2ทาง'  ";
			$objQuery = mysqli_query($objCon,$strSQL); 


			if($typedatapayment == "ชำระหักเงินฝาก"){
				 
				$typegetpayment = "ชำระหักเงินฝาก";
				$datestart = " - "; 

				$bill_nocount = 1;
				$sql2 = " SELECT * FROM run_bill4   order by pk asc   ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$bill_nocount ++;
				}

				$bill_no_ref =  "SGBP"."".$major."".date('Ydm')."-".$bill_nocount;
				$strSQL = "INSERT INTO run_bill4 ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
				$query2 = mysqli_query($objCon,$strSQL);
				
				 

				$strSQL = "INSERT INTO money_customer_bank ( 
				money, bill_no_ref, customer, create_date, 
				create_date2, create_time, create_by, datesave, bill_no, typegetpayment ) 
				VALUES 
				( 
				'".$money."', '".$bill_no_ref."', '".$customer."', 
				'".$daystart."',   '".$dayend."', '".date('H:i')."',
				'".$_SESSION["UserID"]."', '".$datesave."', '".$bill_no."', '".$typegetpayment."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
				// echo $strSQL;
			}  
			if($typedatapayment == "ชำระ2ทาง"){
				
				$typegetpayment = "ชำระ2ทาง";
				$datestart = " - "; 

				$bill_nocount = 1;
				$sql2 = " SELECT * FROM run_bill4   order by pk asc   ";
				$query2 = mysqli_query($objCon,$sql2);
				while($objResult2 = mysqli_fetch_array($query2))
				{
					$bill_nocount ++;
				}

				$bill_no_ref =  "SGBP"."".$major."".date('Ydm')."-".$bill_nocount;
				$strSQL = "INSERT INTO run_bill4 ( bill_no ) VALUES  ( '".$bill_no."'  )"; 
				$query2 = mysqli_query($objCon,$strSQL);
				
				 

				$strSQL = "INSERT INTO money_customer_bank ( 
				money, bill_no_ref, customer, create_date, 
				create_date2, create_time, create_by, datesave, bill_no, typegetpayment ) 
				VALUES 
				( 
				'".$moneyall."', '".$bill_no_ref."', '".$customer."', 
				'".$daystart."',   '".$dayend."', '".date('H:i')."',
				'".$_SESSION["UserID"]."', '".$datesave."', '".$bill_no."', '".$typegetpayment."' 
				)"; 
				$objQuery = mysqli_query($objCon, $strSQL);
				 echo $strSQL;
			}

		 



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
				where a.bill_no != ''  and    a.pk = '".$datedatacall."'   
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


 
			$strSQL = "  Update payment_wait Set  onoffsave = 'OFF'   "  ;
			$strSQL .="  WHERE bill_no = '".$nameshow3."'   ";
			$objQuery = mysqli_query($objCon, $strSQL); 
				 


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
 

		
			$strSQL = "INSERT INTO update_real_time (create_date, major, create_date2, create_time, create_by, status, contact, bill_no ) VALUES  ( '".$datesave."', '".$majordata."', '".date('Y-m-d')."', '".date('H:i')."', '".$_SESSION["UserID"]."', '".$bill." กรอกยอดเงิน : ".$money."', '".$contactdata. " - ". $typedatapayment. "', '".$bill."' )"; 
			$objQuery = mysqli_query($objCon, $strSQL);
			
?>