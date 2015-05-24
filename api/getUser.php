<?php
	//If the user_id value has been set. 
	if(isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "SELECT * FROM user u, measurements m 
				 WHERE u.user_id =  '{$_GET['user_id']}' 
				 AND u.user_id = m.user_id
				 ORDER BY m.measurement_id DESC"; 

		//Import code to request data. 
		require_once "makeRequest.php"; 

		//Create new object for request
		$requestObj = new makeRequest(); 

		//Make the request and pass the query. 
		$result = $requestObj->request($query);

		//Store coloumns to print 
		$cols = array('user_id', 'user_name', 'user_height');

		//Print JSON with the above columns. 
		$requestObj->printJSON($cols, $result); 
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id";
		die(); 
	}
?>