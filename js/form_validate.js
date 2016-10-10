var main = function(){
	// contact form validation
	$('#contact-form').validate({
		onkeyup : true,
		validClass : 'success',
		errorElement : 'div',
        errorClass : 'invalid',
		rules 	: {
			name 	: {
				required	: true,
				minlength	: 2
			},
			email 	: {
				required	: true,
				email		: true
			},
			message : {
				required	: true,
				minlength   : 10
			}
		},
		messages : {
			name	: {
				required 	: "Name is required",
				minlength	: $.validator.format("Name must be at least {0} characters") 
			},
			email	: {
				required	: "Email is required",
				email		: "Incorrect email format"
			},
			message : {
				required	: "Message can't be empty",
				minlength   : $.validator.format("Message must be minimum of {0} characters")
			}
		},
		submitHandler : function(form){
			var formData = $(form).serialize();


			$.ajax({
				method: 'POST',
				url : '../process/send_email.php',
				data: formData,
				dataType: "text",
				success: function(response){
					$(form).before("<div class='success-msg'>" + response + "</div>");
					$(form).hide();
				}
			});

		},
		invalidHandler : function(event, validator){
			// execute code if form is invalid.
		}
	});
}; // end main

$(document).ready(main);