<?php
include('connection.php');
session_start();

//$_SESSION['username']=$u;







?>

<!DOCTYPE html>
<html>
<head>
  <title>corona</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--<link rel="stylesheet" type="text/css" href="connection.php">   -->
  <link rel="stylesheet" type="text/css" href="form.php">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">



</head>
<body>


   <nav class="navbar navbar-expand-lg nav_style fixed-top text-center">
  <a class="navbar-brand pl-5" href="#">Welcome <?php echo  $_SESSION['username']; ?></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
    
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="IndiaCoronaLive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</nav>
<br><br>

<!--------------------------start mydashbord----------------------------->


<div class="container mt-4">
	
	<h1 class="text-center text-success">Admin Dashbord</h1>
	
	<div class="card-row ">
 
		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">Patients Details</h1 >
			<a href="adminviewpatient.php" class="btn btn-success mt-4">View Patient Details</a>
		</div>
		</div>
		<br>

		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">Appointment Details </h1>

			<a href="viewpatient.php"class="btn btn-success mt-4">View Appointment Details</a>
		</div>
		</div>
		<br>

		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">Doctors Details </h1>

			<a href="adminviewdoctor.php"class="btn btn-success mt-4">View Doctors Details</a>
		</div>
		</div>






