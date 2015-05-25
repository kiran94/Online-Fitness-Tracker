<?php
	include "api/makeRequest.php"; 

	$req = new makeRequest(); 
	$query = "SELECT * FROM Exercises"; 

	$result = $req->request($query); 
?>