<?php
include('connection.php');


session_start();




?>
<!DOCTYPE html>	
<html>
<head>
	<title>Doctordashbord</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 

</head>
<body style="background-color: lightgray">
	<h4>Welcome <?php echo $_SESSION['username'] ?>	</h4>
	<a style="float: right" href="doctorlogout.php" class="btn btn-success  mr-5">logout</a>
		<div class="container">
		<div class="card-row ">
 
		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">Appointments</h1 >
			<a href="viewpatient.php" class="btn btn-success mt-4">View Patients</a>

			
		</div>
		</div>
	</div>
	</div>


</body>
</html>