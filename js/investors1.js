// JavaScript Document

// basic functions for creating n erasing cookies

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];<a href="investors.js"></a>
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

// for getting the ISD codes

$(document).ready(function() {

$country = $("select[name='country']");
$work_phone = $("select[name='work_phone']");
$mobile_phone = $("select[name='mobile_phone']");
$country.change(
function(){
	if ($(this).val() == "Australia") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+61</option>").appendTo($work_phone);
$("<option>+61</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Austria") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+43</option>").appendTo($work_phone);
$("<option>+43</option>").appendTo($mobile_phone);

}

if ($(this).val() == "Belgium") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+32</option>").appendTo($work_phone);
$("<option>+32</option>").appendTo($mobile_phone);

}


	if ($(this).val() == "China") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+86</option>").appendTo($work_phone);
$("<option>+86</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "India") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+91</option>").appendTo($work_phone);
$("<option>+91</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Switzerland") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+41</option>").appendTo($work_phone);
$("<option>+41</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "USA") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+1</option>").appendTo($work_phone);
$("<option>+1</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "UK") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+44</option>").appendTo($work_phone);
$("<option>+44</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "France") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+33</option>").appendTo($work_phone);
$("<option>+33</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Finland") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+358</option>").appendTo($work_phone);
$("<option>+358</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Italy") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+39</option>").appendTo($work_phone);
$("<option>+39</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Sweden") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+46</option>").appendTo($work_phone);
$("<option>+46</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Spain") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+34</option>").appendTo($work_phone);
$("<option>+34</option>").appendTo($mobile_phone);
}
	if ($(this).val() == "Germany") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+49</option>").appendTo($work_phone);
$("<option>+49</option>").appendTo($mobile_phone);
}

if ($(this).val() == "Netherlands") {
$("select[name='work_phone'] option").remove();
$("select[name='mobile_phone'] option").remove();
$("<option>+31</option>").appendTo($work_phone);
$("<option>+31</option>").appendTo($mobile_phone);

}
	});
	
});

// to save the investor details

$(document).ready(function() {
	$("#sub").click( function(){ 
alert('click');
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
	else $("#email").css("border", "thin solid #9A9A9A");
	
	if(at_fault == true)
	{
		alert("Please fill in the mandatory fields highlighted in red !!");
		at_fault = false;
		return false;
	}
        else
        {
	// for saving the details to database
	var str = "prefix=" + prefix + "&first=" + first + "&last=" + last + "&title=" + title + "&company=" + company + "&street=" + street + "&second_street=" + second_street + "&zip=" + zip + "&town=" + town + "&country=" + country + "&work_ph=" + work_ph + "&mobile_ph=" + mobile_ph + "&email=" + email + "&web_page=" + web_page + "&inv_area=" + inv_area + "&state=" + $("#txtstate");
		$.ajax({
	url: "http://hublink.freeoda.com/investors_save.php", 
	data: str,
	success: function(result){ alert(result);}}); 
		return false;
        }
	});
});


$(document).ready( function(){
	$("#contact_us").submit( function(){
		var first = $("#first_name").val();
		var last = $("#last_name").val();
		var email = $("#email").val();
		var comments = $("#comments").val();
		var str = "first=" + first + "&last=" + last + "&email=" + email + "&comments=" + comments;
		$.ajax({
			url: "http://hublink.freeoda.com/contact_us.php",
			data: str,
			success: function(result){ alert(result);}});
			return false;
	});
});

$(document).ready(function(){
	$("#sign_in_btn").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var str = "username=" + username + "&password=" + password;
		$.ajax({
			url: "http://hublink.freeoda.com/sign_in.php",
			data: str,
			success: function(result){
				if($.trim(result) == "investor")
                                {
                                   createCookie('session', 'active', 0);
				   					window.location = "investor_area.php";
                                } 
                                else if($.trim(result) == "admin")
                                {
                                   createCookie('session', 'active', 0);
                                   window.location = "admin.php";
                                }
				else 
				{
					$("#username").val('');
					$("#password").val('');
					alert("Invalid credentials !!");
				}
			}});
			return false;
	});
});

$(document).ready(function(){
	$("#pwd_recovery").submit(function(){
		var str = "username=" + $("#email").val();
		$.ajax({
			url: "http://hublink.freeoda.com/pwd_recovery.php",
			data: str,
			success: function(result){
				alert(result);
                                window.location = "index.php";
			}});
			// window.location = "index.html";
			return false;
	});
});

function load_investor_table()
{
	var str = '';
	$.ajax({
		url:"http://hublink.freeoda.com/admin.php",
		data: str,
		success: function(result){
			$("#inv_data").html(result);
		}});
}

function update_login_table()
{
	var table = document.getElementById("inv_data");
	var No_of_rows = table.rows.length;
        var email = '';
	for(i=0; i<No_of_rows; i++)
	{
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(chkbox.checked == true)
		{
				email = row.cells[6].firstChild.data;
				break;
		}
	}
	var str = "email=" + $.trim(email);
	$.ajax({
		url: "http://hublink.freeoda.com/inv_approve.php",
		data: str,
		success: function(result)
		{
			if( $.trim(result) == "success")
                        {
                            table.deleteRow(i);
                            alert("Investor approved !!");
                        }
                        else alert("Error in approval. Try again.");
		}		
	});
}

$(document).ready(function(){
	$("#log_out").click(function(){
                createCookie('session', 'inactive', 0);
		window.location = "index.php";
		});
});																		