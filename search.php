<?php
include('connection.php');
session_start();

if(isset($_POST['submit']))
{

	 $specialization=$_POST['specialization'];

	 $sql= "SELECT * FROM doctor where specialization='$specialization'";

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
}








?>


<!DOCTYPE html>
<html>
<head>
	<title>Doctor Search</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 
</head>
<body>


<div class="container">  
	<table class="table mt-5 text-center table-bordered table-hover table-secondary">
		<thead>
			<tr>
				<th  scope="col"> DOCTOR NAME </th>
				<th  scope="col">EMAIL </th>
				<th  scope="col">MOBILE NUMBER</th>
				
			</tr>
		</thead>

		<?php

			while($row=mysqli_fetch_assoc($res))
			{
				?>

					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['mob']; ?></td>
						
			<?php

			}

			?>

		</table>
</div>
























</body>
</html>