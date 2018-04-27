$(document).ready(function() {
	$('form').submit(function(e){
	  e.preventDefault();
	  var formData = new FormData(this);
	   var url  = $(this).data('url');
		$.ajax({
			url: url,
			type: 'POST',
			data: formData,
			async: false,
			dataType:'json',
			beforeSend: function() {
				alert('sending');
			},
			success: function (data) {
				html='';
				if(data.status==false){
					alert(data.errormsg);
				}else if(data.status==true && data.successmsg!=''){
					$(".frm").hide("fast");
					$("#sf2").show("slow");
					$("#homeEmail").val(data.successmsg);
				}else if(data.status==true && data.successmsg==''){
					$("#sf2").hide("slow");
					alert(data.successmsg);
				}
			},
		complete: function() {
			alert('sent');
		},
			cache: false,
			contentType: false,
			processData: false
		});

		return false;
	});
	//home loan fields
	$('#purpose_loan').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=="Balance transfer of Existing loan"){
			html +='<div class="col-sm-12 col-md-4">';
			html +='  <div class="form-group">';
			html +='	<label for="exampleInputEmail1">Current Outstanding Loan Amount</label>';
			html +='	<div class="input-group mb-2">';
			html +='	  <div class="input-group-prepend">';
			html +='		<div class="input-group-text">Rs</div>';
			html +='	  </div>';
			html +='	  <input type="text" class="form-control" name="current_outstanding_loan_amnt" placeholder="XXXXXXX">';
			html +='	</div>';
			html +='  </div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='  <div class="form-group">';
			html +='	<label for="exampleInputEmail1">Name Of Existing Bank</label>';
			html +='	<div class="input-group mb-2">';
			html +='	  <input type="text" class="form-control" name="name_existing Bank" placeholder="">';
			html +='	</div>';
			html +='  </div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='  <div class="form-group">';
			html +='	<label for="exampleInputEmail1">Current ROI</label>';
			html +='	<div class="input-group mb-2">';
			html +='	  <input type="text" class="form-control" name="current_roi" placeholder="">';
			html +='	</div>';
			html +='  </div>';
			html +='</div>';
		}
		$('#purpose_loan_div').html(html);
		
	});
	$('#currently_employed').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=='Salaried(Govt Employee)' || val=='Salaried ( Pvt Employee)'){
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Net Monthly Income?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="monthly_income" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Mode of Salary?</label>';
			html +='		<select class="form-control" name="mode_of_salary">';
			html +='			<option value="Bank Transfer">Bank Transfer</option>';
			html +='			<option value="Cheque">Cheque</option>';
			html +='			<option value="Cash">Cash</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
		}else if(val=='Self employed- Professional'){
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Profession Type</label>';
			html +='		<select class="form-control" name="your_profession_type">';
			html +='			<option value="Doctor">Doctor</option>';
			html +='			<option value="Chartered accountant(CA)">Chartered accountant(CA)</option>';
			html +='			<option value="Architect">Architect</option>';
			html +='			<option value="Company Secretary(CS)">Company Secretary(CS)</option>';
			html +='			<option value="Cost Accountant( ICWA)">Cost Accountant( ICWA)</option>';
			html +='			<option value="Engineer">Engineer</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Years in current profession</label>';
			html +='		<select class="form-control" name="years_in_current_profession">';
			html +='			<option value="0-1 Yrs">0-1 Yrs</option>';
			html +='			<option value="1-2 Yrs">1-2 Yrs</option>';
			html +='			<option value="2-3 Yrs">2-3 Yrs</option>';
			html +='			<option value="3-5 Yrs">3-5 Yrs</option>';
			html +='			<option value="5 Yrs+">5 Yrs+</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Gross Annual Income?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="gross_annual_income" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
		}else if(val=='Self employed-Bussiness'){
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Select Business type</label>';
			html +='		<select class="form-control" name="business_type">';
			html +='			<option value="Properietor">Properietor</option>';
			html +='			<option value="Partnership Firm">Partnership Firm</option>';
			html +='			<option value="Pvt Ltd Company">Pvt Ltd Company</option>';
			html +='			<option value="Director applying as an individual">Director applying as an individual</option>';
			html +='			<option value="Others-Business">Others-Business</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Gross annual sales/turnover?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="gross_annual_sale_turnover" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Net annual profit?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="net_annual_profit" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
		}
		$('#currently_employed_div').html(html);
	}); 
	$('#purpose_existing_loan').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=='Purchase of Flat/House/Floor'){
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Have you finalize the property</label>';
			html +='		<select class="form-control" name="finalize_property">';
			html +='			<option value="Yes">Yes</option>';
			html +='			<option value="No">No</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Choose your property city</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="property_city" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Where do you currently residing?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="currently_residing" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
		}
		$('#purpose_existing_loan_div').html(html);
	});		
	//Personal Loan
	
	$('#currently_employed').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=='Self employed- Professional'){
			html +='<div class="col-sm-12 col-md-12">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Office/Factory Type</label>';
			html +='		<select class="form-control" name="office_factory_type">';
			html +='			<option value="Self Owned">Self Owned</option>';
			html +='			<option value="Rented">Rented</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
		}else if(val=='Self employed-Bussiness'){
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Nature of Business</label>';
			html +='		<select class="form-control" name="nature_business">';
			html +='			<option value="Manufacturing">Manufacturing</option>';
			html +='			<option value="Trading">Trading</option>';
			html +='			<option value="Retailer">Retailer</option>';
			html +='			<option value="Services">Services</option>';
			html +='			<option value="E-Commerce seller/Merchandiser">E-Commerce seller/Merchandiser</option>';
			html +='			<option value="Distributor">Distributor</option>';
			html +='			<option value="Others">Others</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Office/Factory Type</label>';
			html +='		<select class="form-control" name="office_factory_type">';
			html +='			<option value="Self Owned">Self Owned</option>';
			html +='			<option value="Owned by Spouse">Owned by Spouse</option>';
			html +='			<option value="Owned by Parents">Owned by Parents</option>';
			html +='			<option value="Rented">Rented</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
		}
		$('#currentl_part_two_div').html(html);
	}); 
	
	//Personal Loan
	
	$('#currently_employed_nri').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=='Self employed-Bussiness'){
			html +='<div class="col-sm-12">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Nature of Business</label>';
			html +='		<select class="form-control" name="nature_business">';
			html +='			<option value="Manufacturing">Manufacturing</option>';
			html +='			<option value="Trading">Trading</option>';
			html +='			<option value="Retailer">Retailer</option>';
			html +='			<option value="Services">Services</option>';
			html +='			<option value="E-Commerce seller/Merchandiser">E-Commerce seller/Merchandiser</option>';
			html +='			<option value="Distributor">Distributor</option>';
			html +='			<option value="Others">Others</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
		}
		$('#currentlap_part_two_div').html(html);
	}); 
	
	//NRI Loan
	
	$('#currently_employed').on('change',function(){
		var val = $(this).val();
		var html='';
		if(val=='Salaried'){
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Your Net Monthly Income?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="monthly_income" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-6">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Currency in which getting the salary?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="currency_salary" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
		}
		$('#nri_salry_div').html(html);
	}); 
	$('#purpose_loan_nri').on('change',function(){
		if($(this).val()=='Home Loan'){
			 $(".dispay_block").css("display", "block");
		}else{
			$(".dispay_block").css("display", "none");
		}
	});
	$('#currently_employed_nri').on('change',function(){
		if($(this).val()=='Salaried'){
			 $(".display_block_div").css("display", "block");
		}else{
			$(".display_block_div").css("display", "none");
		}
	});
	$('#nri_purpose_home_loan').on('change',function(){
		html='';
		if($(this).val()=='Purchase of Flat/House/Floor'){
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Have you finalize the property</label>';
			html +='		<select class="form-control" name="finalize_property">';
			html +='			<option value="Yes">Yes</option>';
			html +='			<option value="No">No</option>';
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Choose your property city</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="property_city" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-4">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Where do you currently residing?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="currently_residing" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
		}else if($(this).val()=='Balance transfer of Existing loan'){
			html +='<div class="col-sm-12 col-md-3">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Current outstanding loan Amt</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<div class="input-group-prepend">';
			html +='				<div class="input-group-text">Rs</div>';
			html +='			</div>';
			html +='			<input type="text" class="form-control" name="current_outstanding_loan" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-3">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Name of Existing Bank</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="name_of_existing_bank" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-3">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Current ROI?</label>';
			html +='		<div class="input-group mb-2">';
			html +='			<input type="text" class="form-control" name="current_roi" placeholder="XXXXXXX">';
			html +='		</div>';
			html +='	</div>';
			html +='</div>';
			html +='<div class="col-sm-12 col-md-3">';
			html +='	<div class="form-group">';
			html +='		<label for="exampleInputEmail1">Purpose for which existing loan was taken?</label>';
			html +='		<select class="form-control" name="puprose_loan_taken">';
			html +='			<option value="Land/Plot Purchase">Land/Plot Purchase</option>';
			html +='			<option value="Plot Purchase+Construction">Plot Purchase+Construction</option>';
			html +='			<option value="Purchase of Flat/House/Floor">Purchase of Flat/House/Floor</option>';
			html +='			<option value="Construction of  New House">Construction of  New House</option>';
			html +='			<option value="Extension of House">Extension of House</option>';
			html +='			<option value="Interior/renovation of House">Interior/renovation of House</option>';	
			html +='		</select>';
			html +='	</div>';
			html +='</div>';
		}
		$('#nri_home_loan_div').html(html);
	}); 	
  });