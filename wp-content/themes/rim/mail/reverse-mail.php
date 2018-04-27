<?php
header('Content-type: application/json');
$emailErr = '';
$purpose_loan=isset($_POST['purpose_loan'])?$_POST['purpose_loan']:'';
$amount_borrow=isset($_POST['amount_borrow'])?$_POST['amount_borrow']:'';
$currently_employed=isset($_POST['currently_employed'])?$_POST['currently_employed']:'';
$property_city=isset($_POST['property_city'])?$_POST['property_city']:'';
$running_loan=isset($_POST['running_loan'])?$_POST['running_loan']:'';
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
	$to = "lokesh.techximum@gmail.com";
	$subject = 'Reverse Mortgage Enquiry';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>Kind of property you can mortgage?</strong></td>
		<td>$purpose_loan</td>
		<td><strong>Entre Amount you wish to borrow</strong></td>
		<td>$amount_borrow</td>
	  </tr>
	  <tr>
		<td><strong>How are you currently employed ?</strong></td>
		<td>$currently_employed</td>
		<td><strong>Your Email ID</strong></td>
		<td>$email</td>
	  </tr>
	  <tr>
		<td><strong>Your Mobile Number?</strong></td>
		<td>$mobile_number</td>
		<td><strong>Choose your property city</strong></td>
		<td>$property_city</td>
	  </tr>
	  <tr>
		<td><strong>Have you already taken loan on said property?</strong></td>
		<td>$taken_loan_property</td>
		<td><strong>Do you have any other running loan?</strong></td>
		<td>$running_loan</td>
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