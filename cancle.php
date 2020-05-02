<?php

include('connection.php');




$id=$_GET['tid'];

$sql= "DELETE FROM appointment WHERE id='$id'";

$res=mysqli_query($conn,$sql);

if($res)
{
	header('location:view.php');
}
else
{
	echo "Unable to delete";
}












?>