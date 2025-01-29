<?php
require("db_config.php");
include("header.php");
include("menu.php");
?>

<html>
          <head></head>
          <body>
                    <div id="main_content">
                              <?php
                              echo $_POST["name"] . "<br>";
                              echo $_POST["email"] . "<br>";
                              echo $_POST["subject"] . "<br>";
                              echo $_POST["message"] . "<br>";


                              $conn = new mysqli($servername,$username,$password,$dbName);

                              if($conn->connect_error){
                                        die("Connection failed: " . $conn->connect_error);
                              }

                              echo "Connected successfully";

                              $sql="INSERT INTO user(name,email,subject,message) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["subject"] . "','" . $_POST["message"] . "')";

                              echo $sql;

                              if($conn->query($sql)) {
                                        echo "row inserted successfully!!!";
                              }
                              else{
                                        echo 'there was an error, please try again later!!!';
                              }
                              $conn->close();
                              ?>
          </body>
</html>


<?php
include("footer.php");
?>