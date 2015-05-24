<?php
	//Class provides a means for the application to make requests to the database through one function. 
	class makeRequest
	{
		//Function takes a query and returns a result set. 
		public function request($query)
		{
			//Import the connection code. 
			require_once "connection.php";
			//Create a connection object. 
			$connection = new connection(); 
			//Create a new connection to the database. 
			$con = $connection->getConnection(); 

			//Execute the query. 
			$result = mysqli_query($con, $query); 

			if (!$result) 
			{
			    printf("Error: %s\n", mysqli_error($con));
			    exit();
			}


			//Close the connection. 
			mysqli_close($con); 

			//Return the result set. 
			return $result; 
		}
	}
?>