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

		

		$query="SELECT * FROM doctor WHERE username='$username' and password='$password'";

			$data=mysqli_query($conn,$query);
		 	$res=mysqli_num_rows($data);

		 if($res==1)
		 {
		 	$_SESSION['username']=$username;
		 	echo"<script>alert('LOGIN SUCCESSFULLY')</script>";

		 	header('location:doctordashbord.php');
		 }
		 else
		 {
		 	echo"<script>alert('Enter the correct Username & Password')</script>";
		 		header('location:index.html');
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
