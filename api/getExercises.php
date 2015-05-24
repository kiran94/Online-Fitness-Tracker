<?php
	
	//Build the query using the parameter
	$query = "SELECT exercise_name, exercise_img_url FROM Exercises"; 

	//Import code to request data. 
	require_once "makeRequest.php"; 

	//Create new object for request
	$requestObj = new makeRequest(); 

	//Make the request and pass the query. 
	$result = $requestObj->request($query);

	$cols = array('exercise_name', 'exercise_img_url');

	//$requestObj->printJSON($cols, $result); 

	$counter = 0; 

	echo "{";
	//For each returned record 
	while($row = mysqli_fetch_array($result))
	{
		echo "["; 
		echo "{\"exercise_name \": " . "\"" . $row['exercise_name'] . "\"";
		echo ",";
		echo "\"exercise_img_url\" : " . "\"" . $row['exercise_img_url'] . "\"}";	
		echo "]";


		if($counter!=mysqli_num_rows($result)-1){ echo ","; }
		$counter++; 
	}
	echo "}";
?>