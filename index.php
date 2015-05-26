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
		<?php require_once "styles/styleLinks.php"; ?>
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
				  <li role="presentation" class="active"><a href="#">Home</a></li>
				  <li role="presentation"><a href="exercise.php">Exercise</a></li>
				  <li role="presentation"><a href="logs.php">Logs</a></li>
				</ul>
				<div class="alert alert-success" role="alert" id="alert_log">Successfully Added!</div>
				<div class="alert alert-danger" role="alert" id="alert_log_error">Oops! Something went!</div>
			</div>
		</div>
		<!-- end navbar -->

		<!-- body content -->
		<div class="row">
			<!-- add log -->
			<div class="col-xs-12 col-md-6">
				<h2>Add Logs</h2>
				<div id="form">

					<!-- add exercise -->
					<h5 class="log_header">Add Exercise</h5>
					<select name="exercise" class="fullWidth" id="exercise_option">
						<?php 
							//Import exercise list code to make query and get resultset. 
							require_once "addLogs/getExerciseList.php"; 
							
							//For each row
							while($row = mysqli_fetch_array($result))
							{
								//Print the name of the exercise in upper case. 
								echo "<option value='" . $row['exercise_id'] ."' >" . ucfirst($row['exercise_name']) ."</option>"; 
							}
						?>
					</select>
					<br/>
					<!-- end add exercise -->

					<!-- add weight -->
					<h5 class="log_header">Add Weight</h5>
					<select name="weight" class="fullWidth" id="weight_option">
						<?php require_once "addLogs/getWeightList.php"; ?>
					</select>
					<br/>
					<!-- end add weight -->

					<!-- add reps -->
					<h5 class="log_header">Add Reps</h5>
					<select name="reps" class="fullWidth" id="rep_option">
						<?php require_once "addLogs/getRepList.php"; ?>
					</select>
					<br/>
					<!-- end reps -->


					<!-- TO CHANGE DYNAMICALLY WHEN USER PROFILES ADDED -->
					<input type="hidden" id="user_option" value="1" />

					<button type="button" class="btn btn-primary log_header fullWidth" id="addLogsButton">Primary</button>
				</div>

			</div>
			<!-- end add log -->

			<!-- recent logs -->
			<div class="col-xs-12 col-md-6">
				<h2>Recent Logs</h2>
				<?php
					//Create a new object to make a request. 
					$req = new makeRequest(); 

					//Create a query to get exercise logs limited to 5 records. 
					$query = "SELECT exercise_name, exercise_weight, exercise_reps, dateVal 
								FROM user u, exercises e, exerciseLogs el 
								WHERE u.user_id = el.user_id and e.exercise_id = el.exercise_id 
								ORDER BY dateVal DESC 
								LIMIT 3"; 

					//Make a request to the database. 
					$result = $req->request($query); 

					//For each record in the resultset. 
					while($row = mysqli_fetch_array($result))
					{
						//Print a node. 
						echo "<div class='exercise_nodes'>"; 
							echo ucfirst($row['exercise_name']) . "<br/>";
							echo "Weight: " . $row['exercise_weight']. "<br/>"; 
							echo "Reps: " . $row['exercise_reps']; 
						echo "</div>";
					}
				?>
			</div>
			<!-- end recent logs -->
		</div>
		<!-- end body content -->

		<!-- footer -->
		<?php require_once "footer.php"; ?>
		<!-- end footer -->
		
	</div>
	<!-- end container -->

	<!-- scripts -->
		<?php require_once "scripts/scriptLinks.php"; ?>
	<!-- end scripts -->
</body>
</html>