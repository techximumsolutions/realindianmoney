<section class="content-rim">
<div class="container">
<form name="form1" method="post" action="#" id="form1" autocomplete="off">
<div class="row">
<div class="col-sm-7">
<div class="grey-bg5">
<form class="form">
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Your Existing Personal Loan Amount</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">₹</div>
              </div>
              <input name="txtLoanAmount" type="text" maxlength="9" id="txtLoanAmount" class="form-control LoanAmt">
            </div>
          </div>
          </div>
		  <div class="col-sm-6">
<div class="form-group">
<label>It’s Rate of Interest</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">%</div>
              </div>
              <input name="txtROI" type="text" maxlength="5" id="txtROI" class="form-control OriginalRate" >
            </div>
          </div>
          </div>
          
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>It’s Tenure</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Months</div>
              </div>
              <input name="txtTenure" type="text" maxlength="3" id="txtTenure"  class="form-control OriginalTenure">
            </div>
          </div>
          </div>
		  <div class="col-sm-6">
<div class="form-group">
<label>EMIs Paid</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Nos</div>
              </div>
              <input name="txtEMIPaid" type="text" maxlength="3" id="txtEMIPaid" class="form-control EMIpaid" >
            </div>
          </div>
          </div>
          
</div>

<div class="row">

          <div class="col-sm-12">
<div class="form-group">
<label>Tenure you wish to have on your HDFC Bank Personal Loan</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Months</div>
              </div>
			  <div class="selectedvalue NewTenure" style="display:none">
                                </div>
              <select name="txtNewTenure" id="txtNewTenure" class="form-control">
<option value=""></option>
			  <option value="6">6</option>
	<option value="12">12</option>
	<option value="18">18</option>
	<option value="24">24</option>
	<option value="30">30</option>
	<option value="36">36</option>
	<option value="42">42</option>
	<option value="48">48</option>
	<option value="54">54</option>
	<option value="60">60</option>


</select>
            </div>
          </div>
          </div>
</div>
<hr>
<a href="javascript:;" id="submitBtn" class="btn btn-primary linkBtn" title="Calculate">Calculate</a>
<div class="errormessage"><p style="color:red"></p></div>
<!--<button id="submitBtn"  type="submit" class="btn btn-primary linkBtn">Calculate</button>-->
<hr>

</form>
</div>


</div>
<div class="col-sm-5">
<div class="calculation-result rightOutputWrap">
<div class="white-overlay whiteOverlay">
</div>
<h2><?php echo get_post_custom_values('saving_title',$post->ID)[0] ?></h2>
<div class="totalsavings" style="display:block">
<div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text"><?php echo get_post_custom_values('saving_title',$post->ID)[0] ?></div>
              </div>
              <input name="txtTotalSavings" type="text" value="00" maxlength="3" id="txtTotalSavings" class="totalSaving form-control" disabled="disabled">
			</div>
          </div>
</div>
<div class="progress-bar-color">
<ul>
<li> <i class="fa fa-circle" aria-hidden="true"></i> Your Existing Personal Loan Amount</li>
<li> <i class="fa fa-circle" aria-hidden="true"></i> RIM Bank Loan</li>
</ul>
</div>
<div class="progress-bars">
<div class="progress-topic">
<i class="fa fa-percent"></i>
<h5> Rate of Interest</h5>
</div>
<div class="bars">
<div class="progress">
  <div class="progress-bar bg-danger redbox existingInt" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-success bluebox hdfcInt" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-bars">
<div class="progress-topic">
<i class="fa fa-percent"></i>
<h5> Tenure</h5>
</div>
<div class="bars">
<div class="progress"> 
  <div class="progress-bar bg-danger redbox existingTenure" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-success bluebox hdfcTenure" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
<div class="progress-bars">
<div class="progress-topic">
<i class="fa fa-percent"></i>
<h5> Rate of Interest</h5>
</div>
<div class="bars">
<div class="progress">
  <div class="progress-bar bg-danger redbox existingEMI" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><span></span></div>
</div>
<div class="progress">
  <div class="progress-bar bg-success bluebox hdfcEMI" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</section>
