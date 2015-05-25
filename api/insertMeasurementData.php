<?php
	//if a value has been set.  
	if(isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "INSERT INTO measurements(chest, upper_arms, fore_arms, waist, thighs, calves, bodyfat, weight, user_id) 
					VALUES('{$_GET['chest']}', '{$_GET['upper_arms']}', '{$_GET['fore_arms']}', '{$_GET['waist']}', '{$_GET['thighs']}', 
						'{$_GET['calves']}', '{$_GET['bodyfat']}', '{$_GET['weight']}', '{$_GET['user_id']}');"; 

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