<?php  
	require_once	"Autoload.php";
	function Insert(){
		Connection();
		$db=$_SESSION['db'];
		if (isset($_POST['payNow'])) {
			$complete=1;
			$msg="";
			$firstname=PostHttpRequest("firstname",$db);
			$lastname=PostHttpRequest("lastname",$db);
			$email=PostHttpRequest("email",$db);
			$amount=PostHttpRequest("amount",$db);
			$amount=PostHttpRequest("amount",$db);
			$currency=PostHttpRequest("currency",$db);
			if (empty($firstname)|| empty($lastname)|| empty($email)|| empty($amount)|| empty($currency)) {
				$msg.="Form field shouldn't be left blank!"; $complete=0;
				$message="Transaction aborted";
				$status="failed";
			}
			if ($complete==1) {
				$amount=ceil($amount)*100;
				$message="Verification successful";
				$status="success";
				$reference="bjdhjd8whujwhdjnd0-2u8ty7w2dbhbdmkmxcsoiouwgyudw76tr276gvedhd0";
				$reference=str_shuffle($reference);
				$reference=substr($reference, 0,10);
				$gateway_response="Successful";
				$channel="card";
				$ip_address="12378.76883.89376.97836.8736";
				$ip_address=str_shuffle($ip_address);
				$ip_address=substr($ip_address, 0,14);
				$access_device="browser";
				$account_number="1234567890";
				$account_number=str_shuffle($account_number);
				$account_number=substr($account_number, 0,10);
				$bank_name="online banking";
				//Inserting into the database
				Save($db,$firstname,$lastname,$email,$amount,$message,$status,$reference,$gateway_response,$channel,$currency,$ip_address,$access_device,$account_number,$bank_name);
				//Show alert message
				AlertFormErrorMsg("Your payment was successfully proccessed and an email address has been sent to the email address provided","success");
			}else{
			AlertFormErrorMsg("$msg","danger");
			}
		}
	}


	function Save($db,$firstname,$lastname,$email,$amount,$message,$status,$reference,$gateway_response,$channel,$currency,$ip_address,$access_device,$account_number,$bank_name)
	{
		$db->query("INSERT INTO save(firstname,lastname,email,amount,message,status,reference,gateway_response,channel,currency,ip_address,access_device,account_number,bank_name)VALUES('$firstname','$lastname','$email',
			'$amount','$message','$status','$reference','$gateway_response','$channel','$currency','$ip_address',
			'$access_device','$account_number','$bank_name')");
	}
?>