<?php
include('connection.php');
session_start();

$x=$_SESSION['username'];



if(isset($_POST['submit']))
{
	 $username=$_POST['username'];
     $date=$_POST['date'];
     $timeslot=$_POST['timeslot'];
     $specialization=$_POST['specialization'];

$sql="INSERT INTO appointment (username,date,timeslot,specialization) VALUES('$username','$date','$timeslot','$specialization')";

    $res=mysqli_query($conn,$sql);

    if($res)
    {
	   

      
      echo"<script>alert('Data inserted')</script>";
	   header('location:dashbord.php');
    }
    else
    {
	    echo"<script>alert('Data not inserted')</script>";    

    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>appoinment</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div style="background-color:#a29bfe" class="section_header text-center m-4 ">
  <h1 style="color: white">Appoinment</h1>
	
	
</div>


	<div class="row">
		<div class="col-lg-8 offset-lg-2 lg-12">
				<form method="POST">
			
			<div class="form-group">
    			<label >Username</label>
   					 <input  type="text" value="<?php echo $x   ?>" name="username"class="form-control" readonly>
  			</div>

  			<div class="form-group">
    			<label >Date</label>
   					 <input  type="date"  name="date"class="form-control"  placeholder="Enter the date">
  			</div>

  			<div class="form-group">
    				<label >Time Period</label><br>
			<select name="timeslot" class="mdb-select md-form">
			<option value="" disabled selected></option>
			<option value="10am-12pm">10am-12pm</option>
			<option value="1pm-3pm">1pm-3pm</option>
			<option value="4pm-6pm">4pm-6pm</option>
			</select>
			</div>	

			<div class="form-group">
    <label >Category</label><br>
  <select name="specialization" class="mdb-select md-form">
  <option value="" disabled selected></option>
  <option value="Genral Physician">Genral Physician	</option>
  <option value="Orthopidic">Orthopidic</option>
  <option value="Gynacologist">Gynacologist</option>
  <option value="ENT Specialist">ENT Specialist</option>
  <option value="Pediatrics">Pediatrics</option>
</select>
</div>

 <input type="submit" name="submit" value="submit" class="btn btn-primary">

</form>
	</div>
	
</div>

</body>
</html>



















