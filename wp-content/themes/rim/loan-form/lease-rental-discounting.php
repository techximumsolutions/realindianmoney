<form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/discounting-mail.php" method="post">
            <div id="sf1" class="frm">
             <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Kind of property you have given on lease?</label>
            <select class="form-control" name="purpose_loan">
              <option value="Residential">Residential</option>
              <option value="Commercial">Commercial</option>
              <option value="Industrial">Industrial</option>
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
            <select class="form-control" name="currently_employed">
              <option value="Salaried(Govt Employee)">Salaried(Govt Employee)</option>
              <option value="Salaried ( Pvt Employee)">Salaried ( Pvt Employee)</option>
              <option value="Self employed- Professional">Self employed- Professional</option>
              <option value="Self employed-Bussiness">Self employed-Bussiness</option>
            </select>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Monthly rent which you are getting?</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rs.</div>
              </div>
              <input type="text" class="form-control" name="monthly_rent" placeholder="" >
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Balance period of lease?</label>
            <div class="input-group mb-2">
              <input type="text" class="form-control" name="balance_period_lease" placeholder="">
            </div>
          </div>
         </div>
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Have you already taken loan on said property?</label>
            <select class="form-control" name="taken_loan_property">
				  <option value="Yes">Yes</option>
				  <option value="No">No</option>
				</select>
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
        <div class="col-sm-12 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Choose your property city</label>
            <input type="text" class="form-control" name="currently_residing" placeholder="" required>
          </div>
        </div>
      
      </div>
           <input type="submit" value="Go">

</div>


     
    </form>
     <div id="sf2" class="frm" style="display: none;">
    <form class="submit-form" action="" data-url="<?php echo get_template_directory_uri(); ?>/mail/discounting-mail-second.php" method="post">
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
        
        
        
         <div class="col-sm-12 col-md-6">
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
    
