<?php
session_start();

include('connection.php');


$sql="SELECT * FROM appointment ";

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
	<title>Viewpatient</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 

</head>
<body style="background-color: lightgray">

	<div class="container">

	<table class="table mt-5 text-center table-bordered table-hover" >
		<thead>
			<tr>
				<th  scope="col">username </th>
				<th  scope="col">date </th>
				<th  scope="col">timeslot </th>
				<th  scope="col">specialization </th>

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
						

				<?php

			}

				?>












	</table>
</div>




























</body>
</html>