// JavaScript Document

// basic functions for creating n erasing cookies

$(document).ready(function(){
	$("#sign_in_btn").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var str = "username=" + username + "&password=" + password + "&statuscode='PFA'";
		$.ajax({
		   type: "POST",
			url: "./login.php",
			data: str,
			success: function(result){
				if(result=="admin")
				{
					window.location="admin.php";
				}
				else if(result=="investor")
				{
					window.location ="investor_area.php";
				}
				else{
					$("#errdiv").text(result);
				}
			},
			error: function(XMLHttpRequest, textstatus, err){
					alert(err);
				}
			});
		return false;
	});
});
/*
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
*/
