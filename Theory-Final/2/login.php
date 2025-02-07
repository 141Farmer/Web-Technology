<!DOCTYPE html>
<html>
          <head>
                    <title>Login</title>
          </head>
          <body>
                    <div>
                              <form method="POST" action="login.php">
                                        <label for="username">Username:</label><br><br>
                                        <input type="text" id="username" name="username" placeholder="Enter Username" required><br><br>

                                        <label for="password">Password:</label><br><br>
                                        <input type="password" id="password" name="password" placeholder="Enter Password" required><br><br>

                                        <input type="checkbox" id="check" name="check"> Remember me <br><br>

                                        <button type="submit">Login</button>
                              </form>

                              <?php
                              if(isset($_GET["error"])){
                                        echo "<p style='color:red;'>Invalid Credentials</p>";
                              }
                              ?>
                    </div>
          </body>
</html>


<?php
session_start();

$hostname="localhost";
$username="root";
$password="";
$database="userinfo";

$conn=new mysqli($hostname,$username,$password,$database);

if($conn->connect_error){
          die("Connection error: ".$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
          $name=$_POST["username"];
          $pass=$_POST["password"];
      
          $sql="SELECT * FROM `user` WHERE `username`='$name' AND `password`='$pass'";
          $result=$conn->query($sql);
      
          if($result->num_rows>0){
                    $user=$result->fetch_assoc();
                    $_SESSION["user_id"]=$user["ID"];
              
                    if (isset($_POST["check"])){
                              setcookie("remember_user",$user["ID"],time()+86400,"/");
                    }
      
                    header("Location: index.php");
                    exit();
          } 
          else{
                    $error="Invalid credentials!";
          }
}
      
$conn->close();
?>

