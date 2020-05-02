<?php
session_start();
include('connection.php');

$x=$_SESSION['username'];

//$edit=$_GET['edit'];
$sql="SELECT * FROM patient WHERE username='$x'";

$data=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
$id=$result['id'];
$username=$result['username'];
$name=$result['name'];
$gender=$result['gender'];
$dob=$result['dob'];
$city=$result['city'];
$mob=$result['mob'];
$email=$result['email'];
$address=$result['address'];








//$res=mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($res);





?>



<!DOCTYPE html>
<html>
<head>
	<title>Rgister Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container ">

<div style="background-color:#a29bfe" class="section_header text-center m-4 ">
  <h1 style="color: white">Patient Details</h1>
	
	
</div>
<div class="text-center text-success">
  <h4>REGISTER</h4>
 <!-- <span style="color: red"> <?php echo "$error";  ?></span><br>  -->
</div>

<div class="container p-3">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 lg-12">
<form method="POST">
      
<div class="form-group">
    <label >Username</label>
    <input  type="text"  name="username"class="form-control "  placeholder="Enter the Username" value="<?php echo $x;?>" >
  </div>
  

  <div class="form-group">
    <label >Name</label>
    <input type="text"  name="name"class="form-control"  placeholder="Enter the Name"value="<?php echo $name;?>">
  </div>

  <label>Gender</label><br>
  <input type="text"  name="gender"class="form-control"  placeholder="Enter the Name"value="<?php echo $gender;?>">

  <div class="form-group">
    <label >Date Of Birth</label>
    <input  type="date"  name="dob"class="form-control"  placeholder="Enter the Date Of Birth"value="<?php echo $dob;?>">
  </div>

  <div class="form-group">
    <label >City</label>
    <input  type="text"  name="city"class="form-control"  placeholder="Enter the Date Of Birth"value="<?php echo $city;?>">
  </div>



   <div class="form-group">
    <label >Email</label>
    <input type="Email"  name="email"class="form-control"  placeholder="Enter the Email"value="<?php echo $email;?>">
  </div>

  <div class="form-group">
    <label >Mobile Number</label>
    <input type="Number"  name="mob"class="form-control"  placeholder="Enter the Mobile Number"value="<?php echo $mob;?>">
  </div>
  

  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address"class="form-control" placeholder="Enter the Address"value="<?php echo $address;?>">
  </div>

  

 <input type="submit" name="submit" value="Update" class="btn btn-primary">
</form>
</div>

</body>
</html>

<?php


if(isset($_POST['submit']))
{
   $nusername=$_POST['username'];
    $npassword=$_POST['password'];
    $nname=$_POST['name'];
    $ngender=$_POST['gender'];
    $ndob=$_POST['dob'];
    $ncity=$_POST['city'];
    $nemail=$_POST['email'];
    $nmob=$_POST['mob'];
    $naddress=$_POST['address'];


  $sql="UPDATE patient SET username='$nusername',name='$nname',gender='$ngender',dob='$ndob',city='$ncity',email='$nemail',mob='$nmob',address='$naddress'  WHERE username='$x'";

  $res=mysqli_query($conn,$sql);

  if($res)
  {
    //echo"<script>alert('Update Successfully!!!')</script>";
     header('location:dashbord.php');
  }

  else
  {
    echo "Unalble to update data!!!";
  }




}






?>







