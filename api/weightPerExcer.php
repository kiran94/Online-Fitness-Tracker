<?php
	//If the user_id value has been set. 
	if(isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "SELECT e.exercise_name, AVG(el.exercise_weight) 
					FROM user u, Exercises e, ExerciseLogs el
					WHERE u.user_id = el.user_id
					AND u.user_id = '{$_GET['user_id']}'
					AND el.exercise_id = e.exercise_id 
					GROUP BY e.exercise_name"; 

		//Import code to request data. 
		require_once "makeRequest.php"; 

		//Create new object for request
		$requestObj = new makeRequest(); 

		//Make the request and pass the query. 
		$result = $requestObj->request($query);

		//For each returned record 
		while($row = mysqli_fetch_array($result))
		{
			//Print values. 
			echo $row['e.exercise_name']; 
		}
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id";
		die(); 
	}
?>