<?php
	
	//Build the query using the parameter
	$query = "SELECT exercise_name, exercise_img_url FROM Exercises"; 

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
		echo $row['exercise_name']; 
	}
?>