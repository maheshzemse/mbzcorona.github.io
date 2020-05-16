<?php
include('connection.php');
session_start();




$sql= "SELECT * FROM doctor";
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
<body style="background-color: lightgray"  >

	<div class="container">
		<a style="float: left;" href="admindashbord.php" class="btn btn-primary mt-4">Back</a>
		<a style="float: right;" href="logout.php" class="btn btn-primary mt-4">Logout</a><br>
		<table class="table mt-5 text-center table-bordered table-hover" >
		<thead>
			<tr>
				<th  scope="col">Name </th>
				<th  scope="col">SPECIALIZATION </th>
				<th  scope="col">EMAIL </th>
				<th  scope="col">MOBILE NO </th>
							
			</tr>
		</thead>

		<?php

			while($row=mysqli_fetch_assoc($res))
			{
				?>

					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['specialization']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['mob']; ?></td>
						



				<?php

			}

				?>


		</table>
	
		</div>

</body>
</html>


