<form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/business-mail.php" method="post">
            <div id="sf1" class="frm">
             <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">What is the purpose of your Loan?</label>
            <select class="form-control" name="purpose_loan">
              <option value="Bussiness Expansion">Bussiness Expansion</option>
              <option value="Immediate requirement of Working Capital">Immediate requirement of Working Capital</option>
              <option value="Purchase of Raw Material">Purchase of Raw Material</option>
              <option value="Acquring a new Machinary">Acquring a new Machinary</option>
              <option value="Investment in new technology">Investment in new technology</option>
              <option value="Bussiness needs fresh Talent">Bussiness needs fresh Talent</option>
              <option value="Any other purpose">Any other purpose</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your desired Loan Amount</label>
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
            <select class="form-control" name="currently_employed" id="currently_employed">
              <option value="Self employed- Professional">Self employed- Professional</option>
              <option value="Self employed-Bussiness">Self employed-Bussiness</option>
            </select>
          </div>
        </div>
      </div>
      <!--- Currently Employed html ------------->
      <div class="row" id="currently_employed_div">
      		<div class="col-sm-12 col-md-4">
				<div class="form-group">
					<label for="exampleInputEmail1">Your Profession Type</label>
					<select class="form-control" name="your_profession_type">
						<option value="Doctor">Doctor</option>
						<option value="Chartered accountant(CA)">Chartered accountant(CA)</option>
						<option value="Architect">Architect</option>
						<option value="Company Secretary(CS)">Company Secretary(CS)</option>
						<option value="Cost Accountant( ICWA)">Cost Accountant( ICWA)</option>
						<option value="Engineer">Engineer</option>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="form-group">
					<label for="exampleInputEmail1">Years in current profession</label>
					<select class="form-control" name="years_in_current_profession">
						<option value="0-1 Yrs">0-1 Yrs</option>
						<option value="1-2 Yrs">1-2 Yrs</option>
						<option value="2-3 Yrs">2-3 Yrs</option>
						<option value="3-5 Yrs">3-5 Yrs</option>
						<option value="5 Yrs+">5 Yrs+</option>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="form-group">
					<label for="exampleInputEmail1">Your Gross Annual Income?</label>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">Rs</div>
						</div>
						<input type="text" class="form-control" name="gross_annual_income" placeholder="XXXXXXX">
					</div>
				</div>
			</div>
      </div>
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
       </div>
           <input type="submit" value="Go">

</div>


     
    </form>
     <div id="sf2" class="frm" style="display: none;">
    <form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/business-mail-second.php" method="post">
           <div class="row">
           		<div class="col-sm-12 col-md-6">
		          <div class="form-group">
		            <label for="exampleInputEmail1">Your Company Name</label>
		            <div class="input-group mb-2">
		              <input type="text" class="form-control" name="company_name" placeholder="">
		            </div>
		          </div>
		        </div>
		        <div class="col-sm-12 col-md-6">
		          <div class="form-group">
		            <label for="exampleInputEmail1">Residence Type</label>
		            <select class="form-control" name="residence_type">
		            	<option value="Self Owned">Self Owned</option>
		            	<option value="Owned by Spouse">Owned by Spouse</option>
		            	<option value="Owned by Parents">Owned by Parents</option>
		            	<option value="Rented">Rented</option>
		            </select>
		          </div>
		       </div>  	
           </div>
            <!----Currently Employed--------->
            <div class="row" id="currentl_part_two_div"></div>
            
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
            <label for="exampleInputEmail1">Have you taken any loan in past?</label>
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
        <div class="col-sm-12 col-md-4">
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
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Your desired bank to get loan?</label>
            <select class="form-control" name="desired_bank_loan">
              	<option value="HDFC Bank">HDFC Bank</option>
				<option value="ICICI Bank Ltd">ICICI Bank Ltd</option>
				<option value="Axis Bank Ltd">Axis Bank Ltd</option>
				<option value="Indusind Bank">Indusind Bank</option>
				<option value="Capital First">Capital First</option>
				<option value="Tata Capital">Tata Capital</option>
				<option value="Aditya Birla Capital">Aditya Birla Capital</option>
				<option value="Kotak Mahindra Bank">Kotak Mahindra Bank</option>
				<option value="Standard Chartered Bank">Standard Chartered Bank</option>
				<option value="Citi Bank">Citi Bank</option>
				<option value="Fulltron">Fulltron</option>
				<option value="Bajaj Finance">Bajaj Finance</option>
				<option value="Edelwiss">Edelwiss</option>
				<option value="RBL">RBL</option>
				<option value="Clix Capital">Clix Capital</option>
				<option value="SMC">SMC</option>
				<option value="IIFL">IIFL</option>
				<option value="Megma">Megma</option>
				<option value="Yes Bank">Yes Bank</option>
				<option value="Any other Bank">Any other Bank</option>
			 </select>
          </div>
        </div>
      </div>
      
           <input type="submit" value="Go">




     
    </form></div>
    
