<?php

include('connection.php');

session_start();

$error="";

if(isset($_POST['submit']))
{

	if($_POST['username']=="" || $_POST['password']=="")

	{
		$error="You must filled username and password...!";

		echo "<script>alert('$error')</script>";
		header('location:index.html');
	}
	else
	{	

		  $username=$_POST['username'];
		  $password=$_POST['password'];

		

		$query="SELECT * FROM patient WHERE username='$username' and password='$password'";

			$data=mysqli_query($conn,$query);
		 	$res=mysqli_num_rows($data);

		 if($res==1)
		 {
		 	$_SESSION['username']=$username;
		 	echo"<script>alert('LOGIN SUCCESSFULLY')</script>";

		 	header('location:dashbord.php');
		 }
		 else
		 {
		 	echo"<script>alert('Enter the correct Username & Password')</script>";
		 		//header('location:index.html');
		 }

		//$row= mysqli_fetch_assoc($data);

	/*	if($row['username']==$username && $row['password']==$password)
		{
			echo"<script>alert('login successfully')</script>";
			
		}

		else
		{
			echo"<script>alert('login Failed,Please Enter the correct Username & Password')</script>";		
		}
		*/

	}
}

?>




<!--

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
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
		<div class="section_header  m-4 text-primary">
			<div style="background-color:#a29bfe" class="section_header text-center m-4 ">
  <h1 style="color: white">Patient Login</h1>

	
</div>
	
<div class="container p-3 ">
  <div class="row  ">
    <div class="col-lg-8 offset-lg-2 lg-12">

    <form method="POST">  
<div class="form-group">
    <label >Username</label>
    <input type="text"  name="username"class="form-control text-uppercase "  placeholder="Enter the Username">
  </div>

<div class="form-group">
    <label >Password</label>
    <input type="Password"  name="password"class="form-control"  placeholder="Enter the Password">
  </div>
  <span style="color: red">	<?php echo "$error" ;   ?></span><br><br>
   	<input type="submit" name="submit" value="LOGIN" class="btn btn-primary">
	</form>

</div>

</body>
</html>

--->





