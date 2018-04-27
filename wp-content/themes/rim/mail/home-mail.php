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
$property_type=isset($_POST['property_type'])?$_POST['property_type']:'';
$purpose_existing_loan=isset($_POST['purpose_existing_loan'])?$_POST['purpose_existing_loan']:'';
$current_outstanding_loan_amnt=isset($_POST['current_outstanding_loan_amnt'])?$_POST['current_outstanding_loan_amnt']:'';
$name_existing_Bank=isset($_POST['name_existing_Bank'])?$_POST['name_existing_Bank']:'';
$current_roi=isset($_POST['current_roi'])?$_POST['current_roi']:'';
$your_profession_type=isset($_POST['your_profession_type'])?$_POST['your_profession_type']:'';
$years_in_current_profession=isset($_POST['years_in_current_profession'])?$_POST['years_in_current_profession']:'';
$gross_annual_income=isset($_POST['gross_annual_income'])?$_POST['gross_annual_income']:'';
$business_type=isset($_POST['business_type'])?$_POST['business_type']:'';
$gross_annual_sale_turnover=isset($_POST['gross_annual_sale_turnover'])?$_POST['gross_annual_sale_turnover']:'';
$net_annual_profit=isset($_POST['net_annual_profit'])?$_POST['net_annual_profit']:'';
$finalize_property=isset($_POST['finalize_property'])?$_POST['finalize_property']:'';
$property_city=isset($_POST['property_city'])?$_POST['property_city']:'';
$currently_residing=isset($_POST['currently_residing'])?$_POST['currently_residing']:'';
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
	$subject = 'Home Loan Enquiry';
	$message = "<table width='100%' border='0' cellspacing='3' cellpadding='3' style='border: #009999 2px solid'>
	  <tr>
		<td>Details</td>
		<td></td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>What is the purpose of your Loan?</strong></td>
		<td>$purpose_loan</td>
		<td>Enter Amount you wish to borrow</td>
		<td>$amount_borrow</td>
	  </tr>
	  <tr>
		<td><strong>How are you currently employed ?</strong></td>
		<td>$currently_employed</td>
		<td>Your Net Monthly Income?:</td>
		<td>$monthly_income</td>
	  </tr>
	  <tr>
		<td><strong>Mode of Salary?</strong></td>
		<td>$mode_of_salary</td>
		<td></td>
		<td></td>
	  </tr>
	  <tr>
		<td><strong>Your Email ID</strong></td>
		<td>$email</td>
		<td>Property Type?</td>
		<td>$property_type</td>
	  </tr>
	  <tr>
		<td><strong>Your Mobile Number?</strong></td>
		<td>$mobile_number</td>
		<td>Purpose for which existing loan was taken?</td>
		<td>$purpose_existing_loan</td>
	  </tr>
	  <tr>
		<td><strong>Current Outstanding Loan Amount</strong></td>
		<td>$current_outstanding_loan_amnt</td>
		<td>Name Of Existing Bank</td>
		<td>$name_existing_Bank</td>
	  </tr>
	  <tr>
		<td><strong>Current ROI:</strong></td>
		<td>$current_roi</td>
		<td>Your Profession Type</td>
		<td>$your_profession_type</td>
	  </tr>
	  <tr>
		<td><strong>Years in current profession</strong></td>
		<td>$years_in_current_profession</td>
		<td>Your Gross Annual Income?</td>
		<td>$gross_annual_income</td>
	  </tr>
	  <tr>
		<td><strong>Select Business type</strong></td>
		<td>$business_type</td>
		<td>Your Gross annual sales/turnover?</td>
		<td>$gross_annual_sale_turnover</td>
	  </tr>
	  <tr>
		<td><strong>Your Net annual profit?</strong></td>
		<td>$net_annual_profit</td>
		<td><strong>Have you finalize the property</strong></td>
		<td>$finalize_property</td>
	  </tr>
	  <tr>
		<td><strong>Choose your property city</strong></td>
		<td>$property_city</td>
		<td><strong>Where do you currently residing?</strong></td>
		<td>$currently_residing</td>
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