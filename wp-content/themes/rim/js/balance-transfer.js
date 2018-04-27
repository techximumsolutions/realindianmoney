var originalLoanAmt = 0;
var BTamount = 0;
var ActualOutflowInt = 0;
var NewOutflow = 0;
var AlreadyPaidInt = 0;
var NewInerestBT = 0;
var Saving = 0;
//bands=[Principle,Emi,Int,Principal Rep,Bal] 
var OriginalChartArray = [];
var NewChartArray = [];

var OriginalTenure, OriginalRate, EMIpaid, balanceTenure, ApplicableRate, NewTenure, NewTenure1, PF, OriginalChartPMT, NewChartPMT;
var OriginalChartPrin, OriginalChartEmi, OriginalChartInt, OriginalChartPrinRep, OriginalChartBal;
var NewChartPrin, NewChartEmi, NewChartInt, NewChartPrinRep, NewChartBal, errorOffsetTop, diffROI, diffEMI;

$(function () {
	//alert(0);
	
	/*Select code*/
		$("select").each(function(){
			$(this).children("option").each(function(){
				if($(this).attr("selected"))
				{
					$(".selectedvalue").html($(this).html());	
				}
			});
		});
		$("select").change(function(){
			$(this).prev().html($(this).val());									
		});
		/*Select code*/
		
		
	$(".LoanAmt, .OriginalTenure, .EMIpaid, .NewTenure").keypress(function(event){
		return validateNumber(event);	
	});
	
	$(".OriginalRate").keypress(function(event){
		return validateNumberDot(event);	
	});
	
	$('select').children('option').hide();
	
	$('select').on('click', function(){
		$('select').children('option').hide();
		OriginalTenure = $('.OriginalTenure').val();
		EMIpaid = Number($('.EMIpaid').val());
		if(OriginalTenure=="" || OriginalTenure<6)
		{
			$('.errormessage').show();
			$('.errormessage p').text("Tenure should be more or equal to 6");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		if(OriginalTenure>60)
		{
			$('.errormessage').show();
			$('.errormessage p').text("Tenure max limit is 60");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		else if(EMIpaid=="" || EMIpaid<1 || EMIpaid>=OriginalTenure)
		{
			//alert(OriginalTenure);
			//alert(EMIpaid);
			$('.errormessage').show();
			$('.errormessage p').text("Please Input Proper EMI Paid");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		else {
			balanceTenure = OriginalTenure - EMIpaid;
			
			$('select').children('option').each(function(){
				var selectedVal = $(this).val();
				if(selectedVal>balanceTenure){
					$(this).prevAll().show();
					return false;
				}
				
			});
		}
	});
	
	$('#submitBtn').on('click', function(){
		originalLoanAmt = $('.LoanAmt').val();
		OriginalTenure = $('.OriginalTenure').val();
		OriginalRate = $('.OriginalRate').val();
		EMIpaid = Number($('.EMIpaid').val());
		NewTenure = parseInt($('.NewTenure').text());
		PF = 0;
		OriginalChartPMT = 0;
		BTamount = 0;
		OriginalChartArray = [];
		NewChartArray = [];
		ActualOutflowInt = 0;
		NewOutflow = 0;
		AlreadyPaidInt = 0;
		NewInerestBT = 0;
		Saving = 0;
		OriginalChartEmi = 0;
		OriginalChartInt = 0;
		OriginalChartPrinRep = 0;
		OriginalChartBal = 0;
		OriginalChartPrin = 0;
		BTamount = 0;
		
		NewChartPMT = 0;		
		NewChartPrin = 0;
		
		ewChartEmi = 0;
		NewChartInt = 0;
		NewChartPrinRep = 0;
		NewChartBal = 0;
		NewChartPrin = 0;
		$('.totalSaving').val(00);
		
		errorOffsetTop = $('.errormessage').offset().top;
		
		balanceTenure = OriginalTenure - EMIpaid;
		
		if(originalLoanAmt=="" || originalLoanAmt<10000)
		{
			//alert("Loan Amount should be more or equal to Rs.10000");
			$('.errormessage').show();
			$('.errormessage p').text("Loan Amount should be more or equal to Rs.10000");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		
		if($('.OriginalRate').val()=="" || $('.OriginalRate').val()<1)
		{
			//alert("Please Input Proper Rate");
			$('.errormessage').show();
			$('.errormessage p').text("Please Input Proper Rate");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		if(OriginalTenure=="" || OriginalTenure<6)
		{
			//alert("Tenure should be more or equal to 6");
			$('.errormessage').show();
			$('.errormessage p').text("Tenure should be more or equal to 6");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		if(EMIpaid=="" || EMIpaid<1 || EMIpaid>=OriginalTenure)
		{
			//alert(OriginalTenure);
			//alert(EMIpaid);
			$('.errormessage').show();
			$('.errormessage p').text("Please Input Proper EMI Paid");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		if(NewTenure=="" || NewTenure<1 || NewTenure>balanceTenure)
		{
			//alert("Please Input Proper New Tenure");
			$('.errormessage').show();
			$('.errormessage p').text("Should have tenure less than or equal to remaining tenure of Original Loan's remaining tenure");
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			return false;
		}
		
		OriginalChartPrin = originalLoanAmt;
		OriginalChartPMT = -pmt(OriginalRate, 12, OriginalTenure, originalLoanAmt, 0 );
		
		for (var i=0; i<60; i++){
			
			OriginalChartEmi = OriginalChartPMT;
			OriginalChartInt = OriginalChartPrin*(OriginalRate/100)/12;
			OriginalChartPrinRep = OriginalChartEmi - OriginalChartInt;
			OriginalChartBal = OriginalChartPrin - OriginalChartPrinRep;
			
			OriginalChartArray.push([Math.round(OriginalChartPrin), Math.round(OriginalChartEmi), OriginalChartInt, Math.round(OriginalChartPrinRep), Math.round(OriginalChartBal)]);
			
			OriginalChartPrin = OriginalChartBal;
		}
		
		BTamount = OriginalChartArray[EMIpaid-1][4];
		
		if(BTamount>=2000001){
			ApplicableRate = 11.49;
		}
		else if(BTamount>=1500001){
			ApplicableRate = 12.50;
		}
		else if(BTamount>=1000001){
			ApplicableRate = 12.99;
		}
		else if(BTamount>=500001){
			ApplicableRate = 13.25;
		}
		else if(BTamount>=300001){
			ApplicableRate = 13.49;
		}
		else if(BTamount>=50000){
			ApplicableRate = 13.75;
		}
		else {
			ApplicableRate = "Not Applicable";
			//alert("Not Applicable");
			$('.errormessage').show();
			$('.errormessage p').text(ApplicableRate);
			$("html, body").animate({ scrollTop: errorOffsetTop-20 });
			$('.totalSavingWrap, .applyonlineTxt').hide();
			return false;
		}
		$('.errormessage').hide();
		//console.log(ApplicableRate);
		//alert(OriginalChartArray[10][0]);

		for (var j=0; j<OriginalTenure; j++){
				ActualOutflowInt += OriginalChartArray[j][2];
			}
			//console.log('ActualOutflowInt' + Math.round(ActualOutflowInt));
			
		for (var k=0; k<EMIpaid; k++){
				AlreadyPaidInt += OriginalChartArray[k][2];
			}
			//console.log('AlreadyPaidInt' + Math.round(AlreadyPaidInt));
		
		NewChartPMT = -pmt(ApplicableRate, 12, NewTenure, BTamount, 0 );
		//console.log(NewChartPMT);
		
		NewChartPrin = BTamount;
		
		for (var l=0; l<60; l++){
			
			NewChartEmi = NewChartPMT;
			NewChartInt = NewChartPrin*(ApplicableRate/100)/12;
			NewChartPrinRep = NewChartEmi - NewChartInt;
			NewChartBal = NewChartPrin - NewChartPrinRep;
			
			NewChartArray.push([Math.round(NewChartPrin), Math.round(NewChartEmi), NewChartInt, Math.round(NewChartPrinRep), Math.round(NewChartBal)]);
			
			NewChartPrin = NewChartBal;
		}
		//console.log(NewChartArray);
		
		for (var m=0; m<NewTenure; m++){
				NewInerestBT += NewChartArray[m][2];
			}
			//console.log('NewInerestBT' + Math.round(NewInerestBT));
		
		NewOutflow = AlreadyPaidInt + NewInerestBT + PF;
		Saving = ActualOutflowInt - NewOutflow;
		if(Saving<0){
			Saving =0;
			$('.totalSavingWrap').hide();
		}
		else {
			  $('.totalSavingWrap, .applyonlineTxt').show();
		}
		
		if(Saving == 0){
			$('.totalSavingWrap, .applyonlineTxt').hide();			
		}
		//console.log('Saving' + Math.round(Saving));
		
		$('.whiteOverlay').hide();
		$('.resultBox p').show();
		
		diffROI = OriginalRate - ApplicableRate;
		diffEMI = OriginalChartPMT - NewChartPMT;
		
		if(diffROI==0){
			$('.roiDiff').parent().find('.redbox.existingInt, .bluebox.hdfcInt').animate({'width':'150px'},1000);
			$('.roiDiff').hide();
		}
		else if(diffROI<0){
			$('.redbox.existingInt').animate({'width':'210px'},1000);
			$('.bluebox.hdfcInt').animate({'width':'210px'},1000);
			$('.roiDiff').hide();
		}
		else {
			$('.redbox.existingInt').animate({'width':'210px'},1000);
			$('.bluebox.hdfcInt').animate({'width':'150px'},1000);
			$('.roiDiff').show();
		}
		
		if(diffEMI==0){
			$('.emiDiff').parent().find('.redbox.existingEMI, .bluebox.hdfcEMI').animate({'width':'150px'},1000);
			
		}
		else if(diffEMI<0){
			$('.redbox.existingEMI').animate({'width':'150px'},1000);
			$('.bluebox.hdfcEMI').animate({'width':'150px'},1000);
			$('.emiDiff').hide();
		}
		else {
			$('.redbox.existingEMI').animate({'width':'210px'},1000);
			$('.bluebox.hdfcEMI').animate({'width':'150px'},1000);
			$('.emiDiff').show();
		}
		
		$('.redbox.existingTenure').animate({'width':'210px'},1000);
		$('.bluebox.hdfcTenure').animate({'width':'150px'},1000);
		
		$('.existingInt').text(OriginalRate + '%');
		$('.hdfcInt').text(ApplicableRate + '%');
		$('.roiDiff span').text((diffROI).toFixed(2) + '%');
		$('#hid_existingInt').val(OriginalRate);
		$('#hid_hdfcInt').val(ApplicableRate);
		$('#hid_roiDiff').val((diffROI).toFixed(2));
		
		$('.existingTenure').text(OriginalTenure + ' months');
		$('.hdfcTenure').text(NewTenure + ' months');
		$('.tenureDiff span').text(OriginalTenure - NewTenure);
		$('#hid_existingTenure').val(OriginalTenure);
		$('#hid_hdfcTenure').val(NewTenure);
		$('#hid_tenureDiff').val(OriginalTenure - NewTenure);
		
		$('.existingEMI span').text('Rs.'+addCommas(Math.round(OriginalChartPMT)));
		$('.hdfcEMI span').text('Rs.'+addCommas(Math.round(NewChartPMT)));
		$('.emiDiff span').text(addCommas(Math.round(diffEMI)));
		$('#hid_existingEMI').val((Math.round(OriginalChartPMT)));
		$('#hid_hdfcEMI').val((Math.round(NewChartPMT)));
		$('#hid_emiDiff').val((Math.round(diffEMI)));

		$('.totalSaving').val(addCommas(Math.round(Saving)));
		$('#hid_TotalSavings').val((Math.round(Saving)));

		var offsetTop = $('.rightOutputWrap').offset().top;
		$("html, body").animate({ scrollTop: offsetTop });
		
	});
	
});

function validateNumber(event) {
    var charCode = event.which;
		if(charCode > 47 && charCode < 58 || charCode == 0 || charCode == 8){
			return true;	
		}else{
			return false;	
		}
};

function validateNumberDot(event) {
    var charCode = event.which;
		if(charCode > 47 && charCode < 58 || charCode == 0 || charCode == 8 || charCode == 46){
			return true;	
		}else{
			return false;	
		}
};

// Function to calculate Periodic Payments.

function pmt(rate, per, nper, pv, fv)

{

fv = parseFloat(fv);

nper = parseFloat(nper);

pv = parseFloat(pv);

per = parseFloat(per);

if (( per == 0 ) || ( nper == 0 )){

alert("Why do you want to test me with zeros?");

return(0);

}

rate = eval((rate)/(per * 100));

if ( rate == 0 ) // Interest rate is 0

{

pmt_value = - (fv + pv)/nper;

}

else

{

x = Math.pow(1 + rate,nper);

pmt_value = -((rate * (fv + x * pv))/(-1 + x));

}

pmt_value = conv_number(pmt_value,2);

return (pmt_value);

}

function conv_number(expr, decplaces)

{ // This function is from David Goodman's Javascript Bible.

var str = "" + Math.round(eval(expr) * Math.pow(10,decplaces));

while (str.length <= decplaces) {

str = "0" + str;

}

var decpoint = str.length - decplaces;

return (str.substring(0,decpoint) + "." + str.substring(decpoint,str.length));

}

//Method to format numbers
function addCommas(nStr) {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}