<?php
	//if a value has been set.  
	if(isset($_POST['user_id']))
	{
		//Build the query using the parameter
		$query = "INSERT INTO measurements(chest, upper_arms, fore_arms, waist, thighs, calves, bodyfat, weight, user_id) 
					VALUES('{$_POST['chest']}', '{$_POST['upper_arms']}', '{$_POST['fore_arms']}', '{$_POST['waist']}', '{$_POST['thighs']}', 
						'{$_POST['calves']}', '{$_POST['bodyfat']}', '{$_POST['weight']}', '{$_POST['user_id']}');"; 

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