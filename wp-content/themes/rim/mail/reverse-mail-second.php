<?php
header('Content-type: application/json');
$emailErr = '';
$email=isset($_POST['email'])?$_POST['email']:'';
$full_name_pancard=isset($_POST['full_name_pancard'])?$_POST['full_name_pancard']:'';
$date_birth=isset($_POST['date_birth'])?$_POST['date_birth']:'';
$availed_loan=isset($_POST['availed_loan'])?$_POST['availed_loan']:'';
$primary_bank=isset($_POST['primary_bank'])?$_POST['primary_bank']:'';
$total_emi_paying=isset($_POST['total_emi_paying'])?$_POST['total_emi_paying']:'';
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
	$subject = 'Reverse Mortgage Enquiry Part-2';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>Your Full Name( as per PAN Card)</strong></td>
		<td>$full_name_pancard</td>
		<td><strong>Date Of Birth</strong></td>
		<td>$date_birth</td>
	  </tr>
	  <tr>
		<td><strong>Have you availed any loan in Past?</strong></td>
		<td>$availed_loan</td>
		<td><strong>Your primary Bank A/c is with?</strong></td>
		<td>$primary_bank</td>
	  </tr>
	  <tr>
		<td><strong>Total EMI currently you are paying?</strong></td>
		<td>$total_emi_paying</td>
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
		echo json_encode(array('status'=>true,'successmsg'=>'','msg'=>'Mail Sent'));
	}else{
		echo json_encode(array('status'=>false,'errormsg'=>'Mail Not Sent'));
	}
}
 ?>