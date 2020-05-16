<!DOCTYPE html>
<html>
<head>
  <title>corona</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="connection.php">
  <link rel="stylesheet" type="text/css" href="form.php">

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


   <nav class="navbar navbar-expand-lg nav_style fixed-top text-center">
  <a class="navbar-brand pl-5" href="#">covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
    
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.html">Contact</a>
      </li>
    </ul>
  </div>
</nav>


<section class="corona_update container-fluid">

  <div class="mb-3 mt-5 pt-5">
    <h3 class="text-center text-uppercase">Covid-19 live updates of the India </h3>
  </div>
  
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <tr>
        <th>Country</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>

      <?php

        $data= file_get_contents('https://api.covid19india.org/data.json');

        $coronalive=json_decode($data,true);

        $statecount= count ( $coronalive['statewise']);

          $i=1;
        while($i < $statecount){

          ?>

          <tr>
            <td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
            <td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
            <td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
            <td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
            <td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
            <td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

          </tr>



      <!--    echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
          echo $coronalive['statewise'][$i]['state']."<br>";
          echo $coronalive['statewise'][$i]['confirmed']."<br>";
          echo $coronalive['statewise'][$i]['active']."<br>";
          echo $coronalive['statewise'][$i]['recovered']."<br>";
          echo $coronalive['statewise'][$i]['deaths']."<br>";-->

          <?php

          $i++;

        }

        

      ?>




      
    </table>
    
  </div>



</section>




































<!-----------footer------------------------------------------------------------------->

<footer class="mt-5">
  <div class="footer_style  text-white text-center container-fluid">

    <p>copyright by @maheshzemse</p>
    
  </div>
</footer>

</body>
</html>