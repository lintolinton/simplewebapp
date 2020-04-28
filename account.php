<?php

// PHP code, saves form data into variables and displays it
$name = $_POST['name'];
$address = $_POST['address'];
$username = $_POST['username'];
$hobby = $_POST['hobby'];
$email = $_POST['email'];
$pass = $_POST['pass'];

/* These are database VALUES. The data is saved into a database

$host = "127.0.0.1";
$user = "root";
$database = "clint";
$password = "";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$mysqli->query("INSERT INTO users (name, address, email, password) VALUES('$name', '$address', '$email', '$pass')");

*/

 ?>

<!-- HTML content -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">

    <title>Simple login app</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?=$username?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Info</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More info
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search my info</button>
      </form>
    </div>
  </nav>
  <div class="alert alert-primary" role="alert">
    Welcome to my page
  </div>
  <div class="card text-center">
    <div class="card-header">
      About <?=$username?>
    </div>
    <div class="card-body">
      <h5 class="card-title">Name: <?=$name?></h5>
      <h5 class="card-title">Address: <?=$address?></h5>
      <p class="card-text"><?=$hobby?></p>
      <a href="index.php" class="btn btn-primary">Logout</a>
    </div>
    <div class="card-footer text-muted">
      A few seconds ago
    </div>
  </div>

  </body>
  </html>
