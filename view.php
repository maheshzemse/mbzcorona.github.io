<?php
include('connection.php');
session_start();

$x=$_SESSION['username'];


$sql= "SELECT * FROM appointment where username='$x' ";
		$res=mysqli_query($conn,$sql);
		
		$n=mysqli_num_rows($res);

		if($n==0)
		{
			echo"<script>alert('No records to display')</script>";
		}
		else
			{
				echo "";

			}






?>


<!DOCTYPE html>
<html>
<head>
	<title>view</title>
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
		<a style="float: left;" href="dashbord.php" class="btn btn-primary mt-4">Back</a>
		<a style="float: right;" href="logout.php" class="btn btn-primary mt-4">Logout</a><br>
		<table class="table mt-5 text-center">
		<thead>
			<tr>
				<th  scope="col">Username </th>
				<th  scope="col">Date </th>
				<th  scope="col">Time Slot </th>
				<th  scope="col">specialization </th>
				<th  scope="col">Cancle Appointment </th>

			</tr>
		</thead>

		<?php

			while($row=mysqli_fetch_assoc($res))
			{
				?>

					<tr>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['timeslot']; ?></td>
						<td><?php echo $row['specialization']; ?></td>
						<td><a href="cancle.php ?tid= <?php echo $row['id'] ?>">Cancle</a></td>

				<?php

			}

				?>


		</table>
	
		</div>

</body>
</html>


