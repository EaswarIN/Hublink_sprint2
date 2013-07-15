// JavaScript Document
$(document).ready(function () {
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
    $("#contactSubmit").click(function (e) {
        $("#successmsgdiv").text("");
        $("#errdiv").text("");
        var first = $("#first_name").val();
        var last = $("#last_name").val();
        var email = $("#email").val();
        var comments = $("#comments").val();
        var ct_phone = $("#contact_phone").val();
        var str = "first=" + first + "&last=" + last + "&email=" + email + "&ct_phone=" + ct_phone + "&comments=" + comments;
        if (validate(email, comments, first)) {
            if (checkEmail(email)) {
                $.ajax({
                    type: "POST",
                    url: "./Contactus.php",
                    data: str,
                    success: function (result) {
                        $("#successmsgdiv").text("Thank you for your comments!");
                        $("#errdiv").text("");
                        $("input[type=text]").val('');
                        $("textarea").val('');
                    }
                });
            }
        } else {
            $("#successmsgdiv").text("");
            $("#errdiv").text("Please fill in the mandatory fields highlighted in red !!");
        }
        return false;
    });
});

function validate(email, comments, first) {
    var isValidation = true;
    if (first == "" || first == null) {
        $("#first_name").css("border", "1px solid #FF0000");
        isValidation = false;
    } else {
        $("#first_name").css("border", "thin solid #9A9A9A");

    }
    if (email == "" || email == null) {
        $("#email").css("border", "1px solid #FF0000");
        isValidation = false;
    } else {
        $("#email").css("border", "thin solid #9A9A9A");
    }


    if (comments == "" || comments == null) {
        $("#comments").css("border", "1px solid #FF0000");
        isValidation = false;
    } else {
        $("#comments").css("border", "thin solid #9A9A9A");
    }

    return isValidation;
}

function checkEmail(email) {
    if (!IsEmail(email)) {
        $("#errdiv").text("Please enter valid email id !!");
        return false;
    }
    return true;
}