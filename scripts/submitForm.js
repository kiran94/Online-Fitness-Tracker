$(document).ready(function()
{	

	$('#addLogsButton').click(function()
	{
		//Get Values. 
		var exerciseVal = $('#exercise_option').val(); 
		var userVal = $('#user_option').val(); 
		var weightVal = $('#weight_option').val(); 
		var repVal = $('#rep_option').val(); 

		var dateValue = new Date(); 
		var formattedDate = dateValue.getUTCFullYear() + "-" + (dateValue.getUTCMonth()+1) + "-" + dateValue.getUTCDate(); 
		console.log(formattedDate); 

		var formData = {exercise_id:exerciseVal, user_id:userVal, exercise_weight:weightVal, exercise_reps:repVal, dateVal:formattedDate};

		$.ajax(
		{
			url: "api/insertLog.php",
			type: "POST",
			data: formData,
			success: function(data)
			{
				//alert(data); 

				var parsed_data = JSON.parse(data); 

				var result = parsed_data.Result; 

				if(result == "Success")
				{
					$("#alert_log").css("display", "block"); 
				}
				else
				{
					$("#alert_log_error").css("display", "block");
				}
			},
			error: function(data)
			{
				alert(data); 
			}

		});
		// end ajax 

	}); 
	// end button click

});