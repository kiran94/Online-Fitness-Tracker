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

			//For Degugging. 
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

		//Function prints JSON format of the result set depending on what columns were set. 
		public function printJSON($cols, $result)
		{
			//Start JSON formatting. 
			echo "{";

			//For each returned record 
			while($row = mysqli_fetch_array($result))
			{
				//For each column 
				for($i=0; $i<sizeof($cols); $i++)
				{
					//Print the key value pair. 
					echo " \"" . $cols[$i] ."\" : " . "\"" . $row[$cols[$i]] . "\"";
					//If not the last value then print a comma. 
					if($i!=sizeof($cols)-1) { echo ","; }	
				}
			}
			//End JSON formatting. 
			echo "}";
		}
	}


?>