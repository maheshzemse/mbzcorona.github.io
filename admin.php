<?php
include('connection.php');
session_start();

if(isset($_POST['submit']))
{
	 $u=$_POST['username'];
	 $p=$_POST['password'];


$query="SELECT * FROM admin WHERE username='$u' and password='$p'";

			$data=mysqli_query($conn,$query);
		
		 	$res=mysqli_num_rows($data);

		 if($res==1)
		 {
		 	$_SESSION['username']=$u;
		 	echo"<script>alert('LOGIN SUCCESSFULLY')</script>";

		 	header('location:admindashbord.php');
		 }
		 else
		 {
		 		echo"<script>alert('Enter the correct Username & Password')</script>";
		 		//header('location:index.html');
		 	//$err="Enter the correct Username & Password";

		 }






}


?>