<?php




$db_host = "localhost";
$db_user = "root";
$db_password ="";
$db_name ="corona";


$conn = mysqli_connect($db_host, $db_user, $db_password,$db_name);

if($conn)
{
	echo "database connection done!!!";

}
else
{
		echo "database connection failed!!!";

}
