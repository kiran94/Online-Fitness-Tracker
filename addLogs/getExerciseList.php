<?php
	require_once "api/makeRequest.php"; 

	$req = new makeRequest(); 
	$query = "SELECT * FROM Exercises"; 

	$result = $req->request($query); 

	while($row = mysqli_fetch_array($result))
	{
		echo "<option>" . ucfirst($row['exercise_name']) ."</option>"; 
	}
?>