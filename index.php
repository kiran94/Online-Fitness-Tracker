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

			<!-- add exercise log -->
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

					<button type="button" class="btn btn-primary log_header fullWidth" id="addLogsButton">Submit</button>
				</div>

			</div>
			<!-- end add exercise log -->

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

			<!-- add measurement log -->
			<div class="col-xs-12 col-md-6">
				<h2>Add Measurement</h2>
				<div id="measurement_logs">

					<!-- add weight -->
					<h5 class="log_header">Weight</h5>
					<input type='text' name='log_weight' id='log_weight' />
					<br/>
					<!-- end add weight -->

					<!-- add chest -->
					<h5 class="log_header">Chest</h5>
					<input type='text' name='log_chest' id='log_chest'/>
					<br/>
					<!-- end add chest -->

					<!-- add upper arms -->
					<h5 class="log_header">Upper Arms</h5>
					<input type='text' name='log_upper_arms' id='log_upper_arms' />
					<br/>
					<!-- end add upper arms -->

					<!-- add fore arms -->
					<h5 class="log_header">Fore Arms</h5>
					<input type='text' name='log_fore_arms' id='log_fore_arms' />
					<br/>
					<!-- end add fore arms -->

					<!-- add waist -->
					<h5 class="log_header">Waist</h5>
					<input type='text' name='log_waist' id='log_waist' />
					<br/>
					<!-- end add waist -->

					<!-- add thighs -->
					<h5 class="log_header">Thighs</h5>
					<input type='text' name='log_thighs' id='log_thighs' />
					<br/>
					<!-- end add thighs -->

					<!-- add calves -->
					<h5 class="log_header">Calves</h5>
					<input type='text' name='log_calves' id='log_calves' />
					<br/>
					<!-- end add calves -->

					<!-- add body fat -->
					<h5 class="log_header">Body Fat</h5>
					<select name="log_body_fat" id='log_body_fat' >
						<?php
							for($i=1; $i<=80;$i++)
							{
								echo "<option value='" . $i ."'>" . $i ."</option>"; 
							}
						?>
					</select>

					<br/>
					<!-- end add body fat -->

					<!-- TO CHANGE DYNAMICALLY WHEN USER PROFILES ADDED -->
					<input type="hidden" id="user_option" value="1" />

					<button type="button" class="btn btn-primary log_header fullWidth" id="addMeasurementButton">Submit</button>
				</div>
			</div>
			<!-- end add measurement log -->



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