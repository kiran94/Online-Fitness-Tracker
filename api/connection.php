<?php
	//Class provides a means for the application to connect to the database. 
	class connection
	{
		//Function returns a connection variable to the database. 
		public function getConnection()
		{
			//Get connection information. 
			include "connectionInfo.php"; 

			//Make a connection and pass parameters, if error then kill processing. 
			$con = mysqli_connect($host, $username, $password) or die("Cannot Connect"); 
			//Select the database to use, if error then kill processing. 
			mysqli_select_db($con, $db) or die("Cannot find database"); 
			//Return connection variable. 
			return $con; 
		}
	}
?>