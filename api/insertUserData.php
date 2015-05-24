<?php
	//if a value has been set.  
	if(isset($_GET['user_name']) || isset($_GET['user_dob']) || isset($_GET['user_height']))
	{
		//Build the query using the parameter
		$query = "INSERT INTO user(user_name, user_dob, user_height) VALUES(" . $_GET['user_name'] ." , " . $_GET['user_dob'] ." , " . $_GET['user_height'] .")"; 

		//Import code to request data. 
		require_once "makeRequest.php"; 

		//Create new object for request
		$request = new makeRequest(); 

		//Make the request and pass the query. 
		$result = $request.request($query); 

		echo "Record Inserted.";
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id";
		die(); 
	}
?>