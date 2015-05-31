$(document).ready(function()
{
	//On Click of Submit button
	$("#addMeasurementButton").on(click(function()
	{
		var formData = {}; 
		var inputDetails = ['chest', 'upper_arms', 'fore_arms', 'waist', 'thighs', 'calves', 'body_fat', 'weight'];

		for(var i=0; i<inputDetails.length; i++)
		{
			formData[inputDetails[i]] = $('#' + 'log_' + inputDetails[i]).val();
		}

		$.ajax(
		{
			url: 'api/insertMeasurementData.php',
			type: 'POST',
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

	});
	
});