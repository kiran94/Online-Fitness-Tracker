$(document).ready(function()
{	
	//On click of the id element. 
	$('#addLogsButton').click(function()
	{
		//Get Values. 
		var exerciseVal = $('#exercise_option').val(); 
		var userVal = $('#user_option').val(); 
		var weightVal = $('#weight_option').val(); 
		var repVal = $('#rep_option').val(); 

		//Get a new date variable. 
		var dateValue = new Date(); 
		//Format the date to mysql date variable format. 
		var formattedDate = dateValue.getUTCFullYear() + "-" + (dateValue.getUTCMonth()+1) + "-" + dateValue.getUTCDate(); 
		//Store an object with key/value pairs of the data. 
		var formData = {exercise_id:exerciseVal, user_id:userVal, exercise_weight:weightVal, exercise_reps:repVal, dateVal:formattedDate};

		//Make an ajax request. 
		$.ajax(
		{
			url: "api/insertLog.php",
			type: "POST",
			data: formData,
			success: function(data)
			{
				//Parse the returned data into JSON object.
				var parsed_data = JSON.parse(data); 
				//Get the result data. 
				var result = parsed_data.Result; 

				//If the post was a success 
				if(result == "Success")
				{
					//Display the success log.
					$("#alert_log").css("display", "block"); 
				}
				else
				{
					//Else display the error block. 
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