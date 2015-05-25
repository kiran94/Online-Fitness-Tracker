<?php 
	$start = 0; 
	$max = 30; 
	$increment = 5; 

	for($i=$start; $i<=$max; $i+=$increment)
	{
		echo "<option value=" . $i ." class='log_option'>" . $i ."</option>";
	}
?>