<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Project 2</title>
    <style>
    body {
      background-image:url('night.jpeg');
      background-repeat:no-repeat; 
      background-size: cover;
  
      font-family: "Affogato Regular", sans-serif;
      color: #1A1A1C;
      text-align: center;
     
    }
    form {
      width: 450px;
      margin: 10% auto;
    }
    .header {
      padding: 2%;
      font-size: 35px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 5px;
    }
    .description {
      font-size: 20px;
      letter-spacing: 1px;
      line-height: 1.3em;
      margin: -2px 0 45px;
    }
    .input {
      display: flex;
      align-items: center;
    }
    .button {
      height: 44px;
      border: none;
    }
    #email {
      width: 70%;
      background: #FDFCFB;
      font-family: inherit;
      color: #737373;
      letter-spacing: 1px;
      text-indent: 5%;
      border-radius: 5px 0 0 5px;
    }
    #submit {
      width: 60%;
      height: 46px;
      background:#151313;
      font-family: inherit;
      
      color: #FDFCFB;
      letter-spacing: 1px;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      transition: background .3s ease-in-out;
    }
    #submit:hover {
      background: #d45d7d;
    }
    input:focus {
      outline: none;
      outline: 2px solid #E86C8D;
      box-shadow: 0 0 2px #E86C8D;
    }
</style>
</head>

<body>


    <iframe src="menu.html" width="100%" style="height: 165px; border:0; "></iframe>

    <!-- End Nav -->

    

      <div class="description">
        <p>Please enter the name for your DB </p>
      </div>
    <form  action="createdb.php" method="post">
    <div class="input">
      <input type="text"  class="button" id="email" name="db_name" placeholder="DB name">
      <input type="submit" class="button" id="submit" value="Set DB name">
  </div>
    </form>
  </body>
</html>