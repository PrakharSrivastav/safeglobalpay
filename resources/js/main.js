$(document).ready(function () {
    $(".delete").on("click", function (e) {
        conf = confirm("Are you sure you want to delete the relevent details. You will not be able to retrieve the customer details once you confirm");
        if (conf === false) {
            e.preventDefault();
            return false;
        }
        else
            return true;
    });

    $(".deactivate").on("click", function (e) {
        conf = confirm("Are you sure you want to deactivate the Vendor. Press 'OK' to proceed and 'cancel' if you are not sure.");
        if (conf === false) {
            e.preventDefault();
            return false;
        }
        else
            return true;
    });
});

$.validator.addMethod(
        "regex",
        function (value, element, regexp) {
            if (regexp.constructor != RegExp)
                regexp = new RegExp(regexp);
            else if (regexp.global)
                regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        }
);

var validator1 = $('#vendorCreateForm').validate({
    rules: {
        v_name: {required: true, minlength: 5},
        v_email: {required: true, email: true},
        v_pass: {required: true, minlength: 8},
        c_pass: {required: true, minlength: 8, equalTo: "#v_pass"},
        v_cont: {required: true, digits: true},
        v_alt_cont: {digits: true},
        v_percent: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_reser: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_time: {required: true, digits: true},
        v_refund: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_chargeback: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_min_chargeback: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_payment_term: {required: true},
        v_init_reserve: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_init_setup_reserve: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_account_name: {required: true},
        v_account_num: {required: true},
        v_bank_name: {required: true}
    },
    messages: {
        v_name: {required: "<small style='color:red;font-weight:400;'>The Vendor Name field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Vendor Name field must be at least 5 characters in length.</small>"},
        v_email: {required: "<small style='color:red;font-weight:400;'>The Vendor Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please provide a valid email-id.</small>"},
        v_pass: {required: "<small style='color:red;font-weight:400;'>The Password field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Password field must be at least 8 characters in length.</small>"},
        c_pass: {required: "<small style='color:red;font-weight:400;'>The Confirm Password field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Confirm Password field must be at least 8 characters in length.</small>", equalTo: "<small style='color:red;font-weight:400;'>The Confirm Password field does not match the Password field.</small>"},
        v_cont: {required: "<small style='color:red;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
        v_alt_cont: {digits: "<small style='color:red;font-weight:400;'>The Alt Contact Number field must contain only numbers.</small>"},
        v_percent: {required: "<small style='color:red;font-weight:400;'>The Percentage Commission field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Percentage Commission field must contain a decimal number.</small>"},
        v_reser: {required: "<small style='color:red;font-weight:400;'>The Rolling Reserve field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Rolling Reserve field must contain a decimal number.</small>"},
        v_time: {required: "<small style='color:red;font-weight:400;'>The Rolling Reserve Duration field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Rolling Reserve Duration field must contain an integer.</small>"},
        v_refund: {required: "<small style='color:red;font-weight:400;'>The Refund Deductions field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Refund Deductions field must contain a decimal number.</small>"},
        v_chargeback: {required: "<small style='color:red;font-weight:400;'>The Chargeback Deductions field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Chargeback Deductions field must contain a decimal number.</small>"},
        v_min_chargeback: {required: "<small style='color:red;font-weight:400;'>The Min Chargeback Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Min Chargeback Amount field must contain a decimal number.</small>"},
        v_payment_term: {required: "<small style='color:red;font-weight:400;'>The Payment Duration field is required.</small>"},
        v_init_reserve: {required: "<small style='color:red;font-weight:400;'>The Security Deposit field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Security Deposit field must contain a decimal number.</small>"},
        v_init_setup_reserve: {required: "<small style='color:red;font-weight:400;'>The Setup Fees field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Setup Fees field must contain a decimal number.</small>"},
        v_account_name: {required: "<small style='color:red;font-weight:400;'>The Vendor's Account Name field is required.</small>"},
        v_account_num: {required: "<small style='color:red;font-weight:400;'>The Vendor's Account Number field is required.</small>"},
        v_bank_name: {required: "<small style='color:red;font-weight:400;'>The Vendor's Bank Name field is required.</small>"},
    }
});

$('#createVendorButton').on("click", function (e) {
    e.preventDefault();
    if (validator1.numberOfInvalids() === 0) {
        $('#vendorCreateForm').submit();
    }
    else {
        console.log(validator);
        return false;
    }
});
var validator2 = $('#editVendorForm').validate({
    rules: {
        v_name: {required: true, minlength: 5},
        v_email: {required: true, email: true},
        v_contact: {required: true, digits: true},
        v_alt_contact: {digits: true},
        v_percent: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_rolling_res: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_rolling_res_duration: {required: true, digits: true},
        v_refund_penalty: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_chargeback_penalty: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_min_chargeback: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_payment_term: {required: true},
        v_initial_reserve: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_init_setup_reserve: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        v_account_name: {required: true},
        v_account_num: {required: true},
        v_bank_name: {required: true}
    },
    messages: {
        v_name: {required: "<small style='color:red;font-weight:400;'>The Vendor Name field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Vendor Name field must be at least 5 characters in length.</small>"},
        v_email: {required: "<small style='color:red;font-weight:400;'>The Vendor Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please provide a valid email-id.</small>"},
        v_contact: {required: "<small style='color:red;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
        v_alt_contact: {digits: "<small style='color:red;font-weight:400;'>The Alt Contact Number field must contain only numbers.</small>"},
        v_percent: {required: "<small style='color:red;font-weight:400;'>The Percentage Commission field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Percentage Commission field must contain a decimal number.</small>"},
        v_rolling_res: {required: "<small style='color:red;font-weight:400;'>The Rolling Reserve field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Rolling Reserve field must contain a decimal number.</small>"},
        v_rolling_res_duration: {required: "<small style='color:red;font-weight:400;'>The Rolling Reserve Duration field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Rolling Reserve Duration field must contain an integer.</small>"},
        v_refund_penalty: {required: "<small style='color:red;font-weight:400;'>The Refund Deductions field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Refund Deductions field must contain a decimal number.</small>"},
        v_chargeback_penalty: {required: "<small style='color:red;font-weight:400;'>The Chargeback Deductions field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Chargeback Deductions field must contain a decimal number.</small>"},
        v_min_chargeback: {required: "<small style='color:red;font-weight:400;'>The Min Chargeback Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Min Chargeback Amount field must contain a decimal number.</small>"},
        v_payment_term: {required: "<small style='color:red;font-weight:400;'>The Payment Duration field is required.</small>"},
        v_initial_reserve: {required: "<small style='color:red;font-weight:400;'>The Security Deposit field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Security Deposit field must contain a decimal number.</small>"},
        v_init_setup_reserve: {required: "<small style='color:red;font-weight:400;'>The Setup Fees field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Setup Fees field must contain a decimal number.</small>"},
        v_account_name: {required: "<small style='color:red;font-weight:400;'>The Vendor's Account Name field is required.</small>"},
        v_account_num: {required: "<small style='color:red;font-weight:400;'>The Vendor's Account Number field is required.</small>"},
        v_bank_name: {required: "<small style='color:red;font-weight:400;'>The Vendor's Bank Name field is required.</small>"},
    }
});
$("#editVendorButton").on("click", function (e) {
    e.preventDefault();
    if (validator2.numberOfInvalids() === 0) {
        $('#editVendorForm').submit();
    }
    else {
        // console.log(validator);
        return false;
    }
});

var validator3 = $('#payout_form').validate({
    rules: {
        transaction_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        transaction_description: {required: true, minlength: 10},
        year: {required: true},
        month: {required: true},
        rr_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/}
    },
    messages: {
        transaction_amount: {required: "<small style='color:red;font-weight:400;'>The Payout Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Chargeback Deductions field must contain a decimal number.</small>"},
        transaction_description: {required: "<small style='color:red;font-weight:400;'>The Transaction Description field is required</small>", minlength: "<small style='color:red;font-weight:400;'>The Transaction Description field must be at least 10 characters in length.</small>"},
        year: {required: "<small style='color:red;font-weight:400;'>The Year field is required</small>"},
        month: {required: "<small style='color:red;font-weight:400;'>The Month field is required</small>"},
        rr_amount: {required: "<small style='color:red;font-weight:400;'>The RR Amount field is required</small>", regex: "<small style='color:red;font-weight:400;'>The RR Amount field must contain a decimal number.</small>"}
    }
});
$("#payout_form_submit").on("click", function (e) {
    e.preventDefault();
    if (validator3.numberOfInvalids() === 0) {
        var amount = Number($("#transaction_amount").val());
        if (amount <= 0) {
            alert("The total transaction amount is $0 or less. Payout would be processed only when the amount is greater than $0.");
            return false;
        }
        else {
            $('#payout_form').submit();
        }
    }
    else {
        // console.log(validator);
        return false;
    }
});

var validator4 = $("#create_vendor_form").validate({
    rules: {
        c_name: {required: true, minlength: 5},
        c_email: {required: true, email: true},
        c_contact: {required: true, digits: true},
        c_alt_contact: {digits: true},
        c_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        c_service: {required: true}//,c_desc: {required: true, minlength: 15}
    },
    messages: {
        c_name: {required: "<small style='color:red;font-weight:400;'>The Customer Name field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Customer Name field must be at least 5 characters in length.</small>"},
        c_email: {required: "<small style='color:red;font-weight:400;'>The Customer Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please enter a valid email address.</small>"},
        c_contact: {required: "<small style='color:red;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
        c_alt_contact: {digits: "<small style='color:red;font-weight:400;'>The Alternate Contact Number field must contain only numbers.</small>"},
        c_amount: {required: "<small style='color:red;font-weight:400;'>The Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Amount field must contain a decimal number.</small>"},
        c_service: {required: "<small style='color:red;font-weight:400;'>The Service field is required.</small>"}
        //,c_desc: {required: "<small style='color:red;font-weight:400;'>The Description field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Description field must be at least 15 characters in length.</small>"}
    }
});
$("#create_vendor_btn").on("click", function (e) {
    e.preventDefault();
    if (validator4.numberOfInvalids() === 0) {
        $('#create_vendor_form').submit();
    }
    else {
        console.log(validator);
        return false;
    }
});





var validator5 = $("#edit_customer_form").validate({
    rules: {
        c_name: {required: true, minlength: 5},
        c_email: {required: true, email: true},
        c_contact: {required: true, digits: true},
        c_alt_contact: {digits: true},
        c_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        c_service: {required: true},
        c_desc: {required: true, minlength: 15}
    },
    messages: {
        c_name: {required: "<small style='color:red;font-weight:400;'>The Customer Name field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Customer Name field must be at least 5 characters in length.</small>"},
        c_email: {required: "<small style='color:red;font-weight:400;'>The Customer Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please enter a valid email address.</small>"},
        c_contact: {required: "<small style='color:red;font-weight:400;'>The Contact Number field is required.</small>", digits: "<small style='color:red;font-weight:400;'>The Contact Number field must contain only numbers.</small>"},
        c_alt_contact: {digits: "<small style='color:red;font-weight:400;'>The Alternate Contact Number field must contain only numbers.</small>"},
        c_amount: {required: "<small style='color:red;font-weight:400;'>The Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Amount field must contain a decimal number.</small>"},
        c_service: {required: "<small style='color:red;font-weight:400;'>The Service field is required.</small>"},
        c_desc: {required: "<small style='color:red;font-weight:400;'>The Description field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Description field must be at least 15 characters in length.</small>"}
    }
});
$("#update_customer_btn").on("click", function (e) {
    e.preventDefault();
    if (validator5.numberOfInvalids() === 0) {
        $('#edit_customer_form').submit();
    }
    else {
        // console.log(validator);
        return false;
    }
});

var validator6 = $('#new_invoice_form').validate({
    rules: {
        c_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        c_desc: {required: true, minlength: 15}
    },
    messages: {
        c_amount: {required: "<small style='color:red;font-weight:400;'>The Amount field is required.</small>", regex: "<small style='color:red;font-weight:400;'>The Amount field must contain a decimal number.</small>"},
        c_desc: {required: "<small style='color:red;font-weight:400;'>The Description field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Description field must be at least 15 characters in length.</small>"}
    }
});
$("#send_invoice_btn").on("click", function (e) {
    e.preventDefault();
    if (validator6.numberOfInvalids() === 0) {
        $('#new_invoice_form').submit();
    }
    else {
        // console.log(validator);
        return false;
    }
});

var validator7 = $('#login_form').validate({
    rules: {
        sgp_username: {required: true, minlength: 5},
        sgp_password: {required: true, minlength: 5}
    },
    messages: {
        sgp_username: {required: "<small style='color:red;font-weight:400;'>The Username field is required.</small>", minlength: "<small style='color:red;font-weight:400;'>The Username field must be at least 8 characters in length.</small>"},
        sgp_password: {required: "<small style='color:red;font-weight:400;'>The Password field is required</small>", minlength: "<small style='color:red;font-weight:400;'>The Password field must be at least 8 characters in length.</small>"}
    }
});
$("#login_btn").on("click", function (e) {
    e.preventDefault();
    if (validator7.numberOfInvalids() === 0) {
        $('#login_form').submit();
    }
    else {
        // console.log(validator);
        return false;
    }
});


var validator8 = $('#reset_pass_form').validate({
    rules: {
        sgp_f_email: {required: true, email: true},
        sgp_f_password: {required: true, minlength: 8},
        sgp_c_password: {required: true, minlength: 8, equalTo: "#sgp_f_password"},
    },
    messages: {
        sgp_f_email: {required: "<small style='color:red;font-weight:400;'>The Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please provide a valid email-id.</small>"},
        sgp_f_password: {required: "<small style='color:red;font-weight:400;'>The Password field is required</small>", minlength: "<small style='color:red;font-weight:400;'>The Password field must be at least 8 characters in length.</small>"},
        sgp_c_password: {required: "<small style='color:red;font-weight:400;'>The Confirm Password field is required</small>", minlength: "<small style='color:red;font-weight:400;'>The Confirm Password field must be at least 8 characters in length.</small>", equalTo: "<small style='color:red;font-weight:400;'>The Confirm Password must match the Password field.</small>"}
    }
});
$("#reset_pw_btn").on("click", function (e) {
    // alert();
    // console.log(validator8);
    // return false;
    e.preventDefault();
    if (validator8.numberOfInvalids() === 0) {
        $('#reset_pass_form').submit();
    }
    else {
        // console.log(validator8);
        return false;
    }
});


var validator9 = $('#resend_username').validate({
    rules: {
        sgp_r_email: {required: true, email: true},
    },
    messages: {
        sgp_r_email: {required: "<small style='color:red;font-weight:400;'>The Email field is required.</small>", email: "<small style='color:red;font-weight:400;'>Please provide a valid email-id.</small>"},
    }
});
$("#resend_username_btn").on("click", function (e) {
    e.preventDefault();
    if (validator9.numberOfInvalids() === 0) {
        $('#resend_username').submit();
    }
    else {
        return false;
    }
});

var validaor10 = $('#refund_chargeback_form').validate({
    rules: {
        chargeback_refund_amount: {required: true, regex: /^[0-9]+\.[0-9]+$/},
        description: {required: true, minlength: 15}
    },
    messages: {
        chargeback_refund_amount: {required: "<small style='color:red;font-weight:400;'>Please provide the amount.</small>", regex: "<small style='color:red;font-weight:400;'>Please provide amount in the format 123.45</small>"},
        description: {required: "<small style='color:red;font-weight:400;'>Please provide the description.</small>", minlength: "<small style='color:red;font-weight:400;'>Please provide atleast 15 characters for description.</small>"}
    }
});


$(".toggle").on("click", function () {
    r = confirm("You are going to change the vendor status. Please click OK only if you are sure");
    return r;
});

$("#transaction_details").hide();
$("#show_view_tr").on('click', function () {
    $("#transaction_details").slideToggle(500);
})