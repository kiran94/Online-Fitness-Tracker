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

					<!-- exercise -->
					<!-- <select name="exercise">
						<?php

						?>
					</select>
 -->
					<!-- weight -->
					<select name="weight">
						<?php
							$min = 5; 
							$max = 200;
							$index = 1; 

							for($i=$min; $i<=$max; $i+=5)
							{
								echo "<option value=" . ($index*$min) .">" . ($index*$min) ."</option>";
								$index++;  
							}
						?>
					</select>

					<!-- reps -->


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