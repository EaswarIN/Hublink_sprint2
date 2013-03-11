// JavaScript Document

$(document).ready(function(){
	$("#app_investor").click(function(event){
		event.preventDefault();
		update_login_table();
	});
	$("#invStatus").change(function(event){
		event.preventDefault();
		var statusCode = $(this).find("option:selected").val();
		var str= "?statuscode=" + statusCode;
		window.location ="admin.php" + str;		
	});
	$(".imgapprove").click(function(event){
		event.preventDefault();
		var id = $(this).parent().parent().attr('id');
		var email = $(this).parent().prev('td').prev('td').prev('td').text();
		var str = "action=a&email=" + $.trim(email) + "&invId=" + id;
		$.ajax({
   		   type: "POST",
			url: "./inv_approve.php",
			data: str,
			success: function(result)
			{
//				alert(result);
				if( $.trim(result) == "success")
				{
					window.location="admin.php";
				}
				else alert("Error in approval. Try again.");
			}		
		});
	});
	
	$(".imgreject").click(function(event){
		event.preventDefault();
		var id = $(this).parent().parent().attr('id');
		var str = "action=r&invId=" + id;
		$.ajax({
   		   type: "POST",
			url: "./inv_approve.php",
			data: str,
			success: function(result)
			{
				
				if( $.trim(result) == "success")
				{
					window.location="admin.php";
				}
				else alert("Error in reject. Try again.");
			}		
		});
	});

	function update_login_table()
	{
		var email = '';
		var rowselected= false;
		var cellIndexMapping = { 0: true, 9: true };
		$("#inv_data tr").each(function(rowIndex) {
    		$(this).find("td").each(function(cellIndex) {
				if(cellIndex==0){
					if($(this).find("Input[type='checkbox']:checked").val()=="on")
						rowselected = true;	
				}
				if(rowselected && cellIndex==7){
            		email = ($(this).text());					
				}
    		});
		});
		var str = "email=" + $.trim(email);
		$.ajax({
			url: "./inv_approve.php",
			data: str,
			success: function(result)
			{
				if( $.trim(result) == "success")
							{
								window.location="admin.php";
							}
							else alert("Error in approval. Try again.");
			}		
		});
	}
});