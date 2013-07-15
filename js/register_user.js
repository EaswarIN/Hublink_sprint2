// JavaScript Document

// basic functions for creating n erasing cookies

$(document).ready(function(){
	$.ajaxSetup({
		            beforeSend: function () {
		              var height = $('body').css('height');
						  $(".bgModel").css("height", height);
						  $(".bgModel").show();
		              },
		            complete: function () {
						$(".bgModel").hide();
		            },
		            success: function () {}
        });
	$("#register_btn").click(function(){
		var username = $("#username").val();
		var activationcode = $("#activationcode").val();
		var password1 = $("#password1").val();
		var password2 = $("#password2").val();
		if(validate(password1, password2) && password1==password2)
		{
		var str = "username=" + username + "&activationcode=" + activationcode + "&password=" + password1;
		$.ajax({
		   type: "POST",
			url: "./register_user_save.php",
			data: str,
			success: function(result){

				if(result=="register")
				{
					window.location="./sign_in.php";
				}
				else{
					$("#errdiv").text(result);
				}
			}
			/*error: function(XMLHttpRequest, textstatus, err){
					alert(err);
				}*/
			});
		}
		else
		{
			$("#errdiv").text("New password &Confirm password cannot be empty and should be equal !!");
		}
		return false;
	});

	function validate(password1, password2){
		var isValidation = false;
		if( password1 == "" || password1 == null)
		{
			$("#password1").css("border", "1px solid #FF0000");


		}
		else{
			$("#password1").css("border", "thin solid #9A9A9A");
				//isValidation = true;
		}

		if( password2 == "" || password2 == null)
		{
			$("#password2").css("border", "1px solid #FF0000");
		}
		else{
			$("#password2").css("border", "thin solid #9A9A9A");

				isValidation = true;
		}
		return isValidation;
	}

	$("#sign_in_cancel_btn").click(function(){window.location ="index.php";return false; });
});
/*
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
*/
