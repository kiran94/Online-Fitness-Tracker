<?php
	//if a value has been set.  
	if(isset($_GET['exercise_id']) && isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "INSERT INTO ExerciseLogs(exercise_id, user_id, exercise_weight, exercise_reps, dateVal)
					VALUES( '{$_GET['exercise_id']}', '{$_GET['user_id']}', '{$_GET['exercise_weight']}', '{$_GET['exercise_reps']}', '{$_GET['dateVal']}')"; 

		//Import code to request data. 
		include "makeRequest.php"; 

		//Create new object for request
		$requestObj = new makeRequest(); 

		//Make the request and pass the query. 
		$result = $requestObj->request($query); 

		echo "{\"Result\" : \"Success\"}";
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id and exercise_id";
		die(); 
	}
?>