<?php
include('connection.php');



$error="";


if(isset($_POST['submit']))
{
      if($_POST['username']=="" || $_POST['password']=="" || $_POST['name']=="" || $_POST['gender']=="" || $_POST['dob']=="" || $_POST['email']=="" || $_POST['mob']=="" || $_POST['address']=="")

	{
		$error="You must filled all data...!";
    echo "<script>alert('$error') </script";
	}
	else
  {

    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
    $address=$_POST['address'];

   
    $sql="INSERT INTO patient (username,password,name,gender,dob,city,email,mob,address) VALUES('$username','$password','$name','$gender','$dob','$city','$email','$mob','$address')";

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
  <h1 style="color: white">Patient Details</h1>
	
	
</div>
<div class="text-center text-success">
  <h4>REGISTER</h4>
 <!-- <span style="color: red"> <?php echo "$error";  ?></span><br>  -->
</div>

<div class="container p-3">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 lg-12">
<form method="POST">
      
<div class="form-group">
    <label >Username</label>
    <input  type="text"  name="username"class="form-control text-uppercase"  placeholder="Enter the Username">
  </div>

<div class="form-group">
    <label >Password</label>
    <input type="Password"  name="password"class="form-control"  placeholder="Enter the Password">
  </div>

  <div class="form-group">
    <label >Name</label>
    <input type="text"  name="name"class="form-control text-uppercase"  placeholder="Enter the Name">
  </div>

  <label>Gender</label><br>
  <label class="radio-inline ml-4"><input type="radio" name="gender" value="Male" checked>Male</label><br>
  <label class="radio-inline ml-4"><input type="radio" name="gender" value="Female">Female</label><br>
  <label class="radio-inline ml-4"><input type="radio" name="gender" value="Transgender">Transgender</label>

  <div class="form-group">
    <label >Date Of Birth</label>
    <input  type="date"  name="dob"class="form-control"  placeholder="Enter the Date Of Birth">
  </div>

  <div class="form-group">
    <label >City</label>
    <input  type="text"  name="city"class="form-control text-uppercase"  placeholder="Enter the city">
  </div>



   <div class="form-group">
    <label >Email</label>
    <input type="Email"  name="email"class="form-control"  placeholder="Enter the Email">
  </div>

  <div class="form-group">
    <label >Mobile Number</label>
    <input type="Number"  name="mob"class="form-control"  placeholder="Enter the Mobile Number">
  </div>
  

  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address"class="form-control text-uppercase" placeholder="Enter the Address">
  </div>

  

 <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>

</body>
</html>









