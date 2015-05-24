<?php
	//If the user_id value has been set. 
	if(isset($_GET['user_id']))
	{
		//Build the query using the parameter
		$query = "SELECT * FROM user u, measurements m 
				 WHERE u.user_id = " . $_GET['user_id'] . " AND u.user_id = m.user_id
				 ORDER BY m.measurement_id DESC
				 LIMIT BY 1"; 

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