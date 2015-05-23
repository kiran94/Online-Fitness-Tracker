<?php
	
	//If the user_id value has been set. 
	if(isset($_GET['user_id']))
	{
		//Import the connection code. 
		require_once "connection.php";
		//Create a connection object. 
		$connection = new connection(); 
		//Create a new connection to the database. 
		$con = $connection.getConnection(); 

		//Build the query using the parameter
		$query = "SELECT * FROM user u, measurements m 
				 WHERE u.user_id =" . $_GET['user_id'] . "AND u.user_id = m.user_id
				 ORDER BY m.measurement_id DESC
				 LIMIT BY 1"; 

		//Execute the query. 
		$result = mysqli_query($con, $query); 

		//For each returned record 
		while($row = mysqli_fetch_array($result))
		{
			//Print values. 
			echo $row['user_id']; 
		}

		//Close the connection. 
		mysqli_close($con); 
	}
	else
	{	
		//Print error message if not set.
		echo "Requires user_id";
		die(); 
	}
?>