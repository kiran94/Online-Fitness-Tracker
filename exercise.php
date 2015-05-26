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
				  <li role="presentation"><a href="index.php">Home</a></li>
				  <li role="presentation" class="active"><a href="#">Exercise</a></li>
				  <li role="presentation"><a href="logs.php">Logs</a></li>
				</ul>
			</div>
		</div>
		<!-- end navbar -->

		<!-- body content -->
		<div class="row">

			<?php
				//Import exercise log request code. 
				require_once "addLogs/getExerciseList.php"; 

				//For each record in the resultset. 
				while($row = mysqli_fetch_array($result))
				{
					//Print exercise name. 
					echo "<div class='col-xs-12 col-sm-6 hidden-xs'>"; 
						echo "<h3>" . ucfirst($row['exercise_name']) . "</h3>";
					echo "</div>"; 

					//Print the exercise img. 
					echo "<div class='col-xs-12 col-sm-5'>";
						echo "<img src='" . $row['exercise_img_url'] ."' alt='" . $row['exercise_name'] ."' class='img-responsive'/>"; 
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
		<?php require_once "scripts/scriptLinks.php"; ?>
	<!-- end scripts -->
</body>
</html>