<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
    body {
     background-image:url('night.jpeg');
      background-repeat:no-repeat; 
      background-size: cover;
  
      font-family: "Affogato Regular", sans-serif;
      color: #1A1A1C;
      text-align: left; 
    }
    .header {
      padding: 1%;
      font-size: 35px;
      font-weight: bold;
      text-transform: capitalize;
      letter-spacing: 5px;
      text-align: left;
    }
</style>
<body>
  <iframe src="menu.html" width="100%" style="height: 300px; border:0; "></iframe>
  <div class="header">
 <!-- Create database -->
 <?php
  session_start();
  $servername = $_SESSION['servername'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
  $conn = mysqli_connect($servername, $username, $password) or die(mysqli_error());
  $dbname = $_POST['db_name'];
  $_SESSION['dbname'] = $dbname;
  $sql = "CREATE DATABASE $dbname";
  if(mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    echo "\n";
    echo $dbname;
  }else {
    echo "Error creating database: " . mysqli_error($conn);
  }
 ?>





  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>