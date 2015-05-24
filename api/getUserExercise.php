<?php
	//If the user_id value has been set. 
	if(isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "SELECT e.exercise_name, e.exercise_img_url, el.exercise_weight, el.exercise_reps, el.date 
					FROM user u, Exercise e, ExerciseLogs el
					WHERE u.user_id = el.user_id 
					AND el.exercise_id = e.exercise_id
					AND u.user_id = " . $_GET['user_id'] . ""; 

		//Import code to request data. 
		require_once "makeRequest.php"; 

		//Create new object for request
		$request = new makeRequest(); 

		//Make the request and pass the query. 
		$result = $request.request($query); 

		//For each returned record 
		while($row = mysqli_fetch_array($result))
		{
			//Print values. 
			echo $row['user_id']; 
		}
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id";
		die(); 
	}
?>