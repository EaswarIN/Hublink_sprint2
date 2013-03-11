function getData(){
var prefix = $("#prefix").val();
var first = $("#First").val();
var last = $("#Last").val();
var title = $("#title").val();
var company = $("#company").val();
var street = $("#Street").val();
var second_street = $("#2nd_street").val();
var zip = $("#ZIP").val();
var town = $("#town").val();
var country = $("#country").val();
var work_ph = $("#isd_code").val() + " " + $("#work_ph").val();
var mobile_ph = $("#isd_code").val() + " " + $("#mobile_ph").val();
var email = $("#email").val();
var web_page = $("#web_page").val();
var inv_area = $("#inv_area").text();

if($("#work_ph").val().length<=0){ work_ph=''; }
if($("#mobile_ph").val().length<=0){ mobile_ph=''; }

var str = "prefix=" + prefix + "&first=" + first + "&last=" + last + "&title=" + title + "&company=" + company + "&street=" + street + "&second_street=" + second_street + "&zip=" + zip + "&town=" + town + "&country=" + country + "&work_ph=" + work_ph + "&mobile_ph=" + mobile_ph + "&email=" + email + "&web_page=" + web_page + "&inv_area=" + inv_area + "&state=" + $("#txtstate").val();
return str;

}

$(document).ready(function(){
	$("#sub").click(function(event){
		event.preventDefault();
		if(validate())
		{
				var str = getData();
				$.ajax({
					type: "POST",
					url: "./investors_save.php",
					data: str,
					success: function(result){
						//alert(result);
						window.location="investorRequest.php";
					},
					error: function(XMLHttpRequest, textstatus, err){
							alert(err);
						}
				});
		}
		//return false;

});
	
function validate(){
var prefix = $("#prefix").val();
var first = $("#First").val();
var last = $("#Last").val();
var title = $("#title").val();
var company = $("#company").val();
var street = $("#Street").val();
var second_street = $("#2nd_street").val();
var zip = $("#ZIP").val();
var town = $("#town").val();
var country = $("#country").val();
var work_ph = $("#isd_code").val() + " " + $("#work_ph").val();
var mobile_ph = $("#isd_code").val() + " " + $("#mobile_ph").val();
var email = $("#email").val();
var web_page = $("#web_page").val();
var inv_area = $("#inv_area").val();

//for testing

var at_fault = false;

			

// Checking for mandatory fields
	if( first == "" || first == null)
	{
		at_fault = true;
		$("#First").css("border", "1px solid #FF0000");
	}
	else $("#First").css("border", "thin solid #9A9A9A");
	
	if( last == "" || last == null)
	{
		at_fault = true;
		$("#Last").css("border", "1px solid #FF0000");
	}
	else $("#Last").css("border", "thin solid #9A9A9A");
	
/*	if( title == "" || title == null)
	{
		at_fault = true;
		$("#title").css("border", "1px solid #FF0000");
	}
	else $("#title").css("border", "thin solid #9A9A9A");
	*/
	if( company == "" || company == null)
	{
		at_fault = true;
		$("#company").css("border", "1px solid #FF0000");
	}
	else $("#company").css("border", "thin solid #9A9A9A");
	
	if( street == "" || street == null)
	{
		at_fault = true;
		$("#Street").css("border", "1px solid #FF0000");
	}
	else $("#Street").css("border", "thin solid #9A9A9A");
	
	if( zip == "" || zip == null)
	{
		at_fault = true;
		$("#ZIP").css("border", "1px solid #FF0000");
	}
	else $("#ZIP").css("border", "thin solid #9A9A9A");
	
	if( town == "" || town == null)
	{
		at_fault = true;
		$("#town").css("border", "1px solid #FF0000");
	}
	else $("#town").css("border", "thin solid #9A9A9A");
	
	if( $("#work_ph").val() == "" || $("#work_ph").val() == null)
	{
		at_fault = true;
		$("#work_ph").css("border", "1px solid #FF0000");
	}
	else $("#work_ph").css("border", "thin solid #9A9A9A");
	
	if( email == "" || email == null)
	{
		at_fault = true;
		$("#email").css("border", "1px solid #FF0000");
	}
	else {

		$("#email").css("border", "thin solid #9A9A9A");
		} 

	if($("#inv_area").val()<=0){
		at_fault = true;
		$("#inv_area").css("border", "1px solid #FF0000");
		}
		else
		$("#inv_area").css("border", "thin solid #9A9A9A");
	
	if(at_fault)
	{
		//alert("Please fill in the mandatory fields highlighted in red !!");
		$("#errdiv").text("Please fill in the mandatory fields highlighted in red !!");
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
			return false;
		}	
		return true;
}

//function ends
$("#country").change(function() { 

			switch($(this).val())
			 {
				 case "Australia":
					setSTDCODE('+61');
				   break;
				 case "Austria":
					setSTDCODE('+43');
				   break;
				 case "Belgium":
					setSTDCODE('+32');
				   break;

				 case "China":
					setSTDCODE('+86');
				   break;
				 case "India":
					setSTDCODE('+91');
				   break;
				 case "Switzerland":
					setSTDCODE('+41');
				   break;
				 case "USA":
					setSTDCODE('+1');
				   break;
				 case "UK":
					setSTDCODE('+44');
				   break;
				 case "France":
					setSTDCODE('+33');
				   break;
				 case "Finland":
					setSTDCODE('+358');
				   break;
				 case "Italy":
					setSTDCODE('+89');
				   break;
				  case "Netherlands":
					setSTDCODE('+31');
				   break;
				 case "Sweden":
					setSTDCODE('+46');
				   break;
				 case "Spain":
					setSTDCODE('+34');
				   break;
				 case "Germany":
					setSTDCODE('+49');
				   break;

				default:
				  setSTDCODE('+61');
			 }
});
//country and std code mapping
function setSTDCODE(code){
			var work_phone = $("select[name='work_phone']");
			var mobile_phone = $("select[name='mobile_phone']");
			$("select[name='work_phone'] option").remove();
			$("select[name='mobile_phone'] option").remove();
			$("<option>" + code + "</option>").appendTo(work_phone);
			$("<option>" + code + "</option>").appendTo(mobile_phone);
	}
// country and std code mapping ends

});

