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

		var formData = {exercise_id:exerciseVal, user_id:userVal, exercise_weight:weightVal, exercise_reps:repVal, dateVal:dateValue};

		$.ajax(
		{
			url: "api/insertLog.php",
			type: "POST",
			data: formData,
			success: function(data)
			{
				
			},
			error: function(data)
			{

			}

		});
		// end ajax 




	}); 
	// end button click

	




});