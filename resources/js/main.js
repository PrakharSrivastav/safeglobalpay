$(document).ready(function(){
	$(".delete").on("click",function(e){
		conf = confirm("Are you sure you want to delete the relevent details. You will not be able to retrieve the customer details once you confirm");
		if(conf === false){
			e.preventDefault();
			return false;
		}
		else
		return true;
	});
	
	$(".deactivate").on("click",function(e){
		conf = confirm("Are you sure you want to deactivate the Vendor. Press 'OK' to proceed and 'cancel' if you are not sure.");
		if(conf === false){
			e.preventDefault();
			return false;
		}
		else
		return true;
	});
});

$.validator.addMethod(
   "regex",
   function(value, element, regexp) {
       if (regexp.constructor != RegExp)
            regexp = new RegExp(regexp);
       else if (regexp.global)
           regexp.lastIndex = 0;
       return this.optional(element) || regexp.test(value);
   }
);
	
var validator1 = $('#vendorCreateForm').validate({
        rules: {
            v_name: 			{required: true,minlength: 5},
            v_email: 			{required: true,email: true},
            v_pass: 			{required: true,minlength: 8},
            c_pass: 			{required: true,minlength: 8,equalTo: "#v_pass"},
            v_cont: 			{required: true,digits: true},
            v_alt_cont: 		{digits: true},
            v_percent: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_reser: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_time: 			{required: true,digits: true},
            v_refund: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_chargeback: 		{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_payment_term: 	{required: true},
            v_init_reserve: 	{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_account_name: 	{required: true},
            v_account_num:		{required: true},
            v_bank_name:		{required: true}
        },
        messages: {
            v_name : 			{required: "<small style='color:blue;font-weight:400;'>The Vendor Name field is required.</small>",minlength :"<small style='color:blue;font-weight:400;'>The Vendor Name field must be at least 5 characters in length.</small>"},
            v_email: 			{required: "<small style='color:blue;font-weight:400;'>The Vendor Email field is required.</small>",email: "<small style='color:blue;font-weight:400;'>Please provide a valid email-id.</small>"},
            v_pass: 			{required: "<small style='color:blue;font-weight:400;'>The Password field is required.</small>",minlength: "<small style='color:blue;font-weight:400;'>The Password field must be at least 8 characters in length.</small>"},
            c_pass: 			{required: "<small style='color:blue;font-weight:400;'>The Confirm Password field is required.</small>",minlength: "<small style='color:blue;font-weight:400;'>The Confirm Password field must be at least 8 characters in length.</small>",equalTo: "<small style='color:blue;font-weight:400;'>The Confirm Password field does not match the Password field.</small>"},
            v_cont: 			{required: "<small style='color:blue;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:blue;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
            v_alt_cont: 		{digits: "<small style='color:blue;font-weight:400;'>The Alt Contact Number field must contain only numbers.</small>"},
            v_percent: 			{required: "<small style='color:blue;font-weight:400;'>The Percentage Commission field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Percentage Commission field must contain a decimal number.</small>"},
            v_reser: 			{required: "<small style='color:blue;font-weight:400;'>The Rolling Reserve field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Rolling Reserve field must contain a decimal number.</small>"},
            v_time: 			{required: "<small style='color:blue;font-weight:400;'>The Rolling Reserve Duration field is required.</small>",digits: "<small style='color:blue;font-weight:400;'>The Rolling Reserve Duration field must contain an integer.</small>"},
            v_refund: 			{required: "<small style='color:blue;font-weight:400;'>The Refund Deductions field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Refund Deductions field must contain a decimal number.</small>"},
            v_chargeback: 		{required: "<small style='color:blue;font-weight:400;'>The Chargeback Deductions field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Chargeback Deductions field must contain a decimal number.</small>"},
            v_payment_term: 	{required: "<small style='color:blue;font-weight:400;'>The Payment Duration field is required.</small>"},
            v_init_reserve: 	{required: "<small style='color:blue;font-weight:400;'>The Initial Security Reserve field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Initial Security Reserve field must contain a decimal number.</small>"},
            v_account_name: 	{required: "<small style='color:blue;font-weight:400;'>The Vendor's Account Name field is required.</small>"},
            v_account_num: 		{required: "<small style='color:blue;font-weight:400;'>The Vendor's Account Number field is required.</small>"},
            v_bank_name: 		{required: "<small style='color:blue;font-weight:400;'>The Vendor's Bank Name field is required.</small>"},
        }
    });
    
$('#createVendorButton').on("click",function(e){
	e.preventDefault();
	if(validator1.numberOfInvalids() === 0){
		$('#vendorCreateForm').submit();
	}
	else{
		console.log(validator);
		return false;
	}
});
var validator2 = $('#editVendorForm').validate({
        rules: {
            v_name: 			{required: true,minlength: 5},
            v_email: 			{required: true,email: true},
            v_contact: 			{required: true,digits: true},
            v_alt_contact: 		{digits: true},
            v_percent: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_rolling_res: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_rolling_res_duration: 			{required: true,digits: true},
            v_refund_penalty: 			{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_chargeback_penalty: 		{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_payment_term: 	{required: true},
            v_initial_reserve: 	{required: true,regex: /^[0-9]+\.[0-9]+$/},
            v_account_name: 	{required: true},
            v_account_num:		{required: true},
            v_bank_name:		{required: true}
        },
        messages: {
            v_name : 			{required: "<small style='color:blue;font-weight:400;'>The Vendor Name field is required.</small>",minlength :"<small style='color:blue;font-weight:400;'>The Vendor Name field must be at least 5 characters in length.</small>"},
            v_email: 			{required: "<small style='color:blue;font-weight:400;'>The Vendor Email field is required.</small>",email: "<small style='color:blue;font-weight:400;'>Please provide a valid email-id.</small>"},
            v_contact: 			{required: "<small style='color:blue;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:blue;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
            v_alt_contact: 		{digits: "<small style='color:blue;font-weight:400;'>The Alt Contact Number field must contain only numbers.</small>"},
            v_percent: 			{required: "<small style='color:blue;font-weight:400;'>The Percentage Commission field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Percentage Commission field must contain a decimal number.</small>"},
            v_rolling_res: 			{required: "<small style='color:blue;font-weight:400;'>The Rolling Reserve field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Rolling Reserve field must contain a decimal number.</small>"},
            v_rolling_res_duration: 			{required: "<small style='color:blue;font-weight:400;'>The Rolling Reserve Duration field is required.</small>",digits: "<small style='color:blue;font-weight:400;'>The Rolling Reserve Duration field must contain an integer.</small>"},
            v_refund_penalty: 			{required: "<small style='color:blue;font-weight:400;'>The Refund Deductions field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Refund Deductions field must contain a decimal number.</small>"},
            v_chargeback_penalty: 		{required: "<small style='color:blue;font-weight:400;'>The Chargeback Deductions field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Chargeback Deductions field must contain a decimal number.</small>"},
            v_payment_term: 	{required: "<small style='color:blue;font-weight:400;'>The Payment Duration field is required.</small>"},
            v_initial_reserve: 	{required: "<small style='color:blue;font-weight:400;'>The Initial Security Reserve field is required.</small>",regex: "<small style='color:blue;font-weight:400;'>The Initial Security Reserve field must contain a decimal number.</small>"},
            v_account_name: 	{required: "<small style='color:blue;font-weight:400;'>The Vendor's Account Name field is required.</small>"},
            v_account_num: 		{required: "<small style='color:blue;font-weight:400;'>The Vendor's Account Number field is required.</small>"},
            v_bank_name: 		{required: "<small style='color:blue;font-weight:400;'>The Vendor's Bank Name field is required.</small>"},
        }
    });
$("#editVendorButton").on("click",function(e){
	e.preventDefault();
	if(validator2.numberOfInvalids() === 0){
		$('#editVendorForm').submit();
	}
	else{
		// console.log(validator);
		return false;
	}
});