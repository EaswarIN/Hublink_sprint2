// JavaScript Document

$(document).ready( function(){
	$("#contact_us").submit( function(){
		var first = $("#first_name").val();
		var last = $("#last_name").val();
		var email = $("#email").val();
		var comments = $("#comments").val();
		var str = "first=" + first + "&last=" + last + "&email=" + email + "&comments=" + comments;
			if(validate(email,comments)){
				$.ajax({
				   type: "POST",
					url: "./Contactus.php",
					data: str,
					success: function(result){ 
						if(result=="CONTACT SUBMITTED")
						{
							window.location="index.php";
						}
						else {
								$("#errdiv").text(result);				
							}
					}
				});
			}
		else{
			$("#errdiv").text("Please fill in the mandatory fields highlighted in red !!");	
		}
			return false;
	});
function validate(email, comments){
			var isValidation = false;
			if( email == "" || email == null)
			{
				$("#email").css("border", "1px solid #FF0000");
			}
			else{
				$("#email").css("border", "thin solid #9A9A9A");
					return checkEmail(email)
			}
			if( comments == "" || comments == null)
			{
				$("#comments").css("border", "1px solid #FF0000");
			}
			else {
				$("#comments").css("border", "thin solid #9A9A9A");
					isValidation = true;
			}
			return isValidation;
	}
function checkEmail(email){
		if(!IsEmail(email)){
			$("#errdiv").text("Please enter valid email id !!");
			return false;
		}	
		return true;
}

});