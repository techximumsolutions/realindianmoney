<form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/nris-mail.php" method="post">
            <div id="sf1" class="frm">
             <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">What is the Purpose of your loan?</label>
            <select class="form-control" name="purpose_loan" id="purpose_loan_nri">
              <option value="Home Loan">Home Loan</option>
              <option value="Loan Against property">Loan Against property</option>
              <option value="Personal loan">Personal loan</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Entre Amount you wish to borrow?</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rs</div>
              </div>
              <input type="text" class="form-control" name="amount_borrow" placeholder="XXXXXXX">
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">How are you currently employed ?</label>
            <select class="form-control" name="currently_employed" id="currently_employed_nri">
              <option value="Salaried">Salaried</option>
              <option value="Self employed- Professional">Self employed- Professional</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row dispay_block">
      	<div class="col-lg-12">
      		<div class="form-group">
	      		<label for="exampleInputEmail1">Purpose of Home loan</label>
	      		<select class="form-control" name="purpose_home_loan" id="nri_purpose_home_loan">
	              <option value="Land/Plot Purchase">Land/Plot Purchase</option>
	              <option value="Plot Purchase+Construction">Plot Purchase+Construction</option>
	              <option value="Purchase of Flat/House/Floor">Purchase of Flat/House/Floor</option>
	              <option value="Construction of  New House">Construction of  New House</option>
	              <option value="Extension of House">Extension of House</option>
	              <option value="Interior/renovation of House">Interior/renovation of House</option>
	              <option value="Balance transfer of Existing loan">Balance transfer of Existing loan</option>
	            </select>
            </div>
      	</div>
      </div>
      <!-----Salaried Loan-------------->
      <div class="row display_block_div">
      		<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Your Net Monthly Income?</label>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">Rs</div>
						</div>
						<input type="text" class="form-control" name="monthly_income" placeholder="XXXXXXX">
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<label for="exampleInputEmail1">Currency in which getting the salary?</label>
					<div class="input-group mb-2">
						<input type="text" class="form-control" name="currency_salary" placeholder="XXXXXXX">
					</div>
				</div>
			</div>
      </div>
        <!-----End Salaried Loan-------------->
        <!-----Salaried Loan-------------->
      <div class="row" id="nri_home_loan_div">
      </div>
        <!-----End Salaried Loan-------------->
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your Email ID </label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="email" class="form-control" name="email" placeholder="example@xyz.com" required>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your Mobile Number?</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
              </div>
              <input type="text" class="form-control" name="mobile_number" placeholder="9999900000" required>
            </div>
          </div>
         </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Property Type?</label>
            <select class="form-control" name="property_type" id="nri_purpose_home_loan">
              <option value="Builder Property">Builder Property</option>
              <option value="Develpoment authority property">Develpoment authority property</option>
              <option value="Freehold property">Freehold property</option>
              <option value="Society">Society</option>
            </select>
          </div>
        </div>
      
      </div>
      <input type="submit" value="Go">

</div>


     
    </form>
     <div id="sf2" class="frm" style="display: none;">
    <form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/nris-mail-second.php" method="post">
           <div class="row">
           		<div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your Full Name( as per PAN Card)</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" name="full_name_pancard" placeholder="XXXXXXX">
              <input type="hidden" name="email" id="homeEmail" value="">
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Date Of Birth</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" name="date_birth" placeholder="DD-MM-YYYY">
            </div>
          </div>
        </div>
         <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Have you availed any loan in Past?</label>
            <div class="input-group mb-2">
              <select class="form-control" name="availed_loan">
				  <option value="Yes">Yes</option>
				  <option value="No">No</option>
				</select>
            </div>
          </div>
        </div>
		         	
           </div>
             <div class="row">
        
       <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your salary a/c is with( Bank Name)?</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" name="salry_account_bank" placeholder="">
            </div>
          </div>
        </div>
        
         <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your primary Bank A/c is with?</label>
            <select class="form-control" name="primary_bank">
				<option value="Allahabad Bank">Allahabad Bank</option>
				<option value="Andhra Bank">Andhra Bank</option>
				<option value="Bandhan Bank">Bandhan Bank</option>
				<option value="Bank of Baroda">Bank of Baroda</option>
				<option value="Bank of India">Bank of India</option>
				<option value="Bank of Maharastra">Bank of Maharastra</option>
				<option value="Canara Bank">Canara Bank</option>
				<option value="Central Bank of India">Central Bank of India</option>
				<option value="Citi Bank">Citi Bank</option>
				<option value="Corporation Bank">Corporation Bank</option>
				<option value="DBS">DBS</option>
				<option value="Dena Bank">Dena Bank</option>
				<option value="Deutsche Bank">Deutsche Bank</option>
				<option value="Dhanlakshmi Bank">Dhanlakshmi Bank</option>
				<option value="Federal Bank">Federal Bank</option>
				<option value="HSBC">HSBC</option>
				<option value="IDBI Bank">IDBI Bank</option>
				<option value="IDFC Bank">IDFC Bank</option>
				<option value="ING Vysya">ING Vysya</option>
				<option value="Indian Bank">Indian Bank</option>
				<option value="Indian Overseas Bank">Indian Overseas Bank</option>
				<option value="Indusind Bank">Indusind Bank</option>
				<option value="J & K Bank">J & K Bank</option>
				<option value="Karnataka Bank">Karnataka Bank</option>
				<option value="Karur Vysya Bank">Karur Vysya Bank</option>
				<option value="Oriental Bank of Commerce">Oriental Bank of Commerce</option>
				<option value="Punjab & Sind Bank">Punjab & Sind Bank</option>
				<option value="Punjab National Bank">Punjab National Bank</option>
				<option value="RBL Bank Ltd">RBL Bank Ltd</option>
				<option value="South Indian Bank">South Indian Bank</option>
				<option value="State Bank of India">State Bank of India</option>
				<option value="Syndicate Bank">Syndicate Bank</option>
				<option value="UCO Bank">UCO Bank</option>
				<option value="Union Bank of India">Union Bank of India</option>
				<option value="United Bank of India">United Bank of India</option>
				<option value="Vijaya Bank">Vijaya Bank</option>
				<option value="Yes Bank">Yes Bank</option>
			</select>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Total EMI currently you are paying?</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rs.</div>
              </div>
              <input type="text" class="form-control" name="total_emi_paying" placeholder="">
            </div>
          </div>
         </div>
      </div>
      
      
           <input type="submit" value="Go">




     
    </form></div>
    
