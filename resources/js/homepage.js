// $("#question_notif").hide();
$( document ).ready(function() {
			// $("#question_notif").hide();
        	$(window).on('load resize orientationChange', function(event) {
			    var width = $(window).width();
			    if (width <= 321){
			    	$(".header-image").attr("src",base_path+"africa-xs.jpg");
			    	$(".header-image").height(180);
			    }
			    else if (width <= 481 && width > 321){
			    	// alert(width);
			    	$(".header-image").attr("src",base_path+"africa-sm.jpg");
			    	$(".header-image").height(270);
			    }
			    else if (width <= 768 && width > 481){
			    	// alert(width);
			    	$(".header-image").attr("src",base_path+"africa-md.jpg");
			    	$(".header-image").height(431);
			    }
			    else if (width <= 992 && width > 768){
			    	// alert(width);
			    	$(".header-image").attr("src",base_path+"africa-lm.jpg");
			    	$(".header-image").height(557);
			    }
			    else{
			    	$(".header-image").attr("src",base_path+"africa.jpg");
			    	$(".header-image").height(599);
			    }
			});

			$(".scroll-btn").click(function() {
				href =  $(this).attr("href") ;
				// console.log($(this).attr("href"));
				$('html, body').animate({
					scrollTop:  $(href).offset().top-50
				}, 800);
			});
			
			var validator_0 = $('#contact_form').validate({
				rules: {
					question: 			{required: true, digits: true},
					message: 			{required: true, minlength: 15},
					subject: 			{required: true, minlength: 10},
					vname: 				{required: true, minlength: 3},
					email: 				{required: true, email: true}
				},
				messages: {
					question : 			{required: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please provide an answer to the question.</div>",digits :"<div style='text-align:center;color:#FFF;font-weight:400;'>The answer should be a number.</div>"},
					message: 			{required: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please let us know how can we help you.</div>",minlength: "<div style='text-align:center;color:#FFF;font-weight:400;'>Your message should have atleast 15 characters.</div>"},
					subject: 			{required: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please provide a subject to your message.</div>",minlength: "<div style='text-align:center;color:#FFF;font-weight:400;'>The Subject line should have atleast 15 characters.</div>"},
					vname: 			{required: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please let us know your name.</div>",minlength: "<div style='text-align:center;color:#FFF;font-weight:400;'>The name should have atleast 3 characters.</div>"},
					email: 			{required: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please provide us your email address.</div>", digits: "<div style='text-align:center;color:#FFF;font-weight:400;'>Please provide a valid email adress</div>"}
				}
			});
			
			$('#submit_contact_form').on("click",function(e){
				//console.log(validator_0.numberOfInvalids());
				//e.preventDefault();
				//alert());
				
				
				if($("#contact_form").valid()){
					if(actual_answer != $('#question').val()){
						alert("Your answer to the question is incorrect. Please check and try again.");
					}
					else{
						$.post( base_url+"home/send_message",$("#contact_form").serialize(), function( data ) {
							 if("0" == data){
								 alert("Your message is received successfully.")
							 }else{
								 alert ("There was a problem processing your message. Please try again after sometime.")
							 }
							 $("#contact_form")[0].reset();
						});
					}
				}
				else{
					//$("#question_notif").hide();
					console.log(validator_0);
					return false;
				}
			});
		});