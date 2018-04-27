<?php
header('Content-type: application/json');
$emailErr = '';
$purpose_loan=isset($_POST['purpose_loan'])?$_POST['purpose_loan']:'';
$amount_borrow=isset($_POST['amount_borrow'])?$_POST['amount_borrow']:'';
$currently_employed=isset($_POST['currently_employed'])?$_POST['currently_employed']:'';
$monthly_income=isset($_POST['monthly_income'])?$_POST['monthly_income']:'';
$mode_of_salary=isset($_POST['mode_of_salary'])?$_POST['mode_of_salary']:'';
$email=isset($_POST['email'])?$_POST['email']:'';
$mobile_number=isset($_POST['mobile_number'])?$_POST['mobile_number']:'';
$currently_residing=isset($_POST['currently_residing'])?$_POST['currently_residing']:'';
$location_property=isset($_POST['location_property'])?$_POST['location_property']:'';
$your_profession_type=isset($_POST['your_profession_type'])?$_POST['your_profession_type']:'';
$years_in_current_profession=isset($_POST['years_in_current_profession'])?$_POST['years_in_current_profession']:'';
$gross_annual_income=isset($_POST['gross_annual_income'])?$_POST['gross_annual_income']:'';
$business_type=isset($_POST['business_type'])?$_POST['business_type']:'';
$gross_annual_sale_turnover=isset($_POST['gross_annual_sale_turnover'])?$_POST['gross_annual_sale_turnover']:'';
$net_annual_profit=isset($_POST['net_annual_profit'])?$_POST['net_annual_profit']:'';
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
	$subject = 'Loan Against Property Enquiry';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>Kind of property on which you need Loan?</strong></td>
		<td>$purpose_loan</td>
		<td><strong>Your desired Loan Amount</strong></td>
		<td>$amount_borrow</td>
	  </tr>
	  <tr>
		<td><strong>How are you currently employed ?</strong></td>
		<td>$currently_employed</td>
		<td><strong>Your Net Monthly Income?:</strong></td>
		<td>$monthly_income</td>
	  </tr>
	  <tr>
		<td><strong>Mode of Salary?</strong></td>
		<td>$mode_of_salary</td>
		<td><strong>Your Profession Type</strong></td>
		<td>$your_profession_type</td>
	  </tr>
	  <tr>
		<td><strong>Your Email ID</strong></td>
		<td>$email</td>
		<td><strong>Your Mobile Number?</strong></td>
		<td>$mobile_number</td>
	  </tr>
	  <tr>
		<td><strong>Years in current profession</strong></td>
		<td>$years_in_current_profession</td>
		<td><strong>Your Gross Annual Income?</strong></td>
		<td>$gross_annual_income</td>
	  </tr>
	  <tr>
		<td><strong>Select Business type</strong></td>
		<td>$business_type</td>
		<td><strong>Your Gross annual sales/turnover?</strong></td>
		<td>$gross_annual_sale_turnover</td>
	  </tr>
	  <tr>
		<td><strong>Your Net annual profit?</strong></td>
		<td>$net_annual_profit</td>
		<td><strong>Where do you currently residing?</strong></td>
		<td>$currently_residing</td>
	  </tr>
	  <tr>
		<td><strong>Location of Property</strong></td>
		<td>$location_property</td>
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