<?php


session_start();
/*
if(!isset($_SESSION['username']))
{
	header('location:index.html');
}
*/
include('connection.php');

$sql= "SELECT * FROM patient";
		$res=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($res);
		$n=mysqli_num_rows($res);
	

		/*if($n==0)
		{
			echo"<script>alert('No records to display')</script>";
		}
		else
			{
				echo "";

			}

*/

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


<!--------start main header------------------>

<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="left.png" width="300" height="300">
      </div>
      
      </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">

      <div class="rightside text-capitalize leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Lets stay safe & fight together against COR<span class="corona_r"><img  src="right.png " width="70px height70px"></span>NA virus</h1>
      </div>
      </div>

  </div>
</div>
<!--------------------------start mydashbord----------------------------->


<div class="container">
	
	<h1 class="text-center text-success">My Dashbord</h1>
	
	<div class="card-columns ">
 
		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">My Profile</h1 >
			<a href="edit.php?edit=<?php echo  $row['id'];?>" class="btn btn-success mt-4">Edit Profile</a>
		</div>
		</div>

		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">My Appoinment </h1>

			<a href="appoinment.php"class="btn btn-success mt-4">Book new Appoinment</a>
		</div>
		</div>

		<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">My Appoinment</h1>
			<a href="view.php"class="btn btn-success mt-4">View Appoinments</a>
		</div>
		</div>
</div>

</div>
</div>

<div class="container">
<div class="card-row ">

<div style="background-color:  #a29bfe" class="card ">
		<div class="card-body text-center">
			<h1 class="card-text">Find A Doctor</h1>

			<form method="POST" action="search.php" >
				<div class="form-group">
			<label class="text-center">Category</label><br>
  <select name="specialization" class="mdb-select md-form">
  <option value="" disabled selected>Select</option>
  <option value="Genral Physician">Genral Physician	</option>
  <option value="Orthopidic">Orthopidic</option>
  <option value="Gynacologist">Gynacologist</option>
  <option value="ENT Specialist">ENT Specialist</option>
  <option value="Pediatrics">Pediatrics</option>
</select>
</div>

				<input type="submit" name="submit" class="btn btn-success" value="Find">


			</form>

			</div>
		
			</div>	
</div>





















<footer class="mt-5">
  <div class="footer_style  text-white text-center container-fluid">

    <p>copyright by @maheshzemse</p>
    
  </div>
</footer>


</body>
</html>