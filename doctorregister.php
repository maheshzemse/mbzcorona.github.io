<?php
include('connection.php');



$error="";


if(isset($_POST['submit']))
{
      if($_POST['username']=="" || $_POST['password']=="" || $_POST['name']=="" || $_POST['specialization']=="" || $_POST['email']=="" || $_POST['mob']=="" )

  {
    $error="You must filled all data...!";
    echo "<script>alert('$error') </script";
  }
  else
  {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $specialization=$_POST['specialization'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
   
   
    $sql="INSERT INTO doctor (username,password,name,specialization,email,mob) VALUES('$username','$password','$name','$specialization','$email','$mob')";

    $res=mysqli_query($conn,$sql);

    if($res)
    {
     //echo "data inserted";

      
      echo"<script>alert('Data inserted')</script>";
     header('location:index.html');
    }
    else
    {
      echo"<script>alert('Data not inserted')</script>";    

    }



}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Rgister Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container ">

<div style="background-color:#a29bfe" class="section_header text-center m-4 ">
  <h1 style="color: white">Doctor Details</h1>
	
	
 <!-- <span style="color: red"> <?php echo "$error";  ?></span><br>  -->
</div>

<div class="container p-3">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 lg-12">
<form method="POST">
      
<div class="form-group">
    <label >Username</label>
    <input  type="text"  name="username"class="form-control"  placeholder="Enter the Username">
  </div>

<div class="form-group">
    <label >Password</label>
    <input type="Password"  name="password"class="form-control"  placeholder="Enter the Password">
  </div>

  <div class="form-group">
    <label >Name</label>
    <input type="text"  name="name"class="form-control"  placeholder="Enter the Name">
  </div>

<div class="form-group">
    <label >Specialization</label><br>
  <select name="specialization" class="mdb-select md-form">
  <option value="" disabled selected></option>
   <option value="Genral Physician">Genral Physician  </option>
  <option value="Orthopidic">Orthopidic</option>
  <option value="Gynacologist">Gynacologist</option>
  <option value="ENT_Specialist">ENT Specialist</option>
  <option value="Pediatrics">Pediatrics</option>
</select>
</div>
<br>
  
  
 

   <div class="form-group">
    <label >Email</label>
    <input type="email"  name="email"class="form-control"  placeholder="Enter the Email">
  </div>

  <div class="form-group">
    <label >Mobile Number</label>
    <input type="Number"  name="mob"class="form-control"  placeholder="Enter the Mobile Number">
  </div>
  

  
  

 <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>

</body>
</html>







