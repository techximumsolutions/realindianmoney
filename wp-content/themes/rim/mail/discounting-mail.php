<?php
header('Content-type: application/json');
$emailErr = '';
$purpose_loan=isset($_POST['purpose_loan'])?$_POST['purpose_loan']:'';
$amount_borrow=isset($_POST['amount_borrow'])?$_POST['amount_borrow']:'';
$currently_employed=isset($_POST['currently_employed'])?$_POST['currently_employed']:'';
$monthly_rent=isset($_POST['monthly_rent'])?$_POST['monthly_rent']:'';
$balance_period_lease=isset($_POST['balance_period_lease'])?$_POST['balance_period_lease']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$mobile_number=isset($_POST['mobile_number'])?$_POST['mobile_number']:'';
$currently_residing=isset($_POST['currently_residing'])?$_POST['currently_residing']:'';
$taken_loan_property=isset($_POST['taken_loan_property'])?$_POST['taken_loan_property']:'';
if (empty($email)) {
    $emailErr = "Email is required";
}else {
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	$emailErr = "Invalid email format"; 
	}
}
if(!empty($emailErr)){
	echo json_encode(array('status'=>false,'errormsg'=>$emailErr));
}else{
	$to = "rajesh@realindianmoney.com";
	$subject = 'Lease Rental Discounting Enquiry';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>Kind of property you have given on lease?</strong></td>
		<td>$purpose_loan</td>
		<td><strong>Entre Amount you wish to borrow</strong></td>
		<td>$amount_borrow</td>
	  </tr>
	  <tr>
		<td><strong>How are you currently employed ?</strong></td>
		<td>$currently_employed</td>
		<td><strong>Monthly rent which you are getting?</strong></td>
		<td>$monthly_rent</td>
	  </tr>
	  <tr>
		<td><strong>Balance period of lease?</strong></td>
		<td>$balance_period_lease</td>
		<td><strong>Have you already taken loan on said property?</strong></td>
		<td>$taken_loan_property</td>
	  </tr>
	  <tr>
		<td><strong>Your Email ID</strong></td>
		<td>$email</td>
		<td><strong>Your Mobile Number?</strong></td>
		<td>$mobile_number</td>
	  </tr>
	  <tr>
		<td><strong>Where do you currently residing?</strong></td>
		<td>$currently_residing</td>
	  	<td></td>
		<td></td>
	  </tr>
</table>";

//$from ="abc@gmail.com";
$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\n";
$headers .= "From: $email" . "\n";

// Send email
$mail=@mail($to,$subject,$message,$headers);
if($mail)
	{
		echo json_encode(array('status'=>true,'successmsg'=>$email));
	}else{
		echo json_encode(array('status'=>false,'errormsg'=>'Mail Not Sent'));
	}
}
 ?>