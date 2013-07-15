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
	$("#sign_in_btn").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var $currentdate = new Date();
		var $currentdatetime = $currentdate.getFullYear() + '/'
		+ ($currentdate.getMonth()+1)  + '/'
		+ $currentdate.getDate() + ' '
		+ $currentdate.getHours() + ':'
		+ ($currentdate.getMinutes()<10?'0':'') + $currentdate.getMinutes() + ':'
		+ ($currentdate.getSeconds()<10?'0':'') + $currentdate.getSeconds();

		var str = "username=" + username + "&password=" + password + "&dateandtime=" + $currentdatetime + "&statuscode='PFA'";
		$.ajax({
		   type: "POST",
			url: "./login.php",
			data: str,
			success: function(result){
				console.log(result);
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
	$("#sign_in_cancel_btn").click(function(){window.location ="index.php";return false; });
});
/*
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
*/
