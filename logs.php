<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Online Fitness Tracker</title>

	<!-- meta -->
		<meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end meta -->

	<!-- styles -->	
		<?php require_once "styleLinks.php"; ?>
	<!-- end styles -->
</head>
<body>
	<!-- container -->
	<div class="container">

		<!-- Header -->
		<?php require_once "header.php"; ?>
		<!-- end header -->

		<!-- navbar -->
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="index.php">Home</a></li>
				  <li role="presentation"><a href="exercise.php">Exercise</a></li>
				  <li role="presentation" class="active"><a href="#">Logs</a></li>
				</ul>
			</div>
		</div>
		<!-- end navbar -->

		<!-- body content -->
		<div class="row">
			<?php
				//Import the request code. 
				require_once "api/makeRequest.php";

				//Make a new instance of the makeRequest object.
				$req = new makeRequest(); 

				//Create the query to get log information for a user. 
				$query = "SELECT e.exercise_name, el.exercise_weight, el.exercise_reps, el.dateVal, e.exercise_img_url
							FROM user u, exercises e, exerciseLogs el 
							WHERE u.user_id = el.user_id 
							AND e.exercise_id = el.exercise_id
							ORDER BY dateVal DESC;"; 

				//Make a request and return a resultset. 
				$result = $req->request($query); 

				//For each row in the resultset
				while($row = mysqli_fetch_array($result))
				{
					//Print a node. 
					echo "<div class='col-xs-12 col-sm-10'>";
						echo "<div class='exercise_nodes'>"; 
							echo ucfirst($row['exercise_name']) . "<br/>";
							echo "Weight: " . $row['exercise_weight'] . "<br/>"; 
							echo "Reps: " . $row['exercise_reps']  . "<br/>"; 
							echo "Date: " . $row['dateVal'];
						echo "</div>";
					echo "</div>"; 

					echo "<div class='col-sm-2'>";
						echo "<img src=" . $row['exercise_img_url'] . " alt='img' class='img-responsive' />"; 
					echo "</div>";
				}
			?>
		</div>
		<!-- end body content -->

		<!-- footer -->
		<?php require_once "footer.php"; ?>
		<!-- end footer -->

	</div>
	<!-- end container -->

	<!-- scripts -->
		<?php require_once "scriptLinks.php"; ?>
	<!-- end scripts -->
</body>
</html>