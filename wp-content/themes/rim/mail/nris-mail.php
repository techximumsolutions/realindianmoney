<?php
header('Content-type: application/json');
$emailErr = '';
$purpose_loan=isset($_POST['purpose_loan'])?$_POST['purpose_loan']:'';
$amount_borrow=isset($_POST['amount_borrow'])?$_POST['amount_borrow']:'';
$currently_employed=isset($_POST['currently_employed'])?$_POST['currently_employed']:'';
$purpose_home_loan=isset($_POST['purpose_home_loan'])?$_POST['purpose_home_loan']:'';
$monthly_income=isset($_POST['monthly_income'])?$_POST['monthly_income']:'';
$currency_salary=isset($_POST['currency_salary'])?$_POST['currency_salary']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$mobile_number=isset($_POST['mobile_number'])?$_POST['mobile_number']:'';
$property_type=isset($_POST['property_type'])?$_POST['property_type']:'';
$finalize_property=isset($_POST['finalize_property'])?$_POST['finalize_property']:'';
$property_city=isset($_POST['property_city'])?$_POST['property_city']:'';
$currently_residing=isset($_POST['currently_residing'])?$_POST['currently_residing']:'';
$current_outstanding_loan=isset($_POST['current_outstanding_loan'])?$_POST['current_outstanding_loan']:'';
$name_of_existing_bank=isset($_POST['name_of_existing_bank'])?$_POST['name_of_existing_bank']:'';
$current_roi=isset($_POST['current_roi'])?$_POST['current_roi']:'';
$puprose_loan_taken=isset($_POST['puprose_loan_taken'])?$_POST['puprose_loan_taken']:'';
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
	$subject = 'Loan For NRIs Enquiry';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>What is the Purpose of your loan?</strong></td>
		<td>$purpose_loan</td>
		<td><strong>Enter Amount you wish to borrow</strong></td>
		<td>$amount_borrow</td>
	  </tr>
	  <tr>
		<td><strong>How are you currently employed ?</strong></td>
		<td>$currently_employed</td>
		<td><strong>Purpose of Home loan</strong></td>
		<td>$purpose_home_loan</td>
	  </tr>
	  <tr>
		<td><strong>Your Net Monthly Income?</strong></td>
		<td>$monthly_income</td>
		<td><strong>Currency in which getting the salary?</strong></td>
		<td>$currency_salary</td>
	  </tr>
	  <tr>
		<td><strong>Have you finalize the property</strong></td>
		<td>$finalize_property</td>
		<td><strong>Choose your property city</strong></td>
		<td>$property_city</td>
	  </tr>
	  
	  <tr>
		<td><strong>Where do you currently residing?</strong></td>
		<td>$currently_residing</td>
	  	<td><strong>Current outstanding loan Amt</strong></td>
		<td>$current_outstanding_loan</td>
	  </tr>
	  <tr>
		<td><strong>Name of Existing Bank</strong></td>
		<td>$name_of_existing_bank</td>
	  	<td><strong>Current ROI?</strong></td>
		<td>$current_roi</td>
	  </tr>
	  <tr>
		<td><strong>Purpose for which existing loan was taken?</strong></td>
		<td>$puprose_loan_taken</td>
	  	<td><strong>E-mail I.D</strong></td>
		<td>$email</td>
	  </tr>
	  <tr>
		<td><strong>Mobile Number?</strong></td>
		<td>$mobile_number</td>
	  	<td><strong>Property Type?</strong></td>
		<td>$property_type</td>
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