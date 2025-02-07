<?php
session_start();

if(!isset($_SESSION["user_id"]) && !isset($_COOKIE["remember-user"])){
          header("Location: login.php");
          exit();
}

if(!isset($_SESSION["user_id"]) && isset(($_COOKIE["remember-user"]))){
          $_SESSION["user_id"]=$_COOKIE["remember-user"];
}

?>

<html>
          <head>
                    <title>index</title>
          </head>
          <body>
                    <h1 align="center">Welcome Bob!</h1>
                    <p align="center">
                              <a href="logout.php">Logout</a>
                    </p>
          </body>
</html>