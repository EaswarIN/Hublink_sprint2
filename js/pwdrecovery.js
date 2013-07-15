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

	$("#submit").click(function(event){
		$("#errdiv").text("");
		$("#msgdiv").text("");

		if(validate())
		{
			var str = "email=" + $("#email").val();
			//alert("1EMail " + $("#email").val());
			$.ajax({
				type: "POST",
				url: "./pwd_recovery.php",
				data: str,
				success: function(result){
					//alert("3EMail " + $("#email").val());
					//console.log( $.trim(result));
					if( $.trim(result) == "Not a Registered User"){
						$('html, body').animate({scrollTop: '0px'}, 150);
						$("#errdiv").html("The user <strong>'"+ $('#email').val() +"'</strong> does not Exist in our database, please double check and retry.");
						//$("#email").css("border", "1px solid #FF0000");
						return false;
						}
						$('html, body').animate({scrollTop: '0px'}, 150);
						//$("#errdiv").html(result);
						window.location="pwd_recovery_page.php";
				}
			});
		}
		else{$('html, body').animate({scrollTop: '0px'}, 100);}
		//return false;

});

function validate(){

var email = $("#email").val();

var at_fault = false;

	if( email == "" || email == null)
	{
		at_fault = true;
		$("#email").css("border", "1px solid #FF0000");
	}
	else $("#email").css("border", "thin solid #9A9A9A");

	if(at_fault)
	{
		$("#errdiv").text("Please fill in the mandatory field highlighted in red.");
		at_fault = false;
		return false;
	}
	else{
		return checkEmail(email);
	}
}

function checkEmail(email){
	if(!IsEmail(email)){
		$("#errdiv").text("Please enter valid email id !!");
		$("#email").css("border", "1px solid #FF0000");
		return false;
	}
	return true;
}

});

