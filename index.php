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
		<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="styles/custom.css" />
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
				  <li role="presentation"><a href="#">Exercises</a></li>
				  <li role="presentation"><a href="#">Logs</a></li>
				</ul>
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
					<h5>Add Exercise</h5>
					<select name="exercise">
						<?php require_once "addLogs/getExerciseList.php"; ?>
					</select>
					<br/>
					<!-- end add exercise -->

					<!-- add weight -->
					<h5>Add Weight</h5>
					<select name="weight">
						<?php require_once "addLogs/getWeightList.php"; ?>
					</select>
					<br/>
					<!-- end add weight -->

					<!-- add reps -->
					<h5>Add Reps</h5>
					<select name="reps">
						<?php require_once "addLogs/getRepList.php"; ?>
					</select>
					<br/>
					<!-- end reps -->

					<button type="button" class="btn btn-primary">Primary</button>
				</div>

			</div>
			<!-- end add log -->

			<!-- recent logs -->
			<div class="col-xs-12 col-md-6">
				<h2>Recent Logs</h2>
			</div>
			<!-- end recent logs -->

		</div>
		<!-- end body content -->




	</div>
	<!-- end container -->

	<!-- scripts -->
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<!-- end scripts -->
</body>
</html>