<?php

//include('connection.php');
$db_host = "localhost";
$db_user = "root";
$db_password ="";
$db_name ="corona";


$conn = mysqli_connect($db_host, $db_user, $db_password,$db_name);
if($conn)
{
	//echo "database connection done!!!";




if(isset($_POST['submit']))
{

	  $username=$_POST['username'] ;
	  $mob=$_POST['mob'];
	  $email=$_POST['email'];
	  $textarea=$_POST['textarea'];


	 $query="INSERT INTO  corona_table(username,mob,email,textarea) values('$username','$mob','$email','$textarea')";

	 $data=mysqli_query($conn,$query);

	 if($data)
	 {
		 	header('location:index.html');

	 }
	 else
	 {
	 	echo "<script>alert('data  not inserted')</script>";
	 }
}
}
else
{
		echo "database connection failed!!!";

}








?>
